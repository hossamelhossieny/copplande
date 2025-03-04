<!-- ======= start team section ======= -->

<div class="team container py-5 my-5">
    @if(!empty($team) && count($team) > 0)
    <h1 class="title col-12 my-3" data-aos="fade-up" data-aos-delay="100">
        {{ __('messages.ourteam') }} 
    </h1>
    <div class="row g-4">
        @foreach($team as $team)
        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-right" data-aos-delay="200">
            <div class="bg-box p-3">
                <div class="d-flex flex-column text-center justify-content-center align-items-center">
                    <div class="img"><img src="{{ $team->getMedia()->first()->getUrl() }}" alt="team"></div>
                    <div class="pt-3 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="sub-title">{{ $team->name }}</h3>
                        <p>{{ $team->position }}</p>
                        {{-- <div class="d-flex gap-3 my-2">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter "></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>   
    @endif
</div>

<!-- ======= end team section ======= -->