<x-app>
    <section class="container py-5" id="login">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-lg-6 contact">
                <h1 class="title mb-4" data-aos="fade-right" data-aos-delay="100">{{ __('messages.login') }}</h1>
                <form method="POST" action="{{ route('login', ['locale' => app()->getLocale()]) }}" class="main-form">
                    @csrf
                    <div class="col-12">
                        <div class="mb-3" data-aos="fade-up" data-aos-delay="150">
                            <input placeholder="{{ __('messages.email') }}" 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="text-input @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                required
                                autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

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

                        <div class="d-flex justify-content-between align-items-center mt-4" data-aos="fade-up" data-aos-delay="300">
                            <div>
                                <a href="{{ route('register', ['locale' => app()->getLocale()]) }}" class="text-decoration-none">
                                    {{ __('messages.need_account') }}
                                </a>
                                <br>
                                <a href="{{ route('password.request', ['locale' => app()->getLocale()]) }}" class="text-decoration-none">
                                    {{ __('messages.forgot_password') }}
                                </a>
                            </div>
                            <button type="submit" class="btn">{{ __('messages.login') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app>
