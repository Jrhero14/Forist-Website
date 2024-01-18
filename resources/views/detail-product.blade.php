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
                            <svg class="flex-shrink-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
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
                            <svg class="ms-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <svg class="ms-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <svg class="ms-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <input type="text" id="hs-trailing-button-add-on-with-icon" placeholder="Cari produk"
                                name="hs-trailing-button-add-on-with-icon"
                                class="py-3 px-4 block w-[20rem] border-2 shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <button type="button"
                                class="h-full w-14 flex-shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold border border-transparent bg-stone-700 text-white hover:bg-stone-800 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="flex-shrink-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
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
<!-- Breadcumbs -->
<ol class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 flex items-center whitespace-nowrap p-2 border-y border-gray-200"
    aria-label="Breadcrumb">
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
    <li class="inline-flex items-center">
        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
            href="/products">
            <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <rect width="7" height="7" x="14" y="3" rx="1" />
                <path d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3" />
            </svg>
            Products
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" /></svg>
        </a>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
        aria-current="page">
        Pink Shunshine
    </li>
</ol>
<!-- Navbar End -->

<!-- Detail Product -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-10">
    <div class="grid grid-cols-2 justify-center content-center">
        <div class="col-span-2 lg:col-span-1">
            <figure class="zoom max-w-[560px]" onmousemove="zoom(event)"
                style="background-image: url(&quot;{{ $produk->photourl }}&quot;); background-position: 99.6% 20.9964%;">
                <img src="{{ $produk->photourl }}" alt="">
            </figure>
        </div>
        <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-3 mt-5 lg:mt-0">
            <h1 class="text-3xl font-medium">{{ $produk->judul }}</h1>
            <div>
                <span class="text-lg font-bold text-gray-900">Rp
                    {{ number_format($produk->harga, '0', ',') }}</span>
            </div>
            <p class="text-lg font-light">
                {{ $produk->deskripsi }}
            </p>

            <p><span class="font-medium">Stock:</span> {{ $produk->stock }}</p>
            <p><span class="font-medium"></span> Tersedia ✅</p>
            <hr>

            <!-- Form Order 1 -->
            <div class="">
                <span class="font-medium">Delivery Option:</span>
                <form id="FormPengiriman" action="/add-to-cart/" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $produk->id }}">
                    <div class="flex mt-4">
                        <div
                            class="flex bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 dark:bg-stone-700 dark:hover:bg-stone-600">
                            <input id="PengirimanKurir" type="radio" class="hidden" name="metodePengiriman"
                                value="Kurir" checked>
                            <input id="AmbilSendiri" type="radio" class="hidden" name="metodePengiriman"
                                value="AmbilSendiri">
                            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">

                                <button type="button"
                                    class="hs-tab-active:bg-stone-300 hs-tab-active:text-gray-700 hs-tab-active:dark:bg-gray-800 hs-tab-active:dark:text-gray-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm  font-medium rounded-lg hover:hover:text-stone-600 disabled:opacity-50 disabled:pointer-events-none text-gray-400 hover:text-white active"
                                    id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                                    Pengiriman Kurir
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-stone-300 hs-tab-active:text-gray-700 hs-tab-active:dark:bg-gray-800 hs-tab-active:dark:text-gray-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500  font-medium rounded-lg hover:hover:text-stone-600 disabled:opacity-50 disabled:pointer-events-none ext-gray-400 hover:text-white"
                                    id="segment-item-2" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                                    Ambil Sendiri
                                </button>
                            </nav>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                            <p class="text-gray-500 dark:text-gray-400">
                                Pengiriman hanya mencakup area
                                <em class="font-semibold text-gray-800 dark:text-gray-200">Jakarta, Bali,
                                    Tangerang, dan Bogor.</em>
                            </p>

                            <div class="mt-5 flex flex-col max-w-[15rem]">
                                <label class="mb-2 font-medium" for="tanggal">Tanggal Pengiriman:</label>
                                <input class="p-2 border-2 border-stone-300 rounded-lg" type="date" name="tglPengiriman"
                                    id="">
                            </div>

                            <div class="mt-5 flex flex-col">
                                <label class="mb-2 font-medium" for="namapenerima">Nama Penerima:</label>
                                <input class="p-2 border-2 border-stone-300 rounded-lg" type="text" name="namapenerima"
                                    id="namapenerima">
                            </div>

                            <div class="mt-5 flex flex-col">
                                <label class="mb-2 font-medium" for="nomorpenerima">Nomor Penerima:</label>
                                <input class="p-2 border-2 border-stone-300 rounded-lg" type="number"
                                    name="nomorpenerima" id="nomorpenerima" placeholder="08123456789">
                            </div>

                            <div class="mt-5 flex flex-col">
                                <label class="mb-2 font-medium" for="alamat">Alamat:</label>
                                <textarea id="alamat" name="alamatPenerima"
                                    class="py-3 px-4 block w-full border-2 border-stone-300 bg-stone-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    rows="5" placeholder="...."></textarea>
                            </div>

                            <div class="mt-5 flex flex-col">
                                <label class="mb-2 font-medium" for="kodepos">Kode Pos:</label>
                                <input class="p-2 border-2 border-stone-300 rounded-lg" type="number" name="kodepos"
                                    id="kodepos">
                            </div>
                        </div>
                    </div>
                    <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                        <p class="text-gray-500 dark:text-gray-400">
                            Ruko Cordoba blok G no 3.
                            Pantai Indah Kapuk, North Jakarta. <br>
                            <a class="underline text-blue-600" href="http://">Map</a>
                        </p>

                        <div class="mt-5 flex flex-col max-w-[15rem]">
                            <label class="mb-2 font-medium" for="tglPengiriman">Tanggal pickup:</label>
                            <input class="p-2 border-2 border-stone-300 rounded-lg" type="date" name="tglPengiriman2"
                                id="">
                        </div>

                        <div class="mt-5 flex flex-col">
                            <label class="mb-2 font-medium" for="namapemesan">Nama Pemesan:</label>
                            <input class="p-2 border-2 border-stone-300 rounded-lg" type="text" name="namapemesan2"
                                id="namapemesan">
                        </div>
                </form>
            </div>
        </div>
        <button onclick="submit()" type="button" id="btnSubmit"
            class="w-full py-2 mt-5 rounded-md bg-stone-700 hover:bg-stone-900 text-white disabled:bg-stone-400 disabled:text-stone-600">Masukan
            ke keranjang</button>
    </div>
</div>
</div>
</div>

@endsection

<script>
    $('FormPengiriman').submit(function(e){
        $(this).children('input[type=submit]').attr('disabled', 'disabled');
        // this is just for demonstration
        e.preventDefault();
        return false;
    });
    function submit(){
        document.getElementById("btnSubmit").disabled = true;
        document.getElementById('FormPengiriman').submit();
    }
</script>
