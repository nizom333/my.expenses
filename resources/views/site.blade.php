<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    <link rel="icon" type="images/png" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('title')</title>
</head>

<body data-spy="scroll" data-offset="70">
<!-- Preloader -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-hourglass"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Nabvar Area -->
@include('site.components.menu')
<!-- End Nabvar Area -->

<!-- App Landing Banner Area -->
<div id="home" class="app-banner-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="app-bennr-text">
                    <span>Creative App Of 2020</span>
                    <h1>Best Mobile App For Your Storage Management</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <div class="app-btn">
                        <a href="#" class="default-btn app-btn-1 mr-3">Try Free Trial</a>
                        <a href="#" class="default-btn app-btn-2">Download</a>
                    </div>

                    <div class="row mt-30">
                        <div class="col-lg-6 col-sm-6">
                            <div class="app-text">
                                <h3>50.6k</h3>
                                <p>App <br> Download</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="app-text">
                                <h3>16.2k</h3>
                                <p>Positive <br> Reviews</p>
                            </div>
                        </div>
                    </div>

                    <div class="app-shapes">
                        <img src="assets/images/shape/shape1.png" class="shape-1" alt="Image">
                        <img src="assets/images/shape/shape30.png" class="shape-30"  alt="Image">
                        <img src="assets/images/shape/shape28.png" class="shape-28"  alt="Image">
                        <img src="assets/images/shape/shape16.png" class="shape-16"  alt="Image">
                        <img src="assets/images/shape/shape16.png" class="shape-11"  alt="Image">
                        <img src="assets/images/shape/shape14.png" class="shape-14"  alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="app-banner-img">
                    <img src="assets/images/app-img/new.app-banner-img.png" class="app-img" alt="Image">
                    <div class="app-shapes">
                        <img src="assets/images/shape/shape31.png" class="shape-31"  alt="Image">
                        <img src="assets/images/shape/shape4.png" class="shape-4"  alt="Image">
                        <img src="assets/images/shape/shape2.png" class="shape-2"  alt="Image">
                        <img src="assets/images/shape/shape22.png" class="shape-22"  alt="Image">
                        <img src="assets/images/shape/shape5.png" class="shape-5"  alt="Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape">
            <img src="assets/images/shape/shape29.png" alt="Image">
        </div>
    </div>
</div>
<!-- End App Landing Banner Area -->

<!-- Easy Steps Area -->
<div id="steps" class="easy-step-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Easy Steps</span>
            <h2>Discover This App More Easy</h2>
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="easy-step-img">
                    <img src="assets/images/app-img/easy-step-1.png" class="step-1" alt="Image">
                    <div class="easy-step-shape">
                        <img src="assets/images/shape/shape1.png" class="shape-1" alt="Shape">
                        <img src="assets/images/shape/shape21.png" class="shape-21" alt="Shape">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="easy-step-card left-text">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="step-signle-card">
                                <i class="las la-download bg-1"></i>
                                <span>1</span>
                                <h3>Download Free Trial</h3>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <p>This is version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aen ean itudin, lorem quis bibendum auctor, nisi elit cons tequat ipsum, nec sagittis sem nibh id elit.</p>
                        </div>
                    </div>
                </div>

                <div class="easy-step-card right-text">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-sm-6">
                            <p>This is version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aen ean itudin, lorem quis bibendum auctor, nisi elit cons tequat ipsum, nec sagittis sem nibh id elit.</p>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="step-signle-card">
                                <i class="las la-user-alt bg-2"></i>
                                <span>2</span>
                                <h3>Make Your Profile</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="easy-step-card left-text">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="step-signle-card step-p">
                                <i class="las la-smile-beam bg-3"></i>
                                <span>3</span>
                                <h3>Use Your App</h3>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <p>This is version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aen ean itudin, lorem quis bibendum auctor, nisi elit cons tequat ipsum, nec sagittis sem nibh id elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Easy Steps Area -->

