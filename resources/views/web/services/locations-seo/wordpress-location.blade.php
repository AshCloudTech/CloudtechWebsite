@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords',
    'WordPress web development UK, WordPress website development UK, WordPress pricing UK, custom
    WordPress design UK, SEO-friendly WordPress UK, mobile-responsive WordPress UK, professional WordPress websites
    UK, WordPress agency UK')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/wordpress/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/services/webDevelopment/wordpress/js/script.js') }}" defer></script>
    @endpush

@section('content')

    <!-- HERO -->
    <section class="hero wordpress-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">WordPress Development Services</p>
            <h1>Fast, Secure &amp; SEO-Friendly WordPress Websites</h1>
            <p class="hero-subtitle">
                We build custom WordPress websites that load quickly, rank well, and stay easy to manage — with clean code,
                scalable architecture, and long-term support.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Start Your Project</a>
                <a href="#solutions" class="btn btn-ghost">Explore Solutions</a>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE WORDPRESS SOLUTIONS -->
    <section class="section section-solutions" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive WordPress Solutions</h2>
                <p>
                    End-to-end WordPress development — from custom themes and plugin engineering to speed optimisation,
                    security hardening, and reliable maintenance.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid solutions-grid-ui">
                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="code-2"></i>
                    </div>
                    <h3>Custom WordPress Development</h3>
                    <p>
                        Tailored WordPress builds aligned to your brand, user journeys, and conversion goals.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="layout-template"></i>
                    </div>
                    <h3>Theme Design &amp; Builds</h3>
                    <p>
                        Responsive, accessible themes with clean code and a premium UI — built for performance.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="puzzle"></i>
                    </div>
                    <h3>Plugin Development</h3>
                    <p>
                        Custom plugins and integrations to extend your site without bloating the codebase.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="shopping-cart"></i>
                    </div>
                    <h3>WooCommerce Integration</h3>
                    <p>
                        Product, checkout and payment flows optimised for conversion — with scalable store architecture.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3>Performance Optimisation</h3>
                    <p>
                        Core Web Vitals improvements: image optimisation, caching, critical CSS, and script hygiene.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <h3>Maintenance &amp; Support</h3>
                    <p>
                        Version updates, security patches, backups, and monitoring — with clear SLAs.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- WHY WORDPRESS -->
    <section class="section section-why" id="why">
        <div class="container why-layout">
            <div class="why-copy">
                <h2>Why WordPress Works for Growing Businesses</h2>
                <p class="why-intro">
                    WordPress is flexible, scalable, and content-friendly — making it a great fit for marketing websites,
                    landing pages, and content-led growth.
                </p>

                <div class="why-lists">
                    <ul>
                        <li>Easy content management</li>
                        <li>SEO-friendly structure</li>
                        <li>Highly customisable</li>
                        <li>Scalable for growth</li>
                    </ul>
                    <ul>
                        <li>Large plugin ecosystem</li>
                        <li>Strong security options</li>
                        <li>Fast iteration</li>
                        <li>Multi-language ready</li>
                    </ul>
                </div>
            </div>

            <div class="why-media" aria-hidden="true">
                <img src="{{ asset('assets/images/web/wordpress.webp') }}"
                    alt="WordPress Website Development – Cloud Technologies Ltd"
                    title="WordPress website development services for custom and scalable websites"
                    aria-label="WordPress Development Services" aria-hidden="true"
                    loading="lazy" decoding="async" class="media-placeholder">

            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our WordPress Delivery Process</h2>
                <p>
                    A clear, milestone-driven approach — so you get predictable outcomes, clean builds, and launch-ready
                    quality.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <p class="step">01</p>
                    <h3>Discovery</h3>
                    <p>We define goals, pages, integrations, SEO needs, and success metrics.</p>
                </article>

                <article class="card process-card">
                    <p class="step">02</p>
                    <h3>Design</h3>
                    <p>Wireframes and UI crafted for clarity, trust, and conversion.</p>
                </article>

                <article class="card process-card">
                    <p class="step">03</p>
                    <h3>Build</h3>
                    <p>Theme + plugin development with performance, security, and scalability.</p>
                </article>

                <article class="card process-card">
                    <p class="step">04</p>
                    <h3>Launch &amp; Support</h3>
                    <p>Deployment, monitoring, and continuous improvements post-launch.</p>
                </article>
            </div>
        </div>
    </section>
    <!-- What Are WordPress Development Services?  -->
    <section class="section section-national-about" id="about-meta_ads-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are WordPress Development Services? </h2>

                    <p>
                        WordPress development services focus on building fast, secure, and SEO-friendly websites using
                        WordPress, the world’s most popular content management system. These services include custom theme
                        development, plugin engineering, performance optimisation, security hardening, and long-term
                        maintenance.
                    </p>

                    <p>
                        A professional WordPress development approach ensures your website is easy to manage, scalable as
                        your business grows, and technically structured to rank well on search engines.
                    </p>
                    <p>If you want a website that combines flexibility, performance, and long-term reliability, investing in
                        expert WordPress development services is the right choice.</p>
                </div>

                <div class="national-about-highlight">
                    <h3>Who Needs WordPress Development? </h3>

                    <p>
                        WordPress development is ideal for:
                    </p>

                    <ul>
                        <li>Businesses needing a professional marketing website</li>
                        <li>Companies wanting full control over their content</li>
                        <li>eCommerce stores using WooCommerce</li>
                        <li>Startups and growing brands needing scalable website</li>
                        <li>Service providers generating leads online</li>
                        <li>Organisations requiring custom features and integrations</li>
                    </ul>

                    <p class="">
                        If your website is central to your marketing, WordPress gives you the flexibility and power to grow
                        without limitations.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Why WordPress Is Essential for Business Growth  -->
    <section class="section section-national-growth" id="meta_ads-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why WordPress Is Essential for Business Growth </h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Websites built with WordPress offer the perfect balance of usability, performance, and SEO structure.
                    Unlike restrictive builders, WordPress allows complete customisation while remaining easy for teams to
                    manage daily content. A well-developed WordPress website becomes a long-term digital asset that supports
                    marketing, branding, and lead generation.
                </p>

                <!-- <p>
                          With the right strategy, social media becomes a powerful channel for awareness, engagement, and lead generation that supports your overall digital marketing efforts.
                        </p> -->
            </div>

        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Combine development and SEO services to strengthen website performance and long-term growth.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="Website development services UK">
                    <span>Website Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/shopify-website-development-service-uk"
                    aria-label="Shopify development services UK">
                    <span>Shopify Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/wix-website-development-service-uk"
                    aria-label="Wix website development UK">
                    <span>Wix Website Development UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/ecommerce-seo-service-uk"
                    aria-label="eCommerce SEO services UK">
                    <span>eCommerce SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-copy">
                    <h2>Ready to Build a High-Performing WordPress Website?</h2>
                    <p>
                        Share your requirements — we’ll propose a clean build plan, realistic timelines, and a delivery
                        approach that protects performance and SEO.
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="{{ url('/contact') }}" class="btn btn-primary">Talk to Us</a>
                    <a href="{{ url('/pricing') }}" class="btn btn-ghost">View Pricing</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>WordPress Development FAQ</h2>
                <p>
                    Answers to common questions about timelines, features, performance, and ongoing support.
                </p>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What do WordPress development services include?</summary>
                        <div class="faq-content">
                            <p>
                                WordPress development can include theme development, custom plugins, integrations,
                                performance optimisation, security hardening, and ongoing maintenance.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. Do you build custom themes or use page builders?</summary>
                        <div class="faq-content">
                            <p>
                                We can do both. For maximum performance and flexibility, we prefer custom themes with
                                clean blocks. If a builder is required, we implement guardrails to keep the site fast.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Can you optimise an existing WordPress website?</summary>
                        <div class="faq-content">
                            <p>
                                Yes. We can improve speed, remove bloat, fix technical SEO issues, improve Core Web Vitals,
                                and stabilise plugins and updates.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Is WordPress good for SEO?</summary>
                        <div class="faq-content">
                            <p>
                                WordPress is SEO-friendly when the theme, structure, and performance are implemented
                                properly. We build with clean HTML, fast loading, and best-practice SEO foundations.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. How long does it take to build a WordPress website?</summary>
                        <div class="faq-content">
                            <p>
                                Timelines depend on scope. A small marketing site can take 1–3 weeks, while custom
                                functionality or WooCommerce builds can take 4–8 weeks.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection
