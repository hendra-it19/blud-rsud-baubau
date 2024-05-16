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
                                        Booking
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>

                <h2 class="text-white font-semibold text-xl lg:text-4xl tracking-wide">Booking</h2>
            </div>
        </div>
    </section>

    <section class="min-h-screen  p-2 lg:px-10 lg:pb-10">
        <h2 class="text-gray-600 font-semibold tracking-wider text-xl mg:text-2xl lg:text-3xl  mb-2 lg:mb-8">
            Buat Janji/Booking Pemeriksaan
        </h2>
        @error('tanggal')
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-red-800 rounded-lg shadow bg-red-50 dark:bg-gray-800 dark:text-red-400 w-full max-w-2xl"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="text-sm font-medium ms-3">
                    Booking harus dilakukan minimal sehari sebelum pemeriksaan
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @enderror
        @error('captcha')
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-red-800 rounded-lg shadow bg-red-50 dark:bg-gray-800 dark:text-red-400 w-full max-w-2xl"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="text-sm font-medium ms-3">
                    Koda Captcha Yang anda masukkan salah
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @enderror
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-[55%] lg:w-[65%]">
                <div>
                    <form action="{{ url('/booking') }}" method="post"
                        class="flex flex-col w-full max-w-md lg:max-w-2xl gap-2 mx-auto lg:mx-0">
                        @csrf
                        @method('post')
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="nama_lengkap" id="nama"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                placeholder="" required value="{{ old('nama_lengkap') }}" />
                            <label for="nama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama Lengkap
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="alamat" id="alamat"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                placeholder="" required value="{{ old('alamat') }}" />
                            <label for="alamat"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Alamat
                            </label>
                        </div>
                        <div class="flex gap-5">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="number" name="nomor_hp" id="nomor_hp"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder="" required value="{{ old('nomor_hp') }}" />
                                <label for="nomor_hp"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Nomor HP/Telephone
                                </label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="email" name="email" id="email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder="" required value="{{ old('email') }}" />
                                <label for="email"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Email
                                </label>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="date" name="tanggal" id="tanggal"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder="" required value="{{ old('tanggal') }}" />
                                <label for="tanggal"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Pilih Tanggal
                                </label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="poliklinik" class="sr-only">Underline select</label>
                                <select id="poliklinik" name="poliklinik"
                                    class="block py-2.5 px-0 w-full text-sm text-grey-700 bg-transparent border-0 border-b-2 border-green-200 appearance-none dark:text-green-400 dark:border-green-700 focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    required>
                                    <option>Pilih Poliklinik</option>
                                    @foreach ($poliklinik as $row)
                                        <option value="{{ $row->kd_poli }}" @selected(old('poliklinik') == $row->kd_poli)>
                                            {{ $row->nm_poli }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="tambahan_pesan" id="tambahan_pesan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                placeholder=" " rows="4" />{{ old('tambahan_pesan') }}</textarea>
                            <label for="tambahan_pesan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Tambahan Pesan
                            </label>
                        </div>
                        <div class="mb-6 flex gap-5">
                            <div class="captcha flex gap-5">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button"
                                    class="reload inline-block p-2 bg-red-500 hover:bg-red-600 w-fit h-fit text-white rounded-md"
                                    id="reload">
                                    &#x21bb;
                                </button>
                            </div>
                            <input id="captcha" type="text"
                                class="py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-green-600"
                                placeholder="Enter Captcha" name="captcha">
                        </div>
                        <button type="submit"
                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Kirimkan Data Booking
                        </button>
                    </form>
                </div>
            </div>
            <div class="md:w-[45%] lg:w-[35%]">
                <x-side-berita />
            </div>
        </div>
    </section>

    <x-mitra-section></x-mitra-section>
@endsection


@push('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
@push('scripts')
    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endpush
