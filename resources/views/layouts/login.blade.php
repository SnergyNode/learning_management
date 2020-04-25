<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Learning | Login </title>

    <link href="{{ url('css/vendor/all.css') }}" rel="stylesheet">
    <link href="{{ url('css/app/app.css') }}" rel="stylesheet">

</head>
<body class="login">
    @yield('content')
<script src="{{ asset('js/vendor/all.js') }}"></script>
<script src="{{ asset('js/app/app.js') }}"></script>
</body>
</html>
