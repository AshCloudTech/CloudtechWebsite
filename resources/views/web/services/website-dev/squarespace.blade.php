@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/squarespace/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/squarespace/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero squarespace-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Squarespace Development Services</p>
            <h1>Build Stunning Websites<br>with Squarespace</h1>
            <p class="hero-subtitle">
                Create beautiful, professional websites with Squarespace&apos;s powerful platform.
                We help you design, customise and launch sites that captivate your audience.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Start Your Project</a>
                <a href="#services" class="btn btn-secondary">Explore Features</a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">180+</p>
                <p class="stat-label">Squarespace Sites Built</p>
            </article>
            <article class="stat">
                <p class="stat-value">95%</p>
                <p class="stat-label">Client Satisfaction Rate</p>
            </article>
            <article class="stat">
                <p class="stat-value">2.8x</p>
                <p class="stat-label">Average Traffic Increase</p>
            </article>
            <article class="stat">
                <p class="stat-value">24/7</p>
                <p class="stat-label">Support Available</p>
            </article>
        </div>
    </section>

    <!-- OUR SQUARESPACE SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Squarespace Services</h2>
                <p>
                    Comprehensive Squarespace development services to bring your vision to life with
                    style and functionality.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Custom Template Design</h3>
                    <p>
                        Tailored Squarespace templates that perfectly match your brand identity and business goals.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>E-commerce Integration</h3>
                    <p>
                        Set up powerful online stores with inventory management, payment processing and shipping options.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Mobile Optimisation</h3>
                    <p>
                        Ensure your Squarespace site looks stunning and functions flawlessly on all devices.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Custom Code Injection</h3>
                    <p>
                        Extend Squarespace functionality with custom CSS, JavaScript and third‑party integrations.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>SEO Enhancement</h3>
                    <p>
                        Optimise your site structure, metadata and content for better search engine rankings.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Content Migration</h3>
                    <p>
                        Seamlessly migrate your existing website content to Squarespace without losing SEO value.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE SQUARESPACE -->
    <section class="section section-why" id="why">
        <div class="container why-layout">
            <div class="why-copy">
                <h2>Why Choose Squarespace?</h2>
                <p class="why-intro">
                    Squarespace combines powerful features with elegant design, making it the perfect platform
                    for businesses, creatives and entrepreneurs who want a professional online presence.
                </p>
                <ul class="why-list">
                    <li>Beautiful, award‑winning templates</li>
                    <li>All‑in‑one platform with hosting included</li>
                    <li>Built‑in analytics and marketing tools</li>
                    <li>Excellent customer support</li>
                    <li>Regular updates and new features</li>
                    <li>Secure and reliable infrastructure</li>
                </ul>
            </div>
            <div class="why-media" aria-hidden="true">
                <div class="media-placeholder"></div>
            </div>
        </div>
    </section>

    <!-- OUR DEVELOPMENT PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Development Process</h2>
                <p>
                    A streamlined approach to creating your perfect Squarespace website.
                </p>
            </div>

            <div class="process-grid">
                <article class="process-step">
                    <p class="step-number">01</p>
                    <h3>Discovery</h3>
                    <p>Understanding your brand, goals and target audience.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">02</p>
                    <h3>Design</h3>
                    <p>Creating custom layouts and selecting the perfect template.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">03</p>
                    <h3>Development</h3>
                    <p>Building and customising your Squarespace site.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">04</p>
                    <h3>Launch</h3>
                    <p>Testing, optimisation and going live with full support.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Build Your Squarespace Site?</h2>
                    <p>
                        Let&apos;s create a stunning website that showcases your brand and drives results.
                        Get started today!
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn btn-light">Call</a>
                    <a href="#" class="btn btn-outline">Email Us</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection