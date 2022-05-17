@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

 <div class="relative">
     <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg"  class="img-fluid">
  <div class="absolute">

       <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href=""> Meet Our Team    </a></li>
     
  </ul>

      
  </div>
</div>
<hr class="breadcrumbhr" >

 
    <div class="about-inner">
     
                
          
    <div class="container">
        <!-- Team Members -->
        <div class="team-members-box">  
            <h2 class="vfdhgfh">Meet Our Team</h2>
                
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
    
   
    </div>
    
 @include('Forentend.SectorsOFexpertise.ourpartners')
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')

@endsection

