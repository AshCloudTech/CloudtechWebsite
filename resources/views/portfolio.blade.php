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
        <h3 style="color:#2563EB;">Why Choose Cloud Technologies Ltd?</h3>
        <p class="subtitle">
            At Cloud Technologies Ltd, we've built and delivered dozens of websites across platforms like
            GoDaddy, Wix, Shopify, Squarespace, and WordPress — for businesses in education, law, eCommerce,
            healthcare, recruitment, logistics, and more. Below, you'll find a showcase of some of our recent
            projects, grouped by platform.
        </p>


    </div>
</section>

<section class="section">
    <div class="container">
        <div class="stats-row">
            <div class="stat"><strong>50+</strong><span>Websites Delivered</span></div>
            <div class="stat"><strong>6+</strong><span>Platforms Mastered</span></div>
            <div class="stat"><strong>15+</strong><span>Industries Served</span></div>
            <div class="stat"><strong>100%</strong><span>Client Satisfaction</span></div>
        </div>

        <div class="filter-bar">
    <button class="filter active" data-filter="all">All</button>
    <button class="filter" data-filter="wordpress">WordPress</button>
    <button class="filter" data-filter="wix">Wix</button>
    <button class="filter" data-filter="godaddy">GoDaddy</button>
    <button class="filter" data-filter="squarespace">Square Space</button>
    <button class="filter" data-filter="php">PHP/Laravel</button>
    <button class="filter" data-filter="react">React/Next.js</button>
</div>

        <div class="portfolio-grid">
            <!-- 1 -->
            <article class="project-card" data-category="wordpress">
                <div class="p-img img1">
                    <span class="p-tag blue">WordPress</span>
                    <span class="p-tag white">sport</span>
                </div>
                 <div class="card-content">
                <h3>AK Travels</h3>
                <p>Professional travel agency website with booking system and destination showcases.</p>

                 <div class="card-footer">
                        <a href="#" class="p-link">
                            View Website →
                        </a>
                        <span class="live-site">
                            🌐 Live Site
                        </span>
                    </div>
                 </div>
            </article>

            <!-- 2 -->
            <article class="project-card" data-category="wix">
                <div class="p-img img1">
                    <span class="p-tag blue">Wix</span>
                    <span class="p-tag white">sport</span>
                </div>

                <div class="card-content">
                    <h3>Woodford Green Cricket Club</h3>
                    <p>Sports club website with member management and event scheduling</p>

                    <div class="card-footer">
                        <a href="#" class="p-link">
                            View Website →
                        </a>
                        <span class="live-site">
                            🌐 Live Site
                        </span>
                    </div>
                </div>
            </article>

            <!-- 3 -->
            <article class="project-card" data-category="godaddy">
                <div class="p-img img1">
                    <span class="p-tag blue">GoDaddy</span>
                    <span class="p-tag white">sport</span>
                </div>
                <div class="card-content">
                    <h3>Vape Guru</h3>
                    <p>E-commerce platform for vaping products with advanced product catalog.</p>
                    <div class="card-footer">
                        <a href="#" class="p-link"> View Website →</a>
                        <span class="live-site">🌐 Live Site</span>
                    </div>
                </div>
            </article>

            <!-- 4 -->
            <article class="project-card" data-category="squarespace">
                <div class="p-img img1">
                    <span class="p-tag blue">squarespace</span>
                    <span class="p-tag white">sport</span>
                </div>
                <div class="card-content">
                    <h3>Michaela Hubbard</h3>
                    <p>Professional personal website with portfolio and contact features.</p>
                    <div class="card-footer">
                        <a href="#" class="p-link"> View Website →</a>
                        <span class="live-site">🌐 Live Site</span>
                    </div>
                </div>
            </article>

            <!-- 5 -->
            <article class="project-card" data-category="php">
                <div class="p-img img1">
                    <span class="p-tag blue">PHP</span>
                    <span class="p-tag white">sport</span>
                </div>
                <div class="card-content">
                    <h3>Sky Housing</h3>
                    <p>Housing organization website with property listings and services.</p>
                    <div class="card-footer">
                        <a href="#" class="p-link"> View Website →</a>
                        <span class="live-site">🌐 Live Site</span>
                    </div>
                </div>
            </article>

            <!-- 6 -->
            <article class="project-card" data-category="react">
                <div class="p-img img1">
                    <span class="p-tag blue">react</span>
                    <span class="p-tag white">sport</span>
                </div>
                <div class="card-content">
                    <h3>Right Choice Groups</h3>
                    <p>Business consulting group with comprehensive service offerings.</p>
                    <div class="card-footer">
                        <a href="#" class="p-link"> View Website →</a>
                        <span class="live-site">🌐 Live Site</span>
                    </div>
                </div>
            </article>

            <!-- ... More Cards (Omitted for brevity but added in ZIP) -->
        </div>
    </div>
</section>

<section class="why-us" id="stats">
    <div class="container">
        <div class="why-card">
            <h2>Why Choose Cloud Technologies Ltd?</h2>

            <div class="why-grid">
                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>50+ websites delivered across multiple industries</strong>
                        <p>
                            Extensive experience across healthcare, education, travel,
                            recruitment, and more.
                        </p>
                    </div>
                </div>

                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>Mobile-first, SEO-optimised designs</strong>
                        <p>
                            Every website is built with mobile users in mind and optimised
                            for search engines.
                        </p>
                    </div>
                </div>

                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>Platform flexibility</strong>
                        <p>
                            WordPress, Shopify, Wix, Squarespace, Laravel, GoDaddy.
                        </p>
                    </div>
                </div>

                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>Fast delivery with ongoing support</strong>
                        <p>
                            Quick turnaround times with post-launch support and maintenance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="center">
                <a href="#" class="btn-primary">
                    Start Your Project →
                </a>
            </div>
        </div>
    </div>
</section>


<section class="cta" id="cta">
    <div class="container cta-inner">
        <h2>Ready to Build Your Website?</h2>
        <p>Join our satisfied clients and get a professional website that drives results. Contact us today for a free
            consultation and quote.</p>
        <div class="cta-actions">
            <a href="#" class="btn btn-light">Get Free Quote</a>
            <a href="#" class="btn btn-primary">View Case Studies</a>
        </div>
    </div>
</section>

@endsection