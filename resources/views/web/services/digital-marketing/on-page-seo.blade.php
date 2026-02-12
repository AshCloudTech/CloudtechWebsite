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
                    Optimise your website pages for search engines and improve rankings with expert On-Page SEO services. We
                    enhance search visibility using keyword optimisation, meta tags, content optimisation, internal linking,
                    schema markup, URL structure, and technical on-page improvements for better indexing and higher organic
                    traffic.
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="on-page-seo">Get Free SEO Audit</a>
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
                        <li>Meta tags Optimisation</li>
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
    <!-- WHAT ARE ON-PAGE SEO SERVICES -->
<section class="section section-national-about" id="about-onpage-seo">
    <div class="container">
        <div class="national-about-wrapper">

            <div class="national-about-content">
                <h2>What Are On-Page SEO Services?</h2>

                <p>
                    On-page SEO services focus on optimising individual web pages so search engines can clearly understand their topic, relevance, and value to users. This includes improving content structure, keyword placement, meta tags, internal links, schema markup, URL structure, and user experience signals that directly influence rankings.
                </p>

                <p>
                    Unlike technical SEO, which improves the site foundation, on-page SEO ensures every page is properly optimised to rank for its target keywords and satisfy search intent.
                </p>
            </div>

            <div class="national-about-highlight">
                <h3>Search Intent & Content Alignment</h3>

                <p>
                    One of the most important parts of on-page SEO is matching content to what users are actually searching for.
                </p>

                <p>
                    We optimise pages based on:
                </p>

                <ul>
                    <li>Informational intent (blogs and guides)</li>
                    <li>Commercial intent (service and category pages)</li>
                    <li>Transactional intent (product and landing pages)</li>
                    <li>Navigational intent (homepage and brand pages)</li>
                </ul>

                <p class="national-about-note">
                    Aligning content with intent significantly improves rankings and engagement.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- WHY ON-PAGE SEO IS CRITICAL -->
<section class="section section-national-growth" id="onpage-growth">
    <div class="container">

        <div class="section-header">
            <h2>Why On-Page SEO Is Critical for Ranking Success</h2>
        </div>

        <div class="national-growth-card">
            <p>
                Even with strong backlinks and technical optimisation, pages will not rank if they are not properly optimised for relevance and search intent. On-page SEO ensures every element of your page works together to signal value to search engines and users.
            </p>

            <p>
                When done correctly, on-page SEO can significantly improve rankings without needing new content or links.
            </p>
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
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="on-page-seo">Get Free SEO Audit</a>
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

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_onpage_enquiry">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_onpage_name">Full Name</label>
                        <input type="text" id="seo_onpage_name" name="name" placeholder="Enter your name"
                            required>
                    </div>

                    <div class="form-field">
                        <label for="seo_onpage_email">Email Address</label>
                        <input type="email" id="seo_onpage_email" name="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_onpage_website">Website URL</label>
                        <input type="url" id="seo_onpage_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="seo_onpage_focus">Primary Page Type</label>
                        <input type="text" id="seo_onpage_focus" name="payload[page_type]"
                            placeholder="Service pages, blogs, e-commerce, landing pages, etc.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_onpage_message">What should we optimise first?</label>
                        <textarea id="seo_onpage_message" name="message" rows="4"
                            placeholder="Rankings, clicks, content, site structure, schema, Core Web Vitals, etc." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>



@endsection
