@extends('admin.layouts.baseadmin')

@section('content')
    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <ol class="flex items-center whitespace-nowrap px-10 pb-5" aria-label="Breadcrumb">
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
                   href="/admin/dashboard">
                    <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Admin
                </a>
                <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </li>
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
                   href="/admin/products">
                    <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <rect width="7" height="7" x="14" y="3" rx="1" />
                        <path
                            d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3" />
                    </svg>
                    Products
                    <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
                aria-current="page">
                Edit Product
            </li>
        </ol>
        <div class="grid grid-cols-4 gap-5 px-5 lg:px-10">
            @include('admin.layouts.navside')
            <div class="col-span-4 lg:col-span-3 border-2 border-stone-400 rounded-lg p-10 shadow-lg">
                <form class="grid grid-cols-3" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-1 border-2 h-[20rem] relative">
                        <img class="h-full w-full object-cover input-img mb-3"
                             src="{{ $dataProduct->photourl }}"
                             alt="">
                        <label>
                            <span class="sr-only">Choose profile photo</span>
                            <input name="gambarProduct" type="file" class="block w-full text-sm text-gray-500 file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0
                            file:text-sm file:font-semibold
                            file:bg-stone-600 file:text-white
                            hover:file:bg-stone-700
                            file:disabled:opacity-50 file:disabled:pointer-events-none" value="{{ $dataProduct->photourl }}">
                        </label>
                        <script>
                            jQuery(document).ready(function () {
                                var readURL = function (input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function (e) {
                                            $('.input-img').attr('src', e.target.result);

                                        }

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }


                                $("input[type='file']").on('change', function () {
                                    readURL(this);
                                });


                            });

                        </script>
                    </div>

                    <div class="col-span-2 flex flex-col gap-y-4 px-5">
                        <label for="" class="font-medium">Nama Product</label>
                        <input name="namaproduct" type="text" class="p-1 px-2 border-2 border-stone-400 rounded-lg" value="{{ $dataProduct->judul }}">

                        <label for="" class="font-medium">Deskripsi</label>
                        <textarea name="deskripsi" id=""
                                  class="py-3 px-4 block w-full border-2 border-stone-400 bg-stone-100 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                  rows="5" placeholder="....">{{ $dataProduct->deskripsi }}</textarea>

                        <label for="" class="font-medium">Harga Satuan</label>
                        <input name="hargasatuan" type="number" class="p-1 px-2 border-2 border-stone-400 rounded-lg" value="{{ $dataProduct->harga }}">

                        <label for="" class="font-medium">Stock</label>
                        <input name="stock" type="number" class="p-1 px-2 border-2 border-stone-400 rounded-lg" value="{{ $dataProduct->stock }}">

                        <label for="" class="font-medium">Jenis Bunga</label>
                        <select id="pilihjenisbunga" class="p-1 px-2 border-2 border-stone-400 rounded-lg">
                            <option value="kosong">Pilih Jenis Bunga</option>
                            @foreach($jeniss as $jenis)
                                <option value="{{ $jenis->nama_bunga }}">{{ $jenis->nama_bunga }}</option>
                            @endforeach
                        </select>
                        <div id="tagsjenis" class="w-full grid grid-cols-2 gap-3 border-2 p-2 rounded-lg">
                            @foreach($dataProduct->jenis as $jenis)
                                <div id="{{ $jenis->nama_bunga }}" class="bg-stone-200 p-2 rounded-lg relative">
                                    {{ $jenis->nama_bunga }}
                                    <input type="hidden" name="jenisTags[]" value="{{$jenis->nama_bunga}}">
                                    <button class="absolute right-3 text-white px-2 rounded-lg font-medium bg-stone-500 hover:bg-stone-600" onclick="removeTag({{$jenis->nama_bunga}})">X</button>
                                </div>
                            @endforeach

                        </div>

                        <script>
                            let input = document.getElementById('pilihjenisbunga');
                            let tags = document.getElementById('tagsjenis');

                            var jenis = [
                                @foreach($dataProduct->jenis as $jenisVar)
                                "{{ $jenisVar->nama_bunga }}",
                                @endforeach
                            ];

                            input.addEventListener('change', (event) => {
                                if (!jenis.includes(event.target.value) && event.target.value != "kosong") {
                                    addtag(event.target.value);
                                    jenis.push(event.target.value);
                                    event.target.value = "kosong";
                                } else {
                                    event.target.value = "kosong";
                                }
                            })

                            function removeTag(tagId) {
                                var index = jenis.indexOf(tagId.id);
                                if (index > -1) {
                                    jenis.splice(index, 1);
                                }
                                tagId.remove();
                            }

                            function addtag(tagsValue) {
                                var value = tagsValue;
                                var tagMarkup = `<div id="${value}" class="bg-stone-200 p-2 rounded-lg relative">
                            ${value}
                            <input type="hidden" name="jenisTags[]" value="${value}">
                            <button class="absolute right-3 text-white px-2 rounded-lg font-medium bg-stone-500 hover:bg-stone-600" onclick="removeTag(${value})">X</button>
                        </div>`;
                                tags.innerHTML += tagMarkup;
                            }

                        </script>

                        <label for="" class="font-medium">Model Bunga</label>
                        <select id="pilihmodelbunga" class="p-1 px-2 border-2 border-stone-400 rounded-lg">
                            <option value="kosong">Pilih Model Bunga</option>
                            @foreach($models as $model)
                                <option value="{{ $model->nama_model }}">{{ $model->nama_model }}</option>
                            @endforeach
                        </select>
                        <div id="tagsmodel" class="w-full grid grid-cols-2 gap-3 border-2 p-2 rounded-lg">
                            @foreach($dataProduct->model as $model)
                                <div id="{{ $model->nama_model }}" class="bg-stone-200 p-2 rounded-lg relative">
                                    {{ $model->nama_model }}
                                    <input type="hidden" name="modelTags[]" value="{{ $model->nama_model }}">
                                    <button class="absolute right-3 text-white px-2 rounded-lg font-medium bg-stone-500 hover:bg-stone-600" onclick="removeTagmodel({{ $model->nama_model }})">X</button>
                                </div>
                            @endforeach
                        </div>

                        <script>
                            let inputmodel = document.getElementById('pilihmodelbunga');
                            let tagsmodel = document.getElementById('tagsmodel');

                            var model = [
                                @foreach($dataProduct->model as $modelVar)
                                    "{{ $modelVar->nama_model }}",
                                @endforeach
                            ];

                            inputmodel.addEventListener('change', (event) => {
                                if (!model.includes(event.target.value) && event.target.value != "kosong") {
                                    addtagmodel(event.target.value);
                                    model.push(event.target.value);
                                    event.target.value = "kosong";
                                } else {
                                    event.target.value = "kosong";
                                }
                            })

                            function removeTagmodel(tagId) {
                                var index = model.indexOf(tagId.id);
                                if (index > -1) {
                                    model.splice(index, 1);
                                }
                                tagId.remove();
                            }

                            function addtagmodel(tagsValue) {
                                var value = tagsValue;
                                var tagMarkup = `<div id="${value}" class="bg-stone-200 p-2 rounded-lg relative">
                            ${value}
                            <input type="hidden" name="modelTags[]" value="${value}">
                            <button class="absolute right-3 text-white px-2 rounded-lg font-medium bg-stone-500 hover:bg-stone-600" onclick="removeTagmodel(${value})">X</button>
                        </div>`;
                                tagsmodel.innerHTML += tagMarkup;
                            }

                        </script>

                        <label for="" class="font-medium">Moment Bunga</label>
                        <select id="pilihmomentbunga" class="p-1 px-2 border-2 border-stone-400 rounded-lg">
                            <option value="kosong">Pilih Moment Bunga</option>
                            @foreach($moments as $moment)
                                <option value="{{ $moment->nama_moment }}">{{ $moment->nama_moment }}</option>
                            @endforeach
                        </select>
                        <div id="tagsmoment" class="w-full grid grid-cols-2 gap-3 border-2 p-2 rounded-lg">
                            @foreach($dataProduct->moment as $moment)
                                <div id="{{ $moment->nama_moment }}" class="bg-stone-200 p-2 rounded-lg relative">
                                    {{ $moment->nama_moment }}
                                    <input type="hidden" name="momentTags[]" value="{{ $moment->nama_moment }}">
                                    <button class="absolute right-3 text-white px-2 rounded-lg font-medium bg-stone-500 hover:bg-stone-600" onclick="removeTagmoment({{ $moment->nama_moment }})">X</button>
                                </div>
                            @endforeach
                        </div>

                        <script>
                            let inputmoment = document.getElementById('pilihmomentbunga');
                            let tagsmoment = document.getElementById('tagsmoment');

                            var moment = [
                                @foreach($dataProduct->moment as $momentVar)
                                    "{{ $momentVar->nama_moment }}".split(" ").join(""),
                                @endforeach
                            ];

                            inputmoment.addEventListener('change', (event) => {
                                var clear = event.target.value.split(" ").join("");

                                if (!moment.includes(clear) && clear != "kosong") {
                                    addtagmoment(clear, event.target.value);
                                    moment.push(clear);

                                    event.target.value = "kosong";
                                } else {
                                    event.target.value = "kosong";
                                }
                            })

                            function removeTagmoment(tagId) {
                                var tag = String(tagId.id);
                                console.log(tag);
                                var index = moment.indexOf(tagId.id);
                                if (index > -1) {
                                    moment.splice(index, 1);
                                }
                                document.getElementById(tag).remove();
                            }

                            function addtagmoment(clear, tagsValue) {
                                var tagMarkup = `<div id="${clear}" class="bg-stone-200 p-2 rounded-lg relative">
                            ${tagsValue}
                            <input type="hidden" name="momentTags[]" value="${tagsValue}">
                            <button class="absolute right-3 text-white px-2 rounded-lg font-medium bg-stone-500 hover:bg-stone-600" onclick="removeTagmoment(${clear})">X</button>
                        </div>`;
                                tagsmoment.innerHTML += tagMarkup;
                            }

                        </script>

                        <div class="inline-flex items-center">
                            <label class="relative flex items-center p-3 rounded-full cursor-pointer" for="check">
                                @if($dataProduct->status == 1)
                                    <input name="status" value="True" type="checkbox"
                                           class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                           id="check" checked>
                                @else
                                    <input name="status" value="True" type="checkbox"
                                           class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                           id="check">
                                @endif
                                <span
                                    class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                     fill="currentColor" stroke="currentColor" stroke-width="1">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </label>
                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none" for="check">
                                Masuk Etalase Toko
                            </label>
                        </div>

                        <button type="submit"
                                class="w-full p-1 bg-stone-500 hover:bg-stone-600 text-white font-medium rounded-lg">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
