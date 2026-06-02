<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Trusted Global Exporter of Premium Rice & Lead Products. Connecting International Markets with Quality Products and Reliable Supply Chain Solutions.">
    <meta name="keywords" content="Rice Export, Lead Export, B2B Import Export, International Trade, Global Shipping, Wholesale Rice, Lead Products">
    <meta name="author" content="JenoxGlobal">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="JenoxGlobal - Premium Rice & Lead Exporter">
    <meta property="og:description" content="Trusted Global Exporter of Premium Rice & Lead Products">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="JenoxGlobal - Premium Rice & Lead Exporter">
    <meta name="twitter:description" content="Trusted Global Exporter of Premium Rice & Lead Products">
    
    <title>@yield('title', 'JenoxGlobal - Premium Rice & Lead Exporter')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    
    <!-- Fonts (Local) -->
    <link href="{{ asset('assets/admin-fonts/inter.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/poppins.css') }}" rel="stylesheet">

    <!-- Bootstrap 5 CSS (Local) -->
    <link href="{{ asset('assets/admin-css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons (Local) -->
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    @stack('styles')
</head>
<body>
    <!-- Header -->
    @include('frontend.layouts.header')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('frontend.layouts.footer')
    
    <!-- Bootstrap 5 JS (Local) -->
    <script src="{{ asset('assets/admin-js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
