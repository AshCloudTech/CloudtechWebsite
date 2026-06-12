@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'Meta Ads services UK, Facebook Ads UK, Instagram Ads UK, social media advertising UK, Meta advertising agency, targeted ad campaigns UK, ad strategy UK, business growth UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/meta-ads/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/digitalMarketing/meta-ads/js/script.js') }}" defer></script>
           <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    @endpush
@section('content')
@section('content')
@php
    $hasDynamicContent = !empty($content);
@endphp


    <!-- HERO -->
@php
    $hero = $content['hero'] ?? null;
@endphp


    <!-- HERO -->
    <section class="hero meta-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-layout">
            <div class="hero-copy">
                <p class="hero-eyebrow">Meta Ads Services</p>
                <h1> {{ $hero['title'] ?? 'Maximize Performance with Meta Advertising'}}</h1>
                <p class="hero-subtitle">
                     {{ $hero['subtitle'] ?? 'Powerful Meta advertising solutions designed to reach the right audience, increase engagement, and drive
                    measurable business growth across all Meta platforms.'}}'
                </p>
                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-accent jsGetAudit" data-audit-type="meta-ads">Get Meta Ads
                        Audit</a>

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
@if(!$hasDynamicContent)

    <!-- WHY META ADS -->
    <section class="section section-why" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Meta Ads?</h2>
                <p>
                    Meta Ads offer extensive reach, advanced targeting, and high-performing ad formats that help brands
                    scale
                    quickly and effectively.
                </p>
            </div>

            <div class="grid grid-4 why-grid why-grid-ui">
                <article class="why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="users"></i>
                    </div>
                    <h3>Massive Reach</h3>
                    <p>Promote your business across millions of active daily users.</p>
                </article>

                <article class="why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="crosshair"></i>
                    </div>
                    <h3>Precise Targeting</h3>
                    <p>Reach ideal customers using advanced Meta targeting tools.</p>
                </article>

                <article class="why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="sparkles"></i>
                    </div>
                    <h3>Visual Impact</h3>
                    <p>Use eye-catching ad formats to capture attention instantly.</p>
                </article>

                <article class="why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="smartphone"></i>
                    </div>
                    <h3>Mobile-First</h3>
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
                    <img src="{{ asset('assets/services/digitalMarketing/meta-ads/images/facebook_feed.webp') }}"
                        alt="Facebook Feed Ads - Meta Advertising Services"
                        title="Facebook feed ads for targeted social media marketing campaigns"
                        aria-label="Facebook Feed" aria-hidden="true"
                        class="platform-icon">
                    <p class="platform-meta">High-impact placements designed to engage Facebook users effectively.</p>
                    <ul>
                        <li>Image Ads</li>
                        <li>Video Ads</li>
                        <li>Carousel Ads</li>
                        <li>Collection Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Instagram Ads</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/meta-ads/images/instagram_ads.webp') }}"
                        alt="Instagram Ads - Meta Advertising Services"
                        title="Instagram ads to reach and engage a wider audience"
                        aria-label="Instagram Ads" aria-hidden="true"
                        class="platform-icon">
                    <p class="platform-meta">Perfect for visual storytelling and reaching highly engaged audiences.</p>
                    <ul>
                        <li>Photo Ads</li>
                        <li>Story Ads</li>
                        <li>Reel Ads</li>
                        <li>Explore Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Messenger Ads</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/meta-ads/images/messenger_ads.webp') }}"
                        alt="Messenger Ads - Meta Advertising Services"
                        title="Messenger ads for direct communication and customer engagement"
                        aria-label="Messenger Ads" aria-hidden="true"
                        class="platform-icon">
                    <p class="platform-meta">Ideal for conversational ads and direct user engagement.</p>
                    <ul>
                        <li>Sponsored Messages</li>
                        <li>Click-to-Messenger Ads</li>
                        <li>Retargeting Messages</li>
                        <li>Inbox Ads</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Audience Network</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/meta-ads/images/audience_network.webp') }}"
                        alt="Audience Network Ads - Meta Advertising Services"
                        title="Audience network ads to extend reach across multiple platforms"
                        aria-label="Audience Network" aria-hidden="true"
                        class="platform-icon">
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
                        Comprehensive Meta advertising services built to plan, launch, optimize, and scale high-performing
                        ad campaigns.
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
               <div class="services-panel" aria-hidden="true">
                                <div class="services-panel-inner">
                                    <p class="panel-label">Meta Ads Overview</p>
                                    <p class="panel-text">
                                        A single, unified view of your Meta advertising performance, providing actionable insights to optimize your campaigns and drive business growth.
                                    </p>
                                    <p class="panel-meta">
                                        Ideal for marketing teams looking to streamline their reporting and gain a deeper understanding of their Meta Ads campaigns.
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
                <h2>Explore Related Services</h2>
                <p>Connect your Meta campaigns with wider search, social, and website growth strategies.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/social-media-marketing-service-uk"
                    aria-label="Social media marketing services UK">
                    <span>Social Media Marketing Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/ppc-advertising-service-uk"
                    aria-label="PPC advertising services UK">
                    <span>PPC Advertising Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk"
                    aria-label="Digital marketing services UK">
                    <span>Digital Marketing Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="Website development services UK">
                    <span>Website Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
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

    <!-- WHAT ARE meta-ads SERVICES -->
    <section class="section section-national-about" id="about-meta_ads-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are Meta Ads Services?</h2>

                    <p>
                        Meta Ads services focus on creating, managing, and optimising paid campaigns across Facebook,
                        Instagram, Messenger, and the Audience Network using Meta Ads Manager. These campaigns are designed
                        to reach highly specific audiences, drive engagement, and convert users into customers through
                        data-driven targeting and creative testing.
                    </p>

                    <p>
                        A successful Meta advertising strategy combines audience research, compelling creatives, conversion
                        tracking, and continuous optimisation to reduce costs and increase return on ad spend.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>Conversion Tracking: Pixel & Conversions API</h3>

                    <p>
                        Accurate tracking is the foundation of profitable Meta campaigns.
                    </p>

                    <p>
                        We implement:
                    </p>

                    <ul>
                        <li>Meta Pixel for on-site behaviour tracking</li>
                        <li>Meta Conversions API for server-side data accuracy</li>
                        <li>Event tracking for purchases, leads, add-to-cart, and page views</li>
                        <li>Custom conversions for precise optimisation</li>
                    </ul>

                    <p class="">
                        This allows Meta to learn who converts and shows ads to more of the right people.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Why Creative Testing Is Key to Meta Ads Success-->
    <section class="section section-national-growth" id="meta_ads-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why Creative Testing Is Key to Meta Ads Success</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    On Meta platforms, creative performance has a bigger impact than targeting alone. We continuously test
                    images, videos, headlines, and copy variations to discover what resonates most with your audience.
                </p>

                <p>
                    Winning creatives are scaled, while underperforming ads are replaced ensuring consistent improvement in
                    click-through rates, conversions, and return on ad spend.
                </p>
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

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="meta_ads_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="meta_name">Full Name</label>
                        <input type="text" id="meta_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="meta_email">Email Address</label>
                        <input type="email" id="meta_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="meta_company">Brand / Company</label>
                        <input type="text" id="meta_company" name="payload[brand_company]"
                            placeholder="Your brand or company name">
                    </div>

                    <div class="form-field">
                        <label for="meta_spend">Approx. Monthly Ad Spend</label>
                        <input type="text" id="meta_spend" name="payload[monthly_ad_spend]"
                            placeholder="e.g. £3k–£15k">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="meta_message">What would you like to improve?</label>
                        <textarea id="meta_message" name="message" rows="4"
                            placeholder="Targeting, lead quality, ROAS, creative performance, etc." required></textarea>
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
                                Meta Ads allow businesses to advertise across Facebook, Instagram, Messenger, and Audience
                                Network using targeted and data-driven campaigns.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. How effective are Meta Ads for growing a business?</summary>
                        <div class="faq-content">
                            <p>
                                Meta Ads deliver strong results by combining massive reach, precise targeting, and engaging
                                ad formats that drive leads and sales.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. What types of ads can I run on Meta platforms?</summary>
                        <div class="faq-content">
                            <p>
                                You can run image ads, video ads, carousel ads, story ads, reel ads, and product catalog ads
                                depending on your goals.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Can Meta Ads help with retargeting customers?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, Meta Ads allow retargeting website visitors, app users, past customers, and engaged
                                audiences to improve conversions.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. Do you handle ad creatives and copywriting?</summary>
                        <div class="faq-content">
                            <p>Yes, we create compelling visuals and copy designed to improve click-through rates and
                                overall campaign performance.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. How do you measure the success of Meta Ads campaigns?</summary>
                        <div class="faq-content">
                            <p>
                                We track conversions, leads, sales, cost metrics, and audience behavior to optimize results
                                and provide transparent reporting.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>
@endif


{{-- Dynamic content --}}



@if(!empty($content['trust']) && !empty($content['growth']))
<section class="section dm-dual-section">
    <div class="container">

        <div class="dm-dual-grid">

            {{-- LEFT (TRUST BOX) --}}
            <div class="dm-dual-left">
                <h2 class="dm-dual-title">
                    {{ $content['trust']['title'] }}
                </h2>

                <p class="dm-dual-desc">
                    {{ $content['trust']['description'] }}
                </p>
            </div>

            {{-- RIGHT (GROWTH CONTENT) --}}
            <div class="dm-dual-right">

                <h3 class="dm-dual-heading">
                    {{ $content['growth']['title'] }}
                </h3>

                <p class="dm-dual-text">
                    {{ $content['growth']['description'] }}
                </p>

                <div class="dm-dual-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['growth']['cta'] }}
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['services_glance']))
<section class="section dm-glance-section">
    <div class="container">

        <div class="section-header">
            <h2>{{ $content['services_glance']['title'] }}</h2>
        </div>

        <div class="dm-glance-grid">

            @foreach($content['services_glance']['items'] as $item)
                <a href="{{ route($item['route']) }}" class="dm-glance-card">

                    <div class="dm-glance-content">
                        <h3 class="dm-glance-title">
                            {{ $item['title'] }}
                        </h3>

                        <span class="dm-glance-link">
                            {{ strtoupper($item['cta']) }} →
                        </span>
                    </div>

                </a>
            @endforeach

        </div>

    </div>
