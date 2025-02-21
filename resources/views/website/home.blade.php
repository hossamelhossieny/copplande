
    @extends('layouts.web-app')

    @section('content')
    <!-- ============== Start Hero section ========== -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-text py-4">
                <div class="row g-4">
                    <div class="col-lg-7 col-12 d-flex flex-column justify-content-end align-items-end"
                        data-aos="fade-right" data-aos-delay="100">
                        <p>نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة</p>
                        <div class="icons d-flex" data-aos="fade-up" data-aos-delay="150">
                            <div class="icon">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                            </div>
                            <div class="icon">
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                            <div class="icon">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <h1 class="title" data-aos="fade-left" data-aos-delay="100">اجعل حياتك أسهل بمساعدة <span
                                class="unique-text">كوبلاند</span></h1>
                    </div>
                </div>
            </div>
            <div class="hero-images mt-4">
                <div class="row g-4">
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
            <div class="hero-numbers counter-up row my-4 py-5 g-2">
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-right" data-aos-delay="150">
                    <div class="box">
                        <h2 class="counter">08</h2>
                        <h6>{{ __('years of experience') }}</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <h2 class="counter">+15</h2>
                        <h6>{{ __('completed projects') }}</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-left" data-aos-delay="150">
                    <div class="box">
                        <h2 class="counter">+65</h6>
                        <h6>{{ __('happy clients') }}</h6>
                    </div>
                </div>
            </div>
    </section>
    <!-- ============== End Hero section ========== -->

    <!-- ============== Start services section ========== -->
    <div class="services my-4 py-4">
        <div class="container">
            <h1 class="title mb-2 col-lg-5 col-12 w-100" data-aos="fade-up">ماذا نقدم لعملاؤنا ؟
            </h1>

            @foreach ($services as $key=>$service)
            @if($key % 2 == 0)
                <div class="row g-4 align-items-center justify-content-center py-4 ">
                    <div class="col-lg-6 col-12 d-flex flex-column align-items-end justify-content-end">
                        <h1 class="service-title my-4" data-aos="fade-up" data-aos-delay="150">{{ $service['title_'.app()->getLocale()] }}</h1>
                        <p class="col-11" data-aos="fade-up" data-aos-delay="200">{{ $service['desc_'.app()->getLocale()] }}</p>
                        <a href="{{ route('one.service',$service['id']) }}" class="btn my-2" data-aos="fade-up" data-aos-delay="250"><i class="bi bi-arrow-left"></i> {{ __('more') }}</a>
                    </div>
                    <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset($service->image) }}" class="img-fluid" alt="{{ $service['desc_'.app()->getLocale()] }}" title="{{ $service['desc_'.app()->getLocale()] }}">
                    </div>
                </div>
            @else
            <div class="row g-4 align-items-center justify-content-center py-4 ">
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset($service->image) }}" class="img-fluid" alt="{{ $service['desc_'.app()->getLocale()] }}" title="{{ $service['desc_'.app()->getLocale()] }}">
                </div>
                <div class="col-lg-6 col-12 d-flex flex-column align-items-end justify-content-end">
                    <h1 class="service-title my-4" data-aos="fade-up" data-aos-delay="150">{{ $service['title_'.app()->getLocale()] }}</h1>
                    <p class="col-11" data-aos="fade-up" data-aos-delay="200">{{ $service['desc_'.app()->getLocale()] }}</p>
                    <a href="{{ route('one.service',$service['id']) }}" class="btn my-2" data-aos="fade-up" data-aos-delay="250"><i class="bi bi-arrow-left"></i> {{ __('more') }}</a>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
    <!-- ============== End services section ========== -->

    <!-- ============== Start About section ========== -->
    <div class="about my-4 py-4" id="about">
        <div class="container">
            <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">من نحن</h1>
            <div class="row g-4" data-aos="fade-up" data-aos-delay="150">
    
                <div class="col-lg-6 col-12">
                    <div class="feature my-2" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-title align-items-end justify-content-end d-flex gap-2 w-100">
                            <h4 class="sub-title mx-2">{{ $aboutSection[2]['title_'.app()->getLocale()] }}</h4>
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <p class="my-3">{{ $aboutSection[2]['description_'.app()->getLocale()] }}</p>
                    </div>
                    <div class="feature my-2" data-aos="fade-up" data-aos-delay="250">
                        <div class="feature-title align-items-end justify-content-end d-flex gap-2 w-100">
                            <h4 class="sub-title mx-2">{{ $aboutSection[3]['title_'.app()->getLocale()] }}</h4>
                            <i class="bi bi-compass-fill"></i>
                        </div>
                        <p class="my-3">{{ $aboutSection[3]['description_'.app()->getLocale()] }}</p>
                    </div>
                    <div class="feature my-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-title align-items-end justify-content-end d-flex gap-2 w-100">
                            <h4 class="sub-title mx-2">{{ $aboutSection[4]['title_'.app()->getLocale()] }}</h4>
                            <i class="bi bi-diagram-3-fill"></i>
                        </div>
                        <p class="my-3">{{ $aboutSection[4]['description_'.app()->getLocale()] }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-flex flex-column justify-content-end align-items-end">
                    <h2 class="my-2 col-10">{{ $aboutSection[0]['title_'.app()->getLocale()] }}</h2>
                    <p class="my-4 col-10">{{ $aboutSection[0]['description_'.app()->getLocale()] }}</p>
                    <p class="my-4 col-10">{{ $aboutSection[1]['description_'.app()->getLocale()] }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ============== End About section ========== -->


    <!-- ============== Start portfolio section ========== -->
    <div class="portfolio py-4 my-4">
        <div class="container">
            <h1 class="title col-lg-5 col-12 mb-4 w-100" data-aos="fade-up" data-aos-delay="100">معرضنا</h1>
            <div class="row gx-4 gy-4">
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ asset('web-asset/images/portfolio/p (1).png') }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="single-work.html">موقع تجاري</a></h2>
                        <p class="m-3">تطوير مواقع</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="200">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ asset('web-asset/images/portfolio/p (1).jpeg') }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="single-work.html">موقع مطور الويب</a></h2>
                        <p class="m-3">تصميم واجهة المستخدم لصفحة هبوط</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="100">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ asset('web-asset/images/portfolio/p (2).jpeg') }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="single-work.html">موقع مطور الويب</a></h2>
                        <p class="m-3">تصميم واجهة المستخدم لصفحة هبوط</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="150">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ asset('web-asset/images/portfolio/p (2).png') }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="single-work.html">موقع تجاري</a></h2>
                        <p class="m-3">تطوير مواقع</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============== End portfolio section ========== -->

    <!-- ============== Start testimonials section ========== -->
    <section class="container testimonials py-4 my-4">
        <div class="heading d-flex gap-4">
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">أراء العملاء</h1>
        </div>
        <div class="row my-2 g-4">
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
                <div class="bg-box d-flex flex-column justify-content-end align-items-end p-4">
                    <div class="d-flex align-items-center my-2">
                        <div class="mx-4">
                            <h3>احمد الرامي</h3>
                            <h6>مطور مواقع ويب</h6>
                        </div>
                        <div><img src="{{ asset('web-asset/images/testimonials/testimonials-1.jpg') }}" alt="testimonial"></div>
                    </div>
                    <p class="my-4">
                        لقد عملت مع شركة تكنولوجيا المعلومات هذه منذ أكثر من عام ويجب أن أقول إن خدماتها ببساطة
                        استثنائية. إنهم سريعون في الرد على أي مشكلة ويقدمون دائمًا حلولاً فعالة.
                    </p>
                    <div class="icons d-flex flex-row gap-2 my-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="150">
                <div class="bg-box d-flex flex-column justify-content-end align-items-end p-4">
                    <div class="d-flex align-items-center my-2">
                        <div class="mx-4">
                            <h3>محمد امين</h3>
                            <h6>صاحب عمل</h6>
                        </div>
                        <div><img src="{{ asset('web-asset/images/testimonials/testimonials-2.jpg') }}" alt="testimonial"></div>
                    </div>
                    <p class="my-4">
                        لقد عملت مع شركة تكنولوجيا المعلومات هذه منذ أكثر من عام ويجب أن أقول إن خدماتها ببساطة
                        استثنائية. إنهم سريعون في الرد على أي مشكلة ويقدمون دائمًا حلولاً فعالة.
                    </p>
                    <div class="icons d-flex flex-row gap-2 my-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="250">
                <div class="bg-box d-flex flex-column justify-content-end align-items-end p-4">
                    <div class="d-flex align-items-center my-2">
                        <div class="mx-4">
                            <h3>ابراهيم علي</h3>
                            <h6>مطور مواقع ويب</h6>
                        </div>
                        <div><img src="{{ asset('web-asset/images/testimonials/testimonials-3.jpg') }}" alt="testimonial"></div>
                    </div>
                    <p class="my-4">
                        لقد عملت مع شركة تكنولوجيا المعلومات هذه منذ أكثر من عام ويجب أن أقول إن خدماتها ببساطة
                        استثنائية. إنهم سريعون في الرد على أي مشكلة ويقدمون دائمًا حلولاً فعالة.
                    </p>
                    <div class="icons d-flex flex-row gap-2 my-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="250">
                <div class="bg-box d-flex flex-column justify-content-end align-items-end p-4">
                    <div class="d-flex align-items-center my-2">
                        <div class="mx-4">
                            <h3>احمد الرامي</h3>
                            <h6>مطور مواقع ويب</h6>
                        </div>
                        <div><img src="{{ asset('web-asset/images/testimonials/testimonials-4.jpg') }}" alt="testimonial"></div>
                    </div>
                    <p class="my-4">
                        لقد عملت مع شركة تكنولوجيا المعلومات هذه منذ أكثر من عام ويجب أن أقول إن خدماتها ببساطة
                        استثنائية. إنهم سريعون في الرد على أي مشكلة ويقدمون دائمًا حلولاً فعالة.
                    </p>
                    <div class="icons d-flex flex-row gap-2 my-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End testimonials section ========== -->


    <!-- ======= start team section ======= -->
    <div class="team container py-5 my-5">
        <h1 class="title col-12 my-3" data-aos="fade-up" data-aos-delay="100">
            فريقنا
        </h1>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-right" data-aos-delay="200">
                <div class="bg-box p-3">
                    <div class="d-flex flex-column text-center justify-content-center align-items-center">
                        <div class="img"><img src="{{ asset('web-asset/images/testimonials/testimonials-1.jpg') }}" alt="team"></div>
                        <div class="pt-3 d-flex flex-column justify-content-center align-items-center">
                            <h3 class="sub-title">احمد الرامي</h3>
                            <p>مطور مواقع ويب</p>
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
                            <h3 class="sub-title">محمد امين</h3>
                            <p>المؤسس</p>
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
                            <h3 class="sub-title">ابراهيم توفيق</h3>
                            <p>مدير المبيعات</p>
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


    <!-- ======= start FAQ section ======= -->
    <div class="faq container py-5">
        <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
            أسئلة مكررة
        </h1>
        <div class="row g-4">
            <div class="col-lg-6 col-12">
                <div class="col-12 my-4" data-aos="fade-right" data-aos-delay="150">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon1')" href="#answer1"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon1"></i>
                                    هل هذه الخدمة متوفرة
                                    في
                                    بلدي؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer1" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-right" data-aos-delay="250">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon2')" href="#answer2"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon2"></i>
                                    ما هي خدمات الحلول التقنية التي تقدمونها؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer2" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-right" data-aos-delay="350">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon3')" href="#answer3"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon3"></i>
                                    ما هي الخدمات التي تقدمها شركتك في مجال حلول تكنولوجيا المعلومات؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer3" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-right" data-aos-delay="450">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon4')" href="#answer4"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon4"></i>
                                    كيف يمكنني البدء في الاستفادة من حلول تكنولوجيا المعلومات التي تقدمونها؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer4" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="col-12 my-4" data-aos="fade-left" data-aos-delay="150">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon5')" href="#answer5"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon5"></i>
                                    هل تقدمون حلول السحابة؟ وما هي الفوائد التي يمكن أن توفرها لعملي؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer5" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-left" data-aos-delay="250">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon6')" href="#answer6"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon6"></i>
                                    هل لديكم خدمات أمان سيبراني لحماية بيانات عملي؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer6" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-left" data-aos-delay="350">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon7')" href="#answer7"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon7"></i>
                                    ما هي خبرة فريقك في مجال تكنولوجيا المعلومات؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer7" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-left" data-aos-delay="450">
                    <div class="bg-box d-flex flex-column align-items-end justify-content-end p-4 my-2">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon8')" href="#answer8"
                                role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon8"></i>
                                    كيف يمكنني البدء في الاستفادة من حلول تكنولوجيا المعلومات التي تقدمونها؟
                                </h4>
                            </a>
                        </div>
                        <p id="answer8" class="collapse">
                            نقدم خدمات متنوعة تشمل تطوير تطبيقات الويب والهاتف الذكي، تصميم وتحسين مواقع الويب، حلول
                            الحماية والأمان، تطوير البرمجيات والتخصيص، والاستشارات التكنولوجية. نعمل على مساعدتك في
                            تحقيق أهدافك العملية من خلال استخدام التكنولوجيا الحديثة بأفضل الطرق الممكنة.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============== end FAQ section ========== -->

    <!-- ============== Start contact section ========== -->
    <section class="container contact py-5" id="contact">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 gy-3 d-flex flex-column justify-content-end align-items-end">
                <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">
                    اتصل بنا إذا كانت لديك أية أسئلة
                </h1>
                <p class="col-11" data-aos="fade-right" data-aos-delay="150">
                    نسعى لتقديم أفضل الحلول التكنولوجية المخصصة لدعم نجاح عملك. نجمع بين الإبداع والخبرة لتقديم حلول
                    فريدة تلبي احتياجاتك بشكل فعال
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
                                <h6><span class="unique-text">*</span>الاسم</h6>
                                <input placeholder="الاسم" type="text" id="name" name="name" required
                                    class="text-input">
                            </div>
                            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="150">
                                <h6><span class="unique-text">*</span>الموضوع</h6>
                                <input placeholder="الموضوع" type="text" id="subject" name="subject" required
                                    class="text-input">
                            </div>
                        </div>
                    </div>
                    <div class="my-4" data-aos="fade-up" data-aos-delay="200">
                        <h6><span class="unique-text">*</span>بريد إلكتروني</h6>
                        <input type="email" placeholder="بريد إلكتروني" id="email" name="email" required
                            class="text-input">
                    </div>
                    <div class="my-4" data-aos="fade-up" data-aos-delay="250">
                        <h6><span class="unique-text">*</span>الرسالة</h6>
                        <textarea id="message" placeholder="الرسالة" name="message" required cols="30" rows="10"
                            class="text-input"></textarea>
                    </div>
                    <button type="submit" value="Submit" class="btn" data-aos="fade-up"
                        data-aos-delay="300">ارسل</button>
                </form>
            </div>
        </div>
    </section>
    <!-- ============== end contact section ========== -->

  @endsection
