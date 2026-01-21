@extends('layouts.cloudtech')

@section('title', 'Content SEO Services | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – Content SEO Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/content-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/content-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero content-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Content SEO Services</p>
                <h1>Content That Ranks<br>&amp; Converts</h1>
                <p class="hero-subtitle">
                    Create compelling, SEO-optimised content that not only ranks high in search results
                    but also engages your audience and drives conversions. Our content SEO services combine
                    strategic optimisation with quality writing.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Content Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Discuss Strategy</a>
                </div>
            </div>

            <div class="hero-panel">
                <div class="hero-panel-inner">
                    <p class="hero-panel-label">Content Performance Snapshot</p>
                    <p class="hero-panel-text">
                        We review your existing content, identify high-potential pages and reveal
                        the gaps where strategic content can drive more organic traffic and conversions.
                    </p>
                    <ul class="hero-panel-list">
                        <li>Top-performing content</li>
                        <li>Missed keyword opportunities</li>
                        <li>Engagement and dwell time</li>
                        <li>Conversion-focused content</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CONTENT SEO MATTERS -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Content SEO Matters</h2>
                <p>
                    Quality content is the foundation of successful SEO and digital marketing.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-quality"></div>
                    <h3>Quality Content</h3>
                    <p>
                        Create high-quality, engaging content that ranks and converts.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-keyword"></div>
                    <h3>Keyword Optimisation</h3>
                    <p>
                        Strategic keyword placement for maximum search visibility.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-engagement"></div>
                    <h3>User Engagement</h3>
                    <p>
                        Content that keeps users engaged and encourages longer visits.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-authority"></div>
                    <h3>Authority Building</h3>
                    <p>
                        Establish your brand as an industry authority through expert content.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTENT TYPES WE OPTIMISE -->
    <section class="section" id="types">
        <div class="container">
            <div class="section-header">
                <h2>Content Types We Optimise</h2>
                <p>
                    Comprehensive content SEO services for all types of business content.
                </p>
            </div>

            <div class="grid grid-4 types-grid">
                <article class="card type-card">
                    <h3>Blog Posts &amp; Articles</h3>
                    <p class="type-subtitle">
                        In-depth, SEO-optimised blog content that drives organic traffic.
                    </p>
                    <ul>
                        <li>Keyword research</li>
                        <li>Topic clusters</li>
                        <li>Internal linking</li>
                        <li>Meta optimisation</li>
                    </ul>
                </article>

                <article class="card type-card">
                    <h3>Landing Pages</h3>
                    <p class="type-subtitle">
                        Conversion-focused landing pages optimised for search and users.
                    </p>
                    <ul>
                        <li>Conversion copy</li>
                        <li>SEO headlines</li>
                        <li>Call-to-actions</li>
                        <li>User experience</li>
                    </ul>
                </article>

                <article class="card type-card">
                    <h3>Product Descriptions</h3>
                    <p class="type-subtitle">
                        Compelling product content that ranks and sells.
                    </p>
                    <ul>
                        <li>Product SEO</li>
                        <li>Feature benefits</li>
                        <li>Schema markup</li>
                        <li>User reviews</li>
                    </ul>
                </article>

                <article class="card type-card">
                    <h3>Technical Content</h3>
                    <p class="type-subtitle">
                        Expert technical content that demonstrates industry knowledge.
                    </p>
                    <ul>
                        <li>How-to guides</li>
                        <li>Case studies</li>
                        <li>White papers</li>
                        <li>Technical SEO</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLETE CONTENT SEO SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="services-layout">
                <div class="services-copy">
                    <h2>Complete Content SEO Services</h2>
                    <p class="services-intro">
                        Our comprehensive content SEO services cover every aspect of content creation and optimisation
                        to help your website rank higher and attract more qualified traffic.
                    </p>
                    <ul class="services-list">
                        <li>Keyword research and content strategy development</li>
                        <li>SEO-optimised blog posts and articles</li>
                        <li>Website content optimisation and rewriting</li>
                        <li>Meta titles and descriptions optimisation</li>
                        <li>Header tags (H1, H2, H3) optimisation</li>
                        <li>Content gap analysis and competitor research</li>
                        <li>Long-form content creation for authority building</li>
                        <li>Product and service page optimisation</li>
                        <li>Content calendar planning and management</li>
                        <li>Internal linking strategy implementation</li>
                        <li>Content performance tracking and optimisation</li>
                        <li>E-A-T (Expertise, Authority, Trust) optimisation</li>
                    </ul>
                </div>
                <div class="services-panel">
                    <div class="services-panel-inner">
                        <p class="services-label">Editorial Overview Panel</p>
                        <p class="services-text">
                            A clear view of your current content inventory, performance and opportunities.
                        </p>
                        <p class="services-meta">
                            Ideal for marketing teams that need a structured editorial roadmap aligned with SEO goals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our Content SEO Process</h2>
                <p>
                    A proven methodology for content optimisation success.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-icon"></div>
                    <h3>Research &amp; Analysis</h3>
                    <p>
                        Deep dive into your industry, competitors and target audience.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-icon"></div>
                    <h3>Content Creation</h3>
                    <p>
                        Develop high-quality, SEO-optimised content that resonates.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-icon"></div>
                    <h3>Optimisation</h3>
                    <p>
                        Fine-tune content for maximum search engine visibility.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-icon"></div>
                    <h3>Performance Tracking</h3>
                    <p>
                        Monitor content performance and make data-driven improvements.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section content-cta" id="cta">
        <div class="container">
            <div class="cta-inner content-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow with Content?</h2>
                    <p>
                        Let our content SEO specialists create and optimise content that ranks, engages and converts.
                    </p>
                </div>
                <div class="cta-actions content-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Request Content Audit</a>
                    <a href="#types" class="btn btn-outline-light">Explore Content Types</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our Content SEO Team</h2>
                <p>
                    Share a few details and we&apos;ll propose a tailored content SEO strategy for your business.
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
                        <label for="content-focus">Main Content Focus</label>
                        <input type="text" id="content-focus" placeholder="Blogs, product pages, landing pages, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What are your content goals?</label>
                        <textarea id="message" rows="4" placeholder="More traffic, better rankings, higher conversions, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>

@endsection