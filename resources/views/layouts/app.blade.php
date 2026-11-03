<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $seo['title'] ?? $company['name'])</title>
    <meta name="description"
          content="@yield('meta_description', $seo['description'] ?? $company['description'])">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title"
          content="@yield('og_title', $seo['title'] ?? $company['name'])">
    <meta property="og:description"
          content="@yield('og_description', $seo['description'] ?? $company['description'])">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="icon" href="{{ asset('favicon-32x32.png') }}?v=3" type="image/png" sizes="32x32">
    <link rel="icon" href="{{ asset('favicon-16x16.png') }}?v=3" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}?v=3">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}?v=2">
    <meta name="theme-color" content="#08090e">

    {{-- CSS: app.css first, cosmos on top of it --}}
    @vite([
        'resources/css/app.css',
        'resources/css/cosmos-animations.css'
    ])

    {{-- Per-page extra styles --}}
    @stack('styles')
</head>
<body>

@include('partials.navbar')

<main class="page-shell">
    @yield('content')
</main>

@include('partials.footer')

{{-- JS: app.js first, then cosmos --}}
@vite([
    'resources/js/app.js',
    'resources/js/cosmos-animations.js'
])

{{-- Per-page scripts (typewriter and timeline live in home.blade.php) --}}
@stack('scripts')

</body>
</html>
