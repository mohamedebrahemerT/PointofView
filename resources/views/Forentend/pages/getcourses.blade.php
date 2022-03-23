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
                    <h1 class="page-header_title">{{$depName}}</h1>
                    <div class="page-header_breadcrumbs">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}/">الرئيسية</a></li>
                                <li class="breadcrumb-item ">

                                    <a href="{{url('/')}}/Department/all">الدورات</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$depName}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="page courses">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="block">
                        <form>
                            <div class="row no-gutters align-items-center">

                                <div class="col">
                                    <input class="form-control form-control form-control-borderless" type="search"
                                           placeholder="" disabled="disabled">
                                </div>
                                <div class="col-auto">
{{--                                    <i class="fas fa-search h5"></i>--}}
                                </div>
                            </div>
                        </form>
                        <ul class="list-group p-0">
                            @php
                                $Departments= App\Models\Department::get();
                            @endphp
                            <a href="{{url('/')}}/Department/all">
                                <li class="list-group-item d-flex justify-content-between align-items-center @if(!($dep)) active @endif">
                                     جميع التخصصات
                                    <span class="badge badge-primary badge-pill">
                                        {{ $allCoursesCount }}
                                    </span>
                                </li>
                            </a>
                            @foreach($Departments as $Department)
                                <a href="{{url('/')}}/Department/{{$Department->id}}">
                                    <li class="list-group-item d-flex justify-content-between align-items-center
                                        @if(isset($dep) &&$dep->id == $Department->id)
                                            active
                                        @endif">
                                            {{$Department->title}}
                                        <span class="badge badge-primary badge-pill">
                                           {{$Department->courses_count}}
                                        </span>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="col-md-9  rounded-lg">
                    <div class="row">
                        <div class="filter border-bottom p-2 w-100 d-flex">
                            <div class="col-auto">
                                <i class="fas fa-filter h6 text-secondary"></i>
                            </div>
                            <div class="col-md-3 pr-0">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle p-0" href="#" role="button" id="dropdownMenuLink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ترتيب باحدث الدورات
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                        <a class="dropdown-item" href="{{Route::current()->getName()}}?price=asc">السعر
                                            من الاقل الى الاعلى</a>

                                        <a class="dropdown-item" href="{{Route::current()->getName()}}?price=desc">السعر
                                            من الاعلى الى الاقل</a>

                                        <a class="dropdown-item"
                                           href="{{Route::current()->getName()}}?duration=duration">الاكثر مدة</a>

                                    </div>
                                </div>
                            </div>
                            <div class="coursersNum mr-auto">
                                <strong>الدورات</strong><span>{{ isset($dep) ? $dep->courses_count : $allCoursesCount }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        @foreach($Courses as $Course)
                            <div class="col-md-4">
                                <div class="block mb-3">
                                    <a href="{{url('/')}}/course/{{$Course->id}}" class="wrap">
                                        <img src="{{url('/')}}/{{$Course->img}}" class="img-fluid"/>
                                        <div class="des">
                                            <h6>{{ $Course->title }}</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $Courses->links('Forentend.pages.blocks.pagination') }}
                </div>


            </div>
        </div>
    </section>
@endsection
