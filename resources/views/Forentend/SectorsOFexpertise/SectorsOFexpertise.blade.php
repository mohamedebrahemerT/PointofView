  <div class="customers-box"> 
        <div class="container">
            <!-- Our Customers -->
            <h2>Sectors OF expertise</h2>
                  <hr style="border: 1px solid #fab117;
width: 218px;
height: 2px;
background-color: #fab117;
text-align: left;
margin-left: 0%;
margin-top: -2%;">
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
 