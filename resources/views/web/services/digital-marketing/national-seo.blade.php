@extends('layouts.cloudtech')

@section('title', 'National SEO Services UK | Nationwide SEO Agency')
@section('meta_title', 'National SEO Services UK | Nationwide SEO Agency.')
@section('meta_description', 'National SEO services UK offering nationwide SEO solutions to improve rankings, increase
    traffic and generate leads for your business across UK markets.')
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
                <h1>National SEO Services That Rank <br> Your Business Nationwide</h1>
                <p class="hero-subtitle">
                    Rank across the country with powerful, results-driven National SEO services that increase visibility,
                    attract high-quality traffic, and help your business grow nationwide.
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="national-seo-audit">Get
                        Free SEO Audit</a>
                    <a href="#why" class="btn btn-lg btn-ghost hero-ghost-light">Speak to an Expert</a>
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
                        <span class="hero-stat-label">Nationwide Targeting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY NATIONAL SEO WITH US -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our National SEO Services?</h2>
                <p>Nationwide SEO expertise that strengthens your brand and drives results.</p>
            </div>

            <div class="grid grid-4 why-grid why-grid-ui">
                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="globe"></i>
                    </div>
                    <h3>Worldwide Visibility</h3>
                    <p>Boost worldwide visibility with expert National SEO from a trusted National SEO company.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="bar-chart-3"></i>
                    </div>
                    <h3>Data-Driven Strategies</h3>
                    <p>We use analytics and proven SEO methodology to build campaigns around real performance data.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="crosshair"></i>
                    </div>
                    <h3>Nationwide Targeting</h3>
                    <p>A results-led approach to reach customers across the UK with targeted National SEO.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="badge-check"></i>
                    </div>
                    <h3>Proven Results</h3>
                    <p>A proven National SEO agency delivering strong rankings and reliable long-term growth.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our National SEO Process</h2>
                <p>
                    Our proven National SEO process delivers clear steps that drive visibility, traffic, and nationwide
                    success.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>SEO Audit &amp; Analysis</h3>
                    <p>
                        We perform a full National SEO audit to identify technical issues, keyword gaps, and growth
                        opportunities.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>
                        Our team builds a tailored National SEO strategy focused on high-value keywords and nationwide
                        visibility.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>
                        We execute optimized content, technical fixes, and authority-building tactics to power your National
                        SEO Services.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitoring &amp; Reporting</h3>
                    <p>
                        We track performance, refine strategies, and provide transparent reports to ensure ongoing
                        nationwide growth.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHAT'S INCLUDED -->
    <section class="section section-included" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What&apos;s Included in Our National SEO Service?</h2>
                <p>
                    Our National SEO Service delivers nationwide visibility with targeted keywords, optimized pages, and
                    ongoing performance improvements.
                </p>
            </div>

            <div class="included-layout">
                <div class="included-list">
                    <ul>
                        <li>Nationwide keyword targeting to reach customers across the UK.</li>
                        <li>Technical SEO fixes that improve speed, structure, and site performance.</li>
                        <li>On-page SEO optimization for stronger rankings and better relevance.</li>
                        <li>SEO-focused content created for national search intent.</li>
                        <li>Quality link building that boosts authority and credibility.</li>
                        <li>Monthly reports and tracking to monitor rankings and growth.</li>
                    </ul>
                </div>
                <div class="included-panel">
                    <img src="{{ asset('assets/images/seo/national/national_seo.webp') }}" alt="National SEO"
                        title="National SEO" aria-hidden="true" aria-label="National SEO" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related SEO Services</h2>
                <p>Strengthen your nationwide SEO growth with these connected specialist services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk/" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/international-seo-service-uk/"
                    aria-label="International SEO services UK">
                    <span>International SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/technical-seo-service-uk/"
                    aria-label="Technical SEO services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk/" aria-label="Content SEO services UK">
                    <span>Content SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk/"
                    aria-label="Digital marketing services UK">
                    <span>Digital Marketing Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- WHAT ARE NATIONAL SEO SERVICES -->
    <section class="section section-national-about" id="about-national-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are National SEO Services?</h2>

                    <p>
                        National SEO services help businesses rank across an entire country rather than in a single city or
                        local area. Unlike local SEO, which targets nearby searches, national SEO focuses on high-volume,
                        competitive keywords that attract customers from anywhere in the UK.
                    </p>

                    <p>
                        A professional national SEO strategy ensures your website appears for broad, high-intent search
                        terms your ideal customers are using every day. This includes advanced keyword targeting, technical
                        optimisation, content strategy, and authority building designed specifically for nationwide
                        visibility.
                    </p>

                    <p>
                        If you want your business to be found by customers across the UK, investing in expert national SEO
                        services is essential for long-term online growth.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>Who Needs National SEO?</h3>

                    <ul>
                        <li>eCommerce stores selling across the UK</li>
                        <li>Service businesses operating nationwide</li>
                        <li>SaaS and online platforms</li>
                        <li>B2B companies targeting national clients</li>
                        <li>Brands expanding beyond local markets</li>
                        <li>Companies competing for high-volume industry keywords</li>
                    </ul>

                    <p class="national-about-note">
                        If your customers can come from anywhere in the country, national SEO is the strategy that brings
                        them to you.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY NATIONAL SEO IS ESSENTIAL -->
    <section class="section section-national-growth" id="national-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why National SEO Is Essential for Long-Term Growth</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Ranking nationally in Google is one of the most powerful ways to generate consistent, high-quality
                    traffic. Unlike paid ads, national SEO creates long-term visibility that continues to bring customers to
                    your website without ongoing ad spend.
                </p>

                <p>
                    With the right national SEO campaign, your business can dominate search results for the keywords that
                    matter most, build trust with your audience, and outperform competitors across the UK.
                </p>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="section seo-cta" id="cta">
        <div class="container">
            <div class="cta-inner seo-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Boost Your Visibility Across the Globe?</h2>
                    <p>
                        Get the nationwide rankings you need with powerful National SEO strategies built to boost your
                        visibility across the globe.
                    </p>
                </div>
                <div class="cta-actions seo-cta-actions">
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="national-seo-audit">Request Free
                        SEO Audit</a>
                    <a href="#process" class="btn btn-outline-light">View Our Process</a>
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

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
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
                <h2>National SEO FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is National SEO?</summary>
                        <div class="faq-content">
                            <p>
                                National SEO helps your business rank across the entire country using broad, high-volume
                                keywords.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. How is it different from Local SEO?</summary>
                        <div class="faq-content">
                            <p>
                                Local SEO targets specific areas; National SEO targets customers nationwide.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Who needs National SEO?</summary>
                        <div class="faq-content">
                            <p>
                                Any business serving customers across the UK, including eCommerce, franchises, and
                                service-based brands.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. How long does National SEO take?</summary>
                        <div class="faq-content">
                            <p>
                                Most businesses see results within 3–6 months, depending on competition and website quality.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. What’s included in your National SEO service?</summary>
                        <div class="faq-content">
                            <p>
                                Keyword research, technical SEO, content optimization, link building, and monthly reporting.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Why choose your agency?</summary>
                        <div class="faq-content">
                            <p>
                                We provide data-driven strategies, clear reporting, and proven nationwide ranking results.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection
