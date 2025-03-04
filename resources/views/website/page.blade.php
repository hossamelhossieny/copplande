<x-app>
   <!-- ======= start team section ======= -->
   <section class="privacy mt-4 pt-4 mb-4 pb-2">
    <div class="container">
        <h1 class="title my-4">{{ $page->title }}</h1>

        <p class="my-2">{{ __('messages.last_update') }}: <span class="unique-text">{{ date('Y-m-d', strtotime($page->updated_at)) }} </span></p>
        <p class="my-2">
            {!! $page->content !!}
        </p>
    </div>
</section>
<!-- ======= end team section ======= -->

</x-app>
