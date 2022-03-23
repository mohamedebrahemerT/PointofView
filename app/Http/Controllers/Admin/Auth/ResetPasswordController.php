<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\admin;
 
  use Auth;

class ResetPasswordController extends Controller
{
    //

    public function renderReset ($token)
    {
        $check_token = DB::table('password_resets')
            ->where('token',$token)
            ->where('created_at' , '>' , Carbon::now()->subHours(2))->first();

        if (!empty($check_token)){
            return view('admin.auth.passwords.reset',['data' => $check_token]);
        }else{
            session()->flash('error','Code Expired');
            return redirect('admin');
        }
    }
    public function reset (Request $request)
    {
                   // return request();
        $validator = Validator::make($request->all(), [
            'token' => 'required|exists:password_resets,token',
            'password' => 'required|confirmed|min:6',
        ]);
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $check_token = DB::table('password_resets')
            ->where('token',$request->token)
            ->where('created_at' , '>' , Carbon::now()->subHours(2))->first();
        if (!empty($check_token)){
            Admin::where('email',$check_token->email)->update([
                'email' => $check_token->email,
                'password' => Hash::make($request->password)
            ]);
            DB::table('password_resets')->where('email',$request->email)->delete();
               $remeber=Request('Remember')==1? true:false ;

            
            Auth::guard('admin')->attempt(['email'=>$check_token->email,'password'=>$request->password],$remeber);
            return redirect('dashboard');
        }else{
            session()->flash('error','Code Expired');
            return redirect('admin_login');
        }

    }
}
