<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Forist Store</title>
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">
    @vite('resources/css/app.css')
    @vite('resources/css/own.css')
</head>

<body class="bg-stone-400">
<div class="h-screen w-screen">
    <div class="flex h-screen w-screen justify-center items-center">
        <div class="relative grid p-5 mt-24 lg:mt-0 lg:p-0 lg:grid-cols-2 w-screen max-w-[60rem]">
            <a class="absolute -top-12 left-0 text-3xl text-stone-700 hover:text-stone-800" href="/"><i class="fa-solid fa-left-long"></i></a>
            <div
                class="overflow-hidden bg-[url('https://asset.kompas.com/crops/--50BtRRqG5v11uJ9w8sUhNluds=/0x981:1920x2261/750x500/data/photo/2023/05/03/64521423464e5.jpg')] bg-no-repeat bg-cover">
                <div class="w-full h-full grid items-center justify-center content-center backdrop-blur-[2px]">
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="" srcset="">
                </div>
            </div>

            <div class="bg-white p-10">
                <div class="mb-5">
                    <h1 class="text-3xl font-bold">Register</h1>
                    <h2 class="text-xl font-medium">Selamat datang di Toko Forist👋</h2>
                    <p class="text-lg font-light">Segera mendaftar agar bisa bertransaksi</p>
                </div>

                <div>
                    <form method="post">
                        @csrf
                        <div class="flex flex-col gap-2 mb-3">
                            <label for="email">Email</label>
                            <input class="rounded-lg border-2 p-2 border-stone-200" type="email"
                                   placeholder="Emailmu@gmail.com" name="email">
                            @error('email')
                            <div class="my-1" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2 mb-3">
                            <label for="notelp">Nomor Telepon</label>
                            <input class="rounded-lg border-2 p-2 border-stone-200" type="number"
                                   placeholder="08123456789" name="notelp">
                            @error('notelp')
                            <div class="my-1" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2 mb-3">
                            <label for="password">Password</label>
                            <input class="rounded-lg border-2 p-2 border-stone-200" type="password"
                                   placeholder="**********" name="password">
                            @error('password')
                            <div class="my-1" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="passwordconfirm">Konfirmasi Password</label>
                            <input class="rounded-lg border-2 p-2 border-stone-200" type="password"
                                   placeholder="**********" name="passwordconfirm">
                            @error('konfirmasipassword')
                            <div class="my-1" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>


                        <button
                            class="mt-4 p-2 bg-stone-700 text-white hover:bg-stone-900 w-full font-bold">Register</button>
                        <p class="mt-4 text-center">Sudah punya akun? <a href="/login"
                                                                         class="text-blue-500 hover:text-blue-700 underline underline-offset-1">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://kit.fontawesome.com/f51741a9dd.js" crossorigin="anonymous"></script>
@vite('resources/js/preline.js')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>
