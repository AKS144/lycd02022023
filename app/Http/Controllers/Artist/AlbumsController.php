<?php

namespace App\Http\Controllers\Artist;


use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Category;
use Intervention\Image\Facades\Image;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class AlbumsController extends Controller

{

    public function index()
	{		
		$albums = Album::where('user_id','=',Auth::user()->id)->orderBy('id','ASC')->paginate(6);
		$alb = Album::where('user_id','=',Auth::user()->id)->pluck('category');	
		
        $categories = Category::whereNotIn('id',$alb)->pluck('name', 'id');			
		
		$user = Auth::user();
		//dd($user->package);

		if($user->package == '1')
		{		
			$album_check = Album::where('user_id','=',Auth::user()->id)->get();
			//dd($album_check);
			$add_album = $album_check->count();
			if($add_album >= 10)
			{				
				//return redirect()->back()->with('error', 'You have reached the package limit of 10!'); 
				$error = 'You have reached the package limit of 10!';
									
			}else 
			{
				$error = '';
			}	
		}
		elseif($user->package == '2')	
		{
			$album_check = Album::where('user_id','=',Auth::user()->id)->get();
			//dd($album_check);
			$add_album = $album_check->count();
			if($add_album >= 15)
			{				
				//return redirect()->back()->with('error', 'You have reached the package limit that of 15!'); 
				$error = 'You have reached the package limit that of 15!';
									
			}else 
			{
				$error = '';
			}	
		}
		elseif($user->package == '3')
		{
			$album_check = Album::where('user_id','=',Auth::user()->id)->get();
			//dd($album_check);
			$add_album = $album_check->count();
			if($add_album >= 20)
			{				
				//return redirect()->back()->with('error', 'You have reached the package limit of 20!'); 
				$error = 'You have reached the package limit of 20!';
			}
	        else 
			{
				$error = '';
			}		

		}else {			
			$error = '';
		}
		
			return view('artist.album.index',compact('albums','categories','error'));

    }



    public function create()
	{
        //$categories = Category::all()->pluck('name', 'id');		
		$user = Auth::user();
		//dd($user->package);

		if($user->package == '1')
		{		
			$album_check = Album::where('user_id','=',Auth::user()->id)->get();
			//dd($album_check);
			$add_album = $album_check->count();
			if($add_album >= 10)
			{
				
					//return redirect()->back()->with('error', 'You have reached the package limit of 10!'); 
					$error = 'You have reached the package limit of 10!';
									
			}
		}
		elseif($user->package == '2')	
		{
			$album_check = Album::where('user_id','=',Auth::user()->id)->get();
			//dd($album_check);
			$add_album = $album_check->count();
			if($add_album >= 15)
			{				
				//return redirect()->back()->with('error', 'You have reached the package limit that of 15!'); 
				$error = 'You have reached the package limit that of 15!';

									
			}
		}
		elseif($user->package == '3')
		{
			$album_check = Album::where('user_id','=',Auth::user()->id)->get();
			//dd($album_check);
			$add_album = $album_check->count();
			if($add_album >= 20)
			{				
				//return redirect()->back()->with('error', 'You have reached the package limit of 20!'); 
				$error = 'You have reached the package limit of 20!';

			}
		}

		//return view('artist.album.index',compact('categories'));	
		return view('artist.album.index');
		//return redirect()->back()->with('error_code', 5);

    }



    public function store(Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'cover_image' => 'image:max:2999',
    	]);
    	
			$album = new Album;
			$album->name = $request->input('name');
			$album->description = $request->input('description');

			/*if($request->hasFile('cover_image'))
			{
		
				$classifiedImg = $request->file('cover_image');
				//$filename = 'listing'.'-'.uniqid().'.'.$classifiedImg->getClientOriginalExtension();
				$filename = $classifiedImg->getClientOriginalExtension() . '-' . uniqid() . '.jpg';
				//Image::make($classifiedImg)->encode('png', 65)->save(public_path('cover_image/' . $filename));
				Image::make($classifiedImg)->encode('jpg', 5)->save(public_path('cover_image/' . $filename));

				$album->cover_image = $filename;
				//$classified->save();
			}*/

			
			/*if($request->hasFile('cover_image'))
			{		
				$classifiedImg = $request->file('cover_image');
				//$filename = 'listing'.'-'.uniqid().'.'.$classifiedImg->getClientOriginalExtension();
				$filename = $classifiedImg->getClientOriginalExtension() . '-' . uniqid() . '.jpg';
				Image::make($classifiedImg)->encode('png', 65)->save(public_path('cover_image/' . $filename));

				// $mask = Image::make($classifiedImg)
				// 				->contrast(100)
				// 				->contrast(50)
				// 				->trim('top-left', null, 40)
				// 				->invert(); // invert it to use as a mask
				// Image::canvas(800, 600, '#000000')->save(public_path('cover_image/' . $filename));

				$album->cover_image = $filename;
				//$classified->save();
			}*/

			//$files = $request->file('photo');					
			//$x = 20; //this to be chenged when quality require good based on resolution
			//$img_extension = $image_file->getClientOriginalExtension();
			//$img_filename = time().'.'.$img_extension;	
			//$img = Image::make($image_file);				
			//$img->save(public_path('/photo/'.$img_filename),$x);																
			//$insert[$key]['photo'] = $img_filename;


			/*if($request->hasfile('cover_image'))  //working hided for testing above code
        	{
				$image_file = $request->file('cover_image');
				$x = 20; //this to be chenged when quality require good based on resolution
				$img_extension = $image_file->getClientOriginalExtension();//sometimes same name,no will store so time extension will stores with time
				$img_filename = time().'.'.$img_extension;
				$img = Image::make($image_file);			
				$img->move('public/cover_image/',$img_filename);//folder uploads
				$album->cover_image = $img_filename;
        	}*/
			//working code original
			if($request->hasfile('cover_image'))  //working hided for testing above code
        	{
				$image_file = $request->file('cover_image');
				$img_extension = $image_file->getClientOriginalExtension();//sometimes same name,no will store so time extension will stores with time
				$img_filename = time().'.'.$img_extension;
				$image_file->move('public/cover_image/',$img_filename);//folder uploads
				$album->cover_image = $img_filename;
        	}
			//$album->cover_image = $filenameToStore;
			$album->user_id     = Auth::user()->id;
			$album->category = $request->category;	
			$album->save();	
			return redirect('/albums')->with('success', 'Genre Created!');
			
			//no need album option will appear
			/*if(isset($album->user_id) and isset($album->category))   
			{
				return redirect()->back()->with('success','You have already applied');     
			}  
			else 
			{
				$album->save();	
				return redirect('/albums')->with('success', 'Genre Created!');	 
			}*/					  

    }

	public function update(Request $request)
    {      
		if(isset($request->user_id) and isset($request->category))   
		{
			return redirect()->back()->with('error','Select other category');     
		}  
		else 
		{
			$album = Album::find($request->id);
			$album->name  =  $request->name;
			if($request->hasfile('cover_image'))
			{
				$image_file = $request->file('cover_image');
				$img_extension = $image_file->getClientOriginalExtension();//sometimes same name,no will store so time extension will stores with time
				$img_filename = time().'.'.$img_extension;
				$image_file->move('public/cover_image/',$img_filename);//folder uploads
				$album->cover_image = $img_filename;
			}
			$album->category = $request->category;
			//$album->update();			
			//dd($album);
			$album->update();
			return redirect('/albums')->with('success', 'Genre updated!');	 
		}	    
		//return redirect('/albums')->with('success', 'Genre updated!');	      
    }


	/*public function show($id)
	{		
		$a = Album::where('user_id','=',Auth::user()->id)->orderBy('id','ASC')->take(3)->get(); //dd($a);	  
		$b =  $a->contains('id', $id); //dd($b);
		if($b == True)
		{
			echo "Hi";
		}
		else{
			echo "no";
		}
	}*/


    public function show($id)
	{
		$album = Album::with('Photos')->find($id);    
	
		$user = Auth::user();

		$photo_check = Photo::where('album_id','=',$id)
									->where('user_id','=',Auth::user()->id)
									->get();

		$add_photo = $photo_check->count();

		if($user->package == '1')
		{	
			$a = Album::where('user_id','=',Auth::user()->id)->orderBy('id','ASC')->take(3)->get(); 
			$b =  $a->contains('id', $id);

			if($b == True)
			{			
				if($add_photo >= 20)
				{				
					//return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	
					$error='Genre limit is 20 only!';					

				}
				else{
					$error ='';
				}
			}
			elseif($b == False)
			{
				if($add_photo >= 5)
				{				
					//return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	
					$error='Genre limit is 5 only!';	
				}
				else{
					$error ='';
				}
			}
		} 
		elseif($user->package == '2')	
		{
			$a = Album::where('user_id','=',Auth::user()->id)->orderBy('id','ASC')->take(5)->get(); 
			$b =  $a->contains('id', $id);

			if($b == True)
			{			
				if($add_photo >= 30)
				{				
					//return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	
					$error='Genre limit is 30 only!';					

				}
				else{
					$error ='';
				}
			}
			elseif($b == False)
			{
				if($add_photo >= 7)
				{				
					//return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	
					$error='Genre limit is 7 only!';	
				}
				else{
					$error ='';
				}
			}			
		}
		elseif($user->package == '3')
		{
			$a = Album::where('user_id','=',Auth::user()->id)->orderBy('id','ASC')->take(8)->get(); 
			$b =  $a->contains('id', $id);

			if($b == True)
			{			
				if($add_photo >= 40)
				{				
					//return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	
					$error='Genre limit is 40 only!';					

				}
				else{
					$error ='';
				}
			}
			elseif($b == False)
			{
				if($add_photo >= 10)
				{				
					//return redirect()->back()->with('error', 'Genere limit is 20 only!'); 	
					$error='Genre limit is 10 only!';	
				}
				else{
					$error ='';
				}
			}			
		}
		else
		{
			$error ='';
		}
		
    	//return view('artist.photos.create')->with('album_id', $album_id);
		return view('artist.album.show',compact('error','album')); 

    }

	//please dont delete album, its status will changed from cronjob
	//

}

