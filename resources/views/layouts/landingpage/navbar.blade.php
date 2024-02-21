<nav class="bg-gray-500 text-slate-100">
    <div class="flex items-center justify-between max-w-screen-xl gap-0 p-4 mx-auto">
        <a href=""
            class="flex items-start space-x-1 lg:gap-2 rtl:space-x-reverse text-[10px] lg:text-xs h-full justify-center">
            <img src="{{ asset('asset/image/paripurna.png') }}" class="h-8 lg:h-12 rounded-xl" alt="paripurna" />
            <span
                class="self-center font-normal leading-3 uppercase lg:leading-tight lg:font-semibold text-secondary-500">
                Pelayanan Paripurna
            </span>
        </a>
        <div
            class="flex flex-col items-end justify-end w-full space-x-6 text-xs rtl:space-x-reverse lg:flex-row lg:text-sm">
            <a href="" class="hover:underline">
                0822-9259-5705
            </a>
            <a href="mailto:rsud@baubaukota.go.id" class="hover:underline">
                rsud@baubaukota.go.id
            </a>
        </div>
    </div>
</nav>
<nav class="sticky top-0 left-0 right-0 z-50 w-full text-sm bg-white shadow lg:text-base">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('asset/image/logo-rsud-baubau.png') }}" class="h-10" alt="BLUD RSUD KOTA BAUBAU" />
            <h1 class="self-center text-sm font-bold md:text-base xl:text-2xl whitespace-nowrap text-primary-700">
                <span class="text-secondary-500">BLUD</span> RSUD KOTA BAUBAU
            </h1>
        </a>
        <button data-collapse-toggle="mega-menu-full" type="button"
            class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="mega-menu-full" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="mega-menu-full"
            class="items-center justify-between hidden w-full font-medium lg:flex lg:w-auto lg:order-1">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg lg:p-0 bg-gray-50 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white">
                <li>
                    <a href="{{ url('/') }}"
                        class="block px-3 py-2 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-primary-800 lg:p-0"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarTentangKami"
                        class="flex items-center justify-between w-full px-3 py-2 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-800 lg:p-0 lg:w-auto">
                        Tentang Kami
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownNavbarTentangKami"
                        class="z-10 hidden w-56 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ url('/profil') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Profil Rumah Sakit
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/visi-misi') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Visi dan Misi
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/struktural') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Struktural
                                </a>
                            </li>
                        </ul>
                        {{-- <div class="py-1">
                            <a href="{{ url('/direktur') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Direktur
                            </a>
                            <a href="{{ url('/kepala-bagian-tata-usaha') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Kepala Bagian Tata Usaha
                            </a>
                            <a href="{{ url('/kepala-bidang-pelayanan-penunjang') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Kepala Bidang Pelayanan Penunjang
                            </a>
                        </div> --}}
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full px-3 py-2 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-800 lg:p-0 lg:w-auto">
                        Layanan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ url('/informasi-layanan') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Informasi Layanan
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/jadwal-dokter') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Jadwal Dokter
                                </a>
                            </li>
                            <li class="relative">
                                <a class="block px-4 py-2 hover:bg-gray-100 disabled">
                                    Booking
                                </a>
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded absolute top-[20%] right-0">Soon</span>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ url('/berita') }}"
                        class="block px-3 py-2 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-primary-800 lg:p-0">Berita</a>
                </li>
                <li>
                    <a href="{{ url('/kontak') }}"
                        class="block px-3 py-2 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-primary-800 lg:p-0">Kontak</a>
                </li>
                <li>
                    <a href="{{ route('login') }}"
                        class="block bg-secondary-500 text-white lg:py-0.5 lg:px-3 py-1 text-center rounded hover:bg-secondary-600 capitalize">
                        @if (!empty(auth()->user()->nama))
                            {{ auth()->user()->nama }}
                        @else
                            Admin
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
