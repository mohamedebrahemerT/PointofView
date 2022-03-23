@extends('Forentend.index')
@section('content')

    @push('js')
        <script type="text/javascript">

        </script>
    @endpush


    <section class="page-header profile-header">
        <div class="page-header_wrapper">
            <div class="container">
                <div class="page-header_content">
                    <h1 class="page-header_title">لوحة التحكم</h1>
                    <div class="page-header_breadcrumbs">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">لوحة التحكم</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="page profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="block bg-white border p-3 rounded-lg">
                        <div class="wrap-avatar">
                            <img src="{{url('/')}}/Forentend/img/avatar.jpg" alt="" class="img-fluid float-right ml-3"
                                 width="92px"
                                 height="92px">
                            <h5>
                                <strong>{{ Auth::user()->first_name  ?? '' }}  {{ Auth::user()->last_name  ?? '' }}   </strong>
                            </h5>
                            <p><a href="{{url('/')}}/logout">خروج</a></p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="nav flex-column nav-pills mt-3" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill"
                               href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                               aria-selected="true">معلومات الحساب</a>

                            <a class="nav-link" id="v-pills-personal-tab" data-toggle="pill" href="#v-pills-personal"
                               role="tab" aria-controls="v-pills-personal" aria-selected="false">الدورات المسجل فيها</a>

                            <a class="nav-link" id="v-pills-edu-tab" data-toggle="pill" href="#v-pills-edu" role="tab"
                               aria-controls="v-pills-edu" aria-selected="false">الشهادات</a>

                        </div>

                    </div>

                </div>
                <div class="col-md-9">
                    <div class="tab-content p-3 bg-white border rounded-lg" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                             aria-labelledby="v-pills-profile-tab">

                            <form method="post" action="{{url('/')}}/update_user">
                                @csrf
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control"
                                           placeholder="الاسم الاول"
                                           required="" value="{{ Auth::user()->first_name  ?? '' }}"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control"
                                           placeholder="الاسم الاخير" value="{{ Auth::user()->last_name  ?? '' }}"
                                           required=""/>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                           placeholder="البريد الالكترونى" required=""
                                           value="{{ Auth::user()->email  ?? '' }}"/>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                        <div class="input-group-append">
                                            <span class="input-group-text">+966</span>
                                        </div>
                                        <input type="number" class="form-control" placeholder="رقم الجوال" name="phone"
                                               value="{{ Auth::user()->phone  ?? '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control"
                                           placeholder="كلمة السر" value=""/>
                                </div>

                                <div class="form-group">
                                    <div class="buttons"><a href="#">
                                            <button class="btn-hover color-10">حفظ</button>
                                        </a></div>

                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-personal" role="tabpanel"
                             aria-labelledby="v-pills-personal-tab">

                            <section class=" registeredcourses">
                                <div class="container">
                                    @php
                                        $UserCourses=
                                        App\Models\UserCourses::where('user_id',auth()->user()->id)->get();
                                    @endphp

                                    @foreach($UserCourses  as $Course)
                                        <div class="row border p-3 rounded-lg mb-3">
                                            <div class="col rblock">
                                                <img src="{{url('/')}}/{{$Course->course->img}}" alt=""
                                                     class="img-fluid float-right ml-3">
                                                <h4>
                                                    {{$Course->course->title}}
                                                </h4>


                                                <div class="cat">
                                                    <a href="{{url('/')}}/Department/{{$Course->course->department->id}}"
                                                       class="btn btn-default">

                                                        {{$Course->course->department->title}}
                                                    </a>
                                                    &nbsp;
                                                    <a class="btn btn-default" style="background: #6f1e6c;">

                                                        حالة الدورة ::

                                                        @if($Course->status == 'pending')
                                                            {{trans('trans.pending')}}
                                                        @elseif($Course->status == 'accepted')
                                                            {{trans('trans.accepted')}}

                                                        @elseif($Course->status == 'completed')
                                                            {{trans('trans.completed')}}

                                                        @elseif($Course->status == 'canceled')
                                                            {{trans('trans.canceled')}}


                                                        @endif

                                                    </a>


                                                </div>

                                            </div>
                                            <div class="col-auto mr-auto lblock">
                                                <a href="{{url('/')}}/coursemore/{{$Course->course->id}}"
                                                   class="btn btn-outline-dark">المزيد</a>
                                            </div>

                                        </div>
                                    @endforeach


                                </div>
                            </section>


                        </div>
                        <div class="tab-pane fade" id="v-pills-edu" role="tabpanel" aria-labelledby="v-pills-edu-tab">
                            <section class=" registeredcourses">
                                <div class="container">

                                    @php
                                        $UserCoursesC=App\Models\UserCourses::
                                        where('user_id',auth()->user()->id)->
                                        whereIn('certificate_status',['requested','accpted'])->
                                        where('status','=','accepted')
                                        ->get();
                                    @endphp
                                    @foreach($UserCoursesC  as $Course)
                                        <div class="row border p-3 rounded-lg mb-3">

                                            <div class="col rblock">
                                                <img src="{{url('/')}}/{{$Course->course->img}}" alt=""
                                                     class="img-fluid float-right ml-3">
                                                <h4>
                                                    {{$Course->course->title}}
                                                </h4>
                                                <div class="cat">
                                                    <a href="{{url('/')}}/Department/{{$Course->course->department->id}}"
                                                       class="btn btn-default">
                                                        {{$Course->course->department->title}}
                                                    </a>
                                                    &nbsp;
                                                    <a class="btn btn-default" style="background: #6f1e6c;">

                                                        حالة الدورة ::

                                                        @if($Course->status == 'pending')
                                                            {{trans('trans.pending')}}
                                                        @elseif($Course->status == 'accepted')
                                                            {{trans('trans.accepted')}}

                                                        @elseif($Course->status == 'completed')
                                                            {{trans('trans.completed')}}

                                                        @elseif($Course->status == 'canceled')
                                                            {{trans('trans.canceled')}}


                                                        @endif

                                                    </a>
                                                    &nbsp;
                                                    <a class="btn btn-default" style="background: #28a745;">

                                                        حالة طلب الشهادة ::

                                                        @if($Course->certificate_status == 'requested')
                                                            {{trans('trans.requested')}}
                                                        @elseif($Course->certificate_status == 'accpted')
                                                            {{trans('trans.accpted')}}

                                                        @elseif($Course->certificate_status == 'rejected')
                                                            {{trans('trans.rejected ')}}




                                                        @endif

                                                    </a>


                                                </div>
                                            </div>

                                            <div class="col-auto mr-auto lblock">
                                                <a href="{{url('/')}}/coursemore/{{$Course->course->id}}"
                                                   class="btn btn-outline-dark">المزيد</a>
                                                @if($Course->certificate_status == 'accpted' && $Course->certificate_id)
                                                    <a href="{{url('/')}}/certificate/{{$Course->id}}"
                                                       class="btn btn-default">الشهادة</a>
                                                @endif

                                            </div>

                                        </div>
                                    @endforeach


                                </div>
                            </section>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
