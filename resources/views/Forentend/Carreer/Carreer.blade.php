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
                    <li class="breadcrumb-item active"> Carreer</li>
                </ol>
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
            <h1 class="py-4">Carreers </h1>

            <hr style="border: 1px solid #fab117;
width: 225px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -4%;">

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


   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')
@endsection
