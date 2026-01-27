@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/squarespace/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/squarespace/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero squarespace-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Squarespace Development Services</p>
            <h1>Squarespace Web<br>Development Solutions</h1>
            <p class="hero-subtitle">
               We provide professional Squarespace web development services to build high-quality Squarespace websites that are visually engaging, cost-effective, and easy to manage using the Squarespace website builder.
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
                    Our Squarespace website agency delivers complete solutions including design, development, customization, and guidance on Squarespace pricing, website plans, and long-term scalability.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Custom Template Design</h3>
                    <p>
                        Custom Squarespace website design tailored to your brand, ensuring a modern layout, strong visuals, and seamless user experience.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>E-commerce Integration</h3>
                    <p>
                       We integrate secure eCommerce features into your Squarespace website, helping businesses sell products efficiently with optimized checkout flows.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Mobile Optimisation</h3>
                    <p>
                       Responsive Squarespace web development ensures your website performs flawlessly across all devices and screen sizes.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Custom Code Injection</h3>
                    <p>
                       Advanced customization using code injection to extend Squarespace website builder functionality beyond standard templates.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>SEO Enhancement</h3>
                    <p>
                        SEO-focused Squarespace website development to improve visibility, rankings, and organic traffic while keeping Squarespace website cost efficient.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Content Migration</h3>
                    <p>
                      Smooth content migration handled by a Squarespace website agency, preserving SEO value and ensuring accuracy during platform transitions.
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
                    Squarespace offers an intuitive website builder, flexible Squarespace website plans, transparent Squarespace pricing, and professional tools ideal for businesses seeking speed, design, and simplicity.
                </p>
                <ul class="why-list">
                    <li>Easy website management</li>
                    <li>Transparent pricing plans</li>
                    <li>Built-in SEO tools</li>
                    <li>Mobile-ready templates</li>
                    <li>Secure hosting included</li>
                    <li>Professional design system</li>
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
                    A structured Squarespace web development process focused on strategy, design precision, and efficient delivery for businesses of all sizes.
                </p>
            </div>

            <div class="process-grid">
                <article class="process-step">
                    <p class="step-number">01</p>
                    <h3>Discovery</h3>
                    <p>We analyze goals, audience, and Squarespace website pricing needs.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">02</p>
                    <h3>Design</h3>
                    <p>Creative layouts designed to match your brand and vision.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">03</p>
                    <h3>Development</h3>
                    <p>Clean development using Squarespace create website tools.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">04</p>
                    <h3>Launch</h3>
                    <p>Final testing, deployment, and performance optimization.</p>
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
                       Partner with a trusted Squarespace website agency and square website company to create a professional Squarespace website that fits your budget, aligns with Squarespace website cost expectations, and supports business growth.
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