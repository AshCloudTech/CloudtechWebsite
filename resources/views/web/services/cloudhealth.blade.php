@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – Case Studies')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/cloud-health/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/cloud-health/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero health-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">CloudHealth</p>
                <h1>Digital Healthcare Solutions<br>for Patient Care Excellence</h1>
                <p class="hero-subtitle">
                    Digital solutions for hospitals, clinics, and healthcare providers.
                    GDPR compliant, NHS approved, and designed for patient care excellence.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#contact" class="btn btn-lg btn-ghost hero-ghost-light">Book Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- HEALTHCARE TECHNOLOGY SOLUTIONS -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Healthcare Technology Solutions</h2>
                <p>
                    Comprehensive digital healthcare solutions designed to improve patient care,
                    streamline operations, and ensure regulatory compliance.
                </p>
            </div>

            <div class="grid grid-3 services-grid health-feature-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-red">🩺</div>
                    <h3>Patient Management System</h3>
                    <p>
                        Comprehensive patient records, appointment scheduling,
                        and medical history tracking.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">⚖️</div>
                    <h3>GDPR Compliant</h3>
                    <p>
                        Full compliance with healthcare data protection
                        regulations and NHS standards.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">📹</div>
                    <h3>Telemedicine Integration</h3>
                    <p>
                        Secure video consultations and remote patient monitoring capabilities.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">📑</div>
                    <h3>Electronic Health Records</h3>
                    <p>
                        Digital patient records with secure access and real-time updates.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">📅</div>
                    <h3>Appointment Booking</h3>
                    <p>
                        Online booking system with automated reminders and calendar integration.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📊</div>
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Healthcare analytics, performance metrics, and compliance reporting.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- HEALTHCARE SOLUTIONS & PRICING -->
    <section class="section section-alt" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Healthcare Solutions &amp; Pricing</h2>
                <p>
                    Tailored solutions for different healthcare providers, from small clinics
                    to large hospital networks.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Hospital Website Development -->
                <article class="card pricing-card">
                    <h3>Hospital Website Development</h3>
                    <p class="pricing-price">From £4,999</p>
                    <p class="pricing-subtitle">
                        Professional websites for hospitals with patient portals and service information.
                    </p>
                    <ul class="pricing-list">
                        <li>Patient Portal</li>
                        <li>Service Directory</li>
                        <li>Doctor Profiles</li>
                        <li>Online Appointments</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Clinic Management System -->
                <article class="card pricing-card">
                    <h3>Clinic Management System</h3>
                    <p class="pricing-price">From £7,999</p>
                    <p class="pricing-subtitle">
                        Complete practice management solution for private clinics and GP practices.
                    </p>
                    <ul class="pricing-list">
                        <li>Patient Records</li>
                        <li>Billing System</li>
                        <li>Inventory Management</li>
                        <li>Staff Scheduling</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Telemedicine Platform -->
                <article class="card pricing-card">
                    <h3>Telemedicine Platform</h3>
                    <p class="pricing-price">From £9,999</p>
                    <p class="pricing-subtitle">
                        Secure video consultation platform with integrated payment processing.
                    </p>
                    <ul class="pricing-list">
                        <li>Video Consultations</li>
                        <li>Prescription Management</li>
                        <li>Payment Integration</li>
                        <li>Mobile App</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>
            </div>
        </div>
    </section>

    <!-- HEALTHCARE SUCCESS STORIES -->
    <section class="section" id="success">
        <div class="container">
            <div class="section-header">
                <h2>Healthcare Success Stories</h2>
                <p>
                    Real results from healthcare providers who transformed their operations
                    with our digital solutions.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- London Private Hospital -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>London Private Hospital</h3>
                    <p>
                        Complete digital transformation with patient portal
                        and online booking system.
                    </p>
                    <ul class="success-metrics">
                        <li>60% reduction in admin time</li>
                        <li>2,500+ patients registered</li>
                        <li>40% increase in appointments</li>
                        <li>95% patient satisfaction</li>
                    </ul>
                </article>

                <!-- NHS Trust Digital Hub -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>NHS Trust Digital Hub</h3>
                    <p>
                        Streamlined patient management system with integrated telemedicine capabilities.
                    </p>
                    <ul class="success-metrics">
                        <li>50% faster patient processing</li>
                        <li>10,000+ patient records</li>
                        <li>30% cost reduction</li>
                        <li>99.9% system uptime</li>
                    </ul>
                </article>

                <!-- Specialist Clinic Network -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Specialist Clinic Network</h3>
                    <p>
                        Multi-location clinic management with centralized patient records.
                    </p>
                    <ul class="success-metrics">
                        <li>80% improvement in efficiency</li>
                        <li>5 locations connected</li>
                        <li>25% revenue increase</li>
                        <li>90% staff satisfaction</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLIANCE & SECURITY -->
    <section class="section section-alt" id="compliance">
        <div class="container">
            <div class="section-header">
                <h2>Healthcare Compliance &amp; Security</h2>
                <p>
                    Our solutions meet the highest standards for healthcare data protection
                    and regulatory compliance.
                </p>
            </div>

            <div class="grid grid-4 compliance-grid">
                <article class="card compliance-card">
                    <h3>GDPR Compliant</h3>
                    <p>Full compliance with data protection regulations.</p>
                </article>

                <article class="card compliance-card">
                    <h3>NHS Approved</h3>
                    <p>Meets NHS digital standards and requirements.</p>
                </article>

                <article class="card compliance-card">
                    <h3>ISO 27001</h3>
                    <p>Information security management certified.</p>
                </article>

                <article class="card compliance-card">
                    <h3>End-to-End Encryption</h3>
                    <p>Military-grade security for patient data.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section health-cta" id="contact">
        <div class="container">
            <div class="cta-inner health-cta-inner">
                <div class="cta-main">
                    <h2>Transform Your Healthcare Practice Today</h2>
                    <p>
                        Join hundreds of healthcare providers who have digitized their operations
                        with CloudHealth solutions.
                    </p>
                </div>
                <div class="cta-actions health-cta-actions">
                    <a href="#contact" class="btn btn-primary">Start Your Project</a>
                    <a href="#contact" class="btn btn-outline-light">Schedule Demo</a>
                </div>
            </div>
        </div>
    </section>
    
@endsection