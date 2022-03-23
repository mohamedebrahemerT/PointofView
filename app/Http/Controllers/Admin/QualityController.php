<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Quality;
use App\Models\Setting;

class QualityController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:Quality_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:Quality_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:Quality_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:Quality_delete', [
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
        
        $Qualitys = Quality::get();
        return view('admin.Qualitys.index', compact('Qualitys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Qualitys.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return Request();
        $data = $this->validate(\request(),
            [
                'title' => 'sometimes|nullable',
                'desc' => 'sometimes|nullable',
                'url' => 'sometimes|nullable',
                'img' => 'required',
                'type' => 'required',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/Quality'), $imageName);
            $data['img'] = 'Quality/'.$imageName;
        }

        $Quality = Quality::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/quality_control');
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
        $Quality = Quality::where('id', $id)->first();

        return view('admin.Qualitys.show', compact('Quality'));


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
        $Quality = Quality::where('id', $id)->first();
        return view('admin.Qualitys.edit', compact('Quality'));

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
              'type' => 'required',

            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/Quality'), $imageName);
            $data['img'] = 'Quality/'.$imageName;
        }

        $Quality = Quality::where('id', $request->id)->update($data);


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
        $Quality = Quality::where('id', $id)->first();
        $Quality->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/quality_control');
    }
}
