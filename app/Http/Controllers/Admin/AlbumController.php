<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    public function albums()
    {
        $albums = Album::get();
        return view('admin.albums.index',compact('albums'));
    }

    public function photo()
    {
        
    }
}
