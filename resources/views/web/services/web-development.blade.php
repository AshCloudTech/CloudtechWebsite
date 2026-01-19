@extends('layouts.cloudtech')

@section('title', 'Web Development Services in the UK | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – Web Development Services in the UK')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero webdev-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">Website Development Services</p>
                <h1>High-Performing Websites<br>Built for Growth</h1>
                <p class="hero-subtitle">
                    Cloud Technologies Ltd designs and develops secure, fast and conversion-focused websites
                    for businesses across the UK and worldwide. From brochure sites to full-scale web platforms,
                    we deliver pixel-perfect experiences on every device.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Talk to Our Team</a>
                    <a href="#services" class="btn btn-lg btn-ghost hero-ghost-light">View Development Services</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">50+</span>
                        <span class="hero-stat-label">Websites Delivered</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">15+</span>
                        <span class="hero-stat-label">Industries Served</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">100%</span>
                        <span class="hero-stat-label">Responsive by Design</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Website Development Services</h2>
                <p>
                    We work with the world’s leading website platforms to deliver the right solution for your
                    business — from quick launches to fully custom builds.
                </p>
            </div>

            <div class="grid grid-4 services-grid">
                <article class="card service-card">
                    <div class="service-icon icon-wp"></div>
                    <h3>WordPress Development</h3>
                    <p>
                        Custom WordPress websites, landing pages and blogs with SEO-friendly structure, clean code
                        and easy content management.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-woo"></div>
                    <h3>WooCommerce Stores</h3>
                    <p>
                        Scalable WooCommerce shops with secure payments, product filters and conversion-focused layouts.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-shopify"></div>
                    <h3>Shopify Development</h3>
                    <p>
                        High-converting Shopify storefronts, theme customisation and app integrations for growing brands.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-sq"></div>
                    <h3>Squarespace Websites</h3>
                    <p>
                        Elegant brochure and portfolio sites built on Squarespace with mobile-first responsive design.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-wix"></div>
                    <h3>Wix Websites</h3>
                    <p>
                        Modern Wix sites with structured layouts, clear messaging and integrated booking/contact flows.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-gd"></div>
                    <h3>GoDaddy Builder</h3>
                    <p>
                        Fast turnaround business websites set up and configured using GoDaddy’s website builder.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-laravel"></div>
                    <h3>Laravel Development</h3>
                    <p>
                        Fully custom web applications and platforms built with Laravel, tailored to complex business logic.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-custom"></div>
                    <h3>Custom PHP Projects</h3>
                    <p>
                        Bespoke PHP solutions, integrations and rebuilds for legacy systems and industry-specific workflows.
                    </p>
                    <a href="#" class="service-link">Read More</a>
                </article>
            </div>
        </div>
    </section>

    <!-- TECH STACK -->
    <section class="section section-alt" id="stack">
        <div class="container">
            <div class="section-header">
                <h2>Technologies We Master</h2>
                <p>
                    A modern, battle-tested technology stack to ensure speed, security and long-term scalability.
                </p>
            </div>

            <div class="stack-layout">
                <div class="stack-columns">
                    <div class="stack-column">
                        <h3>Frontend</h3>
                        <ul>
                            <li>React.js</li>
                            <li>Next.js</li>
                            <li>Vue.js</li>
                            <li>Tailwind CSS</li>
                            <li>Bootstrap</li>
                        </ul>
                    </div>
                    <div class="stack-column">
                        <h3>Backend &amp; Databases</h3>
                        <ul>
                            <li>PHP &amp; Laravel</li>
                            <li>Node.js</li>
                            <li>MySQL / MariaDB</li>
                            <li>PostgreSQL</li>
                            <li>MongoDB</li>
                        </ul>
                    </div>
                    <div class="stack-column">
                        <h3>Infrastructure &amp; Tools</h3>
                        <ul>
                            <li>AWS &amp; DigitalOcean</li>
                            <li>cPanel / Plesk</li>
                            <li>Git / GitHub</li>
                            <li>Docker</li>
                            <li>CI/CD Pipelines</li>
                        </ul>
                    </div>
                </div>

                <div class="stack-stats">
                    <div class="stack-stat">
                        <span class="stack-stat-value">50+</span>
                        <span class="stack-stat-label">Technologies Used</span>
                    </div>
                    <div class="stack-stat">
                        <span class="stack-stat-value">1000+</span>
                        <span class="stack-stat-label">Deployments</span>
                    </div>
                    <div class="stack-stat">
                        <span class="stack-stat-value">99.9%</span>
                        <span class="stack-stat-label">Uptime Targets</span>
                    </div>
                    <div class="stack-stat">
                        <span class="stack-stat-value">24/7</span>
                        <span class="stack-stat-label">Monitoring &amp; Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RECENT PROJECTS -->
    <section class="section" id="projects">
        <div class="container">
            <div class="section-header">
                <h2>Recent Website Projects</h2>
                <p>
                    A snapshot of the websites we’ve delivered for clients across different sectors.
                </p>
            </div>

            <div class="grid grid-3 projects-grid">
                <article class="card project-card">
                    <div class="project-thumb thumb-1"></div>
                    <span class="project-tag project-tag-blue">E‑commerce</span>
                    <h3>Online Retail Store</h3>
                    <p>
                        A conversion-optimised WooCommerce store with advanced filters and custom checkout.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-2"></div>
                    <span class="project-tag project-tag-purple">Corporate</span>
                    <h3>Professional Services Firm</h3>
                    <p>
                        Corporate WordPress site with service pages, resources, and lead capture forms.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-3"></div>
                    <span class="project-tag project-tag-emerald">SaaS</span>
                    <h3>SaaS Marketing Website</h3>
                    <p>
                        Marketing site for a SaaS platform built with Next.js for speed and SEO.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-4"></div>
                    <span class="project-tag project-tag-sky">Booking</span>
                    <h3>Booking &amp; Scheduling</h3>
                    <p>
                        Appointment booking website with integrations and automated email flows.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-5"></div>
                    <span class="project-tag project-tag-amber">Real Estate</span>
                    <h3>Property Listings</h3>
                    <p>
                        Real estate platform with advanced search, filters, and agent profiles.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-6"></div>
                    <span class="project-tag project-tag-rose">Education</span>
                    <h3>Online Learning Portal</h3>
                    <p>
                        Content-rich website for an education provider with course listings and enquiry forms.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Website Development Process</h2>
                <p>
                    A clear, collaborative process from first call to launch and beyond.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Discovery &amp; Planning</h3>
                    <p>
                        Understand your business, goals, content and competitors to define scope and structure.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>UX &amp; UI Design</h3>
                    <p>
                        Wireframes and visual designs aligned to your brand, content and user journeys.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Development &amp; Testing</h3>
                    <p>
                        Frontend &amp; backend build with responsive layouts, integrations and QA on all devices.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Launch &amp; Support</h3>
                    <p>
                        Smooth deployment, performance tuning, training and ongoing support plans.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section webdev-cta" id="cta">
        <div class="container">
            <div class="cta-inner webdev-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Build Your Next Website?</h2>
                    <p>
                        Whether you’re refreshing an existing site or launching something completely new,
                        our team can help you plan, design and develop a website that supports your business goals.
                    </p>
                </div>
                <div class="cta-actions webdev-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Request a Call Back</a>
                    <a href="#projects" class="btn btn-outline-light">View More Projects</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Tell Us About Your Website Project</h2>
                <p>
                    Share a few details and we’ll respond with timelines, options and next steps.
                </p>
            </div>

            <form class="contact-form">
                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="name@company.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" placeholder="Organisation name">
                    </div>
                    <div class="form-field">
                        <label for="budget">Estimated Budget</label>
                        <input type="text" id="budget" placeholder="e.g. £2,000 – £10,000">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">Project Details</label>
                        <textarea id="message" rows="4" placeholder="New website, redesign, platform preference, deadlines, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Project</button>
            </form>
        </div>
    </section>

@endsection