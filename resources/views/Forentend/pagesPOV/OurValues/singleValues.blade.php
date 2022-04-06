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
                      
                    <li class="breadcrumb-item active">{{$Value->title}}</li>
                </ol>
  </div>
</div>
<hr class="breadcrumbhr" >

   <div class="item-pro">
		<div class="container">
			<!-- Portfolio Item Row -->
			<div class="row">
				<div class="col-md-4">
					<img class="img-fluid" src="{{url('/')}}/{{$Value->img}}" alt="" />
				</div>
				<div class="col-md-8	">
					<h3 class="my-3">{{ $Value->title}} </h3>
				 

				{!! Str::limit($Value->desc, 600) !!}
				</div>
			</div>
			 
			
			 
		</div>
		<!-- /.container -->
	</div>
	

   @include('Forentend.SectorsOFexpertise.SectorsOFexpertise')
 
@endsection
