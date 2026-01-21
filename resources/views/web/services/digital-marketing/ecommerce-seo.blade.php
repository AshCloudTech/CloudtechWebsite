@extends('layouts.cloudtech')

@section('title', 'Ecommerce SEO Services')
@section('meta_title', 'Cloud Technologies Ltd – Ecommerce SEO Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/ecommerce-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/ecommerce-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero ecommerce-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">eCommerce SEO</p>
            <h1>eCommerce SEO Services</h1>
            <p class="hero-subtitle">
                Specialised SEO services that help online stores increase visibility, boost traffic and drive sales.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-lg btn-primary">Grow My Online Store</a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats" id="stats">
        <div class="container stats-grid">
            <article class="stat-card">
                <p class="stat-value">285%</p>
                <p class="stat-label">Increase in Organic Traffic</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">340%</p>
                <p class="stat-label">Growth in Online Sales</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">450+</p>
                <p class="stat-label">Keywords Ranking Top 10</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">6.2x</p>
                <p class="stat-label">Return on Investment</p>
            </article>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section section-alt" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Why eCommerce SEO Matters</h2>
                <p>Drive more qualified traffic and convert visitors into paying customers.</p>
            </div>

            <div class="grid grid-3 benefits-grid">
                <article class="card benefit-card">
                    <h3>Increased Sales</h3>
                    <p>
                        Drive more qualified traffic to your product pages and convert visitors into customers.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Product Visibility</h3>
                    <p>
                        Rank your products higher in search results when customers are ready to buy.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Better ROI</h3>
                    <p>
                        Organic traffic from SEO provides long-term value compared to paid advertising.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Brand Authority</h3>
                    <p>
                        Build trust and credibility by ranking high for your product categories.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Market Expansion</h3>
                    <p>
                        Reach new customers and expand into new markets with targeted eCommerce SEO strategies.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Competitive Edge</h3>
                    <p>
                        Outrank competitors and capture more market share in your industry.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Complete eCommerce SEO Services</h2>
                <p>Everything your online store needs to dominate search results.</p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <h3>Product Page Optimisation</h3>
                    <p>Optimise product titles, descriptions, images and metadata for maximum visibility.</p>
                </article>

                <article class="card service-card">
                    <h3>Category Page SEO</h3>
                    <p>Structure and optimise category pages to rank for high-volume commercial keywords.</p>
                </article>

                <article class="card service-card">
                    <h3>Technical SEO</h3>
                    <p>Fix crawl errors, improve site speed and implement structured data for products.</p>
                </article>

                <article class="card service-card">
                    <h3>Keyword Research</h3>
                    <p>Identify high-converting product and category keywords your customers are searching.</p>
                </article>

                <article class="card service-card">
                    <h3>Content Strategy</h3>
                    <p>Create buying guides, product comparisons and content that drives conversions.</p>
                </article>

                <article class="card service-card">
                    <h3>Link Building</h3>
                    <p>Build high-quality backlinks to boost domain authority and product rankings.</p>
                </article>

                <article class="card service-card">
                    <h3>Local SEO for Stores</h3>
                    <p>Optimise for local searches if you also have physical store locations.</p>
                </article>

                <article class="card service-card">
                    <h3>Mobile Optimisation</h3>
                    <p>Ensure your store performs perfectly on mobile devices for on-the-go shoppers.</p>
                </article>

                <article class="card service-card">
                    <h3>Schema Markup</h3>
                    <p>Implement product schema for rich snippets with prices, ratings and availability.</p>
                </article>

                <article class="card service-card">
                    <h3>Review Optimisation</h3>
                    <p>Leverage customer reviews to improve rankings and build trust with shoppers.</p>
                </article>

                <article class="card service-card">
                    <h3>International SEO</h3>
                    <p>Optimise for multiple countries and languages to expand globally.</p>
                </article>

                <article class="card service-card">
                    <h3>Analytics &amp; Reporting</h3>
                    <p>Track rankings, traffic, conversions and ROI with detailed reporting.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our eCommerce SEO Process</h2>
                <p>A proven methodology for growing online stores through SEO.</p>
            </div>

            <div class="grid grid-3 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Store Audit</h3>
                    <p>
                        Comprehensive analysis of your eCommerce site, technical SEO and content.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Competitor Research</h3>
                    <p>
                        Analyse top competitors to identify opportunities and winning strategies.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Keyword Strategy</h3>
                    <p>
                        Research and map keywords to products and categories for maximum impact.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>On-Page Optimisation</h3>
                    <p>
                        Optimise product pages, categories and site structure for search engines.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">5</div>
                    <h3>Content Creation</h3>
                    <p>
                        Develop compelling product descriptions and supporting content.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">6</div>
                    <h3>Growth &amp; Scaling</h3>
                    <p>
                        Continuous optimisation, link building and expansion strategies.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section ecommerce-cta" id="cta">
        <div class="container">
            <div class="cta-inner ecommerce-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow Your Online Store?</h2>
                    <p>
                        Let us help you increase visibility, drive more traffic and boost your eCommerce sales.
                    </p>
                </div>
                <div class="cta-actions ecommerce-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get eCommerce SEO Audit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our eCommerce SEO Team</h2>
                <p>
                    Share a few details and we&apos;ll outline an SEO strategy tailored to your online store.
                </p>
            </div>

            <form class="contact-form">
                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="name@company.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="store">Store Name / Platform</label>
                        <input type="text" id="store" placeholder="Shopify, WooCommerce, Magento, etc.">
                    </div>
                    <div class="form-field">
                        <label for="revenue">Monthly Online Revenue (approx.)</label>
                        <input type="text" id="revenue" placeholder="e.g. £10k–£50k">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What are your growth goals?</label>
                        <textarea id="message" rows="4" placeholder="More traffic, better conversion rate, new markets, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>

@endsection