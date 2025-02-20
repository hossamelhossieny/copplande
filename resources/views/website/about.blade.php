
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

<div class="about my-4 py-4" id="about">
    <div class="container">
        <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">من نحن</h1>
        <div class="row g-4" data-aos="fade-up" data-aos-delay="150">

            <div class="col-lg-6 col-12">
                <div class="feature my-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-title align-items-end justify-content-end d-flex gap-2 w-100">
                        <h4 class="sub-title mx-2">أحدث التقنيات</h4>
                        <i class="bi bi-cpu-fill"></i>
                    </div>
                    <p class="my-3">
                        نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                        الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                        تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                    </p>
                </div>
                <div class="feature my-2" data-aos="fade-up" data-aos-delay="250">
                    <div class="feature-title align-items-end justify-content-end d-flex gap-2 w-100">
                        <h4 class="sub-title mx-2">حلول فريدة من نوعها</h4>
                        <i class="bi bi-compass-fill"></i>
                    </div>
                    <p class="my-3">
                        نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                        الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                        تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                    </p>
                </div>
                <div class="feature my-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-title align-items-end justify-content-end d-flex gap-2 w-100">
                        <h4 class="sub-title mx-2">استراتيجيات قوية</h4>
                        <i class="bi bi-diagram-3-fill"></i>
                    </div>
                    <p class="my-3">
                        نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                        الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                        تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-end align-items-end">
                <h2 class="my-2 col-10">تفوق في عالم التكنولوجيا شريكك الاستراتيجي في تحقيق النجاح</h2>
                <p class="my-4 col-10">
                    مرحبًا بك في موقعنا الإلكتروني! نحن شركة رائدة في مجال حلول تكنولوجيا المعلومات، نسعى لتقديم
                    أفضل الحلول التكنولوجية المخصصة لدعم نجاح عملك. نجمع بين الإبداع والخبرة لتقديم حلول فريدة تلبي
                    احتياجاتك بشكل فعال وفعّال
                </p>
                <p class="my-4 col-10">
                    نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول الحماية
                    والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في تحقيق أهدافك
                    العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                </p>
                <a href="#" class="btn my-2">اتصل بنا</a>
            </div>
        </div>
    </div>
</div>

@endsection
