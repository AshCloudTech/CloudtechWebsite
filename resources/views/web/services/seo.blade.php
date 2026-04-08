@extends('layouts.cloudtech')

@section('title', 'SEO Services UK | Search Engine Optimization Agency')
@section('meta_title', 'SEO Services UK | Search Engine Optimization Agency.')
@section('meta_description',
    'Search engine optimization agency UK offering on-page, off-page and ecommerce SEO services
    to improve rankings, traffic and leads for your website UK.')
@section('meta_keywords', 'SEO services UK, search engine optimization agency, on-page SEO, off-page SEO, ecommerce SEO,
    local SEO, technical SEO, content SEO, image SEO, affordable SEO, UK businesses')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/seo/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/seo/js/script.js') }}" defer></script>
    @endpush
@section('content')


    <!-- HERO -->
    <section class="hero seo-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-trust">Trusted by 100+ London Businesses</p>
            <h1>SEO Services for Businesses Across the UK </h1>
            <p class="hero-subtitle">
                Struggling to get noticed on Google? We help businesses across the UK rank on the first page with
                affordable, results-driven SEO services tailored for companies of all sizes and industries.
            </p>
            <!-- <p class="hero-subtitle">
                                            Drive targeted traffic, generate real leads and grow your business online.
                                        </p> -->
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

    <section class="section">
        <div class="container">
            <!-- <div class="section-header">
                                            <h2>What’s Included in Our Off-Page SEO Service?</h2>
                                            <p>
                                                Complete off-page optimisation for authority and ranking growth.
                                            </p>
                                        </div> -->

            <div class="services-layout">
                <div class="services-copy">
                    <h3>What Is Search Engine Optimisation (SEO)?</h3>
                    <p class="services-intro">
                        Search Engine Optimisation (SEO) is the process of improving your website’s visibility in Google’s
                        organic search results. When potential customers search for your services, SEO ensures your website
                        appears higher in search rankings, driving consistent, high-quality traffic without paid
                        advertising.
                    </p>
                    <p>
                        A strong SEO strategy combines keyword research, technical optimisation, content improvement, and
                        authority building to help your business attract the right audience and generate more enquiries
                        across the UK.
                    </p>
                </div>

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Why SEO Is Important for Every Business </h3>
                        <p>Most customers now search online before choosing a product or service. If your website does not
                            appear on the first page of Google, your competitors are getting those customers instead.</p>
                        <h4>SEO helps your business: </h4>
                        <ul class="services-list">
                            <li> Backlink profile audit and toxic link removal</li>
                            <li>High-quality manual link building</li>
                            <li>Guest posting and blogger outreach</li>
                            <li> Local citation and directory submissions</li>
                            <li>Social bookmarking and brand mentions</li>
                            <li>Forum submissions and community links</li>
                            <li>Competitor backlink analysis</li>
                            <li>Monthly backlink and authority reports</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEO & WEB DESIGN SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>SEO Services</h2>
                <p>Comprehensive SEO solutions tailored for businesses across the UK.</p>
            </div>

            <div class="grid grid-3 services-grid services-grid-ui">
                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <h3>Local SEO Services</h3>
                    <ul class="service-list">
                        <li>Google Business Profile optimisation and local map pack rankings</li>
                        <li>Local keyword research specific to your service areas</li>
                        <li>On-page &amp; off-page SEO optimisation</li>
                        <li>Directory listings, citation building &amp; backlink strategies</li>
                        <li>Monthly performance reports &amp; analytics tracking</li>
                    </ul>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="settings"></i>
                    </div>
                    <h3>Technical SEO</h3>
                    <ul class="service-list">
                        <li>Website speed optimisation and Core Web Vitals improvements</li>
                        <li>SEO-friendly site structure and internal linking</li>
                        <li>Meta tags, headings, and content optimisation</li>
                        <li>Image optimisation and schema markup implementation</li>
                        <li>Ongoing SEO health monitoring and improvements</li>
                    </ul>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="target"></i>
                    </div>
                    <h3>Perfect For</h3>
                    <ul class="service-list">
                        <li>Local trades and service provider</li>
                        <li>Retail, eCommerce, and product-based businesses</li>
                        <li>Beauty, wellness, and hospitality businesses</li>
                        <li>Professional services – consultants, agencies, freelancers</li>
                        <li>Any UK business looking to grow its online presence through SEO</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>


    <!-- SERVICES GRID -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>SEO Services </h2>
                <p>
                    Comprehensive SEO solutions tailored for businesses across the UK.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <!-- Row 1 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.national-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/National.webp') }}"
                                alt="National SEO Services – Cloud Technologies Ltd"
                                title="National SEO services for improving visibility across the UK"
                                aria-label="National SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-blue"></div>
                        <h3><a href="{{ route('services.seo.national-seo') }}">National SEO</a></h3>
                    </div>
                    <p>
                        National SEO helps businesses rank across the country with targeted strategies designed to increase
                        visibility, drive qualified traffic, and grow brand authority. Reach customers nationwide with
                        optimized content, links, and performance-focused tactics.
                    </p>
                    <a href="{{ route('services.seo.national-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.international-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/International.webp') }}"
                                alt="International SEO Services – Cloud Technologies Ltd"
                                title="International SEO services for global search visibility and ranking"
                                aria-label="International SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-purple"></div>
                        <h3><a href="{{ route('services.seo.international-seo') }}">International SEO</a></h3>
                    </div>
                    <p>
                        International SEO helps your business reach global audiences by optimizing your website for multiple
                        countries and languages. Strengthen worldwide visibility, attract international customers, and grow
                        your brand across borders with targeted global strategies.
                    </p>
                    <a href="{{ route('services.seo.international-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.technical-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/Technical.webp') }}"
                                alt="Technical SEO Services – Cloud Technologies Ltd"
                                title="Technical SEO services for website performance and indexing optimization"
                                aria-label="Technical SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-cyan"></div>
                        <h3><a href="{{ route('services.seo.technical-seo') }}">Technical SEO</a></h3>
                    </div>
                    <p>
                        Technical SEO improves your website’s speed, structure, and crawlability to ensure search engines
                        can properly access, index, and rank your pages. This leads to better performance, higher
                        visibility, and stronger overall SEO results.
                    </p>
                    <a href="{{ route('services.seo.technical-seo') }}" class="service-link">Learn More</a>
                </article>

                <!-- Row 2 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.content-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/Content.webp') }}"
                                alt="Content SEO Services – Cloud Technologies Ltd"
                                title="Content SEO services for optimized and engaging website content"
                                aria-label="Content SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-emerald"></div>
                        <h3><a href="{{ route('services.seo.content-seo') }}">Content SEO</a></h3>
                    </div>
                    <p>
                        Content SEO focuses on creating high-quality, keyword-optimized content that attracts search engines
                        and engages users. It helps increase rankings, drive targeted traffic, and convert visitors through
                        strategic content planning and optimization.
                    </p>
                    <a href="{{ route('services.seo.content-seo') }}" class="service-link">Learn More</a>
                </article>


                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.image-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/Image.webp') }}"
                                alt="Image SEO Services – Cloud Technologies Ltd"
                                title="Image SEO services for better visibility in search and faster loading"
                                aria-label="Image SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-rose"></div>
                        <h3><a href="{{ route('services.seo.image-seo') }}">Image SEO</a></h3>
                    </div>
                    <p>
                        Faster load times and better search visibility through optimised
                        image metadata, compression, and delivery.
                    </p>
                    <a href="{{ route('services.seo.image-seo') }}" class="service-link">Learn More</a>
                </article>

                <!-- Row 3 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.local-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/Local.webp') }}"
                                alt="Local SEO Services – Cloud Technologies Ltd"
                                title="Local SEO services to improve visibility in local search results"
                                aria-label="Local SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-lime"></div>
                        <h3><a href="{{ route('services.seo.local-seo') }}">Local SEO</a></h3>
                    </div>
                    <p>
                        Local SEO helps your business appear in nearby searches by optimizing maps listings, local keywords,
                        citations, and reviews. It drives more foot traffic, calls, and leads from customers in your area,
                        boosting your visibility in local search results.
                    </p>
                    <a href="{{ route('services.seo.local-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.ecommerce-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/eCommerce.webp') }}"
                                alt="eCommerce SEO Services – Cloud Technologies Ltd"
                                title="eCommerce SEO services to boost online store traffic and sales"
                                aria-label="eCommerce SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-indigo"></div>
                        <h3><a href="{{ route('services.seo.ecommerce-seo') }}">eCommerce SEO</a></h3>
                    </div>
                    <p>
                        eCommerce SEO enhances product pages, category structures, and technical performance to improve
                        visibility and increase online sales. It attracts high-intent shoppers through keyword optimization,
                        improved UX, and optimized product listings.
                    </p>
                    <a href="{{ route('services.seo.ecommerce-seo') }}" class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.on-page-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/On-Page.webp') }}"
                                alt="On-Page SEO Services – Cloud Technologies Ltd"
                                title="On-page SEO services for website structure and keyword optimization"
                                aria-label="On-Page SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-sky"></div>
                        <h3><a href="{{ route('services.seo.on-page-seo') }}">On-Page SEO</a></h3>
                    </div>
                    <p>
                        On-Page SEO strengthens your website by optimizing titles, meta tags, content, URLs, and internal
                        links. These improvements increase search engine visibility, boost user experience, and help your
                        pages rank higher for targeted keywords.
                    </p>
                    <a href="{{ route('services.seo.on-page-seo') }}" class="service-link">Learn More</a>
                </article>

                <!-- Row 4 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.seo.off-page-seo') }}">
                            <img src="{{ asset('assets/images/digitalmark/Off-Page.webp') }}"
                                alt="Off-Page SEO Services – Cloud Technologies Ltd"
                                title="Off-page SEO services including link building and authority growth"
                                aria-label="Off-Page SEO" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-slate"></div>
                        <h3><a href="{{ route('services.seo.off-page-seo') }}">Off-Page SEO</a></h3>
                    </div>
                    <p>
                        Off-Page SEO builds your website’s authority through strategic link building, digital PR, citations,
                        and brand mentions. These efforts improve domain trust, increase rankings, and expand your online
                        presence across relevant industry platforms.
                    </p>
                    <a href="{{ route('services.seo.off-page-seo') }}" class="service-link">Learn More</a>
                </article>
            </div>

        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related SEO Services</h2>
                <p>Navigate directly to specialist SEO services tailored to your current ranking goals.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/technical-seo-service-uk"
                    aria-label="Technical SEO services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/on-page-seo-service-uk" aria-label="On-page SEO services UK">
                    <span>On-Page SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/off-page-seo-service-uk" aria-label="Off-page SEO services UK">
                    <span>Off-Page SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/local-seo-service-uk" aria-label="Local SEO services UK">
                    <span>Local SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/ecommerce-seo-service-uk"
                    aria-label="eCommerce SEO services UK">
                    <span>eCommerce SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
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
                    <p class="plan-name">Starter SEO</p>
                    <p class="plan-price">&pound;250</p>
                    <p class="plan-tagline">One time payment</p>
                    <ul class="plan-list">
                        <li>Complete SEO audit and initial setup</li>
                        <li>On-page SEO optimisation</li>
                        <li>Google Business Profile optimisation</li>
                        <li>Basic keyword targeting</li>
                        <li>Technical SEO fixes for better indexing</li>
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
                        <li>Advanced local and on-page SEO strategies</li>
                        <li>Technical SEO monitoring and improvements</li>
                        <li>Authority building through backlinks and citations</li>
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
                @foreach ($businessResults as $result)
                    <article class="card result-card">
                        <div class="result-header">
                            <p class="business-name">{{ $result->business_name }}</p>
                            <p class="business-location">{{ $result->business_location }}</p>
                            <p class="campaign-duration">{{ $result->campaign_duration }}</p>
                        </div>

                        <div class="result-metrics">
                            @foreach ($result->metrics as $metric)
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
                <p class="stat-label">SEO Campaigns Successfully Delivered</p>
            </article>
            <article class="stat">
                <p class="stat-value">250%</p>
                <p class="stat-label">Strong Growth in Organic Traffic and Leads</p>
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
                    As a digital agency, we understand your challenges and are committed to your success through effective
                    SEO.
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
                        <p class="why-text">Quick implementation and responsive changes when you need changes.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span class="why-bullet"></span>
                    <div class="why-content">
                        <p class="why-title">We Understand Small Businesses</p>
                        <p class="why-text">SEO strategies tailored to real-world business goals and competition.</p>
                    </div>
                </div>
                <div class="why-item">
                    <span class="why-bullet"></span>
                    <div class="why-content">
                        <p class="why-title">Trusted Across the UK</p>
                        <p class="why-text">Proven SEO results for UK-based trades, services, and companies.</p>
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
                    <h2>Work With a Trusted SEO Agency in the UK</h2>
                    <p>
                        Choosing the right SEO agency can be the difference between being invisible online and dominating
                        search results. Our SEO services are designed to help UK businesses improve rankings, attract more
                        visitors, and turn search traffic into real enquiries and sales.
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

    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Search Engine Optimisation(SEO) FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is SEO and how does it help my business?</summary>
                        <div class="faq-content">
                            <p>
                                SEO (Search Engine Optimisation) improves your website’s visibility in Google so potential
                                customers can find your services when they search online, leading to more traffic,
                                enquiries, and sales.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. How long does SEO take to deliver results?</summary>
                        <div class="faq-content">
                            <p>
                                SEO is a long-term strategy. Most businesses see measurable improvements within 2–4 months,
                                with stronger rankings and traffic growth over time.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3.What is included in a professional SEO service?</summary>
                        <div class="faq-content">
                            <p>
                                A complete SEO service includes keyword research, on-page optimisation, technical SEO
                                improvements, content optimisation, local SEO, and authority building through backlinks and
                                citations.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4.Why is ongoing SEO important?</summary>
                        <div class="faq-content">
                            <p>
                                Search rankings change constantly. Ongoing SEO ensures your website stays competitive,
                                maintains rankings, and continues to grow in visibility.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. Can SEO generate real leads and customers?</summary>
                        <div class="faq-content">
                            <p> Yes. SEO targets users actively searching for your services, resulting in high-intent
                                traffic that converts into real enquiries and customers.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. How do you measure SEO success?</summary>
                        <div class="faq-content">
                            <p>
                                SEO success is measured through keyword rankings, organic traffic growth, user engagement,
                                and the number of leads or conversions generated from search engines.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>


@endsection
