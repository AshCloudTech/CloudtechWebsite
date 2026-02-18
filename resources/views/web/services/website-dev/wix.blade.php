@extends('layouts.cloudtech')

@section('title', 'Wix Website Development Services | Cloud Technologies Ltd')
@section('meta_title', 'Wix Website Development Services | Cloud Technologies Ltd')
@section('meta_description', 'Professional Wix website development services for scalable, visually engaging websites
    with flexible design and clear pricing.')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/wix/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/webDevelopment/wix/js/script.js') }}" defer></script>
    @endpush
@section('content')


    <!-- HERO -->
    <section class="hero wix-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Wix Development Services</p>
            <h1>High-Performance Wix<br>Website Development Services</h1>
            <p class="hero-subtitle">
                We provide professional Wix website development services to build scalable,
                visually engaging Wix websites with flexible design, clear Wix website pricing, and cost-effective
                solutions.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Get Started Now</a>
                <a href="#services" class="btn btn-secondary">View Services</a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">220+</p>
                <p class="stat-label">Wix Sites Created</p>
            </article>
            <article class="stat">
                <p class="stat-value">97%</p>
                <p class="stat-label">Client Satisfaction</p>
            </article>
            <article class="stat">
                <p class="stat-value">3.2x</p>
                <p class="stat-label">Average Conversion Boost</p>
            </article>
            <article class="stat">
                <p class="stat-value">48hrs</p>
                <p class="stat-label">Average Turnaround</p>
            </article>
        </div>
    </section>

    <!-- OUR WIX DEVELOPMENT SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Wix Development Services</h2>
                <p>
                    Our Wix website development agency delivers complete solutions including design,
                    customization, and performance optimization while guiding clients on Wix website cost and pricing
                    options.
                </p>
            </div>

            <div class="grid grid-3 services-grid services-grid-ui">
                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="layout-dashboard"></i>
                    </div>
                    <h3>Drag &amp; Drop Customisation</h3>
                    <p>
                        Custom Wix website designs using Wix builder tools to create visually appealing, easy-to-manage
                        layouts.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="shopping-cart"></i>
                    </div>
                    <h3>Wix Stores Setup</h3>
                    <p>
                        Professional store setup to launch secure, conversion-focused online shops.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="plug"></i>
                    </div>
                    <h3>App Integration</h3>
                    <p>
                        Seamless third-party and custom app integration to enhance Wix functionality and user experience.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="code"></i>
                    </div>
                    <h3>Velo Development</h3>
                    <p>
                        Advanced functionality built with Velo by Wix to create dynamic features and custom business logic.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <h3>SEO &amp; Marketing</h3>
                    <p>
                        SEO-optimized Wix website development improving visibility, traffic, and long-term growth.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="arrow-right-left"></i>
                    </div>
                    <h3>Site Migration</h3>
                    <p>
                        Smooth website migration handled with minimal downtime and secure data transfer.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- WHY CHOOSE WIX PLATFORM -->
    <section class="section section-why" id="why-wix">
        <div class="container why-layout">
            <div class="why-copy">
                <h2>Why Choose Wix Platform?</h2>
                <p class="why-intro">
                    Wix offers flexible design, transparent Wix website pricing, powerful tools, and an intuitive platform,
                    making Wix website development ideal for businesses of all sizes.
                </p>
                <ul class="why-list">
                    <li>Easy website builder</li>
                    <li>Transparent pricing options</li>
                    <li>Professional design flexibility</li>
                    <li>Built-in SEO tools</li>
                    <li>Secure hosting included</li>
                    <li>Scalable business growth</li>
                </ul>
            </div>
            <div class="why-media" aria-hidden="true">
                <img src="{{ asset('assets/images/web/wix.webp') }}" alt="Wix Capabilities"
                    title="Wix Capabilities" aria-label="Wix Capabilities" aria-hidden="true"
                    loading="lazy" decoding="async" class="media-placeholder">            </div>
        </div>
    </section>

    <!-- PERFECT FOR EVERY BUSINESS -->
    <section class="section section-business" id="business-types">
        <div class="container">
            <div class="section-header">
                <h2>Perfect For Every Business</h2>
                <p>
                    Wix website development supports diverse industries with customizable designs and affordable Wix website
                    cost.
                </p>
            </div>

            <div class="grid grid-3 business-grid business-grid-ui">
                <article class="business-card business-card-ui">
                    <div class="bizIcon" aria-hidden="true"><i data-lucide="briefcase"></i></div>
                    <h3>Business Websites</h3>
                    <p>Professional Wix website designs for service-based businesses.</p>
                </article>

                <article class="business-card business-card-ui">
                    <div class="bizIcon" aria-hidden="true"><i data-lucide="shopping-bag"></i></div>
                    <h3>Online Stores</h3>
                    <p>Secure and scalable eCommerce solutions built on Wix.</p>
                </article>

                <article class="business-card business-card-ui">
                    <div class="bizIcon" aria-hidden="true"><i data-lucide="image"></i></div>
                    <h3>Portfolios</h3>
                    <p>Creative layouts designed by expert Wix website designers.</p>
                </article>

                <article class="business-card business-card-ui">
                    <div class="bizIcon" aria-hidden="true"><i data-lucide="utensils"></i></div>
                    <h3>Restaurants</h3>
                    <p>Menus, reservations, and mobile-friendly designs.</p>
                </article>

                <article class="business-card business-card-ui">
                    <div class="bizIcon" aria-hidden="true"><i data-lucide="calendar-check"></i></div>
                    <h3>Booking Sites</h3>
                    <p>Integrated scheduling and payment features.</p>
                </article>

                <article class="business-card business-card-ui">
                    <div class="bizIcon" aria-hidden="true"><i data-lucide="pen-line"></i></div>
                    <h3>Blogs</h3>
                    <p>Content-focused Wix websites built for growth.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHAT ARE WIX DEVELOPMENT SERVICES -->
    <section class="section section-services" id="about-wix-development">
        <div class="container">
            <div class="section-header">
                <h2>What Are Wix Development Services?</h2>
            </div>

            <div class="wix-about-wrapper">

                <div class="wix-about-content">
                    <p>
                        Wix development services focus on creating visually engaging, mobile-responsive, and cost-effective
                        websites using Wix’s flexible website builder. These services include custom design, store setup,
                        app integrations, SEO optimisation, and advanced functionality using Velo.
                    </p>

                    <p>
                        A professional Wix development approach ensures your website is easy to manage, quick to launch, and
                        structured to present your business professionally while remaining budget-friendly.
                    </p>

                    <p>
                        If you want a flexible website with strong design control and simple management, Wix development
                        services are a practical solution.
                    </p>
                </div>

                <div class="wix-about-highlight">
                    <h3>Who Needs Wix Development?</h3>

                    <p>Wix development is ideal for:</p>

                    <ul>
                        <li>Small and medium-sized businesses</li>
                        <li>Service providers needing professional websites</li>
                        <li>Startups looking for fast and affordable launches</li>
                        <li>Restaurants, salons, and booking-based businesses</li>
                        <li>Creatives building portfolios and blogs</li>
                        <li>Businesses wanting eCommerce without complexity</li>
                    </ul>

                    <p class="wix-about-note">
                        If you need a website that is easy to update, visually appealing, and quick to deploy, Wix is a
                        suitable platform.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY WIX IS SUITABLE -->
    <section class="section section-business" id="why-wix-modern" style="background-color: #f5f5f5">
        <div class="container">

            <div class="section-header">
                <h2>Why Wix Is Suitable for Modern Businesses</h2>
            </div>

            <div class="wix-growth-card">
                <p>
                    Wix combines design flexibility with an intuitive drag-and-drop builder, allowing businesses to create
                    professional websites without technical barriers. With built-in SEO tools, secure hosting, and
                    transparent pricing, Wix websites are reliable, responsive, and simple to maintain.
                </p>

                <p>
                    With the right Wix development strategy, your website benefits from clean design, smooth functionality,
                    mobile optimisation, and a scalable setup that supports business growth.
                </p>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Launch Your Wix Website?</h2>
                    <p>
                        Partner with a trusted Wix website development company to build a high-performing Wix website that
                        fits your budget and business goals.
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
                <h2>Wix Development Services FAQ</h2>
                <p>
                    Answers to common questions about Wix website development, pricing, features, and support.
                </p>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What are Wix website development services?</summary>
                        <div class="faq-content">
                            <p>
                                Wix website development services include custom design, setup, and optimization using the
                                Wix website builder to create professional, scalable websites for businesses.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. How much does a Wix website cost?</summary>
                        <div class="faq-content">
                            <p>
                                Wix website cost depends on design complexity, features, and Wix website pricing plans.
                                Custom functionality and integrations may affect final pricing.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Can you create custom Wix website designs?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, our Wix website designers create custom layouts, branding, and functionality tailored
                                to your business goals and audience.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Do you offer Wix eCommerce website development?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, we build secure Wix online stores with product management, payments, and
                                conversion-focused features for growing businesses.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. Can you migrate my existing site to Wix?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, our Wix website development agency handles smooth site migration while maintaining
                                content structure and SEO value.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Is Wix suitable for small businesses?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, Wix is ideal for small businesses due to flexible design options, transparent pricing,
                                and easy content management.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>



@endsection
