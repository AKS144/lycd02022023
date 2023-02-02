<?php

namespace App\Http\Controllers\Artist;

use App\User;
use App\Album;
use App\Item;
use App\Job;
use App\Package;
use App\Rewards;
use App\Models\Quotes;
use App\Profile;
use App\JobApply;
use App\Wallet;
use App\Transaction;
use App\Product;
use App\Category;
use App\Contract;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\TaskComplete;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;



class HomeController extends Controller

{

    public function index()

    {
        $user = Auth::user()->id;

        $profile = Profile::where('userid','=',$user)->get();

        $album = Album::where('user_id','=',$user)->get();		
    

        /* $items = DB::table('users')
                     ->join('albums', 'users.id', '=', 'albums.user_id') 
                     ->join('profiles', 'users.id', '=', 'profiles.userid')
                     ->where('profiles.id','=',$id)
                     ->select('profiles.*','albums.*')
                     ->get();*/
 
        $items = DB::table('users')
                     ->join('items', 'users.id', '=', 'items.user_id') 
                     ->join('profiles', 'users.id', '=', 'profiles.userid')
                     ->where('profiles.id','=','items.profile_id')
                     ->select('profiles.*','items.*')
                     ->get();
 
        $job = Job::latest()->take(5)->get();

        $package = DB::table('packages')
                     ->join('users', 'users.package', '=', 'packages.id')                    
                     ->where('users.id','=',$user)
                     ->select('packages.*','users.*')
                     ->first();
     
        $user = Auth::user();       
        $proj_ongoing = Quotes::where('status','=',1)->where('artist_id','=',$user->id)->count();
        $proj_completed = Quotes::where('status','=',2)->where('artist_id','=',$user->id)->count();
        $proj = $proj_completed + $proj_ongoing;
                      
                      
         /* DB::table('notifications')
                            ->where('notifiable_id','=',$user)  
                            ->latest()->take(5)->get();  */     
        
        $quotes = Quotes::where('artist_id','=',$user->id)->orderBy('id','DESC')->latest()->take(5)->get();
                            
               
        $notification = Auth::user()->notifications()->limit(10)->get();
        // dd($items);
         return view('artist.artist', compact('profile','items','album','job','package','notification','proj','proj_completed','proj_ongoing','quotes'));  

    }

    public function create(User $user)

    {

        //$locations = City::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $locations = City::orderBy('name', 'ASC')->pluck('name', 'id');

        $categories = Category::all()->pluck('name', 'id');

        return view('artist.profile.create',compact('locations', 'categories','user'));

    }

    public function jobshow(Job $job)
    {     
        $users = DB::table('users')
                    ->join('jobs', 'users.id', '=', 'jobs.user_id')  
                    ->where('users.id','=',$job->user_id)
                    ->select('users.*')                    
                    ->first();  dd($users);

        //$count_job = DB::table('jobs')->where('user_id','=',$users->id)->count();            

      /*  $now = Carbon::now();
        $end_date = $job->end_date;
        $cDate = Carbon::parse($end_date);
        $count = $now->diffInDays($cDate );

        $date1 = $job->start_date;
        $s = Carbon::parse($date1);
        $date2 = $job->end_date;
        $e = Carbon::parse($end_date);
        $dur = $s->diffInDays($e);

        if($dur == '0')
        {
            $duration = '1';
            return view('jobs.show', compact('job','count','duration','users'));
        }
        else
        {
            $duration = $dur;
            return view('jobs.show', compact('job','count','duration','users'));
        }    */

    }

   /* public function getprofile()
    {
        //artist/sidebar
        $d = Auth::user()->id;
        $user = User::find($d);
        $profile = $user->profile->profile_img;
      //  dd($prof->profile_img);

        return view('artist.sidebar',compact('profile'));
    }*/


    public function profile()
    {
        return view('artist.profile.profile');
    }


