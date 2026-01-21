@extends('layouts.cloudtech')

@section('title', 'Meta Ads Services')
@section('meta_title', 'Cloud Technologies Ltd – Meta Ads Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/meta-ads/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
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
                <h1>Reach Billions on<br>Social Media</h1>
                <p class="hero-subtitle">
                    Harness the power of Facebook and Instagram advertising to reach your ideal customers.
                    Our Meta Ads services help businesses drive engagement, leads and sales through targeted
                    social media campaigns.
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
                <p>Powerful social media advertising that delivers real business results</p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Massive Reach</h3>
                    <p>Access to over 3 billion users across Facebook and Instagram.</p>
                </article>
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Precise Targeting</h3>
                    <p>Advanced audience targeting based on demographics, interests and behaviours.</p>
                </article>
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Visual Impact</h3>
                    <p>Eye‑catching visual ad formats that capture attention and drive action.</p>
                </article>
                <article class="why-card">
                    <div class="why-icon"></div>
                    <h3>Mobile‑First</h3>
                    <p>Optimised for mobile, where most social media consumption happens.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- META ADVERTISING PLATFORMS -->
    <section class="section section-platforms" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>Meta Advertising Platforms</h2>
                <p>Reach your audience across all Meta platforms with targeted advertising</p>
            </div>

            <div class="grid grid-2 platform-grid">
                <article class="card platform-card">
                    <h3>Facebook Feed Ads</h3>
                    <p class="platform-meta">Native ads that appear in users&apos; Facebook news feeds</p>
                    <ul>
                        <li>Image Ads</li>
                        <li>Video Ads</li>
                        <li>Carousel Ads</li>
                        <li>Collection Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Instagram Ads</h3>
                    <p class="platform-meta">Visual ads across Instagram feed, stories and reels</p>
                    <ul>
                        <li>Feed Posts</li>
                        <li>Stories Ads</li>
                        <li>Reels Ads</li>
                        <li>Shopping Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Messenger Ads</h3>
                    <p class="platform-meta">Direct messaging ads for personalised communication</p>
                    <ul>
                        <li>Sponsored Messages</li>
                        <li>Click to Messenger</li>
                        <li>Messenger Stories</li>
                        <li>Inbox Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Audience Network</h3>
                    <p class="platform-meta">Extend reach beyond Facebook to partner apps and websites</p>
                    <ul>
                        <li>Native Ads</li>
                        <li>Banner Ads</li>
                        <li>Interstitial Ads</li>
                        <li>Rewarded Video</li>
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
                <p>Reach the right people with Meta&apos;s powerful targeting capabilities</p>
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
                        <li>Relationship Status</li>
                    </ul>
                </article>

                <article class="card targeting-card">
                    <h3>Interests</h3>
                    <ul>
                        <li>Hobbies</li>
                        <li>Entertainment</li>
                        <li>Sports</li>
                        <li>Technology</li>
                        <li>Fashion</li>
                        <li>Travel</li>
                    </ul>
                </article>

                <article class="card targeting-card">
                    <h3>Behaviours</h3>
                    <ul>
                        <li>Purchase Behaviour</li>
                        <li>Device Usage</li>
                        <li>Travel Patterns</li>
                        <li>Digital Activities</li>
                    </ul>
                </article>

                <article class="card targeting-card">
                    <h3>Custom Audiences</h3>
                    <ul>
                        <li>Website Visitors</li>
                        <li>Email Lists</li>
                        <li>App Users</li>
                        <li>Engagement Audiences</li>
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
                        Full‑service Facebook and Instagram advertising management.
                    </p>
                    <ul class="services-list">
                        <li>Meta Ads strategy development and planning</li>
                        <li>Facebook advertising campaign management</li>
                        <li>Instagram advertising optimisation</li>
                        <li>Audience research and targeting setup</li>
                        <li>Creative development and A/B testing</li>
                        <li>Conversion tracking and pixel implementation</li>
                        <li>Retargeting and lookalike audience creation</li>
                        <li>Shopping campaigns for e‑commerce</li>
                        <li>Lead generation campaign optimisation</li>
                        <li>Video advertising and engagement campaigns</li>
                        <li>Performance monitoring and optimisation</li>
                        <li>Monthly reporting and ROI analysis</li>
                    </ul>
                </div>
                <div class="services-panel" aria-hidden="true">
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
                </div>
            </div>
        </div>
    </section>

    <!-- META ADS PROCESS -->
    <section class="section section-process" id="process">
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
    </section>

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
@endsection