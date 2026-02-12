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

<section class="prHero" id="pricing-hero">
  <div class="container">
    <div class="prHero__grid">
      <div class="prHero__copy fx-reveal reveal-up">
        <p class="prEyebrow">Pricing</p>
        <h1 class="prTitle">Plans built for performance</h1>
        <p class="prSubtitle">
          Choose a plan based on scope and speed. We focus on clean builds, SEO-friendly structure, and Core Web Vitals.
        </p>

        <div class="prTrust">
          <div class="prTrust__item">
            <span class="prTrust__kpi">Core Web Vitals</span>
            <span class="prTrust__label">Performance-first builds</span>
          </div>
          <div class="prTrust__item">
            <span class="prTrust__kpi">SEO-ready</span>
            <span class="prTrust__label">Structured + scalable</span>
          </div>
          <div class="prTrust__item">
            <span class="prTrust__kpi">Fast delivery</span>
            <span class="prTrust__label">Clear timelines</span>
          </div>
        </div>
      </div>

   
    </div>
  </div>
</section>

<section class="prSection" id="pricing-plans">
  <div class="container">

   <header class="prSectionHead fx-reveal reveal-up">
  <div class="prSectionHead__grid">
    <div class="prSectionHead__copy">
      <h2 class="prH2">Choose your plan</h2>
      <p class="prP">
        Transparent deliverables, clean scope, and clear next steps. Pick a plan — we can tailor it after discovery.
      </p>
    </div>

    <div class="prBilling">
      <div class="prToggle" role="tablist" aria-label="Billing options">
        <button class="toggleBtn active" data-billing="monthly" type="button" role="tab" aria-selected="true">
          Monthly
        </button>
        <button class="toggleBtn" data-billing="one-time" type="button" role="tab" aria-selected="false">
          One-Time
        </button>
      </div>

      <div class="prToggleHint">Switch billing to compare costs.</div>
      <div class="prMiniNote">
  <strong>Tip:</strong> Monthly works best for continuous growth & support. One-time is ideal for fixed builds.
</div>

    </div>
  </div>
</header>


    <div class="prGrid" id="pricingGrid">
      @foreach($plans as $plan)
        @php
          $monthly = $plan->priceByBilling('monthly');
          $oneTime = $plan->priceByBilling('one-time');

          $isFeatured = (bool) $plan->is_featured;

          $badgeClass = match($plan->badge_variant){
            'cyan' => 'prBadge--cyan',
            'navy' => 'prBadge--navy',
            default => 'prBadge--orange',
          };

          $ctaClass = $plan->cta_variant === 'ghost' ? 'prBtn prBtn--ghost' : 'prBtn prBtn--primary';

          $mCur  = $monthly?->currency ?? '£';
          $mAmt  = $monthly?->amount_text ?? '—';
          $mPer  = $monthly?->period_text ?? 'per month';

          $oCur  = $oneTime?->currency ?? '£';
          $oAmt  = $oneTime?->amount_text ?? '—';
          $oPer  = $oneTime?->period_text ?? 'one-time';

          $iconText = strtoupper(substr($plan->title ?? 'P', 0, 1));
        @endphp

        {{-- IMPORTANT:
             Keep "price-card", "price", "sub" classes for toggle JS compatibility --}}
        <article class="price-card prCard {{ $isFeatured ? 'isFeatured' : '' }} fx-reveal reveal-up" data-plan="{{ $plan->key }}">
          @if($isFeatured)
            <div class="prRibbon" aria-label="Recommended plan">Recommended</div>
          @endif

          <div class="prCardTop">
            <div class="prIcon" aria-hidden="true">{{ $iconText }}</div>

            <div class="prTopText">
              @if($plan->badge_text)
                <div class="prBadge {{ $badgeClass }}">{{ $plan->badge_text }}</div>
              @endif

              <h3 class="prPlan">{{ $plan->title }}</h3>

              @if($plan->description)
                <p class="prDesc">{{ $plan->description }}</p>
              @endif
            </div>
          </div>

          <div class="prPriceWrap">
            <div
              class="price prPrice"
              data-monthly="{{ $mCur }}{{ $mAmt }}"
              data-onetime="{{ $oCur }}{{ $oAmt }}"
            >
              {{ $mCur }}{{ $mAmt }}
            </div>

            <div
              class="sub prSub"
              data-monthly="{{ $mPer }}"
              data-onetime="{{ $oPer }}"
            >
              {{ $mPer }}
            </div>
          </div>

          @if($plan->features?->count())
            <ul class="prList">
              @foreach($plan->features->sortBy('sort_order') as $feature)
                <li>{{ $feature->text }}</li>
              @endforeach
            </ul>
          @endif

          <div class="prCardActions">
            <a href="{{ url($plan->cta_url) }}" class="{{ $ctaClass }}">{{ $plan->cta_text }}</a>
            <div class="prMeta">No hidden fees • Clear deliverables</div>
          </div>
        </article>
      @endforeach
    </div>

    @if(isset($faqs) && $faqs->count())
      <section class="prFaq fx-reveal reveal-up" aria-label="Pricing FAQ">
        <header class="prFaqHead">
          <h2 class="prH2">FAQ</h2>
          <p class="prP">Quick answers about scope, timelines, billing, and support.</p>
        </header>

        <div class="prFaqGrid">
          @foreach($faqs as $faq)
            <details class="prFaqItem">
              <summary>
                <span>{{ $faq->question }}</span>
                <span class="prFaqChevron" aria-hidden="true">+</span>
              </summary>
              <div class="prFaqBody">
                <p>{{ $faq->answer }}</p>
              </div>
            </details>
          @endforeach
        </div>
      </section>
    @endif

  </div>
</section>

@endsection
