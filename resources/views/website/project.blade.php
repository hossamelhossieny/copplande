@extends('layouts.web-app')

@section('content')

<div class="portfolio-single pt-4 mt-4 pb-4 mb-4">
    <div class="container">
        <div class="row justify-content-center align-items-center gx-4 gy-4 pt-4 mt-4">
            <div class="col-lg-7 col-12">
                <h2 class="sub-title my-3" data-aos="fade-up" data-aos-delay="150">about the project</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    {{ $project['desc_'.app()->getLocale()] }}
                </p>
            </div>
            <div class="col-lg-5 col-12">
                <div class="row g-3">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-person-lines-fill portfolio-icon my-3"></i>
                            <h3 class="sub-title">client</h3>
                            <p>{{ $project['client'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-down" data-aos-delay="100">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-list-check portfolio-icon my-3"></i>
                            <h3 class="sub-title">service</h3>
                            <p>{{ $project['service']['title_'.app()->getLocale()] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-calendar2-check-fill portfolio-icon my-3"></i>
                            <h3 class="sub-title">date</h3>
                            <p>{{ $project['delivery_date'] }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                        <div class="d-flex flex-column justify-content-center align-items-center p-1 bg-box">
                            <i class="bi bi-stopwatch-fill portfolio-icon my-3"></i>
                            <h3 class="sub-title">duration</h3>
                            <p>{{ $project['delivery_duration'] }} days</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 mt-4">
            <div class="my-4 py-2">
                <h2 class="title" data-aos="fade-right" data-aos-delay="100">project screenshots</h2>
                <p class="col-lg-8 col-12" data-aos="fade-up" data-aos-delay="150">
                    committed to delivering excellence and driving your business towards
                    unparalleled efficiency and growth. Elevate your technology experience – choose itran for IT
                    solutions that transcend expectations.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="200">
                    <div class="img">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project->name }}">
                    </div>
                </div>
                @foreach($project->images as $key=>$image)
                @if($key % 2 == 0)
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="200">
                    <div class="img">
                        <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $project->name }}">
                    </div>
                </div>
                @else
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="300">
                    <div class="img">
                        <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $project->name }}">
                    </div>
                </div>
                @endif
                @endforeach
                
            </div>
        </div>
    </div>
</div>

@endsection
