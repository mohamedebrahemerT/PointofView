<?php

namespace App\Http\Controllers\Forentend;

use App\Http\Controllers\Controller;
use App\Models\certificate;
use PDF;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Department;
use App\Models\Course;
use App\Models\blog;
use App\Models\ContactUs;
use App\Models\User;
use App\Models\subscription;
use App\Models\UserCourses;
use App\Models\UserCoursescertificate;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Notifications\UserResetPasswordNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Slider;
use App\Models\OurValues;
use App\Models\OurTeam;
use App\Models\SectorsOFexpertise;
use App\Models\ourpartners;
 
      

class homeController extends Controller
{
    //
    public function index()
    {

        
           $Sliders = Slider::orderBy('order','ASC')->take(5)->get();
         $Aboutus = blog::where('id',1)->first();
          $Departments = Department::take(4)->get();
          $OurValues = OurValues::take(10)->get();
         $OurTeams  = OurTeam::inRandomOrder()->take(2)->get();

        return view('Forentend.home',
            compact(
                'Sliders',
                'Aboutus',
                'Departments',
                'OurValues',
                'OurTeams'
            )
        );
    }

   

    public function blog()
    {
         $Settings = Setting::first();
         if ($Settings->Blogstatus == 0)
          {
             return back();
         }

        return view('Forentend.pages.blog');
    }

    public function contactus()
    {
        return view('Forentend.pages.contactus');
    }

    public function getcourses($id)
    {
        $courseBuilder = Course::query();
        $depName = 'جميع التخصصات';
        $dep = null;
        if ($id != 'all') {
            $courseBuilder->where('department_id', $id);
            $dep = Department::findOrFail($id);
            $depName = $dep->title;
        }
        if (request()->has('price')) {
            $courseBuilder->orderBy('price', \request()->price);
        }
        if (request()->has('duration')) {
            $courseBuilder->orderBy('duration', 'desc');
        }
        $Courses = $courseBuilder->paginate(6);
        $allCoursesCount = Department::sum('courses_count');
        $count = 0;
        return view('Forentend.pages.getcourses', compact('dep', 'depName', 'Courses', 'count', 'allCoursesCount'));
    }

    public function getblog($id)
    {
         $Settings = Setting::first();
         if ($Settings->Blogstatus == 0)
          {
             return back();
         }
        $blog = blog::findOrFail($id);
        $relatedBlogs = blog::where('id', '!=', $blog->id)->take(6)->get();
        return view('Forentend.pages.getblog', compact('blog', 'relatedBlogs'));
    }

    public function getcourse($id)
    {

        $Course = Course::findOrFail($id);
        $dep = Department::where('id', $Course->department_id)->first();

        return view('Forentend.pages.getCourse', compact('Course', 'dep'));
    }

    public function coursemore($id)
    {

        $Course = Course::findOrFail($id);
        $dep = Department::where('id', $Course->department_id)->first();

        return view('Forentend.pages.coursemore', compact('Course', 'dep'));
    }

