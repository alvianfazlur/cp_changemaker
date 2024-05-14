<?php
    use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/logo.png">
    <title>Changemaker</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="topbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-7 col-sm-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="fi ti-location-pin"></i>Indonesia</li>
                                    <li><i class="fi flaticon-email"></i> changemaker@email</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-5 col-sm-12 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li>Visit our social pages</li>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="https://www.instagram.com/changemaker.ind/"><i class="ti-instagram"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@changemaker.ind?_t=8WBqLjUmxs2&_r=1"><img src="/assets/images/icon/tik-tok-white.png" alt="Tiktok" style="width: 18px; height: 18px;"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <div class="wpo-site-header">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li>
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Recruitment</a>
                                            <ul class="sub-menu">
                                                @foreach ($recruitments as $r)
                                                <li><a href="/recruitment/{{$r->id}}">{{$r->program_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="active" href="/event">Events</a>
                                        </li>
                                        <li>
                                            <a href="/blog">Blog</a>
                                        </li>
                                        <li>
                                            <a href="/partnership">Partnership</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">More</a>
                                            <ul class="sub-menu">
                                                <li><a href="/about">Info</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                                <li><a href="/login">Login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
    
                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-3 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i class="fi flaticon-search"></i></button>
                                            <div class="header-search-form">
                                                <form id="searchForm">
                                                    <div>
                                                        <input type="text" class="form-control" name="search" required id="searchInput" placeholder="Search here..." required>
                                                        <button type="submit"><i class="fi flaticon-search"></i></button>
                                                    </div>
                                                </form>
                                                <script>
                                                    document.getElementById('searchForm').addEventListener('submit', function(event) {
                                                        event.preventDefault(); 
                                                        var searchQuery = document.getElementById('searchInput').value;
                                                        var searchUrl = '/search-event/' + encodeURIComponent(searchQuery);
                                                        window.location.href = searchUrl; 
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->
        <!-- start of breadcumb-section -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Events</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span>Events</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->
        <!-- wpo-event-area start -->
        <div class="wpo-event-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Events</span>
                            <h2>Changemaker Events</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row">
                       @foreach ($events as $e)
                       <div class="col col-lg-6 col-md-6 col-12">
                        <div class="wpo-event-single">
                            <div class="wpo-event-item">
                                <div class="wpo-event-img">
                                    <img src="assets/images/event/img-1.jpg" alt="">
                                    <span class="thumb">{{ Carbon::parse($e->event_date)->format('d F Y') }}</span>
                                </div>
                                <div class="wpo-event-content">
                                    <div class="wpo-event-text-top">
                                        <h2><a href="/event/{{$e->id}}">{{$e->event_name}}</a></h2>
                                        @php
                                            $description = strlen($e->description) > 100 ? substr($e->description, 0, 100) . '...' : $e->description;
                                        @endphp
                                        <p>{{ $description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-event-area end -->

        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="assets/images/logo2.png" alt="blog">
                                </div>
                                <p>Welcome and open yourself to your truest love this year with us! With the Release Process</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Services </h3>
                                </div>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cause.html">Causes</a></li>
                                    <li><a href="blog.html">Latest News</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="event.html">Events</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft">
                                    <p>Would you have any enquiries.Please feel free to contuct us</p>
                                    <ul>
                                        <li><i class="fi flaticon-mail"></i>charito@gmail.com</li>
                                        <li><i class="fi flaticon-phone-call"></i>+888 (123) 869523</li>
                                        <li><i class="fi flaticon-location"></i>New York – 1075 Firs Avenue</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget instagram">
                                <div class="widget-title">
                                    <h3>Projects</h3>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="project-single.html"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> &copy; 2021 Charito Theme. Design By <a href="index.html">wpOcean</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>


</html>