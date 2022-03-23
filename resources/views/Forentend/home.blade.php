@extends('Forentend.index')
@section('content')

    @push('js')
    @endpush

    <!--start slider-->
    <section class="slider">
        <div id="banner" class="carousel slide carousel-fade" data-ride="carousel">
              @php
                    $Sliders= App\Models\Slider::get();
                @endphp
            <ol class="carousel-indicators">
                @foreach($Sliders   as $key => $Slider)

                <li data-target="#banner" data-slide-to="{{$key}}" 
                class="@if($key == 0) active @endif"></li>
                @endforeach
                
            </ol>
            <div class="carousel-inner">


                @php
                    $Sliders= App\Models\Slider::get();
                @endphp
                @foreach($Sliders   as $key => $Slider)

                    <div class="carousel-item @if($key == 0) active @endif">
                        <img src="{{url('/')}}/{{$Slider->img}}" class="d-block w-100"  style="width: 1920px;height: 700px;">
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--end slider-->
    <!--start about-->

    @php
        $Setting= App\Models\Setting::orderBy('id','desc')->first();
    @endphp
    <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{url('/')}}/{{$Setting->about_img}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <h6>بعض الكلمات عنا</h6>
                    <h3 class="title">   {{$Setting->about_title}}</h3>
                  <p>   {!! $Setting->about_desc !!} </p>
                    <div class="buttons"><a href="{{url('/')}}/aboutus">
                            <button class="btn-hover color-10">المزيد</button>
                        </a></div>

                </div>
            </div>
        </div>
    </section>
    <!--end about-->
    <!--start newcourses-->
    <section class="newcourses">
        <div class="container">
            <div class="row">
                <header class="pb-3 p-3 w-100 my-5">
                    <h4 class="d-inline-block border-bottom">جديد الدورات الالكترونية</h4>
                    <a href="{{url('/')}}/Department/all" class="btn btn-sm rounded-pill float-left px-4 pb-2 blue">مشاهدة
                        الكل</a>
                </header>
            </div>
            <div class="row">
                @php
                    $Courses= App\Models\Course::get();
                @endphp
                @foreach($Courses   as $key => $Course)

                    <div class="col-md-3">
                        <div class="block">
                            <div class="cat">
                                <a href="{{url('/')}}/course/{{$Course->id}}" class="btn cyan">
                                    {{$Course->department->title}}

                                </a>
                            </div>
                            <a href="{{url('/')}}/course/{{$Course->id}}" class="wrap">
                                <img src="{{url('/')}}/{{$Course->img}}" class="img-fluid">
                                <div class="des">
                                    <h6>
                                        {{$Course->title}}


                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--end newcourses-->
    <!-- details card section starts from here -->
    <section class="details-card py-5">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <h2 class="title">أخر أخبارنا</h2>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                @php
                    $blogs= App\Models\blog::take(3)->get();
                @endphp
                @foreach($blogs   as $key => $blog)

                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="{{url('/')}}/{{$blog->img}}" alt="">
                            </div>
                            <div class="card-desc">
                                <h3>  {!! $blog->title !!}</h3>
                                <p><i class="fa fa-calendar"></i> {{date('M d,Y')}} </p>
                                <p>
                                    {!! substr($blog->desc, 0, 100).'...' !!}
                                </p>
                                <a href="{{url('/')}}/blog/{{$blog->id}}" class="btn-card">المزيد</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="buttons"><a href="{{url('/')}}/blog">
                <button class="btn-hover color-10">المزيد</button>
            </a></div>
    </section>
    <!-- details card section starts from here -->


@endsection

