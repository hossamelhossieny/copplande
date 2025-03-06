<!-- ===================================================
template name : itran | IT solutions - business services HTML template
Author: erramix
Version: 2.0
==================================================== -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="itran | IT solutions - business services HTML template ">
  <!-- fav icon -->
  <link rel="icon" href="{{asset('web-asset/images')}}/favicon.ico">

  <!-- bootstrap icons -->
  <link rel="stylesheet" href="{{asset('web-asset/css')}}/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!--  toasts file     -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.{{asset('web-asset/js')}}/latest/{{asset('web-asset/css')}}/toastr.min.css">

  <!--  aos css file     -->
  <link rel="stylesheet" href="{{asset('web-asset/css')}}/aos.css">

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- main css file -->
  @if(app()->getLocale() == "ar")
      <!-- bootstarp css file -->
      <link rel="stylesheet" href="{{asset('web-asset/css')}}/bootstrap_ar.min.css">
      <link rel="stylesheet" href="{{asset('web-asset/css')}}/style_ar.css">
  @else

      <!-- bootstarp css file -->
      <link rel="stylesheet" href="{{asset('web-asset/css')}}/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('web-asset/css')}}/style.css">
  @endif
  <title> @if(!empty($title)) {{ $title }} @else @if(app()->getLocale() == "en") Copplande | Unlimited Service @else كوبلاند | خدمات غير محدودة @endif  @endif</title>
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
        <a class="logo" href="{{ url('/') }}">Copplande</a>
        <!-- if you want to use image in your logo uncomment the following line -->
        <!-- <a class="navbar-brand " href="#"><img src="{{asset('web-asset/images')}}/logo/logo.png" class="logo"  alt="LOGO"></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav ms-auto" id="navbar">
            <li class="nav-item">
              <a class="nav-link" href="{{ url(app()->getLocale()) }}">{{ __('messages.home') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url(app()->getLocale().'/about') }}">{{ __('messages.about') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url(app()->getLocale().'/projects') }}">{{ __('messages.projects') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url(app()->getLocale().'/services') }}">{{ __('messages.services') }}</a>
            </li>           
            <li class="nav-item">
              <a class="nav-link" href="{{ url(app()->getLocale().'/team') }}">{{ __('messages.ourteam') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url(app()->getLocale().'/contactus') }}">{{ __('messages.contactus') }}</a>
            </li>
          </ul>
          <div class="d-flex ms-auto">
            <div class="dropdown ms-2">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ __('messages.language') }}
              </button>
              <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                  <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')">English</a></li>
                  <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')">العربية</a></li>
              </ul>
            </div>

            @auth
                <!-- User Dropdown -->
                <div class="dropdown ms-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit', ['locale' => app()->getLocale()]) }}">
                                {{ __('messages.profile') }}
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout', ['locale' => app()->getLocale()]) }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout', ['locale' => app()->getLocale()]) }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('messages.logout') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
            <div class="dropdown ms-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="authDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ __('messages.login') }} {{ __('messages.or') }} {{ __('messages.register') }}
                </button>
                  <ul class="dropdown-menu" aria-labelledby="authDropdown">
                    <li>
                        <a href="{{ route('register', ['locale' => app()->getLocale()]) }}" class="dropdown-item">
                            {{ __('messages.register') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login', ['locale' => app()->getLocale()]) }}" class="dropdown-item">
                          {{ __('messages.login') }}
                      </a>
                    </li>
                  </ul>
            </div>
            @endauth

            <button id="mode-toggle" class="btn-light-mode switch-button"><i id="mode-icon"
                class="bi bi-moon-fill"></i></button>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ======= end Header ======= -->
{{ $slot }}
  <!-- ============== Start Footer section ========== -->
  <div class="footer" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="py-4 d-flex flex-column align-items-center justify-content-center">
            <h1 class="title col-lg-10 col-12 text-center">{{ __('messages.unlock_potential') }}</h1>
            <a href="#" class="btn my-2 mb-4 pb-2">{{ __('messages.get_started') }}</a>
        </div>
        <div class="row align-items-start">
            <div class="col-12 col-lg-3 col-md-6 mx-auto my-4 d-flex flex-column align-items-start">
                <div class="box">
                    <a href="{{ url('/'.app()->getLocale()) }}" class="logo dark">{{ __('messages.site_name') }}</a>
                    <p class="col-10">{{ __('messages.footer_desc') }}</p>
                    <div class="social d-flex">
                      @if(!empty($siteSettings))                      
                        @if(!empty($siteSettings->facebook))
                        <a href="{{ $siteSettings->facebook }}"><i class="bi bi-facebook"></i></a>
                        @endif
                        @if(!empty($siteSettings->twitter))
                        <a href="{{ $siteSettings->twitter }}"><i class="ms-3 bi bi-twitter"></i></a> 
                        @endif
                        @if(!empty($siteSettings->instagram)) 
                        <a href="{{ $siteSettings->instagram }}"><i class="ms-3 bi bi-instagram"></i></a>
                        @endif
                        @if(!empty($siteSettings->youtube))
                        <a href="{{ $siteSettings->youtube }}"><i class="ms-3 bi bi-youtube"></i></a>
                        @endif
                      @endif
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mx-auto my-4 d-flex flex-column align-items-start">
                <h4 class="my-2">{{ __('messages.site_map') }}</h4>
                <ul class="mt-0">
                    <li><a href="{{ url(app()->getLocale()) }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.home') }}</a></li>
                    <li><a href="{{ url(app()->getLocale().'/about') }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.about') }}</a></li>
                    <li><a href="{{ url(app()->getLocale().'/services') }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.services') }}</a></li>
                    <li><a href="{{ url(app()->getLocale().'/projects') }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.projects') }}</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mx-auto my-4 d-flex flex-column align-items-start">
                <h4 class="my-2">{{ __('messages.about_us') }}</h4>
                <ul class="mt-0">
                    <li><a href="{{ url(app()->getLocale().'/about') }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.about') }}</a></li>
                    <li><a href="{{ url(app()->getLocale().'/team') }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.team_members') }}</a></li>
                    <li><a href="{{ url(app()->getLocale().'/contactus') }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.contact') }}</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mx-auto my-4 d-flex flex-column align-items-start">
                <h4 class="my-2">{{ __('messages.quick_links') }}</h4>
                <ul class="mt-0">
                    @foreach($pages as $page)
                    <li><a href="{{ url(app()->getLocale().'/page/'.$page->id) }}"><i class="bi bi-chevron-right me-2"></i>{{ $page->title }}</a></li>
                    @endforeach
                    <li><a href="{{ url(app()->getLocale().'/faqs') }}"><i class="bi bi-chevron-right me-2"></i>{{ __('messages.faqs') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-start">
                    <p class="creadits">
                        &copy; {{ date('Y') }}
                        {{ __('messages.created_by') }}: <a href="http://kama.bh">Kama</a>
                    </p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-end">
                    <div>
                      @if(!empty($pages))
                      @foreach($pages as $page)
                        <a href="{{ url(app()->getLocale().'/page/'.$page->id) }}">{{ $page->title }}</a>
                        @if(!$loop->last) | @endif                        
                      @endforeach        
                      @endif                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- ============== end Footer section ========== -->



  <!--  JQuery file     -->
  <script src="{{asset('web-asset/js')}}/jquery-3.6.1.min.js"></script>

  <!-- bootstrap min js -->
  <script src="{{asset('web-asset/js')}}/bootstrap.min.js"></script>

  <!--  aos js file    -->
  <script src="{{asset('web-asset/js')}}/aos.js"></script>

  <!--  toasts file     -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.{{asset('web-asset/js')}}/latest/{{asset('web-asset/js')}}/toastr.min.js"></script>

  <!--  counter     -->
  <script src="{{asset('web-asset/js')}}/jquery.counterup.min.js"></script>
  <script src="{{asset('web-asset/js')}}/jquery.waypoints.js"></script>

  <!--  main js file  -->
  <script src="{{asset('web-asset/js')}}/main.js"></script>

  <script>
    function changeLanguage(lang) {
      
    let path = window.location.pathname;
    let currentLocale = path.split('/')[1];
    let newPath = path.replace('/' + currentLocale , '/' + lang );
    
    window.location.href = newPath;
}
  </script>
</body>

</html>