<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/logo.png">
    <title>Charitio - Multipurpose Charity Nonprofit HTML5 Template</title>
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
                                    <li><i class="fi ti-location-pin"></i>7 Green Lake Street Crawfordsville</li>
                                    <li><i class="fi flaticon-email"></i> charito@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-5 col-sm-12 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li>Visit our social pages</li>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
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
                                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Recruitment</a>
                                            <ul class="sub-menu">
                                                @foreach ($recruitments as $r)
                                                <li><a href="/recruitment/{{$r->id}}">{{$r->program_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/event">Events</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/blog">Blog</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/partnership">Partnership</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="active" href="#">More</a>
                                            <ul class="sub-menu">
                                                <li><a href="/about">Info</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
    
                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-3 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="close-form">
                                        <a class="theme-btn-s2" href="donate.html">Donate Now</a>
                                    </div>
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i class="fi flaticon-search"></i></button>
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i class="fi flaticon-search"></i></button>
                                                    </div>
                                                </form>
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
                            <h2>About Us</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>About</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->
        <!-- wpo-about-video-area start -->
        <div class="wpo-about-video-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="wpo-about-video-item">
                            <div class="wpo-about-video-img">
                                <img src="assets/images/about-vedio.jpg" alt="">
                                <div class="entry-media video-holder">
                                    <a href="https://www.youtube.com/embed/iSbzh0r9IV4?autoplay=1" class="video-btn" data-type="iframe">
                                        <i class=""></i>
                                    </a>
                                </div>
                            </div>
                            <h2>See what we do for <span>Indonesia </span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-about-video-area end -->

        <!-- start of wpo-features-section -->
        <section class="wpo-features-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                        <div class="wpo-features-item">
                            <div class="wpo-features-icon">
                                <div class="icon">
                                    <i class="fi flaticon-vegetable"></i>
                                </div>
                            </div>
                            <div class="wpo-features-text">
                                <h2><a href="service-single.html">Healthy Food</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                        <div class="wpo-features-item">
                            <div class="wpo-features-icon">
                                <div class="icon">
                                    <i class="fi flaticon-water-tap"></i>
                                </div>
                            </div>
                            <div class="wpo-features-text">
                                <h2><a href="service-single.html">Clean Water</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                        <div class="wpo-features-item">
                            <div class="wpo-features-icon">
                                <div class="icon">
                                    <i class="fi flaticon-medicine"></i>
                                </div>
                            </div>
                            <div class="wpo-features-text">
                                <h2><a href="service-single.html">Medical Care</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                        <div class="wpo-features-item">
                            <div class="wpo-features-icon">
                                <div class="icon">
                                    <i class="fi flaticon-graduation-cap"></i>
                                </div>
                            </div>
                            <div class="wpo-features-text">
                                <h2><a href="service-single.html">Child Education</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-features-section -->
        <!-- start of wpo-about-section -->
        <section class="wpo-about-section section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-wrap">
                            <div class="wpo-about-img">
                                <img src="assets/images/ab.png" alt="">
                                <div class="wpo-ab-shape-1">
                                    <div class="s-s1"></div>
                                    <div class="s-s2"></div>
                                </div>
                                <div class="wpo-ab-shape-2"><img src="assets/images/ab-shape-2.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-text">
                            <span>About Us</span>
                            <h2>Calling out passionate Changers!!</h2>
                            <p>Pengabdian Skala International dan berkontribusi dalam pembangunan yang berkelanjutan melalui pengajaran di Sanggar Bimbingan.
                                Dengan kerjasama kita, kita dapat mewujudkan perubahan positif bagi anak-anak Indonesia yang berbakat.
                                Mari berbagi pengetahuan dan menginspirasi generasi mendatang!
                                Dengan fasilitas yang tidak perlu diragukan lagi!! Ditambah dengan jalur FULLY FUNDED🔥🔥 </p>
                            <ul>
                                <li>100% Fully Funded</li>
                                <li>Tiket pesawat PP untuk delegasi terbaik</li>
                                <li>Konsumsi & Transportasi selama kegiatan.</li>
                                <li>Sertifikat Internasional</li>
                                <li>Asuransi kesehatan.</li>
                            </ul>
                            <a class="theme-btn-s2" href="/about">More About</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-about-section -->
        <!-- start wpo-fun-fact-section -->
        <section class="wpo-fun-fact-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="500">00</span>+</h3>
                                    <p>Completed Cases</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="25">00</span>+</h3>
                                    <p>Expert Consultants</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="95">00</span>%</h3>
                                    <p>Client Satisfaction</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="25">00</span>+</h3>
                                    <p>Award Winning</p>
                                </div>
                            </div>
                            <div class="shape"><img src="assets/images/cta-shape.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end wpo-fun-fact-section -->

        <!-- wpo-team-area start -->
        <div class="wpo-team-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Expert Team</span>
                            <h2>Meet Our Volunteer Team</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-team-wrap">
                    <div class="team-slider owl-carousel">
                        <div class="wpo-team-item">
                            <div class="wpo-team-img">
                                <img src="assets/images/team/2.jpg" alt="">
                            </div>
                            <div class="wpo-team-content">
                                <h2><a href="team-single.html">Maria Belziana</a></h2>
                                <span>Volunteer</span>
                            </div>
                        </div>
                        <div class="wpo-team-item">
                            <div class="wpo-team-img">
                                <img src="assets/images/team/3.jpg" alt="">
                            </div>
                            <div class="wpo-team-content">
                                <h2><a href="team-single.html">Robert Chirls</a></h2>
                                <span>Volunteer</span>
                            </div>
                        </div>
                        <div class="wpo-team-item">
                            <div class="wpo-team-img">
                                <img src="assets/images/team/4.jpg" alt="">
                            </div>
                            <div class="wpo-team-content">
                                <h2><a href="team-single.html">William Frost</a></h2>
                                <span>Volunteer</span>
                            </div>
                        </div>
                        <div class="wpo-team-item">
                            <div class="wpo-team-img">
                                <img src="assets/images/team/5.jpg" alt="">
                            </div>
                            <div class="wpo-team-content">
                                <h2><a href="team-single.html">Zenefer Marry</a></h2>
                                <span>Volunteer</span>
                            </div>
                        </div>
                        <div class="wpo-team-item">
                            <div class="wpo-team-img">
                                <img src="assets/images/team/6.jpg" alt="">
                            </div>
                            <div class="wpo-team-content">
                                <h2><a href="team-single.html">Devid Harmin</a></h2>
                                <span>Volunteer</span>
                            </div>
                        </div>
                        <div class="wpo-team-item">
                            <div class="wpo-team-img">
                                <img src="assets/images/team/1.jpg" alt="">
                            </div>
                            <div class="wpo-team-content">
                                <h2><a href="team-single.html">Angeica Laura</a></h2>
                                <span>Volunteer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-team-area end -->

        <!-- start partners-section -->
        <section class="partners-section section-padding">
            <h2 class="hidden">partner</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel">
                            <div class="grid">
                                <img src="assets/images/partners/img-1.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-2.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-3.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-4.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-5.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-6.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->

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