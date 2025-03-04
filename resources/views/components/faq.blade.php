<div class="faq container py-5">
    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
      {{ __('messages.fa') }} <span class="unique-text">{{ __('messages.q') }}</span>
    </h1>
    <div class="row g-4">
      
        @foreach($faqs as $faq)
        <div class="col-6 my-4" data-aos="fade-right" data-aos-delay="150">
          <div class="bg-box p-4 my-2">
            <div class="d-flex w-100 justify-content-between">
              <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon1')" href="#answer1" role="button"
                aria-expanded="false">
                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                 {{ $faq->question }}
                  <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon1"></i>
                </h4>
              </a>
            </div>
            <p id="answer1" class="collapse">
              {{ $faq->answer }}
            </p>
          </div>
        </div>
        @endforeach
      
    </div>
  </div>