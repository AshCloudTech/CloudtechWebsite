@extends('layouts.cloudtech')

@section('title', 'About Our Agency | SEO, Web & Marketing Experts UK')
@section('meta_title', 'About Our Agency | SEO, Web & Marketing Experts UK')
@section('meta_description', 'Meet our digital agency team delivering SEO, web development and digital marketing
    solutions to drive growth and success UK for your business with expertsupport.')
@section('meta_keywords', 'about us, digital agency about, SEO about, web development about, UK, digital marketing about, business growth about')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/about/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/about/js/script.js') }}" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    @endpush

@section('content')

    <!-- HERO -->
    <section class="hero about-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">About Cloud Technologies</p>
                <h1>Empowering Businesses with Innovative<br>Cloud Solutions</h1>
                <p class="hero-subtitle">
                    Cloud Technologies helps organisations harness cloud computing and digital transformation
                    to drive growth, resilience, and long-term success.
                </p>

                <div class="hero-actions">
                    <a href="#story" class="btn btn-lg btn-primary">Learn More</a>
                    <a href="#solutions" class="btn btn-lg btn-ghost hero-ghost-light">Explore Our Solutions</a>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR STORY -->
    <section class="section" id="story">
        <div class="container story-grid">
            <div class="story-text">
                <h2>Our Story</h2>
                <p>
                    Cloud Technologies was founded with a vision to revolutionise the way businesses leverage
                    cloud computing and digital transformation. From our beginnings as a small startup, we’ve
                    grown into a global leader in cloud solutions.
                </p>
                <p>
                    Our team of expert engineers and consultants work tirelessly to deliver innovative solutions
                    that drive business growth and operational efficiency. We pride ourselves on our commitment
                    to excellence, customer satisfaction, and staying at the forefront of technological
                    advancement.
                </p>
                <p>
                    Today, we serve clients across industries worldwide – from high-growth startups to
                    Fortune 500 enterprises – helping them navigate cloud migration, infrastructure optimisation,
                    and digital innovation with confidence.
                </p>
            </div>
            <div class="story-image">
                <img src="{{ asset('assets/images/about-us/ourstorydesk.png') }}"
                    alt="Our Story – Cloud Technologies Ltd"
                    title="Our story section showcasing the journey of Cloud Technologies Ltd"
                    class="story-photo">
            </div>
        </div>
    </section>

    <!-- CLOUD SOLUTIONS -->
    <section class="section section-alt" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Our Cloud Solutions</h2>
                <p>
                    Comprehensive cloud services tailored to your business needs, designed to accelerate
                    digital transformation and unlock value.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid solutions-grid-ui">

                <article class="card feature-card feature-card-ui">
                    <div class="svcIcon">
                        <i data-lucide="cloud"></i>
                    </div>
                    <h3>Cloud Consulting</h3>
                    <p>Expert guidance on cloud strategy, architecture design, and implementation to maximize your cloud
                        investment and business outcomes.</p>
                </article>

                <article class="card feature-card feature-card-ui">
                    <div class="svcIcon">
                        <i data-lucide="database"></i>
                    </div>
                    <h3>Data Analytics</h3>
                    <p>Transform your data into actionable insights with our advanced analytics solutions and business
                        intelligence platforms.</p>
                </article>

                <article class="card feature-card feature-card-ui">
                    <div class="svcIcon">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <h3>Security &amp; Compliance</h3>
                    <p>Comprehensive security solutions to protect your cloud infrastructure and ensure regulatory
                        compliance across all platforms.</p>
                </article>

                <article class="card feature-card feature-card-ui">
                    <div class="svcIcon">
                        <i data-lucide="server"></i>
                    </div>
                    <h3>Infrastructure</h3>
                    <p>Scalable and reliable cloud infrastructure solutions designed to support your growing business needs
                        and operations.</p>
                </article>

                <article class="card feature-card feature-card-ui">
                    <div class="svcIcon">
                        <i data-lucide="code"></i>
                    </div>
                    <h3>DevOps Solutions</h3>
                    <p>Streamline your development and operations with our cutting-edge DevOps practices and automation
                        tools.</p>
                </article>

                <article class="card feature-card feature-card-ui">
                    <div class="svcIcon">
                        <i data-lucide="headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock technical support and monitoring to ensure your systems run smoothly without
                        interruption.</p>
                </article>

            </div>

        </div>
    </section>

    <!-- WHY CHOOSE CLOUDTECH -->
    <section class="section section-dark" id="why">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Why Choose CloudTech</h2>
                <p>
                    Discover what sets us apart in the cloud technology landscape and why clients trust
                    us as their long-term digital partner.
                </p>
            </div>

            <div class="grid grid-3 why-grid">
                <article class="card why-card">
                    <h3>Industry Expertise</h3>
                    <p>
                        Over a decade of experience delivering cloud solutions with a proven track record
                        across multiple sectors.
                    </p>
                </article>

                <article class="card why-card">
                    <h3>Expert Team</h3>
                    <p>
                        Certified engineers and consultants bringing deep technical skills and best practices
                        to every engagement.
                    </p>
                </article>

                <article class="card why-card">
                    <h3>Innovation First</h3>
                    <p>
                        Constantly adopting the latest cloud technologies, tools, and methodologies to keep
                        you ahead of the curve.
                    </p>
                </article>

                <article class="card why-card">
                    <h3>Client-Centric</h3>
                    <p>
                        We align with your goals and KPIs, working collaboratively to shape solutions
                        around real-world outcomes.
                    </p>
                </article>

                <article class="card why-card">
                    <h3>Global Reach</h3>
                    <p>
                        A presence across key regions and time zones, ensuring consistent support and
                        delivery wherever you operate.
                    </p>
                </article>

                <article class="card why-card">
                    <h3>Proven Results</h3>
                    <p>
                        Demonstrated impact in cost savings, operational efficiency, and accelerated
                        digital growth for our clients.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- LEADERSHIP TEAM -->
    <section class="section" id="leadership">
        <div class="container">
            <div class="section-header">
                <h2>Leadership Team</h2>
                <p>
                    Meet the visionaries guiding our mission to transform businesses through cloud technology.
                </p>
            </div>

            <div class="grid grid-4 leadership-grid">
                <article class="card leader-card">
                    {{-- <div class="leader-photo leader-photo-1"></div> --}}
                    <img src={{ asset('assets/images/about-us/michael.png') }}
                        alt="Michael – Team Member Cloud Technologies Ltd"
                        title="Michael from Cloud Technologies Ltd team" class="leader-photo">
                    <h3>Michael Chen</h3>
                    <p class="leader-role">Chief Executive Officer</p>
                    <p class="leader-text">
                        With over 20 years in technology leadership, Michael sets the strategic vision
                        for innovation and growth.
                    </p>
                </article>

                <article class="card leader-card">
                    {{-- <div class="leader-photo leader-photo-2"></div> --}}
                    <img src={{ asset('assets/images/about-us/sarah.png') }}
                        alt="Sarah – Team Member Cloud Technologies Ltd"
                        title="Sarah from Cloud Technologies Ltd team" class="leader-photo">
                    <h3>Sarah Johnson</h3>
                    <p class="leader-role">Chief Technology Officer</p>
                    <p class="leader-text">
                        Sarah leads our technical strategy, ensuring we deliver cutting-edge cloud
                        solutions that scale.
                    </p>
                </article>

                <article class="card leader-card">
                    {{-- <div class="leader-photo leader-photo-3"></div> --}}
                    <img src={{ asset('assets/images/about-us/david.png') }}
                        alt="David – Team Member Cloud Technologies Ltd"
                        title="David from Cloud Technologies Ltd team" class="leader-photo">
                    <h3>David Martinez</h3>
                    <p class="leader-role">Chief Operations Officer</p>
                    <p class="leader-text">
                        David oversees global operations and service delivery, maintaining excellence
                        across every region.
                    </p>
                </article>

                <article class="card leader-card">
                    {{-- <div class="leader-photo leader-photo-4"></div> --}}
                    <img src={{ asset('assets/images/about-us/emily.png') }}
                        alt="Emily – Team Member Cloud Technologies Ltd"
                        title="Emily from Cloud Technologies Ltd team" class="leader-photo">
                    <h3>Emily Thompson</h3>
                    <p class="leader-role">Chief Marketing Officer</p>
                    <p class="leader-text">
                        Emily shapes our brand and go-to-market strategy, connecting our solutions with
                        organisations worldwide.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CAREERS / JOIN US -->
    <section class="section section-alt careers-section" id="careers">
        <div class="container careers-grid">
            <div class="careers-image">
                <img src="{{ asset('assets/images/about-us/joinus.png') }}"
                    alt="Join Our Team – Cloud Technologies Ltd"
                    title="Join our team page encouraging careers at Cloud Technologies Ltd" class="careers-photo">
                {{-- <div class="careers-photo"></div> --}}
            </div>
            <div class="careers-text">
                <h2>Join Us. Elevate Your Career</h2>
                <p>
                    At Cloud Technologies, our people are our greatest asset. We’re always looking for
                    talented individuals who are passionate about cloud technology and innovation.
                </p>
                <ul class="careers-list">
                    <li>Competitive salary and benefits package</li>
                    <li>Professional development and training programmes</li>
                    <li>Flexible work arrangements and work-life balance</li>
                    <li>Collaborative and inclusive company culture</li>
                </ul>
                <a href="#contact" class="btn btn-primary">View Open Positions</a>
            </div>
        </div>
    </section>

    <!-- STATS + JOURNEY OF EXCELLENCE (UI MATCH) -->
    <section class="section journey-ui" id="journey">
        <div class="container">

            {{-- Stats Grid --}}
            <div class="journey-stats">
                <article class="stat-box">
                    <div class="stat-box__value">500+</div>
                    <div class="stat-box__label">Clients Worldwide</div>
                </article>

                <article class="stat-box">
                    <div class="stat-box__value">1000+</div>
                    <div class="stat-box__label">Projects Completed</div>
                </article>

                <article class="stat-box">
                    <div class="stat-box__value">98%</div>
                    <div class="stat-box__label">Client Satisfaction</div>
                </article>

                <article class="stat-box">
                    <div class="stat-box__value">24/7</div>
                    <div class="stat-box__label">Support Available</div>
                </article>

                <article class="stat-box">
                    <div class="stat-box__value">15+</div>
                    <div class="stat-box__label">Years Experience</div>
                </article>

                <article class="stat-box">
                    <div class="stat-box__value">200+</div>
                    <div class="stat-box__label">Team Members</div>
                </article>
            </div>

            {{-- Heading --}}
            <div class="journey-head">
                <h2>Our Journey of Excellence</h2>
                <p>
                    Committed to delivering exceptional results and driving innovation in cloud technology
                    for organisations worldwide.
                </p>
            </div>

            {{-- Feature Cards --}}
            <div class="journey-grid-ui">
                <article class="journey-card-ui">
                    <div class="journey-ico" aria-hidden="true">
                        {{-- medal --}}
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2l3 6h-6l3-6zm-4 8h8v2.1a5 5 0 1 1-8 0V10zm2 3.1a3 3 0 1 0 4 0V12h-4v1.1z" />
                        </svg>
                    </div>
                    <h3>Industry Recognition</h3>
                    <p>Awarded Best Cloud Service Provider 2023 by Tech Innovation Awards for outstanding service delivery.
                    </p>
                </article>

                <article class="journey-card-ui">
                    <div class="journey-ico" aria-hidden="true">
                        {{-- shield --}}
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 2l8 4v6c0 5-3.4 9.4-8 10-4.6-.6-8-5-8-10V6l8-4zm0 4.2L6 8v4c0 3.7 2.3 6.9 6 7.7 3.7-.8 6-4 6-7.7V8l-6-1.8z" />
                        </svg>
                    </div>
                    <h3>Security Certified</h3>
                    <p>ISO 27001 and SOC 2 Type II certified, ensuring the highest standards of data security and privacy.
                    </p>
                </article>

                <article class="journey-card-ui">
                    <div class="journey-ico" aria-hidden="true">
                        {{-- globe --}}
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm7.9 9H16.9a16 16 0 0 0-1.3-6A8 8 0 0 1 19.9 11zM12 4c1.3 1.7 2.2 4 2.6 7H9.4c.4-3 1.3-5.3 2.6-7zM4.1 13H7.1a16 16 0 0 0 1.3 6A8 8 0 0 1 4.1 13zM7.1 11H4.1a8 8 0 0 1 4.3-6 16 16 0 0 0-1.3 6zm2.3 2h5.2c-.4 3-1.3 5.3-2.6 7-1.3-1.7-2.2-4-2.6-7zm6.2 6a16 16 0 0 0 1.3-6h3a8 8 0 0 1-4.3 6z" />
                        </svg>
                    </div>
                    <h3>Global Presence</h3>
                    <p>Operating in 25+ countries with local support teams providing seamless service worldwide.</p>
                </article>

                <article class="journey-card-ui">
                    <div class="journey-ico" aria-hidden="true">
                        {{-- user star --}}
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 12a4.2 4.2 0 1 0-4.2-4.2A4.2 4.2 0 0 0 12 12zm0 2c-4.2 0-8 2.2-8 5v1h16v-1c0-2.8-3.8-5-8-5zm8.2-4.7l.6 1.2 1.3.2-1 .9.2 1.3-1.1-.6-1.1.6.2-1.3-1-.9 1.3-.2.6-1.2z" />
                        </svg>
                    </div>
                    <h3>Expert Team</h3>
                    <p>Over 150 certified cloud architects and engineers with expertise across all major cloud platforms.
                    </p>
                </article>

                <article class="journey-card-ui">
                    <div class="journey-ico" aria-hidden="true">
                        {{-- bulb --}}
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M9 21h6v-1H9v1zm3-19a7 7 0 0 0-4 12.7V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.3A7 7 0 0 0 12 2zm3 11.6a1 1 0 0 0-.4.8V16h-5.2v-1.6a1 1 0 0 0-.4-.8A5 5 0 1 1 15 13.6z" />
                        </svg>
                    </div>
                    <h3>Innovation Leader</h3>
                    <p>Pioneering new cloud solutions and methodologies that set industry standards and best practices.</p>
                </article>

                <article class="journey-card-ui">
                    <div class="journey-ico" aria-hidden="true">
                        {{-- hand heart --}}
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 21s-6.7-4.4-8.7-7.6C1.7 10.8 3.3 8 6.2 8c1.4 0 2.6.7 3.3 1.7C10.2 8.7 11.4 8 12.8 8c2.9 0 4.5 2.8 2.9 5.4C18.7 16.6 12 21 12 21z" />
                            <path
                                d="M2 17.5h6.2l1.3.9h5.8c1.1 0 2-.9 2-2s-.9-2-2-2h-3.2l-.8-.6c-.7-.5-1.7-.5-2.4 0l-.9.6H2v3.1z" />
                        </svg>
                    </div>
                    <h3>Client Success</h3>
                    <p>Dedicated to delivering measurable business value and ROI for every client engagement.</p>
                </article>
            </div>

        </div>
    </section>


    <!-- TRUSTED PARTNERS -->
    <section class="section section-alt" id="partners">
        <div class="container">
            <div class="section-header">
                <h2>Trusted Technology Partners</h2>
                <p>We collaborate with industry leaders to deliver best-in-class cloud solutions</p>
            </div>

            <div class="grid grid-3 partners-grid partners-grid--ui">
                <article class="card partner-card partner-card--ui fx-reveal">
                    <div class="partner-icon partner-icon--azure" aria-hidden="true">
                        {{-- Azure: simple 2x2 tiles --}}
                        <span class="partner-tiles">
                            <i></i><i></i><i></i><i></i>
                        </span>
                    </div>

                    <h3 class="partner-title">Microsoft Azure</h3>
                    <p class="partner-badge">Gold Partner</p>
                </article>

                <article class="card partner-card partner-card--ui fx-reveal">
                    <div class="partner-icon partner-icon--aws" aria-hidden="true">
                        {{-- AWS: simple “a” mark --}}
                        <span class="partner-letter">a</span>
                    </div>

                    <h3 class="partner-title">Amazon AWS</h3>
                    <p class="partner-badge">Advanced Partner</p>
                </article>

                <article class="card partner-card partner-card--ui fx-reveal">
                    <div class="partner-icon partner-icon--gcp" aria-hidden="true">
                        {{-- GCP: simple “G” mark --}}
                        <span class="partner-letter">G</span>
                    </div>

                    <h3 class="partner-title">Google Cloud</h3>
                    <p class="partner-badge">Premier Partner</p>
                </article>
            </div>
        </div>
    </section>


    <!-- GLOBAL PRESENCE -->
    <section class="section" id="global">
        <div class="container">
            <div class="section-header">
                <h2>Global Presence</h2>
                <p>
                    With offices around the world, we’re always close to our clients while providing
                    global reach.
                </p>
            </div>

            <div class="grid grid-3 global-grid">
                <article class="card global-card">
                    {{-- <div class="global-photo global-photo-1"></div> --}}
                    <img src={{ asset('assets/images/about-us/sanfrance.png') }}
                        alt="San Francisco Office - Cloud Technologies Ltd"
                        title="Cloud Technologies Ltd San Francisco office location" class="global-photo">
                    <h3>San Francisco, United States</h3>
                    <p>123 Market Street, Suite 500</p>
                </article>

                <article class="card global-card">
                    {{-- <div class="global-photo global-photo-2"></div> --}}
                    <img src={{ asset('assets/images/about-us/london.png') }}
                        alt="London Office - Cloud Technologies Ltd"
                        title="Cloud Technologies Ltd London office location" class="global-photo">
                    <h3>London, United Kingdom</h3>
                    <p>45 Canary Wharf, Level 12</p>
                </article>

                <article class="card global-card">
                    {{-- <div class="global-photo global-photo-3"></div> --}}
                    <img src={{ asset('assets/images/about-us/singapore.png') }}
                        alt="Singapore Office - Cloud Technologies Ltd"
                        title="Cloud Technologies Ltd Singapore office location" class="global-photo">
                    <h3>Singapore, Singapore</h3>
                    <p>88 Marina Bay, Tower A</p>
                </article>
            </div>

            <div class="worldmap-card">
                {{-- <div class="worldmap-photo"></div> --}}
                <img src="{{ asset('assets/images/about-us/worldmap.png') }}"
                    alt="Global Offices Map - Cloud Technologies Ltd"
                    title="World map showing Cloud Technologies Ltd global office presence" class="worldmap-photo">
                <div class="worldmap-text">
                    <h3>See Where We Are</h3>
                    <p>
                        Our global network spans continents, combining local expertise with a unified
                        approach to delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section about-cta" id="contact">
        <div class="container">

            <!-- Top CTA -->
            <div class="cta-inner about-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Transform Your Business?</h2>
                    <p>
                        Join hundreds of companies that trust Cloud Technologies to power their
                        digital transformation journey.
                    </p>
                </div>

                <div class="cta-actions about-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get Started Today</a>
                    <a href="#contact-form" class="btn btn-outline-light">Schedule a Demo</a>
                </div>
            </div>

            <!-- Bottom Cards -->
            <div class="cta-cards">
                <div class="cta-card">
                    <div class="cta-icon"><i class="fa-solid fa-headphones"></i></div>
                    <h4>Free Consultation</h4>
                    <p>Get expert advice tailored to your business needs</p>
                </div>

                <div class="cta-card">
                    <div class="cta-icon"><i class="fa-solid fa-shield"></i></div>
                    <h4>Secure & Reliable</h4>
                    <p>Enterprise-grade security and 99.9% uptime SLA</p>
                </div>

                <div class="cta-card">
                    <div class="cta-icon"><i class="fa-solid fa-rocket"></i></div>
                    <h4>Fast Implementation</h4>
                    <p>Quick deployment with minimal disruption</p>
                </div>
            </div>

        </div>
    </section>


    <!-- CONTACT FORM (SIMPLE) -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact Our Team</h2>
                <p>
                    Share a few details and we’ll connect you with the right experts at
                    {{ $globalCompany?->brand_name ?? 'Cloud Technologies' }}.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- 🔐 FORM IDENTIFIERS (VERY IMPORTANT) --}}
                <input type="hidden" name="form_key" value="contact_team">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="company">Company</label>
                        <input type="text" name="payload[company]" id="company" placeholder="Organisation name">
                    </div>

                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" name="payload[role]" id="role"
                            placeholder="Director, CTO, Head of IT">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea name="message" id="message" rows="4"
                            placeholder="Tell us about your goals, challenges, and timelines." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit Request
                </button>
            </form>
        </div>
    </section>


@endsection
