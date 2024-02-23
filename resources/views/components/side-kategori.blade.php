<div class="mt-14 md:mt-0">
    <div class="shadow-sm">
        <div class="relative h-48 overflow-hidden rounded">
            <img src="{{ asset('asset/image/unggulan/mobil-donor-darah.jpg') }}" alt="" class="w-full object-cove">
            <div
                class="absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-end p-4 bg-gradient-to-t from-gray-900 to-transparent ">
                <h4 class="text-2xl font-bold text-white">Kunjungi Profil RSUD Kota Baubau</h4>
                <a href="{{ url('/profil') }}" class="text-secondary-500 hover:text-secondary-600">Lihat RSUD
                    Baubau lebih dekat ></a>
            </div>
        </div>
    </div>
    <div class="mt-8">
        <div class="flex items-center justify-between">
            <h4 class="text-xl font-semibold text-gray-600">Daftar Kategori</h4>
            <hr class="h-1 rounded-full bg-gray-700 w-[60%]">
        </div>
        <div class="flex flex-col gap-3 p-4">
            <div class="flex items-center gap-4">
                <svg class="w-8 h-8 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 11H4m15.5 5c.3 0 .5-.2.5-.5V8c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L13 4.4a1 1 0 0 0-.8-.4H8a1 1 0 0 0-1 1M4 9v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L10 8.4a1 1 0 0 0-.8-.4H5a1 1 0 0 0-1 1Z" />
                </svg>
                <div>
                    <a href="{{ url('/berita') }}" class="text-base font-semibold text-gray-700">
                        Semua Postingan ({{ $jumlahBerita }})
                    </a>
                </div>
            </div>
            @foreach ($kategori as $row)
                <div class="flex items-center gap-4">
                    <svg class="w-8 h-8 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11H4m15.5 5c.3 0 .5-.2.5-.5V8c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L13 4.4a1 1 0 0 0-.8-.4H8a1 1 0 0 0-1 1M4 9v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L10 8.4a1 1 0 0 0-.8-.4H5a1 1 0 0 0-1 1Z" />
                    </svg>
                    <div>
                        <a href="{{ url('/berita?kategori=' . $row->nama_kategori) }}"
                            class="text-base font-semibold text-gray-700">
                            {{ $row->nama_kategori }} ({{ count($row->postingan_beritas) }})
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