<!-- Our Services Area -->
<div id="features" class="our-services-area service-shape pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Our Features</span>
            <h2>Top Features To Manage Storage</h2>
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="our-service-card">
                    <i class="las la-cloud-upload-alt bg-1"></i>
                    <h3>Automatic Backups</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="our-service-card">
                    <i class="las la-share-alt bg-2"></i>
                    <h3>Remote Access</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="our-service-card">
                    <i class="las la-share bg-3"></i>
                    <h3>File Sharing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="our-service-card">
                    <i class="las la-lock bg-4"></i>
                    <h3>File Security</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="our-service-card">
                    <i class="las la-file-import bg-5"></i>
                    <h3>File Backup</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="our-service-card">
                    <i class="las la-file-archive bg-6"></i>
                    <h3>File Archiving</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="our-service-shape">
            <img src="assets/images/shape/shape26.png" alt="Shape">
        </div>
    </div>
</div>
<!-- End Our Services Area -->

<!-- Popup Video Area -->
<div class="popup-video-area bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="popup-video">
                    <div class="video-btn">
                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                            <i class="las la-play"></i>
                            <span class="ripple pinkBg"></span>
                            <span class="ripple pinkBg"></span>
                            <span class="ripple pinkBg"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Popup Video Area -->

<!-- Powerful Area -->
<div class="powerful-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>More Easy And More Powerful And Personal App Built For You</h2>
                </div>
                <div class="powerful-card">
                    <i class="las la-layer-group bg-1"></i>
                    <h3>Expert User Experience Component</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>

                <div class="powerful-card">
                    <i class="las la-mobile-alt bg-2"></i>
                    <h3>Clean User Interface Design</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>

                <div class="powerful-card">
                    <i class="las la-shield-alt bg-3"></i>
                    <h3>Highly Secured System</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>

                <div class="powerful-card">
                    <i class="las la-hdd bg-4"></i>
                    <h3>Unlimited Storage As Need</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="powerful-img">
                    <img src="assets/images/app-img/powerful.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Powerful Area -->

<!-- Perfect Area -->
<div class="perfect-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="perfect-img">
                    <img src="assets/images/app-img/perfect.png" class="perfect-1" alt="Image">
                    <div class="perfect-shape">
                        <img src="assets/images/shape/shape25.png" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="section-title">
                    <h2>Perfect Solution For Your ios & Android Device</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="perfect-card">
                            <i class="las la-sync-alt"></i>
                            <h3>Get Regular Update</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="perfect-card">
                            <i class="las la-download"></i>
                            <h3>Drag and Drop files</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="perfect-card">
                            <i class="las la-share-alt"></i>
                            <h3>Fast and Easy Search</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="perfect-card">
                            <i class="las la-boxes"></i>
                            <h3>Advanced Search</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Perfect Area -->

<!-- Screens Slider Area -->
<div id="screenshots" class="screens-slider-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Application Screens</span>
            <h2>Moder And User Friendly App Screens</h2>
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
        </div>

        <div class="screens-slider owl-carousel owl-theme">
            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot1.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot2.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot3.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot4.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot5.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot2.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot4.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot3.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot5.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot1.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot4.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot5.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot2.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot4.png" alt="Image">
            </div>

            <div class="screen-slider-item">
                <img src="assets/images/app-img/screenshot3.png" alt="Image">
            </div>
        </div>
    </div>
</div>
<!-- End Screens Slider Area -->

<!-- App Features Area -->
<div class="app-features-area">
    <div class="container">
        <div class="section-title">
            <span>App Download</span>
            <h2>Download The App With Top Features</h2>
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
        </div>
        <div class="app-features-img">
            <a href="#">
                <img src="assets/images/app-img/google-play.png" class="mr-3" alt="Image">
            </a>
            <a href="#">
                <img src="assets/images/app-img/app-store.png" alt="Image">
            </a>
        </div>
        <div class="app-features">
            <img src="assets/images/app-img/app-features.png" alt="Image">
        </div>
    </div>
