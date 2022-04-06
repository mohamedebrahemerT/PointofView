<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Photocategories;
 
 use Auth;


class PhotocategoriesController extends Controller
{

    public function __construct() {
           
        $this->middleware('AdminRole:Photocategories_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:Photocategories_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:Photocategories_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:Photocategories_delete', [
            'only' => ['destroy', 'multi_delete'],
        ]);


         $this->middleware('AdminRole:companies_show', [
            'only' => ['ShowPhotocategories'],
        ]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //             
 
                        
                            $Photocategories=Photocategories::get();

     return view('admin.Photocategories.index',compact('Photocategories'));

    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('admin.Photocategories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->validate(\request(),
            [
                  'title' => 'required',
                 'desc' => 'sometimes|nullable',
                'img' => 'required',
             
                
                 
            ]);

           if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/Photocategoriess'), $imageName);
            $data['img'] = 'Photocategoriess/'.$imageName;
        }

                   

        $Photocategories=Photocategories::create($data);
        session()->flash('success', trans('trans.createSuccess'));
 

        return   redirect('/Photocategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
           $Photocategories=Photocategories::where('id',$id)->first();
     return view('admin.Photocategories.show',compact('Photocategories'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
           $Photocategories=Photocategories::where('id',$id)->first();
            

     return view('admin.Photocategories.edit',compact('Photocategories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         $data = $this->validate(\request(),
            [
                'title' => 'required',
                'desc' => 'sometimes|nullable',
                 
                 
            ]);

                    if ($request->img) 
                    {
            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/Photocategoriess'), $imageName);
            $data['img'] = 'Photocategoriess/'.$imageName;
                 } 
 
           Photocategories::where('id',$request->id)->update($data);

  
                    
                 session()->flash('success', trans('trans.updatSuccess'));
        return   back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $Photocategories=Photocategories::where('id',$id)->first();
                  $Photocategories->delete();
              session()->flash('danger', trans('trans.deleteSuccess'));
        return   redirect('/Photocategories');
    }
}
