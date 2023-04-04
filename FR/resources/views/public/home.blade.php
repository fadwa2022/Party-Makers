<x-public-layout>

<section class=" bg-cover bg-no-repeat" style="background-image:url('{{asset('build/assets/bg/bghome.jpg')}}">
    @include('layouts.navbare')
    @include('public.partials.section1')
</section>
<section class="container-fluid flex-col justify-center items-center   bg-cover bg-no-repeat " style="background-image:url('{{asset('build/assets/bg/bghome2.jpg')}}" >
    @include('public.partials.section2')
<section>

<!-- section images  -->
<section class=" bg-cover bg-no-repeat" style="background-color: #341C3D;">
    @include('public.partials.section3')
</section>

<!-- section reviews -->
<section class=" bg-cover bg-no-repeat" style="background-color: #341C3D;">
    @include('public.partials.section4')
</section>

<!-- section contact -->
<section class=" bg-cover bg-no-repeat" style="background-image:url('{{asset('build/assets/bg/bghome3.jpg')}}">
    @include('public.partials.section5')
</section>

</x-public-layout>