</div>
<!-- End App Features Area -->

<!-- Testimonials Silder Two Area -->
<div id="testimonials" class="clients-slider-two-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Clients Review</span>
            <h2>Our App Users And Their Experience</h2>
            <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
        </div>
        <div class="clients-slider-two owl-carousel owl-theme">
            <div class="slider-two-item">
                <img src="assets/images/portfolio/client1.jpg" alt="Image">
                <h3>Thomas Smith</h3>
                <span>CEO Of LTD Company</span>
                <div class="rating">
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                </div>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                <i class="las la-quote-left clients-icon"></i>
            </div>

            <div class="slider-two-item">
                <img src="assets/images/portfolio/client2.jpg" alt="Image">
                <h3>Sinthy Alina</h3>
                <span>Marking Assistant</span>
                <div class="rating">
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                </div>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                <i class="las la-quote-left clients-icon"></i>
            </div>

            <div class="slider-two-item">
                <img src="assets/images/portfolio/client3.jpg" alt="Image">
                <h3>Jehson Benther</h3>
                <span>Shipping Manager</span>
                <div class="rating">
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                </div>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                <i class="las la-quote-left clients-icon"></i>
            </div>

            <div class="slider-two-item">
                <img src="assets/images/portfolio/client4.jpg" alt="Image">
                <h3>Niccy Priti</h3>
                <span>Founder - CEO</span>
                <div class="rating">
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                </div>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                <i class="las la-quote-left clients-icon"></i>
            </div>

            <div class="slider-two-item">
                <img src="assets/images/portfolio/client2.jpg" alt="Image">
                <h3>Niccy Priti</h3>
                <span>Founder - CEO</span>
                <div class="rating">
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                </div>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                <i class="las la-quote-left clients-icon"></i>
            </div>
        </div>
        <div class="client-shape">
            <img src="assets/images/shape/shape27.png" alt="Image">
        </div>
    </div>
</div>
<!-- End Testimonials Silder Two Area -->

<!-- Subscribe Area -->
<div class="subscribe-area mt-minus-100">
    <div class="container">
        <div class="subscribe-contant">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscrive-text">
                        <h3>Subscribe Our Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="subscribe-form">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                            <button type="submit" class="btn btn-primary">Subscribe</button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe Area -->

<!-- Footer Area -->
<footer class="footer-area pt-200">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget">
                    <div class="logo">
                        <img src="assets/images/logo-white.png" alt="logo">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamco.</p>

                    <ul class="footer-social">
                        <li>
                            <a class="bg-1" href="#" target="_blank">
                                <i class="lab la-facebook-f bg-1"></i>
                            </a>
                        </li>
                        <li>
                            <a class="bg-2" href="#" target="_blank">
                                <i class="lab la-twitter bg-2"></i>
                            </a>
                        </li>
                        <li>
                            <a class="bg-3" href="#" target="_blank">
                                <i class="lab la-linkedin-in bg-3"></i>
                            </a>
                        </li>
                        <li>
                            <a class="bg-4" href="#" target="_blank">
                                <i class="lab la-instagram bg-4"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-5 col-sm-6">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="title">Company</h3>
                            <ul class="footer-text">
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Advertise
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Support
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Marketing
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        About Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="title">Quick Links</h3>
                            <ul class="footer-text">
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Features
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Screenshot
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="las la-angle-right"></i>
                                        Testimonial
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 offset-sm-4 offset-lg-0">
                <div class="footer-widget">
                    <h3 class="title">Download Link</h3>
                    <div class="footer-image">
                        <a href="#">
                            <img src="assets/images/app-img/google-play.png" alt="Image">
                        </a>
                        <a href="#">
                            <img src="assets/images/app-img/app-store.png" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-text">
            <p>Copyright @2020 Tarly. All Rights Reserved <a href="/" target="_blank">Effective Solutions</a></p>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Go Top -->
<div class="go-top">
    <i class="las la-angle-double-up"></i>
</div>
<!-- End Go Top -->


    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>
</html>
