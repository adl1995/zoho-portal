<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\syncClientData::class
    ];

    /**
     * Define the application's command schedule.
     * Update client data every 24 hours
     * Verify client email addresses every 4 months
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('App\Http\Controllers\ZohoController@sync')
                 ->daily();

        // $schedule->command('App\Http\Controllers\ZohoController@verify')
        //          ->quarterly();
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
