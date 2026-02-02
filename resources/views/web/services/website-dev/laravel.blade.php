@extends('layouts.cloudtech')

@section('title', 'Laravel Development Services | Cloud Technologies Ltd')
@section('meta_title', 'Laravel Development Services | Cloud Technologies Ltd')
@section('meta_description', 'Professional Laravel development services for scalable, secure, and high-performance web applications tailored to complex business needs.')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/laravel/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/laravel/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero laravel-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Laravel Development Services</p>
            <h1>Scalable Laravel Web Development<br>Services</h1>
            <p class="hero-subtitle">
                We provide professional Laravel development services, delivering secure, scalable, 
                and high-performance web applications through expert Laravel web development tailored to complex business needs.
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
                   Our Laravel development agency offers end-to-end solutions including custom applications, 
                   APIs, database design, security, and cloud deployment for modern businesses.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid">
                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Custom Web Applications</h3>
                    <p>
                       Custom Laravel website development services to build scalable, feature-rich web applications aligned with your business logic.
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>RESTful API Development</h3>
                    <p>
                       Robust RESTful API development using Laravel to enable seamless third-party integrations and system communication.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Database Architecture</h3>
                    <p>
                       Efficient database architecture designed by a Laravel development company to ensure performance, scalability, and data integrity.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Security Implementation</h3>
                    <p>
                        Advanced security implementation following Laravel best practices to protect applications from vulnerabilities and threats.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Cloud Deployment</h3>
                    <p>
                       Cloud-ready Laravel web development optimized for performance, scalability, and high availability across modern hosting platforms.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Legacy System Migration</h3>
                    <p>
                      Secure migration from legacy systems to Laravel website development frameworks with minimal downtime and preserved data integrity
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
                    Our Laravel web development agency leverages a modern technology stack to deliver reliable, scalable, and future-ready applications.
                </p>
                <div class="stack-chips">
                    <div class="chip-row">
                        <span class="chip">Laravel framework</span>
                        <span class="chip">RESTful APIs</span>
                    </div>
                    <div class="chip-row">
                        <span class="chip">MySQL & PostgreSQL</span>
                        <span class="chip">Redis Caching</span>
                    </div>
                    <div class="chip-row">
                        <span class="chip">Cloud infrastructure</span>
                        <span class="chip">Secure authentication</span>
                    </div>
                    <div class="chip-row">
                        <span class="chip">Modular architecture</span>
                        <span class="chip">Scalable deployments</span>
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
                   Laravel development is ideal for complex, data-driven applications requiring performance, security, and scalability.
                </p>
            </div>

            <div class="grid grid-2 use-cases-grid">
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Enterprise Portals</h3>
                    <p>
                       Secure and scalable enterprise portals built by a Laravel web development company.
                    </p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>SaaS Applications</h3>
                    <p>
                       Multi-tenant SaaS platforms developed through advanced Laravel development expertise.
                    </p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>CRM Systems</h3>
                    <p>
                       Custom CRM systems designed using Laravel package development and scalable architecture.
                    </p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Booking Platforms</h3>
                    <p>
                        High-performance booking platforms with real-time data handling and secure workflows.
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
                       Partner with a trusted Laravel development agency to build powerful, secure, and scalable applications using industry-leading Laravel website development services.
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
            <h2>Laravel Development Services FAQs</h2>
            <p>
                Answers to common questions about Laravel development, scalability, security, and enterprise solutions.
            </p>
        </div>

        <div class="faq-wrap">
            <div class="faq-list">
                <details class="faq-item">
                    <summary>1. What are Laravel development services?</summary>
                    <div class="faq-content">
                        <p>
                            Laravel development services include custom web application development, APIs, security implementation, database design, and cloud deployment using the Laravel framework.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>2. Why choose Laravel for web development?</summary>
                    <div class="faq-content">
                        <p>
                            Laravel offers scalability, security, clean architecture, and rapid development, making it ideal for complex and enterprise-level applications.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>3. Do you offer custom Laravel package development?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, we provide Laravel package development to extend functionality and create reusable, modular components.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>4. Can you migrate existing applications to Laravel?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, our Laravel development company handles secure legacy system migration while maintaining performance and data integrity.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>5. Do you provide enterprise Laravel solutions?</summary>
                    <div class="faq-content">
                        <p>
                            Absolutely. Our Laravel web development agency specializes in enterprise portals, SaaS platforms, and CRM systems.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>6. Is Laravel suitable for scalable applications?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, Laravel website development supports scalable architecture, cloud deployment, and high-traffic applications efficiently.
                        </p>
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

    
@endsection