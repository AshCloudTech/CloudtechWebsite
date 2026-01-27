@extends('layouts.cloudtech')

@section('title', 'CloudTech Image SEO Services')
@section('meta_title', 'Professional Image SEO Services in the UK | CloudTechnologies Ltd')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/image-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/image-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero image-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Image SEO Services</p>
                <h1>Professional Image<br>&amp; SEO Services in the UK</h1>
                <p class="hero-subtitle">
                    Optimize your images for search engines and improve your website's visibility. Our expert image SEO services help you rank higher in Google Images and boost overall site performance through proper image optimization, compression, and metadata enhancement.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>
            </div>

            <div class="hero-panel">
                <div class="hero-panel-inner">
                    <p class="hero-panel-label">Image SEO Snapshot</p>
                    <p class="hero-panel-text">
                        We audit your images end-to-end (format, compression, alt text, delivery and indexing) and deliver quick wins that improve visibility in Google Images and your Core Web Vitals.
                    </p>
                    <ul class="hero-panel-list">
                        <li>Alt text & accessibility</li><li>Compression & next-gen formats</li><li>Lazy loading & responsive images</li><li>Image sitemaps & structured data</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Image SEO Services?</h2>
                <p>
                    Drive organic traffic from across the UK with our comprehensive image SEO strategies.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-quality"></div>
                    <h3>Alt Text Optimization</h3>
                    <p>
                        Strategic alt text creation for better accessibility and search visibility.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-keyword"></div>
                    <h3>Image Compression</h3>
                    <p>
                        Reduce file sizes without losing quality for faster page loads.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-engagement"></div>
                    <h3>Performance Boost</h3>
                    <p>
                        Improve Core Web Vitals and overall site speed with optimized images.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-authority"></div>
                    <h3>Google Images Ranking</h3>
                    <p>
                        Rank higher in Google Images search results with proper optimization.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our Image SEO Process</h2>
                <p>
                    A comprehensive 4-step approach to optimize your visual content.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="process-card">
                    <h3>Image Audit</h3>
                    <p>We analyze all images on your website, identifying optimization opportunities and technical issues.</p>
                </article>
                <article class="process-card">
                    <h3>Optimization Strategy</h3>
                    <p>Create a customized plan including file naming, alt text, compression, and structured data.</p>
                </article>
                <article class="process-card">
                    <h3>Implementation</h3>
                    <p>Apply technical optimizations including format conversion, lazy loading, and responsive images.</p>
                </article>
                <article class="process-card">
                    <h3>Performance Tracking</h3>
                    <p>Monitor image performance metrics and search visibility with detailed analytics.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- INCLUDED -->
    <section class="section" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What’s Included in Our Image SEO Service?</h2>
                <p>
                    Comprehensive image optimization to boost your site’s performance and visibility.
                </p>
            </div>

            <div class="services-layout">
                <div class="services-copy">
                    <h3>Complete image optimisation that supports rankings + speed</h3>
                    <p class="services-intro">
                        From file formats to metadata and delivery, we optimise the full image pipeline so your pages load faster and your visuals can rank in Google Images.
                    </p>
                </div>

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Included deliverables</h3>
                        <ul class="services-list">
                            <li>Complete image audit and analysis of current performance</li>
                            <li>Image compression and format optimisation (WebP, AVIF)</li>
                            <li>Alt text and file name optimisation for all images</li>
                            <li>Image sitemap creation and submission</li>
                            <li>Structured data markup for images</li>
                            <li>Lazy loading implementation for improved page speed</li>
                            <li>Responsive image configuration for all devices</li>
                            <li>Monthly performance reports and recommendations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section image-cta" id="cta">
        <div class="container">
            <div class="cta-inner image-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Optimize Your Images for Search?</h2>
                    <p>
                        Get a free image SEO audit and see how we can improve your website’s performance.
                    </p>
                </div>
                <div class="cta-actions image-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get Free SEO Audit</a>
                    <a href="#process" class="btn btn-outline-light">View Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our Image SEO Team</h2>
                <p>
                    Share a few details and we’ll recommend the most impactful image SEO improvements for your website.
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
                        <label for="website">Website URL</label>
                        <input type="text" id="website" placeholder="https://">
                    </div>
                    <div class="form-field">
                        <label for="focus">Main Image Focus</label>
                        <input type="text" id="focus" placeholder="Product images, blog images, portfolio, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What do you want to improve?</label>
                        <textarea id="message" rows="4" placeholder="Google Images traffic, Core Web Vitals, page speed, accessibility, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>

@endsection