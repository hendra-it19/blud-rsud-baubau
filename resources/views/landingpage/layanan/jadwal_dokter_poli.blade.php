@extends('layouts.landingpage.main')

@section('views')
    @inject('carbon', 'Carbon\Carbon')

    <section class="w-full p-2 lg:p-10">
        <div class="relative w-full h-32 overflow-hidden rounded-lg lg:h-40">
            <img src="{{ asset('asset/image/section.jpg') }}" alt=""
                class="object-cover w-full aspect-auto lg:-translate-y-[250px]">
            <div
                class="absolute top-0 bottom-0 left-0 z-10 flex flex-col justify-center w-full gap-2 p-2 bg-gradient-to-r from-gray-800 lg:from-gray-500 to-transparent lg:p-5">

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
                                    Beranda
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
                                    <a href="{{ url('/jadwal-dokter') }}"
                                        class="text-xs font-medium text-gray-200 ms-1 lg:text-sm md:ms-2">
                                        Jadwal Dokter
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
                                        {{ $poli->nm_poli }}
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>

                <h2 class="text-xl font-semibold tracking-wide text-white lg:text-4xl">Jadwal Dokter</h2>
            </div>
        </div>
    </section>


    <section class="p-2 lg:px-10 lg:pb-10">
        <h2 class="mb-2 text-xl font-semibold tracking-wider text-gray-600 mg:text-2xl lg:text-3xl lg:mb-8 capitalize">
            Jadwal Dokter Pada Poli {{ $poli->nm_poli }}
        </h2>
        <div class="flex flex-col gap-6 md:flex-row">
            <div class="w-full md:w-[55%] lg:w-[65%]">
                <div>

                    <div class="w-full shadow-md sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-2">
                                        Nama Dokter
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Hari Kerja
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Jam Mulai
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Jam Selesai
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600  text-xs lg:text-sm">
                                        <th scope="row" class="px-3 py-2 text-gray-900 dark:text-white">
                                            {{ $row->dokter->nm_dokter }}
                                        </th>
                                        <td class="px-3 py-2">
                                            {{ $row->hari_kerja }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $row->jam_mulai }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $row->jam_selesai }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="md:w-[45%] lg:w-[35%]">
                <x-side-berita></x-side-berita>
            </div>
        </div>
    </section>

    <x-mitra-section></x-mitra-section>
@endsection
