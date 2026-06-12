@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'local SEO services UK, local SEO agency UK, local SEO company UK, Google Business Profile
    optimization UK, local search optimization UK, local SEO audit UK, local keyword targeting UK, local link building UK,
    map pack optimization UK, mobile local SEO UK, local citation building UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/local-seo/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/digitalMarketing/local-seo/js/script.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    @endpush

@section('content')
@php
    $hasDynamicContent = !empty($content);
@endphp
@php
    $hero = $content['hero'] ?? null;
@endphp



    <!-- HERO -->
    <section class="hero local-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Local SEO Services</p>
                <h1> {!! str_replace('|', '<br>', $hero['title'] ?? 'Boost Your Visibility with Expert Local SEO Services') !!}</h1>
                <p class="hero-subtitle">
                      {{ $hero['subtitle'] ?? 'Our Local SEO Services help your business rank higher in local searches through targeted keywords,
                    Google Business Profile SEO, and proven Local Search Optimization strategies.' }}
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="local-seo">Get Local SEO
                        Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Book Consultation</a>
                </div>
            </div>

            {{-- <div class="hero-panel hero-media">
                    <div class="hero-media-inner">
                        <p class="hero-media-label">Local Presence Preview</p>
                        <p class="hero-media-text">
                            Visual representation of how your business appears across Google Maps and local search results.
                        </p>
                        <div class="hero-media-block">
                            <span class="hero-pin">●</span>
                            <div class="hero-map-lines"></div>
                        </div>
                    </div>
                </div>  --}}
        </div>
    </section>
     @if(!$hasDynamicContent)

    <!-- LOCAL SEARCH STATISTICS -->
    <section class="section section-stats" id="stats">
        <div class="container">
            <div class="section-header stats-header">
                <h2>Local Search Statistics</h2>
                <p>Key data showing how local searches influence customer decisions and drive foot traffic.</p>
            </div>

            <div class="stats-grid">
                <article class="stat-card">
                    <p class="stat-value">70%</p>
                    <p class="stat-label">Shoppers use local search to compare nearby businesses.</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">55%</p>
                    <p class="stat-label"> Users choose a business after viewing its local profile.</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">68%</p>
                    <p class="stat-label">Searchers visit a nearby physical location after looking online.</p>
                </article>
                <article class="stat-card">
                    <p class="stat-value">82%</p>
                    <p class="stat-label">Customers rely on online feedback before choosing a local business.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- LOCAL SEO PROCESS -->
    <section class="section" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Local SEO Process</h2>
                <p>
                    A clear, streamlined strategy that enhances your local presence, improves visibility,
                    and drives steady customer growth.
                </p>
            </div>

            <div class="process-grid process-grid-ui-3">
                <article class="card process-card process-card-ui">
                    <div class="process-step">1</div>
                    <h3>Local Audit</h3>
                    <p>
                        We assess your local presence to identify gaps and opportunities for stronger visibility.
                    </p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-step">2</div>
                    <h3>Optimisation</h3>
                    <p>
                        We enhance key SEO elements to improve local rankings, relevance, and customer engagement.
                    </p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-step">3</div>
                    <h3>Growth</h3>
                    <p>
                        We apply targeted strategies that drive increased local traffic, leads, and ongoing growth.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- WHY CHOOSE OUR LOCAL SEO SERVICES -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Local SEO Services?</h2>
                <p>Our Local SEO agency boosts local rankings and helps you attract more nearby customers.</p>
            </div>

            <div class="why-grid why-grid-ui">
                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="map-pin"></i></div>
                    <h3>Local Search Rankings</h3>
                    <p>
                        We improve your local SEO rankings to boost visibility and attract nearby customers.
                    </p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="building-2"></i></div>
                    <h3>Google Business Profile</h3>
                    <p>
                        We optimise your Google Business Profile for stronger map visibility and local performance.
                    </p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="users"></i></div>
                    <h3>Community Visibility</h3>
                    <p>
                        We enhance your business presence across directories to strengthen your local footprint.
                    </p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="smartphone"></i></div>
                    <h3>Mobile Optimisation</h3>
                    <p>
                        We optimise your site for mobile users to maximise local search engagement.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- COMPLETE LOCAL SEO SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="services-layout">
                <div class="services-copy">
                    <h2>Complete Local SEO Services</h2>
                    <p class="services-intro">
                        Comprehensive Local SEO solutions that improve local rankings, visibility, and customer growth.</p>
                    <ul class="services-list">
                        <li>Local SEO Audit</li>
                        <li>Keyword Targeting</li>
                        <li>Google Business Profile</li>
                        <li>Local Citations</li>
                        <li>On-Page Local SEO</li>
                        <li>Local Link Building</li>
                        <li>Map Pack optimisation</li>
                        <li>Reputation Management</li>
                        <li>Mobile local SEO</li>
                        <li>Local Content Strategy</li>
                        <li>Competitor Analysis</li>
                        <li>Local Performance Tracking</li>
                    </ul>
                </div>
                <div class="services-panel">
                    <div class="services-panel-inner">
                        <img src="{{ asset('assets/images/seo/local/local_seo_services.webp') }}"
                            alt="Local SEO Services – Cloud Technologies Ltd"
                            title="Local SEO services to improve Google Business Profile and local rankings"
                            aria-hidden="true" aria-label="Local SEO Services Image"
                            loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Boost your local search growth with connected SEO and digital marketing services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/google-business-profile-service-uk"
                    aria-label="Google Business Profile services UK">
                    <span>Google Business Profile Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/digital-marketing-service-uk"
                    aria-label="Digital marketing services UK">
                    <span>Digital Marketing Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/ppc-advertising-service-uk"
                    aria-label="PPC advertising services UK">
                    <span>PPC Advertising Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/social-media-marketing-service-uk"
                    aria-label="Social media marketing services UK">
                    <span>Social Media Marketing Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- WHAT ARE LOCAL SEO SERVICES -->
    <section class="section section-national-about" id="about-local-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are Local SEO Services?</h2>

                    <p>
                        Local SEO services focus on helping your business appear in location-based searches when customers
                        look for services “near me” or within their area. These searches often trigger Google’s map pack,
                        where only the top three local businesses are shown prominently above regular search results.
                    </p>

                    <p>
                        Local SEO combines website optimisation, Google Business Profile enhancement, local citations,
                        reviews, and location signals to improve your visibility where it matters most in front of nearby
                        customers ready to buy.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>What’s Included in Professional Local SEO</h3>

                    <p>
                        A complete local SEO campaign includes:
                    </p>

                    <ul>
                        <li>Google Business Profile optimisation</li>
                        <li>NAP consistency across directories</li>
                        <li>Local citation building</li>
                        <li>Location-based keyword targeting</li>
                        <li>On-page local landing pages</li>
                        <li>Review acquisition strategy</li>
                        <li>Local link building</li>
                        <li>Map pack optimisation</li>
                        <li>Mobile optimisation for local searches</li>
                    </ul>

                    <p class="national-about-note">
                        These elements work together to strengthen your local presence across Google Search and Maps.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY LOCAL SEO IS ESSENTIAL -->
    <section class="section section-national-growth" id="local-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why Local SEO Is Essential for Small and Medium Businesses</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Most customers now search online before visiting a local business. If your company does not appear in
                    local search results or the map pack, you are losing customers to competitors who do.
                </p>

                <p>
                    Local SEO ensures your business is visible at the exact moment people are searching for your services
                    nearby, turning searches into calls, visits, and enquiries.
                </p>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="section local-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner local-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Attract More Local Customers?</h2>
                    <p>
                        Boost your local visibility and attract nearby customers with powerful Local SEO Services.
                    </p>
                </div>
                <div class="cta-actions local-cta-actions">
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="local-seo">Get Free Local
                        Audit</a>
                    <a href="#stats" class="btn btn-outline-light">View Local Stats</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Local SEO Audit</h2>
                <p>
                    Tell us about your business and we’ll send a tailored local SEO audit with clear next steps.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_local_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_local_name">Full Name</label>
                        <input type="text" id="seo_local_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="seo_local_email">Email Address</label>
                        <input type="email" id="seo_local_email" name="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_local_business">Business Name</label>
                        <input type="text" id="seo_local_business" name="payload[business_name]"
                            placeholder="Your business name">
                    </div>

                    <div class="form-field">
                        <label for="seo_local_location">Primary Location / City</label>
                        <input type="text" id="seo_local_location" name="payload[primary_location]"
                            placeholder="City or area you serve">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_local_message">What would you like to improve locally?</label>
                        <textarea id="seo_local_message" name="message" rows="4"
                            placeholder="More calls, store visits, map visibility, reviews, etc." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>


    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Local SEO Service FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What Are Local SEO Services?</summary>
                        <div class="faq-content">
                            <p>
                                Local SEO Services optimize your online presence so your business appears in local searches,
                                map results, and “near me” queries to attract nearby customers.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2.Why Is Local SEO Important?</summary>
                        <div class="faq-content">
                            <p>
                                Local SEO boosts visibility, increases local traffic, and helps customers easily find and
                                choose your business both online and offline.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. How Does Local SEO Help My Business Grow?</summary>
                        <div class="faq-content">
                            <p>
                                It improves rankings, increases foot traffic, strengthens credibility, and drives more
                                calls, visits, and inquiries from nearby customers.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. What Is Included in Your Local SEO Process?</summary>
                        <div class="faq-content">
                            <p>
                                Our process includes a Local Audit, Optimization phase, and Growth strategy that ensures
                                improved visibility and lasting performance.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. What Platforms Do You Optimize for Local SEO?</summary>
                        <div class="faq-content">
                            <p>We optimize your Google Business Profile, local citations, directories, website pages, and
                                mobile experience for stronger results.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. How Do You Improve Local Search Rankings?</summary>
                        <div class="faq-content">
                            <p>
                                We use keyword targeting, on-page optimization, map pack improvements, link building, and
                                Google Business Profile enhancements.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>


@endif
@if(!empty($content['trust']) && !empty($content['growth']))
<section class="section dm-dual-section">
    <div class="container">

        <div class="dm-dual-grid">

            {{-- LEFT (TRUST BOX) --}}
            <div class="dm-dual-left">
                <h2 class="dm-dual-title">
                    {{ $content['trust']['title'] }}
                </h2>

                <p class="dm-dual-desc">
                    {{ $content['trust']['description'] }}
                </p>
            </div>

            {{-- RIGHT (GROWTH CONTENT) --}}
            <div class="dm-dual-right">

                <h3 class="dm-dual-heading">
                    {{ $content['growth']['title'] }}
                </h3>

                <p class="dm-dual-text">
                    {{ $content['growth']['description'] }}
                </p>

                <div class="dm-dual-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['growth']['cta'] }}
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['services_glance']))
<section class="section dm-glance-section">
    <div class="container">

        <div class="section-header">
            <h2>{{ $content['services_glance']['title'] }}</h2>
        </div>

        <div class="dm-glance-grid">

            @foreach($content['services_glance']['items'] as $item)
                <a href="{{ route($item['route']) }}" class="dm-glance-card">

                    <div class="dm-glance-content">
                        <h3 class="dm-glance-title">
                            {{ $item['title'] }}
                        </h3>

                        <span class="dm-glance-link">
                            {{ strtoupper($item['cta']) }} →
                        </span>
                    </div>

                </a>
            @endforeach

        </div>

    </div>
