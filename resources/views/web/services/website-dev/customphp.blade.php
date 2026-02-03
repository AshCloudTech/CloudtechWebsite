@extends('layouts.cloudtech')

@section('title', 'Custom PHP Development Services | Cloud Technologies Ltd')
@section('meta_title', 'Custom PHP Development Services | Cloud Technologies Ltd')
@section('meta_description', 'Expert custom PHP development services for bespoke web applications, API integrations, legacy modernisation, and performance optimisation.')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/customphp/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/customphp/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero php-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Custom PHP Development</p>
            <h1>Bespoke PHP Projects<br>Built for Your Business</h1>
            <p class="hero-subtitle">
                When you need full ownership, framework-agnostic flexibility and deep integrations, custom PHP
                delivers reliable, high-performance solutions aligned to your exact requirements.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Start Your Project</a>
                <a href="#services" class="btn btn-ghost">Explore Services</a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">120+</p>
                <p class="stat-label">PHP Projects Delivered</p>
            </article>
            <article class="stat">
                <p class="stat-value">96%</p>
                <p class="stat-label">Client Satisfaction</p>
            </article>
            <article class="stat">
                <p class="stat-value">35%</p>
                <p class="stat-label">Faster Time-to-Market</p>
            </article>
            <article class="stat">
                <p class="stat-value">24/7</p>
                <p class="stat-label">Support Options</p>
            </article>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section section-solutions" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Custom PHP Project Services</h2>
                <p>
                    End-to-end PHP engineering to design, build and operate bespoke systems&mdash;from MVPs to
                    enterprise-grade applications.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid">
                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Bespoke Web Applications</h3>
                    <p>Custom-built portals, dashboards and workflows designed around your business processes.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>API Development &amp; Integration</h3>
                    <p>Secure REST APIs and integrations with CRMs, ERPs, payment gateways, and third-party platforms.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Legacy Modernisation</h3>
                    <p>Refactors, rewrites and migrations to improve maintainability, security and performance.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Performance Optimisation</h3>
                    <p>Caching, query tuning and profiling to reduce load time and increase throughput.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Security Hardening</h3>
                    <p>Authentication, authorisation, secure coding, vulnerability remediation and audit readiness.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Maintenance &amp; Support</h3>
                    <p>Ongoing improvements, monitoring, upgrades and incident response with clear SLAs.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE -->
    <section class="section section-why" id="why">
        <div class="container">
            <div class="why-layout">
                <div class="why-copy">
                    <h2>Why Choose Custom PHP?</h2>
                    <p>
                        Custom PHP is a strong fit when you need fine-grained control over architecture and integrations,
                        without being constrained by a single platform or builder.
                    </p>
                    <ul class="why-list">
                        <li>Framework-agnostic solutions tailored to your requirements</li>
                        <li>Full source ownership, easy extensibility and no vendor lock-in</li>
                        <li>Optimised performance for bespoke workflows and high traffic</li>
                        <li>Flexible integration patterns for legacy and modern systems</li>
                        <li>Security-first engineering practices and reviewable codebases</li>
                        <li>Long-term maintainability with documentation and standards</li>
                    </ul>
                </div>
                <div class="why-panel" aria-hidden="true"></div>
            </div>
        </div>
    </section>

    <!-- IDEAL FOR -->
    <section class="section section-use-cases" id="ideal">
        <div class="container">
            <div class="section-header">
                <h2>Ideal For</h2>
                <p>Projects that need bespoke features, heavy integrations, and predictable performance at scale.</p>
            </div>

            <div class="grid grid-2 use-cases-grid">
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Internal Business Systems</h3>
                    <p>Operational dashboards, HR tools, workflow automation and reporting.</p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Integration-Heavy Platforms</h3>
                    <p>Systems that connect with third-party APIs, CRMs, payment gateways and data sources.</p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>High-Performance Websites</h3>
                    <p>Content sites and portals that demand fast rendering and strong SEO foundations.</p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>MVPs and Product Builds</h3>
                    <p>Rapid iterations with clean architecture that can evolve into a long-term product.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- DELIVERABLES -->
    <section class="section section-solutions" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>What You Get</h2>
                <p>Clear deliverables that make your system maintainable, secure, and ready to scale.</p>
            </div>

            <div class="benefits-grid">
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Clean Codebase</h3>
                    <p>Consistent standards, modular structure and reviewable commits.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Documentation</h3>
                    <p>Functional specs, setup guides and API documentation.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Testing</h3>
                    <p>Unit/integration tests for critical flows and regressions.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Secure Deployment</h3>
                    <p>Environment configuration, CI/CD options and rollback strategy.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Security Baseline</h3>
                    <p>Input validation, access control and security hardening.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Monitoring &amp; Support</h3>
                    <p>Error tracking, logging and ongoing improvements.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Build a Custom PHP Solution?</h2>
                    <p>Share your requirements and we will propose the right architecture, timeline and delivery plan.</p>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn btn-light">Call</a>
                    <a href="#" class="btn btn-outline">Email Us</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection