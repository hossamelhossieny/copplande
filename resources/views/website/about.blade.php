<x-app>

  <!-- ============== Start About section ========== -->
  @if(!empty($aboutSection) && count($aboutSection) > 0)
    <x-about :aboutSection="$aboutSection"></x-about>
  @endif
  <!-- ============== End About section ========== -->



</x-app>
