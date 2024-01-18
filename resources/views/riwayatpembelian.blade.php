@extends('layouts.base')

@section('content')

    <div id="nav2"></div>

    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <div class="grid grid-cols-4 gap-5 px-5 lg:px-10">
            @include('layouts.navsideUser')

            <div class="col-span-4 lg:col-span-3 border-2 rounded-lg p-5 lg:p-10 shadow-xl">
                <h1 class="pb-5 text-lg font-bold">Riwayat Pesanan</h1>
                <div class="grid grid-cols-1 gap-5">

                    @if(count($riwayats) == 0)
                        <div class="flex flex-col justify-center items-center w-full h-full">
                            <img width="300" src="https://cdn.dribbble.com/users/8925263/screenshots/16869159/media/bd048f9ae4c3c4f005bffd1612d85bb3.png" alt="NotFound" srcset="">
                            <p class="text-lg font-medium">Anda belum melakukan transaksi apapun</p>
                        </div>
                    @endif

                    @foreach($riwayats as $riwayat)
                        <!-- Card -->
                        <div class="relative border-2 rounded-xl shadow-lg bg-white p-5 hover:cursor-pointer hover:bg-stone-100" onclick="location.href='/riwayat-pembelian/{{ $riwayat->nomorPesanan }}'">
                            <div class="mb-20 lg:mb-0">
                                @if($riwayat->status)
                                    <span
                                        class="absolute right-5 py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-green-500 text-white rounded-full">
                                        Lunas
                                   </span>
                                @else
                                    <span
                                        class="absolute right-5 py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-stone-500 text-white rounded-full">
                                        Belum Dibayar
                                   </span>
                                @endif

                                <span class="text-sm absolute right-6 top-12"><b>Midtrans :</b>
                                        {{ $riwayat->tokenMidtrans }}</span>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-3 mb-2">
                                <div class="col-span-2">
                                    <h1 class="text-xl font-serif mt-5 lg:mt-0"><b>No Pesanan:</b> {{ $riwayat->nomorPesanan }}</h1>
                                    <p>
                                        <span><b>Total Harga</b> Rp {{ number_format($riwayat->totalHarga, '0', ',') }}</span>
                                    </p>
                                </div>
                                @if(!$riwayat->status)
                                    <div class="col-span-2 mt-5">
                                        <a href="/riwayat-pembelian/{{ $riwayat->nomorPesanan }}?t={{ $riwayat->tokenMidtrans }}" class="bg-blue-400 border-2 border-blue-400 py-1 px-4 rounded-lg text-stone-100 hover:bg-blue-500 font-medium">Bayar Sekarang</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
