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
                                        Berita
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>

                <h2 class="text-xl font-semibold tracking-wide text-white lg:text-4xl">Berita</h2>
            </div>
        </div>
    </section>


    <section class="min-h-screen p-2 lg:px-10 lg:pb-10">
        <h2 class="mb-2 text-xl font-semibold tracking-wider text-gray-600 mg:text-2xl lg:text-3xl lg:mb-8">
            Berita Terbaru
        </h2>
        <div class="flex flex-col gap-6 md:flex-row">
            <div class="flex flex-col gap-4 lg:gap-6 w-full md:w-[55%] lg:w-[65%]">
                @if (count($berita) > 0)
                    @foreach ($berita as $row)
                        <article class="flex items-center w-full gap-1 p-2 text-base rounded-md shadow">
                            <div class="flex flex-col w-full gap-1 lg:gap-2">
                                <a href="{{ url('/berita', $row['slug']) }}"
                                    class="text-base capitalize cursor-pointer lg:text-lg hover:underline hover:text-primary-700">{{ $row->judul }}</a>
                                <div class="text-xs text-gray-500 line-clamp-2 lg:text-base">
                                    {!! $row->excerpt !!}
                                </div>
                                <div class="flex gap-2 text-xs text-gray-500 lg:text-sm">
                                    <a href="{{ url('/berita?kategori=' . $row->category->nama_kategori) }}"
                                        class="flex items-center gap-0.5  cursor-pointer lowercase">
                                        <svg class="w-4 h-4 text-gray-800 lg:h-5 lg:w-5 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 11H4m15.5 5c.3 0 .5-.2.5-.5V8c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L13 4.4a1 1 0 0 0-.8-.4H8a1 1 0 0 0-1 1M4 9v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L10 8.4a1 1 0 0 0-.8-.4H5a1 1 0 0 0-1 1Z" />
                                        </svg>
                                        {{ $row->category->nama_kategori }}
                                    </a>
                                    <div class="flex items-center gap-0.5 lowercase">
                                        <svg class="w-4 h-4 text-gray-800 lg:h-5 lg:w-5 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Zm3-7h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Zm-8 4h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Z" />
                                        </svg>
                                        {{ $carbon::parse($row->created_at)->format('d M Y') }}
                                    </div>
                                </div>
                            </div>
                            <div class="w-[48%] h-20 aspect-auto rounded-md overflow-hidden  cursor-pointer group">
                                <img src="{{ asset($row->foto) }}" alt="{{ $row->slug }}"
                                    class="object-cover w-full h-full transition duration-300 bg-cover aspect-auto group-hover:scale-110"
                                    loading="lazy">
                            </div>
                        </article>
                    @endforeach
                    {!! $berita->links() !!}
                @else
                    <h1>Data Postingan Berita Masih Kosong!</h1>
                @endif
            </div>
            <div class="md:w-[45%] lg:w-[35%]">
                <x-side-kategori></x-side-kategori>
            </div>
        </div>
    </section>

    <x-mitra-section></x-mitra-section>
@endsection
