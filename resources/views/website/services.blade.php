@extends('layouts.web-app')

@section('content')

@push('styles')
  <link rel="stylesheet" href="{{ asset('web-asset/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('web-asset/css/owl.theme.default.min.css') }}">

@endpush

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

  <!-- ============== Start Blog section ========== -->
  <div class="blog py-4 my-4">
    <div class="container">
        <h1 class="title col-lg-5 col-12 w-100" data-aos="fade-up" data-aos-delay="100">أحدث <span class="unique-text">مشاريعنا</span></h1>
        <div class="row my-2 gx-4 gy-4">
            @foreach ($services as $key=>$service)
            @if($key % 2 == 0)
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
                <div class="bg-box d-flex flex-column justify-content-end align-items-end p-4">
                    <img src="{{ asset($service['image']) }}" alt="blog">
                    <div class="d-flex justify-content-between my-2 w-100">
                        <h4>{{ $service['title_'.app()->getLocale()] }}</h4>
                        <h4>{{ date('d/m/Y') }}</h4>
                    </div>
                    <h2 class="blog-title my-4">{{ substr($service['desc_'.app()->getLocale()],0,27) }} ...</h2>
                    <a href="{{ route('one.service',$service['id']) }}" class="learn-more my-2"><i class="bi bi-arrow-left"></i>المزيد</a>
                </div>
            </div>
            @else
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-box d-flex flex-column justify-content-end align-items-end p-4">
                    <img src="{{ asset('web-asset/images/blog/2.jpg') }}" alt="blog">
                    <div class="d-flex justify-content-between w-100 my-2">
                        <h4>{{ $service['title_'.app()->getLocale()] }}</h4>
                        <h4>{{ date('d/m/Y') }}</h4>
                    </div>
                    <h2 class="blog-title my-4">{{ substr($service['desc_'.app()->getLocale()],0,27) }} ...</h2>
                    <a href="{{ route('one.service',$service['id']) }}" class="learn-more my-2"><i class="bi bi-arrow-left"></i>المزيد</a>
                </div>
            </div>
            @endif
            @endforeach




        </div>
    </div>
</div>



  @push('scripts')
        <!--  counter     -->
  <script src="{{ asset('web-asset') }}/js/jquery.counterup.min.js"></script>
  <script src="{{ asset('web-asset') }}/js/jquery.waypoints.js"></script>
  @endpush
@endsection
