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
                    Comprehensive digital solutions designed to transform your business and accelerate
                    growth in today’s competitive landscape.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <!-- Digital Marketing -->
                <article class="card service-card">
                    <div class="card-tag tag-blue">Digital Marketing</div>
                    <h3>Digital Marketing</h3>
                    <p>Comprehensive digital marketing strategies to grow your online presence.</p>
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
                    <p>User-centered design that converts visitors into customers.</p>
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
                    <p>Custom websites built with modern technologies and best practices.</p>
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
                    <p>Complete brand identity that resonates with your target audience.</p>
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
                    <p>Search engine optimization to improve your online visibility.</p>
                    <ul class="service-list">
                        <li>Keyword Research</li>
                        <li>On-page SEO</li>
                        <li>Technical SEO</li>
                        <li>Link Building</li>
                    </ul>
                </article>

                <!-- Product Marketing -->
                <article class="card service-card">
                    <div class="card-tag tag-pink">Product Marketing</div>
                    <h3>Product Marketing</h3>
                    <p>Strategic marketing to launch and grow your products successfully.</p>
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
                    A proven methodology that ensures exceptional results from concept to launch and beyond.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">01</div>
                    <h3>Discovery &amp; Research</h3>
                    <p>
                        We start by understanding your business goals, target audience, and competitive landscape.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">02</div>
                    <h3>Strategy &amp; Planning</h3>
                    <p>
                        Develop a comprehensive digital strategy tailored to your specific needs and objectives.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">03</div>
                    <h3>Design &amp; Development</h3>
                    <p>
                        Create stunning designs and develop robust solutions using cutting-edge technologies.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">04</div>
                    <h3>Launch &amp; Optimize</h3>
                    <p>
                        Deploy your solution and continuously optimize for better performance and results.
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
                    Specialized digital transformation solutions tailored for diverse industry verticals across the globe.
                </p>
            </div>

            <div class="grid grid-3 industries-grid">
                <!-- Healthcare -->
                <article class="card industry-card">
                    <div class="card-tag tag-blue">Healthcare Solutions</div>
                    <h3>Healthcare Solutions</h3>
                    <p>
                        Comprehensive digital solutions for hospitals, clinics, and healthcare providers with appointment systems and patient management.
                    </p>
                    <a href="#" class="link-arrow">Learn More</a>
                </article>

                <!-- Care Home -->
                <article class="card industry-card">
                    <div class="card-tag tag-purple">Care Home Management</div>
                    <h3>Care Home Management</h3>
                    <p>
                        CQC-compliant websites and management systems for care homes with subscription growth models and resident management.
                    </p>
                    <a href="#" class="link-arrow">Learn More</a>
                </article>

                <!-- Education -->
                <article class="card industry-card">
                    <div class="card-tag tag-green">Education Technology</div>
                    <h3>Education Technology</h3>
                    <p>
                        School digitalization solutions including admission CRM, parent apps, and comprehensive educational management systems.
                    </p>
                    <a href="#" class="link-arrow">Learn More</a>
                </article>

                <!-- Travel -->
                <article class="card industry-card">
                    <div class="card-tag tag-orange">Travel &amp; Tourism</div>
                    <h3>Travel &amp; Tourism</h3>
                    <p>
                        Live API integrations with Expedia and Viator, comprehensive booking systems, and travel management platforms.
                    </p>
                    <a href="#" class="link-arrow">Learn More</a>
                </article>

                <!-- Recruitment -->
                <article class="card industry-card">
                    <div class="card-tag tag-teal">Recruitment Solutions</div>
                    <h3>Recruitment Solutions</h3>
                    <p>
                        Advanced ATS, CRM systems, and AI-powered shortlisting connecting exceptional talent with global opportunities.
                    </p>
                    <a href="#" class="link-arrow">Learn More</a>
                </article>

                <!-- Public Sector -->
                <article class="card industry-card">
                    <div class="card-tag tag-pink">Public Sector</div>
                    <h3>Public Sector</h3>
                    <p>
                        Governance, QA, and delivery management solutions specifically designed for UK councils and public organizations.
                    </p>
                    <a href="#" class="link-arrow">Learn More</a>
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
                    Cutting-edge artificial intelligence solutions that transform how your organization operates and serves customers.
                </p>
            </div>

            <div class="grid grid-3 ai-grid">
                <article class="card ai-card">
                    <div class="card-tag tag-blue">AI Chatbot Assistant</div>
                    <h3>AI Chatbot Assistant</h3>
                    <p>
                        Intelligent conversational AI that handles customer inquiries, appointment booking, and 24/7 support across your digital platforms.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-purple">AI Recruiter</div>
                    <h3>AI Recruiter</h3>
                    <p>
                        Advanced AI-powered recruitment system that screens candidates, schedules interviews, and matches talent with opportunities.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-green">AI Itinerary Builder</div>
                    <h3>AI Itinerary Builder</h3>
                    <p>
                        Smart travel planning AI that creates personalized itineraries and optimizes travel routes with real-time data.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-orange">AI Healthcare Assistant</div>
                    <h3>AI Healthcare Assistant</h3>
                    <p>
                        Medical AI that assists with patient scheduling, symptom assessment, and healthcare information while maintaining compliance.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-teal">AI Learning Platform</div>
                    <h3>AI Learning Platform</h3>
                    <p>
                        Educational AI that personalizes learning experiences, tracks student progress, and provides intelligent tutoring.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-pink">AI Care Coordinator</div>
                    <h3>AI Care Coordinator</h3>
                    <p>
                        Specialized AI for care homes that manages resident care plans, medication reminders, and family communication.
                    </p>
                </article>
            </div>

            <div class="ai-cta">
                <h3>Ready to Transform Your Business with AI?</h3>
                <p>
                    Our AI solutions are designed to integrate seamlessly with your existing systems while providing measurable improvements in efficiency and customer satisfaction.
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
                    Flexible pricing options designed to scale with your business needs and growth objectives.
                </p>
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
                    Real-world success stories showcasing our digital transformation expertise across diverse industries.
                </p>
            </div>

            <div class="grid grid-2 case-grid">
                <!-- Travel -->
                <article class="card case-card">
                    <div class="card-tag tag-blue">Travel &amp; Tourism</div>
                    <h3>BookMyGetaway.co.uk</h3>
                    <p>
                        Complete digital transformation of a UK-based travel agency with integrated booking systems, live API connections to major travel providers, and AI-powered itinerary planning.
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
                        Comprehensive patient management system for a major NHS Trust including appointment booking, patient records, and staff scheduling with full GDPR compliance.
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
                        CQC-compliant care home management platform with resident tracking, medication management, and family communication portal.
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
                        AI-powered recruitment platform connecting international talent with UK opportunities, featuring automated screening and video interviewing.
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
                    Operating across 25+ countries worldwide, bringing British expertise to global markets.
                </p>
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
                        Join hundreds of organizations worldwide who have transformed their operations with our British-built digital solutions. Let’s discuss how we can accelerate your digital transformation.
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