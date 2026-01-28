@extends('layouts.cloudtech')

@section('title', 'Meta Ads Services')
@section('meta_title', 'Cloud Technologies Ltd – Meta Ads Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/meta-ads/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/meta-ads/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero meta-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-layout">
            <div class="hero-copy">
                <p class="hero-eyebrow">Meta Ads Services</p>
                <h1>Maximize Performance with Meta Advertising</h1>
                <p class="hero-subtitle">
                    Powerful Meta advertising solutions designed to reach the right audience, increase engagement, and drive measurable business growth across all Meta platforms.
                </p>
                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-accent">Get Meta Ads Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Strategy Call</a>
                </div>
            </div>
            <div class="hero-panel" aria-hidden="true">
                <div class="hero-panel-inner">
                    <p class="panel-label">Campaign Snapshot</p>
                    <p class="panel-text">
                        A visual overview of impressions, reach, engagement and conversions across your live
                        Meta campaigns.
                    </p>
                    <p class="panel-meta">
                        Designed for brands who want clarity on how Meta Ads are driving real business results.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY META ADS -->
    <section class="section section-why" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Meta Ads?</h2>
                <p>Meta Ads offer extensive reach, advanced targeting, and high-performing ad formats that help brands scale quickly and effectively.</p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Massive Reach</h3>
                    <p>Promote your business across millions of active daily users.</p>
                </article>
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Precise Targeting</h3>
                    <p>Reach ideal customers using advanced Meta targeting tools.</p>
                </article>
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Visual Impact</h3>
                    <p>Use eye-catching ad formats to capture attention instantly.</p>
                </article>
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Mobile‑First</h3>
                    <p>Deliver seamless ad experiences optimized for mobile users.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- META ADVERTISING PLATFORMS -->
    <section class="section section-platforms" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>Meta Advertising Platforms</h2>
                <p>We manage Meta campaigns across multiple placements to maximize reach and conversions.</p>
            </div>

            <div class="grid grid-2 platform-grid">
                <article class="card platform-card">
                    <h3>Facebook Feed</h3>
                    <p class="platform-meta"> High-impact placements designed to engage Facebook users effectively.</p>
                        <li>Image Ads</li>
                        <li>Video Ads</li>
                        <li>Carousel Ads</li>
                        <li>Collection Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Instagram Ads</h3>
                    <p class="platform-meta"> Perfect for visual storytelling and reaching highly engaged audiences.</p>
                    <ul>
                        <li>Photo Ads</li>
                        <li>Story Ads</li>
                        <li>Reel Ads</li>
                        <li> Explore Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Messenger Ads</h3>
                    <p class="platform-meta"> Ideal for conversational ads and direct user engagement.</p>
                    <ul>
                        <li>Sponsored Messages</li>
                        <li>Click-to-Messenger Ads</li>
                        <li>Retargeting Messages</li>
                        <li>Inbox Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Audience Network</h3>
                    <p class="platform-meta">Expand your reach beyond Meta apps through partner websites and apps.</p>
                    <ul>
                        <li>Native Ads</li>
                        <li>Banner Ads</li>
                        <li>Interstitial Ads</li>
                        <li>Rewarded Video Ads</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- ADVANCED TARGETING OPTIONS -->
    <section class="section section-targeting" id="targeting">
        <div class="container">
            <div class="section-header">
                <h2>Advanced Targeting Options</h2>
                <p>Use Meta's advanced targeting tools to reach users with precision and relevance.</p>
            </div>

            <div class="grid grid-4 targeting-grid">
                <article class="card targeting-card">
                    <h3>Demographics</h3>
                    <ul>
                        <li>Age</li>
                        <li>Gender</li>
                        <li>Location</li>
                        <li>Language</li>
                        <li>Education</li>
                        <li>Job Role</li>
                    </ul>
                </article>

                <article class="card targeting-card">
                    <h3>Interests</h3>
                    <ul>
                        <li>Lifestyle</li>
                        <li>Entertainment</li>
                        <li>Fitness</li>
                        <li>Technology</li>
                        <li>Fashion</li>
                        <li>Travel</li>
                    </ul>
                </article>

                <article class="card targeting-card">
                    <h3>Behaviours</h3>
                    <ul>
                        <li>Purchase Activity</li>
                        <li>Device Usage</li>
                        <li>Travel Behaviour</li>
                        <li>Online Engagement</li>
                        <li>App Usage</li>
                        <li>Shopping Habits</li>
                    </ul>
                </article>

                <article class="card targeting-card">
                    <h3>Custom Audiences</h3>
                    <ul>
                        <li>Website Visitors</li>
                        <li>Email Lists</li>
                        <li>Customer Lists</li>
                        <li>Lookalike Audiences</li>
                        <li>Engaged Follower</li>
                        <li>Previous Leads</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLETE META ADS MANAGEMENT -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="services-layout">
                <div class="services-copy">
                    <h2>Complete Meta Ads Management</h2>
                    <p class="services-intro">
                       Comprehensive Meta advertising services built to plan, launch, optimize, and scale high-performing ad campaigns.
                    </p>
                    <ul class="services-list">
                        <li>Campaign Strategy and Planning </li>
                        <li>Audience Research and Segmentation </li>
                        <li>Creative Development and Design </li>
                        <li>Ad Copywriting and Messaging </li>
                        <li>A/B Testing and Experimentation </li>
                        <li>Budget Management and Allocation </li>
                        <li>Conversion Tracking and Measurement </li>
                        <li>Retargeting Setup and Optimization </li>
                        <li>Performance Monitoring and Adjustments </li>
                        <li>Reporting and Data Insights </li>
                        
                    </ul>
                </div>
                <!-- <div class="services-panel" aria-hidden="true">
                    <div class="services-panel-inner">
                        <p class="panel-label">Meta Ads Overview</p>
                        <p class="panel-text">
                            A consolidated view of reach, clicks, leads and sales across all your Meta
                            advertising campaigns.
                        </p>
                        <p class="panel-meta">
                            Built for marketing teams that want clear, actionable insight on what&apos;s working.
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- META ADS PROCESS -->
    <!-- <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our Meta Ads Process</h2>
                <p>A proven approach to social media advertising success</p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Audience Research</h3>
                    <p>
                        Identify and analyse your target audience on social media.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Creative Development</h3>
                    <p>
                        Create compelling ad creatives that resonate with your audience.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Campaign Launch</h3>
                    <p>
                        Launch targeted campaigns across Facebook and Instagram.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Optimise &amp; Scale</h3>
                    <p>
                        Continuously optimise and scale successful campaigns.
                    </p>
                </article>
            </div>
        </div>
    </section> -->

    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-main">
                    <h2>Ready to Dominate Social Media?</h2>
                    <p>
                        Get a free Meta Ads audit and discover how we can help you reach billions of potential customers.
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="#contact-form" class="btn btn-accent">Get Free Meta Ads Audit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Meta Ads Audit</h2>
                <p>
                    Tell us about your brand and we&apos;ll send tailored recommendations to improve your Meta campaigns.
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
                        <label for="company">Brand / Company</label>
                        <input type="text" id="company" placeholder="Your brand or company name">
                    </div>
                    <div class="form-field">
                        <label for="monthly-spend">Approx. Monthly Ad Spend</label>
                        <input type="text" id="monthly-spend" placeholder="e.g. £3k–£15k">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What would you like to improve?</label>
                        <textarea id="message" rows="4" placeholder="Targeting, lead quality, ROAS, creative performance, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit Request</button>
            </form>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Meta Ads Service FAQs</h2>
            </div>
 
            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1.What are Meta Ads and how do they work?</summary>
                        <div class="faq-content">
                            <p>
                              Meta Ads allow businesses to advertise across Facebook, Instagram, Messenger, and Audience Network using targeted and data-driven campaigns.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>2. How effective are Meta Ads for growing a business?</summary>
                        <div class="faq-content">
                            <p>
                       Meta Ads deliver strong results by combining massive reach, precise targeting, and engaging ad formats that drive leads and sales.</p>
                    </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>3. What types of ads can I run on Meta platforms?</summary>
                        <div class="faq-content">
                            <p>
                             You can run image ads, video ads, carousel ads, story ads, reel ads, and product catalog ads depending on your goals.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>4. Can Meta Ads help with retargeting customers?</summary>
                        <div class="faq-content">
                            <p>
                            Yes, Meta Ads allow retargeting website visitors, app users, past customers, and engaged audiences to improve conversions.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>5. Do you handle ad creatives and copywriting?</summary>
                        <div class="faq-content">
                            <p>Yes, we create compelling visuals and copy designed to improve click-through rates and overall campaign performance.
                            </p>
                        </div>
                    </details>
 
                    <details class="faq-item">
                        <summary>6. How do you measure the success of Meta Ads campaigns?</summary>
                        <div class="faq-content">
                            <p>
                              We track conversions, leads, sales, cost metrics, and audience behavior to optimize results and provide transparent reporting.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>
@endsection