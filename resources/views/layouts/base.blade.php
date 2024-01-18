<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Forist Store</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico' )}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    @vite('resources/css/own.css')
</head>

<body>

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')

<script src="https://kit.fontawesome.com/f51741a9dd.js" crossorigin="anonymous"></script>
@vite('resources/js/preline.js')
@vite('resources/js/navbar-scroll.js')
<script>
    function zoom(e) {
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
        x = offsetX / zoomer.offsetWidth * 100
        y = offsetY / zoomer.offsetHeight * 100
        zoomer.style.backgroundPosition = x + '% ' + y + '%';
    }

    const PengirimanKurirRadio = document.querySelector("#PengirimanKurir");
    const AmbilSendiriRadio = document.querySelector("#AmbilSendiri");
    const Kurir = document.querySelector("#segment-item-1");
    const Ambil = document.querySelector("#segment-item-2");

    Kurir.addEventListener("click", () => {
        PengirimanKurirRadio.checked = true;
        AmbilSendiriRadio.checked = false;
    });

    Ambil.addEventListener("click", () => {
        PengirimanKurirRadio.checked = false;
        AmbilSendiriRadio.checked = true;
    });
</script>
@include('vendor.sweetalert.alert')
</body>

</html>
