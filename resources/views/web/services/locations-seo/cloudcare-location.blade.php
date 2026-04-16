@extends('layouts.cloudtech')

@section('title', $page['meta_title'])
@section('meta_title', $page['meta_title'])
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'care home SEO services UK, care home marketing agency UK, SEO for care homes UK, digital
    marketing for care homes UK, care home website development UK, local SEO for care homes UK, care home online marketing
    UK, care home search engine optimisation UK, care home digital strategy UK')

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
                <h1>Digital Solutions for Care Homes</h1>
                <p class="hero-subtitle">
                    CQC-compliant platforms to improve care, visibility, and family engagement.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#pricing" class="btn btn-lg btn-ghost hero-ghost-light">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- OVERVIEW -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Care Home SEO That Drives Enquiries</h2>
                <p>
                    CloudCare delivers powerful care home SEO services designed to improve rankings, increase enquiries,
                    and help your care home stand out online. As a leading seo company for care homes, we combine marketing
                    with technology to deliver real results.
                </p>
            </div>

            <div class="grid grid-3 services-grid care-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-blue">🌐</div>
                    <h3>SEO-Optimised Care Home Websites</h3>
                    <p class="muted"><strong>Care Home Websites</strong></p>
                    <p>
                        We design high-performing care home website design and nursing home website design solutions that
                        showcase your services, facilities, and CQC ratings—while improving visibility through SEO for care
                        homes.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">🧾</div>
                    <h3>Smart Resident Management Systems</h3>
                    <p class="muted"><strong>Resident Management</strong></p>
                    <p>
                        Manage digital resident profiles, care plans, and daily notes in one secure system built by a
                        leading
                        care home SEO agency to improve both operations and trust.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-purple">💊</div>
                    <h3>Medication &amp; Compliance Made Simple</h3>
                    <p class="muted"><strong>Medication &amp; MAR Tracking</strong></p>
                    <p>
                        Reduce errors and improve safety with digital medication tracking systems, supported by reliable
                        care home SEO services to strengthen your credibility online.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">👨‍👩‍👧</div>
                    <h3>Stronger Family Engagement Tools</h3>
                    <p class="muted"><strong>Family Communication Portal</strong></p>
                    <p>
                        Secure family portals designed alongside digital marketing for care homes, helping you build trust
                        through transparency and real-time updates.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-green">🗓️</div>
                    <h3>Efficient Staff Scheduling &amp; Rota Management</h3>
                    <p class="muted"><strong>Staff Scheduling &amp; Rota</strong></p>
                    <p>
                        Streamline staffing with smart rota tools developed by a leading care home digital marketing agency,
                        ensuring compliance and efficiency.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Data-Driven Compliance &amp; Reporting</h3>
                    <p class="muted"><strong>Compliance &amp; Reporting</strong></p>
                    <p>
                        CQC-aligned dashboards, audits, and reporting tools delivered by a trusted care home marketing
                        agency
                        to simplify inspections and governance.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PACKAGES -->
    <section class="section section-alt" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Care Home Marketing Services That Scale</h2>
                <p>
                    Flexible care home marketing services tailored for single homes, regional groups, and national providers
                    combining SEO, technology, and growth strategies.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Care Home Website -->
                <article class="card pricing-card">
                    <h3>Professional Care Home Website Design</h3>
                    <p class="pricing-subtitle">
                        <strong>Care Home Website</strong><br>
                        Modern care home website design delivered by an experienced care home web design company, focused on
                        generating enquiries and improving user experience.
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
                    <h3>Advanced Care Home Website Development</h3>
                    <p class="pricing-subtitle">
                        <strong>Care Home Digital Hub</strong><br>
                        Scalable care home website development with integrated engagement features, powered by robust care
                        home
                        web development solutions.
                    </p>
                    <ul class="pricing-list">
                        <li>Everything in Care Home Website</li>
                        <li>Resident gallery &amp; activity updates</li>
                        <li>Family login area</li>
                        <li>News &amp; events publishing</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Care Management Platform -->
                <article class="card pricing-card">
                    <h3>Complete Care Management &amp; SEO Platform</h3>
                    <p class="pricing-subtitle">
                        <strong>Care Management Platform</strong><br>
                        All-in-one platform from a trusted seo company care homes rely on, combining operations, compliance,
                        and marketing performance.
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
    <section class="section" id="success">
        <div class="container">
            <div class="section-header">
                <h2>Success Stories from Care Home Providers</h2>
                <p>
                    Real results from organisations using our care home SEO agency and care home advertising agency
                    expertise
                    to grow and improve care quality.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- Residential Care Home Group -->
                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/care/residential-care-home-group.webp') }}"
                        class="service-image" alt="Residential Care Home Group – Cloud Technologies Ltd"
                        title="Residential care home group supported by digital care solutions"
                        aria-label="Residential Care Home Group" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Residential Care Home Group</h3>
                    <ul class="success-metrics">
                        <li>3 homes moved from ‘Good’ to ‘Outstanding’</li>
                        <li>65% reduction in paperwork</li>
                        <li>4.9/5 family satisfaction rating</li>
                        <li>Stronger inspection feedback</li>
                    </ul>
                </article>

                <!-- Home Care Provider -->
                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/care/home-care-provider.webp') }}" class="service-image"
                        alt="Home Care Provider Services – Cloud Technologies Ltd"
                        title="Home care provider delivering support services to individuals at home"
                        aria-label="Home Care Provider"
                        aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Home Care Provider</h3>
                    <ul class="success-metrics">
                        <li>40% improvement in visit punctuality</li>
                        <li>Real-time oversight of care delivery</li>
                        <li>Reduced missed visits</li>
                        <li>Improved staff retention</li>
                    </ul>
                </article>

                <!-- Supported Living Services -->
                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/care/supported-living-services.webp') }}"
                        class="service-image" alt="Supported Living Services – Cloud Technologies Ltd"
                        title="Supported living services for independent and assisted living care"
                        aria-label="Supported Living Services" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Supported Living Services</h3>
                    <ul class="success-metrics">
                        <li>Single source of truth for records</li>
                        <li>Faster incident response</li>
                        <li>Better collaboration</li>
                        <li>Improved governance</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLIANCE & SECURITY -->
    <section class="section section-alt" id="compliance">
        <div class="container">
            <div class="section-header">
                <h2>Secure, Compliant &amp; Built for Care Homes</h2>
                <p>Our solutions meet the highest standards for care sector compliance and data protection.</p>
            </div>

            <div class="grid grid-4 compliance-grid">
                <article class="card compliance-card">
                    <h3>GDPR Compliant</h3>
                    <p>Designed to support strong data protection practices.</p>
                </article>

                <article class="card compliance-card">
                    <h3>CQC Aligned</h3>
                    <p>Built around inspection readiness and governance needs.</p>
                </article>

                <article class="card compliance-card">
                    <h3>Secure Data Systems</h3>
                    <p>Secure architecture for sensitive care information.</p>
                </article>

                <article class="card compliance-card">
                    <h3>End-to-End Encryption</h3>
                    <p>Encrypted data transmission and access controls.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Strengthen care home enquiries with connected SEO, website development, and digital marketing services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk" aria-label="Care home SEO services UK">
                    <span>Care Home SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/local-seo-service-uk" aria-label="Local SEO for care homes UK">
                    <span>Local SEO for Care Homes UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="Care home website development UK">
                    <span>Care Home Website Development UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk"
                    aria-label="Content SEO services for care homes">
                    <span>Content SEO Services for Care Homes</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk"
                    aria-label="Care home digital marketing UK">
                    <span>Care Home Digital Marketing UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section care-cta" id="contact">
        <div class="container">
            <div class="cta-inner care-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow Your Care Home?</h2>
                    <p>
                        Partner with a trusted care home SEO agency, care home marketing agency, and care home digital
                        marketing
                        agency to increase enquiries and improve care delivery.
                    </p>
                </div>
                <div class="cta-actions care-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Book Free Consultation</a>
                    <a href="#pricing" class="btn btn-outline-light">View Packages</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact the CloudCare Team</h2>
                <p>Tell us about your care service and your current systems, and we’ll be in touch within one business day.
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
                        <label for="organisation">Care Service</label>
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
                        <textarea id="message" rows="4"
                            placeholder="Tell us about your goals, number of homes/clients, and current systems."></textarea>
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
                <h2>FAQs – Care Home SEO &amp; Digital Solutions</h2>
            </div>

            <div class="faq-grid">
                <article class="card faq-card">
                    <h3>1. What is care home SEO and why is it important?</h3>
                    <p>
                        Care home SEO helps care providers rank higher on search engines, making it easier for families to
                        find
                        your services and increasing enquiries and occupancy rates.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>2. How does SEO for care homes increase enquiries?</h3>
                    <p>
                        SEO for care homes improves visibility for searches related to care services, helping you attract
                        more
                        qualified leads and reduce reliance on paid advertising.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>3. What does a care home SEO agency do?</h3>
                    <p>
                        A care home SEO agency optimises your website, content, and local search presence to improve
                        rankings,
                        build trust, and generate more enquiries.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>4. Why is care home website design important?</h3>
                    <p>
                        Professional care home website design ensures your services, facilities, and CQC ratings are clearly
                        presented, helping families make informed decisions.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>5. What are the benefits of digital marketing for care homes?</h3>
                    <p>
                        Digital marketing for care homes increases visibility, builds trust, and improves engagement through
                        SEO,
                        content, and online campaigns, leading to more enquiries.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>6. How can care home website development improve operations?</h3>
                    <p>
                        Care home website development enables features like enquiry forms, booking systems, and family
                        portals,
                        improving communication and operational efficiency.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection
