<?php

namespace App\Http\Controllers;

use Wabel\Zoho\CRM\ZohoClient;
use Wabel\Zoho\CRM\AbstractZohoDao;
use Illuminate\Http\Request;

// loading facades
use Auth;
use Config;
use Google;

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
     * Get list all modules
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
     * Get the homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        return view('zoho.dashboard');
        $response = $this->call_zoho_api('Leads', 'getRecords');
        $response = $this->call_zoho_api('Leads', 'getRecords');
        $response = $this->call_zoho_api('Leads', 'getRecords');
        return $response;
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
            // @todo: redirect with notification
        }
        $user->save();
        return redirect()->action('ZohoController@index');
    }

    /**
     * List all fields in a module
     * @param : $[name] [<description>]
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
     * @param : $[name] [<description>]
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
     * Map list of values to Google SQL
     * @param : $request
     * @return \Illuminate\Http\Response
     */
    public function map(Request $request)
    {
        
        foreach ($request->input('checkbox') as $key=>$box) {
            if ($box == "1") {
                return $request->input('label')[$key];
            }
        }
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
}
