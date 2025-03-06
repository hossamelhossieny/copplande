<x-app>
    <section class="container py-5 contact" id="profile">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-lg-8">
                <h1 class="title mb-4" data-aos="fade-right" data-aos-delay="100">{{ __('messages.profile') }}</h1>

                <!-- Profile Information -->
                <div class="card mb-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="card-body">
                        <h4 class="card-title mb-4">{{ __('messages.profile_information') }}</h4>
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <!-- Update Password -->
                <div class="card mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <h4 class="card-title mb-4">{{ __('messages.update_password') }}</h4>
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <!-- Delete Account -->
                <div class="card" data-aos="fade-up" data-aos-delay="250">
                    <div class="card-body">
                        <h4 class="card-title mb-4 text-danger">{{ __('messages.delete_account') }}</h4>
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