</section>
@endif
@if(!empty($content['international']))
<section class="section section-alt">
    <div class="container">

        <div class="dm-intl-box">

            <div class="dm-intl-left">
              <div class="dm-intl-icon">
            <i class="ri-information-line"></i>
        </div>
            </div>

            <div class="dm-intl-content">
                <h2>{{ $content['international']['title'] }}</h2>
                <p>{{ $content['international']['description'] }}</p>
            </div>

            <div class="dm-intl-action">
                <a href="/contact-us" class="btn btn-primary">
                    {{ $content['international']['cta'] }}
                </a>
            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['complete_services']))
<section class="section dm-complete-section">
    <div class="container">

        <div class="dm-complete-grid">

            {{-- LEFT CONTENT --}}
            <div class="dm-complete-left">

                <h2 class="dm-complete-title">
                    {{ $content['complete_services']['title'] }}
                </h2>

                <p class="dm-complete-text">
                    {{ $content['complete_services']['intro'] }}
                </p>

                <p class="dm-complete-sub">
                    {{ $content['complete_services']['sub_intro'] }}
                </p>

                <ul class="dm-complete-list">
                    @foreach($content['complete_services']['list'] as $item)
                        <li>
                            <span class="dm-complete-check"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <p class="dm-complete-bottom">
                    {{ $content['complete_services']['bottom_text'] }}
                </p>

                <div class="dm-complete-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['complete_services']['cta'] }}
                    </a>
                </div>

            </div>

            {{-- RIGHT IMAGE --}}
            <div class="dm-complete-right">
                <img src="{{ asset('assets/images/seo/local/cloudtech-seo.webp') }}" alt="Local Seo Services">
            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['data_driven']))
