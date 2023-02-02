<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\City;
use DB;
use Carbon\Carbon;
use App\Models\Wallet;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;



class LoginController extends Controller
{
    use AuthenticatesUsers;


    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $namespace = 'App\Http\Controllers';
    public const HOME = '/home';

  

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //$this->redirectTo = url()->previous();
    }
   


    public function redirectPath()
    {
        if(auth()->user()->is_admin)
        {           
            return route('admin.home');
        }
        else if(auth()->user()->is_artist)
        {
            return route('artist.home');        
        }         
        else if(auth()->user()->is_client)
        {         
            return route('client.home');
        }          
    }
 
    //multiple browser login blocking please dont unhide without developer permission
    /*
    protected function authenticated(Request $request, $user)
    {
        Auth::logoutOtherDevices($request->password);
    }*/


    public function aftersignup()
    {
        return view('login.aftersignup');
    }
   
    public function afterlogin()
    {
        return view('login.afterlogin');
    }


    //roles id fetch
    public function artist_social()
    {        
        $role = Role::where('title', 'artist')->first();    //dd($role);    
        Session::put('role',$role->id);
    
        $locations = City::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('login.artistsignup',compact('locations'));
    }
    
    
    public function client_social()
    {
        $role = Role::where('title', 'client')->first();       
        Session::put('role',$role->id);
    
        $locations = City::orderBy('name','ASC')->pluck('name', 'id');
        return view('login.clientsignup',compact('locations'));
    }



     // Google login
     public function redirectToGoogle()
     {     
        return Socialite::driver('google')->redirect();
     }


     // Google callback
     public function handleGoogleCallback()
     {  
        $user = Socialite::driver('google')->stateless()->user();    
        $check_user = User::where('email','=',$user->email)->first();

        if(!$check_user)
        {       
            $role = Session::get('role');  
            $roles = (int)$role; 

            if(!$roles)
            {
                return redirect()->route('beforesignup');             
            }
            else 
            {                        
                $this->_registerOrLoginUser($user);   
                return redirect()->route('home');
            }
        } 
        else
        {
            $user = Socialite::driver('google')->stateless()->user();
            $this->_registerOrLoginUser($user); 
            
            return redirect()->route('home');  
        }  
     }
    

     public function redirectToFacebook()
     {
         return Socialite::driver('facebook')->redirect();
     }

     // Facebook callback
     public function handleFacebookCallback()
     {
        $user = Socialite::driver('facebook')->stateless()->user();    
        $check_user = User::where('email','=',$user->email)->first();
       
 
        if(!$check_user)
        {       
            $role = Session::get('role');  
            $roles = (int)$role; 
 
            if(!$roles)
            {
                return redirect()->route('beforesignup');             
            }
            else 
            {                        
                $this->_registerOrLoginUser($user);   
                return redirect()->route('home'); 
            }
        } 
        else
        {
            $user = Socialite::driver('facebook')->stateless()->user();
            $this->_registerOrLoginUser($user); 
            
            return redirect()->route('home');
        }    
     }


     protected function _registerOrLoginUser($data)
     {
        $user = User::where('email', '=', $data->email)->first(); //dd($user);      

        if (!$user)   
        {       
            $user              =    new User();
            $user->name        =    $data->name;
            $user->email       =    $data->email;
            $user->provider_id =    $data->id;
            $user->avatar      =    $data->avatar;
           // $user->password    =    $data->password;
            $user->save();  
            Auth::login($user);      

            if($user->save())
            {                      
                $role = Session::get('role');  
                $roles = (int)$role; 
        
                if($roles == 2)
                {
                    $pay               =  new Wallet();
                    $pay->payment_id   =  'Free';
                    $pay->user_id      =  $user->id;
                    $pay->amount       =  '300';
                    $pay->exp_date     =  Carbon::now()->addDays(365);
                    $pay->save();

                    DB::table('role_user')->insert([
                        'role_id' => $roles,
                        'user_id' => $user->id
                    ]);
                }      
                elseif($roles == 3)
                {
                    DB::table('role_user')->insert([
                        'role_id' => $roles,
                        'user_id' => $user->id
                    ]);
                } 
                
                                
                $details=[
                    'name'=> $data->name,
                    'email'=> $data->email,
                ];

                Mail::to($data['email'])->send(new Welcome($details));  
            } 
            if($roles == 2)
            {
                Session::flush();
                Auth::login($user);
                return redirect()->route('artist.home');
            }  
            elseif($roles == 3)
            {
                Session::flush();
                Auth::login($user);
                return redirect()->route('client.home');
            }        
        }
        else
        {
           Auth::login($user);
          
        }
     }

    public function checkrole()
    {
        return view('login.checkrole');
    }

   
}
