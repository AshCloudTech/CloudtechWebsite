@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – CloudTravel')
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
                <h1>Digital Travel Solutions<br>for Tour Operators &amp; Agencies</h1>
                <p class="hero-subtitle">
                    Online booking, itinerary management, and customer engagement platforms
                    designed for travel agencies, tour operators, and destination management companies.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-lg btn-primary">Start Your Project</a>
                    <a href="#platforms" class="btn btn-lg btn-ghost hero-ghost-light">View Platforms</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TRAVEL SOLUTIONS OVERVIEW -->
    <section class="section" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Travel Technology Solutions</h2>
                <p>
                    CloudTravel helps modernise travel businesses with fully-branded websites,
                    booking engines, and back-office systems tailored to your operating model.
                </p>
            </div>

            <div class="grid grid-3 services-grid travel-solution-grid">
                <article class="card feature-card">
                    <div class="card-icon icon-purple">🌍</div>
                    <h3>Travel Websites</h3>
                    <p>
                        High-converting travel websites with destination pages, experiences,
                        and enquiry flows built for leisure and corporate travel.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-pink">🧾</div>
                    <h3>Online Booking Engine</h3>
                    <p>
                        Integrated booking journeys for packages, tours, hotels, and activities,
                        connected to your existing suppliers or APIs.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-blue">🗺️</div>
                    <h3>Itinerary Builder</h3>
                    <p>
                        Beautiful, shareable itineraries with day-by-day schedules,
                        pricing, and travel documents in one place.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-orange">📩</div>
                    <h3>Lead Capture &amp; CRM</h3>
                    <p>
                        Capture enquiries from your website, assign to consultants,
                        and track the full sales lifecycle.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-teal">📱</div>
                    <h3>Customer Travel App</h3>
                    <p>
                        Give customers mobile access to their trips, vouchers,
                        and on-trip notifications under your brand.
                    </p>
                </article>

                <article class="card feature-card">
                    <div class="card-icon icon-yellow">📊</div>
                    <h3>Reporting &amp; Analytics</h3>
                    <p>
                        Performance dashboards for bookings, revenue, destinations,
                        and consultant productivity.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- TRAVEL PLATFORMS / MODULES -->
    <section class="section section-alt" id="platforms">
        <div class="container">
            <div class="section-header">
                <h2>Platforms for Modern Travel Businesses</h2>
                <p>
                    Whether you’re a niche tour operator or a multi-brand agency, CloudTravel
                    can be configured to match how you sell, operate, and support your travellers.
                </p>
            </div>

            <div class="grid grid-3 travel-platform-grid">
                <article class="card travel-feature-card">
                    <h3>For Tour Operators</h3>
                    <ul class="feature-list">
                        <li>Package &amp; fixed departure management</li>
                        <li>Multi-day itinerary builder</li>
                        <li>Supplier &amp; contract management</li>
                        <li>Vouchers, documents &amp; manifests</li>
                    </ul>
                </article>

                <article class="card travel-feature-card">
                    <h3>For Travel Agencies</h3>
                    <ul class="feature-list">
                        <li>Walk-in &amp; online enquiry handling</li>
                        <li>Consultant workspaces &amp; pipelines</li>
                        <li>Offline &amp; online booking workflows</li>
                        <li>Customer document delivery</li>
                    </ul>
                </article>

                <article class="card travel-feature-card">
                    <h3>For DMCs &amp; B2B Partners</h3>
                    <ul class="feature-list">
                        <li>B2B agent portals</li>
                        <li>Contracted rates &amp; allocations</li>
                        <li>White-label itineraries</li>
                        <li>Operations &amp; ground services tracking</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>CloudTravel Solutions &amp; Pricing</h2>
                <p>
                    Start with a conversion-optimised website and scale up to a fully digital
                    travel platform as your business grows.
                </p>
            </div>

            <div class="grid grid-3 pricing-grid">
                <!-- Travel Website Package -->
                <article class="card pricing-card">
                    <h3>Travel Website Package</h3>
                    <p class="pricing-price">From £3,499</p>
                    <p class="pricing-subtitle">
                        Ideal for independent agencies and niche tour brands.
                    </p>
                    <ul class="pricing-list">
                        <li>Custom travel website</li>
                        <li>Destination &amp; tour pages</li>
                        <li>Lead capture forms &amp; routing</li>
                        <li>Blog &amp; content sections</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- Online Booking Engine -->
                <article class="card pricing-card">
                    <h3>Online Booking Engine</h3>
                    <p class="pricing-price">From £7,999</p>
                    <p class="pricing-subtitle">
                        Add online booking journeys to your existing website or new build.
                    </p>
                    <ul class="pricing-list">
                        <li>Package &amp; tour booking flows</li>
                        <li>Payment gateway integration</li>
                        <li>Basic back-office booking management</li>
                        <li>Booking confirmations &amp; emails</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-block">Get Started</a>
                </article>

                <!-- End-to-End Travel Platform -->
                <article class="card pricing-card">
                    <h3>End-to-End Travel Platform</h3>
                    <p class="pricing-price">From £14,999</p>
                    <p class="pricing-subtitle">
                        Full digital stack for growing travel businesses.
                    </p>
                    <ul class="pricing-list">
                        <li>Website + booking engine</li>
                        <li>Itinerary builder &amp; document hub</li>
                        <li>Back-office &amp; CRM workspace</li>
                        <li>Reporting &amp; multi-brand support</li>
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
                <h2>Travel Success Stories</h2>
                <p>
                    From specialist tour operators to fast-growing agencies, CloudTravel
                    is helping travel brands deliver better digital experiences.
                </p>
            </div>

            <div class="grid grid-3 success-grid">
                <!-- Adventure Tour Operator -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Adventure Tour Operator</h3>
                    <p>
                        Launched a new website and itinerary builder for global adventure tours.
                    </p>
                    <ul class="success-metrics">
                        <li>55% increase in online enquiries</li>
                        <li>30% higher conversion rate</li>
                        <li>Reduced manual itinerary creation time</li>
                        <li>Expanded into 3 new markets</li>
                    </ul>
                </article>

                <!-- Luxury Travel Agency -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Luxury Travel Agency</h3>
                    <p>
                        Implemented CloudTravel CRM and online booking journeys for repeat guests.
                    </p>
                    <ul class="success-metrics">
                        <li>40% uplift in repeat bookings</li>
                        <li>Improved consultant productivity</li>
                        <li>Consistent premium digital experience</li>
                        <li>Higher average booking value</li>
                    </ul>
                </article>

                <!-- Destination Management Company -->
                <article class="card success-card">
                    <div class="success-image placeholder-image"></div>
                    <h3>Destination Management Company</h3>
                    <p>
                        Rolled out B2B portals for partner agencies and ground operations.
                    </p>
                    <ul class="success-metrics">
                        <li>24/7 access for global partners</li>
                        <li>More efficient contracting</li>
                        <li>Faster quote-to-booking cycles</li>
                        <li>Improved booking accuracy</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- BENEFITS -->
    <section class="section travel-benefits" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>Why Travel Brands Choose CloudTravel</h2>
                <p>
                    CloudTravel combines sector experience with modern engineering
                    to give you platforms that look great and work even better.
                </p>
            </div>

            <div class="grid grid-4 benefits-grid">
                <article class="card benefit-card">
                    <h3>Travel-Specific Design</h3>
                    <p>Built around how travel is researched, booked, and experienced.</p>
                </article>

                <article class="card benefit-card">
                    <h3>API-Ready &amp; Flexible</h3>
                    <p>Connect to your existing GDS, wholesalers, and in-house systems.</p>
                </article>

                <article class="card benefit-card">
                    <h3>Multi-Brand &amp; Multi-Market</h3>
                    <p>Run multiple brands, geographies, and currencies from one platform.</p>
                </article>

                <article class="card benefit-card">
                    <h3>Ongoing Partnership</h3>
                    <p>Continuous optimisation, new modules, and long-term support.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section travel-cta" id="contact">
        <div class="container">
            <div class="cta-inner travel-cta-inner">
                <div class="cta-main">
                    <h2>Let’s Design Your Next Travel Platform</h2>
                    <p>
                        Share your current setup, pain points, and growth plans — we’ll map out
                        a digital roadmap tailored to your travel brand.
                    </p>
                </div>
                <div class="cta-actions travel-cta-actions">
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
                <h2>Contact the CloudTravel Team</h2>
                <p>
                    Tell us a bit about your agency or tour business and we’ll get back to you
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

@endsection