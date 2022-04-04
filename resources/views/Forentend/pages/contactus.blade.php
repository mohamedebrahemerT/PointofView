    @extends('Forentend.index')
@section('content')

 @push('js')
 @endpush
     
    <div class="relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.4370166970784!2d31.351750385457102!3d30.11030598185832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815de8c360e1f%3A0xbfa80d0523b622d4!2zOSDYp9mE2YjYp9ix2K_ZitiMINin2YTZhdi32KfYsdiMINmC2LPZhSDYp9mE2YbYstmH2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1648993054839!5m2!1sar!2seg" width="1920" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
  <div class="absolute">
       <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
  </div>
</div>

 



       <div class="container">
         <div class="row">

                 <div class="col-md-6">
                  

                    <h5 class="py-4">Contact Us</h5>

            <hr style="border: 1px solid #fab117;
width: 80px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -4%;">

                    <p style="color: #505050">Many Desktop Publishing Packages And Web Page Editors Now Use 
Lorem Ipsum As Their Default Model Text</p>

 <div class="contact-details5" style="float: left;">
            <ul>
              <li>
                <i class="fas fa-phone fa-rotate-90" style="color:#fab117"></i>  

            +201060908130 </li>
        <li><i class="fa fa-envelope" style="color:#fab117"></i> 

        info@pov.com  </li>
   <li><i class="fas fa-map-marker-alt" style="color:#fab117">
       
   </i> zamalak - cairo - egypt </li>

      

            </ul>
          </div>
                </div>

                <div class="col-md-6">
                  <div class="Rectangle-115">
                  
                        <h3>get in touch</h3>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                       
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
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
