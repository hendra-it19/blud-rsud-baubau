@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64 lg:p-10">

        <div class="flex justify-between gap-5 mb-7 lg:mb-12">
            <div class="flex flex-col gap-4">
                <h5 class="text-2xl font-semibold capitalize">Input Berita</h5>
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ url('/admin') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 22 21">
                                    <path
                                        d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                    <path
                                        d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('berita.index') }}" class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-700 hover:text-primary-600 rtl:rotate-180"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-700 hover:text-primary-700 ms-1 md:ms-2">Berita</span>
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">Tambah</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>


        <div class="relative">
            <form action="{{ route('berita.store') }}" class="p-1 rounded shadow sm:rounded-lg md:p-4" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-group">
                    <div class="input-group">
                        <label for="foto"
                            class="relative cursor-pointer w-[250px] h-[250px] overflow-hidden rounded-md block @error('foto')
                                is-invalid border-2
                            @enderror">
                            <img src="https://placehold.co/300x300?text=Klik+Untuk+Upload" alt="berita"
                                id="preview-selected-image" class="z-10 object-cover w-full obsolute">
                            <span class="absolute z-20 block my-auto text-center">Preview Foto</span>
                            <input type="file" name="foto" id="foto" accept="image/*" class="hidden"
                                onchange="previewImage(event)">
                        </label>
                        @error('foto')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">
                            Judul Berita
                        </label>
                        <input type="text" id="judul" name="judul"
                            class="input @error('judul')
                                is-invalid
                            @enderror"
                            placeholder="kegiatan" required value="{{ old('judul') }}">
                        @error('judul')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">
                            Kategori Berita
                        </label>
                        <select name="kategori" id="kategori" required
                            class="input @error('kategori')
                            is-invalid
                        @enderror">
                            <option value="">Pilih kategori</option>
                            @foreach ($kategori as $row)
                                <option value="{{ $row->id }}" @if ($row->id == old('kategori')) selected @endif>
                                    {{ $row->nama_kategori }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="w-full">
                    <label for="isi_berita" class="mb-2 font-semibold">
                        Isi berita / konten
                    </label>
                    <input type="hidden" name="isi_berita" id="isi_berita" value="{{ old('isi_berita') }}">
                    <trix-editor input="isi_berita"
                        class="input @error('isi_berita')
                        is-invalid
                    @enderror"></trix-editor>
                    @error('isi_berita')
                        <small class="text-red-500">
                            {{ $message }}
                        </small>
                    @enderror


                </div>

                <div class="mt-10">
                    <a href="{{ route('berita.index') }}"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 me-2 focus:outline-none">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 me-2 focus:outline-none">
                        Tambah Berita
                    </button>

                </div>
            </form>
        </div>

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('asset/trix/trix.css') }}">
    <script src="{{ asset('asset/trix/trix.js') }}"></script>
    <style>
        .trix-button-group--file-tools {
            display: none !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        const previewImage = (event) => {
            /**
             * Get the selected files.
             */
            const imageFiles = event.target.files;
            /**
             * Count the number of files selected.
             */
            const imageFilesLength = imageFiles.length;
            /**
             * If at least one image is selected, then proceed to display the preview.
             */
            if (imageFilesLength > 0) {
                /**
                 * Get the image path.
                 */
                const imageSrc = URL.createObjectURL(imageFiles[0]);
                /**
                 * Select the image preview element.
                 */
                const imagePreviewElement = document.querySelector("#preview-selected-image");
                /**
                 * Assign the path to the image preview element.
                 */
                imagePreviewElement.src = imageSrc;
                /**
                 * Show the element by changing the display value to "block".
                 */
                imagePreviewElement.style.display = "block";
            }
        };
    </script>
@endpush
