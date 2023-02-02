<?php

namespace App\Http\Controllers;


use Exception;
//use App\Models\User;
use App\User;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public $successStatus = 200;

    public function login(Request $request)
    {
        //Log::info($request);
        if(Auth::attempt(['mobile' => request('mobile'), 'password' => request('password')])){
            return view('home');
        }
        else{
            return Redirect::back ();
        }
    }

    public function loginWithOtp(Request $request)
    {
       // Log::info($request);
        $user  = User::where([['mobile','=',request('mobile')],['otp','=',request('otp')]])->first();
        if($user)
        {
            Auth::login($user, true);
            User::where('mobile','=',$request->mobile)->update(['otp' => null]);
            //return view('home');
            $this->redirectTo = url()->previous();
        }
        else{
            return Redirect::back ();
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        if ($validator->fails()) 
        {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);

        return redirect('login');
    }

    public function sendOtp(Request $request)
    {
        $otp = rand(1000,9999);
       // Log::info("otp = ".$otp);
        $user = User::where('mobile','=',$request->mobile)->update(['otp' => $otp]);
        
        $receiverNumber = $request->mobile;
        $message = "login code is ". $otp;
    
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

        // send otp to mobile no using sms api
        return response()->json([$user],200);      
    }
    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
