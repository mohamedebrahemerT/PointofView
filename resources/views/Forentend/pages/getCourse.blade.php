@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush
     <section class="page-header profile-header">
        <div class="page-header_wrapper">
            <div class="container">
                <div class="page-header_content">
                    <h1 class="page-header_title">{{$dep->title}}</h1>
                    <div class="page-header_breadcrumbs">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}/">الرئيسية</a></li>

                                <li class="breadcrumb-item"><a href="{{url('/')}}/Department/{{$dep->id}}"> 
                                {{$dep->title}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">مقدمة فى التسويق عبر وسائل
                                    التواصل الاجتماعى</li>
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
                        <h1 class="course-title">
                      {{$Course->title}}
                    </h1>
                        <div class="row my-4">
                            <div class="course-thumbnail">
                                <img src="{{url('/')}}/{{$Course->img}}" alt="" class="img-fluid rounded-lg" style="width: 700;height: 500px">
                            </div>
                        </div>
                        <div class="row">
                            <h3>تفاصيل الدورة</h3>
                            <div class="w-100 py-3">
                                 {!! $Course->desc !!}
                                 
                                <div class="bg-light rounded-lg p-3 border">
                                    <h4 class="mb-3">ما سوف تتعلم فى هذه الدورة</h4>
                                    <div class="row courseitems">
                                        <div class="col">
                                 {!! $Course->what_you_will_learn !!}

                                             
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="course-essentials bg-white">
                        <h3 class="title">عن الدورة</h3>
                        <ul class="list-unstyled p-0 mb-0">
                            <li><i class="fa fa-fw fa-folder"></i><strong>التصنيف</strong><span>
                                 {{$Course->department->title}}
                            </span></li>


                            <li><i class="fa fa-fw fa-money-bill"></i><strong>السعر</strong><span> {{$Course->price}} ريال سعودى</span></li>

                            @if($Course->registered_users_count_status == 1)
                            <li><i class="fa fa-fw fa-user"></i><strong>الاشخاص المسجلين</strong><span>{{$Course->registered_users_count}} </span></li>
                            @endif

                            <li><i class="fa fa-fw fa-globe"></i><strong>اللغة </strong><span>{{$Course->lang}}</span></li>
                            <li><i class="fa fa-fw fa-clock"></i><strong>المدة</strong><span>{{$Course->duration}} ايام</span></li>
                            <li><i class="fa fa-fw fa-certificate"></i><strong>
                                @if($Course->certificate == 1)
                                 شهادة اتمام الدورة  
                                @endif
                           

                        </strong></li>
                        </ul>
                        <a href="{{url('/')}}/registercourse/{{$Course->id}}" class="register">سجل الان</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection

