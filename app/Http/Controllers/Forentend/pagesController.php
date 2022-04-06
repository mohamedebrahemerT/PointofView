<?php

namespace App\Http\Controllers\Forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeam;
use App\Models\OurValues;
use App\Models\developmentcycle;
use App\Models\Fieldworkadministration;
use App\Models\Resourcescapabilities;
use App\Models\Quality;

class pagesController extends Controller
{
    //

    public function team()
    {
        // code...
         $OurTeams  = OurTeam::get();
        return view('Forentend.pagesPOV.OurTeam.OurTeam',compact('OurTeams'));

    }
     public function OurValues()
    {
        // code...
          $OurValues = OurValues::take(10)->get();
       
        return view('Forentend.pagesPOV.OurValues.index',compact('OurValues'));

    }

       public function singleValues($id)
    {
        // code...
         $Value = OurValues::where('id',$id)->first();
    return view('Forentend.pagesPOV.OurValues.singleValues',
        compact('Value'));
    }

     public function devcycle()
    {
        // code...
          $devcycles = developmentcycle::take(10)->get();
       
        return view('Forentend.pagesPOV.devcycles.index',compact('devcycles'));

    }

       public function singledevcycle($id)
    {
        // code...
         $Value = developmentcycle::where('id',$id)->first();
    return view('Forentend.pagesPOV.devcycles.singledevcycles',
        compact('Value'));
    }


      public function Fieldadministration()
    {
        // code...
          $Fieldadministrations = Fieldworkadministration::take(10)->get();
       
        return view('Forentend.pagesPOV.Fieldadministration.index',compact('Fieldadministrations'));

    }

       public function singleFieldadministration($id)
    {
        // code...
         $Value = Fieldworkadministration::where('id',$id)->first();
    return view('Forentend.pagesPOV.Fieldadministration.singledevcycles',
        compact('Value'));
    }


      public function Rescapabilities()
    {
        // code...
          $Rescapabilities = Resourcescapabilities::take(10)->get();
       
        return view('Forentend.pagesPOV.Rescapabilities.index',compact('Rescapabilities'));

    }

       public function singleRescapabilities($id)
    {
        // code...
         $Resourcescapabilities = Resourcescapabilities::where('id',$id)->first();
    return view('Forentend.pagesPOV.Rescapabilities.singledevcycles',
        compact('Resourcescapabilities'));
    }


      public function Qualitycontrol()
    {
        // code...
          $Qualitycontrols = Quality::take(10)->get();
       
        return view('Forentend.pagesPOV.Qualitycontrol.index',compact('Qualitycontrols'));

    }

       public function singleQualitycontrol($id)
    {
        // code...
         $Qualitycontrol = Quality::where('id',$id)->first();
    return view('Forentend.pagesPOV.Qualitycontrol.singledevcycles',
        compact('Qualitycontrol'));
    }





     
}
