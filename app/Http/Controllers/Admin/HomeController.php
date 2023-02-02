<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Transaction;
//use App\Http\Request;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Models\Quotes;
use App\Models\Wallet;
use Gate;


//use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::count();
        $pending = Quotes::where('status','=',0)->count();
        $ongoing = Quotes::where('status','=',1)->count();
        $completed = Quotes::where('status','=',2)->count();
        $cancel = Quotes::where('status','=',3)->count();
        $quotes = Quotes::count();

       // $amount = Wallet::sum('amount');
       // $transaction = Transaction::latest()->take(5)->get();
        $latest_user = User::latest()->take(5)->get();

      // $quotes_ongoing 
        $proj_quotes = Quotes::orderBy('id','DESC')->get();
        $proj_cancel = Quotes::where('status','=',3)->orderBy('id','DESC')->paginate(10);
        $proj_completed = Quotes::where('status','=',2)->orderBy('id','DESC')->paginate(10);
        $proj_ongoing = Quotes::where('status','=',1)->orderBy('id','DESC')->paginate(10);
        $proj_pending = Quotes::where('status','=',0)->orderBy('id','DESC')->paginate(10);
       
      
       
        //return view('admin.home',compact('user','ongoing','completed','latest_user'));
        return view('admin.home',compact('user','ongoing','completed','quotes','cancel','pending','latest_user','proj_quotes','proj_ongoing','proj_pending','proj_completed','proj_cancel'));


    }

    public function albums()
    {
        /*$albums = Album::all();
        return view('');*/
    }
   
    public function user_rating(Request $request)
    {
        User::where('id','=',$request->id)
                ->update([   
                    'ratings'=>$request->rating]);                                   
                return back();
    }

    public function transaction()
    {
        //$transaction = Transaction::all();      
        
        $transaction = Transaction::join('users', 'users.id', '=', 'transactions.artist_id')
                          ->join('jobs', 'jobs.id', '=', 'transactions.job_id')
                          ->get(['transactions.*', 'users.*','jobs.*']); //dd($transaction);

        return view('admin.transaction.index',compact('transaction'));
    }


    public function advertisementdown()
    {

    }

    public function advertisementup()
    {

    }

    public function toppic()
    {

    }

    public function logo()
    {

    }
   

}
