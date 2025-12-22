@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – Portfolio')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/portfolio/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/portfolio/js/script.js') }}" defer></script>
@endpush

@section('content')


<section class="hero portfolio-hero" id="portfolio">
    <div class="container hero-content">
        <h1>Our Portfolio of Websites</h1>
        <p class="subtitle">
            At Cloud Technologies Ltd, we've built and delivered dozens of websites across platforms like
            GoDaddy, Wix, Shopify, Squarespace, and WordPress — for businesses in education, law, eCommerce,
            healthcare, recruitment, logistics, and more. Below, you'll find a showcase of some of our recent
            projects, grouped by platform.
        </p>

        <div class="stats-row">
            <div class="stat"><strong>50+</strong><span>Websites Delivered</span></div>
            <div class="stat"><strong>6+</strong><span>Platforms Mastered</span></div>
            <div class="stat"><strong>15+</strong><span>Industries Served</span></div>
            <div class="stat"><strong>100%</strong><span>Client Satisfaction</span></div>
        </div>

        <div class="filter-bar">
            <button class="filter active">All</button>
            <button class="filter">WordPress</button>
            <button class="filter">Wix</button>
            <button class="filter">GoDaddy</button>
            <button class="filter">Square Space</button>
            <button class="filter">PHP/LarLaravel</button>
            <button class="filter">React/Next.js</button>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="portfolio-grid">
            <!-- 1 -->
            <article class="card">
                <div class="p-img img1"></div>
                <span class="p-tag blue">WordPress</span>
                <h3>AK Travels</h3>
                <p>Professional travel agency website with booking system and destination showcases.</p>
                <a href="#" class="p-link">View Website →</a>
            </article>

            <!-- 2 -->
            <article class="card">
                <div class="p-img img2"></div>
                <span class="p-tag blue">WordPress</span>
                <h3>Vape Guru</h3>
                <p>E-commerce platform for vaping products with advanced product catalog.</p>
                <a href="#" class="p-link">View Website →</a>
            </article>

            <!-- 3 -->
            <article class="card">
                <div class="p-img img3"></div>
                <span class="p-tag blue">WordPress</span>
                <h3>Woodford Green Cricket Club</h3>
                <p>Sports club website with member management and event scheduling.</p>
                <a href="#" class="p-link">View Website →</a>
            </article>

            <!-- 4 -->
            <article class="card">
                <div class="p-img img4"></div>
                <span class="p-tag blue">WordPress</span>
                <h3>Michaela Hubbard</h3>
                <p>Professional personal website with portfolio and contact features.</p>
                <a href="#" class="p-link">View Website →</a>
            </article>

            <!-- 5 -->
            <article class="card">
                <div class="p-img img5"></div>
                <span class="p-tag blue">WordPress</span>
                <h3>Sky Housing</h3>
                <p>Housing organization website with property listings and services.</p>
                <a href="#" class="p-link">View Website →</a>
            </article>

            <!-- 6 -->
            <article class="card">
                <div class="p-img img6"></div>
                <span class="p-tag blue">WordPress</span>
                <h3>Right Choice Groups</h3>
                <p>Business consulting group with comprehensive service offerings.</p>
                <a href="#" class="p-link">View Website →</a>
            </article>

            <!-- ... More Cards (Omitted for brevity but added in ZIP) -->
        </div>
    </div>
</section>

<section class="why-us" id="stats">
    <div class="container">
        <h2>Why Choose Cloud Technologies Ltd?</h2>

        <div class="why-grid">
            <div class="why-item">
                <strong>50+ websites delivered across multiple industries.</strong>
            </div>
            <div class="why-item">
                <strong>Platform flexibility:</strong> WordPress, Shopify, Wix, Squarespace, Laravel, GoDaddy.
            </div>
            <div class="why-item">
                <strong>Mobile-first, SEO-optimised designs.</strong>
            </div>
            <div class="why-item">
                <strong>Fast delivery with ongoing support.</strong>
            </div>
        </div>

        <div class="center">
            <a href="#" class="btn-primary">Start Your Project</a>
        </div>
    </div>
</section>

<section class="cta" id="cta">
    <div class="container cta-inner">
        <h2>Ready to Build Your Website?</h2>
        <p>Join our satisfied clients and get a professional website that drives results. Contact us today for a free consultation and quote.</p>
        <div class="cta-actions">
            <a href="#" class="btn btn-light">Get Free Quote</a>
            <a href="#" class="btn btn-primary">View Case Studies</a>
        </div>
    </div>
</section>

@endsection