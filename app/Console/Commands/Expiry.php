<?php

namespace App\Console\Commands;

use App\User;
use App\Album;
use Carbon\Carbon;
use App\Mail\ExpiryAlert;
use App\Mail\SubendAlert;
use App\Mail\SuspendAlert;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Expiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expiry alert';

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
      $user = User::where('exp_date','=',Carbon::now()->toDateString())->get();    

        foreach($user as $users)
        {
            User::where('exp_date','=',Carbon::now()->toDateString())
                ->update([
                'status' => '0',
            ]);
            Profile::where('userid','=',$user->id)->update([
                'status' => '0',
            ]);
            Album::where('user_id','=',$users->id)->update([
                'status' => '0',
            ]);
            
            $email = $users->email;
            $details = $users;           
            Mail::to($email)->send(new ExpiryAlert($details));            
            $this->info('Account expiry alert has been sent successfully');
        }           
    }
}
