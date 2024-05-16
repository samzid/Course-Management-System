<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\DecidedCourse;
use Illuminate\Support\Facades\DB;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        \App\Console\Commands\UpdateTableDataCommand::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */




     protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            DB::table('DecidedCourse')->delete();
        })->everyMinute();
    }



    // protected function schedule(Schedule $schedule)
    // {
    //     $schedule->call(function () {
    //         // Your task logic here
    //         DecidedCourse::schedule();
    //     })->everyMinute(); // Example: run the task daily
    // }







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
