@extends('layouts.adminpage.main')

@section('konten')
    <div class="p-4 sm:ml-64 lg:p-10">

        <div class="flex justify-between gap-5 mb-7 lg:mb-12">
            <div class="flex flex-col gap-4">
                <h5 class="text-2xl font-semibold capitalize">Daftar Pengaduan</h5>
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
                                    class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">Pengaduan</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="flex items-end">

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
                        <th scope="col" class="px-6 py-3 w-fit">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3 w-fit">
                            Nama Lengkap
                        </th>
                        <th scope="col" class="px-6 py-3 w-fit">
                            Nomor Handphone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            laporan
                        </th>
                        <th scope="col" class="px-6 py-3 w-fit">
                            Tanggal Dibuat
                        </th>
                        <th scope="col" class="px-6 py-3 w-fit">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr
                            class="border-b text-[11px] odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-fit">
                                {{ $no++ }}
                            </th>
                            <td class="px-6 py-4 w-fit">
                                {{ $row->nama_lengkap }}
                            </td>
                            <td class="px-6 py-4 w-fit">
                                {{ $row->nomor_hp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->deskripsi }}
                            </td>
                            <td class="px-6 py-4 w-fit">
                                {{ $row->created_at }}
                            </td>
                            <td class="px-6 py-4 w-fit">
                                <form action="{{ route('pengaduan.destroy', $row->id) }}" class="inline-block"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ?')"
                                        class="font-medium text-red-600 hover:text-red-700">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </button>
                                </form>
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
