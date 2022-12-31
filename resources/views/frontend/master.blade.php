<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Communication - IT</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/png">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/default.css')}}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->

        <!--====== Search From ======-->
		<div class="modal fade" id="search-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="text" class="form_control" placeholder="Search here...">
                        	<button class="search_btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->

        <!--====== Start Header Section ======-->
        <header class="theme-header theme-header-one">
            <!-- header top -->
            <div class="header-top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="top-left">
                                <ul>
                                    <li><span><i class="far fa-map-marker-alt"></i>Sector# 09, Uttara, Dhaka</span></li>
                                    <li><span><i class="far fa-envelope"></i><a href="mailto:communicationitbd@gmail.com">communicationitbd@gmail.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="top-right d-flex align-items-center">
                                <span class="phone"><i class="far fa-phone"></i><a href="tel:+08801894620088">+8801894-620088</a></span>
                                <ul class="social-link">
                                    <li><span class="title">Follow Us</span></li>
                                    <li><a href="https://www.facebook.com/communicationitbd"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="communicationitbd"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="youtube.com/@communicationit"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header Navigation -->
            <div class="header-navigation">
                <div class="container-fluid">
                    <div class="primary-menu">
                        <div class="site-branding">
                            <a href="#" class="brand-logo"><img src="{{asset('frontend/assets/images/183x50 (1).jpg')}}" alt="Site Logo"></a>
                        </div>
                        <div class="nav-menu">
                            <!-- Navbar Close -->
                            <div class="navbar-close"><i class="far fa-times"></i></div>
                            <!-- Nav Search -->
                            <div class="nav-search">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item"><a href="{{route('index')}}">Home</a></li>
                                    
                                    <li class="menu-item has-children"><a href="{{route('software.service')}}">Services</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{route('it.service')}}">IT Services</a></li>
                                            <li><a href="{{route('software.service')}}">Software Service</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="#">Traning</a></li>
                                    <li class="menu-item"><a href="{{route('blog')}}">Blog</a></li>
                                   
                                    <li class="menu-item"><a href="{{route('about')}}">About</a></li>
                                    <li class="menu-item"><a href="{{route('contact')}}">Contact</a></li>
                                    <li class="search-item"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right-nav">
                            <ul>
                                <li class="cart-item"><a href="#"><i class="fas fa-shopping-basket"></i></a></li>
                                <li class="lang-dropdown">
                                    <select class="wide">
                                        <option value="01">English</option>
                                        <option value="02">Bangla</option>
                                    </select>
                                </li>
                                <li class="nav-button"><a href="{{route('contact')}}" class="main-btn">Contact Us</a></li>
                                <li class="navbar-toggle-btn">
                                    <div class="navbar-toggler">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--====== End Header Section ======-->

            @yield('content')


        <!--====== Start Footer ======-->
        <footer class="footer-area footer-default black-bg footer-map">
            <div class="container">
                <div class="footer-widget pt-165 pb-35">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget about-widget mb-40">
                                <div class="logo mb-35">
                                    <a href="#"><img src="{{asset('frontend/assets/images/56-PNG.png')}}" alt="Theme Logo"></a>
                                </div>
                                <div class="about-content">
                                    <h4 class="text-underline">Don’t Hesited to Conatct 
                                        With Our Experites</h4>
                                    <ul>
                                        <li><i class="far fa-phone"></i><span><a href="tel:+08801894620088">01894620088</a></span></li>
                                        <li><i class="far fa-envelope"></i><span><a href="mailto:info@communicationit.com">info@communicationit.com</a></span></li>
                                        <li><i class="far fa-map-marker-alt"></i><span><a href="https://www.google.com/maps/place/Communication+IT+(CmIT)/@23.
                                            8663066,90.3691446,15z/data=!4m19!1m13!4m12!1m3!2m2!1d90.3974258!2d23.8743517!1m6!1m2!1s0x3755c5cb11303719:0xc1384c85422a4186!2sCommunication+IT+(CmIT),
                                            +Plot%234+(Amin+Tower),+Road%2301A,+Level%2301,+Dhaka+1230!2m2!1d90.3997048!2d23.8748649!3e0!3m4!1s0x3755c5cb11303719:0xc1384c85422a4186!8m2!3d23.8748649!4d90.3997048">Sector# 09, Uttara, Dhaka</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40">
                                <h4 class="widget-title text-underline">Best Services</h4>
                                <ul class="footer-nav list-style-dot">
                                    <li><a href="#">Web & IT Consulting</a></li>
                                    <li><a href="#">Cyber Security Solutions</a></li>
                                    <li><a href="#">Software Development</a></li>
                                    <li><a href="#">Product Enginering</a></li>
                                    <li><a href="#">Project  Management</a></li>
                                    <li><a href="#">Security Solutions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40">
                                <h4 class="widget-title text-underline">IT Company</h4>
                                <ul class="footer-nav list-style-dot">
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Latest News & Blog</a></li>
                                    <li><a href="#">Professional Members</a></li>
                                    <li><a href="#">Our Achievment</a></li>
                                    <li><a href="#">Company Journey</a></li>
                                    <li><a href="#">Meet Out  Teams</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40">
                                <h4 class="widget-title text-underline">Our Support</h4>
                                <ul class="footer-nav list-style-dot">
                                    <li><a href="#">Premium Support</a></li>
                                    <li><a href="#">Need a Career ?</a></li>
                                    <li><a href="#">Help & FAQ</a></li>
                                    <li><a href="#">Pricing and plans</a></li>
                                    <li><a href="#">Cookies Policy</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="text">
                                <p>Copyright &copy; 2023 CMiT. All Right Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="social-link float-md-right float-sm-none">
                                <li><a href="https://www.facebook.com/communicationitbd"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="communicationitbd"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="youtube.com/@communicationit"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{asset('frontend/assets/vendor/popper/popper.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--====== Slick js ======-->
        <script src="{{asset('frontend/assets/vendor/slick/slick.min.js')}}"></script>
        <!--====== Magnific js ======-->
        <script src="{{asset('frontend/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <!--====== Isotope js ======-->
        <script src="{{asset('frontend/assets/vendor/isotope.min.js')}}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{asset('frontend/assets/vendor/imagesloaded.min.js')}}"></script>
        <!--====== Counterup js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery.counterup.min.js')}}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery.waypoints.js')}}"></script>
        <!--====== Number js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery.nice-number.min.js')}}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{asset('frontend/assets/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <!--====== jquery UI js ======-->
        <script src="{{asset('frontend/assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
        <!--====== Donutty js ======-->
        <script src=" {{asset('frontend/assets/vendor/donutty-jquery.min.js')}}"></script>
        <!--====== Main js ======-->
        <script src="{{asset('frontend/assets/js/theme.js')}}"></script>
    </body>
</html>