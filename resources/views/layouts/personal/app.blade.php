{{--
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
--}}



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Личниый кобинет') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.ico') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin/assets/js/loader.js') }}"></script>

</head>
<body>
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

        <ul class="navbar-item flex-row ml-auto">

            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    </div>
                </form>
            </li>

            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="admin/assets/img/ca.png" class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="admin/assets/img/de.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="admin/assets/img/jp.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Japanese</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="admin/assets/img/fr.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;French</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="admin/assets/img/ca.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                </div>
            </li>

            <li class="nav-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="badge badge-primary">3</span>
                </a>
                <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="messageDropdown">
                    <div class="">
                        <a class="dropdown-item">
                            <div class="">
                                <div class="media notification-new">
                                    <div class="notification-icon">
                                        <div class="icon-svg mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="meta-title mr-3">5 messages for group</p>
                                        <p class="message-text">Kelly, Amy, Shaun</p>
                                        <p class="meta-time align-self-center mb-0">Yesterday</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">
                                <div class="media notification-new">
                                    <div class="usr-profile-img mr-3">
                                        <div class="user-profile">
                                            <div class="">KY</div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="meta-user-name mr-3">Kara Young</p>
                                        <p class="message-text">Some quick example text to build the notification ..</p>
                                        <p class="meta-time align-self-center mb-0">2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">
                                <div class="media notification-new">
                                    <div class="notification-icon">
                                        <div class="icon-svg mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="meta-title mr-3">1 new email</p>
                                        <p class="message-text">Anderson.Daisy@mail.com</p>
                                        <p class="meta-time align-self-center mb-0">Yesterday</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                </a>
                <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="notificationDropdown">
                    <div class="notification-scroll">

                        <div class="dropdown-item">
                            <div class="media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <div class="media-body">
                                    <div class="notification-para"><span class="user-name">Shaun Park</span> commented on your post.</div>
                                    <div class="notification-meta-time">5 mins ago</div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                <div class="media-body">
                                    <div class="notification-para"><span class="user-name">Kelly Young</span> likes your photo</div>
                                    <div class="notification-meta-time">8 mins ago</div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                <div class="media-body">
                                    <div class="notification-para">Invitation successfully sent to <span class="user-name">Amy Diaz</span></div>
                                    <div class="notification-meta-time">10 mins ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </a>
                <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <img src="admin/assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                            <div class="media-body">
                                <h5>Alan Green</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="user_profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>My Profile</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="apps_mailbox.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>My Inbox</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth_lockscreen.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth_login.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>


    <!--  BEGIN SIDEBAR  -->
    @include('layouts.personal.templates.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">Revenue</h5>
                            <ul class="tabs tab-pills">
                                <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                            </ul>
                        </div>

                        <div class="widget-content">
                            <div class="tabs tab-content">
                                <div id="content_1" class="tabcontent">
                                    <div id="revenueMonthly"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Sales by Category</h5>
                        </div>
                        <div class="widget-content">
                            <div id="chart-2" class=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget-two">
                        <div class="widget-content">
                            <div class="w-numeric-value">
                                <div class="w-content">
                                    <span class="w-value">Daily sales</span>
                                    <span class="w-numeric-title">Go to columns for details.</span>
                                </div>
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                            </div>
                            <div class="w-chart">
                                <div id="daily-sales"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget-three">
                        <div class="widget-heading">
                            <h5 class="">Summary</h5>
                        </div>
                        <div class="widget-content">

                            <div class="order-summary">

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Income</h6>
                                            <p class="summary-count">$92,600</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Profit</h6>
                                            <p class="summary-count">$37,515</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Expenses</h6>
                                            <p class="summary-count">$55,085</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget-one widget">
                        <div class="widget-content">
                            <div class="w-numeric-value">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                </div>
                                <div class="w-content">
                                    <span class="w-value">3,192</span>
                                    <span class="w-numeric-title">Total Orders</span>
                                </div>
                            </div>
                            <div class="w-chart">
                                <div id="total-orders"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-one">
                        <div class="widget-heading">
                            <h5 class="">Transactions</h5>
                        </div>

                        <div class="widget-content">
                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Electricity Bill</h4>
                                            <p class="meta-date">4 Aug 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">SP</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Shaun Park</h4>
                                            <p class="meta-date">4 Aug 1:00PM</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">AD</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Amy Diaz</h4>
                                            <p class="meta-date">4 Aug 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Netflix</h4>
                                            <p class="meta-date">4 Aug 1:00PM</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">Recent Activities</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">

                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p><span>Updated</span> Server Logs</p>
                                            <span class="badge badge-danger">Pending</span>
                                            <p class="t-time">Just Now</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                            <span class="badge badge-success">Completed</span>
                                            <p class="t-time">2 min ago</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-danger">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Backup <span>Files EOD</span></p>
                                            <span class="badge badge-danger">Pending</span>
                                            <p class="t-time">14:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                            <span class="badge badge-success">Completed</span>
                                            <p class="t-time">16:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                            <span class="badge badge-primary">In progress</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Rebooted Server</p>
                                            <span class="badge badge-success">Completed</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Send contract details to Freelancer</p>
                                            <span class="badge badge-danger">Pending</span>
                                            <p class="t-time">18:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Kelly want to increase the time of the project.</p>
                                            <span class="badge badge-primary">In Progress</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Server down for maintanence</p>
                                            <span class="badge badge-success">Completed</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Malicious link detected</p>
                                            <span class="badge badge-warning">Block</span>
                                            <p class="t-time">20:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>Rebooted Server</p>
                                            <span class="badge badge-success">Completed</span>
                                            <p class="t-time">23:00</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tm-action-btn">
                                <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-account-invoice-one">

                        <div class="widget-heading">
                            <h5 class="">Account Info</h5>
                        </div>

                        <div class="widget-content">
                            <div class="invoice-box">

                                <div class="acc-total-info">
                                    <h5>Balance</h5>
                                    <p class="acc-amount">$470</p>
                                </div>

                                <div class="inv-detail">
                                    <div class="info-detail-1">
                                        <p>Monthly Plan</p>
                                        <p>$ 199.0</p>
                                    </div>
                                    <div class="info-detail-2">
                                        <p>Taxes</p>
                                        <p>$ 17.82</p>
                                    </div>
                                    <div class="info-detail-3 info-sub">
                                        <div class="info-detail">
                                            <p>Extras this month</p>
                                            <p>$ -0.68</p>
                                        </div>
                                        <div class="info-detail-sub">
                                            <p>Netflix Yearly Subscription</p>
                                            <p>$ 0</p>
                                        </div>
                                        <div class="info-detail-sub">
                                            <p>Others</p>
                                            <p>$ -0.68</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="inv-action">
                                    <a href="" class="btn btn-outline-dark">Summary</a>
                                    <a href="" class="btn btn-danger">Transfer</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-two">

                        <div class="widget-heading">
                            <h5 class="">Recent Orders</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">Customer</div></th>
                                        <th><div class="th-content">Product</div></th>
                                        <th><div class="th-content">Invoice</div></th>
                                        <th><div class="th-content th-heading">Price</div></th>
                                        <th><div class="th-content">Status</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="admin/assets/img/90x90.jpg" alt="avatar">Andy King</div></td>
                                        <td><div class="td-content product-brand">Nike Sport</div></td>
                                        <td><div class="td-content">#76894</div></td>
                                        <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="admin/assets/img/90x90.jpg" alt="avatar">Irene Collins</div></td>
                                        <td><div class="td-content product-brand">Speakers</div></td>
                                        <td><div class="td-content">#75844</div></td>
                                        <td><div class="td-content pricing"><span class="">$84.00</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="admin/assets/img/90x90.jpg" alt="avatar">Laurie Fox</div></td>
                                        <td><div class="td-content product-brand">Camera</div></td>
                                        <td><div class="td-content">#66894</div></td>
                                        <td><div class="td-content pricing"><span class="">$126.04</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-danger">Pending</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="admin/assets/img/90x90.jpg" alt="avatar">Luke Ivory</div></td>
                                        <td><div class="td-content product-brand">Headphone</div></td>
                                        <td><div class="td-content">#46894</div></td>
                                        <td><div class="td-content pricing"><span class="">$56.07</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="admin/assets/img/90x90.jpg" alt="avatar">Ryan Collins</div></td>
                                        <td><div class="td-content product-brand">Sport</div></td>
                                        <td><div class="td-content">#89891</div></td>
                                        <td><div class="td-content pricing"><span class="">$108.09</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="admin/assets/img/90x90.jpg" alt="avatar">Nia Hillyer</div></td>
                                        <td><div class="td-content product-brand">Sunglasses</div></td>
                                        <td><div class="td-content">#26974</div></td>
                                        <td><div class="td-content pricing"><span class="">$168.09</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="admin/assets/img/90x90.jpg" alt="avatar">Sonia Shaw</div></td>
                                        <td><div class="td-content product-brand">Watch</div></td>
                                        <td><div class="td-content">#76844</div></td>
                                        <td><div class="td-content pricing"><span class="">$110.00</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-three">

                        <div class="widget-heading">
                            <h5 class="">Top Selling Product</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">Product</div></th>
                                        <th><div class="th-content th-heading">Price</div></th>
                                        <th><div class="th-content th-heading">Discount</div></th>
                                        <th><div class="th-content">Sold</div></th>
                                        <th><div class="th-content">Source</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="admin/assets/img/90x90.jpg" alt="product">Speakers</div></td>
                                        <td><div class="td-content"><span class="pricing">$84.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$10.00</span></div></td>
                                        <td><div class="td-content">240</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Direct</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="admin/assets/img/90x90.jpg" alt="product">Sunglasses</div></td>
                                        <td><div class="td-content"><span class="pricing">$56.07</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$5.07</span></div></td>
                                        <td><div class="td-content">190</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Google</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="admin/assets/img/90x90.jpg" alt="product">Watch</div></td>
                                        <td><div class="td-content"><span class="pricing">$88.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$20.00</span></div></td>
                                        <td><div class="td-content">66</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="admin/assets/img/90x90.jpg" alt="product">Laptop</div></td>
                                        <td><div class="td-content"><span class="pricing">$110.00</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$33.00</span></div></td>
                                        <td><div class="td-content">35</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Email</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="admin/assets/img/90x90.jpg" alt="product">Camera</div></td>
                                        <td><div class="td-content"><span class="pricing">$126.04</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$26.04</span></div></td>
                                        <td><div class="td-content">30</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Referral</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="admin/assets/img/90x90.jpg" alt="product">Shoes</div></td>
                                        <td><div class="td-content"><span class="pricing">$108.09</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$47.09</span></div></td>
                                        <td><div class="td-content">130</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Google</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="admin/assets/img/90x90.jpg" alt="product">Headphone</div></td>
                                        <td><div class="td-content"><span class="pricing">$168.09</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">$60.09</span></div></td>
                                        <td><div class="td-content">170</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>
<script src="{{ asset('admin/plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/dashboard/dash_2.js') }}"></script>

</body>
</html>
