<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>City Listing</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/slicknav.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/flaticon.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/animate.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/magnific-popup.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/themify-icons.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/slick.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/nice-select.css">
            <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/') }}assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header bg-dark">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="{{ url('/') }}"><img src="{{ asset('/') }}assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ route('wisata.all') }}">Places</a></li>
                                            {{-- <li><a href="contact.html">Contact</a></li> --}}
                                            <li class="login"><a href="{{ route('login') }}">
                                                <i class="ti-user"></i> Sign in</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    @yield('content')

    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('/') }}assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Link</h4>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/listing') }}">Place</a></li>
                                        {{-- <li><a href="{{ url('/contact') }}">Contact</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Categories</h4>
                                    <ul>
                                        <li><a href="#">Reasonable Hotel</a></li>
                                        <li><a href="#">Popular Restaurant</a></li>
                                        <li><a href="#">Easy Shopping</a></li>
                                        <li><a href="#">Night Life</a></li>     
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by City Lisiting
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('/') }}assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('/') }}assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('/') }}assets/js/popper.min.js"></script>
        <script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('/') }}assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('/') }}assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('/') }}assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('/') }}assets/js/wow.min.js"></script>
		<script src="{{ asset('/') }}assets/js/animated.headline.js"></script>
        <script src="{{ asset('/') }}assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="{{ asset('/') }}assets/js/jquery.nice-select.min.js"></script>
		<script src="{{ asset('/') }}assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="{{ asset('/') }}assets/js/contact.js"></script>
        <script src="{{ asset('/') }}assets/js/jquery.form.js"></script>
        <script src="{{ asset('/') }}assets/js/jquery.validate.min.js"></script>
        <script src="{{ asset('/') }}assets/js/mail-script.js"></script>
        <script src="{{ asset('/') }}assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('/') }}assets/js/plugins.js"></script>
        <script src="{{ asset('/') }}assets/js/main.js"></script>
        @yield('script')
    </body>
</html>