@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/godaddy/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/godaddy/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero godaddy-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">GoDaddy Website Builder Services</p>
            <h1>Build Your Business with<br>GoDaddy Website Builder</h1>
            <p class="hero-subtitle">
                Create professional websites quickly and easily with GoDaddy&apos;s powerful website builder.
                Perfect for small businesses and entrepreneurs.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Start Building</a>
                <a href="#services" class="btn btn-ghost">Learn More</a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">160+</p>
                <p class="stat-label">GoDaddy Sites Built</p>
            </article>
            <article class="stat">
                <p class="stat-value">94%</p>
                <p class="stat-label">Client Satisfaction</p>
            </article>
            <article class="stat">
                <p class="stat-value">2.5x</p>
                <p class="stat-label">Average Lead Growth</p>
            </article>
            <article class="stat">
                <p class="stat-value">72hrs</p>
                <p class="stat-label">Quick Deployment</p>
            </article>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section section-solutions" id="services">
        <div class="container">
            <div class="section-header">
                <h2>GoDaddy Website Builder Services</h2>
                <p>
                    Comprehensive website building services to help you establish a strong online presence quickly and affordably.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid">
                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Quick Site Setup</h3>
                    <p>Launch your website in minutes with GoDaddy&apos;s intuitive website builder and ready-to-use templates.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Template Customisation</h3>
                    <p>Personalise professional templates to match your brand with easy-to-use design tools.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>E-commerce Solutions</h3>
                    <p>Set up online stores with product catalogues, payment processing, and order management.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Domain Integration</h3>
                    <p>Seamlessly connect your GoDaddy domain with professional email and hosting services.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>SEO Optimisation</h3>
                    <p>Built-in SEO tools to help your website rank higher in search engine results.</p>
                </article>

                <article class="card solution-card">
                    <div class="card-icon"></div>
                    <h3>Marketing Tools</h3>
                    <p>Integrated email marketing, social media, and analytics to help you grow your business.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE -->
    <section class="section section-why" id="why">
        <div class="container why-layout">
            <div>
                <h2>Why Choose<br>GoDaddy?</h2>
                <p>
                    GoDaddy is the world&apos;s largest domain registrar and a trusted name in web hosting.
                    Their website builder makes it easy for anyone to create a professional online presence.
                </p>
                <ul class="why-list">
                    <li>All-in-one platform with domain and hosting</li>
                    <li>Fast loading speeds and reliable uptime</li>
                    <li>Mobile-responsive designs</li>
                    <li>24/7 customer support</li>
                    <li>Affordable pricing plans</li>
                    <li>Easy content management</li>
                </ul>
            </div>
            <div class="why-panel" aria-hidden="true"></div>
        </div>
    </section>

    <!-- IDEAL FOR -->
    <section class="section section-use-cases" id="ideal">
        <div class="container">
            <div class="section-header">
                <h2>Ideal For Small Businesses</h2>
                <p>GoDaddy Website Builder is perfect for entrepreneurs and small businesses who need a professional website fast.</p>
            </div>

            <div class="grid grid-2 use-cases-grid">
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Local Businesses</h3>
                    <p>Restaurants, salons, retail stores, and service providers looking to establish an online presence.</p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Freelancers</h3>
                    <p>Consultants, designers, photographers, and professionals showcasing their services and portfolio.</p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Startups</h3>
                    <p>New businesses needing a quick, affordable website to launch their brand and attract customers.</p>
                </article>
                <article class="use-case">
                    <div class="card-icon small"></div>
                    <h3>Online Sellers</h3>
                    <p>Small e-commerce businesses selling products online with integrated payment and shipping.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section section-stack" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>What You Get with GoDaddy</h2>
                <p>Everything you need to get online quickly, securely, and with confidence.</p>
            </div>

            <div class="benefits-grid">
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Quick Setup</h3>
                    <p>Get online in under an hour.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Affordable</h3>
                    <p>Budget-friendly pricing plans.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Mobile Ready</h3>
                    <p>Automatic mobile optimisation.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Secure</h3>
                    <p>SSL certificate included.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Email Included</h3>
                    <p>Professional email addresses.</p>
                </article>
                <article class="card benefit">
                    <div class="card-icon"></div>
                    <h3>Analytics</h3>
                    <p>Track your website performance.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Build Your Website?</h2>
                    <p>Let&apos;s create a professional website that helps your business grow. Get started with GoDaddy today.</p>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn btn-light">Call</a>
                    <a href="#" class="btn btn-outline">Email Us</a>
                </div>
            </div>
        </div>
    </section>

@endsection