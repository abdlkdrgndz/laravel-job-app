<?php

namespace App\Console\Commands;

use App\Jobs\UpdateStatusProcess;
use Illuminate\Console\Command;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:updater';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kayıtlar güncellendi.';

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
        UpdateStatusProcess::dispatchNow();
    }
}
