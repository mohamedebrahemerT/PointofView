@php
    $Setting= App\Models\Setting::orderBy('id','desc')->first();
@endphp
<!--start footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer_block">
                    <img src="{{url('/')}}/{{$Setting->logo_footer}}" alt="">
                    <div class="social_footer">
                        <a href="{{$Setting->facebook_link}}"><i class="fab fa-facebook"></i></a>
                        <a href="{{$Setting->twitter_link}}"><i class="fab fa-twitter"></i></a>

                        <a href="{{$Setting->linkedin_link}}"><i class="fab fa-linkedin"></i></a>

     <a href="{{$Setting->Whatsapp_link}}"><i class="fab fa-whatsapp"></i></a>
     <a href="{{$Setting->insta_link}}"><i class="fab fa-instagram"></i></a>
     <a href="{{$Setting->snapchat_link}}"><i class="fab fa-snapchat"></i></a>


                    </div>
                    <div class="contact">
                        <div>
                            <i class="fa fa-phone"></i>
                            <span>{{$Setting->phone}}</span>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <span> {{$Setting->email}}</span>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_block">
                    <h4 class="title">الدورات</h4>
                    @php
                        $Departments= App\Models\Department::get();
                    @endphp
                    <ul class="list-unstyled">
                        @foreach($Departments as $Department)

                            <li><a href="{{url('/')}}/Department/{{$Department->id}}">
                                    {{$Department->title}}
                                </a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_block">
                    <h4 class="title">أشترك فى القائمة البريدية</h4>
                    <p>اشترك في النشرة الإخبارية لدينا لتلقي آخر الأخبار
                        والتحديثات حول العروض الخاصة وخصومات الخدمة.</p>


                    <form action="{{url('/')}}/subs" class="form-inline" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="البريد الالكترونى" name="email" required>
                        </div>
                        <button type="submit" class="btn syan_b px-3 text-white">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="text-center text-mute">
                <p class="copyrights">{{$Setting->copy_right}}</p>
                <p class="copyrights"> <span style="color:#fff">powered by </span>   <br>
             <a href="http://www.masteredcode.com">
                     <img src="{{url('/')}}/img/master-code.png" class="img-fluid" style="width: 150px;height: 150px;"> 
                     </a>
                 </p>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{url('/')}}/Forentend/js/custome.js"></script>
@stack('js')

<script src="{{url('/')}}/Forentend/js/toastr.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-bottom-left",
        };
    });
</script>

@if(session()->has('success') || session()->has('error') || session()->has('errors'))
    <script>
        $(document).ready(function () {
            @if(session()->has('success'))
            toastr.success("{{session()->get('success')}}");
            @elseif(session()->has('error'))
            toastr.error("{{session()->get('error')}}");
            @else
            @foreach($errors->all() as $session_error)
            toastr.error("{{$session_error}}");
            @endforeach
            @endif
        });
    </script>
    @endif
    </body>

    </html>
