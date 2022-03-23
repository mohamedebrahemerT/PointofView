@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

    <section class="page-header profile-header">
        <div class="page-header_wrapper">
            <div class="container">
                <div class="page-header_content">
                    <h1 class="page-header_title">المدونة</h1>
                    <div class="page-header_breadcrumbs">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/blog') }}">المدونة</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                 {{$blog->title}}

                            </li>
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
                <div class="col-md-9">
                    <div class="course-landing-summary">
                        <h1 class="course-title">   {{$blog->title}}</h1>
                        <p> <i class="fa fa-calendar"></i> {{date('M d,Y')}}</p>
                        <div class="row my-4">
                            <div class="course-thumbnail">
                                <img src="{{url('/')}}/{{$blog->img}}" alt="" class="img-fluid rounded-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="w-100 py-3">

                                 {!!$blog->desc !!}



                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <h4 class="border-bottom pb-3 d-block mb-2">المزيد من الاخبار</h4>
                @foreach($relatedBlogs   as $key => $blog)
                    <div class="newsblock d-block mb-1 border-bottom ml-2 mb-3 pb-2">
                        <img src="{{url('/')}}/{{$blog->img}}" alt="" class="img-thumbnail float-right ml-2" width="80px"
                            height="80px">
                        <h6><a href="{{url('/')}}/blog/{{$blog->id}}">{{$blog->title}}</a></h6>
                        <p> <i class="fa fa-calendar"></i>    {{date('M d,Y')}} </p>
                    </div>
                        @endforeach

                </div>


            </div>
        </div>
    </section>


@endsection

