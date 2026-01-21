@extends('layouts.cloudtech')

@section('title', 'Social Media Marketing Services in the UK | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – Social Media Marketing Services in the UK')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/smm/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
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
                <h1>Build Your Brand on<br>Social Media</h1>
                <p class="hero-subtitle">
                    Connect with your audience, build brand awareness and drive business growth through
                    strategic social media marketing. We help you create engaging content and thriving
                    online communities.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-accent">Get Social Media Audit</a>
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
                <p>Why social media is essential for modern business growth</p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="benefit-card">
                    <div class="benefit-icon"></div>
                    <h3>Brand Awareness</h3>
                    <p>Increase brand visibility and reach across key social media platforms.</p>
                </article>

                <article class="benefit-card">
                    <div class="benefit-icon"></div>
                    <h3>Engagement</h3>
                    <p>Build meaningful connections with your audience through engaging content.</p>
                </article>

                <article class="benefit-card">
                    <div class="benefit-icon"></div>
                    <h3>Customer Service</h3>
                    <p>Provide timely support and build loyalty through social channels.</p>
                </article>

                <article class="benefit-card">
                    <div class="benefit-icon"></div>
                    <h3>Lead Generation</h3>
                    <p>Generate qualified leads and conversions from targeted social campaigns.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PLATFORMS -->
    <section class="section section-platforms" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>Social Media Platforms We Manage</h2>
                <p>Expert management across all major social media platforms</p>
            </div>

            <div class="grid grid-3 platform-grid">
                <article class="card platform-card">
                    <h3>Facebook</h3>
                    <p class="platform-meta">2.9B+ users</p>
                    <p>Perfect for community building and targeted advertising.</p>
                    <ul>
                        <li>Business Pages</li>
                        <li>Facebook Groups</li>
                        <li>Facebook Ads</li>
                        <li>Messenger Marketing</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Instagram</h3>
                    <p class="platform-meta">2B+ users</p>
                    <p>Visual storytelling and brand showcase platform.</p>
                    <ul>
                        <li>Feed Posts</li>
                        <li>Stories</li>
                        <li>Reels</li>
                        <li>Shopping</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>LinkedIn</h3>
                    <p class="platform-meta">900M+ users</p>
                    <p>Professional networking and B2B marketing.</p>
                    <ul>
                        <li>Company Pages</li>
                        <li>Thought Leadership</li>
                        <li>Lead Generation</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>Twitter</h3>
                    <p class="platform-meta">450M+ users</p>
                    <p>Real‑time engagement and thought leadership.</p>
                    <ul>
                        <li>Tweets &amp; Threads</li>
                        <li>Spaces &amp; Live</li>
                        <li>Customer Support</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>TikTok</h3>
                    <p class="platform-meta">1B+ users</p>
                    <p>Short‑form video content for younger audiences.</p>
                    <ul>
                        <li>Short Videos</li>
                        <li>Trending Challenges</li>
                        <li>Influencer Collaborations</li>
                    </ul>
                </article>

                <article class="card platform-card">
                    <h3>YouTube</h3>
                    <p class="platform-meta">2.7B+ users</p>
                    <p>Video marketing and educational content.</p>
                    <ul>
                        <li>Video Content</li>
                        <li>YouTube Shorts</li>
                        <li>Live Streaming</li>
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
                <p>Diverse content formats to engage your audience across all platforms</p>
            </div>

            <div class="grid grid-4 content-type-grid">
                <article class="content-type-card">
                    <div class="content-type-icon"></div>
                    <h3>Visual Content</h3>
                    <p>Images, graphics and visual storytelling.</p>
                </article>
                <article class="content-type-card">
                    <div class="content-type-icon"></div>
                    <h3>Video Content</h3>
                    <p>Engaging videos, reels and live streams.</p>
                </article>
                <article class="content-type-card">
                    <div class="content-type-icon"></div>
                    <h3>Written Content</h3>
                    <p>Captions, articles and on‑brand social copy.</p>
                </article>
                <article class="content-type-card">
                    <div class="content-type-icon"></div>
                    <h3>Interactive Content</h3>
                    <p>Polls, quizzes and user‑generated content.</p>
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
                        Full‑service social media management and marketing solutions.
                    </p>
                    <ul class="services-list">
                        <li>Social media strategy development</li>
                        <li>Content creation and curation</li>
                        <li>Social media account management</li>
                        <li>Community management and engagement</li>
                        <li>Social media advertising campaigns</li>
                        <li>Influencer marketing and partnerships</li>
                        <li>Social media analytics and reporting</li>
                        <li>Brand reputation management</li>
                        <li>Social media contest and campaign management</li>
                        <li>Cross‑platform content optimisation</li>
                        <li>Social media crisis management</li>
                        <li>Employee advocacy programs</li>
                    </ul>
                </div>
                <div class="services-panel">
                    <div class="services-panel-inner">
                        <p class="services-label">Campaign Overview</p>
                        <p class="services-text">
                            A visual snapshot of your campaigns, audience growth and engagement trends
                            across all social media platforms.
                        </p>
                        <p class="services-meta">
                            Designed for brands that want clear, data‑driven insight into what&apos;s
                            working and where to grow next.
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
                    Comprehensive social media marketing solutions designed to elevate your brand and
                    drive measurable growth.
                </p>
            </div>

            <div class="grid grid-4 detail-services-grid">
                <article class="card detail-service-card">
                    <h3>Content Creation</h3>
                    <p>
                        Professional content including graphics, videos and copywriting that resonates
                        with your audience.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Strategy &amp; Planning</h3>
                    <p>
                        Data‑driven strategies aligned to your goals, audience and industry best practices.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Community Management</h3>
                    <p>
                        Active engagement, responding to comments and messages to build relationships.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Paid Advertising</h3>
                    <p>
                        Highly targeted social ad campaigns optimised for reach, engagement and conversions.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Comprehensive performance tracking with monthly reports and clear next steps.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Influencer Marketing</h3>
                    <p>
                        Strategic collaborations with relevant influencers to amplify your brand.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Content Scheduling</h3>
                    <p>
                        Optimised posting schedules so content lands when your audience is most active.
                    </p>
                </article>
                <article class="card detail-service-card">
                    <h3>Brand Monitoring</h3>
                    <p>
                        Real‑time monitoring of brand mentions, trends and competitor activity.
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
                <p>A strategic approach to social media success.</p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Strategy Development</h3>
                    <p>
                        Develop a comprehensive social media strategy aligned with your business goals.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Content Creation</h3>
                    <p>
                        Create engaging, platform‑specific content that resonates with your audience.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Community Management</h3>
                    <p>
                        Engage with your audience and build strong community relationships.
                    </p>
                </article>
                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Analytics &amp; Optimisation</h3>
                    <p>
                        Track performance and optimise strategy based on real‑time data insights.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section smm-cta" id="cta">
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
                        <label for="brand">Brand / Company</label>
                        <input type="text" id="brand" placeholder="Your brand or company name">
                    </div>
                    <div class="form-field">
                        <label for="platforms">Key Platforms</label>
                        <input type="text" id="platforms" placeholder="e.g. Instagram, LinkedIn, TikTok">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What would you like to improve?</label>
                        <textarea id="message" rows="4" placeholder="Engagement, followers, leads, community, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection