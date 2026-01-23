@extends('layouts.cloudtech')

@section('title', 'International SEO Services')
@section('meta_title', 'Cloud Technologies Ltd – International SEO Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/international-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/international-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero intl-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">International SEO Services</p>
                <h1>Expand Your<br>Business Globally</h1>
                <p class="hero-subtitle">
                    Expanding your reach beyond borders requires specialised expertise.
                    Our International SEO services help businesses enter new markets and achieve global visibility
                    with culturally-adapted strategies.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Global Strategy</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Consultation</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">25+</span>
                        <span class="hero-stat-label">Countries Targeted</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">40%</span>
                        <span class="hero-stat-label">Avg Organic Growth</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">Multi‑Lang</span>
                        <span class="hero-stat-label">SEO &amp; Localisation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TARGET INTERNATIONAL MARKETS -->
    <section class="section" id="markets">
        <div class="container">
            <div class="section-header">
                <h2>Target International Markets</h2>
                <p>
                    We help businesses expand to key international markets with tailored SEO strategies.
                </p>
            </div>

            <div class="markets-grid">
                <article class="market-card">
                    <div class="market-code">US</div>
                    <h3>United States</h3>
                    <p>English-speaking market with high competition.</p>
                </article>

                <article class="market-card">
                    <div class="market-code">DE</div>
                    <h3>Germany</h3>
                    <p>Strong economy with technical focus.</p>
                </article>

                <article class="market-card">
                    <div class="market-code">FR</div>
                    <h3>France</h3>
                    <p>Luxury and fashion-focused market.</p>
                </article>

                <article class="market-card">
                    <div class="market-code">ES</div>
                    <h3>Spain</h3>
                    <p>Growing digital market with opportunities.</p>
                </article>

                <article class="market-card">
                    <div class="market-code">IT</div>
                    <h3>Italy</h3>
                    <p>Design and lifestyle-oriented market.</p>
                </article>

                <article class="market-card">
                    <div class="market-code">NL</div>
                    <h3>Netherlands</h3>
                    <p>Tech-savvy and innovative market.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE OUR INTERNATIONAL SEO -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our International SEO?</h2>
                <p>
                    Expert strategies to help your business succeed in global markets.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-global"></div>
                    <h3>Global Reach</h3>
                    <p>
                        Expand your business to international markets with targeted SEO strategies.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-language"></div>
                    <h3>Multi Language SEO</h3>
                    <p>
                        Optimise for multiple languages and cultural preferences in each market.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-geo"></div>
                    <h3>Geo Targeting</h3>
                    <p>
                        Target specific countries and regions with precision using advanced geo signals.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-growth"></div>
                    <h3>International Growth</h3>
                    <p>
                        Drive organic traffic and conversions from global markets in a sustainable way.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- INTERNATIONAL SEO PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our International SEO Process</h2>
                <p>
                    A proven methodology for global market expansion.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Market Research</h3>
                    <p>
                        Analyse target markets, competitors and cultural preferences to understand your global landscape.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>
                        Create a customised international SEO strategy for each market you want to enter.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>
                        Execute technical setup, content localisation and optimisation across all selected regions.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Global Monitoring</h3>
                    <p>
                        Track performance across all markets and continuously optimise to drive growth.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLETE INTERNATIONAL SEO SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Complete International SEO Services</h2>
                <p>
                    Everything you need to succeed in international markets.
                </p>
            </div>

            <div class="services-layout">
                <div class="services-list">
                    <ul>
                        <li>International keyword research and analysis</li>
                        <li>Hreflang implementation and optimisation</li>
                        <li>Multi-language content optimisation</li>
                        <li>Country-specific domain strategies</li>
                        <li>International link building campaigns</li>
                        <li>Cultural adaptation and localisation</li>
                        <li>Global competitor analysis</li>
                        <li>International technical SEO</li>
                        <li>Cross-border e-commerce optimisation</li>
                        <li>Regional search engine optimisation</li>
                        <li>International site structure planning</li>
                        <li>Global performance monitoring</li>
                    </ul>
                </div>
                <div class="services-panel">
                    <div class="services-panel-inner">
                        <h3>Global Strategy Snapshot</h3>
                        <p>
                            We’ll map your current visibility, identify priority markets and outline a clear plan
                            for expanding your search presence worldwide.
                        </p>
                        <p class="services-note">
                            Includes: key markets overview, opportunity analysis, and recommended next steps.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section intl-cta" id="cta">
        <div class="container">
            <div class="cta-inner intl-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Go Global?</h2>
                    <p>
                        Let our international SEO experts help you expand your business across borders
                        and reach new markets worldwide.
                    </p>
                </div>
                <div class="cta-actions intl-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Contact Us Now</a>
                    <a href="#markets" class="btn btn-outline-light">Explore Target Markets</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our International SEO Team</h2>
                <p>
                    Share a few details about your business and we’ll schedule a consultation with our global SEO experts.
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
                        <label for="website">Website URL</label>
                        <input type="text" id="website" placeholder="https://">
                    </div>
                    <div class="form-field">
                        <label for="markets-input">Target Markets</label>
                        <input type="text" id="markets-input" placeholder="US, DE, FR, ES, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What would you like to achieve globally?</label>
                        <textarea id="message" rows="4" placeholder="Global visibility, more leads, multi-language site, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>

@endsection