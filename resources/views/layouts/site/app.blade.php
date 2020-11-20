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
@include('layouts.site.components.menu')
<!-- End Nabvar Area -->

@yield('content')

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
