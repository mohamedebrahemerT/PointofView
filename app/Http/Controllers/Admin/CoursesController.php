<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class CoursesController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:Courses_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:Courses_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:Courses_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:Courses_delete', [
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
        return view('admin.Courses.index', compact('Courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Courses.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


           

 
        //
        //return Request();
        $data = $this->validate(\request(),
            [
                 
                'department_id' => 'required',
                'title' => 'required',
                'desc' => 'required',
                'what_you_will_learn' => 'required',
                'price' => 'required',
                'lang' => 'required',
                'duration' => 'required',
                'certificate' => 'required',
                'img' => 'required',
                'registered_users_count_status' => 'required',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/Courses'), $imageName);
            $data['img'] = 'Courses/'.$imageName;
        }

        $Course = Course::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/ACourses');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Course = Course::where('id', $id)->first();

        return view('admin.Courses.show', compact('Course'));


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
        $Course = Course::where('id', $id)->first();
        return view('admin.Courses.edit', compact('Course'));

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
        //
        //return request();

       $data = $this->validate(\request(),
            [
                 
                'department_id' => 'required',
                'title' => 'required',
                'desc' => 'required',
                'what_you_will_learn' => 'required',
                'price' => 'required',
                'lang' => 'required',
                'duration' => 'required',
                'certificate' => 'required',
                'registered_users_count_status' => 'required',
                


            ]);


        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/Courses'), $imageName);
            $data['img'] = 'Courses/'.$imageName;
        }

        $Course = Course::where('id', $request->id)->update($data);


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
        $Course = Course::where('id', $id)->first();
        $Course->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/ACourses');
    }
}
