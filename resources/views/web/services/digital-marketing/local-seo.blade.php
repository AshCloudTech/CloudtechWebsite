@extends('layouts.cloudtech')

@section('title', 'Local SEO Services - Boost Your Local Business Visibility')
@section('meta_title', 'Cloud Technologies Ltd – Local SEO Services to Dominate Your Local Market')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/local-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/local-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero local-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Local SEO Services</p>
                <h1>Boost Your Visibility with Expert Local SEO Services</h1>
                <p class="hero-subtitle">
                    Our Local SEO Services help your business rank higher in local searches through targeted keywords,
                    Google Business Profile SEO, and proven Local Search Optimization strategies.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Local SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Consultation</a>
                </div>
            </div>

            <!-- <div class="hero-panel hero-media">
                    <div class="hero-media-inner">
                        <p class="hero-media-label">Local Presence Preview</p>
                        <p class="hero-media-text">
                            Visual representation of how your business appears across Google Maps and local search results.
                        </p>
                        <div class="hero-media-block">
                            <span class="hero-pin">●</span>
                            <div class="hero-map-lines"></div>
                        </div>
                    </div>
                </div> -->
        </div>
    </section>

    <!-- LOCAL SEARCH STATISTICS -->
    <section class="section section-stats" id="stats">
        <div class="container">
            <div class="section-header stats-header">
                <h2>Local Search Statistics</h2>
                <p>Key data showing how local searches influence customer decisions and drive foot traffic.</p>
            </div>

            <div class="stats-grid">
                <article class="stat-card">
                    <p class="stat-value">70%</p>
                    <p class="stat-label">Shoppers use local search to compare nearby businesses.</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">55%</p>
                    <p class="stat-label"> Users choose a business after viewing its local profile.</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">68%</p>
                    <p class="stat-label">Searchers visit a nearby physical location after looking online.</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">82%</p>
                    <p class="stat-label">Customers rely on online feedback before choosing a local business.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- LOCAL SEO PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Local SEO Process</h2>
                <p>A clear, streamlined strategy that enhances your local presence, improves visibility, and drives steady
                    customer growth.</p>
            </div>

            <div class="grid grid-3 process-grid">
                <article class="card process-card">
                    <div class="process-icon">1</div>
                    <h3>Local Audit</h3>
                    <p>
                        We assess your local presence to identify gaps and opportunities for stronger visibility.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-icon">2</div>
                    <h3>Optimisation</h3>
                    <p>
                        We enhance key SEO elements to improve local rankings, relevance, and customer engagement.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-icon">3</div>
                    <h3>Growth</h3>
                    <p>
                        We apply targeted strategies that drive increased local traffic, leads, and ongoing growth.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE OUR LOCAL SEO SERVICES -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Local SEO Services?</h2>
                <p>Our Local SEO Agency boosts local rankings and helps you attract more nearby customers.</p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-rank"></div>
                    <h3>Local Search Rankings</h3>
                    <p>
                        We improve your Local SEO rankings to boost visibility and attract nearby customers.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-gmb"></div>
                    <h3>Google My Business</h3>
                    <p>
                        We optimize your Google Business Profile for stronger Local SEO performance and map results.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-community"></div>
                    <h3>Community Visibility</h3>
                    <p>
                        We enhance your local business visibility across directories to support your Local SEO strategy.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-mobile"></div>
                    <h3>Mobile Optimisation</h3>
                    <p>
                        We optimize your site for mobile users to improve Local SEO results and local search engagement.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLETE LOCAL SEO SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="services-layout">
                <div class="services-copy">
                    <h2>Complete Local SEO Services</h2>
                    <p class="services-intro">
                        Comprehensive Local SEO solutions that improve local rankings, visibility, and customer growth.</p>
                    <ul class="services-list">
                        <li>Local SEO Audit</li>
                        <li>Keyword Targeting</li>
                        <li>Google Business Profile</li>
                        <li>Local Citations</li>
                        <li>On-Page Local SEO</li>
                        <li>Local Link Building</li>
                        <li>Map Pack optimisation</li>
                        <li>Reputation Management</li>
                        <li>Mobile local SEO</li>
                        <li>Local Content Strategy</li>
                        <li>Competitor Analysis</li>
                        <li>Local Performance Tracking</li>
                    </ul>
                </div>
                <!-- <div class="services-panel">
                        <div class="services-panel-inner">
                            <p class="services-label">Local Visibility Panel</p>
                            <p class="services-text">
                                Snapshot of how visible your business is in local search, including maps, reviews
                                and organic rankings.
                            </p>
                            <p class="services-meta">
                                Ideal for local businesses that want clear, actionable recommendations to increase
                                calls, visits and enquiries.
                            </p>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section local-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner local-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Attract More Local Customers?</h2>
                    <p>
                        Boost your local visibility and attract nearby customers with powerful Local SEO Services.
                    </p>
                </div>
                <div class="cta-actions local-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get Free Local Audit</a>
                    <a href="#stats" class="btn btn-outline-light">View Local Stats</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Local SEO Audit</h2>
                <p>
                    Tell us about your business and we’ll send a tailored local SEO audit with clear next steps.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_local_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_local_name">Full Name</label>
                        <input type="text" id="seo_local_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="seo_local_email">Email Address</label>
                        <input type="email" id="seo_local_email" name="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_local_business">Business Name</label>
                        <input type="text" id="seo_local_business" name="payload[business_name]"
                            placeholder="Your business name">
                    </div>

                    <div class="form-field">
                        <label for="seo_local_location">Primary Location / City</label>
                        <input type="text" id="seo_local_location" name="payload[primary_location]"
                            placeholder="City or area you serve">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_local_message">What would you like to improve locally?</label>
                        <textarea id="seo_local_message" name="message" rows="4"
                            placeholder="More calls, store visits, map visibility, reviews, etc." required></textarea>
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
                <h2>Local SEO Service FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What Are Local SEO Services?</summary>
                        <div class="faq-content">
                            <p>
                                Local SEO Services optimize your online presence so your business appears in local searches,
                                map results, and “near me” queries to attract nearby customers.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2.Why Is Local SEO Important?</summary>
                        <div class="faq-content">
                            <p>
                                Local SEO boosts visibility, increases local traffic, and helps customers easily find and
                                choose your business both online and offline.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. How Does Local SEO Help My Business Grow?</summary>
                        <div class="faq-content">
                            <p>
                                It improves rankings, increases foot traffic, strengthens credibility, and drives more
                                calls, visits, and inquiries from nearby customers.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. What Is Included in Your Local SEO Process?</summary>
                        <div class="faq-content">
                            <p>
                                Our process includes a Local Audit, Optimization phase, and Growth strategy that ensures
                                improved visibility and lasting performance.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. What Platforms Do You Optimize for Local SEO?</summary>
                        <div class="faq-content">
                            <p>We optimize your Google Business Profile, local citations, directories, website pages, and
                                mobile experience for stronger results.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. How Do You Improve Local Search Rankings?</summary>
                        <div class="faq-content">
                            <p>
                                We use keyword targeting, on-page optimization, map pack improvements, link building, and
                                Google Business Profile enhancements.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection
