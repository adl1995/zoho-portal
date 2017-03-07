<?php

namespace App\Http\Controllers;

use Wabel\Zoho\CRM\ZohoClient;
use Wabel\Zoho\CRM\AbstractZohoDao;
use Illuminate\Http\Request;
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
     * Call the Zoho CRM API 
     * @param : $type, $method
     * @return void
     */
    
    public function call_api($type, $method)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://crm.zoho.com/crm/private/json/'.$type.'/'.$method.'?authtoken='.config('app.ZOHO_KEY').'&scope=crmapi');

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
        $response = $this->call_api('Info', 'getModules');
        
        if (isset($response['response']['result']['row'])) {
            $rows = $response['response']['result']['row'];
            return view('zoho.home', compact('rows'));
        }
        else {
            // @todo: show error message
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
        $response = $this->call_api('Leads', 'getRecords');
        $response = $this->call_api('Leads', 'getRecords');
        $response = $this->call_api('Leads', 'getRecords');
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
     * List all fields in a module
     * @param : $[name] [<description>]
     * @return \Illuminate\Http\Response
     */
    public function fields($module)
    {
        $response = $this->call_api($module, 'getFields');
        if (isset($response[$module]['section'])) {
            $rows = $response[$module]['section'][0]['FL'];
            return view('zoho.modules.fields', compact('rows', 'module'));
        }
        else
            return 'No fields found';            
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
        $response = $this->call_api('Accounts', 'getRecords');
        return $response;
    }

    /**
     * Map list of values to Google SQL
     * @param : $[name] [<description>]
     * @return \Illuminate\Http\Response
     * // @todo: receive values through form
     */
    public function map(Request $request)
    {
        dd($googleClient = Google::getClient());
        $client = new PulkitJalan\Google\Client(config('google'));
        $googleClient = $client->getClient();
        $client = new Google_Client();

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
    public function module_fields(Request $request)
    {
        $zoho = new Zoho\CRM\Client('MY_ZOHO_AUTH_TOKEN');

        // Use its supported modules to make easy requests...
        $one_lead = $zoho->leads->getById('1212717324723478324');
        $many_leads = $zoho->leads->getByIds(['8734873457834574028', '3274736297894375750']);
        $admins = $zoho->users->getAdmins();
    }



}
