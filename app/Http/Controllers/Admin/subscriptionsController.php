<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\subscription;
 
 use Auth;


class subscriptionsController extends Controller
{

    public function __construct() {
           
        $this->middleware('AdminRole:subscriptions_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:subscriptions_add', [
            'only' => ['create', 'store'],
        ]);
        $this->middleware('AdminRole:subscriptions_edit', [
            'only' => ['edit', 'update'],
        ]);
        $this->middleware('AdminRole:subscriptions_delete', [
            'only' => ['destroy', 'multi_delete'],
        ]);


         $this->middleware('AdminRole:companies_show', [
            'only' => ['Showsubscriptions'],
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
 
                        
                            $subscriptions=subscription::get();

     return view('admin.subscriptions.index',compact('subscriptions'));

    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('admin.subscriptions.create');

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
             
                
                 
            ]);

                   

        $subscriptions=subscription::create($data);
        session()->flash('success', trans('trans.createSuccess'));

        
             


        return   redirect('/subscriptionss');
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
           $subscriptions=subscription::where('id',$id)->first();
     return view('admin.subscriptions.show',compact('subscriptions'));

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
           $subscriptions=subscription::where('id',$id)->first();
            

     return view('admin.subscriptions.edit',compact('subscriptions'));

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
                 
                 
            ]);

                   
 
           subscription::where('id',$request->id)->update($data);

  
                    
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
          $subscriptions=subscription::where('id',$id)->first();
                  $subscriptions->delete();
              session()->flash('danger', trans('trans.deleteSuccess'));
        return   redirect('/subscriptions');
    }
}
