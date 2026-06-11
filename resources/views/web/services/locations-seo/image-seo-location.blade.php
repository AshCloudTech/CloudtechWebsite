@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection

@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'Image SEO services UK, image optimization UK, alt tag optimization UK, image compression UK,
    WebP conversion UK, image sitemap UK, structured data for images UK, Google Images SEO UK, page speed optimization UK,
    Core Web Vitals UK')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/image-seo/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/services/digitalMarketing/image-seo/js/script.js') }}" defer></script>
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
    <section class="hero image-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Image SEO Services</p>
              <h1> {!! str_replace('|', '<br>', $hero['title'] ?? 'Professional Image<br>&amp; SEO Services in the UK') !!}</h1>
                <p class="hero-subtitle">
                     {{ $hero['subtitle'] ?? 'Optimize website images for search engines and improve visibility with expert Image SEO services. We
                    improve Google Images rankings through alt tag optimization, image compression, SEO-friendly file names,
                    WebP/AVIF conversion, structured data, and image sitemap implementation for faster loading and better
                    indexing.' }}</p>
                

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="image-seo">Get Free SEO
                        Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>
            </div>

            <!-- <div class="hero-panel">
                        <div class="hero-panel-inner">
                            <p class="hero-panel-label">Image SEO Snapshot</p>
                            <p class="hero-panel-text">
                                We audit your images end-to-end (format, compression, alt text, delivery and indexing) and deliver quick wins that improve visibility in Google Images and your Core Web Vitals.
                            </p>
                            <ul class="hero-panel-list">
                                <li>Alt text & accessibility</li><li>Compression & next-gen formats</li><li>Lazy loading & responsive images</li><li>Image sitemaps & structured data</li>
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
                <h2>Why Choose Our Image SEO Services in the UK?</h2>
            </div>

            <div class="why-grid why-grid-ui">
                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="image"></i>
                    </div>
                    <h3>Alt Text Optimisation for Image Search</h3>
                    <p>
                        SEO-friendly alt tags that help search engines understand image context and improve accessibility.
                    </p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3>Image Compression for Page Speed</h3>
                    <p>
                        Reduce image sizes without quality loss to enhance loading speed and Core Web Vitals.
                    </p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="file-image"></i>
                    </div>
                    <h3>Next-Gen Image Formats (WebP &amp; AVIF)</h3>
                    <p>
                        Convert images into modern formats for faster delivery and better performance.
                    </p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <h3>Improve Google Images Rankings</h3>
                    <p>
                        Optimise images to rank higher in Google Images and visual search results.
                    </p>
                </article>
            </div>
        </div>
    </section>


    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>Our Image SEO Process</h2>
            </div>

            <div class="process-grid process-grid-ui">
                <article class="card process-card process-card-ui">
                    <div class="process-icon" aria-hidden="true"><i data-lucide="scan"></i></div>
                    <h3>Image SEO Audit</h3>
                    <p>Analyse existing images, formats, sizes, metadata, and indexing issues.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon" aria-hidden="true"><i data-lucide="clipboard-list"></i></div>
                    <h3>Image Optimization Strategy</h3>
                    <p>Plan alt tags, file names, compression levels, formats, and structured data.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon" aria-hidden="true"><i data-lucide="wrench"></i></div>
                    <h3>Technical Image SEO Implementation</h3>
                    <p>Apply lazy loading, responsive images, WebP/AVIF, schema markup, and image sitemaps.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon" aria-hidden="true"><i data-lucide="line-chart"></i></div>
                    <h3>Image Performance Tracking</h3>
                    <p>Monitor image indexing, rankings, and search visibility.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- CONTENT TYPES -->
    <section class="section content-types" id="content-types">
        <div class="container">
            <div class="section-header">
                <h2>Image Types We Optimise for SEO</h2>
            </div>

            <div class="ct-grid ct-grid-ui">

                <!-- Card 1 -->
                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true">
                            <i data-lucide="file-text"></i>
                        </div>
                        <div class="ct-title">
                            <h3>Blog Posts &amp; Articles Graphics SEO</h3>
                            <p>
                                Optimised blog images with alt tags, SEO file names, and compression for better Google
                                Images visibility.
                            </p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Alt tag optimisation</li>
                        <li>SEO file naming</li>
                        <li>Image compression</li>
                        <li>Context relevance</li>
                    </ul>
                </article>

                <!-- Card 2 -->
                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true">
                            <i data-lucide="layout"></i>
                        </div>
                        <div class="ct-title">
                            <h3>Landing Page Image Optimisation</h3>
                            <p>Next-gen formats, responsive sizing, and lazy loading for faster pages and better SEO.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>WebP / AVIF format</li>
                        <li>Responsive images</li>
                        <li>Lazy loading</li>
                        <li>Image metadata</li>
                    </ul>
                </article>

                <!-- Card 3 -->
                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true">
                            <i data-lucide="shopping-bag"></i>
                        </div>
                        <div class="ct-title">
                            <h3>Product and E-commerce Image SEO</h3>
                            <p>Product images optimised for faster loading, better indexing, and improved search visibility.
                            </p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Product image optimisation</li>
                        <li>Schema markup for images</li>
                        <li>Image zoom optimisation</li>
                        <li>Thumbnail optimisation</li>
                    </ul>
                </article>

                <!-- Card 4 -->
                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true">
                            <i data-lucide="settings"></i>
                        </div>
                        <div class="ct-title">
                            <h3>Technical and Website Graphics Optimisation</h3>
                            <p>Structured data, image sitemaps, and indexing fixes for stronger technical SEO performance.
                            </p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Image sitemap</li>
                        <li>Structured data</li>
                        <li>Fix indexing issues</li>
                        <li>Core Web Vitals optimisation</li>
                    </ul>
                </article>

            </div>
        </div>
    </section>

    <!-- INCLUDED -->
    <section class="section" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What’s Included in Our Image SEO Services?</h2>
                <!-- <p>
                            Comprehensive image optimization to boost your site’s performance and visibility.
                        </p> -->
            </div>

            <div class="services-layout">
                <div class="services-copy">
                    <img src="{{ asset('assets/images/seo/image/image_seo_services.webp') }}"
                        alt="Image SEO Services – Cloud Technologies Ltd"
                        title="Image SEO optimization for faster loading and better rankings" aria-hidden="true"
                        aria-label="Image SEO Services Image"
                        loading="lazy" decoding="async">
                </div>

                <div class="services-cards">
                    <div class="card services-card">
                        <h3>Included deliverables</h3>
                        <ul class="services-list">
                            <li>Image SEO audit and performance analysis</li>
                            <li>Alt tag and SEO file name optimisation</li>
                            <li>Image compression and resizing</li>
                            <li>WebP / AVIF image conversionn</li>
                            <li>Image sitemap creation and submission</li>
                            <li>Structured data for images</li>
                            <li>Lazy loading implementations</li>
                            <li>Responsive images for all devices</li>
                            <li>Fix image indexing and crawl issues</li>
                            <li>Monthly image SEO performance reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Related SEO Services</h2>
                <p>Combine image optimisation with technical and on-page strategies for stronger SEO results.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/technical-seo-service-uk"
                    aria-label="Technical SEO services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/on-page-seo-service-uk" aria-label="On-page SEO services UK">
                    <span>On-Page SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk"
                    aria-label="Website development services UK">
                    <span>Website Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/ecommerce-seo-service-uk"
                    aria-label="eCommerce SEO services UK">
                    <span>eCommerce SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- WHAT IS IMAGE SEO -->
    <section class="section section-national-about" id="about-image-seo">
        <div class="container">
            <div class="national-about-wrapper">

                <div class="national-about-content">
                    <h2>What Is Image SEO?</h2>

                    <p>
                        Image SEO is the process of optimising website images so search engines can properly crawl,
                        understand, index, and rank them in visual search results like Google Images. Poorly optimised
                        images slow down your website, hurt Core Web Vitals, and miss valuable opportunities to rank for
                        additional keywords.
                    </p>

                    <p>
                        By improving alt text, file names, formats, compression, structured data, and image sitemaps, Image
                        SEO turns your visuals into powerful assets that drive organic traffic and improve overall search
                        performance.
                    </p>

                    <p>
                        Image optimisation is a critical part of modern technical SEO and page speed optimisation.
                    </p>
                </div>

                <div class="national-about-highlight">
                    <h3>Advanced Technical Image SEO</h3>

                    <p>
                        Our image SEO goes beyond basic optimisation. We implement:
                    </p>

                    <ul>
                        <li>Responsive images using srcset for different screen sizes</li>
                        <li>Lazy loading for improved page speed</li>
                        <li>Structured data (schema) for product and article images</li>
                        <li>Image XML sitemaps for better indexing</li>
                        <li>Correct image dimensions for layout stability (CLS)</li>
                        <li>CDN delivery for faster global performance</li>
                    </ul>

                    <p class="national-about-note">
                        These technical improvements directly support Core Web Vitals and search visibility.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY IMAGE SEO IS IMPORTANT -->
    <section class="section section-national-growth" id="image-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why Image SEO Is Important for Modern Websites</h2>
            </div>

            <div class="national-growth-card">
                <p>
                    Google increasingly relies on visual search and page experience signals when ranking websites. Proper
                    image SEO ensures your visuals contribute to rankings rather than harming performance.
                </p>

                <p>
                    When images are fully optimised, your website loads faster, ranks better, and gains additional
                    visibility through Google Images creating another source of organic traffic that many businesses ignore.
                </p>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="section image-cta" id="cta">
        <div class="container">
            <div class="cta-inner image-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Optimise Your Website Images for Search Engines? </h2>
                    <p>
                        Get a free Image SEO audit and improve your Google Images ranking and page speed.
                    </p>
                </div>
                <div class="cta-actions image-cta-actions">
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="image-seo">Get Free SEO
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
                <h2>Talk to Our Image SEO Team</h2>
                <p>
                    Share a few details and we’ll recommend the most impactful image SEO improvements for your website.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_image_enquiry">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_img_name">Full Name</label>
                        <input type="text" id="seo_img_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="seo_img_email">Email Address</label>
                        <input type="email" id="seo_img_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_img_website">Website URL</label>
                        <input type="url" id="seo_img_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="seo_img_focus">Main Image Focus</label>
                        <input type="text" id="seo_img_focus" name="payload[image_focus]"
                            placeholder="Product images, blog images, portfolio, etc.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_img_message">What do you want to improve?</label>
                        <textarea id="seo_img_message" name="message" rows="4"
                            placeholder="Google Images traffic, Core Web Vitals, page speed, accessibility, etc." required></textarea>
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
                <img src="{{ asset('assets/images/seo/image/cloudtech-seo.webp') }}" alt="Image Seo Services">
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
                <img src="{{ asset('assets/images/seo/image/image-seo.webp') }}" alt="Image Strategy">
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
                <img src="{{ asset('assets/images/seo/image/seo-service.webp') }}" alt="Affordable Services">
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






