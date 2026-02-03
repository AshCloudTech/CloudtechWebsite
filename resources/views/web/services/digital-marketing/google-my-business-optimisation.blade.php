@extends('layouts.cloudtech')

@section('title', 'Google My Business Optimisation | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – Google My Business Optimisation Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/gmb/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
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
                <p class="hero-eyebrow">Google Business Profile</p>
                <h1>Google Business Profile Growth Services</h1>
                <p class="hero-subtitle">
                    Optimize your listing to improve local visibility, gain more clicks, and attract nearby customers.
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
                <p class="stat-value">82%</p>
                <p class="stat-label">Use Google Business Profile to discover local businesses.</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">69%</p>
                <p class="stat-label"> Visit a business within 24 hours after viewing its profile.</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">31%</p>
                <p class="stat-label"> Local searches lead directly to a purchase.</p>
            </article>
            <article class="stat-card">
                <p class="stat-value">4x</p>
                <p class="stat-label">More likely to visit when a profile is complete and optimized.</p>
            </article>
        </div>
    </section>

    <!-- WHY GMB MATTERS -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Google Business Profile Matters </h2>
                <p>
                    It boosts your local visibility, builds trust, and helps customers find and choose your business faster.
                </p>
            </div>

            <div class="grid grid-3 why-grid">
                <article class="card why-card">
                    <h3>Increased Local Visibility</h3>
                    <p>
                        Improves how often your business appears in local searches and map results.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Build Trust &amp; Credibility</h3>
                    <p>
                        A complete profile helps customers trust your business and choose you confidently.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Direct Customer Engagement</h3>
                    <p>
                        Enables customers to call, message, or visit your business directly from search.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Valuable Insights</h3>
                    <p>
                        Provides data on views, searches, and actions to guide better local decisions.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Review Management</h3>
                    <p>
                        Helps you manage reviews to strengthen trust and improve your local reputation.
                    </p>
                </article>
                <article class="card why-card">
                    <h3>Local Pack Rankings</h3>
                    <p>
                        Boosts your chances of appearing in Google’s top local 3-pack for more visibility.
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
                    We offer complete Local SEO solutions designed to boost visibility, attract customers, and drive
                    measurable growth.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <article class="card service-card">
                    <h3>Profile Setup &amp; Verification</h3>
                    <p>We create and verify your Google Business Profile to ensure full accuracy and visibility.</p>
                    <ul>
                        <li>Google Profile Setup Verification</li>
                        <li>Local Business Profile Setup </li>
                        <li>Professional Profile Setup Verification </li>
                        <li>Complete Profile Setup Service </li>

                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Content Optimisation</h3>
                    <p>We enhance your profile with optimized descriptions, categories, and visuals for better engagement.
                    </p>
                    <ul>
                        <li>Content Optimization for Visibility</li>
                        <li>Local Profile Content Optimization </li>
                        <li>Enhanced Google Content Optimization </li>
                        <li>SEO-Focused Content Optimization </li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Review Management</h3>
                    <p>We help you collect, respond to, and showcase reviews to build trust and attract customers.</p>
                    <ul>
                        <li>Profile Setup & Verification</li>
                        <li>Content Optimization & Enhancement </li>
                        <li>Review Management & Response </li>
                        <li>Posts & Updates Publishing</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Q&amp;A Management</h3>
                    <p>We manage questions and answers to provide clear, helpful information to potential customers.</p>
                    <ul>
                        <li>Q&A Management & Support</li>
                        <li>Q&A Optimization & Response </li>
                        <li>Q&A Handling & Updates </li>
                        <li>Q&A Monitoring & Management</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Insights &amp; Reporting</h3>
                    <p>We track profile performance, customer actions, and search trends to guide improvements.</p>
                    <ul>
                        <li>Insights & Reporting Analysis</li>
                        <li>Insights & Reporting Dashboard </li>
                        <li>Insights & Performance Reporting </li>
                        <li>Insights & Data Reporting</li>
                    </ul>
                </article>

                <article class="card service-card">
                    <h3>Ongoing Optimisation</h3>
                    <p>We continually update your profile to maintain high visibility and strong local rankings.</p>
                    <ul>
                        <li>Ongoing Optimization & Updates</li>
                        <li>Ongoing Optimization & Management </li>
                        <li>Ongoing Optimization & Improvement </li>
                        <li>Ongoing Optimization & Monitoring</li>
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
                        We assess your current presence and set up the essentials for strong local performance.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Optimise &amp; Enhance</h3>
                    <p>
                        We refine your profiles and content to boost visibility and engagement.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Monitor &amp; Grow</h3>
                    <p>
                        We track results and make continuous improvements to drive steady local growth.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section gmb-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner gmb-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Dominate Local Search?</h2>
                    <p>
                        Boost your visibility, attract more local customers, and outperform competitors with powerful Local
                        SEO strategies.
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

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="gmb_audit_request">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="gmb_name">Full Name</label>
                        <input type="text" id="gmb_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="gmb_email">Email Address</label>
                        <input type="email" id="gmb_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="gmb_business">Business Name</label>
                        <input type="text" id="gmb_business" name="payload[business_name]"
                            placeholder="Your business name">
                    </div>

                    <div class="form-field">
                        <label for="gmb_location">Primary Location / City</label>
                        <input type="text" id="gmb_location" name="payload[primary_location]"
                            placeholder="City or area you serve">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="gmb_message">What would you like to improve?</label>
                        <textarea id="gmb_message" name="message" rows="4"
                            placeholder="Local rankings, map pack visibility, reviews, calls, etc." required></textarea>
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
                <h2> Google Business Profile FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is a Google Business Profile?</summary>
                        <div class="faq-content">
                            <p>
                                A Google Business Profile is a free listing that helps your business appear in local
                                searches and Google Maps, improving visibility and customer engagement.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. Why is Google Business Profile important for Local SEO?</summary>
                        <div class="faq-content">
                            <p>
                                A well-optimized profile boosts local rankings, increases trust, and helps customers choose
                                your business faster.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. How does optimizing my Google Business Profile help my business?</summary>
                        <div class="faq-content">
                            <p>
                                Optimization increases visibility, drives more clicks, improves engagement, and boosts your
                                chances of appearing in the local 3-pack.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. What services do you provide for Google Business Profile optimization?</summary>
                        <div class="faq-content">
                            <p>
                                We handle setup, content optimization, review management, Q&A updates, insights tracking,
                                and ongoing optimization.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5.How often should my Google Business Profile be updated?</summary>
                        <div class="faq-content">
                            <p>Regular updates such as posts, photos, reviews, and info changes help maintain strong
                                visibility and ranking performance.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Can Google Business Profile help me attract more local customers?</summary>
                        <div class="faq-content">
                            <p>
                                Yes. An optimized profile makes your business more discoverable and increases actions like
                                calls, visits, and direction requests.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>



@endsection
