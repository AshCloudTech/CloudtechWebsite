@extends('layouts.cloudtech')

@section('title', 'About Us - Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – About Us')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/about/css/style.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/about/js/script.js') }}" defer></script>
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
                <div class="story-photo"></div>
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

            <div class="grid grid-3 solutions-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-blue">🧭</div>
                    <h3>Cloud Consulting</h3>
                    <p>
                        Expert guidance on cloud strategy, architecture, and implementation to maximise
                        the return on your cloud investment.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📊</div>
                    <h3>Data Analytics</h3>
                    <p>
                        Transform data into actionable insight with analytics solutions, dashboards,
                        and business intelligence platforms.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">🔐</div>
                    <h3>Security &amp; Compliance</h3>
                    <p>
                        End-to-end security and compliance services to protect your infrastructure and
                        meet regulatory requirements.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-indigo">🖥️</div>
                    <h3>Infrastructure</h3>
                    <p>
                        Scalable, reliable cloud infrastructure designed for performance, resilience,
                        and future growth.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">⚙️</div>
                    <h3>DevOps Solutions</h3>
                    <p>
                        Modern DevOps practices, CI/CD pipelines, and automation to streamline
                        development and operations.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">🕒</div>
                    <h3>24/7 Support</h3>
                    <p>
                        Around-the-clock monitoring and technical support to keep mission-critical
                        systems running smoothly.
                    </p>
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
                    <div class="leader-photo leader-photo-1"></div>
                    <h3>Michael Chen</h3>
                    <p class="leader-role">Chief Executive Officer</p>
                    <p class="leader-text">
                        With over 20 years in technology leadership, Michael sets the strategic vision
                        for innovation and growth.
                    </p>
                </article>

                <article class="card leader-card">
                    <div class="leader-photo leader-photo-2"></div>
                    <h3>Sarah Johnson</h3>
                    <p class="leader-role">Chief Technology Officer</p>
                    <p class="leader-text">
                        Sarah leads our technical strategy, ensuring we deliver cutting-edge cloud
                        solutions that scale.
                    </p>
                </article>

                <article class="card leader-card">
                    <div class="leader-photo leader-photo-3"></div>
                    <h3>David Martinez</h3>
                    <p class="leader-role">Chief Operations Officer</p>
                    <p class="leader-text">
                        David oversees global operations and service delivery, maintaining excellence
                        across every region.
                    </p>
                </article>

                <article class="card leader-card">
                    <div class="leader-photo leader-photo-4"></div>
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
                <div class="careers-photo"></div>
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

    <!-- STATS + JOURNEY OF EXCELLENCE -->
    <section class="section stats-section" id="journey">
        <div class="stats-bar about-stats">
            <div class="container stats-inner stats-inner-about">
                <div class="stat-item">
                    <p class="stat-value">500+</p>
                    <p class="stat-label">Clients Worldwide</p>
                </div>
                <div class="stat-item">
                    <p class="stat-value">1000+</p>
                    <p class="stat-label">Projects Completed</p>
                </div>
                <div class="stat-item">
                    <p class="stat-value">98%</p>
                    <p class="stat-label">Client Satisfaction</p>
                </div>
                <div class="stat-item">
                    <p class="stat-value">24/7</p>
                    <p class="stat-label">Support Available</p>
                </div>
                <div class="stat-item">
                    <p class="stat-value">15+</p>
                    <p class="stat-label">Years Experience</p>
                </div>
                <div class="stat-item">
                    <p class="stat-value">200+</p>
                    <p class="stat-label">Team Members</p>
                </div>
            </div>
        </div>

        <div class="journey-wrapper">
            <div class="container">
                <div class="section-header section-header-light journey-header">
                    <h2>Our Journey of Excellence</h2>
                    <p>
                        Committed to delivering exceptional results and driving innovation in cloud technology
                        for organisations worldwide.
                    </p>
                </div>

                <div class="grid grid-3 journey-grid">
                    <article class="card journey-card">
                        <h3>Industry Recognition</h3>
                        <p>
                            Awarded as a leading cloud service provider by multiple industry bodies
                            for outstanding delivery.
                        </p>
                    </article>

                    <article class="card journey-card">
                        <h3>Security Certified</h3>
                        <p>
                            ISO 27001 and SOC 2 aligned practices, ensuring the highest standards of security
                            and data privacy.
                        </p>
                    </article>

                    <article class="card journey-card">
                        <h3>Global Presence</h3>
                        <p>
                            Operations across 25+ countries with local teams providing on-the-ground insight
                            and support.
                        </p>
                    </article>

                    <article class="card journey-card">
                        <h3>Expert Team</h3>
                        <p>
                            Over 150 certified cloud architects and engineers with expertise across all major
                            cloud platforms.
                        </p>
                    </article>

                    <article class="card journey-card">
                        <h3>Innovation Leader</h3>
                        <p>
                            Pioneering new cloud solutions and methodologies that set benchmarks for the industry.
                        </p>
                    </article>

                    <article class="card journey-card">
                        <h3>Client Success</h3>
                        <p>
                            Dedicated to delivering measurable business value and ROI in every client engagement.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUSTED PARTNERS -->
    <section class="section section-alt" id="partners">
        <div class="container">
            <div class="section-header">
                <h2>Trusted Technology Partners</h2>
                <p>
                    We collaborate with global technology leaders to deliver best-in-class cloud solutions.
                </p>
            </div>

            <div class="grid grid-3 partners-grid">
                <article class="card partner-card">
                    <h3>Microsoft Azure</h3>
                    <p>Gold Partner</p>
                </article>

                <article class="card partner-card">
                    <h3>Amazon Web Services</h3>
                    <p>Advanced Partner</p>
                </article>

                <article class="card partner-card">
                    <h3>Google Cloud</h3>
                    <p>Premier Partner</p>
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
                    <div class="global-photo global-photo-1"></div>
                    <h3>San Francisco, United States</h3>
                    <p>123 Market Street, Suite 500</p>
                </article>

                <article class="card global-card">
                    <div class="global-photo global-photo-2"></div>
                    <h3>London, United Kingdom</h3>
                    <p>45 Canary Wharf, Level 12</p>
                </article>

                <article class="card global-card">
                    <div class="global-photo global-photo-3"></div>
                    <h3>Singapore, Singapore</h3>
                    <p>88 Marina Bay, Tower A</p>
                </article>
            </div>

            <div class="worldmap-card">
                <div class="worldmap-photo"></div>
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
        </div>
    </section>

    <!-- CONTACT FORM (SIMPLE) -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact Our Team</h2>
                <p>
                    Share a few details and we’ll connect you with the right experts at Cloud Technologies.
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
                        <label for="company">Company</label>
                        <input type="text" id="company" placeholder="Organisation name">
                    </div>
                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" id="role" placeholder="Director, CTO, Head of IT, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Tell us about your goals, challenges, and timelines."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection