    @extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

    <section class="p-5 bg-light login">
        <div class="container">
            <div class="row justify-content-center">
                <table class="cert">
                    <tr>
                      <td align="center" class="crt_logo">
                        <img src="{{url('/')}}/Forentend/img/logo-footer.png" alt="logo">
                  
                      </td>
                    </tr>
                    <tr>
                      <td align="center">
                        <h1 class="crt_title">شهادة حضور
                          <h2>هذه الشهادة مقدمة للمتدرب</h2>
                          <h1 class="colorGreen crt_user">
                            {{ Auth::user()->first_name  ?? '' }}    {{ Auth::user()->last_name  ?? '' }}
                          </h1>
                          <h3 class="afterName">على اكتمال دورة الصحة المهنية
                          </h3>
                          <h3>26 ديسيمبر 2021 </h3>
                      </td>
                    </tr>
                    <tr class="tfooter">
                      <td align="center">
                        <h3>الاسم</h3>
                        <h3>الادارة</h3>
                        <h3>اسم القسم</h3>
                      </td>
                    </tr>
                  </table>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-auto lblock">
                    <a href="#" class="btn btn-dark">طباعة</a>
                    <a href="#" class="btn btn-default">تحميل</a>
                </div>
            </div>
        </div>
        
    </section>

    @endsection
