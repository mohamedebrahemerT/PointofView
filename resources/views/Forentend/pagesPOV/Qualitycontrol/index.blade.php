@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

 <div class="relative">
     <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg"  class="img-fluid">
  <div class="absolute">

         <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="">Quality control</a></li>
     
  </ul>

      
  </div>
</div>
<hr class="breadcrumbhr" >
<br>
<div class="services-bar">
        <div class="container">
    <div class="blog-slide">
        <div class="container">
            <h2>


Quality control


</h2>
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

                        @foreach($Qualitycontrols as $Qualitycontrol)

                        <div class="post-slide">
                             
                            <div class="pic">
                     <a href="{{url('/')}}/Qualitycontrol/{{$Qualitycontrol->id}}">

                                <img src="{{url('/')}}/{{$Qualitycontrol->img}}" alt="">
                                </a>
                                <ul class="post-category">
                                    <li>
                     <a href="{{url('/')}}/Qualitycontrol/{{$Qualitycontrol->id}}">
                     	{{$Qualitycontrol->title}}</a>
                 </li>
                                  
                                </ul>
                            </div>
                              
                            <p class="post-description"> 
                {!! Str::limit($Qualitycontrol->desc, 40) !!}

                            </p>

                        </div>
                        @endforeach
          
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
 @include('Forentend.SectorsOFexpertise.ourpartners')
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')

@endsection

