<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OurValues;
use App\Models\Setting;

class OurValuesController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:OurValues_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:OurValues_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:OurValues_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:OurValues_delete', [
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
         
        $OurValuess = OurValues::get();
        return view('admin.OurValuess.index', compact('OurValuess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.OurValuess.create');

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
            $request->img->move(public_path('/OurValues'), $imageName);
            $data['img'] = 'OurValues/'.$imageName;
        }

        $OurValues = OurValues::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/OurValues');
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
        $OurValues = OurValues::where('id', $id)->first();

        return view('admin.OurValuess.show', compact('OurValues'));


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
        $OurValues = OurValues::where('id', $id)->first();
        return view('admin.OurValuess.edit', compact('OurValues'));

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
           $request->img->move(public_path('/OurValues'), $imageName);
            $data['img'] = 'OurValues/'.$imageName;
        }

        $OurValues = OurValues::where('id', $request->id)->update($data);


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
        $OurValues = OurValues::where('id', $id)->first();
        $OurValues->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/OurValues');
    }
}
