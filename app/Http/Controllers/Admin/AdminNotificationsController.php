<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
use App\Models\User;
use App\Models\AdminNotification;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

use App\Notifications\sendNotification;

class AdminNotificationsController extends Controller
{
    //
  

      public function __construct() {
           
        $this->middleware('AdminRole:AdminNotifications_show', [
            'only' => ['index', 'show'],
        ]);
        $this->middleware('AdminRole:AdminNotifications_add', [
            'only' => ['create', 'store'],
        ]);
         
        $this->middleware('AdminRole:AdminNotifications_delete', [
            'only' => ['destroy', 'multi_delete'],
        ]);
        
    }

    

    public function index()
    {

        $adminNotifications = AdminNotification::orderBy('id','desc')->get();

        $data['title'] = 'إشعارات المستخدمين';
        return view('admin.adminNotifications.index',compact('data','adminNotifications'));
    }

    public function create()
    {
        $data['title'] = 'إشعارات المستخدمين|إضافة إشعار';
        $data['users'] = User::get();
   
        return view('admin.adminNotifications.create',compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'user_id' => 'required',
   
            'message' => 'required|min:3',
        ]);
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $type = $request->type;
       

        if ($type == 'User')
        {
         // single user
            $user = User::where('id',$request->user_id)->first();
            if ($user)
            {
            $user->notify(new sendNotification($request->message));
                 session()->flash('success', 'تم  الارسال بنجاح ');

                   AdminNotification::create([
                    'user_id'=>$user->id,
                    'type'=>'User',
                    'message'=>$request->message,
                   ]);
        return redirect('/AdminNotifications');
                   
            }

        }
        elseif ($type == 'AllUsers'){ // All Users
            $users = User::get();
            foreach ($users as $user)
            {
                 $user->notify(new sendNotification($request->message));

                 AdminNotification::create([
                    'user_id'=>$user->id,
                    'type'=>'User',
                    'message'=>$request->message,
                   ]);

                 session()->flash('success', 'تم  الارسال بنجاح ');
        return redirect('/AdminNotifications');
          
                 
            }
        }
        else{
            session()->flash('success', 'حدث خطأ ما');
            return redirect()->back();
        }
        session()->flash('success', 'تم إرسال الإشعار بنجاح');
        return redirect('/AdminNotifications');
    }

    public function show($slug)
    {
        $adminNotification = AdminNotification::where('slug',$slug)->first();
        if (!$adminNotification){
            session()->flash('error', 'الإشعار غير موجود');
            return redirect()->back();
        }
        return view('admin.adminNotifications.show',compact('adminNotification'));
    }


public function destroy($id)
    {
        //
          $AdminNotification=AdminNotification::where('id',$id)->first();
                  $AdminNotification->delete();
              session()->flash('danger', trans('trans.deleteSuccess'));
        return   redirect('/AdminNotifications');
    }
    
}
