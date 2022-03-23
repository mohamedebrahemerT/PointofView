<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  use Auth;
use App\Models\Course;
use App\Models\UserCourses;
use App\Models\UserCoursescertificate;
 

use Hash;

class ReportsController extends Controller
{

     public function __construct() {
           
        $this->middleware('AdminRole:Reports_show', [
            'only' => ['Reports'],
        ]);

          $this->middleware('AdminRole:admins_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:admins_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:admins_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:admins_delete', [
            'only' => ['destroy', 'multi_delete'],
        ]);
        
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Courses = Course::get();
        $UserCourses = UserCourses::get();

        $Coursescount = Course::count();
        $UserCoursescount = UserCourses::count();
         $CertificateRequests=UserCourses::
        where('certificate_status','requested')
        ->count();

        $RegisteredRequests=UserCourses::
        where('status','pending')
        ->count();

       

       
     return view('admin.Reports.index',
        compact(
            'Courses',
            'UserCourses',
            'Coursescount',
            'UserCoursescount',
            'CertificateRequests',
            'RegisteredRequests'
        ));

    }

     public function search_user_name ()
    {
          
       if (request('course_id') and request('User_id') == null) 
       {
           
             $Courses = Course::get();
        $UserCourses = UserCourses:: where('course_id',request('course_id'))->get();

        $Coursescount = Course::count();
        $UserCoursescount = UserCourses::
        where('course_id',request('course_id'))
        ->count();
         $CertificateRequests=UserCoursescertificate::
        where('course_id',request('course_id'))->
        where('certificate_status','requested')
        ->count();

        $RegisteredRequests=UserCourses::
        where('course_id',request('User_id'))->
        where('status','pending')
        ->count();
       }
       else if (request('User_id') and request('course_id') == null) 
       {
         
         $Courses = Course::get();
        $UserCourses = UserCourses::where('user_id',request('User_id'))->get();

        $Coursescount = Course::count();
        $UserCoursescount = UserCourses::
        where('user_id',request('User_id'))
        ->count();
         $CertificateRequests=UserCoursescertificate::
        where('user_id',request('User_id'))->
        where('certificate_status','requested')
        ->count();

        $RegisteredRequests=UserCourses::
        where('user_id',request('User_id'))->
        where('status','pending')
        ->count();
       }
       else if (request('User_id') and  request('course_id')) 
       {


            $Courses = Course::get();
        $UserCourses = UserCourses:: where('user_id',request('User_id'))->
        where('course_id',request('course_id'))->get();

         $Coursescount = Course::count();
        $UserCoursescount = UserCourses::
        where('user_id',request('User_id'))->
        where('course_id',request('course_id'))
        ->count();
         $CertificateRequests=UserCoursescertificate::
        where('user_id',request('User_id'))->
        where('course_id',request('course_id'))->
        where('certificate_status','requested')
        ->count();

        $RegisteredRequests=UserCourses::
        where('user_id',request('User_id'))->
        where('course_id',request('course_id'))->

        where('status','pending')
        ->count();
       }
       else
       {
         session()->flash('error', ' من فضلك اختر  متدرب او اسم دوره  او الاثنين للبحث ');


        return  back();
       }


       

       
     return view('admin.Reports.index',
        compact(
            'Courses',
            'UserCourses',
            'Coursescount',
            'UserCoursescount',
            'CertificateRequests',
            'RegisteredRequests'
        ));

    }
 



}


 