</section>
@endif
@if(!empty($content['international']))
<section class="section section-alt">
    <div class="container">

        <div class="dm-intl-box">

            <div class="dm-intl-left">
              <div class="dm-intl-icon">
            <i class="ri-information-line"></i>
        </div>
            </div>

            <div class="dm-intl-content">
                <h2>{{ $content['international']['title'] }}</h2>
                <p>{{ $content['international']['description'] }}</p>
            </div>

            <div class="dm-intl-action">
                <a href="/contact-us" class="btn btn-primary">
                    {{ $content['international']['cta'] }}
                </a>
            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['complete_services']))
<section class="section dm-complete-section">
    <div class="container">

        <div class="dm-complete-grid">

            {{-- LEFT CONTENT --}}
            <div class="dm-complete-left">

                <h2 class="dm-complete-title">
                    {{ $content['complete_services']['title'] }}
                </h2>

                <p class="dm-complete-text">
                    {{ $content['complete_services']['intro'] }}
                </p>

                <p class="dm-complete-sub">
                    {{ $content['complete_services']['sub_intro'] }}
                </p>

                <ul class="dm-complete-list">
                    @foreach($content['complete_services']['list'] as $item)
                        <li>
                            <span class="dm-complete-check"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <p class="dm-complete-bottom">
                    {{ $content['complete_services']['bottom_text'] }}
                </p>

                <div class="dm-complete-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['complete_services']['cta'] }}
                    </a>
                </div>

            </div>

            {{-- RIGHT IMAGE --}}
            <div class="dm-complete-right">
                <img src="{{ asset('assets/images/digitalmark/meta-ads-services.webp') }}" alt="Digital Marketing Services">
            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['data_driven']))