<section class="section section-alt dm-insight-section">
    <div class="container">

        <div class="dm-insight-grid">

            {{-- LEFT IMAGE --}}
            <div class="dm-insight-media">
                <img src="{{ asset('assets/images/seo/local/local-seo.webp') }}" alt="local Strategy">
            </div>

            {{-- RIGHT CONTENT --}}
            <div class="dm-insight-content">

                <h2 class="dm-insight-title">
                    {{ $content['data_driven']['title'] }}
                </h2>

                <p class="dm-insight-text">
                    {{ $content['data_driven']['intro'] }}
                </p>

                <p class="dm-insight-sub">
                    {{ $content['data_driven']['sub_intro'] }}
                </p>

                <ul class="dm-insight-list">
                    @foreach($content['data_driven']['list'] as $item)
                        <li>
                            <span class="dm-insight-mark"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <p class="dm-insight-bottom">
                    {{ $content['data_driven']['bottom_text'] }}
                </p>

                <div class="dm-insight-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['data_driven']['cta'] }}
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
@endif

@if(!empty($content['affordable']))
<section class="section dm-affordable-section">
    <div class="container">

        <div class="dm-affordable-grid">

            {{-- LEFT CONTENT --}}
            <div class="dm-affordable-content">

                <h2 class="dm-affordable-title">
                    {{ $content['affordable']['title'] }}
                </h2>

                <p class="dm-affordable-text">
                    {{ $content['affordable']['intro'] }}
                </p>

                <p class="dm-affordable-sub">
                    {{ $content['affordable']['sub_intro'] }}
                </p>

                <ul class="dm-affordable-list">
                    @foreach($content['affordable']['list'] as $item)
                        <li>
                            <span class="dm-affordable-icon"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                <p class="dm-affordable-bottom">
                    {{ $content['affordable']['bottom_text'] }}
                </p>

                <div class="dm-affordable-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['affordable']['cta'] }}
                    </a>
                </div>

            </div>

            {{-- RIGHT IMAGE --}}
            <div class="dm-affordable-media">
                <img src="{{ asset('assets/images/seo/local/seo-service.webp') }}" alt="Affordable Services">
            </div>

        </div>

    </div>
