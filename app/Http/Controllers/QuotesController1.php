<?php

namespace App\Http\Controllers;

use App\Wishlist;
use App\Models\Quotes;
use App\User;
use App\Rewards;
use App\City;
use App\Job;
use App\Notifications\TaskComplete;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class QuotesController extends Controller
{

    public function index()
    {
        
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $this->validate($request, array(
        //     'start_date'        => 'required|after:yesterday',
        //     //'end_date'          => 'required|after_or_equal:start_date',
        //     'project_details'   => 'required|max:255',
        //     'projected_budget'  => 'required',
        //     'address'           => 'required|max:255',
        //     'client_price'      => 'required|integer|min:3|max:7'
        // ));
               
        $status = Quotes::where('user_id','=',Auth::user()->id)
                        ->where('profile_id',$request->profile_id)
                        ->where('artist_id',$request->artist_id)
                        ->first();
                        
            if(isset($status->user_id) and isset($request->artist_id))
            //if(isset($request->profile_id) and isset($request->artist_id))
            {               
                return redirect()->back()->with('error','You have already applied');              
            }
            else
            {
                // $this->validate($request, array(
                //     'start_date'        => 'required|after:yesterday',
                //    // 'end_date'          => 'required|after_or_equal:start_date',
                //     'project_details'   => 'required|min:3|max:255',
                //     //'projected_budget'  => 'required',
                //     'address'           => 'required|max:255',
                //     'client_price'      => 'required|integer|min:3|max:10'
                // ));

                $quotes                     =   new Quotes();
                $quotes->user_id            =   Auth::user()->id;
                $quotes->user_name          =   Auth::user()->name;//$request->user_name;
                $quotes->user_email         =   Auth::user()->email;//$request->user_email;
                $quotes->profile_id         =   $request->profile_id;
                $quotes->artist_id          =   $request->artist_id;
                $quotes->artist_name        =   $request->artist_name;
                $quotes->artist_email       =   $request->artist_email;
                $quotes->start_date         =   date('Y-m-d', strtotime($request->start_date));       
                        
                if($request->end_date == NULL)
                {
                    $quotes->end_date  =   date('Y-m-d', strtotime($request->start_date));
                }
                else
                {
                    $quotes->end_date  =   date('Y-m-d', strtotime($request->end_date)); 
                }

                $quotes->project_details    =   $request->project_details;
                $quotes->projected_budget   =   $request->projected_budget;
                $quotes->address            =   $request->address;
                $quotes->client_price       =   $request->client_price;  
                $quotes->price_type         =   $request->price_type;  
                $quotes->job_type           =   $request->job_type;  
                $quotes->artist_accept      =   '0';              
                $quotes->client_status      =   '0';   
                $quotes->artist_status      =   '0';
                $quotes->contract_client    =   '0'; //dd($quotes);             
                //$quotes->artist_price   =   $request->artist_price;  //not required for 
                $quotes->save();

                if($quotes->save())
                {
                    $jobs = Job::where('user_id','=',Auth::user()->id)                              
                                ->where('start_date',$request->start_date)
                                ->first();
                    if(isset($jobs->user_id) and isset($jobs->start_date))      
                    {
                        return redirect()->back()->with('success','Saved successfully');     
                    }  
                    else 
                    {
                        $job                =   new Job();
                        $job->user_id       =   Auth::user()->id;
                        $job->user_name     =   Auth::user()->name;
                        $job->user_email    =   Auth::user()->email;

                        $job->name          =   $request->name;  
                        $job->category_id   =   $request->category_id; 
                        $job->location_id   =   $request->location_id; 

                        if($job->location_id = $request->location_id)         
                        { 
                            $loc = City::where('id','=',$request->location_id)->first(); 
                            $job->location = $loc->name; 
                            $job->latitude  = $loc->latitude;
                            $job->longitude = $loc->longitude;
                        }       
                        $job->start_date = date('Y-m-d', strtotime($request->start_date));      
                        
                        if($request->end_date == NULL)
                        {
                            $job->end_date  =   date('Y-m-d' , strtotime($request->start_date));
                        }
                        else
                        {
                            $job->end_date  =   date('Y-m-d' , strtotime($request->end_date)); 
                        }                 
                              
                        if($job->reward_id = $request->projected_budget)
                        {
                            $reward         = Rewards::where('budget','=',$request->projected_budget)->first();
                            $job->budget    = $reward->budget;                     
                            $job->coins     = $reward->coins; 
                            $job->reward_id = $reward->id;    
                        }
                        $job->address       =   $request->address;       
                        $job->proposal      =   '0';
                        $job->price_type    =   $request->price_type;
                        $job->jobtype       =   $request->job_type;
                        $job->requirements  =   $request->project_details;  //dd($job);
                       //dd($job);
                        $job->save();                     
                    }        
                }
               
                //notification
                $user = User::where('id','=',$request->artist_id)->first();              
                $details = [         
                    'body' => Auth::user()->name.' Send you quotation of '.$quotes->client_price,                    
                ];              
            
                Notification::send($user, new TaskComplete($details));
              
                return redirect()->back()->with('success','Your Quotation has been sent successfully');                
            }       

    }


    public function show(Quotes $quotes)
    {
        //
    }


    public function edit(Quotes $quotes)
    {
        //
    }


    public function update(Request $request, $id)
    {
       /* $this->validate($request, array(
            'artist_price'      => 'required|integer|min:3|max:7',
            'client_price'      => 'required|integer|min:3|max:7'
        ));*/

        $quotes                 =   Quotes::find($id);       
        $quotes->client_price   =   $request->client_price;     
        //$quotes->artist_price   =   $request->artist_price;
        $quotes->artist_status  =   '0';   
       // $quotes->client_status  =   '0';   
        //dd($quotes);                
        $quotes->save();

        $user = User::where('id','=', $quotes->artist_id)->first();   //to notify
                   
        $details = [         
            'body' => Auth::user()->name.' Sent you Quotation',                    
        ];              
    
        Notification::send($user, new TaskComplete($details));

        return redirect()->back()->with('success', 'Quotation sent successfully');
    }

   /* public function artist_price(Request $request, $id)
    {
        // $this->validate($request, array(
        //     'artist_price'      => 'required|integer|min:3|max:7',         
        // ));

        $quotes                  =   Quotes::find($id);     
        $quotes->artist_price    =   $request->artist_price;  dd($quotes);
       // $quotes->save();


        $user = User::where('id','=', $quotes->user_id)->first();   
                   
        $details = [         
            'body' => Auth::user()->name.' sent you Quotation',                    
        ];              
    
        Notification::send($user, new TaskComplete($details));

        return redirect()->back()->with('success', 'Quotation sent successfully');
    }*/


    public function destroy(Quotes $quotes)
    {
        //
    }

    public function client_reject($id,$status)
    {
            Quotes::whereId($id)->update([
                'client_status' => $status,
                'artist_status' => '3'
            ]);  

            $quotes = Quotes::where('id','=',$id)->first();  

            //to notify
            $user = User::where('id','=', $quotes->artist_id)->first();                           
            $details = [         
                'body' => Auth::user()->name.' has accepted your Quotation',                    
            ];  
            Notification::send($user, new TaskComplete($details));
                
            return redirect()->back()->with('success','Accepted your request');
    }


    
    

    public function client_status($id,$status)
    {       
       
            $q = Quotes::findOrFail($id);
            $user = Auth::user()->id;    
            $quote = Quotes::where('user_id',$user)
                            ->where('end_date',$q->end_date)->where('start_date',$q->start_date)
                            ->where('client_status','=',1)
                            ->first();// dd($quote->end_date);
            if($quote)
            {
                return redirect()->back()->with('error','You have applied on this date');
            }
            else
            {      
                // Validation
                $validate = Validator::make([
                    'id'  => $id,
                    'status'    => $status
                ], 
                [
                    'id'  =>  'required|exists:id',
                    'status'    =>  'required|in:0,1',
                ]);    

                Quotes::whereId($id)->update(['client_status' => $status]);  

                $quotes = Quotes::where('id','=',$id)->first();  

                //to notify
                $user = User::where('id','=', $quotes->artist_id)->first();                           
                $details = [         
                    'body' => Auth::user()->name.' has accepted your Quotation',                    
                ];  
                Notification::send($user, new TaskComplete($details));
                
                return redirect()->back()->with('success','Accepted your request');
            }    
         
    }
    

    //estimate reject
    public function client_estrequest($id,$status)
    {
        Quotes::whereId($id)->update([
            'invoice' => $status,          
        ]);  

        $quotes = Quotes::where('id','=',$id)->first();  

        //to notify
        $user = User::where('id','=', $quotes->artist_id)->first();                           
        $details = [         
            'body' => Auth::user()->name.' has requested for estimate',                    
        ];  
        Notification::send($user, new TaskComplete($details));
            
        return redirect()->back()->with('success','Accepted your request');
    }

    /*public function artist_status($id,$status)
    {
        // Validation
        $validate = Validator::make([
            'id'  => $id,
            'status'    => $status
        ], 
        [
            'id'  =>  'required|exists:id',
            'status'    =>  'required|in:0,1',
        ]);
       

        //Quotes::whereId($id)->where('artist_status','=',NUll)->update(['artist_status' => $status]);  
        $quotes = Quotes::whereId($id)->first(); 
        if($quotes->artist_status == '0')
        {
           
            Quotes::whereId($id)->update(['artist_status' => $status]);  
           //$quotes = Quotes::where('id','=',$id)->first();  
            $user = User::where('id','=', $quotes->user_id)->first();   //to notify
                    
            $details = [         
                'body' => Auth::user()->name.' has accepted your Quotation',                    
            ];              
        
            Notification::send($user, new TaskComplete($details));

            return redirect()->back()->with('success','Accepted your request');
        }    
        elseif($quotes->artist_status == '1')
        {
            Quotes::whereId($id)->update(['artist_status' => $status]);  
           //$quotes = Quotes::where('id','=',$id)->first();  
            $user = User::where('id','=', $quotes->user_id)->first();   //to notify
                    
            $details = [         
                'body' => Auth::user()->name.' has accepted your Quotation',                    
            ];              
        
            Notification::send($user, new TaskComplete($details));
            return redirect()->back()->with('error','You have changed quotation');
        }

        elseif($quotes->artist_status == '3')
        {
            Quotes::whereId($id)->update(['artist_status' => $status]);  
           //$quotes = Quotes::where('id','=',$id)->first();  
            $user = User::where('id','=', $quotes->user_id)->first();   //to notify
                    
            $details = [         
                'body' => Auth::user()->name.' has accepted your Quotation',                    
            ];              
        
            Notification::send($user, new TaskComplete($details));
            return redirect()->back()->with('error','You have changed quotation');
        }
    }*/
    


    /*public function destroy($id)
    {
        $quotes = Quote::find($id);
        $quotes->delete();
        return redirect()->back()->with('success','Deleted Sucessfully');
    }*/
    

}
