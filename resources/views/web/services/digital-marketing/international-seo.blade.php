@extends('layouts.cloudtech')

@section('title', 'International SEO Services UK | Global SEO Agency')
@section('meta_title', 'International SEO Services UK | Global SEO Agency.')
@section('meta_description', 'International SEO services UK offering multilingual and global SEO solutions to improve
    rankings, traffic and generate leads across international markets UK.')
@section('meta_keywords', 'international SEO services UK, global SEO agency UK, multilingual SEO UK, geo-targeted SEO
    UK, international keyword research UK, hreflang implementation UK, global link building UK, international SEO audit UK,
    worldwide SEO strategy UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/international-seo/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/digitalMarketing/international-seo/js/script.js') }}" defer></script>
    @endpush
@section('content')


    <!-- HERO -->
    <section class="hero intl-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">International SEO Services</p>
                <h1>International SEO Services That <br>Grow Your Business Globally</h1>
                <p class="hero-subtitle">
                    Expand your reach across international markets with powerful, results-driven International SEO Services
                    that increase global visibility, attract international traffic, and help your business grow worldwide.
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit"
                        data-audit-type="international-seo-audit">Get Global Strategy</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Consultation</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">25+</span>
                        <span class="hero-stat-label">Countries Targeted</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">40%</span>
                        <span class="hero-stat-label">Avg Organic Growth</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">Multi‑Lang</span>
                        <span class="hero-stat-label">SEO &amp; Localisation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TARGET INTERNATIONAL MARKETS -->
    <section class="section" id="markets">
        <div class="container">
            <div class="section-header">
                <h2>Target International Markets</h2>
                <p>Expand your reach and grow globally with targeted International SEO across key international markets.</p>
            </div>

            <div class="markets-grid markets-grid-ui">
                <article class="market-card market-card-ui">
                    <img src="{{ asset('assets/images/seo/international/international_seo_services_1.webp') }}"
                        alt="International SEO Services – Cloud Technologies Ltd"
                        title="International SEO services to improve global search rankings" aria-hidden="true"
                        aria-label="International SEO Services in United States" loading="lazy" decoding="async">
                    <h3>United States</h3>
                    <p>Reach U.S. customers with targeted international SEO.</p>
                </article>

                <article class="market-card market-card-ui">

                    <img src="{{ asset('assets/images/seo/international/international_seo_services_2.webp') }}"
                        alt="Global SEO Strategy – Cloud Technologies Ltd"
                        title="Global SEO strategy for expanding business across multiple countries"
                        aria-hidden="true" aria-label="International SEO Services in Germany" loading="lazy"
                        decoding="async">
                    <h3>Germany</h3>
                    <p>Boost visibility in Germany with localized optimization.</p>
                </article>

                <article class="market-card market-card-ui">
                    <img src="{{ asset('assets/images/seo/international/international_seo_services_3.webp') }}"
                        alt="International Search Engine Optimisation – Cloud Technologies Ltd"
                        title="Search engine optimisation for international markets and audiences"
                        aria-hidden="true" aria-label="International SEO Services in France" loading="lazy"
                        decoding="async">
                    <h3>France</h3>
                    <p>Connect with French audiences through tailored SEO.</p>
                </article>

                <article class="market-card market-card-ui">
                    <img src="{{ asset('assets/images/seo/international/international_seo_services_4.webp') }}"
                        alt="Worldwide SEO Services – Cloud Technologies Ltd"
                        title="Worldwide SEO services for global visibility and traffic growth"
                        aria-hidden="true" aria-label="International SEO Services in Spain" loading="lazy" decoding="async">
                    <h3>Spain</h3>
                    <p>Increase Spanish market reach with effective international SEO.</p>
                </article>

                <article class="market-card market-card-ui">
                    <img src="{{ asset('assets/images/seo/international/international_seo_services_5.webp') }}"
                        alt="Global Digital Marketing SEO – Cloud Technologies Ltd"
                        title="Global digital marketing SEO solutions for international reach"
                        aria-hidden="true" aria-label="International SEO Services in Italy" loading="lazy" decoding="async">
                    <h3>Italy</h3>
                    <p>Target Italian customers with localized search strategies.</p>
                </article>

                <article class="market-card market-card-ui">
                    <img src="{{ asset('assets/images/seo/international/international_seo_services_6.webp') }}"
                        alt="International SEO Solutions – Cloud Technologies Ltd"
                        title="International SEO solutions for multi-country website optimisation"
                        aria-hidden="true" aria-label="International SEO Services in Netherlands" loading="lazy"
                        decoding="async">
                    <h3>Netherlands</h3>
                    <p>Improve visibility in the Netherlands with region-focused SEO.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- WHY CHOOSE OUR INTERNATIONAL SEO -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our International SEO?</h2>
                <p>Expert global strategies that help your business rank, compete, and convert worldwide.</p>
            </div>

            <div class="grid grid-4 why-grid why-grid-ui">
                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true"><i data-lucide="globe"></i></div>
                    <h3>Global Reach</h3>
                    <p>Expand your visibility and connect with customers worldwide.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true"><i data-lucide="languages"></i></div>
                    <h3>Multi-Language SEO</h3>
                    <p>Optimise content in multiple languages for better global engagement.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true"><i data-lucide="map-pin"></i></div>
                    <h3>Geo Targeting</h3>
                    <p>Target specific countries and regions with precise SEO strategies.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true"><i data-lucide="trending-up"></i></div>
                    <h3>International Growth</h3>
                    <p>Drive consistent traffic, leads, and revenue across global markets.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- INTERNATIONAL SEO PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our International SEO Process</h2>
                <p>A results-driven International SEO process built to optimise your site for multiple countries and
                    languages.</p>
            </div>

            <div class="grid grid-4 process-grid process-grid-ui">
                <article class="card process-card process-card-ui">
                    <div class="process-step">1</div>
                    <h3>Market Research</h3>
                    <p>Identify top global opportunities with in-depth international market analysis.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>Create a tailored International SEO strategy for each target region.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>Execute multilingual content, technical SEO, and geo-targeted optimization.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-step">4</div>
                    <h3>Global Monitoring</h3>
                    <p>Track performance across all countries to ensure ongoing international growth.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- COMPLETE INTERNATIONAL SEO SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Complete International SEO Services</h2>
                <p>
                    End-to-end International SEO services that help you rank, expand, and compete globally.
                </p>
            </div>

            <div class="services-layout">
                <div class="services-list">
                    <ul>
                        <li>International keyword research for global search visibility.</li>
                        <li>Multilingual content creation and optimization.</li>
                        <li>Technical SEO enhancements, including hreflang setup.</li>
                        <li>Geo-targeted strategies for specific countries and regions.</li>
                        <li>High-quality global link-building to boost authority.</li>
                        <li>Ongoing performance tracking across all international markets.</li>

                    </ul>
                </div>
                <div class="services-panel">
                    <div class="services-panel-inner">
                        <h3>Global Strategy Snapshot</h3>
                        <p>
                            Get a clear understanding of your current global search visibility, identify
                            priority markets, and receive a tailored plan for expanding your search
                            presence worldwide.
                        </p>
                        <p class="services-note">
                            Includes: key markets overview, opportunity analysis, and recommended next steps
                            to help you rank higher, drive more traffic, and increase conversions in target regions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related SEO Services</h2>
                <p>Support your international growth strategy with these connected SEO services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/national-seo-service-uk" aria-label="National SEO services UK">
                    <span>National SEO Services UK</span>
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

                <a class="related-link-card" href="/ecommerce-seo-service-uk"
                    aria-label="eCommerce SEO services UK">
                    <span>eCommerce SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- WHAT ARE INTERNATIONAL SEO SERVICES -->
    <section class="section section-national-about" id="about-international-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are International SEO Services?</h2>

                    <p>
                        International SEO services help businesses rank in search engines across multiple countries and
                        languages. Unlike standard SEO, international SEO focuses on optimising your website so search
                        engines understand which countries you target, which languages you serve, and which version of your
                        content should appear for users in different regions.
                    </p>

                    <p>
                        This involves advanced technical setup such as hreflang implementation, multilingual content
                        optimisation, geo-targeting, and country-specific keyword research to ensure your website performs
                        strongly in each target market.
                    </p>

                    <p>
                        If your customers are located in different countries, international SEO is essential for making your
                        website visible, relevant, and competitive worldwide.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>Who Needs International SEO?</h3>

                    <ul>
                        <li>eCommerce brands shipping worldwide</li>
                        <li>SaaS and digital platforms with global users</li>
                        <li>Businesses expanding into new countries</li>
                        <li>Companies with multilingual websites</li>
                        <li>B2B brands targeting international markets</li>
                        <li>Organisations competing in multiple regions</li>
                    </ul>

                    <p class="national-about-note">
                        If your audience speaks different languages or lives in different countries, international SEO
                        ensures they find the right version of your website.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY INTERNATIONAL SEO IS CRITICAL -->
    <section class="section section-national-growth" id="international-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why International SEO Is Critical for Global Growth</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Without international SEO, search engines may show the wrong version of your website to users in
                    different countries, or fail to rank your pages at all. This leads to lost traffic, poor user
                    experience, and missed revenue opportunities.
                </p>

                <p>
                    A properly executed international SEO strategy ensures your website ranks for the right keywords, in the
                    right language, in the right country giving your business a competitive advantage in global markets.
                </p>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="section intl-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner intl-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Go Global?</h2>
                    <p>
                        Boost your worldwide visibility with tailored International SEO strategies.
                    </p>
                </div>
                <div class="cta-actions intl-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Contact Us Now</a>
                    <a href="#markets" class="btn btn-outline-light">Explore Target Markets</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our International SEO Team</h2>
                <p>
                    Share a few details about your business and we’ll schedule a consultation with our global SEO experts.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_international_enquiry">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_int_name">Full Name</label>
                        <input type="text" id="seo_int_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="seo_int_email">Email Address</label>
                        <input type="email" id="seo_int_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_int_website">Website URL</label>
                        <input type="url" id="seo_int_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="seo_int_markets">Target Markets</label>
                        <input type="text" id="seo_int_markets" name="payload[target_markets]"
                            placeholder="US, DE, FR, ES, etc.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_int_message">What would you like to achieve globally?</label>
                        <textarea id="seo_int_message" name="message" rows="4"
                            placeholder="Global visibility, more leads, multi-language site, etc." required></textarea>
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
                <h2>International SEO FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is International SEO?</summary>
                        <div class="faq-content">
                            <p>
                                International SEO helps your business rank across multiple countries using multilingual and
                                market-specific keywords.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. How is it different from National SEO?</summary>
                        <div class="faq-content">
                            <p>
                                National SEO targets one country; International SEO targets multiple countries, languages,
                                and regions with localized strategies.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Who needs International SEO?</summary>
                        <div class="faq-content">
                            <p>
                                Businesses serving customers worldwide—including eCommerce stores, SaaS platforms,
                                exporters, and global service providers.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. How long does International SEO take?</summary>
                        <div class="faq-content">
                            <p>
                                Most businesses see improvements in 3–6 months, depending on global competition and website
                                structure.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. What’s included in your International SEO service?</summary>
                        <div class="faq-content">
                            <p>Multilingual keyword research, technical SEO, hreflang setup, content optimization, link
                                building, and detailed global reporting.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Why choose your International SEO agency?</summary>
                        <div class="faq-content">
                            <p>
                                We deliver data-driven global strategies, multilingual expertise, and proven worldwide
                                ranking results.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection
