<?php

namespace App\Http\Controllers\Artist;

use App\Album;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Session;


class PhotosController extends Controller
{

    public function create($album_id)
    {

    	$user = Auth::user();
		
		//$a = Album::where('user_id','=',Auth::user()->id)->first();
		//$b = Album::where('user_id','=',Auth::user()->id)->skip(1)->first();
		//$c = Album::where('user_id','=',Auth::user()->id)->skip(2)->first();		
	
		$a = Album::where('user_id','=',$user->id)->get();
		//$a = Album::where('user_id','=',Auth::user()->id)->first();

		
		if($user->package == '1')
		{
			for($a=1; $a <= 3; $a++)
			{			
				$photo_check = Photo::where('album_id','=',$album_id)
									->where('user_id','=',Auth::user()->id)
									->get();

				$add_photo = $photo_check->count();
				 
				if($add_photo >= 20)
				{				
					return redirect()->back()->with('error', 'Genere limit is 20 only!'); 						
				}
			}

			for($a=4; $a <= 10; $a++)
			{			
				$photo_check = Photo::where('album_id','=',$album_id)
									->where('user_id','=',Auth::user()->id)
									->get();

				$add_photo = $photo_check->count();			
				if($add_photo >= 5)
				{				
					return redirect()->back()->with('error', 'Genere limit is 5 only!'); 						
				}
			}
		}
		elseif($user->package == '2')	
		{
			for($a=1; $a <= 5; $a++)
			{			
				$photo_check = Photo::where('album_id','=',$album_id)
									->where('user_id','=',Auth::user()->id)
									->get();

				$add_photo = $photo_check->count();
				
				if($add_photo >= 30)
				{				
					return redirect()->back()->with('error', 'Genere limit is 30 only!'); 						
				}
			}

			for($a=6; $a <= 15; $a++)
			{			
				$photo_check = Photo::where('album_id','=',$album_id)
									->where('user_id','=',Auth::user()->id)
									->get();

				$add_photo = $photo_check->count();			
				if($add_photo >= 7)
				{				
					return redirect()->back()->with('error', 'Genere limit is 7 only!!'); 						
				}
			}
		}
		elseif($user->package == '3')
		{
			for($a=1; $a <= 8; $a++)
			{			
				$photo_check = Photo::where('album_id','=',$album_id)
									->where('user_id','=',Auth::user()->id)
									->get();

				$add_photo = $photo_check->count();
				
				if($add_photo >= 40)
				{				
					return redirect()->back()->with('error', 'Genere limit is 40 only!'); 						
				}
			}

			for($a=9; $a <= 20; $a++)
			{			
				$photo_check = Photo::where('album_id','=',$album_id)
									->where('user_id','=',Auth::user()->id)
									->get();

				$add_photo = $photo_check->count();			
				if($add_photo >= 10)
				{				
					return redirect()->back()->with('error', 'Genere limit is 10 only!'); 						
				}
			}
		}
		/*else
		{
			//return redirect()->back()->with('error','Your limit has been exhausted');
			return view('artist.photos.create')->with('album_id', $album_id); 
		}*/
				
    	return view('artist.photos.create')->with('album_id', $album_id); 
    }

    //public function store(Request $request)
	//{
		// if($request->hasfile('photo'))
		// { 
			
        //    if($request->hasfile('photo'))
        //     {
        //         $file = $request->file("photo");
        //         $file_name = time().'_'.$file->getclientoriginalName();
        //         $img = Image::make($file);
        //         $img->save(public_path($file_name),$x);
           
		// 	   dd($img);
                
        //         return redirect()->back();
        //     } 

			/*if($request->hasfile('photo'))
        	{
				$image_file = $request->file('photo');
				$img_extension = $image_file->getClientOriginalExtension();//sometimes same name,no will store so time extension will stores with time
				$img_filename = time().'.'.$img_extension;
				//$image_file->move('public/photo/',$img_filename,$x);//folder uploads
                $img = Image::make($image_file);
				$img->save(public_path('/photo/'.$img_filename),$x);
				
        	}
			dd($img_filename);*/
			
		
			//$imageName = time().'.'.$request->photo->extension();  
		 
			//$path = Storage::disk('s3')->put('images', $request->photo);
			//$path = Storage::disk('s3')->url($path);

		//}	
	//}

	/*public function store(Request $request)
	{    
		// $this->validate($request,[
        //     'photo'=>'image|max:3999',
        //     'title'=>'required'
        // ]);

			
		   if($request->hasfile('photo'))
		   { 
			  $files = $request->file('photo');
			  foreach($files as $key => $image_file)
			    {
					$name = $image_file->getClientOriginalName();
					$image_file->move('public/photo/',$name );                   

					$insert[$key]['photo'] = $name;
				    $insert[$key]['album_id'] = $request->input('album_id');
				    $insert[$key]['user_id'] = Auth::user()->id;				  
			    }
		    }

		  Photo::insert($insert);
		 //dd($insert);
	

        return redirect('/albums/'.$request->input('album_id'))
            		->with('success','photo Saved ');
        //return redirect()->with('success','photo Saved ');

    }*/



	//original
    public function store(Request $request)
	{    
		// $this->validate($request,[
        //     'photo'=>'image|max:5000',  
        // ]);

		if($request->hasfile('photo'))
		{ 			
		    	$files = $request->file('photo');
				foreach($files as $key => $image_file)
				{	
					$x = 20; //this to be chenged when quality require good based on resolution
					$img_extension = $image_file->getClientOriginalExtension();
					$img_filename = time().'.'.$img_extension;	
					$img = Image::make($image_file);				
					$img->save(public_path('/photo/'.$img_filename),$x);	
					//Session::put(['photo',$img_filename]);								
									
					$insert[$key]['photo'] = $img_filename;	
					$insert[$key]['album_id'] = $request->input('album_id');
					$insert[$key]['user_id'] = Auth::user()->id;		
		
				}	
					

			    $user = Auth::user();

				$photo_check = Photo::where('album_id','=',$request->input('album_id'))
											->where('user_id','=',Auth::user()->id)
											->get();

				$photo_count = count($insert);	

				$photo_exits = $photo_check->count();

				$add_photo = $photo_count + $photo_exits;	

				$id = $request->input('album_id');	

				if($user->package == '1')
				{	
					$a = Album::where('user_id','=',$user->id)->orderBy('id','ASC')->take(3)->get(); 
					$b =  $a->contains('id',$id);

					if($b == True)
					{			
						if($add_photo <= 20)
						{		
							Photo::insert($insert);	
						
							return redirect()->back()->with('success', 'Added successfully'); 	 
						}
						elseif($add_photo > 20)
						{									
							return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	 				
						}
					}
					elseif($b == False)
					{
						if($add_photo <= 5)
						{		
							Photo::insert($insert);	
						
							return redirect()->back()->with('success','Saved successfully');

						}
						elseif($add_photo > 5)
						{
							return redirect()->back()->with('error', 'Genere limit is 5 only!'); 	 
						}
					}
				}
				elseif($user->package == '2')
				{	
					$a = Album::where('user_id','=',$user->id)->orderBy('id','ASC')->take(5)->get(); 
					$b =  $a->contains('id',$id);

					if($b == True)
					{			
						if($add_photo <= 30)
						{			
							Photo::insert($insert);	
							
							return redirect()->back()->with('success', 'Added successfully'); 	 
						}
						elseif($add_photo > 30)
						{									
							return redirect()->back()->with('error', 'Genere limit is 30 only!'); 	 				
						}
					}
					elseif($b == False)
					{
						if($add_photo <= 7)
						{	
							Photo::insert($insert);							

							return redirect()->back()->with('success','Saved successfully');

						}
						elseif($add_photo > 7)
						{
							return redirect()->back()->with('error', 'Genere limit is 7 only!'); 	 
						}
					}
				}
				elseif($user->package == '3')
				{	
					$a = Album::where('user_id','=',$user->id)->orderBy('id','ASC')->take(8)->get(); 
					$b =  $a->contains('id',$id);

					if($b == True)
					{			
						if($add_photo <= 40)
						{	
							Photo::insert($insert);		
													
							return redirect()->back()->with('success', 'Added successfully'); 	 
						}
						elseif($add_photo > 40)
						{
							//$error ='';					
							return redirect()->back()->with('error', 'Genere limit is 40 only!'); 	 					
						}
					}
					elseif($b == False)
					{
						if($add_photo <= 10)
						{	
							Photo::insert($insert);	
						
							return redirect()->back()->with('success','Saved successfully');

						}
						elseif($add_photo > 10)
						{
							return redirect()->back()->with('error', 'Genere limit is 10 only!'); 	 
						}
					}
				}
		}
		
       // return redirect('/albums/'.$request->input('album_id'))->with('success','Photo Saved ');
     // return redirect()->with('success','Saved successfully');

    }

