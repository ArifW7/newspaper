<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    @stack('meta')

    <title>Dashboard @stack('title')</title>
    <link href="{{ asset('backend/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/vendor/fontawesome-7.0.1/css/all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('backend/vendor/bootstrap-5.3.8.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('backend/css/aos.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/css/swiper-bundle-11.2.10.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/vendor/perfect-scrollbar/perfect-scrollbar-1.5.6.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('backend/css/theme.css') }}" rel="stylesheet" media="all">

    @stack('css')
</head>

<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            @include('backend.layouts.mobile_menu')
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('backend.layouts.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                @include('backend.layouts.pc_menu')
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('backend/js/vanilla-utils.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('backend/vendor/bootstrap-5.3.8.bundle.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('backend/vendor/perfect-scrollbar/perfect-scrollbar-1.5.6.min.js') }}"></script>
    <script src="vendor/chartjs/chart.umd.js-4.5.0.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('backend/js/bootstrap5-init.js') }}"></script>
    <script src="{{ asset('backend/js/main-vanilla.js') }}"></script>
    <script src="{{ asset('backend/js/swiper-bundle-11.2.10.min.js') }}"></script>
    <script src="{{ asset('backend/js/aos.js') }}"></script>
    <script src="{{ asset('backend/js/modern-plugins.js') }}"></script>

    @stack('js')
</body>

</html>
<!-- end document-->
