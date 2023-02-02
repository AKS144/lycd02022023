<?php

namespace App\Console\Commands;

use App\User;
use Carbon\Carbon;
use App\Mail\SuspendAlert;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Suspend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Suspend';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Account suspended successfully';

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
        $user = User::where('suspend_date','=',Carbon::now()->toDateString())->get();
        User::where('suspend_date','=',Carbon::now()->toDateString())->update(['status' => 0]);
        
        foreach($user as $users)
        {
            $email = $users->email;
            $details = $users;
            Mail::to($email)->send(new SuspendAlert($details));
            $this->info('Account has been suspened successfully');
        }
    }
}
