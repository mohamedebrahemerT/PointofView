<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Notifications\AdminResetPasswordNotification;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ForgotPasswordController extends Controller
{
     public function forget(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:admins,email'
        ]);
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $admin = admin::where('email',$request->email)->first();
        if ($admin){
            $admin->notify(new AdminResetPasswordNotification($token));
            return redirect()->back()->with('success', 'تم الإرسال للبريد الإلكتروني');
        }
        return redirect()->back()->withErrors([__('حدث خطأ ما')]);
    }
}
