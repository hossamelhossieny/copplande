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

 <!-- ============== Start contact section ========== -->
 <section class="container contact py-5" id="contact">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-lg-6 gy-3 d-flex flex-column justify-content-end align-items-end">
            <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">
                {{ __('contact us if you have any questions') }}
            </h1>
            <p class="col-11" data-aos="fade-right" data-aos-delay="150">
                {{ __('we strive to provide the best customized technological solutions to support your business success. we combine creativity and expertise to deliver unique solutions that effectively meet your needs') }}
            </p>
            <div class="d-flex gap-3 align-items-center justify-content-end my-3" data-aos="fade-right"
                data-aos-delay="200">
                <h5>example@example.com</h5>
                <i class="bi bi-envelope-fill"></i>
            </div>
            <div class="d-flex gap-3 align-items-center my-3" data-aos="fade-right" data-aos-delay="250">
                <h5>+123 456 6789</h5>
                <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="d-flex gap-3 align-items-center my-3" data-aos="fade-right" data-aos-delay="300">
                <h5>A108 Adam Street, New York, NY 535022</h5>
                <i class="bi bi-map-fill"></i>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <!--Form To have user messages-->
            <form action="contact.php" method="post" class="main-form">
                <div class="col-12">
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
                            <h6><span class="unique-text">*</span>{{ __('name') }}</h6>
                            <input placeholder="{{ __('name') }}" type="text" id="name" name="name" required
                                class="text-input">
                        </div>
                        <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="150">
                            <h6><span class="unique-text">*</span>{{ __('subject') }}</h6>
                            <input placeholder="{{ __('subject') }}" type="text" id="subject" name="subject" required
                                class="text-input">
                        </div>
                    </div>
                </div>
                <div class="my-4" data-aos="fade-up" data-aos-delay="200">
                    <h6><span class="unique-text">*</span>{{ __('email') }}</h6>
                    <input type="email" placeholder="{{ __('email') }}" id="email" name="email" required
                        class="text-input">
                </div>
                <div class="my-4" data-aos="fade-up" data-aos-delay="250">
                    <h6><span class="unique-text">*</span>{{ __('message') }}</h6>
                    <textarea id="message" placeholder="{{ __('message') }}" name="message" required cols="30" rows="10"
                        class="text-input"></textarea>
                </div>
                <button type="submit" value="Submit" class="btn" data-aos="fade-up"
                    data-aos-delay="300">{{ __('send') }}</button>
            </form>
        </div>
    </div>
</section>
  <!-- ============== end contact section ========== -->

@endsection
