 @extends('Forentend.index')
@section('content')

 @push('js')
 @endpush
     <section class="p-5 bg-light login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <ul class="nav nav-pills justify-content-center p-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">تسجيل الدخول</a>
                        </li>


                    </ul>
                    <div class="tab-content mt-4 bg-white p-5 rounded-lg border" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <h3 class="register-heading">تسجيل الدخول</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
         <form method="post" action="{{url('/')}}/password/reset">
         	@csrf

        <input type="hidden" name="token" value="{{$data->token}}"/>

                                        <div class="form-group">
                                            <label for="">ادخل كلمة المرور الجديدة</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="كلمة السر" value="" required="" />
                                        </div>

                                         <div class="form-group">
                                            <label for="">ادخل تأكيد كلمة المرور الجديدة</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="كلمة السر" value="" required="" />
                                        </div>

                                        <div class="form-group text-center">
                                            <div class="buttons"> <a href="#"> <button
                                                        class="btn-hover color-10">تغيير</button></a></div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

