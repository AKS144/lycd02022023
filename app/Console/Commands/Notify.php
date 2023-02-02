<?php

namespace App\Console\Commands;

use App\User;
use Carbon\Carbon;
use App\Mail\NotifyAlert;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Subscription ending alert';

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
        $user = User::where('notify_date','=',Carbon::now()->toDateString())->get();
        foreach($user as $users)
        {
            $email = $users->email;
            $details = $users;
            Mail::to($email)->send(new NotifyAlert($details));
            $this->info('Subscription is going to end soon');
        }
    }
}
