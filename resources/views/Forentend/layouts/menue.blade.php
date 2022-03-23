 @php
              $Setting= App\Models\Setting::orderBy('id','desc')->first();
             @endphp

 <!--start header-->
  <header class="purple_b">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark navbar-dark">
        <a class="navbar-brand" href="{{url('/')}}/">
          <img src="{{url('/')}}/{{$Setting->logo}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">

          <ul class="navbar-nav">
            <li class="nav-item @if(empty(request()->segment(1))) active @endif"> <a class="nav-link" href="{{url('/')}}">الرئيسية </a> </li>
            <li class="nav-item @if(request()->segment(1) == 'aboutus') active @endif"><a class="nav-link" href="{{url('/')}}/aboutus"> من نحن </a></li>
            <li class="nav-item dropdown @if(request()->segment(1) == 'Department') active @endif">
              <a class="nav-link  dropdown-toggle" href="{{url('/')}}/Department" data-toggle="dropdown"> الدورات </a>

               @php
              $Departments= App\Models\Department::get();
             @endphp
              <ul class="dropdown-menu fade-up">
                @foreach($Departments as $Department)
                <li>
      <a class="dropdown-item" href="{{url('/')}}/Department/{{$Department->id}}">
                 {{$Department->title}}

              </a></li>
                @endforeach



              </ul>
            </li>
@if($Setting->Blogstatus == 1)
            <li class="nav-item @if(request()->segment(1) == 'blog') active @endif"><a class="nav-link" href="{{url('/')}}/blog"> المدونة </a></li>
                     @endif

            
            <li class="nav-item @if(request()->segment(1) == 'contactus') active @endif"><a class="nav-link" href="{{url('/')}}/contactus"> اتصل بنا </a></li>
          </ul>

          <div class="mr-auto">
            <form class="form-inline my-2 my-lg-0 search" method="get" action="{{url('/')}}/search">

              <input class="form-control" type="search" placeholder="إبحث عن دورة" aria-label="Search" name="Search" required>
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>

        </div> <!-- navbar-collapse.// -->

      </nav>
    </div>
  </header>
  <!--end header-->
