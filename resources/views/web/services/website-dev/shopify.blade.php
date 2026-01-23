@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/shopify/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/shopify/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero shopify-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Shopify Development Services</p>
            <h1>Results-Driven<br>Shopify Development</h1>
            <p class="hero-subtitle">
                Delivering powerful, sales-optimised eCommerce stores for brands of all sizes with sleek,
                mobile-ready design and seamless user experiences.
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
                    From store setup to custom development, we provide comprehensive Shopify solutions that
                    drive growth and maximise revenue.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Store Setup &amp; Configuration</h3>
                    <p>
                        Complete Shopify store setup with optimised settings, payment gateways and shipping configuration.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Custom Theme Development</h3>
                    <p>
                        Bespoke Shopify themes designed to reflect your brand and provide exceptional user experiences.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>App Integration</h3>
                    <p>
                        Strategic integration of Shopify apps to enhance functionality and streamline operations.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Platform Migration</h3>
                    <p>
                        Seamless migration from other platforms to Shopify with zero data loss and minimal downtime.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Mobile Commerce</h3>
                    <p>
                        Mobile-first design approach ensuring perfect shopping experiences on all devices.
                    </p>
                </article>

                <article class="card service-card">
                    <div class="card-icon"></div>
                    <h3>Ongoing Optimisation</h3>
                    <p>
                        Continuous performance monitoring and optimisation to maximise conversions and sales.
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
                    Shopify powers millions of stores worldwide, trusted by entrepreneurs and enterprise brands alike.
                    It&apos;s the complete commerce platform that lets you start, grow and manage your business.
                </p>
                <div class="why-lists">
                    <ul>
                        <li>Hosted solution with 99.99% uptime</li>
                        <li>Automatic security updates</li>
                        <li>Extensive app marketplace</li>
                        <li>Advanced analytics</li>
                    </ul>
                    <ul>
                        <li>Built-in payment processing</li>
                        <li>Scalable infrastructure</li>
                        <li>Multi-channel selling</li>
                        <li>International selling support</li>
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
                    Our Shopify expertise has helped businesses achieve remarkable growth and success.
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

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Launch Your Shopify Store?</h2>
                    <p>
                        Let&apos;s create a stunning Shopify store that converts visitors into customers and drives sustainable growth.
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