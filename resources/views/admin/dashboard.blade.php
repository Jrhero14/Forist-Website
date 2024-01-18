@extends('admin.layouts.baseadmin')

@section('content')
    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <div class="grid grid-cols-4 gap-5 px-5 lg:px-10">
            @include('admin.layouts.navside')

            <div class="col-span-4 lg:col-span-3 border-2 border-stone-400 rounded-lg p-10 shadow-lg">
                <div class="grid grid-cols-3 gap-7">
                    <div
                        class="col-span-1 rounded-lg bg-yellow-50 shadow-lg py-5 flex flex-col justify-center items-center">
                        <p class="text-4xl">{{ $total_product }}</p>
                        <p class="text-lg">Total Products</p>
                    </div>

                    <div
                        class="col-span-1 rounded-lg bg-green-50 shadow-lg py-5 flex flex-col justify-center items-center">
                        <p class="text-4xl">{{ $total_terjual }}</p>
                        <p class="text-lg">Penjualan</p>
                    </div>

                    <div
                        class="col-span-1 rounded-lg bg-slate-50 shadow-lg py-5 flex flex-col justify-center items-center">
                        <p class="text-4xl">{{ $total_user }}</p>
                        <p class="text-lg">Total Users</p>
                    </div>

                    <div class="col-span-3">
                        <h1 class="my-3 text-lg font-semibold">Product Terlaris</h1>
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="border rounded-lg overflow-hidden">
                                        <table
                                            class="min-w-full divide-y divide-gray-200">
                                            <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Nama Product
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Terjual
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @foreach($product_terlaris as $product)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{ $product['judul'] }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $product['terjual'] }}
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
