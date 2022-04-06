<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OurGallery;
 
 use Auth;


class OurGalleryController extends Controller
{

    public function __construct() {
           
        $this->middleware('AdminRole:OurGallery_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:OurGallery_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:OurGallery_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:OurGallery_delete', [
            'only' => ['destroy', 'multi_delete'],
        ]);


         $this->middleware('AdminRole:companies_show', [
            'only' => ['ShowOurGallery'],
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
 
                        
                            $OurGallerys=OurGallery::get();

     return view('admin.OurGallery.index',compact('OurGallerys'));

    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('admin.OurGallery.create');

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
                 'photocategories_id' => 'sometimes|nullable',
                'img' => 'required',
             
                
                 
            ]);

           if ($request->img) {

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('/OurGallerys'), $imageName);
            $data['img'] = 'OurGallerys/'.$imageName;
        }

                   

        $OurGallery=OurGallery::create($data);
        session()->flash('success', trans('trans.createSuccess'));
 

        return   redirect('/OurGallery');
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
           $OurGallery=OurGallery::where('id',$id)->first();
     return view('admin.OurGallery.show',compact('OurGallery'));

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
           $OurGallery=OurGallery::where('id',$id)->first();
            

     return view('admin.OurGallery.edit',compact('OurGallery'));

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
                 'photocategories_id' => 'sometimes|nullable',
                'img' => 'sometimes|nullable',
             
                
             
                 
            ]);

                    if ($request->img) 
                    {
            $imageName = time() . '.' . $request->img->extension();
           $request->img->move(public_path('/OurGallerys'), $imageName);
            $data['img'] = 'OurGallerys/'.$imageName;
                 } 
 
           OurGallery::where('id',$request->id)->update($data);

  
                    
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
          $OurGallery=OurGallery::where('id',$id)->first();
                  $OurGallery->delete();
              session()->flash('danger', trans('trans.deleteSuccess'));
        return   redirect('/OurGallery');
    }
}
