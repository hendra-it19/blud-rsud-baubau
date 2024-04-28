@extends('layouts.landingpage.main')

@section('views')
    <section class="w-full p-2 lg:p-10">
        <div class="overflow-hidden rounded-lg h-32 lg:h-40 w-full relative">
            <img src="{{ asset('asset/image/section.jpg') }}" alt=""
                class="object-cover w-full aspect-auto lg:-translate-y-[250px]">
            <div
                class="absolute z-10 left-0 top-0 bottom-0 w-full bg-gradient-to-r from-gray-800 lg:from-gray-500 to-transparent p-2 lg:p-5 flex flex-col justify-center gap-2">

                <div>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center lg:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <a href="{{ url('/') }}"
                                    class="inline-flex items-center text-xs lg:text-sm font-medium text-white hover:text-secondary-600">
                                    <svg class="w-2 h-2 lg:w-4 lg:h-4 me-1 lg:me-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                    </svg>
                                    Tentang Kami
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-2 h-2 lg:w-4 lg:h-4 text-gray-400 mx-0.5 lg:mx-1"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a class="ms-1 text-xs lg:text-sm font-medium text-gray-200 md:ms-2">
                                        Dokter
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>

                <h2 class="text-white font-semibold text-xl lg:text-4xl tracking-wide">Dokter</h2>
            </div>
        </div>
    </section>

    <section class="min-h-screen  p-2 lg:px-10 lg:pb-10">
        <h2 class="text-gray-600 font-semibold tracking-wider text-xl mg:text-2xl lg:text-3xl  mb-2 lg:mb-8">
            Daftar Dokter RSUD Kota Baubau
        </h2>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-[55%] lg:w-[65%]">
                <div class="mb-10">
                    <form class="max-w-md mx-auto" action="" method="get">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" name="nama_dokter"
                                class="block w-full px-4 py-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Masukkan kata kunci..." />
                            <button type="submit"
                                class="text-white absolute end-2 bottom-1.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Cari</button>
                        </div>
                    </form>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-between items-center gap-5">
                    @foreach ($data as $row)
                        <div
                            class="w-full m-auto max-w-40 shadow hover:shadow-md rounded-lg p-3 hover:border-t-4 hover:border-yellow-400 duration-300 cursor-pointer">
                            <div class="relative w-full h-40 flex items-center justify-center">
                                <img src="{{ asset($row->foto) }}" alt="Foto {{ $row->nama_dokter }} RSUD BAUBAU"
                                    class="w-full h-full object-cover bg-cover aspect-auto mx-auto">
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mt-1 text-gray-600">{{ $row->nama_dokter }}</h3>
                                <p class=" text-gray-600 text-sm">
                                    {{ $row->poliklinik }}
                                </p>
                            </div>
                            <hr class="my-1.5">
                            <div class="text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-4  h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $row->no_sip }}
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="w-4  h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z" />
                                    </svg>
                                    {{ $row->no_hp }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="md:w-[45%] lg:w-[35%]">
                <x-side-berita />
            </div>
        </div>
    </section>

    <x-mitra-section></x-mitra-section>
@endsection
