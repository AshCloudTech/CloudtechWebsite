@extends('layouts.cloudtech')
<style>
.price-card {
  position: relative;
  overflow: hidden;
}

/* Flag wrapper */
.featured-flag {
  position: absolute;
  top: 0;
  right: 0;
  width: 96px;
  height: 96px;
  z-index: 4;
}

.featured-flag svg {
  width: 100%;
  height: 100%;
  display: block;
}

/* Soft depth shadow */
.featured-flag::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: -10px 10px 22px rgba(74, 79, 47, 0.35);
  pointer-events: none;
}

/* Featured card lift (already added by you) */
.price-card.featured {
  transform: translateY(-6px);
}
</style>

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
      @foreach($plans as $plan)
        @php
          $monthly = $plan->priceByBilling('monthly');
          $oneTime = $plan->priceByBilling('one-time');

          $isFeatured = $plan->is_featured ? 'featured' : '';

          $badgeClass = match($plan->badge_variant){
            'cyan' => 'badgeCyan',
            'navy' => 'badgeNavy',
            default => '',
          };

          $ctaClass = $plan->cta_variant === 'ghost' ? 'btn-ghost' : 'btn-primary';
          $monthlyCurrency = $monthly?->currency ?? '£';
          $monthlyAmount = $monthly?->amount_text ?? '—';
          $monthlyPeriod = $monthly?->period_text ?? 'per month';
          $oneTimeCurrency = $oneTime?->currency ?? '£';
          $oneTimeAmount = $oneTime?->amount_text ?? '—';
          $oneTimePeriod = $oneTime?->period_text ?? 'one-time';
        @endphp

        <article class="price-card {{ $isFeatured }} fx-reveal reveal-up" data-plan="{{ $plan->key }}">
        @if($plan->is_featured)
          <div class="featured-flag">
            <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <!-- Brand gradient: navy → blue -->
                <linearGradient id="ctFlagGrad" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#0f172a"/>   <!-- navy -->
                  <stop offset="100%" stop-color="#2563eb"/> <!-- blue -->
                </linearGradient>
              </defs>

              <!-- corner shape -->
              <polygon points="120,0 40,0 120,80" fill="url(#ctFlagGrad)" />

              <!-- text -->
              <text x="79" y="35"
                    fill="#ffffff"
                    font-size="12"
                    font-weight="700"
                    text-anchor="middle"
                    transform="rotate(45 78 38)">
                Recommended
              </text>
            </svg>
          </div>
        @endif

          <div class="top">
            @if($plan->badge_text)
              <div class="badge {{ $badgeClass }}">{{ $plan->badge_text }}</div>
            @endif

            <h3>{{ $plan->title }}</h3>
            @if($plan->description)
              <p class="desc">{{ $plan->description }}</p>
            @endif
          </div>

        <div class="price"
            data-monthly="{{ $monthlyCurrency }}{{ $monthlyAmount }}"
            data-onetime="{{ $oneTimeCurrency }}{{ $oneTimeAmount }}">
          <span class="currency">{{ $monthlyCurrency }}</span>{{ $monthlyAmount }}
        </div>
          <div class="sub"
               data-monthly="{{ $monthlyPeriod }}"
               data-onetime="{{ $oneTimePeriod }}">
            {{ $monthlyPeriod }}
          </div>

          <ul class="list">
            @foreach($plan->features as $feature)
              <li>{{ $feature->text }}</li>
            @endforeach
          </ul>

          <a href="{{ url($plan->cta_url) }}" class="{{ $ctaClass }}">{{ $plan->cta_text }}</a>
        </article>
      @endforeach
    </div>

    @if($faqs->count())
      <div class="faq fx-reveal reveal-up">
        <h2>FAQ</h2>

        <div class="faq-grid">
          @foreach($faqs as $faq)
            <details class="faq-item">
              <summary>{{ $faq->question }}</summary>
              <p>{{ $faq->answer }}</p>
            </details>
          @endforeach
        </div>
      </div>
    @endif

  </div>
</section>

@endsection
