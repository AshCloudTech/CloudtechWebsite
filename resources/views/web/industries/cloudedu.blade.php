@extends('layouts.cloudtech')

@section('title', 'Education SEO Services UK | Education Marketing Agency')
@section('meta_title', 'Education SEO Services UK | Education Marketing Agency.')
@section('meta_description', 'Education SEO UK offering digital marketing, SEO and website development to improve
    rankings, attract students and grow your institution UK for growth today.')
@section('meta_keywords', 'education SEO services UK, education marketing agency UK, school SEO UK, university SEO UK,
    education digital marketing UK, student recruitment marketing UK, education website development UK, local SEO for
    schools UK, online visibility for education UK')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/cloud-edu/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/cloud-edu/js/script.js') }}" defer></script>
    @endpush

@section('content')

    <!-- HERO -->
    <section class="hero edu-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">CloudEdu</p>
                <h1>Digital Solutions for Modern Education</h1>
                <p class="hero-subtitle">
                    Streamline operations and grow enrolments with a trusted education SEO agency.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#pricing" class="btn btn-lg btn-ghost hero-ghost-light">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- EDUCATION SEO -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Education SEO</h2>
                <p>
                    Improve visibility and attract more students with targeted Education SEO and SEO for education
                    strategies
                    designed for schools and institutions.
                </p>
            </div>

            <div class="grid grid-3 services-grid edu-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-green">🎓</div>
                    <h3>School Information System</h3>
                    <p>
                        Centralised student data, attendance, and performance tracking in one unified platform, supported by
                        effective education digital marketing strategies.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">💻</div>
                    <h3>Virtual Learning Platform</h3>
                    <p>
                        Deliver engaging online classes, resources, and assessments with solutions aligned to
                        digital marketing for education growth.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">👨‍👩‍👧</div>
                    <h3>Parent &amp; Student Portal</h3>
                    <p>
                        Real-time access to timetables, reports, and communication, improving engagement through
                        education marketing agency solutions.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">📥</div>
                    <h3>Admissions CRM</h3>
                    <p>
                        Capture enquiries, manage applications, and automate admissions with systems optimised for
                        higher education SEO and lead generation.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📅</div>
                    <h3>Timetable &amp; Attendance</h3>
                    <p>
                        Smart scheduling and automated attendance tracking for better efficiency and reporting.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Analytics &amp; Insights</h3>
                    <p>
                        Track performance, engagement, and operations with dashboards designed by an expert education SEO
                        agency.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PACKAGES -->
    <section class="section section-alt" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Education Marketing Services</h2>
                <p>
                    Scalable education marketing agency and higher education marketing agency solutions tailored for
                    institutions
                    of all sizes.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- School Website & Portal -->
                <article class="card pricing-card">
                    <h3>Education Website Design</h3>
                    <p class="pricing-subtitle">
                        <strong>School Website &amp; Portal</strong><br>
                        Modern education website design focused on accessibility, engagement, and conversions.
                    </p>
                    <ul class="pricing-list">
                        <li>Custom school website</li>
                        <li>News &amp; events modules</li>
                        <li>Document &amp; policy library</li>
                        <li>Parent &amp; student portal access</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- School Management System -->
                <article class="card pricing-card">
                    <h3>Education Website Development</h3>
                    <p class="pricing-subtitle">
                        <strong>School Management System</strong><br>
                        Advanced education website development with integrated tools for managing students, staff, and
                        operations.
                    </p>
                    <ul class="pricing-list">
                        <li>Student &amp; staff records</li>
                        <li>Attendance &amp; timetables</li>
                        <li>Gradebook &amp; reporting</li>
                        <li>Parent &amp; student portals</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Virtual Learning Platform -->
                <article class="card pricing-card">
                    <h3>Higher Education Marketing Solutions</h3>
                    <p class="pricing-subtitle">
                        <strong>Virtual Learning Platform</strong><br>
                        Complete digital learning systems supported by a leading higher education marketing agency and
                        education
                        digital marketing expertise.
                    </p>
                    <ul class="pricing-list">
                        <li>Online classes &amp; resources</li>
                        <li>Assignments &amp; quizzes</li>
                        <li>Video conferencing integration</li>
                        <li>Student progress analytics</li>
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
                <h2>Education SEO Agency Success Stories</h2>
                <p>See how institutions grow with our education SEO agency and digital solutions.</p>
            </div>

            <div class="grid grid-3 success-grid">
                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/edu/uk-independent-school.webp') }}" class="service-image"
                        alt="UK Independent School Digital Solutions – Cloud Technologies Ltd"
                        title="Digital solutions for independent schools in the UK"
                        aria-label="UK Independent School" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>UK Independent School</h3>
                    <ul class="success-metrics">
                        <li>45% reduction in admin workload</li>
                        <li>3,000+ parent accounts activated</li>
                        <li>30% faster fee collection</li>
                        <li>4.8/5 parent satisfaction</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/edu/multi-academy-trust.webp') }}" class="service-image"
                        alt="Multi-Academy Trust Technology Solutions – Cloud Technologies Ltd"
                        title="Technology solutions supporting multi-academy trusts and schools"
                        aria-label="Multi-Academy Trust" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Multi-Academy Trust</h3>
                    <ul class="success-metrics">
                        <li>6 academies connected</li>
                        <li>Unified student data</li>
                        <li>Improved Ofsted readiness</li>
                        <li>Real-time dashboards</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/edu/training-and-coaching-centre.webp') }}"
                        class="service-image" alt="Training and Coaching Centre Solutions – Cloud Technologies Ltd"
                        title="Training and coaching centre supported by digital education technology"
                        aria-label="Training & Coaching Centre" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Training &amp; Coaching Centre</h3>
                    <ul class="success-metrics">
                        <li>200% growth in enrolments</li>
                        <li>1,500+ active learners</li>
                        <li>Global reach</li>
                        <li>Automated certification</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose</h2>
                <p>Built with educators, for educators focused on performance, security, and scalability.</p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card">
                    <h3>Education-First Design</h3>
                </article>
                <article class="card benefit-card">
                    <h3>Cloud-Based &amp; Secure</h3>
                </article>
                <article class="card benefit-card">
                    <h3>GDPR Compliant</h3>
                </article>
                <article class="card benefit-card">
                    <h3>Dedicated Support</h3>
                </article>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Connect recruitment growth with education SEO, website development, and digital marketing services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk/" aria-label="education SEO services UK">
                    <span>Education SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/local-seo-service-uk/" aria-label="local SEO for schools UK">
                    <span>Local SEO for Schools UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk/"
                    aria-label="education website development UK">
                    <span>Education Website Development UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk/" aria-label="content SEO for education websites">
                    <span>Content SEO for Education Websites</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk/"
                    aria-label="education digital marketing UK">
                    <span>Education Digital Marketing UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section edu-cta" id="contact">
        <div class="container">
            <div class="cta-inner edu-cta-inner">
                <div class="cta-main">
                    <h2>Transform Your School Digitally</h2>
                    <p>
                        Partner with a leading education SEO agency to grow enrolments with Education SEO, digital marketing
                        for
                        education, and education website development.
                    </p>
                </div>
                <div class="cta-actions edu-cta-actions">
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
                <h2>Contact the CloudEdu Team</h2>
                <p>Tell us about your institution and we’ll respond within one business day.</p>
            </div>

            <form class="contact-form">
                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="name@school.org">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="institution">School / Institution</label>
                        <input type="text" id="institution" placeholder="School name">
                    </div>
                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" id="role" placeholder="Headteacher, IT Lead, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Tell us about your current systems, challenges, and goals."></textarea>
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
                <h2>FAQs – Education SEO &amp; Digital Solutions</h2>
            </div>

            <div class="faq-grid">
                <article class="card faq-card">
                    <h3>1. What is education SEO and why is it important?</h3>
                    <p>
                        Education SEO helps schools, colleges, and institutions improve their visibility on search engines,
                        making it easier for students and parents to find courses, admissions, and information online.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>2. How does SEO for education increase student enrolments?</h3>
                    <p>
                        SEO for education improves rankings for key searches like courses and admissions, driving more
                        qualified
                        traffic and increasing enquiries and enrolments.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>3. What does an education SEO agency do?</h3>
                    <p>
                        An education SEO agency optimises your website, content, and digital strategy to improve search
                        rankings,
                        attract students, and enhance online visibility.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>4. Why is education website design important for schools?</h3>
                    <p>
                        Education website design ensures a user-friendly experience where students and parents can easily
                        access
                        information, explore courses, and complete enquiries or applications.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>5. What are the benefits of digital marketing for education?</h3>
                    <p>
                        Digital marketing for education helps institutions reach a wider audience, improve engagement, and
                        promote
                        courses through SEO, content, and online campaigns.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>6. How does education website development improve operations?</h3>
                    <p>
                        Education website development enables systems like student portals, admissions CRM, and learning
                        platforms,
                        improving efficiency and enhancing the overall user experience.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection
