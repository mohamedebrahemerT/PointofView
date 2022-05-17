  <div class="customers-box"> 
        <div class="container">
            <!-- Our Customers -->
            <h2 class="vfdhgfh">Sectors of expertise</h2>
                  
            <div class="row">
                <div class="col-lg-12">
                    <div id="customers-slider" class="owl-carousel">

   @foreach(App\Models\SectorsOFexpertise::get() as $Sector)
 

                        <div class="mb-4">
                            <img class="img-fluid" src="{{url('/')}}/{{$Sector->img}}" alt="" />
                            <h6> {{$Sector->title}} </h6>

                        </div>
               @endforeach

                       
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
 