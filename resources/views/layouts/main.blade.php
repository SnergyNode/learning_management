<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $person->first_name }} | Dashboard </title>

    <link href="{{ url('css/vendor/all.css') }}" rel="stylesheet">
    <link href="{{ url('css/app/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="st-container">
        @include('pages.layout.topnav')

        @include('pages.layout.sidebar')

        <div class="st-pusher" id="content">


            <div class="st-content">


                @yield('content')


            </div>




        </div>

        @include('layouts.footer')


    </div>

    <script>
        var colors = {
            "danger-color": "#e74c3c",
            "success-color": "#81b53e",
            "warning-color": "#f0ad4e",
            "inverse-color": "#2c3e50",
            "info-color": "#2d7cb5",
            "default-color": "#6e7882",
            "default-light-color": "#cfd9db",
            "purple-color": "#9D8AC7",
            "mustard-color": "#d4d171",
            "lightred-color": "#e15258",
            "body-bg": "#f6f6f6"
        };
        var config = {
            theme: "html",
            skins: {
                "default": {
                    "primary-color": "#42a5f5"
                }
            }
        };
    </script>

    <script>
        function goto(link) {
            window.location = link;
        }
    </script>

    <script src="{{ asset('js/vendor/all.js') }}"></script>
    <script src="{{ asset('js/app/app.js') }}"></script>
</body>
</html>
