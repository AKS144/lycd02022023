<?php

namespace App\Http\Controllers\Admin;
use App\Job;
use App\Role;
use App\Category;
use App\Rewards;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(10);
        //$jobs = Job::paginate(5);
        $locations = City::orderBy('name', 'ASC')->pluck('name', 'id');
        //$loc = Location::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        $rewards = Rewards::all()->pluck('budget','coins');
        //$rewards = Rewards::all()->pluck('budget','id');

        //$results = $loc->fetchAll();

        //$location = Location::all()->pluck('name', 'id');
        //$categorie = Category::all()->pluck('name', 'id');
        //$reward = Rewards::all()->pluck('budget','coins');
        
        return view('admin.jobs.index', compact('jobs','locations', 'categories','rewards'));
    }



    public function create()
    {
        $locations = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        $rewards = Rewards::all()->pluck('budget','coins');
        
        return view('admin.jobs.index', compact('locations', 'categories','rewards'));
    }



    public function store(Request $request)
    {
      /*  $this->validate($request,[   
            'name'          =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',    
            'start_date'    =>  'date|after:yesterday',
           // 'end_date'    =>    'date|after_or_equal:start_date',            
            //'location_id'   =>  'required',    
            'address'       =>  'required|min:2|max:255',
            'requirements'  =>  'required|min:2|max:255', 
           // 'price_type'    =>  'required',
            //'job_type'      =>  'required',
            //'coins'         =>  'required'
        ]);*/


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
       // $job->coins         =   $request->coins;      
        //if($job->coins = $request->coins)
        $job->reward_id = $request->reward_id;       
        if($job->reward_id = $request->reward_id)
        {
            $reward         = Rewards::where('id','=',$request->reward_id)->first();
            $job->budget    = $reward->budget;
            //$job->reward_id = $reward->id;
            $job->coins     = $reward->coins;      

        }
        $job->address       =   $request->address;       
        $job->proposal      =   '0';
        $job->price_type    =   $request->price_type;
        $job->jobtype       =   $request->jobtype;
        $job->requirements  =   $request->requirements;  //dd($job);
       // dd($job);
        $job->save();      

       // $job->categories()->sync($request->input('categories', []));    
        
        if(!is_null($job)) 
        { 
            return back()->with("success", "Registered successfully");
        }
        else 
        {
            return back()->with("failed", "Registration failed. Try again.");
        
        }
    }


    public function edit(Job $job)
    {  
        $locations = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        $rewards = Rewards::all()->pluck('budget','coins');
        return view('admin.jobs.index', compact('locations', 'categories', 'rewards'));

    }


    public function update(Request $request, $id)
    {
       /* $this->validate($request,[   
            'name'          =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',    
            'start_date'    =>  'required|date|after:yesterday',
            'end_date'      =>  'date|after_or_equal:start_date',            
            //'location'      =>  'required',    
            'address'       =>  'required|max:255',
            'requirements'  =>  'required|max:255', 
           // 'price_type'    =>  'required',
           // 'job_type'      =>  'required',         
        ]);*/


        $job                =   Job::find($id);     
        $job->name          =   $request->name;    
        $job->category_id   =   $request->category_id;                        
        $job->location_id   =   $request->location_id; 
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
            $job->budget    = $reward->budget;
            $job->reward_id = $reward->id;
        }     
        $job->user_id       =   Auth::user()->id;
        //dd($job);
        $job->save();

        return redirect()->back();
       // return redirect()->route('admin.jobs.index')->with('success', 'Updated Successfully');

    }



    public function show(Job $job)
    {
        $job->load('location', 'categories');
        return view('admin.jobs.show', compact('job'));
    }


    public function destroy($id)
    {       
        $job = Job::find($id);
        $job->delete();
        //return redirect()->back();
        return back()->with('success', 'Deleted Successfully');
    }

}

