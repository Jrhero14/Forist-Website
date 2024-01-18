<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forist Store</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
@include('vendor.sweetalert.alert')
</body>

</html>
