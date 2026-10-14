@extends('layouts.cloudtech')

@section('title', 'National SEO Services UK | Nationwide SEO Agency')
@section('meta_title', 'National SEO Services UK | Nationwide SEO Agency')
@section('meta_description', 'Reach customers across the UK with national SEO services focused on keyword strategy, content, technical optimisation, authority and organic visibility.')
@section('meta_keywords', 'national SEO services UK, nationwide SEO agency UK, national search engine optimization UK,
    SEO for national businesses UK, nationwide keyword targeting UK, national SEO strategy UK, improve national rankings UK,
    increase national traffic UK, generate national leads UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/national-seo/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
    <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script>
        <script src="{{ asset('assets/services/digitalMarketing/national-seo/js/script.js') }}" defer></script>
    @endpush
@section('content')


    <!-- HERO -->
    <section class="hero seo-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">National SEO Services</p>
                <h1>National SEO Services That Rank Higher <br> Google Rankings</h1>
                <p class="hero-subtitle">
                    Rank across the UK with powerful, results-driven National SEO services that improve Google
                    visibility, attract high-quality organic traffic, and help your business generate more enquiries and
                    grow nationwide.
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="national-seo-audit">Get
                        Free SEO Audit</a>
                    <a href="#why" class="btn btn-lg btn-ghost hero-ghost-light">Speak to an SEO Expert</a>

                    <a href="tel:07835761525" class="btn btn-primary btn-cta-added">Call Us</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">95%</span>
                        <span class="hero-stat-label">Clients on Page One</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">4x</span>
                        <span class="hero-stat-label">Average Traffic Growth</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">UK</span>
                        <span class="hero-stat-label">Nationwide SEO Targeting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY NATIONAL SEO WITH US -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our National SEO Company UK?</h2>
                <p>Nationwide SEO expertise that improves search visibility, website authority, organic traffic, and
                    business growth across the UK.</p>
            </div>

            <div class="grid grid-4 why-grid why-grid-ui">
                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="globe"></i>
                    </div>
                    <h3>Increase Your UK-Wide Google Visibility</h3>
                    <p>Improve your Google rankings across the UK with expert National SEO services from a trusted UK SEO
                        company.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="bar-chart-3"></i>
                    </div>
                    <h3>Build a Data-Driven National SEO Strategy</h3>
                    <p>We use keyword research, competitor analysis, search data, and proven SEO methods to build
                        strategies around real ranking opportunities.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="crosshair"></i>
                    </div>
                    <h3>Target High-Value National Search Terms</h3>
                    <p>Reach customers across the UK with commercial keywords, search-intent targeting, and National SEO
                        campaigns tailored to your business.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="badge-check"></i>
                    </div>
                    <h3>Grow Organic Traffic, Leads &amp; Enquiries</h3>
                    <p>Our National SEO agency focuses on stronger rankings, qualified organic traffic, enquiries, and
                        sustainable long-term business growth.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>How Our National SEO Services Work</h2>
                <p>
                    Our proven National SEO process combines technical optimisation, keyword research, content strategy,
                    and authority building to improve nationwide search performance.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>National SEO Audit &amp; Competitor Analysis</h3>
                    <p>
                        We perform a comprehensive National SEO audit to identify technical issues, keyword gaps, content
                        opportunities, backlink strengths, and competitor ranking strategies.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>National Keyword Research &amp; SEO Strategy</h3>
                    <p>
                        Our team builds a tailored National SEO strategy focused on valuable UK keywords, search intent,
                        content gaps, competitors, and nationwide organic visibility.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Technical, On-Page &amp; Content SEO</h3>
                    <p>
                        We implement technical SEO improvements, optimised content, on-page optimisation, internal
                        linking, and authority-building strategies to improve national search rankings.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>SEO Performance Tracking &amp; Reporting</h3>
                    <p>
                        We track Google rankings, organic traffic, visibility, and conversions, refine the campaign based
                        on performance, and provide transparent monthly SEO reports.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHAT'S INCLUDED -->
    <section class="section section-included" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What&apos;s Included in Our National SEO Services UK?</h2>
                <p>
                    Our National SEO services deliver UK-wide visibility through keyword research, technical SEO, content
                    optimisation, authority building, and ongoing performance improvements.
                </p>
            </div>

            <div class="included-layout">
                <div class="included-list">
                    <ul>
                        <li>National keyword research, mapping, and search-intent targeting across the UK.</li>
                        <li>Technical SEO improvements for site speed, crawlability, structure, and performance.</li>
                        <li>On-page SEO optimisation for titles, headings, content, URLs, and internal links.</li>
                        <li>SEO content created around UK search intent, content gaps, and topical relevance.</li>
                        <li>Quality link building and authority strategies to strengthen website credibility.</li>
                        <li>Monthly SEO reporting to monitor rankings, organic traffic, leads, and growth.</li>
                    </ul>
                </div>
                <div class="included-panel">
                    <img src="{{ asset('assets/images/seo/national/national_seo.webp') }}"
                        alt="National SEO Services – Cloud Technologies Ltd"
                        title="National SEO strategies to improve rankings across the UK" aria-hidden="true"
                        aria-label="National SEO" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Our UK SEO Services</h2>
                <p>Strengthen your nationwide search visibility with these connected specialist SEO services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/international-seo-service-uk"
                    aria-label="International SEO services UK">
                    <span>International SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/technical-seo-service-uk"
                    aria-label="Technical SEO services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk" aria-label="Content SEO services UK">
                    <span>Content SEO Services UK</span>
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

    <!-- WHAT IS NATIONAL SEO -->
    <section class="section section-national-about" id="about-national-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Is National SEO &amp; How Does It Work in the UK?</h2>

                    <p>
                        National SEO services help businesses rank across the UK rather than focusing on a single city,
                        town, or local area. Unlike Local SEO, which targets location-based searches and nearby customers,
                        National SEO focuses on competitive, high-volume keywords that attract customers from across the
                        country.
                    </p>

                    <p>
                        A professional National SEO strategy helps your website rank for broad, high-intent search terms
                        used by your ideal customers across the UK. This includes keyword research, competitor analysis,
                        technical SEO, content optimisation, on-page SEO, internal linking, and authority building designed
                        to increase nationwide search visibility.
                    </p>

                    <p>
                        If you want your business to be found by customers throughout the UK, investing in professional
                        National SEO services can help build stronger Google rankings, qualified organic traffic, leads,
                        and long-term online growth.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>Which Businesses Benefit From National SEO?</h3>

                    <ul>
                        <li>eCommerce stores selling products across the UK</li>
                        <li>Service businesses operating nationwide</li>
                        <li>SaaS companies and online platforms</li>
                        <li>B2B companies targeting clients across the UK</li>
                        <li>Brands expanding beyond local markets</li>
                        <li>Companies competing for high-volume industry keywords</li>
                    </ul>

                    <p class="national-about-note">
                        If your customers can come from anywhere in the UK, National SEO can help your business reach them
                        through high-intent organic search.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY NATIONAL SEO IS ESSENTIAL -->
    <section class="section section-national-growth" id="national-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why Invest in National SEO for Long-Term Business Growth?</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Ranking nationally on Google is one of the most effective ways to generate consistent, high-quality
                    organic traffic across the UK. Unlike paid advertising, National SEO can build long-term search
                    visibility that continues to attract potential customers without paying for every website visit.
                </p>

                <p>
                    With the right National SEO campaign, your business can compete for valuable UK search terms, build
                    topical authority, strengthen online credibility, increase qualified organic traffic, and outperform
                    competitors across the UK.
                </p>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="section seo-cta" id="cta">
        <div class="container">
            <div class="cta-inner seo-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow Your Google Rankings Across the UK?</h2>
                    <p>
                        Get the nationwide rankings you need with powerful National SEO strategies built to increase
                        Google visibility, attract qualified organic traffic, generate more enquiries, and grow your
                        business across the UK.
                    </p>
                </div>
                <div class="cta-actions seo-cta-actions">
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="national-seo-audit">Request Free
                        SEO Audit</a>
                    <a href="#process" class="btn btn-outline-light">View Our SEO Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Free National SEO Audit</h2>
                <p>
                    Share a few details and we&apos;ll send you a personalised audit with clear, actionable recommendations.
                </p>
            </div>

            <form class="contact-form js-validate-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_national_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_nat_name">Full Name</label>
                        <input type="text" id="seo_nat_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="seo_nat_email">Email Address</label>
                        <input type="email" id="seo_nat_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_nat_website">Website URL</label>
                        <input type="url" id="seo_nat_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="seo_nat_industry">Business Type / Industry</label>
                        <input type="text" id="seo_nat_industry" name="payload[industry]"
                            placeholder="e.g. eCommerce, SaaS, Healthcare">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_nat_message">What would you like to improve?</label>
                        <textarea id="seo_nat_message" name="message" rows="4"
                            placeholder="Rank nationwide, increase leads, improve visibility, etc." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>


    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions About National SEO Services UK</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>What Are National SEO Services in the UK?</summary>
                        <div class="faq-content">
                            <p>
                                National SEO services help businesses improve their Google rankings and organic visibility
                                across the UK. Unlike Local SEO, National SEO targets broader and more competitive keywords
                                to attract customers from multiple UK locations.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>How Can National SEO Services Help My UK Business?</summary>
                        <div class="faq-content">
                            <p>
                                National SEO can increase Google visibility, attract qualified organic traffic, generate
                                enquiries, and help your business reach customers across the UK. It combines keyword
                                research, technical SEO, content optimisation, and authority building.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>What Is the Difference Between National SEO and Local SEO?</summary>
                        <div class="faq-content">
                            <p>
                                National SEO focuses on ranking across the UK for broader search terms, while Local SEO
                                targets specific cities, towns, and nearby customers. National SEO is suitable for
                                businesses serving customers across multiple UK locations or nationwide.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>How Long Does National SEO Take to Show Results?</summary>
                        <div class="faq-content">
                            <p>
                                The time needed to see National SEO results depends on competition, website authority,
                                technical performance, content quality, and target keywords. Consistent optimisation and
                                monitoring can help improve rankings and organic visibility over time.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>What Is Included in a National SEO Campaign?</summary>
                        <div class="faq-content">
                            <p>
                                A National SEO campaign can include keyword research, competitor analysis, technical SEO,
                                on-page optimisation, content creation, internal linking, link building, performance
                                tracking, and monthly reporting. Strategies are tailored to your business and UK search
                                market.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Why Choose a National SEO Agency in the UK?</summary>
                        <div class="faq-content">
                            <p>
                                A UK National SEO agency understands the competitive UK search market and can create
                                strategies based on relevant keywords, competitors, search intent, content opportunities,
                                and nationwide visibility. Professional SEO support can help build sustainable rankings and
                                long-term organic growth.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection