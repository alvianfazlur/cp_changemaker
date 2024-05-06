<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>Changemaker - Enhance & Empower Indonesian Youth!</title>
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/flaticon.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/assets/css/owl.theme.css" rel="stylesheet">
    <link href="/assets/css/slick.css" rel="stylesheet">
    <link href="/assets/css/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/swiper.min.css" rel="stylesheet">
    <link href="/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
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
        <header id="header" class="wpo-site-header">
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
                                <h1>Changemaker</h1>
                                {{-- <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""></a> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li class="menu-item-has-children">
                                        <a class="active" href="#">Home</a>
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
                                        <a href="#">Partnership</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">More</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Info</a></li>
                                            <li><a href="/contact">Contact</a></li>
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
        </header>
        <!-- end of header -->

        <!-- start of wpo-hero-section-1 -->
        <section class="wpo-hero-section-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col col-xs-6 col-lg-6">
                        <div class="wpo-hero-section-text">
                            <div class="wpo-hero-title-top">
                                <span>Lorem Ipsum</span>
                            </div>
                            <div class="wpo-hero-title">
                                <h2>Enhance & Empower Indonesian Youth</h2>
                            </div>
                            <div class="wpo-hero-subtitle">
                                <p>We help local nonprofits access the funding, tools, training, and support they need
                                    to become more.</p>
                            </div>
                            <div class="btns">
                                <a href="about.html" class="btn theme-btn-s2">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-vec">
                            <div class="right-items-wrap">
                                <div class="right-item">
                                    <div class="r-img">
                                        <img src="assets/images/slider/right-img2.png" alt="">
                                    </div>
                                    <div class="wpo-happy-client">
                                        <div class="wpo-happy-client-img">
                                            <ul class="wpo-happy-client-slide owl-carousel">
                                                <li><img src="assets/images/slider/client1.png" alt=""></li>
                                                <li><img src="assets/images/slider/client2.png" alt=""></li>
                                                <li><img src="assets/images/slider/client3.png" alt=""></li>
                                                <li><img src="assets/images/slider/client4.png" alt=""></li>
                                                <li><img src="assets/images/slider/client3.png" alt=""></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-item">
                                    <div class="wpo-total-project">
                                        <div class="wpo-total-project-wrap">
                                            <div class="wpo-total-project-icon">
                                                <i class="fi flaticon-salary"></i>
                                            </div>
                                            <div class="wpo-total-project-text">
                                                <h3>50+</h3>
                                                <p>Total Activity</p>
                                            </div>
                                        </div>
                                        <div class="project-shape">
                                            <img src="assets/images/slider/s.png" alt="">
                                        </div>
                                    </div>
                                    <div class="r-img">
                                        <img src="assets/images/slider/right-img.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-hero-section-1 slider -->
        <!-- start of wpo-features-section -->
        <section class="wpo-features-section-s2 v1 section-padding">
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
                                <img src="assets/images/about.jpg" alt="">
                                <div class="wpo-ab-shape-1">
                                    <div class="s-s1"></div>
                                    <div class="s-s2"></div>
                                </div>
                                <div class="wpo-ab-shape-2"><img src="assets/images/ab-shape-2.png" alt=""></div>
                                <div class="wpo-total-raised">
                                    <div class="wpo-total-raised-wrap">
                                        <div class="wpo-total-raised-icon">
                                            <i class="fi flaticon-wallet-filled-money-tool"></i>
                                        </div>
                                        <div class="wpo-total-raised-text">
                                            <ul>
                                                <li>Total Raised<span>$25000</span></li>
                                            </ul>
                                            <div class="progress-section">
                                                <div class="process">
                                                    <div class="progress">
                                                        <div class="progress-bar">
                                                            <div class="progress-value"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-text">
                            <span>About Us</span>
                            <h2>We Can Save More Lifes With Your Helping Hand.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <ul>
                                <li>The standard chunk of Lorem Ipsum used since.</li>
                                <li>Randomised words which don't look even slightly believable.</li>
                                <li>Making this the first true generator on the Internet.</li>
                            </ul>
                            <a class="theme-btn-s2" href="about.html">More About</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-about-section -->
        <!-- wpo-campaign-area start -->
        <div class="wpo-campaign-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>We Love To Help Poor</span>
                            <h2>Our Featured Campaigns</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-campaign-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <img src="assets/images/campaign/1.jpg" alt="">
                                        <span class="thumb">Education</span>
                                    </div>
                                    <div class="wpo-campaign-content">
                                        <div class="wpo-campaign-text-top">
                                            <h2><a href="cause-single.html">Help To Build a Secure Life Of a Poor
                                                    Children.</a></h2>
                                            <div class="progress-section">
                                                <div class="process">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 75%;">
                                                            <div class="progress-value"><span>75</span>%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li><span>Goal:</span> $3,000.00</li>
                                                <li><span>Raised:</span> $2,000.00</li>
                                            </ul>
                                            <div class="campaign-btn">
                                                <ul>
                                                    <li>
                                                        <span><img src="assets/images/campaign/1.png" alt=""></span>
                                                        <span><a href="event-single.html">Laura Faiary</a></span>
                                                    </li>
                                                    <li><a class="e-btn" href="#">Donate Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <img src="assets/images/campaign/2.jpg" alt="">
                                        <span class="thumb-2">Food</span>
                                    </div>
                                    <div class="wpo-campaign-content">
                                        <div class="wpo-campaign-text-top">
                                            <h2><a href="cause-single.html">Ensure Clean Water To The African Kids.</a>
                                            </h2>
                                            <div class="progress-section">
                                                <div class="process">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 75%;">
                                                            <div class="progress-value"><span>75</span>%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li><span>Goal:</span> $3,000.00</li>
                                                <li><span>Raised:</span> $2,000.00</li>
                                            </ul>
                                            <div class="campaign-btn">
                                                <ul>
                                                    <li>
                                                        <span><img src="assets/images/campaign/1.png" alt=""></span>
                                                        <span><a href="event-single.html">Laura Faiary</a></span>
                                                    </li>
                                                    <li><a class="e-btn" href="#">Donate Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <img src="assets/images/campaign/3.jpg" alt="">
                                        <span class="thumb">Medicine</span>
                                    </div>
                                    <div class="wpo-campaign-content">
                                        <div class="wpo-campaign-text-top">
                                            <h2><a href="cause-single.html">Your Help Can Save A Human Life From
                                                    Death.</a></h2>
                                            <div class="progress-section">
                                                <div class="process">
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 75%;">
                                                            <div class="progress-value"><span>75</span>%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li><span>Goal:</span> $3,000.00</li>
                                                <li><span>Raised:</span> $2,000.00</li>
                                            </ul>
                                            <div class="campaign-btn">
                                                <ul>
                                                    <li>
                                                        <span><img src="assets/images/campaign/1.png" alt=""></span>
                                                        <span><a href="event-single.html">Laura Faiary</a></span>
                                                    </li>
                                                    <li><a class="e-btn" href="#">Donate Now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-campaign-area end -->
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
        <!-- wpo-testimonial-area start -->
        <div class="wpo-testimonial-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Testimonial</span>
                            <h2>What People Say About Us</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-testimonial-wrap">
                    <div class="testimonial-slider owl-carousel">
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-img">
                                <img src="assets/images/testimonial/img-1.jpg" alt="">
                            </div>
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adiping elit,  do eiusmod tempor incididunt ut labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus commodo maepac cenas.</p>
                                <h2>Harverd Tommy</h2>
                                <span>Maneger Of MNTR</span>
                            </div>
                        </div>
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-img">
                                <img src="assets/images/testimonial/img-2.jpg" alt="">
                            </div>
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adiping elit,  do eiusmod tempor incididunt ut labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus commodo maepac cenas.</p>
                                <h2>Marry Jenefer</h2>
                                <span>CEO Of Golden Bravo</span>
                            </div>
                        </div>
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-img">
                                <img src="assets/images/testimonial/img-3.jpg" alt="">
                            </div>
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adiping elit,  do eiusmod tempor incididunt ut labore et doliore magna aliqjtua. Quis ipsum suspendisse ultrices gravida. Risus commodo maepac cenas.</p>
                                <h2>William Robert</h2>
                                <span>CEO Of Bexima</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-testimonial-area end -->

        <!-- wpo-cta-area end -->
        <div class="wpo-cta-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-cta-section">
                            <div class="wpo-cta-content">
                                <h2>Lets Chenge The World With Humanity</h2>
                                <a href="volunteer.html">Become A Volunteer</a>
                            </div>
                            <div class="volunteer-img">
                                <img src="assets/images/volunteer.png" alt="">
                            </div>
                            <div class="shape"><img src="assets/images/cta-shape.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-cta-area end -->
        <!-- wpo-event-area start -->
        <div class="wpo-event-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Events</span>
                            <h2>Fundraising Events</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-12">
                            <div class="wpo-event-single">
                                <div class="wpo-event-item">
                                    <div class="wpo-event-img">
                                        <img src="assets/images/event/img-1.jpg" alt="">
                                        <span class="thumb">24 <span>Nov</span></span>
                                    </div>
                                    <div class="wpo-event-content">
                                        <div class="wpo-event-text-top">
                                            <h2><a href="event-single.html">Help The Poor From Your Soal</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-event-single">
                                <div class="wpo-event-item">
                                    <div class="wpo-event-img">
                                        <img src="assets/images/event/img-2.jpg" alt="">
                                    </div>
                                    <div class="wpo-event-content">
                                        <div class="wpo-event-text-top">
                                            <span>24 Nov,  2021</span>
                                            <h2><a href="event-single.html">Help Children Raise Out Of Proverty</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-event-single">
                                <div class="wpo-event-item">
                                    <div class="wpo-event-img">
                                        <img src="assets/images/event/img-3.jpg" alt="">
                                    </div>
                                    <div class="wpo-event-content">
                                        <div class="wpo-event-text-top">
                                            <span>24 Nov,  2021</span>
                                            <h2><a href="event-single.html">Provideing Education Is The Valuable Gift</a></h2>
                                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-event-area end -->
        <!-- start of wpo-blog-section -->
        <section class="wpo-blog-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Our Blog</span>
                            <h2>Latest News & Update</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-1.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <div class="wpo-blog-content-top">
                                        <h2><a href="blog.html">Giving The Poor Is A Great Satisfiction Of heart.</a></h2>
                                    </div>
                                    <div class="wpo-blog-content-btm">
                                        <div class="wpo-blog-content-btm-left">
                                            <div class="wpo-blog-content-btm-left-img">
                                                <img src="assets/images/blog/blog-avater/img-1.jpg" alt="">
                                            </div>
                                            <div class="wpo-blog-content-btm-left-text">
                                                <h4><a href="blog.html">Konal Biry</a></h4>
                                            </div>
                                        </div>
                                        <div class="wpo-blog-content-btm-right">
                                            <span><i class="fi flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-2.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <div class="wpo-blog-content-top">
                                        <h2><a href="blog.html">Your Help Can Make Someone’s life Easier.</a></h2>
                                    </div>
                                    <div class="wpo-blog-content-btm">
                                        <div class="wpo-blog-content-btm-left">
                                            <div class="wpo-blog-content-btm-left-img">
                                                <img src="assets/images/blog/blog-avater/img-3.jpg" alt="">
                                            </div>
                                            <div class="wpo-blog-content-btm-left-text">
                                                <h4><a href="blog.html">Marry Elizabeth</a></h4>
                                            </div>
                                        </div>
                                        <div class="wpo-blog-content-btm-right">
                                            <span><i class="fi flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-3.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <div class="wpo-blog-content-top">
                                        <h2><a href="blog.html">Give Education, It’s The Best Gift Ever.</a></h2>
                                    </div>
                                    <div class="wpo-blog-content-btm">
                                        <div class="wpo-blog-content-btm-left">
                                            <div class="wpo-blog-content-btm-left-img">
                                                <img src="assets/images/blog/blog-avater/img-2.jpg" alt="">
                                            </div>
                                            <div class="wpo-blog-content-btm-left-text">
                                                <h4><a href="blog.html">Josna Bothy</a></h4>
                                            </div>
                                        </div>
                                        <div class="wpo-blog-content-btm-right">
                                            <span><i class="fi flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i> 35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-blog-section -->
        <!-- start partners-section -->
        <section class="partners-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Who help us</span>
                            <h2>Our Partners & Donors</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,</p>
                        </div>
                    </div>
                </div>
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