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

          $monthlyAmount = $monthly?->amount_text ?? '—';
          $monthlyPeriod = $monthly?->period_text ?? 'per month';

          $oneTimeAmount = $oneTime?->amount_text ?? '—';
          $oneTimePeriod = $oneTime?->period_text ?? 'one-time';
        @endphp

        <article class="price-card {{ $isFeatured }} fx-reveal reveal-up" data-plan="{{ $plan->key }}">
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
               data-monthly="{{ $monthlyAmount }}"
               data-onetime="{{ $oneTimeAmount }}">
            {{ $monthlyAmount }}
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
