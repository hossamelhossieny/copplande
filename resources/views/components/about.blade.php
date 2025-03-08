<div class="about" id="about">
    <div class="container mt-5 pt-5">
      <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">{{ __('messages.about') }}</h1>
      <div class="row g-4" data-aos="fade-up" data-aos-delay="150">
        @if(!empty($aboutSection) && count($aboutSection) > 0)
        <div class="col-lg-6 col-12">
          <h2 class="my-2 col-10">{{ $aboutSection[0]->title }}</h2>
          <p class="my-4 col-10">{{ $aboutSection[0]->desc }}</p>
          
        </div>
        @endif
        @if(!empty($aboutSection) && count($aboutSection) > 1)
        <div class="col-lg-6 col-12">
            @for($i = 1; $i < count($aboutSection); $i++)
          <div class="feature my-2" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-title align-items-center d-flex gap-2">
              <i class="bi bi-{{ $aboutSection[$i]->icon ? $aboutSection[$i]->icon : 'cpu-fill' }}"></i>
              <h4 class="sub-title mx-2">{{ $aboutSection[$i]->title }}</h4>
            </div>
            <p class="my-3">
                {{ $aboutSection[$i]->desc }}
            </p>
          </div>
          @endfor
          
        </div>
        @endif
      </div>
    </div>
  </div>