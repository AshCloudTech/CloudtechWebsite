@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – CloudRecruit')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/cloud-recruit/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/cloud-recruit/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero recruit-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">CloudRecruit</p>
                <h1>Digital Recruitment Platforms<br>for Agencies &amp; In‑House Teams</h1>
                <p class="hero-subtitle">
                    Career sites, applicant tracking, and candidate engagement tools
                    designed to help recruiters attract, manage, and place talent faster.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#platforms" class="btn btn-lg btn-ghost hero-ghost-light">View Platforms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- RECRUITMENT SOLUTIONS OVERVIEW -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Recruitment Technology Solutions</h2>
                <p>
                    CloudRecruit helps recruitment agencies and internal talent teams transform
                    their digital candidate and client experience from first visit to hire.
                </p>
            </div>

            <div class="grid grid-3 services-grid recruit-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-orange">💼</div>
                    <h3>Recruitment Websites</h3>
                    <p>
                        High-performing career and recruitment websites with job search,
                        sector pages, and conversion-optimised candidate journeys.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">🔍</div>
                    <h3>Job Search &amp; Matching</h3>
                    <p>
                        Advanced job search, filtering, and recommendations to help candidates
                        find the right roles more quickly.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📥</div>
                    <h3>Application &amp; CV Capture</h3>
                    <p>
                        Seamless application flows with CV upload, parsing, and profile creation
                        under your brand.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">🤝</div>
                    <h3>Client &amp; Hiring Manager Portals</h3>
                    <p>
                        Dedicated areas for clients to review shortlists, feedback, and progress
                        on active roles.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">📲</div>
                    <h3>Candidate Engagement</h3>
                    <p>
                        Email and SMS journeys, talent pools, and branded candidate portals
                        to keep talent warm.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Recruitment Analytics</h3>
                    <p>
                        Dashboards for applications, sources, time-to-hire, and consultant performance.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PLATFORMS / MODULES -->
    <section class="section section-alt" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>Platforms for Modern Recruitment Teams</h2>
                <p>
                    Whether you’re a niche recruiter or a multi-branch agency, CloudRecruit
                    can be configured around your workflows and sectors.
                </p>
            </div>

            <div class="grid grid-3 recruit-platform-grid">
                <article class="card recruit-feature-card">
                    <h3>For Recruitment Agencies</h3>
                    <ul class="feature-list">
                        <li>Job board &amp; sector landing pages</li>
                        <li>Consultant profile &amp; desk pages</li>
                        <li>Multi-brand and multi-location support</li>
                        <li>Integration-ready with existing CRMs</li>
                    </ul>
                </article>

                <article class="card recruit-feature-card">
                    <h3>For In‑House Talent Teams</h3>
                    <ul class="feature-list">
                        <li>Employer brand career sites</li>
                        <li>Internal &amp; external vacancies</li>
                        <li>Hiring manager collaboration areas</li>
                        <li>Talent pool &amp; silver medalist campaigns</li>
                    </ul>
                </article>

                <article class="card recruit-feature-card">
                    <h3>For Staffing &amp; Temp Agencies</h3>
                    <ul class="feature-list">
                        <li>High‑volume job search</li>
                        <li>Shift &amp; assignment workflows</li>
                        <li>Candidate availability capture</li>
                        <li>Rapid application &amp; onboarding flows</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>CloudRecruit Solutions &amp; Pricing</h2>
                <p>
                    Choose a starting point that matches where your recruitment brand is today
                    and scale as your needs grow.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Recruitment Website -->
                <article class="card pricing-card">
                    <h3>Recruitment Website</h3>
                    <p class="pricing-price">From £3,499</p>
                    <p class="pricing-subtitle">
                        Perfect for specialist agencies and boutique recruiters.
                    </p>
                    <ul class="pricing-list">
                        <li>Custom recruitment website</li>
                        <li>Job search &amp; application forms</li>
                        <li>Sector &amp; disciplines pages</li>
                        <li>Blog &amp; content library</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Job Board &amp; Search -->
                <article class="card pricing-card">
                    <h3>Job Board &amp; Search</h3>
                    <p class="pricing-price">From £6,999</p>
                    <p class="pricing-subtitle">
                        Enhanced search and candidate journeys for growing teams.
                    </p>
                    <ul class="pricing-list">
                        <li>Advanced job filtering &amp; alerts</li>
                        <li>Candidate profile creation</li>
                        <li>Source &amp; campaign tracking</li>
                        <li>Integration-ready API layer</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Full Recruitment Platform -->
                <article class="card pricing-card">
                    <h3>Full Recruitment Platform</h3>
                    <p class="pricing-price">From £12,999</p>
                    <p class="pricing-subtitle">
                        End-to-end web, search, and engagement for ambitious recruiters.
                    </p>
                    <ul class="pricing-list">
                        <li>Website + job search + portals</li>
                        <li>Candidate &amp; client workspaces</li>
                        <li>Automation journeys &amp; reporting</li>
                        <li>Multi-brand &amp; multi-region support</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>
            </div>
        </div>
    </section>

    <!-- SUCCESS STORIES -->
    <section class="section section-alt" id="success">
        <div class="container">
            <div class="section-header">
                <h2>Recruitment Success Stories</h2>
                <p>
                    Discover how recruitment agencies and talent teams have used CloudRecruit
                    to stand out, scale up, and hire faster.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- Tech Recruitment Agency -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Tech Recruitment Agency</h3>
                    <p>
                        Rebuilt their brand, website, and job search experience around growth in niche tech roles.
                    </p>
                    <ul class="success-metrics">
                        <li>50% increase in quality applications</li>
                        <li>More direct candidate traffic vs job boards</li>
                        <li>Improved consultant pipeline visibility</li>
                        <li>Higher client engagement with shortlists</li>
                    </ul>
                </article>

                <!-- Healthcare Staffing Provider -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Healthcare Staffing Provider</h3>
                    <p>
                        Implemented high‑volume job search and mobile application flows for clinical roles.
                    </p>
                    <ul class="success-metrics">
                        <li>Faster time-to-fill critical shifts</li>
                        <li>Streamlined candidate onboarding</li>
                        <li>Reduced drop‑off in application journeys</li>
                        <li>Better reporting across regions</li>
                    </ul>
                </article>

                <!-- In‑House Talent Team -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>In‑House Talent Team</h3>
                    <p>
                        Launched a new employer brand career site and talent pool strategy.
                    </p>
                    <ul class="success-metrics">
                        <li>35% reduction in agency spend</li>
                        <li>Improved candidate experience ratings</li>
                        <li>Increased direct hires year‑on‑year</li>
                        <li>Better hiring manager collaboration</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section recruit-benefits" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Why Recruiters Choose CloudRecruit</h2>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card">
                    <h3>Recruitment‑First UX</h3>
                    <p>
                        Designed around how candidates search, apply, and engage with recruitment brands.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>API &amp; CRM Friendly</h3>
                    <p>
                        Built to connect with leading CRMs and ATS platforms via modern APIs.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Multi‑Brand Ready</h3>
                    <p>
                        Support multiple sectors, brands, and regions from one core platform.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Data &amp; Insight</h3>
                    <p>
                        Understand performance by channel, sector, and consultant with clear reporting.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section recruit-cta" id="contact">
        <div class="container">
            <div class="cta-inner recruit-cta-inner">
                <div class="cta-main">
                    <h2>Let’s Build Your Next Recruitment Platform</h2>
                    <p>
                        Share your current tech stack, challenges, and growth plans — we’ll design
                        a CloudRecruit roadmap around your goals.
                    </p>
                </div>
                <div class="cta-actions recruit-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Book Free Consultation</a>
                    <a href="#pricing" class="btn btn-outline-light">View Pricing Options</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SIMPLE CONTACT FORM -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact the CloudRecruit Team</h2>
                <p>
                    Tell us about your recruitment business and we’ll get back to you
                    within one business day.
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
                        <input type="email" id="email" placeholder="name@agency.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="company">Agency / Organisation</label>
                        <input type="text" id="company" placeholder="Recruitment agency / employer">
                    </div>
                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" id="role" placeholder="Founder, Director, Head of Talent, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Share your sectors, systems, and key challenges."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection