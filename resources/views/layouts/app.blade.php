<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/point-of-sales.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/poppins/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>
<body>

<div class="wrapper">
    @yield('sidebar')


    <div id="content">
        <div id="page">
            @yield('page')
        </div>
    </div>


</div>


</body>


<script src="{{asset('bootstrap-5.0.2/js/bootstrap.js')}}"></script>

<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/button-behaviour.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
</html>


