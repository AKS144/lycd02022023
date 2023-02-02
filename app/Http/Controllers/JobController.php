<?php

namespace App\Http\Controllers;

use App\Job;
use App\Category;
use App\Location;
use App\JobApply;
use Carbon\Carbon;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')->paginate(7);
        return view('jobs.index', compact('jobs'));
    }



    public function show(Job $job)
    {     
        $users = DB::table('users')
                    ->join('jobs', 'users.id', '=', 'jobs.user_id')  
                    ->where('users.id','=',$job->user_id)
                    ->select('users.*')                    
                    ->first(); //dd($users);

        $count_job = DB::table('jobs')->where('user_id','=',$users->id)->count();            

        $now = Carbon::now();
        $end_date = $job->end_date;
        $cDate = Carbon::parse($end_date);
        $count = $now->diffInDays($cDate );

        $date1 = $job->start_date;
        $s = Carbon::parse($date1);
        $date2 = $job->end_date;
        $e = Carbon::parse($end_date);
        $dur = $s->diffInDays($e);

        if($dur == '0')
        {
            $duration = '1';
            return view('jobs.show', compact('job','count','duration','users','count_job'));
        }
        else
        {
            $duration = $dur;
            return view('jobs.show', compact('job','count','duration','users','count_job'));
        }    

    }



    //this is working but not required now
    /*public function job_all()
    {        
        // $searchLocations = Location::pluck('name', 'id');
        // $searchCategories = Category::pluck('name', 'id');
        // $searchByCategory = Category::withCount('jobs')
        //     ->orderBy('jobs_count', 'desc')
        //     ->take(10)
        //     ->pluck('name', 'id');

        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return view('jobsearch', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));

    }*/



    public function search(Request $request)
    {
        $jobs = Job::with('company')->searchResults()->paginate(8);
        return view('jobs.index', compact('jobs'));
    }

   /* public function test()
    {
        return view('test');
    }*/

}

