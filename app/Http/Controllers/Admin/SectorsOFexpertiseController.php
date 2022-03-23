<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SectorsOFexpertise;
use App\Models\Setting;

class SectorsOFexpertiseController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:SectorsOFexpertise_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:SectorsOFexpertise_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:SectorsOFexpertise_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:SectorsOFexpertise_delete', [
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
         
        $SectorsOFexpertises = SectorsOFexpertise::get();
        return view('admin.SectorsOFexpertises.index', compact('SectorsOFexpertises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.SectorsOFexpertises.create');

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
            $request->img->move(public_path('/SectorsOFexpertise'), $imageName);
            $data['img'] = 'SectorsOFexpertise/'.$imageName;
        }

        $SectorsOFexpertise = SectorsOFexpertise::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/Sectors_OF_expertise');
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
        $SectorsOFexpertise = SectorsOFexpertise::where('id', $id)->first();

        return view('admin.SectorsOFexpertises.show', compact('SectorsOFexpertise'));


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
        $SectorsOFexpertise = SectorsOFexpertise::where('id', $id)->first();
        return view('admin.SectorsOFexpertises.edit', compact('SectorsOFexpertise'));

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
           $request->img->move(public_path('/SectorsOFexpertise'), $imageName);
            $data['img'] = 'SectorsOFexpertise/'.$imageName;
        }

        $SectorsOFexpertise = SectorsOFexpertise::where('id', $request->id)->update($data);


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
        $SectorsOFexpertise = SectorsOFexpertise::where('id', $id)->first();
        $SectorsOFexpertise->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/Sectors_OF_expertise');
    }
}
