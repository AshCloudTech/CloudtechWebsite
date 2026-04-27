@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords',
    'travel SEO services UK, tourism marketing agency UK, travel digital marketing UK, travel
    website development UK, SEO for travel businesses UK, travel search engine optimisation UK, tourism SEO strategies UK,
    travel content marketing UK, local SEO for travel agencies UK')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/cloud-travel/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/cloud-travel/js/script.js') }}" defer></script>
    @endpush

@section('content')

    <!-- HERO -->
    <section class="hero travel-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">CloudTravel</p>
                <h1>Digital Travel Solutions for Travel Industry</h1>
                <p class="hero-subtitle">
                    Grow bookings with a trusted travel SEO agency and smart digital platforms.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#pricing" class="btn btn-lg btn-ghost hero-ghost-light">View Platforms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TRAVEL SEO -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Travel SEO</h2>
                <p>
                    Grow your online visibility and attract more bookings with targeted travel SEO services designed for
                    agencies, tour operators, and travel brands.
                </p>
            </div>

            <div class="grid grid-3 services-grid travel-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-purple">🌍</div>
                    <h3>Travel Websites</h3>
                    <p>
                        High-converting travel website design built for destination discovery, tour listings, and enquiry
                        generation.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-pink">🧾</div>
                    <h3>Booking Engine</h3>
                    <p>
                        Integrated booking journeys for packages, tours, and experiences, supported by SEO for travel agency
                        strategies to increase conversions.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">🗺️</div>
                    <h3>Itinerary Builder</h3>
                    <p>
                        Create and share detailed itineraries with pricing, schedules, and travel documents in one place.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">📩</div>
                    <h3>CRM &amp; Lead Management</h3>
                    <p>
                        Capture and manage enquiries with a system designed alongside digital marketing for travel to track
                        and
                        convert leads.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📱</div>
                    <h3>Customer Travel App</h3>
                    <p>
                        Provide travellers with mobile access to trips, documents, and updates under your brand.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Track bookings, revenue, and performance with dashboards built by a results-driven tourism marketing
                        agency.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- TRAVEL MARKETING SERVICES -->
    <section class="section section-alt" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Travel Marketing Services</h2>
                <p>
                    Flexible travel marketing agency and tourism marketing agency solutions tailored for modern travel
                    businesses.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Travel Website Package -->
                <article class="card pricing-card">
                    <h3>Travel Website Design</h3>
                    <p class="pricing-subtitle">
                        <strong>Travel Website Package</strong><br>
                        Modern travel website design focused on conversions, storytelling, and user experience.
                    </p>
                    <ul class="pricing-list">
                        <li>Custom travel website</li>
                        <li>Destination &amp; tour pages</li>
                        <li>Lead capture forms</li>
                        <li>Blog &amp; content sections</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Online Booking Engine -->
                <article class="card pricing-card">
                    <h3>Travel Website Development</h3>
                    <p class="pricing-subtitle">
                        <strong>Online Booking Engine</strong><br>
                        Advanced travel website development with integrated booking systems and payment solutions.
                    </p>
                    <ul class="pricing-list">
                        <li>Package &amp; tour booking flows</li>
                        <li>Payment gateway integration</li>
                        <li>Booking management system</li>
                        <li>Automated confirmations</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Full Travel Platform -->
                <article class="card pricing-card">
                    <h3>End-to-End Travel Platform</h3>
                    <p class="pricing-subtitle">
                        <strong>Full Travel Platform</strong><br>
                        Complete solution from a leading travel SEO agency, combining marketing, booking, and operations.
                    </p>
                    <ul class="pricing-list">
                        <li>Website + booking engine</li>
                        <li>Itinerary builder</li>
                        <li>CRM &amp; back-office tools</li>
                        <li>Reporting &amp; multi-brand support</li>
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
                <h2>Travel SEO Agency Success Stories</h2>
                <p>
                    Real results from travel brands using our travel SEO services and digital platforms.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/travel/adventure-tour-operator.webp') }}"
                        class="service-image" alt="Adventure Tour Operator Solutions – Cloud Technologies Ltd"
                        title="Digital solutions for adventure tour operators and travel businesses"
                        aria-label="Adventure Tour Operator" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Adventure Tour Operator</h3>
                    <ul class="success-metrics">
                        <li>55% increase in enquiries</li>
                        <li>30% higher conversion rate</li>
                        <li>Faster itinerary creation</li>
                        <li>Expanded into new markets</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/travel/luxury-travel-agency.webp') }}"
                        class="service-image" alt="Luxury Travel Agency Digital Solutions – Cloud Technologies Ltd"
                        title="Technology solutions supporting luxury travel agencies and experiences"
                        aria-label="Luxury Travel Agency" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Luxury Travel Agency</h3>
                    <ul class="success-metrics">
                        <li>40% increase in repeat bookings</li>
                        <li>Improved productivity</li>
                        <li>Better customer experience</li>
                        <li>Higher booking value</li>
                    </ul>
                </article>

                <article class="card success-card">
                    <img src="{{ asset('assets/images/industries/travel/destination-management-company.webp') }}"
                        class="service-image" alt="Destination Management Company Solutions – Cloud Technologies Ltd"
                        title="Destination management company using digital tools for travel operations"
                        aria-label="Destination Management Company" aria-hidden="true" loading="lazy" decoding="async">
                    <h3>Destination Management Company</h3>
                    <ul class="success-metrics">
                        <li>24/7 partner access</li>
                        <li>Faster booking cycles</li>
                        <li>Improved accuracy</li>
                        <li>Efficient operations</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose CloudTravel</h2>
                <p>
                    Built for modern travel businesses with performance, flexibility, and scalability in mind.
                </p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card">
                    <h3>Travel-Focused Design</h3>
                </article>
                <article class="card benefit-card">
                    <h3>API-Ready &amp; Flexible</h3>
                </article>
                <article class="card benefit-card">
                    <h3>Multi-Brand Support</h3>
                </article>
                <article class="card benefit-card">
                    <h3>Ongoing Support</h3>
                </article>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Increase bookings with connected SEO, website development, and digital marketing services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk" aria-label="travel SEO services UK">
                    <span>Travel SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/local-seo-service-uk"
                    aria-label="local SEO for travel businesses">
                    <span>Local SEO for Travel Businesses</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="travel website development UK">
                    <span>Travel Website Development UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk"
                    aria-label="content SEO for travel websites">
                    <span>Content SEO for Travel Websites</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk"
                    aria-label="travel digital marketing UK">
                    <span>Travel Digital Marketing UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section travel-cta" id="contact">
        <div class="container">
            <div class="cta-inner travel-cta-inner">
                <div class="cta-main">
                    <h2>Grow Your Travel Business Digitally</h2>
                    <p>
                        Partner with a leading travel SEO agency to boost bookings using travel SEO, digital marketing for
                        travel,
                        and travel website development.
                    </p>
                </div>
                <div class="cta-actions travel-cta-actions">
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
                <h2>Contact the CloudTravel Team</h2>
                <p>
                    Tell us about your travel business and we’ll get back to you within one business day.
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
                        <input type="email" id="email" placeholder="name@travelbrand.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="company">Travel Brand / Company</label>
                        <input type="text" id="company" placeholder="Agency / Tour operator name">
                    </div>
                    <div class="form-field">
                        <label for="role">Your Role</label>
                        <input type="text" id="role" placeholder="Owner, Director, Head of Digital, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">How can we help?</label>
                        <textarea id="message" rows="4" placeholder="Share your current platforms, challenges, and goals."></textarea>
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
                <h2>FAQs – Travel SEO &amp; Digital Platforms</h2>
            </div>

            <div class="faq-grid">
                <article class="card faq-card">
                    <h3>1. What is travel SEO and how does it help travel businesses?</h3>
                    <p>
                        Travel SEO improves your website’s visibility on search engines, helping travel agencies and tour
                        operators
                        attract more organic traffic, enquiries, and bookings.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>2. Why is SEO for travel agencies important?</h3>
                    <p>
                        SEO for travel agencies helps your tours, destinations, and services rank higher on Google, bringing
                        in more
                        qualified travellers and reducing reliance on paid ads or OTAs.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>3. What does a travel SEO agency do?</h3>
                    <p>
                        A travel SEO agency optimises your website, content, and booking journeys to improve rankings,
                        increase
                        traffic, and convert visitors into bookings.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>4. How does travel website design impact bookings?</h3>
                    <p>
                        Effective travel website design improves user experience, making it easier for customers to explore
                        destinations, view packages, and complete bookings leading to higher conversions.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>5. What are the benefits of digital marketing for travel?</h3>
                    <p>
                        Digital marketing for travel helps businesses reach a wider audience through SEO, content, and
                        campaigns,
                        increasing brand visibility, enquiries, and repeat bookings.
                    </p>
                </article>

                <article class="card faq-card">
                    <h3>6. How can travel website development improve performance?</h3>
                    <p>
                        Advanced travel website development enables features like booking engines, itinerary builders, and
                        CRM
                        integration, streamlining operations and improving customer experience.
                    </p>
                </article>
            </div>
        </div>
    </section>

@endsection
