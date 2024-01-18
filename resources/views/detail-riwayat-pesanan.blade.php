@extends('layouts.base')

<script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-KbmKmd4HMS1fQ_DN"></script>

<script type="text/javascript">

    function bayarSekarang(token) {
        window.snap.pay(token);
    }

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.has('t')){
        const token = urlParams.get('t')
        window.snap.pay(token);
    }
</script>

@section('content')

    <div id="nav2"></div>

    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <div class="grid grid-cols-4 gap-5 px-5 lg:px-10">
            @include('layouts.navsideUser')

            <div class="col-span-4 lg:col-span-3 border-2 rounded-lg p-5 lg:p-10 shadow-xl">
                <h2 class="mb-2 text-2xl">Detail Pesanan:</h2>
                <h1 class="mb-1"><b>Status Pembelian:</b>
                    @if($riwayat->status)
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-green-500 text-white rounded-full">
                        Lunas
                    </span>
                    @else
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-stone-500 text-white rounded-full">
                        Belum Dibayar
                    </span>
                    @endif
                </h1>
                <h1 class="mb-1"><b>No Pesanan:</b> {{ $riwayat->nomorPesanan }}</h1>
                <h1 class="mb-1"><b>Midtrans:</b> {{ $riwayat->tokenMidtrans }}</h1>
                <hr class="my-2">
                <h2 class="mb-2 text-2xl">Rincian Harga:</h2>
                <h2 class="mb-1"><b>Subtotal:</b> {{ number_format($subtotal, '0', ',') }}</h2>
                <h2 class="mb-1"><b>Pajak 2%:</b> {{ number_format($pajak, '0', ',') }}</h2>
                <h2 class="mb-1"><b>Ongkir:</b> {{ number_format($ongkir, '0', ',') }}</h2>
                <h2 class="mb-1"><b>Total Harga:</b> {{ number_format($riwayat->totalHarga, '0', ',') }}</h2>

                @if(!$riwayat->status)
                    <button type="button" class="my-3 bg-blue-400 border-2 border-blue-400 py-1 px-4 rounded-lg text-stone-100 hover:bg-blue-500 font-medium" onclick="bayarSekarang('{{ $riwayat->tokenMidtrans }}')">Bayar Sekarang</button>
                @endif

                <div class="mb-3 mt-2">
                    <hr>
                </div>

                <h2 class="mb-5 text-2xl">Rincian Barang:</h2>

                <div class="grid grid-cols-1 gap-10">

                    @foreach($riwayat->ProductSelleds()->get() as $produk)
                        <!-- Card Produk -->
                        <div class="relative border-2 rounded-xl shadow-lg bg-white p-5">
                            @if($produk->metodePengiriman)
                                @if(!$produk->resi)
                                    <div class="absolute right-5">
                                        <h1 class="font-light"><b>Resi Kurir:</b><br>Belum diterbikan harap tunggu</h1>
                                    </div>
                                @else
                                    <div class="absolute right-5">
                                        <h1 class="font-light"><b>Resi Kurir:</b><br>{{ $produk->resi }}</h1>
                                    </div>
                                @endif
                            @else
                                <div class="absolute right-5">
                                    <h1 class="font-light"><b>Note:</b><br>Harap kontak terlebih dahulu apabila <br>ingin melakukan pickup</h1>
                                </div>
                            @endif

                            <div class="grid grid-cols-1 lg:grid-cols-3">
                                <div class="w-52 overflow-hidden col-span-1">
                                    <img src="{{ $produk->photourl }}"
                                         alt="">
                                </div>

                                <div class="col-span-2">
                                    <h1 class="text-xl font-serif mt-5 lg:mt-0">{{ $produk->judul }}</h1>
                                    <p>
                                        <span class="text-lg font-bold text-gray-900">Rp {{ number_format($produk->harga, '0', ',') }}</span>
                                    </p>

                                    <div class="flex mt-2 lg:max-w-11 max-h-11">
                                        <div
                                            class="flex bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 dark:bg-stone-700 dark:hover:bg-stone-600">

                                            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                                                @if($produk->metodePengiriman)
                                                    <button type="button"
                                                            class="hs-tab-active:bg-stone-300 hs-tab-active:text-gray-700 hs-tab-active:dark:bg-gray-800 hs-tab-active:dark:text-gray-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-xs  font-medium rounded-lg hover:hover:text-stone-600 disabled:opacity-50 disabled:pointer-events-none text-gray-400 hover:text-white active"
                                                            id="segment-item-1" data-hs-tab="#segment-1"
                                                            aria-controls="segment-1" role="tab">
                                                        Pengiriman Kurir
                                                    </button>
                                                @else
                                                    <button type="button"
                                                            class="hs-tab-active:bg-stone-300 hs-tab-active:text-gray-700 hs-tab-active:dark:bg-gray-800 hs-tab-active:dark:text-gray-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-xs  font-medium rounded-lg hover:hover:text-stone-600 disabled:opacity-50 disabled:pointer-events-none text-gray-400 hover:text-white active"
                                                            id="segment-item-1" data-hs-tab="#segment-1"
                                                            aria-controls="segment-1" role="tab">
                                                        Ambil Sendiri
                                                    </button>
                                                @endif
                                            </nav>
                                        </div>
                                    </div>
                                    <div>
                                        @if($produk->metodePengiriman)
                                            <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                                                <div class="mt-1 flex flex-col max-w-[15rem]">
                                                    <label class="mb-2 text-sm font-medium" for="tanggal">Tanggal Pengiriman:</label>
                                                    <input class="py-0 px-1 font-light border-2 rounded-lg disabled:bg-stone-200" type="date" name="tglPengiriman" value="{{ date('Y-m-d', strtotime($produk->tanggalPengiriman)) }}"
                                                           id="" disabled>
                                                </div>
                                                <div class="flex flex-col lg:flex-row gap-5 mt-3">
                                                    <div class="flex flex-col gap-1 w-full">
                                                        <p class="text-sm font-serif font-semibold">Penerima: </p>
                                                        <input class="border-2 px-2 rounded-md font-light text-sm disabled:bg-stone-200"
                                                               type="text" value="{{ $produk->namaPenerima }}" disabled>
                                                    </div>
                                                    <div class="flex flex-col gap-1 w-full">
                                                        <p class="text-sm font-serif font-semibold">Nomor Telp:</p>
                                                        <input class="border-2 px-2 rounded-md font-light text-sm disabled:bg-stone-200"
                                                               type="number" value="{{ $produk->nomorPenerima }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-1 mt-2">
                                                    <label for=""
                                                           class="text-sm font-serif font-semibold">Alamat:</label>
                                                    <textarea class="border-2 rounded-md font-light text-sm p-2 disabled:bg-stone-200"
                                                              name="" id="" cols="30" rows="3" disabled>{{ $produk->alamat }}</textarea>
                                                </div>
                                                <div class="flex flex-col gap-1 mt-2">
                                                    <label for="" class="text-sm font-serif font-semibold">Kode
                                                        Pos:</label>
                                                    <input class="border-2 px-2 rounded-md font-light text-sm disabled:bg-stone-200"
                                                           type="number" value="{{ $produk->kodePos }}" disabled>
                                                </div>
                                            </div>
                                        @else
                                            <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                                                <p class="text-sm text-gray-500 mt-2 dark:text-gray-400">
                                                    Ruko Cordoba blok G no 3.
                                                    Pantai Indah Kapuk, North Jakarta. <br>
                                                    <a class="underline text-blue-600" href="http://">Map</a>
                                                </p>

                                                <div class="mt-2 flex flex-col max-w-[15rem]">
                                                    <label class="mb-2 text-sm font-medium" for="tglPengiriman">Tanggal pickup:</label>
                                                    <input class="py-0 px-1 font-light border-2 rounded-lg disabled:bg-stone-200" type="date" name="tglPengiriman2"
                                                           id="" disabled value="{{ date('Y-m-d', strtotime($produk->tanggalPickup)) }}">
                                                </div>

                                                <div class="mt-2 flex flex-col">
                                                    <label class="mb-2 text-sm font-medium" for="namapemesan">Nama Pemesan:</label>
                                                    <input class="py-0 px-1 font-light border-2 rounded-lg disabled:bg-stone-200" type="text" name="namapemesan2"
                                                           id="namapemesan" disabled value="{{ $produk->namaPemesan }}">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
