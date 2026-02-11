@extends('layouts.cloudtech')

@section('title', '')
@section('meta_title', '')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/off-page/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
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
                <h1>Professional Off-Page SEO Services in the UK </h1>
                <p class="hero-subtitle">
                    Build website authority and improve search rankings with expert Off-Page SEO services. We strengthen
                    your domain through high-quality backlinks, link building strategies, guest posting, citation building,
                    brand mentions, and authority signals that improve trust and organic visibility.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>
            </div>

            <!-- <div class="hero-panel">
                    <div class="hero-panel-inner">
                        <p class="hero-panel-label">Authority Snapshot</p>
                        <p class="hero-panel-text">
                            We build authority with a white-hat approach: relevant links, digital PR, content distribution and brand citations—measured with clear reporting and KPIs.
                        </p>
                        <ul class="hero-panel-list">
                            <li>Backlink profile & toxicity</li><li>High-authority placements</li><li>Brand mentions & citations</li><li>Reporting & growth tracking</li>
                        </ul>
                    </div>
                </div> -->
        </div>
    </section>

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Off-Page SEO Services in UK?</h2>
                <p>
                    Drive organic traffic and increase domain authority with advanced off-page optimisation strategies.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-quality"></div>
                    <h3>High-Quality Link Building </h3>
                    <p>
                        Acquire authoritative backlinks from relevant and trusted websites.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-keyword"></div>
                    <h3>Guest Posting & Outreach </h3>
                    <p>
                        Manual outreach and guest posting on niche-relevant blogs for SEO value.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-engagement"></div>
                    <h3>Citation & Directory Submissions </h3>
                    <p>
                        Build local citations and business listings for stronger local SEO signals.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-authority"></div>
                    <h3>Improve Domain Authority</h3>
                    <p>
                        Strengthen website trust, authority, and ranking potential in Google.
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
                    A strategic approach to build authority outside your website.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="process-card">
                    <h3>Backlink Audit</h3>
                    <p> Analyse existing backlinks, remove toxic links, and identify opportunities.</p>
                </article>
                <article class="process-card">
                    <h3>Link Building Strategy</h3>
                    <p>Plan niche-relevant backlinks, guest posts, and authority links.</p>
                </article>
                <article class="process-card">
                    <h3>Manual Outreach Implementation</h3>
                    <p>Perform blogger outreach, content placements, and link acquisition.</p>
                </article>
                <article class="process-card">
                    <h3>Performance Tracking</h3>
                    <p>Monitor backlinks, domain authority, and keyword ranking improvements.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTENT TYPES -->
    <section class="section content-types" id="content-types">
        <div class="container">
            <div class="section-header">
                <h2>Off-Page SEO Activities We Perform </h2>
                <p>Comprehensive off-page SEO techniques to boost authority and visibility.</p>
            </div>

            <div class="ct-grid">
                <!-- Card 1 -->
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
                        <div class="ct-title">
                            <h3>Guest Posting on Authority Websites</h3>
                            <p>Guest posts on niche blogs for contextual do-follow backlinks via outreach.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Niche-relevant blogs</li>
                        <li>Contextual backlinks</li>
                        <li>Do-follow links</li>
                        <li>Manual outreach</li>
                    </ul>
                </article>

                <!-- Card 2 -->
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
                        <div class="ct-title">
                            <h3>Business Listings & Citations</h3>
                            <p>Accurate business listings and citations to strengthen local SEO and NAP consistency.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Local directory submissions</li>
                        <li>Google Business citations</li>
                        <li>NAP consistency</li>
                        <li>Local SEO signals</li>
                    </ul>
                </article>

                <!-- Card 3 -->
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
                        <div class="ct-title">
                            <h3>Social Bookmarking & Brand Mentions</h3>
                            <p>Social sharing and brand mentions to generate referral traffic and authority signals.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Social sharing platforms</li>
                        <li>Brand signals</li>
                        <li>Referral traffic</li>
                        <li>Content promotion</li>
                    </ul>
                </article>

                <!-- Card 4 -->
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
                        <div class="ct-title">
                            <h3>Forum & Community Engagement</h3>
                            <p>Relevant forum participation to build trust and maintain a natural backlink profile.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Relevant forum links</li>
                        <li>Community participation</li>
                        <li>Trust building</li>
                        <li>Natural link profile</li>
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
                    Complete off-page optimisation for authority and ranking growth.
                </p>
            </div>

            <div class="services-layout">
                <!-- <div class="services-copy">
                        <h3>White-hat authority building (no risky shortcuts)</h3>
                        <p class="services-intro">
                            We focus on relevance, trust and long-term growth—clean link acquisition, PR and citations with measurable improvements to authority and rankings.
                        </p>
                    </div> -->

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Included deliverables</h3>
                        <ul class="services-list">
                            <li> Backlink profile audit and toxic link removal</li>
                            <li>High-quality manual link building</li>
                            <li>Guest posting and blogger outreach</li>
                            <li> Local citation and directory submissions</li>
                            <li>Social bookmarking and brand mentions</li>
                            <li>Forum submissions and community links</li>
                            <li>Competitor backlink analysis</li>
                            <li>Monthly backlink and authority reports</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHAT ARE OFF-PAGE SEO SERVICES -->
