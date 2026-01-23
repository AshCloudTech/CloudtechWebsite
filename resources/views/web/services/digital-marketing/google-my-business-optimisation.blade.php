@extends('layouts.cloudtech')

@section('title', 'Google My Business Optimisation | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – Google My Business Optimisation Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/gmb/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/gmb/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero gmb-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-inner">
            <div class="hero-text">
                <p class="hero-eyebrow">Google My Business Optimisation</p>
                <h1>Maximise Your Local<br>Visibility with GMB</h1>
                <p class="hero-subtitle">
                    Maximise your local visibility and attract more customers with expert GMB management.
                    We optimise every element of your Google My Business profile so you stand out in Google
                    Search and Maps.
                </p>
                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Call Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats" id="stats">
        <div class="container stats-grid">
            <article class="stat-card">
                <p class="stat-value">86%</p>
                <p class="stat-label">Use GMB to find local businesses</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">76%</p>
                <p class="stat-label">Visit within 24 hours</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">28%</p>
                <p class="stat-label">Result in purchases</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">5x</p>
                <p class="stat-label">More likely to visit</p>
            </article>
        </div>
    </section>

    <!-- WHY GMB MATTERS -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why GMB Matters</h2>
                <p>
                    Your Google My Business profile is often the first impression customers have of your business.
                </p>
            </div>

            <div class="grid grid-3 why-grid">
                <article class="card why-card">
                    <h3>Increased Local Visibility</h3>
                    <p>
                        Appear in local search results and Google Maps when customers search for your services.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Build Trust &amp; Credibility</h3>
                    <p>
                        Showcase reviews, photos and key business information to establish authority.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Direct Customer Engagement</h3>
                    <p>
                        Enable customers to call, message or visit your business with a single click.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Valuable Insights</h3>
                    <p>
                        Track how customers find and interact with your business listing over time.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Review Management</h3>
                    <p>
                        Collect and respond to customer reviews to improve your reputation.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Local Pack Rankings</h3>
                    <p>
                        Dominate the coveted Google 3-pack for maximum local exposure.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>
                    Comprehensive GMB optimisation to maximise your local presence.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <h3>Profile Setup &amp; Verification</h3>
                    <ul>
                        <li>Complete business profile creation</li>
                        <li>Business information optimisation</li>
                        <li>Category selection guidance</li>
                        <li>Verification assistance</li>
                        <li>Profile completion</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Content Optimisation</h3>
                    <ul>
                        <li>Professional photo uploads</li>
                        <li>Business description writing</li>
                        <li>Service &amp; product listings</li>
                        <li>Regular post creation</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Review Management</h3>
                    <ul>
                        <li>Review monitoring and alerts</li>
                        <li>Professional response templates</li>
                        <li>Review generation strategies</li>
                        <li>Reputation protection</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Q&amp;A Management</h3>
                    <ul>
                        <li>Question monitoring</li>
                        <li>Professional answers</li>
                        <li>FAQ seeding</li>
                        <li>Community engagement</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Insights &amp; Reporting</h3>
                    <ul>
                        <li>Monthly performance reports</li>
                        <li>Search query analysis</li>
                        <li>Customer action tracking</li>
                        <li>Competitor benchmarking</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Ongoing Optimisation</h3>
                    <ul>
                        <li>Regular profile updates</li>
                        <li>Seasonal adjustments</li>
                        <li>Algorithm adaptation</li>
                        <li>Performance enhancement</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- OUR PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our Process</h2>
                <p>
                    A proven approach to maximise your local visibility.
                </p>
            </div>

            <div class="grid grid-3 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Audit &amp; Setup</h3>
                    <p>
                        We analyse your current GMB presence and set up or optimise your profile for maximum impact.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Optimise &amp; Enhance</h3>
                    <p>
                        Complete profile optimisation with professional content, photos and strategic information.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Monitor &amp; Grow</h3>
                    <p>
                        Ongoing management, review responses and continuous optimisation for sustained growth.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section gmb-cta" id="cta">
        <div class="container">
            <div class="cta-inner gmb-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Dominate Local Search?</h2>
                    <p>
                        Get a free GMB audit and discover how we can help you attract more local customers.
                    </p>
                </div>
                <div class="cta-actions gmb-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get Free Audit</a>
                    <a href="#hero" class="btn btn-outline-light">Call Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your GMB Audit</h2>
                <p>
                    Share a few details and we’ll review your Google My Business profile with clear recommendations.
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
                        <label for="message">What would you like to improve?</label>
                        <textarea id="message" rows="4" placeholder="Local rankings, map pack visibility, reviews, calls, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection