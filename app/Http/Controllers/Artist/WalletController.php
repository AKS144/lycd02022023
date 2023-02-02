<?php

namespace App\Http\Controllers\Artist;

use App\Album;
use App\User;
use Redirect;
use Razorpay\Api\Api;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

class WalletController extends Controller
{
    public function payWithRazorpay()
    {        
        return view('wallet/create');
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        /*$payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'user_id' => Auth::user()->id,
                   'amount' => $request->amount,
                ];

                
       Wallet::insertGetId($payInfo);  */

        /*$coins = ($request->amount)/2;
        Wallet::where('user_id','=',Auth::user()->id)->update([
                'amount' => DB::raw('amount+'.$request->amount),
                'exp_date' => Carbon::now()->addDays(365),
               ]);*/

        $coins = ($request->amount)/10;  //dd($coins);
        Wallet::where('user_id','=',Auth::user()->id)->update([
                'amount' => DB::raw('amount+'.$coins),     
                'exp_date' => Carbon::now()->addDays(365),           
               ]);    

        
        
        //Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successfully done']);
    }

    public function package(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        $wallet = Wallet::where('user_id','=',Auth::user()->id)->first();

        if(!$wallet)
        {
            $pay               = new Wallet();
            $pay->payment_id   = $request->razorpay_payment_id;
            $pay->user_id      = Auth::user()->id;
            $pay->amount       = $request->amount;
            $pay->save();
        }
        else
        {   
            $user = Auth::user()->id;
            $a = Album::where('user_id','=',$user)->get();
            if($user)
            {
                if($request->amount == '1000')
                {
                     User::where('id','=',$user)->update([
                         'package'       => '1',
                         'status'        => '1',
                         'exp_date'      =>  Carbon::now()->addDays(365),
                         'suspend_date'  =>  Carbon::now()->addDays(425),
                         'notify_date'   =>  Carbon::now()->addDays(358),
                     ]);
     
                     for($a=1; $a <= 10; $a++) 
                     { 
                         Album::where('user_id','=',Auth::user()->id) 
                                 ->update([ 
                                             'status'=> '1',
                         ]);
                     }    
                     
                    $wallet = Wallet::where('user_id','=',Auth::user()->id)->update([
                        'amount' => 300,
                        'package'       => '1',
                        'payment_id' => $request->razorpay_payment_id
                    ]);

                }
                elseif($request->amount == '2000')
                {
                     User::where('id','=',$user)->update([
                         'package'       => '2',
                         'status'        => '1',
                         'exp_date'      =>  Carbon::now()->addDays(365),
                         'suspend_date'  =>  Carbon::now()->addDays(425),
                         'notify_date'   =>  Carbon::now()->addDays(358),
                     ]);
     
                     for($a=1; $a <= 15; $a++) 
                     { 
                         Album::where('user_id','=',Auth::user()->id) 
                                 ->update([ 
                                             'status'=> '1',
                         ]);
                     } 

                    $wallet = Wallet::where('user_id','=',Auth::user()->id)->update([
                        'amount' => 500,
                        'package'       => '2',
                        'payment_id' => $request->razorpay_payment_id
                    ]);   
                }
                elseif($request->amount == '3000')
                {
                     User::where('id','=',$user)->update([
                         'package'       => '3',
                         'status'        => '1',
                         'exp_date'      =>  Carbon::now()->addDays(365),
                         'suspend_date'  =>  Carbon::now()->addDays(425),
                         'notify_date'   =>  Carbon::now()->addDays(358),
                     ]);
                     for($a=1; $a <= 20; $a++) 
                     { 
                         Album::where('user_id','=',Auth::user()->id) 
                                 ->update([ 
                                             'status'=> '1',
                         ]);
                     }  
                     
                    $wallet = Wallet::where('user_id','=',Auth::user()->id)->update([
                        'amount' => 700,
                        'package'       => '3',
                        'payment_id' => $request->razorpay_payment_id
                    ]);
                } 
            }
        }
  
       // return response()->json(['success' => 'Payment successful']);
       return redirect()->route('membership');
    }

    //return redirect()->route('membership');


}
