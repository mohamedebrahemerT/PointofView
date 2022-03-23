<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{url('/')}}/Forentend/css/icons.css">
  <link rel="stylesheet" href="{{url('/')}}/Forentend/css/style.css">
  <title>مؤسسة الغد أجمل</title>

    @php
        $Setting= App\Models\Setting::orderBy('id','desc')->first();
    @endphp
   <link href="{{url('/')}}/Forentend/css/toastr-rtl.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{url('/')}}/{{$Setting->Fivacon}}" type="" sizes="16x16">

    <meta property="og:title" content="مؤسسة الغد أجمل" />
    <meta property="og:description" content="مؤسسة الغد أجمل">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />

    <meta itemprop="image" content="{{ url('/').'/'.$Setting->logo }}">
    <meta property="og:image" content="{{ url('/').'/'.$Setting->logo }}">

<style type="text/css">
  .login input, .login .input-group-text {
    font-family: auto;
}
</style>
    

</head>

<body>
             @php
              $Setting= App\Models\Setting::orderBy('id','desc')->first();
             @endphp
  <!--start top header-->
  <div class="top_header">
    <div class="container">
      <div class="row">
        <div class="ml-auto text-white info">
          <span><i class="fa fa-envelope mr-2"></i> <label>
           {{$Setting->email}}</label></span>
          <span><i class="fa fa-phone mr-2"></i> <label>{{$Setting->phone}}</label></span>
        </div>
        <div class="login">
          @auth
<div class="dropdown">
                     <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                         <i class="fa fa-user ml-2"></i>
                         اهلا  {{ Auth::user()->first_name  ?? '' }}  {{ Auth::user()->last_name  ?? '' }}
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                       <a href="{{url('/')}}/home" class="dropdown-item" type="button">لوحة التحكم</a>
                       <a href="{{url('/')}}/logout" class="dropdown-item" type="button">تسجيل الخروج</a>
                     </div>
                   </div>
          @else
          <a href="{{url('/')}}/login"><i class="fa fa-user ml-2"></i> دخول / مستخدم جديد</a>
          @endauth

        </div>
      </div>
    </div>

  </div>
  <!--end top header-->
