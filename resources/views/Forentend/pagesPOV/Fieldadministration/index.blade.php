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
                    <li class="breadcrumb-item active">
Fieldwork administration
 </li>
                </ol>
  </div>
</div>
<hr class="breadcrumbhr" >
<br>
<div class="services-bar">
        <div class="container">
    <div class="blog-slide">
        <div class="container">
            <h2>
Fieldwork administration
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

                        @foreach($Fieldadministrations as $Fieldadministration)

                        <div class="post-slide">
                             
                            <div class="pic">
                     <a href="{{url('/')}}/Fieldadministration/{{$Fieldadministration->id}}">

                                <img src="{{url('/')}}/{{$Fieldadministration->img}}" alt="">
                                </a>
                                <ul class="post-category">
                                    <li>
                     <a href="{{url('/')}}/Fieldadministration/{{$Fieldadministration->id}}">
                     	{{$Fieldadministration->title}}</a>
                 </li>
                                  
                                </ul>
                            </div>
                              
                            <p class="post-description"> 
                {!! Str::limit($Fieldadministration->desc, 40) !!}

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
    
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')

   

@endsection

