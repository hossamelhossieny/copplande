<x-app>

  <!-- ============== Start Hero section ========== -->
  <section class="hero" id="hero">
    <div class="container">
      {{-- <div class="hero-text py-4">
        <div class="row g-4">
          <div class="col-lg-5 col-12">
            <h1 class="title" data-aos="fade-right" data-aos-delay="100">Make your life easier with help from <span
                class="unique-text">Itran</span></h1>
          </div>
          <div class="col-lg-7 col-12" data-aos="fade-left" data-aos-delay="100">
            <p>In today's fast-paced world, technology is constantly evolving, and keeping up
              with these changes can be challenging. That's where we come in. Our team of expert
              technicians and engineers stay ahead of the curve, so you don't have to.</p>
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
        </div>
      </div> --}}
      <div class="hero-images mt-4">
        <div class="row g-4">
          <div class="col-lg-3 col-12 hero-img" data-aos="fade-right" data-aos-delay="150">
            <img src="{{asset('web-asset/images')}}/hero/1.jpg" alt="hero-image">
          </div>
          <div class="col-lg-6 col-12 hero-img" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('web-asset/images')}}/hero/2.jpg" alt="hero-image">
          </div>
          <div class="col-lg-3 col-12 hero-img" data-aos="fade-left" data-aos-delay="150">
            <img src="{{asset('web-asset/images')}}/hero/3.jpg" alt="hero-image">
          </div>
        </div>
      </div>
      @if(!empty($counters) && count($counters) > 0)
      <div class="hero-numbers counter-up row my-4 py-5 g-2">
        @foreach($counters as $counter)
        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-right" data-aos-delay="150">
          <div class="box">
            <h2 class="counter">{{ $counter->count }}</h2>
            <h6>{{ $counter->label }}</h6>
          </div>
        </div>
        @endforeach    
      </div>
      @endif
  </section>
  <!-- ============== End Hero section ========== -->

  <!-- ============== Start services section ========== -->
  @if(!empty($services) && count($services) > 0)
    <x-services :services="$services"></x-services>
  @endif
  <!-- ============== End services section ========== -->

  <!-- ============== Start About section ========== -->
  @if(!empty($aboutSection) && count($aboutSection) > 0)
    <x-about :aboutSection="$aboutSection"></x-about>
  @endif
  <!-- ============== End About section ========== -->


  <!-- ============== Start portfolio section ========== -->
 @if(!empty($projects) && count($projects) > 0)
    <x-projects :projects="$projects"></x-projects>
 @endif
  <!-- ============== End portfolio section ========== -->



  <!-- ======= start team section ======= -->
  @if(!empty($team) && count($team) > 0)
  <div class="team container py-5 my-5">
    <x-team :team="$team"></x-team>
  </div>
  @endif
  <!-- ======= end team section ======= -->


  <!-- ======= start FAQ section ======= -->
  @if(!empty($faqs) && count($faqs) > 0)
    <x-faq :faqs="$faqs"></x-faq>
  @endif
  <!-- ============== end FAQ section ========== -->


  <!-- ============== Start contact section ========== -->
  <x-contact></x-contact>
  <!-- ============== end contact section ========== -->

</x-app>