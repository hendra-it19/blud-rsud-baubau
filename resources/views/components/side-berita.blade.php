<div class="mt-14 md:mt-0">
    <div class="shadow">
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
            <h4 class="text-xl font-semibold text-gray-600">Berita Terbaru</h4>
            <hr class="h-1 rounded-full bg-gray-700 w-[60%]">
        </div>
        <div class="flex flex-col gap-3 p-4">
            @foreach ($beritaTerbaru as $row)
                <a href="{{ url('/berita', $row->slug) }}" class="flex gap-4 group">
                    <img src="{{ asset($row->foto) }}" alt=""
                        class="object-cover object-center rounded shadow-sm h-14 w-14 group-hover:shadow">
                    <div>
                        <p class="group-hover:underline group-hover:text-primary-700">{{ $row->judul }}</p>
                        <p class="text-sm line-clamp-1">{{ $row->excerpt }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
