<x-app>
    

 <!-- ============== Start contact section ========== -->
 <section class="container contact py-5" id="contact">
    <div class="row align-items-center justify-content-center my-5">
        <div class="col-12 col-lg-6 gy-3 d-flex flex-column justify-content-end align-items-end">
            <h1 class="title col-12" data-aos="fade-right" data-aos-delay="100">
                {{ __('contact us if you have any questions') }}
            </h1>
            <p class="col-11" data-aos="fade-right" data-aos-delay="150">
                {{ __('we strive to provide the best customized technological solutions to support your business success. we combine creativity and expertise to deliver unique solutions that effectively meet your needs') }}
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
                            <input placeholder="{{ __('name') }}" type="text" id="name" name="name" required
                                class="text-input">
                        </div>
                        <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="150">                            
                            <input placeholder="{{ __('subject') }}" type="text" id="subject" name="subject" required
                                class="text-input">
                        </div>
                    </div>
                </div>
                <div class="my-4" data-aos="fade-up" data-aos-delay="200">                    
                    <input type="email" placeholder="{{ __('email') }}" id="email" name="email" required
                        class="text-input">
                </div>
                <div class="my-4" data-aos="fade-up" data-aos-delay="250">                    
                    <textarea id="message" placeholder="{{ __('message') }}" name="message" required cols="30" rows="10"
                        class="text-input"></textarea>
                </div>
                <button type="submit" value="Submit" class="btn" data-aos="fade-up"
                    data-aos-delay="300">{{ __('send') }}</button>
            </form>
        </div>
    </div>
</section>
  <!-- ============== end contact section ========== -->

</x-app>
