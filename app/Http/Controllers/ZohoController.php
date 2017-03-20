<?php

namespace App\Http\Controllers;

use Wabel\Zoho\CRM\ZohoClient;
use Wabel\Zoho\CRM\AbstractZohoDao;
use Illuminate\Http\Request;
use App\ZohoModuleField;
use App\User;

// loading facades
use Auth;
use Config;
use Google;
use Charts;

class ZohoController extends Controller
{
    /**
     * Create a new controller instance
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Call the Zoho CRM API; for retreiving data
     * @param : $module, $method
     * @return response
     */
    
    public function call_zoho_api($module, $method)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://crm.zoho.com/crm/private/json/'.$module.'/'.$method.'?authtoken='.config('app.ZOHO_KEY').'&scope=crmapi');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, '50');

        $content = curl_exec($ch);
        curl_close($ch);

        return json_decode($content, TRUE);
    }

    /**
     * Call the Zoho CRM API; for adding data
     * @param : $module, $method, $record_id, $XML_data
     * @return response
     */
    
    public function call_zoho_api_add($module, $method, $record_id, $XML_data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://crm.zoho.com/crm/private/xml/'.$module.'/'.$method.'?authtoken='.config('app.ZOHO_KEY').'&scope=crmapi&newFormat=1&id='.$record_id.'&xmlData='.$XML_data);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, '50');

        $content = curl_exec($ch);
        curl_close($ch);

        dd($content);
        return json_decode($content, TRUE);
    }    

    /**
     * Call the email verifier API 
     * @param : $email
     * @return response
     */
    
    public function call_email_api($email)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://emailverifierapi.com/v2/?apiKey='.config('app.EMAIL_VERIFIER').'&email='.urlencode($email));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, '50');

        $content = curl_exec($ch);
        curl_close($ch);

        return json_decode($content, TRUE);
    }

    /**
     * Get list of all modules
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $response = $this->call_zoho_api('Info', 'getModules');
        if (isset($response['response']['result']['row'])) {
            $rows = $response['response']['result']['row'];
            return view('zoho.home', compact('rows'));
        }
        else {
            return view('zoho.home')->with('error', 'Data not found / Server connection failure');
        }
    }

    /**
     * List all fields in a module
     * @param : $module
     * @return \Illuminate\Http\Response
     */
    
    public function fields($module)
    {
        $response = $this->call_zoho_api($module, 'getFields');
        if (isset($response[$module]['section'])) {
            $rows = $response[$module]['section'][0]['FL'];
            return view('zoho.modules.fields', compact('rows', 'module'));
        }
        else
            return view('zoho.modules.fields')->with('error', 'No fields found');
    }

    /**
     * List all values belonging to a field
     * @param :
     * @return \Illuminate\Http\Response
     * // @todo: add slug
     */
    
    public function fieldValues()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://crm.zoho.com/crm/private/xml/Leads/getSearchRecordsByPDC?authtoken=". config('app.ZOHO_KEY') ."&scope=crmapi");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, '50');

        $content = curl_exec($ch);
        return $content;
        curl_close($ch);
    }

    /**
     * Get the homepage / dashboard
     *
     * @return \Illuminate\Http\Response
     */
    
    public function home(Request $request)
    {
        $record = $this->call_zoho_api('Contacts', 'getRecords');
        $contacts = $record['response']['result']['Contacts']['row'];
        $synced_contacts_count = count($contacts);
        $synced_contacts_times = [];
        foreach ($contacts as $contact) {
            foreach ($contact['FL'] as $contact_details) {
                if ($contact_details['val'] == "Last Activity Time") {
                    array_push($synced_contacts_times, $contact_details['content']);
                }
            }
        }

        $count_verified_emails = count(User::where('email_verified', 1)->get());
        $count_unverified_emails = count(User::where('email_verified', 0)->get());

        $email_activity_chart = Charts::create('pie', 'highcharts')
          ->title('User Email Details')
          ->labels(['Verified', 'Unverified'])
          ->values([$count_verified_emails, $count_unverified_emails])
          ->dimensions(1000,500)
          ->responsive(true);

        $user_activity_chart = Charts::create('pie', 'highcharts')
          ->title('User Activity Details')
          ->labels(['Verified', 'Unverified'])
          ->values([$count_verified_emails, $count_unverified_emails])
          ->dimensions(1000,500)
          ->responsive(true);

        $fields = ZohoModuleField::where('user_id', Auth::user()->id)->get();
        return view('zoho.dashboard', compact('email_activity_chart', 'user_activity_chart', 'synced_contacts_count', 'synced_contacts_times', 'fields'));
    }

    /**
     * Integrations through email verification
     *
     * @return \Illuminate\Http\Response
     */
    
    public function integrations()
    {
        return view('zoho.integrations');
    }

    /**
     * Verify an e-mail
     *
     * @return \Illuminate\Http\Response
     */
    
    public function verify(Request $request)
    {
        $record = $this->call_zoho_api('Contacts', 'getRecords');
        $record_id = $record['response']['result']['Contacts']['row']['FL'][0]['content'];
        
        $user = Auth::user();
        $response = $this->call_email_api($user->email);
        if (isset($response)) {
            if ($response['status'] == 'passed') {
                $user->email_verified = 1;
            }
            elseif ($response['status'] == 'failed') {
                $user->email_verified = 0;
                // @todo: fix API call
                if ($request->input('opt_out_fail')) {
                    $xml = "
                        <Contacts>
                        <row no=\"1\">
                        <FL val=\"Email Opt Out\">true</FL>
                        </row>
                        </Contacts>";
                    return $this->call_zoho_api_add('Contacts', 'updateRecords', $record_id, htmlspecialchars($xml));
                }
                if ($request->input('add_note_fail')) {
                    $xml = "
                        <Contacts>
                        <row no=\"1\">
                        <FL val=\"Description\">This email failed validation</FL>
                        </row>
                        </Contacts>";
                    return $this->call_zoho_api_add('Contacts', 'updateRecords', $record_id, htmlspecialchars($xml));
                }
            }
        }
        else {
            return view('zoho.home')->with('error', 'API connection failure');
        }

        $user->save();
        return redirect()->action('ZohoController@index');
    }

    /**
     * Get records
     * @param : $[name] [<description>]
     * @return \Illuminate\Http\Response
     * // @todo: add slug
     */
    
    public function records()
    {
        $response = $this->call_zoho_api('Accounts', 'getRecords');
        return $response;
    }

    /**
     * Store field values in local database and sync them to Google SQL
     * @param : $request
     * @return \Illuminate\Http\Response
     */
    
    public function map(Request $request)
    {
        if (Auth::user()->is_suspended == 0) {
            $response = $this->call_zoho_api('Info', 'getModules');

            $zoho_id = null;
            foreach ($response['response']['result']['row'] as $module_row)
                if ($module_row['pl'] == $request->input('module_name'))
                    $zoho_id = $module_row['id'];

            foreach ($request->input('checkbox') as $key=>$box) {
                if ($box == "1") {
                    ZohoModuleField::create([
                        'user_id' => Auth::user()->id,
                        'module' => $request->input('module_name'),
                        'zoho_id' => $zoho_id,
                        'label' => $request->input('label')[$key],
                        'customfield' => $request->input('customfield')[$key],
                        'maxlength' => $request->input('maxlength')[$key],
                        'isreadonly' => $request->input('isreadonly')[$key],
                        'type' => $request->input('type')[$key],
                        'required' => $request->input('req')[$key],

                    ]);
                }
            }
        }
        else
            return 'Account suspend. Please contact Administrator';
            
        // @todo: map these fields to Google SQL
        // $googleClient = Google::getClient(config('google'));
        // dd($googleClient);
        // $client = new \PulkitJalan\Google\Client(config('google'));
        $client = new \PulkitJalan\Google\Client(config('google'));

        // returns instance of \Google_Service_Storage
        $storage = $client->make('storage');
        dd($storage);
        // dd($client);
        // $googleClient = $client->getClient();
        // $client = new Google_Client();

        return $request->all();
    }

    /**
     * Sync values with Google SQL
     *
     * @return \Illuminate\Http\Response
     */
    
    public function sync()
    {
        echo "string";
        $rows = ZohoModuleField::all();
        return $rows;
    }

    /**
     * Create a new Zoho client
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $request)
    {
        $zoho = new Zoho\CRM\Client('MY_ZOHO_AUTH_TOKEN');

        // Use its supported modules to make easy requests...
        $one_lead = $zoho->leads->getById('1212717324723478324');
        $many_leads = $zoho->leads->getByIds(['8734873457834574028', '3274736297894375750']);
        $admins = $zoho->users->getAdmins();
    }

    /**
     * Update the Zoho client
     *
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request)
    {
        $zoho = new Zoho\CRM\Client('MY_ZOHO_AUTH_TOKEN');

        // Use its supported modules to make easy requests...
        $one_lead = $zoho->leads->getById('1212717324723478324');
        $many_leads = $zoho->leads->getByIds(['8734873457834574028', '3274736297894375750']);
        $admins = $zoho->users->getAdmins();
    }


    /**
     * Remove a Zoho client
     *
     * @return \Illuminate\Http\Response
     */
    
    public function delete(Request $request)
    {
        $zoho = new Zoho\CRM\Client('MY_ZOHO_AUTH_TOKEN');

        // Use its supported modules to make easy requests...
        $one_lead = $zoho->leads->getById('1212717324723478324');
        $many_leads = $zoho->leads->getByIds(['8734873457834574028', '3274736297894375750']);
        $admins = $zoho->users->getAdmins();
    }

    /**
     * list a module's field
     *
     * @return \Illuminate\Http\Response
     */
    
    public function moduleFields(Request $request)
    {
        $zoho = new Zoho\CRM\Client('MY_ZOHO_AUTH_TOKEN');

        // Use its supported modules to make easy requests...
        $one_lead = $zoho->leads->getById('1212717324723478324');
        $many_leads = $zoho->leads->getByIds(['8734873457834574028', '3274736297894375750']);
        $admins = $zoho->users->getAdmins();
    }

    /**
     * Testing the charts module
     *
     * @return \Illuminate\Http\Response
     */
    
    public function chart(Request $request)
    {
        $count_verified_emails = count(User::where('email_verified', 1)->get());
        $count_unverified_emails = count(User::where('email_verified', 0)->get());

        $email_activity_chart = Charts::create('pie', 'highcharts')
          ->title('User Email Details')
          ->labels(['Verified', 'Unverified'])
          ->values([$count_verified_emails, $count_unverified_emails])
          ->dimensions(1000,500)
          ->responsive(true);

        $user_activity_chart = Charts::create('pie', 'highcharts')
          ->title('User asdsadEmail Details')
          ->labels(['Verified', 'Unverified'])
          ->values([$count_verified_emails, $count_unverified_emails])
          ->dimensions(1000,500)
          ->responsive(true);

        return view('zoho.dashboard', compact('email_activity_chart', 'user_activity_chart'));
    }
}
