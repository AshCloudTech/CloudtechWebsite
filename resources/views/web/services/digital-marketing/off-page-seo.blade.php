@extends('layouts.cloudtech')

@section('title', '')
@section('meta_title', '')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/off-page/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/off-page/js/script.js') }}" defer></script>
@endpush
@section('content')

    <!-- HERO -->
    <section class="hero offpage-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Off-Page SEO Services in UK</p>
                <h1>Professional Off-Page<br>&amp; SEO Services in the UK</h1>
                <p class="hero-subtitle">
                    Build your online authority and dominate search rankings with our expert off-page SEO services. We create high-quality backlinks, boost your brand reputation, and increase domain authority through strategic link building, content marketing, and digital PR campaigns.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>
            </div>

            <div class="hero-panel">
                <div class="hero-panel-inner">
                    <p class="hero-panel-label">Authority Snapshot</p>
                    <p class="hero-panel-text">
                        We build authority with a white-hat approach: relevant links, digital PR, content distribution and brand citations—measured with clear reporting and KPIs.
                    </p>
                    <ul class="hero-panel-list">
                        <li>Backlink profile & toxicity</li><li>High-authority placements</li><li>Brand mentions & citations</li><li>Reporting & growth tracking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Off-Page SEO Services in UK?</h2>
                <p>
                    Drive organic traffic from across the UK with our comprehensive off-page SEO strategies.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-quality"></div>
                    <h3>Quality Link Building</h3>
                    <p>
                        Acquire high-authority backlinks from relevant and trusted websites in your industry.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-keyword"></div>
                    <h3>Content Marketing</h3>
                    <p>
                        Strategic guest posting and content distribution on authoritative platforms.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-engagement"></div>
                    <h3>Brand Mentions</h3>
                    <p>
                        Increase brand visibility and credibility through unlinked mentions and citations.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-authority"></div>
                    <h3>Authority Building</h3>
                    <p>
                        Improve your domain authority and trust signals for better search rankings.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our Off-Page SEO Process</h2>
                <p>
                    A strategic 4-step approach to build your online authority.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="process-card">
                    <h3>Backlink Analysis</h3>
                    <p>Comprehensive audit of your current backlink profile and competitor link analysis.</p>
                </article>
                <article class="process-card">
                    <h3>Strategy Development</h3>
                    <p>Create a customized link building and outreach strategy based on your niche and goals.</p>
                </article>
                <article class="process-card">
                    <h3>Campaign Execution</h3>
                    <p>Implement white-hat link building tactics including guest posting, digital PR, and outreach.</p>
                </article>
                <article class="process-card">
                    <h3>Reporting & Analysis</h3>
                    <p>Monitor link acquisition, authority growth, and ranking improvements with clear reports.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTENT TYPES -->
<section class="section content-types" id="content-types">
    <div class="container">
        <div class="section-header">
            <h2>Content Types We Optimize</h2>
            <p>Comprehensive content SEO services for all types of business content</p>
        </div>

        <div class="ct-grid">
            <!-- Card 1 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Blog Posts &amp; Articles</h3>
                        <p>In-depth, SEO-optimized blog content that drives organic traffic</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Keyword Research</li>
                    <li>Topic Clusters</li>
                    <li>Internal Linking</li>
                    <li>Meta Optimization</li>
                </ul>
            </article>

            <!-- Card 2 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Landing Pages</h3>
                        <p>Conversion-focused landing pages optimized for search and users</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Conversion Copy</li>
                    <li>SEO Headlines</li>
                    <li>Call-to-Actions</li>
                    <li>User Experience</li>
                </ul>
            </article>

            <!-- Card 3 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Product Descriptions</h3>
                        <p>Compelling product content that ranks and sells</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>Product SEO</li>
                    <li>Feature Benefits</li>
                    <li>Schema Markup</li>
                    <li>User Reviews</li>
                </ul>
            </article>

            <!-- Card 4 -->
            <article class="ct-card">
                <div class="ct-head">
                    <div class="ct-icon" aria-hidden="true"></div>
                    <div class="ct-title">
                        <h3>Technical Content</h3>
                        <p>Expert technical content that demonstrates industry knowledge</p>
                    </div>
                </div>

                <ul class="ct-points">
                    <li>How-to Guides</li>
                    <li>Case Studies</li>
                    <li>White Papers</li>
                    <li>Technical SEO</li>
                </ul>
            </article>
        </div>
    </div>
</section>


    <!-- INCLUDED -->
    <section class="section" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What’s Included in Our Off-Page SEO Service?</h2>
                <p>
                    Comprehensive off-page strategies to enhance your website’s authority and rankings.
                </p>
            </div>

            <div class="services-layout">
                <div class="services-copy">
                    <h3>White-hat authority building (no risky shortcuts)</h3>
                    <p class="services-intro">
                        We focus on relevance, trust and long-term growth—clean link acquisition, PR and citations with measurable improvements to authority and rankings.
                    </p>
                </div>

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Included deliverables</h3>
                        <ul class="services-list">
                            <li>Complete backlink profile audit and toxic link removal</li>
                            <li>High-quality link acquisition from relevant websites</li>
                            <li>Guest posting on authoritative industry publications</li>
                            <li>Digital PR and media outreach campaigns</li>
                            <li>Brand mention monitoring and link reclamation</li>
                            <li>Social media profile optimisation and engagement</li>
                            <li>Business directory submissions and citations</li>
                            <li>Content promotion and influencer outreach</li>
                            <li>Competitor backlink analysis and gap identification</li>
                            <li>Monthly link building reports with metrics and insights</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section offpage-cta" id="cta">
        <div class="container">
            <div class="cta-inner offpage-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Build Your Online Authority?</h2>
                    <p>
                        Get a free backlink audit and see how we can boost your domain authority.
                    </p>
                </div>
                <div class="cta-actions offpage-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get Free SEO Audit</a>
                    <a href="#process" class="btn btn-outline-light">View Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our Off-Page SEO Team</h2>
                <p>
                    Share your niche and goals and we’ll recommend a safe, high-impact off-page strategy.
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
                        <label for="website">Website URL</label>
                        <input type="text" id="website" placeholder="https://">
                    </div>
                    <div class="form-field">
                        <label for="focus">Your Industry / Niche</label>
                        <input type="text" id="focus" placeholder="e.g., SaaS, healthcare, recruitment, travel, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">What’s your authority goal?</label>
                        <textarea id="message" rows="4" placeholder="More quality links, higher DA, PR placements, brand mentions, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>

@endsection