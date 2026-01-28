@extends('layouts.cloudtech')

@section('title', 'On-Page SEO Services in the UK | Cloud Technologies Ltd')
@section('meta_title', 'On-Page SEO Services in the UK | Cloud Technologies Ltd')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/on-page/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/on-page/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero onpage-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">On-Page SEO Services in UK</p>
                <h1>Expert On-Page SEO<br>&amp; Services in the UK</h1>
                <p class="hero-subtitle">
                    Transform your website into a search engine magnet with our comprehensive on-page SEO services. We optimize every element of your web pages—from meta tags and content to technical structure—ensuring maximum visibility and higher rankings in search results.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>
            </div>

            <div class="hero-panel">
                <div class="hero-panel-inner">
                    <p class="hero-panel-label">On-Page SEO Snapshot</p>
                    <p class="hero-panel-text">
                        We improve relevance and crawlability by optimizing content, meta tags, internal linking and structured data—so your pages rank higher and win more clicks.
                    </p>
                    <ul class="hero-panel-list">
                        <li>Title tags & meta descriptions</li><li>Headers & content mapping</li><li>Internal linking & structure</li><li>Schema + Core Web Vitals</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our On-Page SEO Services in UK?</h2>
                <p>
                    Drive organic traffic from across the UK with our comprehensive on-page SEO strategies.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-quality"></div>
                    <h3>Content Optimization</h3>
                    <p>
                        Strategic content enhancement with keyword integration and readability improvements.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-keyword"></div>
                    <h3>Technical SEO</h3>
                    <p>
                        HTML optimisation, schema markup, and technical infrastructure improvements.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-engagement"></div>
                    <h3>Site Structure</h3>
                    <p>
                        Improve site architecture, internal linking, and navigation for better crawlability.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-authority"></div>
                    <h3>Meta Optimization</h3>
                    <p>
                        Compelling title tags and meta descriptions that drive clicks and rankings.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our On-Page SEO Process</h2>
                <p>
                    A systematic 4-step approach to maximize your on-page optimization.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="process-card">
                    <h3>Comprehensive Audit</h3>
                    <p>Deep analysis of your website’s on-page elements, content quality, and technical structure.</p>
                </article>
                <article class="process-card">
                    <h3>Keyword Research</h3>
                    <p>Identify high-value keywords and create a content mapping strategy for each page.</p>
                </article>
                <article class="process-card">
                    <h3>On-Page Optimization</h3>
                    <p>Implement title tags, meta descriptions, headers, content, and schema markup optimisation.</p>
                </article>
                <article class="process-card">
                    <h3>Monitoring & Refinement</h3>
                    <p>Track rankings, traffic, and user engagement to continuously improve performance.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTENT TYPES -->
<section class="section content-types" id="content-types">
    <div class="container">
        <div class="section-header">
            <h2>Content Types We Optimize</h2>
            <p>Comprehensive content SEO services for all types of business content</p>
        </div>

        <div class="ct-grid">
            <!-- Card 1 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Blog Posts &amp; Articles</h3>
                        <p>In-depth, SEO-optimized blog content that drives organic traffic</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Keyword Research</li>
                    <li>Topic Clusters</li>
                    <li>Internal Linking</li>
                    <li>Meta Optimization</li>
                </ul>
            </article>

            <!-- Card 2 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Landing Pages</h3>
                        <p>Conversion-focused landing pages optimized for search and users</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Conversion Copy</li>
                    <li>SEO Headlines</li>
                    <li>Call-to-Actions</li>
                    <li>User Experience</li>
                </ul>
            </article>

            <!-- Card 3 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Product Descriptions</h3>
                        <p>Compelling product content that ranks and sells</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Product SEO</li>
                    <li>Feature Benefits</li>
                    <li>Schema Markup</li>
                    <li>User Reviews</li>
                </ul>
            </article>

            <!-- Card 4 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Technical Content</h3>
                        <p>Expert technical content that demonstrates industry knowledge</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>How-to Guides</li>
                    <li>Case Studies</li>
                    <li>White Papers</li>
                    <li>Technical SEO</li>
                </ul>
            </article>
        </div>
    </div>
</section>

    <!-- INCLUDED -->
    <section class="section" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What’s Included in Our On-Page SEO Service?</h2>
                <p>
                    Complete on-page optimization to boost your search engine visibility.
                </p>
            </div>

            <div class="services-layout">
                <div class="services-copy">
                    <h3>End-to-end on-page upgrades (content + technical)</h3>
                    <p class="services-intro">
                        We optimise the elements Google evaluates on-page: content intent, HTML structure, metadata, internal links, schema and performance—without breaking your site’s UX.
                    </p>
                </div>

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Included deliverables</h3>
                        <ul class="services-list">
                            <li>In-depth keyword research and competitor analysis</li>
                            <li>Title tag and meta description optimisation for all pages</li>
                            <li>Header tag (H1–H6) structure and optimisation</li>
                            <li>Content optimisation with strategic keyword placement</li>
                            <li>Internal linking strategy and implementation</li>
                            <li>Image alt text and optimisation</li>
                            <li>Schema markup and structured data implementation</li>
                            <li>URL structure optimisation and canonicalization</li>
                            <li>Mobile responsiveness and Core Web Vitals optimisation</li>
                            <li>Monthly performance reports with actionable insights</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section onpage-cta" id="cta">
        <div class="container">
            <div class="cta-inner onpage-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Transform Your On-Page SEO?</h2>
                    <p>
                        Get a free on-page SEO audit and discover optimisation opportunities.
                    </p>
                </div>
                <div class="cta-actions onpage-cta-actions">
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
                <h2>Talk to Our On-Page SEO Team</h2>
                <p>
                    Share your goals and we’ll recommend the highest-impact on-page improvements for your key pages.
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
                        <label for="focus">Primary Page Type</label>
                        <input type="text" id="focus" placeholder="Service pages, blogs, e-commerce, landing pages, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What should we optimise first?</label>
                        <textarea id="message" rows="4" placeholder="Rankings, clicks, content, site structure, schema, Core Web Vitals, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>


@endsection