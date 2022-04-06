<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OurTeam;
use App\Models\Setting;

class ourteamController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:ourteam_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:ourteam_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:ourteam_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:ourteam_delete', [
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
         
        $ourteams = OurTeam::get();
        return view('admin.ourteam.index', compact('ourteams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.ourteam.create');

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
                'jobtitle' => 'sometimes|nullable',
                'linkedin_link' => 'sometimes|nullable',
                'email' => 'sometimes|nullable',
                'img' => 'required',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/ourteam'), $imageName);
            $data['img'] = 'ourteam/'.$imageName;
        }

        $OurTeam = OurTeam::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/ourteams');
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
        $ourteam = OurTeam::where('id', $id)->first();

        return view('admin.ourteam.show', compact('ourteam'));


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
        $ourteam = OurTeam::where('id', $id)->first();
        return view('admin.ourteam.edit', compact('ourteam'));

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
               'name' => 'required',
                'jobtitle' => 'sometimes|nullable',
                'linkedin_link' => 'sometimes|nullable',
                'email' => 'sometimes|nullable',
                'img' => 'sometimes|nullable',


            ]);

        if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/ourteam'), $imageName);
            $data['img'] = 'ourteam/'.$imageName;
        }

        $ourteam = OurTeam::where('id', $request->id)->update($data);


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
        $ourteam = ourteam::where('id', $id)->first();
        $ourteam->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/ourteams');
    }
}
