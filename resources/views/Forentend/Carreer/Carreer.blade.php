    @extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

 <div class="relative">
     <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg"  class="img-fluid">
  <div class="absolute">
        <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href=""> {{Settings()->Carreers}}   </a></li>
     
  </ul>
  </div>
</div>
<hr class="breadcrumbhr" >
    
   
   <div class="services-bar">
        <div class="container">
            <h1 class="py-4 vfdhgfh">{{Settings()->Carreers}} </h1>

           

            <!-- Services Section -->
            <div class="row">
               @foreach($carreers as $Carreer)
               <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                             <a href="{{url('/')}}/Carreerweb/{{$Carreer->id}}" > 
                            <img class="img-fluid" src="{{url('/')}}/{{$Carreer->img}}" alt="" />
                        </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> 
                                  <a href="{{url('/')}}/Carreerweb/{{$Carreer->id}}" style="text-decoration: none;color: #000;"> 
                                {{ $Carreer->title}}
                            </a>
                             
                             </h4>
                            <p class="card-text">
                                

                {!! Str::limit($Carreer->desc, 100) !!}

                            </p>
                            <a href="{{url('/')}}/Carreerweb/{{$Carreer->id}}">
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


 @include('Forentend.SectorsOFexpertise.ourpartners')
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')
@endsection
