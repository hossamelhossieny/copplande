<x-app>
    <section class="container py-5" id="verify-email">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-lg-6 contact">
                <h1 class="title mb-4" data-aos="fade-right" data-aos-delay="100">{{ __('messages.verify_email') }}</h1>
                
                <div class="mb-4" data-aos="fade-right" data-aos-delay="150">
                    {{ __('messages.verify_email_text') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success mb-4" data-aos="fade-up" data-aos-delay="200">
                        {{ __('messages.verification_link_sent') }}
                    </div>
                @endif

                <div class="d-flex justify-content-between mt-4">
                    <form method="POST" action="{{ route('verification.send', ['locale' => app()->getLocale()]) }}">
                        @csrf
                        <button type="submit" class="btn" data-aos="fade-up" data-aos-delay="250">
                            {{ __('messages.resend_verification_email') }}
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout', ['locale' => app()->getLocale()]) }}">
                        @csrf
                        <button type="submit" class="btn btn-outline" data-aos="fade-up" data-aos-delay="300">
                            {{ __('messages.logout') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app>
