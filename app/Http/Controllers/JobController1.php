<?php

namespace App\Http\Controllers;

use App\Job;
use App\Category;
use App\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')
            ->paginate(7);
     
        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $job)
    {
        $job->load('company');
        return view('jobs.show', compact('job'));
    }

    public function job_all()
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

    }

    public function search(Request $request)
    {
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(4);

      
        return view('jobs.index', compact('jobs'));
    }


}
