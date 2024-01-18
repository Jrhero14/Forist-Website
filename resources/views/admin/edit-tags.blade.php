@extends('admin.layouts.baseadmin')

@section('content')
    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <div class="grid grid-cols-4 gap-5 px-5 lg:px-10">
            <!-- Breadcumbs -->
            <div class="col-span-4">
                <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
                           href="/admin/dashboard">
                            <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" /></svg>
                            Admin
                        </a>
                        <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" /></svg>
                    </li>
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
                           href="/admin/products">
                            <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <rect width="7" height="7" x="14" y="3" rx="1" />
                                <path
                                    d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3" />
                            </svg>
                            Products
                            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400"
                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" /></svg>
                        </a>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
                        aria-current="page">
                        Tags
                    </li>
                </ol>
            </div>

            @include('admin.layouts.navside')

            <div class="col-span-4 lg:col-span-3 border-2 border-stone-400 rounded-lg p-10 shadow-lg">
                <div class="grid grid-cols-2 gap-7">

                    <div class="col-span-1">
                        <h1 class="my-2 font-bold">Kategori Jenis Bunga</h1>
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div
                                        class="border rounded-t-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                        <table
                                            class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Nama Jenis Bunga</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Edit</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Hapus</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @foreach($jenis_bungas as $jenis)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{ $jenis->nama_bunga }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <button type="button" data-hs-overlay="#modal-edit-jenis{{ $loop->index }}"
                                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-stone-600 hover:text-stone-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                        <div id="modal-edit-jenis{{ $loop->index }}"
                                                             class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]"
                                                             data-hs-overlay-keyboard="false">
                                                            <div
                                                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                                                <div
                                                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                                    <div
                                                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                                        <h3
                                                                            class="font-bold text-gray-800 dark:text-white">
                                                                            Edit Jenis Bunga
                                                                        </h3>
                                                                        <button type="button"
                                                                                class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                                data-hs-overlay="#modal-edit-jenis{{ $loop->index }}">
                                                                                               <span
                                                                                                   class="sr-only">Close</span>
                                                                            <svg class="flex-shrink-0 w-4 h-4"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24"
                                                                                 height="24"
                                                                                 viewBox="0 0 24 24"
                                                                                 fill="none"
                                                                                 stroke="currentColor"
                                                                                 stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round">
                                                                                <path
                                                                                    d="M18 6 6 18" />
                                                                                <path
                                                                                    d="m6 6 12 12" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <div class="p-4">
                                                                        <form id="formeditjenisbunga{{$jenis->id}}" action="/admin/edit-tags/update-jenis" class="flex flex-col w-full justify-start items-start" method="POST">
                                                                            @csrf
                                                                            <label for="namajenislabel{{ $jenis->nama_bunga }}"
                                                                                   class="mb-3 font-semibold">Jenis
                                                                                Bunga</label>
                                                                            <input type="hidden" name="idJenisBunga" value="{{$jenis->id}}">
                                                                            <input type="text"
                                                                                   name="editJenisBunga"
                                                                                   id="namajenislabel{{ $jenis->nama_bunga }}"
                                                                                   class="p-1 px-2 border-2 mt-2 rounded-lg w-full" value="{{ $jenis->nama_bunga }}">
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                                        <button type="button"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                                data-hs-overlay="#modal-edit-jenis{{ $loop->index }}">
                                                                            Close
                                                                        </button>
                                                                        <button type="submit" form="formeditjenisbunga{{$jenis->id}}"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-stone-500 hover:bg-stone-600 text-white disabled:opacity-50 disabled:pointer-events-none">
                                                                            Simpan Perubahan
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <form action="/admin/edit-tags/delete-jenis" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{ $jenis->id }}" name="idJenis">
                                                            <button type="submit"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button"
                                class="w-full bg-stone-500 hover:bg-stone-600 text-white rounded-b-lg py-1 font-semibold"
                                data-hs-overlay="#modal-tambah-jenis">Tambah</button>

                        <div id="modal-tambah-jenis"
                             class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]"
                             data-hs-overlay-keyboard="false">
                            <div
                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                    <div
                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                        <h3 class="font-bold text-gray-800 dark:text-white">
                                            Tambah Jenis Bunga
                                        </h3>
                                        <button type="button"
                                                class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                data-hs-overlay="#modal-tambah-jenis">
                                            <span class="sr-only">Close</span>
                                            <svg class="flex-shrink-0 w-4 h-4"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                <path d="M18 6 6 18" />
                                                <path d="m6 6 12 12" /></svg>
                                        </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <form method="POST" action="/admin/edit-tags/add-jenis" id="formtambahjenis">
                                            @csrf
                                            <label for="namajenis" class="mb-5 font-semibold">Jenis
                                                Bunga</label>
                                            <input type="text" id="namajenis" name="jenisbunga"
                                                   class="w-full p-1 px-2 border-2 mt-2 rounded-lg" required>
                                        </form>
                                    </div>
                                    <div
                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                        <button type="button"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                data-hs-overlay="#modal-tambah-jenis">
                                            Close
                                        </button>
                                        <button type="submit" form="formtambahjenis"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-stone-500 hover:bg-stone-600 text-white disabled:opacity-50 disabled:pointer-events-none">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <h1 class="my-2 font-bold">Kategori Moment Bunga</h1>
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div
                                        class="border rounded-t-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                        <table
                                            class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Nama Moment Bunga</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Edit</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Hapus</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @foreach($moment_bungas as $moment)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{$moment->nama_moment}}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <button type="button" data-hs-overlay="#modal-edit-moment{{ $loop->index }}"
                                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-stone-600 hover:text-stone-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                        <div id="modal-edit-moment{{ $loop->index }}"
                                                             class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]"
                                                             data-hs-overlay-keyboard="false">
                                                            <div
                                                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                                                <div
                                                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                                    <div
                                                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                                        <h3
                                                                            class="font-bold text-gray-800 dark:text-white">
                                                                            Edit Moment Bunga
                                                                        </h3>
                                                                        <button type="button"
                                                                                class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                                data-hs-overlay="#modal-edit-moment{{ $loop->index }}">
                                                                                               <span
                                                                                                   class="sr-only">Close</span>
                                                                            <svg class="flex-shrink-0 w-4 h-4"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24"
                                                                                 height="24"
                                                                                 viewBox="0 0 24 24"
                                                                                 fill="none"
                                                                                 stroke="currentColor"
                                                                                 stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round">
                                                                                <path
                                                                                    d="M18 6 6 18" />
                                                                                <path
                                                                                    d="m6 6 12 12" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <div class="p-4">
                                                                        <form id="formeditmomentbunga{{$moment->id}}" action="/admin/edit-tags/update-moment" class="flex flex-col w-full justify-start items-start" method="POST">
                                                                            @csrf
                                                                            <label for="namamomentlabel{{ $moment->nama_moment }}"
                                                                                   class="mb-3 font-semibold">Moment
                                                                                Bunga</label>
                                                                            <input type="hidden" name="idMomentBunga" value="{{$moment->id}}">
                                                                            <input type="text"
                                                                                   name="editMomentBunga"
                                                                                   id="namamomentlabel{{ $moment->nama_moment }}"
                                                                                   class="p-1 px-2 border-2 mt-2 rounded-lg w-full" value="{{ $moment->nama_moment }}" required>
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                                        <button type="button"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                                data-hs-overlay="#modal-edit-moment{{ $loop->index }}">
                                                                            Close
                                                                        </button>
                                                                        <button type="submit" form="formeditmomentbunga{{$moment->id}}"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-stone-500 hover:bg-stone-600 text-white disabled:opacity-50 disabled:pointer-events-none">
                                                                            Simpan Perubahan
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <form action="/admin/edit-tags/delete-moment" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="idMomentBunga" value="{{ $moment->id }}">
                                                            <button type="submit"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button"
                                class="w-full bg-stone-500 hover:bg-stone-600 font-semibold text-white rounded-b-lg py-1"
                                data-hs-overlay="#modal-tambah-moment">Tambah</button>

                        <div id="modal-tambah-moment"
                             class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]"
                             data-hs-overlay-keyboard="false">
                            <div
                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                    <div
                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                        <h3 class="font-bold text-gray-800 dark:text-white">
                                            Tambah Moment Bunga
                                        </h3>
                                        <button type="button"
                                                class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                data-hs-overlay="#modal-tambah-moment">
                                            <span class="sr-only">Close</span>
                                            <svg class="flex-shrink-0 w-4 h-4"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                <path d="M18 6 6 18" />
                                                <path d="m6 6 12 12" /></svg>
                                        </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <form id="formAddMoment" action="/admin/edit-tags/add-moment" method="POST">
                                            @csrf
                                            <label for="namamoment" class="mb-5 font-semibold">Moment
                                                Bunga</label>
                                            <input type="text" id="namamoment" name="namaMoment"
                                                   class="w-full p-1 px-2 border-2 mt-2 rounded-lg" required>
                                        </form>
                                    </div>
                                    <div
                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                        <button type="button"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                data-hs-overlay="#modal-tambah-moment">
                                            Close
                                        </button>
                                        <button type="submit" form="formAddMoment"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-stone-500 hover:bg-stone-600 text-white disabled:opacity-50 disabled:pointer-events-none">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <h1 class="my-2 font-bold">Kategori Model Bunga</h1>
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div
                                        class="border rounded-t-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                        <table
                                            class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Nama Model Bunga</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Edit</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Hapus</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @foreach($model_bungas as $model)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{$model->nama_model}}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <button type="button" data-hs-overlay="#modal-edit-model{{ $loop->index }}"
                                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-stone-600 hover:text-stone-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                        <div id="modal-edit-model{{ $loop->index }}"
                                                             class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]"
                                                             data-hs-overlay-keyboard="false">
                                                            <div
                                                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                                                <div
                                                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                                    <div
                                                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                                        <h3
                                                                            class="font-bold text-gray-800 dark:text-white">
                                                                            Edit Model Bunga
                                                                        </h3>
                                                                        <button type="button"
                                                                                class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                                data-hs-overlay="#modal-edit-model{{ $loop->index }}">
                                                                                               <span
                                                                                                   class="sr-only">Close</span>
                                                                            <svg class="flex-shrink-0 w-4 h-4"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24"
                                                                                 height="24"
                                                                                 viewBox="0 0 24 24"
                                                                                 fill="none"
                                                                                 stroke="currentColor"
                                                                                 stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round">
                                                                                <path
                                                                                    d="M18 6 6 18" />
                                                                                <path
                                                                                    d="m6 6 12 12" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <div class="p-4">
                                                                        <form id="formeditmodelbunga{{$model->id}}" action="/admin/edit-tags/update-model" class="flex flex-col w-full justify-start items-start" method="POST">
                                                                            @csrf
                                                                            <label for="namamodellabel{{ $model->nama_model }}"
                                                                                   class="mb-3 font-semibold">Model
                                                                                Bunga</label>
                                                                            <input type="hidden" name="idModelBunga" value="{{ $model->id }}">
                                                                            <input type="text"
                                                                                   name="editModelBunga"
                                                                                   id="namamodellabel{{ $model->nama_model }}"
                                                                                   class="p-1 px-2 border-2 mt-2 rounded-lg w-full" value="{{ $model->nama_model }}">
                                                                        </form>
                                                                    </div>
                                                                    <div
                                                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                                        <button type="button"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                                                data-hs-overlay="#modal-edit-model{{ $loop->index }}">
                                                                            Close
                                                                        </button>
                                                                        <button type="submit" form="formeditmodelbunga{{$model->id}}"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-stone-500 hover:bg-stone-600 text-white disabled:opacity-50 disabled:pointer-events-none">
                                                                            Simpan Perubahan
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <form action="/admin/edit-tags/delete-model" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{ $model->id }}" name="idModelBunga">
                                                            <button type="submit"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button"
                                class="w-full bg-stone-500 hover:bg-stone-600 font-semibold text-white rounded-b-lg py-1"
                                data-hs-overlay="#modal-tambah-model">Tambah</button>

                        <div id="modal-tambah-model"
                             class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]"
                             data-hs-overlay-keyboard="false">
                            <div
                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                    <div
                                        class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                        <h3 class="font-bold text-gray-800 dark:text-white">
                                            Tambah Model Bunga
                                        </h3>
                                        <button type="button"
                                                class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                data-hs-overlay="#modal-tambah-model">
                                            <span class="sr-only">Close</span>
                                            <svg class="flex-shrink-0 w-4 h-4"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                <path d="M18 6 6 18" />
                                                <path d="m6 6 12 12" /></svg>
                                        </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <form id="formTambahModelBunga" action="/admin/edit-tags/add-model" method="POST">
                                            @csrf
                                            <label for="modelbunga" class="mb-5 font-semibold">Model
                                                Bunga</label>
                                            <input type="text" id="modelbunga" name="namaModel"
                                                   class="w-full p-1 px-2 border-2 mt-2 rounded-lg" required>
                                        </form >
                                    </div>
                                    <div
                                        class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                        <button type="button"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                data-hs-overlay="#modal-tambah-model">
                                            Close
                                        </button>
                                        <button type="submit" form="formTambahModelBunga"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-stone-500 hover:bg-stone-600 text-white disabled:opacity-50 disabled:pointer-events-none">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
