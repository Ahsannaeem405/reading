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
    <script src="{{asset('userSide/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

    * {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px
    }

    body {
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        font-weight: 400;
        background: #eff6fa;
        color: #000000
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .bbb_viewed {
        padding-top: 51px;
        padding-bottom: 60px;
        background: #eff6fa
    }

    .bbb_main_container {
        background-color: #fff;
        padding: 11px
    }

    .bbb_viewed_title_container {
        border-bottom: solid 1px #dadada
    }

    .bbb_viewed_title {
        margin-bottom: 16px;
        margin-top: 8px
    }

    .bbb_viewed_nav_container {
        position: absolute;
        right: -5px;
        bottom: 14px
    }

    .bbb_viewed_nav {
        display: inline-block;
        cursor: pointer
    }

    .bbb_viewed_nav i {
        color: #dadada;
        font-size: 18px;
        padding: 5px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .bbb_viewed_nav:hover i {
        color: #606264
    }

    .bbb_viewed_prev {
        margin-right: 15px
    }

    .bbb_viewed_slider_container {
        padding-top: 13px
    }

    .bbb_viewed_item {
        width: 100%;
        background: #FFFFFF;
        border-radius: 2px;
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left: 30px;
        padding-right: 30px
    }

    .bbb_viewed_image {
        width: 150px;
        height: 150px
    }

    .bbb_viewed_image img {
        display: block;
        max-width: 100%
    }

    .bbb_viewed_content {
        width: 100%;
        margin-top: 25px
    }

    .bbb_viewed_price {
        font-size: 16px;
        color: #000000;
        font-weight: 500
    }

    .bbb_viewed_item.discount .bbb_viewed_price {
        color: #df3b3b
    }

    .bbb_viewed_price span {
        position: relative;
        font-size: 12px;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.6);
        margin-left: 8px
    }

    .bbb_viewed_price span::after {
        display: block;
        position: absolute;
        top: 6px;
        left: -2px;
        width: calc(100% + 4px);
        height: 1px;
        background: #8d8d8d;
        content: ''
    }

    .bbb_viewed_name {
        margin-top: 3px
    }

    .bbb_viewed_name a {
        font-size: 14px;
        color: #000000;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease
    }

    .bbb_viewed_name a:hover {
        color: #0e8ce4
    }

    .item_marks {
        position: absolute;
        top: 18px;
        left: 18px
    }

    .item_mark {
        display: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        color: #FFFFFF;
        font-size: 10px;
        font-weight: 500;
        line-height: 36px;
        text-align: center
    }

    .item_discount {
        background: #df3b3b;
        margin-right: 5px
    }

    .item_new {
        background: #0e8ce4
    }

    .bbb_viewed_item.discount .item_discount {
        display: inline-block
    }

    .bbb_viewed_item.is_new .item_new {
        display: inline-block
    }
</style>
<style>


.carte {
  display: none;
}
    
.carte_button:hover + .carte {
    display: block;
    
}
.carte:hover{
    display: block;
   
}
.tabitm:hover {
    background:#2d3092 !important;
    color:white !important;
    padding-left: 9px !important;
    padding-right: 9px !important;
}
</style>
<style>


.rating {
    position: relative;
    width: 180px;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: .3em;
    padding: 5px;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 0 2px #b3acac;
}

.rating__result {
    position: absolute;
    top: 0;
    left: 0;
    transform: translateY(-10px) translateX(-5px);
    z-index: -9;
    font: 3em Arial, Helvetica, sans-serif;
    color: #ebebeb8e;
    pointer-events: none;
}

.rating__star {
    font-size: 1.3em;
    cursor: pointer;
    color: #dabd18b2;
    transition: filter linear .3s;
}

.rating__star:hover {
    filter: drop-shadow(1px 1px 4px gold);
}
</style>
</head>
<body>

<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('userSide/assets/img/logo/logo5.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
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
                
                     <img style="padding: 0px !important;
                    width: 113px !important;
                    height: 89px !important;" src="{{asset('userSide/assets/img/logo/logo5.jpg')}}" alt="">


                
                </div>
                <div class="container">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo logo2 d-block d-lg-none" style="padding: 0px !important;">
                            <a href="{{url('/students/dashboard')}}"> <img style="padding: 0px !important;
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

                                    <!-- <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/about')}}">About</a></li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li> -->
                                    @if(Auth::check())
                                        @if(Auth::user()->role =='student')
                                            <li style="position:relative; padding: 19px; font-weight: bold; cursor:pointer;" class="carte_button">Reading</li>
                                            
                                            <div class="carte" style="background: lightgrey;width: 124px;line-height: 2.5;position:absolute; top:67%; z-index:5; left:46%; padding:10px; box-shadow: 1px 1px 11px 2px grey;">
                                                <a class="d-block tabitm" href="{{url('/quil_connect')}}" style="color:black;">Connect</a>
                                                <a class="d-block tabitm" href="{{url('/readings')}}" style="color:black;">Story</a>
                                                <a class="d-block tabitm" href="{{url('/proofreading')}}" style="color:black;">Proofreading</a>
                                                <a class="d-block tabitm" href="{{url('/grammer')}}" style="color:black;">Grammer</a>
                                            </div>
                                            <li><a href="{{url('/writing')}}">Writing</a></li>
                                            <li><a href="{{url('/vocabulary')}}">vocabulary </a></li>
                                            <!-- <li><a href="{{url('/quil_connect')}}">quil connect</a></li> -->

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
