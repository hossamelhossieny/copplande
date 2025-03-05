<x-app>
    @if(!empty($siteSettings))
        <x-contact :siteSettings="$siteSettings"></x-contact>
    @endif
</x-app>
