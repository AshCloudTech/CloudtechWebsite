@extends('layouts.cloudtech')

@section('title', 'Technical SEO Services')
@section('meta_title', 'Cloud Technologies Ltd – Technical SEO Services')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/technical-seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
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
                <h1>Technical SEO<br>Excellence</h1>
                <p class="hero-subtitle">
                    At Cloud Technologies Ltd, we deliver expert technical SEO services that help clients
                    achieve 1st page rankings on Google through comprehensive technical optimisation.
                </p>

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
                    Technical SEO is the foundation of every successful SEO strategy. Without it, even the best content
                    struggles to rank and perform. <!-- content adapted from wireframe -->
                </p>
            </div>

            <div class="grid grid-4 why-grid">
                <article class="card why-card">
                    <div class="why-icon icon-speed"></div>
                    <h3>Site Speed Optimisation</h3>
                    <p>
                        Improve page loading times for better user experience and higher rankings.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-crawl"></div>
                    <h3>Crawlability Enhancement</h3>
                    <p>
                        Make your site easier for search engines to crawl, understand and index.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-rank"></div>
                    <h3>1st Page Rankings</h3>
                    <p>
                        Strong technical foundations give your content the best chance to rank on page one.
                    </p>
                </article>

                <article class="card why-card">
                    <div class="why-icon icon-core"></div>
                    <h3>Core Web Vitals</h3>
                    <p>
                        Optimise for Google&apos;s Core Web Vitals and key UX signals that impact visibility.
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
                    We identify and resolve technical problems that are holding your website back.
                </p>
            </div>

            <div class="grid grid-4 issues-grid">
                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Slow Page Speed</h3>
                    <p>
                        Image optimisation, code minification and smart caching to boost performance.
                    </p>
                </article>

                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Poor Mobile Experience</h3>
                    <p>
                        Responsive optimisation and mobile-first improvements across key templates.
                    </p>
                </article>

                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Crawling Errors</h3>
                    <p>
                        Fix broken links, clean up redirects and improve site architecture for bots.
                    </p>
                </article>

                <article class="card issue-card">
                    <div class="issue-icon"></div>
                    <h3>Duplicate Content</h3>
                    <p>
                        Canonical URL implementation and content consolidation strategies.
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
                    A proven methodology that delivers measurable improvements in visibility and performance.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Technical Audit</h3>
                    <p>
                        Comprehensive analysis of your website&apos;s technical health and performance.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Issue Identification</h3>
                    <p>
                        Detailed report of technical issues affecting crawlability, UX and rankings.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Implementation</h3>
                    <p>
                        Expert execution of technical fixes and optimisations with minimal disruption.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Monitoring</h3>
                    <p>
                        Ongoing tracking and optimisation to maintain peak performance over time.
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
                        <li>Website speed optimisation and performance audits</li>
                        <li>Mobile-first indexing optimisation</li>
                        <li>Technical SEO audit and error fixing</li>
                        <li>XML sitemap creation and optimisation</li>
                        <li>Robots.txt optimisation and management</li>
                        <li>Schema markup implementation</li>
                        <li>Canonical URL optimisation</li>
                        <li>Internal linking structure optimisation</li>
                        <li>HTTPS migration and security optimisation</li>
                        <li>Core Web Vitals improvement</li>
                        <li>JavaScript SEO and rendering optimisation</li>
                        <li>Crawl budget optimisation</li>
                    </ul>
                </div>
                <div class="services-panel">
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
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section tech-cta" id="cta">
        <div class="container">
            <div class="cta-inner tech-cta-inner">
                <div class="cta-main">
                    <h2>Fix Your Technical SEO Issues Today</h2>
                    <p>
                        Get a comprehensive technical SEO audit and discover what&apos;s holding your website back.
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

            <form class="contact-form">
                <div class="form-row">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="name@company.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <label for="website">Website URL</label>
                        <input type="text" id="website" placeholder="https://">
                    </div>
                    <div class="form-field">
                        <label for="priority">Main Technical Concern</label>
                        <input type="text" id="priority" placeholder="Speed, Core Web Vitals, crawl issues, etc.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="message">Anything else we should know?</label>
                        <textarea id="message" rows="4" placeholder="Tech stack, CMS, recent migrations, etc."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </div>
    </section>

@endsection