	/*public function picstore(Request $request)
    {				
		//2 working
		//start
	    // $image = $request->file('file');
        // $profileImage = $image->getClientOriginalName();
        // $destinationPath = public_path('/photo/');
        // $image->move($destinationPath,$profileImage);
        
        // $photo= new Photo();
        // $photo->photo = $profileImage;
		// $photo->album_id = $request->input('album_id'); 
		// $photo->user_id = Auth::user()->id; 
        // $photo->save();  //end
      

			if($request->hasfile('file'))
			{ 
		    	$files = $request->file('file');
				// foreach($files as $key => $image_file)
				// {	
				// 	$x = 20; //this to be reduced when quality require good based on resolution
				// 	$img_extension = $image_file->getClientOriginalExtension();
				// 	$img_filename = time().'.'.$img_extension;	
				// 	$img = Image::make($image_file);
				// 	$image = $img->save(public_path('/photo/'.$img_filename),$x);

				// 	$insert[$key]['photo'] = $img_filename;	
				// 	$insert[$key]['album_id'] = $request->input('album_id');
				// 	$insert[$key]['user_id'] = Auth::user()->id;	
				// }

				$profileImage = $files->getClientOriginalName();
				$destinationPath = public_path('/photo/');
				//$image->move($destinationPath,$profileImage);
				
				$photo= new Photo();
				$photo->photo = $profileImage;
				$photo->album_id = $request->input('album_id'); 
				$photo->user_id = Auth::user()->id; 
				//$photo->save();
									

			    $user = Auth::user();

				$photo_check = Photo::where('album_id','=',$request->input('album_id'))
											->where('user_id','=',Auth::user()->id)
											->get();

				//$photo_count = count($insert);	

				$photo_count = count($request);

				//$photo_count = sizeof($photo);

				$photo_exits = $photo_check->count();

				$add_photo = $photo_count + $photo_exits;	

				$id = $request->input('album_id');	

				if($user->package == '1')
				{	
					$a = Album::where('user_id','=',$user->id)->orderBy('id','ASC')->take(3)->get(); 
					$b =  $a->contains('id',$id);

					if($b == True)
					{			
						if($add_photo <= 20)
						{		
							Photo::insert($insert);	
						
							return redirect()->back()->with('success', 'Added successfully'); 	 
						}
						elseif($add_photo > 20)
						{									
							return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	 				
						}
					}
					elseif($b == False)
					{
						if($add_photo <= 5)
						{		
							Photo::insert($insert);	
						
							return redirect()->back()->with('success','Saved successfully');

						}
						elseif($add_photo > 5)
						{
							return redirect()->back()->with('error', 'Genere limit is 5 only!'); 	 
						}
					}
				}
				elseif($user->package == '2')
				{	
					$a = Album::where('user_id','=',$user->id)->orderBy('id','ASC')->take(5)->get(); 
					$b =  $a->contains('id',$id);

					if($b == True)
					{			
						if($add_photo <= 30)
						{			
							Photo::insert($insert);	
							
							return redirect()->back()->with('success', 'Added successfully'); 	 
						}
						elseif($add_photo > 30)
						{									
							return redirect()->back()->with('error', 'Genere limit is 30 only!'); 	 				
						}
					}
					elseif($b == False)
					{
						if($add_photo <= 7)
						{	
							Photo::insert($insert);							

							return redirect()->back()->with('success','Saved successfully');

						}
						elseif($add_photo > 7)
						{
							return redirect()->back()->with('error', 'Genere limit is 7 only!'); 	 
						}
					}
				}
				elseif($user->package == '3')
				{	
					$a = Album::where('user_id','=',$user->id)->orderBy('id','ASC')->take(8)->get(); 
					$b =  $a->contains('id',$id);

					if($b == True)
					{			
						if($add_photo <= 40)
						{	
							//Photo::insert($insert);
							$image->move($destinationPath,$profileImage);
							$photo->save();

							return redirect()->back()->with('success', 'Added successfully'); 	 
						}
						elseif($add_photo > 40)
						{
							//$error ='';					
							return redirect()->back()->with('error', 'Genere limit is 40 only!'); 	 					
						}
					}
					elseif($b == False)
					{
						if($add_photo <= 10)
						{	
							Photo::insert($insert);	
						
							return redirect()->back()->with('success','Saved successfully');

						}
						elseif($add_photo > 10)
						{
							return redirect()->back()->with('error', 'Genere limit is 10 only!'); 	 
						}
					}
				}
			}
    }*/