</section>
@endif
@if(!empty($content['why_choose']) && !empty($content['promise']))
<section class="section dm-trust-section">
    <div class="container">

        <div class="dm-trust-grid">

            {{-- LEFT (WHY CHOOSE) --}}
            <div class="dm-trust-left">

                <h2 class="dm-trust-title">
                    {{ $content['why_choose']['title'] }}
                </h2>

                <p class="dm-trust-text">
                    {{ $content['why_choose']['description_1'] }}
                </p>

                <p class="dm-trust-text">
                    {{ $content['why_choose']['description_2'] }}
                </p>

                <div class="dm-trust-action">
                    <a href="/contact-us" class="btn btn-primary">
                        {{ $content['why_choose']['cta'] }}
                    </a>
                </div>

            </div>

            {{-- RIGHT (PROMISE) --}}
            <div class="dm-trust-right">

                <h3 class="dm-trust-subtitle">
                    {{ $content['promise']['title'] }}
                </h3>

                <ul class="dm-trust-list">
                    @foreach($content['promise']['items'] as $item)
                        <li>
                            <span class="dm-trust-check"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>

    </div>
</section>
@endif

@if(!empty($content['faq']['items']))
<section class="section section-alt section-faq" id="faq">
    <div class="container">

        <div class="section-header">
            <h2>{{ $content['faq']['title'] }}</h2>
        </div>

        <div class="faq-wrap">
            <div class="faq-list">

                @foreach($content['faq']['items'] as $faq)
                    <details class="faq-item">
                        <summary>{{ $faq['q'] }}</summary>

                        <div class="faq-content">
                            <p>{{ $faq['a'] }}</p>
                        </div>
                    </details>
                @endforeach

            </div>
        </div>

    </div>
</section>
@endif



@endsection



