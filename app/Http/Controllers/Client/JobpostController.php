<?php

namespace App\Http\Controllers\Client;

use App\Job;
use App\Rewards;
use App\Category;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobpostController extends Controller
{
   
    public function index()
    {
        $locations = City::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $categories = Category::all()->pluck('name', 'id');
        $rewards = Rewards::all()->pluck('budget','coins');
        $jobpost = Job::where('user_id','=',Auth::user()->id)->orderBy("id",'desc')->paginate(5);
        return view('client.jobs.index',compact('jobpost','locations','categories','rewards'));
    }

  
    public function create()
    {        
        $locations = City::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        $rewards = Rewards::all()->pluck('range','coins');
        $rewards = Rewards::all()->pluck('budget','coins');
        return view('client.jobs.create', compact('locations', 'categories','rewards'));
    }

    
    public function store(Request $request)
    {       
        $this->validate($request,[   
            'name'          =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',    
            'start_date'    =>  'required|date|after:yesterday',
            //'end_date'      =>  'required|date|after_or_equal:start_date',            
            //'location'      =>  'required',    
            'address'       =>  'required|max:255',
            'requirements'  =>  'required|max:255', 
           // 'price_type'    =>  'required',
           // 'job_type'      =>  'required',         
        ]);


        $job                =   new Job();       
        $job->user_id       =   Auth::user()->id;
        $job->user_name     =   Auth::user()->name;
        $job->user_email    =   Auth::user()->email;
        $job->name          =   $request->name;    
        $job->category_id   =   $request->category_id;                        
        $job->location_id   =  $request->location_id; 
        if($job->location_id = $request->location_id) 
        { 
            $loc = City::where('id','=',$request->location_id)->first(); 
            $job->location  = $loc->name;
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
        $job->address       =   $request->address;       
        $job->requirements  =   $request->requirements;  
       
        $job->price_type    =   $request->price_type;
        $job->jobtype       =   $request->jobtype;
        $job->coins         =   $request->coins;
        if($job->coins = $request->coins)
        {
            $reward = Rewards::where('coins','=',$request->coins)->first();
            $job->budget = $reward->budget;
            $job->reward_id = $reward->id;
        }     
        $job->user_id       =   Auth::user()->id;
       // dd($job);
        $job->save();

       // $job->categories()->sync($request->input('categories', []));    // dd($job);
        
        if(!is_null($job)) { 
            return back()->with("success", "Registered successfully");
        }
        else 
        {
            return back()->with("failed", "Registration failed. Try again.");
        }

    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $locations = City::all()->pluck('name', 'id');//->prepend(trans('global.pleaseSelect'), '');
        $categories = Category::all()->pluck('name', 'id');
        $rewards = Rewards::all()->pluck('name','id');
        return view('client.jobs.create', compact('locations', 'categories','rewards'));
    }

   
    public function update(Request $request, $id)
    {
       /* $this->validate($request,[   
            'name'          =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',    
            'start_date'    =>  'required|date|after:yesterday',
            //'end_date'      =>  'required|date|after_or_equal:start_date',            
            //'location'      =>  'required',    
            'address'       =>  'required|max:255',
            'requirements'  =>  'required|max:255', 
           // 'price_type'    =>  'required',
           // 'job_type'      =>  'required',         
        ]);*/


        $job                =   Job::find($id);
        $job->user_id       =   Auth::user()->id;
        $job->user_name     =   Auth::user()->name;
        $job->user_email    =   Auth::user()->email;
        $job->name          =   $request->name;    
        $job->category_id   =   $request->category_id;                        
        $job->location_id   =  $request->location_id; 
        if($job->location_id = $request->location_id) 
        { 
            $loc = City::where('id','=',$request->location_id)->first(); 
            $job->location  = $loc->name;
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
        $job->address       =   $request->address;       
        $job->requirements  =   $request->requirements;  
       
        $job->price_type    =   $request->price_type;
        $job->jobtype       =   $request->jobtype;
        $job->coins         =   $request->coins;
        if($job->coins = $request->coins)
        {
            $reward = Rewards::where('coins','=',$request->coins)->first();
            $job->budget = $reward->budget;
            $job->reward_id = $reward->id;
        }     
        $job->user_id       =   Auth::user()->id;
       // dd($job);
        $job->save();

       // $job->categories()->sync($request->input('categories', []));
       
       return redirect()->back();
        //return redirect()->route('client.jobs.index');
    }

  
    public function destroy($id)
    {
        //
    }
}
