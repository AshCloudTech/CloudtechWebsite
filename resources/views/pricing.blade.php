@extends('layouts.cloudtech')

@section('title', 'Pricing')
@section('meta_title', 'Cloud Technologies Ltd Pricing')
@section('meta_description', 'Transparent pricing for websites, SEO, and ongoing support. Choose a plan that fits your business goals.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/pricing/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@push('scripts')
  <script src="{{ asset('assets/pricing/js/script.js') }}" defer></script>
@endpush

@section('content')

<section class="hero pricing-hero" id="pricing-hero">
  <div class="container">
    <div class="hero-head fx-reveal reveal-up">
      <p class="eyebrow">Pricing</p>
      <h1>Plans built for performance</h1>
      <p class="subtitle">
        Choose a plan based on scope and speed. We focus on clean builds, SEO-friendly structure, and Core Web Vitals.
      </p>
    </div>

    <div class="toggle-row fx-reveal reveal-up">
      <div class="toggle">
        <button class="toggleBtn active" data-billing="monthly" type="button">Monthly</button>
        <button class="toggleBtn" data-billing="one-time" type="button">One-Time</button>
      </div>
      <div class="toggleHint">Switch billing to see the best fit.</div>
    </div>
  </div>
</section>

<section class="section pricing-section">
  <div class="container">

    <div class="pricing-grid">

      <article class="price-card fx-reveal reveal-up" data-plan="starter">
        <div class="top">
          <div class="badge">Starter</div>
          <h3>Launch Website</h3>
          <p class="desc">Best for small businesses that need a fast, clean website.</p>
        </div>

        <div class="price" data-monthly="£499" data-onetime="£1,499">£499</div>
        <div class="sub" data-monthly="per month" data-onetime="one-time">per month</div>

        <ul class="list">
          <li>Up to 5 pages</li>
          <li>Mobile responsive</li>
          <li>Basic on-page SEO</li>
          <li>Contact form integration</li>
          <li>Performance best practices</li>
        </ul>

        <a href="{{ url('/contact') }}" class="btn-primary">Get Started →</a>
      </article>

      <article class="price-card featured fx-reveal reveal-up" data-plan="growth">
        <div class="top">
          <div class="badge badgeCyan">Most Popular</div>
          <h3>Growth</h3>
          <p class="desc">For businesses ready to scale with SEO and strong UX.</p>
        </div>

        <div class="price" data-monthly="£899" data-onetime="£2,999">£899</div>
        <div class="sub" data-monthly="per month" data-onetime="one-time">per month</div>

        <ul class="list">
          <li>Up to 12 pages</li>
          <li>Technical SEO audit fixes</li>
          <li>Speed optimisation</li>
          <li>Conversion-focused sections</li>
          <li>Analytics + event tracking</li>
        </ul>

        <a href="{{ url('/contact') }}" class="btn-primary">Talk to Sales →</a>
      </article>

      <article class="price-card fx-reveal reveal-up" data-plan="enterprise">
        <div class="top">
          <div class="badge badgeNavy">Custom</div>
          <h3>Enterprise</h3>
          <p class="desc">Complex projects, integrations, multi-language, or custom builds.</p>
        </div>

        <div class="price" data-monthly="Let’s talk" data-onetime="Let’s talk">Let’s talk</div>
        <div class="sub" data-monthly="custom quote" data-onetime="custom quote">custom quote</div>

        <ul class="list">
          <li>Custom scope & architecture</li>
          <li>Integrations (CRM / payments)</li>
          <li>Advanced SEO & content</li>
          <li>Security hardening</li>
          <li>Ongoing support SLA</li>
        </ul>

        <a href="{{ url('/contact') }}" class="btn-ghost">Request Quote →</a>
      </article>

    </div>

    <div class="faq fx-reveal reveal-up">
      <h2>FAQ</h2>

      <div class="faq-grid">
        <details class="faq-item">
          <summary>Do you provide fixed quotes?</summary>
          <p>Yes, for one-time builds we provide a fixed scope quote. For ongoing work, we recommend monthly plans.</p>
        </details>

        <details class="faq-item">
          <summary>Does pricing include hosting?</summary>
          <p>Hosting is separate. We can recommend the right Hostinger / VPS setup based on your traffic and stack.</p>
        </details>

        <details class="faq-item">
          <summary>Can we start small and upgrade later?</summary>
          <p>Yes. Start with Starter and upgrade to Growth once you need more pages, SEO, or integrations.</p>
        </details>

        <details class="faq-item">
          <summary>Do you optimise for performance?</summary>
          <p>Yes — we follow Core Web Vitals best practices and avoid heavy animations (transform/opacity only).</p>
        </details>
      </div>
    </div>

  </div>
</section>

@endsection
