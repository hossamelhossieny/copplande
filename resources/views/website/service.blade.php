@extends('layouts.web-app')

@section('content')
<section class="blog-single">
    <div class="container my-2 mt-5 pt-5">
      <img src="{{ asset($service['banner']) }}" data-aos="fade-up" data-aos-delay="100" class="my-2" alt="blog-img">
      <h2 class="my-4 brand-color" data-aos="fade-up" data-aos-delay="200">{{ $service['title_'.app()->getLocale()] }}</h2>
      <p class="my-2" data-aos="fade-up" data-aos-delay="250">{{ $service['desc_'.app()->getLocale()] }}</p>
    </div>
  </section>

  {{-- <div class="container pt-4 mt-4">
    <h1 class="title mb-2 col-lg-5 col-12 aos-init aos-animate" data-aos="fade-up">what we <span class="unique-text">offer</span></h1>
    @foreach ($service['subServices'] as $key=>$serv)
      @if($key % 2 == 0)
      <div class="row g-4 align-items-center justify-content-center py-4 ">
        <div class="col-lg-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ asset($serv['image']) }}" class="img-fluid" alt="{{ $serv['title_'.app()->getLocale()] }}">
        </div>
        <div class="col-lg-6 col-12">
          <h1 class="service-title my-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">{{ $serv['title_'.app()->getLocale()] }}</h1>
          <p class="col-11 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
          <a href="#" class="btn my-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">get started</a>
        </div>
      </div>
      @else
      <div class="row g-4 align-items-center justify-content-center py-4 ">
        <div class="col-lg-6 col-12">
          <p class="col-11 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
          <p class="col-11 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
          <a href="#" class="btn my-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">get started</a>
        </div>
        <div class="col-lg-6 col-12 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
          <img src="{{ asset($serv['image']) }}" class="img-fluid" alt="{{ $serv['title_'.app()->getLocale()] }}">
        </div>
      </div>
      @endif
    @endforeach
    
    
  </div> --}}

  <div class="services my-4 py-4">
    <div class="container">
        <h1 class="title mb-2 col-lg-5 col-12 w-100" data-aos="fade-up">ماذا نقدم لعملاؤنا ؟</h1>

        @foreach ($service['subServices'] as $key=>$serv)
        @if($key % 2 != 0)
            <div class="row g-4 align-items-center justify-content-center py-4 ">
                <div class="col-lg-6 col-12 d-flex flex-column align-items-end justify-content-end">
                    <h1 class="service-title my-4" data-aos="fade-up" data-aos-delay="150">{{ $serv['title_'.app()->getLocale()] }}</h1>
                    <p class="col-11" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
                    <a href="#projects" class="btn my-2" data-aos="fade-up" data-aos-delay="250"><i class="bi bi-arrow-left"></i> {{ __('see our projects') }}</a>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset($serv->image) }}" class="img-fluid" alt="{{ $serv['desc_'.app()->getLocale()] }}" title="{{ $serv['desc_'.app()->getLocale()] }}">
                </div>
            </div>
        @else
        <div class="row g-4 align-items-center justify-content-center py-4 ">
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="100">
                <img src="{{ asset($serv->image) }}" class="img-fluid" alt="{{ $serv['desc_'.app()->getLocale()] }}" title="{{ $serv['desc_'.app()->getLocale()] }}">
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column align-items-end justify-content-end">
                <h1 class="service-title my-4" data-aos="fade-up" data-aos-delay="150">{{ $serv['title_'.app()->getLocale()] }}</h1>
                <p class="col-11" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
                <a href="#projects" class="btn my-2" data-aos="fade-up" data-aos-delay="250"><i class="bi bi-arrow-left"></i> {{ __('see our projects') }}</a>
            </div>
        </div>
        @endif
        @endforeach

    </div>
</div>



  <div class="container mt-4 py-4 blog" id="projects">
    <h1 class="title col-lg-5 col-12" data-aos="fade-up" data-aos-delay="150">{{ __('our resent') }} <span
        class="unique-text">{{ __('Projects') }}</span></h1>
    
    <div class="row my-2 gx-4 gy-4">
      @foreach ($service['projects'] as $project)
      <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
        <div class="bg-box p-4">
          <img src="images/blog/1.jpg" alt="blog">
          <div class="d-flex justify-content-between my-2">
            <h4>by ahmad errami</h4>
            <h4>05/06/2023</h4>
          </div>
          <h2 class="blog-title my-4">10 Must-Have Tools for Every IT Professional</h2>
          <a href="blog-single.html" class="learn-more my-2"><i class="bi bi-arrow-left"></i> {{ __('more') }}</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
