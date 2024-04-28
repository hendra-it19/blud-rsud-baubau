<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full shadow-md sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-5 py-8 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="{{ url('/') }}" class="flex items-center ps-2.5 mb-5">
            <img src="{{ asset('asset/image/logo-rsud-baubau.png') }}" class="h-8 me-3 sm:h-10" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Admin</span>
        </a>
        <ul class="pt-8 space-y-2 font-medium">
            <li>
                <a href="{{ url('/admin') }}"
                    class="flex items-center p-2 rounded-lg @if (request()->is('admin')) sidebar-active
                    @else
                    sidebar @endif">
                    <svg class="w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('strukturals.index') }}"
                    class="flex items-center p-2 rounded-lg @if (request()->routeIs('strukturals.*')) sidebar-active
                    @else
                    sidebar @endif">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 10.2c.6 0 1 .4 1 1v.2l6 3.5 6-3.5v-.2a1 1 0 1 1 2 0v.8c0 .4-.2.7-.5.9l-7 4a1 1 0 0 1-1 0l-7-4A1 1 0 0 1 4 12v-.8c0-.6.5-1 1-1Zm0 5c.6 0 1 .4 1 1v.2l6 3.4 6-3.4V16a1 1 0 1 1 2 0v.9c0 .3-.2.6-.5.8l-7 4a1 1 0 0 1-1 0l-7-4A1 1 0 0 1 4 17v-1c0-.5.4-1 1-1Z"
                            clip-rule="evenodd" />
                        <path
                            d="M12.5 2.1a1 1 0 0 0-1 0l-7 4a1 1 0 0 0 0 1.8l7 4c.3.2.7.2 1 0l7-4a1 1 0 0 0 0-1.7l-7-4Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sruktural</span>
                </a>
            </li>

            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg @if (request()->routeIs('categories.*') || request()->routeIs('berita.*')) sidebar-active
                    @else
                    sidebar @endif"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 3a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V7c0-.6-.4-1-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4c0-.6.4-1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3c0-.6.4-1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3c0-.6.4-1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H7Zm1 3V8h1v1H8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 text-left ms-3 rtl:text-right whitespace-nowrap">Postingan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('categories.index') }}"
                            class="flex items-center w-fit p-2 transition duration-75 rounded @if (request()->routeIs('categories.*')) sidebar-active @else sidebar @endif">Kategori</a>
                    </li>
                    <li>
                        <a href="{{ route('berita.index') }}"
                            class="flex items-center w-fit p-2 transition duration-75 rounded @if (request()->routeIs('berita.*')) sidebar-active @else sidebar @endif">Berita</a>
                    </li>
                </ul>
            </li>

            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg @if (request()->routeIs('dokter.*') || request()->routeIs('jadwal-dokter.*')) sidebar-active
                    @else
                    sidebar @endif"
                    aria-controls="dropdown-dokter" data-collapse-toggle="dropdown-dokter">
                    <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.4l1.4.7a7.7 7.7 0 0 0 .7.3 21 21 0 0 0 16.4-.3l1.5-.7V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5c0-.6-.4-1-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.4 7.9.6-.3V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.4l.6.3a10 10 0 0 0 .7.3 23 23 0 0 0 18-.3h.1L21 13l.4.9ZM12 10a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 text-left ms-3 rtl:text-right whitespace-nowrap">Dokter</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-dokter" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('dokter.index') }}"
                            class="flex items-center w-fit p-2 transition duration-75 rounded @if (request()->routeIs('dokter.*')) sidebar-active @else sidebar @endif">Daftar
                            Dokter</a>
                    </li>
                    <li>
                        <a href="{{ route('jadwal-dokter.index') }}"
                            class="flex items-center w-fit p-2 transition duration-75 rounded @if (request()->routeIs('jadwal-dokter.*')) sidebar-active @else sidebar @endif">Jadwal
                            Dokter</a>
                    </li>
                </ul>
            </li>

            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg @if (request()->routeIs('gambar-slider.*') || request()->routeIs('gambar-hero.*')) sidebar-active
                    @else
                    sidebar @endif"
                    aria-controls="dropdown-tema" data-collapse-toggle="dropdown-tema">
                    <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 8a1 1 0 0 0-1 1v10H9a1 1 0 1 0 0 2h11a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-8Zm4 10a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M5 3a2 2 0 0 0-2 2v6h6V9a3 3 0 0 1 3-3h8c.35 0 .687.06 1 .17V5a2 2 0 0 0-2-2H5Zm4 10H3v2a2 2 0 0 0 2 2h4v-4Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 text-left ms-3 rtl:text-right whitespace-nowrap">Tema</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-tema" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('gambar-slider.index') }}"
                            class="flex items-center w-fit p-2 transition duration-75 rounded @if (request()->routeIs('gambar-slider.*')) sidebar-active @else sidebar @endif">
                            Slider Section
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gambar-hero.index') }}"
                            class="flex items-center w-fit p-2 transition duration-75 rounded @if (request()->routeIs('gambar-hero.*')) sidebar-active @else sidebar @endif">
                            Hero Section
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('anjab.index') }}"
                    class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg @if (request()->routeIs('anjab.*')) sidebar-active
                    @else
                    sidebar @endif">
                    <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v6.4A7.5 7.5 0 1 0 10.5 22H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                            clip-rule="evenodd" />
                        <path fill-rule="evenodd"
                            d="M9 16a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm6-3c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">E-Berkas</span>
                </a>
            </li>

            <li>
                <a href="{{ route('pengaduan.index') }}"
                    class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg @if (request()->routeIs('pengaduan.*')) sidebar-active
                    @else
                    sidebar @endif">
                    <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Pengaduan</span>
                </a>
            </li>

            @if (auth()->user()->is_superadmin)
                <li>
                    <a href="{{ route('users.index') }}"
                        class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg @if (request()->routeIs('users.*')) sidebar-active
                        @else
                        sidebar @endif">
                        <svg class="flex-shrink-0 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Manajement User</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
