<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Contract;
use App\User;
use App\Job;
use Image;
use App\Models\Quotes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\TaskComplete;
use Illuminate\Support\Facades\Notification;
use \Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class ConreqController extends Controller
{
    public function index()
    {
        //$contract = Contract::where('profile_id',)
    }
    
    public function create(Profile $profile)
    {    
        return view('client.contract.create',compact('profile'));
    }

    public function store(Request $request)
    {         
       /* $this->validate($request,[   
            'name'              =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',    
            'start_date'        =>  'required|date|after:yesterday',
            'end_date'          =>  'required|date|after_or_equal:start_date',    
            'address'           =>  'required|max:255',
            'project_details'   =>  'required|max:255',          
            'job_type'          =>  'required',
            'final_price'       =>  'required|integer|min:3|max:10'           
        ]);*/

     
           $imageName = time().'.'.$request->artist_sign->extension();      
           $request->artist_sign->move(public_path('upload'), $imageName);

        
         
           /* if($request->hasFile('artist_sign')){
                $classifiedImg = $request->file('artist_sign');
                $filename = 'listing'.'-'.uniqid().'.'.$classifiedImg->getClientOriginalExtension();
            
                Image::make($classifiedImg)->encode('png', 65)->resize(760, null, function ($c) {
                    $c->aspectRatio();
                    $c->upsize();
                    })->save(public_path('/images/users/listing-images/' . $filename));*/
            
                // $classified->listing_image = $filename;
                // $classified->save();

                $contract                   =   new Contract();      
                $contract->address          =   $request->address;
                $contract->start_date = date('Y-m-d', strtotime($request->start_date));      
                if($request->end_date == NULL)
                {
                    $contract->end_date  =   date('Y-m-d' , strtotime($request->start_date));
                }
                else
                {
                    $contract->end_date  =   date('Y-m-d' , strtotime($request->end_date)); 
                }
                // $contract->start_date       =   $request->start_date;
                // $contract->end_date         =   $request->end_date;
                $contract->project_details  =   $request->project_details;
                $contract->user_id          =   $request->user_id;
                $contract->user_name        =   $request->user_name;
                $contract->user_price       =   $request->user_price;
                $contract->user_email       =   $request->user_email;
                $contract->artist_id        =   Auth::user()->id;
                $contract->artist_name      =   Auth::user()->name;
                $contract->artist_email     =   Auth::user()->email;
                $contract->profile_id       =   $request->profile_id;
                $contract->final_price      =   $request->final_price;  
                $contract->projected_budget =   $request->projected_budget;         
                $contract->artist_sign      =   $imageName; 
               // $contract->artist_sign      =   $request->artist_sign; 
                $contract->status           =   'Pending';
                //$contract->contract_artist  =   $request->contract_artist;
                $contract->price_type       =   $request->price_type;  
                $contract->job_type         =   $request->job_type; 
                $contract->artist_price     =   $request->artist_price;
                $contract->quotes_id        =   $request->quotes_id;     
                //dd($contract);
                $contract->save();
    
                if($contract->save())
                {
                    Quotes::where('id','=',$request->quotes_id)->update([               
                        'contract_id' => $contract->id,
                        'contract_artist' => '1',   
                        'final_price' => $contract->final_price,
                    ]);
                }

                Job::where('user_id',$request->user_id)
                    ->where('start_date',$request->start_date)
                    ->where('end_date',$request->end_date)
                    ->update([
                            'status' => 0
                    ]);


    
                $user = User::where('id','=', $request->user_id)->first();   
                        
                $details = [         
                    'body' => Auth::user()->name.'Send you contract please sign',                    
                ];              
            
                Notification::send($user, new TaskComplete($details));
    
                return back()->with('success', 'Form successfully submitted');
            // }else{
            //     $classified->save();
            // }          
         
    }


    public function edit(Contract $contract)
    {
       // return view('client.contract.edit')->with('contract', $contract);
    }

    //sign from artist
    public function update(Request $request, $id)
    {

        //$folderPath = public_path('upload/');       
       // $image_parts = explode(";base64,", $request->artist_sign);             
        //$image_type_aux = explode("image/", $image_parts[0]);           
        //$image_type = $image_type_aux[1];           
        //$image_base64 = base64_decode($image_parts[1]); 
       // $signature = uniqid() . '.'.$image_type;           
       // $file = $folderPath . $signature; 
       // file_put_contents($file, $image_base64);
        $imageName = time().'.'.$request->artist_sign->extension();       
        $request->artist_sign->move(public_path('upload'), $imageName);
        

        $contract                   =     Contract::find($id);     
        $contract->artist_sign      =     $imageName;
        $contract->status           =     'Ongoing';     
        $contract->save();

        if($contract->save())
        {
            Quotes::where('contract_id','=',$id)->update([               
                'contract_artist' => '1',   
                'final_price' =>    $contract->final_price, 
                'status' => 'Ongoing'        
            ]);
        }

        $user = User::where('id','=', $request->user_id)->first();   
                
        $details = [         
            'body' => Auth::user()->name.'Artist have signed please check contract',                    
        ];              
    
        Notification::send($user, new TaskComplete($details));
        
        $data = [    
            'title'  =>  'Contract',            
            // 'client_name'  =>   $request->client_name,
            // 'job_date'     =>   $request->job_date,
            // 'job_duration' =>   $request->job_duration,
            // 'address'      =>   $request->address,
             'email'        =>   $contract->user_email,
            // 'job_detail'   =>   $request->job_detail,            
            // 'phone'        =>   $request->phone,
            'final_price'     =>   $contract->final_price,
            // 'requirements' =>   $request->requirements,
            // 'user_id'      =>   Auth::user()->id,
            // 'artist_name'  =>   Auth::user()->name,    
            'artist_sign'  =>   $contract->artist_sign,    
            'client_sign'  =>   $contract->client_sign,    
        ];

        $pdf = PDF::loadView('emails.contractemail', $data);

        Mail::send('emails.contractemail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "text.pdf");
        });

        return back()->with('success', 'Signed successfully');     

    }


    public function client_sign(Request $request, $id)
    {   $request->validate([
        'user_sign' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
        //$folderPath = public_path('upload/');       
        //$image_parts = explode(";base64,", $request->user_sign);             
        //$image_type_aux = explode("image/", $image_parts[0]);   //dd($image_type_aux);       
       // $image_type = $image_type_aux[1];           //dd($image_type);
       // $image_base64 = base64_decode($image_parts[1]); //dd($image_base64);
       // $sign = uniqid() . '.'.$image_type;        //dd($sign);
       // $file = $folderPath . $sign;            //dd($file);
        //file_put_contents($file, $image_base64);
        $imageName = time().'.'.$request->user_sign->extension();       
        $request->user_sign->move(public_path('upload'), $imageName);

        $contract                =    Contract::find($id);  
        $contract->user_sign     =    $imageName; 
        $contract->status        =    'Ongoing';
        $contract->save();
               

        Quotes::where('contract_id','=',$contract->id)->update([
            'contract_client' => '1',
            'status' => 'Ongoing'
        ]);

        $user = User::where('id','=', $contract->artist_id)->first();   
                   
        $details = [         
            'body' => Auth::user()->name.'Contract Signed by client',                    
        ];              
    
        Notification::send($user, new TaskComplete($details));

        return redirect()->back()->with('success', 'Signed successfully');

    }


    //commented for later user if separate page for sign
  /*  public function artist_sign(Request $request, $id)
    {
        $folderPath = public_path('upload/');       
        $image_parts = explode(";base64,", $request->artist_sign);             
        $image_type_aux = explode("image/", $image_parts[0]);           
        $image_type = $image_type_aux[1];           
        $image_base64 = base64_decode($image_parts[1]); 
        $sign = uniqid() . '.'.$image_type;           
        $file = $folderPath . $sign; 
        file_put_contents($file, $image_base64);


        $contract                =    Contract::find($id);  
        $contract->artist_sign   =    $sign;
        $contract->save();

        //dd($contract);
        Quotes::where('contract_id','=',$contract->id)->update([
            'contract_artist' => '1',
        ]);
        
        $user = User::where('id','=', $contract->user_id)->first();   
                   
        $details = [         
            'body' => Auth::user()->name.'Contract Artist by client',                    
        ];              
    
        Notification::send($user, new TaskComplete($details));

        return redirect()->back()->with('success', 'Signed successfully');

    }*/


}
