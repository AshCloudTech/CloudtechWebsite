@extends('layouts.cloudtech')

@section('title', 'Local SEO Services - Boost Your Local Business Visibility')
@section('meta_title', 'Cloud Technologies Ltd – Local SEO Services to Dominate Your Local Market')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/local-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
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
                <h1>Dominate Your<br>Local Market</h1>
                <p class="hero-subtitle">
                    Want to attract more nearby customers and boost your business visibility in your community?
                    Our Local SEO services help you rank higher in local search results and on Google Maps.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Local SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Consultation</a>
                </div>
            </div>

            <div class="hero-panel hero-media">
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
            </div>
        </div>
    </section>

    <!-- LOCAL SEARCH STATISTICS -->
    <section class="section section-stats" id="stats">
        <div class="container">
            <div class="section-header stats-header">
                <h2>Local Search Statistics</h2>
                <p>Why local SEO is crucial for your business</p>
            </div>

            <div class="stats-grid">
                <article class="stat-card">
                    <p class="stat-value">78%</p>
                    <p class="stat-label">of mobile searches lead to offline purchases</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">46%</p>
                    <p class="stat-label">of Google searches are local</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">72%</p>
                    <p class="stat-label">of consumers visit stores within 5 miles</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">88%</p>
                    <p class="stat-label">trust online reviews as personal recommendations</p>
                </article>
            </div>
        </div>
    </section>

    <!-- LOCAL SEO PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Local SEO Process</h2>
                <p>A systematic approach to local search domination</p>
            </div>

            <div class="grid grid-3 process-grid">
                <article class="card process-card">
                    <div class="process-icon">1</div>
                    <h3>Local Audit</h3>
                    <p>
                        Comprehensive analysis of your current local search presence, Google Business Profile
                        and local competitors.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-icon">2</div>
                    <h3>Optimisation</h3>
                    <p>
                        Optimise Google Business Profile, citations, on-site local content and NAP consistency
                        for maximum visibility.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-icon">3</div>
                    <h3>Growth</h3>
                    <p>
                        Monitor rankings, manage reviews and continuously improve your local presence to drive
                        more visits and calls.
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
                <p>Get found by local customers when they’re searching for your services.</p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-rank"></div>
                    <h3>Local Search Rankings</h3>
                    <p>
                        Appear at the top of local search results when customers search nearby.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-gmb"></div>
                    <h3>Google Business Profile</h3>
                    <p>
                        Optimise your Google Business Profile (GMB) for maximum local visibility.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-community"></div>
                    <h3>Community Visibility</h3>
                    <p>
                        Build strong local presence and attract nearby customers in your area.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-mobile"></div>
                    <h3>Mobile Optimisation</h3>
                    <p>
                        Capture “near me” mobile searches with fast, local-friendly experiences.
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
                        Everything you need to dominate local search results and attract nearby customers.
                    </p>
                    <ul class="services-list">
                        <li>Google Business Profile optimisation</li>
                        <li>Local keyword research and targeting</li>
                        <li>NAP (Name, Address, Phone) consistency across platforms</li>
                        <li>Local citation building and management</li>
                        <li>Online review management strategy</li>
                        <li>Local content creation and optimisation</li>
                        <li>Map Pack optimisation</li>
                        <li>Local competitor analysis</li>
                        <li>Mobile-first local SEO</li>
                        <li>Local schema markup implementation</li>
                    </ul>
                </div>
                <div class="services-panel">
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
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section local-cta" id="cta">
        <div class="container">
            <div class="cta-inner local-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Attract More Local Customers?</h2>
                    <p>
                        Get a free Local SEO audit and discover how we can help your business dominate local search.
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
                        <label for="business">Business Name</label>
                        <input type="text" id="business" placeholder="Your business name">
                    </div>
                    <div class="form-field">
                        <label for="location">Primary Location / City</label>
                        <input type="text" id="location" placeholder="City or area you serve">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What would you like to improve locally?</label>
                        <textarea id="message" rows="4" placeholder="More calls, store visits, map visibility, reviews, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection