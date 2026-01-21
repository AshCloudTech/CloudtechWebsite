@extends('layouts.cloudtech')

@section('title', 'PPC Management Services | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – PPC Management Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/ppc/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/ppc/js/script.js') }}" defer></script>
@endpush
@section('content')



    <!-- HERO -->
    <section class="hero ppc-hero" id="hero">
        <div class="container hero-layout">
            <div class="hero-copy">
                <p class="hero-eyebrow">PPC Management Services</p>
                <h1>Drive Instant<br>Results</h1>
                <p class="hero-subtitle">
                    Get immediate visibility and drive qualified traffic to your website with expert PPC management.
                    We create, optimise and manage campaigns that deliver measurable results.
                </p>
                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free PPC Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Strategy Call</a>
                </div>
            </div>
            <div class="hero-panel" aria-hidden="true">
                <div class="hero-panel-inner">
                    <p class="panel-label">Live Campaign Overview</p>
                    <p class="panel-text">
                        A real-time view of impressions, clicks, conversions and cost across your active campaigns.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- PPC PERFORMANCE RESULTS -->
    <section class="section section-results" id="results">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>PPC Performance Results</h2>
                <p>Real results from our PPC campaigns</p>
            </div>
            <div class="results-grid">
                <article class="result-card">
                    <p class="result-value">200%</p>
                    <p class="result-label">Average ROI increase</p>
                </article>
                <article class="result-card">
                    <p class="result-value">65%</p>
                    <p class="result-label">Reduction in cost per click</p>
                </article>
                <article class="result-card">
                    <p class="result-value">150%</p>
                    <p class="result-label">Increase in conversion rate</p>
                </article>
                <article class="result-card">
                    <p class="result-value">24/7</p>
                    <p class="result-label">Campaign monitoring</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PPC PLATFORMS -->
    <section class="section section-platforms" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>PPC Platforms We Manage</h2>
                <p>Expert management across all major advertising platforms</p>
            </div>

            <div class="grid grid-2 platforms-grid">
                <article class="card platform-card">
                    <h3>Google Ads</h3>
                    <p class="platform-meta">Search, Display, Shopping, and YouTube advertising</p>
                    <ul>
                        <li>Search Network</li>
                        <li>Display Network</li>
                        <li>Shopping Campaigns</li>
                        <li>YouTube Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Microsoft Ads</h3>
                    <p class="platform-meta">Bing and Yahoo search network advertising</p>
                    <ul>
                        <li>Bing Search</li>
                        <li>Yahoo Search</li>
                        <li>Partner Sites</li>
                        <li>Lower Competition</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Facebook Ads</h3>
                    <p class="platform-meta">Social media advertising across Facebook and Instagram</p>
                    <ul>
                        <li>Facebook Feed</li>
                        <li>Instagram Stories</li>
                        <li>Messenger Ads</li>
                        <li>Audience Network</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>LinkedIn Ads</h3>
                    <p class="platform-meta">Professional B2B advertising platform</p>
                    <ul>
                        <li>Sponsored Content</li>
                        <li>Message Ads</li>
                        <li>Dynamic Ads</li>
                        <li>Lead Gen Forms</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE OUR PPC SERVICES -->
    <section class="section section-why" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our PPC Services?</h2>
                <p>Professional PPC management that maximises your advertising ROI.</p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="why-card">
                    <h3>Instant Results</h3>
                    <p>
                        Start driving traffic and leads immediately with highly targeted PPC campaigns.
                    </p>
                </article>
                <article class="why-card">
                    <h3>Precise Targeting</h3>
                    <p>
                        Reach your exact audience using advanced targeting, demographics and intent data.
                    </p>
                </article>
                <article class="why-card">
                    <h3>Measurable ROI</h3>
                    <p>
                        Track every click, conversion and pound spent with detailed analytics.
                    </p>
                </article>
                <article class="why-card">
                    <h3>Full Control</h3>
                    <p>
                        Retain full control over budget, targeting and campaign optimisation.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLETE PPC MANAGEMENT SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="services-layout">
                <div class="services-copy">
                    <h2>Complete PPC Management Services</h2>
                    <p class="services-intro">
                        Full‑service PPC management from strategy through to optimisation.
                    </p>
                    <ul class="services-list">
                        <li>PPC strategy development and planning</li>
                        <li>Google Ads campaign setup and management</li>
                        <li>Microsoft Ads (Bing) campaign optimisation</li>
                        <li>Social media advertising (Facebook, Instagram, LinkedIn)</li>
                        <li>Shopping campaigns for e‑commerce</li>
                        <li>Display and remarketing campaigns</li>
                        <li>Landing page optimisation for PPC</li>
                        <li>Conversion tracking and analytics setup</li>
                        <li>A/B testing and campaign optimisation</li>
                        <li>Bid management and budget optimisation</li>
                        <li>Competitor analysis and market research</li>
                        <li>Monthly reporting and performance analysis</li>
                    </ul>
                </div>
                <div class="services-panel" aria-hidden="true">
                    <div class="services-panel-inner">
                        <p class="panel-label">Performance Dashboard</p>
                        <p class="panel-text">
                            A consolidated view of impressions, clicks, conversions and cost so you always know
                            how your campaigns are performing.
                        </p>
                        <p class="panel-meta">
                            Built for clarity and aligned with your business KPIs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PPC MANAGEMENT PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our PPC Management Process</h2>
                <p>A proven approach to building high‑performing campaigns.</p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Discovery &amp; Analysis</h3>
                    <p>
                        We analyse your business goals, target audience and competitive landscape.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>
                        We create a tailored PPC strategy that aligns with your objectives and budget.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Campaign Launch</h3>
                    <p>
                        We set up, QA and launch optimised campaigns across your chosen platforms.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitor &amp; Optimize</h3>
                    <p>
                        We continuously monitor performance and refine campaigns for better results.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-main">
                    <h2>Ready to Drive Instant Results?</h2>
                    <p>
                        Let us create a PPC campaign that delivers real results for your business.
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Start Your Campaign</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your PPC Audit</h2>
                <p>
                    Share a few details and we&apos;ll review your campaigns with clear, actionable recommendations.
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
                        <label for="company">Company Name</label>
                        <input type="text" id="company" placeholder="Your company">
                    </div>
                    <div class="form-field">
                        <label for="monthly-spend">Approx. Monthly Ad Spend</label>
                        <input type="text" id="monthly-spend" placeholder="e.g. £5k–£20k">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What would you like to improve?</label>
                        <textarea id="message" rows="4" placeholder="CPC, leads, ROAS, conversions, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection