@extends('admin.layouts.baseadmin')

@section('content')
    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <div class="grid grid-cols-4 gap-5 px-5 lg:px-10">
            @include('admin.layouts.navside')

            <div class="col-span-4 lg:col-span-3 border-2 border-stone-400 rounded-lg p-10 shadow-lg">
                <div class="grid grid-cols-3 gap-7">
                    <div class="col-span-3">
                        <nav class="-mb-0.5 flex space-x-6 border-b-2">
                            <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                               href="/admin/pesanan/belum-lunas">
                                Belum Lunas <span
                                    class="ms-1 py-0.5 px-1.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">{{ $total_pesanan_belum_lunas }}</span>
                            </a>

                            <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                               href="/admin/pesanan/lunas">
                                Lunas <span
                                    class="ms-1 py-0.5 px-1.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">{{ $total_pesanan_lunas }}</span>
                            </a>

                            <a class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-blue-500 text-sm font-medium whitespace-nowrap text-blue-600 focus:outline-none focus:text-blue-800"
                               href="/admin/pesanan/selesai" aria-current="page">
                                Selesai <span
                                    class="ms-1 py-0.5 px-1.5 rounded-full text-xs font-medium bg-blue-100 text-blue-600 dark:bg-blue-500 dark:text-white">{{ $total_pesanan_selesai }}</span>
                            </a>


                        </nav>
                        <div class="flex flex-col mt-5">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="border border-stone-600 rounded-lg overflow-hidden">
                                        <table class="min-w-full divide-y divide-stone-600">
                                            <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Nomor Pesanan</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Nama Barang</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    User</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Nomor Telepon</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Total Harga</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-stone-600 dark:divide-gray-700">
                                            @foreach($pesanans as $pesanan)
                                                <tr onclick="window.location='/admin/pesanan/detail/{{ $pesanan->nomorPesanan }}'" class="hover:bg-stone-300 hover:cursor-pointer">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{ $pesanan->nomorPesanan }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pesanan->tokenMidtrans }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $pesanan->User->name }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        Rp {{ number_format($pesanan->totalHarga, '0', ',') }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        @if($pesanan->selesai)
                                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Sudah Diproses</span>
                                                        @else
                                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-200 text-gray-800 dark:bg-white/10 dark:text-white">Belum Diproses</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
