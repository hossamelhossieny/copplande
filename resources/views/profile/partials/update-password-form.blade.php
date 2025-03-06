<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update', ['locale' => app()->getLocale()]) }}" class="main-form">
        @csrf
        @method('put')

        <div class="mb-3">
            <input placeholder="{{ __('messages.current_password') }}" 
                type="password" 
                id="current_password" 
                name="current_password" 
                class="text-input @error('current_password') is-invalid @enderror"
                required>
            @error('current_password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
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

        <div class="mb-3">
            <input placeholder="{{ __('messages.confirm_password') }}" 
                type="password" 
                id="password_confirmation" 
                name="password_confirmation" 
                class="text-input"
                required>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn">{{ __('messages.save') }}</button>
        </div>
    </form>
</section>
