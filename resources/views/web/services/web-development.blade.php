@extends('layouts.cloudtech')

@section('title', 'Web Development Services in the UK | Cloud Technologies Ltd')
@section('meta_title', 'Cloud Technologies Ltd – Web Development Services in the UK')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/js/script.js') }}" defer></script>
@endpush
@section('content')


    <!-- HERO -->
    <section class="hero webdev-hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <p class="hero-eyebrow">Website Development Services</p>
                <h1>Professional Website Development Services <br>for Modern Businesses</h1>
                <p class="hero-subtitle">
                    Cloud Technologies Ltd provides professional website development services that help modern businesses
                    stand out with fast,
                    responsive, and SEO-optimized websites. Our custom designs improve engagement and boost long-term
                    visibility.
                </p>

                <div class="hero-actions">
                    <a href="#cta" class="btn btn-lg btn-primary">Talk to Our Team</a>
                    <a href="#services" class="btn btn-lg btn-ghost hero-ghost-light">View Development Services</a>
                </div>

                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-value">50+</span>
                        <span class="hero-stat-label">Websites Delivered</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">15+</span>
                        <span class="hero-stat-label">Industries Served</span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-value">100%</span>
                        <span class="hero-stat-label">Responsive by Design</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Website Development Services</h2>
                <p>
                    Cloud Technologies Ltd builds responsive, high-quality websites designed for performance and user
                    engagement.
                </p>
            </div>

            <div class="grid grid-4 services-grid">
                <article class="card service-card">
                    <div class="service-icon icon-wp"></div>
                    <h3><a href="{{ route('services.website-development.wordpress') }}">WordPress Development</a></h3>
                    <p>
                        We provide expert WordPress development to create fast, secure, and fully customizable websites. Our
                        team builds responsive,
                        SEO-friendly WordPress sites tailored to your brand and business goals.
                    </p>
                    <a href="{{ route('services.website-development.wordpress') }}" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-woo"></div>
                    <h3><a href="{{ route('services.website-development.woocommerce') }}">WooCommerce Development</a></h3>
                    <p>
                        Our WooCommerce development services help you build a powerful, scalable online store with smooth
                        functionality, custom features, secure payments,
                        and an optimized shopping experience for higher conversions.
                    </p>
                    <a href="{{ route('services.website-development.woocommerce') }}" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-shopify"></div>
                    <h3><a href="{{ route('services.website-development.shopify') }}">Shopify Development</a></h3>
                    <p>
                        We deliver professional Shopify development to create high-converting, visually appealing, and
                        mobile-optimized online stores. Our custom themes and app integrations enhance performance and boost
                        eCommerce sales.
                    </p>
                    <a href="{{ route('services.website-development.shopify') }}" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-sq"></div>
                    <h3><a href="{{ route('services.website-development.squarespace') }}">Squarespace Websites</a></h3>
                    <p>
                        Our Squarespace development services focus on creating clean, modern, and fully responsive websites
                        that are easy to manage. Ideal for businesses seeking stylish design, strong performance, and
                        simplicity.
                    </p>
                    <a href="{{ route('services.website-development.squarespace') }}" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-wix"></div>
                    <h3><a href="{{ route('services.website-development.wix') }}">Wix Websites</a></h3>
                    <p>
                        We build custom Wix websites that are visually appealing, mobile-responsive, and optimised for user
                        experience. Perfect for small businesses wanting a simple, fast, and effective online presence.
                    </p>
                    <a href="{{ route('services.website-development.wix') }}" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-gd"></div>
                    <h3><a href="{{ route('services.website-development.godaddy') }}">GoDaddy Builder</a></h3>
                    <p>
                        We develop professional websites using GoDaddy Website Builder, offering quick setup, responsive
                        layouts, and essential features to help businesses establish a strong and reliable online presence.
                    </p>
                    <a href="{{ route('services.website-development.godaddy') }}" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-laravel"></div>
                    <h3><a href="{{ route('services.website-development.laravel') }}">Laravel Development</a></h3>
                    <p>
                        Our Laravel development services deliver secure, scalable, and high-performance web applications. We
                        build fully custom solutions with clean architecture, advanced features, and optimised efficiency.
                    </p>
                    <a href="{{ route('services.website-development.laravel') }}" class="service-link">Read More</a>
                </article>

                <article class="card service-card">
                    <div class="service-icon icon-custom"></div>
                    <h3><a href="{{ route('services.website-development.custom-php') }}">Custom PHP Projects</a></h3>
                    <p>
                        We deliver bespoke PHP solutions including system integrations, custom platforms, and legacy
                        application rebuilds tailored to industry-specific workflows and business requirements.
                    </p>
                    <a href="{{ route('services.website-development.custom-php') }}" class="service-link">Read More</a>
                </article>

            </div>
        </div>
    </section>

    <!-- TECH STACK -->
    <section class="section section-alt" id="stack">
        <div class="container">
            <div class="section-header">
                <h2>Technologies We Master</h2>
                <p>
                    Our team masters the latest technologies to deliver high-performing websites, applications, and digital
                    experiences.
                </p>
            </div>

            <div class="stack-layout">
                <div class="stack-columns">
                    <div class="stack-column">
                        <h3>Frontend Frameworks</h3>
                        <ul>
                            <li><b>React</b>-Build fast, dynamic user interfaces with React.</li>
                            <li><b>Angular</b>-Develop scalable, robust apps with Angular.</li>
                            <li><b>Vue</b>-Create smooth, flexible web apps using Vue.js.</li>
                            <li><b>Tailwind CSS</b>-Design responsive, custom UIs with Tailwind CSS.</li>
                        </ul>
                    </div>
                    <div class="stack-column">
                        <h3>Backend &amp; Databases</h3>
                        <ul>
                            <li><b>Node.js</b>-Build fast, scalable server-side apps with Node.js.</li>
                            <li><b>TypeScript</b>-Write clean, reliable code with TypeScript.</li>
                            <li><b>MongoDB</b>-Store data flexibly with MongoDB’s NoSQL database.</li>
                            <li><b>Firebase</b>-Build real-time apps quickly using Firebase tools.</li>
                        </ul>
                    </div>
                    <div class="stack-column">
                        <h3>Infrastructure &amp; Tools</h3>
                        <ul>
                            <li>AWS &amp; DigitalOcean</li>
                            <li>cPanel / Plesk</li>
                            <li>Git / GitHub</li>
                            <li>Docker</li>
                            <li>CI/CD Pipelines</li>
                        </ul>
                    </div>
                </div>

                <div class="stack-stats">
                    <div class="stack-stat">
                        <span class="stack-stat-value">50+</span>
                        <span class="stack-stat-label">Technologies Used</span>
                    </div>
                    <div class="stack-stat">
                        <span class="stack-stat-value">1000+</span>
                        <span class="stack-stat-label">Deployments</span>
                    </div>
                    <div class="stack-stat">
                        <span class="stack-stat-value">99.9%</span>
                        <span class="stack-stat-label">Uptime Targets</span>
                    </div>
                    <div class="stack-stat">
                        <span class="stack-stat-value">24/7</span>
                        <span class="stack-stat-label">Monitoring &amp; Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RECENT PROJECTS -->
    <section class="section" id="projects">
        <div class="container">
            <div class="section-header">
                <h2>Our Recent Projects</h2>
                <p>
                    Explore our creative and high-quality website development work.
                </p>
            </div>

            <div class="grid grid-3 projects-grid">
                <article class="card project-card">
                    <div class="project-thumb thumb-1"></div>
                    <span class="project-tag project-tag-blue">E‑commerce</span>
                    <h3>Fashion E-commerce Platform</h3>
                    <p>
                        A modern online store for easy browsing and shopping
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-2"></div>
                    <span class="project-tag project-tag-purple">Corporate</span>
                    <h3>Corporate Business Website</h3>
                    <p>
                        A clean, professional website for corporate branding.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-3"></div>
                    <span class="project-tag project-tag-emerald">SaaS</span>
                    <h3>SaaS Management Platform</h3>
                    <p>
                        A scalable platform to streamline tasks and workflows.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-4"></div>
                    <span class="project-tag project-tag-sky">Booking</span>
                    <h3>Restaurant Booking System</h3>
                    <p>
                        A simple system for quick and easy table reservations
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-5"></div>
                    <span class="project-tag project-tag-amber">Real Estate</span>
                    <h3>Real Estate Portal</h3>
                    <p>
                        A user-friendly property listing and search platform.
                    </p>
                </article>

                <article class="card project-card">
                    <div class="project-thumb thumb-6"></div>
                    <span class="project-tag project-tag-rose">Education</span>
                    <h3>E-Learning Platform</h3>
                    <p>
                        A digital platform for online courses and learning.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section section-process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>Our Development Process</h2>
                <p>
                    Our step-by-step approach ensures quality, clarity, and smooth project delivery.
                </p>
            </div>

            <div class="grid grid-4 process-grid">
                <article class="card process-card">
                    <div class="process-step">1</div>
                    <h3>Planning &amp; Strategy</h3>
                    <p>
                        We set clear goals and create a roadmap to guide the entire project.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">2</div>
                    <h3>Design &amp; Prototyping</h3>
                    <p>
                        We design clean layouts and prototypes to shape the user experience.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">3</div>
                    <h3>Development &amp; Testing</h3>
                    <p>
                        We build the solution and test thoroughly for quality and performance.
                    </p>
                </article>

                <article class="card process-card">
                    <div class="process-step">4</div>
                    <h3>Launch &amp; Support</h3>
                    <p>
                        We launch your project and provide ongoing support for smooth operation.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section webdev-cta" id="cta">
        <div class="container">
            <div class="cta-inner webdev-cta-inner">
                <div class="cta-main">
                    <h2>Ready to Build Your Dream Website?</h2>
                    <p>
                        Let our team create a refined, responsive, and business-focused website tailored to your needs.
                    </p>
                </div>
                <div class="cta-actions webdev-cta-actions">
                    <a href="#contact-form" class="btn btn-primary">Request a Call Back</a>
                    <a href="#projects" class="btn btn-outline-light">View More Projects</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section-alt section-faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Website Development FAQ</h2>
                <p>
                    Answers to common questions about website development, timelines, pricing and support.
                </p>
            </div>

            <div class="faq-wrap">
                <div class="faq-list">
                    <details class="faq-item">
                        <summary>1. What are website development services?</summary>
                        <div class="faq-content">
                            <p>
                                Website development services include designing, building, and maintaining websites.
                                These services cover everything from UI/UX design and front-end development to back-end
                                programming,
                                database integration, performance optimization, and ongoing support.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>2. How much does website development cost?</summary>
                        <div class="faq-content">
                            <p>
                                The cost of website development depends on the project scope, features, design complexity,
                                and technology used.
                                A basic website may cost less, while custom, e-commerce, or enterprise websites require a
                                higher investment.
                                Most providers offer flexible pricing based on your business needs.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>3. How long does it take to develop a website?</summary>
                        <div class="faq-content">
                            <p>
                                Website development timelines vary by project size. A simple website can take 2–4 weeks,
                                while complex or custom websites may take 2–3 months or more. Clear requirements and timely
                                feedback
                                help speed up the process.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>4. Do you provide custom website development?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, professional website development services offer fully custom solutions tailored to your
                                brand,
                                goals, and target audience. Custom development ensures better performance, scalability,
                                security,
                                and a unique user experience.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>5. Will my website be mobile-friendly and SEO-optimized?</summary>
                        <div class="faq-content">
                            <p>
                                Absolutely. Modern website development focuses on responsive design so your website works on
                                all devices.
                                SEO-friendly structure, fast loading speed, clean code, and search-engine best practices are
                                also included
                                to help improve rankings.
                            </p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>6. Do you offer website maintenance and support after launch?</summary>
                        <div class="faq-content">
                            <p>
                                Yes, most website development companies provide ongoing maintenance and support. This
                                includes security updates,
                                bug fixes, performance optimization, content updates, and technical assistance to keep your
                                website running smoothly.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="section section-contact" id="contact-form">
        <div class="container">
            <div class="section-header">
                <h2>Tell Us About Your Website Project</h2>
                <p>
                    Share a few details and we’ll respond with timelines, options and next steps.
                </p>
            </div>

            <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                {{-- Identifiers --}}
                <input type="hidden" name="form_key" value="website_project_enquiry">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="webproj_name">Full Name</label>
                        <input type="text" id="webproj_name" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="form-field">
                        <label for="webproj_email">Email Address</label>
                        <input type="email" id="webproj_email" name="email" placeholder="name@company.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="webproj_company">Company Name</label>
                        <input type="text" id="webproj_company" name="payload[company_name]"
                            placeholder="Organisation name">
                    </div>

                    <div class="form-field">
                        <label for="webproj_budget">Estimated Budget</label>
                        <input type="text" id="webproj_budget" name="payload[estimated_budget]"
                            placeholder="e.g. £2,000 – £10,000">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="webproj_message">Project Details</label>
                        <textarea id="webproj_message" name="message" rows="4"
                            placeholder="New website, redesign, platform preference, deadlines, etc." required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Project</button>
            </form>
        </div>
    </section>



@endsection
