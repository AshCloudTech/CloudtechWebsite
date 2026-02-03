{{-- resources/views/layouts/admin.blade.php --}}
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @php
    $faviconUrl = (!empty($globalCompany?->favicon_path) && file_exists(public_path($globalCompany->favicon_path)))
        ? asset($globalCompany->favicon_path)
        : asset('assets/images/favicon.png');
@endphp

<link rel="icon" href="{{ $faviconUrl }}" type="image/png">
<title>@yield('title', 'Dashboard') • {{ $globalCompany?->brand_name ?? 'CloudTech' }} Admin</title>


    {{-- Admin UI assets (kept separate from public site assets) --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    {{-- Optional per-page head additions --}}
    @stack('head')
</head>

<body>
<div class="app">
    @include('admin.partials.sidebar')

    <main class="main">
        <div class="container">
            @include('admin.partials.topbar')

            {{-- Flash messages (optional) --}}
            @if (session('success'))
                <div class="card" style="margin-bottom:14px; border:1px solid rgba(0, 255, 13, 0.7);">
                    <div class="cardBody">
                        <span class="badge ok">Success</span>
                        <span style="margin-left:10px;">{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="card" style="margin-bottom:14px; border:1px solid rgba(255, 0, 0, 0.7);">
                    <div class="cardBody">
                        <span class="badge danger">Error</span>
                        <span style="margin-left:10px;">{{ session('error') }}</span>
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
    </main>
</div>

<script src="{{ asset('assets/admin/js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
