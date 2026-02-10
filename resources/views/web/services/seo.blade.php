@extends('layouts.cloudtech')

@section('title', 'SEO & Website Design Services in the UK | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – SEO & Website Design Services in the UK')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero seo-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-trust">Trusted by 100+ London Businesses</p>
            <h1>SEO &amp; Website Design for<br>Small Businesses in London</h1>
            <p class="hero-subtitle">
                Struggling to get noticed online? We help London small businesses rank on Google&apos;s first page.
                Affordable SEO and website development tailored for small businesses and home-based entrepreneurs.
            </p>
            <p class="hero-subtitle">
                Drive targeted traffic, generate real leads and grow your business online.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Get Free SEO Review</a>
                <a href="#services" class="btn btn-ghost">View Our Services</a>
            </div>

            <div class="hero-meta">
                <span>5-Star Rated on Bark</span>
                <span>100+ Projects Delivered</span>
                <span>24–48hr Turnaround</span>
            </div>
        </div>
    </section>

    <!-- SEO & WEB DESIGN SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>SEO &amp; Web Design Services</h2>
                <p>
                    Comprehensive digital solutions tailored for London&apos;s small businesses and home-based entrepreneurs.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Local SEO Services</h3>
                    <ul class="service-list">
                        <li>Google Business Profile setup &amp; local pack optimisation</li>
                        <li>Local keyword research specific to your London area</li>
                        <li>On-page &amp; off-page SEO optimisation</li>
                        <li>Directory listings, citation building &amp; backlink strategies</li>
                        <li>Monthly performance reports &amp; analytics tracking</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Website Development</h3>
                    <ul class="service-list">
                        <li>Mobile-responsive design starting at just &pound;250</li>
                        <li>Built on WordPress, Wix, Shopify &amp; more</li>
                        <li>Speed-optimised &amp; SEO-ready 5-page starter sites</li>
                        <li>Contact forms, WhatsApp chat, service pages &amp; galleries</li>
                        <li>Maintenance &amp; support packages available</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Perfect For</h3>
                    <ul class="service-list">
                        <li>Local tradespeople – plumbers, electricians, builders, handymen</li>
                        <li>Beauty &amp; wellness – salons, spas, personal trainers</li>
                        <li>Home businesses – bakers, cleaners, tutors</li>
                        <li>Professionals – consultants, freelancers, coaches</li>
                        <li>Any London business looking to grow their online presence</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

        <!-- SERVICES GRID -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive SEO Services </h2>
                <p>
                    From local SEO to technical optimisations, we offer a full suite of services to boost your online
                    presence and drive real results for your business.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <!-- Row 1 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/National.webp') }}" alt="National SEO" loading="lazy"
                            decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-blue"></div>
                        <h3><a href="{{ route('services.digi-marketing.national-seo') }}">National SEO</a></h3>
                    </div>
                    <p>
                        National SEO helps businesses rank across the country with targeted strategies designed to increase
                        visibility, drive qualified traffic, and grow brand authority. Reach customers nationwide with
                        optimized content, links, and performance-focused tactics.
                    </p>
                    <a href="{{ route('services.digi-marketing.national-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/International.webp') }}" alt="International SEO"
                            loading="lazy" decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-purple"></div>
                        <h3><a href="{{ route('services.digi-marketing.international-seo') }}">International SEO</a></h3>
                    </div>
                    <p>
                        International SEO helps your business reach global audiences by optimizing your website for multiple
                        countries and languages. Strengthen worldwide visibility, attract international customers, and grow
                        your brand across borders with targeted global strategies.
                    </p>
                    <a href="{{ route('services.digi-marketing.international-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/Technical.webp') }}" alt="Technical SEO"
                            loading="lazy" decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-cyan"></div>
                        <h3><a href="{{ route('services.digi-marketing.technical-seo') }}">Technical SEO</a></h3>
                    </div>
                    <p>
                        Technical SEO improves your website’s speed, structure, and crawlability to ensure search engines
                        can properly access, index, and rank your pages. This leads to better performance, higher
                        visibility, and stronger overall SEO results.
                    </p>
                    <a href="{{ route('services.digi-marketing.technical-seo') }}" class="service-link">Learn More</a>
                </article>

                <!-- Row 2 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/Content.webp') }}" alt="Content SEO" loading="lazy"
                            decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-emerald"></div>
                        <h3><a href="{{ route('services.digi-marketing.content-seo') }}">Content SEO</a></h3>
                    </div>
                    <p>
                        Content SEO focuses on creating high-quality, keyword-optimized content that attracts search engines
                        and engages users. It helps increase rankings, drive targeted traffic, and convert visitors through
                        strategic content planning and optimization.
                    </p>
                    <a href="{{ route('services.digi-marketing.content-seo') }}" class="service-link">Learn More</a>
                </article>


                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/Image.webp') }}" alt="Image SEO" loading="lazy"
                            decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-rose"></div>
                        <h3><a href="{{ route('services.digi-marketing.image-seo') }}">Image SEO</a></h3>
                    </div>
                    <p>
                        Faster load times and better search visibility through optimised
                        image metadata, compression, and delivery.
                    </p>
                    <a href="{{ route('services.digi-marketing.image-seo') }}" class="service-link">Learn More</a>
                </article>

                <!-- Row 3 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/Local.webp') }}" alt="Local SEO" loading="lazy"
                            decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-lime"></div>
                        <h3><a href="{{ route('services.digi-marketing.local-seo') }}">Local SEO</a></h3>
                    </div>
                    <p>
                        Local SEO helps your business appear in nearby searches by optimizing maps listings, local keywords,
                        citations, and reviews. It drives more foot traffic, calls, and leads from customers in your area,
                        boosting your visibility in local search results.
                    </p>
                    <a href="{{ route('services.digi-marketing.local-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/eCommerce.webp') }}" alt="eCommerce SEO"
                            loading="lazy" decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-indigo"></div>
                        <h3><a href="{{ route('services.digi-marketing.ecommerce-seo') }}">eCommerce SEO</a></h3>
                    </div>
                    <p>
                        eCommerce SEO enhances product pages, category structures, and technical performance to improve
                        visibility and increase online sales. It attracts high-intent shoppers through keyword optimization,
                        improved UX, and optimized product listings.
                    </p>
                    <a href="{{ route('services.digi-marketing.ecommerce-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/On-Page.webp') }}" alt="On-Page SEO"
                            loading="lazy" decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-sky"></div>
                        <h3><a href="{{ route('services.digi-marketing.on-page-seo') }}">On-Page SEO</a></h3>
                    </div>
                    <p>
                        On-Page SEO strengthens your website by optimizing titles, meta tags, content, URLs, and internal
                        links. These improvements increase search engine visibility, boost user experience, and help your
                        pages rank higher for targeted keywords.
                    </p>
                    <a href="{{ route('services.digi-marketing.on-page-seo') }}" class="service-link">Learn More</a>
                </article>

                <!-- Row 4 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <img src="{{ asset('assets/images/digitalmark/Off-Page.webp') }}" alt="Off-Page SEO"
                            loading="lazy" decoding="async">
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-slate"></div>
                        <h3><a href="{{ route('services.digi-marketing.off-page-seo') }}">Off-Page SEO</a></h3>
                    </div>
                    <p>
                        Off-Page SEO builds your website’s authority through strategic link building, digital PR, citations,
                        and brand mentions. These efforts improve domain trust, increase rankings, and expand your online
                        presence across relevant industry platforms.
                    </p>
                    <a href="{{ route('services.digi-marketing.off-page-seo') }}" class="service-link">Learn More</a>
                </article>
            </div>

        </div>
    </section>

    <!-- PACKAGES & PRICING -->
    <section class="section section-pricing" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Packages &amp; Pricing</h2>
                <p>
                    Affordable solutions designed for small business budgets. No hidden fees, no long-term contracts.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <article class="card pricing-card">
                    <p class="plan-name">Starter Website</p>
                    <p class="plan-price">&pound;250</p>
                    <p class="plan-tagline">One time payment</p>
                    <ul class="plan-list">
                        <li>5-page mobile-friendly website</li>
                        <li>Basic SEO setup &amp; optimisation</li>
                        <li>Contact form integration</li>
                        <li>WhatsApp chat button</li>
                        <li>Fast loading speed</li>
                    </ul>
                    <a href="#cta" class="btn btn-outline-dark">Get Started</a>
                </article>

                <article class="card pricing-card">
                    <p class="plan-name">Local SEO</p>
                    <p class="plan-price">&pound;150</p>
                    <p class="plan-tagline">Per month</p>
                    <ul class="plan-list">
                        <li>Google Business Profile optimisation</li>
                        <li>Local keyword targeting &amp; research</li>
                        <li>Citation building &amp; directory listings</li>
                        <li>Monthly performance reporting</li>
                        <li>Ongoing optimisation &amp; support</li>
                    </ul>
                    <a href="#cta" class="btn btn-primary">Get Started</a>
                </article>

                <article class="card pricing-card">
                    <p class="plan-name">Complete Package</p>
                    <p class="plan-price">&pound;350</p>
                    <p class="plan-tagline">Per month</p>
                    <ul class="plan-list">
                        <li>Website + SEO combined</li>
                        <li>Advanced SEO strategies</li>
                        <li>Website maintenance &amp; updates</li>
                        <li>Priority support (24–48hr response)</li>
                        <li>Dedicated account manager</li>
                    </ul>
                    <a href="#cta" class="btn btn-outline-dark">Get Started</a>
                </article>
            </div>

            <p class="pricing-note">
                All packages include free consultation and custom quotes for larger projects. No setup fees. Cancel anytime.
            </p>
        </div>
    </section>

    <!-- REAL RESULTS FOR REAL BUSINESSES -->
    <section class="section section-results" id="results">
        <div class="container">
            <div class="section-header">
                <h2>Real Results for Real Businesses</h2>
                <p>
                    See how we've helped London small businesses dominate local search and grow their revenue.
                </p>
            </div>

            <div class="grid grid-2 results-grid">
                @foreach($businessResults as $result)
                    <article class="card result-card">
                        <div class="result-header">
                            <p class="business-name">{{ $result->business_name }}</p>
                            <p class="business-location">{{ $result->business_location }}</p>
                            <p class="campaign-duration">{{ $result->campaign_duration }}</p>
                        </div>

                        <div class="result-metrics">
                            @foreach($result->metrics as $metric)
                                <div>
                                    <p class="metric-label">{{ $metric['label'] }}</p>
                                    <p class="metric-value">{{ $metric['value'] }}</p>
                                </div>
                            @endforeach
                        </div>

                        <p class="result-quote">
                            “{{ $result->quote }}”
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>


    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">100+</p>
                <p class="stat-label">Projects Completed</p>
            </article>
            <article class="stat">
                <p class="stat-value">250%</p>
                <p class="stat-label">Average Traffic Increase</p>
            </article>
            <article class="stat">
                <p class="stat-value">5★</p>
                <p class="stat-label">Average Rating</p>
            </article>
            <article class="stat">
                <p class="stat-value">24–48hr</p>
                <p class="stat-label">Response Time</p>
            </article>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="section section-why" id="why-us">
        <div class="container">
            <div class="section-header">
                <h2>We&apos;re Local, Responsive &amp; Built Just Like You</h2>
                <p>
                    As a small business ourselves, we understand your challenges and are committed to your success.
                </p>
            </div>

            <div class="why-list">
                <div class="why-item">
                    <span class="why-bullet"></span>
                    <div class="why-content">
                        <p class="why-title">Direct Communication</p>
                        <p class="why-text">Speak directly with the experts working on your campaign.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span class="why-bullet"></span>
                    <div class="why-content">
                        <p class="why-title">Fast Turnaround</p>
                        <p class="why-text">Quick implementation and responsive changes when you need them.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span class="why-bullet"></span>
                    <div class="why-content">
                        <p class="why-title">We Understand Small Businesses</p>
                        <p class="why-text">Strategies tailored to limited budgets and real-world constraints.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span class="why-bullet"></span>
                    <div class="why-content">
                        <p class="why-title">Trusted Locally</p>
                        <p class="why-text">Proven results for London-based trades, services and home businesses.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span class="why-bullet"></span>
                    <div class="why-content">
                        <p class="why-title">Affordable Packages</p>
                        <p class="why-text">Transparent pricing with no long-term contracts or hidden fees.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-header">
                    <h2>Get a Free SEO Review</h2>
                    <p>
                        Let&apos;s discuss how we can help your London business grow online.
                        No obligation, just honest advice and a clear roadmap to success.
                    </p>
                </div>

                <div class="cta-cards">
                    <article class="card cta-card">
                        <h3>Call Us</h3>
                        <p class="cta-detail">1233 445 6566</p>
                        <p class="cta-note">Mon–Fri, 9am–6pm</p>
                    </article>
                    <article class="card cta-card">
                        <h3>Email Us</h3>
                        <p class="cta-detail">contact@cloudtechnologiesltd.co.uk</p>
                        <p class="cta-note">24hr response time</p>
                    </article>
                    <article class="card cta-card">
                        <h3>Visit Us</h3>
                        <p class="cta-detail">107–111 Fleet St<br>London EC4A 2AB</p>
                        <p class="cta-note">Schedule a visit in advance</p>
                    </article>
                </div>

                <div class="cta-action-main">
                    <a href="#" class="btn btn-light">Schedule a Free Consultation</a>
                </div>
            </div>
        </div>
    </section>


@endsection