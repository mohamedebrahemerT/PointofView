  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="row">

       
         <div class="col-lg-6">
          <div class="contact-details" style="float: left;">
            <ul>
              <!--li>
                <a style="color:#fff;text-decoration: none; font-size: 20px;" href="tel:{{Settings()->phone}}">
                <i class="fas fa-phone fa-rotate-90"></i>  
{{-- Settings()->phone --}}</a>
                
                 </li>
        <li>
         <a href="mailto:{{Settings()->email}}" style="color:#fff;text-decoration: none; font-size: 20px;">
          <i class="fa fa-envelope"></i> 
 
          {{-- Settings()->email --}} 
        </a>
        </li>
   <li><i class="fas fa-map-marker-alt"></i>  

    {{Settings()->address}} 
  </li >

      

            </ul -->
          </div>
        </div>

         <div class="col-lg-6">
          <div class="social-media" style="float: right;">
            <ul>

                  <li>
                <a style="color:#fff;text-decoration: none; font-size: 20px;" href="tel:{{Settings()->phone}}">
                <i class="fas fa-phone fa-rotate-90"></i>  
{{-- Settings()->phone --}}</a>
                
                 </li>
        <li>
         <a href="mailto:{{Settings()->email}}" style="color:#fff;text-decoration: none; font-size: 20px;">
          <i class="fa fa-envelope"></i> 
 
          {{-- Settings()->email --}} 
        </a>
        </li>
   <!--li><i class="fas fa-map-marker-alt"></i>  

    {{Settings()->address}} 
  </li -->

      
              <li><a href="{{Settings()->facebook_link}}" target="_blank"><i class="fab fa-facebook-f" style="font-size:20px"></i></a></li>
       
            
              <li><a href="{{Settings()->linkedin_link}}" target="_blank"><i class="fab fa-linkedin-in" style="font-size:20px"></i></a></li>


          
            </ul>
          </div>
        </div>

       
      </div>
    </div>
  </div>
     <div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row ssdcccfsdfsdf">
            <nav class="navbar navbar-light navbar-expand-lg mainmenu">
               <a class="navbar-brand" href="{{url('/')}}/">
           <img src="{{url('/')}}/{{Settings()->logo}}"  class="asdasdasdff" >
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto asdasdasd">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                          <a href="{{url('/')}}/">Home
                           <span class="sr-only">(current)</span></a>
                         </li>

                         <li class="{{ Request::segment(1) === 'aboutus' ? 'active' : null }}"><a href="{{url('/')}}/aboutus">{{Settings()->ouridentity}}</a></li>



                        <li class="dropdown {{ Request::segment(1) === 'Services' ? 'active' : null }}"  >

                            <a   href="{{url('/')}}/Services" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">{{Settings()->OurDimensions}} </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              @foreach(App\Models\Department::orderBy('order','ASC')->get() as $Department)
                            <li class="dropdown">
                                <a   href="{{url('/')}}/childScopeofresearch/{{$Department->id}}" id="navbarDropdown"   aria-expanded="false"> {{ $Department->title}}</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      @foreach(App\Models\Course::where('department_id',$Department->id)->get() as $child)
                                <li><a href="{{url('/')}}/Services/{{$child->id}}"> {{ $child->title}}</a></li>
               @endforeach
                               
                                </ul>
                            </li>
               @endforeach

                    

                            </ul>
                        </li>

 @if(Settings()->Carreersstatus == 1) 

                          <li  class="{{ Request::segment(1) === 'Carreerweb' ? 'active' : null }}"><a href="{{url('/')}}/Carreerweb">{{Settings()->Carreers}}</a></li>

 @endif

                             <li  class="{{ Request::segment(1) === 'team' ? 'active' : null }}"><a href="{{url('/')}}/team">{{Settings()->POVTeam}}</a></li>
 @if(Settings()->Blogstatus == 1) 

                                <li class="{{ Request::segment(1) === 'Gallery' ? 'active' : null }}"><a href="{{url('/')}}/Gallery">{{Settings()->Gallery}}</a></li>
 @endif
                                  <li  class="{{ Request::segment(1) === 'contactus' ? 'active' : null }}"><a href="{{url('/')}}/contactus">{{Settings()->Contactus}}</a></li>
                     
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
 
 

    
     