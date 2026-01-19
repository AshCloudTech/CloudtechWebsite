@extends('layouts.cloudtech')

@section('title', 'Digital Marketing Services in the UK | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – Digital Marketing Services in the UK')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/js/script.js') }}" defer></script>
@endpush
@section('content')



    <!-- HERO -->
    <section class="hero dm-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">Digital Marketing Services</p>
                <h1>Transform Your Business with<br>Data‑Driven Digital Marketing</h1>
                <p class="hero-subtitle">
                    Cloud Technologies Ltd delivers comprehensive digital marketing solutions that drive measurable results.
                    From SEO to social media, we help UK businesses grow their online presence and achieve sustainable success.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free Consultation</a>
                    <a href="#services" class="btn btn-lg btn-ghost hero-ghost-light">Explore Services</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">500+</span>
                        <span class="hero-stat-label">Clients Served</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">340%</span>
                        <span class="hero-stat-label">Avg Traffic Growth</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">98%</span>
                        <span class="hero-stat-label">Client Retention</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CLOUD TECHNOLOGIES -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Cloud Technologies Ltd?</h2>
                <p>
                    We combine technical expertise, creative strategy, and data‑driven insights
                    to deliver digital marketing solutions that actually work.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-indigo"></div>
                    <h3>Proven Track Record</h3>
                    <p>
                        500+ successful campaigns across the UK, India, and global markets
                        with measurable ROI improvements.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-cyan"></div>
                    <h3>Expert Team</h3>
                    <p>
                        Certified specialists in SEO, PPC, social media, and content marketing
                        focused on your success.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-pink"></div>
                    <h3>Data‑Driven Approach</h3>
                    <p>
                        Every strategy backed by analytics, A/B testing, and continuous optimisation
                        for maximum results.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-amber"></div>
                    <h3>Dedicated Support</h3>
                    <p>
                        24/7 support with monthly reporting, strategy calls, and transparent communication
                        throughout the engagement.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive Digital Marketing Services</h2>
                <p>
                    From SEO to social media, we offer a full suite of digital marketing solutions tailored to your business goals.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <!-- Row 1 -->
                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-blue"></div>
                        <h3>National SEO</h3>
                    </div>
                    <p>
                        Rank across the UK, not just in one city. Data‑driven SEO strategies
                        that position your brand in front of a nationwide audience.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-purple"></div>
                        <h3>International SEO</h3>
                    </div>
                    <p>
                        Grow globally with tailored International SEO – language targeting,
                        hreflang implementation, and market‑specific strategies.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-cyan"></div>
                        <h3>Technical SEO</h3>
                    </div>
                    <p>
                        Fix crawl errors, improve site architecture, and optimise performance
                        to support 1st‑page rankings on Google.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <!-- Row 2 -->
                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-emerald"></div>
                        <h3>Content SEO</h3>
                    </div>
                    <p>
                        Structured, keyword‑rich content that improves visibility and keeps
                        your audience engaged across every stage of the funnel.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-amber"></div>
                        <h3>Google My Business Optimisation</h3>
                    </div>
                    <p>
                        Stand out in local searches and on Google Maps with fully optimised
                        GMB profiles and local ranking strategies.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-rose"></div>
                        <h3>Image SEO</h3>
                    </div>
                    <p>
                        Faster load times and better search visibility through optimised
                        image metadata, compression, and delivery.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <!-- Row 3 -->
                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-lime"></div>
                        <h3>Local SEO</h3>
                    </div>
                    <p>
                        Attract more nearby customers and boost your visibility in your
                        community with local search optimisation.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-indigo"></div>
                        <h3>eCommerce SEO</h3>
                    </div>
                    <p>
                        Increase visibility, traffic, and sales for online stores with
                        product‑focused SEO and conversion optimisation.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-sky"></div>
                        <h3>On‑Page SEO</h3>
                    </div>
                    <p>
                        Fine‑tune meta tags, content, internal links, and UX to improve
                        rankings and user engagement.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <!-- Row 4 -->
                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-slate"></div>
                        <h3>Off‑Page SEO</h3>
                    </div>
                    <p>
                        Strengthen authority with ethical link building, brand mentions,
                        and digital PR to improve rankings.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-meta"></div>
                        <h3>Meta Ads Services</h3>
                    </div>
                    <p>
                        Grow on Facebook and Instagram with targeted campaigns focused on
                        visibility, leads, and sales.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-orange"></div>
                        <h3>PPC Services</h3>
                    </div>
                    <p>
                        High‑intent traffic through expertly‑managed Google Ads campaigns
                        designed for better leads and higher conversions.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>

                <!-- Row 5 -->
                <article class="card service-card">
                    <div class="service-header">
                        <div class="service-strip strip-social"></div>
                        <h3>SMM Services</h3>
                    </div>
                    <p>
                        Build your brand on Facebook, Instagram, and LinkedIn with content,
                        community, and performance‑driven social strategies.
                    </p>
                    <a href="#" class="service-link">Learn More</a>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Proven Process</h2>
                <p>
                    A systematic approach that ensures consistent results and continuous improvement.
                </p>
            </div>

            <div class="grid grid-5 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Discovery &amp; Audit</h3>
                    <p>
                        Comprehensive analysis of your current digital presence, competitors,
                        and market opportunities.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>
                        Custom roadmap aligned with your business goals, budget,
                        and target audience.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>
                        Execute campaigns across chosen channels using best practices
                        and proven tactics.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitor &amp; Analyse</h3>
                    <p>
                        Track performance metrics, user behaviour, and ROI with
                        detailed reporting.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">5</div>
                    <h3>Optimise &amp; Scale</h3>
                    <p>
                        Continuous refinement based on data insights to maximise
                        results and long‑term growth.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CLIENT SUCCESS STORIES -->
    <section class="section section-dark" id="success">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Client Success Stories</h2>
                <p>
                    Real results from real businesses that trusted us with their digital marketing.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <article class="card success-card">
                    <div class="success-avatar"></div>
                    <h3>Sarah Mitchell</h3>
                    <p class="success-role">Marketing Director, TechStart Solutions</p>
                    <p class="success-quote">
                        “Cloud Technologies transformed our digital presence. Within 6 months, our organic traffic
                        increased by 340% and we’re now ranking on page 1 for our most competitive keywords.”
                    </p>
                </article>

                <article class="card success-card">
                    <div class="success-avatar"></div>
                    <h3>James Robertson</h3>
                    <p class="success-role">CEO, Elite Fitness UK</p>
                    <p class="success-quote">
                        “Their local SEO strategy helped us dominate our market. We went from barely visible to
                        the top 3 results in our area. Our foot traffic and online bookings have tripled.”
                    </p>
                </article>

                <article class="card success-card">
                    <div class="success-avatar"></div>
                    <h3>Priya Sharma</h3>
                    <p class="success-role">E‑commerce Manager, Luxe Fashion Store</p>
                    <p class="success-quote">
                        “The eCommerce SEO services delivered exceptional results. Our online sales grew by
                        425% in just 8 months. The team truly understands how to optimise product pages
                        for conversions.”
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- DIGITAL MARKETING INSIGHTS -->
    <section class="section section-alt" id="insights">
        <div class="container">
            <div class="section-header">
                <h2>Digital Marketing Insights</h2>
                <p>
                    Stay ahead with the latest trends and statistics in digital marketing.
                </p>
            </div>

            <div class="grid grid-4 insights-grid">
                <article class="card insight-card">
                    <p class="insight-value">93%</p>
                    <p class="insight-text">
                        of online experiences begin with a search engine, making SEO essential.
                    </p>
                </article>

                <article class="card insight-card">
                    <p class="insight-value">63%</p>
                    <p class="insight-text">
                        of Google searches happen on mobile devices, requiring mobile optimisation.
                    </p>
                </article>

                <article class="card insight-card">
                    <p class="insight-value">5.3x</p>
                    <p class="insight-text">
                        ROI on average for businesses investing in SEO compared to traditional marketing.
                    </p>
                </article>

                <article class="card insight-card">
                    <p class="insight-value">70%</p>
                    <p class="insight-text">
                        of marketers say SEO is more effective than PPC for generating sales.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section dm-cta" id="cta">
        <div class="container">
            <div class="cta-inner dm-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow Your Business?</h2>
                    <p>
                        Get a free digital marketing audit and discover opportunities to increase your online visibility,
                        traffic, and revenue. No obligations, just actionable insights.
                    </p>
                </div>
                <div class="cta-actions dm-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get a Call Back</a>
                    <a href="#services" class="btn btn-outline-light">View All Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SIMPLE CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Free Digital Marketing Audit</h2>
                <p>
                    Share a few details about your business and we’ll send you a personalised audit with clear next steps.
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
                        <label for="goal">Primary Goal</label>
                        <input type="text" id="goal" placeholder="More leads, sales, visibility, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">Tell us about your business</label>
                        <textarea id="message" rows="4" placeholder="Industry, target audience, current challenges..."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection