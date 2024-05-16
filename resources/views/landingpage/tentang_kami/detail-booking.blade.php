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
                                    class="inline-flex items-center text-xs font-medium text-white lg:text-sm hover:text-secondary-600">
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
                                    <a href="{{ url('/booking') }}"
                                        class="text-xs font-medium text-gray-200 ms-1 lg:text-sm md:ms-2">
                                        Booking
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-2 h-2 lg:w-4 lg:h-4 text-gray-400 mx-0.5 lg:mx-1"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a class="text-xs font-medium text-gray-200 ms-1 lg:text-sm md:ms-2">
                                        Detail Booking
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>

                <h2 class="text-white font-semibold text-xl lg:text-4xl tracking-wide">{{ $data->no_booking }}</h2>
            </div>
        </div>
    </section>

    <section class="min-h-screen  p-2 lg:px-10 lg:pb-10">
        <h2 class="text-gray-600 font-semibold tracking-wider text-xl mg:text-2xl lg:text-3xl  mb-2 lg:mb-8 text-center">
            Detail Bookingan/Janji Pemeriksaan Anda
        </h2>
        <div class="w-full max-w-md p-4 shadow-md rounded my-8 font-semibold text-base mx-auto">
            <div class="grid grid-cols-2 gap-4">
                <div>No. Booking</div>
                <div> : {{ $data->no_booking }}</div>
                <div>Tgl. Booking</div>
                <div> : {{ $data->tanggal_booking }}</div>
                <div>Tgl. Periksa</div>
                <div> : {{ $data->tanggal }}</div>
                <div>Nama</div>
                <div> : {{ $data->nama }}</div>
                <div>No. Hp/Telephone</div>
                <div> : {{ $data->no_telp }}</div>
                <div>Email</div>
                <div> : {{ $data->email }}</div>
                <div>Alamat</div>
                <div> : {{ $data->alamat }}</div>
                <div>Unit</div>
                <div> : {{ $data->poliklinik->nm_poli }}</div>
            </div>
            <a href="{{ url('/booking/' . $data->no_booking . '/pdf') }}"
                class="block w-full rounded text-center p-2 mt-8 bg-green-500 hover:bg-green-600 text-white">
                Cetak Bukti
                Booking</a>
        </div>
    </section>

    <x-mitra-section></x-mitra-section>
@endsection
