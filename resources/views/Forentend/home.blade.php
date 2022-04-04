@extends('Forentend.index')
@section('content')

  <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('{{url('/')}}/Forentend/images/slider-01.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Zonebiz</h3>
                     <p>A Great Theme For Business Consulting</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('{{url('/')}}/Forentend/images/slider-02.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Best Consulting Services.</h3>
                     <p>A Great Theme For Business Consulting</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('{{url('/')}}/Forentend/images/slider-03.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Zonebiz</h3>
                     <p>A Great Theme For Business Consulting</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    
    <!-- Page Content -->
    <div class="container">        
        <!-- About Section -->
        <div class="about-main">
            <div class="row">

                 <div class="col-lg-6">
                  <img class="img-fluid rounded" src="{{url('/')}}/Forentend/images/about-img.jpg" alt="" />
               </div>

               <div class="col-lg-6">
                  <h2> who we are! </h2>
                 <hr class="new5">
                  <p> POV is an independent full service marketing research
agency established in 2015 , started its operate from
Egypt, conducts research in Egypt and we are
expanding our services now to the MENA region, has its
field partners in North Africa, Sub-Saharan Africa,
Middle East, South Asia and South East Asia  </p>

            <div>
             
                <div id="meet_our_leaders">
        <span>meet our leaders</span>

        <div class="row">
            <div class="col-lg-6" style="margin-bottom: 1%;">

                <div style="float: left;">
                     <img style=" 
  width: 102px;
  height: 115px;
  left: 726px;
  top: 1230px;
  overflow: visible;
"  src="{{url('/')}}/Forentend/images/team_02.jpg">
                </div>
               
<div style="float: left;">
     <span style="color: rgba(0,0,0,1);margin-left: 10%;">
    hannan zed
</span>
<div id="co-founder">
        <span>co-founder</span>
    </div>
    <div class="social-media" style="float: left;">
            <ul style="list-style-type:none;">
              <li><a href="#"><i class="fab fa-facebook-f" style="font-size:20px;color: #000"></i></a></li>
       
            
              <li><a href="#"><i class="fab fa-linkedin-in" style="font-size:20px;color: #000"></i></a></li>
          
            </ul>
          </div>
          
</div>    
            </div>

              <div class="col-lg-6">

                <div style="float: left;">
                     <img style=" 
  width: 102px;
  height: 115px;
  left: 726px;
  top: 1230px;
  overflow: visible;
"  src="{{url('/')}}/Forentend/images/team_01.jpg">
                </div>
               
<div style="float: left;">
     <span style="color: rgba(0,0,0,1);margin-left: 10%;">
   moatz ahmed
</span>
<div id="co-founder">
        <span>co-founder</span>
    </div>
    <div class="social-media" style="float: left;">
            <ul style="list-style-type:none;">
              <li><a href="#"><i class="fab fa-facebook-f" style="font-size:20px;color: #000"></i></a></li>
       
            
              <li><a href="#"><i class="fab fa-linkedin-in" style="font-size:20px;color: #000"></i></a></li>
          
            </ul>
          </div>
          
</div>    
            </div>
            
        </div>
    </div>
            </div>
                  
                   
               </div>
              
            </div>
            <!-- /.row -->
        </div>
    </div>  
    
    <div class="services-bar">
        <div class="container">
            <h1 class="py-4">Scope Of Research </h1>

            <hr style="border: 1px solid #fab117;
width: 225px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -4%;">

            <!-- Services Section -->
            <div class="row">
               <div class="col-lg-3 mb-3">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/services-img-01.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Analytics </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                              <span class="card-header"> read more </span>
                        </div>
                    </div>
               </div>
               <div class="col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/services-img-02.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Applications </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                              <span class="card-header"> read more </span>
                        </div>
                    </div>
               </div>
               <div class="col-lg-3 mb-3">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/services-img-03.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Business Process </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                              <span class="card-header"> read more </span>
                        </div>
                    </div>
               </div>
               <div class="col-lg-3 mb-3">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/services-img-04.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Consulting </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                   <span class="card-header"> read more </span>
                        </div>                      
                    </div>
               </div>

                
            </div>
            <!-- /.row -->
        </div>
    </div>
        
    <div class="container">
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
            <hr style="border: 1px solid #fab117;
width: 142px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -2%;">
            <div class="col-lg-12">
                <div class="project-menu text-center">
                    <button class="btn btn-primary active" data-filter="*">All</button>
                    <button data-filter=".business" class="btn btn-primary">Business</button>
                    <button data-filter=".travel" class="btn btn-primary">Travel</button>
                    <button data-filter=".financial" class="btn btn-primary">Financial</button>
                    <button data-filter=".academic" class="btn btn-primary">Academic</button>
                </div>
            </div>
            <div id="projects" class="projects-main row">
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-01.jpg" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/')}}/Forentend/images/portfolio-img-01.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item business academic">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-02.jpg" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/')}}/Forentend/images/portfolio-img-02.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-03.jpg" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/')}}/Forentend/images/portfolio-img-03.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item business">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-04.jpg" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/')}}/Forentend/images/portfolio-img-04.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-05.jpg" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/')}}/Forentend/images/portfolio-img-05.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial academic">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-01.jpg" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/')}}/Forentend/images/portfolio-img-01.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    
    <div class="blog-slide">
        <div class="container">
            <h2>Our Blog</h2>
                <hr style="border: 1px solid #fab117;
