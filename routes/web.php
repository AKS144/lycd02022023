<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Profile;
use App\Role;
use App\User;
use App\Models\Album;
use App\Models\Quotes;
use App\Models\Photo;
//use Session;

use Illuminate\Support\Facades\Redirect;


//use DB;
//use Location;

//block back button after logout
Route::group(['middleware' => 'prevent-back'],function(){
    //...

 //Route::post('/logout','Auth\LoginController@logout');

    Route::get('/cacheclear',function(){

        Artisan::call('config:clear');
        echo "Config Cleared </br>";     
        Artisan::call('route:clear');
        echo "Route Cleared </br>";     
        Artisan::call('cache:clear');
        echo "Cache Cleared </br>";     
        Artisan::call('view:clear');
        echo "View Cleared </br>";  
        Artisan::call('optimize:clear');
        echo "View Cleared </br>";  

        //return Redirect::route('home');
    });

    

    Route::get('/dump',function(){ 
    //Artisan::call('make:factory Profile');
    // Artisan::call('make:seeder ProfileTableSeeder');
    //php artisan vendor:publish --tag=laravel-pagination
    Artisan::call('vendor:publish --tag=laravel-pagination');
 

    //for traveldeck please delete later 
    Route::get('resize', [App\Http\Controllers\Artist\ControllersContractController::class,'img']);
    Route::post('resize/resize_image', [App\Http\Controllers\Artist\ControllersContractController::class,'resize_image']);


   // php artisan make:middleware RoleChecker
   Artisan::call('make:middleware RoleChecker');

    });


    Route::get('/command', function (Request $request) {
    //Artisan::call('make:command WalletExpiry');  
 
    //return view('test',["price"=>200]);

    $role = Role::select('id')->where('title', 'artist')->first();
        //dd($role);

    $request->session()->put('1');

    //return redirect('all');
   // dd($session);
    });

    
    Route::get('/set-session', function (Request $request) {

      //  $role = Role::where('title', 'client')->pluck('id');
        //dd($role);
       // Session::put('role',$role); 
        // $t = $request->session()->get('test');
        // dd($t);

        // $role = Role::where('title', 'artist')->first();    //dd($role);    
        // Session::put('role',$role->id);

        $role = 'hello';    //dd($role);    
        Session::put('role',$role);

      // return redirect('get-session');
  
    });


    Route::get('/get-session', function (Request $request) {

       // $role = Role::select('id')->where('title', 'artist')->first();
            //dd($role);    
      /*  $session = session()->all();
        dd($session);*/

       /* $t = Session::get('role');
       // $t = Session::get('test');
        //dd($t);
        $int = (int)$t; //dd($int);


        if($t == 2)
        {
            echo "Artist";

        }
        elseif($t == 3)
        {
            echo "client";
        }*/
       
        $t = Session::get('photo');//dd($t);

  
    });
  

    Route::get('/clear-session', function (Request $request) {

        //Session::destroy();
       // $t = Session::all(); dd($t);
        Session::flush();
  
    });



    Route::get('/put-cache', function (Request $request) {
     
        $check = 'Hello cache';
        Cache::put('check',$check,'1');
  
    });

    Route::get('/get-cache', function (Request $request) {
     
        $hi = Cache::get('check');
        dd($hi);
  
    });
    
    Route::get('/clear-cache', function (Request $request) {
     
        Cache::forget();
  
    });

    
    Route::get('/clear-pics', function (Request $request) {

        //
       /* $files = glob("/public/pics/*.jpg");
       // dd($files);

        //$folder_path = scandir('pics');//"pics";   
       // dd($folder_path);

       // $files = glob($folder_path.'/*'); 
        
        foreach($files as $file)
        {        
            if(is_file($file))  
                unlink($file); 
        }*/


        //this to be used
        $directory = "public/pics/";        
        //$file = glob($directory."*.jpg");   
        //$file = scandir('public/pics');//"pics";  

        $file = glob($directory."*.jpg");         
        //dd($file);

        

        foreach($file as $filew)
        {
             //checked
            // echo $filew; 
            // $files[] = $filew;

            //dd($file);

            $check = ltrim($filew,$directory); //dd($check);


            // if (file_exists($filew)) {
            //     echo "The Given file already exists";
            // }
            // else {
            //     echo "The file path doesn't exists";
            // }

           // dd($filew);


            $pr = Photo::select('photo')->get(); //dd($pr);
			//$b =  $pr->contains($pr,$check);

       

            if($pr === $check)
            {
                echo "yes";
                // if(is_file($filew))  
                // unlink($filew); 
            }    
            else{
                echo "no";
                // if(is_file($filew))  
                // unlink($filew); 
            }
           
            //checked           
            // if(is_file($filew))  
            // unlink($filew); 
        }

    });

    

    
    Route::get('/getauth', function (Request $request) {

      $auth = Auth::user()->id; 
      dd($auth);   
  
    });
 



    Route::get('/get', function () {
       
       // $profile = Profile::where('userid','=',Auth::user()->id)->select('id')->first();->toArray()
        $profile = Profile::where('userid','=',Auth::user()->id)->select('id')->first();//->toArray()
       // $post_ids = Post::pluck('id')->toArray();
        //$tb = DB::table('category_profile')->select('category_id')->where('profile_id','=',$profile->id)->get();
        $tb = DB::table('category_profile')->where('profile_id','=',$profile->id)->pluck('category_id')->toArray(); dd($tb);

        // if(!$profile)
        // {
        //     echo "its there";
        // }
        // else
        // {
        //     echo "its not there";
        // }
       // dd($tb);      
    
        //artist/sidebar
        $d = Auth::user()->id;
        $user = User::find($d);
        $prof = $user->profile;
        dd($prof->profile_img);
      
        
        /* $query = Profile::query();
        $q = 2;

        $profile = Profile::where('userid','=',Auth::user()->id)->select('id')->first();
        $cat = $profile->categories->pluck('id')->toArray();
            // $cat1 = ['cat'=>2];
            $cat1 = $query->where($query->categories,'=',$q)->get();
            dd($cat1); */ 
    });



    Route::get('/ip', function (Request $request) {

        // if(Auth::login()){
       /* $ip = $request->ip(); 
        $i = Location::get($ip);  
        $data = DB::table("jobs")
                ->select("jobs.id"
                    ,DB::raw("6371 * acos(cos(radians(" . $i->latitude . ")) 
                    * cos(radians(jobs.latitude)) 
                    * cos(radians(jobs.longitude) - radians(" . $i->longitude . ")) 
                    + sin(radians(" .$i->latitude. ")) 
                    * sin(radians(jobs.latitude))) AS distance"))               
                    ->orderBy('distance', 'asc')
                    ->get();  dd($data);*/
        //dd($i);  
    // } 

		//$a = Album::where('user_id','=',Auth::user()->id)->count();// dd($a);
//dd($a);

        
         // $users = Auth::user()->roles()->first();   
          //$user = Auth::user();   dd($user);

          /* if($users->title == 'Artist')
           {
            dd('yes');
           }
           else{
            dd('no');
           }*/
    
    });

   // Route::get('/login','LoginController@webLoginPost')->route('login');

    //Route::get('/notification','HomeController@notification');
    Route::get('/markasread','HomeController@markasread')->name('markasread');

    Route::get('privacy-policy','HomeController@privacypolicy')->name('privacy-policy');

    //test profile page
    Route::get('proftest','HomeController@testprof');
    Route::get('frontsearch','HomeController@front');

    //404
    //Route::get('404','HomeController@fournotfour');


    
    //for roles 
    Route::get('artistsocial',[App\Http\Controllers\Auth\LoginController::class,'artist_social'])->name('artist.social');
    Route::get('clientsocial',[App\Http\Controllers\Auth\LoginController::class,'client_social'])->name('client.social');

    //facebook login
    Route::get('login/facebook',[App\Http\Controllers\Auth\LoginController::class,'redirectToFacebook'])->name('facebook');
    Route::get('login/facebook/callback',[App\Http\Controllers\Auth\LoginController::class,'handleFacebookCallback']);

    //google login
    Route::get('login/google',[App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name('google');
    Route::get('login/google/callback',[App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);


    Route::get('checkrole',[App\Http\Controllers\Auth\LoginController::class,'checkrole'])->name('checkrole');



    //test file
    Auth::routes();

    //Registration of new artist
    Route::resource('artist',ArtistController::class);

    //Registration of new client
    Route::resource('client',ClientController::class);
  


    //login with mobile
    //Route::get('login', 'HomeController@logins')->name('login');
    Route::post('loginotp', 'HomeController@login');//?? not in use but to be checked
    Route::get('homepage', 'HomeController@homepage');
    Route::get('home', 'HomeController@home')->name('home');


    //Route::get('changeStatus', 'UsersController@changeStatus')->name('changeStatus');


    Route::post('sendOtp','HomeController@sendOtp' );//this working
    Route::get('resendOtp','HomeController@resendOtp' )->name('resendotp');//this working

    Route::get('otp-login', 'HomeController@otp_login')->name('otplogin');//this working
    Route::post('loginWithOtp', 'HomeController@loginWithOtp')->name('loginWithOtp');//not working to be checked


    //outside
    Route::get('/', 'HomeController@index')->name('home');
    //Route::get('/test', 'JobController@test')->name('test');



    Route::post('save_enquiry', 'HomeController@save_enquiry')->name('save_enquiry');
    //Route::get('search', 'HomeController@search')->name('search');//not in use but error will come dont delete


   // Route::get('login', 'HomeController@signin')->name('login');
  
  
    //before signuppage role select
    Route::get('beforesignup','HomeController@beforesignup')->name('beforesignup');



    //client_signup
    Route::get('signup-client', 'HomeController@signupclient')->name('signupclient');//
    Route::post('signup-client-store', 'HomeController@storeclient')->name('signupclientstore');
    Route::get('signup-client-update', 'HomeController@updateclient')->name('signupclientupdate');



    //artist_signup not in use
    Route::get('signup-artist', 'HomeController@signupartist')->name('signupartist');//not in use
    Route::get('signup-artist-store', 'HomeController@storeartist')->name('signupartiststore');//not in use
    Route::get('signup-artist-update', 'HomeController@updateartist')->name('signupartistupdate');//not in use


    //aftersignup
    //Route::get('aftersignup','Homecontroller@aftersignup')->name('aftersignup');


    //done on top
    Route::get('signupwithno', 'HomeController@signupwithno')->name('signupwithno');//not in use



    //search fulltext testing for profile
    Route::get('profile-search','HomeController@profileSearch')->name('profile.search');
    //Route::get('profilefilter','HomeController@profilefilter');

    //search fulltext for jobs
    Route::get('jobs-search','HomeController@jobSearch');
    Route::get('jobfilter','HomeController@jobfilter');

   // Route::get('autocomplete', 'HomeController@autocomplete')->name('autocomplete');
   
   //autocomplete from Profile
    Route::get('autocomplete-search', 'HomeController@autocompleteSearch')->name('autocomplete-search');

    //autocomplete from job
    Route::get('autocomplete-search-job', 'HomeController@autocompleteSearchjob')->name('autocomplete-search-job');




    //outside
    //job search
    Route::get('/jobsearch', 'HomeController@jobindex')->name('job.home');//check for doubt used below code at 218
   
    //temporary hide
    Route::resource('jobs', 'JobController')->only(['index', 'show']);



    //outside
    Route::get('/searchjob', 'HomeController@jobsearch')->name('jobsearch');//check not working but to be used this
    Route::get('category/{category}', 'CategoryController@show')->name('categories.show');
    Route::get('location/{location}', 'LocationController@show')->name('locations.show');
    Route::get('alljob','JobController@job_all')->name('jobs.alljob');

    //Route::get('jobsearch','JobController@search')->name('jobs.jobsearch');

    //search artist
    //Route::resource('/prof','HomePController')->name('prof.prof');
    Route::get('profsearch', 'HomePController@search')->name('profsearch');
    Route::resource('profiles', 'ProfileController')->only(['index', 'show','upload']);
    Route::get('category/{category}', 'CategoryController@showprof')->name('categories.showprof');
    Route::get('location/{location}', 'LocationController@showprof')->name('locations.showprof');

    //doubt ?? this for what 
    Route::get('upload','ProfileController@upload')->name('upload');


    //Route::resource('/wishlist','WishlistController');
    Route::get('wishlist','WishlistController@index')->name('wishlist.index');
    Route::post('wishlist/store/','WishlistController@store')->name('wishlist.store');
    Route::delete('wishlist/destroy/{id}','WishlistController@destroy')->name('wishlist.destroy');
    //Route::get('/getquote', 'HomePController@getquote')->name('getquote');
    Route::get('/getquote/{id}', 'WishlistController@getquote')->name('getquote');
    Route::resource('quotes','QuotesController');
    Route::get('quotes/client_status/{id}','QuotesController@client_status')->name('quotes.client_status');
    Route::get('quotes/client_reject/{id}/{status}','QuotesController@client_reject')->name('quotes.client_reject');
   // Route::get('quotes/client_accept/{id}/{status}','QuotesController@client_accept')->name('quotes.client_accept');

    //request estimate
    Route::get('quotes/client_estrequest/{id}/{status}','QuotesController@client_estrequest')->name('quotes.client_estrequest');


    //no need  but testing needed
    //Route::get('/dashboard-artist','HomeController@dashboard_artist')->name('dashboard_artist');
    //Route::get('/dashboard-client','HomeController@dashboard_client')->name('dashboard_client');

    Route::get('/prof','HomePController@index')->name('prof');
    Route::get('/test','HomePController@profile')->name('test');


    //hiding and putted in client
    //Route::get('/profshow/{id}', 'HomePController@show')->name('profshow');
    //Route::get('selectpackage', 'HomePController@package')->name('selectpackage');
   
    Route::get('/profshow/{id}', 'HomeController@show')->name('profshow');
   

    //contract  doubt ?? this for what 
    //Route::get('/contract/create/{id}','ConreqController@create');
    //not in use
    //Route::resource('contract',Artist\ContractController::class);//not in use


    //contract (kept outside for sign without login) development remaining 
    //artist-side
    Route::get('/contract/create/{profile}','ConreqController@create')->name('contract.create');
    Route::post('/contract/create','ConreqController@store')->name('contract.store');
    Route::put('/contract/update/{id}','ConreqController@update')->name('contract.update');

    //client-sign
    Route::put('clientsign/{id}','ConreqController@client_sign')->name('client.sign');
    //for both artist and client
    Route::get('/contract/show','ConreqController@show');



    //albums show for client
    Route::get('/albumsclient/{id}',   'HomePController@clientshow')->name('albumsclient.show');


    //Route::resource('/contractrequest' [App\Http\Controllers\ContractrequestController::class]); 
    //Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
    //Route::resource('/client', [App\Http\Controllers\ClientController::class]);
    //Route::resource('/artist', [App\Http\Controller\ArtistController::class]);

   

    //Route::group(['prefix' => 'artist', 'as' => 'artist.', 'namespace' => 'Artist', 'middleware' => ['auth','artist']], function () {
    Route::group(['namespace' => 'Artist', 'middleware' => ['auth','artist']], function () {

        //dashboard
        //Route

        Route::get('/job_applied', 'HomeController@job_applied')->name('job_applied');

        Route::get('/artist', 'HomeController@index')->name('artist.home');
        //not needed now done
        Route::get('/createprof','HomeController@create')->name('profile.create');   
        

        //show profile
        //Route::get('/profshow/{id}', 'HomeController@show')->name('profshow');


        //temporary hide
        //Route::get('jobs/show/{id}', 'HomeController@jobshow')->name('jobs.show');

       //Route::get(getprofile

       
        //project
        Route::get('project_list','HomeController@project_list')->name('proj_list');
        Route::get('project_completed','HomeController@project_completed')->name('proj_completed');
        Route::get('project_cancel','HomeController@project_cancel')->name('proj_cancel');
        Route::get('project_ongoing','HomeController@project_ongoing')->name('proj_ongoing');
        Route::get('project_pending','HomeController@project_pending')->name('proj_pending');
        //Route::get('project_pending','HomeController@project_pending')->name('projpend');

        //profile
        //Route::resource('/profile',ProfileController::class);
        Route::get('/profile','ProfileController@show')->name('profile.show');//needed
        Route::any('/store/{id?}','ProfileController@store')->name('profile.store');//needed
        Route::any('/businessupdate/{id}','ProfileController@business')->name('profile.businessinfo');//just to test
        Route::put('/profilepics/{id}','ProfileController@profilepics')->name('profile.profilepics');//just to test

        
        Route::get('basic','HomeController@basic')->name('basic');
        Route::get('profilepics','HomeController@profilepics')->name('profilepics');
        Route::get('business','HomeController@business')->name('business');
        Route::get('equipments', 'HomeController@equipments')->name('equipments');

        
        //item/products artist have
        Route::get('item','ProfileController@getitem')->name('item.index');
        Route::post('itemstore','ProfileController@itemstore')->name('item.store');
        Route::put('item-update/{id}','ProfileController@itemupdate')->name('item.update');
        Route::delete('item-delete/{id}','ProfileController@itemdelete')->name('item.delete');
        Route::post('reviewstore','ProfileController@reviewstore')->name('review.store');
        Route::get('profile','HomeController@profile')->name('profile');



        Route::get('wishlist','HomeController@wishlist')->name('wishlist');
        Route::get('membership','HomeController@membership')->name('membership');
        Route::get('payment_list','HomeController@payment_list')->name('payment_list');
        Route::get('payment','HomeController@payment')->name('payment');
        Route::get('proposals','HomeController@my_proposals')->name('my_proposals');
        //Route::get('album_list','Artist\HomeController@album_list')->name('album_list');
        Route::get('uploads','HomeController@uploads')->name('uploads');

    
        //artist accept
        Route::get('artistaccept/{id}','HomeController@artist_accept')->name('artist.accept');


        //update project status
        Route::get('project_update','HomeController@project_status')->name('project.status');
        Route::get('project_update_status','HomeController@project_update_status')->name('project.updatestatus');

        Route::get('project_contract/{id}','HomeController@project_contract')->name('project.contract');
        Route::get('album_show','HomeController@album_show')->name('album_show');
       

        //Route::get('/artist_contract','HomeController@artist_contract');
        Route::get('/contract_list','HomeController@contract_list');
        Route::get('/contract_pending','HomeController@contract_pending');
        Route::get('/contract_ongoing','HomeController@contract_ongoing');
        Route::get('/contract_completed','HomeController@contract_completed');
        Route::get('/contract_cancel','HomeController@contract_cancel');


        Route::get('/artistnotification','HomeController@notification')->name('artist.notification');
        // Route::get('/markasread','HomeController@markasread')->name('markasread');


        //estimate of product to client
        Route::post('/get_product','InvoiceController@index')->name('getproduct');
        Route::post('/add_product','InvoiceController@addproduct')->name('addproduct');
        Route::put('/edit_product/{id}','InvoiceController@editproduct')->name('editproduct');
        Route::delete('/delete_product/{id}','InvoiceController@deleteproduct')->name('deleteproduct');
        Route::get('sentestimate/{id}/{status}','HomeController@sent_estimate')->name('proposal.estimate');


        Route::get('project_view/{id}','HomeController@project_view')->name('project.view');
        Route::get('project_estimate/{id}','HomeController@project_estimate')->name('project.estimate');

        
        //album
        Route::get('/albums',        'AlbumsController@index')->name('albums.index'); //this required
        Route::get('/albums/create', 'AlbumsController@create')->name('albums.create');//this required
        Route::get('/albums/{id}',   'AlbumsController@show')->name('albums.show'); //this required
        Route::post('/albums/store', 'AlbumsController@store')->name('albums.store');
        Route::post('/albums/update', 'AlbumsController@update')->name('albums.update');//this required


        //photo
        Route::get('/photos/create/{id}', 'PhotosController@create')->name('photos.create');//this required
        Route::post('/photos/store', 'PhotosController@store')->name('photos.store');//this required
        //Route::get('/photos/{id}', 'PhotosController@show')->name('photos.show');
        Route::get('/photos/{id}',   'PhotosController@destroy')->name('photos.destroy');//this required

        //multiple delete
        Route::delete('myphotos/{id}', 'PhotosController@destroy');
        Route::get('deleteAll', 'PhotosController@deleteAll');


        //addphoto using dropzone test
        Route::get('/addphoto/{id}','PhotosController@addphoto');
        Route::post('picstore','PhotosController@picstore')->name('picstore');
        Route::post('photodelete', 'PhotosController@delphoto');



        //artist-side for proposal
        Route::get('artist_status/{id}/{status}','HomeController@artist_status')->name('proposal.artist_status');
        Route::put('artistprice/{id}','HomeController@artist_price')->name('artist_price.update');
        Route::get('artistreject/{id}/{status}','HomeController@artist_reject')->name('artist_reject');

        Route::put('artprcrjt/{id}','HomeController@artist_price_reject')->name('artist_price_reject.update'); //17/09/2022
        Route::put('abortproposal/{id}','HomeController@abort_proposal')->name('abort_proposal.update');//pending 17/09/2022


        //jobapply artist
        Route::get('/jobapply','JobApplyController@index')->name('jobapply.index');
        Route::post('/jobapply/store','JobApplyController@jobstore')->name('jobapply.store');


        //artist  wallet
        Route::get('add-wallet','WalletController@payWithRazorpay')->name('paywithrazorpay');
        Route::post('payment', 'WalletController@payment')->name('payment');
        Route::post('package', 'WalletController@package')->name('package');
        
    });




    //Route::group(['prefix' => 'client', 'as' => 'client.', 'namespace' => 'Client', 'middleware' => ['auth','client']], function () {
    Route::group(['namespace' => 'Client', 'middleware' => ['auth','client']], function () {

        Route::get('/client', 'HomeController@index')->name('client.home'); 

        //client-side-jobpost
        Route::resource('jobpost','JobpostController');
      
        //user login update
      
        //profile show
       // Route::get('/profshow/{id}', 'HomeController@show')->name('profshow');


        //client  
        Route::get('setting','HomeController@setting')->name('setting');//keep on hold

        //update client details for login
        Route::put('/clientupdate/{id}','HomeController@clientupdate')->name('client.update');

        
        //keep on hold
        //Route::get('jobpost','HomeController@jobpost')->name('jobpost');
        Route::get('addjobpost','HomeController@addjobpost')->name('addjobpost');//not in use
    

        Route::get('client_wishlist','HomeController@client_wishlist')->name('client_wishlist');
        Route::get('quotation','HomeController@quotation')->name('quotation');

        //abort proposal
        Route::put('client_abort_proposal/{id}','HomeController@client_abort_proposal')->name('clientproposal.update');
        Route::get('clientaccept/{id}/{status}','HomeController@accept')->name('client.accept');


        //project
        Route::get('client-project_list','HomeController@project_list')->name('project_list');
        Route::get('client-project_completed','HomeController@project_completed')->name('project_completed');
        Route::get('client-project_cancel','HomeController@project_cancel')->name('project_cancel');
        Route::get('client-project_ongoing','HomeController@project_ongoing')->name('project_ongoing');
        Route::get('client-project_pending','HomeController@project_pending')->name('project_pending');


        //invoice
        Route::get('client-invoice/{id}','HomeController@invoice')->name('invoice');
        //Route::get('client-invoice-download','HomeController@invoicedownload')->name('invoice.download');//temporary hided
        //Route::get('client-invoice-download/{id}','HomeController@downloadPDF')->name('invoice.download');
        //Route::post('client-invoice-download','HomeController@invoicedownload')->name('invoice.download');        
        Route::get('client-project-cont/{id}','HomeController@project_contract')->name('projectcont');


        //contractlist
        Route::get('contractlist','HomeController@contractlist')->name('contractlist');

        //notification
       Route::get('/notification','HomeController@notification')->name('client.notification');

       Route::put('/client-feedback/{id}','HomeController@nofeedback')->name('feedback');
       Route::post('/client-yes-feedback','HomeController@yesfeedback')->name('yesfeedback');


    });



    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','admin']], function () {

        Route::get('/', 'HomeController@index')->name('home');

        // Permissions
        Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
        Route::resource('permissions', 'PermissionsController');


        // Roles
        Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
        Route::resource('roles', 'RolesController');


        // Users
        Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
        Route::get('users/profile/{id}', 'UsersController@profile')->name('users.profile');
        Route::resource('users', 'UsersController');
        Route::get('changeStatus', 'ActiveController@changeStatus')->name('changeStatus');
        Route::get('verifyStatus', 'ActiveController@verifyStatus')->name('verifyStatus');


        //Route::put('users/status/{id}','UsersController@status')->name('users.status');
        //Route::get('changeStatus', 'UserController@changeStatus');

        Route::get('user_rating','HomeController@user_rating')->name('rating');

        // Categories
        Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
        Route::resource('categories', 'CategoriesController');


        // Locations
        Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
        Route::resource('locations', 'LocationsController');


        // Companies
        Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
        Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
        Route::resource('companies', 'CompaniesController');


        // Jobs
        Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
        Route::resource('jobs', 'JobsController');
        Route::resource('rewards','RewardsController');
        Route::get('contract','ContractController@index')->name('contract.index');
        Route::resource('package','PackageController');

        //settings
        Route::get('settings','UsersController@setting')->name('users.setting');
        Route::get('seo-settings     ','UsersController@seo')->name('users.seo');
        Route::get('payment-settings ','UsersController@payment')->name('users.payment');
        Route::get('social-settings ','UsersController@social')->name('users.social');
        Route::get('email-settings ','UsersController@email')->name('users.email');
        Route::get('transaction','HomeController@transaction')->name('transaction');

    });

    //Auth::routes();
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    //kept for future development for expert login
    //Route::group(['prefix' => 'expert', 'as' => 'expert.', 'namespace' => 'Expert', 'middleware' => ['auth','expert']], function () {
    Route::group(['namespace' => 'Expert', 'middleware' => ['auth','expert']], function () {
        //create folder Expert for controller 
    //.. for expert login url in future development
    });


});