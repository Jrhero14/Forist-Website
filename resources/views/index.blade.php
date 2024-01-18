@extends('layouts.base')

@section('content')
    <!-- Nav -->
    <nav id="nav2" class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="relative flex flex-row justify-between items-center gap-x-8 border-t py-4 sm:py-0 dark:border-slate-700">
            <div class="flex items-center w-full sm:w-[auto]">

                <div class="w-full sm:hidden">
                    <!-- Search Button -->
                    <div class="h-100 w-full">
                        <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
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
                </div>

                <div
                    class="hs-collapse hidden overflow-hidden transition-all duration-300 absolute top-16 end-0 w-full rounded-lg bg-white sm:block sm:static sm:top-0 sm:w-full sm:max-h-full sm:bg-transparent sm:overflow-visible">
                    <div class="flex flex-col py-2 sm:flex-row sm:justify-end sm:gap-y-0 sm:gap-x-6 sm:py-0">
                        <!-- Jenis Bunga -->
                        <div
                            class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-3">
                            <button type="button"
                                    class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                Jenis Bunga
                                <svg class="ms-2 w-2.5 h-2.5 text-gray-600" width="16" height="16"
                                     viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-80 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                                <div class="w-full grid grid-cols-2">
                                    <div>
                                        <h1 class="py-2 px-3 font-semibold">Populer</h1>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Mawar
                                        </a>

                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Lily
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Tulip
                                        </a>
                                    </div>

                                    <div>
                                        <h1 class="py-2 px-3 font-semibold">Menarik</h1>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Anggrek
                                        </a>

                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Melati
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Daisy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Model Bunga -->
                        <div
                            class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-3">
                            <button type="button"
                                    class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                Model Bunga
                                <svg class="ms-2 w-2.5 h-2.5 text-gray-600" width="16" height="16"
                                     viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                   href="#">
                                    Bucket
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                   href="#">
                                    Papan
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                   href="#">
                                    Box
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                   href="#">
                                    Standing
                                </a>
                            </div>
                        </div>

                        <!-- Moment Bunga -->
                        <div
                            class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-3">
                            <button type="button"
                                    class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                Momen
                                <svg class="ms-2 w-2.5 h-2.5 text-gray-600" width="16" height="16"
                                     viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:shadow-md rounded-lg before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                                <div class="w-[40rem] grid grid-cols-3 bg-white rounded-lg p-2">
                                    <div>
                                        <h1 class="py-2 px-3 font-semibold">Ungkapan</h1>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Romantis
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Duka Cita
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Kesembuhan
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Terimakasih
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Permintaan Maaf
                                        </a>
                                    </div>

                                    <div>
                                        <h1 class="py-2 px-3 font-semibold">Perayaan</h1>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Ulang Tahun
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Valentine
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Anniversary
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Hari Raya
                                        </a>
                                    </div>

                                    <div>
                                        <h1 class="py-2 px-3 font-semibold">Selamat</h1>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Wisuda
                                        </a>

                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Pernikahan
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Kelahiran
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                           href="#">
                                            Peresmian
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Search Button -->
                        <div class="h-100 flex align-middle items-center absolute end-0 top-1">
                            <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
                            <div class="flex shadow-sm h-10">
                                <input type="text" id="hs-trailing-button-add-on-with-icon"
                                       placeholder="Cari produk" name="hs-trailing-button-add-on-with-icon"
                                       class="py-3 px-4 block w-[20rem] border-2 shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <button type="button"
                                        class="h-full w-14 flex-shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold border border-transparent bg-stone-700 text-white hover:bg-stone-800 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="flex-shrink-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8" />
                                        <path d="m21 21-4.3-4.3" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carosel Start -->
    <div data-hs-carousel='{
     "loadingClasses": "opacity-0",
     "isAutoPlay": true
   }' class="relative">
        <div class="hs-carousel relative overflow-hidden w-full min-h-[550px] bg-white rounded-lg">
            <div
                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <div class="hs-carousel-slide">
                    <div
                        class="flex justify-center h-full bg-[url('https://cdn.sariflorist.web.id/2023/01/revisi-banner-min.jpg')] bg-no-repeat bg-cover p-6">
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div
                        class="flex justify-center h-full bg-gray-200 bg-[url('https://www.prestisa.com/wp-content/uploads/2022/05/Banner_Mei_Web1.webp')] bg-no-repeat bg-cover p-6">
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div
                        class="flex justify-center h-full bg-gray-300 bg-[url('https://www.hasnaflorist.com/wp-content/uploads/2020/06/selamat-datang-asna-florist-min-3.jpg')] bg-no-repeat bg-cover p-6">
                    </div>
                </div>
            </div>
        </div>

        <button type="button"
                class="absolute left-5 top-40 hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none inline-flex justify-center items-center w-[46px] h-10 text-gray-800 rounded-full hover:bg-gray-800/[.1]">
               <span class="text-2xl" aria-hidden="true">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                         <path fill-rule="evenodd"
                               d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg>
               </span>
            <span class="sr-only">Previous</span>
        </button>

        <button type="button"
                class="absolute right-5 top-40 hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none inline-flex justify-center items-center w-[46px] h-10 text-gray-800 rounded-full hover:bg-gray-800/[.1]">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                         <path fill-rule="evenodd"
                               d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
               </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
               <span
                   class="hs-carousel-active:bg-stone-700 hs-carousel-active:border-stone-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer"></span>
            <span
                class="hs-carousel-active:bg-stone-700 hs-carousel-active:border-stone-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer"></span>
            <span
                class="hs-carousel-active:bg-stone-700 hs-carousel-active:border-stone-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer"></span>
        </div>
    </div>
    <!-- Carosel End -->

    <!-- Fitur -->
    <div class="flex flex-col max-w-[85rem] mx-auto">

        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <div class="flex items-start rounded-xl bg-white p-4">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                    <i class="fa-solid fa-gift text-yellow-500"></i>
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">Pelayanan Personal</h2>
                    <p class="mt-2 text-sm text-gray-500">Memberikan rekomendasi sesuai kebutuhan</p>
                </div>
            </div>

            <div class="flex items-start rounded-xl bg-white p-4">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                    <i class="fa-solid fa-clock text-yellow-500"></i>
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">Pengirim tepat waktu</h2>
                    <p class="mt-2 text-sm text-gray-500">Semua pesanan dijamin sampai sesuai dengan jadwal</p>
                </div>
            </div>
            <div class="flex items-start rounded-xl bg-white p-4">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                    <i class="fa-solid fa-earth-asia text-yellow-500"></i>
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">Pengiriman Kemana Saja</h2>
                    <p class="mt-2 text-sm text-gray-500">Melayani pengiriman ke seluruh wilayah Indonesia</p>
                </div>
            </div>
            <div class="flex items-start rounded-xl bg-white p-4">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                    <i class="fa-solid fa-truck text-yellow-500"></i>
                </div>

                <div class="ml-4">
                    <h2 class="font-semibold">Gratis Ongkir</h2>
                    <p class="mt-2 text-sm text-gray-500"><b class="text-black">GRATIS ONGKIR*</b> untuk pengiriman
                        dalam kota</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk Unggulan -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-10 justify-center items-center">
            <span class="lg:col-span-4 text-2xl font-bold mb-3 underline underline-offset-2">Produk Unggulan</span>

            @foreach($produkUnggulan as $produk)
                <!-- Produk Card -->
                <div class="group flex w-full flex-col overflow-hidden shadow-lg rounded-lg">
                    <a class="relative flex h-80 overflow-hidden" href="/detail-product/{{ $produk->id }}">
                        <img class="absolute top-0 right-0 h-full w-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"
                             src="{{ $produk->photourl }}"
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                            </button>
                        </div>
                    </a>
                    <div class="py-3 bg-stone-300">
                        <a href="/detail-product/{{ $produk->id }}">
                            <h5 class="text-center tracking-tight text-gray-500 font-bold">{{ $produk->judul }}</h5>
                        </a>
                        <div class="flex justify-center">
                            <p>
                                <span class="text-sm font-bold text-gray-900">Rp {{ number_format($produk->harga, '0', ',') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <!-- Kategori produk -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-28">
        <div class="grid grid-cols-1 lg:grid-cols-3 justify-center">
            <div class="grid grid-cols-2 col-span-2 justify-center">
                <div class="col-span-2 mb-5 lg:mb-0">
                    <h1 class="text-2xl font-bold">Jenis Bunga</h1>
                    <p class="font-medium">Di sini kami menjual berbagai jenis bunga sesuai keinginan Anda</p>
                </div>

                <div class="relative col-span-1 h-96 border-2 group overflow-hidden">
                    <div
                        class="h-full w-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://asset.kompas.com/crops/--50BtRRqG5v11uJ9w8sUhNluds=/0x981:1920x2261/750x500/data/photo/2023/05/03/64521423464e5.jpg')] bg-no-repeat bg-cover">
                    </div>
                    <p class="bg-white absolute bottom-10 text-lg px-10">Mawar</p>
                </div>
                <div class="relative col-span-1 h-96 border-2 group overflow-hidden">
                    <div
                        class="h-full w-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/8/9/90a52f08-08cd-487c-9ee5-2587d531c3a8.jpg')] bg-no-repeat bg-cover">
                    </div>
                    <p class="bg-white absolute bottom-10 text-lg px-10">Lily</p>
                </div>
                <div class="hidden lg:block">
                    <button class="py-2 px-10 bg-stone-700 text-white hover:bg-stone-900">Lihat Semua Jenis
                        Bunga</button>
                </div>
            </div>
            <div class="relative col-span-1 h-[35rem] border-2 group overflow-hidden">
                <div
                    class="h-full w-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://bibitbunga.com/wp-content/uploads/2017/04/bunga-gypsophila-baby-breath-dalam-pot.jpg')] bg-no-repeat bg-cover">
                </div>
                <p class="bg-white absolute bottom-10 text-lg px-10">Baby Breath, dll</p>
            </div>
            <div class="block lg:hidden col-span-2">
                <button class="py-2 px-10 bg-stone-700 text-white hover:bg-stone-900">Lihat Semua Jenis
                    Bunga</button>
            </div>
        </div>

        <div class="h-24"></div>

        <div class="grid grid-cols-1 lg:grid-cols-3 justify-center">
            <div class="relative col-span-1 h-[35rem] border-2 group overflow-hidden hidden lg:flex">
                <div
                    class="h-full w-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/5/638631bd-edbb-409c-8d4d-e973d06682c8.jpg')] bg-no-repeat bg-cover">
                </div>
                <p class="bg-white absolute bottom-10 text-lg px-10">Bucket</p>
            </div>
            <div class="grid grid-cols-2 col-span-2 justify-center">
                <div class="col-span-2 pl-0 lg:pl-10 mb-5 lg:mb-0">
                    <h1 class="text-2xl font-bold">Model Bunga</h1>
                    <p class="font-medium">Kami juga menjual bunga untuk berbagai model sesuai permintaan Anda</p>
                </div>

                <div class="relative col-span-2 h-[35rem] border-2 group overflow-hidden flex lg:hidden">
                    <div
                        class="h-full w-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/5/638631bd-edbb-409c-8d4d-e973d06682c8.jpg')] bg-no-repeat bg-cover">
                    </div>
                    <p class="bg-white absolute bottom-10 text-lg px-10">Bucket</p>
                </div>

                <div class="relative col-span-1 h-96 border-2 group overflow-hidden">
                    <div
                        class="h-full w-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://www.rosellaflorist.com/wp-content/uploads/2020/09/1-3.jpg')] bg-no-repeat bg-cover">
                    </div>
                    <p class="bg-white absolute bottom-10 text-lg px-10">Papan</p>
                </div>
                <div class="relative col-span-1 h-96 border-2 group overflow-hidden">
                    <div
                        class="h-full w-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://s1.bukalapak.com/img/67154197291/large/PRE_ORDER_BLOOM_BOX_FLOWER_BOX_BUNGA_BOX_KADO_WISUDA.png')] bg-no-repeat bg-cover">
                    </div>
                    <p class="bg-white absolute bottom-10 text-lg px-10">Box, dll</p>
                </div>

                <div class="pl-10 hidden lg:block">
                    <button class="py-2 px-10 bg-stone-700 text-white hover:bg-stone-900">Lihat Semua Model
                        Bunga</button>
                </div>
                <div class="block lg:hidden col-span-2">
                    <button class="py-2 px-10 bg-stone-700 text-white hover:bg-stone-900">Lihat Semua Model
                        Bunga</button>
                </div>
            </div>
        </div>

        <div class="h-24"></div>

        <div class="grid grid-cols-1 lg:grid-cols-3 justify-center">
            <div class="grid grid-cols-2 col-span-2 justify-center">
                <div class="col-span-2">
                    <h1 class="text-2xl font-bold">Momen Bunga</h1>
                    <p class="font-medium">Kami menyediakan beberapa jenis Momen bunga yang cocok untuk berbagai
                        tujuan kegiatan</p>
                </div>

                <div class="relative col-span-1 h-96 border-2 group overflow-hidden">
                    <div
                        class="w-full h-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://as2.ftcdn.net/v2/jpg/04/08/76/91/1000_F_408769103_UWnDpXOHybP6nkT17J9rZMmJJW0chtr1.jpg')] bg-no-repeat bg-cover">
                    </div>
                    <p class="bg-white absolute bottom-10 text-lg px-10">Bunga Romantis</p>
                </div>
                <div class="relative col-span-1 h-96 border-2 group overflow-hidden">
                    <div
                        class="w-full h-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-38761714/oem_oem_full01.jpg')] bg-no-repeat bg-cover">
                    </div>
                    <p class="bg-white absolute bottom-10 text-lg px-10">Wisuda</p>
                </div>

                <div class="hidden lg:block">
                    <button class="py-2 px-10 bg-stone-700 text-white hover:bg-stone-900">Lihat Semua Momen
                        Bunga</button>
                </div>
            </div>
            <div class="relative col-span-1 h-[35rem] border-2 group overflow-hidden">
                <div
                    class="w-full h-full group-hover:scale-110 ease-in-out duration-300 bg-[url('https://floristbagus.com/wp-content/uploads/2020/01/karangan-bunga-duka-cita.jpeg')] bg-no-repeat bg-cover">
                </div>
                <p class="bg-white absolute bottom-10 text-lg px-10">Duka Cita, dll</p>
            </div>
            <div class="block lg:hidden col-span-2">
                <button class="py-2 px-10 bg-stone-700 text-white hover:bg-stone-900">Lihat Semua Momen
                    Bunga</button>
            </div>
        </div>
    </div>

    <!-- Testimoni -->
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

    <script type="module">
        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

        const keenSlider = new KeenSlider(
            '#keen-slider',
            {
                loop: true,
                slides: {
                    origin: 'center',
                    perView: 1.25,
                    spacing: 16,
                },
                breakpoints: {
                    '(min-width: 1024px)': {
                        slides: {
                            origin: 'auto',
                            perView: 1.5,
                            spacing: 32,
                        },
                    },
                },
            },
            []
        )

        const keenSliderPrevious = document.getElementById('keen-slider-previous')
        const keenSliderNext = document.getElementById('keen-slider-next')

        const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
        const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

        keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
        keenSliderNext.addEventListener('click', () => keenSlider.next())

        keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
        keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
    </script>

    <section class="bg-gray-100 mt-10">
        <div class="mx-auto max-w-[1340px] px-4 py-12 ">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
                <div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                        Testimoni
                    </h2>

                    <p class="mt-4 text-gray-700">
                        Sudah ratusan costumer yang kami layani dari berbagai daerah, produk dan layanan yang kami
                        berikan sangat baik dan berkualitas tinggi
                    </p>

                    <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                        <button aria-label="Previous slide" id="keen-slider-previous-desktop"
                                class="rounded-full border border-stone-700 p-3 text-stone-700 transition hover:bg-stone-600 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="h-5 w-5 rtl:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>

                        <button aria-label="Next slide" id="keen-slider-next-desktop"
                                class="rounded-full border border-stone-700 p-3 text-stone-700 transition hover:bg-stone-600 hover:text-white">
                            <svg class="h-5 w-5 rtl:rotate-180" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mx-6 lg:col-span-2 lg:mx-0">
                    <div id="keen-slider" class="keen-slider">
                        <div class="keen-slider__slide">
                            <blockquote
                                class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                <div>
                                    <div class="flex gap-0.5 text-yellow-500">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-stone-600 sm:text-3xl">Stayin' Alive
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-700">
                                            No, Rose, they are not breathing. And they have no arms or legs …
                                            Where are
                                            they? You know what? If we come across somebody with no arms or
                                            legs, do we
                                            bother resuscitating them? I mean, what quality of life do we
                                            have there?
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                    &mdash; Michael Scott
                                </footer>
                            </blockquote>
                        </div>

                        <div class="keen-slider__slide">
                            <blockquote
                                class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                <div>
                                    <div class="flex gap-0.5 text-yellow-500">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>

                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-stone-600 sm:text-3xl">Stayin' Alive
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-700">
                                            No, Rose, they are not breathing. And they have no arms or legs …
                                            Where are
                                            they? You know what? If we come across somebody with no arms or
                                            legs, do we
                                            bother resuscitating them? I mean, what quality of life do we
                                            have there?
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                                    &mdash; Michael Scott
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-4 lg:hidden">
                <button aria-label="Previous slide" id="keen-slider-previous"
                        class="rounded-full border border-stone-700 p-3 text-stone-700 transition hover:bg-stone-600 hover:text-white">
                    <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>

                <button aria-label="Next slide" id="keen-slider-next"
                        class="rounded-full border border-stone-700 p-3 text-stone-700 transition hover:bg-stone-600 hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Tentang ForistStore -->
    <div class="max-w-[75rem] mx-auto px-5 sm:px-6 lg:px-8 my-8">
        <div
            class="py-3 flex items-center text-2xl font-mono text-stone-600 before:flex-[1_1_0%] before:border-t before:border-stone-500 before:me-6 after:flex-[1_1_0%] after:border-t after:border-stone-500 after:ms-6 ">
            Toko Bunga Florist</div>
        <p class="text-center">Selamat datang di Florista, toko bunga online pilihan Anda! Kami menyajikan koleksi
            bunga berkualitas
            tinggi untuk segala kebutuhan dan perayaan. Nikmati pengalaman berbelanja yang mudah, cepat, dan
            terjangkau dengan harga ramah di kantong.

            Florista dikenal sebagai toko bunga online populer yang menawarkan bunga dengan kualitas terbaik. Proses
            transaksi kami sangat sederhana, memungkinkan Anda untuk dengan mudah memberikan kejutan indah kepada
            orang-orang tercinta.

            Kami bangga menyediakan bunga-bunga segar dan indah, bekerja sama dengan petani bunga terpercaya. Setiap
            karangan bunga kami adalah karya seni yang memukau. Jadikan setiap momen lebih istimewa dengan bunga dari
            Florista – tempatnya bunga indah untuk setiap kesempatan. Selamat berbelanja!</p>
        <hr class="border-stone-500 mt-5">
    </div>

@endsection
