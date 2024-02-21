@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64 lg:p-10">

        <div class="flex justify-between gap-5 mb-7 lg:mb-12">
            <div class="flex flex-col gap-4">
                <h5 class="text-2xl font-semibold capitalize">Daftar Dokter</h5>
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
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">dokter</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="flex items-end">
                {{-- <a href="{{ route('dokter.create') }}" type="button"
                    class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white rounded-lg w-fit h-fit bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 me-2 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    Tambah Data
                </a> --}}
            </div>
        </div>

        @session('success')
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-green-800 rounded-lg shadow bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="text-sm font-medium ms-3">
                    {{ Session::get('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endsession
        @session('errors')
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-red-800 rounded-lg shadow bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="text-sm font-medium ms-3">
                    {{ Session::get('errors') }}
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
        @endsession

        <div class="relative overflow-x-auto rounded shadow sm:rounded-lg">
            <table id="table"
                class="table w-full text-sm text-left text-gray-500 display rtl:text-right dark:text-gray-400 text-[11px]"
                style="width:100%">
                <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-[11px]">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KD Dokter
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Dokter
                        </th>
                        <th scope="col" class="px-6 py-3">
                            JK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tempat Lahir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Lahir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gol Darah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Agama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Almt Tinggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Handphone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Nikah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            KD Spesialis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No Izin Praktek
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr
                            class="border-b text-[11px] odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $row->kd_dokter }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->nm_dokter }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->jk }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->tmp_lahir }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->tgl_lahir }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->gol_drh }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->agama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->almt_tgl }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->no_telp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->stts_nikah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->kd_sps }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->no_ijn_praktek }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->status }}
                            </td>
                            <td class="px-1 py-1">
                                <img src="{{ asset($row->foto) }}" alt="Foto Pegawai"
                                    class="object-cover w-16 h-16 bg-cover rounded-md">
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('dokter.edit', $row->kd_dokter) }}"
                                    class="inline-block font-medium text-primary-600 hover:text-primary-700">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m10.8 17.8-6.4 2.1 2.1-6.4m4.3 4.3L19 9a3 3 0 0 0-4-4l-8.4 8.6m4.3 4.3-4.3-4.3m2.1 2.1L15 9.1m-2.1-2 4.2 4.2" />
                                    </svg>
                                </a>
                                {{-- <form action="{{ route('dokter.destroy', $row->kd_dokter) }}" class="inline-block"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Yakin ingin menghapus data {{ $row->judul }}?')"
                                        class="font-medium text-red-600 hover:text-red-700">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('asset/data-tables/jquery.dataTables.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('asset/data-tables/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('asset/data-tables/jquery.dataTables.min.js') }}"></script>
    <script>
        new DataTable('#table');
    </script>
@endpush
