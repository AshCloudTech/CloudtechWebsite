@extends('layouts.cloudtech')

@section('title', 'Home - Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – British-Built Digital Transformation Services')
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
                <p class="hero-eyebrow">Smart Digital Solutions That Drive Growth and Performance</p>
                <h1>Build. Grow. Transform. All in One Digital Powerhouse.</h1>
                <p class="hero-subtitle">
                    Your complete hub for digital, design, and AI solutions that fuel business growth.
                </p>

                <div class="hero-actions">
                    <a href="#services" class="btn btn-lg btn-primary">Explore Services</a>
                    {{-- <a href="#ai-innovation" class="btn btn-lg btn-ghost">Chat with AI Assistant</a> --}}
                    <a href="#contact" class="btn btn-lg btn-ghost">Contact Us</a>
                </div>

                <p class="hero-note">
                    Delivering powerful cloud technology that helps entrepreneurs scale faster, <br> reach global markets
                    and achieve real results.
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
                    <div class="card-tag tag-blue">Digital Marketing</div>
                    <h3><a href="{{ route('services.digital.marketing') }}">Digital Marketing</a></h3>
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
                    <h3><a href="{{ route('services.uiux') }}">UI/UX Design</a></h3>
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
                    <h3><a href="{{ route('services.web.development') }}">Web Development</a></h3>
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
                    <h3><a href="{{ route('services.branding') }}">Branding</a></h3>
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
                    <h3><a href="{{ route('services.seo') }}">SEO</a></h3>
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
                    <h3><a href="{{ route('services.product.marketing') }}">Product Marketing</a></h3>
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
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}
                    <h3><a href="{{ route('industries.cloudhealth') }}">Healthcare Solutions</a></h3>
                    <p>
                        Complete digital tools for healthcare providers, offering easy appointment scheduling and efficient
                        patient management in one platform.
                    </p>
                    <a href="{{ route('industries.cloudhealth') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Care Dashboard -->
                <article class="card industry-card">
                    <div class="card-tag tag-purple">Care Dashboard Management</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3><a href="{{ route('industries.cloudcare') }}">Care Dashboard Management</a></h3>
                    <p>
                        Digital solutions for care homes that include CQC-ready websites, easy resident management, and
                        flexible subscription models to support growth.
                    </p>
                    <a href="{{ route('industries.cloudcare') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Education -->
                <article class="card industry-card">
                    <div class="card-tag tag-green">Education Technology</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3><a href="{{ route('industries.cloudedu') }}">Education Technology</a></h3>
                    <p>
                        End-to-end school digitalization solutions featuring admission CRM, parent communication apps, and
                        fully integrated educational management systems.
                    </p>
                    <a href="{{ route('industries.cloudedu') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Travel -->
                <article class="card industry-card">
                    <div class="card-tag tag-orange">Travel &amp; Tourism</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3><a href="{{ route('industries.cloudtravel') }}">Travel &amp; Tourism</a></h3>
                    <p>
                        Travel solutions with real-time Expedia and Viator integrations, easy booking tools, and full travel
                        management features.
                    </p>
                    <a href="{{ route('industries.cloudtravel') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Recruitment -->
                <article class="card industry-card">
                    <div class="card-tag tag-teal">Recruitment Solutions</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3><a href="{{ route('industries.cloudrecruit') }}">Recruitment Solutions</a></h3>
                    <p>
                        AI-enhanced recruitment systems combining powerful ATS, intelligent CRM workflows, and automated
                        shortlisting to source and place talent worldwide.
                    </p>
                    <a href="{{ route('industries.cloudrecruit') }}" class="link-arrow">Learn More</a>
                </article>

                <!-- Public Sector -->
                <article class="card industry-card">
                    <div class="card-tag tag-pink">Public Sector</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3><a href="{{ route('industries.cloudpublic') }}">Public Sector</a></h3>
                    <p>
                        Specialized public-sector platforms that streamline governance, enhance QA processes, and support
                        efficient delivery management for UK organizations.
                    </p>
                    <a href="{{ route('industries.cloudpublic') }}" class="link-arrow">Learn More</a>
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
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3>AI Chatbot Assistant</h3>
                    <p>
                        A powerful AI-driven chatbot that automates customer queries, streamlines appointment booking, and
                        provides round-the-clock service across web and mobile.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-purple">AI Recruiter</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3>AI Recruiter</h3>
                    <p>
                        AI-driven recruitment technology that automates candidate screening, interview scheduling, and
                        talent matching through powerful machine-learning insights.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-green">AI Itinerary Builder</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3>AI Itinerary Builder</h3>
                    <p>
                        AI-powered itinerary technology that customizes travel plans, curates destination ideas, and adjusts
                        routes dynamically with real-time insights.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-orange">AI Healthcare Assistant</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3>AI Healthcare Assistant</h3>
                    <p>
                        AI-powered healthcare support that automates appointment booking, analyzes symptoms, and offers
                        accurate medical guidance with strict HIPAA-compliant data protection.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-teal">AI Learning Platform</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

                    <h3>AI Learning Platform</h3>
                    <p>
                        An AI-driven learning platform that personalizes lessons, tracks student progress, and delivers
                        intelligent tutoring to improve educational outcomes.
                    </p>
                </article>

                <article class="card ai-card">
                    <div class="card-tag tag-pink">AI Care Coordinator</div>
                    {{-- <img src="{{ asset('assets/images/dashboard/industries.jpg') }}" alt="Healthcare Solutions"
                        class="industry-image"> --}}

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
            <p>Pick the ideal plan to scale your business with the right tools and support.</p>
        </div>

        <div class="grid grid-3 pricing-grid">
            @forelse($featuredPlans as $plan)
                @php
                    $price = $plan->priceByBilling('one-time');
                @endphp

                <article class="card pricing-card {{ $plan->is_featured ? 'pricing-popular' : '' }}">
                    @if($plan->is_featured)
                        <div class="pricing-badge">Most Popular</div>
                    @endif

                    <h3>{{ $plan->title }}</h3>

                    <p class="pricing-price">
                        {{ $price?->currency }}{{ $price?->amount_text }}
                        <span>/one-time</span>
                    </p>

                    @if($plan->description)
                        <p class="pricing-subtitle">{{ $plan->description }}</p>
                    @endif

                    <ul class="pricing-list">
                        @foreach($plan->features->take(8) as $feature)
                            <li>{{ $feature->text }}</li>
                        @endforeach
                    </ul>

                    <a href="{{ url($plan->cta_url) }}" class="btn btn-primary btn-block">
                        {{ $plan->cta_text }}
                    </a>
                </article>
            @empty
                <p>No featured plans available.</p>
            @endforelse
        </div>

        <div style="margin-top:32px; display:flex; justify-content:center;">
            <a href="{{ route('pricing') }}" class="btn btn-ghost">
                View All Plans
            </a>
        </div>
    </div>
