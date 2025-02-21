<!DOCTYPE html>
<html 
@if(app()->getLocale() == "ar") dir="rtl" lang="ar" @else dir="ltr" lang="en" @endif
>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="itran | IT solutions - business services HTML template ">
    <!-- fav icon -->
    <link rel="icon" href="{{ asset('web-asset/images/favicon.ico') }}">

    <!-- bootstarp css file -->
    @if(app()->getLocale() == "ar")
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    @else
        <link rel="stylesheet" href="{{ asset('web-asset/css/bootstrap.min.css') }}">
    @endif

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('web-asset/css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--  toasts file     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!--  aos css file     -->
    <link rel="stylesheet" href="{{ asset('web-asset/css/aos.css') }}">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800;900&amp;display=swap">

    <!-- main css file -->
    <link rel="stylesheet" href="{{ asset('web-asset/css/style.css') }}">
    <style>
        .navbar-nav .nav-link.active {
            color: #fff;
            background-color: #FF6B33;
            border-radius: 5px;
        }

        .navbar-nav .nav-link.active:hover {
            color: #000;
            background-color: #fff;
        }
    </style>
    @stack('styles')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body @if(app()->getLocale() == "ar") class="home-rtl" @endif>
    <!-- start scroll to top button -->
    <div id="progress">
        <span id="progress-value"><i class="bi bi-arrow-up-short"></i></span>
    </div>
    <!-- end scroll to top button -->

    <!-- start preLoader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- end preLoader -->

    <!-- ======= start Header ======= -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="logo" href="#">{{ __('copplande') }}</a>
                <!-- if you want to use image in your logo uncomment the following line -->
                <!-- <a class="navbar-brand " href="#"><img src="images/logo/logo.png" class="logo"  alt="LOGO"></a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav ms-auto" id="navbar">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('homepage') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">{{ __('about us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}" href="{{ route('team') }}">{{ __('our team') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">{{ __('our services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">{{ __('projects') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contactus') ? 'active' : '' }}" href="{{ route('contactus') }}">{{ __('contact us') }}</a>
                        </li>
                    </ul>
                    <div class="dropdown ms-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('language') }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="{{ route('change.lang', ['lang' => 'en']) }}">English</a></li>
                            <li><a class="dropdown-item" href="{{ route('change.lang', ['lang' => 'ar']) }}">العربية</a></li>
                        </ul>
                    </div>
                    <div class="d-flex ms-auto">
                        @if (Auth::check())
                            @if (Auth::user()->hasRole('admin'))
                                <a href="{{ route('admin.dashboard') }}" class="btn">
                                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                    <div data-i18n="Dashboard">{{ __('dashboard') }}</div>
                                </a>
                            @elseif (Auth::user()->hasRole('customer'))
                                <a href="{{ route('customer.dashboard') }}" class="btn">
                                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                    <div data-i18n="Dashboard">{{ __('dashboard') }}</div>
                                </a>
                            @elseif (Auth::user()->hasRole('manager'))
                                <a href="{{ route('manager.dashboard') }}" class="btn">
                                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                    <div data-i18n="Dashboard">{{ __('dashboard') }}</div>
                                </a>
                            @endif
                        @else
                            <a class="btn" href="{{ route('login') }}">{{ __('login') }}</a>&nbsp;
                        @endif
                        <button id="mode-toggle" class="btn-light-mode switch-button"><i id="mode-icon"
                            class="bi bi-moon-fill"></i></button>
                        <!-- Language Switcher -->

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ======= end Header ======= -->

    @yield('content')

    <!-- ============== Start Footer section ========== -->
    <div class="footer" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            
            <div class="row align-items-center">

                <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4">
                    <h4 class="my-2">{{ __('site map') }}</h4>
                    <ul>
                        <li><a href="index.html">{{ __('homepage') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="about.html">{{ __('about us') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="portfolio.html">{{ __('projects') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="contact.html">{{ __('contact us') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4">
                    <h4 class="my-2">{{ __('about us') }}</h4>
                    <ul>
                        <li><a href="about1.html">{{ __('our story') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="team.html">{{ __('team members') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="about2.html">{{ __('careers') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="contact.html">{{ __('contact us') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4">
                    <h4 class="my-2">{{ __('quick links') }}</h4>
                    <ul>
                        <li><a href="terms-of-use.html">{{ __('terms of use') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="privacy-policy.html">{{ __('privacy policy') }}<i class="bi bi-chevron-left ms-2"></i></a>
                        </li>
                        <li><a href="contact.html">{{ __('contact support') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                        <li><a href="faqs.html">{{ __('faqs') }}<i class="bi bi-chevron-left ms-2"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 col-md-6 mx-auto my-4">
                    <div class="box d-flex flex-column justify-content-end align-items-end">
                        <a href="index.html" class="logo dark">{{ __('copplande') }}</a>
                        <p class="col-10">{{ __('we strive to provide the best customized technological solutions to support your business success.') }}</p>
                        <div class="social d-flex">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="ms-3 bi bi-instagram"></i></a>
                            <a href="#"><i class="ms-3 bi bi-twitter "></i></a>
                            <a href="#"><i class="ms-3 bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyrights ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-start w-100">
                        <div>
                            <a href="terms-of-use.html">{{ __('terms of use') }} </a>
                            | <a href="privacy-policy.html">{{ __('privacy policy') }}</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-end w-100">
                        <p class="creadits">
                            &copy; 2024
                            {{ __('created by') }}: <a href="http://kama.bh">Kama</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============== end Footer section ========== -->

    <!--  JQuery file     -->
    <script src="{{ asset('web-asset/js/jquery-3.6.1.min.js') }}"></script>

    <!-- bootstrap min js -->
    <script src="{{ asset('web-asset/js/bootstrap.min.js') }}"></script>

    <!--  aos js file    -->
    <script src="{{ asset('web-asset/js/aos.js') }}"></script>

    <!--  toasts file     -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!--  counter     -->
    <script src="{{ asset('web-asset/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('web-asset/js/jquery.waypoints.js') }}"></script>

    <!--  main js file  -->
    <script src="{{ asset('web-asset/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
