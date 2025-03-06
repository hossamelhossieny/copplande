<x-app>
    <section class="container py-5" id="confirm-password">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-lg-6 contact">
                <h1 class="title mb-4" data-aos="fade-right" data-aos-delay="100">{{ __('messages.confirm_password') }}</h1>
                <p class="mb-4" data-aos="fade-right" data-aos-delay="150">
                    {{ __('messages.secure_area') }}
                </p>
                <form method="POST" action="{{ route('password.confirm', ['locale' => app()->getLocale()]) }}" class="main-form">
                    @csrf
                    <div class="col-12">
                        <div class="mb-3" data-aos="fade-up" data-aos-delay="200">
                            <input placeholder="{{ __('messages.password') }}" 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="text-input @error('password') is-invalid @enderror"
                                required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-4" data-aos="fade-up" data-aos-delay="250">
                            <button type="submit" class="btn">{{ __('messages.confirm') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app>
