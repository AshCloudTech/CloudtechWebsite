@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'GoDaddy website builder UK, GoDaddy website design UK, GoDaddy website pricing UK, GoDaddy
    website setup UK, affordable website builder UK, small business websites UK, SEO-friendly websites UK, responsive web
    design UK, GoDaddy hosting UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/godaddy/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/webDevelopment/godaddy/js/script.js') }}" defer></script>
          <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    @endpush
@section('content')
@php
    $hasDynamicContent = !empty($content);
@endphp

@php
    $hero = $content['hero'] ?? [];
@endphp


    <!-- HERO -->
    <section class="hero godaddy-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">GoDaddy Website Builder Services</p>
           <h1>{!! str_replace('|', '<br>', $hero['title'] ?? 'GoDaddy Website Builder for<br>Small Business') !!}</h1>
            <p class="hero-subtitle">
                 {{ $hero['subtitle'] ?? 'We offer professional GoDaddy website builder services to help businesses build websites on GoDaddy quickly,
                affordably, and securely with clear GoDaddy website pricing and reliable hosting.'}}
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Start Building</a>
                <a href="#services" class="btn btn-ghost">Learn More</a>
            </div>
        </div>
    </section>
@if(!$hasDynamicContent)
    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">160+</p>
                <p class="stat-label">GoDaddy Sites Built</p>
            </article>
            <article class="stat">
                <p class="stat-value">94%</p>
                <p class="stat-label">Client Satisfaction</p>
            </article>
            <article class="stat">
                <p class="stat-value">2.5x</p>
                <p class="stat-label">Average Lead Growth</p>
            </article>
            <article class="stat">
                <p class="stat-value">72hrs</p>
                <p class="stat-label">Quick Deployment</p>
            </article>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section section-solutions" id="services">
        <div class="container">
            <div class="section-header">
                <h2>GoDaddy Website Builder Services</h2>
                <p>
                    Our GoDaddy website builder services include complete setup, customization,
                    and optimization, while guiding clients on GoDaddy website charges,
                    hosting price, and long-term value.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid solutions-grid-ui">
                <article class="card solution-card solution-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="rocket"></i>
                    </div>
                    <h3>Quick Site Setup</h3>
                    <p>
                        Fast website creation using GoDaddy website builder tools to help you launch quickly.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="layout-template"></i>
                    </div>
                    <h3>Template Customisation</h3>
                    <p>
                        Custom layouts and branding enhancements ensuring a professional and polished appearance.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="shopping-cart"></i>
                    </div>
                    <h3>E-commerce Solutions</h3>
                    <p>
                        Secure eCommerce features integrated for selling products and services online.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="globe"></i>
                    </div>
                    <h3>Domain Integration</h3>
                    <p>
                        Seamless domain connection and hosting configuration with clear pricing guidance.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <h3>SEO Optimisation</h3>
                    <p>
                        SEO-friendly setup to improve visibility while keeping pricing affordable and transparent.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="megaphone"></i>
                    </div>
                    <h3>Marketing Tools</h3>
                    <p>
                        Built-in marketing tools to promote your website and drive traffic, leads, and conversions.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- WHY CHOOSE -->
    <section class="section section-why" id="why">
        <div class="container why-layout">
            <div>
                <h2>Why Choose<br>GoDaddy?</h2>
                <p>
                    GoDaddy website builder offers simplicity, affordability, and reliable tools,
                    making it ideal for businesses seeking clear GoDaddy website charges and an easy website creation
                    process.
                </p>
                <ul class="why-list">
                    <li>Easy website builder</li>
                    <li>Affordable pricing plans</li>
                    <li>Secure hosting included</li>
                    <li>Mobile-friendly designs</li>
                    <li>Built-in SEO tools</li>
                    <li>Trusted global platform</li>
                </ul>
            </div>
            <img src="{{ asset('assets/images/web/godaddy.webp') }}"
                alt="GoDaddy Website Development – Cloud Technologies Ltd"
                title="GoDaddy website builder services for easy and scalable website creation"
                aria-label="GoDaddy Capabilities" aria-hidden="true" loading="lazy" decoding="async" class="why-panel">
        </div>
    </section>

    <!-- IDEAL FOR -->
    <section class="section section-use-cases" id="ideal">
        <div class="container">
            <div class="section-header">
                <h2>Ideal For Small Businesses</h2>
                <p>
                    GoDaddy website builder is perfect for small businesses needing fast setup, low GoDaddy website cost,
                    and simple website management.
                </p>
            </div>

            <div class="grid grid-2 use-cases-grid use-cases-grid-ui">
                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="map-pin"></i></div>
                    <h3>Local Businesses</h3>
                    <p>Professional GoDaddy websites to attract local customers.</p>
                </article>

                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="user"></i></div>
                    <h3>Freelancers</h3>
                    <p>Personal brand websites built quickly and affordably.</p>
                </article>

                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="rocket"></i></div>
                    <h3>Startups</h3>
                    <p>Scalable websites with transparent GoDaddy website pricing.</p>
                </article>

                <article class="use-case use-case-ui">
                    <div class="useIcon" aria-hidden="true"><i data-lucide="shopping-bag"></i></div>
                    <h3>Online Sellers</h3>
                    <p>Simple online selling tools for small eCommerce stores.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- BENEFITS -->
    <section class="section section-stack" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2>What You Get with GoDaddy</h2>
                <p>
                    Everything you need to build, launch, and manage a GoDaddy website without hidden GoDaddy website
                    charges.
                </p>
            </div>

            <div class="benefits-grid benefits-grid-ui">
                <article class="card benefit benefit-ui">
                    <div class="svcIcon sm" aria-hidden="true"><i data-lucide="rocket"></i></div>
                    <h3>Quick Setup</h3>
                    <p>Launch your website in minutes.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon sm" aria-hidden="true"><i data-lucide="badge-pound-sterling"></i></div>
                    <h3>Affordable</h3>
                    <p>Clear and budget-friendly pricing.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon sm" aria-hidden="true"><i data-lucide="smartphone"></i></div>
                    <h3>Mobile Ready</h3>
                    <p>Optimized for all devices.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon sm" aria-hidden="true"><i data-lucide="shield-check"></i></div>
                    <h3>Secure</h3>
                    <p>Built-in security and hosting.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon sm" aria-hidden="true"><i data-lucide="mail"></i></div>
                    <h3>Email Included</h3>
                    <p>Professional email options available.</p>
                </article>

                <article class="card benefit benefit-ui">
                    <div class="svcIcon sm" aria-hidden="true"><i data-lucide="bar-chart-3"></i></div>
                    <h3>Analytics</h3>
                    <p>Track website performance easily.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHAT ARE GODADDY WEBSITE BUILDER SERVICES -->
    <section class="section section-services" id="about-godaddy-development">
        <div class="container">
            <div class="section-header">
                <h2>What Are GoDaddy Website Builder Services?</h2>
            </div>

            <div class="wix-about-wrapper">

                <div class="wix-about-content">
                    <p>
                        <b>GoDaddy Website Builder</b> services focus on helping small businesses create affordable, secure,
                        and professional websites quickly using GoDaddy’s easy website builder. These services include full
                        site setup, template customisation, domain integration, eCommerce features, SEO setup, and marketing
                        tools.
                    </p>

                    <p>
                        A professional GoDaddy website builder setup ensures your website is mobile-friendly, simple to
                        manage, and ready to launch without technical complexity or hidden costs.
                    </p>

                    <p>
                        If you need a reliable website with transparent pricing and fast deployment, GoDaddy website builder
                        services are a practical solution.
                    </p>
                </div>

                <div class="wix-about-highlight" style="background-color: #ffffff">
                    <h3>Who Needs GoDaddy Website Builder?</h3>

                    <p>GoDaddy website builder is ideal for:</p>

                    <ul>
                        <li>Small local businesses needing a quick online presence</li>
                        <li>Freelancers building personal brand websites</li>
                        <li>Startups looking for affordable website solutions</li>
                        <li>Small eCommerce sellers</li>
                        <li>Businesses wanting simple website management</li>
                        <li>Companies needing fast setup with secure hosting</li>
                    </ul>

                    <p class="wix-about-note">
                        If you want to get online quickly without complicated development, GoDaddy is a suitable platform.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- WHY GODADDY IS SUITABLE -->
    <section class="section section-business" id="why-godaddy-modern" style="background-color: #ffffff">
        <div class="container">

            <div class="section-header">
                <h2>Why GoDaddy Is Suitable for Small Businesses</h2>
            </div>

            <div class="wix-growth-card">
                <p>
                    GoDaddy combines simplicity, affordability, and reliable hosting in one platform. With mobile-ready
                    templates, built-in SEO tools, and clear pricing, businesses can launch professional websites without
                    worrying about technical setup.
                </p>

                <p>
                    With the right GoDaddy website builder approach, your site benefits from clean design, secure hosting,
                    easy updates, and essential marketing tools that support lead generation and visibility.
                </p>
            </div>

        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Boost your GoDaddy site with connected development and SEO services for long-term growth.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="Website development services UK">
                    <span>Website Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/wordpress-website-development-service-uk"
                    aria-label="WordPress development services UK">
                    <span>WordPress Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/wix-website-development-service-uk"
                    aria-label="Wix website development UK">
                    <span>Wix Website Development UK</span>
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
            </div>
        </div>
    </section>




    <!-- CTA -->
    <section class="section section-cta" id="cta">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Ready to Build Your Website?</h2>
                    <p>Start building your GoDaddy website today with expert setup, clear GoDaddy website hosting price
                        guidance, and a hassle-free website launch experience.</p>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn btn-light">Call</a>
                    <a href="#" class="btn btn-outline">Email Us</a>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>GoDaddy Website Builder Services FAQ</h2>
                <p>
                    Answers to common questions about GoDaddy Website Builder, pricing, features, and support.
                </p>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is GoDaddy Website Builder?</summary>
                        <div class="faq-content">
                            <p>
                                GoDaddy Website Builder is an easy-to-use platform that helps you build a website on GoDaddy
                                quickly without coding, using ready-made templates and built-in tools.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. How much does a GoDaddy website cost?</summary>
                        <div class="faq-content">
                            <p>
                                GoDaddy website cost depends on your selected plan. GoDaddy website pricing and hosting
                                price vary based on features, storage, and eCommerce needs.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Can I customize my GoDaddy website design?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, GoDaddy Website Builder allows template customization, branding changes, and content
                                updates to match your business needs.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Is GoDaddy Website Builder good for small businesses?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, it’s ideal for small businesses due to affordable GoDaddy website charges, quick setup,
                                and simple website management.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. Does GoDaddy Website Builder include hosting and security?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, GoDaddy website hosting price includes secure hosting, SSL, and basic security features
                                with most plans.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Can you help set up my website on GoDaddy?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, we provide professional GoDaddy Website Builder services to handle setup, design, SEO,
                                and launch for your website.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>


@endif


{{-- Dynamic content --}}



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
                <img src="{{ asset('assets/images/webdev/godaddy/cloud-godaddy.webp') }}" alt="Digital Marketing Services">
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
                <img src="{{ asset('assets/images/webdev/godaddy/go-daddy.webp') }}" alt="Digital Strategy">
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
                <img src="{{ asset('assets/images/webdev/godaddy/godaddy-dev.webp') }}" alt="Affordable Services">
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


