@extends('layouts.cloudtech')

@section('title', 'Pricing | Digital Marketing, SEO & Web Development UK')
@section('meta_title', 'Pricing | Digital Marketing, SEO & Web Development UK')
@section('meta_description', 'Explore our pricing for SEO, web development and digital marketing services. Affordable plans designed to grow your traffic, leads and sales UK.')
@section('meta_keywords', 'pricing, SEO pricing, web development pricing, digital marketing pricing, UK, affordable plans, business growth')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/pricing/css/style.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/pricing/js/script.js') }}" defer></script>    
@endpush

@section('content')

<section class="hero" id="hero">
  <div class="wrap">
    <div class="crumbs"><a href="{{ route('home') }}">Home</a><span>›</span>Pricing</div>

    <div class="hero-grid">
      <div>
        <h1 class="headline reveal">Complete<span class="gold">Pricing Summary</span></h1>
        <p class="dek reveal">All services at a glance. Full tier breakdowns with decision guides are on each dedicated service page.</p>
      </div>

      <aside class="stat-card reveal">
        <div class="grid4">
          <div class="cell"><div class="num" data-count="199" data-prefix="£">0</div><div class="lbl">LOCAL SEO FROM</div></div>
          <div class="cell"><div class="num" data-count="750" data-prefix="£">0</div><div class="lbl">WEBSITES FROM</div></div>
          <div class="cell"><div class="num" data-static="No">No</div><div class="lbl">LONG CONTRACTS</div></div>
          <div class="cell"><div class="num" data-static="Free">Free</div><div class="lbl">INITIAL AUDITS</div></div>
        </div>
        <div class="actions">
          <a class="btn btn-accent" href="{{ route('contact.us') }}#enquiry">Let's Discuss</a>
         <a class="btn btn-outline" href="tel:+447427547394">📞 07427547394</a>
        </div>
        <div class="fine">🔒 Free consultation · No obligation · Reply within 4 hours</div>
      </aside>
    </div>
  </div>
</section>

@if(isset($seoServices) && $seoServices->isNotEmpty())
<section class="block">
  <div class="wrap">
    <div class="eyebrow">SEO Services</div>
    <h2>Search That <span class="gold effect-glow">Compounds</span></h2>

    <div class="table-wrap">
      <table class="pricing">
        <thead>
          <tr><th>SERVICE</th><th>STARTING PRICE</th><th>MODEL</th><th>PAGE</th></tr>
        </thead>
        <tbody>
          @foreach($seoServices as $item)
            <tr @if($item->noindex) rel="noindex" @endif>
              <td class="service">{{ $item->service }}</td>
              <td class="price">
                @if(!empty($item->price))
                  {{ $item->prefix }}<span data-count="{{ str_replace(',', '', (string)$item->price) }}">0</span><span class="per">{{ $item->per }}</span>
                @else
                  {{ $item->prefix }}<span class="per">{{ $item->per ?: '/mo' }}</span>
                @endif
              </td>
              <td class="model">{{ $item->model }}</td>
              <td class="page"><a href="{{ $item->resolved_page_url }}">View →</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endif

@if(isset($webServices) && $webServices->isNotEmpty())
<section class="block">
  <div class="wrap">
    <div class="eyebrow">Website Development — UK (£)</div>
    <h2>Every Platform,<span class="gold"> Every Budget.</span></h2>

    <div class="table-wrap">
      <table class="pricing">
        <thead>
          <tr><th>SERVICE</th><th>STARTING PRICE</th><th>MODEL</th><th>PAGE</th></tr>
        </thead>
        <tbody>
          @foreach($webServices as $item)
            <tr @if($item->noindex) rel="noindex" @endif>
              <td class="service">{{ $item->service }}</td>
              <td class="price">
                @if(!empty($item->price))
                  {{ $item->prefix }}<span data-count="{{ str_replace(',', '', (string)$item->price) }}">0</span>
                @else
                  {{ $item->prefix }}
                @endif
              </td>
              <td class="model">{{ $item->model }}</td>
              <td class="page"><a href="{{ $item->resolved_page_url }}">View →</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endif

{{-- @if(isset($usaPlans) && $usaPlans->isNotEmpty())
<section class="block">
  <div class="wrap">
    <div class="eyebrow">USA Market — USD ($)</div>
    <h2>UK-Proven.<span class="gold">USD Pricing.</span></h2>

    <div class="plans">
      @foreach($usaPlans as $plan)
        @php
            $isPopular = (bool)$plan->is_featured;
            $btnClass = $plan->btn_class ?: ($isPopular ? 'plan-btn btn-accent' : 'plan-btn btn-outline');
            $ctaUrl = $plan->cta_url ?: (route('contact.us') . '#enquiry');
            $ctaText = $plan->cta_text ?: ($plan->title === 'Authority' ? "Let's Discuss" : 'Start Your Project');
        @endphp
        <div class="plan {{ $isPopular ? 'popular' : '' }}">
          @if($isPopular || $plan->badge_text)
            <span class="badge">{{ $plan->badge_text ?: 'Most Popular' }}</span>
          @endif
          <h3>{{ $plan->title }}</h3>
          @if(!empty($plan->ideal))
            <div class="ideal">{{ $plan->ideal }}</div>
          @endif
          <div class="price">
            <span class="sym">{{ $plan->currency_symbol ?: '$' }}</span>
            <span class="num" data-count="{{ str_replace(',', '', (string)$plan->price_amount) }}">0</span>
            <span class="per">{{ $plan->price_period ?: '/mo' }}</span>
          </div>
          <div class="desc">{{ $plan->description }}</div>
          @if($plan->features->isNotEmpty())
            <ul>
              @foreach($plan->features as $feature)
                <li>{{ $feature->text }}</li>
              @endforeach
            </ul>
          @endif
          <div class="plan-footer">
            <a class="btn {{ $btnClass }}" href="{{ $ctaUrl }}">{{ $ctaText }}</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endif --}}

<section class="cta-section">
  <div class="wrap">
    <div class="cta-banner">
      <div>
        <h3>Not Sure Which Service <em>You Need?</em></h3>
        <p>Get a free audit and an honest recommendation — no pressure, no pitch.</p>
      </div>
      <div class="right">
        <a class="btn btn-dark" href="{{ route('contact.us') }}">Get Free Advice</a>
        <a class="phone" href="tel:+447427547394">📞 07427 547394</a>
      </div>
    </div>
  </div>
</section>

@endsection
