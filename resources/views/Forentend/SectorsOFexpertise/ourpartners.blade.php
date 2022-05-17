
 

  <div class="customers-box"> 
        <div class="container">
            <!-- Our Customers -->
            <h2 class="vfdhgfh">Our Clients</h2>
                   
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
 