</section>

    <!-- CASE STUDIES -->
    <section class="section section-alt" id="case-studies">
        <div class="container">
            <div class="section-header">
                <h2>Case Studies</h2>
                <p>
                    See how our strategies and solutions have helped clients achieve outstanding outcomes.
                </p>
            </div>

            <div class="grid grid-2 case-grid">
                @forelse($caseStudies as $case)
                    @php
                        // Tag color class from DB (fallback safe)
                        $tagClass = match ($case->industry_tag_color) {
                            'purple' => 'tag-purple',
                            'green' => 'tag-green',
                            'orange' => 'tag-orange',
                            default => 'tag-blue',
                        };
                    @endphp

                    <article class="card case-card fx-reveal">
                        {{-- Industry tag --}}
                        @if ($case->industry)
                            <div class="card-tag {{ $tagClass }}">
                                {{ $case->industry }}
                            </div>
                        @endif

                        {{-- Title --}}
                        <h3>{{ $case->title }}</h3>

                        {{-- Short description --}}
                        @if ($case->excerpt)
                            <p>{{ $case->excerpt }}</p>
                        @endif

                        {{-- Impact metrics (max 3) --}}
                        @if ($case->impacts->count())
                            <ul class="case-results">
                                @foreach ($case->impacts as $impact)
                                    <li>
                                        @if ($impact->metric)
                                            <strong>{{ $impact->metric }}</strong>
                                        @endif
                                        {{ $impact->title }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        {{-- Tech stack --}}
                        @if ($case->techStacks->count())
                            <p class="case-stack">
                                <strong>Technologies Used:</strong>
                                {{ $case->techStacks->pluck('name')->implode(', ') }}
                            </p>
                        @endif

                        {{-- Link --}}
                        <a href="{{ route('case.studies.detail', $case->slug) }}" class="link-arrow">
                            Read Full Case Study
                        </a>
                    </article>
                @empty
                    <div class="card" style="padding:18px;">
                        <p style="margin:0;">No case studies available right now.</p>
                    </div>
                @endforelse
            </div>

            <div class="case-footer">
                <a href="{{ route('case.studies') }}" class="btn btn-ghost">
                    View All Case Studies
                </a>
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

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                <input type="hidden" name="form_key" value="home_page">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name"
                            value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="name@company.com"
                            value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" placeholder="Company name"
                            value="{{ old('company') }}">
                    </div>

                    <div class="form-field">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" placeholder="United Kingdom"
                            value="{{ old('country') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" name="message" rows="4"
                            placeholder="Tell us about your project, goals, and timelines.">{{ old('message') }}</textarea>
                        @error('message')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>

        </div>
    </section>

@endsection
