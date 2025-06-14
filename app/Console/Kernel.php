<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('send:remindermail')->hourly();
        /* #$schedule->command('send:inscriptionmail')->weeklyOn(1, '12:01');
        #$schedule->command('send:inscriptionmail')->weeklyOn(1, '13:01');
        #$schedule->command('send:inscriptionmail')->weeklyOn(1, '14:01');
        #$schedule->command('send:inscriptionmail')->weeklyOn(1, '15:01'); */
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