    public function project_list()
    {
        $contracts = Quotes::orderBy('id','desc')->get();          

        //$contracts = Contract::get();
        
        return view('artist.projects.index',compact('contracts'));
    }


    public function project_completed()
    {
        $contracts = Quotes::where('status','=',2)->orderBy('id','desc')->get();  
        return view('artist.projects.completed',compact('contracts'));
    }

    public function project_ongoing()
    {
        $contracts = Quotes::where('status','=',1)->orderBy('id','desc')->get();       
        return view('artist.projects.ongoing',compact('contracts'));
    }
    
    public function project_cancel()
    {
        $contracts = Quotes::where('status','=',3)->orderBy('id','desc')->get();   
        return view('artist.projects.cancel',compact('contracts'));
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
        
       //dd($profile->userid);
       //dd($albums);
       return view('artistshow', compact('profile','albums','items','rewards'));
       
    }


     public function project_pending()
    {
       /* $jobs = DB::table('jobs')
            ->join('job_applies', 'jobs.id', '=','job_applies.job_id')
            ->join('users','jobs.user_id','=','users.id')
            ->where('artist_id','=',Auth::user()->id)
            ->select('jobs.*','users.id')
            ->get(); //dd($jobs);*/
       // $contracts = Contract::where('status','=',0)->orderBy('id','desc')->get();   
        return view('artist.projects.pending');
    }


    public function wishlist()
    {
        $user = Auth::user()->id;
        //$job_applies = JobApply::where('artist_id','=',$user)->get();

        $jobapply = JobApply::join('jobs', 'jobs.id', '=','job_applies.job_id')
                                ->join('users','users.id','=','job_applies.artist_id')
                                ->where('artist_id','=', $user)
                                ->select('jobs.*')
                                ->get(); 
                    //dd($jobapply);  

        return view('artist.wishlist.index',compact('jobapply'));

    }

    public function membership()
    {
        $packone = Package::first();
        $packtwo = Package::skip(1)->take(1)->first();
        $packthree = Package::skip(2)->take(1)->first();

        $user = User::where('id','=',Auth::user()->id)->first(); 
        
        $package = Package::where('id','=',$user->package)->first();
        
        return view('artist.membership.index',compact('packone','packtwo','packthree','user','package'));
    }

    public function payment()
    {
        $wallet = Wallet::where('user_id','=',Auth::user()->id)->first();
        return view('artist.payment.index',compact('wallet'));
    }

    public function payment_list()
    {
        $trans = Transaction::where('artist_id','=',Auth::user()->id)->orderBy('id','DESC')->paginate(10);  		
        return view('artist.payment.list',compact('trans'));
    }

    public function album_list()
    {
        $categories = Category::all()->pluck('name', 'id');        
        return view('artist.album.index',compact('categories'));
    }

    public function basic(User $user)
    {   
        $profile = Profile::where('userid','=',Auth::user()->id)->first();
        $items = Item::where('user_id','=',Auth::user()->id)->get();     
        $locations = City::orderBy('name')->pluck('name', 'id');
        //$locations = City::sortBy('name')->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
      
        //return view('artist.profile.create',compact('locations', 'categories','user'));
        return view('artist.setting.basic',compact('locations', 'categories','user','profile','items'));
        //return view('artist.setting.index');
    }

    public function profilepics(User $user)
    {
        $profile = Profile::where('userid','=',Auth::user()->id)->first();

        return view('artist.setting.profilepics',compact('profile','user'));
    }

    public function business(User $user)
    {
        $profile = Profile::where('userid','=',Auth::user()->id)->first();
       // $items = Item::where('profile_id','=',$profile->id)->get();    
        $items = Item::where('user_id','=',Auth::user()->id)->get();     

        $locations = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
             
        return view('artist.setting.business', compact('locations', 'categories','user','profile','items'));
    }

    public function equipments()
    {
        $items = Item::where('user_id','=',Auth::user()->id)->get();
        return view('artist.setting.equipments',compact('items'));
    }

    public function uploads()
    {
        return view('artist.album.upload');
    }
    

