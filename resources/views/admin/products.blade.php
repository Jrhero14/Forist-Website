@extends('admin.layouts.baseadmin')

@section('content')
    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <div class="grid grid-cols-5 gap-5 px-5 lg:px-10">
            @include('admin.layouts.navside')

            <div class="col-span-4 lg:col-span-4 border-2 border-stone-400 rounded-lg p-10 shadow-lg">
                <div class="grid grid-cols-3 gap-7">
                    <div class="col-span-3">
                        <div>
                            <label for="hs-trailing-button-add-on-with-icon-and-button"
                                   class="sr-only">Label</label>
                            <div class="relative flex rounded-lg shadow-sm">
                                <input type="text" id="hs-trailing-button-add-on-with-icon-and-button"
                                       name="hs-trailing-button-add-on-with-icon-and-button"
                                       class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <div
                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                    <svg class="flex-shrink-0 h-4 w-4 text-gray-400"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8" />
                                        <path d="m21 21-4.3-4.3" /></svg>
                                </div>
                                <button type="button"
                                        class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Search</button>
                            </div>
                        </div>
                        <div class="mt-5 flex justify-end gap-3">
                            <a href="tambah-product"
                                class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none"><i class="fa-solid fa-plus"></i> Tambah
                                Product</a>
                            <a href="edit-tags"
                                class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"><i class="fa-solid fa-pen-to-square"></i> Edit
                                Tags</a>
                        </div>
                    </div>

                    <div class="col-span-3">
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div
                                        class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                        <table
                                            class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Foto Product</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Name</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Stock</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Status</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Tags</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Edit</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Hapus</th>
                                            </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @foreach($products as $product)
                                                <tr>
                                                    <td class="h-32 w-32 p-2">
                                                        <div
                                                            class="w-full h-full rounded-lg bg-no-repeat bg-cover" style="background-image: url('{{$product->photourl}}')">
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                        {{ $product->judul }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{$product->stock}}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        @if($product->status)
                                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-500 text-white">Online</span>
                                                        @else
                                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-slate-500 text-white">Offline</span>
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 grid grid-cols-2 gap-1 text-sm text-gray-800 dark:text-gray-200">
                                                        @foreach($product->jenis as $jenis)
                                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-stone-500 text-white">{{$jenis->nama_bunga}}</span>
                                                        @endforeach

                                                            @foreach($product->model as $model)
                                                                <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-stone-500 text-white">{{$model->nama_model}}</span>
                                                            @endforeach

                                                            @foreach($product->moment as $moment)
                                                                <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-stone-500 text-white">{{$moment->nama_moment}}</span>
                                                            @endforeach

                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a type="button" href="edit-product/{{ $product->id }}"
                                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-stone-600 hover:text-stone-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <a type="button" href="delete-product/{{ $product->id }}"
                                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none"><i
                                                                class="fa-solid fa-trash-can"></i></a>
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
