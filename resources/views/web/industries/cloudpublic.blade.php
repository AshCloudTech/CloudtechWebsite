@extends('layouts.cloudtech')

@section('title', 'Public Sector SEO Service UK | Digital Service Agency')
@section('meta_title', 'Public Sector SEO Service UK | Digital Service Agency.')
@section('meta_description', 'Public sector SEO UK providing digital marketing, SEO and website development to improve visibility and engagement UK for better digital service growth today')
@section('meta_keywords', 'public sector SEO service UK, public sector digital marketing UK, public sector website development UK, government SEO UK, council SEO UK, public body SEO UK, digital services for public sector UK, improving visibility for public services UK, engaging citizens online UK')

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
                <h1>Digital Solutions for Public Sector</h1>
                <p class="hero-subtitle">
                    Improve services, accessibility, and engagement with trusted digital solutions.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#pricing" class="btn btn-lg btn-ghost hero-ghost-light">View Platforms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PUBLIC SECTOR SEO -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Public Sector SEO</h2>
                <p>
                    Improve visibility and accessibility with public sector SEO and local government SEO strategies designed
                    for councils and public organisations.
                </p>
            </div>

            <div class="grid grid-3 public-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-indigo">🏛️</div>
                    <h3>Public Sector Websites</h3>
                    <p>
                        Accessible, high-performing government website design and public sector website design built to clearly
                        communicate services and information.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">🧾</div>
                    <h3>Online Services &amp; Forms</h3>
                    <p>
                        End-to-end digital services supported by SEO for government websites, making it easier for citizens to
                        apply, report, and access services online.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📂</div>
                    <h3>Case Management</h3>
                    <p>
                        Track requests, cases, and workflows with secure systems designed for efficiency and transparency.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">👥</div>
                    <h3>Resident &amp; Business Portals</h3>
                    <p>
                        Secure portals for residents and businesses to access services, updates, and communications.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">📊</div>
                    <h3>Reporting &amp; Insights</h3>
                    <p>
                        Performance dashboards powered by public sector marketing strategies to track demand, usage, and service delivery.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">🔐</div>
                    <h3>Compliance &amp; Security</h3>
                    <p>
                        Built with accessibility, governance, and security at the core, aligned with modern government website development standards.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PUBLIC SECTOR MARKETING SERVICES -->
    <section class="section section-alt" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Public Sector Marketing Services</h2>
                <p>
                    Scalable public sector marketing and government social media marketing solutions designed to improve citizen engagement and communication.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Public Sector Website -->
                <article class="card pricing-card">
                    <h3>Government Website Design</h3>
                    <p class="pricing-subtitle">
                        <strong>Public Sector Website</strong><br>
                        Modern government website design focused on accessibility, usability, and citizen experience.
                    </p>
                    <ul class="pricing-list">
                        <li>Accessible public website</li>
                        <li>Service &amp; content structure</li>
                        <li>News, events &amp; alerts</li>
                        <li>Search &amp; service finder</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Digital Services & Forms -->
                <article class="card pricing-card">
                    <h3>Government Website Development</h3>
                    <p class="pricing-subtitle">
                        <strong>Digital Services &amp; Forms</strong><br>
                        Advanced government website development with integrated services and workflows.
                    </p>
                    <ul class="pricing-list">
                        <li>End-to-end form journeys</li>
                        <li>Workflow &amp; routing setup</li>
                        <li>Notifications &amp; tracking</li>
                        <li>API-ready integrations</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- End-to-End Platform -->
                <article class="card pricing-card">
                    <h3>Full Public Service Platform</h3>
                    <p class="pricing-subtitle">
                        <strong>End-to-End Platform</strong><br>
                        Complete solution combining public sector SEO, digital services, and platform development.
                    </p>
                    <ul class="pricing-list">
                        <li>Website + portals + forms</li>
                        <li>Central case management</li>
                        <li>Reporting dashboards</li>
                        <li>Multi-agency support</li>
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
                <h2>Public Sector SEO Success Stories</h2>
                <p>
                    Real results from councils and public organisations using our public sector SEO and digital solutions.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>UK Local Council</h3>
                    <ul class="success-metrics">
                        <li>40% increase in online service usage</li>
                        <li>Reduced routine enquiry calls</li>
                        <li>Improved accessibility compliance</li>
                        <li>Better user feedback</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Housing Association</h3>
                    <ul class="success-metrics">
                        <li>More online service usage</li>
                        <li>Reduced response times</li>
                        <li>Improved satisfaction</li>
                        <li>Better data insights</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>National Public Body</h3>
                    <ul class="success-metrics">
                        <li>Faster information sharing</li>
                        <li>Improved transparency</li>
                        <li>Better engagement</li>
                        <li>Consistent digital presence</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section section-alt public-benefits" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Built for Public Sector Standards</h2>
                <p>Designed for long-term performance, compliance, and scalability.</p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card"><h3>Accessibility by Design</h3></article>
                <article class="card benefit-card"><h3>Secure &amp; Compliant</h3></article>
                <article class="card benefit-card"><h3>Integration-Ready</h3></article>
                <article class="card benefit-card"><h3>Long-Term Support</h3></article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section public-cta" id="contact">
        <div class="container">
            <div class="cta-inner public-cta-inner">
                <div class="cta-main">
                    <h2>Modernise Your Public Services</h2>
                    <p>
                        Partner with experts in government SEO, digital marketing for government, and government website development
                        to improve services and citizen engagement.
                    </p>
                </div>
                <div class="cta-actions public-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Book Discovery Session</a>
                    <a href="#pricing" class="btn btn-outline-light">View Solution Options</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact the CloudPublic Team</h2>
                <p>Tell us about your organisation and we’ll respond within one business day.</p>
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

    <!-- FAQs -->
    <section class="section" id="faqs">
        <div class="container">
            <div class="section-header">
                <h2>FAQs – Public Sector SEO &amp; Digital Solutions</h2>
            </div>

            <div class="faq-grid">
                <article class="card faq-card">
                    <h3>1. What is Public Sector SEO and why is it important?</h3>
                    <p>
                        Public sector SEO helps government organisations and councils improve their visibility on search engines.
                        It ensures citizens can easily find services, information, and online forms, improving accessibility and engagement.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>2. How does SEO for government websites improve citizen services?</h3>
                    <p>
                        SEO for government websites makes it easier for users to find key services like applications, reporting tools,
                        and local information. This reduces call volumes and improves digital service adoption.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>3. What does a public sector SEO agency do?</h3>
                    <p>
                        A public sector SEO agency provides strategies to improve rankings, optimise website content, and enhance user experience
                        while ensuring compliance with accessibility and government standards.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>4. Why is government website design important for councils?</h3>
                    <p>
                        Government website design focuses on accessibility, usability, and clear communication. A well-designed site ensures citizens
                        can quickly access services, understand information, and complete tasks online.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>5. What are the benefits of digital marketing for government organisations?</h3>
                    <p>
                        Digital marketing for government improves communication, increases awareness of public services, and boosts engagement
                        through channels like search, social media, and content marketing.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>6. How can public sector website development improve efficiency?</h3>
                    <p>
                        Public sector website development enables automation of services, online forms, and case management systems.
                        This reduces manual workload, speeds up processes, and improves service delivery.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection