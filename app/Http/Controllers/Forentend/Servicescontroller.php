<?php

namespace App\Http\Controllers\Forentend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;

class Servicescontroller extends Controller
{
    //
    public function index( )
    {
        // code...
         
         $Departments = Department::orderBy('order','ASC')->take(4)->get();

        return view('Forentend.Services.Services',compact('Departments'));

    }

    public function  childScopeofresearch($id)
    {
        // code...
        $Department=Department::where('id',$id)->first();
        $childScopeofresearch=Course::where('department_id',$id)->get();

        return view('Forentend.Services.childScopeofresearch',compact('Department','childScopeofresearch'));

        
    }

    public function  Service($id)
    {
        
      $Service=Course::where('id',$id)->first();
        $RelatedServices=Course::where('department_id',$Service->department_id)->take(4)->get();

        return view('Forentend.Services.Service',compact('Service','RelatedServices'));

        
    }
}
