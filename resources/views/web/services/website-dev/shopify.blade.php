@extends('layouts.cloudtech')

@section('title', 'Shopify Website Development Services | Cloud Technologies Ltd')
@section('meta_title', 'Shopify Website Development Services | Cloud Technologies Ltd')
@section('meta_description', 'Professional Shopify website development services for scalable, high-converting online
    stores with custom themes, app integrations, and seamless migration.')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/shopify/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/webDevelopment/shopify/js/script.js') }}" defer></script>
    @endpush
@section('content')


    <!-- HERO -->
    <section class="hero shopify-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Shopify Development Services</p>
            <h1>Trusted Shopify<br>Website Development Experts</h1>
            <p class="hero-subtitle">
                We provide expert Shopify website development services, delivering secure, scalable, and high-converting
                Shopify websites through strategic design and custom development.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Build Your Store</a>
                <a href="#services" class="btn btn-ghost">View Services</a>
            </div>
        </div>
    </section>

    <!-- EXPERT SHOPIFY DEVELOPMENT SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Expert Shopify Development Services</h2>
                <p>
                    Our expert Shopify developers offer complete Shopify web development, combining performance, design, and
                    functionality for growing online businesses.
                </p>
            </div>

            <div class="grid grid-3 services-grid services-grid-ui">
                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="store"></i>
                    </div>
                    <h3>Store Setup &amp; Configuration</h3>
                    <p>
                        Professional Shopify website setup and configuration ensuring smooth store launch and scalability.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="palette"></i>
                    </div>
                    <h3>Custom Theme Development</h3>
                    <p>
                        Custom Shopify web design tailored to your brand, delivering responsive and conversion-focused
                        experiences.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="plug"></i>
                    </div>
                    <h3>App Integration</h3>
                    <p>
                        Seamless third-party and custom app integration to extend functionality and improve workflows.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="replace"></i>
                    </div>
                    <h3>Platform Migration</h3>
                    <p>
                        Secure migration to Shopify from other platforms, handled with minimal downtime and clean data
                        transfer.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="smartphone"></i>
                    </div>
                    <h3>Mobile Commerce</h3>
                    <p>
                        Mobile-optimized Shopify development ensuring fast, responsive shopping experiences across all
                        devices.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3>Ongoing Optimisation</h3>
                    <p>
                        Continuous performance, UX, and conversion optimization delivered by a full-service Shopify web
                        agency.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- WHY SHOPIFY IS PERFECT FOR YOUR BUSINESS -->
    <section class="section section-why" id="why-shopify">
        <div class="container why-layout">
            <div class="why-copy">
                <h2>Why Shopify is Perfect for Your Business</h2>
                <p class="why-intro">
                    Shopify website builder offers scalability, security, and ease of use, making Shopify website
                    development ideal for businesses seeking fast growth and reliable eCommerce performance.
                </p>
                <div class="why-lists">
                    <ul>
                        <li>Easy store management</li>
                        <li>Secure hosted platform</li>
                        <li>Mobile-first design</li>
                        <li>Fast page load speeds</li>
                    </ul>
                    <ul>
                        <li>Extensive app ecosystem</li>
                        <li>Scalable business growth</li>
                        <li>SEO-friendly structure</li>
                        <li>Reliable checkout system</li>
                    </ul>
                </div>
            </div>
            <div class="why-media" aria-hidden="true">
                <div class="media-placeholder"></div>
            </div>
        </div>
    </section>

    <!-- PROVEN TRACK RECORD -->
    <section class="section section-results" id="results">
        <div class="container">
            <div class="section-header">
                <h2>Proven Track Record</h2>
                <p>
                    Our Shopify website development services are backed by a proven track record of successful launches,
                    measurable growth, and long-term client satisfaction.
                </p>
            </div>

            <div class="results-grid">
                <article class="result">
                    <p class="result-value">150+</p>
                    <p class="result-title">Shopify Stores Built</p>
                    <p class="result-text">
                        Successfully launched and optimised stores across various industries.
                    </p>
                </article>
                <article class="result">
                    <p class="result-value">3.5x</p>
                    <p class="result-title">Average Sales Increase</p>
                    <p class="result-text">
                        Our clients see significant revenue growth after migration or redesign.
                    </p>
                </article>
                <article class="result">
                    <p class="result-value">100%</p>
                    <p class="result-title">Client Satisfaction</p>
                    <p class="result-text">
                        Every client recommends our Shopify development services.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!-- What Are Shopify Development Services?   -->
    <section class="section section-national-about" id="about-meta_ads-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are Shopify Development Services? </h2>

                    <p>
                        Shopify development services focus on creating fast, secure, and conversion-focused online stores
                        that are easy to manage and built to scale. These services include custom theme development, store
                        setup, app integrations, technical optimisation, and ongoing support to ensure long-term
                        performance.
                    </p>

                    <p>
                        A professional Shopify development approach ensures your eCommerce website is structured for SEO,
                        delivers smooth user experiences, and turns visitors into customers. From product architecture to
                        checkout optimization, every element is designed to improve visibility, engagement, and sales.
                    </p>
                    <p>If you want a reliable, SEO-friendly online store that supports business growth, Shopify development
                        services are an ideal solution.</p>
                </div>

                <div class="national-about-highlight">
                    <h3>Who Needs Shopify Development? </h3>

                    <p>
                        Shopify development is ideal for:
                    </p>

                    <ul>
                        <li>eCommerce businesses selling across the UK</li>
                        <li>Retail brands moving from offline to online sales</li>
                        <li>Startups launching new online stores quickly</li>
                        <li>Businesses needing secure, hosted eCommerce infrastructure</li>
                        <li>Companies requiring custom app integrations and features</li>
                        <li>Brands focused on mobile-first shopping experiences</li>
                    </ul>

                    <p class="">
                        If your goal is to sell products online efficiently while keeping management simple, Shopify
                        provides the flexibility and scalability you need.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Why Shopify Is Essential for eCommerce Growth   -->
    <section class="section section-national-growth" id="meta_ads-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why Shopify Is Essential for eCommerce Growth </h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Shopify combines ease of use with powerful eCommerce functionality, making it perfect for businesses
                    that want performance without technical complexity. As a hosted platform, Shopify provides built-in
                    security, fast loading speeds, reliable checkout systems, and a structure that supports SEO best
                    practices.

                <p>
                    With the right Shopify development strategy, your store benefits from responsive design, optimised
                    product pages, clean URL structures, app-enhanced functionality, and a scalable foundation that supports
                    long-term growth in organic traffic and online sales.
                </p>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Launch Your Shopify Store?</h2>
                    <p>
                        Let&apos;s create a stunning Shopify store that converts visitors into customers and drives
                        sustainable growth.
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn btn-light">Call</a>
                    <a href="#" class="btn btn-outline">Email Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Shopify Development FAQ</h2>
                <p>
                    Answers to common questions about Shopify development, features, timelines, and ongoing support.
                </p>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What are Shopify development services?</summary>
                        <div class="faq-content">
                            <p>
                                Shopify development services include designing, developing, customizing, and optimizing
                                online stores using Shopify. These services cover store setup, custom themes, app
                                integration, payment gateways, performance optimization, and ongoing support.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. Why should I choose Shopify for my eCommerce store?</summary>
                        <div class="faq-content">
                            <p>
                                Shopify is a powerful, secure, and scalable eCommerce platform. It offers easy store
                                management, fast loading speed, mobile-friendly design, built-in payment options, and strong
                                SEO capabilities—making it ideal for businesses of all sizes.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Do you provide custom Shopify development?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, custom Shopify development allows businesses to build unique online stores tailored to
                                their brand and goals. This includes custom themes, advanced features, third-party
                                integrations, and optimized checkout experiences.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Is Shopify SEO-friendly?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, Shopify is SEO-friendly when developed correctly. It supports clean URLs, fast page
                                speed, mobile responsiveness, SEO apps, optimized product pages, and structured data to help
                                improve search engine rankings.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. How long does it take to develop a Shopify store?</summary>
                        <div class="faq-content">
                            <p>
                                A basic Shopify store can be launched in 1–3 weeks. Custom Shopify development projects with
                                advanced features or integrations may take 4–6 weeks or more, depending on complexity.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Do you offer Shopify maintenance and support services?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, Shopify maintenance services include theme updates, app management, security checks,
                                performance optimization, bug fixes, and ongoing technical support to keep your store
                                running smoothly.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection
