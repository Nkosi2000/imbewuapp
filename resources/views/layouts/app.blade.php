{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', config('app.description', 'Imbewu Application'))">
    <title>@yield('title', config('app.name', 'Imbewu App'))</title>

    <!-- Preconnect for external fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..700&display=swap" rel="stylesheet">

    <!-- Vite assets (now includes Tailwind CSS and custom JS) -->
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- Custom per-page styles -->
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-950 text-gray-100">

<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-green-600 text-white px-4 py-2 rounded-md z-50">
    Skip to main content
</a>

<x-navbar />

<main id="main-content" class="py-6">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <x-alert />
        @yield('content')
    </div>
</main>

<x-footer />

@stack('scripts')
</body>
</html>