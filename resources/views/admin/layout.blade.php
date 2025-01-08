<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png')}}" type="image/x-icon">
    <title>கொன்னையூர் இ-பொது சேவை மையம்</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/vector-map.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="m-0 header-wrapper row">
                <div class="col-auto p-0 header-logo-wrapper">
                    <div class="logo-wrapper"><a href="index.php"> <img class="img-fluid for-light"
                                src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}" alt=""><img
                                class="img-fluid for-dark" src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}"
                                alt=""></a></div>

                    <div class="toggle-sidebar">
                        <svg class="sidebar-toggle">
                            <use href="assets/svg/icon-sprite.svg#stroke-animation"></use>
                        </svg>
                    </div>

                </div>
                <form class="col-sm-4 form-inline search-full d-none d-xl-block" action="#" method="get">
                    <div class="form-group">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Type to Search .." name="q" title="" autofocus="">
                                <svg class="search-bg svg-color">
                                    <use href="assets/svg/icon-sprite.svg#search"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-auto p-0 nav-right col-xl-8 col-lg-12 pull-right right-header">
                    <ul class="nav-menus">
                        <li class="serchinput">
                            <div class="serchbox">
                                <svg>
                                    <use href="assets/svg/icon-sprite.svg#search"></use>
                                </svg>
                            </div>
                            <div class="form-group search-form">
                                <input type="text" placeholder="Search here...">
                            </div>
                        </li>
                        <li class="py-0 profile-nav onhover-dropdown pe-0">
                            <div class="d-flex align-items-center profile-media"><img class="b-r-25"
                                    src="{{ asset('assets/images/favicon.png') }}" alt="">
                                <div class="flex-grow-1 user"><span>FIT2WEB</span>
                                    <p class="mb-0 font-nunito">Admin
                                        <svg>
                                            <use href="assets/svg/icon-sprite.svg#header-arrow-down"></use>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">




                                <li><a href="../logout.php"> <i data-feather="log-in"></i><span>Log Out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="m-0 feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
                <div class="ProfileCard-realName">
                    {{ auth()->user()->name }}
                </div>

            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-layout="stroke-svg">
                <div>
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img class="img-fluid for-light"
                                src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}" alt="">

                        </a>

                    </div>
                    <div class="logo-icon-wrapper"><a href="index.php"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.php"><img class="img-fluid"
                                            src="../assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i
                                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <br><br>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Dashboard</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">

                                        </svg>
                                        <svg class="fill-icon">
                                            <i data-feather="home"></i>
                                        </svg><span>Dashboard</span></a>
                                    <ul class="sidebar-submenu">

                                        <li><a href="index.php"><b>Home</b></a></li>

                                        <li><a href="search.php"><b>Search</b></a></li>
                                        <li><a href="service_history.php">Service History</a></li>


                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Project</h6>
                                    </div>
                                </li>

                                <li class="sidebar-list"> </i><a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">

                                        </svg>
                                        <svg class="fill-icon">
                                            <i data-feather="user"></i>
                                        </svg><span> Project </span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="add-services.php">Add Project</a></li>
                                        <li><a href="{{ route('admin.project') }}">View Project</a></li>
                                    </ul>
                                </li>




                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Status</h6>
                                    </div>
                                </li>

                                <li class="sidebar-list"> </i><a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">

                                        </svg>
                                        <svg class="fill-icon">
                                            <i data-feather="activity"></i>
                                        </svg><span>Service Status</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="pen.php">Pending</a></li>
                                        <li><a href="pro.php">Processing</a></li>
                                        <li><a href="appr.php">Approved</a></li>
                                    </ul>

                                </li>






                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Master</h6>
                                    </div>
                                </li>

                                <li class="sidebar-list"> </i><a class="sidebar-link sidebar-title" href="#">
                                        <svg class="stroke-icon">

                                        </svg>
                                        <svg class="fill-icon">
                                            <<i data-feather="settings"></i>
                                        </svg><span>Services</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="serviceexc.php">Add Services</a></li>
                                        <li><a href="sub-serviceexc.php">Add Sub-Services</a></li>
                                        <li><a href="report.php"><b>Report</b></a></li>
                                        <li><a href="export-village.php"><b>Export</b></a></li>

                                    </ul>
                                </li>







                            </ul>

                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-xl-4 col-sm-7 box-col-3">
                                <h4>கொன்னையூர் இ-பொது சேவை மையம்</h4>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid ecommerce-dashboard">
                    <div class="row">

                        <div class="col-xl-12 proorder-xl-2">
                            <div class="card">
                                @yield('content')

                            </div>
                        </div>







                    </div>
                </div>
                <!-- Container-fluid Ends -->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="p-0 col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2024 © e-Sevai. இனிய சேவை இணைய சேவை Design By <a
                                    href="www.fit2web">fit2web</a></p>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('admin/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('admin/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('admin/assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('admin/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin/assets/js/owlcarousel/owl-custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vector-map/map-vector.js') }}"></script>
    <script src="{{ asset('admin/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard/dashboard_2.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>

    <!-- Plugin used-->
</body>

</html>
