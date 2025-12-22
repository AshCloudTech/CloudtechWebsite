@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – CloudPublic Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/cloud-public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/cloud-public/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero public-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">CloudPublic</p>
                <h1>Secure Digital Platforms<br>for Public Sector &amp; Government</h1>
                <p class="hero-subtitle">
                    Websites, portals, and case management platforms designed for councils,
                    government departments, and public sector organisations – secure,
                    accessible, and built around citizen needs.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#platforms" class="btn btn-lg btn-ghost hero-ghost-light">View Platforms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PUBLIC SECTOR SOLUTIONS OVERVIEW -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Public Sector Digital Solutions</h2>
                <p>
                    CloudPublic supports government and public bodies with citizen-centred websites,
                    digital services, and secure back-office platforms.
                </p>
            </div>

            <div class="grid grid-3 public-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-indigo">🏛️</div>
                    <h3>Public Sector Websites</h3>
                    <p>
                        Accessible, content-rich websites to communicate services, news,
                        and local information clearly to citizens.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">🧾</div>
                    <h3>Online Forms &amp; Services</h3>
                    <p>
                        End-to-end digital service journeys for applications, renewals,
                        and reporting issues online.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📂</div>
                    <h3>Case &amp; Request Management</h3>
                    <p>
                        Track citizen requests, cases, and workflows from submission
                        to resolution with full audit trails.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">👥</div>
                    <h3>Resident &amp; Business Portals</h3>
                    <p>
                        Secure login areas where residents and businesses can view
                        applications, balances, and messages.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">📊</div>
                    <h3>Reporting &amp; Insights</h3>
                    <p>
                        Dashboards to understand service demand, performance,
                        and trends across departments.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">🔐</div>
                    <h3>Compliance &amp; Governance</h3>
                    <p>
                        Architected with security, accessibility, and data protection
                        at the core from day one.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PLATFORMS / MODULES -->
    <section class="section section-alt" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>Platforms for Modern Public Services</h2>
                <p>
                    CloudPublic can be tailored for councils, central government, housing,
                    and wider public bodies – joining up citizen journeys across services.
                </p>
            </div>

            <div class="grid grid-3 public-platform-grid">
                <article class="card public-feature-card">
                    <h3>For Local Authorities</h3>
                    <ul class="feature-list">
                        <li>Council website &amp; service directory</li>
                        <li>Report, request &amp; pay online journeys</li>
                        <li>Waste, council tax &amp; benefits flows</li>
                        <li>Ward &amp; councillor information areas</li>
                    </ul>
                </article>

                <article class="card public-feature-card">
                    <h3>For Central Government</h3>
                    <ul class="feature-list">
                        <li>Campaign &amp; programme microsites</li>
                        <li>Secure portals for stakeholders</li>
                        <li>Application &amp; grants management</li>
                        <li>Multi-language &amp; multi-region support</li>
                    </ul>
                </article>

                <article class="card public-feature-card">
                    <h3>For Public Bodies &amp; Housing</h3>
                    <ul class="feature-list">
                        <li>Resident &amp; tenant self-service</li>
                        <li>Repairs &amp; maintenance logging</li>
                        <li>Digital document &amp; notice delivery</li>
                        <li>Feedback &amp; satisfaction surveys</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>CloudPublic Solutions &amp; Pricing</h2>
                <p>
                    Flexible starting points for different sizes of public organisations,
                    with scope to grow into a broader digital platform.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Public Sector Website -->
                <article class="card pricing-card">
                    <h3>Public Sector Website</h3>
                    <p class="pricing-price">From £3,999</p>
                    <p class="pricing-subtitle">
                        Ideal for councils, agencies, and public bodies wanting to modernise their web presence.
                    </p>
                    <ul class="pricing-list">
                        <li>Accessible public website</li>
                        <li>Service &amp; content structure design</li>
                        <li>News, events &amp; alerts</li>
                        <li>Search &amp; service finder</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Digital Services &amp; Forms -->
                <article class="card pricing-card">
                    <h3>Digital Services &amp; Forms</h3>
                    <p class="pricing-price">From £8,499</p>
                    <p class="pricing-subtitle">
                        Move priority services online with joined-up form and case management.
                    </p>
                    <ul class="pricing-list">
                        <li>End-to-end form journeys</li>
                        <li>Routing &amp; workflow setup</li>
                        <li>Notifications &amp; tracking</li>
                        <li>Integration-ready APIs</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Full Public Service Platform -->
                <article class="card pricing-card">
                    <h3>Full Public Service Platform</h3>
                    <p class="pricing-price">From £16,999</p>
                    <p class="pricing-subtitle">
                        Comprehensive public-facing and back-office platform for multi-service organisations.
                    </p>
                    <ul class="pricing-list">
                        <li>Website + portals + forms</li>
                        <li>Central case management</li>
                        <li>Reporting &amp; insights dashboards</li>
                        <li>Multi-site &amp; multi-agency support</li>
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
                <h2>Public Sector Success Stories</h2>
                <p>
                    See how CloudPublic has helped councils and public bodies modernise
                    services and improve citizen experience.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- Local Council -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>UK Local Council</h3>
                    <p>
                        Rebuilt their council website and key services around citizen journeys and accessibility.
                    </p>
                    <ul class="success-metrics">
                        <li>40% increase in online service usage</li>
                        <li>Reduced calls for routine enquiries</li>
                        <li>Improved accessibility compliance</li>
                        <li>Better feedback on user experience</li>
                    </ul>
                </article>

                <!-- Housing Association -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Housing Association</h3>
                    <p>
                        Launched a resident portal for repairs, payments, and communications.
                    </p>
                    <ul class="success-metrics">
                        <li>More self-service repairs logged online</li>
                        <li>Reduced wait times for updates</li>
                        <li>Improved satisfaction scores</li>
                        <li>Better data on recurring issues</li>
                    </ul>
                </article>

                <!-- National Public Body -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>National Public Body</h3>
                    <p>
                        Created secure stakeholder portals and centralised campaign sites.
                    </p>
                    <ul class="success-metrics">
                        <li>Faster information sharing</li>
                        <li>Improved transparency</li>
                        <li>Better stakeholder engagement</li>
                        <li>Consistent digital brand presence</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLIANCE / BENEFITS -->
    <section class="section public-benefits" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Built for Public Sector Standards</h2>
                <p>
                    CloudPublic platforms are engineered around security, accessibility,
                    and long-term partnership with public sector teams.
                </p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card">
                    <h3>Accessibility by Design</h3>
                    <p>
                        Aligned with WCAG guidelines to ensure inclusive and usable
                        experiences for all citizens.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Security &amp; Data Protection</h3>
                    <p>
                        Robust security practices and data handling aligned
                        with public sector requirements.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Integration-Ready</h3>
                    <p>
                        APIs and integration patterns for CRMs, line-of-business systems,
                        and analytics platforms.
                    </p>
                </article>

                <article class="card benefit-card">
                    <h3>Long-Term Partner</h3>
                    <p>
                        A delivery and support approach designed for multi-year
                        digital programmes, not one-off launches.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section public-cta" id="contact">
        <div class="container">
            <div class="cta-inner public-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Modernise Your Public Services?</h2>
                    <p>
                        Share your current challenges and priorities and we’ll help you map out
                        a CloudPublic roadmap tailored to your organisation.
                    </p>
                </div>
                <div class="cta-actions public-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Book Discovery Session</a>
                    <a href="#pricing" class="btn btn-outline-light">View Solution Options</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SIMPLE CONTACT FORM -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact the CloudPublic Team</h2>
                <p>
                    Tell us about your organisation, services, and goals, and we’ll get back to you
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
                        <input type="email" id="email" placeholder="name@publicbody.gov.uk">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="organisation">Organisation</label>
                        <input type="text" id="organisation" placeholder="Council / department / public body">
                    </div>
                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" id="role" placeholder="Director, Programme Lead, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Share your services, current systems, and priorities."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection