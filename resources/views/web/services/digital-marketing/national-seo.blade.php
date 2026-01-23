@extends('layouts.cloudtech')

@section('title', 'National SEO Services - CloudTech Digital Marketing Experts')
@section('meta_title', 'Cloud Technologies Ltd – National SEO Services for UK Businesses')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/national-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/national-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero seo-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">National SEO Services</p>
                <h1>Rank Across the<br>Entire UK</h1>
                <p class="hero-subtitle">
                    Want to rank across the UK, not just in one city? Our National SEO services help businesses
                    increase visibility and attract customers across the country with proven strategies.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free SEO Audit</a>
                    <a href="#why" class="btn btn-lg btn-ghost hero-ghost-light">Speak to an Expert</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">95%</span>
                        <span class="hero-stat-label">Clients on Page One</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">4x</span>
                        <span class="hero-stat-label">Average Traffic Growth</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">UK</span>
                        <span class="hero-stat-label">Nationwide Targeting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY NATIONAL SEO WITH US -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our National SEO Services?</h2>
                <p>
                    Drive organic traffic from across the UK with our comprehensive national SEO strategies.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-uk"></div>
                    <h3>UK-Wide Visibility</h3>
                    <p>
                        Rank across the entire UK, not just in one city or region. Reach customers wherever
                        they&apos;re searching.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-data"></div>
                    <h3>Data-Driven Strategies</h3>
                    <p>
                        We use advanced analytics and proven SEO methodologies to build campaigns around real data.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-target"></div>
                    <h3>Nationwide Targeting</h3>
                    <p>
                        Attract customers from across the country with tailored content and keyword strategies.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-results"></div>
                    <h3>Proven Results</h3>
                    <p>
                        95% of our clients achieve first page rankings for their most important national keywords.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our National SEO Process</h2>
                <p>
                    A proven 4-step process to achieve nationwide visibility and sustainable growth.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>SEO Audit &amp; Analysis</h3>
                    <p>
                        Comprehensive analysis of your current SEO performance, technical health and competitor landscape.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>
                        We create a customised national SEO strategy aligned with your goals, services and budget.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>
                        Execute on-page, off-page and content optimisation to strengthen your nationwide search presence.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitoring &amp; Reporting</h3>
                    <p>
                        Track progress with detailed monthly reports and continuous optimisation based on performance data.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHAT'S INCLUDED -->
    <section class="section section-included" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What&apos;s Included in Our National SEO Service?</h2>
                <p>
                    Everything you need to dominate search results across the UK market.
                </p>
            </div>

            <div class="included-layout">
                <div class="included-list">
                    <ul>
                        <li>Comprehensive keyword research for national markets</li>
                        <li>Technical SEO optimisation for better crawlability</li>
                        <li>Content strategy for a nationwide audience</li>
                        <li>Link building campaigns across UK regions</li>
                        <li>Local citation management for multiple locations</li>
                        <li>Monthly performance reports and analysis</li>
                    </ul>
                </div>
                <div class="included-panel">
                    <h3>Who is National SEO for?</h3>
                    <p>
                        National SEO is ideal for businesses that want to reach customers all over the UK, including:
                    </p>
                    <ul>
                        <li>Service-based businesses operating in multiple cities</li>
                        <li>eCommerce brands shipping nationwide</li>
                        <li>Franchises and multi-location organisations</li>
                        <li>Consultancies and agencies targeting UK-wide clients</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section seo-cta" id="cta">
        <div class="container">
            <div class="cta-inner seo-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Dominate UK Search Results?</h2>
                    <p>
                        Get a free SEO audit and discover how we can help your business rank nationwide for the
                        keywords that matter most.
                    </p>
                </div>
                <div class="cta-actions seo-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Request Free SEO Audit</a>
                    <a href="#process" class="btn btn-outline-light">View Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Free National SEO Audit</h2>
                <p>
                    Share a few details and we&apos;ll send you a personalised audit with clear, actionable recommendations.
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
                        <label for="industry">Business Type / Industry</label>
                        <input type="text" id="industry" placeholder="e.g. eCommerce, SaaS, Healthcare">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What would you like to improve?</label>
                        <textarea id="message" rows="4" placeholder="Rank nationwide, increase leads, improve visibility, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection