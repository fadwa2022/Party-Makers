<div style="background-color: #341c3d">
<x-public-layout>

    <section class=" bg-cover bg-no-repeat" style="background-image:url('{{asset('build/assets/bg/bglogin.jpg')}}')">
        @include('layouts.navbare')
        @include('public.partials.s1makers')

    </section>
    @include('public.partials.s2makers')
    @include('public.partials.s3makers')
    @include('public.partials.modale')

</x-public-layout>
</div>
