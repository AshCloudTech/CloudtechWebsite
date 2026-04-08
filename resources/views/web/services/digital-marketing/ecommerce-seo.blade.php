@extends('layouts.cloudtech')

@section('title', 'Ecommerce SEO Agency UK | Online Store SEO Services')
@section('meta_title', 'Ecommerce SEO Agency UK | Online Store SEO Services.')
@section('meta_description', 'Ecommerce SEO agency UK offering Shopify, WooCommerce and Magento SEO services to improve
    rankings, traffic, product visibility and online sales UK.')
@section('meta_keywords', 'ecommerce SEO agency UK, online store SEO services UK, Shopify SEO UK, WooCommerce SEO UK,
    Magento SEO UK, product page optimization UK, category page SEO UK, technical ecommerce SEO UK, ecommerce content
    strategy UK, link building for ecommerce UK, local SEO for stores UK, mobile optimization for ecommerce UK')
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
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="hero-overlay" aria-hidden="true"></div>

        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">eCommerce SEO Services</p>
                <h1>Grow Your Online Store with eCommerce SEO</h1>
                <p class="hero-subtitle">
                    Improve product visibility, attract high-intent shoppers, and increase revenue with a practical,
                    conversion-focused eCommerce SEO strategy.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Grow My Online Store</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Talk to an Expert</a>
                </div>
            </div>

            <div class="hero-panel" aria-hidden="true">
                <div class="hero-panel-inner">
                    <p class="hero-panel-label">What we optimise</p>
                    <p class="hero-panel-text">
                        Your categories, product pages, technical foundations, and content—so search engines can crawl,
                        understand, and rank your store faster.
                    </p>
                    <ul class="hero-panel-list">
                        <li>Category &amp; collection SEO</li>
                        <li>Product page optimisation</li>
                        <li>Schema &amp; rich results</li>
                        <li>Speed &amp; Core Web Vitals</li>
                    </ul>
                </div>
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
                <p>A proven SEO process that audits your store, improves rankings, drives traffic, and scales long-term
                    growth.</p>
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
    <!-- WHAT IS ECOMMERCE SEO -->
    <section class="section section-national-about" id="about-ecommerce-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Is eCommerce SEO?</h2>

                    <p>
                        eCommerce SEO is the process of optimising an online store so product pages, category pages, and
                        collections rank in search engines for high-intent buying keywords. Unlike standard SEO, eCommerce
                        SEO must handle large numbers of pages, product variations, filters, and technical challenges that
                        affect how search engines crawl and index your store.
                    </p>

                    <p>
                        A successful eCommerce SEO strategy ensures your products are easy to find, fast to load, properly
                        structured, and optimised for shoppers ready to purchase.
                    </p>
                    <div class="national-about-highlight" aria-hidden="true">
                        <img src="{{ asset('assets/images/seo/ecommerce/ecommerce_seo.webp') }}"
                            alt="eCommerce SEO Services – Cloud Technologies Ltd"
                            title="eCommerce SEO services to increase online store visibility and sales" aria-hidden="true"
                            aria-label="Ecommerce SEO Services Image" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="national-about-highlight">
                    <h3>Product & Category Page SEO Strategy</h3>

                    <p>
                        We treat category pages as high-value landing pages and product pages as conversion assets.
                    </p>

                    <h4>Category Pages</h4>

                    <ul>
                        <li>Optimised for broader buying keywords</li>
                        <li>SEO content above and below product grids</li>
                        <li>Internal links to key products</li>
                        <li>Clean filter handling and canonical setup</li>
                    </ul>

                    <h4>Product Pages</h4>

                    <ul>
                        <li>Unique descriptions (not manufacturer copy)</li>
                        <li>Schema markup for price, stock, and reviews</li>
                        <li>Optimised images and alt text</li>
                        <li>Cross-links to related products and categories</li>
                    </ul>

                    <p class="national-about-note">
                        This structure improves both rankings and conversions.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- TECHNICAL ECOMMERCE SEO -->
    <section class="section section-national-growth technical" id="ecommerce-technical">
        <div class="container">

            <div class="section-header">
                <h2>Technical eCommerce SEO That Improves Crawl & Indexing</h2>
            </div>

            <div class="national-growth-card">

                <p>
                    We optimise the technical foundation of your store:
                </p>

                <ul>
                    <li>Canonical tags for variants and filters</li>
                    <li>Noindex rules for low-value pages</li>
                    <li>XML sitemaps for products and categories</li>
                    <li>Internal linking structure for authority flow</li>
                    <li>Core Web Vitals optimisation for large image libraries</li>
                    <li>Structured data for products, reviews, price, availability</li>
                    <li>Crawl budget optimisation for large inventories</li>
                </ul>

                <p>
                    This ensures Google focuses on the pages that generate revenue.
                </p>
            </div>

        </div>
    </section>


    <!-- WHY ECOMMERCE SEO GROWTH -->
    <section class="section section-national-growth" id="ecommerce-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why eCommerce SEO Delivers Long-Term Sales Growth</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Paid ads stop when the budget stops. eCommerce SEO builds organic visibility that continues to bring
                    high-intent shoppers to your store every day.
                </p>

                <p>
                    By ranking your categories and products for buyer keywords, your store attracts customers who are
                    actively searching to purchase, leading to consistent traffic, higher conversions, and scalable revenue
                    growth.
                </p>
            </div>

        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Support your eCommerce growth with connected SEO, development, and digital marketing services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/shopify-website-development-service-uk"
                    aria-label="Shopify development services UK">
                    <span>Shopify Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/wordpress-website-development-service-uk"
                    aria-label="WooCommerce development services UK">
                    <span>WooCommerce Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/technical-seo-service-uk" aria-label="Technical SEO services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk"
                    aria-label="Digital marketing services UK">
                    <span>Digital Marketing Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
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
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="ecommerce-seo">Get eCommerce
                        SEO Audit</a>
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

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_ecommerce_enquiry">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_ecom_name">Full Name</label>
                        <input type="text" id="seo_ecom_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="seo_ecom_email">Email Address</label>
                        <input type="email" id="seo_ecom_email" name="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_ecom_store">Store Name / Platform</label>
                        <input type="text" id="seo_ecom_store" name="payload[store_platform]"
                            placeholder="Shopify, WooCommerce, Magento, etc.">
                    </div>

                    <div class="form-field">
                        <label for="seo_ecom_revenue">Monthly Online Revenue (approx.)</label>
                        <input type="text" id="seo_ecom_revenue" name="payload[monthly_revenue]"
                            placeholder="e.g. £10k–£50k">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_ecom_message">What are your growth goals?</label>
                        <textarea id="seo_ecom_message" name="message" rows="4"
                            placeholder="More traffic, better conversion rate, new markets, etc." required></textarea>
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
                                eCommerce SEO is the process of optimizing online stores to improve product visibility,
                                increase organic traffic, and boost sales by ranking higher in search engine results.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2.Why do online stores need eCommerce SEO?</summary>
                        <div class="faq-content">
                            <p>
                                Without SEO, your products remain buried in search results. eCommerce SEO helps drive
                                high-intent shoppers, improves visibility, enhances user experience, and increases
                                conversions.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. How is eCommerce SEO different from regular SEO?</summary>
                        <div class="faq-content">
                            <p>
                                Regular SEO focuses on informational websites, while eCommerce SEO targets product pages,
                                category pages, structured data, conversion optimization, and large inventories.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. What does an eCommerce SEO agency do?</summary>
                        <div class="faq-content">
                            <p>
                                An eCommerce SEO agency optimizes your product pages, improves site speed, enhances category
                                structure, builds backlinks, implements schema, and boosts your store’s search rankings.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. How long does eCommerce SEO take to show results?</summary>
                        <div class="faq-content">
                            <p>Most stores begin seeing improvements within 2–3 months, with significant growth typically
                                within 4–6 months, depending on competition, platform, and website health.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Do you offer SEO services for Shopify stores? </summary>
                        <div class="faq-content">
                            <p>
                                Yes. Our Shopify SEO Services include product optimization, speed improvements, app cleanup,
                                keyword targeting, and fixing Shopify-specific SEO issues.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>


@endsection
