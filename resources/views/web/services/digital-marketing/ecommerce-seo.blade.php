@extends('layouts.cloudtech')

@section('title', 'Ecommerce SEO Services')
@section('meta_title', 'Cloud Technologies Ltd – Ecommerce SEO Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/ecommerce-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/ecommerce-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero ecommerce-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">eCommerce SEO</p>
            <h1>eCommerce SEO Services</h1>
            <p class="hero-subtitle">
               Boost visibility, drive targeted traffic, and increase sales with expert eCommerce SEO services tailored to your store.
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-lg btn-primary">Grow My Online Store</a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats" id="stats">
        <div class="container stats-grid">
            <article class="stat-card">
                <p class="stat-value">285%</p>
                <p class="stat-label">Increase in Organic Traffic</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">340%</p>
                <p class="stat-label">Growth in Online Sales</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">450+</p>
                <p class="stat-label">Keywords Ranking Top 10</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">6.2x</p>
                <p class="stat-label">Return on Investment</p>
            </article>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section section-alt" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Why eCommerce SEO Matters</h2>
                <p>eCommerce SEO helps your store rank higher, attract buyers, and grow revenue organically.</p>
            </div>

            <div class="grid grid-3 benefits-grid">
                <article class="card benefit-card">
                    <h3>Increased Sales</h3>
                    <p>
                        SEO brings high-intent shoppers to your store, boosting conversions and long-term sales growth.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Product Visibility</h3>
                    <p>
                       Improve how your products appear in search results, helping customers find you faster.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Better ROI</h3>
                    <p>
                       Organic traffic cuts ad costs and delivers higher long-term returns on your marketing investment.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Brand Authority</h3>
                    <p>
                       Rankings build trust, positioning your eCommerce brand as a reliable market leader.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Market Expansion</h3>
                    <p>
                       Reach wider audiences and new markets through strategic, scalable search optimization.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Competitive Edge</h3>
                    <p>
                       Outrank competitors and capture more customers with powerful SEO strategies.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Complete eCommerce SEO Services</h2>
                <p>Full-service eCommerce SEO to boost rankings, traffic, conversions, and store growth.</p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <h3>Product Page Optimisation</h3>
                    <p>Optimize product titles, descriptions, images, and keywords for maximum conversions.</p>
                </article>

                <article class="card service-card">
                    <h3>Category Page SEO</h3>
                    <p>Improve category structure, filters, and metadata to enhance search visibility.</p>
                </article>

                <article class="card service-card">
                    <h3>Technical SEO</h3>
                    <p>Fix speed, indexing, site architecture, and crawl issues for stronger performance.</p>
                </article>

                <article class="card service-card">
                    <h3>Keyword Research</h3>
                    <p>Identify buyer-intent keywords that drive relevant traffic and high conversions.</p>
                </article>

                <article class="card service-card">
                    <h3>Content Strategy</h3>
                    <p>Create valuable content that boosts rankings, trust, and product discovery.</p>
                </article>

                <article class="card service-card">
                    <h3>Link Building</h3>
                    <p>Earn high-quality backlinks to strengthen domain authority and search rankings.</p>
                </article>

                <article class="card service-card">
                    <h3>Local SEO for Stores</h3>
                    <p>Boost visibility for local shoppers with optimized maps, listings, and citations.</p>
                </article>

                <article class="card service-card">
                    <h3>Mobile Optimisation</h3>
                    <p>Enhance mobile performance to improve user experience and boost mobile sales.</p>
                </article>

                <article class="card service-card">
                    <h3>Schema Markup</h3>
                    <p>Add rich snippets to improve click-through rates and product visibility in search.</p>
                </article>

                <article class="card service-card">
                    <h3>Review Optimisation</h3>
                    <p>Leverage product reviews to build trust, increase CTR, and boost conversions.</p>
                </article>

                <article class="card service-card">
                    <h3>International SEO</h3>
                    <p>Optimize your store for global audiences with multilingual and geo-targeted SEO.</p>
                </article>

                <article class="card service-card">
                    <h3>Analytics &amp; Reporting</h3>
                    <p>Track rankings, traffic, and sales metrics with transparent performance reporting.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our eCommerce SEO Process</h2>
                <p>A proven SEO process that audits your store, improves rankings, drives traffic, and scales long-term growth.</p>
            </div>

            <div class="grid grid-3 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Store Audit</h3>
                    <p>
                        Comprehensive review of technical, on-page, and UX factors affecting rankings.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Competitor Research</h3>
                    <p>
                        Analyze competitors’ strengths to uncover ranking opportunities and gaps.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Keyword Strategy</h3>
                    <p>
                        Build a keyword plan focused on high-intent, high-value eCommerce searches.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>On-Page Optimisation</h3>
                    <p>
                        Optimize pages with targeted keywords, clean structure, and strong metadata.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">5</div>
                    <h3>Content Creation</h3>
                    <p>
                        Develop SEO-focused content that drives visibility, trust, and conversions.
                </article>

                <article class="card process-card">
                    <div class="process-step">6</div>
                    <h3>Growth &amp; Scaling</h3>
                    <p>
                       Scale traffic and sales through advanced SEO strategies and continuous optimization.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section ecommerce-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner ecommerce-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow Your Online Store?</h2>
                    <p>
                        Let us help you increase visibility, drive more traffic and boost your eCommerce sales.
                    </p>
                </div>
                <div class="cta-actions ecommerce-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get eCommerce SEO Audit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our eCommerce SEO Team</h2>
                <p>
                    Share a few details and we&apos;ll outline an SEO strategy tailored to your online store.
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
                        <label for="store">Store Name / Platform</label>
                        <input type="text" id="store" placeholder="Shopify, WooCommerce, Magento, etc.">
                    </div>
                    <div class="form-field">
                        <label for="revenue">Monthly Online Revenue (approx.)</label>
                        <input type="text" id="revenue" placeholder="e.g. £10k–£50k">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What are your growth goals?</label>
                        <textarea id="message" rows="4" placeholder="More traffic, better conversion rate, new markets, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>eCommerce SEO Service FAQs</h2>
            </div>
 
            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is eCommerce SEO?</summary>
                        <div class="faq-content">
                            <p>
                              eCommerce SEO is the process of optimizing online stores to improve product visibility, increase organic traffic, and boost sales by ranking higher in search engine results.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>2.Why do online stores need eCommerce SEO?</summary>
                        <div class="faq-content">
                            <p>
                            Without SEO, your products remain buried in search results. eCommerce SEO helps drive high-intent shoppers, improves visibility, enhances user experience, and increases conversions.</p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>3.  How is eCommerce SEO different from regular SEO?</summary>
                        <div class="faq-content">
                            <p>
                              Regular SEO focuses on informational websites, while eCommerce SEO targets product pages, category pages, structured data, conversion optimization, and large inventories.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>4. What does an eCommerce SEO agency do?</summary>
                        <div class="faq-content">
                            <p>
                              An eCommerce SEO agency optimizes your product pages, improves site speed, enhances category structure, builds backlinks, implements schema, and boosts your store’s search rankings.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>5. How long does eCommerce SEO take to show results?</summary>
                        <div class="faq-content">
                            <p>Most stores begin seeing improvements within 2–3 months, with significant growth typically within 4–6 months, depending on competition, platform, and website health.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>6. Do you offer SEO services for Shopify stores? </summary>
                        <div class="faq-content">
                            <p>
                                Yes. Our Shopify SEO Services include product optimization, speed improvements, app cleanup, keyword targeting, and fixing Shopify-specific SEO issues.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>


@endsection