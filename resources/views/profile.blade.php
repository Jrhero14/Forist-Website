@extends('layouts.base')

@section('content')
    <div id="nav2"></div>

    <div class="max-w-[85rem] w-full mx-auto mt-10">
        <div class="grid grid-cols-4 gap-5 px-5 lg:px-10">
            @include('layouts.navsideUser')

            <div class="col-span-4 lg:col-span-3 border-2 border-stone-400 rounded-lg p-10 shadow-lg">
                <div class="grid grid-cols-3">
                        <form class="flex flex-col col-span-3 lg:col-span-2" action="" method="POST">
                            @csrf
                            <label for="" class="font-serif font-medium mb-2">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="px-1 py-2 border-2 rounded-md bg-stone-100 mb-4" value="{{ auth()->user()->name }}">

                            <label for="" class="font-serif font-medium mb-2">Email</label>
                            <input type="email" name="email" class="px-1 py-2 border-2 rounded-md bg-stone-100 mb-4 disabled:bg-stone-300 disabled:text-gray-500" value="{{ auth()->user()->email }}" disabled>

                            <label for="" class="font-serif font-medium mb-2">Alamat</label>
                            <textarea class="px-1 py-2 border-2 rounded-md bg-stone-100 mb-4" name="alamat" id="" cols="20"
                                      rows="7">{{ auth()->user()->alamat }}</textarea>

                            <label for="" class="font-serif font-medium mb-2">Nomor Telepon</label>
                            <input type="text" class="px-1 py-2 border-2 rounded-md bg-stone-100 mb-4" name="telepon" value="{{ auth()->user()->nomortelp }}">

                            <label for="" class="font-serif font-medium mb-2">Kode Pos</label>
                            <input type="text" class="px-1 py-2 border-2 rounded-md bg-stone-100 mb-4" name="kodepos" value="{{ auth()->user()->kodepos }}">

                            <button type="submit"
                                class="bg-stone-600 hover:bg-stone-700 text-white py-2 rounded-full mt-3">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
