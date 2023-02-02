<?php

namespace App\Http\Controllers\Artist;

use App\JobApply;
use App\Job;
use App\Models\Quotes;
use Carbon\Carbon;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\TaskComplete;
use Illuminate\Support\Facades\Notification;
use App\User;

use Illuminate\Support\Facades\Auth;

class JobApplyController extends Controller
{

    public function index()
    {

    }

    //Note: This was add on later stage so no changes made
    public function jobstore(Request $request, Job $job)
    {
        $this->validate($request, array(
            'job_id'=>'required',
            'artist_id' =>'required',
        ));
               
        $status = JobApply::where('artist_id',Auth::user()->id)
                            ->where('job_id',$job->id)
                            ->first();
               
            if(isset($status->job_id) and isset($request->artist_id))
            {               
                //return redirect()->back();                  
               return redirect()->back()->with('info','Already applied.');     
            }
            else
            {    
                $jobapply                =      new JobApply();
                $jobapply->job_id        =      $request->job_id;
                $jobapply->artist_id     =      $request->artist_id;
                $jobapply->artist_name   =      $request->artist_name;
                $jobapply->artist_email  =      $request->artist_email;
                $jobapply->artist_mobile =      $request->artist_mobile;
                $jobapply->artist_price  =      $request->artist_price;
                $jobapply->coins         =      $request->coins; 
                //dd($jobapply);
                $jobapply->save();
               
                Job::where('id','=', $jobapply->job_id)->increment('proposal',1);
                

                $wallets = DB::table('wallets')
                                ->where('user_id','=',Auth::user()->id)
                                ->get();	

                foreach($wallets as $wallets)
                {	
                    if($wallets->amount >= $request->coins)
                    {	
                        DB::table('wallets')
                            ->where('user_id','=',Auth::user()->id)
                            ->where('amount', '>=', $request->coins)
                            ->decrement('amount',$request->coins);	
                        $jobapply->save();		

                        if($jobapply->save())
                        {
                            $trans 			    =   new Transaction();
                            $trans->artist_id   =   Auth::user()->id;
                            $trans->coins       =   $jobapply->coins;
                            $trans->job_id      =   $jobapply->job_id;	

                            if($trans->job_id = $jobapply->job_id) 
                            { 
                                $job = Job::where('id','=',$jobapply->job_id)->first(); 
                                $trans->description  = 'Job at location ' .$job->location .' applied of budget '. $job->budget ;                              
                            } 	                         
                            $trans->save();
                            

                            //for quotation
                            $jobqt = Job::where('id','=', $jobapply->job_id)->first();

                            if($trans->save())
                            {
                                /* $this->validate($request, array(                                    
                                    'artistt_price'      => 'required|integer|min:3|max:10'
                                ));*/

                                $quotes                     =   new Quotes();
                                $quotes->user_id            =   $jobqt->user_id;
                                $quotes->user_name          =   $jobqt->user_name;
                                $quotes->user_email         =   $jobqt->user_email;
                                //$quotes->profile_id         =   $request->profile_id;
                                $quotes->artist_id          =   Auth::user()->id;
                                $quotes->artist_name        =   Auth::user()->name;
                                $quotes->artist_email       =   Auth::user()->email;
                                $quotes->start_date         =   $jobqt->start_date;  
                                $quotes->end_date           =   $jobqt->end_date;                            
                                $quotes->project_details    =   $jobqt->requirements;
                                $quotes->projected_budget   =   $jobqt->projected_budget;
                                $quotes->address            =   $jobqt->address;                              
                                $quotes->price_type         =   $jobqt->price_type;  
                                $quotes->job_type           =   $jobqt->jobtype;                
                                $quotes->client_status      =   '0';   
                                $quotes->artist_status      =   '1';
                                $quotes->contract_client    =   '0';  
                                $quotes->artist_accept      =   '2';    
                                $quotes->artist_price       =    $request->artist_price; 
                                $quotes->job_id             =    $request->job_id; 
                                $quotes->save();


                                // if($quotes->save())
                                // {
                                //     $t = Quotes::where('job_id','=',$quotes->job_id)->update(['artist_accept' => 3]);
                                // }
                               
                                // if($t)
                                // {
                                //     Quotes::where('id','=', $quotes->id)->update(['artist_accept' => 1]);
                                // }

                                // if()
                                    // Quotes::select('job_id')->where('job_id', '=', $quotes->job_id)->get()->each(function ($t) {
                                    //     DB::table('quotes')->where('id', '!=', $t->id)->update(['artist_accept' => '3']);
                                    // });
                            
          

                                //$qt->where('')
                                
                                $user = User::where('id','=',$jobqt->user_id)->first();              
                                $details = [         
                                    'body' => $user->name.' Send you quotation of '.$quotes->artist_price,                    
                                ];              
                            
                                Notification::send($user, new TaskComplete($details));
                            
                                return redirect()->back()->with('success','Your Quotation has been sent successfully');       
                            }
                          
                        }
                        //return redirect('/albums')->with('Saved');
                        return redirect()->back();
                    }
                    else
                    {				
                        //return redirect('/albums')->with('not saved');
                        return redirect()->back();
                    }
                }
               return redirect()->back()->with('info','Already applied.');                                    
            }
    }


}
