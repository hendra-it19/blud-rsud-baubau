@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64 lg:p-10">

        <div class="flex justify-between gap-5 mb-7 lg:mb-12">
            <div class="flex flex-col gap-4">
                <h5 class="text-2xl font-semibold capitalize">Tambah E-Berkas</h5>
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
                            <a href="{{ route('anjab.index') }}" class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-700 hover:text-primary-600 rtl:rotate-180"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-700 hover:text-primary-700 ms-1 md:ms-2">E-Berkas</span>
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
            <form action="{{ route('anjab.store') }}" class="p-1 rounded shadow sm:rounded-lg md:p-4" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">

                    <div class="input-group">
                        <label for="nama_berkas" class="block mb-2 text-sm font-medium text-gray-900">
                            Nama Berkas
                        </label>
                        <input type="text" id="nama_berkas" name="nama_berkas"
                            class="input @error('nama_berkas')
                                is-invalid
                            @enderror"
                            placeholder="nama berkas" required value="{{ old('nama_berkas') }}">
                        @error('nama_berkas')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="jenis_berkas" class="block mb-2 text-sm font-medium text-gray-900">
                            Jenis Berkas
                        </label>
                        <input type="text" id="jenis_berkas" name="jenis_berkas"
                            class="input @error('jenis_berkas')
                                is-invalid
                            @enderror"
                            placeholder="jenis berkas" required value="{{ old('jenis_berkas') }}">
                        @error('jenis_berkas')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="file" class="block mb-2 text-sm font-medium text-gray-900">
                            File
                        </label>
                        <input type="file" name="file" id="file" accept="application/pdf" required
                            class="w-full border rounded-md cursor-pointer @error('file')
                                is-invalid
                            @enderror">
                        @error('file')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('anjab.index') }}"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 me-2 focus:outline-none">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-5 py-2 mb-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 me-2 focus:outline-none">
                        Upload E-Berkas
                    </button>

                </div>
            </form>
        </div>

    </div>
@endsection
