@extends('layouts.cloudtech')

@section('title', 'Healthcare SEO Service UK | Medical Marketing Agency')
@section('meta_title', 'Healthcare SEO Service UK | Medical Marketing Agency.')
@section('meta_description',
    'Healthcare SEO UK offering medical SEO, digital marketing and website development to improve rankings, attract patients and grow your practice UK online success!.')
@section('meta_keywords',
    'healthcare SEO UK, medical SEO UK, healthcare digital marketing UK, medical marketing agency UK, healthcare website development UK, patient acquisition UK, local SEO for healthcare UK, healthcare online marketing UK, medical practice growth UK')

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
                <h1>Smart Digital Solutions for <br>Modern Healthcare</h1>
                <p class="hero-subtitle">
                    Grow faster with a leading Healthcare SEO Company delivering compliant, patient-focused digital solutions.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#contact" class="btn btn-lg btn-ghost hero-ghost-light">Book Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- HEALTHCARE SEO -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Healthcare SEO</h2>
                <p>
                    As a leading Healthcare SEO Company and technology partner, CloudHealth delivers comprehensive digital
                    solutions designed to improve patient care, streamline operations, and ensure regulatory compliance.
                    Our Healthcare SEO strategies help providers increase visibility, attract more patients, and achieve
                    sustainable growth.
                </p>
            </div>

            <div class="grid grid-3 services-grid health-feature-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-red">🩺</div>
                    <h3>Medical SEO</h3>
                    <p>
                        Comprehensive patient records, appointment scheduling, and medical history tracking—enhanced by our
                        Medical SEO strategies to ensure your healthcare services are easily discoverable online.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">⚖️</div>
                    <h3>Healthcare SEO Agency</h3>
                    <p>
                        Full compliance with healthcare data protection regulations and NHS standards, delivered by a trusted
                        Healthcare SEO Agency focused on security, trust, and performance.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">📹</div>
                    <h3>Medical SEO Marketing</h3>
                    <p>
                        Secure video consultations and remote patient monitoring capabilities, strengthened through our
                        Medical SEO Marketing strategies to improve accessibility and patient engagement.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">📑</div>
                    <h3>Digital Marketing for Healthcare</h3>
                    <p>
                        Digital patient records with secure access and real-time updates, combined with Digital Marketing for
                        Healthcare strategies that enhance efficiency and communication.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">📅</div>
                    <h3>Healthcare Digital Marketing Agency</h3>
                    <p>
                        Online booking systems with automated reminders and calendar integration, powered by a results-driven
                        Healthcare Digital Marketing Agency approach.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📊</div>
                    <h3>Medical Marketing Agency</h3>
                    <p>
                        Advanced healthcare analytics, performance metrics, and compliance reporting delivered by a data-driven
                        Medical Marketing Agency to support smarter decisions.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- HEALTHCARE MARKETING SERVICES -->
    <section class="section section-alt" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Healthcare Marketing Services</h2>
                <p>
                    Tailored Healthcare Marketing Services for providers ranging from small clinics to large hospital networks.
                    Our solutions are built to scale with your organisation.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Healthcare Website Design -->
                <article class="card pricing-card">
                    <h3>Healthcare Website Design</h3>
                    <p class="pricing-subtitle">
                        Professional Healthcare Website Design for hospitals, including patient portals and service-focused
                        user experiences that put your community first.
                    </p>
                    <ul class="pricing-list">
                        <li>Patient Portal</li>
                        <li>Service Directory</li>
                        <li>Doctor Profiles</li>
                        <li>Online Appointments</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Medical Website Development -->
                <article class="card pricing-card">
                    <h3>Medical Website Development</h3>
                    <p class="pricing-subtitle">
                        Complete Medical Website Development solutions for private clinics and GP practices, designed to match
                        your workflow and improve efficiency.
                    </p>
                    <ul class="pricing-list">
                        <li>Patient Records</li>
                        <li>Billing System</li>
                        <li>Inventory Management</li>
                        <li>Staff Scheduling</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Healthcare SEO Company -->
                <article class="card pricing-card">
                    <h3>Healthcare SEO Company</h3>
                    <p class="pricing-subtitle">
                        Secure telemedicine platforms delivered by a leading Healthcare SEO Company, designed for modern
                        patient needs and scalable digital growth.
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

    <!-- HEALTHCARE SEO AGENCY SUCCESS STORIES -->
    <section class="section" id="success">
        <div class="container">
            <div class="section-header">
                <h2>Healthcare SEO Agency Success Stories</h2>
                <p>
                    Real results from healthcare providers who transformed their operations with our Healthcare SEO Agency expertise.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- London Private Hospital -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>London Private Hospital</h3>
                    <p>Complete digital transformation with patient portal and online booking system.</p>
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
                    <p>Streamlined patient management system with integrated telemedicine capabilities.</p>
                    <ul class="success-metrics">
                        <li>50% faster patient processing</li>
                        <li>10,000+ patient records managed</li>
                        <li>30% cost reduction</li>
                        <li>99.9% system uptime</li>
                    </ul>
                </article>

                <!-- Specialist Clinic Network -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Specialist Clinic Network</h3>
                    <p>Multi-location clinic management with centralised patient records.</p>
                    <ul class="success-metrics">
                        <li>80% improvement in operational efficiency</li>
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
                <h2>Healthcare SEO Company Compliance &amp; Security</h2>
                <p>Our solutions meet the highest standards for healthcare data protection and regulatory compliance.</p>
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
                        Join healthcare providers working with a trusted Healthcare SEO Company, leveraging Healthcare SEO,
                        Medical SEO, Medical SEO Marketing, and complete Healthcare Marketing Services to grow faster and deliver
                        better patient care.
                    </p>
                </div>
                <div class="cta-actions health-cta-actions">
                    <a href="#contact" class="btn btn-primary">Start Your Project</a>
                    <a href="#contact" class="btn btn-outline-light">Schedule Demo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="section" id="faqs">
        <div class="container">
            <div class="section-header">
                <h2>FAQs – Healthcare SEO &amp; Digital Solutions</h2>
            </div>

            <div class="faq-grid">
                <article class="card faq-card">
                    <h3>1. What is healthcare SEO and why is it important?</h3>
                    <p>
                        Healthcare SEO helps hospitals, clinics, and providers rank higher on search engines, making it easier
                        for patients to find services and book appointments online.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>2. How does medical SEO help attract more patients?</h3>
                    <p>
                        Medical SEO improves visibility for healthcare-related searches, helping you reach the right audience,
                        increase website traffic, and generate more patient enquiries.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>3. What does a healthcare SEO agency do?</h3>
                    <p>
                        A healthcare SEO agency optimises your website, content, and digital presence to improve rankings,
                        ensure compliance, and drive patient acquisition.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>4. Why is healthcare website design important?</h3>
                    <p>
                        Effective healthcare website design ensures a seamless patient experience, making it easy to access
                        information, book appointments, and trust your services.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>5. What are the benefits of digital marketing for healthcare?</h3>
                    <p>
                        Digital marketing for healthcare improves patient engagement, increases visibility, and promotes services
                        through SEO, content, and online campaigns.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>6. How can medical website development improve operations?</h3>
                    <p>
                        Medical website development enables features like patient portals, appointment booking, and telemedicine,
                        improving efficiency and patient care delivery.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection