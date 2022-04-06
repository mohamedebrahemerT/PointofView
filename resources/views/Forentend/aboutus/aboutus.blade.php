@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

 <div class="relative">
    <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg" style="width:1920px; height: 383px;">
  <div class="absolute">
       <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> About Us </li>
                </ol>
  </div>
</div>
<hr class="breadcrumbhr" >

  
    <div class="container">
        <!-- About Content -->
        <div class="about-main">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid rounded mb-4" src="{{url('/')}}/{{$Aboutus->img}}" alt="" />
                </div>
                <div class="col-lg-6">
                    <h2>{{$Aboutus->title}}</h2>
                       <hr class="new5">
                       {!! $Aboutus->desc !!}
                       
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <div class="about-inner">
        <div class="container">

            
            <div class="row mb-4">
                 
                <div class="col-lg-6">
                    <div class="left-ab">
                        <h3 style="  color: #fab117">{{$OurMission->title}}</h3>
                         {!! $OurMission->desc !!}
                       
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="right-ab">
                        <img class="img-fluid rounded mb-4" src="{{url('/')}}/{{$OurMission->img}}" alt="" />
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="right-ab">
                        <img class="img-fluid rounded mb-4" src="{{url('/')}}/{{$OurVision->img}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left-ab">
                        <h3 style="  color: #fab117">{{$OurVision->title}}</h3>
                       {!! $OurVision->desc !!}
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Team Members -->
        <div class="team-members-box">  
            <h2>Meet Our Team</h2>
                <hr style="  border: 1px solid #fab117;
  width: 240px;
  height: 2px;
  background-color: #fab117;
  text-align: left;
  margin-left: 0%;
  margin-top: -2%;
">
            <div class="row">

                @foreach($OurTeams as $OurTeam)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 text-center">
                        <div class="our-team">
                            <img class="img-fluid" src="{{url('/')}}/{{$OurTeam->img}}" alt="" />
                            <div class="team-content">
                                <h3 class="title">{{$OurTeam->name}}</h3>
                                <span class="post">{{$OurTeam->jobtitle}}</span>
                                <ul class="social">
                                    <li><a href="mailto:{{$OurTeam->email}}"><i class="fa fa-envelope"></i></a></li>
                                    
                                    <li><a  target="_blank" href="{{$OurTeam->linkedin_link}}"><i class="fab fa-linkedin" ></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach 
            </div>
            <!-- /.row -->
        </div>
    </div>
    
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')
   
   

@endsection

