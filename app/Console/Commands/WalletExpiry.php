<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WalletExpiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'WalletExpiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Wallet Expire Alert';

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
        DB::table('wallets')->where('exp_date','=',Carbon::now()->toDateString())->update([
            'amount' => 0,
        ]);
    }
}
