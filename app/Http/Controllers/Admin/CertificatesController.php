<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\certificate;

class CertificatesController extends Controller
{

       public function __construct() {

        $this->middleware('AdminRole:Certificate_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:Certificate_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:Certificate_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:Certificate_delete', [
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
            $Certificates = certificate::get();
        return view('admin.Certificates.index', compact('Certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Certificates.create');

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
                'name' => 'required',
                'content' => 'required',
                'status' => 'required',



            ]);


        $Certificate = certificate::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/Certificate');
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
          $Certificate = certificate::where('id', $id)->first();

        return view('admin.Certificates.show', compact('Certificate'));


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
        $Certificate = certificate::where('id', $id)->first();
        return view('admin.Certificates.edit', compact('Certificate'));

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
           $request->img->move(public_path('/Certificate'), $imageName);
            $data['img'] = 'Certificate/'.$imageName;
        }

        $Certificate = certificate::where('id', $request->id)->update($data);


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
        $Certificate = certificate::where('id', $id)->first();
        $Certificate->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/Certificate');
    }
}
