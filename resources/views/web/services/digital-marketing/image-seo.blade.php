@extends('layouts.cloudtech')

@section('title', 'CloudTech Image SEO Services')
@section('meta_title', 'Professional Image SEO Services in the UK | CloudTechnologies Ltd')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/image-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/image-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero image-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Image SEO Services</p>
                <h1>Professional Image<br>&amp; SEO Services in the UK</h1>
                <p class="hero-subtitle">
                    Optimize website images for search engines and improve visibility with expert Image SEO services. We
                    improve Google Images rankings through alt tag optimization, image compression, SEO-friendly file names,
                    WebP/AVIF conversion, structured data, and image sitemap implementation for faster loading and better
                    indexing.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Free SEO Audit</a>
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

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our Image SEO Services in the UK?</h2>
                <!-- <p>
                        Drive organic traffic from across the UK with our comprehensive image SEO strategies.
                    </p> -->
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-quality"></div>
                    <h3>Alt Text Optimisation for Image Search</h3>
                    <p>
                        SEO-friendly alt tags that help search engines understand image context and improve accessibility.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-keyword"></div>
                    <h3>Image Compression for Page Speed</h3>
                    <p>
                        Reduce image sizes without quality loss to enhance loading speed and Core Web Vitals.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-engagement"></div>
                    <h3>Next-Gen Image Formats (WebP & AVIF)</h3>
                    <p>
                        Convert images into modern formats for faster delivery and better performance.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-authority"></div>
                    <h3>Improve Google Images Rankings </h3>
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
                <!-- <p>
                        A comprehensive 4-step approach to optimize your visual content.
                    </p> -->
            </div>

            <div class="grid grid-4 process-grid">
                <article class="process-card">
                    <h3>Image SEO Audit</h3>
                    <p>Analyse existing images, formats, sizes, metadata, and indexing issues.</p>
                </article>
                <article class="process-card">
                    <h3>Image Optimization Strategy</h3>
                    <p>Plan alt tags, file names, compression levels, formats, and structured data.</p>
                </article>
                <article class="process-card">
                    <h3>Technical Image SEO Implementation</h3>
                    <p>Apply lazy loading, responsive images, WebP/AVIF, schema markup, and image sitemaps.</p>
                </article>
                <article class="process-card">
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
                <!-- <p>Comprehensive content SEO services for all types of business content</p> -->
            </div>

            <div class="ct-grid">
                <!-- Card 1 -->
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
                        <div class="ct-title">
                            <h3>Blog Posts &amp; Articles Graphics SEO</h3>
                            <p>Optimised blog images with alt tags, SEO file names, and compression for better Google Images
                                visibility.</p>
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
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
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
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
                        <div class="ct-title">
                            <h3>Product and E-commerce Image SEO </h3>
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
                <article class="ct-card">
                    <div class="ct-head">
                        <div class="ct-icon" aria-hidden="true"></div>
                        <div class="ct-title">
                            <h3>Technical and Website Graphics Optimisation </h3>
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
                <!-- <div class="services-copy">
                        <h3>Complete image optimisation that supports rankings + speed</h3>
                        <p class="services-intro">
                            From file formats to metadata and delivery, we optimise the full image pipeline so your pages load faster and your visuals can rank in Google Images.
                        </p>
                    </div> -->

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
    <!-- WHAT IS IMAGE SEO -->
<section class="section section-national-about" id="about-image-seo">
    <div class="container">
        <div class="national-about-wrapper">

            <div class="national-about-content">
                <h2>What Is Image SEO?</h2>

                <p>
                    Image SEO is the process of optimising website images so search engines can properly crawl, understand, index, and rank them in visual search results like Google Images. Poorly optimised images slow down your website, hurt Core Web Vitals, and miss valuable opportunities to rank for additional keywords.
                </p>

                <p>
                    By improving alt text, file names, formats, compression, structured data, and image sitemaps, Image SEO turns your visuals into powerful assets that drive organic traffic and improve overall search performance.
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
                Google increasingly relies on visual search and page experience signals when ranking websites. Proper image SEO ensures your visuals contribute to rankings rather than harming performance.
            </p>

            <p>
                When images are fully optimised, your website loads faster, ranks better, and gains additional visibility through Google Images creating another source of organic traffic that many businesses ignore.
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
                    <a href="#contact-form" class="btn btn-primary">Get Free SEO Audit</a>
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


@endsection
