<x-app>
    <section class="container py-5" id="forgot-password">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-lg-6 contact">
                <h1 class="title mb-4" data-aos="fade-right" data-aos-delay="100">{{ __('messages.forgot_password') }}</h1>
                <p class="mb-4" data-aos="fade-right" data-aos-delay="150">
                    {{ __('messages.forgot_password_text') }}
                </p>
                <form method="POST" action="{{ route('password.email', ['locale' => app()->getLocale()]) }}" class="main-form">
                    @csrf
                    <div class="col-12">
                        <div class="mb-3" data-aos="fade-up" data-aos-delay="200">
                            <input placeholder="{{ __('messages.email') }}" 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="text-input @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-4" data-aos="fade-up" data-aos-delay="250">
                            <button type="submit" class="btn">{{ __('messages.send_reset_link') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app>
