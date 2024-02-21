<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $judulHalaman }} | {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('lib/aos/aos.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-gray-100">

    <div class="mx-auto bg-white shadow-md max-w-[1300px]">

        {{-- navbar --}}
        @include('layouts.landingpage.navbar')
        {{-- end of navbar --}}

        @yield('views')

        {{-- footer --}}
        @include('layouts.landingpage.footer')
        {{-- end of footer --}}
    </div>


    <script src="{{ asset('lib/aos/aos.js') }}"></script>
    <script src="https://unpkg.com/animejs@3.1.0/lib/anime.min.js"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
    @stack('scripts')
</body>

</html>
