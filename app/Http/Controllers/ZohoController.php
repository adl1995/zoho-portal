<?php

namespace App\Http\Controllers;

use Wabel\Zoho\CRM\ZohoClient;
use Wabel\Zoho\CRM\AbstractZohoDao;
use Illuminate\Http\Request;
use Config;

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

        return $content;
    }

    /**
     * Get list of all modules
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = $this->call_api('Info', 'getModules');
        $response = json_decode($response, TRUE);
        if (isset($response['response']['result']['row'])) {
            $rows = $response['response']['result']['row'];
            return view('zoho.home', compact('rows'));
        }
        else {
            // @todo: show error message
        }
    }

    /**
     * List all modules Zoho
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $zoho = new Zoho\CRM\Client(config('app.ZOHO_KEY'));
        return $zoho;
        // Use its supported modules to make easy requests...
        $one_lead = $zoho->leads->getById('1212717324723478324');
        $many_leads = $zoho->leads->getByIds(['8734873457834574028', '3274736297894375750']);
        $admins = $zoho->users->getAdmins();
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