    public function album_show()
    {
        return view('artist.album.show');
    }

    public function notification()
    {    
        //Auth::user()->unreadNotifications->markAsRead();
        $notifications = Auth::user()->notifications()->latest()->paginate(10); //dd($notifications);    

        DB::table('notifications')->where('created_at','<=',now()->subDays(30))->delete();
               
        return view('artist.notification.index',compact('notifications'));
    }

    
  /* public function markasread()
   {
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
   }*/

    public function project_view($id)
    {
        $quotes = Quotes::findOrFail($id);
        $contract = Contract::where('quotes_id','=',$quotes->id)->first(); //dd($contract->user_name);        
        $products = Product::where('quotes_id','=',$quotes->id)->get();
        $sum = $products->sum('price');
        $tax = $sum * 0;
        $total = $sum + $tax;

       // return view('artist.projects.view',compact('contract','products','sum','tax','total'));
       //return view('artist.projects.project',compact('quotes','products','sum','tax','total','contract'));
       return view('artist.proposal.project',compact('quotes','products','sum','tax','total','contract'));


    }


    public function project_estimate($id)
    {
        $quotes = Quotes::findOrFail($id);// dd($quotes);
        $products = Product::where('quotes_id','=',$quotes->id)->get();
        $sum = $products->sum('price');
       // $tax = $sum * 0.18;
        //$tax = $sum * 0;
        $total = $sum;

       // return view('artist.proposal.estimate',compact('quotes','products','sum','tax','total'));
        return view('artist.proposal.estimate',compact('quotes','total','products'));
    }

    //send estimate to client only to change status
    public function sent_estimate($id,$status)
    {
        $quotes = Quotes::findOrFail($id);
        $products = Product::where('quotes_id','=',$quotes->id)->get();
        $sum = $products->sum('price');           

        Quotes::whereId($id)->update([
            'invoice' => $status,  
            'final_price' => $sum         
        ]);  

        $quotes = Quotes::where('id','=',$id)->first();  

        //to notify
        $user = User::where('id','=', $quotes->user_id)->first();                           
        $details = [         
                    'body' => Auth::user()->name.' has sent his estimate',                    
                ];  
        Notification::send($user, new TaskComplete($details));
                
        return redirect()->route('my_proposals')->with('success','Sent successfully');
    }

   

    public function project_status(Request $request)
    {
        Contract::where('id','=',$request->id)
                ->update([   
                    'status'=>$request->status]);
            
        Quotes::where('contract_id','=',$request->id)->update([                  
                    'status' => $request->status
                ]);  
                
        //flash('Status Updated')->success();                        
        //return redirect()->back()->with('success', 'Sent successfully');  
        return response()->json(['success'=>'Status change successfully.']);
        
    }


    public function project_update_status(Request $request)
    {
        Contract::where('id','=',$request->id)
                ->update([   
                    'status'=>$request->status]);
            
        Quotes::where('contract_id','=',$request->id)->update([                  
                    'status' => $request->status
                ]);  
                
        //flash('Status Updated')->success();                        
        //return redirect()->back()->with('success', 'Sent successfully');  
        return response()->json(['success'=>'Status change successfully.']);

    }




    public function project_contract($id)
    {
        $contract = Contract::findOrFail($id); //dd($contract);
        // $quotes = Quotes::where('contract_id','=',$id)->first();
        // if($quotes)
        // {
        //     $products = Product::where('quotes_id','=',$quotes->id)->get(); //dd($products);
        //     $sum = $products->sum('price');//dd($sum);
        //     $tax = $sum * 0;// for 18% tax to be updated in future
        //     $total = $sum + $tax;
        // }    

        //return view('artist.contract',compact('contract','quotes','products','sum','tax','total'));
        return view('artist.contract',compact('contract'));

    }

  

