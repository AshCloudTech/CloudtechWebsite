@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/wix/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/wix/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero wix-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Wix Development Services</p>
            <h1>Create Amazing Websites<br>with Wix Platform</h1>
            <p class="hero-subtitle">
                Build professional, feature-rich websites with Wix&apos;s powerful platform.
                We help you design, customise and launch sites that drive results.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Get Started Now</a>
                <a href="#services" class="btn btn-secondary">View Services</a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">220+</p>
                <p class="stat-label">Wix Sites Created</p>
            </article>
            <article class="stat">
                <p class="stat-value">97%</p>
                <p class="stat-label">Client Satisfaction</p>
            </article>
            <article class="stat">
                <p class="stat-value">3.2x</p>
                <p class="stat-label">Average Conversion Boost</p>
            </article>
            <article class="stat">
                <p class="stat-value">48hrs</p>
                <p class="stat-label">Average Turnaround</p>
            </article>
        </div>
    </section>

    <!-- OUR WIX DEVELOPMENT SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Wix Development Services</h2>
                <p>
                    Comprehensive Wix development services to create powerful, user-friendly websites
                    that grow your business.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Drag &amp; Drop Customisation</h3>
                    <p>
                        Leverage Wix&apos;s intuitive editor to create pixel-perfect designs with complete creative freedom.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Wix Stores Setup</h3>
                    <p>
                        Build powerful online stores with product management, secure payments and inventory tracking.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>App Integration</h3>
                    <p>
                        Extend functionality with 300+ apps from the Wix App Market for bookings, forms and more.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Velo Development</h3>
                    <p>
                        Advanced customisation using Wix Velo for dynamic pages, databases and custom interactions.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>SEO &amp; Marketing</h3>
                    <p>
                        Optimise your site for search engines and integrate marketing tools to grow your business.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Site Migration</h3>
                    <p>
                        Seamlessly migrate your existing website to Wix while preserving content and SEO rankings.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE WIX PLATFORM -->
    <section class="section section-why" id="why-wix">
        <div class="container why-layout">
            <div class="why-copy">
                <h2>Why Choose Wix Platform?</h2>
                <p class="why-intro">
                    Wix offers unmatched flexibility and ease of use, making it ideal for businesses of all sizes.
                    Create stunning websites without coding knowledge.
                </p>
                <ul class="why-list">
                    <li>User-friendly drag-and-drop interface</li>
                    <li>Extensive template library</li>
                    <li>Built-in SEO and marketing tools</li>
                    <li>Wix ADI for AI-powered design</li>
                    <li>Reliable hosting and security</li>
                    <li>Mobile-optimised automatically</li>
                </ul>
            </div>
            <div class="why-media" aria-hidden="true">
                <div class="media-placeholder"></div>
            </div>
        </div>
    </section>

    <!-- PERFECT FOR EVERY BUSINESS -->
    <section class="section section-business" id="business-types">
        <div class="container">
            <div class="section-header">
                <h2>Perfect For Every Business</h2>
                <p>
                    Wix is versatile enough to power any type of website, from portfolios to e-commerce stores.
                </p>
            </div>

            <div class="grid grid-3 business-grid">
                <article class="business-card">
                    <div class="card-icon small"></div>
                    <h3>Business Websites</h3>
                    <p>Professional sites for companies and startups.</p>
                </article>
                <article class="business-card">
                    <div class="card-icon small"></div>
                    <h3>Online Stores</h3>
                    <p>Full-featured e-commerce solutions.</p>
                </article>
                <article class="business-card">
                    <div class="card-icon small"></div>
                    <h3>Portfolios</h3>
                    <p>Showcase your work beautifully.</p>
                </article>
                <article class="business-card">
                    <div class="card-icon small"></div>
                    <h3>Restaurants</h3>
                    <p>Menus, reservations and online ordering.</p>
                </article>
                <article class="business-card">
                    <div class="card-icon small"></div>
                    <h3>Booking Sites</h3>
                    <p>Appointments and event management.</p>
                </article>
                <article class="business-card">
                    <div class="card-icon small"></div>
                    <h3>Blogs</h3>
                    <p>Content-rich publishing platforms.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Launch Your Wix Website?</h2>
                    <p>
                        Let&apos;s create a stunning, high-performing website that helps your business thrive online.
                        Contact us today!
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn btn-light">Call</a>
                    <a href="#" class="btn btn-outline">Email Us</a>
                </div>
            </div>
        </div>
    </section>

    
@endsection