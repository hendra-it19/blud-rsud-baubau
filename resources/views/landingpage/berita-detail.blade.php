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
                                    <a href="{{ url('/berita') }}"
                                        class="text-xs font-medium text-gray-200 ms-1 lg:text-sm md:ms-2">
                                        Berita
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
                                        Detail
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

    <section class="p-2 lg:px-10">
        <h2 class="mb-2 text-xl font-semibold tracking-wider text-gray-600 mg:text-2xl lg:text-3xl lg:mb-8">
            {{ $berita->judul }}
        </h2>
        <div class="flex flex-col gap-6 md:flex-row">
            <div class="flex flex-col gap-4 lg:gap-6 w-full md:w-[55%] lg:w-[65%]">
                <article>
                    <div class="w-full h-40 overflow-hidden rounded lg:h-60">
                        <img src="{{ asset($berita->foto) }}" alt="{{ $berita->judul }}"
                            class="object-cover w-full h-full bg-cover">
                    </div>
                    <div class="mt-3 mb-8 text-lg font-semibold text-gray-800 capitalize">
                        <div class="flex flex-wrap gap-3" role="group">
                            <a type="button" class="inline-flex items-center px-0 py-0 text-sm font-medium text-gray-600">
                                <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 20a8 8 0 0 1-5-1.8v-.6c0-1.8 1.5-3.3 3.3-3.3h3.4c1.8 0 3.3 1.5 3.3 3.3v.6a8 8 0 0 1-5 1.8ZM2 12a10 10 0 1 1 10 10A10 10 0 0 1 2 12Zm10-5a3.3 3.3 0 0 0-3.3 3.3c0 1.7 1.5 3.2 3.3 3.2 1.8 0 3.3-1.5 3.3-3.3C15.3 8.6 13.8 7 12 7Z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $berita->user->nama }}
                            </a>
                            <a type="button" class="inline-flex items-center px-0 py-0 text-sm font-medium text-gray-600">
                                <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M3 6c0-1.1.9-2 2-2h5.5a2 2 0 0 1 1.6.7L14 7H3V6Zm0 3v10c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V9H3Z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $berita->category->nama_kategori }}
                            </a>
                            <a type="button" class="inline-flex items-center px-0 py-0 text-sm font-medium text-gray-600">
                                <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $carbon::parse($berita->created_at)->diffForHumans() }}
                            </a>
                            <a type="button" class="inline-flex items-center px-0 py-0 text-sm font-medium text-gray-600">
                                <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M3.6 4.5c.3-.3.8-.5 1.3-.5H19a1.9 1.9 0 0 1 2 1.9V15a1.9 1.9 0 0 1-1.9 1.9h-3.6l-2.7 3.6a1 1 0 0 1-1.6 0L8.5 17H4.9A1.9 1.9 0 0 1 3 15.1V6c0-.5.2-1 .6-1.4Zm4 3a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2h-8Zm0 3.5a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2H7.6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="disqus-comment-count" data-disqus-url="{{ url()->current() }}">
                                    Jumlah Komentar
                                </span>
                            </a>
                            <a type="button" class="inline-flex items-center px-0 py-0 text-sm font-medium text-gray-600">
                                <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4 6-9 6s-9-4.8-9-6c0-1.2 4-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                {{ $jumlahViews }} Kali Baca
                            </a>
                        </div>
                    </div>
                    <div class="text-justify konten">
                        {!! $berita->konten !!}
                    </div>
                </article>


            </div>
            <div class="md:w-[45%] lg:w-[35%]">
                <x-side-berita></x-side-berita>
            </div>
        </div>
    </section>

    <div id="disqus_thread" class="m-5 lg:mx-10 pt-10 h-fit mb-10 pb-10 block"></div>


    <x-mitra-section></x-mitra-section>
@endsection

@push('styles')
    <style>
        .konten ul li {
            list-style-type: disc;
            list-style-position: inside;
        }

        .konten ol li {
            list-style-type: decimal;
            list-style-position: inside;
        }
    </style>
@endpush

@push('scripts')
    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        var disqus_config = function() {
            this.page.url = "{{ url()->current() }}";
            this.page.identifier = "{{ $berita->slug }}";
        };
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://rsud-baubau.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>
        Please enable JavaScript to view the
        <a href="https://disqus.com/?ref_noscript">
            comments powered byDisqus.
        </a>
    </noscript>
    <script>
        DISQUSWIDGETS.getCount({
            reset: true
        });
    </script>
    <script id="dsq-count-scr" src="//rsud-baubau.disqus.com/count.js" async></script>
@endpush
