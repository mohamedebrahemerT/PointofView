@extends('Forentend.index')
@section('content')

 @push('js')
<style type="text/css">
    
    .card .h-100 .bg-01
    {
        border: 5px solid #fab117;
    }
    h3
    {
        color: #fab117;
    }
</style>
 @endpush



 <div class="relative">
    <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg"  class="img-fluid">
  <div class="absolute">

     <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/')}}/aboutus">{{Settings()->ouridentity}} </a></li>
     
  </ul>

       
  </div>
</div>
<hr class="breadcrumbhr" >



  <!-- Page Content -->
    <div class="container">

  <h1 class="py-4"> {{Settings()->ouridentity}} </h1>

            <hr style="border: 1px solid #fab117;
width: 225px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -3%;">
        <div class="pricing-box">
        <!-- Content Row -->
            <div class="row">
                <div class="col-lg-12 mb-12">
                    <div class="card h-100 bg-01" style="background: url({{url('/')}}/{{$Aboutus->img}}) no-repeat center; border: 5px solid #fab117;
background-size: 1101px 399px !important;

                    ">
                        <div class="card-header">
                            <div id="grad1"></div>
                <h2 style="color:#fff">{{$Aboutus->title}}</h2>
                       <hr style="  border: 1px solid #fab117;
  width: 178px;
  height: 2px;
  background-color: #fab117;
   
  margin-top: 0%;
">
                       <span  style="margin-left: 30%">{!! $Aboutus->desc !!}</span>
                            
                           
                        </div>
                        
                    </div>
                </div>
 
              
            </div>
        <!-- /.row -->
        </div>

           <div class="pricing-box">
        <!-- Content Row -->
            <div class="row">
                <div class="col-lg-12 mb-12">
                    <div class="card h-100 bg-01" style="background: url({{url('/')}}/{{$OurMission->img}}) no-repeat center; border: 5px solid #fab117;
background-size: 1101px 399px !important;

                    ">
                        <div class="card-header">
                            <div id="grad1"></div>
                              <h3>Satispction</h3>
                <h2 style="color:#fff">{{$OurMission->title}}</h2>
                       <hr  style="border: 1px solid #fff;
width: 129px;
height: 2px;
background-color: #fab117;
text-align: left;">
                       <span  style="margin-left: 30%">{!! $OurMission->desc !!}</span>
                            
                           
                        </div>
                        
                    </div>
                </div>
 
              
            </div>
        <!-- /.row -->
        </div>

         <div class="pricing-box">
        <!-- Content Row -->
            <div class="row">
                <div class="col-lg-12 mb-12">
                    <div class="card h-100 bg-01" style="background: url({{url('/')}}/{{$OurVision->img}}) no-repeat center;border: 5px solid #fab117;
                   background-size: 1101px 399px !important;
 ">
                        <div class="card-header">
                            <div id="grad1"></div>
                            <h3>Partnership</h3>
                <h2 style="color:#fff">{{$OurVision->title}}</h2>
                       <hr  style="border: 1px solid #fff;
width: 129px;
height: 2px;
background-color: #fab117;
text-align: left;">
                       <span  style="margin-left: 30%">{!! $OurVision->desc !!}</span>
                            
                           
                        </div>
                        
                    </div>
                </div>
 
              
            </div>
        <!-- /.row -->
        </div>

       


          <div class="pricing-box">
        <!-- Content Row -->
            <div class="row">
                <div class="col-lg-12 mb-12">
                    <div class="card h-100 bg-01" style="background: url({{url('/')}}/{{$OurValue->img}}) no-repeat center;border: 5px solid #fab117;
                    background-size: 1101px 399px  !important;

                    ">
                        <div class="card-header">
                            <div id="grad1"></div>
                              
                <h2 style="color:#fff"> What We offer</h2>
                       <hr  style="border: 1px solid #fff;
width: 129px;
height: 2px;
background-color: #fab117;
text-align: left;">

                        @foreach($OurValues as $OurValue)
         
          <span>
          
           <h4 style="color:rgba(250,177,23,1);"> {{$OurValue->title}}</h4> 
            {!! $OurValue->desc !!}
        </span>
                            
                        @endforeach
                           
                        </div>
                        
                    </div>
                </div>
 
              
            </div>
        <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->
 

  
  
 @include('Forentend.SectorsOFexpertise.ourpartners')
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')

@endsection

