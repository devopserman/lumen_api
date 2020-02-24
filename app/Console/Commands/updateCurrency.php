<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Currency;
use Exception;

class updateCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency_update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update currency';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $cyrrency = new Currency();
            $cyrrency->updateCyrrency();
            $this->info("Updated done");
        } catch (Exception $e) {
            //$this->error("Updated failure");
            $this->$e;
        }
    }
}