<section class="section section-alt dm-insight-section">
    <div class="container">

        <div class="dm-insight-grid">

            {{-- LEFT IMAGE --}}
            <div class="dm-insight-media">
                <img src="{{ asset('assets/images/digitalmark/best-meta-ads-services.webp') }}" alt="Digital Strategy">
            </div>

            {{-- RIGHT CONTENT --}}
            <div class="dm-insight-content">

                <h2 class="dm-insight-title">
                    {{ $content['data_driven']['title'] }}
                </h2>

                <p class="dm-insight-text">
                    {{ $content['data_driven']['intro'] }}
                </p>

                <p class="dm-insight-sub">
                    {{ $content['data_driven']['sub_intro'] }}
                </p>

                <ul class="dm-insight-list">
                    @foreach($content['data_driven']['list'] as $item)
                        <li>
                            <span class="dm-insight-mark"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <p class="dm-insight-bottom">
                    {{ $content['data_driven']['bottom_text'] }}
                </p>

                <div class="dm-insight-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['data_driven']['cta'] }}
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
@endif

@if(!empty($content['affordable']))
<section class="section dm-affordable-section">
    <div class="container">

        <div class="dm-affordable-grid">

            {{-- LEFT CONTENT --}}
            <div class="dm-affordable-content">

                <h2 class="dm-affordable-title">
                    {{ $content['affordable']['title'] }}
                </h2>

                <p class="dm-affordable-text">
                    {{ $content['affordable']['intro'] }}
                </p>

                <p class="dm-affordable-sub">
                    {{ $content['affordable']['sub_intro'] }}
                </p>

                <ul class="dm-affordable-list">
                    @foreach($content['affordable']['list'] as $item)
                        <li>
                            <span class="dm-affordable-icon"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <p class="dm-affordable-bottom">
                    {{ $content['affordable']['bottom_text'] }}
                </p>

                <div class="dm-affordable-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['affordable']['cta'] }}
                    </a>
                </div>

            </div>

            {{-- RIGHT IMAGE --}}
            <div class="dm-affordable-media">
                <img src="{{ asset('assets/images/digitalmark/meta-ads.webp') }}" alt="Affordable Services">
            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['why_choose']) && !empty($content['promise']))