    public function contactform()
    {
        $data = $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|email',
            'phone' => 'sometimes|nullable',
            'address' =>'sometimes|nullable',
            'content' => 'required',


        ], [], [
            'name' => trans('trans.name'),
            'email' => trans('trans.email'),
            'phone' => trans('trans.phone'),
            'address' => trans('trans.address'),
            'content' => trans('trans.subject'),


        ]);
        ContactUs::create($data);
        session()->flash('success', 'The message has been sent successfully and the relevant department will respond to you as soon as possible.');


        return redirect()->back();
    }

    public function login()
    {
        return view('Forentend.pages.login');

    }

    public function post_login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!$validator->passes()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
        $remeber = Request('Remember') == 1 ? true : false;
        if (auth()->attempt(['email' => Request('email'), 'password' => Request('password')], $remeber)) {
            return response()->json(['success' => trans('trans.login successfully')]);
        } else {
            return response()->json(['error' => trans('trans.invald email or password')]);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:8',
            'password' => 'required|confirmed',
        ]);
        if (!$validator->passes()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
        $request['password'] = Hash::make(Request('password'));
        User::create($request->all());
        return response()->json(['success' => trans('trans.user register successfully')]);

    }

    public function search(Request $request)
    {
        $request->validate([
            'Search' => 'required|min:3',
        ]);
        $query = $request->input('Search');
        $Courses = Course::where('title', 'like', "%$query%")
            ->orWhere('desc', 'like', "%$query%")
            ->paginate(6);
        return view('Forentend.pages.search', compact('Courses'));
    }

    public function subscriptions()
    {
        //return Request();
        $data = $this->validate(request(), [

            'email' => 'required|email:rfc,dns',


        ], [], [

            'email' => trans('trans.email'),


        ]);


        subscription::firstOrCreate($data);
        session()->flash('success', 'Subscribed successfully');


        return redirect()->back();

    }

    public function home()
    {
        return view('Forentend.pages.home');

    }

    public function update_user()
    {

        $data = $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|sometimes|nullable',


        ], [], [
            'first_name' => trans('trans.first_name'),
            'last_name' => trans('trans.last_name'),
            'email' => trans('trans.email'),
            'phone' => trans('trans.phone'),


        ]);

        if (\request()->has('password') && !empty(\request()->password)) {
            $data['password'] = Hash::make(Request('password'));
        }

        User::where('id', Request('id'))->update($data);
        session()->flash('success', 'تم التحديث بنجاح ');


        return redirect()->back();

    }

    public function registercourse($id)
    {
        if (Auth::guard('web')->check()) {
            return view('Forentend.pages.registercourse', compact('id'));

        }
        session()->flash('error', 'يجب تسجيل الدخول اولا ');


        return redirect()->back();


    }

    public function registerform(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required',
            'user_id' => 'sometimes|nullable',
            'National_ID' => 'required',
            'name_ar' => 'required',
            'name_en' => 'required',
            'nationaly' => 'required',
            'Qualification' => 'required',
            'phone' => 'required',
            'sex' => 'required',
            'org_num' => 'required',
            'Where_Didyou_SeeThe_Address' => 'required',
        ]);

        if (!$validator->passes()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        UserCourses::create(array_merge($request->all(), ['user_id' => \Illuminate\Support\Facades\Auth::id()]));
        return response()->json(['success' => trans('تم تسجيل طلبك بنجاح وسوف يقوم القسم المختص بالمتابعة معك')]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function certificate($id)
    {
        $user = Auth::user();
        if (!$user) abort(404);
        $userCourse = UserCourses::where('id', $id)->where('user_id', $user->id)->first();
        $certificate = certificate::findOrFail($userCourse->certificate_id);
        $variables = array(
            "user_name" => $userCourse->name_ar,
            "course_name" => $userCourse->course->title,
            "course_date" => Carbon::parse($userCourse->created_at)->format('d-m-Y'),
            "department_name" => $userCourse->course->department->title,
        );
        foreach ($variables as $key => $value) {
            $certificate->content = str_replace('{' . strtolower($key) . '}', $value, $certificate->content);
        }

        return view('Forentend.pages.certificate', compact('certificate', 'userCourse'));

    }

    public function certificateadmin($id)
    {
         
        $userCourse = UserCourses::findOrFail($id);
        $userCoursecount = UserCourses::where('id',$id)->count();
        if ($userCoursecount == 0)
         {
              session()->flash('error', ' لا يمكن عرض الشهادة ');
             return back();
        }
        if (!$userCourse) abort(404);
        $certificate = certificate::findOrFail($userCourse->certificate_id);
        $variables = array(
            "user_name" => $userCourse->name_ar,
            "course_name" => $userCourse->course->title,
            "course_date" => Carbon::parse($userCourse->created_at)->format('d-m-Y'),
            "department_name" => $userCourse->course->department->title,
        );
        foreach ($variables as $key => $value) {
            $certificate->content = str_replace('{' . strtolower($key) . '}', $value, $certificate->content);
        }

        return view('Forentend.pages.certificate', compact('certificate', 'userCourse'));

    }

    public function passwordforget()
    {
        return view('Forentend.pages.passwordforget');


    }

    public function forget(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
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
        $User = User::where('email', $request->email)->first();
        if ($User) {
            $User->notify(new UserResetPasswordNotification($token));
            return redirect()->back()->with('success', 'تم الإرسال للبريد الإلكتروني');
        }
        return redirect()->back()->withErrors([__('حدث خطأ ما')]);
    }

    public function renderReset($token)
    {
        $check_token = DB::table('password_resets')
            ->where('token', $token)
            ->where('created_at', '>', Carbon::now()->subHours(2))->first();

        if (!empty($check_token)) {
            return view('Forentend.pages.auth.passwords.reset', ['data' => $check_token]);
        } else {
            session()->flash('error', 'Code Expired');
            return redirect('admin');
        }
    }

    public function reset(Request $request)
    {
        // return request();
        $validator = Validator::make($request->all(), [
            'token' => 'required|exists:password_resets,token',
            'password' => 'required|min:6|confirmed',
        ]);
        if (!is_array($validator) && $validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $check_token = DB::table('password_resets')
            ->where('token', $request->token)
            ->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if (!empty($check_token)) {
            User::where('email', $check_token->email)->update([
                'email' => $check_token->email,
                'password' => Hash::make($request->password)
            ]);
            DB::table('password_resets')->where('email', $request->email)->delete();
            $remeber = Request('Remember') == 1 ? true : false;


            auth()->attempt(['email' => $check_token->email, 'password' => $request->password], $remeber);
            session()->flash('success', trans(' تم تغيير كلة المرور بنجاح '));

            return redirect('home');
        } else {
            session()->flash('error', ' لقد انتهت صلاحية الكود ');
            return redirect('login');
        }

    }

    public function myform()

    {

        return view('myform');

    }

    public function myformPost(Request $request)

    {


        $validator = Validator::make($request->all(), [

            'first_name' => 'required',

            'last_name' => 'required',

            'email' => 'required|email',

            'address' => 'required',

        ]);


        if ($validator->passes()) {

            return response()->json(['success' => 'Added new records.']);

        }


        return response()->json(['error' => $validator->errors()->all()]);

    }

    public function RequestCertificates($Course_id, $user_id)
    {
            $UserCourse = UserCourses::
        where('user_id', $user_id)->
        where('course_id', $Course_id)
            ->first();


        return view('Forentend.pages.RequestCertificate',compact('UserCourse'));


    }

    public function RequestCertificatespost(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'course_id' => 'required',
            'user_id' => 'sometimes|nullable',
            'National_ID' => 'required',
            'name_ar' => 'required',
            'name_en' => 'required',
            'nationaly' => 'required',
            'Qualification' => 'required',
            'phone' => 'required',
            'sex' => 'required',
            'org_num' => 'required',
            'Where_Didyou_SeeThe_Address' => 'required',
        ]);
         
          if (!$validator->passes()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

         $UserCourse = UserCourses::
        where('id', $request->id)
            ->first();

            $UserCourse->certificate_status='requested';
            $UserCourse->save();

        UserCoursescertificate::create(array_merge($request->all(), 
            [
                'user_id' => \Illuminate\Support\Facades\Auth::id(),
                'user_courses_id'=>$UserCourse->id,
                'certificate_status' =>'requested',
            ]));

         

        return response()->json(['success' => trans('تم تسجيل طلبك بنجاح وسوف يقوم القسم المختص بالمتابعة معك')]);


    }

   

}
