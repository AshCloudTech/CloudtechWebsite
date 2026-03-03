@extends('layouts.cloudtech')

@section('title', 'Digital Marketing Agency UK | Services & Advertising')
@section('meta_title', 'Digital Marketing Agency UK | Services & Advertising.')
@section('meta_description', 'Digital marketing agency UK offering services and advertising solutions to grow traffic,
    leads and sales for your business UK today with proven results online!!')
@section('meta_keywords', 'digital marketing agency UK, digital marketing services UK, online advertising UK, SEO services UK, PPC services UK, social media marketing UK, content marketing UK, email marketing UK, digital strategy UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/digitalMarketing/js/script.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    @endpush
@section('content')



    <!-- HERO -->
    <section class="hero dm-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">Digital Marketing Services</p>
                <h1>Digital Marketing Agency & <br> Advertising Experts Transforming<br> Your Online Presence</h1>
                <p class="hero-subtitle">
                    Cloud Technologies Ltd is a leading digital marketing and advertising agency delivering data-driven
                    strategies, targeted campaigns, and innovative solutions to help businesses strengthen their online
                    presence and achieve measurable growth.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free Consultation</a>
                    <a href="#services" class="btn btn-lg btn-ghost hero-ghost-light">Explore Services</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">500+</span>
                        <span class="hero-stat-label">Clients Served</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">340%</span>
                        <span class="hero-stat-label">Avg Traffic Growth</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">98%</span>
                        <span class="hero-stat-label">Client Retention</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CLOUD TECHNOLOGIES -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Cloud Technologies Ltd?</h2>
                <p>
                    Cloud Technologies Ltd delivers tailored digital marketing and advertising solutions that drive real
                    growth, backed by data, innovation, and expert execution.</p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <i class="ri-award-line why-icon icon-indigo"></i>
                    <h3>Proven Track Record</h3>
                    <p>
                        As a trusted digital marketing company, we deliver measurable results through high-performing
                        campaigns that drive growth and long-term success for businesses of all sizes.
                    </p>
                </article>

                <article class="card why-card">
                    <i class="ri-team-line why-icon icon-cyan"></i>
                    <h3>Expert Team</h3>
                    <p>
                        Our digital marketing agency is powered by an expert team of strategists, creators, and analysts
                        dedicated to crafting impactful marketing solutions that elevate your brand.
                    </p>
                </article>

                <article class="card why-card">
                    <i class="ri-line-chart-line why-icon icon-pink"></i>
                    <h3>Data‑Driven Approach</h3>
                    <p>
                        As a results-focused digital marketing company, we use advanced analytics and real-time data to
                        build smarter strategies that maximize visibility, conversions, and ROI.
                    </p>
                </article>

                <article class="card why-card">
                    <i class="ri-customer-service-2-line why-icon icon-amber"></i>
                    <h3>Dedicated Support</h3>
                    <p>
                        Our digital marketing agency provides reliable, dedicated support to ensure your campaigns run
                        smoothly, stay optimized, and continuously deliver strong performance.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICES GRID -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Comprehensive Digital Marketing Services</h2>
                <p>
                    End-to-end digital marketing services designed to boost visibility, drive engagement, and accelerate
                    business growth across all online channels.
                </p>
            </div>

            <div class="grid grid-3 services-grid">
                <!-- Row 1 -->

                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.digi-marketing.google-my-business-optimisation') }}">
                            <img src="{{ asset('assets/images/digitalmark/gbp.webp') }}"
                                alt="Google Business Profile Optimisation" title="Google Business Profile Optimisation"
                                aria-label="Google Business Profile Optimisation" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-amber"></div>
                        <h3><a href="{{ route('services.digi-marketing.google-my-business-optimisation') }}">Google
                                Business Profile
                            </a></h3>
                    </div>
                    <p>
                        Google Business Profile optimization enhances your local visibility by improving your business
                        listing with accurate information, keywords, posts, and customer reviews. This boosts map rankings,
                        increases engagement, and drives more local traffic and leads.
                    </p>
                    <a href="{{ route('services.digi-marketing.google-my-business-optimisation') }}"
                        class="service-link">Learn More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.digi-marketing.meta-ads-services') }}">
                            <img src="{{ asset('assets/images/digitalmark/meta.webp') }}" alt="Meta Ads Services"
                                title="Meta Ads Services" aria-label="Meta Ads Services" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-meta"></div>
                        <h3><a href="{{ route('services.digi-marketing.meta-ads-services') }}">Meta Ads Services</a></h3>
                    </div>
                    <p>
                        Meta Ads Services help grow your brand through targeted Facebook and Instagram campaigns designed to
                        reach the right audience. With optimized creatives, precise targeting, and performance tracking, you
                        gain more traffic, leads, and conversions.
                    </p>
                    <a href="{{ route('services.digi-marketing.meta-ads-services') }}" class="service-link">Learn
                        More</a>
                </article>

                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.digi-marketing.ppc-services') }}">
                            <img src="{{ asset('assets/images/digitalmark/ppc.webp') }}" alt="PPC Services"
                                title="PPC Services" aria-label="PPC Services" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-orange"></div>
                        <h3><a href="{{ route('services.digi-marketing.ppc-services') }}">PPC Services</a></h3>
                    </div>
                    <p>
                        PPC Services deliver measurable results by running paid advertising campaigns on platforms like
                        Google Ads. With keyword targeting, optimized ad copy, and strategic bidding, PPC drives qualified
                        traffic and improves ROI for your business.
                    </p>
                    <a href="{{ route('services.digi-marketing.ppc-services') }}" class="service-link">Learn More</a>
                </article>

                <!-- Row 5 -->
                <article class="card service-card">
                    <div class="service-thumb">
                        <a href="{{ route('services.digi-marketing.smm-services') }}">
                            <img src="{{ asset('assets/images/digitalmark/smm.webp') }}" alt="SMM Services"
                                title="SMM Services" aria-label="SMM Services" aria-hidden="true" loading="lazy"
                                decoding="async">
                        </a>
                    </div>

                    <div class="service-header">
                        <div class="service-strip strip-social"></div>
                        <h3><a href="{{ route('services.digi-marketing.smm-services') }}">SMM Services</a></h3>
                    </div>
                    <p>
                        SMM Services strengthen your brand’s online presence through strategic social media marketing,
                        engaging content, and community building. This boosts brand awareness, increases followers, and
                        drives consistent engagement across major social platforms.
                    </p>
                    <a href="{{ route('services.digi-marketing.smm-services') }}" class="service-link">Learn More</a>
                </article>
            </div>

        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Proven Process</h2>
                <p>
                    A clear, results-driven process to plan, execute, and optimize your digital growth.</p>
            </div>

            <div class="grid grid-5 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Discovery &amp; Audit</h3>
                    <p>
                        We begin by analyzing your brand, competitors, and current digital performance to identify
                        opportunities and uncover issues affecting visibility and growth.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Strategy Development</h3>
                    <p>
                        Based on insights, we create a customized digital marketing strategy focused on boosting visibility,
                        driving traffic, and achieving your business goals.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>
                        Our team executes the plan with precision—optimizing your website, running campaigns, and applying
                        proven digital marketing techniques for maximum impact.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitor &amp; Analyse</h3>
                    <p>
                        We continuously track performance, measure key metrics, and review campaign data to ensure
                        everything is performing at its highest potential.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">5</div>
                    <h3>Optimise &amp; Scale</h3>
                    <p>
                        Using real-time insights, we refine strategies, improve results, and scale your marketing efforts to
                        drive consistent growth and long-term success.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CLIENT SUCCESS STORIES -->
    <section class="section section-dark" id="success">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Client Success Stories</h2>
                <p>
                    Our clients’ success highlights the effectiveness of our tailored digital marketing services and
                    long-term growth partnerships.
                </p>
            </div>

            <div class="grid grid-3 success-grid success-grid-6">
                <article class="card success-card">
                    <div class="success-avatar" aria-hidden="true"><i data-lucide="search"></i></div>
                    <h3>Search Visibility Drives Growth</h3>
                    <p class="success-quote">
                        Most online journeys begin with a search, making strong SEO essential for gaining visibility and
                        attracting potential customers.
                    </p>
                </article>

                <article class="card success-card">
                    <div class="success-avatar" aria-hidden="true"><i data-lucide="globe"></i></div>
                    <h3>Online Research Shapes Buying Decisions</h3>
                    <p class="success-quote">
                        Consumers routinely research brands online before purchasing, highlighting the importance of a solid
                        digital presence.
                    </p>
                </article>

                <article class="card success-card">
                    <div class="success-avatar" aria-hidden="true"><i data-lucide="share-2"></i></div>
                    <h3>Social Media Builds Brand Discovery</h3>
                    <p class="success-quote">
                        Social platforms play a major role in how people find and engage with brands, making consistent
                        social activity crucial.
                    </p>
                </article>

                <article class="card success-card">
                    <div class="success-avatar" aria-hidden="true"><i data-lucide="bar-chart-3"></i></div>
                    <h3>Data-Driven Marketing Boosts Performance</h3>
                    <p class="success-quote">
                        Businesses that rely on analytics make smarter decisions, optimize campaigns effectively, and
                        achieve stronger long-term results.
                    </p>
                </article>

                <article class="card success-card">
                    <div class="success-avatar" aria-hidden="true"><i data-lucide="rocket"></i></div>
                    <h3>Better UX Improves Conversions</h3>
                    <p class="success-quote">
                        Fast, user-friendly experiences reduce drop-offs and help convert more visitors into leads and
                        paying customers.
                    </p>
                </article>

                <article class="card success-card">
                    <div class="success-avatar" aria-hidden="true"><i data-lucide="shield-check"></i></div>
                    <h3>Trust Signals Increase Enquiries</h3>
                    <p class="success-quote">
                        Clear reviews, certifications, and consistent branding build credibility and encourage customers to
                        take action.
                    </p>
                </article>
            </div>
        </div>
    </section>



    <!-- DIGITAL MARKETING INSIGHTS -->
    <!-- <section class="section section-alt" id="insights">
                                <div class="container">
                                    <div class="section-header">
                                        <h2>Digital Marketing Insights</h2>
                                        <p>
                                            Stay ahead with the latest trends and statistics in digital marketing.
                                        </p>
                                    </div>

                                    <div class="grid grid-4 insights-grid">
                                        <article class="card insight-card">
                                            <p class="insight-value">93%</p>
                                            <p class="insight-text">
                                                of online experiences begin with a search engine, making SEO essential.
                                            </p>
                                        </article>

                                        <article class="card insight-card">
                                            <p class="insight-value">63%</p>
                                            <p class="insight-text">
                                                of Google searches happen on mobile devices, requiring mobile optimisation.
                                            </p>
                                        </article>

                                        <article class="card insight-card">
                                            <p class="insight-value">5.3x</p>
                                            <p class="insight-text">
                                                ROI on average for businesses investing in SEO compared to traditional marketing.
                                            </p>
                                        </article>

                                        <article class="card insight-card">
                                            <p class="insight-value">70%</p>
                                            <p class="insight-text">
                                                of marketers say SEO is more effective than PPC for generating sales.
                                            </p>
                                        </article>
                                    </div>
                                </div>
                            </section> -->

    <!-- CTA -->
    <section class="section dm-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner dm-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Grow Your Business?</h2>
                    <p>
                        Start reaching more customers and scaling faster with tailored digital marketing strategies built
                        for your business.
                    </p>
                </div>
                <div class="cta-actions dm-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get a Call Back</a>
                    <a href="#services" class="btn btn-outline-light">View All Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SIMPLE CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Free Digital Marketing Audit</h2>
                <p>
                    Share a few details about your business and we’ll send you a personalised audit with clear next steps.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="digital_marketing_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="audit_name">Full Name</label>
                        <input type="text" id="audit_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="audit_email">Email Address</label>
                        <input type="email" id="audit_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="audit_website">Website URL</label>
                        <input type="url" id="audit_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="audit_goal">Primary Goal</label>
                        <input type="text" id="audit_goal" name="payload[goal]"
                            placeholder="More leads, sales, visibility, etc.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="audit_message">Tell us about your business</label>
                        <textarea id="audit_message" name="message" rows="4"
                            placeholder="Industry, target audience, current challenges..." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>


@endsection
