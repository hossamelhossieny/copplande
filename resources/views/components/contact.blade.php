<section class="container contact py-5" id="contact">
    <div class="row align-items-center justify-content-center my-5">
        <div class="col-12 col-lg-6 gy-3 d-flex flex-column justify-content-start align-items-start">
            <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">
                {{ __('messages.contact_title') }}
            </h1>
            <p class="col-11" data-aos="fade-right" data-aos-delay="150">
                {{ __('messages.contact_description') }}
            </p>
            <div class="d-flex gap-3 align-items-center justify-content-end my-3" data-aos="fade-right"
                data-aos-delay="200">
                <i class="bi bi-envelope-fill"></i>
                <h5><a href="mailto:{{ $siteSettings->contact_email }}">{{ $siteSettings->contact_email }}</a></h5> 
            </div>
            <div class="d-flex gap-3 align-items-center my-3" data-aos="fade-right" data-aos-delay="250">                    
                <i class="bi bi-telephone-fill"></i>
                <h5><a href="tel:{{ $siteSettings->contact_phone }}">{{ $siteSettings->contact_phone  }}</a></h5>
            </div>
            <div class="d-flex gap-3 align-items-center my-3" data-aos="fade-right" data-aos-delay="300">
                <i class="bi bi-map-fill"></i>
                <h5>{{ $siteSettings->contact_address }}</h5>                    
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <form action="{{ route('contact.submit', ['locale' => app()->getLocale()]) }}" method="POST" class="main-form">
                @csrf             
                <div class="col-12">
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">                            
                            <input placeholder="{{ __('messages.name') }}" type="text" id="name" name="name" required
                                class="text-input">
                        </div>
                        <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="150">                            
                            <input placeholder="{{ __('messages.subject') }}" type="text" id="subject" name="subject" required
                                class="text-input">
                        </div>
                    </div>
                </div>
                <div class="my-4" data-aos="fade-up" data-aos-delay="200">                    
                    <input type="email" placeholder="{{ __('messages.email') }}" id="email" name="email" required
                        class="text-input">
                </div>
                <div class="my-4" data-aos="fade-up" data-aos-delay="250">                    
                    <textarea id="message" placeholder="{{ __('messages.message') }}" name="message" required cols="30" rows="10"
                        class="text-input"></textarea>
                </div>
                <button type="submit" class="btn" data-aos="fade-up" data-aos-delay="300">
                    {{ __('messages.send') }}
                </button>

                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
</section>