width: 142px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -2%;">
            <div class="row">
                <div class="col-lg-12">
                    <div id="blog-slider" class="owl-carousel">
                        <div class="post-slide">
                            <div class="post-header">
                                <h4 class="title">
                                    <a href="#">Latest blog Post</a>
                                </h4>
                                <ul class="post-bar">
                                    <li><img src="{{url('/')}}/Forentend/images/testi_01.png" alt=""><a href="#">Williamson</a></li>
                                    <li><i class="fa fa-calendar"></i>02 June 2018</li>
                                </ul>
                            </div>
                            <div class="pic">
                                <img src="{{url('/')}}/Forentend/images/img-1.jpg" alt="">
                                <ul class="post-category">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Financ</a></li>
                                </ul>
                            </div>
                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                            </p>
                        </div>
         
                        <div class="post-slide">
                            <div class="post-header">
                                <h4 class="title">
                                    <a href="#">Latest blog Post</a>
                                </h4>
                                <ul class="post-bar">
                                    <li><img src="{{url('/')}}/Forentend/images/testi_02.png" alt=""><a href="#">Kristiana</a></li>
                                    <li><i class="fa fa-calendar"></i>05 June 2018</li>
                                </ul>
                            </div>
                            <div class="pic">
                                <img src="{{url('/')}}/Forentend/images/img-2.jpg" alt="">
                                <ul class="post-category">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Financ</a></li>
                                </ul>
                            </div>
                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                            </p>
                        </div>
                        
                        <div class="post-slide">
                            <div class="post-header">
                                <h4 class="title">
                                    <a href="#">Latest blog Post</a>
                                </h4>
                                <ul class="post-bar">
                                    <li><img src="{{url('/')}}/Forentend/images/testi_01.png" alt=""><a href="#">Kristiana</a></li>
                                    <li><i class="fa fa-calendar"></i>05 June 2018</li>
                                </ul>
                            </div>
                            <div class="pic">
                                <img src="{{url('/')}}/Forentend/images/img-3.jpg" alt="">
                                <ul class="post-category">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Financ</a></li>
                                </ul>
                            </div>
                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                            </p>
                        </div>
                        
                        <div class="post-slide">
                            <div class="post-header">
                                <h4 class="title">
                                    <a href="#">Latest blog Post</a>
                                </h4>
                                <ul class="post-bar">
                                    <li><img src="{{url('/')}}/Forentend/images/testi_02.png" alt=""><a href="#">Kristiana</a></li>
                                    <li><i class="fa fa-calendar"></i>05 June 2018</li>
                                </ul>
                            </div>
                            <div class="pic">
                                <img src="{{url('/')}}/Forentend/images/img-4.jpg" alt="">
                                <ul class="post-category">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Financ</a></li>
                                </ul>
                            </div>
                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
   <div class="customers-box"> 
        <div class="container">
            <!-- Our Customers -->
            <h2>Our Partner</h2>
                  <hr style="border: 1px solid #fab117;
width: 218px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -2%;">
            <div class="row">
                <div class="col-lg-12">
                    <div id="customers-slider" class="owl-carousel">
                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/logo_01.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/logo_02.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/logo_03.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/logo_04.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/logo_05.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/Forentend/images/logo_06.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    

       <div class="container">
         <div class="row">

                 <div class="col-md-6">
                  

                    <h5 class="py-4">Contact Us</h5>

            <hr style="border: 1px solid #fab117;
width: 80px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -4%;">

                    <p style="color: #505050">Many Desktop Publishing Packages And Web Page Editors Now Use 
Lorem Ipsum As Their Default Model Text</p>
                </div>

                <div class="col-md-6">
                  <div class="Rectangle-11">
                  
                        <h3>get in touch</h3>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                       
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" id="sendMessageButton" style="background-color: #000;">Send Message</button>
                    </form>
                  </div>
                </div>
               

            </div>
    </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.4370166970784!2d31.351750385457102!3d30.11030598185832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815de8c360e1f%3A0xbfa80d0523b622d4!2zOSDYp9mE2YjYp9ix2K_ZitiMINin2YTZhdi32KfYsdiMINmC2LPZhSDYp9mE2YbYstmH2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1648993054839!5m2!1sar!2seg" width="1920" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




    @push('js')
    @endpush
 
@endsection

