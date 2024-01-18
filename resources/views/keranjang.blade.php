@extends('layouts.base')

@section('content')
    <div id="nav2"></div>

    <div class="relative w-full max-w-[80rem] mx-auto mt-10">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-4">
            <div class="col-span-1 lg:col-span-4 bg-stone-100 rounded-xl p-10">
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <h1 class="text-2xl font-semibold">Keranjang</h1>
                        <h2 class="text-lg font-thin">Periksa Pesananmu dan lakukan checkout</h2>
                    </div>

                    @if($produks->count() == 0)
                        <div class="flex flex-col h-full w-full justify-center items-center content-center">
                            <img class="max-w-[30rem]" src="https://cdni.iconscout.com/illustration/premium/thumb/empty-cart-2130356-1800917.png" alt="Empty" srcset="">
                            <p class="font-medium text-lg">Keranjang Anda Kosong</p>
                            <p>Segera pilih produk yang Anda inginkan di etalase produk kami</p>
                        </div>
                    @endif

                    @foreach($produks as $produk)
                        <!-- Card Produk -->
                        <div class="relative border-2 rounded-xl shadow-lg bg-white p-5">
                            <form action="/delete-from-cart" method="POST">
                                @csrf
                                <input type="hidden" name="id_cart" value="{{ $produk->id }}">
                                <input type="hidden" name="id_produk" value="{{ $produk->product_id }}">
                                <input type="hidden" name="id_user" value="{{ $produk->user_id }}">
                                <button type="submit" class="absolute top-0 right-0 bg-red-500 hover:bg-red-600 px-4 py-2 rounded rounded-tr-lg"><i class="fa-solid text-white fa-trash"></i></button>
                            </form>
                            <div class="grid grid-cols-1 lg:grid-cols-3">
                                <div class="w-52 overflow-hidden col-span-1">
                                    <img src="{{ $produk->Product->photourl }}"
                                         alt="">
                                </div>

                                <div class="col-span-2">
                                    <h1 class="text-xl font-serif mt-5 lg:mt-0">{{ $produk->Product->judul }}</h1>
                                    <p>
                                        <span class="text-lg font-bold text-gray-900">Rp {{ number_format($produk->Product->harga, '0', ',') }}</span>
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

            <div class="col-span-1 lg:col-span-2 rounded-xl bg-stone-100 p-10">
                <h1 class="text-xl font-semibold mb-5">Ringkasan Belanja</h1>
                <div class="p-10 bg-white rounded-xl shadow-md">
                    <div class="flex justify-between mb-3">
                        <h1 class="font-bold">Sub Total: </h1>
                        <span class="font-medium">Rp {{ number_format($subtotal, '0', ',') }}</span>
                    </div>

                    <div class="flex justify-between">
                        <h1 class="font-bold">Pajak 2%: </h1>
                        <span class="font-medium">Rp {{ number_format($pajak, '0', ',') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <h1 class="font-bold">Ongkir: </h1>
                        <span class="font-medium">Rp {{ number_format($ongkir, '0', ',') }}</span>
                    </div>

                    <hr class="my-3">
                    <div class="flex justify-between">
                        <h1 class="font-bold">Total: </h1>
                        <span class="font-medium">Rp {{ number_format($totalharga, '0', ',') }}</span>
                    </div>
                </div>

                <div class="p-10 mt-5 bg-white rounded-xl shadow-md">
                    <p class="mb-5 text-lg font-bold">Informasi Pembeli</p>
                    <form id="formBeli" class="flex flex-col" method="post">
                        @csrf
                        <label for="atasnama" class="mb-1 font-medium">Pembeli Atas Nama</label>
                        <input id="atasnama" name="nama" type="text" class="py-1 px-2 rounded-lg border-2 border-stone-400 mb-3" value="{{ auth()->user()->name }}" required>

                        <label for="email" class="mb-1 font-medium">Email</label>
                        <input id="email" name="email" type="email" class="py-1 px-2 rounded-lg border-2 border-stone-400 mb-3" value="{{ auth()->user()->email }}" required>

                        <label for="noTelp" class="mb-1 font-medium">Nomor Telepon</label>
                        <input id="noTelp" name="notelp" type="text" class="py-1 px-2 rounded-lg border-2 border-stone-400 mb-3" value="{{ auth()->user()->nomortelp }}" required>
                    </form>
                </div>

                <div class="mt-5">
                    <button form="formBeli" type="submit"
                        class="w-full p-2 rounded-lg bg-stone-700 text-white hover:bg-stone-900">Checkout</button>
                </div>
            </div>
        </div>
    </div>
@endsection