<section class="section dm-trust-section">
    <div class="container">

        <div class="dm-trust-grid">

            {{-- LEFT (WHY CHOOSE) --}}
            <div class="dm-trust-left">

                <h2 class="dm-trust-title">
                    {{ $content['why_choose']['title'] }}
                </h2>

                <p class="dm-trust-text">
                    {{ $content['why_choose']['description_1'] }}
                </p>

                <p class="dm-trust-text">
                    {{ $content['why_choose']['description_2'] }}
                </p>

                <div class="dm-trust-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['why_choose']['cta'] }}
                    </a>
                </div>

            </div>

            {{-- RIGHT (PROMISE) --}}
            <div class="dm-trust-right">

                <h3 class="dm-trust-subtitle">
                    {{ $content['promise']['title'] }}
                </h3>

                <ul class="dm-trust-list">
                    @foreach($content['promise']['items'] as $item)
                        <li>
                            <span class="dm-trust-check"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>

    </div>
</section>
@endif
 <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Meta Ads Audit</h2>
                <p>
                    Tell us about your brand and we&apos;ll send tailored recommendations to improve your Meta campaigns.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="meta_ads_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="meta_name">Full Name</label>
                        <input type="text" id="meta_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="meta_email">Email Address</label>
                        <input type="email" id="meta_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="meta_company">Brand / Company</label>
                        <input type="text" id="meta_company" name="payload[brand_company]"
                            placeholder="Your brand or company name">
                    </div>

                    <div class="form-field">
                        <label for="meta_spend">Approx. Monthly Ad Spend</label>
                        <input type="text" id="meta_spend" name="payload[monthly_ad_spend]"
                            placeholder="e.g. £3k–£15k">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="meta_message">What would you like to improve?</label>
                        <textarea id="meta_message" name="message" rows="4"
                            placeholder="Targeting, lead quality, ROAS, creative performance, etc." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit Request</button>
            </form>
        </div>
    </section>

@if(!empty($content['faq']['items']))
<section class="section section-alt section-faq" id="faq">
    <div class="container">

        <div class="section-header">
            <h2>{{ $content['faq']['title'] }}</h2>
        </div>

        <div class="faq-wrap">
            <div class="faq-list">

                @foreach($content['faq']['items'] as $faq)
                    <details class="faq-item">
                        <summary>{{ $faq['q'] }}</summary>

                        <div class="faq-content">
                            <p>{{ $faq['a'] }}</p>
                        </div>
                    </details>
                @endforeach

            </div>
        </div>

    </div>
</section>
@endif



@endsection

