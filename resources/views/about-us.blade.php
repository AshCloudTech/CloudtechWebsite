@extends('layouts.cloudtech')

@section('title', 'About Us | Cloud Technologies Ltd')
@section('meta_title', 'About Us | Cloud Technologies Ltd')
@section('meta_description', 'Learn about Cloud Technologies Ltd, a founder-led digital agency helping businesses across the UK, India and UAE grow through technology, SEO, digital marketing and web solutions.')
@section('meta_keywords', 'Cloud Technologies Ltd, about us, digital agency, SEO, digital marketing, web development, UK, India, UAE')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/about/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/about/js/script.js') }}" defer></script>
    <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
@endpush

@section('content')

    <!-- HERO SECTION (UNCHANGED) -->
    <section class="hero about-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">About Cloud Technologies</p>
                <h1>Empowering Businesses with Innovative<br>Cloud Solutions</h1>
                <p class="hero-subtitle">
                    Cloud Technologies helps organisations harness cloud computing and digital transformation to drive growth, resilience, and long-term success.
                </p>
                <div class="hero-actions">
                    <a href="#our-story" class="btn btn-lg btn-primary">Learn More</a>
                    <a href="#services" class="btn btn-lg btn-ghost hero-ghost-light">Explore Our Solutions</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="section" id="our-story">
        <div class="container story-grid">
            <div class="story-text">
                <p class="section-eyebrow">About Us</p>
                <h2>A Founder-Led Digital Agency Built for Growth</h2>
                <p>
                    Cloud Technologies Ltd is a founder-led digital agency helping businesses build, improve and grow their online presence.
                </p>
                <p>
                    Founded in London in 2019, we now operate across the United Kingdom, India and the UAE, with a team of 40+ specialists across web development, design, SEO and digital marketing.
                </p>
                <p>
                    We combine technology, creativity and digital expertise to deliver websites and marketing strategies built around real business goals. From the first conversation to delivery and ongoing growth, we focus on quality, clear communication and measurable results.
                </p>
            </div>
            <div class="story-image">
                <img src="{{ asset('assets/images/about-us/ourstorydesk.png') }}" alt="Cloud Technologies Ltd" title="Cloud Technologies Ltd">
            </div>
        </div>
    </section>

    <!-- MEET OUR FOUNDER SECTION -->
    <section class="section section-alt" id="founder">
        <div class="container story-grid">
            <div class="founder-visual">
                <img
                    class="founder-image"
                    src="{{ asset('assets/images/about-us/founder.webp') }}"
                    alt="Karthick Subramanian, Founder and Director of Cloud Technologies Ltd"
                    title="Karthick Subramanian — Founder &amp; Director"
                    loading="lazy"
                    decoding="async"
                >
            </div>
            <div class="story-text">
                <p class="section-eyebrow">Meet Our Founder</p>
                <h2>Karthick Subramanian</h2>
                <h3>Founder &amp; Director, Cloud Technologies Ltd</h3>
                <p>
                    With 18+ years of global IT experience, Karthick Subramanian founded Cloud Technologies Ltd with a vision to bring together technology, digital expertise and business strategy to help businesses grow.
                </p>
                <p>
                    His professional experience spans investment and retail banking, UK central government and defence engineering, where quality, governance, security and reliable delivery are essential.
                </p>
                <p>
                    Today, Karthick leads Cloud Technologies Ltd and remains directly involved in the quality and direction of client projects. His experience in complex technology environments brings a structured, results-focused approach to every digital project.
                </p>
            </div>
        </div>

        <div class="container stats-grid about-stats">
            <div class="stat-card">
                <strong data-counter data-target="18" data-suffix="+">0</strong>
                <span>Years of Global IT Experience</span>
            </div>
            <div class="stat-card">
                <strong data-counter data-target="3">0</strong>
                <span>Countries of Operation</span>
            </div>
            <div class="stat-card">
                <strong data-counter data-target="40" data-suffix="+">0</strong>
                <span>Team Members</span>
            </div>
            <div class="stat-card">
                <strong>Founder-Led</strong>
                <span>Project Oversight</span>
            </div>
        </div>
    </section>

    <!-- VISION & MISSION SECTION -->
    <section class="section" id="vision-mission">
        <div class="container grid grid-2">
            <article class="card feature-card">
                <div class="svcIcon"><i data-lucide="eye"></i></div>
                <p class="section-eyebrow">Our Vision</p>
                <h2>Building a smarter digital future for businesses</h2>
                <p>
                    Our vision is to become a trusted global digital technology partner, helping businesses of all sizes use technology, websites and digital marketing to create sustainable growth and stay competitive in a changing digital world.
                </p>
            </article>

            <article class="card feature-card">
                <div class="svcIcon"><i data-lucide="target"></i></div>
                <p class="section-eyebrow">Our Mission</p>
                <h2>Turning digital opportunities into measurable business growth</h2>
                <p>
                    Our mission is to deliver practical, high-quality digital solutions that solve real business challenges. We combine technology, creativity and strategic thinking to help our clients improve their online presence, reach the right audience and achieve long-term results.
                </p>
            </article>
        </div>
    </section>

    <!-- VALUES SECTION -->
    <section class="section section-dark" id="values">
        <div class="container">
            <div class="section-header section-header-light">
                <p class="section-eyebrow">Our Values</p>
                <h2>Driving business growth through quality and excellence</h2>
                <p>
                    We are driven by Quality, Client Focus, Transparency, Innovation, Accountability and Long-Term Thinking. We deliver high-quality work, understand our clients' goals, communicate openly, embrace new ideas, take ownership of our work and build digital solutions designed to create lasting value and sustainable business growth.
                </p>
            </div>
        </div>
    </section>

    <!-- CLIENT TRUST & LOGOS SECTION -->
    <section class="section client-trust-section" id="clients">
        <div class="container">
            <div class="section-header">
                <p class="section-eyebrow">Trusted by Businesses</p>
                <h2>Building Digital Partnerships That Last</h2>
                <p>
                    We work with businesses across the UK, India and UAE, supporting companies across different industries with websites, SEO, digital marketing and technology solutions.
                </p>
                <p>
                    Our client relationships are built on trust, communication, expertise and measurable outcomes.
                </p>
            </div>

            <!-- OUR CLIENTS LOGOS -->
            <div class="section-header" style="margin-bottom: 20px;">
                <p class="section-eyebrow">Our Clients</p>
            </div>

            <div class="client-logo-strip client-logo-marquee" aria-label="Our Clients">
                @php
                    $clientLogos = [
                        ['name' => 'Book My Getaway', 'url' => 'https://bookmygetaway.co.uk/', 'image' => 'https://www.clouddigitallabs.ae/assets/images/clients/45.webp'],
                        ['name' => 'Cash Home Buyers', 'url' => 'https://cashhomebuyers.uk/', 'image' => 'https://www.clouddigitallabs.ae/assets/images/clients/6.webp'],
                        ['name' => 'CricCounty Stores', 'url' => 'https://www.criccounty.com/', 'image' => 'https://www.clouddigitallabs.ae/assets/images/clients/criccounty_stores_logo-scaled.webp'],
                        ['name' => 'DJ Sax Piano', 'url' => 'https://www.djsaxpiano.co.uk/', 'image' => 'https://www.clouddigitallabs.ae/assets/images/clients/djsaxpiano.webp'],
                        ['name' => 'Express Driveways & Patios', 'url' => 'https://www.expressdrivewaysandpatios.co.uk/', 'image' => 'https://www.clouddigitallabs.ae/assets/images/clients/ExpressDriveways&Patios.webp'],
                        ['name' => 'Goodbrand Removals', 'url' => 'https://www.goodbrandremovals.co.uk/', 'image' => 'https://www.clouddigitallabs.ae/assets/images/clients/10.webp'],
                    ];
                @endphp

                <div class="client-logo-marquee__viewport">
                    <div class="client-logo-marquee__track">
                        <div class="client-logo-marquee__group">
                            @foreach($clientLogos as $logo)
                                <a class="client-logo-card" href="{{ $logo['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="Visit {{ $logo['name'] }} website" title="{{ $logo['name'] }}">
                                    <img src="{{ $logo['image'] }}" alt="{{ $logo['name'] }} logo" loading="lazy" decoding="async">
                                </a>
                            @endforeach
                        </div>
                        <div class="client-logo-marquee__group" aria-hidden="true">
                            @foreach($clientLogos as $logo)
                                <a class="client-logo-card" href="{{ $logo['url'] }}" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-label="Visit {{ $logo['name'] }} website" title="{{ $logo['name'] }}">
                                    <img src="{{ $logo['image'] }}" alt="" loading="lazy" decoding="async">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- TESTIMONIALS SECTION -->
            <div class="section-header testimonial-heading">
                <p class="section-eyebrow">What Our Clients Say</p>
                <h2>Real Experiences From Our Clients</h2>
                <p>
                    We believe the best measure of our work is the experience and results of the businesses we support.
                </p>
            </div>

            <div class="testimonial-slider" data-testimonial-slider>
                <div class="testimonial-viewport">
                    <div class="testimonial-track">
                        <article class="testimonial-slide is-active">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“Cloud Technologies Ltd understood our requirements and delivered a professional solution that made a real difference to our business.”</blockquote>
                            <div class="testimonial-client"><strong>London Legal Practice</strong></div>
                        </article>

                        <article class="testimonial-slide">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“I was impressed with the professional and helpful service from London Legal Practice. They explained everything clearly and made the whole process much easier. A reliable legal team.”</blockquote>
                            <div class="testimonial-client"><strong>London Removals Co</strong><span>— Sarah Williams</span></div>
                        </article>

                        <article class="testimonial-slide">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“Excellent removals service from start to finish. The team was punctual, careful with our belongings and very professional throughout the move. I would definitely recommend them.”</blockquote>
                            <div class="testimonial-client"><strong>London Removals Co</strong><span>— Daniel Carter</span></div>
                        </article>

                        <article class="testimonial-slide">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“CricCounty has been a great platform for cricket enthusiasts. The content is useful, engaging and easy to follow. A fantastic resource for anyone who loves cricket.”</blockquote>
                            <div class="testimonial-client"><strong>CricCounty</strong><span>— Rahul Sharma</span></div>
                        </article>

                        <article class="testimonial-slide">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“We are very happy with the tutoring service. The lessons are well structured, and the tutor explains difficult topics in a simple and understandable way. We have already seen a positive improvement.”</blockquote>
                            <div class="testimonial-client"><strong>Top Maths Tutors</strong><span>— Emily Johnson</span></div>
                        </article>

                        <article class="testimonial-slide">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“Excellent service from Minty Heating &amp; Plumbing. They responded quickly, arrived on time and completed the work professionally. The pricing was clear and the service was reliable.”</blockquote>
                            <div class="testimonial-client"><strong>Minty Heating &amp; Plumbing</strong><span>— James Thompson</span></div>
                        </article>

                        <article class="testimonial-slide">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“The team made the Schengen visa process much easier for us. They provided clear guidance, helped with the documentation and answered our questions throughout the process. Very professional service.”</blockquote>
                            <div class="testimonial-client"><strong>Schengen Visa Express</strong><span>— George Daniel</span></div>
                        </article>

                        <article class="testimonial-slide">
                            <div class="testimonial-stars">★★★★★</div>
                            <blockquote>“The Learning Compass provides a supportive and professional learning experience. The guidance was clear, personalised and genuinely helpful. I would highly recommend their services.”</blockquote>
                            <div class="testimonial-client"><strong>The Learning Compass</strong><span>— Michael Brown</span></div>
                        </article>
                    </div>
                </div>
                <button type="button" class="testimonial-arrow testimonial-arrow-prev" data-testimonial-prev aria-label="Previous testimonial">&#10094;</button>
                <button type="button" class="testimonial-arrow testimonial-arrow-next" data-testimonial-next aria-label="Next testimonial">&#10095;</button>
                <div class="testimonial-dots" data-testimonial-dots></div>
            </div>
        </div>
    </section>

    <!-- OUR WORK SECTION -->
    <section class="section section-alt" id="our-work">
        <div class="container">
            <div class="section-header">
                <p class="section-eyebrow">Our Work</p>
                <h2>Projects Built Around Real Business Goals</h2>
                <p>
                    From websites and SEO campaigns to digital marketing and technology solutions, our projects are designed to solve real business challenges and create measurable opportunities for growth.
                </p>
            </div>

            <div class="stats-grid about-stats">
                <div class="stat-card">
                    <strong data-counter data-target="40" data-suffix="+">0</strong>
                    <span>Team Members</span>
                </div>
                <div class="stat-card">
                    <strong data-counter data-target="3">0</strong>
                    <span>Countries</span>
                </div>
                <div class="stat-card">
                    <strong data-counter data-target="100" data-suffix="+">0</strong>
                    <span>Projects Delivered</span>
                </div>
                <div class="stat-card">
                    <strong data-counter data-target="18" data-suffix="+">0</strong>
                    <span>Years of IT Experience</span>
                </div>
            </div>

            <div class="center-actions">
                <a href="{{ url('/case-studies') }}" class="btn btn-primary">View Our Case Studies</a>
            </div>
        </div>
    </section>

    <!-- WHY BUSINESSES CHOOSE US -->
    <section class="section" id="why-us">
        <div class="container">
            <div class="section-header">
                <p class="section-eyebrow">Why Businesses Choose Us</p>
            </div>

            <div class="grid grid-3 why-grid">
                <article class="card why-card">
                    <h3>Founder-Led Expertise</h3>
                    <p>Our founder remains directly involved in project quality and direction, helping maintain high standards across every engagement.</p>
                </article>
                <article class="card why-card">
                    <h3>One Connected Team</h3>
                    <p>Our specialists work across web development, design, SEO and digital marketing, giving clients access to connected expertise under one team.</p>
                </article>
                <article class="card why-card">
                    <h3>Business-Focused Solutions</h3>
                    <p>We take the time to understand your business, market, audience and objectives before recommending the right digital solution.</p>
                </article>
               
               
            </div>
        </div>
    </section>

    <!-- OUR COMPANY SECTION -->
    <section class="section section-alt" id="company">
        <div class="container">
            <div class="section-header">
                <p class="section-eyebrow">Our Company</p>
                <h2>Legal Entity</h2>
                <h3>Cloud Technologies Ltd</h3>
            </div>

            <div class="company-details-grid">
                <div><strong>Registered</strong><span>England &amp; Wales · Company No. 12036217</span></div>
                <div><strong>Trading Since</strong><span>June 2019</span></div>
                <div><strong>Registered Office</strong><span>174 1st Floor, The Type Building, Sugar House Island, London, England, E15 2TP</span></div>
                <div><strong>Operating In</strong><span>United Kingdom · India · UAE</span></div>
                <div><strong>Team</strong><span>40+ specialists across technology, design and digital marketing</span></div>
            </div>
        </div>
    </section>

    <!-- OUR JOURNEY SECTION -->
    <section class="section" id="journey">
        <div class="container">
            <div class="section-header">
                <p class="section-eyebrow">Our Journey</p>
            </div>

            <div class="journey-grid">
                <article class="card journey-card">
                    <strong>2019 — Cloud Technologies Ltd Begins</strong>
                    <p>Cloud Technologies Ltd starts trading in London, supporting businesses with technology and digital solutions.</p>
                </article>
                <article class="card journey-card">
                    <strong>2025 — India Operation Expands</strong>
                    <p>Our India operation expands our delivery capabilities and strengthens our technology, development and digital marketing services.</p>
                </article>
                <article class="card journey-card">
                    <strong>2025 — UAE Operation Launches</strong>
                    <p>We extend our presence into the UAE, supporting businesses across the Gulf with digital and technology solutions.</p>
                </article>
                <article class="card journey-card">
                    <strong>Today — Growing Across Three Markets</strong>
                    <p>Cloud Technologies Ltd now operates across the UK, India and UAE, supported by a growing team of 40+ specialists while maintaining our founder-led approach.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="section section-dark" id="ready">
        <div class="container section-header section-header-light">
            <p class="section-eyebrow">Ready to Grow Your Business?</p>
            <h2>Let's Build Your Next Digital Success Story</h2>
            <p>
                Whether you need a new website, SEO, digital marketing or a complete digital strategy, our team is ready to help you identify the right opportunities and turn them into measurable growth.
            </p>
            <div class="hero-actions">
                <a href="{{ url('/contact-us') }}" class="btn btn-lg btn-primary">Request a Consultation</a>
                <a href="{{ url('/services') }}" class="btn btn-lg btn-ghost hero-ghost-light">Explore Our Services</a>
            </div>
        </div>
    </section>

@endsection