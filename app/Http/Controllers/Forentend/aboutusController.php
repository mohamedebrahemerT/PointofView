<?php

namespace App\Http\Controllers\Forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\OurTeam;
use App\Models\OurValues;

class aboutusController extends Controller
{
     public function aboutus()
    {
         $Aboutus = blog::where('id',1)->first();
         $OurMission = blog::where('id',2)->first();
         $OurVision  = blog::where('id',3)->first();
         $OurTeams  = OurTeam::get();
          $OurValues = OurValues::take(10)->get();
          $OurValue = OurValues::first();

        return view('Forentend.aboutus.aboutus',
            compact(
                'Aboutus',
                'OurMission',
                'OurVision',
                'OurTeams',
                'OurValues',
                'OurValue'
            ));
    }
}
