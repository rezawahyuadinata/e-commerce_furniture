<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    {{-- Lokasi Meta HTML --}}
    @include('components.meta')
    {{-- Tempat css utama --}}
    @include('components.css')
    {{-- Tempat css yang lain --}}
    @stack('script-css')
</head>

<body>
    {{-- Lokasi Head HTML --}}
    @include('components.head')
    {{-- Lokasi Code utama pada setiap layout --}}
    @yield('section')
    {{-- Lokasi Footer HTML --}}
    @include('components.footer')
    {{-- Lokasi Javascript Internal --}}
    @include('components.js')
    {{-- Tempat Javascript yang berbeda --}}
    @stack('script-js')
</body>

</html>
