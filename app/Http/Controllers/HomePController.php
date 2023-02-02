<?php

namespace App\Http\Controllers;

use App\Album;
use App\Profile;
use App\Category;
use App\Rewards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePController extends Controller
{
   /* public function index()
    {      
        $profiles = Profile::orderBy('id', 'desc')          
                            ->take(7)
                            ->get();

        return view('artistsearch', compact(['profiles']));
    }*/


    public function profile()
    {
        return view('profile');
    }

    // public function show($id)
    // {      
    //     // $profile = Profile::find($id);
    //     $profile = Profile::where('id','=',$id)->first();
   

    //    /* $users = DB::table('users')
    //                ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //                ->join('orders', 'users.id', '=', 'orders.user_id')
    //                ->select('users.*', 'contacts.phone', 'orders.price')
    //                ->get();   */  

    //     /*$album = DB::table('users')
    //                ->join('albums', 'users.id', '=', 'albums.user_id') 
    //                ->join('profiles', 'users.id', '=', 'profiles.userid')
    //                ->where('profiles.id','=',$id)
    //                ->select('profiles.*','albums.*')
    //                ->get();*/
        
    //     $items = Profile::join('items', 'profiles.userid', '=', 'items.user_id')  
    //                 ->where('profiles.id','=',$id)  
    //                 ->select('items.*')  
    //                 ->get();
                 

    //     /* $photo = DB::table('users')
    //                ->join('photos', 'users.id', '=', 'photos.user_id') 
    //                ->join('profiles', 'users.id', '=', 'profiles.userid')
    //                ->where('profiles.id','=',$id)
    //                ->select('profiles.*','photos.*')
    //                ->get();*/
    //     //$rewards = Rewards::all()->pluck('budget','coins');
    //     $rewards = Rewards::all()->pluck('budget','budget');

    //     $albums = Album::where('user_id','=',$profile->userid)->get();
        
    //    //dd($profile->userid);
    //    //dd($albums);
    //    return view('artistshow', compact('profile','albums','items','rewards'));
       
    // }

    
	public function clientshow($id)
	{
		$album = Album::with('Photos')->find($id);
       // return view('client.albums.show')->with('album', $album);
       return view('client.albums.show',compact('album'));

	}

    //profilesearch
    public function search(Request $request)
    {
        $Categories = Category::pluck('name', 'id');
        $rewards = Rewards::pluck('budget', 'id');
        $profiles = Profile::searchResults()->paginate(12);  
        //return view('profiles.index', compact('profiles'));
        // var_dump($profiles);
        // exit();
        // $p = $profiles->searchResults();
        // var_dump($p);
        return view('artistsearch', compact('profiles','Categories','rewards'));
    }

    public function package()
    {
        
        //return view('profiles.index', compact('profiles'));
        return view('package');
    }

    public function getquote()
    {
        
        //return view('profiles.index', compact('profiles'));
        return view('getquote');
    }

    // public function search(Request $request)
    // {
    //     $jobs = Job::with('company')
    //         ->searchResults()
    //         ->paginate(7);

    //     $banner = 'Search results';
    //     return view('jobs.index', compact(['jobs', 'banner']));
    // }
}
