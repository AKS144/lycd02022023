<?php

namespace App\Http\Controllers\Artist;

use App\Item;
use App\Profile;
use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ReviewRating;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    public function show()
    {

    }

    public function store(Request $request)
    {
        $profile = Profile::where('userid','=',Auth::user()->id)->first();
        //$items = Item::where('userid','=',Auth::user()->id)->get();
       

        if($profile !== null)
        {               
           /* $this->validate($request,[
                'name'          =>   'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',
                'email'         =>   'required|email|unique:users,email',
                'mobile'        =>   'digits:13|unique:users,mobile',
                'gender'        =>   'required',
                'idtype'        =>   'required',
                //'u_no'        =>   'digits:12|numeric|unique:users,aadhar',
                'dob'           =>   'required|date|olderThan:18',
                'location'      =>   'requried|not_in:',
               // 'user_role' => 'required|not_in:0'
                'category'      =>   'required',
                'profile_img'   =>   'required|image|mimes:jpg,jpeg,png,svg,gif|max:5120',   
                'end_date'      =>   'required|date|after:start_date',          
                'studio_address'=>   'max:255',
                'skills'        =>   'max:255',
                'exp_yrs'       =>   'required|numeric|digits:2|max:255',
                'worked_loc'    =>   'max:255',
                'course_name'   =>   'max:255',
                //'course_cert_img'=>  'max:5120|image|mimes:jpg,jpeg,png,svg,gif',
                'qualification' =>   'required|max:255',   
                'education'     =>   'required|max:255',
                //'password'      =>   'required|min:8|max:16|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                //'password'      =>   'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|confirmed',
            ]);*/


           // $profile = new Profile();     
            $profile->name           =   $request->name;   
            $profile->mobile         =   '+91'.$request->mobile;    
            //$profile->mobile         =   $request->mobile;  
            $profile->userid         =   $request->userid;  
            $profile->gender         =   $request->gender;    
            $profile->email          =   $request->email;   
          
           /* if($request->hasfile('profile_img'))    
            {    
               $filepath_img = 'public/profile_img/'.$profile->profile_img;
               if(File::exists($filepath_img))
               {
                   File::delete($filepath_img);
               }
               $image_file = $request->file('profile_img');    
               $img_extension = $image_file->getClientOriginalExtension();    
               $img_filename = time().'.'.$img_extension;    
               $image_file->move('public/profile_img/',$img_filename);//folder uploads    
               $profile->profile_img = $img_filename;    
            } */          
    
            $profile->id_type        =   $request->id_type;    
            $profile->id_no          =   $request->id_no;        
            $profile->dob            =   $request->dob;                
           //dd($profile);
            $profile->save();

            // User::where('id','=',Auth::user()->id)->update([
            //         'mobile' => $profile->mobile,
            //         'gender' => $request->gender,
            //         'dob' => $request->dob,
            // ]);

            
                $user = Auth::user();
                $user->mobile = $request->mobile;
                $user->gender = $request->gender;
                //$user->dob    = $request->dob;
                $user->save();
           

            if($profile->save())
            {
                // User::where('id','=',Auth::user()->id)->update([
                //     'mobile' => $profile->mobile,
                //     'gender' => $request->gender,
                //     'dob' => $request->dob,
                // ]);

                // $user = User::where('id',Auth::user()->id)->get();
                // $user->mobile = $request->mobile;
                // $user->gender = $request->gender;
                // $user->dob    = $request->dob;
                // $user->save();

                $user = Auth::user();
                $user->mobile = $request->mobile;
                $user->gender = $request->gender;
              //  $user->dob    = $request->dob;
                $user->save();

                return redirect()->route('profilepics')->with('success','Successfully saved');
            }
            else
            {
                return redirect()->route('basic')->with('success','Successfully saved'); 
            }
            
        }   
        elseif($profile == null)
        {
            $profile = new Profile();     
            $profile->name           =   $request->name;   
            $profile->mobile         =   '+91'.$request->mobile;    
            //$profile->mobile         =   $request->mobile;  
            $profile->userid         =   $request->userid;  
            $profile->gender         =   $request->gender;    
            $profile->email          =   $request->email;    

           /* if($request->hasfile('profile_img'))    
            {    
               $filepath_img = 'public/profile_img/'.$profile->profile_img;
               if(File::exists($filepath_img))
               {
                   File::delete($filepath_img);
               }
               $image_file = $request->file('profile_img');    
               $img_extension = $image_file->getClientOriginalExtension();    
               $img_filename = time().'.'.$img_extension;    
               $image_file->move('public/profile_img/',$img_filename);//folder uploads    
               $profile->profile_img = $img_filename;    
            }  */    
    
            $profile->id_type        =   $request->id_type;    
            $profile->id_no          =   $request->id_no;        
            $profile->dob            =   $request->dob;                
           //dd($profile);
            $profile->save();

            if($profile->save())
            {         
                $user         =   Auth::user();
                $user->mobile =   $request->mobile;
                $user->gender =   $request->gender;
               // $user->dob    =   $request->dob;
                $user->save();


                return redirect()->route('profilepics')->with('success','Successfully saved');
            }
           return redirect()->route('basic')->with('success','Successfully saved');  
        }  

    }
    public function profilepics(Request $request,$id)
    {
        $profile = Profile::where('userid','=',$id)->first();
        if($request->hasfile('profile_img'))    
        {    
            $filepath_img = 'public/profile_img/'.$profile->profile_img;
            if(File::exists($filepath_img))
            {
               File::delete($filepath_img);
            }
            $image_file = $request->file('profile_img');    
            $img_extension = $image_file->getClientOriginalExtension();    
            $img_filename = time().'.'.$img_extension;    
            $image_file->move('public/profile_img/',$img_filename);//folder uploads    
            //dd($profile);
            $profile->profile_img = $img_filename;    
        }  
        $profile->save();  

        if($profile->save())
        {
            return redirect()->route('business')->with('success','Successfully saved');
        }
        else
        {
            return redirect()->route('profilepics')->with('success','Successfully saved');
        }    
       // return redirect()->route('basic')->with('success','Successfully saved');  
       
    }

    public function business(Request $request, $id)
    {     
        $profile = Profile::where('userid','=',$id)->first(); 
        
        /*$this->validate($request,[

            //education
            'degree'         =>   'min:2|max:255',
            'institute'      =>   'min:2|max:255',
            'skills'         =>   'min:2|max:255',
            'courses'        =>   'min:2|max:255',

            
            //studio address
            'locality'      =>   'min:2|max:255',
            'street'        =>   'min:2|max:255',
            'city'          =>   'min:2|max:50',
            'state'         =>   'min:2|max:50',
            'zip'           =>   'numeric|digits:6',   
            
            
            //account
            'acc_holder'     =>   'min:2|max:255',
            'bank_name'      =>   'min:2|max:255',
            'acc_no'         =>   'numeric|min:2|max:255',
            'ifsc'           =>   'alpha_num|max:255', 
            'branch'         =>   'min:5|max:255',
            'gst'            =>   'min:5|max:255', 


            //overview
            'overview'       =>   'min:25|max:2000',  
            'worked_loc'     =>   'min:5|max:255',  
            'exp_yrs'        =>   'digits:2',               

        ]);*/
            
        $profile->location_id   =    $request->location_id;
        if($profile->location_id = $request->location_id)         
        { 
            $loc = City::where('id','=',$request->location_id)->first(); 
            $profile->location  = $loc->name; 
            $profile->latitude  = $loc->latitude;
            $profile->longitude = $loc->longitude;
        }       
                   
        $profile->degree         =   $request->degree; 
        $profile->institute      =   $request->institute; 
        $profile->skills         =   $request->skills; 
        $profile->courses        =   $request->courses; 

        //studio address
        $profile->locality       =   $request->locality;
        $profile->street         =   $request->street;
        $profile->city           =   $request->city;
        $profile->state          =   $request->state;
        $profile->zip            =   $request->zip;

        //account
        $profile->acc_holder     =   $request->acc_holder;
        $profile->bank_name      =   $request->bank_name;
        $profile->acc_no         =   $request->acc_no;
        $profile->ifsc           =   $request->ifsc;
        $profile->branch         =   $request->branch;
        $profile->gst            =   $request->gst;

        //overview 
        $profile->overview       =   $request->overview; 
        $profile->worked_loc     =   $request->worked_loc;
        $profile->exp_yrs        =   $request->exp_yrs; 
        
        $profile->profile_url   =    'https://www.lytaa.com/profshow/'.$profile->id;

        //dd($profile);
        $profile->save();
    
        $profile->categories()->sync($request->input('categories', []));

        if($profile->save())
        {
            $loc = City::where('id','=',$request->location_id)->first(); 
           
            /*User::where('id','=',Auth::user()->id)->update([
                'location_id' => $loc->id,
                'location' => $loc->name,
                'latitude' => $loc->latitude,
                'longitude' => $loc->longitude,
            ]);*/

            $user = Auth::user();
            $user->location_id  =  $loc->id;
            $user->location     =  $loc->name;
            $user->latitude     =  $loc->latitude;
            $user->longitude    =  $loc->longitude;
            $user->save();


            return redirect()->route('equipments')->with('success','Successfully saved');
        }

        
    }

    public function getitem()
    {
        $items = Item::where('user_id','=',Auth::user()->id);
        return view('artist.setting.equipments',compact('items'));
    }
  

    public function itemstore(Request $request)
    {
        //please dont delete code for multiple
        // $request->validate([
        //     'name'  =>   'required|max:120',
        // ]);
       /* foreach ($request->name as $value) 
        {     
            $item               =   new Item();
            $item->user_id      =   Auth::user()->id; 
           // $item->profile_id   =   $profile->id;
            $item->name         =   $value;
            //$item->save();
            dd($item);
        }*/

        /*$request->validate([
            'addmore.*.name' => 'required',
        ]);

        foreach ($request->addmore as $key => $value) 
        {     
            $item               =   new Item();
            $item->user_id      =   Auth::user()->id; 
            //$item->profile_id   =   $profile->id;
            $item->name         =   $value;
            $item->save();
        }*/


       /* foreach ($request->add_Equipment as $value) 
        {          
            $item               =   new Item();
            $item->user_id      =   Auth::user()->id;
           // $item->profile_id   =   $profile->id;
            $item->name         =   $value;
            $item->save();
        }*/
       

        $item               =   new Item();
        $item->user_id      =   Auth::user()->id;          
        $item->name         =   $request->name;
        $item->save();

        Profile::where('userid','=',Auth::user()->id)->update([
            'status' => '1',
        ]);

        return redirect()->back()->with('success','Successfully added');
    }

   /* public function itemedit()
    {
        $item = Item::all();
    }*/

    public function itemupdate(Request $request, $id)
    {
        $item               =   Item::find($id);
      //  $item->user_id      =   Auth::user()->id;          
        $item->name         =   $request->name;  //dd($item);
        $item->save();
        //dd($item);

        return redirect()->route('equipments')->with('success','Updated Successfully');
    }

    public function itemdelete($id)
    {
        $item = Item::find($id);
        $item->delete();
       // dd($item);
        return redirect()->route('equipments')->with('error','Deleted Successfully');
    }


    public function reviewstore(Request $request)
    {     
        // $this->validate($request, array(
        //     'user_id'=>'required',
        //     'artist_id' =>'required',
        // ));

                $review                =    new ReviewRating();
                $review->artist_id     =    $request->artist_id;
                $review->user_id       =    Auth::user()->id;
                $review->name          =    Auth::user()->name;
                $review->email         =    Auth::user()->email;                          
                $review->comments      =    $request->comment;
                $review->star_rating   =    $request->rating;
                //dd($review);
                $review->save();
               
       /* $status = ReviewRating::where('user_id',Auth::user()->id)
                                ->where('_id',$request->artist_id)
                                ->first();
               
            if(isset($status->user_id) and isset($request->artist_id))
            {
                // $review                = ReviewRating::find($status->user_id); 
                // $review->comments      = $request->comment;
                // $review->star_rating   = $request->rating;
                // $review->save();

                // $review = ReviewRating::where('profile_id','=',$request->profile_id)
                //                         ->where('user_id','=',$status->user_id)
                //                         ->update([
                //                             'comments'      =>  $request->comment,
                //                             'star_rating'   =>  $request->rating,
                //                         ]); // dd($review);


                // Contract::where('id',$request->contract_id)->update([
                //                 'client_feedback' => 'Yes',
                //                 'client_reason' => $request->client_reason,
                //         ]);
                                
                // Quotes::where('contract_id','=',$request->contract_id)->update([
                //                 'client_feedback' => 'Yes',
                //                 'client_reason' => $request->comment,
                //         ]);                       

                //return redirect()->back()->with('success','Submitted Successfully,');              

                return redirect()->back()->with('error', 'Already given your review');
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

               
                // if($review->save())
                // {
                //     Contract::where('id',$request->contract_id)->update([
                //         'client_feedback' => 'Yes',
                //         'client_reason' => $request->client_reason,
                //     ]);
            
                //     Quotes::where('contract_id','=',$request->contract_id)->update([
                //                         'client_feedback' => 'Yes',
                //                         'client_reason' => $request->comment,
                //     ]); 
                // }
        

                return redirect()->back()->with('success','Submitted Successfully,');               
            }*/
    }

}
