@extends('layouts.web-app')

@section('content')

<section class="hero" id="hero" style="min-height: 0 !important;height:60px;border-bottom:2px solid #000;">
    <div class="container">

        <div class="hero-images">
            <div class="row">
                <div class="col-lg-3 col-12 hero-img" data-aos="fade-right" data-aos-delay="150">
                    <img src="{{ asset('web-asset/images/hero/1.jpg') }}" alt="hero-image">
                </div>
                <div class="col-lg-6 col-12 hero-img" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('web-asset/images/hero/2.jpg') }}" alt="hero-image">
                </div>
                <div class="col-lg-3 col-12 hero-img" data-aos="fade-left" data-aos-delay="150">
                    <img src="{{ asset('web-asset/images/hero/3.jpg') }}" alt="hero-image">
                </div>
            </div>
        </div>

</section>

   <!-- ======= start team section ======= -->
   <div class="team container py-5 my-5">
    <h1 class="title col-12 my-3" data-aos="fade-up" data-aos-delay="100">
        our skilled <span class="unique-text">team</span>
    </h1>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-right" data-aos-delay="200">
            <div class="bg-box p-3">
                <div class="d-flex flex-column text-center justify-content-center align-items-center">
                    <div class="img"><img src="{{ asset('web-asset/images/testimonials/testimonials-1.jpg') }}" alt="team"></div>
                    <div class="pt-3 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="sub-title">ahmed errami</h3>
                        <p>web developer</p>
                        <div class="d-flex gap-3 my-2">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter "></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="150">
            <div class="bg-box p-3">
                <div class="d-flex flex-column text-center justify-content-center align-items-center">
                    <div class="img"><img src="{{ asset('web-asset/images/testimonials/testimonials-4.jpg') }}" alt="team"></div>
                    <div class="pt-3 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="sub-title">eliot alderson</h3>
                        <p>founder</p>
                        <div class="d-flex gap-3 my-2">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter "></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-left" data-aos-delay="200">
            <div class="bg-box p-3">
                <div class="d-flex flex-column text-center justify-content-center align-items-center">
                    <div class="img"><img src="{{ asset('web-asset/images/testimonials/testimonials-5.jpg') }}" alt="team"></div>
                    <div class="pt-3 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="sub-title">walter white</h3>
                        <p>sales manager</p>
                        <div class="d-flex gap-3 my-2">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter "></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= end team section ======= -->

@endsection
