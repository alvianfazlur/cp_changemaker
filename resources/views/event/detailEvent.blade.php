<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>Charitio - Multipurpose Charity Nonprofit HTML5 Template</title>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/flaticon.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/slick.css" rel="stylesheet">
    <link href="../assets/css/slick-theme.css" rel="stylesheet">
    <link href="../assets/css/swiper.min.css" rel="stylesheet">
    <link href="../assets/css/owl.transitions.css" rel="stylesheet">
    <link href="../assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="../assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
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
                    <img src="../assets/images/preloader.png" alt="">
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
                                    <a class="navbar-brand" href="index.html"><img src="../assets/images/logo.png" alt=""></a>
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
                                                    <li><a href="#">{{$r->program_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class= "active" href="/event">Events</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
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
                            <h2>{{$event->event_name}}</h2>
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
        <!-- wpo-event-details-area start -->
        <div class="wpo-event-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                         <div class="wpo-event-item">
                            <div class="wpo-event-img">
                                <img src="../assets/images/event-single.jpg" alt="">
                            </div>
                            <div class="wpo-event-details-text">
                                <h2>Event Description</h2>
                                 <p>{{$event->description}}</p>
                            </div>
                            <div class="wpo-event-details-wrap">
                                <div class="wpo-event-details-tab">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="Schedule-tab" data-bs-toggle="tab" href="#Schedule"
                                                role="tab" aria-controls="Schedule" aria-selected="true">Event Schedule</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="Map-tab" data-bs-toggle="tab" href="#Map" role="tab"
                                                aria-controls="Map" aria-selected="false">Map Location</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="Contact-tab" data-bs-toggle="tab" href="#Contact" role="tab"
                                                aria-controls="Contact" aria-selected="false">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wpo-event-details-content">
                                    <div class="tab-content">
                                        <div id="Schedule" class="tab-pane active">
                                            <p>{{$event->Schedule}}</p>    
                                        </div>
                                        <div id="Map" class="tab-pane">
                                            <div class="contact-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div id="Contact" class="tab-pane">
                                            <div class="event-contact">
                                                <div class="wpo-donations-details">
                                                
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search Post..">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Related Posts</h3>
                                <div class="posts">
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="../assets/images/recent-posts/img-1.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">Give Education, It’s The Best Gift Ever.</a></h4>
                                            <span class="date">19 Jun 2021 </span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="../assets/images/recent-posts/img-2.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">Your Help Can Make Someone life Better.</a></h4>
                                            <span class="date">22 May 2021 </span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="../assets/images/recent-posts/img-3.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">Help The Poor, You Will Feel Happy</a></h4>
                                            <span class="date">12 Apr 2021 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    <li><a href="#">Charity</a></li>
                                    <li><a href="#">Planning</a></li>
                                    <li><a href="#">Helping</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Medical</a></li>
                                    <li><a href="#">Wildlife</a></li>
                                    <li><a href="#">Donation</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">World Pandamic</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-event-details-area end -->

        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="../assets/images/logo2.png" alt="blog">
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
                                    <li><a href="project-single.html"><img src="../assets/images/instragram/1.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="../assets/images/instragram/2.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="../assets/images/instragram/3.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="../assets/images/instragram/4.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="../assets/images/instragram/5.jpg" alt=""></a></li>
                                    <li><a href="project-single.html"><img src="../assets/images/instragram/6.jpg" alt=""></a></li>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="../assets/js/modernizr.custom.js"></script>
    <script src="../assets/js/jquery.dlmenu.js"></script>
    <script src="../assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="../assets/js/script.js"></script>
</body>


</html>