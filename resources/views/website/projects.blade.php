<x-app>

  <!-- ============== Start portfolio section ========== -->
  <div class="portfolio my-4 py-4" id="protfolio">
    <div class="container mt-5 pt-5">
        <h1 class="title col-lg-5 col-12 mb-4 w-100" data-aos="fade-up" data-aos-delay="100">{{ __('messages.projects') }}</h1>

        <div class="row gx-4 gy-4">
            @foreach ($projects as $project)
            
                @if($loop->index % 2 == 0)
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="150">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ $project->getMedia()->first()->getUrl() }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="{{ route('one.project',$project['id']) }}">{{ $project->title }}</a></h2>
                        <p class="m-3">{{ $project->service->title }}</p>
                    </div>
                </div>
                @else
                <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="200">
                    <div class="bg-box pb-2 px-0">
                        <img src="{{ asset($project['image']) }}" alt="work">
                        <h2 class="sub-title m-3 mt-4"><a href="{{ route('one.project',$project['id']) }}">موقع مطور الويب</a></h2>
                        <p class="m-3">تصميم واجهة المستخدم لصفحة هبوط</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
  <!-- ============== End portfolio section ========== -->

</x-app>
