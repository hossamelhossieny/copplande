<x-app>
<div class="portfolio-single pt-4 mt-4 pb-4 mb-4">
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center align-items-center gx-4 gy-4 pt-4 mt-4">
            <div class="col-lg-7 col-12">
                <h2 class="title" data-aos="fade-right" data-aos-delay="100">{{ __('messages.about_the_project') }}</h2>
                <h2 class="sub-title my-3" data-aos="fade-up" data-aos-delay="150">{{ $project->title }}</h2>
                
                <p data-aos="fade-up" data-aos-delay="200">
                    {{ $project->desc }}
                </p>
            </div>
            <div class="col-lg-5 col-12">
                <div class="row g-3">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-person-lines-fill portfolio-icon my-3"></i>
                            <h3 class="sub-title">{{ __('messages.client') }}</h3>                            
                            <p>{{ $project->client ? $project->client->name : '' }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-down" data-aos-delay="100">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-list-check portfolio-icon my-3"></i>
                            <h3 class="sub-title">{{ __('messages.service') }}</h3>
                            <p>{{ $project->service ? $project->service->title : '' }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-calendar2-check-fill portfolio-icon my-3"></i>
                            <h3 class="sub-title">{{ __('messages.delivery_date') }}</h3>
                            <p>{{ $project->delivery_date }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-stopwatch-fill portfolio-icon my-3"></i>
                            <h3 class="sub-title">{{ __('messages.delivery_duration') }}</h3>
                            <p>{{ $project->delivery_duration }} {{ __('messages.days') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 mt-4">
            <div class="my-4 py-2">
                <h2 class="title" data-aos="fade-right" data-aos-delay="100">{{ __('messages.screenshots') }}</h2>
            </div>
            <div class="row g-4">
                @foreach($project->getMedia() as $image)
                <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="img">
                        <img src="{{ $image->getUrl() }}" alt="{{ $project->name }}" title="{{ $project->name }}" class="img-fluid">
                    </div>
                </div>
                
                @endforeach
                
            </div>
        </div>
    </div>
</div>

</x-app>
