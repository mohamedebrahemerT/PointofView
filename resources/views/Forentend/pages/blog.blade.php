 @extends('Forentend.index')
@section('content')

 @push('js')
 @endpush

    <section class="page-header profile-header">
        <div class="page-header_wrapper">
            <div class="container">
                <div class="page-header_content">
                    <h1 class="page-header_title">المدونة</h1>
                </div>
            </div>
        </div>

    </section>
    <section class="page details-card py-5">
        <div class="container mb-5">
            <div class="row mb-5">
            @php
              $blogs= App\Models\blog::paginate(4);
             @endphp
                @foreach($blogs   as $key => $blog)
                <div class="col-md-3">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="{{url('/')}}/{{$blog->img}}" alt="">
                        </div>
                        <div class="card-desc">
                            <h3>  {!! $blog->title !!}</h3>
                                <p> <i class="fa fa-calendar"></i>
                                   {{date('M d,Y')}}

                            </p>
                                  <a href="{{url('/')}}/blog/{{$blog->id}}" class="btn-card">المزيد</a>
                        </div>
                    </div>
                </div>
          @endforeach



            </div>
            {{ $blogs->links('Forentend.pages.blocks.pagination') }}
        </div>
    </section>

@endsection

