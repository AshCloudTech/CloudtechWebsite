@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'Squarespace web design UK, Squarespace website development UK, Squarespace pricing UK, custom
    Squarespace design UK, SEO-friendly Squarespace UK, mobile-responsive Squarespace UK, professional Squarespace websites
    UK, Squarespace agency UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/squarespace/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/webDevelopment/squarespace/js/script.js') }}" defer></script>
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
    <section class="hero squarespace-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">Squarespace Development Services</p>
           <h1>{!! str_replace('|', '<br>', $hero['title'] ?? 'Squarespace Web<br>Development Solutions') !!}</h1>
            <p class="hero-subtitle">
                 {{ $hero['subtitle'] ?? 'We provide professional Squarespace web development services to build high-quality Squarespace websites that
                are visually engaging, cost-effective, and easy to manage using the Squarespace website builder.'}}
            </p>
            <div class="hero-actions">
                <a href="#cta" class="btn btn-primary">Start Your Project</a>
                <a href="#services" class="btn btn-secondary">Explore Features</a>
            </div>
        </div>
    </section>
@if(!$hasDynamicContent)
    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">180+</p>
                <p class="stat-label">Squarespace Sites Built</p>
            </article>
            <article class="stat">
                <p class="stat-value">95%</p>
                <p class="stat-label">Client Satisfaction Rate</p>
            </article>
            <article class="stat">
                <p class="stat-value">2.8x</p>
                <p class="stat-label">Average Traffic Increase</p>
            </article>
            <article class="stat">
                <p class="stat-value">24/7</p>
                <p class="stat-label">Support Available</p>
            </article>
        </div>
    </section>

    <!-- OUR SQUARESPACE SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Squarespace Services</h2>
                <p>
                    Our Squarespace website agency delivers complete solutions including design, development, customization,
                    and guidance on Squarespace pricing, website plans, and long-term scalability.
                </p>
            </div>

            <div class="grid grid-3 services-grid services-grid-ui">
                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="layout"></i>
                    </div>
                    <h3>Custom Template Design</h3>
                    <p>
                        Custom Squarespace website design tailored to your brand, ensuring a modern layout,
                        strong visuals, and seamless user experience.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="shopping-bag"></i>
                    </div>
                    <h3>E-commerce Integration</h3>
                    <p>
                        Secure eCommerce features integrated into your Squarespace website,
                        with optimized checkout flows for smooth sales.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="smartphone"></i>
                    </div>
                    <h3>Mobile Optimisation</h3>
                    <p>
                        Responsive Squarespace web development ensuring flawless performance
                        across all devices and screen sizes.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="code"></i>
                    </div>
                    <h3>Custom Code Injection</h3>
                    <p>
                        Advanced customization using code injection to extend Squarespace functionality
                        beyond standard templates.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <h3>SEO Enhancement</h3>
                    <p>
                        SEO-focused Squarespace development to improve visibility, rankings,
                        and organic traffic while keeping costs efficient.
                    </p>
                </article>

                <article class="card service-card service-card-ui">
                    <div class="svcIcon" aria-hidden="true">
                        <i data-lucide="arrow-right-left"></i>
                    </div>
                    <h3>Content Migration</h3>
                    <p>
                        Smooth content migration preserving SEO value and ensuring accuracy
                        during platform transitions.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE SQUARESPACE -->
    <section class="section section-why" id="why">
        <div class="container why-layout">
            <div class="why-copy">
                <h2>Why Choose Squarespace?</h2>
                <p class="why-intro">
                    Squarespace offers an intuitive website builder, flexible Squarespace website plans, transparent
                    Squarespace pricing, and professional tools ideal for businesses seeking speed, design, and simplicity.
                </p>
                <ul class="why-list">
                    <li>Easy website management</li>
                    <li>Transparent pricing plans</li>
                    <li>Built-in SEO tools</li>
                    <li>Mobile-ready templates</li>
                    <li>Secure hosting included</li>
                    <li>Professional design system</li>
                </ul>
            </div>
            <div class="why-media" aria-hidden="true">
                <img src="{{ asset('assets/images/web/squarespace.webp') }}"
                    alt="Squarespace Website Development – Cloud Technologies Ltd"
                    title="Squarespace website development services for modern and responsive websites"
                    aria-label="Squarespace Capabilities" aria-hidden="true" loading="lazy"
                    decoding="async" class="media-placeholder">
            </div>
        </div>
    </section>

    <!-- OUR DEVELOPMENT PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Development Process</h2>
                <p>
                    A structured Squarespace web development process focused on strategy, design precision, and efficient
                    delivery for businesses of all sizes.
                </p>
            </div>

            <div class="process-grid">
                <article class="process-step">
                    <p class="step-number">01</p>
                    <h3>Discovery</h3>
                    <p>We analyze goals, audience, and Squarespace website pricing needs.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">02</p>
                    <h3>Design</h3>
                    <p>Creative layouts designed to match your brand and vision.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">03</p>
                    <h3>Development</h3>
                    <p>Clean development using Squarespace create website tools.</p>
                </article>
                <article class="process-step">
                    <p class="step-number">04</p>
                    <h3>Launch</h3>
                    <p>Final testing, deployment, and performance optimization.</p>
                </article>
            </div>
        </div>
    </section>
    <!-- What Are Squarespace Development Services?   -->
    <section class="section section-national-about" id="about-meta_ads-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are Squarespace Development Services? </h2>

                    <p>
                        Squarespace development services focus on creating visually engaging, mobile-responsive, and
                        easy-to-manage websites using Squarespace’s intuitive website builder. These services include custom
                        template design, eCommerce setup, SEO enhancement, content migration, and advanced customisation
                        through code injection.
                    </p>

                    <p>
                        A professional Squarespace development approach ensures your website is cost-effective, fast to
                        launch, and structured to present your brand professionally while remaining simple to manage.
                    </p>
                    <p>If you want a stylish, reliable website without complex infrastructure, Squarespace development
                        services are an excellent choice.</p>
                </div>

                <div class="national-about-highlight">
                    <h3>Who Needs Squarespace Development? </h3>

                    <p>
                        Squarespace development is ideal for:
                    </p>

                    <ul>
                        <li>Small businesses wanting a professional online presence</li>
                        <li>Personal brands, consultants, and creatives</li>
                        <li>Startups needing a fast and cost-effective website</li>
                        <li>Businesses selling a small range of products online</li>
                        <li>Companies prioritising design and simplicity</li>
                        <li>Brands wanting easy website management without technical skills</li>
                    </ul>

                    <p class="">
                        If you value design, speed, and simplicity, Squarespace provides a practical platform to launch and
                        grow online.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Why Squarespace Is Ideal for Modern Businesses    -->
    <section class="section section-national-growth" id="meta_ads-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why Squarespace Is Ideal for Modern Businesses </h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Squarespace combines elegant design with built-in functionality, making it perfect for businesses that
                    want professional presentation without technical complexity. With secure hosting, mobile-ready
                    templates, and integrated SEO tools, Squarespace websites are reliable, responsive, and easy to
                    maintain.

                <p>
                    With the right Squarespace development strategy, your website benefits from strong visuals, smooth user
                    experience, clean structure for search engines, and a scalable setup that grows with your business
                    needs.
                </p>
            </div>

        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Combine platform-focused development with SEO and digital marketing to accelerate growth.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/wix-website-development-service-uk"
                    aria-label="Wix website development UK">
                    <span>Wix Website Development UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/wordpress-website-development-service-uk"
                    aria-label="WordPress development services UK">
                    <span>WordPress Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="Website development services UK">
                    <span>Website Development Services UK</span>
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
                    <h2>Ready to Build Your Squarespace Site?</h2>
                    <p>
                        Partner with a trusted Squarespace website agency and square website company to create a
                        professional Squarespace website that fits your budget, aligns with Squarespace website cost
                        expectations, and supports business growth.
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="#" class="btn btn-light">Call</a>
                    <a href="#" class="btn btn-outline">Email Us</a>
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
                <img src="{{ asset('assets/images/webdev/squarespace/cloud-squarespace.webp') }}" alt="Digital Marketing Services">
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
                <img src="{{ asset('assets/images/webdev/squarespace/square-space.webp') }}" alt="Digital Strategy">
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
                <img src="{{ asset('assets/images/webdev/squarespace/dev-square.webp') }}" alt="Affordable Services">
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