    public function my_proposals()
    {
        $proposal = Quotes::where('artist_id','=',Auth::user()->id)->get();//dd($proposal);//true
        $quotes = Quotes::where('artist_id','=',Auth::user()->id)->first(); //dd($proposalid->id);             
        
        if($quotes)
        {
            $products = Product::where('quotes_id','=',$quotes->id)->get(); //dd($products);
            $sum = $products->sum('price');
            // $tax = $sum * 0.18;
            $total = $sum;// + $tax;
            return view('artist.proposal.index',compact('products','sum','total','proposal'));
        } 
        
        return view('artist.proposal.index',compact('proposal'));
    }


    /*public function artist_contract()
    {
        //$contract = Contract::where('artist_id','=',Auth::user()->id)->get();//dd($proposal);
        //$contracts = Contract::findOrFail($id); //dd($contract->user_name);
        $contract = DB::table('contracts')
                    ->join('products', 'contracts.id', '=','products.contract_id')                   
                    ->where('contracts.artist_id','=',Auth::user()->id)
                    ->select('contracts.*','products.*')
                    ->get(); 
        //dd($contract);
        //$products = Product::where('contract_id','=',$contract->id)->get();
         $sum = $contract->sum('price');

         //dd($sum);
        return view('artist.contract.index',compact('contract','sum'));
    }*/

