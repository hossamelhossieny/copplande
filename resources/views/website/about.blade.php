<x-app>

   <!-- ============== Start Video section ========== -->
   @if(File::exists(public_path('hot/Copplande_reel.mp4')))
   <section class="container pt-5 my-5">
       <div class="row justify-content-center">
           <div class="col-12 col-lg-8" data-aos="fade-up">
               <div class="ratio ratio-16x9">
                   <video controls class="rounded shadow">
                       <source src="{{ asset('hot/Copplande_reel.mp4') }}" type="video/mp4">
                       {{ __('messages.video_not_supported') }}
                   </video>
               </div>
           </div>
       </div>
   </section>
@endif
<!-- ============== End Video section ========== -->

  <!-- ============== Start About section ========== -->
  @if(!empty($aboutSection) && count($aboutSection) > 0)
    <x-about :aboutSection="$aboutSection"></x-about>
  @endif
  <!-- ============== End About section ========== -->

</x-app>
