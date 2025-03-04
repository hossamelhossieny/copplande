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
                <h5>example@example.com</h5>
            </div>
            <div class="d-flex gap-3 align-items-center my-3" data-aos="fade-right" data-aos-delay="250">                    
                <i class="bi bi-telephone-fill"></i>
                <h5>+123 456 6789</h5>
            </div>
            <div class="d-flex gap-3 align-items-center my-3" data-aos="fade-right" data-aos-delay="300">
                <i class="bi bi-map-fill"></i>
                <h5>A108 Adam Street, New York, NY 535022</h5>                    
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <form action="#" method="POST" class="main-form">
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
            </form>
        </div>
    </div>
</section>