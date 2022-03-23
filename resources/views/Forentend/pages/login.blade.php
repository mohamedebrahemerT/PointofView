@extends('Forentend.index')
@section('content')
    <section class="p-5 bg-light login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <ul class="nav nav-pills justify-content-center p-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">تسجيل الدخول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">مستخدم جديد</a>
                        </li>

                    </ul>
                    <div class="tab-content mt-4 bg-white p-5 rounded-lg border" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="profile" role="tabpanel"
                             aria-labelledby="profile-tab">
                            <h3 class="register-heading">تسجيل الدخول</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <form method="post" action="{{url('/')}}/login">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">البريد الالكترونى</label>
                                            <input type="email" id="login_email" name="email" class="form-control"
                                                   placeholder="البريد الالكترونى" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">كلمة السر</label>
                                            <input type="password" id="login_password" name="password"
                                                   class="form-control"
                                                   placeholder="كلمة السر" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">

                                                <input class="form-check-input" style="margin-top: -0.7rem!important;"
                                                       type="checkbox" value=""
                                                       id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    تذكرنى
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="buttons"><a href="#">
                                                    <button class="btn-hover color-10 btn-submit">دخول</button>
                                                </a>

                                            </div>
                                            <a href="{{url('/')}}/password/forget" class="btnForgetPwd" value="Login">
                                                نسيت
                                                كلمة المرور ?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show  text-align form-new" id="home" role="tabpanel"
                             aria-labelledby="home-tab">

                            <div class="alert alert-danger print-error-msg2" style="display:none">

                                <ul></ul>


                            </div>
                            <h3 class="register-heading">مستخدم جديد</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form method="post" action="{{url('/')}}/register">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control"
                                                   placeholder="الاسم الاول" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control"
                                                   placeholder="الاسم الاخير" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="register_email" name="email" class="form-control"
                                                   placeholder="البريد الالكترونى" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">

                                                <div class="input-group-append">
                                                    <span class="input-group-text">+966</span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="رقم الجوال"
                                                       name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="register_password" name="password"
                                                   class="form-control"
                                                   placeholder="كلمة السر" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                   placeholder="اعادة كلمة السر" value="" required=""/>
                                        </div>

                                        <div class="form-group">
                                            <div class="buttons"><a href="#">
                                                    <button class="btn-hover color-10 btn-submit2">انشاء
                                                        حساب
                                                    </button>
                                                </a></div>

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

    @push('js')
        <script type="text/javascript">

            $(document).ready(function () {
                // Login
                $(".btn-submit").click(function (e) {

                    $.ajaxSetup({
                        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
                    });
                    e.preventDefault();
                    var _token = $("input[name='_token']").val();
                    var email = $("#login_email").val();
                    var password = $("#login_password").val();
                    $.ajax({
                        url: "{{url('/')}}/login",
                        type: 'POST',
                        data: {_token: _token, email: email, password: password},
                        success: function (data) {
                            //alert("done")
                            console.log(data.error)
                            if ($.isEmptyObject(data.error)) {
                                window.location.href = "{{URL::to('/')}}"
                            } else {
                                toastr.error(data.error);
                            }
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">

            $(document).ready(function () {

                // Register
                $(".btn-submit2").click(function (e) {

                    $.ajaxSetup({
                        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
                    });
                    e.preventDefault();
                    var _token = $("input[name='_token']").val();
                    var first_name = $("input[name='first_name']").val();
                    var last_name = $("input[name='last_name']").val();
                    var phone = $("input[name='phone']").val();
                    var email = $("#register_email").val();
                    var password = $("#register_password").val();
                    var password_confirmation = $("input[name='password_confirmation']").val();
                    $.ajax({
                        url: "{{url('/')}}/register",
                        type: 'POST',
                        data: {
                            _token: _token, first_name: first_name, last_name: last_name,
                            email: email, phone: phone, password: password, password_confirmation: password_confirmation
                        },
                        success: function (data) {
                            //alert("done")
                            console.log(data.error)
                            if ($.isEmptyObject(data.error)) {
                                window.location.reload()
                            } else {
                                for (var i = 0; i < data.error.length; ++i) {
                                    toastr.error(data.error[i]);
                                }

                            }
                        }
                    });
                });
            });
        </script>

    @endpush
@endsection

