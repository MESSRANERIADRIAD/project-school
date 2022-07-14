
    <!-- footer part start-->

  <div class="row">
        <div class="col-12  pb-5">
          <h2 class="contact-title">Register at school math et phisique</h2>
        </div>
        <div class="col-lg-8 ">

        @include('front.inc.errors')

          <form class="form-contact contact_form" action="{{ route('front.message.contact') }}" method="post" id="contactForm" >
          @csrf 
          <div class="row m-5">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3 m-5">
              <button href="{{ route('front.contact') }}" type="submit" class="button button-contactForm btn_1">Login</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
            
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
          
            
            </div>
          </div>
        </div>
      </div>
    
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-2 col-md-2 col-xl-2">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="{{ asset('uploads/settings/'. $sett->logo) }}" alt=""> </a>
                         
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>

                        @include('front.inc.errors')
                        <form action="{{ route('front.message.newsletter') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="submit"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="{{ $sett->fc }}"> <i class="ti-facebook"></i> </a>
                            <a href="{{ $sett->adress }}"> <i class="ti-adress"></i> </a>
                            <a href="{{ $sett->phone }}"> <i class="ti-phone"></i> </a>
                           </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Information</h4>
                        <div class="contact_info">
                            <p><i class="ti-home"></i><span> Address :</span> city 720 ain naadja alger</p>
                            <p><i class="ti-facebook"></i><span>  facebook : </span> ecolemathetphisi </p>
                            <p><i class="ti-tablet"></i><span> Phone :</span> 0776175784 </p>
                            <p><i class="ti-email"></i><span> Email : </span> ecolemathetphisi@gmai.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/slicke.css">

    <script src="{{ asset('front/js') }}/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ asset('front/js') }}/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('front/js') }}/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{ asset('front/js') }}/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('front/js') }}/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('front/js') }}/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="{{ asset('front/js') }}/owl.carousel.min.js"></script>
    <script src="{{ asset('front/js') }}/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('front/js') }}/slick.min.js"></script>
    <script src="{{ asset('front/js') }}/jquery.counterup.min.js"></script>
    <script src="{{ asset('front/js') }}/waypoints.min.js"></script>
    <!-- custom js -->


</body>

</html>