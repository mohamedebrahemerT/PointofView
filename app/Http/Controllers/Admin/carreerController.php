<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\carreer;
use App\Models\Setting;

class carreerController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:carreer_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:carreer_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:carreer_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:carreer_delete', [
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
         
        $carreers = carreer::get();
        return view('admin.carreers.index', compact('carreers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.carreers.create');

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
            $request->img->move(public_path('/carreer'), $imageName);
            $data['img'] = 'carreer/'.$imageName;
        }

        $carreer = carreer::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/carreer');
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
        $carreer = carreer::where('id', $id)->first();

        return view('admin.carreers.show', compact('carreer'));


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
        $carreer = carreer::where('id', $id)->first();
        return view('admin.carreers.edit', compact('carreer'));

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
           $request->img->move(public_path('/carreer'), $imageName);
            $data['img'] = 'carreer/'.$imageName;
        }

        $carreer = carreer::where('id', $request->id)->update($data);


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
        $carreer = carreer::where('id', $id)->first();
        $carreer->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/carreer');
    }
}
