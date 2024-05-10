@include('stakeholder.layouts.sidebar')
@include('stakeholder.layouts.header')
{{-- @include('stakeholder.layouts.content') --}}

<main>
    @yield('container') <!-- Ini adalah tempat untuk konten yang akan digantikan -->
</main>
@include('stakeholder.layouts.footer')