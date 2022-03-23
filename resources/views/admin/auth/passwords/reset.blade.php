
<!DOCTYPE html>
<!--
Project Name: Share And Win
Author: Ibrahim Alanany
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>{{trans('trans.title_site')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href="{{@asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{@asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{@asset('/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{@asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{@asset('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{@asset('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{@asset('/assets/global/css/components-md-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{@asset('/assets/global/css/plugins-md-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{@asset('/assets/pages/css/login-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <link href="{{@asset('/assets/global/plugins/bootstrap-toastr/toastr-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME LAYOUT STYLES -->
    <style>
        /*@font-face {*/
        /*font-family: "ArabicFontR";*/
        /*src: url(../fonts/DIN-Regular.ttf) format("truetype");*/
        /*}*/

        /*@font-face {*/
        /*font-family: "ArabicFontM";*/
        /*src: url(../fonts/DIN-Medium.ttf) format("truetype");*/
        /*}*/

        /*@font-face {*/
        /*font-family: "ArabicFontL";*/
        /*src: url(../fonts/DIN-Light.ttf) format("truetype");*/
        /*}*/
        input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        .green{
            background-color: #5B1086!important;
            border-color: #5B1086!important;
        }

        .font-green, .forget-password{
            color: #252b28!important;
        }
        /*body{*/
        /*font-family: ArabicFontL*/
        /*}*/
        /*h1, h2, h3, h4, h5, h6 {*/
        /*font-family: ArabicFontR*/
        /*}*/
    </style>
    <!-- END THEME LAYOUT STYLES -->
     <link rel="icon" href="{{url('/')}}/landing/images/favicon.png">
    <link rel="apple-touch-icon" href="{{url('/')}}/landing/images/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/landing/images/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/landing/images/favicon.png">
</head>
<!-- END HEAD -->

<body class=" login"    @if(app()->getLocale() == 'en')style="direction: ltr;text-align: left;"  @endif>
<!-- BEGIN LOGO -->
<div class="logo" style="margin-top: 20px!important;">
     @php
        $Setting= App\Models\Setting::orderBy('id','desc')->first();
    @endphp
    <a href="#">
        <img   src="{{ url('/').'/'.$Setting->logo }}" alt="" />
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{@url('/admin/password/reset')}}" method="post">
        @csrf
        <h3 class="form-title font-green" style="color: #33509e !important;">

        Restore password </h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> new password</span>
        </div>
        <input type="hidden" name="token" value="{{$data->token}}"/>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Enter the new password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="new password" name="password" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Enter Confirm New Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="confirm password" name="password_confirmation" />
        </div>
        <div class="form-actions">
            <button type="submit" class="btn green uppercase" style="background-color: #237bf6!important;">ok</button>
        </div>
    </form>
    <!-- END LOGIN FORM -->

</div>
<div class="copyright"> © 2022 All rights reserved</div>
<!--[if lt IE 9]>
<script src="{{url('/')}}/assets/global/plugins/respond.min.js"></script>
<script src="{{url('/')}}/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{url('/')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('/')}}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<script src="{{url('/')}}/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/')}}/assets/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>
<script>
    $( document ).ready(function() {
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-bottom-left",
        };
    });
</script>
@if(session()->has('success') || session()->has('error') || session()->has('errors'))
    <script>
        $( document ).ready(function() {
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

<script>
    $('.forget-password').on('click',function () {
        $('.forget-form1').css('display','block');
    })
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var inputs = document.getElementsByTagName("INPUT");
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].oninvalid = function (e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    switch (e.target.type) {
                        case 'email' :
                            e.target.setCustomValidity("Enter Email");
                            break;
                        case 'number' :
                            e.target.setCustomValidity("Enter Number");
                            break;
                        case 'file' :
                            e.target.setCustomValidity("Choose Image");
                            break;
                        case 'url' :
                            e.target.setCustomValidity("Enter Url");
                            break;
                        default :
                            e.target.setCustomValidity("This Field Required");
                            break;

                    }
                }

            };
            inputs[i].oninput = function (e) {
                e.target.setCustomValidity("");
            };
        }
    });
</script>

</html>
