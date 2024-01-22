@extends('layouts.base')

@section('content')
    <!-- Breadcumbs -->
    <ol id="nav2" class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row lg:items-s gap-4 justify-between whitespace-nowrap pt-5"
        aria-label="Breadcrumb">
        <div>
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
                   href="/">
                    <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" /></svg>
                    Home
                </a>
                <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" /></svg>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
                aria-current="page">
                <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <rect width="7" height="7" x="14" y="3" rx="1" />
                    <path
                        d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3" />
                </svg>
                Products
            </li>
        </div>
        <div class="min-w-[20rem] lg:min-w-[30rem]">
            <div class="flex shadow-sm h-10">
                <input type="text" id="hs-trailing-button-add-on-with-icon" placeholder="Cari produk"
                       name="hs-trailing-button-add-on-with-icon"
                       class="py-3 px-4 block w-full border-2 shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                <button type="button"
                        class="h-full w-14 flex-shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold border border-transparent bg-stone-700 text-white hover:bg-stone-800 disabled:opacity-50 disabled:pointer-events-none">
                    <svg class="flex-shrink-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" /></svg>
                </button>
            </div>
        </div>
    </ol>
    <!-- Navbar End -->

    <!-- Products -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <div class="grid grid-cols-5 gap-5 justify-center content-center">
            <div class="col-span-1 hidden lg:grid">
                <div>
                    <h1 class="text-xl font-medium">Filter by:</h1>
                </div>
                <hr class="my-5">
                <div>
                    <h1 class="text-lg font-medium mb-4">Jenis Bunga:</h1>
                    <div class="grid grid-cols-2 gap-2">
                        <label for="mawar"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="mawar" >
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Mawar</span>
                        </label>

                        <label for="lily"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="lily">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">lily</span>
                        </label>

                        <label for="Tulip"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Tulip">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Tulip</span>
                        </label>

                        <label for="Anggrek"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Anggrek">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Anggrek</span>
                        </label>

                        <label for="Melati"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Melati">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Melati</span>
                        </label>

                        <label for="Daisy"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Daisy">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Daisy</span>
                        </label>
                    </div>
                </div>
                <hr class="my-5">
                <div>
                    <h1 class="text-lg font-medium mb-4">Model Bunga:</h1>
                    <div class="grid gap-2">
                        <label for="Bucket"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Bucket" >
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Bucket</span>
                        </label>

                        <label for="Papan"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Papan">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Papan</span>
                        </label>

                        <label for="Box"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Box">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Box</span>
                        </label>

                        <label for="Standing"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Standing">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Standing</span>
                        </label>
                    </div>
                </div>
                <hr class="my-5">
                <div>
                    <h1 class="text-lg font-medium mb-4">Moment Bunga:</h1>
                    <div class="grid gap-2">

                        <h1>Ungkapan</h1>
                        <label for="Romantis"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Romantis" >
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Romantis</span>
                        </label>

                        <label for="Duka Cita"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Duka Cita">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Duka Cita</span>
                        </label>

                        <label for="Tulip"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Tulip">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Tulip</span>
                        </label>

                        <h1>Perayaan</h1>
                        <label for="Anggrek"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Anggrek">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Anggrek</span>
                        </label>

                        <label for="Melati"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Melati">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Melati</span>
                        </label>

                        <label for="Daisy"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Daisy">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Daisy</span>
                        </label>

                        <h1>Selamat</h1>
                        <label for="Anggrek"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Anggrek">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Anggrek</span>
                        </label>

                        <label for="Melati"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Melati">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Melati</span>
                        </label>

                        <label for="Daisy"
                               class="max-w-xs flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            <input type="checkbox"
                                   class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                   id="Daisy">
                            <span class="text-sm text-gray-500 ms-3 dark:text-gray-400">Daisy</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-span-5 lg:col-span-4">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 justify-center items-center">

                    @foreach($products as $product)
                        <!-- Produk Card -->
                        <div class="group flex w-full flex-col overflow-hidden shadow-lg rounded-lg">
                            <a class="relative flex h-40 lg:h-80 overflow-hidden" href="/detail-product/{{ $product->id }}">
                                <img class="absolute top-0 right-0 h-full w-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"
                                     src="{{ $product->photourl }}"
                                     alt="product image" />
                                <div
                                    class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
                                    <button
                                        class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button
                                        class="flex h-10 w-10 pl-2 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                        </svg>
                                    </button>
                                </div>
                            </a>
                            <div class="py-3 bg-stone-300">
                                <a href="#">
                                    <h5 class="text-center tracking-tight text-gray-500 font-bold text-sm px-3">{{ $product->judul }}</h5>
                                </a>
                                <div class="flex justify-center">
                                    <p>
                                        <span class="font-bold text-gray-900">Rp {{ number_format($product->harga, '0', ',') }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
