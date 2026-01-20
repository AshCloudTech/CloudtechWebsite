@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/laravel/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/laravel/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero laravel-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Laravel Development Services</p>
            <h1>Expert Laravel Development<br>in the UK</h1>
            <p class="hero-subtitle">
                Recognised as one of the top 10 best website development companies in the UK,
                specialising in robust, scalable Laravel development solutions for complex business applications.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Start Your Project</a>
                <a href="#solutions" class="btn btn-ghost">Explore Solutions</a>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE LARAVEL SOLUTIONS -->
    <section class="section section-solutions" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive Laravel Solutions</h2>
                <p>
                    From custom web applications to complex enterprise systems, we deliver Laravel solutions
                    that power your business growth.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid">
                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Custom Web Applications</h3>
                    <p>
                        Tailored Laravel applications built to solve your unique business challenges with scalable architecture.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>RESTful API Development</h3>
                    <p>
                        Robust and secure APIs for seamless integration with third-party services and mobile applications.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Database Architecture</h3>
                    <p>
                        Optimised database design and implementation for efficient data management and retrieval.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Security Implementation</h3>
                    <p>
                        Enterprise-grade security measures including authentication, authorisation and data encryption.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Cloud Deployment</h3>
                    <p>
                        Professional deployment on AWS, Azure or other cloud platforms with CI/CD pipelines.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Legacy System Migration</h3>
                    <p>
                        Seamless migration of legacy applications to modern Laravel framework with improved performance.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- MODERN TECHNOLOGY STACK -->
    <section class="section section-stack" id="stack">
        <div class="container stack-layout">
            <div class="stack-media" aria-hidden="true">
                <div class="media-placeholder"></div>
            </div>
            <div class="stack-copy">
                <h2>Modern Technology Stack</h2>
                <p class="stack-intro">
                    We leverage the latest Laravel features and complementary technologies to build
                    high-performance, maintainable applications that scale with your business.
                </p>
                <div class="stack-chips">
                    <div class="chip-row">
                        <span class="chip">Laravel 11.x</span>
                        <span class="chip">PHP 8.3+</span>
                    </div>
                    <div class="chip-row">
                        <span class="chip">MySQL/PostgreSQL</span>
                        <span class="chip">Redis Caching</span>
                    </div>
                    <div class="chip-row">
                        <span class="chip">Queue Management</span>
                        <span class="chip">Livewire</span>
                    </div>
                    <div class="chip-row">
                        <span class="chip">Vue.js Integration</span>
                        <span class="chip">Docker Containers</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PERFECT FOR COMPLEX APPLICATIONS -->
    <section class="section section-use-cases" id="use-cases">
        <div class="container">
            <div class="section-header">
                <h2>Perfect For Complex Applications</h2>
                <p>
                    Laravel excels at building sophisticated web applications that require robust architecture
                    and advanced functionality.
                </p>
            </div>

            <div class="grid grid-2 use-cases-grid">
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Enterprise Portals</h3>
                    <p>
                        Complex business portals with role-based access, workflow automation and advanced reporting.
                    </p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>SaaS Applications</h3>
                    <p>
                        Multi-tenant SaaS platforms with subscription management and scalable infrastructure.
                    </p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>CRM Systems</h3>
                    <p>
                        Custom CRM solutions tailored to your sales processes and customer management needs.
                    </p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Booking Platforms</h3>
                    <p>
                        Reservation and booking systems with real-time availability and payment processing.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">100+</p>
                <p class="stat-label">Laravel Projects</p>
            </article>
            <article class="stat">
                <p class="stat-value">10+</p>
                <p class="stat-label">Years Experience</p>
            </article>
            <article class="stat">
                <p class="stat-value">50+</p>
                <p class="stat-label">Enterprise Clients</p>
            </article>
            <article class="stat">
                <p class="stat-value">99%</p>
                <p class="stat-label">Code Quality Score</p>
            </article>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Build Your Next Application with Laravel</h2>
                    <p>
                        Let&apos;s discuss your project requirements and create a powerful Laravel solution
                        that drives your business forward.
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