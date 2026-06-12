@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords',
    'on-page SEO agency UK, on-page SEO services UK, SEO optimization services UK, content
    optimization UK, meta tags optimization UK, keyword placement UK, internal linking UK, schema markup UK, URL structure
    optimization UK, user experience SEO UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/on-page/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/digitalMarketing/on-page/js/script.js') }}" defer></script>
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
    <section class="hero onpage-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">On-Page SEO Services in UK</p>
                <h1> {!! str_replace('|', '<br>', $hero['title'] ?? 'Professional On-Page SEO Services in the UK') !!}</h1>
                <p class="hero-subtitle">
                     {{ $hero['subtitle'] ?? 'Optimise your website pages for search engines and improve rankings with expert On-Page SEO services. We
                    enhance search visibility using keyword optimisation, meta tags, content optimisation, internal linking,
                    schema markup, URL structure, and technical on-page improvements for better indexing and higher organic
                    traffic.' }}
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="on-page-seo">Get Free SEO
                        Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>
            </div>

            <!-- <div class="hero-panel">
                            <div class="hero-panel-inner">
                                <p class="hero-panel-label">On-Page SEO Snapshot</p>
                                <p class="hero-panel-text">
                                    We improve relevance and crawlability by optimizing content, meta tags, internal linking and structured data—so your pages rank higher and win more clicks.
                                </p>
                                <ul class="hero-panel-list">
                                    <li>Title tags & meta descriptions</li><li>Headers & content mapping</li><li>Internal linking & structure</li><li>Schema + Core Web Vitals</li>
                                </ul>
                            </div>
                        </div> -->
        </div>
    </section>
       @if(!$hasDynamicContent)

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our On-Page SEO Services?</h2>
                <p>Drive organic traffic across the UK with advanced on-page optimisation strategies.</p>
            </div>

            <div class="why-grid why-grid-ui">
                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="file-text"></i></div>
                    <h3>Content Optimisation</h3>
                    <p>SEO-friendly content structure for readability and search engine understanding.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="search"></i></div>
                    <h3>Keyword Optimisation</h3>
                    <p>Strategic keyword placement in titles, headings, and content for higher rankings.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="tag"></i></div>
                    <h3>Meta Tags Optimisation</h3>
                    <p>Optimised title tags and meta descriptions to improve CTR and relevance.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="trending-up"></i></div>
                    <h3>Higher Search Rankings</h3>
                    <p>Improve page relevance to rank better in Google search results.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our On-Page SEO Process</h2>
                <p>A strategic approach to optimise website pages for search engines.</p>
            </div>

            <div class="process-grid process-grid-ui">
                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="keyboard"></i></div>
                    <h3>Website Audit</h3>
                    <p>Analyse pages for keyword gaps, meta issues, and content structure problems.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="layout-template"></i></div>
                    <h3>Optimisation Strategy</h3>
                    <p>Plan keyword mapping, meta tags, headings, internal links, and schema markup.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="settings"></i></div>
                    <h3>Implementation</h3>
                    <p>Apply on-page fixes including content updates, URL optimisation, and technical tags.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="line-chart"></i></div>
                    <h3>Performance Tracking</h3>
                    <p>Monitor keyword rankings, page indexing, and organic traffic growth.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- CONTENT TYPES -->
    <section class="section content-types" id="content-types">
        <div class="container">
            <div class="section-header">
                <h2>Page Types We Optimise</h2>
                <p>Comprehensive on-page SEO services for all types of website pages.</p>
            </div>

            <div class="ct-grid ct-grid-ui">

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="home"></i></div>
                        <div class="ct-title">
                            <h3>Homepage Optimisation</h3>
                            <p>Optimise homepage content, headings, and keywords for brand visibility.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Primary keyword targeting</li>
                        <li>Internal linking</li>
                        <li>Content structure</li>
                        <li>Meta tags optimisation</li>
                    </ul>
                </article>

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="layout"></i></div>
                        <div class="ct-title">
                            <h3>Service & Landing Pages</h3>
                            <p>Conversion-focused pages optimised for search engines and users.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Keyword mapping</li>
                        <li>SEO heading structure</li>
                        <li>URL optimisation</li>
                        <li>Schema markup</li>
                    </ul>
                </article>

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="shopping-bag"></i></div>
                        <div class="ct-title">
                            <h3>Product & E-commerce Pages</h3>
                            <p>Product pages optimised to rank and improve conversions.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Product keyword optimisation</li>
                        <li>Meta data setup</li>
                        <li>Internal links</li>
                        <li>Content enhancement</li>
                    </ul>
                </article>

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="book-open"></i></div>
                        <div class="ct-title">
                            <h3>Blog & Content Pages</h3>
                            <p>SEO-optimised blogs that drive organic traffic.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Topic clusters</li>
                        <li>Keyword placement</li>
                        <li>Content readability</li>
                        <li>Internal linking strategy</li>
                    </ul>
                </article>

            </div>
        </div>
    </section>


    <!-- INCLUDED -->
    <section class="section" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What’s Included in Our On-Page SEO Service? </h2>
                <p>
                    Comprehensive on-page optimisation for SEO performance.
                </p>
            </div>

            <div class="services-layout">
                <div class="services-copy">
                    <img src="{{ asset('assets/images/seo/on_page/on_page_seo_services.webp') }}"
                        alt="On-Page SEO Services – Cloud Technologies Ltd"
                        title="On-page SEO optimization for content structure and keywords" aria-hidden="true"
                        aria-label="On-Page SEO Services Image"
                        loading="lazy" decoding="async">
                </div>

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Included deliverables</h3>
                        <ul class="services-list">
                            <li>Complete on-page SEO audit</li>
                            <li>Keyword research and keyword mapping</li>
                            <li>Title tag and meta description optimisation</li>
                            <li> Header tags (H1-H6) optimisation</li>
                            <li> Content optimisation with SEO keywords</li>
                            <li>Internal linking structure improvement</li>
                            <li>Schema markup implementation</li>
                            <li>URL structure optimisation</li>
                            <li> Image alt tags optimisation</li>
                            <li>Monthly performance reports and recommendations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHAT ARE ON-PAGE SEO SERVICES -->
    <section class="section section-national-about" id="about-onpage-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Are On-Page SEO Services?</h2>

                    <p>
                        On-page SEO services focus on optimising individual web pages so search engines can clearly
                        understand their topic, relevance, and value to users. This includes improving content structure,
                        keyword placement, meta tags, internal links, schema markup, URL structure, and user experience
                        signals that directly influence rankings.
                    </p>

                    <p>
                        Unlike technical SEO, which improves the site foundation, on-page SEO ensures every page is properly
                        optimised to rank for its target keywords and satisfy search intent.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>Search Intent & Content Alignment</h3>

                    <p>
                        One of the most important parts of on-page SEO is matching content to what users are actually
                        searching for.
                    </p>

                    <p>
                        We optimise pages based on:
                    </p>

                    <ul>
                        <li>Informational intent (blogs and guides)</li>
                        <li>Commercial intent (service and category pages)</li>
                        <li>Transactional intent (product and landing pages)</li>
                        <li>Navigational intent (homepage and brand pages)</li>
                    </ul>

                    <p class="national-about-note">
                        Aligning content with intent significantly improves rankings and engagement.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY ON-PAGE SEO IS CRITICAL -->
    <section class="section section-national-growth" id="onpage-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why On-Page SEO Is Critical for Ranking Success</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Even with strong backlinks and technical optimisation, pages will not rank if they are not properly
                    optimised for relevance and search intent. On-page SEO ensures every element of your page works together
                    to signal value to search engines and users.
                </p>

                <p>
                    When done correctly, on-page SEO can significantly improve rankings without needing new content or
                    links.
                </p>
            </div>

        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related Services</h2>
                <p>Strengthen your on-page SEO performance with connected SEO and web development services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk" aria-label="Content SEO services UK">
                    <span>Content SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/technical-seo-service-uk" aria-label="Technical SEO services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/off-page-seo-service-uk" aria-label="Off-Page SEO services UK">
                    <span>Off-Page SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="Website development services UK">
                    <span>Website Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="section onpage-cta" id="cta">
        <div class="container">
            <div class="cta-inner onpage-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Optimise Your Website Pages for Search?</h2>
                    <p>
                        Get a free On-Page SEO audit and improve your Google rankings and organic traffic.
                    </p>
                </div>
                <div class="cta-actions onpage-cta-actions">
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="on-page-seo">Get Free SEO
                        Audit</a>
                    <a href="#process" class="btn btn-outline-light">View Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Talk to Our On-Page SEO Team</h2>
                <p>
                    Share your goals and we’ll recommend the highest-impact on-page improvements for your key pages.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_onpage_enquiry">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_onpage_name">Full Name</label>
                        <input type="text" id="seo_onpage_name" name="name" placeholder="Enter your name"
                            required>
                    </div>

                    <div class="form-field">
                        <label for="seo_onpage_email">Email Address</label>
                        <input type="email" id="seo_onpage_email" name="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_onpage_website">Website URL</label>
                        <input type="url" id="seo_onpage_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="seo_onpage_focus">Primary Page Type</label>
                        <input type="text" id="seo_onpage_focus" name="payload[page_type]"
                            placeholder="Service pages, blogs, e-commerce, landing pages, etc.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_onpage_message">What should we optimise first?</label>
                        <textarea id="seo_onpage_message" name="message" rows="4"
                            placeholder="Rankings, clicks, content, site structure, schema, Core Web Vitals, etc." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
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
                <img src="{{ asset('assets/images/seo/on_page/cloudtech-seo.webp') }}" alt="On Page Seo Services">
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
                <img src="{{ asset('assets/images/seo/on_page/onpage-seo.webp') }}" alt="On Page Strategy">
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
                <img src="{{ asset('assets/images/seo/on_page/seo-service.webp') }}" alt="Affordable Services">
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

