<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserCoursescertificate;
use App\Models\UserCourses;

class UserCoursescertificateController extends Controller
{

      public function __construct() {
           
        $this->middleware('AdminRole:UserCourses_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:UserCourses_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:UserCourses_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:UserCourses_delete', [
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
        $UserCoursescertificate = UserCoursescertificate::get();
        return view('admin.UserCoursescertificate.index', compact('UserCoursescertificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $UserCoursescertificate = UserCoursescertificate::where('id', $id)->first();

        return view('admin.UserCoursescertificate.show', compact('UserCoursescertificate'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $UserCoursescertificate = UserCoursescertificate::where('id', $id)->first();
        return view('admin.UserCoursescertificate.edit', compact('UserCoursescertificate'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
      // return request();

        $data = $this->validate(\request(),
            [
                'course_id' => 'sometimes|nullable',
                'user_id' => 'sometimes|nullable',
                'certificate_id' => 'sometimes|nullable',
                
                'National_ID' => 'sometimes|nullable',
                'name_ar' => 'sometimes|nullable',
                'name_en' => 'sometimes|nullable',
                'nationaly' => 'sometimes|nullable',
                'Qualification' => 'sometimes|nullable',
                'phone' => 'sometimes|nullable',
                'sex' => 'sometimes|nullable',
                'org_num' => 'sometimes|nullable',
                'Where_Didyou_SeeThe_Address' => 'sometimes|nullable',
                'status' => 'sometimes|nullable',
                'certificate_status' => 'sometimes|nullable',
 

            ]);
 

        $UserCoursescertificate = UserCoursescertificate::where('id', $request->id)->update($data);

         $UserCoursescertificate = UserCoursescertificate::where('id', $request->id)->first();

         $user_courses_id=$UserCoursescertificate->user_courses_id;

         $UserCourses  = UserCourses::
         where('id', $user_courses_id)->first();
         $UserCourses->certificate_status= $UserCoursescertificate->certificate_status;

          $UserCourses->certificate_id= $UserCoursescertificate->certificate_id;
          $UserCourses->save();



          



        session()->flash('success', trans('trans.updatSuccess'));
        return back();
    }

    public function UserCoursescertificateSatus(Request $request)
    {

          $data = $this->validate(\request(),
            [
                'certificate_status' => 'required',
                'certificate_id' =>  'sometimes|nullable',

            ]);
 

        $UserCoursescertificate = UserCoursescertificate::where('id', $request->id)->update($data);

         $UserCoursescertificate = UserCoursescertificate::where('id', $request->id)->first();

         $user_courses_id=$UserCoursescertificate->user_courses_id;

         $UserCourses  = UserCourses::
         where('id', $user_courses_id)->first();
         $UserCourses->certificate_status= $UserCoursescertificate->certificate_status;

          $UserCourses->certificate_id= $UserCoursescertificate->certificate_id;
          $UserCourses->save();
 

        session()->flash('success', trans('trans.updatSuccess'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $UserCoursescertificate = UserCoursescertificate::where('id', $id)->first();
        $UserCoursescertificate->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/UserCoursescertificate');
    }
    public function CertificateRequests( )
    {
         $UserCoursescertificate = UserCoursescertificate::where('certificate_status','requested')->get();
        return view('admin.UserCoursescertificate.index', compact('UserCoursescertificate'));
    }
}
