@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – Cloud Digital Solutions')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/cloud-digital-solutions/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/cloud-digital-solutions/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero digital-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">Cloud Digital Solutions</p>
                <h1>End-to-End Digital Transformation<br>for Modern Organisations</h1>
                <p class="hero-subtitle">
                    We help organisations design, build, and scale cloud-native platforms that power
                    their healthcare, education, travel, recruitment, and public sector services.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Book a Discovery Call</a>
                    <a href="#solutions" class="btn btn-lg btn-ghost hero-ghost-light">Explore Solutions</a>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS BAR -->
    <section class="stats-bar">
        <div class="container stats-inner">
            <div class="stat-item">
                <p class="stat-value">1,300+</p>
                <p class="stat-label">Digital Projects Delivered</p>
            </div>
            <div class="stat-item">
                <p class="stat-value">£50M+</p>
                <p class="stat-label">Client Revenue Influenced</p>
            </div>
            <div class="stat-item">
                <p class="stat-value">15+</p>
                <p class="stat-label">Countries Served</p>
            </div>
            <div class="stat-item">
                <p class="stat-value">99%</p>
                <p class="stat-label">Client Retention Rate</p>
            </div>
        </div>
    </section>

    <!-- DIGITAL SOLUTIONS -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Digital Solutions for Every Business</h2>
                <p>
                    From strategy to delivery, Cloud Digital Solutions combines sector expertise and modern
                    engineering to create platforms that scale with your organisation.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-blue">🌐</div>
                    <h3>Digital Strategy &amp; Discovery</h3>
                    <p>
                        Align digital initiatives with organisational goals through structured discovery,
                        roadmapping, and architecture design.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">⚙️</div>
                    <h3>Product Design &amp; UX</h3>
                    <p>
                        Research-led UX and UI design for citizen, patient, student, candidate, and customer journeys.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">🧩</div>
                    <h3>Platform Engineering</h3>
                    <p>
                        Cloud-native platforms using modern frameworks, APIs, and integrations tailored to your stack.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">🔄</div>
                    <h3>Systems Integration</h3>
                    <p>
                        Join up disparate systems – CRMs, ERPs, line-of-business apps – into coherent journeys and data flows.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">📈</div>
                    <h3>Data &amp; Analytics</h3>
                    <p>
                        Dashboards and reporting that highlight performance, adoption, and impact across services.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">🤝</div>
                    <h3>Support &amp; Optimisation</h3>
                    <p>
                        Long-term partnerships, iterative improvements, and new feature delivery after go-live.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES -->
    <section class="section section-alt" id="industries">
        <div class="container">
            <div class="section-header">
                <h2>Industry Expertise</h2>
                <p>
                    Sector-specific platforms built on a shared Cloud Digital Solutions foundation – tailored to how
                    your organisation works.
                </p>
            </div>

            <div class="grid grid-3 industries-grid">
                <article class="card industry-card">
                    <h3>CloudHealth</h3>
                    <p>
                        Digital experiences and platforms for hospitals, clinics, and healthcare providers.
                    </p>
                    <ul class="tag-list">
                        <li>Patient Portals</li>
                        <li>Clinical Workflows</li>
                        <li>Telehealth Journeys</li>
                    </ul>
                </article>

                <article class="card industry-card">
                    <h3>CloudCare</h3>
                    <p>
                        Connected care platforms for social care providers and community services.
                    </p>
                    <ul class="tag-list">
                        <li>Care Coordination</li>
                        <li>Staff Portals</li>
                        <li>Visit Management</li>
                    </ul>
                </article>

                <article class="card industry-card">
                    <h3>CloudEdu</h3>
                    <p>
                        Student-first digital platforms for schools, colleges, and training providers.
                    </p>
                    <ul class="tag-list">
                        <li>Student Portals</li>
                        <li>Admissions Journeys</li>
                        <li>Virtual Learning Spaces</li>
                    </ul>
                </article>

                <article class="card industry-card">
                    <h3>CloudTravel</h3>
                    <p>
                        Booking, itinerary, and operations platforms for travel brands and tour operators.
                    </p>
                    <ul class="tag-list">
                        <li>Travel Websites</li>
                        <li>Booking Engines</li>
                        <li>Itinerary Builders</li>
                    </ul>
                </article>

                <article class="card industry-card">
                    <h3>CloudRecruit</h3>
                    <p>
                        Recruitment websites, job boards, and candidate experience platforms.
                    </p>
                    <ul class="tag-list">
                        <li>Career Sites</li>
                        <li>Job Search &amp; Apply</li>
                        <li>Candidate Portals</li>
                    </ul>
                </article>

                <article class="card industry-card">
                    <h3>CloudPublic</h3>
                    <p>
                        Public sector websites, portals, and digital services for government and councils.
                    </p>
                    <ul class="tag-list">
                        <li>Council Websites</li>
                        <li>Online Services</li>
                        <li>Resident Portals</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Proven Delivery Process</h2>
                <p>
                    A structured approach to take you from initial ideas through to launch and ongoing optimisation.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Discover</h3>
                    <p>
                        Understand your organisation, users, services, and systems through workshops and research.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Design</h3>
                    <p>
                        Turn insights into UX, UI, and technical architecture ready for build and integration.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Deliver</h3>
                    <p>
                        Build, integrate, and test your platform with clear sprints, demos, and quality checks.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Evolve</h3>
                    <p>
                        Optimise, extend, and scale your platforms based on real usage and changing needs.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SUCCESS STORIES -->
    <section class="section section-dark" id="success">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Digital Success Stories</h2>
                <p>
                    Real results from clients who partnered with Cloud Digital Solutions to modernise their services.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <article class="card success-card success-card-dark">
                    <div class="success-header">
                        <h3>National Healthcare Provider</h3>
                        <p class="success-sector">CloudHealth • Patient Portals</p>
                    </div>
                    <p>
                        Rolled out a unified patient portal and appointment experience across multiple hospitals.
                    </p>
                    <ul class="success-metrics">
                        <li>50% increase in online appointment bookings</li>
                        <li>Reduced call centre volumes</li>
                        <li>Consistent patient experience across regions</li>
                    </ul>
                </article>

                <article class="card success-card success-card-dark">
                    <div class="success-header">
                        <h3>UK-Based Recruitment Agency</h3>
                        <p class="success-sector">CloudRecruit • Career Site &amp; Job Search</p>
                    </div>
                    <p>
                        Delivered a new recruitment website, job search, and candidate journeys to support growth.
                    </p>
                    <ul class="success-metrics">
                        <li>45% uplift in quality applications</li>
                        <li>More direct candidates vs job boards</li>
                        <li>Improved consultant productivity</li>
                    </ul>
                </article>

                <article class="card success-card success-card-dark">
                    <div class="success-header">
                        <h3>City Council</h3>
                        <p class="success-sector">CloudPublic • Digital Services &amp; Portals</p>
                    </div>
                    <p>
                        Migrated key council services online with integrated forms and case management.
                    </p>
                    <ul class="success-metrics">
                        <li>Significant shift to online service usage</li>
                        <li>Shorter resolution times for requests</li>
                        <li>Higher citizen satisfaction scores</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- TECHNOLOGY ICONS / CAPABILITIES -->
    <section class="section tech-section" id="technology">
        <div class="container">
            <div class="section-header">
                <h2>Cutting-Edge Technology, Real-World Pragmatism</h2>
                <p>
                    We combine modern engineering practices with a focus on reliability, maintainability,
                    and long-term partnership.
                </p>
            </div>

            <div class="grid grid-4 tech-grid">
                <article class="card tech-card">
                    <h3>Cloud-Native</h3>
                    <p>Architected for major cloud platforms with scalability and resilience built in.</p>
                </article>
                <article class="card tech-card">
                    <h3>API-First</h3>
                    <p>Clean, well-documented APIs for internal and external integrations.</p>
                </article>
                <article class="card tech-card">
                    <h3>Security-Led</h3>
                    <p>Secure by design, aligned with sector expectations and best practice.</p>
                </article>
                <article class="card tech-card">
                    <h3>Data-Driven</h3>
                    <p>Instrumentation and analytics to understand usage and impact.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section-alt" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p>
                    Answers to common questions about how Cloud Digital Solutions works with organisations like yours.
                </p>
            </div>

            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">
                        How do projects typically start with Cloud Digital Solutions?
                        <span class="faq-toggle">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            Most engagements begin with a discovery phase where we understand your objectives,
                            users, services, and systems. From there we propose a roadmap that balances quick wins
                            with longer-term platform thinking.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Do you work with existing systems and vendors?
                        <span class="faq-toggle">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            Yes. Many projects involve integrating with existing CRMs, ERPs, booking engines,
                            and line-of-business applications. We focus on joining up journeys rather than replacing
                            everything at once.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        What sectors do you have the most experience in?
                        <span class="faq-toggle">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            Our specialist product pillars – CloudHealth, CloudCare, CloudEdu, CloudTravel,
                            CloudRecruit, and CloudPublic – reflect where we’ve delivered the most platforms,
                            but we also support organisations beyond these sectors.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        How do you support clients after launch?
                        <span class="faq-toggle">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            We provide structured post-launch support, SLAs, and roadmapping sessions to ensure
                            your platforms continue to evolve alongside your organisation’s needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section digital-cta" id="contact">
        <div class="container">
            <div class="cta-inner digital-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Start Your Digital Transformation?</h2>
                    <p>
                        Share where you are today and where you want to get to – we’ll outline how
                        Cloud Digital Solutions can help.
                    </p>
                </div>
                <div class="cta-actions digital-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Book Discovery Session</a>
                    <a href="#solutions" class="btn btn-outline-light">View Solution Areas</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact the Cloud Digital Solutions Team</h2>
                <p>
                    Tell us a little about your organisation and goals and we’ll be in touch
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
                        <input type="email" id="email" placeholder="name@organisation.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="organisation">Organisation</label>
                        <input type="text" id="organisation" placeholder="Organisation / department">
                    </div>
                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" id="role" placeholder="Director, Head of Digital, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Share your services, systems, and priorities."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection