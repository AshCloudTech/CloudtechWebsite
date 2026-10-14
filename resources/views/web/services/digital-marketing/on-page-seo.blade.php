@extends('layouts.cloudtech')

@section('title', 'On-Page SEO Services UK | Website Optimisation')
@section('meta_title', 'On-Page SEO Services UK | Website Optimisation')
@section('meta_description',
    'Improve website rankings with on-page SEO covering keywords, content, title tags, meta descriptions, headings, internal links and page structure.')
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
    <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script>
        <script src="{{ asset('assets/services/digitalMarketing/on-page/js/script.js') }}" defer></script>
    @endpush
@section('content')


    <!-- HERO -->
    <section class="hero onpage-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">On-Page SEO Services in UK</p>
                <h1>Professional On-Page SEO Services UK for Higher Google Rankings</h1>
                <p class="hero-subtitle">
                    Improve your website's search visibility with expert On-Page SEO Services UK that optimise content, keywords, headings, metadata, internal links, URLs, images, schema, and page structure to improve relevance, indexing, user experience, and organic traffic.
                </p>

                <div class="hero-actions">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="on-page-seo">Get Free On-Page SEO Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to an On-Page SEO Expert</a>
                    <a href="tel:07835761525" class="btn btn-primary btn-cta-added">Call Us</a>
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

    <!-- WHY -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Our On-Page SEO Services UK?</h2>
                <p>Our On-Page SEO agency improves individual website pages so search engines can better understand their relevance, content, structure, and value for users.</p>
            </div>

            <div class="grid grid-3 why-grid">
                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="file-text"></i></div>
                    <h3>Content Optimisation</h3>
                    <p>Optimise page content, headings, structure, readability, and topical relevance to create useful pages that satisfy search intent.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="search"></i></div>
                    <h3>Keyword Optimisation</h3>
                    <p>Target relevant primary, secondary, semantic, and long-tail keywords naturally across important page elements.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="tag"></i></div>
                    <h3>Meta Tags Optimisation</h3>
                    <p>Optimise title tags and meta descriptions around search intent and page relevance to improve visibility and click-through rates.</p>
                </article>

                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="link"></i></div>
                    <h3>Internal Linking</h3>
                    <p>Build a logical internal linking structure that helps users and search engines discover important pages and understand relationships between topics.</p>
                </article>
                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="code-2"></i></div>
                    <h3>Schema Markup</h3>
                    <p>Implement relevant structured data to help search engines understand your pages and support eligible enhanced search features.</p>
                </article>
                <article class="card why-card why-card-ui">
                    <div class="why-icon"><i data-lucide="trending-up"></i></div>
                    <h3>Higher Search Rankings</h3>
                    <p>Improve page relevance, content quality, structure, and optimisation to strengthen your potential to rank for valuable search terms.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header section-header-light">
                <h2>How Our On-Page SEO Process Works</h2>
                <p>Our proven On-Page SEO process combines keyword research, search-intent analysis, content optimisation, technical page improvements, internal linking, and ongoing performance tracking.</p>
            </div>

            <div class="process-grid process-grid-ui">
                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="keyboard"></i></div>
                    <h3>On-Page SEO Audit</h3>
                    <p>We analyse your pages for keyword gaps, metadata issues, content quality, heading structure, internal links, URLs, images, schema, and optimisation opportunities.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="layout-template"></i></div>
                    <h3>Keyword Mapping &amp; SEO Strategy</h3>
                    <p>We map primary and supporting keywords to the right pages based on search intent, competition, relevance, and your business objectives.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="settings"></i></div>
                    <h3>On-Page SEO Implementation</h3>
                    <p>We optimise content, headings, metadata, URLs, internal links, images, schema markup, and other page-level elements to improve search visibility.</p>
                </article>

                <article class="card process-card process-card-ui">
                    <div class="process-icon"><i data-lucide="line-chart"></i></div>
                    <h3>Performance Tracking &amp; Optimisation</h3>
                    <p>We monitor rankings, indexing, organic traffic, engagement, and page performance to identify opportunities for continuous improvement.</p>
                </article>
            </div>
        </div>
    </section>


    <!-- CONTENT TYPES -->
    <section class="section content-types" id="content-types">
        <div class="container">
            <div class="section-header">
                <h2>Page Types We Optimise for SEO</h2>
                <p>Our On-Page SEO services cover different website page types, from commercial landing pages to informational content.</p>
            </div>

            <div class="ct-grid ct-grid-ui">

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="home"></i></div>
                        <div class="ct-title">
                            <h3>Homepage Optimisation</h3>
                            <p>Optimise your homepage to strengthen brand relevance, primary keyword targeting, navigation, and internal linking.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Primary keyword targeting</li>
                        <li>SEO-friendly content structure</li>
                        <li>Internal linking</li>
                        <li>Title and meta description optimisation</li>
                    </ul>
                </article>

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="layout"></i></div>
                        <div class="ct-title">
                            <h3>Service &amp; Landing Page SEO</h3>
                            <p>Optimise commercial pages to target valuable keywords while providing clear information and strong conversion opportunities.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Keyword mapping</li>
                        <li>SEO heading structure</li>
                        <li>URL optimisation</li>
                        <li>Schema markup</li>
                        <li>Search-intent alignment</li>
                    </ul>
                </article>

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="shopping-bag"></i></div>
                        <div class="ct-title">
                            <h3>Product &amp; eCommerce Page SEO</h3>
                            <p>Optimise product pages to improve search visibility, product relevance, user experience, and conversion potential.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Product keyword optimisation</li>
                        <li>Title and metadata setup</li>
                        <li>Internal linking</li>
                        <li>Product content enhancement</li>
                        <li>Structured data</li>
                    </ul>
                </article>

                <article class="ct-card ct-card-ui">
                    <div class="ct-head">
                        <div class="ct-icon"><i data-lucide="book-open"></i></div>
                        <div class="ct-title">
                            <h3>Blog &amp; Content Page SEO</h3>
                            <p>Optimise informational content to increase organic visibility, topical relevance, engagement, and internal authority.</p>
                        </div>
                    </div>
                    <ul class="ct-points">
                        <li>Topic cluster development</li>
                        <li>Natural keyword placement</li>
                        <li>Content readability</li>
                        <li>Internal linking strategy</li>
                        <li>Search-intent optimisation</li>
                    </ul>
                </article>

            </div>
        </div>
    </section>


    <!-- INCLUDED -->
    <section class="section" id="included">
        <div class="container">
            <div class="section-header">
                <h2>What's Included in Our On-Page SEO Services UK?</h2>
                <p>Our complete On-Page SEO services improve the most important page-level ranking and relevance signals across your website.</p>
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
                        <h3>On-Page SEO Deliverables</h3>
                        <ul class="services-list">
                            <li>Complete On-Page SEO audit</li>
                            <li>Keyword research and keyword mapping</li>
                            <li>Search intent and content analysis</li>
                            <li>Title tag and meta description optimisation</li>
                            <li>H1-H6 heading structure optimisation</li>
                            <li>SEO content and semantic keyword optimisation</li>
                            <li>Internal linking structure improvement</li>
                            <li>Schema markup implementation</li>
                            <li>URL structure optimisation</li>
                            <li>Image file name and alt text optimisation</li>
                            <li>Content quality and readability improvements</li>
                            <li>Monthly performance reports and SEO recommendations</li>
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

                    <p>On-Page SEO services focus on improving individual web pages so search engines can clearly understand their topic, relevance, structure, and value to users.</p>

                    <p>This includes optimising content, keywords, headings, metadata, internal links, URLs, images, structured data, and other page-level elements that help align a website with search intent.</p>
                    <p>Unlike Technical SEO, which focuses on the technical foundation of a website, On-Page SEO focuses on the content and elements within individual pages that communicate relevance to search engines and users.</p>
                </div>

                <div class="national-about-highlight">
                    <h3>Search Intent &amp; Content Alignment</h3>

                    <p>A successful On-Page SEO strategy starts with understanding what users expect when they search for a particular keyword.</p>

                    <p>We optimise pages around:</p>

                    <ul>
                        <li><strong>Informational intent</strong> for blogs, guides, and educational content</li>
                        <li><strong>Commercial intent</strong> for service, category, and comparison pages</li>
                        <li><strong>Transactional intent</strong> for product and conversion-focused landing pages</li>
                        <li><strong>Navigational intent</strong> for brand and key website pages</li>
                    </ul>

                    <p class="national-about-note">Aligning content with search intent helps create more relevant pages that provide better value to users and stronger ranking potential.</p>

                    <h3>Semantic SEO &amp; Topical Relevance</h3>
                    <p>Modern search engines evaluate more than exact-match keywords. We optimise pages using related terms, entities, subtopics, questions, and supporting concepts to strengthen topical relevance.</p>
                    <p>This helps search engines understand the overall subject of a page while allowing content to remain natural and useful for readers.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- WHY ON-PAGE SEO IS CRITICAL -->
    <section class="section section-national-growth" id="onpage-growth">
        <div class="container">

            <div class="section-header">
                <h2>Why On-Page SEO Is Critical for Google Rankings</h2>
            </div>

            <div class="national-growth-card">
                <p>Strong technical SEO and backlinks are important, but search engines also need clear signals about what each page is about and which searches it should rank for.</p>

                <p>On-Page SEO brings together keyword targeting, content quality, search intent, headings, metadata, internal linking, structured data, and page structure to create a more relevant search experience.</p>
                <p>When these elements work together, your pages have a stronger foundation for ranking, attracting qualified organic traffic, and supporting conversions.</p>
            </div>

        </div>
    </section>

    <!-- RELATED SERVICES INTERLINKS -->
    <section class="section section-related-links" id="related-services">
        <div class="container">
            <div class="section-header">
                <h2>Explore Our Related SEO Services</h2>
                <p>Strengthen your website's search performance with these connected SEO and web development services.</p>
            </div>

            <div class="related-links-grid">
                <a class="related-link-card" href="/seo-service-uk" aria-label="SEO Services UK">
                    <span>SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/content-seo-service-uk" aria-label="Content SEO Services UK">
                    <span>Content SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/technical-seo-service-uk" aria-label="Technical SEO Services UK">
                    <span>Technical SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/off-page-seo-service-uk" aria-label="Off-Page SEO Services UK">
                    <span>Off-Page SEO Services UK</span>
                    <span class="related-link-arrow" aria-hidden="true">→</span>
                </a>

                <a class="related-link-card" href="/website-development-service-uk" aria-label="Website Development Services UK">
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
                    <p>Improve your page relevance, Google visibility, organic traffic, and search performance with expert On-Page SEO Services UK built around your website and target keywords.</p>
                </div>
                <div class="cta-actions onpage-cta-actions">
                    <a href="#audit" class="btn btn-primary jsGetAudit" data-audit-type="on-page-seo">Get Free On-Page SEO Audit</a>
                    <a href="#contact-form" class="btn btn-outline-light">Speak to an On-Page SEO Expert</a>
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

            <form class="contact-form js-validate-form" method="POST" action="{{ route('contact.submit') }}">
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


    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions About On-Page SEO Services UK</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>What Are On-Page SEO Services?</summary>
                        <div class="faq-content">
                            <p>On-Page SEO services optimise individual website pages to improve search visibility and relevance. This can include keyword research, content optimisation, metadata, headings, internal linking, URLs, images, schema markup, and search-intent alignment.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>How Does On-Page SEO Improve Google Rankings?</summary>
                        <div class="faq-content">
                            <p>On-Page SEO helps search engines understand the topic, relevance, structure, and value of your pages. Optimising content, keywords, headings, metadata, internal links, and other page elements can strengthen a page's ranking potential.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>What Is Included in an On-Page SEO Audit?</summary>
                        <div class="faq-content">
                            <p>An On-Page SEO audit can review keyword targeting, search intent, title tags, meta descriptions, headings, content quality, URLs, internal links, images, schema markup, page structure, and other optimisation opportunities.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>What Is the Difference Between On-Page SEO and Technical SEO?</summary>
                        <div class="faq-content">
                            <p>On-Page SEO focuses primarily on the content and elements within individual pages, while Technical SEO focuses on the website's technical foundation, including crawling, indexing, site speed, architecture, and technical performance.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>How Long Does On-Page SEO Take to Show Results?</summary>
                        <div class="faq-content">
                            <p>The time required depends on keyword competition, website authority, existing optimisation, content quality, technical performance, and the search market. Improvements can be seen at different rates as search engines recrawl and reassess optimised pages.</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Why Choose an On-Page SEO Agency in the UK?</summary>
                        <div class="faq-content">
                            <p>A UK On-Page SEO agency can develop strategies around relevant UK search terms, competitors, search intent, and business goals. Professional optimisation can help improve page relevance, organic visibility, qualified traffic, and long-term search performance.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection