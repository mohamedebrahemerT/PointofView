@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush
     <section class="page-header profile-header">
        <div class="page-header_wrapper">
            <div class="container">
                <div class="page-header_content">
                    <h1 class="page-header_title">من نحن</h1>
                </div>
            </div>
        </div>

    </section>

    <section class="page">
        <div class="container">
            <div class="row border bg-white p-3 rounded-lg mb-3">

                <div class="col-md-6">
                    <h3 class="mt-3">{{$Setting->about_title}} </h3>
                    <p class="h5 mt-3">
                        {!! $Setting->about_desc !!} 
                    </p>
                    <hr>
                    <h3 class="mt-3">
                        {{$Setting->What_Makes_Us_unique_title}}
                    </h3>
                    <p class="h5 mt-3">
                         {!! $Setting->What_Makes_Us_unique_desc !!}
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{url('/')}}/{{$Setting->about_img}}" alt="" class="img-fluid">
                </div>


            </div>

        </div>
    </section>


@endsection

