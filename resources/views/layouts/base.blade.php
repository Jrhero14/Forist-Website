<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Forist Store</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/own.css') }}">
</head>

<body>

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')

<script src="https://kit.fontawesome.com/f51741a9dd.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/preline.js') }}"></script>
<script src="{{ asset('js/navbar-scroll.js') }}"></script>
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
@if (Session::has('alert.config') || Session::has('alert.delete'))
    @if (config('sweetalert.animation.enable'))
        <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
    @endif

    @if (config('sweetalert.theme') != 'default')
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11" rel="stylesheet">
    @endif

    @if (config('sweetalert.alwaysLoadJS') === false && config('sweetalert.neverLoadJS') === false)
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endif
    <script>
        @if (Session::has('alert.delete'))
        document.addEventListener('click', function(event) {
            if (event.target.matches('[data-confirm-delete]')) {
                event.preventDefault();
                Swal.fire({!! Session::pull('alert.delete') !!}).then(function(result) {
                    if (result.isConfirmed) {
                        var form = document.createElement('form');
                        form.action = event.target.href;
                        form.method = 'POST';
                        form.innerHTML = `
                    @csrf
                        @method('DELETE')
                        `;
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            }
        });
        @endif

        @if (Session::has('alert.config'))
        Swal.fire({!! Session::pull('alert.config') !!});
        @endif
    </script>
@endif
</body>

</html>
