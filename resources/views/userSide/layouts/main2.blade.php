<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Reading </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('script')

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('userSide/assets/img/logo/logo5.jpg')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('userSide/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('userSide/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>
<body>
<!--? Preloader Start -->

<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <!-- Left Social -->
                <div class="header-left-social">
                    <ul class="header-social">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>reading@gmail.com</li>
                                    <li>xxx xxxx xxxxx</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>
                                    @if(!Auth::check())
                                        <li><a href="{{url('login/type')}}"><i class="ti-user"></i>Login</a></li>
                                        <li><a href="{{url('/register')}}"><i class="ti-lock"></i>Register</a></li>
                                    @else
                                        <li><a href="{{url('/logout_user')}}"><i class="ti-lock"></i>Logout</a></li>

                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo d-none d-lg-block" style="padding: 0px !important;">
                    <a href="{{url('/')}}"> <img style="padding: 0px !important;
    width: 113px !important;
    height: 89px !important;" src="{{asset('userSide/assets/img/logo/logo5.jpg')}}" alt=""></a>
                </div>
                <div class="container">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo logo2 d-block d-lg-none" style="padding: 0px !important;">
                            <a href="{{url('/')}}"> <img style="padding: 0px !important;
    width: 113px !important;
    height: 89px !important;" src="{{asset('userSide/assets/img/logo/logo5.jpg')}}" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block" style="margin-left: auto; margin-right: auto">
                            <nav>
                                <ul id="navigation">
                                    @if(Auth::check())
                                        @if(Auth::user()->role =='student')
                                        <li><a href="{{url('/students/dashboard')}}"><input type="button"
                                                                                        class="btn btn-success "
                                                                                        value="Dashboard"></a></li>
                                    @endif
                                    @endif

                                        @if(Auth::check())
                                            @if(Auth::user()->role =='teacher')
                                                <li><a href="{{url('/teacher/Students')}}">Students</a></li>                                            @endif
                                        @endif

                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/about')}}">About</a></li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                    @if(Auth::check())
                                        @if(Auth::user()->role =='student')
                                            <li><a href="{{url('/readings')}}">Reading</a></li>
                                            <li><a href="{{url('/writing')}}">Writing</a></li>
                                            <li><a href="{{url('/vocabulary')}}">vocabulary </a></li>

                                        @endif
                                    @endif
                                    @if(!Auth::check())
                                        <li class="d-lg-none"><a href="{{url('login/type')}}"><i class="ti-user"></i>Login</a>
                                        </li>
                                        <li class="d-lg-none"><a href="{{url('/register')}}"><i class="ti-lock"></i>Register</a>
                                        </li>
                                    @else
                                        <li class="d-lg-none"><a href="{{url('/logout_user')}}"><i class="ti-lock"></i>Logout</a>
                                        </li>

                                    @endif
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->

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
    <!-- Header End -->
</header>
@yield('content')
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- footer Heading -->
                <div class="footer-heading">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-7 col-md-10">
                            <div class="footer-tittle2">
                                <h4>Stay Updated</h4>
                            </div>
                            <!-- Form -->
                            <div class="footer-form mb-50">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="#" method="get"
                                          class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email"
                                               placeholder=" Email Address " class="placeholder hide-on-focus"
                                               onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Your email address'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">
                                                Subscribe Now
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="footer-tittle2">
                                <h4>Let’s Get Social</h4>
                            </div>
                            <!-- Footer Social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>About Us</h4>
                                <span style="color: #868c98">About us short Detail</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Lesson</h4>
                                <ul>
                                    <li><a href="#">Reading</a></li>
                                    <li><a href="#">Writing</a></li>
                                    <li><a href="#">vocabulary</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Latest Stories</h4>
                                <ul>
                                    <li><a href="#">Story 1</a></li>
                                    <li><a href="#">Story 2</a></li>
                                    <li><a href="#">Story 3</a></li>
                                    <li><a href="#">Story 4</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>

                                    <li><a href="#">Home </a></li>
                                    <li><a href="#">Login </a></li>
                                    <li><a href="#">Register </a></li>
                                    <li><a href="#">Contact Us</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{asset('userSide/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('userSide/assets/js/popper.min.js')}}"></script>
<script src="{{asset('userSide/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('userSide/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('userSide/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('userSide/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('userSide/assets/js/wow.min.js')}}"></script>
<script src="{{asset('userSide/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('userSide/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('userSide/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('userSide/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('userSide/assets/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint -->
<script src="{{asset('userSide/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('userSide/assets/js/waypoints.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('userSide/assets/js/contact.js')}}"></script>
<script src="{{asset('userSide/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('userSide/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('userSide/assets/js/mail-script.js')}}"></script>
<script src="{{asset('userSide/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('userSide/assets/js/plugins.js')}}"></script>
<script src="{{asset('userSide/assets/js/main.js')}}"></script>

</body>
</html>
