@extends('frontpage.layouts.main')
@section('container')
{{-- Header --}}
@include('frontpage.layouts.header')
{{-- Showcase --}}
@include('frontpage.components.highlight')
{{-- Showcase --}}
{{-- Section --}}
<section class="py-5 mt-5 bg-light">
    <div class="text-center text-black">
        <h1 class="display-4 fw-bolder">Rambut Bersih, Ganteng Maksimal</h1>
        <p class="lead fw-normal text-black-50 mb-0">Potong Rambut terbaik di Barbershop Kami!</p>
    </div>

</section>
{{-- Section --}}

<!-- Section-->
{{-- <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

        </div>
    </div>
</section> --}}
{{-- Footer --}}
@include('frontpage.layouts.footer')
{{-- AOS --}}
@endsection