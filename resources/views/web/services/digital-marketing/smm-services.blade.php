@extends('layouts.cloudtech')

@section('title', 'Social Media Marketing Agency UK | Marketing & Advertising')
@section('meta_title', 'Social Media Marketing Agency UK | Marketing & Advertising.')
@section('meta_description', 'Social media marketing agency UK offering management, advertising and strategy on
    Facebook, Instagram and TikTok to grow traffic, leads and sales online UK now.')
@section('meta_keywords', 'social media marketing agency UK, social media management UK, Facebook marketing UK, Instagram marketing UK, TikTok marketing UK, social media advertising UK, content creation UK, community management UK, social strategy UK')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/smm/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/digitalMarketing/smm/js/script.js') }}" defer></script>
    @endpush
@section('content')


    <!-- HERO -->
    <section class="hero smm-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Social Media Marketing</p>
                <h1>Social Media Marketing Services</h1>
                <p class="hero-subtitle">
                    Boost your brand visibility engage your audience and drive real business results with strategic social
                    media marketing tailored to your goals across all major platforms.
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-accent jsGetAudit" data-audit-type="social-media-audit">Get
                        Social Media Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Strategy Call</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section section-benefits" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Benefits of Social Media Marketing</h2>
                <p>Boost visibility, engagement, and customer growth online.</p>
            </div>

            <div class="grid grid-4 benefits-grid benefits-grid-ui">
                <article class="benefit-card benefit-card-ui">
                    <div class="benefit-icon" aria-hidden="true">
                        <i data-lucide="megaphone"></i>
                    </div>
                    <h3>Brand Awareness</h3>
                    <p>Increase your brand’s recognition and reach new audiences fast.</p>
                </article>

                <article class="benefit-card benefit-card-ui">
                    <div class="benefit-icon" aria-hidden="true">
                        <i data-lucide="heart-handshake"></i>
                    </div>
                    <h3>Engagement</h3>
                    <p>Build stronger connections through meaningful interactions daily.</p>
                </article>

                <article class="benefit-card benefit-card-ui">
                    <div class="benefit-icon" aria-hidden="true">
                        <i data-lucide="message-circle"></i>
                    </div>
                    <h3>Customer Service</h3>
                    <p>Deliver quick responses and support directly through social platforms.</p>
                </article>

                <article class="benefit-card benefit-card-ui">
                    <div class="benefit-icon" aria-hidden="true">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <h3>Lead Generation</h3>
                    <p>Capture high-quality leads using targeted social media strategies.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- PLATFORMS -->
    <section class="section section-platforms" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>Social Media Platforms We Manage</h2>
                <p>We manage top social platforms to grow your brand and engage customers.</p>
            </div>

            <div class="grid grid-3 platform-grid">
                <article class="card platform-card">
                    <h3>Facebook</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/smm/images/facebook.webp') }}"
                        alt="Facebook"title="Facebook" aria-label="Facebook" aria-hidden="true" class="platform-icon">
                    <p class="platform-meta">2.9B+ users</p>
                    <p>Grow brand presence with targeted Facebook marketing.</p>
                    <ul>
                        <li>Audience Growth</li>
                        <li>Targeted Advertising</li>
                        <li>Content Posting</li>
                        <li>Reach Expansion</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Instagram</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/smm/images/instagram.webp') }}" alt="Instagram"
                        title="Instagram" aria-label="Instagram" aria-hidden="true" class="platform-icon">
                    <p class="platform-meta">2B+ users</p>
                    <p>Boost engagement with creative Instagram content strategies.</p>
                    <ul>
                        <li>Profile Growth</li>
                        <li>Reels Creation</li>
                        <li>Ad Campaigns</li>
                        <li>Trend Optimization</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>LinkedIn</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/smm/images/linkedin.webp') }}" alt="LinkedIn"
                        title="LinkedIn" aria-label="LinkedIn" aria-hidden="true" class="platform-icon">
                    <p class="platform-meta">900M+ users</p>
                    <p>Build authority and generate B2B leads on LinkedIn.</p>
                    <ul>
                        <li>Lead Generation</li>
                        <li>Professional Posting</li>
                        <li>LinkedIn Ads</li>
                        <li>Brand Positioning</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Twitter</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/smm/images/twitter.webp') }}" alt="Twitter"
                        title="Twitter" aria-label="Twitter" aria-hidden="true" class="platform-icon">
                    <p class="platform-meta">450M+ users</p>
                    <p>Increase visibility and real time engagement on Twitter.</p>
                    <ul>
                        <li>Follower Growth</li>
                        <li>Trend Marketing</li>
                        <li>Reach Improvement</li>
                        <li>Post Engagement</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>TikTok</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/smm/images/tiktok.webp') }}" alt="TikTok"
                        title="TikTok" aria-label="TikTok" aria-hidden="true" class="platform-icon">
                    <p class="platform-meta">1B+ users</p>
                    <p>Create viral short form content to grow your TikTok audience.</p>
                    <ul>
                        <li>Community Growth</li>
                        <li>Ad Promotion</li>
                        <li>Trend Content</li>
                        <li>Viral Strategy</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>YouTube</h3>
                    <img src="{{ asset('assets/services/digitalMarketing/smm/images/youtube.webp') }}" alt="YouTube"
                        title="YouTube" aria-label="YouTube" aria-hidden="true" class="platform-icon">
                    <p class="platform-meta">2.7B+ users</p>
                    <p>Grow your brand with optimized video content on YouTube.</p>
                    <ul>
                        <li>Channel Growth</li>
                        <li>Video SEO</li>
                        <li>Video Ads</li>
                        <li>View Generation</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTENT TYPES -->
    <section class="section section-alt section-content-types">
        <div class="container">
            <div class="section-header">
                <h2>Content Types We Create</h2>
                <p>We create engaging visual, written, video, and interactive content for all platforms.</p>
            </div>

            <div class="grid grid-4 content-type-grid content-type-grid-ui">
                <article class="content-type-card content-type-card-ui">
                    <div class="content-type-icon" aria-hidden="true">
                        <i data-lucide="image"></i>
                    </div>
                    <h3>Visual Content</h3>
                    <p>Eye-catching graphics that boost engagement.</p>
                </article>

                <article class="content-type-card content-type-card-ui">
                    <div class="content-type-icon" aria-hidden="true">
                        <i data-lucide="video"></i>
                    </div>
                    <h3>Video Content</h3>
                    <p>High-impact videos for stronger brand storytelling.</p>
                </article>

                <article class="content-type-card content-type-card-ui">
                    <div class="content-type-icon" aria-hidden="true">
                        <i data-lucide="file-text"></i>
                    </div>
                    <h3>Written Content</h3>
                    <p>Captivating captions, posts, and social copy.</p>
                </article>

                <article class="content-type-card content-type-card-ui">
                    <div class="content-type-icon" aria-hidden="true">
                        <i data-lucide="layers"></i>
                    </div>
                    <h3>Interactive Content</h3>
                    <p>Polls, quizzes, and content that drives actions.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- COMPLETE SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="services-layout">
                <div class="services-copy">
                    <h2>Complete Social Media Services</h2>
                    <p class="services-intro">
                        Full service social media solutions to elevate your brand online.
                    </p>
                    <ul class="services-list">
                        <li>Content Creation and Development </li>
                        <li>Social Strategy and Planning </li>
                        <li>Page Optimization and Enhancement </li>
                        <li>Paid Campaigns and Promotions </li>
                        <li>Community Support and Engagement </li>
                        <li>Influencer Ads and Collaborations </li>
                        <li>Social media analytics and reporting</li>
                        <li>Brand Monitoring and Reputation Tracking </li>
                        <li>Competitor Insights and Analysis </li>
                        <li>Analytics Reports and Performance Tracking </li>
                        <li>Creative Design and Visual Branding </li>
                    </ul>
                </div>
                <div class="services-panel">
                    <div class="services-panel-inner">
                        <p class="services-label">Campaign Insights</p>
                        <p class="services-text">
                            Dive into your campaign performance across all social media platforms. See what's
                            driving engagement, where your audience is growing, and which platforms are
                            performing best.
                        </p>
                        <p class="services-meta">
                            Our campaign overview provides actionable insights to help you optimize your social media
                            strategy and drive real business results.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAIL SERVICE CARDS -->
    <section class="section section-alt section-detail-services">
        <div class="container">
            <div class="section-header">
                <h2>Our Social Media Services</h2>
                <p>
                    We provide end to end social media management including content creation strategy ads community
                    management analytics and brand building across all major platforms.
                </p>
            </div>

            <div class="grid grid-4 detail-services-grid">
                <article class="card detail-service-card">
                    <h3>Content Creation</h3>
                    <p>
                        We produce high quality graphics videos and posts designed to engage users strengthen your brand
                        message and increase visibility across platforms.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Strategy &amp; Planning</h3>
                    <p>
                        We develop data driven social strategies tailored to your goals ensuring every post and campaign
                        supports measurable growth.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Community Management</h3>
                    <p>
                        We build meaningful interactions by responding to messages comments and engaging your audience to
                        strengthen relationships.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Paid Advertising</h3>
                    <p>
                        We run targeted ad campaigns that generate leads increase sales and improve ROI across all major
                        social platforms.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Detailed reports track performance engagement reach and conversions to guide ongoing optimization.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Influencer Marketing</h3>
                    <p>
                        We connect your brand with influencers who amplify reach build trust and attract new audiences.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Content Scheduling</h3>
                    <p>
                        Consistent posting schedules keep your audience engaged and maintain a strong brand presence.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Brand Monitoring</h3>
                    <p>
                        We track brand mentions and sentiments to protect your reputation and respond proactively.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our Social Media Process</h2>
                <p>A structured process to plan create manage and grow your social presence.</p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Strategy Development</h3>
                    <p>
                        We define goals identify audiences and build a winning content roadmap.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Content Creation</h3>
                    <p>
                        We craft engaging visuals videos and copy tailored to your brand.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Community Management</h3>
                    <p>
                        We interact with your audience to build trust and long term loyalty.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Analytics &amp; Optimisation</h3>
                    <p>
                        We measure performance and refine strategies for continuous growth.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!-- What Is Social Media Marketing?  -->
    <section class="section section-national-about" id="about-meta_ads-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Is Social Media Marketing?</h2>

                    <p>
                        Social media marketing is the strategic use of social platforms to increase brand visibility, engage
                        audiences, and generate leads or sales. It combines content creation, community engagement, paid
                        advertising, and data analysis to build a strong online presence that supports real business growth.
                    </p>

                    <p>
                        A successful social media strategy ensures your brand stays visible, relevant, and connected to your
                        audience across the platforms they use every day.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>Content Strategy & Brand Voice </h3>

                    <p>
                        We don’t post randomly. We build a content plan that includes:
                    </p>

                    <ul>
                        <li>Educational posts that build authority</li>
                        <li>Promotional posts that drive action</li>
                        <li>Engaging posts that encourage interaction</li>
                        <li>Trend-based content that increases reach</li>
                    </ul>

                    <p class="">
                        A consistent brand voice across all platforms strengthens recognition and trust.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Why Social Media Marketing Is Essential for Modern Brands -->
    <section class="section section-national-growth" id="meta_ads-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why Social Media Marketing Is Essential for Modern Brands </h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Customers now research brands on social media before making decisions. An active, engaging presence
                    builds credibility and keeps your brand top of mind.
                </p>

                <p>
                    With the right strategy, social media becomes a powerful channel for awareness, engagement, and lead
                    generation that supports your overall digital marketing efforts.
                </p>
            </div>

        </div>
    </section>
    <!-- CTA -->
    <section class="section smm-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner smm-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow Your Social Media Presence?</h2>
                    <p>
                        Get a free social media audit and discover how we can help you build a thriving
                        online community.
                    </p>
                </div>
                <div class="cta-actions smm-cta-actions">
                    <a href="#contact-form" class="btn btn-accent">Get Social Media Audit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Social Media Audit</h2>
                <p>
                    Tell us about your brand and we&apos;ll send tailored recommendations to improve your
                    social media presence.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="social_media_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="smm_name">Full Name</label>
                        <input type="text" id="smm_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="smm_email">Email Address</label>
                        <input type="email" id="smm_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="smm_brand">Brand / Company</label>
                        <input type="text" id="smm_brand" name="payload[brand_company]"
                            placeholder="Your brand or company name">
                    </div>

                    <div class="form-field">
                        <label for="smm_platforms">Key Platforms</label>
                        <input type="text" id="smm_platforms" name="payload[key_platforms]"
                            placeholder="e.g. Instagram, LinkedIn, TikTok">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="smm_message">What would you like to improve?</label>
                        <textarea id="smm_message" name="message" rows="4" placeholder="Engagement, followers, leads, community, etc."
                            required></textarea>
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
                <h2>Social Media Marketing Service FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. Why is social media marketing important for my business?</summary>
                        <div class="faq-content">
                            <p>
                                It increases brand visibility attracts customers builds trust and drives continuous growth.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. Which social media platforms should my business use?</summary>
                        <div class="faq-content">
                            <p>
                                We recommend platforms based on your audience Facebook Instagram LinkedIn TikTok Twitter or
                                YouTube.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. How long does it take to see social media results?</summary>
                        <div class="faq-content">
                            <p>
                                Most businesses start noticing engagement and reach improvements within 30 to 60 days.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Do you create content for my social media accounts?</summary>
                        <div class="faq-content">
                            <p>
                                Yes we handle all content creation graphics videos captions and more.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5.Can you run paid ads on social media for my business?</summary>
                        <div class="faq-content">
                            <p>Absolutely. We manage targeted ad campaigns to increase leads sales and brand exposure.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Will I receive reports on my social media performance?</summary>
                        <div class="faq-content">
                            <p>
                                Yes we provide detailed analytics showing growth engagement reach and results.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection
