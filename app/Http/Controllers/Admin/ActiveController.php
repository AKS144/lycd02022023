<?php

namespace App\Http\Controllers\Admin;
use App\User;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ActiveController extends Controller
{
    //

    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
 
        $user->status = $request->status;
        $user->save();
        if($request->status == 1)
        {
        return response()->json(['success'=>'Active change successfully.']);
         }else{
         return response()->json(['success'=>'Inactive  successfully.']);
        }
    }

    public function verifyStatus(Request $request)
    {
        // $profile = Profile::find($request->user_id);
        // // dd($profile);
        // // exit();
        // $profile->verify = $request->verify;
        // $profile->save();
        // DB::table('profiles')
        // ->where('userid', $request->user_id)
        // ->update(['verify' => $request->verify]);
        $user = User::find($request->user_id);
 
        $user->verify = $request->verify;
        $user->save();
        if($request->verify == 1)
        {
         return response()->json(['success'=>'verify  successfully.']);
        }else{
         return response()->json(['success'=>'unverify  successfully.']);
        }
       
    }
}
