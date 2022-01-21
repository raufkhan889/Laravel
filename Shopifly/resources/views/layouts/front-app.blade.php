<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/fav-logo.png') }}" type="image/x-icon">

    <title>
        @yield('title')
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <!-- Styles -->
    <link id="pagestyle" href="{{ asset('admin/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">

</head>

<body class="bg-gray-200" style="overflow-x: hidden">

    @include('layouts.front-inc.navbar')

    <div>
        @yield('content')
    </div>


    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/js/plugins/chartjs.min.js') }}"></script> --}}

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custome.js') }}"></script>

    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    @yield('scripts')
</body>

</html>
