@extends('layouts.web-app')

@section('content')
<section class="blog-single">
    <div class="container my-2 mt-5 pt-5">
      <img src="{{ asset($service['banner']) }}" data-aos="fade-up" data-aos-delay="100" class="my-2" alt="blog-img">
      <div class="d-flex justify-content-between my-2">
        <h4>by <span class="unique-text" data-aos="fade-right" data-aos-delay="150">john zabzag</span></h4>
        <h4 data-aos="fade-left" data-aos-delay="150">05/06/2023</h4>
      </div>
      <h2 class="my-4" data-aos="fade-up" data-aos-delay="200">{{ $service['title_'.app()->getLocale()] }}</h2>
      <p class="my-2" data-aos="fade-up" data-aos-delay="250">{{ $service['desc_'.app()->getLocale()] }}</p>
    </div>
  </section>
  <div class="container mt-4 py-4 blog">
    <h1 class="title col-lg-5 col-12" data-aos="fade-up" data-aos-delay="150">our resent <span
        class="unique-text">Projects</span></h1>
    <div class="row my-2 gx-4 gy-4">
      <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
        <div class="bg-box p-4">
          <img src="images/blog/1.jpg" alt="blog">
          <div class="d-flex justify-content-between my-2">
            <h4>by ahmad errami</h4>
            <h4>05/06/2023</h4>
          </div>
          <h2 class="blog-title my-4">10 Must-Have Tools for Every IT Professional</h2>
          <a href="blog-single.html" class="learn-more my-2">read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="150">
        <div class="bg-box p-4">
          <img src="images/blog/2.jpg" alt="blog">
          <div class="d-flex justify-content-between my-2">
            <h4>by bodih dgmas</h4>
            <h4>15/03/2023</h4>
          </div>
          <h2 class="blog-title my-4">The Top Cybersecurity Threats to Watch Out for in 2023</h2>
          <a href="blog-single.html" class="learn-more my-2">read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="250">
        <div class="bg-box p-4">
          <img src="images/blog/3.jpg" alt="blog">
          <div class="d-flex justify-content-between my-2">
            <h4>by john zabzag</h4>
            <h4>05/06/2023</h4>
          </div>
          <h2 class="blog-title my-4">How to Build a Successful IT Career: Tips and Advice</h2>
          <a href="blog-single.html" class="learn-more my-2">read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="250">
        <div class="bg-box p-4">
          <img src="images/blog/4.jpg" alt="blog">
          <div class="d-flex justify-content-between my-2">
            <h4>by john smith</h4>
            <h4>05/06/2023</h4>
          </div>
          <h2 class="blog-title my-4">The Benefits and Risks of Cloud Computing for Businesses</h2>
          <a href="blog-single.html" class="learn-more my-2">read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
@endsection
