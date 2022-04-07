 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>   {{Settings()->name}}  </title>

<link rel="shortcut icon" href="{{url('/')}}/Forentend/iconified/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{url('/')}}/Forentend/iconified/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/Forentend/iconified/apple-touch-icon-180x180.png" />


  <!-- Bootstrap core CSS -->
  <link href="{{url('/')}}/Forentend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawesome CSS -->
  <link href="{{url('/')}}/Forentend/css/all.css" rel="stylesheet">
  <!-- Owl Carousel CSS -->
  <link href="{{url('/')}}/Forentend/css/owl.carousel.min.css" rel="stylesheet">
  <!-- Owl Carousel CSS -->
  <link href="{{url('/')}}/Forentend/css/jquery.fancybox.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{url('/')}}/Forentend/css/style.css" rel="stylesheet">

  <style type="text/css">
    .breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: .5rem;
  color: #6c757d;
  content: ">";
  color: #fff;
}

.breadcrumb {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: .75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: rgba(250,177,23,1);
  
}
  </style>


   <style>
.loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #ffffffcf;
        }
        .loader img{
            position: relative;
            left: 40%;
            top: 40%;
        }
</style>

<script>
    window.onload = function() 
    {
        //display loader on page load 
        $('.loader').fadeOut();
    }

</script>


</head>
<body>
<div class="wrapper-main">
<div class="loader" ><img src="{{Settings()->logo_footer}}"></div>