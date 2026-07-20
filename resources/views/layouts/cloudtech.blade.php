<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    @php
        $metaTitle = trim($__env->yieldContent('meta_title'));
        $pageTitle = trim($__env->yieldContent('title'));

        $finalTitle = $metaTitle ?: ($pageTitle ?: 'Cloud Technologies Ltd – British-Built Digital Transformation');

        $pageDescription =
            trim($__env->yieldContent('meta_description')) ?:
            'British-led global digital transformation partner delivering end-to-end solutions for healthcare, education, travel, recruitment, and public sector organizations worldwide.';
    @endphp

    <!-- Title -->
    <title>{{ $finalTitle }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Meta Description -->
    <meta name="description" content="{{ $pageDescription }}">

    <!-- Keywords (optional) -->
    @hasSection('meta_keywords')
        <meta name="keywords" content="@yield('meta_keywords')">
    @endif

   <meta name="robots" content="noindex, nofollow, noarchive, nosnippet">

    <!-- Canonical -->
    {{-- <link rel="canonical" href="{{ url()->current() }}" /> --}}

    @php
        $faviconUrl = !empty($globalCompany?->favicon_path)
            ? asset(ltrim($globalCompany->favicon_path, '/'))
            : asset('assets/images/favicon.png');

        $ogImageUrl = !empty($globalCompany?->og_image_path)
            ? asset(ltrim($globalCompany->og_image_path, '/'))
            : asset('assets/images/og-default.jpg');
    @endphp

    <!-- Favicon -->
    <link rel="icon" href="{{ $faviconUrl }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ $faviconUrl }}">

    <!-- Open Graph -->
    {{-- <meta property="og:type" content="website">
    <meta property="og:site_name" content="Cloud Technologies Ltd">
    <meta property="og:locale" content="en_GB">
    <meta property="og:title" content="{{ $finalTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogImageUrl }}"> --}}

    <!-- Twitter -->
    {{-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $finalTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $ogImageUrl }}"> --}}

    <!-- Google Search Console -->
    {{-- <meta name="google-site-verification" content="rxQnU-7ZRd02KJKnFK-2P3jP4xk0WI2QDEhf1NCogz8" /> --}}

    @stack('head_preloads')

    <!-- Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-QFQG0JPV04"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QFQG0JPV04');
    </script> --}}

    {{-- @yield('meta_tags') --}}

    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    @stack('styles')

    <link rel="stylesheet" href="{{ asset('assets/audit/audit-modal.css') }}">
</head>

<body>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('partials.consultation')

    @if (session('success'))
        <div id="global-flash-success" data-message="{{ session('success') }}"></div>
    @endif

    @if (session('error'))
        <div id="global-flash-error" data-message="{{ session('error') }}"></div>
    @endif

    <script src="{{ asset('assets/js/site-nav.js') }}" defer></script>

    @stack('scripts')
    <script src="{{ asset('assets/js/forms-global.js') }}" defer></script>
    <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script>
    <script src="{{ asset('assets/audit/audit-modal.js') }}" defer></script>

    @include('partials.audit-modal')

    <a href="https://wa.me/{{ $globalCompany?->whatsapp }}" class="whatsapp-float" target="_blank" rel="noopener"
        aria-label="Chat with us on WhatsApp">
        <span class="whatsapp-text">
            <strong>We’re Online</strong><br>
            Chat With Us Now
        </span>
        <span class="whatsapp-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true">
                <path d="M20.5 3.5A11 11 0 0 0 3.4 19.6L2 22l2.5-.7A11 11 0 0 0 20.5 3.5zM12 20a9 9 0 0 1-4.6-1.3l-.3-.2-2.7.7.7-2.6-.2-.3A9 9 0 1 1 12 20zm5-6.3c-.3-.1-1.7-.8-2-.9s-.5-.1-.7.1-.8.9-1 .9-.4.1-.7-.1a7.4 7.4 0 0 1-2.2-1.4 8.2 8.2 0 0 1-1.5-2c-.2-.3 0-.5.1-.6l.4-.5c.1-.2.1-.4 0-.6s-.7-1.6-.9-2.1c-.2-.6-.5-.5-.7-.5H6.4c-.2 0-.6.1-.9.4s-1.2 1.1-1.2 2.7 1.2 3.1 1.4 3.3 2.4 3.7 5.9 5c.8.3 1.5.5 2 .6.8.3 1.6.2 2.2.1.7-.1 1.7-.7 2-1.4s.3-1.3.2-1.4-.3-.2-.6-.3z"/>
            </svg>
        </span>
    </a>

</body>

</html>
