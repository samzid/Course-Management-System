<?php

namespace App\Console\Commands;

use App\Models\DecidedCourse;
use Illuminate\Console\Command;
use DB;

class UpdateTableDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */




     public function handle()
{
    // Fetch fresh data for the table
    $freshData = DecidedCourse::all();

    // Perform necessary operations to update the table with fresh data
    // For example:
    DB::table('DecidedCourse')->truncate();
    DB::table('DecidedCourse')->insert($freshData->toArray());

    // Output a success message
    $this->info('Table data updated successfully.');
}




}
