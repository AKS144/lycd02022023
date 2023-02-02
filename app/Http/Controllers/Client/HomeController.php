<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Wishlist;
use App\Models\Quotes;
use App\Product;
use App\Contract;
use PDF;
use App\Job;
use App\User;
use App\Album;
use App\Profile;
use App\ReviewRating;
use App\Category;
use App\Rewards;
use App\Notifications\TaskComplete;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;


class HomeController extends Controller
{
    public function index(Request $request)
    {       
        $contracts = Contract::where('user_id',Auth::user()->id)->count();
        $job = Job::where('user_id',Auth::user()->id)->count();
        $quotes = Quotes::where('user_id',Auth::user()->id)->count();

        $jobs = Job::where('user_id',Auth::user()->id)->orderBy('id','DESC')->take(2)->get();
        //dd($quotes);


        $ip = $request->ip(); 
        $i = Location::get($ip);  
        $profiles = DB::table("profiles")
                        ->select("profiles.*"
                           ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                           * cos(radians(profiles.latitude)) 
                           * cos(radians(profiles.longitude) - radians(" . $i->longitude . ")) 
                           + sin(radians(" .$i->latitude. ")) 
                           * sin(radians(profiles.latitude))) AS distance"))  
                           ->where('verify','=','1')
                           ->where('status','=','1')             
                           ->orderBy('distance', 'asc')
                           ->take(5)->get();
        //dd($profiles);                   

        return view('client.client',compact('contracts','jobs','quotes','job','profiles'));      
    }

    public function setting()
    {
        return view('client.setting');
    }

    public function jobpost()
    {
        return view('client.jobpost');

    }
    


    public function contractlist()
    {
        $contract = Contract::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();  
        return view('client.contractlist',compact('contract'));

    }

    public function addjobpost()
    {
        return view('client.addjobpost');
    }

    public function client_wishlist()
    {       
        $user = Auth::user();
        $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->get();
        
        return view('client.wishlist.index', compact('user','wishlists'));

    }

    public function clientupdate(Request $request, $id)
    {
        $this->validate($request,[ 
            'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',           
            //'mobile' => 'unique:users,mobile',  
            'mobile' => 'digits:10|numeric|unique:users,mobile',        

           // 'password' => 'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|confirmed',           
        ]);

        $user           =   User::findOrFail($id);
        $user->mobile   =   '+91'.$request->mobile;
        $user->name     =   $request->name;
        $user->gender   =   $request->gender;
        $user->save();

        return redirect()->route('client.home');

    }


    public function client_abort_proposal(Request $request,$id)
    {
       Quotes::whereId($id)->update([
           'client_reason' => $request->client_reason,
           'client_status' => '2'           
       ]);  

       $quotes = Quotes::where('id','=',$id)->first();  

       //to notify
       $user = User::where('id','=', $quotes->user_id)->first();                           
       $details = [         
                   'body' => Auth::user()->name.' has aborted proposal',                    
               ];  
       Notification::send($user, new TaskComplete($details));
               
       return redirect()->back()->with('success','Sent successfully');
    }

