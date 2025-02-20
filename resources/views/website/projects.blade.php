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

  <!-- ============== Start portfolio section ========== -->
  <div class="portfolio py-4 my-4">
    <div class="container">
        <h1 class="title col-lg-5 col-12 mb-4 w-100" data-aos="fade-up" data-aos-delay="100">معرضنا</h1>

        <div class="row gx-4 gy-4">
            @foreach ($projects as $key=>$project)
                @if($key % 2 == 0)
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ asset($project['image']) }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="{{ route('one.project',$project['id']) }}">موقع تجاري</a></h2>
                        <p class="m-3">تطوير مواقع</p>
                    </div>
                </div>
                @else
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="200">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ asset($project['image']) }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="{{ route('one.project',$project['id']) }}">موقع مطور الويب</a></h2>
                        <p class="m-3">تصميم واجهة المستخدم لصفحة هبوط</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
  <!-- ============== End portfolio section ========== -->

@endsection
