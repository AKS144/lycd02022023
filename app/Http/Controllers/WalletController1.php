<?php

namespace App\Http\Controllers;

use App\Album;
use App\User;
use Redirect;
use Razorpay\Api\Api;
use App\Models\Wallet;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

        $payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'user_id' => Auth::user()->id,
                   'amount' => $request->amount,
                ];

                //dd($payInfo);
                
        Wallet::insertGetId($payInfo);  

        
        
        Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful']);
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

      /*  $payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'user_id' => Auth::user()->id,
                   'amount' => $request->amount,                   
                ];
                              
        Wallet::insertGetId($payInfo);*/

        $pay               = new Wallet();
        $pay->payment_id   = $request->razorpay_payment_id;
        $pay->user_id      = Auth::user()->id;
        $pay->amount       = $request->amount;
        $pay->save();

       $user = User::where('id','=',$pay->user_id)->get();
       $a = Album::where('user_id','=',$pay->user_id)->get();
       if($user)
       {
           if($pay->amount == '1000')
           {
                User::where('id','=',$pay->user_id)->update([
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
                
           }
           elseif($pay->amount == '2000')
           {
                User::where('id','=',$pay->user_id)->update([
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
           }
           elseif($pay->amount == '3000')
           {
                User::where('id','=',$pay->user_id)->update([
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
           } 
       }
        
        return response()->json(['success' => 'Payment successful']);
    }

    //return redirect()->route('membership');


}
