<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Forist Store</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/css/own.css')
    @vite('resources/js/app.js')
</head>

<body>
@include('admin.layouts.navbar')

<div id="nav2"></div>

@yield('content')

<div class="h-96"></div>

<script src="https://kit.fontawesome.com/f51741a9dd.js" crossorigin="anonymous"></script>
@vite('resources/js/preline.js')
@vite('resources/js/navbar-scroll.js')
@include('vendor.sweetalert.alert')
</body>

</html>
