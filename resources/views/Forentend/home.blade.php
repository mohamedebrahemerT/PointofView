@extends('Forentend.index')
@section('content')
 
  
  @push('js')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <style type="text/css">
      .carousel-caption {
  right: 20%;
  left: 20%;
  padding-bottom: 30px;
  top:30%;
}

@media (min-width: 1200px) 
{
    .ssdcccfsdfsdf{
 
  margin-top: -36px;
}

.asdasdasd
{
    margin-top: 7%;
}
  
  }

  @media (max-width: 576px) 
{
    
.asdasdasd
{
   margin-top: 11%;
}

 .ssdcccfsdfsdf{
 
 margin-bottom: 25px;
}


  
  }


  </style>
 @endpush

 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
                    @foreach($Sliders as $key => $slider)

      <li data-target="#myCarousel" data-slide-to="{{$key}}" class=" @if($key == 0)active @endif"></li>
                 @endforeach
    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
                    @foreach($Sliders as $key => $slider)

      <div class="item @if($key == 0)active @endif">
        <img src="{{$slider->img}}" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
              <a href="{{$slider->url}}" style="text-decoration:none;color: #fff;">
          <h1  class="slidertitle">{{$slider->title}} </h1>
          <span  class="sliderp"> 
            <span style="font-size: 20px;">
                {!! $slider->desc !!}  
                </span>
            </span>
      </a>
          @if($slider->READ_MORE_visible == '1')  
        <a  href="{{$slider->url}}" class="btn btn-primary" id="sendMessageButton" style="background-color: #000;">{{$slider->READ_MORE_text}}</a >
        @endif
        </div>
      </div>

                 @endforeach
     
     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 


 
    
    <!--div class="container">        
       
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
                    <h2 href="{{url('/')}}/team" style="color: rgba(250,177,23,1) !important;text-decoration: none;font-size: 16px;
 font-family: 'Work Sans', sans-serif;
                    ">
                          <span>Meet our Team</span>
                    </h2>
      

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
           
        </div>
    </div -->  
    
    <!--div class="services-bar">
        <div class="container">
            <h1 class="py-4">Scope Of Research </h1>

            <hr style="border: 1px solid #fab117;
width: 225px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -4%;">

             
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
           
        </div>
    </div -->
        
    <!--div class="container">
       
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
  @foreach(App\Models\Photocategories::get() as $Photocateg)
                    <button data-filter=".{{$Photocateg->id}}" class="btn btn-primary">{{$Photocateg->title}}</button>
                    @endforeach
                  
                </div>
            </div>
            <div id="projects" class="projects-main row">

  @foreach(App\Models\OurGallery::inRandomOrder()->take(6)->get() as $OurGallery)

               <div class="col-lg-4 col-sm-6 pro-item portfolio-item {{$OurGallery->photocategories_id}}">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{url('/')}}/{{$OurGallery->img}}" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/')}}/{{$OurGallery->img}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="{{url('/')}}/{{$OurGallery->img}}">{{$OurGallery->title}}</a>
                        </h4>
                     </div>
                  </div>
               </div>
                    @endforeach
              
            </div>
          
        </div>
    </div -->
    
    <!--div class="blog-slide">
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
    </div -->
    @include('Forentend.SectorsOFexpertise.ourpartners')
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
                  
                        <h3>Drop us a line</h3>
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




@endsection

