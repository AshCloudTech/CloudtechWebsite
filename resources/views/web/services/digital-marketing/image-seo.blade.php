@extends('layouts.cloudtech')

@section('title', 'Image SEO Services UK | Image Optimisation Experts')
@section('meta_title', 'Image SEO Services UK | Image Optimisation Experts')
@section('meta_description', 'Improve image visibility and website performance with image SEO, including optimisation, alt text, file sizes and search-friendly image practices.')
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
    <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script>
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
                <h1>Professional Image SEO Services UK <br>for Better Google Images Rankings</h1>
                <p class="hero-subtitle">
                    Optimise website images for search engines and improve organic visibility with expert Image SEO Services UK. We improve Google Images performance through alt text optimisation, image compression, SEO-friendly file names, WebP and AVIF conversion, structured data, and image sitemap optimisation for faster loading and better indexing.
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="image-seo">Get Free Image SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to an Image SEO Expert</a>
                    <a href="tel:07835761525" class="btn btn-primary btn-cta-added">Call Us</a>
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
                <h2>Why Choose Our Image SEO Services UK?</h2>
            </div>

            <div class="why-grid why-grid-ui">
                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="image"></i>
                    </div>
                    <h3>Alt Text Optimisation for Google Images</h3>
                    <p>Create descriptive, SEO-friendly alt text that helps search engines understand image context while improving accessibility and image search visibility.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="zap"></i>
                    </div>
                    <h3>Image Compression for Faster Websites</h3>
                    <p>Reduce image file sizes without unnecessary quality loss to improve page speed, user experience, and Core Web Vitals.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="file-image"></i>
                    </div>
                    <h3>WebP &amp; AVIF Image Optimisation</h3>
                    <p>Convert images into modern formats such as WebP and AVIF to reduce file sizes, improve loading performance, and support better website SEO.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon" aria-hidden="true">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <h3>Improve Google Images Search Visibility</h3>
                    <p>Optimise image files, metadata, context, and technical elements to increase opportunities for visibility in Google Images and visual search.</p>
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
                    <h3>Image SEO Audit &amp; Analysis</h3>
                    <p>Analyse existing images, file sizes, formats, alt text, metadata, indexing, performance, and technical image SEO issues.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon" aria-hidden="true"><i data-lucide="clipboard-list"></i></div>
                    <h3>Image Optimisation Strategy</h3>
                    <p>Create an optimisation plan covering alt text, file names, compression, image formats, dimensions, structured data, and search relevance.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon" aria-hidden="true"><i data-lucide="wrench"></i></div>
                    <h3>Technical Image SEO Implementation</h3>
                    <p>Implement responsive images, lazy loading, WebP and AVIF, structured data, image sitemaps, and technical fixes to improve performance and indexing.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon" aria-hidden="true"><i data-lucide="line-chart"></i></div>
                    <h3>Image SEO Performance Tracking</h3>
                    <p>Monitor image indexing, Google Images visibility, organic traffic, page performance, and technical improvements.</p>
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
                            <h3>Blog &amp; Article Image SEO</h3>
                            <p>Optimise blog and article images with descriptive alt text, SEO-friendly file names, appropriate formats, and compression for better Google Images visibility.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Alt text optimisation</li>
                        <li>SEO-friendly file naming</li>
                        <li>Image compression</li>
                        <li>Search context relevance</li>
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
                            <p>Optimise landing page images with next-generation formats, responsive sizing, descriptive attributes, and lazy loading for faster pages and stronger SEO.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>WebP / AVIF formats</li>
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
                            <h3>Product &amp; eCommerce Image SEO</h3>
                            <p>Optimise product images for faster loading, better indexing, enhanced search visibility, and improved product page performance.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Product image optimisation</li>
                        <li>Image structured data</li>
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
                            <h3>Technical &amp; Website Image Optimisation</h3>
                            <p>Improve technical image SEO with structured data, image sitemaps, indexing fixes, responsive delivery, and performance optimisation.</p>
                        </div>
                    </div>

                    <ul class="ct-points">
                        <li>Image sitemap</li>
                        <li>Structured data</li>
                        <li>Image indexing fixes</li>
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
                <h2>What's Included in Our Image SEO Services?</h2>
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
                        <h3>Image SEO Deliverables</h3>
                        <ul class="services-list">
                            <li>Image SEO audit and performance analysis</li>
                            <li>Alt text and SEO-friendly file name optimisation</li>
                            <li>Image compression and responsive resizing</li>
                            <li>WebP / AVIF image conversion</li>
                            <li>Image sitemap creation and optimisation</li>
                            <li>Structured data implementation for relevant images</li>
                            <li>Lazy loading implementation</li>
                            <li>Responsive image optimisation for different devices</li>
                            <li>Image indexing and crawl issue fixes</li>
                            <li>Monthly Image SEO performance reporting</li>
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
                <p>Combine Image SEO with technical, on-page, and website optimisation services for stronger organic search performance.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/technical-seo-service-uk" aria-label="Technical SEO Services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO Services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/on-page-seo-service-uk" aria-label="On-Page SEO Services UK">
                    <span>On-Page SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk" aria-label="Website Development Services UK">
                    <span>Website Development Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/ecommerce-seo-service-uk" aria-label="eCommerce SEO Services UK">
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
                    <h2>What Is Image SEO &amp; How Does It Work?</h2>

                    <p>Image SEO is the process of optimising website images so Google and other search engines can crawl, understand, index, and display them in relevant visual search results such as Google Images. Poorly optimised images can slow down your website, affect Core Web Vitals, reduce user experience, and miss opportunities to generate additional organic traffic.</p>

                    <p>By improving alt text, file names, image formats, compression, dimensions, structured data, and image sitemaps, Image SEO helps turn website images into valuable search assets that support organic visibility and overall SEO performance.</p>

                    <p>Image optimisation is an important part of modern technical SEO, content SEO, and website performance optimisation.</p>
                </div>

                <div class="national-about-highlight">
                    <h3>Advanced Technical Image SEO</h3>

                    <p>Our Image SEO services go beyond basic alt text optimisation. We implement:</p>

                    <ul>
                        <li>Responsive images using srcset for different screen sizes</li>
                        <li>Lazy loading to improve page speed</li>
                        <li>Structured data for relevant product and article images</li>
                        <li>Image XML sitemaps to support image discovery and indexing</li>
                        <li>Correct image dimensions to improve layout stability and CLS</li>
                        <li>Optimised image delivery through suitable CDN solutions</li>
                    </ul>

                    <p class="national-about-note">These technical improvements can support Core Web Vitals, page experience, image discovery, and overall search visibility.</p>
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
                <p>Search engines use image context, page content, technical signals, and image quality to understand visual content. Proper Image SEO helps your images contribute to search visibility and website performance rather than becoming a source of unnecessary page weight.</p>

                <p>When images are properly optimised, your website can load faster, provide a better user experience, support stronger Core Web Vitals, and gain additional visibility through Google Images, creating another potential source of organic traffic.</p>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="section image-cta" id="cta">
        <div class="container">
            <div class="cta-inner image-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Improve Your Image Search Visibility?</h2>
                    <p>Get a free Image SEO audit and optimise your website images for better Google Images visibility, faster page performance, improved Core Web Vitals, and stronger organic search performance.</p>
                </div>
                <div class="cta-actions image-cta-actions">
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="image-seo">Get Free Image SEO Audit</a>
                    <a href="#process" class="btn btn-outline-light">View Our Image SEO Process</a>
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

            <form class="contact-form js-validate-form" method="POST" action="{{ route('contact.submit') }}">
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


    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions About Image SEO Services</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>What Are Image SEO Services?</summary>
                        <div class="faq-content">
                            <p>Image SEO services optimise website images to improve search engine understanding, indexing, Google Images visibility, accessibility, and page performance. This can include alt text, file names, compression, image formats, structured data, and image sitemaps.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>How Does Image SEO Improve Google Images Rankings?</summary>
                        <div class="faq-content">
                            <p>Image SEO helps Google understand an image through relevant alt text, file names, surrounding content, image quality, structured data, and technical optimisation. These improvements can increase the opportunity for relevant images to appear in Google Images.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Why Are Alt Tags Important for Image SEO?</summary>
                        <div class="faq-content">
                            <p>Alt text helps search engines understand the subject and context of an image while providing useful information for users who cannot see the image. Descriptive, relevant alt text can support accessibility and image search optimisation.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Should I Use WebP or AVIF for SEO?</summary>
                        <div class="faq-content">
                            <p>WebP and AVIF can significantly reduce image file sizes while maintaining good visual quality. Smaller image files can improve loading performance and support better page experience and Core Web Vitals when implemented correctly.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>What Is an Image Sitemap?</summary>
                        <div class="faq-content">
                            <p>An image sitemap helps search engines discover images that may be difficult to find through normal crawling. It can support image discovery and indexing, particularly for websites with large numbers of important visual assets.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Why Choose an Image SEO Agency in the UK?</summary>
                        <div class="faq-content">
                            <p>A professional Image SEO agency can optimise images for Google Images, website performance, accessibility, indexing, and technical SEO. A structured Image SEO strategy can help businesses gain additional organic visibility while improving overall website performance.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection