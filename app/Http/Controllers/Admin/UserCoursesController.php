<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserCourses;

class UserCoursesController extends Controller
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
        $UserCourses = UserCourses::get();
        return view('admin.UserCourses.index', compact('UserCourses'));
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
        $UserCourses = UserCourses::where('id', $id)->first();

        return view('admin.UserCourses.show', compact('UserCourses'));


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
        $UserCourses = UserCourses::where('id', $id)->first();
        return view('admin.UserCourses.edit', compact('UserCourses'));

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


        $UserCourses = UserCourses::where('id', $request->id)->update($data);


        session()->flash('success', trans('trans.updatSuccess'));
        return back();
    }

     public function UserCoursesSatus (Request $request)
    {

         $data = $this->validate(\request(),
            [
                 
                'status' => 'required',
              

            ]);
 

        $UserCourses = UserCourses::where('id', $request->id)->update($data);


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
        $UserCourses = UserCourses::where('id', $id)->first();
        $UserCourses->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/UserCourses');
    }
    public function CertificateRequests( )
    {
         $UserCourses = UserCourses::where('certificate_status','requested')->get();
        return view('admin.UserCourses.index', compact('UserCourses'));
    }
}
