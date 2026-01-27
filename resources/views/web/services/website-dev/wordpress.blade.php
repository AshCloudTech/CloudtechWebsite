@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/wordpress/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/wordpress/js/script.js') }}" defer></script>
@endpush
@section('content')

<section class="hero" id="hero">
  <div class="container hero-inner">
    <h1>WordPress Custom<br>Development Solutions</h1>
    <p class="sub">
     We build fast, secure, and scalable WordPress websites tailored to your business goals,
      delivering expert wordpress web development with long-term performance and flexibility.
    </p>
    <div class="hero-actions">
      <a class="btn primary">Start Your Project</a>
      <a class="btn ghost">Learn More</a>
    </div>
  </div>
</section>

<section class="solutions" id="solutions">
  <div class="container">
    <h2>Comprehensive WordPress Solutions</h2>
    <p class="center-text">End-to-end WordPress solutions from a trusted wordpress web design company, including custom themes, plugins, optimization,
       security, and ongoing support</p>
    <div class="grid">
      <div class="card"><h3>Custom WordPress Development</h3><p>Tailored wordpress site development designed to match your brand, functionality needs, and business objectives.</p></div>
      <div class="card"><h3>WordPress Theme Design</h3><p>Visually appealing, responsive wordpress web design services focused on usability, performance, and modern design standards.</p></div>
      <div class="card"><h3>Plugin Development</h3><p>Custom plugins built by wordpress experts to extend functionality and integrate seamlessly with your WordPress site</p></div>
      <div class="card"><h3>eCommerce Solutions</h3><p>Powerful WooCommerce development by a wordpress agency, optimized for conversions, payments, and smooth shopping experiences.</p></div>
      <div class="card"><h3>Performance Optimization</h3><p>Advanced optimization techniques used by a wordpress web development company to ensure fast load times and strong user experience.</p></div>
      <div class="card"><h3>Maintenance & Support</h3><p>Reliable updates, security monitoring, backups, and ongoing support from experienced wordpress development agencies.</p></div>
    </div>
  </div>
</section>

<section class="why" id="why">
  <div class="container">
    <h2>Why Choose WordPress for Your Business?</h2>
    <p>WordPress offers flexibility, scalability, and ease of use, making it ideal for businesses working with a professional wordpress website design company.</p>
    <div class="why-list">
      <ul>
        <li>Easy content management</li>
        <li>SEO-friendly architecture</li>
        <li>Highly customizable platform</li>
        <li>Scalable for business growth</li>
        <li>Large plugin ecosystem</li>
        <li>Strong security capabilities</li>
      </ul>
    </div>
  </div>
</section>

<section class="process" id="process">
  <div class="container">
    <h2>Our Development Process</h2>
    <p>A streamlined, collaborative website development WordPress process ensuring quality, transparency, and on-time delivery.</p>
    <div class="process-grid">
      <div class="step"><span>01</span><h3>Discovery & Planning</h3><p>Our wordpress designer team analyzes your goals, audience, and requirements to create a clear development roadmap.</p></div>
      <div class="step"><span>02</span><h3>Design & Prototyping</h3><p>Wireframes and designs crafted by a wordpress web design company ensure intuitive layouts and branding consistency.</p></div>
      <div class="step"><span>03</span><h3>Development & Testing</h3><p>Expert wordpress web development with clean code, performance testing, and cross-browser compatibility.</p></div>
      <div class="step"><span>04</span><h3>Launch & Support</h3><p>After launch, our wordpress agency provides ongoing updates, optimization, and technical support.</p></div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <h2>Ready to Build Your WordPress Website?</h2>
    <p>Let’s create a high-performing WordPress website with trusted wordpress experts that drives engagement, conversions, and business growth.</p>
    <div class="cta-actions">
      <a class="btn primary">Call</a>
      <a class="btn primary">Email Us</a>
    </div>
  </div>
</section>
<!-- FAQ -->
<section class="section section-alt section-faq" id="faq">
    <div class="container">
        <div class="section-header">
            <h2>WordPress Development FAQ</h2>
            <p>
                Answers to common questions about WordPress development, features, timelines, and ongoing support.
            </p>
        </div>

        <div class="faq-wrap">
            <div class="faq-list">
                <details class="faq-item">
                    <summary>1. What are WordPress development services?</summary>
                    <div class="faq-content">
                        <p>
                            WordPress development services include designing, developing, customizing, and maintaining websites using the WordPress platform. This covers custom themes, plugins, eCommerce development, performance optimization, and security enhancements.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>2. Why should I choose WordPress for my website?</summary>
                    <div class="faq-content">
                        <p>
                            WordPress is a flexible, scalable, and SEO-friendly platform that powers millions of websites worldwide. It is easy to manage, supports custom functionality, and is ideal for business websites, blogs, eCommerce stores, and enterprise solutions.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>3. Do you provide custom WordPress website development?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, professional WordPress development services offer fully custom websites tailored to your brand and business goals. Custom development ensures better performance, unique design, enhanced security, and long-term scalability.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>4. Is WordPress good for SEO?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, WordPress is highly SEO-friendly. With clean code, responsive design, fast loading speed, and SEO plugins, WordPress websites can be optimized effectively to rank higher on search engines like Google.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>5. How long does it take to develop a WordPress website?</summary>
                    <div class="faq-content">
                        <p>
                            The development timeline depends on project complexity. A basic WordPress website may take 1–3 weeks, while custom or eCommerce WordPress websites can take 4–8 weeks or longer.
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>6. Do you offer WordPress maintenance and support services?</summary>
                    <div class="faq-content">
                        <p>
                            Yes, WordPress maintenance services include regular updates, security monitoring, backups, bug fixes, speed optimization, and ongoing technical support to keep your website secure and running smoothly.
                        </p>
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

@endsection