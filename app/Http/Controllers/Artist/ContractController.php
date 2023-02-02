<?php

namespace App\Http\Controllers\Artist;

use App\Profile;
use App\Contract;

use Illuminate\Http\Request;
//use Barryvdh\DomPDF\Facade as PDF;
use \Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;


class ContractController extends Controller
{

    public function index()
    {
        $c = Auth::user()->id;      
        $contract = Contract::where('u_id','=',$c)->get();    
        return view('profiles.dashboard',compact('contract'));
       
    }

    public function create()
    {
        $c = Auth::user()->id;     
        $cont =   $cont = Contract::where('u_id','=',$c)->get();    
        return view('artist.contract.create',compact('cont'));
    }


    public function store(Request $request)
    {
       /* $this->validate($request,[           
            'client_name'     =>   'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',           
            'job_date'        =>   'required|date',
            'job_duration'    =>   'numeric|digits_between:1,10',
            'address'         =>   'required|max:255',    
            'email'           =>   'required|email|max:255',
            'cost'            =>   'numeric|max:255',  
            'requirements'    =>   'max:255', 
            'phone'           =>   'required|digits:10',
            'job_detail'      =>   'required|max:255', 
        ]);*/

        //$user = Auth::user()->id;

        //$profile = Profile::where('user_id','=',Auth::user()->id)->get();
        
       /* $contract = new Contract();     
        $contract->client_name   =    $request->client_name;        
        $contract->job_date      =    $request->job_date; 
        $contract->job_duration  =    $request->job_duration;     
        $contract->address       =    $request->address;
        $contract->job_detail    =    $request->job_detail;
        $contract->email         =    $request->email;
        $contract->phone         =    $request->phone;
        $contract->cost          =    $request->cost;
        $contract->requirements  =    $request->requirements;
        //$contract->artist_id     =    $profile->
        $contract->user_id       =    Auth::user()->id;
        $contract->artist_name   =    Auth::user()->name;
        $contract->email         =    Auth::user()->email;
        $contract->save();*/


       /* $data = [       
            'client_name'  =>   $request->client_name,
            'job_date'     =>   $request->job_date,
            'job_duration' =>   $request->job_duration,
            'address'      =>   $request->address,
            'email'        =>   $request->email,
            'job_detail'   =>   $request->job_detail,            
            'phone'        =>   $request->phone,
            'cost'         =>   $request->cost,
            'requirements' =>   $request->requirements,
            'user_id'      =>   Auth::user()->id,
            'artist_name'  =>   Auth::user()->name,               
        ];

        $pdf = PDF::loadView('emails.contractemail', $data);

        Mail::send('emails.contractemail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "text.pdf");
        });
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $contract = Contract::find($id);
        return view('artist.contract.create',compact('contract'));
    }
   

    public function update(Request $request, $id)
    {
        /*$this->validate($request,[           
            'client_name'     =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',           
            'job_date'        =>  'required|date',
            'job_duration'    =>  'numeric|digits_between:1,30',
            'address'         =>  'required|max:255',    
            'email'           =>  'required|email|max:255',
            'cost'            =>  'numeric|max:255',  
            'requirements'    =>  'max:255', 
            'phone'           =>  'required|digits:10',
            'job_detail'      =>  'required|max:255',
        ]);*/

        //$user = Auth::user()->id;

        //$profile = Profile::where('user_id','=',Auth::user()->id)->get();
    

        $folderPath = public_path('upload2/');       
        $image_parts = explode(";base64,", $request->artist_sign);             
        $image_type_aux = explode("image/", $image_parts[0]);           
        $image_type = $image_type_aux[1];           
        $image_base64 = base64_decode($image_parts[1]); 
        $signature = uniqid() . '.'.$image_type;           
        $file = $folderPath . $signature; 
        file_put_contents($file, $image_base64);
        
        $contract                =   Contract::find($id);       
        $contract->artist_sign   =   $signature;
        $contract->artist_name   =   Auth::user()->name;   
        $contract->save();

        $data = [       
            // 'client_name'  =>   $request->client_name,
            // 'job_date'     =>   $request->job_date,
            // 'job_duration' =>   $request->job_duration,
            // 'address'      =>   $request->address,
             'user_email'     =>   $contract->user_email,
            // 'job_detail'   =>   $request->job_detail,            
            // 'phone'        =>   $request->phone,
             'cost'           =>   $contract->cost,
             'sign'           =>   $contract->sign,
             'artist_sign'      =>   $contract->artist_sign,
            // 'requirements' =>   $request->requirements,
            // 'user_id'      =>   Auth::user()->id,
            // 'artist_name'  =>   Auth::user()->name,  
            'title' => 'Lighterature Contract', 
        ];

        $pdf = PDF::loadView('emails.contractemail', $data);
  
        Mail::send('emails.contractemail', $data, function($message)use($data, $pdf) {
            $message->to($data['user_email'], $data['user_email'])  
                    ->subject($data["title"])  
                    ->attachData($pdf->output(), "contract.pdf");
        });

        //dd('Mail sent successfully');

    }


    public function destroy($id)
    {
        //
    }


    public function img()
    {
        return view('resize');
    }

    public function resize_image()
    {
        $this->validate($request, [
            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           ]);
      
           $image = $request->file('image');      
           $image_name = time() . '.' . $image->getClientOriginalExtension();      
           $destinationPath = public_path('/thumbnail');      
           $resize_image = Image::make($image->getRealPath());      
           $resize_image->resize(1280, 720, function($constraint){
                $constraint->aspectRatio();
           })->save($destinationPath . '/' . $image_name);      
           $destinationPath = public_path('/traveldeck');      
           $image->move($destinationPath, $image_name);
      
           return back()->with('success', 'Image Upload successful')->with('imageName', $image_name);
      
          }
    }
}
