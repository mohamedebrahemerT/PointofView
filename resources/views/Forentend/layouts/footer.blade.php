 


  

    
    <!-- /.container -->
    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">
                    Social Media
                
                </h5 -->
                    <!--headin5_amrc-->
                    <!--p class="mb10">
                          

                {!! Str::limit(Aboutus()->desc, 120) !!}
  <a href="{{url('/')}}/aboutus">
                <span class="card-header"> read more </span>
                </a>
                    </p -->
                  
                    <ul class="footer-social">
                        <li><a class="facebook hb-xs-margin" href="{{Settings()->facebook_link}}" target="_blank"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>

                    

                        <li><a class="instagram hb-xs-margin" href="{{Settings()->linkedin_link}}" target="_blank"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-linkedin-in"></i></span></a></li>

                    
                    </ul>
                </div>  
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="{{url('/')}}/"><i class="fas fa-long-arrow-alt-right"></i>Home</a></li>
                        <li><a href="{{url('/')}}/aboutus"><i class="fas fa-long-arrow-alt-right"></i> our identity </a></li>
                      
                        <li><a href="{{url('/')}}/Services"><i class="fas fa-long-arrow-alt-right"></i>   Our Dimensions  </a></li>
                        
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc ends here-->
                     <ul class="footer_ul_amrc">
                      <li><a href="{{url('/')}}/Carreerweb"><i class="fas fa-long-arrow-alt-right"></i>Carreer</a></li>
                        <li><a href="{{url('/')}}/team"><i class="fas fa-long-arrow-alt-right"></i> POV Team </a></li>
                          <li><a href="{{url('/')}}/contactus"><i class="fas fa-long-arrow-alt-right"></i> contact us  </a></li>
                         
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="news-box">
                        <h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
                        <p>
                            Subscribe to our newsletter to receive the latest news and updates about special offers and service discounts.
                        </p>
                        <form action="{{url('/')}}/subs"  method="post">
                        @csrf

                            <div class="input-group">
                                <input class="form-control" placeholder="email here..." type="text" name="email">
                                <span class="input-group-btn">
                                  <button class="btn btn-secondary" type="submit">Go!</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
             

            <p>© {{date('Y')}} Point of View. - Hosted with <span style="color: #e25555;">♥</span> in <a href="https://www.ps-tech.net">PST Egypt</a></p>
        </div>
    </footer>
    
</div>
      
<!-- Bootstrap core JavaScript -->
<script src="{{url('/')}}/Forentend/vendor/jquery/jquery.min.js"></script>
<script src="{{url('/')}}/Forentend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/Forentend/js/imagesloaded.pkgd.min.js"></script>
<script src="{{url('/')}}/Forentend/js/isotope.pkgd.min.js"></script>
<script src="{{url('/')}}/Forentend/js/filter.js"></script>
<script src="{{url('/')}}/Forentend/js/jquery.appear.js"></script>

<script src="{{url('/')}}/Forentend/js/owl.carousel.min.js"></script>
<script src="{{url('/')}}/Forentend/js/owl2.carousel.min.js"></script>

<script src="js/jquery.fancybox.min.js"></script>

<script src="{{url('/')}}/Forentend/js/script.js"></script>

@stack('js')
</body>
</html>