    public function accept($id,$status)
    {
        Quotes::whereId($id)->update([           
            'client_status' => $status, 
            'artist_status'  => $status,
        ]);

        $quotes = Quotes::where('id','=',$id)->first();  

        //to notify
        $user = User::where('id','=', $quotes->user_id)->first();                           
        $details = [         
                    'body' => Auth::user()->name.' has accepted your proposal',                    
                ];  
        Notification::send($user, new TaskComplete($details));
                
        return redirect()->back()->with('success','Sent successfully');
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

    public function quotation()
    {              

       $quotes = Quotes::where('user_id','=',Auth::user()->id)->orderby('id','desc')->get();
     
       /*$quotes = Quotes::join('contracts','quotes.id','=','contracts.quotes_id')
                            ->select('quotes.*', 'contracts.*')
                            ->where('quotes.user_id', '=', Auth::user()->id)  
                            ->get(); */
                         //dd($quotes);  

        /* $quote = Quotes::where('user_id', '=', Auth::user()->id)->whereNotNull('invoice')->first(); //whereNotNull    
        $products = Product::where('contract_id','=',$quote->contract_id)->pluck('product_name','description','price','unit_price','qty')->all();     
        return view('client.quotation.index',compact('quotes','products')); */

        /*Working temporary hide */                 
      /* $quote = Quotes::where('user_id', '=', Auth::user()->id)->first();  //whereNotNull    
            $products = Product::where('quotes_id','=',$quote->id)->get();     
            return view('client.quotation.index',compact('quotes','products')); */  


        $qt = Quotes::where('user_id','=',Auth::user()->id)->first(); //dd($qt);       

        if($qt)
        {    
            $products = Product::where('quotes_id','=',$qt->id)->get(); //dd($products);    
            $sum = $products->sum('price');
            //$tax = $sum * 0.18;
            $tax = $sum * 0;
            $total = $sum + $tax;
            return view('client.quotation.index',compact('products','sum','tax','total','quotes'));      
        }    


        return view('client.quotation.index',compact('quotes')); 

    }


    //feedback for No
    public function nofeedback(Request $request, $id)
    {
        // $contracts = Contract::find($id);
        // $contracts->client_feedback = 'No';
        // $contracts->client_reason = $request->client_reason;
        // $contracts->save();


        $contracts = Contract::find($id);
        $contracts->update([
            'client_feedback' => 'No',
            'client_reason' => $request->client_reason,
        ]);

        Quotes::where('contract_id','=',$id)->update([
            'client_feedback' => 'No',
            'client_reason' => $request->client_reason,
        ]);

        return redirect()->back();
      
    }

    public function yesfeedback(Request $request)
    {     
        $this->validate($request, array(
            'user_id'=>'required',
            'artist_id' =>'required',
        ));

             
        $status = ReviewRating::where('user_id',Auth::user()->id)
                                ->where('artist_id',$request->artist_id)
                                ->first();
               
            if(isset($status->user_id) and isset($request->artist_id))
            {
                /*$review                = ReviewRating::find($status->user_id); 
                $review->comments      = $request->comment;
                $review->star_rating   = $request->rating;
                $review->save();*/

                $review = ReviewRating::where('artist_id','=',$request->artist_id)
                                        ->where('user_id','=',$status->user_id)
                                        ->update([
                                            'comments'      =>  $request->comment,
                                            'star_rating'   =>  $request->rating,
                                        ]); // dd($review);


                Contract::where('id',$request->contract_id)->update([
                                'client_feedback' => 'Yes',
                                'client_reason' => $request->comment,
                        ]);
                                
                Quotes::where('contract_id','=',$request->contract_id)->update([
                                'client_feedback' => 'Yes',
                                'client_reason' => $request->comment,
                        ]);                       

                return redirect()->back()->with('success','Submitted Successfully,');              

                //return redirect()->back()->with('error', 'Already given your review');
            }
            else
            {              
                $review                =    new ReviewRating();
                $review->artist_id     =    $request->artist_id;
                $review->user_id       =    Auth::user()->id;
                $review->name          =    Auth::user()->name;
                $review->email         =    Auth::user()->email;                          
                $review->comments      =    $request->comment;
                $review->star_rating   =    $request->rating;
                dd($review);
                $review->save();

               
                if($review->save())
                {
                    Contract::where('id',$request->contract_id)->update([
                        'client_feedback' => 'Yes',
                        'client_reason' => $request->comment,
                    ]);
            
                    Quotes::where('contract_id','=',$request->contract_id)->update([
                                        'client_feedback' => 'Yes',
                                        'client_reason' => $request->comment,
                    ]); 
                }
        
                return redirect()->back()->with('success','Submitted Successfully,');               
            }
    }

    
    public function project_contract($id)
    {
        $contract = Contract::findOrFail($id);
        //dd($contract);
        return view('client.contract.contract',compact('contract'));
    }


    public function invoice($id)
    {
        $contract = Contract::find($id); //dd($contract);       
        $quotes = Quotes::where('contract_id','=',$contract->id)->first();
        $products = Product::where('quotes_id','=',$quotes->id)->get(); 
        $sum = $products->sum('price');
       // $tax = $sum * 0.18;
        $tax = $sum * 0;       
        $total = $sum + $tax;

        $pdf = PDF::loadView('client.quotation.invoice', compact('products','contract','sum','tax','total'));
        return $pdf->download('invoice.pdf');
        
        //return view('client.quotation.invoice',compact('products','contract','sum','tax','total'));

    }


    public function client_sign(Request $request, $id)
    {
        $folderPath = public_path('upload/');       
        $image_parts = explode(";base64,", $request->user_sign);             
        $image_type_aux = explode("image/", $image_parts[0]);           
        $image_type = $image_type_aux[1];           
        $image_base64 = base64_decode($image_parts[1]); 
        $signature = uniqid() . '.'.$image_type;           
        $file = $folderPath . $signature; 
        file_put_contents($file, $image_base64);

        $contract                =    Contract::find($id);  
        $contract->user_sign     =    $signature; //dd( $contract);
        $contract->save();

       return redirect()->back();

    }

    public function project_list()
    {
        $quotes = Quotes::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
           /*$album = DB::table('users')
                   ->join('albums', 'users.id', '=', 'albums.user_id') 
                   ->join('profiles', 'users.id', '=', 'profiles.userid')
                   ->where('profiles.id','=',$id)
                   ->select('profiles.*','albums.*')
                   ->get();*/
       // $quotes = Quotes::join('jobs')           
        return view('client.projects.index',compact('quotes'));
    }


    public function notification()
    {       
        //Auth::user()->unreadNotifications->markAsRead(); //hidded for later developement

        $notifications = Auth::user()->notifications()->latest()->paginate(10); //dd($notifications);    

        DB::table('notifications')->where('created_at','<=',now()->subDays(30))->delete();    

        return view('client.notification.index',compact('notifications'));
    }

    public function project_completed()
    {
        $quotes = Quotes::where('user_id',Auth::user()->id)->where('status','=',2)->orderBy('id','desc')->get();  
        return view('client.projects.completed',compact('quotes'));
    }

    public function project_ongoing()
    {       
        $quotes = Quotes::where('user_id',Auth::user()->id)->where('status','=',1)->orderBy('id','desc')->get();  
        return view('client.projects.ongoing',compact('quotes'));
    }
    
    public function project_cancel()
    {
        $quotes = Quotes::where('user_id',Auth::user()->id)->where('status','=',3)->orderBy('id','desc')->get();  
        return view('client.projects.cancel',compact('quotes'));
    }
    public function project_pending()
    {
        $quotes = Quotes::where('user_id',Auth::user()->id)->where('status','=',0)->orderBy('id','desc')->get();  
        return view('client.projects.pending',compact('quotes'));
    }

}
