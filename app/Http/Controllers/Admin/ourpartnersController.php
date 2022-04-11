<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ourpartners;
use App\Models\Setting;

class ourpartnersController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:ourpartners_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:ourpartners_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:ourpartners_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:ourpartners_delete', [
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
         
        $ourpartners = ourpartners::get();
        return view('admin.ourpartners.index', compact('ourpartners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.ourpartners.create');

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
            $request->img->move(public_path('/ourpartners'), $imageName);
            $data['img'] = 'ourpartners/'.$imageName;
        }

        $ourpartners = ourpartners::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/our_partners');
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
        $ourpartners = ourpartners::where('id', $id)->first();

        return view('admin.ourpartners.show', compact('ourpartners'));


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
        $ourpartners = ourpartners::where('id', $id)->first();
        return view('admin.ourpartners.edit', compact('ourpartners'));

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
           $request->img->move(public_path('/ourpartners'), $imageName);
            $data['img'] = 'ourpartners/'.$imageName;
        }

        $ourpartners = ourpartners::where('id', $request->id)->update($data);


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
        $ourpartners = ourpartners::where('id', $id)->first();
        $ourpartners->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/our_partners');
    }
}
