<div class="services my-4 py-4">
    <div class="container mt-5 pt-5">
      <h1 class="title col-lg-5 col-12 w-100" data-aos="fade-up" data-aos-delay="100">{{ __('messages.services') }} </h1>
      <div class="row my-2 gx-4 gy-4">
          @foreach ($services as $service)            
          <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
              <div class="bg-box d-flex flex-column justify-content-start align-items-start p-4">
                  <img src="{{ asset('storage/' .$service['image']) }}" alt="blog">
                  <h2 class="blog-title my-4">{{ $service['title_'.app()->getLocale()] }}</h2>
                  <a href="{{ route('one.service',$service->id) }}" class="learn-more my-2"><i class="bi @if(app()->getLocale() == 'ar') bi-arrow-left @else bi-arrow-right @endif"></i> {{ __('messages.details') }}</a>
              </div>
          </div>           
          @endforeach
      </div>
    </div>
  </div>