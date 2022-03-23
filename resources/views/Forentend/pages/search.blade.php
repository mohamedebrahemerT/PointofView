
@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

  <section class="page-header profile-header">
        <div class="page-header_wrapper">
            <div class="container">
                <div class="page-header_content">
                    <h1 class="page-header_title"> البحث </h1>
                    <div class="page-header_breadcrumbs">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>

                                <li class="breadcrumb-item active" aria-current="page"> البحث </li>
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

                <div class="col-md-12  rounded-lg">

                    <div class="row my-5">


                        @foreach($Courses as $Course)

                        <div class="col-md-4">
                            <div class="block mb-3">
                                <a href="{{url('/')}}/course/{{$Course->id}}" class="wrap">
              <img src="{{url('/')}}/{{$Course->img}}" class="img-fluid" />
                                    <div class="des">
                                        <h6>{{ $Course->title }}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                              @endforeach


                    </div>

                    {{ $Courses->appends(['Search' => request()->Search])->links('Forentend.pages.blocks.pagination') }}
                </div>


            </div>
        </div>
    </section>
    <!--start footer-->
@endsection
