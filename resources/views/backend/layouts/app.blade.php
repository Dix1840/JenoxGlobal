<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Dashboard') | {{ config('app.name') }} Admin</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    
    <!-- Inter Font (Local) -->
    <link href="{{ asset('assets/admin-fonts/inter.css') }}" rel="stylesheet">
    
    <!-- Material Icons -->
    <link href="{{ asset('assets/admin-fonts/material.css') }}" rel="stylesheet">
    
    <!-- Feather Icons -->
    <link href="{{ asset('assets/admin-fonts/feather.css') }}" rel="stylesheet">
    
    <!-- Phosphor Icons -->
    <link href="{{ asset('assets/admin-fonts/phosphor/duotone/style.css') }}" rel="stylesheet">
    
    <!-- Tabler Icons -->
    <link href="{{ asset('assets/admin-fonts/tabler-icons.min.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin-fonts/fontawesome.css') }}" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS (Local) -->
    <link href="{{ asset('assets/admin-css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- SimpleBar CSS (Local) -->
    <link href="{{ asset('assets/admin-css/simplebar.min.css') }}" rel="stylesheet">
    
    <!-- Admin Custom CSS -->
    <link href="{{ asset('assets/admin-css/admin-style.css') }}" rel="stylesheet" id="main-style-link">
    
    @stack('styles')
</head>
<body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-header-theme="light">

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="pc-loader"></div>
    </div>
    <!-- [ Pre-loader ] End -->

    @include('backend.layouts.sidebar')
    
    @include('backend.layouts.topbar')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            
            @yield('breadcrumb')
            
            <!-- [ Main Content ] start -->
            @yield('content')
            <!-- [ Main Content ] end -->
            
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('backend.layouts.footer')

    <!-- Required Js (Local) -->
    <script src="{{ asset('assets/admin-js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin-js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/admin-js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin-js/pcoded.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
