<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Carbon\Carbon;
use App\Mail\Welcome;
use App\City;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;


class ClientController extends Controller
{
    public function index()
    {        

    }

    public function create()
    {  
        $role = Role::where('title', 'client')->first();       
        Session::put('role',$role->id);

        $locations = City::orderBy('name','ASC')->pluck('name', 'id');
        return view('login.clientsignup',compact('locations'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[ 
            'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120', 
            'email' => 'required|email|unique:users,email', 
            'mobile' => 'digits:10|numeric|unique:users,mobile',        
           // 'password' => 'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|confirmed',           
        ]);

        $client                 =   new User();
        $client->name           =   $request->name;
        $client->email          =   $request->email;
        $client->mobile         =   '+91'.$request->mobile; 
        $client->gender         =   $request->gender;
       /* if($request->hasfile('avtar'))    
            {    
               $image_file = $request->file('avtar');    
               $img_extension = $image_file->getClientOriginalExtension();    
               $img_filename = time().'.'.$img_extension;    
               $image_file->move('public/profile_img/',$img_filename);//folder uploads    
               $client->avtar = $img_filename;    
            }*/
        $client->location_id    =   $request->location_id; 
        if($client->location_id =   $request->location_id)         
        { 
            $loc = City::where('id','=',$request->location_id)->first(); 
            $client->location  = $loc->name; 
            $client->latitude  = $loc->latitude;
            $client->longitude = $loc->longitude;
        }       
        $client->password      =   Hash::make($request->password);
        $client->save();
        //dd($client);

        if($client->save())
        {         
            $role = Role::select('id')->where('title', 'client')->first();
            $client->roles()->attach($role);
        }

        $details=[
            'name'=> $request->input('name'),
            //'password'=> $request->input('password'),
            'email'=> $request->input('email'),
            //'exp_date' => $request->input('exp_date'),
        ];    
      
        Mail::to($request['email'])->send(new Welcome($details));        
        Auth::login($client);

       return redirect()->route('client.home');
       //return redirect()->route('home');
       //return redirect()->route('aftersignup');  

    }


    public function show($id)
    {
        

    }


    public function edit($id)
    {        

    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[ 
            'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120', 
            'email' => 'required|email|unique:users,email', 
            'mobile' => 'digits:10|numeric|unique:users,mobile',        
           // 'password' => 'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|confirmed',           
        ]);
        
        $client                 =   User::find($id);
        $client->name           =   $request->name;
        $client->email          =   $request->email;
        $client->mobile         =   '+91'.$request->mobile; 
        $client->gender         =   $request->gender;
       /* if($request->hasfile('avtar'))    
            {    
               $image_file = $request->file('avtar');    
               $img_extension = $image_file->getClientOriginalExtension();    
               $img_filename = time().'.'.$img_extension;    
               $image_file->move('public/profile_img/',$img_filename);//folder uploads    
               $client->avtar = $img_filename;    
            }*/
        $client->location_id    =   $request->location_id; 
        if($client->location_id =   $request->location_id)         
        { 
            $loc = City::where('id','=',$request->location_id)->first(); 
            $client->location  = $loc->name; 
            $client->latitude  = $loc->latitude;
            $client->longitude = $loc->longitude;
        }       
        $client->password      =   Hash::make($request->password);
        $client->save();
        //dd($client);

       /* if($client->save())
        {         
            $role = Role::select('id')->where('title', 'client')->first();
            $client->roles()->attach($role);
        }

        $details=[
            'name'=> $request->input('name'),
           // 'password'=> $request->input('password'),
            'email'=> $request->input('email'),
            //'exp_date' => $request->input('exp_date'),
        ];    
      
        Mail::to($request['email'])->send(new Welcome($details));        */
        Auth::login($client);

       //return redirect()->route('client.home');
       return redirect()->route('client.home');
       //return redirect()->route('aftersignup');

    }



    public function destroy($id)
    {        

    }

    

      // Google login
      /*public function redirectToGoogle()
      {
          return Socialite::driver('google')->redirect();
      }
      
      // Google callback
      public function handleGoogleCallback()
      {
        $user = Socialite::driver('google')->stateless()->user();    
        $this->_registerOrLoginUser($user);    //dd($user);      
        return redirect()->route('client.home');
        
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
    
          return redirect()->route('client.home');
      }
 
      protected function _registerOrLoginUser($data)
      {        
         $user = User::where('email', '=', $data->email)->first();  //dd($user);
          if (!$user) {
             $user              =    new User();
             $user->name        =    $data->name;
             $user->email       =    $data->email;
             $user->provider_id =    $data->id;
             $user->avatar      =    $data->avatar;    
             //$user->password    =    $data->password;     
             $user->save();
             if($user->save())
             {            
                //$role = Role::select('id')->where('title', 'client')->first();
                $role = Session::get('role');
                $user->roles()->attach($role);
                $details=[
                    'name'=> $data->name,
                   // 'password'=> $request->input('password'),
                    'email'=> $data->email,
                    //'exp_date' => $request->input('exp_date'),
                ];    
              
                Mail::to($data['email'])->send(new Welcome($details));  
                Auth::login($user);
                //Session::flush();
             }  
             
             return redirect()->route('client.home');
          }    
         else
         {
            Auth::login($user);
            //return redirect()->intended('dashboard');
            return redirect()->route('client.home');
         }  */       
      }




}