    public function show($id)
	{
        $photo = Photo::find($id);
    	return view('artist.photos.show')->with('photo', $photo);
    }



    public function destroy($id)
	{
    	$photo = Photo::find($id);
    	$album_id = $photo->album_id;

    	// if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo))
		// {
    	// 	$photo->delete();
    	// }

		$filepath_img = 'public/photo/'.$photo->photo;
		if(File::exists($filepath_img))
		{
			File::delete($filepath_img);
		}    
		$photo->delete();
		return redirect()->back()->with('error', 'Photo Deleted!');
    	//return redirect('/albums/'.$album_id)->with('success', 'Photo Deleted!');
        //return redirect()->route('albums',$album_id)->with('success', 'Photo Deleted!');
    }


	
	//multiple delete
	/*public function destroy($id)
    {    	
		$photo = Photo::find($id);
    	$album_id = $photo->album_id;
		$filepath_img = 'public/photo/'.$photo->photo;
		if(File::exists($filepath_img))
		{
			File::delete($filepath_img);
		}    
		$photo->delete();
    	//return response()->json(['success'=>"Product Deleted successfully.", 'tr'=>'tr_'.$id]);
    	return response()->json(['success'=>"Deleted successfully"]);

    }*/

   	//multiple delete
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        Photo::whereIn('id',explode(",",$ids))->delete();
        // return response()->json(['success'=>"Deleted successfully."]);
		return redirect()->back()->with('error', 'Photo Deleted!');

		/*$id = $request->ids;
		$photo = Photo::find($id);
    	$album_id = $photo->album_id;

		$filepath_img = 'public/photo/'.$photo->photo;
		if(File::exists($filepath_img))
		{
			File::delete($filepath_img);
		}   
        Photo::whereIn('id',explode(",",$ids))->delete();
		return redirect()->back()->with('error', 'Photo Deleted!');*/


		/*
		$photo = Photo::find($id);
    	$album_id = $photo->album_id;

        $filepath_img = 'public/photo/'.$photo->photo;
		if(File::exists($filepath_img))
		{
			File::delete($filepath_img);
		}    
		$photo->delete();
		return redirect()->back()->with('error', 'Photo Deleted!');
		*/
    }

	public function addphoto($id)
	{
		$album = Album::with('Photos')->find($id);   
		return view('artist.album.addphoto',compact('album'));
	}



	//for dropzone working hided for testing code above code
	public function picstore(Request $request)
    {				
		//2 working
	    $image = $request->file('file');
        $profileImage = $image->getClientOriginalName();
        $destinationPath = public_path('/photo/'); // upload path
        $image->move($destinationPath,$profileImage);
        
        $photo= new Photo();
        $photo->photo = $profileImage; //dd($imagemodel);
		$photo->album_id = $request->input('album_id'); 
		$photo->user_id = Auth::user()->id; //dd($photo);
        $photo->save();
        return response()->json(['success']);
    }



	public function delphoto(Request $request)
    {
        $filename = $request->get('filename');
        Photo::where('photo','=',$filename)->delete();
        $path = public_path('/photo/').$filename;
		//$path= public_path().'/photo/'.$filename; 
        if (file_exists($path)) 
		{
            unlink($path);
        }
        return $filename;  
    }



	public function dest()
	{
		
	}

}

