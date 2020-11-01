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
        Commands\task::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        
        
        // Command perform at 9 and 15:00(5pm) from Monday to Friday with timezone Karachi on one server,
        // all the comands executed in background, even if laravel is in maintanance mode and send output to
        //email. Execute task if when function is true. (Truth test constraints)
        $schedule->command('task:test') 
                ->twiceDaily('09:00'. '15:00')
                ->weekdays()
                ->timezone('Karachi/Islamabad')
                ->onOneServer()
                ->runInBackground()
                ->evenInMaintenanceMode()
                ->sendOuputTo($Test)
                ->sendOutputToEmail('arslanzia017@gmail.com')
                ->emailOutputOnFailure('arslanzia017@gmail.com')
                ->when(function(){
                    return true;
                });
        
        
        // Command perform at 9 and 15:00(5pm) from Monday to Friday with timezone Karachi on one server,
        // all the comands executed in background, even if laravel is in maintanance mode and send output to
        //email.
        $schedule->command('task:test') 
                ->twiceDaily('09:00'. '15:00')
                ->weekdays()
                ->timezone('Karachi/Islamabad')
                ->onOneServer()
                ->runInBackground()
                ->evenInMaintenanceMode()
                ->sendOuputTo($Test)
                ->sendOutputToEmail('arslanzia017@gmail.com')
                ->emailOutputOnFailure('arslanzia017@gmail.com');

        
        // This schedule will perform command daily at 3pm on Monday and Friday
        $schedule->command('task:test') 
                ->dailyAt('15:00')
                ->days(1, 5)  //Monday and Friday
                ->between('11:00', '16:00');



        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
