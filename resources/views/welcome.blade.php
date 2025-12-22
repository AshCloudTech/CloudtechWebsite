@extends('layouts.cloudtech')

@section('title', 'Cloud Home')
@section('meta_title', 'Cloud Technologies Ltd – Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/cloud-home/css/style.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/cloud-home/js/script.js') }}" defer></script>
@endpush

@section('content')

    <!-- HERO -->
    <section class="hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">British-Built Digital Solutions</p>
                <h1>Experience British-Built Digital<br>Transformation</h1>
                <p class="hero-subtitle">
                    From digital marketing to custom development, we deliver end-to-end
                    solutions that drive growth across healthcare, education, travel, and beyond.
                </p>

                <div class="hero-actions">
                    <a href="#services" class="btn btn-lg btn-primary">Explore Services</a>
                    <a href="#ai-innovation" class="btn btn-lg btn-ghost">Chat with AI Assistant</a>
                </div>

                <p class="hero-note">
                    Start for free. No credit card required.<br>
                    Join millions of entrepreneurs who run their business on Cloud Technologies.
                </p>
            </div>

            <div class="hero-stats">
                <div class="stat-card">
                    <span class="stat-value">500+</span>
                    <span class="stat-label">Projects Delivered</span>
                </div>
                <div class="stat-card">
                    <span class="stat-value">£36M+</span>
                    <span class="stat-label">Revenue Generated for Clients</span>
                </div>
                <div class="stat-card">
                    <span class="stat-value">25+</span>
                    <span class="stat-label">Countries Served</span>
                </div>
                <div class="stat-card">
                    <span class="stat-value">98%</span>
                    <span class="stat-label">Client Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Digital Services</h2>
                <p>
                    We deliver complete digital solutions including marketing, design, development, branding, SEO and
                    product growth to elevate your business online.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <!-- Digital Marketing -->
                <article class="card service-card">
                    <div class="card-tag tag-blue"><a href="#">Digital Marketing</a></div>
                    <h3>Digital Marketing</h3>
                    <p>Digital marketing solutions designed to boost visibility and drive sales.</p>
                    <ul class="service-list">
                        <li>Social Media Marketing</li>
                        <li>PPC Advertising</li>
                        <li>Email Marketing</li>
                        <li>Content Strategy</li>
                    </ul>
                </article>

                <!-- UI/UX Design -->
                <article class="card service-card">
                    <div class="card-tag tag-purple">UI/UX Design</div>
                    <h3>UI/UX Design</h3>
                    <p>End-to-end UI/UX design that aligns business goals with user needs.</p>
                    <ul class="service-list">
                        <li>User Research</li>
                        <li>Wireframing</li>
                        <li>Prototyping</li>
                        <li>Usability Testing</li>
                    </ul>
                </article>

                <!-- Web Development -->
                <article class="card service-card">
                    <div class="card-tag tag-green">Web Development</div>
                    <h3>Web Development</h3>
                    <p>Fast, responsive websites developed for seamless user experiences.</p>
                    <ul class="service-list">
                        <li>Responsive Design</li>
                        <li>CMS Integration</li>
                        <li>E-commerce</li>
                        <li>Performance Optimization</li>
                    </ul>
                </article>

                <!-- Branding -->
                <article class="card service-card">
                    <div class="card-tag tag-orange">Branding</div>
                    <h3>Branding</h3>
                    <p>Bold branding that captures attention and elevates your presence.</p>
                    <ul class="service-list">
                        <li>Logo Design</li>
                        <li>Brand Guidelines</li>
                        <li>Visual Identity</li>
                        <li>Brand Strategy</li>
                    </ul>
                </article>

                <!-- SEO -->
                <article class="card service-card">
                    <div class="card-tag tag-teal">SEO</div>
                    <h3>SEO</h3>
                    <p>Powerful SEO that improves rankings, traffic, and conversions.</p>
                    <ul class="service-list">
                        <li>Local SEO</li>
                        <li>Regional SEO</li>
                        <li>National SEO</li>
                        <li>International SEO</li>
                    </ul>
                </article>

                <!-- Product Marketing -->
                <article class="card service-card">
                    <div class="card-tag tag-pink">Product Marketing</div>
                    <h3>Product Marketing</h3>
                    <p>Complete product marketing solutions designed to maximize product success.</p>
                    <ul class="service-list">
                        <li>Go-to-Market Strategy</li>
                        <li>Product Positioning</li>
                        <li>Launch Campaigns</li>
                        <li>Growth Marketing</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-alt" id="about">
        <div class="container">
            <div class="section-header">
                <h2>Our Design &amp; Development Process</h2>
                <p>
                    Our design and development process blends creativity, strategy, and precision to turn ideas into
                    polished, high-performing digital experiences.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">01</div>
                    <h3>Discovery &amp; Research</h3>
                    <p>
                        We uncover insights, analyze user needs, and gather essential data to build a strong foundation for
                        your project. </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">02</div>
                    <h3>Strategy &amp; Planning</h3>
                    <p>
                        We translate insights into a clear roadmap, aligning goals, timelines, and resources to ensure a
                        successful project outcome. </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">03</div>
                    <h3>Design &amp; Development</h3>
                    <p>
                        Designing with intent and developing with precision to deliver results that are both functional and
                        impactful. </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">04</div>
                    <h3>Launch &amp; Optimize</h3>
                    <p>
                        We launch your project, monitor results, and make improvements to keep everything running smoothly.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES -->
    <section class="section" id="industries">
        <div class="container">
            <div class="section-header">
                <h2>Industries We Serve</h2>
                <p>
                    We work with businesses in many sectors, providing solutions that fit their goals and audiences. </p>
            </div>

            <div class="grid grid-3 industries-grid">
                <!-- Healthcare -->
                <article class="card industry-card">
                    <div class="card-tag tag-blue">Healthcare Solutions</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">
                    <h3>Healthcare Solutions</h3>
                    <p>
                        Complete digital tools for healthcare providers, offering easy appointment scheduling and efficient
                        patient management in one platform.
                    </p>
                    <a href="{{ route('services.cloudhealth') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Care Home -->
                <article class="card industry-card">
                    <div class="card-tag tag-purple">Care Home Management</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>Care Home Management</h3>
                    <p>
                        Digital solutions for care homes that include CQC-ready websites, easy resident management, and
                        flexible subscription models to support growth.
                    </p>
                    <a href="{{ route('services.cloudcare') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Education -->
                <article class="card industry-card">
                    <div class="card-tag tag-green">Education Technology</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>Education Technology</h3>
                    <p>
                        End-to-end school digitalization solutions featuring admission CRM, parent communication apps, and
                        fully integrated educational management systems.
                    </p>
                    <a href="{{ route('services.cloudedu') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Travel -->
                <article class="card industry-card">
                    <div class="card-tag tag-orange">Travel &amp; Tourism</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>Travel &amp; Tourism</h3>
                    <p>
                        Travel solutions with real-time Expedia and Viator integrations, easy booking tools, and full travel
                        management features.
                    </p>
                    <a href="{{ route('services.cloudtravel') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Recruitment -->
                <article class="card industry-card">
                    <div class="card-tag tag-teal">Recruitment Solutions</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>Recruitment Solutions</h3>
                    <p>
                        AI-enhanced recruitment systems combining powerful ATS, intelligent CRM workflows, and automated
                        shortlisting to source and place talent worldwide.
                    </p>
                    <a href="{{ route('services.cloudrecruit') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Public Sector -->
                <article class="card industry-card">
                    <div class="card-tag tag-pink">Public Sector</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>Public Sector</h3>
                    <p>
                        Specialized public-sector platforms that streamline governance, enhance QA processes, and support
                        efficient delivery management for UK organizations.
                    </p>
                    <a href="{{ route('services.cloudpublic') }}" class="link-arrow">Learn More</a>
                </article>
            </div>
        </div>
    </section>

    <!-- AI INNOVATION -->
    <section class="section section-alt" id="ai-innovation">
        <div class="container">
            <div class="section-header">
                <h2>AI Powered Innovation</h2>
                <p>
                    Next-generation AI innovations that help organizations stay ahead with smarter automation, predictive
                    intelligence, and adaptive learning models.
                </p>
            </div>

            <div class="grid grid-3 ai-grid">
                <article class="card ai-card">
                    <div class="card-tag tag-blue">AI Chatbot Assistant</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>AI Chatbot Assistant</h3>
                    <p>
                        A powerful AI-driven chatbot that automates customer queries, streamlines appointment booking, and
                        provides round-the-clock service across web and mobile.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-purple">AI Recruiter</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>AI Recruiter</h3>
                    <p>
                        AI-driven recruitment technology that automates candidate screening, interview scheduling, and
                        talent matching through powerful machine-learning insights.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-green">AI Itinerary Builder</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>AI Itinerary Builder</h3>
                    <p>
                        AI-powered itinerary technology that customizes travel plans, curates destination ideas, and adjusts
                        routes dynamically with real-time insights.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-orange">AI Healthcare Assistant</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>AI Healthcare Assistant</h3>
                    <p>
                        AI-powered healthcare support that automates appointment booking, analyzes symptoms, and offers
                        accurate medical guidance with strict HIPAA-compliant data protection.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-teal">AI Learning Platform</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>AI Learning Platform</h3>
                    <p>
                        An AI-driven learning platform that personalizes lessons, tracks student progress, and delivers
                        intelligent tutoring to improve educational outcomes.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-pink">AI Care Coordinator</div>
                    <img src="{{ asset('assets/images/home/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image">

                    <h3>AI Care Coordinator</h3>
                    <p>
                        AI-powered care coordination that centralizes resident care plans, supports medication management,
                        and enhances family engagement with CQC-aligned processes.
                    </p>
                </article>
            </div>

            <div class="ai-cta">
                <h3>Ready to Transform Your Business with AI?</h3>
                <p>
                    Empower your business with intelligent automation, predictive insights, and next-generation AI
                    capabilities.
                </p>
                <div class="ai-cta-actions">
                    <a href="#contact" class="btn btn-primary">Schedule AI Demo</a>
                    <a href="#case-studies" class="btn btn-ghost">View AI Case Studies</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Choose Your Plan</h2>
                <p>
                    Pick the ideal plan to scale your business with the right tools and support. </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Startup -->
                <article class="card pricing-card">
                    <h3>Startup</h3>
                    <p class="pricing-price">£2,999<span>/one-time</span></p>
                    <p class="pricing-subtitle">Perfect for new businesses getting started.</p>
                    <ul class="pricing-list">
                        <li>Professional Website Design</li>
                        <li>Mobile Responsive</li>
                        <li>Basic SEO Setup</li>
                        <li>Contact Forms</li>
                        <li>Social Media Integration</li>
                        <li>3 Months Support</li>
                        <li>SSL Certificate</li>
                        <li>Basic Analytics Setup</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Growth -->
                <article class="card pricing-card pricing-popular">
                    <div class="pricing-badge">Most Popular</div>
                    <h3>Growth</h3>
                    <p class="pricing-price">£5,999<span>/one-time</span></p>
                    <p class="pricing-subtitle">
                        Ideal for growing businesses that need more features.
                    </p>
                    <ul class="pricing-list">
                        <li>Everything in Startup</li>
                        <li>Advanced UI/UX Design</li>
                        <li>E-commerce Integration</li>
                        <li>Advanced SEO Optimization</li>
                        <li>Content Management System</li>
                        <li>Email Marketing Setup</li>
                        <li>6 Months Support</li>
                        <li>Performance Optimization</li>
                        <li>Custom Integrations</li>
                        <li>Analytics &amp; Reporting</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Enterprise -->
                <article class="card pricing-card">
                    <h3>Enterprise</h3>
                    <p class="pricing-price">£12,999<span>/one-time</span></p>
                    <p class="pricing-subtitle">
                        Comprehensive solution for established businesses.
                    </p>
                    <ul class="pricing-list">
                        <li>Everything in Growth</li>
                        <li>Custom Web Application</li>
                        <li>Advanced Branding Package</li>
                        <li>Digital Marketing Strategy</li>
                        <li>Product Marketing Support</li>
                        <li>Multi-language Support</li>
                        <li>12 Months Support</li>
                        <li>Dedicated Account Manager</li>
                        <li>Priority Support</li>
                        <li>Custom Integrations</li>
                        <li>Advanced Security Features</li>
                        <li>Scalable Architecture</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Contact Sales</a>
                </article>
            </div>
        </div>
    </section>

    <!-- CASE STUDIES -->
    <section class="section section-alt" id="case-studies">
        <div class="container">
            <div class="section-header">
                <h2>Case Studies</h2>
                <p>
                    See how our strategies and solutions have helped clients achieve outstanding outcomes. </p>
            </div>

            <div class="grid grid-2 case-grid">
                <!-- Travel -->
                <article class="card case-card">
                    <div class="card-tag tag-blue">Travel &amp; Tourism</div>
                    <h3>BookMyGetaway.co.uk</h3>
                    <p>
                        Complete digital transformation of a UK-based travel agency with integrated booking systems, live
                        API connections to major travel providers, and AI-powered itinerary planning.
                    </p>
                    <ul class="case-results">
                        <li>300% increase in online bookings</li>
                        <li>45% reduction in customer service calls</li>
                        <li>£2.5M additional revenue in first year</li>
                    </ul>
                    <p class="case-stack">
                        <strong>Technologies Used:</strong> React, Node.js, Expedia API, Viator API, AI Chatbot
                    </p>
                    <a href="#" class="link-arrow">Read Full Case Study</a>
                </article>

                <!-- Healthcare -->
                <article class="card case-card">
                    <div class="card-tag tag-purple">Healthcare</div>
                    <h3>NHS Trust Digital Portal</h3>
                    <p>
                        Comprehensive patient management system for a major NHS Trust including appointment booking, patient
                        records, and staff scheduling with full GDPR compliance.
                    </p>
                    <ul class="case-results">
                        <li>60% reduction in appointment no-shows</li>
                        <li>40% improvement in patient satisfaction</li>
                        <li>25% increase in operational efficiency</li>
                    </ul>
                    <p class="case-stack">
                        <strong>Technologies Used:</strong> Vue.js, Python, PostgreSQL, NHS APIs, FHIR
                    </p>
                    <a href="#" class="link-arrow">Read Full Case Study</a>
                </article>

                <!-- Care Management -->
                <article class="card case-card">
                    <div class="card-tag tag-green">Care Management</div>
                    <h3>Sunshine Care Homes</h3>
                    <p>
                        CQC-compliant care home management platform with resident tracking, medication management, and
                        family communication portal.
                    </p>
                    <ul class="case-results">
                        <li>CQC Outstanding rating achieved</li>
                        <li>90% family satisfaction score</li>
                        <li>35% reduction in administrative time</li>
                    </ul>
                    <p class="case-stack">
                        <strong>Technologies Used:</strong> Angular, C#, SQL Server, Mobile Apps, IoT Sensors
                    </p>
                    <a href="#" class="link-arrow">Read Full Case Study</a>
                </article>

                <!-- Recruitment -->
                <article class="card case-card">
                    <div class="card-tag tag-orange">Recruitment</div>
                    <h3>Global Talent Solutions</h3>
                    <p>
                        AI-powered recruitment platform connecting international talent with UK opportunities, featuring
                        automated screening and video interviewing.
                    </p>
                    <ul class="case-results">
                        <li>80% faster candidate screening</li>
                        <li>95% client satisfaction rate</li>
                        <li>200% increase in successful placements</li>
                    </ul>
                    <p class="case-stack">
                        <strong>Technologies Used:</strong> React Native, AI/ML, Video APIs, ATS Integration, Blockchain
                    </p>
                    <a href="#" class="link-arrow">Read Full Case Study</a>
                </article>
            </div>

            <div class="case-footer">
                <a href="#" class="btn btn-ghost">View All Case Studies</a>
            </div>
        </div>
    </section>

    <!-- GLOBAL PRESENCE -->
    <section class="section global-section" id="portfolio">
        <div class="global-bg"></div>
        <div class="container">
            <div class="section-header">
                <h2>Global Presence</h2>
                <p>
                    A worldwide footprint that allows us to support clients across diverse markets and time zones. </p>
            </div>

            <div class="grid grid-4 global-grid">
                <article class="card global-card">
                    <h3>United Kingdom</h3>
                    <p>Headquarters &amp; Primary Operations</p>
                    <ul>
                        <li>England</li>
                        <li>Scotland</li>
                        <li>Wales</li>
                        <li>Northern Ireland</li>
                    </ul>
                </article>

                <article class="card global-card">
                    <h3>Europe</h3>
                    <p>European Union &amp; Associated States</p>
                    <ul>
                        <li>Germany</li>
                        <li>France</li>
                        <li>Netherlands</li>
                        <li>Spain</li>
                        <li>Italy</li>
                        <li>Poland</li>
                    </ul>
                </article>

                <article class="card global-card">
                    <h3>North America</h3>
                    <p>United States &amp; Canada</p>
                    <ul>
                        <li>United States</li>
                        <li>Canada</li>
                    </ul>
                </article>

                <article class="card global-card">
                    <h3>Asia Pacific</h3>
                    <p>Growing Markets &amp; Innovation Hubs</p>
                    <ul>
                        <li>Australia</li>
                        <li>Singapore</li>
                        <li>Japan</li>
                        <li>India</li>
                        <li>New Zealand</li>
                    </ul>
                </article>

                <article class="card global-card">
                    <h3>Middle East &amp; Africa</h3>
                    <p>Emerging Digital Markets</p>
                    <ul>
                        <li>UAE</li>
                        <li>South Africa</li>
                        <li>Nigeria</li>
                        <li>Kenya</li>
                    </ul>
                </article>

                <article class="card global-metrics">
                    <div class="metric">
                        <span class="metric-value">25+</span>
                        <span class="metric-label">Countries</span>
                    </div>
                    <div class="metric">
                        <span class="metric-value">50+</span>
                        <span class="metric-label">Cities</span>
                    </div>
                    <div class="metric">
                        <span class="metric-value">12</span>
                        <span class="metric-label">Time Zones</span>
                    </div>
                    <div class="metric">
                        <span class="metric-value">24/7</span>
                        <span class="metric-label">Support</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section cta-section" id="contact">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-main">
                    <h2>Start Your Digital Transformation Journey Today</h2>
                    <p>
                        Join hundreds of organizations worldwide who have transformed their operations with our
                        British-built digital solutions. Let’s discuss how we can accelerate your digital transformation.
                    </p>
                    <div class="cta-actions">
                        <a href="#contact-form" class="btn btn-primary">Book Free Consultation</a>
                        <a href="#hero" class="btn btn-ghost">Chat with AI Assistant</a>
                    </div>
                </div>
                <div class="cta-steps">
                    <div class="cta-step">
                        <h3>Free Consultation</h3>
                        <p>30-minute strategy session to understand your needs.</p>
                    </div>
                    <div class="cta-step">
                        <h3>Custom Proposal</h3>
                        <p>Tailored solution designed for your specific requirements.</p>
                    </div>
                    <div class="cta-step">
                        <h3>Rapid Deployment</h3>
                        <p>Fast implementation with ongoing support and optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SIMPLE CONTACT FORM (placeholder) -->
    <section class="section section-alt" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Share a few details and our team will get back to you within one business day.</p>
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
                        <input type="text" id="company" placeholder="Company name">
                    </div>
                    <div class="form-field">
                        <label for="country">Country</label>
                        <input type="text" id="country" placeholder="United Kingdom">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Tell us about your project, goals, and timelines."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection
