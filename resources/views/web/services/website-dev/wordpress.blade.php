@extends('layouts.cloudtech')

@section('title', 'Di')
@section('meta_title', 'Cl')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/webDevelopment/wordpress/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/webDevelopment/wordpress/js/script.js') }}" defer></script>
@endpush
@section('content')

<section class="hero" id="hero">
  <div class="container hero-inner">
    <h1>Professional WordPress<br>Development in the UK</h1>
    <p class="sub">
      Cloud Technologies Ltd is a trusted WordPress development company in the UK, delivering fully customised,
      SEO-optimised WordPress websites tailored to UK-based businesses.
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
    <p class="center-text">We offer end-to-end WordPress development services designed to help your business thrive online.</p>
    <div class="grid">
      <div class="card"><h3>Custom Theme Development</h3><p>Bespoke themes matched to your brand.</p></div>
      <div class="card"><h3>Plugin Integration</h3><p>Seamless plugin integration for added features.</p></div>
      <div class="card"><h3>SEO Optimization</h3><p>Built‑in SEO best practices.</p></div>
      <div class="card"><h3>Responsive Design</h3><p>Perfect display on all devices.</p></div>
      <div class="card"><h3>Performance Optimization</h3><p>Lightning‑fast website speeds.</p></div>
      <div class="card"><h3>Security Hardening</h3><p>Protect against online threats.</p></div>
    </div>
  </div>
</section>

<section class="why" id="why">
  <div class="container">
    <h2>Why Choose WordPress for Your Business?</h2>
    <div class="why-list">
      <ul>
        <li>User‑friendly content system</li>
        <li>Extensive plugin ecosystem</li>
        <li>Scalable architecture</li>
        <li>Regular updates & maintenance</li>
        <li>Cost‑effective solution</li>
        <li>Strong community support</li>
      </ul>
    </div>
  </div>
</section>

<section class="process" id="process">
  <div class="container">
    <h2>Our Development Process</h2>
    <div class="process-grid">
      <div class="step"><span>01</span><h3>Discovery & Planning</h3></div>
      <div class="step"><span>02</span><h3>Design & Prototyping</h3></div>
      <div class="step"><span>03</span><h3>Development & Testing</h3></div>
      <div class="step"><span>04</span><h3>Launch & Support</h3></div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <h2>Ready to Build Your WordPress Website?</h2>
    <p>Let’s discuss your project and create a powerful solution.</p>
    <div class="cta-actions">
      <a class="btn primary">Call</a>
      <a class="btn primary">Email Us</a>
    </div>
  </div>
</section>

@endsection