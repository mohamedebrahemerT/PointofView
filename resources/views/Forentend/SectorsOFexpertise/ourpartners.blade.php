
 

  <div class="customers-box"> 
        <div class="container">
            <!-- Our Customers -->
            <h2>Our Clients</h2>
                  <hr style="   border: 1px solid #fab117;     width: 244px;     height: 6px;     background-color: #fab117;     text-align: left;     margin-top: -22px;     margin-left: 0px; ">
            <div class="row">
                <div class="col-lg-12">
                    <div id="our-partners" class="owl-carousel">

   @foreach(App\Models\ourpartners::get() as $ourpartner)
 

                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/{{$ourpartner->img}}" alt="" />
                            <h6> {{$ourpartner->title}} </h6>

                        </div>
               @endforeach

                       
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
 