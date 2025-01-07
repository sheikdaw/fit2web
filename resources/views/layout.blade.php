<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mugli">
    <meta name="description" content="ITek - IT Services & Digital Agency Html Template">
    <!-- ======== Page title ============ -->
    <title>ITek - IT Services & Digital Agency Html Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="I" class="letters-loading"> F </span>
                <span data-text-preloader="T" class="letters-loading"> I </span>
                <span data-text-preloader="E" class="letters-loading"> T </span>
                <span data-text-preloader="K" class="letters-loading"> 2 </span>
                <span data-text-preloader="K" class="letters-loading"> W </span>
                <span data-text-preloader="K" class="letters-loading"> E </span>
                <span data-text-preloader="K" class="letters-loading"> B </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mouse Cursor Start -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="mb-5 offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}" alt="logo-img">

                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        FIT2WEB specializes in innovative web development and digital solutions. We create
                        user-friendly websites and applications that drive growth, enhance user experience, and improve
                        your online presence. Partner with FIT2WEB to transform your digital journey.
                    </p>
                    <div class="mb-3 mobile-menu fix"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Chennai | Trichy | Pudukkottai
                                        Thanjavur</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">support@fit2web.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+91 9042029233">+91 9042029233</a>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-4 header-button">
                            <a href="contact.html" class="text-center theme-btn">
                                <span>Get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header class="header-section" id="scroll">
        <div id="header-sticky" class="header-1">
            <div class="container">
                <div class="mega-menu-wrapper bg-body-color">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.html" class="header-logo">
                                    <img src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-middle">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="#">
                                                    Home
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu has-homemenu">
                                                    <li>
                                                        <div class="homemenu-items">
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="{{ asset('assets/images/header/home-1.png') }}"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn" href="index.html">
                                                                            Multi Page
                                                                        </a>
                                                                        <a class="theme-btn"
                                                                            href="index-one-page.html">
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center homemenu-content">
                                                                    <h4 class="homemenu-title">Home 01</h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('assets/images/header/home-2.png') }}"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn" href="index2.html">
                                                                            Multi Page
                                                                        </a>
                                                                        <a class="theme-btn"
                                                                            href="index-two-page.html">
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center homemenu-content">
                                                                    <h4 class="homemenu-title">Home 02</h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('assets/images/header/home-3.png') }}"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn" href="index3.html">
                                                                            Multi Page
                                                                        </a>
                                                                        <a class="theme-btn"
                                                                            href="index-three-page.html">
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center homemenu-content">
                                                                    <h4 class="homemenu-title">Home 03</h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('assets/images/header/home-4.png') }}"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn" href="index4.html">
                                                                            Multi Page
                                                                        </a>
                                                                        <a class="theme-btn"
                                                                            href="index-four-page.html">
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="text-center homemenu-content">
                                                                    <h4 class="homemenu-title">Home 04</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown active d-xl-none">
                                                <a href="index.html" class="border-none">
                                                    Home
                                                    <i class="fa-regular fa-plus"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">Home 01</a></li>
                                                    <li><a href="index2.html">Home 02</a></li>
                                                    <li><a href="index3.html">Home 03</a></li>
                                                    <li><a href="index4.html">Home 04</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about.html">About Us</a>
                                            </li>
                                            <li>
                                                <a href="services.html">
                                                    Services
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="services.html">Services</a></li>
                                                    <li>
                                                        <a href="service-details.html">Service Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="project.html">
                                                    Projects
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="project.html">Projects</a></li>
                                                    <li>
                                                        <a href="project-details.html">Project Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog.html">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li>
                                                        <a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="header-button d-flex">
                                <div class="btn-wrapper">
                                    <a href="contact.html">
                                        <span class="theme-btn"> Contact Us </span>
                                    </a>
                                </div>
                                <div class="mx-2 btn-wrapper">
                                    <a href="{{ route('login') }}">
                                        <span class="theme-btn colored"> Login </span>
                                        <!-- This button will have a different color -->
                                    </a>
                                </div>
                            </div>
                            <div class="my-auto header__hamburger d-block d-xl-none">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <!-- Footer Section    S T A R T -->
    <footer class="footer-section position-relative">
        <div class="footer-widgets-wrapper fix">
            <div class="container">
                <div class="footer_top-head">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/images/logo/logo2.svg') }}" alt="logo">
                    </div>
                    <div class="btn-wrapper">
                        <a class="theme-btn" href="#scroll">
                            Scroll Up
                            <i class="fa fa-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Resources</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="index.html"> Home </a>
                                </li>
                                <li>
                                    <a href="about.html"> About </a>
                                </li>
                                <li>
                                    <a href="blog.html"> Blog </a>
                                </li>

                                <li>
                                    <a href="contact.html"> Contact </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Use cases</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="#"> Know Your Business </a>
                                </li>
                                <li>
                                    <a href="#"> TechSphere Solutions </a>
                                </li>
                                <li>
                                    <a href="#"> Know Your Customer </a>
                                </li>
                                <li>
                                    <a href="#"> Onboarding </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Products</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <div class="title">
                                        <a href="#"> Workflow </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"> Orchestration </a>
                                </li>
                                <li>
                                    <a href="#"> No-code onboarding </a>
                                </li>
                                <li>
                                    <a href="#"> Reports </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Developers</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="about.html"> Documentation </a>
                                </li>
                                <li>
                                    <a href="services.html"> API Reference </a>
                                </li>
                                <li>
                                    <h6 class="language">Language</h6>
                                    <select name="lang" id="lang-select" class="nice-select">
                                        <option value="">English</option>
                                        <option value="french">
                                            French
                                        </option>
                                        <option value="spanish">
                                            Spanish
                                        </option>
                                        <option value="chinese">
                                            Chinese
                                        </option>
                                        <option value="arabic">
                                            Arabic
                                        </option>
                                        <option value="portuguese">
                                            Portuguese
                                        </option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-between">
                    <p class="wow fadeInLeft" data-wow-delay=".3s">
                        © Yoursitename 2024 | All Rights Reserved
                    </p>
                    <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a href="contact.html">
                                Privacy <span class="line"> | </span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html"> Terms <span class="line"> | </span> </a>
                        </li>
                        <li>
                            <a href="contact.html"> Sitemap <span class="line"> | </span> </a>
                        </li>
                        <li>
                            <a href="contact.html"> Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    {{-- <script src="{{asset('assets/js/viewport.jquery.js')}}"></script> --}}
    <!--<< Tilt Js >>-->
    <script src="{{ asset('assets/js/tilt.min.js') }}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!--<< Magnific popup Js >>-->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!--<< NIce Select Js >>-->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <!--<< Main.js >>-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
