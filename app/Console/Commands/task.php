<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class task extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will perform a task schedualing';

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
     * @return mixed
     */
    public function handle()
    {   
        
        
        \Log::info("Schedule is working fine!");
         
        $this->info('Successfully sent');
        
    }
}
