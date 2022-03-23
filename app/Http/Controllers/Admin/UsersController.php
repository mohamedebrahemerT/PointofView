<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserCourses;

class UsersController extends Controller
{

     public function __construct() {
           
        $this->middleware('AdminRole:users_show', [
            'only' => ['index', 'show'],
        ]);

        $this->middleware('AdminRole:users_edit', [
            'only' => ['edit', 'update'],
        ]);
        
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=User::get();
     return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $user=User::where('id',$id)->first();
     return view('admin.users.show',compact('user'));
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function update(Request $request)
                 {
             
         $data['status'] = $request->status ;
        $user = User::where('id', $request->id)->update($data);
          return 1;
              }

              public function userscourses($id)
              {
          $user=User::where('id',$id)->first();
                
               $UserCourses= UserCourses::where('user_id',$id)->get();
                return view('admin.users.userscourses',compact('UserCourses','user'));
 
              }
}
