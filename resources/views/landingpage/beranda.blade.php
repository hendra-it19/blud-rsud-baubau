@extends('layouts.landingpage.main')

@section('views')
    {{-- carousel --}}
    <section id="default-carousel" class="relative w-full -mt-5 bg-gray-300 carousel sm:mt-0 md:mt-0" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-b-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-500 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset/image/slider/s1.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="RSUD Kota Baubau"
                    loading="eager">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-500 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset/image/slider/s2.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="RSUD Kota Baubau"
                    loading="eager">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-500 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset/image/slider/s3.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="RSUD Kota Baubau"
                    loading="eager">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </section>
    {{-- end of carousel --}}

    {{-- content --}}
    <section class="bg-gradient-to-b from-gray-300 to-white">
        <div class="flex flex-wrap justify-between w-full max-w-5xl gap-4 p-5 m-auto overflow-hidden md:p-10 lg:gap-3">

            <a href="{{ url('/jadwal-dokter') }}" data-aos="fade-down" data-aos-delay="0" data-aos-once="true"
                class="flex flex-col gap-2 items-center justify-center text-xs lg:text-[14px] font-semibold text-gray-600 lg:shadow-md lg:rounded-md overflow-hidden cursor-pointer">
                <div
                    class="p-5 bg-white rounded shadow-md lg:shadow-none lg:rounded-none lg:p-4 lg:flex lg:justify-center lg:items-center lg:gap-3 w-fit h-fit">
                    <svg class="w-[30px] h-[30px] text-secondary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M10 3v4c0 .6-.4 1-1 1H5m8 7.5 2.5 2.5M19 4v16c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V8c0-.4.1-.6.3-.8l4-4 .6-.2H18c.6 0 1 .4 1 1Zm-5 9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                    </svg>
                    <span class="hidden text-wrap lg:inline-block">Cari Dokter</span>
                    <svg class="hidden w-6 h-6 text-secondary-500 lg:inline-block" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </div>
                <span class="block lg:hidden">Cari Dokter</span>
            </a>

            <a href="{{ url('/jadwal-dokter') }}" data-aos="fade-down" data-aos-delay="100" data-aos-once="true"
                class="flex flex-col gap-2 items-center justify-center text-xs lg:text-[14px] font-semibold text-gray-600 lg:shadow-md lg:rounded-md overflow-hidden cursor-pointer">
                <div
                    class="p-5 bg-white rounded shadow-md lg:shadow-none lg:rounded-none lg:p-4 lg:flex lg:justify-center lg:items-center lg:gap-3 w-fit h-fit">
                    <svg class="w-[30px] h-[30px] text-secondary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Zm3-7h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Zm-8 4h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Z" />
                    </svg>
                    <span class="hidden text-wrap lg:inline-block">Jadwal Dokter</span>
                    <svg class="hidden w-6 h-6 text-secondary-500 lg:inline-block" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </div>
                <span class="block lg:hidden">Jadwal Dokter</span>
            </a>

            <a data-aos="fade-down" data-aos-delay="200" data-aos-once="true"
                class="flex flex-col gap-2 items-center justify-center text-xs lg:text-[14px] font-semibold text-gray-600 lg:shadow-md lg:rounded-md overflow-hidden cursor-pointer">
                <div
                    class="p-5 bg-white rounded shadow-md lg:shadow-none lg:rounded-none lg:p-4 lg:flex lg:justify-center lg:items-center lg:gap-3 w-fit h-fit">
                    <svg class="w-[30px] h-[30px] text-secondary-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="m11.5 11.5 2 2M4 10h5m11 0h-1.5M12 7V4M7 7V4m10 3V4m-7 13H8v-2l5.2-5.3a1.5 1.5 0 0 1 2 2L10 17Zm-5 3h14c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Z" />
                    </svg>
                    <span class="hidden text-wrap lg:inline-block">Booking</span>
                    <svg class="hidden w-6 h-6 text-secondary-500 lg:inline-block" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </div>
                <span class="block lg:hidden">Booking</span>
            </a>

            <a href="{{ url('/struktural') }}" data-aos="fade-down" data-aos-delay="300" data-aos-once="true"
                class="flex flex-col gap-2 items-center justify-center text-xs lg:text-[14px] font-semibold text-gray-600 lg:shadow-md lg:rounded-md overflow-hidden cursor-pointer">
                <div
                    class="p-5 bg-white rounded shadow-md lg:shadow-none lg:rounded-none lg:p-4 lg:flex lg:justify-center lg:items-center lg:gap-3 w-fit h-fit">
                    <svg class="w-[30px] h-[30px] text-secondary-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M11 9h6m-6 3h6m-6 3h6M7 9h0m0 3h0m0 3h0M4 5h16c.6 0 1 .4 1 1v12c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V6c0-.6.4-1 1-1Z" />
                    </svg>
                    <span class="hidden text-wrap lg:inline-block">Struktural</span>
                    <svg class="hidden w-6 h-6 text-secondary-500 lg:inline-block" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </div>
                <span class="block lg:hidden">Struktural</span>
            </a>

            <a href="#fasilitas" data-aos="fade-down" data-aos-delay="400" data-aos-once="true"
                class="flex flex-col gap-2 items-center justify-center text-xs lg:text-[14px] font-semibold text-gray-600 lg:shadow-md lg:rounded-md overflow-hidden cursor-pointer text-wrap scroll-smooth">
                <div
                    class="p-5 bg-white rounded shadow-md lg:shadow-none lg:rounded-none lg:p-4 lg:flex lg:justify-center lg:items-center lg:gap-3 w-fit h-fit">
                    <svg class="w-[30px] h-[30px] text-secondary-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 16H5a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v1M9 12H4m8 8V9h8v11h-8Zm0 0H9m8-4a1 1 0 1 0-2 0 1 1 0 0 0 2 0Z" />
                    </svg>
                    <span class="hidden text-wrap lg:inline-block">Fasilitas</span>
                    <svg class="hidden w-6 h-6 text-secondary-500 lg:inline-block" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </div>
                <span class="block lg:hidden">Fasilitas</span>
            </a>

        </div>
    </section>
    {{-- end of content --}}

    <section
        class="flex flex-row w-full gap-10 p-5 mx-auto my-10 overflow-hidden overflow-x-auto lg:p-10 flex-nowrap lg:justify-center bg-secondary-50">
        <div class="w-full">
            <div class="flex gap-2 justify-center items-center w-[200px]">
                <span class="flex text-3xl font-bold text-primary-700">
                    <span data-countup>41</span> <span>+</span>
                </span>
                <span class="text-gray-700" data-aos="fade-up" data-aos-once="true">
                    Rumah sakit di seluruh indonesia
                </span>
            </div>
        </div>
        <div class="w-full">
            <div class="flex gap-2 justify-center items-center w-[200px]">
                <span class="flex text-3xl font-bold text-primary-700">
                    <span data-countup>41</span> <span>+</span>
                </span>
                <span class="text-gray-700" data-aos="fade-up" data-aos-once="true">
                    Rumah sakit di seluruh indonesia
                </span>
            </div>
        </div>
        <div class="w-full">
            <div class="flex gap-2 justify-center items-center w-[200px]">
                <span class="flex text-3xl font-bold text-primary-700">
                    <span data-countup>41</span> <span>+</span>
                </span>
                <span class="text-gray-700" data-aos="fade-up" data-aos-once="true">
                    Rumah sakit di seluruh indonesia
                </span>
            </div>
        </div>
        <div class="w-full">
            <div class="flex gap-2 justify-center items-center w-[200px]">
                <span class="flex text-3xl font-bold text-primary-700">
                    <span data-countup>41</span> <span>+</span>
                </span>
                <span class="text-gray-700" data-aos="fade-up" data-aos-once="true">
                    Rumah sakit di seluruh indonesia
                </span>
            </div>
        </div>
        <div class="w-full">
            <div class="flex gap-2 justify-center items-center w-[200px]">
                <span class="flex text-3xl font-bold text-primary-700">
                    <span data-countup>41</span> <span>+</span>
                </span>
                <span class="text-gray-700" data-aos="fade-up" data-aos-once="true">
                    Rumah sakit di seluruh indonesia
                </span>
            </div>
        </div>
    </section>


    <section class="grid grid-cols-1 gap-4 p-5 lg:p-10 lg:grid-cols-2">
        <div>
            <div class="w-10/12">
                <h1 class="title" data-aos="zoom-in">Selamat Datang Di RSUD Kota Bau-bau</h1>
                <p data-aos="fade-right" class="mb-3">Menjadi Rumah Sakit Rujukan Wilayah Kepulauan Yang Profesional Dan
                    Terjangkau</p>
            </div>

            <div class="p-2 lg:p-0 group" data-aos="fade-right">
                <div
                    class="w-full lg:w-10/12 rounded-sm rounded-tr-[40px] rounded-bl-[40px] border-t-4 border-primary-700 shadow-md cursor-pointer overflow-hidden relative">
                    <img src="{{ asset('asset/image/rsud.jpeg') }}" alt=""
                        class="transition duration-300 group-hover:scale-105">
                    <div
                        class="absolute top-0 bottom-0 left-0 right-0 flex items-end justify-center pb-10 bg-gradient-to-t from-gray-500 to-transparent">
                    </div>
                </div>
            </div>
        </div>
        <div class="leading-relaxed tracking-wide text-justify lg:pt-[90px]" data-aos="fade-left">
            <div class="indent-8">
                <p>Sejarah RSUD Kota Baubau bermula dari pendirian rumah sakit ini pada zaman kolonial Belanda yang
                    berlokasi di
                    pusat kota Baubau tepat di depan Pelabuhan Baubau. Setelah kemerdekaan dan pembentukan Provinsi Sulawesi
                    Tenggara pada tahun 1959, rumah sakit tersebut kemudian menjadi Rumah Sakit Kabupaten Buton. Pada tahun
                    1978
                    Rumah Sakit Kabupaten Buton ditetapkan sebagai Rumah Sakit Type D, dan selanjutnya sesuai Keputusan
                    Menteri
                    Kesehatan tahun 1997 ditetapkan sebagai Rumah Sakit Type C.</p>
                <p>Berdasarkan Undang-undang Republik Indonesia Nomor 13 Tahun 2001 tentang Pembentukan Kota Baubau, maka
                    RSUD
                    Kabupaten Buton diserahkan kepada Pemerintah Kota Baubau dan berubah nama menjadi RSUD Kota Baubau. Hal
                    tersebut sejalan dengan penyerahan aset-aset Pemerintah Kabupaten Buton yang ada di wilayah
                    administratif
                    Kota Baubau kepada Pemerintah Kota Baubau, termasuk seluruh SDM yang ada di RSUD Kabupaten Buton
                    tersebut.
                </p>
            </div>
            <a href="{{ url('/profil') }}"
                class="block my-5 hover:text-primary-800 hover:underline text-primary-700">Selengkapnya...</a>
        </div>
    </section>


    <section id="fasilitas"
        class="grid grid-cols-1 gap-5 p-5 my-10 overflow-hidden lg:p-10 lg:grid-cols-2 scroll-mt-20 scroll-smooth">
        <div data-aos="fade-right">
            <h2 class="title">
                Ketika Pengalaman Bertemu Kepedulian
            </h2>
            <p class="leading-loose text-justify">Kami berkomitmen memberikan pelayanan kesehatan unggulan dengan
                mengutamakan integitas.</p>
            <p class="mt-3 leading-loose text-justify">Dengan beberapa layanan unggulan yang tersedia diharapkan dapat
                memberikan pelayanan secara optimal dengan meliputi : eswl, c-arm, phaco, cath lab, ruang nicu, dan mobil
                donor darah.</p>
        </div>
        <div class="w-full lg:px-10" data-aos="fade-left">
            <div id="indicators-carousel" class="relative w-full carousel" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-300 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('asset/image/unggulan/ct-scan.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Layanan Unggulan RSUD Kota Baubau">
                        <div
                            class="absolute bottom-0 left-0 right-0 flex items-end justify-center h-full p-10 pb-16 bg-gradient-to-t from-gray-700 to-transparent">
                            <h3 class="text-xl font-bold tracking-wider text-white">CT SCAN</h3>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-300 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/image/unggulan/c-arm.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Layanan Unggulan RSUD Kota Baubau">
                        <div
                            class="absolute bottom-0 left-0 right-0 flex items-end justify-center h-full p-10 pb-16 bg-gradient-to-t from-gray-700 to-transparent">
                            <h3 class="text-xl font-bold tracking-wider text-white">C ARM</h3>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-300 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/image/unggulan/cath-lab.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Layanan Unggulan RSUD Kota Baubau">
                        <div
                            class="absolute bottom-0 left-0 right-0 flex items-end justify-center h-full p-10 pb-16 bg-gradient-to-t from-gray-700 to-transparent">
                            <h3 class="text-xl font-bold tracking-wider text-white">CATH LAB</h3>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-300 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/image/unggulan/eswl.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Layanan Unggulan RSUD Kota Baubau">
                        <div
                            class="absolute bottom-0 left-0 right-0 flex items-end justify-center h-full p-10 pb-16 bg-gradient-to-t from-gray-700 to-transparent">
                            <h3 class="text-xl font-bold tracking-wider text-white">ESWL</h3>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-300 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/image/unggulan/mobil-donor-darah.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Layanan Unggulan RSUD Kota Baubau">
                        <div
                            class="absolute bottom-0 left-0 right-0 flex items-end justify-center h-full p-10 pb-16 bg-gradient-to-t from-gray-700 to-transparent">
                            <h3 class="text-xl font-bold tracking-wider text-white">MOBIL DONOR</h3>
                        </div>
                    </div>
                    <div class="hidden duration-300 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/image/unggulan/nicu.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="Layanan Unggulan RSUD Kota Baubau">
                        <div
                            class="absolute bottom-0 left-0 right-0 flex items-end justify-center h-full p-10 pb-16 bg-gradient-to-t from-gray-700 to-transparent">
                            <h3 class="text-xl font-bold tracking-wider text-white">NICU</h3>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 rtl:space-x-reverse bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6"
                        data-carousel-slide-to="5"></button>
                </div>
            </div>
        </div>
    </section>

    <x-mitra-section></x-mitra-section>

    <x-map-section></x-map-section>
@endsection
