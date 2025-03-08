<x-app>

@section('content')
<section class="blog-single">
    <div class="container my-2 mt-5 pt-5">
      <img src="{{ asset('storage/' .$service['banner']) }}" data-aos="fade-up" data-aos-delay="100" class="my-2" alt="blog-img">
      <h2 class="my-4 brand-color" data-aos="fade-up" data-aos-delay="200">{{ $service['title_'.app()->getLocale()] }}</h2>
      <p class="my-2" data-aos="fade-up" data-aos-delay="250">{{ $service['desc_'.app()->getLocale()] }}</p>
    </div>
  </section>

  {{-- <div class="container pt-4 mt-4">
    <h1 class="title mb-2 col-lg-5 col-12 aos-init aos-animate" data-aos="fade-up">what we <span class="unique-text">offer</span></h1>
    @foreach ($service['subServices'] as $key=>$serv)
      @if($key % 2 == 0)
      <div class="row g-4 align-items-center justify-content-center py-4 ">
        <div class="col-lg-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ asset($serv['image']) }}" class="img-fluid" alt="{{ $serv['title_'.app()->getLocale()] }}">
        </div>
        <div class="col-lg-6 col-12">
          <h1 class="service-title my-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">{{ $serv['title_'.app()->getLocale()] }}</h1>
          <p class="col-11 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
          <a href="#" class="btn my-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">get started</a>
        </div>
      </div>
      @else
      <div class="row g-4 align-items-center justify-content-center py-4 ">
        <div class="col-lg-6 col-12">
          <p class="col-11 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
          <p class="col-11 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
          <a href="#" class="btn my-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">get started</a>
        </div>
        <div class="col-lg-6 col-12 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
          <img src="{{ asset($serv['image']) }}" class="img-fluid" alt="{{ $serv['title_'.app()->getLocale()] }}">
        </div>
      </div>
      @endif
    @endforeach
    
    
  </div> --}}

  <div class="services my-4 py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="title mb-2 col-lg-5 col-12" data-aos="fade-up">{{ __('messages.what_we_offer') }}</h1>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-aos="fade-up">
                {{ __('messages.inquiry') }}
            </button>
        </div>

        <!-- Inquiry Modal -->
        <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content contact">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inquiryModalLabel">{{ __('messages.inquiries') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @auth('customer')
                            <ul class="nav nav-tabs mb-3" id="inquiryTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="my-inquiries-tab" data-bs-toggle="tab" 
                                        data-bs-target="#my-inquiries" type="button" role="tab">
                                        {{ __('messages.my_inquiries') }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="new-inquiry-tab" data-bs-toggle="tab" 
                                        data-bs-target="#new-inquiry" type="button" role="tab">
                                        {{ __('messages.new_inquiry') }}
                                    </button>
                                </li>
                            </ul>
                            
                            <div class="tab-content" id="inquiryTabsContent">
                                <!-- My Inquiries Tab -->
                                <div class="tab-pane fade show active" id="my-inquiries" role="tabpanel">
                                    <div class="list-group">
                                        @forelse($userInquiries as $inquiry)
                                            <div class="list-group-item list-group-item-action mb-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="mb-1">{{ $inquiry->created_at->format('d M Y') }}</h6>
                                                    <small>{{ $inquiry->status }}</small>
                                                </div>
                                                <p class="mb-1 inquiry-title">{{ $inquiry->inquiry }}</p>
                                                
                                                <!-- Replies Section -->
                                                <div class="replies mt-3">
                                                    @foreach($inquiry->replies as $reply)
                                                        <div class="reply mb-2 p-2 {{ $reply->from === 'admin' ? 'bg-light text-end' : 'bg-primary-subtle' }}">
                                                            <small class="d-block text-muted">{{ $reply->created_at->format('d M Y H:i') }}</small>
                                                            {{ $reply->reply }}
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <!-- Reply Form -->
                                                <form action="{{ url(app()->getLocale().'/inquiry/'.$inquiry->id.'/reply')}}" 
                                                    method="POST" class="mt-3">
                                                    @csrf
                                                    <div class="input-group">
                                                        <input type="text" name="reply" class="form-control" 
                                                            placeholder="{{ __('messages.write_reply') }}">
                                                        <button class="btn" type="submit">
                                                            {{ __('messages.reply') }}
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        @empty
                                            <p class="text-center">{{ __('messages.no_inquiries') }}</p>
                                        @endforelse
                                    </div>
                                </div>

                                <!-- New Inquiry Tab -->
                                <div class="tab-pane fade" id="new-inquiry" role="tabpanel">
                                    <form action="{{ route('inquiry.store', ['locale' => app()->getLocale()]) }}" method="POST" class="main-form">
                                        @csrf
                                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                                        <div class="mb-3">
                                            <textarea 
                                                name="inquiry" 
                                                class="text-input @error('inquiry') is-invalid @enderror" 
                                                rows="5" 
                                                placeholder="{{ __('messages.inquiry_message') }}"
                                                required
                                            ></textarea>
                                            @error('inquiry')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn">{{ __('messages.send') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <p>{{ __('messages.login_required') }}</p>
                                <a href="{{ route('login', ['locale' => app()->getLocale()]) }}" class="btn">
                                    {{ __('messages.login') }}
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        @foreach ($service['subServices'] as $key=>$serv)
        @if($key % 2 != 0)
            <div class="row g-4 align-items-center justify-content-center py-4 ">
                <div class="col-lg-6 col-12 d-flex flex-column align-items-end justify-content-end">
                    <h1 class="service-title my-4" data-aos="fade-up" data-aos-delay="150">{{ $serv['title_'.app()->getLocale()] }}</h1>
                    <p class="col-11" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
                    <a href="#projects" class="btn my-2" data-aos="fade-up" data-aos-delay="250"><i class="bi bi-arrow-left"></i> {{ __('messages.projects') }}</a>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('storage/' .$serv->image) }}" class="img-fluid" alt="{{ $serv['desc_'.app()->getLocale()] }}" title="{{ $serv['desc_'.app()->getLocale()] }}">
                </div>
            </div>
        @else
        <div class="row g-4 align-items-center justify-content-center py-4 ">
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="100">
                <img src="{{ asset('storage/' .$serv->image) }}" class="img-fluid" alt="{{ $serv['desc_'.app()->getLocale()] }}" title="{{ $serv['desc_'.app()->getLocale()] }}">
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column align-items-end justify-content-end">
                <h1 class="service-title my-4" data-aos="fade-up" data-aos-delay="150">{{ $serv['title_'.app()->getLocale()] }}</h1>
                <p class="col-11" data-aos="fade-up" data-aos-delay="200">{{ $serv['desc_'.app()->getLocale()] }}</p>
                <a href="#projects" class="btn my-2" data-aos="fade-up" data-aos-delay="250"><i class="bi bi-arrow-left"></i> {{ __('messages.projects') }}</a>
            </div>
        </div>
        @endif
        @endforeach

    </div>
</div>



  <div class="container mt-4 py-4 blog" id="projects">
    <h1 class="title col-lg-5 col-12" data-aos="fade-up" data-aos-delay="150">{{ __('messages.projects') }}</span></h1>
    
    <div class="row my-2 gx-4 gy-4">
      @foreach ($service['projects'] as $project)
          <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="150">
            <div class="bg-box p-4">
              <img src="{{ asset($project->getMedia()->first()->getUrl()) }}" alt="{{ $project['title_'.app()->getLocale()] }}" title="{{ $project['title_'.app()->getLocale()] }}" class="img-fluid">
              <h2 class="sub-title m-3 mt-4"><a href="{{ route('one.project',$project['id']) }}">{{ $project['title_'.app()->getLocale()] }}</a></h2>
            </div>
          </div>
      @endforeach
    </div>
  </div>
</x-app>
