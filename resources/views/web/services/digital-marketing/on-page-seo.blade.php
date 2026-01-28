@extends('layouts.cloudtech')

@section('title', 'On-Page SEO Services in the UK | Cloud Technologies Ltd')
@section('meta_title', 'On-Page SEO Services in the UK | Cloud Technologies Ltd')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/on-page/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
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
                <h1>Professional On-Page SEO Services in the UK</h1>
                <p class="hero-subtitle">
                    Optimise your website pages for search engines and improve rankings with expert On-Page SEO services. We enhance search visibility using keyword optimisation, meta tags, content optimisation, internal linking, schema markup, URL structure, and technical on-page improvements for better indexing and higher organic traffic.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>
            </div>

            <!-- <div class="hero-panel">
                <div class="hero-panel-inner">
                    <p class="hero-panel-label">On-Page SEO Snapshot</p>
                    <p class="hero-panel-text">
                        We improve relevance and crawlability by optimizing content, meta tags, internal linking and structured data—so your pages rank higher and win more clicks.
                    </p>
                    <ul class="hero-panel-list">
                        <li>Title tags & meta descriptions</li><li>Headers & content mapping</li><li>Internal linking & structure</li><li>Schema + Core Web Vitals</li>
                    </ul>
                </div>
            </div> -->
        </div>
    </section>

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our On-Page SEO Services?</h2>
                <p>
                   Drive organic traffic across the UK with advanced on-page optimisation strategies.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-quality"></div>
                    <h3>Content Optimization</h3>
                    <p>
                        SEO-friendly content structure for readability and search engine understanding.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-keyword"></div>
                    <h3>Keyword Optimisation</h3>
                    <p>
                       Strategic keyword placement in titles, headings, and content for higher rankings.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-engagement"></div>
                    <h3>Meta Tags Optimisation </h3>
                    <p>
                       Optimised title tags and meta descriptions to improve CTR and relevance.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-authority"></div>
                    <h3>Higher Search Rankings</h3>
                    <p>
                        Improve page relevance to rank better in Google search results.
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
                    A strategic approach to optimize website pages for search engines.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="process-card">
                    <h3>Website Audit</h3>
                    <p>Analyse pages for keyword gaps, meta issues, and content structure problems.</p>
                </article>
                <article class="process-card">
                    <h3>Optimisation Strategy</h3>
                    <p>Plan keyword mapping, meta tags, headings, internal links, and schema markup.</p>
                </article>
                <article class="process-card">
                    <h3>Implementation </h3>
                    <p>Apply on-page fixes including content updates, URL optimisation, and technical tags.</p>
                </article>
                <article class="process-card">
                    <h3>Performance Tracking </h3>
                    <p>Monitor keyword rankings, page indexing, and organic traffic growth.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTENT TYPES -->
<section class="section content-types" id="content-types">
    <div class="container">
        <div class="section-header">
            <h2>Page Types We Optimise</h2>
            <p>Comprehensive on-page SEO services for all types of website pages.</p>
        </div>

        <div class="ct-grid">
            <!-- Card 1 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Homepage Optimisation </h3>
                        <p>Optimise homepage content, headings, and keywords for brand visibility.</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Primary keyword targeting</li>
                    <li>Internal linking</li>
                    <li>Content structure</li>
                    <li>Meta  tags Optimisation</li>
                </ul>
            </article>

            <!-- Card 2 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Service & Landing Pages</h3>
                        <p>Conversion-focused pages optimised for search engines and users.</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Keyword mapping</li>
                    <li>SEO headings structure</li>
                    <li>URL optimisation</li>
                    <li>Schema markup</li>
                </ul>
            </article>

            <!-- Card 3 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Product & E-commerce Pages </h3>
                        <p>Product pages optimized to rank and improve conversions.</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Product keyword optimisation</li>
                    <li>Meta data setup</li>
                    <li>Internal links</li>
                    <li>Content enhancement</li>
                </ul>
            </article>

            <!-- Card 4 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Blog & Content Pages </h3>
                        <p>SEO-optimised blogs that drive organic traffic.</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Topic clusters</li>
                    <li>Keyword placement</li>
                    <li>Content readability</li>
                    <li>Internal linking strategy</li>
                </ul>
            </article>
        </div>
    </div>
</section>

    <!-- INCLUDED -->
    <section class="section" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What’s Included in Our On-Page SEO Service? </h2>
                <p>
                   Comprehensive on-page optimisation for SEO performance.
                </p>
            </div>

            <div class="services-layout">
                <!-- <div class="services-copy">
                    <h3>End-to-end on-page upgrades (content + technical)</h3>
                    <p class="services-intro">
                        We optimise the elements Google evaluates on-page: content intent, HTML structure, metadata, internal links, schema and performance—without breaking your site’s UX.
                    </p>
                </div> -->

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Included deliverables</h3>
                        <ul class="services-list">
                            <li>Complete on-page SEO audit</li>
                            <li>Keyword research and keyword mapping</li>
                            <li>Title tag and meta description optimisation</li>
                            <li> Header tags (H1-H6) optimisation</li>
                            <li> Content optimisation with SEO keywords</li>
                            <li>Internal linking structure improvement</li>
                            <li>Schema markup implementation</li>
                            <li>URL structure optimisation</li>
                            <li> Image alt tags optimisation</li>
                            <li>Monthly performance reports and recommendations</li>
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
                    <h2>Ready to Optimise Your Website Pages for Search?</h2>
                    <p>
                       Get a free On-Page SEO audit and improve your Google rankings and organic traffic.
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