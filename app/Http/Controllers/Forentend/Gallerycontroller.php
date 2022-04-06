<?php

namespace App\Http\Controllers\Forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Gallerycontroller extends Controller
{
    //
    public function index()
    {
        // code...
        return view('Forentend.Gallery.Gallery');

    }
}
