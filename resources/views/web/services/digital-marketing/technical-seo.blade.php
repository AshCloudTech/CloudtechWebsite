@extends('layouts.cloudtech')

@section('title', 'Technical SEO Services')
@section('meta_title', 'Cloud Technologies Ltd – Technical SEO Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/technical-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/digitalMarketing/technical-seo/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero tech-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="hero-eyebrow">Technical SEO Services</p>
                <h1>Expert Technical SEO Services for Higher Search Rankings</h1>
                <p class="hero-subtitle">
                    Our Technical SEO Services optimize your site’s structure, speed, and crawlability to boost search
                    performance and organic traffic.</p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Get Technical Audit</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">Speak to Expert</a>
                </div>

                <div class="hero-note">
                    Solid technical foundations for fast, crawlable and error-free websites.
                </div>
            </div>

            <div class="hero-panel">
                <div class="hero-panel-inner">
                    <p class="hero-panel-label">Technical Health Snapshot</p>
                    <p class="hero-panel-text">
                        We review Core Web Vitals, crawlability, indexation and site structure to highlight the
                        technical issues holding your rankings back.
                    </p>
                    <ul class="hero-panel-list">
                        <li>Site speed &amp; performance</li>
                        <li>Mobile experience</li>
                        <li>Crawling &amp; indexing</li>
                        <li>Core Web Vitals</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY TECHNICAL SEO MATTERS -->
    <section class="section section-alt" id="why">
        <div class="container">
            <div class="section-header">
                <h2>Why Technical SEO Matters</h2>
                <p>
                    Technical SEO matters because it improves site speed, crawlability, user experience, and search
                    rankings, helping your website perform at its best.
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-speed"></div>
                    <h3>Site Speed Optimisation</h3>
                    <p>
                        Faster page speed improves user experience and boosts search rankings.
                    </p>
                </article>
                <article class="card why-card">
                    <div class="why-icon icon-core"></div>
                    <h3>Optimization </h3>
                    <p>
                        Technical optimization enhances site structure for better visibility.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-crawl"></div>
                    <h3>Crawlability</h3>
                    <p>
                        Improved crawlability helps search engines index your site efficiently.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-rank"></div>
                    <h3>1st Page Rankings</h3>
                    <p>
                        Strong technical SEO increases your chances of first-page rankings.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-core"></div>
                    <h3>Core Web Vitals</h3>
                    <p>
                        Optimizing Core Web Vitals boosts performance and overall SEO results.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- COMMON TECHNICAL ISSUES -->
    <section class="section" id="issues">
        <div class="container">
            <div class="section-header">
                <h2>Common Technical Issues We Fix</h2>
                <p>
                    We fix technical issues like speed problems, broken links, and indexing errors to improve website
                    performance and search rankings.
                </p>
            </div>

            <div class="grid grid-4 issues-grid">
                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Slow Page Speed</h3>
                    <p>
                        Improving load speed to boost user experience, reduce bounce rates, and increase Google rankings.
                    </p>
                </article>

                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Poor Mobile Experience</h3>
                    <p>
                        Fixing mobile layout, responsiveness, and usability to improve engagement and SEO performance.
                    </p>
                </article>

                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Crawling Errors</h3>
                    <p>
                        Resolving crawl and indexing issues so search engines can access, read, and rank your website
                        properly.
                    </p>
                </article>

                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Duplicate Content</h3>
                    <p>
                        Eliminating duplicate pages to avoid ranking loss and ensure Google sees unique, high-quality
                        content.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SEO PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Technical SEO Process</h2>
                <p>
                    We optimize your site for speed, mobile performance, and proper indexing.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Technical Audit</h3>
                    <p>
                        We analyse your website to uncover performance, speed, and indexing issues.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Issue Identification</h3>
                    <p>
                        We pinpoint the exact technical problems affecting rankings and usability.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>
                        We fix technical errors, optimise code, improve speed, and enhance site structure.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitoring</h3>
                    <p>
                        We track performance, re-check issues, and ensure long-term technical stability.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- COMPLETE TECHNICAL SEO SERVICES -->
    <section class="section section-services" id="services">
        <div class="container">
            <div class="services-layout">
                <div class="services-copy">
                    <h2>Complete Technical SEO Services</h2>
                    <ul class="services-list">
                        <li>Full Technical Audit to analyze website errors and performance issues.</li>
                        <li>Page Speed Optimisation to improve load times and Core Web Vitals.</li>
                        <li>Mobile Optimisation to ensure a smooth, responsive mobile experience.</li>
                        <li>Crawl & Indexing Fixes to help search engines properly access your pages.</li>
                        <li>On-Page Technical Improvements including meta tags, URLs, and canonical fixes.</li>
                        <li>Continuous Monitoring to maintain technical health and resolve new issues quickly.</li>

                    </ul>
                </div>
                <!-- <div class="services-panel">
                        <div class="services-panel-inner">
                            <p class="services-label">Technical Overview Panel</p>
                            <p class="services-text">
                                Visual summary of your current technical health with prioritised actions
                                for fastest impact.
                            </p>
                            <p class="services-meta">
                                Ideal for marketing teams, developers and leadership who need a clear technical roadmap.
                            </p>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>
    <!-- WHAT ARE TECHNICAL SEO SERVICES -->
<section class="section section-national-about" id="about-technical-seo">
    <div class="container">
        <div class="national-about-wrapper">

            <div class="national-about-content">
                <h2>What Are Technical SEO Services?</h2>

                <p>
                    Technical SEO services focus on optimising the foundation of your website so search engines can efficiently crawl, index, and rank your pages. While content and backlinks are important, they cannot perform effectively if your website has technical barriers that prevent search engines from accessing it properly.
                </p>

                <p>
                    Technical SEO includes improving site speed, Core Web Vitals, mobile usability, crawlability, indexation, site structure, and resolving errors that negatively impact search performance.
                </p>

                <p>
                    A technically optimised website creates the perfect environment for higher rankings, better user experience, and stronger organic growth.
                </p>
            </div>

            <div class="national-about-highlight">
                <h3>Key Areas Covered in Technical SEO</h3>

                <p>
                    A complete technical SEO campaign addresses:
                </p>

                <ul>
                    <li>Core Web Vitals optimisation (LCP, CLS, INP)</li>
                    <li>Crawl budget management</li>
                    <li>XML sitemap optimisation</li>
                    <li>Robots.txt configuration</li>
                    <li>Canonical tag implementation</li>
                    <li>Redirect management (301/302)</li>
                    <li>Schema markup for enhanced search results</li>
                    <li>URL structure and site architecture</li>
                    <li>Mobile-first optimisation</li>
                    <li>Indexation control and duplicate prevention</li>
                </ul>

                <p class="national-about-note">
                    These elements ensure your website is easy for search engines to understand and rank.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- WHY TECHNICAL SEO IS THE FOUNDATION -->
<section class="section section-national-growth" id="technical-growth">
    <div class="container">

        <div class="section-header">
            <h2>Why Technical SEO Is the Foundation of All SEO Success</h2>
        </div>

        <div class="national-growth-card">
            <p>
                Many websites struggle to rank not because of poor content, but because of hidden technical issues limiting their potential. Technical SEO ensures that every page on your website can be properly crawled, indexed, and evaluated by search engines.
            </p>

            <p>
                Without strong technical foundations, even the best content and backlinks will underperform. With expert technical SEO, your entire website becomes easier to rank, faster to load, and more accessible to users and search engines alike.
            </p>
        </div>

    </div>
</section>


    <!-- CTA -->
    <section class="section tech-cta" style="margin-top:35px" id="cta">
        <div class="container">
            <div class="cta-inner tech-cta-inner">
                <div class="cta-main">
                    <h2>Fix Your Technical SEO Issues Today</h2>
                    <p>
                        Fix your Technical SEO issues today to improve site speed, boost indexing, enhance mobile
                        performance, and strengthen your overall search rankings.
                    </p>
                </div>
                <div class="cta-actions tech-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Get Technical Audit</a>
                    <a href="#why" class="btn btn-outline-light">See Why It Matters</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Request Your Technical SEO Audit</h2>
                <p>
                    Share a few details and we&apos;ll send you a clear, actionable technical SEO report.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="seo_technical_audit">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_tech_name">Full Name</label>
                        <input type="text" id="seo_tech_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="seo_tech_email">Email Address</label>
                        <input type="email" id="seo_tech_email" name="email" placeholder="name@company.com"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="seo_tech_website">Website URL</label>
                        <input type="url" id="seo_tech_website" name="payload[website]" placeholder="https://">
                    </div>

                    <div class="form-field">
                        <label for="seo_tech_priority">Main Technical Concern</label>
                        <input type="text" id="seo_tech_priority" name="payload[technical_concern]"
                            placeholder="Speed, Core Web Vitals, crawl issues, etc.">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="seo_tech_message">Anything else we should know?</label>
                        <textarea id="seo_tech_message" name="message" rows="4" placeholder="Tech stack, CMS, recent migrations, etc."
                            required></textarea>
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
                <h2>Technical SEO FAQs</h2>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What is Technical SEO?</summary>
                        <div class="faq-content">
                            <p>
                                Technical SEO focuses on improving a website’s backend structure—speed, indexing,
                                crawlability, and overall performance—to help search engines understand and rank it better.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. Why is Technical SEO important?</summary>
                        <div class="faq-content">
                            <p>
                                Without strong technical foundations, even well-written content may not rank because search
                                engines can’t properly crawl or index the site.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. How long does it take to see results from Technical SEO?</summary>
                        <div class="faq-content">
                            <p>
                                Most technical improvements show results within 4–12 weeks, depending on the size of the
                                website and the issues fixed.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. What tools do you use for Technical SEO audits?</summary>
                        <div class="faq-content">
                            <p>
                                We use tools like Google Search Console, Screaming Frog, PageSpeed Insights, and GTmetrix to
                                identify errors, speed issues, and indexing problems.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. What are the most common technical issues?</summary>
                        <div class="faq-content">
                            <p>Slow page speed, mobile usability problems, duplicate content, broken links, crawl errors,
                                and missing structured data are some of the most common.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Do technical fixes improve rankings?</summary>
                        <div class="faq-content">
                            <p>
                                Yes. Better speed, cleaner code, proper indexing, and improved mobile performance all
                                contribute directly to higher rankings and better user experience.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

@endsection
