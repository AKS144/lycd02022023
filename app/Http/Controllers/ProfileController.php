<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Profile;
use App\Rewards;



class ProfileController extends Controller

{

    public function index()

    {

        $profiles = Profile::with('name')

            ->paginate(7);     

        return view('profiles.index', compact(['profiles']));

    }



    public function show(Profile $profile)

    {      

        $rewards = Rewards::all()->pluck('budget','coins');

        return view('artistshow', compact('profile','$rewards'));

    }

    public function upload()

    {      

        return view('profiles.upload');

    }

}

