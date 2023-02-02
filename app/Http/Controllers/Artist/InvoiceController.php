<?php

namespace App\Http\Controllers\Artist;

use Illuminate\Http\Request;
use App\Product;
use App\Contract;
use App\Models\Quotes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        //$product = Product::where()
    }

    //please dont delete this
    // public function addproduct(Request $request)   
    // {
    //     // $this->validate($request,[   
    //     //     'product_name'      =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|min:3|max:120',    
    //     //     'unit_price'        =>  'required|numeric|gt:0|min:2|max:7',
    //     //     'qty'               =>  'required|numeric|gt:0|min:1|max:20',    
    //     //     'price'             =>  'required|numeric|gt:0|min:3|max:7',
    //     //     'description'       =>  'required|min:10|max:255',                        
    //     // ]);


    //     $product                =    new Product();
    //     $product->product_name  =    $request->product_name;       
    //     $product->unit_price    =    $request->unit_price;
    //     $product->qty           =    $request->qty;
    //     $product->price         =    $request->unit_price * $request->qty;
    //     $product->description   =    $request->description;
    //     $product->contract_id   =    $request->contract_id;
    //     $product->quotes_id     =    $request->quotes_id;
    //     $product->artist_id     =    $request->artist_id;
    //     $product->user_id       =    $request->user_id;
    //     //dd($product);
    //     $product->save();

    //    /*Quotes::where('id','=', $product->quotes_id)->update([
    //         'invoice' => '3',                
    //     ]); */


    //     //this for invoice only when project completed
    //    /* Contract::where('id','=',$product->contract_id)->update([
    //           'status' => '2',      
    //     ]);*/

    //     /*if($product->save())
    //     {
    //             Quotes::where('contract_id','=', $request->contract_id)->update([
    //             'invoice' => '1',                
    //         ]);  

    //     //    Contract::where('id','=', $product->contract_id)->update([
    //     //         'invoice' => DB::raw('invoice+'. $product->price),                
    //     //     ]);  
    //     } */
    //     return redirect()->back()->with('success','Product added successfully');
    // }




    // public function addproduct(Request $request) 
    // {
       /* $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.qty' => 'required',
            'addmore.*.price' => 'required',            
        ]);*/

        // foreach($files as $key => $image_file)
        // foreach ($request->addmore as $key => $value) { //dd($value);
        //     Product::create($value);
        // }
        // foreach ($request->addmore as $key => $value) {
        //     ProductStock::create($value);
        // }

       /* $request->validate([
            'product_name' => 'required',
            'qty' => 'required',
            'unit_price' => 'required',
            'description' => 'required'
         ]);*/
         
        // $count = count($request->product_name);
     
        //  foreach ($i=0; $i < $count; $i++) {        
        //     $products = new Product();
        //     $products->product_name = $request->product_name[$i];	
        //     $products->qty = $request->qty[$i];	
        //     $products->unit_price = $request->unit_price[$i];	
        //     $products->description = $request->description[$i];	
        //     $products->contract_id = $request->contract_id[$i];	
        //     $products->user_id = $request->user_id[$i];
        //     $products->artist_id = $request->artist_id[$i];
        //     $products->quotes_id = $request->quotes_id[$i];	
        //     $products->save();
        //  }
        // return redirect()->route('project.estimate');


    /*
            foreach ($from as $key => $value) {
            $destination = array(
            'booking_rates_id' => $id,
            'from_station' => $value,
            'from_station_id' => $from_id[$key],
            'to_station' => $to[$key],
            'to_station_id' => $to_id[$key],
            'rate_type' => $rate_type[$key],
            'rate' => $rate[$key],
            'rate_type_id' => $rate_type_id[$key],
            );
            $this->MasterModel->addData('booking_rates_location', $destination);
    */

      /*  foreach ($request->input('product_name') as $key => $value) {
            //Product::create($value);
            $insert[$key]['product_name'] = $request->input('product_name');	
            $insert[$key]['qty'] = $request->input('qty');	
            $insert[$key]['unit_price'] = $request->input('unit_price');	
            $insert[$key]['description'] = $request->input('description');	
            $insert[$key]['contract_id'] = $request->input('contract_id');	
            $insert[$key]['user_id'] = $request->input('user_id');
            $insert[$key]['artist_id'] = $request->input('artist_id');
            $insert[$key]['quotes_id'] = $request->input('quotes_id');		
        }
       dd($insert);

       Product::insert($insert);	*/

       //$count = count($request->quotes_id);
      // $count = count($request->product_name);
       /*foreach($request->input('product_name') as $key => $value){
        $data = array(
            'product_name' => $request->input('product_name'),
            'qty' => $request->input('qty'),
            'unit_price' => $request->input('unit_price'),
            'description' => $request->input('description'),
            'contract_id' => $request->input('contract_id'),
            'user_id'  => $request->input('user_id'),
            'artist_id' => $request->input('artist_id'),
            'quotes_id' => $request->input('quotes_id')
        );
       }

       //var_dump($data);
       dd($data);
       Product::insert($data);*/
        

    //     return back()->with('success', 'Record Created Successfully.');

    // } 

    public function addproduct(Request $request)  
    {
        $request->validate([
            'product_name' => 'required',
            'unit_price' => 'required',
            'price' => 'required',
         ]);
         
         $count = count($request->product_name);
     
         for ($i=0; $i < $count; $i++) { 
           $products               =    new Product();
           $products->product_name =    $request->product_name[$i];	  
           $products->description  =    $request->description[$i];
           $products->qty          =    $request->qty[$i];
           $products->unit_price   =    $request->unit_price[$i];
           $products->price        =    $request->price[$i];
           $products->contract_id  =    $request->contract_id[$i];	
           $products->user_id      =    $request->user_id[$i];
           $products->artist_id    =    $request->artist_id[$i];
           $products->quotes_id    =    $request->quotes_id[$i];	
           $products->save();
         }
     
         return redirect()->back();
    }


     public function editproduct(Request $request,$id)
     {
        $this->validate($request,[   
            'product_name'      =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|min:3|max:120',    
            'unit_price'        =>  'required|numeric|gt:0|min:2|max:7',
            'qty'               =>  'required|numeric|gt:0|min:1|max:20',    
            'price'             =>  'required|numeric|gt:0|min:3|max:7',
            'description'       =>  'required|min:10|max:255',                        
        ]);

        $product                =    Product::find($id);
        $product->product_name  =    $request->product_name;       
        $product->unit_price    =    $request->unit_price;
        $product->qty           =    $request->qty;
        $product->price         =    $request->unit_price * $request->qty;
        $product->description   =    $request->description;
        $product->contract_id   =    $request->contract_id;
        $product->quotes_id     =    $request->quotes_id;
        $product->artist_id     =    $request->artist_id;
        $product->user_id       =    $request->user_id;       
        $product->save();

        return redirect()->back()->with('success','Updated Sucecssfully!');
     }

     public function deleteproduct($id)
     {
        $products = Product::find($id);
        $products->delete();
        
        return redirect()->back()->with('error','Deleted Successfully!');
     }
}