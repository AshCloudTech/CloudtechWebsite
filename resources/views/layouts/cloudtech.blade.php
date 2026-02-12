<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Cloud Technologies Ltd – British-Built Digital Transformation')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="British-led global digital transformation partner delivering end-to-end solutions for healthcare, education, travel, recruitment, and public sector organizations worldwide.">
    @php
        $faviconUrl =
            !empty($globalCompany?->favicon_path) && file_exists(public_path($globalCompany->favicon_path))
                ? asset($globalCompany->favicon_path)
                : asset('assets/images/favicon.png');
    @endphp
    <!-- font-family -->
    <link rel="icon" href="{{ $faviconUrl }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


    @yield('meta_tags')
    {{-- Page-specific CSS --}}
    @stack('styles')
    <link rel="canonical" href="@yield('canonical', url()->current())" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('assets/audit/audit-modal.css') }}">

</head>

<body>
    <!-- HEADER -->
    @include('layouts.header')
    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>
    <!-- FOOTER -->
    @include('layouts.footer')

    @include('partials.consultation')
    {{-- Flash nodes (must exist before JS runs) --}}
    @if (session('success'))
        <div id="global-flash-success" data-message="{{ session('success') }}"></div>
    @endif

    @if (session('error'))
        <div id="global-flash-error" data-message="{{ session('error') }}"></div>
    @endif

    {{-- Page scripts first --}}
    @stack('scripts')

    {{-- Global scripts always --}}
    <script src="{{ asset('assets/js/forms-global.js') }}" defer></script>
    <script src="{{ asset('assets/audit/audit-modal.js') }}" defer></script>

    @include('partials.audit-modal')

</body>

</html>
