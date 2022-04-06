<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\blog;
use App\Models\Setting;

class newsController extends Controller
{

       public function __construct() {
           
        $this->middleware('AdminRole:news_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:news_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:news_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:news_delete', [
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
         
        $blogs = blog::get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blogs.create');

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
            $request->img->move(public_path('/blog'), $imageName);
            $data['img'] = 'blog/'.$imageName;
        }

        $blog = blog::create($data);

        session()->flash('success', trans('trans.createSuccess'));
        return redirect('/news');
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
        $blog = blog::where('id', $id)->first();

        return view('admin.blogs.show', compact('blog'));


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
        $blog = blog::where('id', $id)->first();
        return view('admin.blogs.edit', compact('blog'));

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
           $request->img->move(public_path('/blog'), $imageName);
            $data['img'] = 'blog/'.$imageName;
        }

        $blog = blog::where('id', $request->id)->update($data);


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
        $blog = blog::where('id', $id)->first();
        $blog->delete();
        session()->flash('danger', trans('trans.deleteSuccess'));
        return redirect('/news');
    }
}
