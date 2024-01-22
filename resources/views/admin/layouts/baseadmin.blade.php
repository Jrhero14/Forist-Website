<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Forist Store</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/own.css') }}">
</head>

<body>
@include('admin.layouts.navbar')

<div id="nav2"></div>

@yield('content')

<div class="h-96"></div>

<script src="https://kit.fontawesome.com/f51741a9dd.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/preline.js') }}"></script>
<script src="{{ asset('js/navbar-scroll.js') }}"></script>
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
