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
                      
                    <li class="breadcrumb-item active">{{$Service->title}}</li>
                </ol>
  </div>
</div>
<hr class="breadcrumbhr" >

   <div class="item-pro">
		<div class="container">
			<!-- Portfolio Item Row -->
			<div class="row">
				<div class="col-md-8">
					<img class="img-fluid" src="{{url('/')}}/{{$Service->img}}" alt="" />
				</div>
				<div class="col-md-4">
					<h3 class="my-3">{{ $Service->title}} </h3>
				 

				{!! Str::limit($Service->desc, 600) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="mt-3"> 	 {!! $Service->desc !!}   </p>
				</div>
			</div>
			
			<!-- /.row -->
			<div class="related-projects">
				<!-- Related Projects Row -->
				<h3>Related Services</h3>
				<div class="row">
					 @foreach($RelatedServices as  $Related)
					<div class="col-md-3 col-sm-6 mb-4">
				

						<a href="{{url('/')}}/Services/{{$Related->id}}">
							<img class="img-fluid" src="{{url('/')}}/{{$Related->img}}" alt="" />
						</a>
 <h6  > 
                                {{ $Related->title}}
                             
                             </h6>
					</div>
					@endforeach
				 
				</div>
				<!-- /.row -->
			</div>
		</div>
		<!-- /.container -->
	</div>
   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')
	

 
@endsection
