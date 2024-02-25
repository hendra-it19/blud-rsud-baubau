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
                                        Visi dan Misi
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>

                <h2 class="text-white font-semibold text-xl lg:text-4xl tracking-wide">Visi dan Misi</h2>
            </div>
        </div>
    </section>

    <section class="min-h-screen  p-2 lg:px-10 lg:pb-10">
        <h2 class="text-gray-600 font-semibold tracking-wider text-xl mg:text-2xl lg:text-3xl  mb-2 lg:mb-8">Visi dan Misi
        </h2>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex flex-col gap-4 lg:gap-6 w-full md:w-[55%] lg:w-[65%]">
                <article class="w-full shadow p-2 rounded-md flex gap-1 items-center text-base">
                    <div class="w-full flex flex-col gap-1 lg:gap-2">
                        <h1 class="text-base lg:text-lg hover:underline  cursor-pointer hover:text-primary-700">
                            VISI</h1>
                        <div class="line-clamp-2 text-xs lg:text-base text-gray-500">
                            “Menjadi Rumah Sakit Rujukan Wilayah Kepulauan Yang Profesional Dan Terjangkau’’
                        </div>
                        <div class="flex gap-2 text-xs lg:text-sm text-gray-500">
                        </div>
                    </div>
                </article>
                <article class="w-full shadow p-2 rounded-md flex gap-1 items-center text-base">
                    <div class="w-full flex flex-col gap-1 lg:gap-2">
                        <h1 class="text-base lg:text-lg hover:underline  cursor-pointer hover:text-primary-700">
                            Misi</h1>
                        <div class=" text-xs lg:text-base text-gray-500">
                            <ol class="list-inside list-decimal">
                                <li>Memberikan Pelayanan kesehatan secara profesional, efisien dan efektif yang berorientasi
                                    kepada
                                    pelanggan, tanpa membeda-bedakan asal-usul dan kondisi finansial pasien mampu atau tidak
                                    mampu,
                                    pasien dengan jaminan atau tanpa jaminan.</li><br>
                                <li>Menyelenggarakan manajemen rumah sakit dengan kaidah bisnis yang sehat, terbuka,
                                    efisien, efektif,
                                    dan akuntabel guna meningkatkan derajat kesehatan masyarakat umum serta kesejahteraan
                                    karyawan.</li><br>
                                <li>Mengelola rumah sakit, poliklinik dan fasilitas kesehatan lainnya senantiasa
                                    mengutamakan kepentingan
                                    pasien, peka dan tanggap terhadap keluhan serta selalu berpenampilan prima.</li><br>
                                <li>Meningkatkan kualitas dan kuantitas sumber daya manusia sesuai dengan kebutuhan
                                    pelayanan kesehatan, kemajuan ilmu pengetahuan dan teknologi tinggi.</li><br>
                                <li>Penambahan investasi sarana dan prasarana layanan kesehatan sebagai
                                    salah satu unsur penting ujung tombak dalam memberikan pelayanan kesehatan yang terbaik
                                    bagi masyarakat
                                    Kota Baubau dan sekitarnya</li><br>
                                <li>Terjalinnya kerjasama yang saling menguntungkan dengan organisasi profesi terkait dengan
                                    bidang kesehatan</li><br>
                            </ol>
                        </div>
                        <div class="flex gap-2 text-xs lg:text-sm text-gray-500">
                        </div>
                    </div>
                </article>
            </div>
            <div class="md:w-[45%] lg:w-[35%]">
                <x-side-berita />
            </div>
        </div>
    </section>

    <x-mitra-section></x-mitra-section>
@endsection
