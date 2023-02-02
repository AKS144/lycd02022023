<?php

namespace App\Http\Controllers;

use App\Job;
use App\Role;
use App\Enquiry;
use App\User;
use App\Profile;
use App\Category;
use App\Contract;
use App\HasRoles;
use Carbon\Carbon;
use App\City;
use Session;
use App\Album;
use Exception;
use App\ReviewRating;
use App\Rewards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller

{
    public function fournotfour()
    {
        return view('404-page');
    }

    public function homepage()
    {
        
        return view('home');
    }
    public function home()
    {
        return view('homepage');      
    }

     public function index()
     {
        return view('front');
     }

    public function show($id)
    {      
        // $profile = Profile::find($id);
        $profile = Profile::where('id','=',$id)->first();
   

       /* $users = DB::table('users')
                   ->join('contacts', 'users.id', '=', 'contacts.user_id')
                   ->join('orders', 'users.id', '=', 'orders.user_id')
                   ->select('users.*', 'contacts.phone', 'orders.price')
                   ->get();   */  

        /*$album = DB::table('users')
                   ->join('albums', 'users.id', '=', 'albums.user_id') 
                   ->join('profiles', 'users.id', '=', 'profiles.userid')
                   ->where('profiles.id','=',$id)
                   ->select('profiles.*','albums.*')
                   ->get();*/
        
        $items = Profile::join('items', 'profiles.userid', '=', 'items.user_id')  
                    ->where('profiles.id','=',$id)  
                    ->select('items.*')  
                    ->get();
                 

        /* $photo = DB::table('users')
                   ->join('photos', 'users.id', '=', 'photos.user_id') 
                   ->join('profiles', 'users.id', '=', 'profiles.userid')
                   ->where('profiles.id','=',$id)
                   ->select('profiles.*','photos.*')
                   ->get();*/
        //$rewards = Rewards::all()->pluck('budget','coins');
        $rewards = Rewards::all()->pluck('budget','budget');

        $albums = Album::where('user_id','=',$profile->userid)->get();
        
        $city = City::all()->pluck('name','id'); //dd($city);

        $category = Category::all()->pluck('name','id'); //dd($city);

        $reviews = ReviewRating::where('artist_id','=',$profile->userid)->get();

       //dd($profile->userid);
       //dd($albums);
       return view('artistshow', compact('profile','albums','items','rewards','city','category','reviews'));
       
    }


     public function save_enquiry(Request $request)
     {
        $enquiry                =   new Enquiry();
        $enquiry->name          =   $request->name;
        $enquiry->email         =   $request->email;  
        $enquiry->phone         =   $request->phone; 
        $enquiry->description   =   $request->description;      
        $enquiry->save();
        return back()->with('msg',"Your Enquiry has been sent successfully");

     }

     //for profile search 
    public function profileSearch(Request $request)
    {
       // $Locations = City::pluck('name', 'id');
        $Categories = Category::pluck('name', 'id');
        $rewards = Rewards::pluck('budget', 'id');

        if($request->has('search'))
        {
            //$profiles = Profile::search($request->get('search'))->get();	
            $ip = $request->ip(); 
            $i = Location::get($ip);  
            $profiles = Profile::search($request->get('search'))           
                            ->select("profiles.*"
                               ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                               * cos(radians(profiles.latitude)) 
                               * cos(radians(profiles.longitude) - radians(" . $i->longitude . ")) 
                               + sin(radians(" .$i->latitude. ")) 
                               * sin(radians(profiles.latitude))) AS distance"))               
                               ->where('verify','=','1')
                               ->where('status','=','1')                              
                               ->orderBy('distance', 'asc')
                               ->get();  

                               return view('artistsearch', compact('profiles','Categories','rewards'));
        }
        else
        {
           // $profiles = Profile::get();
           $ip = $request->ip(); 
           $i = Location::get($ip);  
           $profiles = Profile::search($request->get('search'))           
                           ->select("profiles.*"
                              ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                              * cos(radians(profiles.latitude)) 
                              * cos(radians(profiles.longitude) - radians(" . $i->longitude . ")) 
                              + sin(radians(" .$i->latitude. ")) 
                              * sin(radians(profiles.latitude))) AS distance")) 
                              ->where('verify','=','1')
                              ->where('status','=','1')             
                              ->orderBy('distance', 'asc')
                              ->get();  
                              return view('artistsearch', compact('profiles','Categories','rewards'));
        }
        
    }

   /* public function profilefilter(Request $request)
    {             
        //$products = Product::all();

        $query = Profile::query();
       //$categories = Category::all();
        $Categories = Category::pluck('name', 'id');
        $rewards = Rewards::pluck('budget', 'id');


        if($request->ajax()){
            if(empty($request->category) && empty($request->location))
            {
                $profiles = $query->get();
            }
            if($request->category)
            {
                //$profiles = $query->where(['category_id'=>$request->category])->get();
                $profiles = $query->where(['categories'=>$request->category]);   
            }
            if($request->reward)  
            {
                $profiles = $query->where(['location_id'=>$request->location])->get();
            }   
           
            return response()->json(['profiles'=>$profiles]);
        }
        $profiles = $query->get();
        return view('artistsearch',compact('categories','rewards','profiles'));
    }*/


    //autocomplete for profile
   /* public function autocomplete(Request $request)
    {
        $data = Profile::select("name as value", "id")
                    ->where('name', 'LIKE', '%'. $request->get('search'). '%')                               
                    ->get();

            //->orWhere('skills','LIKE', '%'. $request->get('search'). '%')     
    
        return response()->json($data);
    }*/

    //artist search
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Profile::where('name', 'LIKE', '%'. $query. '%')
                                  ->get();
          return response()->json($filterResult);
    } 

    //job search
    public function autocompleteSearchjob(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Job::where('name', 'LIKE', '%'. $query. '%')                                    
                                    ->get();
          return response()->json($filterResult);
    } 


    //for job search     check this is not working
    public function jobSearch(Request $request)
    {
        $Locations = City::pluck('name', 'id');
        $Categories = Category::pluck('name', 'id');
        $rewards = Rewards::pluck('budget', 'id');

       //dd($Locations);

        if($request->has('search'))
        {
            //$jobs = Job::search($request->get('search'))->get();	
            $ip = $request->ip(); 
            $i = Location::get($ip);  
            $jobs = Job::search($request->get('search'))
                            ->select("jobs.*"
                               ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                               * cos(radians(jobs.latitude)) 
                               * cos(radians(jobs.longitude) - radians(" . $i->longitude . ")) 
                               + sin(radians(" .$i->latitude. ")) 
                               * sin(radians(jobs.latitude))) AS distance"))               
                               ->where('status','=','1')
                               ->orderBy('distance', 'asc')
                               ->get();  
          
        }
        else
        {
           // $jobs = Job::get();
            $ip = $request->ip(); 
            $i = Location::get($ip);  
            $jobs = Job::search($request->get('search'))
                            ->select("jobs.*"
                               ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                               * cos(radians(jobs.latitude)) 
                               * cos(radians(jobs.longitude) - radians(" . $i->longitude . ")) 
                               + sin(radians(" .$i->latitude. ")) 
                               * sin(radians(jobs.latitude))) AS distance"))               
                               ->where('status','=','1')                               
                               ->orderBy('distance', 'asc')
                               ->get();     

            return back()->with('success','Please Enter something to search');
        }
        return view('jobsearch', compact('jobs','Categories','rewards','Locations'));
    }

   /* public function jobfilter(Request $request)
    {
        $query = Job::query();      
        $Categories = Category::pluck('name', 'id');
        $rewards = Rewards::pluck('budget', 'id');
        //$cat = Categor::where('')
       // $cat = DB::table('category_job')->where('job_id','=',$job->id)->pluck('category_id')->toArray();


        if($request->ajax()){
            if(empty($request->category) && empty($request->rewards))
            {
                $jobs = $query->get();
            }
            if($request->category)
            {
                //$profiles = $query->where(['category_id'=>$request->category])->get();
                //$jobs = $query->where(['categories'=>$request->category])->get();   
                // //$jobs = $query->where([$query->categories->id,'=',$request->category])->get();   
                // $jobs =  DB::table('jobs')->select('id')                
                //     ->get()->each(function ($slot){
                //     DB::table('category_job')->where(['category_id','=',$request->category])
                //                          ->get();

                // });
                
            }
            if($request->rewards)
            {
                $jobs = $query->where(['budget'=>$request->rewards])->get();
            }   
           
            return response()->json(['jobs'=>$jobs]);
        }
        $jobs = $query->get();
        return view('jobsearch',compact('categories','products','rewards'));
    }*/

    //not in use now
    public function jobfilter(Request $request)
    {
        $query = Job::query();

        $Categories = Category::pluck('name', 'id');
        $rewards = Rewards::pluck('budget', 'id');

       /* $ip = $request->ip(); 
        $i = Location::get($ip);  
        $query = Job::search($request->get('search'))
                            ->select("jobs.*"
                               ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                               * cos(radians(jobs.latitude)) 
                               * cos(radians(jobs.longitude) - radians(" . $i->longitude . ")) 
                               + sin(radians(" .$i->latitude. ")) 
                               * sin(radians(jobs.latitude))) AS distance"))               
                               ->orderBy('distance', 'asc')
                               ->get();*/

        if($request->ajax())
        {
            //$jobs = Job::search($request->get('search'))->get();	            
            if($request->category)
            {
                $jobs = $query->where(['category_id'=>$request->category])->get();
            }
            if($request->reward)  
            {
                $jobs = $query->where(['reward_id'=>$request->reward])->get();
            }  
        }

        $jobs = $query->get();        
           // return back()->with('success','Please Enter something to search');
       
        return view('jobsearch', compact('jobs','Categories','rewards'));
    }

    


    //hide later
    public function logins()
    {
        return view('login');
    }


    /*public function search()
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');

        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();

        return view('index', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));
        //return view('jobsearch', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));

    }*/



    public function jobindex(Request $request)

    {   
        $Locations = City::pluck('name', 'id');

        $Categories = Category::pluck('name', 'id');

        $rewards = Rewards::pluck('budget', 'id');
      
        /*$Category = Category::orderBy('created_at', 'desc')
                        ->take(5)
                        ->pluck('name', 'id');*/
            

       /* $jobs = Job::orderBy('id', 'desc')
            ->take(7)
            ->get();*/
          
        //only to show which are not applied
        /*$jobapply = DB::table('job_applies')->where('artist_id','=',Auth::user()->id)->pluck('job_id')->all();//dd($jobapply);
        $jobs = Job::whereNotIn('id', $jobapply)->paginate(5);*/

      /*  $ip = $request->ip(); 
        $i = Location::get($ip);  
        $jobs = DB::table("jobs")
                    ->select("jobs.id"
                        ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                        * cos(radians(jobs.latitude)) 
                        * cos(radians(jobs.longitude) - radians(" . $i->longitude . ")) 
                        + sin(radians(" .$i->latitude. ")) 
                        * sin(radians(jobs.latitude))) AS distance"))               
                        ->orderBy('distance', 'asc')->get();*/
               // ->whereNotIn('id', $jobapply)->paginate(7);

        //this code is original working code  
        $ip = $request->ip(); 
        $i = Location::get($ip);  
        $jobs = DB::table("jobs")
                        ->select("jobs.*"
                           ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                           * cos(radians(jobs.latitude)) 
                           * cos(radians(jobs.longitude) - radians(" . $i->longitude . ")) 
                           + sin(radians(" .$i->latitude. ")) 
                           * sin(radians(jobs.latitude))) AS distance"))               
                           ->orderBy('distance', 'asc')
                           ->get();         
       // dd($jobs);

        return view('jobsearch', compact('Categories','rewards', 'jobs'));
    }

    public function jobsview()
    {
        $jobs = Job::orderBy('id', 'desc')
        ->take(7)
        ->get();

        return view('job', compact('jobs'));

    } 

    
    public function front()
    {
        return view('front');
    }



    // public function jobsearch(Request $request)

    // {

    //     $jobs = Job::searchResults()
    //         ->paginate(7);

    //     return view('jobs.index', compact('jobs'));

    // }

    // public function jobshow(Job $job)
    // {
    //     return view('jobs.show', compact('job'));
    // }



  /*  public function signin()
    {
        return view('auth.login');
    }*


    public function signupwithno()
    {
        return view('login.otp');
    }


    public function aftersignup()
    {
        return view('login.aftersignup');
    }

    /*public function signupclient()
    {   
        $locations = City::all()->pluck('name', 'id');     
        return view('login.clientsignup',compact('locations'));
    }


    public function signupartist()
    {
        $locations = City::all()->pluck('name', 'id');
        return view('login.artistsignup',compact('locations'));
    }*/

    public function beforesignup()
    {
        //Session::flush();
        return view('login.beforesignup');
    }
    

    public function testprof()
    {
        return view('login.artistprofile');
    }


    public function dashboard_artist(){

        // $user = DB::table('users')->where('name', 'Admin')->get();
        // $users = DB::table('users')
        //     ->select('email', 'name')
        //     ->where('name', 'Admin')
        //     ->find(1);
        // var_dump($users->name);
       // return view('profiles.dashboard');

       $c = Auth::user()->id;    
       $contract = Contract::where('u_id','=',$c)->get();    
       return view('profiles.dashboard',compact('contract'));

    }


    
   public function markasread()
   {
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
   }

   public function privacypolicy()
   {
        return view('privacy');
   }

     public function dashboard_client()
     {

        // $user = DB::table('users')->where('name', 'Admin')->get();
        // $users = DB::table('users')
        //     ->select('email', 'name')
        //     ->where('name', 'Admin')
        //     ->find(1);
        // var_dump($users->name);
       // return view('profiles.dashboard');

       $c = Auth::user()->id;      
       $contract = Contract::where('u_id','=',$c)->get();    
       return view('client.dashboard',compact('contract'));

    }


    //otp login
    public function otp_login()
    {
        return view('auth/otplogin');
    }

    public function sendOtp(Request $request)
    {
        $otp = rand(1000,9999);
       // Log::info("otp = ".$otp);
        $user = User::where('mobile','=',$request->mobile)->update(['otp' => $otp]);              
        $receiverNumber = $request->mobile;
        $message = "Your otp for Lytaa is ".$otp;
    
        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
    
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
    
        } catch (Exception $e) {
            info("Error: ". $e->getMessage());
        }
      
        return response()->json([$receiverNumber],200);      
    }

    public function resendOtp(Request $request)
    {
       // $otp = rand(1000,9999);
       // Log::info("otp = ".$otp);
       // $user = User::where('mobile','=',$request->mobile)->update(['otp' => $otp]);
       $user = User::where('mobile','=',$request->mobile)->first(); //dd($user)
                     
        $receiverNumber = $user->mobile;
        $message = "your otp for login is ".$user->otp;
    
        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
    
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
    
        } catch (Exception $e) {
            info("Error: ". $e->getMessage());
        }
      
        return response()->json([$receiverNumber],200);      
    }

    public function loginWithOtp(Request $request)
    {       
        $user  = User::where('mobile','=',$request->mobile)->where('otp','=',$request->otp)->first();
        if($user)
        {
            Auth::login($user,true);
            User::where('mobile','=',$request->mobile)->update(['otp' => null]);
            if($user->is_artist)
            {
                return redirect()->route('artist.home');
            }
            elseif($user->is_client)
            {
                return redirect()->route('client.home');
            }     
            elseif($user->is_admin)
            {
                return redirect()->route('admin.home');
            }     
        }
        else
        {
            return redirect()->back();
        }
    }

}

