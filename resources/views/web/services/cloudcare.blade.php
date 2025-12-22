@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – CloudCare Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/cloud-care/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/cloud-care/js/script.js') }}" defer></script>
@endpush
@section('content')

    <!-- HERO -->
    <section class="hero care-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">CloudCare</p>
                <h1>Digital Solutions for<br>Outstanding Care Homes</h1>
                <p class="hero-subtitle">
                    CQC-compliant digital platforms for residential care homes, home care providers,
                    and supported living services. Built to improve care quality, transparency,
                    and family engagement.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#features" class="btn btn-lg btn-ghost hero-ghost-light">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CARE HOME SOLUTIONS OVERVIEW -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Care Home Technology Solutions</h2>
                <p>
                    CloudCare supports care homes, home care providers, and supported living services
                    with secure, easy-to-use digital tools built around CQC requirements.
                </p>
            </div>

            <div class="grid grid-3 services-grid care-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-blue">🏡</div>
                    <h3>Care Home Websites</h3>
                    <p>
                        Professional CQC-focused websites showcasing services, facilities,
                        and inspection ratings.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📋</div>
                    <h3>Resident Management</h3>
                    <p>
                        Digital resident profiles, care plans, and daily notes accessible to staff
                        in one secure system.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">💊</div>
                    <h3>Medication &amp; MAR Tracking</h3>
                    <p>
                        Electronic MAR charts, medication schedules, and audit trails to reduce errors
                        and improve safety.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">👨‍👩‍👧</div>
                    <h3>Family Communication Portal</h3>
                    <p>
                        Secure family logins to view updates, photos, and wellbeing information
                        for their loved ones.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">👩‍⚕️</div>
                    <h3>Staff Scheduling &amp; Rota</h3>
                    <p>
                        Shift planning, rota management, and absence tracking to keep staffing safe
                        and compliant.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Compliance &amp; Reporting</h3>
                    <p>
                        CQC-aligned reporting dashboards, audits, and evidence logs for inspections
                        and governance.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CORE FEATURES -->
    <section class="section section-alt" id="features">
        <div class="container">
            <div class="section-header">
                <h2>Built for Care Quality &amp; Compliance</h2>
                <p>
                    CloudCare is designed around the CQC key lines of enquiry, with tools that help
                    you demonstrate safe, effective, caring, responsive, and well-led services.
                </p>
            </div>

            <div class="grid grid-3 care-feature-grid">
                <article class="card care-feature-card">
                    <h3>For Registered Managers</h3>
                    <ul class="feature-list">
                        <li>Real-time overview of residents &amp; staffing</li>
                        <li>Incident &amp; safeguarding logging</li>
                        <li>Policy &amp; document management</li>
                        <li>Inspection-ready reporting</li>
                    </ul>
                </article>

                <article class="card care-feature-card">
                    <h3>For Care Staff</h3>
                    <ul class="feature-list">
                        <li>Mobile-friendly care notes</li>
                        <li>Daily tasks &amp; checklists</li>
                        <li>Medication prompts &amp; alerts</li>
                        <li>Handover &amp; shift summaries</li>
                    </ul>
                </article>

                <article class="card care-feature-card">
                    <h3>For Families</h3>
                    <ul class="feature-list">
                        <li>Secure family logins</li>
                        <li>Regular updates &amp; photo sharing</li>
                        <li>Visit booking &amp; messaging</li>
                        <li>Transparent care information</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>CloudCare Solutions &amp; Pricing</h2>
                <p>
                    Flexible packages for single homes, regional groups, and national care providers.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Care Home Website -->
                <article class="card pricing-card">
                    <h3>Care Home Website</h3>
                    <p class="pricing-price">From £2,499</p>
                    <p class="pricing-subtitle">
                        Modern, CQC-focused website for individual care homes.
                    </p>
                    <ul class="pricing-list">
                        <li>Custom care home website</li>
                        <li>Service &amp; facilities pages</li>
                        <li>CQC rating &amp; reports section</li>
                        <li>Enquiry &amp; visit booking forms</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Care Home Digital Hub -->
                <article class="card pricing-card">
                    <h3>Care Home Digital Hub</h3>
                    <p class="pricing-price">From £5,999</p>
                    <p class="pricing-subtitle">
                        Website plus basic digital hub for resident &amp; family engagement.
                    </p>
                    <ul class="pricing-list">
                        <li>Everything in Care Home Website</li>
                        <li>Resident gallery &amp; activity updates</li>
                        <li>Family login area</li>
                        <li>News &amp; events publishing</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Full Care Management Platform -->
                <article class="card pricing-card">
                    <h3>Care Management Platform</h3>
                    <p class="pricing-price">From £9,999</p>
                    <p class="pricing-subtitle">
                        Complete digital care management for multi-site providers.
                    </p>
                    <ul class="pricing-list">
                        <li>Resident &amp; care plan management</li>
                        <li>Medication &amp; MAR tracking</li>
                        <li>Staff rota &amp; HR tools</li>
                        <li>Group-wide dashboards &amp; reporting</li>
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
                <h2>Care Home Success Stories</h2>
                <p>
                    Real examples of care providers using CloudCare to improve outcomes,
                    achieve better ratings, and build trust with families.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- Residential Care Home Group -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Residential Care Home Group</h3>
                    <p>
                        Rolled out CloudCare across a group of homes with full digital care planning
                        and family portal.
                    </p>
                    <ul class="success-metrics">
                        <li>3 homes moved from 'Good' to 'Outstanding'</li>
                        <li>65% reduction in paperwork</li>
                        <li>4.9/5 family satisfaction rating</li>
                        <li>Stronger inspection feedback</li>
                    </ul>
                </article>

                <!-- Home Care Provider -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Home Care Provider</h3>
                    <p>
                        Implemented mobile care notes and rota management for visiting care staff.
                    </p>
                    <ul class="success-metrics">
                        <li>40% improvement in visit punctuality</li>
                        <li>Real-time oversight of care delivery</li>
                        <li>Reduced missed visits</li>
                        <li>Improved staff retention</li>
                    </ul>
                </article>

                <!-- Supported Living Services -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Supported Living Services</h3>
                    <p>
                        Centralised documentation, risk assessments, and tenant records.
                    </p>
                    <ul class="success-metrics">
                        <li>Single source of truth for records</li>
                        <li>Faster response to incidents</li>
                        <li>Better multi-agency collaboration</li>
                        <li>Improved governance &amp; oversight</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section care-cta" id="contact">
        <div class="container">
            <div class="cta-inner care-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Transform Your Care Service?</h2>
                    <p>
                        Book a free discovery call with our care sector specialists and see how
                        CloudCare can support your residents, staff, and families.
                    </p>
                </div>
                <div class="cta-actions care-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Book Free Consultation</a>
                    <a href="#pricing" class="btn btn-outline-light">View Packages</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SIMPLE CONTACT FORM -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact the CloudCare Team</h2>
                <p>
                    Tell us about your care service and your current systems, and we’ll be in touch
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
                        <input type="email" id="email" placeholder="name@carehome.org">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="organisation">Care Provider</label>
                        <input type="text" id="organisation" placeholder="Care home / provider name">
                    </div>
                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" id="role" placeholder="Registered Manager, Director, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Tell us about your services, number of homes, and goals."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection