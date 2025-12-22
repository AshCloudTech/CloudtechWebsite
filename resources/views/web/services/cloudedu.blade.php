@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – CloudEdu Services')
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
                <h1>Digital Education Solutions<br>for the Modern Classroom</h1>
                <p class="hero-subtitle">
                    End-to-end digital solutions for schools, academies, and training institutions.
                    Designed to streamline administration, empower teachers, and engage parents.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#features" class="btn btn-lg btn-ghost hero-ghost-light">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- EDUCATION SOLUTIONS OVERVIEW -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Education Technology Solutions</h2>
                <p>
                    Comprehensive digital solutions built specifically for schools and educational organizations,
                    covering everything from admissions to alumni engagement.
                </p>
            </div>

            <div class="grid grid-3 services-grid edu-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-green">🎓</div>
                    <h3>School Information System</h3>
                    <p>
                        Centralized student information with attendance, grades, and performance tracking
                        in one unified platform.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">💻</div>
                    <h3>Virtual Learning Platform</h3>
                    <p>
                        Online classrooms, digital resources, and assessments to support hybrid and remote learning.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">👨‍👩‍👧</div>
                    <h3>Parent &amp; Student Portal</h3>
                    <p>
                        Real-time access for parents and students to timetables, reports, fees, and communication.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">📥</div>
                    <h3>Admission &amp; Enrolment CRM</h3>
                    <p>
                        Capture inquiries, manage applications, and automate admission communications.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📅</div>
                    <h3>Timetable &amp; Attendance</h3>
                    <p>
                        Smart timetable management with automated attendance tracking and reporting.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Analytics &amp; Insights</h3>
                    <p>
                        Dashboards for leadership teams to monitor performance, engagement,
                        and operational efficiency.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CORE FEATURES -->
    <section class="section section-alt" id="features">
        <div class="container">
            <div class="section-header">
                <h2>Core Features for Schools &amp; Academies</h2>
                <p>
                    CloudEdu is built to support every stakeholder in the education ecosystem —
                    management, teachers, students, and parents.
                </p>
            </div>

            <div class="grid grid-3 edu-feature-grid">
                <article class="card edu-feature-card">
                    <h3>Leadership &amp; Management</h3>
                    <ul class="feature-list">
                        <li>Multi-branch school management</li>
                        <li>Fee collection &amp; financial reporting</li>
                        <li>Compliance-ready reporting</li>
                        <li>Custom dashboards for SLT</li>
                    </ul>
                </article>

                <article class="card edu-feature-card">
                    <h3>Teachers &amp; Staff</h3>
                    <ul class="feature-list">
                        <li>Classroom management tools</li>
                        <li>Digital gradebook &amp; assessments</li>
                        <li>Lesson planning &amp; resources</li>
                        <li>Staff scheduling &amp; timetables</li>
                    </ul>
                </article>

                <article class="card edu-feature-card">
                    <h3>Parents &amp; Students</h3>
                    <ul class="feature-list">
                        <li>Parent mobile app &amp; notifications</li>
                        <li>Homework &amp; assignment tracking</li>
                        <li>Exam results &amp; reports</li>
                        <li>Secure messaging with school</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>CloudEdu Solutions &amp; Pricing</h2>
                <p>
                    Flexible pricing for institutions of all sizes — from single-site schools
                    to large multi-academy trusts.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- School Website & Portal -->
                <article class="card pricing-card">
                    <h3>School Website &amp; Portal</h3>
                    <p class="pricing-price">From £3,999</p>
                    <p class="pricing-subtitle">
                        Modern, mobile-friendly website with basic parent &amp; student portal.
                    </p>
                    <ul class="pricing-list">
                        <li>Custom school website</li>
                        <li>News &amp; events modules</li>
                        <li>Document &amp; policy library</li>
                        <li>Basic parent portal access</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- School Management System -->
                <article class="card pricing-card">
                    <h3>School Management System</h3>
                    <p class="pricing-price">From £7,499</p>
                    <p class="pricing-subtitle">
                        Complete SIS for independent schools and academies.
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
                    <h3>Virtual Learning Platform</h3>
                    <p class="pricing-price">From £9,999</p>
                    <p class="pricing-subtitle">
                        End-to-end VLE for hybrid and remote learning environments.
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
    <section class="section section-alt" id="success">
        <div class="container">
            <div class="section-header">
                <h2>Education Success Stories</h2>
                <p>
                    See how schools and education providers transformed their operations
                    using CloudEdu solutions.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- UK Independent School -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>UK Independent School</h3>
                    <p>
                        Implemented CloudEdu SIS with integrated parent portal
                        and online payments.
                    </p>
                    <ul class="success-metrics">
                        <li>45% reduction in admin workload</li>
                        <li>3,000+ parent accounts activated</li>
                        <li>30% faster fee collection</li>
                        <li>4.8/5 parent satisfaction rating</li>
                    </ul>
                </article>

                <!-- Multi-Academy Trust -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Multi-Academy Trust</h3>
                    <p>
                        Centralized data across multiple schools with unified reporting
                        and analytics.
                    </p>
                    <ul class="success-metrics">
                        <li>6 academies connected</li>
                        <li>Single view of student data</li>
                        <li>Improved Ofsted readiness</li>
                        <li>Real-time performance dashboards</li>
                    </ul>
                </article>

                <!-- Training &amp; Coaching Centre -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Training &amp; Coaching Centre</h3>
                    <p>
                        Launched a fully online learning platform with assessments
                        and certification.
                    </p>
                    <ul class="success-metrics">
                        <li>200% growth in online enrolments</li>
                        <li>1,500+ active learners</li>
                        <li>Global student reach</li>
                        <li>Automated certificate issuing</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- BENEFITS SECTION -->
    <section class="section edu-benefits" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Why Schools Choose CloudEdu</h2>
                <p>
                    Built in collaboration with school leaders, teachers, and IT teams
                    to deliver real, measurable impact.
                </p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card">
                    <h3>Education-First Design</h3>
                    <p>Designed specifically for schools, not generic CRMs or ERPs.</p>
                </article>

                <article class="card benefit-card">
                    <h3>Cloud-Based &amp; Secure</h3>
                    <p>Accessible anywhere with enterprise-grade security.</p>
                </article>

                <article class="card benefit-card">
                    <h3>UK &amp; EU Compliance</h3>
                    <p>GDPR-ready with best-practice data protection.</p>
                </article>

                <article class="card benefit-card">
                    <h3>Dedicated Support</h3>
                    <p>Training, onboarding, and ongoing support for your team.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section edu-cta" id="contact">
        <div class="container">
            <div class="cta-inner edu-cta-inner">
                <div class="cta-main">
                    <h2>Transform Your School’s Digital Experience</h2>
                    <p>
                        Book a free strategy session with our education specialists and
                        see how CloudEdu can support your vision.
                    </p>
                </div>
                <div class="cta-actions edu-cta-actions">
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
                <h2>Contact the CloudEdu Team</h2>
                <p>
                    Share a few details about your institution and we’ll get back to you
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

@endsection