<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider;

class SlidersController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:Sliders_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:Sliders_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:Sliders_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:Sliders_delete', [
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
        $Sliders = Slider::get();
        return view('admin.Sliders.index', compact('Sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Sliders.create');

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
                'img' => 'required|dimensions:max_width=1920,max_height=1080',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/Slider'), $imageName);
            $data['img'] = 'Slider/'.$imageName;
        }

        $Slider = Slider::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/Sliders');
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
        $Slider = Slider::where('id', $id)->first();

        return view('admin.Sliders.show', compact('Slider'));


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
        $Slider = Slider::where('id', $id)->first();
        return view('admin.Sliders.edit', compact('Slider'));

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
                'img' => 'sometimes|nullable|dimensions:max_width=1920,max_height=1080',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/Slider'), $imageName);
            $data['img'] = 'Slider/'.$imageName;
        }

        $Slider = Slider::where('id', $request->id)->update($data);


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
        $Slider = Slider::where('id', $id)->first();
        $Slider->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/Sliders');
    }
}
