@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/woocommerce/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/woocommerce/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero woo-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">WooCommerce Development Services</p>
            <h1>Professional WooCommerce<br>Development Service</h1>
            <p class="hero-subtitle">
                We deliver scalable WooCommerce development solutions with secure architecture, custom features,
                 and conversion-focused design to help businesses sell online efficiently.
            </p>
            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary">Launch Your Store</a>
                <a href="#solutions" class="btn btn-ghost">Explore Features</a>
            </div>
        </div>
    </section>

    <!-- COMPLETE WOOCOMMERCE SOLUTIONS -->
    <section class="section section-solutions" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Complete WooCommerce Solutions</h2>
                <p>End-to-end WooCommerce website development services including store setup, design, integrations, optimization, 
                    and long-term support from a trusted WooCommerce development company.</p>
            </div>

            <div class="grid grid-3 solutions-grid">
                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Custom Store Setup</h3>
                    <p>
                        Professional WooCommerce website development agency services to create fully customized, brand-aligned online stores ready for growth.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Payment Gateway Integration</h3>
                    <p>
                        Secure payment gateway integration by an experienced WooCommerce web developer, supporting multiple payment methods and smooth checkout experiences.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Product Management</h3>
                    <p>
                        Efficient product setup and management through advanced WooCommerce web development services for inventory, variations, and pricing control.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Performance Optimisation</h3>
                    <p>
                        Speed and performance optimization handled by a WooCommerce development company to ensure fast loading and improved user experience.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Shipping Configuration</h3>
                    <p>
                        Flexible shipping rules and zone configuration implemented through expert WooCommerce website development services.
                    </p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Detailed analytics and reporting tools integrated by a WooCommerce website development agency to track sales, customers, and store performance.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- POWERFUL ECOMMERCE CAPABILITIES -->
    <section class="section section-capabilities" id="capabilities">
        <div class="container capabilities-layout">
            <div class="capabilities-media" aria-hidden="true">
                <div class="media-placeholder"></div>
            </div>
            <div class="capabilities-copy">
                <h2>Powerful eCommerce Capabilities</h2>
                <p class="capabilities-intro">
                   Robust WooCommerce web design and development features built to support scalability, security, and seamless online selling experiences.
                </p>
                <div class="capabilities-lists">
                    <ul>
                        <li>Scalable store architecture</li>
                        <li>Secure payment processing</li>
                        <li>Custom WooCommerce themes</li>
                        <li>Advanced product control</li>
                    </ul>
                    <ul>
                        <li>Multi-shipping options</li>
                        <li>Performance-focused design</li>
                        <li>SEO-ready structure</li>
                        <li>Analytics-driven insights</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">200+</p>
                <p class="stat-label">Stores Launched</p>
            </article>
            <article class="stat">
                <p class="stat-value">£50M+</p>
                <p class="stat-label">Revenue Generated</p>
            </article>
            <article class="stat">
                <p class="stat-value">99.9%</p>
                <p class="stat-label">Uptime Guarantee</p>
            </article>
            <article class="stat">
                <p class="stat-value">24/7</p>
                <p class="stat-label">Support Available</p>
            </article>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="contact">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Start Selling Online Today</h2>
                    <p>
                       Launch your online store with professional WooCommerce website development backed by expert WooCommerce web development services that drive sales and business growth.
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
            <h2>WooCommerce Development FAQ</h2>
            <p>
                Answers to common questions about WooCommerce development, features, timelines, and ongoing support.
            </p>
        </div>

        <div class="faq-wrap">
            <div class="faq-list">
                <details class="faq-item">
                    <summary>1. What is WooCommerce development?</summary>
                    <div class="faq-content">
                        <p>
                            WooCommerce development involves creating, customizing, and optimizing eCommerce stores using the WooCommerce platform. It includes store setup, theme customization, plugin development, payment gateway integration, and performance optimization.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>2. Why should I choose WooCommerce for my online store?</summary>
                    <div class="faq-content">
                        <p>
                            WooCommerce is flexible, scalable, and cost-effective. It offers full control over design and functionality, supports unlimited products, integrates with multiple payment gateways, and is highly SEO-friendly for online store growth.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>3. Do you provide custom WooCommerce development services?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, custom WooCommerce development allows businesses to build tailored online stores based on their specific requirements. This includes custom themes,
                             plugins, checkout optimization, and advanced store features.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>4. Is WooCommerce SEO-friendly?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, WooCommerce is SEO-friendly when developed correctly. With optimized product pages, clean URLs,
                             fast loading speed, mobile responsiveness, and proper SEO plugins, WooCommerce stores can rank well on search engines.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>5. How long does it take to develop a WooCommerce store?</summary>
                    <div class="faq-content">
                        <p>
                            A basic WooCommerce store can be developed in 2–4 weeks. More complex stores with custom features,
                             integrations, or large product catalogs may take 6–8 weeks or longer.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>6. Do you offer WooCommerce maintenance and support?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, WooCommerce maintenance services include regular updates, security monitoring, backups, performance optimization, 
                            bug fixes, and ongoing technical support to ensure smooth store operation.
                        </p>
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

@endsection