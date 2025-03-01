<x-app>

  <!-- ============== Start About section ========== -->
  <div class="about my-4 py-4" id="about">
    <div class="container mt-5 pt-5">
      <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">{{ __('messages.about') }}</h1>
      <div class="row g-4" data-aos="fade-up" data-aos-delay="150">
        <div class="col-lg-6 col-12">
          <h2 class="my-2 col-10">We Deal With The Aspects Of Professional IT Services</h2>
          <p class="my-4 col-10">In today's fast-paced world, technology is constantly evolving, and keeping up with
            these changes can be challenging. That's where we come in. Our team of expert technicians and engineers stay
            ahead of the curve.</p>
          <p class="my-4 col-10">In today's fast-paced world, technology is constantly evolving, and keeping up with
            these changes can be challenging. That's where we come in. Our team of expert technicians and engineers stay
            ahead of the curve.</p>
          
        </div>
        <div class="col-lg-6 col-12">
            @foreach($aboutSection as $about)
          <div class="feature my-2" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-title align-items-center d-flex gap-2">
              <i class="bi bi-{{ $about->icon ? $about->icon : 'cpu-fill' }}"></i>
              <h4 class="sub-title mx-2">{{ $about->title }}</h4>
            </div>
            <p class="my-3">
                {{ $about->desc }}
            </p>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
  <!-- ============== End About section ========== -->



</x-app>
