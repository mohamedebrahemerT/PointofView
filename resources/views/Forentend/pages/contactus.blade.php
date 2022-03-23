    @extends('Forentend.index')
@section('content')

 @push('js')
 @endpush
     
    <section class="page-header profile-header">
        <div class="page-header_wrapper">
            <div class="container">
                <div class="page-header_content">
                    <h1 class="page-header_title">تواصل معنا</h1>
                </div>
            </div>
        </div>

    </section>

    <section class="page py-0">
        <section class="contact pt-100 pb-100" id="contact">
            <div class="container">

                <div class="row text-center">
                    <div class="col-md-8">





 

                        <form action="{{url('/')}}/contact-form" class="contact-form"  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 form-group">
       <input type="text" class="form-control" placeholder="الاسم" name="name" required="">
                                </div>
                                <div class="col-xl-6 form-group">
                                    <input type="email" class="form-control" placeholder="البريد الالكترونى"  name="email" required="email">
                                </div>
                                <div class="col-xl-6 form-group">
                                    <input type="text" class="form-control" placeholder="العنوان" name="address" required="">
                                </div>
                                <div class="col-xl-6 form-group">
                     <input type="number" class="form-control" placeholder="رقم الجوال" name="phone" required="number" min="8"  >
                                </div>
                                <div class="col-xl-12 form-group">
                                    <textarea placeholder="محتوى الرسالة" cols="30" rows="10"
                                        class="form-control" name="content" required=""></textarea>
                                    <div class="buttons"> <a href="#"> <button
                                                class="btn-hover color-10">أرسل</button></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                      @php
              $Setting= App\Models\Setting::orderBy('id','desc')->first();
             @endphp
                    <div class="col-md-4">
                        <div class="single-contact">
                            <i class="fa fa-map-marker"></i>
                            <h5>العنوان</h5>
                            <p>{{$Setting->address}}</p>
                        </div>
                        <div class="single-contact phone">
                            <i class="fa fa-phone"></i>
                            <h5>رقم الهاتف</h5>
                            <p>{{$Setting->phone}}</p>
                        </div>
                        <div class="single-contact mail">
                            <i class="fa fa-envelope"></i>
                            <h5>البريد الالكترونى</h5>
                            <p>{{$Setting->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
