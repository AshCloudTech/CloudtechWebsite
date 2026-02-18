@extends('layouts.cloudtech')

@section('title', 'Custom PHP Development Services | Cloud Technologies Ltd')
@section('meta_title', 'Custom PHP Development Services | Cloud Technologies Ltd')
@section('meta_description', 'Expert custom PHP development services for bespoke web applications, API integrations,
    legacy modernisation, and performance optimisation.')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/customphp/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
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
                    End-to-end PHP engineering to design, build and operate bespoke systems—from MVPs to
                    enterprise-grade applications.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid solutions-grid-ui">
                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="layers"></i>
                    </div>
                    <h3>Bespoke Web Applications</h3>
                    <p>Custom-built portals, dashboards and workflows designed around your business processes.</p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="plug-zap"></i>
                    </div>
                    <h3>API Development &amp; Integration</h3>
                    <p>Secure REST APIs and integrations with CRMs, ERPs, payment gateways, and third-party platforms.</p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="refresh-ccw"></i>
                    </div>
                    <h3>Legacy Modernisation</h3>
                    <p>Refactors, rewrites and migrations to improve maintainability, security and performance.</p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3>Performance Optimisation</h3>
                    <p>Caching, query tuning and profiling to reduce load time and increase throughput.</p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <h3>Security Hardening</h3>
                    <p>Authentication, authorisation, secure coding, vulnerability remediation and audit readiness.</p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="life-buoy"></i>
                    </div>
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
                <img src="{{ asset('assets/images/web/customphp.webp') }}" alt="Custom PHP Capabilities"
                    title="Custom PHP Capabilities" aria-label="Custom PHP Capabilities" aria-hidden="true" loading="lazy"
                    decoding="async" class="why-panel">
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

            <div class="grid grid-2 use-cases-grid use-cases-grid-ui">
                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="briefcase"></i></div>
                    <h3>Internal Business Systems</h3>
                    <p>Operational dashboards, HR tools, workflow automation and reporting.</p>
                </article>

                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="plug-zap"></i></div>
                    <h3>Integration-Heavy Platforms</h3>
                    <p>Systems that connect with third-party APIs, CRMs, payment gateways and data sources.</p>
                </article>

                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="zap"></i></div>
                    <h3>High-Performance Websites</h3>
                    <p>Content sites and portals that demand fast rendering and strong SEO foundations.</p>
                </article>

                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="rocket"></i></div>
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

            <div class="benefits-grid benefits-grid-ui">
                <article class="card benefit benefit-ui">
                    <div class="svcIcon" aria-hidden="true"><i data-lucide="code-2"></i></div>
                    <h3>Clean Codebase</h3>
                    <p>Consistent standards, modular structure and reviewable commits.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon" aria-hidden="true"><i data-lucide="file-text"></i></div>
                    <h3>Documentation</h3>
                    <p>Functional specs, setup guides and API documentation.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon" aria-hidden="true"><i data-lucide="flask-conical"></i></div>
                    <h3>Testing</h3>
                    <p>Unit/integration tests for critical flows and regressions.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon" aria-hidden="true"><i data-lucide="cloud-upload"></i></div>
                    <h3>Secure Deployment</h3>
                    <p>Environment configuration, CI/CD options and rollback strategy.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon" aria-hidden="true"><i data-lucide="shield-check"></i></div>
                    <h3>Security Baseline</h3>
                    <p>Input validation, access control and security hardening.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon" aria-hidden="true"><i data-lucide="activity"></i></div>
                    <h3>Monitoring &amp; Support</h3>
                    <p>Error tracking, logging and ongoing improvements.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHAT ARE CUSTOM PHP DEVELOPMENT SERVICES -->
    <section class="section section-services" id="about-custom-php-development">
        <div class="container">
            <div class="section-header">
                <h2>What Are Custom PHP Development Services?</h2>
            </div>

            <div class="wix-about-wrapper">

                <div class="wix-about-content">
                    <p>
                        <b>Custom PHP development</b> services focus on building bespoke, high-performance web applications
                        and systems using core PHP without platform limitations. These services include custom web
                        applications, API development, legacy modernisation, performance optimisation, security hardening,
                        and long-term support.
                    </p>

                    <p>
                        A professional custom PHP approach ensures full ownership of your codebase, framework-agnostic
                        flexibility, and deep integrations aligned exactly to your business requirements.
                    </p>

                    <p>
                        If you need complete architectural control, seamless integrations, and reliable performance, custom
                        PHP development is the ideal solution.
                    </p>
                </div>

                <div class="wix-about-highlight" style="background-color: #ffffff">
                    <h3>Who Needs Custom PHP Development?</h3>

                    <p>Custom PHP development is ideal for:</p>

                    <ul>
                        <li>Businesses needing bespoke web applications and portals</li>
                        <li>Organisations with complex workflows and integrations</li>
                        <li>Companies modernising legacy systems</li>
                        <li>Platforms requiring high performance and scalability</li>
                        <li>Startups building MVPs that can evolve into products</li>
                        <li>Enterprises needing secure internal tools and dashboards</li>
                    </ul>

                    <p class="wix-about-note">
                        If your project goes beyond the limits of website builders or standard frameworks, custom PHP
                        provides the flexibility you need.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY CUSTOM PHP IS IDEAL -->
    <section class="section section-business" id="why-custom-php-modern" style="background-color: #ffffff">
        <div class="container">

            <div class="section-header">
                <h2>Why Custom PHP Is Ideal for Bespoke Systems</h2>
            </div>

            <div class="wix-growth-card">
                <p>
                    Custom PHP offers fine-grained control over architecture, integrations, and performance without vendor
                    lock-in. With a clean, modular codebase and security-first practices, PHP applications can be optimised
                    precisely for your workflows and traffic demands.
                </p>

                <p>
                    With the right custom PHP development strategy, your system benefits from optimised performance,
                    flexible integrations, strong security, and long-term maintainability supported by clear documentation
                    and standards.
                </p>
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

    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>PHP Development Services – FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What are PHP development services used for?</summary>
                        <div class="faq-content">
                            <p>
                                PHP development services are used to build dynamic websites, custom web applications,
                                portals, dashboards, and APIs that are fast, secure, and tailored to specific business
                                requirements.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. When should I choose custom PHP instead of a CMS platform?</summary>
                        <div class="faq-content">
                            <p>
                                Custom PHP is ideal when you need bespoke features, complex integrations, or full control
                                over your system architecture beyond the limits of standard CMS solutions.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Is PHP suitable for scalable, high-traffic websites?</summary>
                        <div class="faq-content">
                            <p>
                                Yes. With proper architecture, caching, and database optimisation, PHP can power large,
                                high-performance websites and applications efficiently.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Can PHP applications integrate with third-party systems?</summary>
                        <div class="faq-content">
                            <p>
                                Absolutely. PHP is well-suited for REST API development and seamless integrations with CRMs,
                                ERPs, payment gateways, and other external platforms.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. Is PHP development SEO-friendly?</summary>
                        <div class="faq-content">
                            <p>
                                Yes. PHP allows clean URL structures, fast loading speeds, and full technical SEO control to
                                help websites rank well in Google Search.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Do you provide ongoing support after PHP development?</summary>
                        <div class="faq-content">
                            <p>
                                Yes. Ongoing maintenance, updates, monitoring, and performance improvements are provided to
                                keep your PHP application secure and reliable.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>


@endsection
