@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/woocommerce/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/woocommerce/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero woo-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">WooCommerce Development Services</p>
            <h1>Leading WooCommerce<br>Development in the UK</h1>
            <p class="hero-subtitle">
                Recognised as one of the leading website development companies in the UK, we help SMEs,
                startups and established retailers launch and scale online stores with powerful WooCommerce solutions.
            </p>
            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary">Launch Your Store</a>
                <a href="#solutions" class="btn btn-ghost">Explore Features</a>
            </div>
        </div>
    </section>

    <!-- COMPLETE WOOCOMMERCE SOLUTIONS -->
    <section class="section section-solutions" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Complete WooCommerce Solutions</h2>
                <p>From initial setup to advanced customisation, we provide everything you need to run a successful online store.</p>
            </div>

            <div class="grid grid-3 solutions-grid">
                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Custom Store Setup</h3>
                    <p>
                        Complete eCommerce store configuration tailored to your products, business model and target audience.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Payment Gateway Integration</h3>
                    <p>
                        Secure integration with multiple payment providers including Stripe, PayPal and UK-specific gateways.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Product Management</h3>
                    <p>
                        Advanced product catalogue management with variations, inventory tracking and automated stock updates.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Performance Optimisation</h3>
                    <p>
                        Speed optimisation techniques to ensure fast loading times and smooth shopping experiences.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Shipping Configuration</h3>
                    <p>
                        Flexible shipping options with real-time rates, zones and integration with major carriers.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Comprehensive sales analytics and reporting tools to track performance and make data‑driven decisions.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- POWERFUL ECOMMERCE CAPABILITIES -->
    <section class="section section-capabilities" id="capabilities">
        <div class="container capabilities-layout">
            <div class="capabilities-media" aria-hidden="true">
                <div class="media-placeholder"></div>
            </div>
            <div class="capabilities-copy">
                <h2>Powerful eCommerce Capabilities</h2>
                <p class="capabilities-intro">
                    WooCommerce is the world&apos;s most popular eCommerce platform, powering over 30% of all online stores.
                    Our expertise ensures you leverage its full potential.
                </p>
                <div class="capabilities-lists">
                    <ul>
                        <li>Multi‑currency support</li>
                        <li>Abandoned cart recovery</li>
                        <li>Coupon and discount systems</li>
                        <li>Mobile‑optimised checkout</li>
                    </ul>
                    <ul>
                        <li>Tax calculation automation</li>
                        <li>Customer account management</li>
                        <li>Email marketing integration</li>
                        <li>SEO‑friendly product pages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">200+</p>
                <p class="stat-label">Stores Launched</p>
            </article>
            <article class="stat">
                <p class="stat-value">£50M+</p>
                <p class="stat-label">Revenue Generated</p>
            </article>
            <article class="stat">
                <p class="stat-value">99.9%</p>
                <p class="stat-label">Uptime Guarantee</p>
            </article>
            <article class="stat">
                <p class="stat-value">24/7</p>
                <p class="stat-label">Support Available</p>
            </article>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="contact">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Start Selling Online Today</h2>
                    <p>
                        Transform your business with a professional WooCommerce store. Contact us to discuss your eCommerce vision.
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