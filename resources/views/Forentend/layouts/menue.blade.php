  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="row">

         <div class="col-lg-11">
          <div class="contact-details" style="float: left;">
            <ul>
              <li><i class="fas fa-phone fa-rotate-90"></i>  
<a style="color:#fff;text-decoration: none;" href="tel:{{Settings()->phone}}">{{Settings()->phone}}</a>
                
                 </li>
        <li>
         
          <i class="fa fa-envelope"></i> 
 <a href="mailto:{{Settings()->email}}" style="color:#fff;text-decoration: none;">
          {{Settings()->email}} 
        </a>
        </li>
   <li><i class="fas fa-map-marker-alt"></i>  

    {{Settings()->address}} 
  </li>

      

            </ul>
          </div>
        </div>

        <div class="col-lg-1">
          <div class="social-media" style="float: right;">
            <ul>
              <li><a href="{{Settings()->facebook_link}}" target="_blank"><i class="fab fa-facebook-f" style="font-size:20px"></i></a></li>
       
            
              <li><a href="{{Settings()->linkedin_link}}" target="_blank"><i class="fab fa-linkedin-in" style="font-size:20px"></i></a></li>
          
            </ul>
          </div>
        </div>
       
      </div>
    </div>
  </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}/">
           <img src="{{url('/')}}/{{Settings()->logo}}"   >
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link  {{ request()->is('/*') ? 'active' : '' }}  " href="{{url('/')}}/">Home</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link {{ request()->is('aboutus*') ? 'active' : '' }}" href="{{url('/')}}/aboutus">About us</a>
          </li>

         

            <li class="nav-item dropdown">
            <a class="nav-link {{ request()->is('OurTeam*') ? 'active' : '' }}" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="fas fa-sort-down"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
 
            

       <a class="dropdown-item" href="{{url('/')}}/team">Our Team</a>

     <a class="dropdown-item" href="{{url('/')}}/Values">Our Values</a>

     <a class="dropdown-item" href="{{url('/')}}/devcycle">development cycle</a>

      <a class="dropdown-item" href="{{url('/')}}/Fieldadministration">
Fieldwork administration
</a>

 <a class="dropdown-item" href="{{url('/')}}/Rescapabilities">
Resourcescapabilities
</a>

 <a class="dropdown-item" href="{{url('/')}}/Qualitycontrol">
Quality control
</a>




           
            </div>
          </li>

         <li class="nav-item dropdown">
            <a class="nav-link {{ request()->is('Services*') ? 'active' : '' }}" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <i class="fas fa-sort-down"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
   @foreach(App\Models\Department::get() as $Department)
              <a class="dropdown-item" href="{{url('/')}}/childScopeofresearch/{{$Department->id}}">
                  {{ $Department->title}}
              </a>
               @endforeach
            

       <a class="dropdown-item" href="{{url('/')}}/Services">See All</a>
           
            </div>
          </li>

           <li class="nav-item">
            <a class="nav-link {{ request()->is('Gallery*') ? 'active' : '' }}" href="{{url('/')}}/Gallery">Gallery</a>
          </li>

             <li class="nav-item">
            <a class="nav-link {{ request()->is('Carreer*') ? 'active' : '' }}" href="{{url('/')}}/Carreer">Carreer</a>
          </li>
           
          <li class="nav-item">
            <a class="nav-link {{ request()->is('contactus*') ? 'active' : '' }}" href="{{url('/')}}/contactus">Contact us</a>
          </li>
        </ul>
            </div>
        </div>
    </nav>
     