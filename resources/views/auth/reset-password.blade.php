<x-app>
    <section class="container py-5" id="reset-password">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-lg-6 contact">
                <h1 class="title mb-4" data-aos="fade-right" data-aos-delay="100">{{ __('messages.reset_password') }}</h1>
                <form method="POST" action="{{ route('password.store', ['locale' => app()->getLocale()]) }}" class="main-form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="col-12">
                        <div class="mb-3" data-aos="fade-up" data-aos-delay="150">
                            <input placeholder="{{ __('messages.email') }}" 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="text-input @error('email') is-invalid @enderror"
                                value="{{ old('email', $request->email) }}"
                                required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3" data-aos="fade-up" data-aos-delay="200">
                            <input placeholder="{{ __('messages.new_password') }}" 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="text-input @error('password') is-invalid @enderror"
                                required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3" data-aos="fade-up" data-aos-delay="250">
                            <input placeholder="{{ __('messages.confirm_password') }}" 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                class="text-input"
                                required>
                        </div>

                        <div class="d-flex justify-content-end mt-4" data-aos="fade-up" data-aos-delay="300">
                            <button type="submit" class="btn">{{ __('messages.reset_password') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app>
