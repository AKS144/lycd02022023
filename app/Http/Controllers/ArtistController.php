<?php

namespace App\Http\Controllers;

use DB;
use App\Role;
use App\User;
use App\Profile;
use Carbon\Carbon;
use App\Models\Wallet;
use App\Mail\Welcome;
use App\City;
use Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ArtistController extends Controller
{
    public function index()
    {
      //
    }

   
    public function create(Request $request)
    {     
         $role = Role::where('title', 'artist')->pluck('id');    //dd($role);   
        //$role = Role::where('title', 'artist')->first();    //dd($role);   
        $roles = Session::put('role',$role);
        // $t = Session::get('role');
        // dd($t);


        //$request->session()->put('role',$role);

        $locations = City::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('login.artistsignup',compact('locations'));
        
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'digits:10|numeric|unique:users,mobile',
           // 'password' => 'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|confirmed',
        ]);
        $user                 =   new User();
        $user->name           =   $request->name;
        $user->email          =   $request->email;
        $user->mobile         =   '+91'.$request->mobile;
        $user->gender         =   $request->gender;
       /* if($request->hasfile('profile_img'))
        {
            $image_file = $request->file('profile_img');
            $img_extension = $image_file->getClientOriginalExtension();
            $img_filename = time().'.'.$img_extension;
            $image_file->move('public/profile_img/',$img_filename);//folder uploads
            $user->avtar = $img_filename;
        }*/
        $user->location_id    =   $request->location_id;
        if($user->location_id =   $request->location_id)
        {
            $loc = City::where('id','=',$request->location_id)->first();
            $user->location  = $loc->name;
            $user->latitude  = $loc->latitude;
            $user->longitude = $loc->longitude;
        }
        $user->exp_date       =   Carbon::now()->addDays(365);//$request->exp_date;
        $user->notify_date    =   Carbon::now()->addDays(358);//$request->notify_date;
        $user->suspend_date   =   Carbon::now()->addDays(425);//$request->suspend_date;
        $user->password       =   Hash::make($request->password);
        $user->save();
        if($user->save())
        {
            $role = Role::select('id')->where('title', 'artist')->first();
            $user->roles()->attach($role);
            $pay               =  new Wallet();
            $pay->payment_id   =  'Free';
            $pay->user_id      =  $user->id;
            $pay->amount       = '300';
            $pay->exp_date     =  Carbon::now()->addDays(365);
            $pay->save();
        }
        $details=[
            'name'=> $request->input('name'),
           //'password'=> $request->input('password'),
            'email'=> $request->input('email'),
            'exp_date' => $request->input('exp_date'),
        ];
        Mail::to($request['email'])->send(new Welcome($details));
        Auth::login($user);
        return redirect()->route('basic');
       // return redirect()->route('artist.home');
        //return redirect()->route('aftersignup');
    }
    public function show($id)
    {

    }

    public function edit($id)
    {
        return view('artistuser.edit');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',
            'email' => 'required|max:255|email|unique:users,email',
            'mobile' => 'digits:10|numeric|unique:users,mobile',
            //'password' => 'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|confirmed',
        ]);
        $user                 =   User::find($id);
        $user->name           =   $request->name;
        $user->mobile         =   '+91'.$request->mobile;
        $user->gender         =   $request->gender;
        if($request->hasfile('avtar'))
        {
            $image_file = $request->file('avtar');
            $img_extension = $image_file->getClientOriginalExtension();
            $img_filename = time().'.'.$img_extension;
            $image_file->move('public/profile_img/',$img_filename);//folder uploads
            $user->avtar = $img_filename;
        }
        $user->location_id    =   $request->location_id;
        if($user->location_id =   $request->location_id)
        {
            $loc = City::where('id','=',$request->location_id)->first();
            $user->location  = $loc->name;
            $user->latitude  = $loc->latitude;
            $user->longitude = $loc->longitude;
        }
        $user->email     =   $request->email;
        $user->mobile    =   $request->mobile;
        $user->password       =   Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect()->route('artist.home');
    }
    public function destroy($id)
    {
        
    }
    
     // Google login
    /* public function redirectToGoogle()
     {       
        return Socialite::driver('google')->redirect();
     }

     // Google callback
     public function handleGoogleCallback()
     {
         $user = Socialite::driver('google')->stateless()->user();
         $this->_registerOrLoginUser($user);    //dd($user);
     
        return redirect()->route('artist.home');
     }

     public function redirectToFacebook()
     {
         return Socialite::driver('facebook')->redirect();
     }

     // Facebook callback
     public function handleFacebookCallback()
     {
         $user = Socialite::driver('facebook')->stateless()->user();
         $this->_registerOrLoginUser($user);
     
         return redirect()->route('artist.home');
     }

     protected function _registerOrLoginUser($data)
     {
        $user = User::where('email', '=', $data->email)->first(); //dd($user);
         if (!$user) 
         {
          // return view('login.beforesignup');         
            
            $user              =    new User();
            $user->name        =    $data->name;
            $user->email       =    $data->email;
            $user->provider_id =    $data->id;
            $user->avatar      =    $data->avatar;
           // $user->password    =    $data->password;
            $user->save();        

            if($user->save())
            {     
                $role = Session::get('role');  
                $roles = (int)$role;              

                DB::table('role_user')->insert([
                    'role_id' => $role,
                    'user_id' => $user->id
                ]);
                          

                if($roles == 2)
                {
                    $pay               =  new Wallet();
                    $pay->payment_id   =  'Free';
                    $pay->user_id      =   $user->id;
                    $pay->amount       =  '300';
                    $pay->exp_date     =  Carbon::now()->addDays(365);
                    $pay->save();
                }       
                
                $details=[
                    'name'=> $data->name,
                    'email'=> $data->email,
                ];

                Mail::to($data['email'])->send(new Welcome($details));
                Auth::login($user);
                Session::flush();
       
               return redirect()->route('artist.home');
            }
         }
        else
        {
           Auth::login($user);
           //return redirect()->intended('dashboard');
           return redirect()->route('home');
        }
     }*/
}