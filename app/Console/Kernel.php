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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
<<<<<<< HEAD
     * Register the commands for the application.
=======
     * Register the Closure based commands for the application.
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
     *
     * @return void
     */
    protected function commands()
    {
<<<<<<< HEAD
        $this->load(__DIR__.'/Commands');

=======
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
        require base_path('routes/console.php');
    }
}
