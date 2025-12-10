<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Cloud Technologies Ltd – British-Built Digital Transformation')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="British-led global digital transformation partner delivering end-to-end solutions for healthcare, education, travel, recruitment, and public sector organizations worldwide.">
   
    @yield('meta_tags')
    {{-- Page-specific CSS --}}
    @stack('styles')
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

    @stack('scripts')
</body>
</html>
