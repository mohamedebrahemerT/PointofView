 @extends('Forentend.index')
@section('content')
    <section class="p-5 bg-light login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <h3 class="my-3 text-center">بيانات التسجيل للدورة</h3>


                    <div class="row RequestCertificates">
                        <div class="col-md-12">

                            <div class="alert alert-danger print-error-msg" style="display:none">

                                <ul></ul>

                            </div>
                            <form method="post" action="{{url('/')}}/RequestCertificates">
                                @csrf
 
                   <input type="hidden" name="course_id" value="{{$UserCourse->course_id}}">
                   <input type="hidden" name="id" value="{{$UserCourse->id}}">
                   <input type="hidden" name="user_id" value="{{$UserCourse->user_id}}">

                               

                                <div class="form-group">
                                    <input type="text" name="National_ID" class="form-control"
                                           placeholder="رقم الهوية الوطنية أو اإلقامة" value="{{$UserCourse->National_ID}}" required=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name_ar" class="form-control"
                                           placeholder=" الاسم الرباعي باللغة العربية   حسب االثبات الرسمي  "


                                           value="{{$UserCourse->name_ar}}"

                                           required=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name_en" class="form-control"
                                           placeholder=" الاسم الرباعي باللغة النجليزية   حسب االثبات الرسمي  "
 											value="{{$UserCourse->name_en}}"
                                           required=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nationaly" class="form-control" placeholder="الجنسية"
                                           value="{{$UserCourse->nationaly}}" required=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Qualification" class="form-control"
                                           placeholder="المؤهل العلمى " 
                                           value="{{$UserCourse->name_ar}}" required=""/>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">

                                        <div class="input-group-append">
                                            <span class="input-group-text">+0966</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="رقم الجوال" name="phone"
                                               value="{{$UserCourse->phone}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="container">
                                        <div class="row">
                                            <label for="">الجنس</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" required
                                               id="inlineRadio1" value="ذكر" 
                                               @if($UserCourse->sex =='ذكر')
 checked 
                                        @endif>
                                        <label class="form-check-label" for="inlineRadio1" 
                                        
                                        >ذكر</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex"
                                               id="inlineRadio2" value="أنثى" 
                                               @if($UserCourse->sex =='أنثى')
 checked 
                                        @endif>
                                        <label class="form-check-label" for="inlineRadio2">أنثى</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="org_num" class="form-control"
                                           placeholder="رقم التسجيل بالهيئة للدورات الصحية ( إن وجد ) " value="{{$UserCourse->org_num}}"
                                           required=""/>
                                </div>
                                <div class="form-group">
                                    <div class="container">
                                        <div class="row">
                                            <label for="">أين رأيت العنوان ؟</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Where_Didyou_SeeThe_Address"
                                               required
                                               id="Where_Didyou_SeeThe_Address1" value=" واتساب"  
@if($UserCourse->Where_Didyou_SeeThe_Address =='واتساب')
 checked 
@endif
>
                                        <label class="form-check-label"
                                               for="Where_Didyou_SeeThe_Address1">واتساب</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Where_Didyou_SeeThe_Address"
                                               id="Where_Didyou_SeeThe_Address2" value="سوشيال ميديا" 
@if($UserCourse->Where_Didyou_SeeThe_Address =='سوشيال ميديا')
 checked 
@endif
                                               >
                                        <label class="form-check-label" for="Where_Didyou_SeeThe_Address2">سوشيال
                                            ميديا</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="Where_Didyou_SeeThe_Address"
                                               id="Where_Didyou_SeeThe_Address3" value="أخرى" 
@if($UserCourse->Where_Didyou_SeeThe_Address =='أخرى')
 checked 
@endif
                                               >
                                        <label class="form-check-label" for="Where_Didyou_SeeThe_Address3">أخرى</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="buttons"><a href="#">
                                            <button
                                                class="btn-hover color-10 btn-submit">ارسال
                                            </button>
                                        </a></div>

                                </div>
                            </form>
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
                    var id = $("input[name='id']").val(); 
                    var user_id = $("input[name='user_id']").val();
                    var course_id = $("input[name='course_id']").val();
                    var National_ID = $("input[name='National_ID']").val();
                    var name_ar = $("input[name='name_ar']").val();
                    var name_en = $("input[name='name_en']").val();
                    var nationaly = $("input[name='nationaly']").val();
                    var Qualification = $("input[name='Qualification']").val();
                    var phone = $("input[name='phone']").val();
                    var sex = $("input[name='sex']").val();
                    var org_num = $("input[name='org_num']").val();
                    var Where_Didyou_SeeThe_Address = $("input[name='Where_Didyou_SeeThe_Address']").val();
                    $.ajax({
                        url: "{{url('/')}}/RequestCertificates",
                        type: 'POST',
                        data: {
                            _token: _token, course_id: course_id, 
                            id: id, National_ID: National_ID,
                            name_ar: name_ar, name_en: name_en, nationaly: nationaly,
                            Qualification: Qualification, phone: phone, sex: sex,
                            org_num: org_num, Where_Didyou_SeeThe_Address: Where_Didyou_SeeThe_Address
                        },
                        success: function (data) {
                            //alert("done")
                            console.log(data.error)
                            if ($.isEmptyObject(data.error)) {
                                $('.btn-submit').prop('disabled',true);
                                toastr.success(
                                    data.success,
                                    {
                                        timeOut: 1000,
                                        fadeOut: 1000,
                                    }
                                );
                                setTimeout(function () {
                                    window.location.href = "{{URL::to('/')}}"
                                }, 4000);
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

