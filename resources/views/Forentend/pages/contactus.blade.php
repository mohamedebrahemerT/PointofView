    @extends('Forentend.index')
@section('content')

 @push('js')
 @endpush
     
    <div class="relative">
            <iframe src="{{Settings()->map_link}}" width="1920" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
  <div class="absolute">
      <ul id="breadcrumbs-two">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="">Contact Us   </a></li>
     
  </ul>
  </div>
</div>

 



       <div class="container">
         <div class="row">

                 <div class="col-md-6">
                  

                    <h5 class="py-4 vfdhgfh">{{Settings()->about_title}}</h5>

            

                    <p style="color: #505050">
                          {!! Settings()->about_desc !!}
                    </p>

 <div class="contact-details5" style="float: left;">
            <ul>
              <li>
                <i class="fas fa-phone fa-rotate-90" style="color:#fab117"></i>  
<a style="color:#000;text-decoration: none;" href="tel:{{Settings()->phone}}">
          {{Settings()->phone}} 
      </a>
           </li>
        <li><i class="fa fa-envelope" style="color:#fab117"></i> 
<a href="mailto:{{Settings()->email}}" style="color:#000;text-decoration: none;">
      {{Settings()->email}} 
  </a>

  </li>
   <li><i class="fas fa-map-marker-alt" style="color:#fab117">
       
   </i> {{Settings()->address}} </li>

      

            </ul>
          </div>
                </div>

                <div class="col-md-6">
                  <div class="Rectangle-115">
                  
                        <h3>Drop us a line</h3>
                  <form  action="{{url('/')}}/contact-form" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            @csrf
                            <div class="controls">
                                <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name." name="name">
                                <p class="help-block"></p>
                            </div>
                        </div>
                       
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address." name="email">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" name="content"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" id="sendMessageButton" style="background-color: #000;">Send Message</button>
                    </form>
                  </div>
                </div>
               

            </div>
    </div>

<br>
<br>

    
    
@endsection
