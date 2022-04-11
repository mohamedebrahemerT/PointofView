@extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

 <div class="relative">
     <img src="{{url('/')}}/Forentend/images/all-title-bg.jpg"  class="img-fluid">
  <div class="absolute">
     <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="">{{Settings()->Gallery}}   </a></li>
     
  </ul>
  </div>
</div>
<hr class="breadcrumbhr" >

  
   <div class="container">
        <!-- Portfolio Section -->
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
            <!-- /.row -->
        </div>
    </div>
    
 @include('Forentend.SectorsOFexpertise.ourpartners')
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')

@endsection

