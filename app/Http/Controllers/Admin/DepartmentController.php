<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Department;
 
 use Auth;


class DepartmentController extends Controller
{

    public function __construct() {
           
        $this->middleware('AdminRole:Department_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:Department_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:Department_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:Department_delete', [
            'only' => ['destroy', 'multi_delete'],
        ]);


         $this->middleware('AdminRole:companies_show', [
            'only' => ['ShowDepartment'],
        ]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //             
         $Department = Department::orderBy('order','ASC')->get();

                          

     return view('admin.Department.index',compact('Department'));

    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('admin.Department.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->validate(\request(),
            [
                  'title' => 'required',
                 'desc' => 'sometimes|nullable',
                'img' => 'required',
             
                
                 
            ]);

           if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/Departments'), $imageName);
            $data['img'] = 'Departments/'.$imageName;
        }

                   

        $Department=Department::create($data);
        session()->flash('success', trans('trans.createSuccess'));
 

        return   redirect('/department');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
           $Department=Department::where('id',$id)->first();
     return view('admin.Department.show',compact('Department'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
           $Department=Department::where('id',$id)->first();
            

     return view('admin.Department.edit',compact('Department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         $data = $this->validate(\request(),
            [
                'title' => 'required',
                'desc' => 'sometimes|nullable',
                 
                 
            ]);

                    if ($request->img) 
                    {
            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/Departments'), $imageName);
            $data['img'] = 'Departments/'.$imageName;
                 } 
 
           Department::where('id',$request->id)->update($data);

  
                    
                 session()->flash('success', trans('trans.updatSuccess'));
        return   back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $Department=Department::where('id',$id)->first();
                  $Department->delete();
              session()->flash('danger', trans('trans.deleteSuccess'));
        return   redirect('/department');
    }

        public function arrange()

    {
          $Departments = Department::orderBy('order','ASC')->get();
         return view ('Admin.Department.arrange',compact('Departments'));
    }

        public function sortable(Request $request)

    {

        $Departments = Department::all();


        foreach ($Departments as $Department) {

            foreach ($request->order as $order) {

                if ($order['id'] == $Department->id) {

                    $Department->update(['order' => $order['position']]);

                }

            }

        }

        

        return response('Update Successfully.', 200);

    }



}
