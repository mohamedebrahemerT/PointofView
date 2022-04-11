	@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

 <div class="relative">
    <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg"  class="img-fluid">
  <div class="absolute">

     <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="">{{$Department->title}}</a></li>
     
  </ul>


     
  </div>
</div>
<hr class="breadcrumbhr" >
	
    <!-- Page Content -->
    <div class="container">
		<!-- Image Header -->
		<img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />
	</div>
  <div class="services-bar">
        <div class="container">
            <h1 class="py-4">{{$Department->title}}</h1>

            <hr style="border: 1px solid #fab117;
width: 225px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -4%;">
<!--p>{!! $Department->desc !!} </p -->

            <!-- Services Section -->
            <div class="row">

               @foreach($childScopeofresearch as $child)

               <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="{{url('/')}}/{{$child->img}}" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header">   
                            	{{ $child->title}} </h4>
                            <!--p class="card-text">
                {!! Str::limit($child->desc, 100) !!}

                            	 
                            </p -->
                            <!--a href="{{url('/')}}/Services/{{$child->id}}"> 
                              <span class="card-header"> read more </span>
                              </a -->
                        </div>
                    </div>
               </div>
               @endforeach
               


                
            </div>
            <!-- /.row -->
 

        </div>
    </div>
	
   @include('Forentend.SectorsOFexpertise.ourpartners')
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')
@endsection
