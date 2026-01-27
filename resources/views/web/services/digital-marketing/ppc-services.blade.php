@extends('layouts.cloudtech')

@section('title', 'PPC Management Services | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – PPC Management Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/ppc/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
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
                <h1>High-Performance PPC Management Services</h1>
                <p class="hero-subtitle">
                   Maximize your advertising results with strategic PPC campaigns built to drive conversions, boost visibility, and deliver measurable performance across all major platforms.
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
                <p>We create high-performing PPC campaigns that increase conversions, lower costs, and generate consistent, data-driven results.</p>
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
                <p>We manage top PPC platforms to help you reach the right audience and achieve faster growth.</p>
            </div>

            <div class="grid grid-2 platforms-grid">
                <article class="card platform-card">
                    <h3>Google Ads</h3>
                    <p class="platform-meta">Search Ads, Display Ads, Shopping Ads, Video Ads, Remarketing Ads — designed to capture buyers at every stage.</p>
                    <!-- <ul>
                        <li>Search Network</li>
                        <li>Display Network</li>
                        <li>Shopping Campaigns</li>
                        <li>YouTube Ads</li>
                    </ul> -->
                </article>

                <article class="card platform-card">
                    <h3>Microsoft Ads</h3>
                    <p class="platform-meta">Search Ads, Audience Ads, Shopping Ads, and Bing placements that expand reach beyond Google.</p>
                    <!-- <ul>
                        <li>Bing Search</li>
                        <li>Yahoo Search</li>
                        <li>Partner Sites</li>
                        <li>Lower Competition</li>
                    </ul> -->
                </article>

                <article class="card platform-card">
                    <h3>Facebook Ads</h3>
                    <p class="platform-meta">Image Ads, Video Ads, Carousel Ads, and Retargeting Ads tailored for high-engagement audiences.</p>
                    <!-- <ul>
                        <li>Facebook Feed</li>
                        <li>Instagram Stories</li>
                        <li>Messenger Ads</li>
                        <li>Audience Network</li>
                    </ul> -->
                </article>

                <article class="card platform-card">
                    <h3>LinkedIn Ads</h3>
                    <p class="platform-meta">Sponsored Content, Message Ads, Lead Gen Forms, and Text Ads focused on professional B2B targeting.</p>
                    <!-- <ul>
                        <li>Sponsored Content</li>
                        <li>Message Ads</li>
                        <li>Dynamic Ads</li>
                        <li>Lead Gen Forms</li>
                    </ul> -->
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE OUR PPC SERVICES -->
    <section class="section section-why" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our PPC Services?</h2>
                <p>Our PPC services are built to improve efficiency, reduce wasted spend, and maximize every advertising dollar.</p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="why-card">
                    <h3>Instant Results</h3>
                    <p>
                       Launch campaigns that generate traffic, clicks, and leads immediately.
                    </p>
                </article>
                <article class="why-card">
                    <h3>Precise Targeting</h3>
                    <p>
                        Reach users based on intent, interests, demographics, and behavior.
                    </p>
                </article>
                <article class="why-card">
                    <h3>Measurable ROI</h3>
                    <p>
                       Track every click, conversion, and cost with complete transparency.
                    </p>
                </article>
                <article class="why-card">
                    <h3>Full Control</h3>
                    <p>
                       Adjust budgets, audiences, and ads at any time for better performance.
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
                        Full-spectrum PPC solutions designed to manage, optimize, and scale your paid advertising campaigns.
                    </p>
                    <ul class="services-list">
                        <li>Keyword Research and Selection</li>
                        <li>Campaign Structure Setup</li>
                        <li>Ad Copywriting and Creative Design</li>
                        <li>Landing Page Optimization</li>
                        <li>Bid and Budget Management</li>
                        <li> Audience Targeting and Segmentation</li>
                        <li>A/B Testing for Ads and Pages</li>
                        <li>Conversion Tracking Setup</li>
                        <li>A/B testing and campaign optimisation</li>
                        <li>Bid management and budget optimisation</li>
                        <li>Performance Reporting and Insights</li>
                        <li>Ongoing Optimization and Scaling</li>
                    </ul>
                </div>
                <!-- <div class="services-panel" aria-hidden="true">
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
                </div> -->
            </div>
        </div>
    </section>

    <!-- OUR PPC MANAGEMENT PROCESS -->
    <section class="section section-process" style="margin-top:35px" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our PPC Management Process</h2>
                <p>A streamlined process that ensures every PPC campaign is optimized for maximum results and long-term success.</p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Discovery &amp; Analysis</h3>
                    <p>
                       We analyze your goals, audience, competitors, and opportunities to build the right PPC plan.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>
                       We create a custom PPC strategy focused on keywords, targeting, budgets, and ad formats.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Campaign Launch</h3>
                    <p>
                       We set up and launch optimized campaigns across your chosen platforms.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitor &amp; Optimize</h3>
                    <p>
                       We refine targeting, adjust bids, update ads, and improve performance continuously.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-main">
                    <h2>Ready to Drive Instant Results?</h2>
                    <p>
                        Unlock immediate traffic, quality leads, and higher conversions with expertly managed PPC campaigns tailored to your business.
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

     <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>PPC Service FAQs</h2>
            </div>
 
            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1.What is PPC management and why do businesses need it?</summary>
                        <div class="faq-content">
                            <p>
                              PPC management involves creating, monitoring, and optimizing paid advertising campaigns to maximize clicks, conversions, and ROI while reducing wasted ad spend.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>2. Which PPC platforms do you manage?</summary>
                        <div class="faq-content">
                            <p>
                        We manage Google Ads, Microsoft Ads, Facebook Ads, and LinkedIn Ads, covering search, display, shopping, video, and retargeting campaigns.</p>
                    </details>
 
                    <details class="faq-item">
                        <summary>3.How quickly can PPC deliver results?</summary>
                        <div class="faq-content">
                            <p>
                              PPC delivers near-instant results. Once campaigns are launched, you begin receiving traffic, leads, and sales immediately, depending on your budget and targeting.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>4. How do you measure PPC campaign success?</summary>
                        <div class="faq-content">
                            <p>
                              We track key metrics such as clicks, conversions, cost-per-click, return on ad spend, and revenue to evaluate performance and refine campaigns.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>5. Do you handle ad copy and creative design?</summary>
                        <div class="faq-content">
                            <p>Yes, we create compelling ad copy, visuals, and landing page recommendations to improve click-through rates and increase conversions.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>6. Can I control my PPC budget?</summary>
                        <div class="faq-content">
                            <p>
                              Absolutely. You set your budget, and we manage it strategically—ensuring every dollar is optimized for the best possible results.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection