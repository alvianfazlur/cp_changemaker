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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
                    <img src="assets/images/logo.png" alt="">
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
                                <br>
                                <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li>
                                        <a class="active" href="/">Home</a>
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
                                        <a href="/event">Events</a>
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
                                <span>Changemaker Indonesia</span>
                            </div>
                            <div class="wpo-hero-title">
                                <h2>Enhance & Empower Indonesian Youth</h2>
                            </div>
                            <div class="wpo-hero-subtitle">
                                <p>We help local nonprofits access the funding, tools, training, and support they need
                                    to become more.</p>
                            </div>
                            <div class="btns">
                                <a href="/about" class="btn theme-btn-s2">Get Started</a>
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
                                    <i class="fi flaticon-target"></i>
                                </div>
                            </div>
                            <div class="wpo-features-text">
                                <h2>International Volunteer</a></h2>
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
                                <h2>College Internship</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                        <div class="wpo-features-item">
                            <div class="wpo-features-icon">
                                <div class="icon">
                                    <i class="fi flaticon-dolphin"></i>
                                </div>
                            </div>
                            <div class="wpo-features-text">
                                <h2>Youth Excursion</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-6 col-sm-6 col-12">
                        <div class="wpo-features-item">
                            <div class="wpo-features-icon">
                                <div class="icon">
                                    <i class="fi flaticon-salary"></i>
                                </div>
                            </div>
                            <div class="wpo-features-text">
                                <h2>100% Fully Funded</h2>
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
                                {{-- <div class="wpo-total-raised">
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
                                </div> --}}
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
        <!-- wpo-campaign-area start -->
        <div class="wpo-campaign-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>We Love To Help</span>
                            <h2>Our Featured Campaigns</h2>
                            <p>Discover our standout initiatives that are making a significant impact. 
                            Each campaign highlights our commitment to creating positive change and driving meaningful results</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-campaign-wrap">
                    <div class="row">
                        @foreach ($recruitments as $r)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <img src="assets/images/campaign/1.jpg" alt="">
                                        <span class="thumb">{{$r->program_type}}</span>
                                    </div>
                                    <div class="wpo-campaign-content">
                                        <div class="wpo-campaign-text-top">
                                            <h2><a href="/recruitment/{{$r->id}}">{{$r->program_name}}</a></h2>
                                            <p></p>
                                            <div class="campaign-btn">
                                                <ul>
                                                    <li>
                                                        <span><img src="assets/images/logo.png" alt=""></span>
                                                        <span>Changemaker</span>
                                                    </li>
                                                </ul>
                                            </div>
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
        <!-- wpo-campaign-area end -->
        <!-- wpo-team-area start -->
        <div class="wpo-team-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Expert Team</span>
                            <h2>Meet Our Volunteer Team</h2>
                            <p>These passionate individuals generously give their time and talents to support our mission.
                                Their unwavering commitment and tireless efforts drive our success and inspire us every day</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-team-wrap">
                    <div class="team-slider owl-carousel">
                        @foreach ($teams as $t)   
                        <div class="wpo-team-item">
                            <div class="wpo-team-img">
                                <img src="{{$t->image}}" alt="" style="max-height: 350px; object-fit: fill;">
                            </div>
                            <div class="wpo-team-content">
                                <h2><a href="{{$t->socmed}}">{{$t->name}}</a></h2>
                                <span>{{$t->job}}</span>
                            </div>
                        </div>
                        @endforeach
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
                            <p>hear from the amazing people who have been impacted by our work. 
                            Their stories and feedback inspire us every day and drive us to continue making a difference</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-testimonial-wrap">
                    <div class="testimonial-slider owl-carousel">
                        @foreach ($testimonial as $t)    
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-content">
                                <p style="text-align: justify;">{{$t->testimoni}}</p>
                                <h2>{{$t->name}}</h2>
                                <span>{{$t->job}}</span>
                            </div>
                        </div>
                        @endforeach
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
                                <h2>Lets Change The World With Humanity</h2>
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
        <div class="wpo-event-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Events</span>
                            <h2>Changemaker Events</h2>
                            <p>Join us at our upcoming events where we bring people together to learn, engage, and make a difference.</p>
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
        <!-- start of wpo-blog-section -->
        <section class="wpo-blog-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <span>Our Blog</span>
                            <h2>Latest News & Update</h2>
                            <p>Stay updated with the latest happenings and developments within our organization.
                                From breaking news to insightful stories.</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        @foreach ($blogs as $b)
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="{{$b->image}}" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <div class="wpo-blog-content-top">
                                        <h2><a href="/blog/{{$b->id}}">{{$b->title}}</a></h2>
                                    </div>
                                    <div class="wpo-blog-content-btm">
                                        <div class="wpo-blog-content-btm-left">
                                            <div class="wpo-blog-content-btm-left-img">
                                                <img src="assets/images/logo.png" alt="">
                                            </div>
                                            <div class="wpo-blog-content-btm-left-text">
                                                <h4>{{$b->author}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                            <h2>Our Beloved Partner</h2>
                            <p>We are proud to collaborate with our beloved partner,
                             whose unwavering support and shared vision help us achieve remarkable milestones</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel">
                            @foreach ($partnerships as $p)
                                <div class="grid">
                                    <img src="{{$p->image}}" alt style="width: 200px; height: auto;">
                                </div>
                            @endforeach
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
                                    <img src="assets/images/logo.png" alt="blog">
                                </div>
                                <p>Enhance & Empower Indonesian Youth!</p>
                                    <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100069888026987">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/changemaker.ind/">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.tiktok.com/@changemaker.ind?_t=8WBqLjUmxs2&_r=1">
                                            <i class="fab fa-tiktok"></i>
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
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/event">Events</a></li>
                                    <li><a href="/blog">Latest News</a></li>
                                    <li><a href="/contact">Contact us</a></li>
                                    <li><a href="/partnership">Partnerships</a></li>
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
                                        <li><i class="fi flaticon-mail"></i>changemaker@gmail.com</li>
                                        <li><i class="fi flaticon-phone-call"></i>+62895411022313</li>
                                        <li><i class="fi flaticon-location"></i>Indonesia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget instagram">
                                <div class="widget-title">
                                    <h3>Latest Post</h3>
                                </div>
                                <ul class="d-flex">
                                    <div style="max-height: 450px;">
                                        <li>
                                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C426Lv7vaIS/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C426Lv7vaIS/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C426Lv7vaIS/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Changemaker Indonesia (@changemaker.ind)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>  
                                        </li>
                                       
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> &copy; 2024 Changemaker. Design By <a href="index.html">wpOcean</a>. All Rights Reserved.</p>
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