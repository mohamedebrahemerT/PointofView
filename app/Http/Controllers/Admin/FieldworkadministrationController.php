<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Fieldworkadministration;
use App\Models\Setting;

class FieldworkadministrationController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:Fieldworkadministration_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:Fieldworkadministration_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:Fieldworkadministration_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:Fieldworkadministration_delete', [
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
         
        $Fieldworkadministrations = Fieldworkadministration::get();
        return view('admin.Fieldworkadministrations.index', compact('Fieldworkadministrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Fieldworkadministrations.create');

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
                'title' => 'sometimes|nullable',
                'desc' => 'sometimes|nullable',
                'url' => 'sometimes|nullable',
                'img' => 'required',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/Fieldworkadministration'), $imageName);
            $data['img'] = 'Fieldworkadministration/'.$imageName;
        }

        $Fieldworkadministration = Fieldworkadministration::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/Fieldwork_administration');
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
        $Fieldworkadministration = Fieldworkadministration::where('id', $id)->first();

        return view('admin.Fieldworkadministrations.show', compact('Fieldworkadministration'));


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
        $Fieldworkadministration = Fieldworkadministration::where('id', $id)->first();
        return view('admin.Fieldworkadministrations.edit', compact('Fieldworkadministration'));

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
                'title' => 'sometimes|nullable',
                'desc' => 'sometimes|nullable',
                'url' => 'sometimes|nullable',
                'img' => 'sometimes|nullable',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/Fieldworkadministration'), $imageName);
            $data['img'] = 'Fieldworkadministration/'.$imageName;
        }

        $Fieldworkadministration = Fieldworkadministration::where('id', $request->id)->update($data);


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
        $Fieldworkadministration = Fieldworkadministration::where('id', $id)->first();
        $Fieldworkadministration->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/Fieldwork_administration');
    }
}
