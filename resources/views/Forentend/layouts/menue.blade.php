  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="row">

         <div class="col-lg-6">
          <div class="contact-details" style="float: left;">
            <ul>
              <li><i class="fas fa-phone fa-rotate-90"></i>  +201060908130 </li>
        <li><i class="fa fa-envelope"></i> info@pov.com  </li>
   <li><i class="fas fa-map-marker-alt"></i> zamalak - cairo - egypt </li>

      

            </ul>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="social-media" style="float: right;">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f" style="font-size:20px"></i></a></li>
       
            
              <li><a href="#"><i class="fab fa-linkedin-in" style="font-size:20px"></i></a></li>
          
            </ul>
          </div>
        </div>
       
      </div>
    </div>
  </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}/">
           <img src="{{url('/')}}/{{Settings()->logo}}"   >
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link  {{ request()->is('/*') ? 'active' : '' }}  " href="{{url('/')}}/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('aboutus*') ? 'active' : '' }}" href="{{url('/')}}/aboutus">About us</a>
          </li>
         <li class="nav-item dropdown">
            <a class="nav-link {{ request()->is('Services*') ? 'active' : '' }}" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <i class="fas fa-sort-down"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">

              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>

       <a class="dropdown-item" href="{{url('/')}}/Services">See all</a>
           
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="services.html">gallery</a>
          </li>

             <li class="nav-item">
            <a class="nav-link" href="services.html">carreer</a>
          </li>
           
          <li class="nav-item">
            <a class="nav-link {{ request()->is('contactus*') ? 'active' : '' }}" href="{{url('/')}}/contactus">contact us</a>
          </li>
        </ul>
            </div>
        </div>
    </nav>