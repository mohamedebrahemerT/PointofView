<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\developmentcycle;
use App\Models\Setting;

class developmentcycleController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:developmentcycle_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:developmentcycle_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:developmentcycle_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:developmentcycle_delete', [
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
        
        $developmentcycles = developmentcycle::get();
        return view('admin.developmentcycles.index', compact('developmentcycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.developmentcycles.create');

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
            $request->img->move(public_path('/developmentcycle'), $imageName);
            $data['img'] = 'developmentcycle/'.$imageName;
        }

        $developmentcycle = developmentcycle::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/development_cycle');
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
        $developmentcycle = developmentcycle::where('id', $id)->first();

        return view('admin.developmentcycles.show', compact('developmentcycle'));


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
        $developmentcycle = developmentcycle::where('id', $id)->first();
        return view('admin.developmentcycles.edit', compact('developmentcycle'));

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
           $request->img->move(public_path('/developmentcycle'), $imageName);
            $data['img'] = 'developmentcycle/'.$imageName;
        }

        $developmentcycle = developmentcycle::where('id', $request->id)->update($data);


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
        $developmentcycle = developmentcycle::where('id', $id)->first();
        $developmentcycle->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/development_cycle');
    }
}