<section class="section section-national-about" id="about-offpage-seo">
    <div class="container">
        <div class="national-about-wrapper">

            <div class="national-about-content">
                <h2>What Are Off-Page SEO Services?</h2>

                <p>
                    Off-page SEO services focus on improving your website’s authority, trust, and reputation through signals that exist outside your website. The most important of these signals are high-quality backlinks from relevant, authoritative websites.
                </p>

                <p>
                    Search engines use backlinks, brand mentions, citations, and online reputation to evaluate how trustworthy and credible your website is. A strong off-page SEO strategy helps your website earn these signals naturally and safely, leading to higher rankings and stronger organic visibility.
                </p>
            </div>

            <div class="national-about-highlight">
                <h3>Anchor Text & Natural Link Profile Strategy</h3>

                <p>
                    A successful off-page SEO campaign requires a balanced and natural backlink profile.
                </p>

                <p>
                    We carefully manage:
                </p>

                <ul>
                    <li>Branded anchor texts</li>
                    <li>Partial match keywords</li>
                    <li>Generic anchors (e.g. “click here”)</li>
                    <li>Naked URLs</li>
                    <li>Contextual placements within relevant content</li>
                </ul>

                <p class="national-about-note">
                    This prevents over-optimisation and ensures long-term ranking stability.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- WHY OFF-PAGE SEO IS CRITICAL -->
<section class="section section-national-growth" id="offpage-growth">
    <div class="container">

        <div class="section-header">
            <h2>Why Off-Page SEO Is Critical for Competitive Keywords</h2>
        </div>

        <div class="national-growth-card">
            <p>
                For competitive keywords, on-page and technical SEO alone are not enough. Google needs to see external proof that your website is trusted within your industry.
            </p>

            <p>
                Off-page SEO provides this proof through authority links, brand mentions, and reputation signals that increase your domain strength and ranking potential across all pages.
            </p>
        </div>

    </div>
</section>


    <!-- CTA -->
    <section class="section offpage-cta" id="cta">
        <div class="container">
            <div class="cta-inner offpage-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Build Your Website Authority with Off-Page SEO?</h2>
                    <p>
                        Get a free Off-Page SEO audit and improve your domain authority and rankings.
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

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_offpage_enquiry">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_offpage_name">Full Name</label>
                        <input type="text" id="seo_offpage_name" name="name" placeholder="Enter your name"
                            required>
                    </div>

                    <div class="form-field">
                        <label for="seo_offpage_email">Email Address</label>
                        <input type="email" id="seo_offpage_email" name="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_offpage_website">Website URL</label>
                        <input type="url" id="seo_offpage_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="seo_offpage_industry">Your Industry / Niche</label>
                        <input type="text" id="seo_offpage_industry" name="payload[industry_niche]"
                            placeholder="e.g., SaaS, healthcare, recruitment, travel, etc.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_offpage_message">What’s your authority goal?</label>
                        <textarea id="seo_offpage_message" name="message" rows="4"
                            placeholder="More quality links, higher DA, PR placements, brand mentions, etc." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>


@endsection
