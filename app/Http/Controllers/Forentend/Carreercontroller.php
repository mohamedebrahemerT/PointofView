<?php

namespace App\Http\Controllers\Forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\carreer;
class Carreercontroller extends Controller
{
    //
     public function index()
    {
        // code...
  $carreers = carreer::get();
        return view('Forentend.Carreer.Carreer',compact('carreers'));

    }

     public function singlecarreer($id)
    {
        // code...
            $carreer = carreer::where('id',$id)->first();
        return view('Forentend.Carreer.singlecarreer',compact('carreer'));

    }
}
