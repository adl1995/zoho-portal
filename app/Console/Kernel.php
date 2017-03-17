<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use \App\ZohoModuleField;
use \App\User;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // \Zoho-portal\Console\Commands\Inspire::class,
    ];

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
     * Verify e-mail for all users in the database
     *
     * @return \Illuminate\Http\Response
     */
    
    public function verify()
    {
        $record = $this->call_zoho_api('Contacts', 'getRecords');
        $record_id = $record['response']['result']['Contacts']['row']['FL'][0]['content'];
        
        $users = User::all();
        foreach ($users as $user) {
            $response = $this->call_email_api($user->email);
            if (isset($response)) {
                if ($response['status'] == 'passed') {
                    $user->email_verified = 1;
                }
                elseif ($response['status'] == 'failed') {
                    $user->email_verified = 0;
                    // @todo: fix API call
                    $xml = "
                        <Contacts>
                        <row no=\"1\">
                        <FL val=\"Email Opt Out\">true</FL>
                        <FL val=\"Description\">This email failed validation</FL>
                        </row>
                        </Contacts>";
                    return $this->call_zoho_api_add('Contacts', 'updateRecords', $record_id, htmlspecialchars($xml));
                }
            }
            else {
                return view('zoho.home')->with('error', 'API connection failure');
            }

            $user->save();
            return redirect()->action('ZohoController@index');
        }
    }

    /**
     * Verify e-mail for all newly added users in the database
     *
     * @return \Illuminate\Http\Response
     */

    public function verify_nightly() 
    {
        $users = User::where('is_verified', 0)->get();
        // @todo verify selected users
    }

    /**
     * Define the application's command schedule.
     * Update client data every 24 hours
     * Verify client email addresses every 4 months
     * Verify newly added client every night
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function () {
            $this->sync();
        })->daily();

        $schedule->call(function () {
            $this->verify();
        })->quarterly();

        $schedule->call(function () {
            $this->verify_nightly();
        })->dailyAt('20:00');;

    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
