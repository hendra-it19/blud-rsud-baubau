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
</head>

<body class="flex items-center min-h-screen bg-gray-100">


    <div
        class="grid w-full max-w-md grid-cols-1 m-auto overflow-hidden bg-white border-t-4 border-b-4 rounded-lg shadow lg:grid-cols-2 lg:max-w-4xl border-primary-700">
        <div class="relative hidden overflow-hidden lg:inline-block">
            <img src="{{ asset('asset/image/unggulan/mobil-donor-darah.jpg') }}" alt=""
                class="object-cover w-full h-full aspect-auto">
            <div class="absolute top-0 left-0 right-0 bottom-0 bg-[rgba(0,0,0,0.6)] flex items-center justify-center">
                <div class="flex flex-col gap-2 text-xl font-bold text-white">
                    <img data-aos="zoom-in" src="{{ asset('asset/image/logo-rsud-baubau.png') }}"
                        alt="logo rsud kota baubau" class="w-16 h-16 aspect-auto">
                    <h1 data-aos="fade-left">Login Admin</h1>
                    <h1 data-aos="fade-right" class="text-secondary-500">BLUD RSUD <span class="text-primary-600">KOTA
                            BAUBAU</span></h1>
                </div>
            </div>
        </div>
        <div class="w-full p-6">

            <img src="{{ asset('asset/image/logo-rsud-baubau.png') }}" alt="logo rsud bauabu" class="h-12 m-auto my-2">

            <h1 class="my-1 text-xl font-semibold">Login Akun</h1>
            <p class="mb-5">Silahkan masukkan username dan password anda!</p>



            @session('login-errors')
                <div class="p-2 mb-3 bg-red-200 rounded">
                    <small>{{ Session::get('login-errors') }}</small>
                </div>
            @endsession

            <form class="max-w-md mx-auto" method="post" action="{{ route('loginPost') }}">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="username" id="username"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-secondary-600 peer"
                        placeholder=" " required />
                    <label for="username"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-600 peer-focus:dark:text-secondary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="password" name="password" id="password"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-secondary-600 peer"
                        placeholder=" " required />
                    <label for="password"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-secondary-600 peer-focus:dark:text-secondary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                <div class="relative z-0 flex items-center w-full gap-2 mb-5 group">
                    <input type="checkbox" name="ingat_saya" id="ingat_saya" value="1"
                        class="w-4 h-4 mt-1 bg-white border-2 border-gray-500 rounded appearance-none cursor-pointer shrink-0 checked:bg-secondary-600 checked:border-0">
                    <label for="ingat_saya" class="cursor-pointer">Ingat Saya</label>
                </div>
                <div class="flex flex-col w-full gap-4">
                    <button type="submit"
                        class="text-white bg-secondary-600 hover:bg-secondary-800 focus:ring-4 focus:outline-none focus:ring-secondary-300 font-medium rounded text-sm w-full px-5 py-2.5 text-center dark:bg-secondary-600 dark:hover:bg-secondary-700 dark:focus:ring-secondary-800">Masuk</button>
                    <a href="{{ url('/') }}" class="text-center underline hover:text-primary-600">Kembali</a>
                </div>
            </form>

        </div>
    </div>

    <script src="{{ asset('lib/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
