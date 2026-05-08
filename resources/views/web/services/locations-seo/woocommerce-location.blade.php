@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'WooCommerce agency UK, WooCommerce web development UK, ecommerce website development UK,
    WooCommerce store setup UK, custom WooCommerce development UK, responsive WooCommerce design UK, secure WooCommerce
    development UK, SEO-friendly WooCommerce UK, online store development UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/woocommerce/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/webDevelopment/woocommerce/js/script.js') }}" defer></script>
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
    <section class="hero woo-hero" id="hero">
        <div class="container hero-inner">
            <p class="hero-eyebrow">WooCommerce Development Services</p>
       <h1>{!! str_replace('|', '<br>', $hero['title'] ?? 'Professional WooCommerce<br>Development Service') !!}</h1>
            <p class="hero-subtitle">
                 {{ $hero['subtitle'] ?? 'We deliver scalable WooCommerce development solutions with secure architecture, custom features,
                and conversion-focused design to help businesses sell online efficiently.'}}
            </p>
            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary">Launch Your Store</a>
                <a href="#solutions" class="btn btn-ghost">Explore Features</a>
            </div>
        </div>
    </section>
@if(!$hasDynamicContent)
    <!-- COMPLETE WOOCOMMERCE SOLUTIONS -->
    <section class="section section-solutions" id="solutions">
        <div class="container">
            <div class="section-header">
                <h2>Complete WooCommerce Solutions</h2>
                <p>
                    End-to-end WooCommerce website development services including store setup, design, integrations,
                    optimization, and long-term support from a trusted WooCommerce development company.
                </p>
            </div>

            <div class="grid grid-3 solutions-grid solutions-grid-ui">
                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="store"></i>
                    </div>
                    <h3>Custom Store Setup</h3>
                    <p>
                        Professional WooCommerce website development agency services to create fully customized,
                        brand-aligned online stores ready for growth.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="credit-card"></i>
                    </div>
                    <h3>Payment Gateway Integration</h3>
                    <p>
                        Secure payment gateway integration supporting multiple payment methods and smooth checkout
                        experiences.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="package"></i>
                    </div>
                    <h3>Product Management</h3>
                    <p>
                        Efficient product setup and management for inventory, variations, and pricing control.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3>Performance Optimisation</h3>
                    <p>
                        Speed and performance optimization to ensure fast loading and improved user experience.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="truck"></i>
                    </div>
                    <h3>Shipping Configuration</h3>
                    <p>
                        Flexible shipping rules and zone configuration implemented for seamless logistics management.
                    </p>
                </article>

                <article class="card solution-card solution-card-ui">
                    <div class="solution-icon" aria-hidden="true">
                        <i data-lucide="bar-chart-3"></i>
                    </div>
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                        Detailed analytics and reporting tools integrated to track sales, customers, and store performance.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- POWERFUL ECOMMERCE CAPABILITIES -->
    <section class="section section-capabilities" id="capabilities">
        <div class="container capabilities-layout">
            <div class="capabilities-media" aria-hidden="true">
                <img src="{{ asset('assets/images/web/woocommerce.webp') }}"
                    alt="WordPress Website Development – Cloud Technologies Ltd"
                    title="WordPress website development services for custom and scalable websites"
                    aria-label="WooCommerce Capabilities" aria-hidden="true" loading="lazy"
                    decoding="async" class="media-placeholder">
            </div>
            <div class="capabilities-copy">
                <h2>Powerful eCommerce Capabilities</h2>
                <p class="capabilities-intro">
                    Robust WooCommerce web design and development features built to support scalability, security, and
                    seamless online selling experiences.
                </p>
                <div class="capabilities-lists">
                    <ul>
                        <li>Scalable store architecture</li>
                        <li>Secure payment processing</li>
                        <li>Custom WooCommerce themes</li>
                        <li>Advanced product control</li>
                    </ul>
                    <ul>
                        <li>Multi-shipping options</li>
                        <li>Performance-focused design</li>
                        <li>SEO-ready structure</li>
                        <li>Analytics-driven insights</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <section class="section section-stats">
        <div class="container stats-grid">
            <article class="stat">
                <p class="stat-value">200+</p>
                <p class="stat-label">Stores Launched</p>
            </article>
            <article class="stat">
                <p class="stat-value">£50M+</p>
                <p class="stat-label">Revenue Generated</p>
            </article>
            <article class="stat">
                <p class="stat-value">99.9%</p>
                <p class="stat-label">Uptime Guarantee</p>
            </article>
            <article class="stat">
                <p class="stat-value">24/7</p>
                <p class="stat-label">Support Available</p>
            </article>
        </div>
    </section>

    <!-- What Are WooCommerce Development Services?  -->
    <section class="section section-national-about" id="about-meta_ads-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are WooCommerce Development Services?</h2>

                    <p>
                        WooCommerce development services focus on building scalable, secure, and conversion-focused online
                        stores using WooCommerce on WordPress. These services include custom store setup, theme design,
                        payment integrations, product architecture, performance optimisation, and ongoing support.
                    </p>

                    <p>
                        A professional WooCommerce development approach ensures your online store is easy to manage,
                        technically strong, and structured to convert visitors into paying customers.
                    </p>
                    <p>If you want a powerful eCommerce website that is flexible, SEO-friendly, and built for growth,
                        WooCommerce development services are the ideal solution.</p>
                </div>

                <div class="national-about-highlight">
                    <h3>Who Needs WooCommerce Development? </h3>

                    <p>
                        WooCommerce development is ideal for:
                    </p>

                    <ul>
                        <li>Businesses selling products across the UK</li>
                        <li>Retail brands moving from offline to online sales</li>
                        <li>Companies needing full control over their store features</li>
                        <li>Startups launching new eCommerce brand</li>
                        <li>Businesses requiring custom checkout, shipping, or pricing rules</li>
                        <li>Stores needing advanced integrations and scalability</li>
                    </ul>

                    <p class="">
                        If selling online is central to your business, WooCommerce provides the flexibility and power to
                        scale without limitations.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Why WooCommerce Is Essential for eCommerce Growth   -->
    <section class="section section-national-growth" id="meta_ads-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why WooCommerce Is Essential for eCommerce Growth </h2>
            </div>

            <div class="national-growth-card">
                <p>
                    WooCommerce combines the flexibility of WordPress with powerful eCommerce functionality, giving
                    businesses complete control over store design, checkout flows, product structure, and third-party
                    integrations. Unlike closed platforms, WooCommerce allows full customisation while remaining
                    SEO-friendly, scalable, and easy to manage.
                </p>

                <!-- <p>
                          With the right strategy, social media becomes a powerful channel for awareness, engagement, and lead generation that supports your overall digital marketing efforts.
                        </p> -->
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="section section-cta" id="contact">
        <div class="container">
            <div class="cta-inner">
                <div class="cta-text">
                    <h2>Start Selling Online Today</h2>
                    <p>
                        Launch your online store with professional WooCommerce website development backed by expert
                        WooCommerce web development services that drive sales and business growth.
                    </p>
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
                <h2>WooCommerce Development FAQ</h2>
                <p>
                    Answers to common questions about WooCommerce development, features, timelines, and ongoing support.
                </p>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is WooCommerce development?</summary>
                        <div class="faq-content">
                            <p>
                                WooCommerce development involves creating, customizing, and optimizing eCommerce stores
                                using the WooCommerce platform. It includes store setup, theme customization, plugin
                                development, payment gateway integration, and performance optimization.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. Why should I choose WooCommerce for my online store?</summary>
                        <div class="faq-content">
                            <p>
                                WooCommerce is flexible, scalable, and cost-effective. It offers full control over design
                                and functionality, supports unlimited products, integrates with multiple payment gateways,
                                and is highly SEO-friendly for online store growth.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. Do you provide custom WooCommerce development services?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, custom WooCommerce development allows businesses to build tailored online stores based
                                on their specific requirements. This includes custom themes,
                                plugins, checkout optimization, and advanced store features.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Is WooCommerce SEO-friendly?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, WooCommerce is SEO-friendly when developed correctly. With optimized product pages,
                                clean URLs,
                                fast loading speed, mobile responsiveness, and proper SEO plugins, WooCommerce stores can
                                rank well on search engines.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. How long does it take to develop a WooCommerce store?</summary>
                        <div class="faq-content">
                            <p>
                                A basic WooCommerce store can be developed in 2–4 weeks. More complex stores with custom
                                features,
                                integrations, or large product catalogs may take 6–8 weeks or longer.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Do you offer WooCommerce maintenance and support?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, WooCommerce maintenance services include regular updates, security monitoring, backups,
                                performance optimization,
                                bug fixes, and ongoing technical support to ensure smooth store operation.
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
                <img src="{{ asset('assets/images/webdev/woocommerce/woo-dev.webp') }}" alt="Digital Marketing Services">
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
                <img src="{{ asset('assets/images/webdev/woocommerce/woocommerce-dev.webp') }}" alt="Digital Strategy">
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
                <img src="{{ asset('assets/images/webdev/woocommerce/development-woocom.webp') }}" alt="Affordable Services">
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
@if(!empty($content['knowledge_section']))
<section class="section knowledge-section">
    <div class="container">

        <div class="knowledge-grid">

            @foreach($content['knowledge_section'] as $section)

                <div class="knowledge-card">

                    <h2 class="knowledge-title">
                        {{ $section['title'] }}
                    </h2>

                    {{-- paragraphs --}}
                    @if(!empty($section['paragraphs']))
                        @foreach($section['paragraphs'] as $p)
                            <p class="knowledge-text">{{ $p }}</p>
                        @endforeach
                    @endif

                    {{-- intro --}}
                    @if(!empty($section['intro']))
                        <p class="knowledge-text">{{ $section['intro'] }}</p>
                    @endif

                    {{-- list --}}
                    @if(!empty($section['list']))
                        <ul class="knowledge-list">
                            @foreach($section['list'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- bottom --}}
                    @if(!empty($section['bottom']))
                        <p class="knowledge-bottom">{{ $section['bottom'] }}</p>
                    @endif

                </div>

            @endforeach

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


