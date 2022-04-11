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

    <link href="{{url('/')}}/Forentend/css/owl.carousel2.min.css" rel="stylesheet">

 
  <!-- Owl Carousel CSS -->
  <link href="{{url('/')}}/Forentend/css/jquery.fancybox.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{url('/')}}/Forentend/css/style.css" rel="stylesheet">

  <style type="text/css">
   #breadcrumbs-two{
    overflow: hidden;
    width: 100%;
    list-style: none;
  }

  #breadcrumbs-two li{
    float: left;
    margin: 0 .5em 0 1em;
  }

  #breadcrumbs-two a{
    background: #ddd;
    padding: .7em 1em;
    float: left;
    text-decoration: none;
    color: #444;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
    position: relative;
  }

  #breadcrumbs-two a:hover{
    background: #fff;
  }

  #breadcrumbs-two a::before{
    content: "";
    position: absolute;
    top: 50%;
    margin-top: -1.5em;
    border-width: 1.5em 0 1.5em 1em;
    border-style: solid;
    border-color: #ddd #ddd #ddd transparent;
    left: -1em;
  }

  #breadcrumbs-two a:hover::before{
    border-color:rgba(250,177,23,1);
  }

  #breadcrumbs-two a::after{
    content: "";
    position: absolute;
    top: 50%;
    margin-top: -1.5em;
    border-top: 1.5em solid transparent;
    border-bottom: 1.5em solid transparent;
    border-left: 1em solid #ddd;
    right: -1em;
  }

  #breadcrumbs-two a:hover::after{
    border-left-color: rgba(250,177,23,1);
  }

  #breadcrumbs-two .current,
  #breadcrumbs-two .current:hover{
    font-weight: bold;
    background: none;
  }

  #breadcrumbs-two .current::after,
  #breadcrumbs-two .current::before{
    content: normal;
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

 <style type="text/css">
  .menu-area{background: #fff}
.dropdown-menu{padding:0;margin:0;border:0 solid transition!important;border:0 solid rgba(0,0,0,.15);border-radius:0;-webkit-box-shadow:none!important;box-shadow:none!important}
.mainmenu a, .navbar-default .navbar-nav > li > a, .mainmenu ul li a , .navbar-expand-lg .navbar-nav .nav-link
{
    color: #000;
  font-size: 16px;
  text-transform: capitalize;
  padding: 12px 13px;
  font-family: 'Roboto',sans-serif;
  display: block !important;

}

.mainmenu .active a,.mainmenu .active a:focus,.mainmenu .active a:hover,.mainmenu li a:hover,.mainmenu li a:focus ,.navbar-default .navbar-nav>.show>a, .navbar-default .navbar-nav>.show>a:focus, .navbar-default .navbar-nav>.show>a:hover
{
  color: #fff;
  background: #FAB117;
  outline: 0;
 

}


/*==========Sub Menu=v==========*/
.mainmenu .collapse ul > li:hover > a{background: #fab117;}
.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover{background: #fab117;}
.mainmenu .collapse ul ul ul > li:hover > a{background: #fab117;}

.mainmenu .collapse ul ul, .mainmenu .collapse ul ul.dropdown-menu{background:#fff;}
.mainmenu .collapse ul ul ul, .mainmenu .collapse ul ul ul.dropdown-menu{background:#fff}
.mainmenu .collapse ul ul ul ul, .mainmenu .collapse ul ul ul ul.dropdown-menu{background:#64B5F6}

/******************************Drop-down menu work on hover**********************************/
.mainmenu{background: none;border: 0 solid;margin: 0;padding: 0;min-height:20px;width: 100%;}
@media only screen and (min-width: 767px) {
.mainmenu .collapse ul li:hover> ul{display:block}
.mainmenu .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul li{position:relative}
.mainmenu .collapse ul ul li:hover> ul{display:block}
.mainmenu .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
/*******/
.mainmenu .collapse ul ul ul li{position:relative}
.mainmenu .collapse ul ul ul li:hover ul{display:block}
.mainmenu .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}

}
@media only screen and (max-width: 767px) {
.navbar-nav .show .dropdown-menu .dropdown-menu > li > a{padding:10px 10px 10px 10px}
.navbar-nav .show .dropdown-menu .dropdown-menu .dropdown-menu > li > a{padding:10px 10px 10px 10px}
}
   
 </style>

 <script type="text/javascript">
  (function($){
  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');

    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
    });

    return false;
  });
})(jQuery)


   
 </script>

</head>
<body style=" font-family: 'Work Sans', sans-serif !important;"> 
<div class="wrapper-main">
<div class="loader" ><img src="{{Settings()->logo_footer}}"></div>