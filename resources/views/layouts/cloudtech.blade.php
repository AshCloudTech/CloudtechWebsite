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

    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}" />

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
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Cloud Technologies Ltd">
    <meta property="og:locale" content="en_GB">
    <meta property="og:title" content="{{ $finalTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogImageUrl }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $finalTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $ogImageUrl }}">

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="rxQnU-7ZRd02KJKnFK-2P3jP4xk0WI2QDEhf1NCogz8" />

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QFQG0JPV04"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QFQG0JPV04');
    </script>

    @yield('meta_tags')
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

    @stack('scripts')

    <script src="{{ asset('assets/js/forms-global.js') }}" defer></script>
    <script src="{{ asset('assets/audit/audit-modal.js') }}" defer></script>

    @include('partials.audit-modal')

    <a href="https://wa.me/{{ $globalCompany?->whatsapp }}" class="whatsapp-float" target="_blank" rel="noopener"
        aria-label="Chat with us on WhatsApp">
        <span class="whatsapp-text">
            <strong>We’re Online</strong><br>
            Chat With Us Now
        </span>
        <span class="whatsapp-icon">
            <i data-lucide="message-circle"></i>
        </span>
    </a>

</body>

</html>
