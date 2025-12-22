@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – Case Studies')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/case-studies/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/case-studies/js/script.js') }}" defer></script>
@endpush

@section('content')

<section class="hero cs-hero" id="hero">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1>Success Stories That Inspire</h1>
        <p class="subtitle">Discover how we've helped businesses across industries achieve remarkable digital transformation and growth</p>
        <div class="cs-stats">
            <span>150+ Projects Delivered</span>
            <span>95% Client Satisfaction</span>
            <span>300% Average Growth</span>
        </div>
    </div>
</section>

<section class="section" id="list">
    <div class="container">
        <h2 class="center">Browse Our Case Studies</h2>
        <p class="center muted">Filter by industry to see relevant success stories</p>

        <div class="filter-bar">
            <button class="filter active">All</button>
            <button class="filter">Healthcare</button>
            <button class="filter">Education</button>
            <button class="filter">Travel</button>
            <button class="filter">Recruitment</button>
            <button class="filter">Public Sector</button>
            <button class="filter">Enterprise</button>
        </div>

        <div class="grid cs-grid">
            <!-- Card 1 -->
            <article class="card cs-card">
                <div class="cs-img img1"></div>
                <span class="cs-tag blue">Education</span>
                <h3>The Learning Compass Digital Transformation</h3>
                <p>A UK-based platform providing exceptional tutoring for neurodivergent learners.</p>
                <a href="#" class="cs-link">View Case Study →</a>
            </article>

            <!-- Card 2 -->
            <article class="card cs-card">
                <div class="cs-img img2"></div>
                <span class="cs-tag purple">Enterprise</span>
                <h3>Cash Home Buyers SEO Success</h3>
                <p>A UK-based company offering simple, stress‑free property solutions nationwide.</p>
                <a href="#" class="cs-link">View Case Study →</a>
            </article>

            <!-- Card 3 -->
            <article class="card cs-card">
                <div class="cs-img img3"></div>
                <span class="cs-tag green">Healthcare</span>
                <h3>Basketball Coaching Website Transformation</h3>
                <p>A coach aiming to attract more local clients for private and group coaching.</p>
                <a href="#" class="cs-link">View Case Study →</a>
            </article>

            <!-- Card 4 -->
            <article class="card cs-card">
                <div class="cs-img img4"></div>
                <span class="cs-tag purple">Enterprise</span>
                <h3>Logistics Company Recovery Project</h3>
                <p>A logistics firm recovering from major SEO decline after Google update.</p>
                <a href="#" class="cs-link">View Case Study →</a>
            </article>

            <!-- Card 5 -->
            <article class="card cs-card">
                <div class="cs-img img5"></div>
                <span class="cs-tag blue">Travel</span>
                <h3>BMGA Travels Facebook Marketing Campaign</h3>
                <p>A UK travel agency scaling outreach through strategic digital campaigns.</p>
                <a href="#" class="cs-link">View Case Study →</a>
            </article>
        </div>
    </div>
</section>

<section class="cta" id="cta">
    <div class="container cta-inner">
        <h2>Ready to Create Your Success Story?</h2>
        <p>Let's discuss how we can help transform your business with our proven digital solutions</p>
        <div class="cta-actions">
            <a href="#" class="btn btn-primary">Start Your Project</a>
            <a href="#" class="btn btn-light">Schedule Consultation</a>
        </div>
    </div>
</section>


@endsection

