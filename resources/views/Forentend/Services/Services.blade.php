	@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

 <div class="relative">
    <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg"  class="img-fluid">
  <div class="absolute">

     <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href=""> {{Settings()->OurDimensions}} </a></li>
     
  </ul>

     
  </div>
</div>
<hr class="breadcrumbhr" >
	
   
   <div class="services-bar">
        <div class="container">
            <h1 class="py-4 vfdhgfh"> {{Settings()->OurDimensions}} </h1>

            

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
                            <!--p class="card-text">
                                 {!! $Department->desc !!}
                            </p>
                            <a href="{{url('/')}}/childScopeofresearch/{{$Department->id}}">
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
