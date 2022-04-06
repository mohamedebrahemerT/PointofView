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
                    @foreach($Sliders as $key => $slider)
                  
               <div class="carousel-item @if($key == 0)active @endif" style="background-image: url('{{url('/')}}/{{$slider->img}}')">
                  <a href="{{$slider->url}}" style="text-decoration:none;color: #fff;">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>{{$slider->title}} </h3>
                      {!! $slider->desc !!}  
                        </a>
                      <a  href="{{$slider->url}}" class="btn btn-primary" id="sendMessageButton" style="background-color: #000;">READ MORE</a>
                      <br>
                      <br>
                  </div>


                          


               </div>
     
                 @endforeach
            
               
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
                  <img class="img-fluid rounded" src="{{url('/')}}/{{$Aboutus->img}}" alt="" />
               </div>

               <div class="col-lg-6">
                  <h2> {{$Aboutus->title}}</h2>
                 <hr class="new5">
                {!! $Aboutus->desc !!}

            <div>
             
                <div id="meet_our_leaders">
                    <a href="{{url('/')}}/team" style="color: rgba(250,177,23,1) !important;text-decoration: none;">
                          <span>meet our leaders</span>
                    </a>
      

        <div class="row">
                @foreach($OurTeams as $OurTeam)

            <div class="col-lg-6" style="margin-bottom: 1%;">

                <div style="float: left;">
                     <img style=" 
  width: 102px;
  height: 115px;
  left: 726px;
  top: 1230px;
  overflow: visible;
"  src="{{url('/')}}/{{$OurTeam->img}}">
                </div>
               
<div style="float: left;">
     <span style="color: rgba(0,0,0,1);margin-left: 10%;">
   {{$OurTeam->name}}
</span>
<div id="co-founder">
        <span>{{$OurTeam->jobtitle}}</span>
    </div>
    <div class="social-media" style="float: left;">
            <ul style="list-style-type:none;">
              <li><a href="mailto:{{$OurTeam->email}}">
                <i class="fa fa-envelope" style="font-size:20px;color: #000"></i></a></li>
       
            
              <li><a  target="_blank"  href="{{$OurTeam->linkedin_link}}"><i class="fab fa-linkedin-in" style="font-size:20px;color: #000"></i></a></li>
          
            </ul>
          </div>
          
</div>    
            </div>

                 @endforeach 
              
            
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
               @foreach($Departments as $Department)
               <div class="col-lg-3 mb-3">
                    <div class="card h-100">
                        <div class="card-img">
                               <a href="{{url('/')}}/childScopeofresearch/{{$Department->id}}" > 
                            <img class="img-fluid" src="{{url('/')}}/{{$Department->img}}" alt="" />
                        </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-header">
                              <a href="{{url('/')}}/childScopeofresearch/{{$Department->id}}" style="text-decoration: none;color: #000;"> 
                                {{ $Department->title}}
                                  </a>
                             
                             </h4>
                            <p class="card-text">
                                 {{ $Department->desc}}
                            </p>
                            <a href="{{url('/')}}/childScopeofresearch/{{$Department->id}}">
                <span class="card-header"> read more </span>
                </a>
                        </div>
                    </div>
               </div>
               @endforeach
              
            </div>
            <!-- /.row -->
        </div>
    </div>
        
    <div class="container">
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Gallery</h2>
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
            <h2>Our Values</h2>
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

                        @foreach($OurValues as $OurValue)

                        <div class="post-slide">
                             
                            <div class="pic">
                                <img src="{{url('/')}}/{{$OurValue->img}}" alt="">
                                <ul class="post-category">
                                    <li><a href="{{url('/')}}/Values/{{$OurValue->id}}">{{$OurValue->title}}</a></li>
                                  
                                </ul>
                            </div>
                            <p class="post-description">
                              
                {!! Str::limit($OurValue->desc, 30) !!}
              
 <a style="color: rgba(250,177,23,1)" href="{{url('/')}}/Values/{{$OurValue->id}}">
                 read more  
                </a>
                            </p>
                        </div>
                        @endforeach
          
                    </div>
                </div>
            </div>
        </div>
    </div>
        
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')
    
       <div class="container">
         <div class="row">

                 <div class="col-md-6">
                  

                    <h5 class="py-4">{{Settings()->about_title}}</h5>

            <hr style="border: 1px solid #fab117;
width: 80px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -4%;">

                    <p style="color: #505050">
                         {!! Settings()->about_desc !!}
                    </p>
                </div>

                <div class="col-md-6">
                  <div class="Rectangle-11">
                  
                        <h3>get in touch</h3>
                    <form  action="{{url('/')}}/contact-form" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            @csrf
                            <div class="controls">
                                <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name." name="name">
                                <p class="help-block"></p>
                            </div>
                        </div>
                       
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address." name="email">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" name="content"></textarea>
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
  <iframe src="{{Settings()->map_link}}" width="1920" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




    @push('js')
    @endpush
 
@endsection

