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
                                    <a class="text-xs font-medium text-gray-200 ms-1 lg:text-sm md:ms-2">
                                        Informasi Layanan
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>

                <h2 class="text-xl font-semibold tracking-wide text-white lg:text-4xl">Informasi Layanan</h2>
            </div>
        </div>
    </section>


    <section class="p-2 lg:px-10 lg:pb-10">
        <h2 class="mb-2 text-xl font-semibold tracking-wider text-gray-600 mg:text-2xl lg:text-3xl lg:mb-8">
            Informasi Layanan
        </h2>
        <div class="flex flex-col gap-6 md:flex-row">
            <div class="w-full md:w-[55%] lg:w-[65%]">
                <div>
                    <div id="accordion-collapse" data-accordion="collapse" class="mb-10">
                        <p class="ml-2 text-gray-500 dark:text-gray-400">Deliver great service experiences fast - without
                            the
                            complexity
                            of traditional ITSM solutions.Accelerate critical development work, eliminate toil.</p>
                        <br>
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>INSTALASI GAWAT DARURAT</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-sm font-semibold text-gray-500 dark:text-gray-400">INSTALASI GAWAT
                                    DARURAT.</p>
                                <p class="mb-1 text-sm"></p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>INSTALASI RAWAT JALAN</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                <h4>Pelayanan Rawat Jalan terdiri dari:</h4>
                                <ol>
                                    <li>Poliklinik Umum</li>
                                    <li>Poliklinik Gigi dan Mulut</li>
                                    <li>Poliklinik Teratai</li>
                                    <li>Poliklinik Medical Check Up</li>
                                    <li>Poliklinik Sub Spesialis, terdiri dari:
                                        <ul>
                                            <li>Sub Spesialis Bedah Tumor</li>
                                            <li>Sub Spesialis Bedah Digestive</li>
                                        </ul>
                                    </li>
                                    <li>Poliklinik Spesialis, terdiri dari:
                                        <ul>
                                            <li>Spesialis Penyakit Dalam</li>
                                            <li>Spesialis</li>
                                            <li>Spesialis Kebidanan &amp; Kandungan</li>
                                            <li>Spesialis Bedah Umum</li>
                                            <li>Spesialis Telinga, Hidung, &amp; Tenggorokan</li>
                                            <li>Spesialis Saraf</li>
                                            <li>Spesialis Mata</li>
                                            <li>Spesialis Kulit &amp; Kelamin</li>
                                            <li>Spesialis Jantung &amp; Pembuluh Darah</li>
                                            <li>Spesialis Orthopedi &amp; Traumatologi</li>
                                            <li>Spesialis Jiwa</li>
                                            <li>Spesialis Paru</li>
                                            <li>Spesialis Anak</li>
                                            <li>Spesialis Bedah Plastik</li>
                                            <li>Spesialis Gizi</li>
                                            <li>Spesialis Bedah Saraf</li>
                                            <li>Spesialis Urologi</li>
                                            <li>Spesialis Bedah Mulut</li>
                                            <li>Spesialis Forensik</li>
                                            <li>Spesialis Bedah Vaskuler</li>
                                            <li>Spesialis Bedah Anak</li>
                                            <li>Spesialis Endodonsi/Konservasi</li>
                                            <li>Spesialis Prostodonsia</li>
                                            <li>Spesialis Periodonsia</li>
                                            <li>Spesialis Rehab Medik</li>
                                            <li>Spesialis Hemofilia</li>
                                        </ul>
                                    </li>
                                </ol>
                                <p class="mb-2 text-gray-500 dark:text-gray-400"></p>
                                <p class="text-gray-500 dark:text-gray-400"></p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full gap-3 p-5 font-medium text-gray-500 border border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span>INSTALASI RAWAT INAP</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <h6>Ruangan Kelas VVIP : Gedung VVIP</h6>
                                <p>4 Tempat Tidur</p>
                                <p>Paviliun terdiri dari kamar pasien, ruang keluarga, pantry, AC, Kamar mandi pasien, kamar
                                    mandi
                                    keluarga,<br>tempat tidur, Sofa bed, kursi tamu, pesawat televisi, refrigerator.</p>
                                <h6>Ruangan Kelas VIP : Gedung Laika Mendidoha Lt. 2</h6>
                                <p>40 Tempat Tidur</p>
                                <p>1 tempat tidur dalam satu ruangan, AC, Kamar mandi dalam, tempat tidur, Sofa bed, kursi
                                    tamu,
                                    pesawat televisi, refrigerator.</p>
                                <h6>Ruangan Kelas I : Gedung Laika Mendidoha Lt. 1</h6>
                                <p>56 Tempat Tidur</p>
                                <p>Terdiri dari 2 tempat tidur dalam satu ruangan, AC, kamar mandi dalam, pesawat televisi
                                </p>
                                <h6>Ruangan Kelas I : Gedung Lambu Barakati Lt. 1</h6>
                                <p>34 Tempat Tidur</p>
                                <p>Terdiri dari 2 tempat tidur dalam satu ruangan, AC, kamar mandi dalam, pesawat televisi
                                </p>
                                <h6>Ruangan Kelas II : Gedung Raha Mongkilo</h6>
                                <p>37 Tempat Tidur</p>
                                <p>Terdiri dari 3 &#8211; 4 Tempat tidur dalam satu ruangan, Exhaust fan, kamar mandi dalam.
                                </p>
                                <h6>Ruangan Kelas III Bedah : Gedung Laika Waraka Lt. 1</h6>
                                <p>50 Tempat Tidur</p>
                                <p>Terdiri dari 4 &#8211; 6 Tempat Tidur dalam satu ruangan, Exhaust fan, kamar mandi dalam.
                                </p>
                                <h6>Ruangan Kelas III Obgyn : Gedung Laika Waraka Lt. 1</h6>
                                <p>20 Tempat Tidur</p>
                                <p>Terdiri dari 4 &#8211; 6 Tempat Tidur dalam satu ruangan, Exhaust fan, kamar mandi dalam.
                                </p>
                                <h6>Ruangan Kelas III Non Bedah : Gedung Laika Waraka Lt. 2</h6>
                                <p>80 Tempat Tidur</p>
                                <p>Terdiri dari 4 &#8211; 6 Tempat Tidur dalam satu ruangan, Exhaust fan, kamar mandi dalam.
                                </p>
                                <h6>Ruangan Anak : Gedung Lambu Barakati Lt. 2</h6>
                                <p>40 Tempat Tidur</p>
                                <h6>Ruangan Kelas II Obgyn : Gedung Tumbu Dadi</h6>
                                <p>21 Tempat Tidur</p>
                                <h6>Ruangan Perawatan Intensif ICU : Gedung Banua Poago</h6>
                                <p>11 Tempat Tidur</p>
                                <h6>Ruangan Perawatan Intensif ICCU : Gedung Banua Poago</h6>
                                <p>7 Tempat Tidur</p>
                                <h6>Ruangan Perawatan Intensif NICU : Gedung NICU</h6>
                                <p>NICU Incubator 10 Tempat Tidur</p>
                                <p>NICU Tempat Tidur Biasa 15 Tempat Tidur</p>
                                <h6>Ruangan Perawatan Intensif PICU : Gedung PICU</h6>
                                <p>6 Tempat Tidur</p>
                                <h6>Ruangan Perawatan ISOLASI Khusus : Gedung Sapo Mononaa</h6>
                                <p>14 Tempat Tidur</p>
                                <h6>Ruangan Perinatology</h6>
                            </div>
                        </div>
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
