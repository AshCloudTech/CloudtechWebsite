@extends('layouts.cloudtech')

@section('title', 'Recruitment SEO Services UK | Recruitment Marketing Agency')
@section('meta_title', 'Recruitment SEO Services UK | Recruitment Marketing Agency.')
@section('meta_description', 'Recruitment SEO UK offering digital marketing, SEO and website development to improve
    rankings, attract candidates and grow your agency UK for growth today.')
@section('meta_keywords', 'recruitment SEO services UK, recruitment marketing agency UK, SEO for recruitment agencies
    UK, digital marketing for recruiters UK, recruitment website development UK, candidate attraction UK, agency growth UK,
    recruitment SEO strategy UK')

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
                <h1>Recruitment SEO &amp; Digital Platforms</h1>
                <p class="hero-subtitle">
                    Grow faster with a results-driven recruitment digital marketing agency.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#pricing" class="btn btn-lg btn-ghost hero-ghost-light">View Platforms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- RECRUITMENT SEO -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Recruitment SEO</h2>
                <p>
                    Boost visibility and attract high-quality candidates with targeted recruitment SEO services designed for
                    agencies and in-house teams.
                </p>
            </div>

            <div class="grid grid-3 services-grid recruit-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-orange">💼</div>
                    <h3>Recruitment Websites</h3>
                    <p>
                        High-performing recruitment website design built for job search, sector pages, and
                        conversion-focused
                        candidate journeys.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">🔍</div>
                    <h3>Job Search &amp; Matching</h3>
                    <p>
                        Advanced job search and matching tools supported by SEO for recruitment agencies to improve
                        candidate
                        experience and conversions.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📥</div>
                    <h3>Application &amp; CV Capture</h3>
                    <p>
                        Seamless applications with CV upload and parsing, integrated with digital marketing for recruitment
                        strategies.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">🤝</div>
                    <h3>Client Portals</h3>
                    <p>
                        Secure portals for clients and hiring managers to review candidates, provide feedback, and track
                        progress.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">📲</div>
                    <h3>Candidate Engagement</h3>
                    <p>
                        Email, SMS, and talent pool tools delivered by a results-driven recruitment marketing agency to keep
                        candidates engaged.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Track applications, sources, and performance with dashboards built by a leading recruitment digital
                        marketing agency.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- RECRUITMENT MARKETING SERVICES -->
    <section class="section section-alt" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Recruitment Marketing Services</h2>
                <p>
                    Scalable marketing for recruitment agencies designed to increase applications, improve hiring
                    efficiency,
                    and grow your brand.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Recruitment Website -->
                <article class="card pricing-card">
                    <h3>Recruitment Website Design</h3>
                    <p class="pricing-subtitle">
                        <strong>Recruitment Website</strong><br>
                        Modern recruitment website design focused on attracting candidates and generating applications.
                    </p>
                    <ul class="pricing-list">
                        <li>Custom recruitment website</li>
                        <li>Job search &amp; application forms</li>
                        <li>Sector &amp; discipline pages</li>
                        <li>Blog &amp; content library</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Job Board & Search -->
                <article class="card pricing-card">
                    <h3>Recruitment Website Development</h3>
                    <p class="pricing-subtitle">
                        <strong>Job Board &amp; Search</strong><br>
                        Advanced recruitment website development with powerful search and candidate journey tools.
                    </p>
                    <ul class="pricing-list">
                        <li>Advanced job filtering &amp; alerts</li>
                        <li>Candidate profile creation</li>
                        <li>Source &amp; campaign tracking</li>
                        <li>API-ready integrations</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- End-to-End Platform -->
                <article class="card pricing-card">
                    <h3>Full Recruitment Platform</h3>
                    <p class="pricing-subtitle">
                        <strong>End-to-End Platform</strong><br>
                        Complete solution from a leading recruitment SEO agency, combining websites, search, and engagement
                        tools.
                    </p>
                    <ul class="pricing-list">
                        <li>Website + job search + portals</li>
                        <li>Candidate &amp; client workspaces</li>
                        <li>Automation &amp; reporting</li>
                        <li>Multi-brand &amp; multi-region support</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>
            </div>
        </div>
    </section>

    <!-- SUCCESS STORIES -->
    <section class="section" id="success">
        <div class="container">
            <div class="section-header">
                <h2>Recruitment SEO Agency Success Stories</h2>
                <p>See how agencies and talent teams grow with our recruitment SEO services and digital platforms.</p>
            </div>

            <div class="grid grid-3 success-grid">
                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/recruit/tech-recruitment-agency.webp') }}"
                        class="service-image" alt="Tech Recruitment Agency" title="Tech Recruitment Agency"
                        aria-label="Tech Recruitment Agency" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Tech Recruitment Agency</h3>
                    <ul class="success-metrics">
                        <li>50% increase in quality applications</li>
                        <li>More direct traffic vs job boards</li>
                        <li>Improved pipeline visibility</li>
                        <li>Higher client engagement</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/recruit/healthcare-staffing-provider.webp') }}"
                        class="service-image" alt="Healthcare Staffing Provider" title="Healthcare Staffing Provider"
                        aria-label="Healthcare Staffing Provider" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Healthcare Staffing Provider</h3>
                    <ul class="success-metrics">
                        <li>Faster time-to-fill roles</li>
                        <li>Streamlined onboarding</li>
                        <li>Reduced application drop-off</li>
                        <li>Better reporting across regions</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/recruit/in-house-talent-team.webp') }}"
                        class="service-image" alt="In-House Talent Team" title="In-House Talent Team"
                        aria-label="In-House Talent Team" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>In-House Talent Team</h3>
                    <ul class="success-metrics">
                        <li>35% reduction in agency spend</li>
                        <li>Improved candidate experience</li>
                        <li>More direct hires</li>
                        <li>Better collaboration</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose CloudRecruit</h2>
                <p>Built for modern recruitment teams with performance, flexibility, and scalability.</p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card">
                    <h3>Recruitment-Focused UX</h3>
                </article>
                <article class="card benefit-card">
                    <h3>API &amp; CRM Integration</h3>
                </article>
                <article class="card benefit-card">
                    <h3>Multi-Brand Support</h3>
                </article>
                <article class="card benefit-card">
                    <h3>Data &amp; Insights</h3>
                </article>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Scale recruitment growth with connected SEO, website development, and digital marketing services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk/" aria-label="recruitment SEO services UK">
                    <span>Recruitment SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/local-seo-service-uk/"
                    aria-label="local SEO for recruitment agencies">
                    <span>Local SEO for Recruitment Agencies</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk/"
                    aria-label="recruitment website development UK">
                    <span>Recruitment Website Development UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk/"
                    aria-label="content SEO for recruitment websites">
                    <span>Content SEO for Recruitment Websites</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk/"
                    aria-label="recruitment digital marketing UK">
                    <span>Recruitment Digital Marketing UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section recruit-cta" id="contact">
        <div class="container">
            <div class="cta-inner recruit-cta-inner">
                <div class="cta-main">
                    <h2>Grow Your Recruitment Business</h2>
                    <p>
                        Partner with a leading recruitment SEO agency to scale faster using SEO recruitment, digital
                        marketing for
                        recruitment, and recruitment website development.
                    </p>
                </div>
                <div class="cta-actions recruit-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Book Free Consultation</a>
                    <a href="#pricing" class="btn btn-outline-light">View Pricing Options</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact the CloudRecruit Team</h2>
                <p>Tell us about your recruitment business and we’ll respond within one business day.</p>
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

    <!-- FAQs -->
    <section class="section" id="faqs">
        <div class="container">
            <div class="section-header">
                <h2>FAQs – Recruitment SEO &amp; Digital Platforms</h2>
            </div>

            <div class="faq-grid">
                <article class="card faq-card">
                    <h3>1. What is recruitment SEO and how does it help agencies?</h3>
                    <p>
                        Recruitment SEO improves your agency’s visibility on search engines, helping you attract more
                        candidates
                        and clients organically. It increases job applications and reduces reliance on job boards.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>2. Why is SEO for recruitment agencies important?</h3>
                    <p>
                        SEO for recruitment agencies helps your jobs and services rank higher on Google, bringing in more
                        qualified candidates and client enquiries while lowering advertising costs.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>3. What does a recruitment SEO agency do?</h3>
                    <p>
                        A recruitment SEO agency optimises your website, job pages, and content to improve rankings,
                        increase
                        traffic, and generate more applications and placements.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>4. How does recruitment website design impact hiring?</h3>
                    <p>
                        Effective recruitment website design improves user experience, making it easier for candidates to
                        search
                        jobs, apply quickly, and engage with your brand—leading to higher conversions.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>5. What are the benefits of digital marketing for recruitment?</h3>
                    <p>
                        Digital marketing for recruitment helps agencies reach more candidates through SEO, social media,
                        and
                        content marketing, increasing brand visibility and improving hiring efficiency.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>6. How can recruitment website development improve performance?</h3>
                    <p>
                        Advanced recruitment website development enables features like job search, CV parsing, and candidate
                        portals, streamlining the hiring process and improving overall efficiency.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection
