<?php

namespace App\Console\Commands;

use App\User;
use App\Album;
use App\Photo;
use App\Item;
use App\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;


class UserDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UserDelete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User Data deleted sucessfully';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $user = User::where('suspend_date','=',Carbon::now()->toDateString())->delete();
        // $user->albums()->delete();
      
       $user = User::where('suspend_date','=',Carbon::now()->toDateString())->get();
       
       foreach($user as $user)
       { 
           //albums
           $albums = Album::where('user_id','=',$user->id)->get(); 
           foreach($albums as $album)
           {
               $album_get = $album->cover_image; 
               $filepath_img = 'public/cover_image/'.$album_get;
               if(File::exists($filepath_img))
               {
                   File::delete($filepath_img);
               }     
               Album::where('user_id','=',$user->id)->delete();                
               $album_id = $album->id;

               //photos
               $photos = Photo::where('album_id','=',$album->id)->get();
               foreach($photos as $photo)
               {
                   $photo_get = $photo->photo;
                   $filepath_img = 'public/photo/'.$photo_get;
                   if(File::exists($filepath_img))
                   {
                       File::delete($filepath_img);
                   }     
                   Photo::where('album_id','=',$album_id)->delete(); 
               }                
           }

           //profile
           $profiles = Profile::where('user_id','=',$user->id)->get();
           foreach($profiles as $profile)
           {
               $profile_get = $profile->profile_img;
               $filepath_img = 'public/profile_img/'.$profile_get;
               if(File::exists($filepath_img))
               {
                   File::delete($filepath_img);
               } 
               $profile_course = $profile->course_cert_img;
               $filepath_img = 'public/course_cert_img/'.$profile_course;
               if(File::exists($filepath_img))
               {
                   File::delete($filepath_img);
               }    
               Profile::where('user_id','=',$user->id)->delete();
               $item_get = $profile->id;

               //items
               $items = Item::where('profile_id','=',$item_get)->get();
               foreach($items as $item)
               {
                    Item::where('profile_id','=',$item->id)->delete();
               }

           }

           //User::where('suspend_date','=',Carbon::now()->toDateString())->delete();           
       }
    }
}