    public function contract_list()
    {
        $contract = Contract::where('artist_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('artist.contract.index',compact('contract'));
    }

    public function contract_pending()
    {
        $contract = Contract::where('artist_id',Auth::user()->id)->where('status','=',0)->orderBy('id','desc')->get();       
        return view('artist.contract.pending',compact('contract'));
    }

    public function contract_ongoing()
    {
        $contract = Contract::where('artist_id',Auth::user()->id)->where('status','=',1)->orderBy('id','desc')->get();       
        return view('artist.contract.ongoing',compact('contract'));
    }

    public function contract_completed()
    {
        $contract = Contract::where('artist_id',Auth::user()->id)->where('status','=',2)->orderBy('id','desc')->get();  
        return view('artist.contract.completed',compact('contract'));
    }
    
    public function contract_cancel()
    {
        $contract = Contract::where('artist_id',Auth::user()->id)->where('status','=',3)->orderBy('id','desc')->get();   
        return view('artist.contract.cancel',compact('contract'));
    }

    public function artist_accept(Request $request,$id)
    {
        $quotes = Quotes::whereId($id)->first();
        $rewards = Rewards::where('budget','=', $quotes->projected_budget)->first();

        $wallets = DB::table('wallets')->where('user_id','=',Auth::user()->id)->get();	

        foreach($wallets as $wallets)
        {	
            if($wallets->amount >= $request->coins)
            {	
                DB::table('wallets')
                    ->where('user_id','=',Auth::user()->id)
                    ->where('amount', '>=', $rewards->coins)
                    ->decrement('amount',$rewards->coins);	

                    Quotes::whereId($id)->update([
                        'artist_accept' => '1',           
                    ]);              
                 
                    $trans 			    =   new Transaction();
                    $trans->artist_id   =   Auth::user()->id;
                    $trans->coins       =   $rewards->coins;                                    
                    $trans->description  = 'Applied quotation of budget '. $quotes->projected_budget ;     
                    $trans->save();                  
             
            }           	
            return redirect()->back()->with('success', 'Accepted successfully');           
        }
    }

   public function artist_price(Request $request, $id)
    {
       /* $this->validate($request, array(
            'artist_price'      => 'required|integer|min:3|max:7',         
        ));*/

        $quotes                  =   Quotes::find($id);     
        $quotes->artist_price    =   $request->artist_price;  //dd($quotes);
        $quotes->client_status   =   '0';
        //$quotes->artist_status   =   '0';
        $quotes->save();

        $user = User::where('id','=', $quotes->user_id)->first();                      
        $details = [         
            'body' => Auth::user()->name.' sent you Quotation',                    
        ];              
    
        Notification::send($user, new TaskComplete($details));
        return redirect()->back()->with('success', 'Quotation sent successfully');
    }

    //17/09/2022
    public function artist_price_reject(Request $request, $id)
    {
        /* $this->validate($request, array(
            'artist_price'      => 'required|integer|min:3|max:7',         
        ));*/

        $quotes                  =   Quotes::find($id);     
        $quotes->artist_price    =   $request->artist_price;  //dd($quotes);
        $quotes->client_status   =   '0';
        $quotes->artist_status   =   '2';
        $quotes->save();

        $user = User::where('id','=', $quotes->user_id)->first();                      
        $details = [         
            'body' => Auth::user()->name.' sent you Quotation',                    
        ];              
    
        Notification::send($user, new TaskComplete($details));
        return redirect()->back()->with('success', 'Quotation sent successfully');
    
    }

   

     //need testing
     public function artist_reject($id,$status)
     {
         Quotes::whereId($id)->update([
             'artist_status' => $status,           
         ]);  
 
         $quotes = Quotes::where('id','=',$id)->first();  
 
         //to notify
         $user = User::where('id','=', $quotes->user_id)->first();                           
         $details = [         
                     'body' => Auth::user()->name.' has sent his estimate',                    
                 ];  
         Notification::send($user, new TaskComplete($details));
                 
         return redirect()->back()->with('success','Sent successfully');
     }

     //abort proposal giving reason
     public function abort_proposal(Request $request,$id)
     {
        Quotes::whereId($id)->update([
            'artist_reason' => $request->artist_reason,
            'artist_status' => '4'           
        ]);  

        $quotes = Quotes::where('id','=',$id)->first();  

        //to notify
        $user = User::where('id','=', $quotes->user_id)->first();                           
        $details = [         
                    'body' => Auth::user()->name.' has sent his estimate',                    
                ];  
        Notification::send($user, new TaskComplete($details));
                
        return redirect()->back()->with('success','Sent successfully');
     }


     // job applied
     public function job_applied()
     {
        return view('artist.jobs.index');
     }
    

    public function artist_status($id,$status)
    {
        // Validation
        $validate = Validator::make([
            'id'  => $id,
            'status'    => $status
        ], 
        [
            'id'  =>  'required|exists:id',
            'status'    =>  'required|in:0,1',
        ]);
       

        //Quotes::whereId($id)->where('artist_status','=',NUll)->update(['artist_status' => $status]);  
        $quotes = Quotes::whereId($id)->first(); 
        if($quotes->artist_status == '0')
        {
           
            Quotes::whereId($id)->update([
                'artist_status' => $status,
                'client_status'  => $status
            ]);  
           //$quotes = Quotes::where('id','=',$id)->first();  
            $user = User::where('id','=', $quotes->user_id)->first();   //to notify
                    
            $details = [         
                'body' => Auth::user()->name.' has accepted your Quotation',                    
            ];              
        
            Notification::send($user, new TaskComplete($details));

            return redirect()->back()->with('success','You have accepted successfully!');
        }    
        elseif($quotes->artist_status == '1')
        {
            Quotes::whereId($id)->update(['artist_status' => $status]);  
           //$quotes = Quotes::where('id','=',$id)->first();  
            $user = User::where('id','=', $quotes->user_id)->first();   //to notify
                    
            $details = [         
                'body' => Auth::user()->name.' has accepted your Quotation',                    
            ];              
        
            Notification::send($user, new TaskComplete($details));
            return redirect()->back()->with('error','You have accepted successfully!');
        }

        elseif($quotes->artist_status == '3')
        {
            Quotes::whereId($id)->update(['artist_status' => $status]);  
           //$quotes = Quotes::where('id','=',$id)->first();  
            $user = User::where('id','=', $quotes->user_id)->first();   //to notify
                    
            $details = [         
                'body' => Auth::user()->name.' has accepted your Quotation',                    
            ];              
        
            Notification::send($user, new TaskComplete($details));
            return redirect()->back()->with('success','You have accepted successfully!');
        }
    }

}

