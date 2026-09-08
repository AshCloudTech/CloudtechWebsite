@extends('layouts.cloudtech')

@section('title', 'Pricing | Digital Marketing, SEO & Web Development UK')
@section('meta_title', 'Pricing | Digital Marketing, SEO & Web Development UK')
@section('meta_description', 'Explore our pricing for SEO, web development and digital marketing services. Affordable plans designed to grow your traffic, leads and sales UK.')
@section('meta_keywords', 'pricing, SEO pricing, web development pricing, digital marketing pricing, UK, affordable plans, business growth')

@php
    $seoPricing = [
        [
            'service' => 'Local SEO',
            'price' => '199',
            'prefix' => '£',
            'per' => '/mo',
            'model' => '£199 main area + £50/town',
            'page' => route('services.seo.local-seo'),
            'noindex' => false
        ],
        [
            'service' => 'National SEO',
            'price' => '799',
            'prefix' => '£',
            'per' => '/mo',
            'model' => 'Retainer · 3 tiers',
            'page' => route('services.seo.national-seo'),
            'noindex' => false
        ],
        [
            'service' => 'Google Maps Optimisation',
            'price' => '199',
            'prefix' => '£',
            'per' => '/mo',
            'model' => '£199 primary + £50/location',
            'page' => route('services.digi-marketing.google-my-business-optimisation'),
            'noindex' => false
        ],
    ];

    $webPricing = [
        [
            'service' => 'Website Design & Development',
            'price' => '250',
            'prefix' => '£',
            'model' => 'Project-based',
            'page' => route('services.web.development'),
            'noindex' => false
        ],
        [
            'service' => 'WordPress Website Design',
            'price' => '250',
            'prefix' => '£',
            'model' => 'One-off · 4 tiers',
            'page' => route('services.website-development.wordpress'),
            'noindex' => false
        ],
        [
            'service' => 'Shopify Website Design',
            'price' => '750',
            'prefix' => '£',
            'model' => 'Build + optional retainer',
            'page' => route('services.website-development.shopify'),
            'noindex' => false
        ],
        [
            'service' => 'WooCommerce Development',
            'price' => '1000',
            'prefix' => '£',
            'model' => 'One-off · 3 tiers',
            'page' => route('services.website-development.woocommerce'),
            'noindex' => false
        ],
        [
            'service' => 'Wix Website Design',
            'price' => '250',
            'prefix' => '£',
            'model' => 'One-off · 3 tiers',
            'page' => route('services.website-development.wix'),
            'noindex' => false
        ],
        [
            'service' => 'Squarespace Website Design',
            'price' => '300',
            'prefix' => '£',
            'model' => 'One-off · 3 tiers',
            'page' => route('services.website-development.squarespace'),
            'noindex' => false
        ],
        [
            'service' => 'GoDaddy Website Design',
            'price' => '250',
            'prefix' => '£',
            'model' => 'Build / Redesign / Migration',
            'page' => route('services.website-development.godaddy'),
            'noindex' => false
        ],
        [
            'service' => 'Software Development',
            'price' => '2000',
            'prefix' => '£',
            'model' => 'Project-based',
            'page' => route('services.website-development.custom-php'),
            'noindex' => false
        ],
        [
            'service' => 'Ecommerce Website Design',
            'price' => '750',
            'prefix' => '£',
            'model' => 'Project-based',
            'page' => route('services.web.development'),
            'noindex' => false
        ],
    ];

    $usaPlans = [
        [
            'name' => 'Starter',
            'ideal' => 'Ideal for: Local US businesses',
            'price' => '499',
            'symbol' => '$',
            'per' => '/mo',
            'desc' => 'For local US businesses beginning their SEO journey.',
            'popular' => false,
            'features' => [
                'Google Business Profile setup',
                'Local SEO — 5 keywords',
                'On-page audit & fixes',
                'Citation building',
                'Monthly report'
            ],
            'btn_class' => 'plan-btn btn-outline',
            'btn_text' => 'Start Your Project',
            'url' => route('contact.us') . '#enquiry'
        ],
        [
            'name' => 'Growth',
            'ideal' => 'Ideal for: Scaling US businesses',
            'price' => '999',
            'symbol' => '$',
            'per' => '/mo',
            'desc' => 'For US businesses ready to dominate local and regional search.',
            'popular' => true,
            'features' => [
                'Everything in Starter',
                'Local + national SEO — 20 keywords',
                'Maps Pack optimisation',
                '2 content pages/month',
                'Link building & review strategy'
            ],
            'btn_class' => 'plan-btn btn-accent',
            'btn_text' => 'Start Your Project',
            'url' => route('contact.us') . '#enquiry'
        ],
        [
            'name' => 'Authority',
            'ideal' => 'Ideal for: Ambitious US brands',
            'price' => '1999',
            'symbol' => '$',
            'per' => '/mo',
            'desc' => 'For ambitious US brands targeting national visibility.',
            'popular' => false,
            'features' => [
                'Everything in Growth',
                'Unlimited keywords',
                'Website design included',
                '6 content pages/month',
                'Dedicated account manager'
            ],
            'btn_class' => 'plan-btn btn-outline',
            'btn_text' => "Let's Discuss",
            'url' => route('contact.us') . '#enquiry'
        ],
    ];
@endphp
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
          <a class="btn btn-outline" href="tel:7427547394">📞 7427547394</a>
        </div>
        <div class="fine">🔒 Free consultation · No obligation · Reply within 4 hours</div>
      </aside>
    </div>
  </div>
</section>

<section class="block">
  <div class="wrap">
    <div class="eyebrow">SEO Services</div>
    <h2>Search That<span class="gold">Compounds</span></h2>

    <div class="table-wrap">
      <table class="pricing">
        <thead>
          <tr><th>SERVICE</th><th>STARTING PRICE</th><th>MODEL</th><th>PAGE</th></tr>
        </thead>
        <tbody>
          @foreach($seoPricing as $item)
            <tr @if($item['noindex']) rel="noindex" @endif>
              <td class="service">{{ $item['service'] }}</td>
              <td class="price">
                @if(!empty($item['price']))
                  {{ $item['prefix'] ?? '' }}<span data-count="{{ str_replace(',', '', $item['price']) }}">0</span><span class="per">{{ $item['per'] ?? '' }}</span>
                @else
                  {{ $item['prefix'] ?? '£' }}<span class="per">{{ $item['per'] ?? '/mo' }}</span>
                @endif
              </td>
              <td class="model">{{ $item['model'] }}</td>
              <td class="page"><a href="{{ $item['page'] }}">View →</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="block">
  <div class="wrap">
    <div class="eyebrow">Website Development — UK (£)</div>
    <h2>Every Platform.<span class="gold">Every Budget.</span></h2>

    <div class="table-wrap">
      <table class="pricing">
        <thead>
          <tr><th>SERVICE</th><th>STARTING PRICE</th><th>MODEL</th><th>PAGE</th></tr>
        </thead>
        <tbody>
          @foreach($webPricing as $item)
            <tr @if($item['noindex']) rel="noindex" @endif>
              <td class="service">{{ $item['service'] }}</td>
              <td class="price">
                @if(!empty($item['price']))
                  {{ $item['prefix'] ?? '' }}<span data-count="{{ str_replace(',', '', $item['price']) }}">0</span>
                @else
                  {{ $item['prefix'] ?? '£' }}
                @endif
              </td>
              <td class="model">{{ $item['model'] }}</td>
              <td class="page"><a href="{{ $item['page'] }}">View →</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="block">
  <div class="wrap">
    <div class="eyebrow">USA Market — USD ($)</div>
    <h2>UK-Proven.<span class="gold">USD Pricing.</span></h2>

    <div class="plans">
      @foreach($usaPlans as $plan)
        <div class="plan {{ $plan['popular'] ? 'popular' : '' }}">
          @if($plan['popular'])
            <span class="badge">Most Popular</span>
          @endif
          <h3>{{ $plan['name'] }}</h3>
          <div class="ideal">{{ $plan['ideal'] }}</div>
          <div class="price">
            <span class="sym">{{ $plan['symbol'] }}</span>
            <span class="num" data-count="{{ str_replace(',', '', $plan['price']) }}">0</span>
            <span class="per">{{ $plan['per'] }}</span>
          </div>
          <div class="desc">{{ $plan['desc'] }}</div>
          <ul>
            @foreach($plan['features'] as $feature)
              <li>{{ $feature }}</li>
            @endforeach
          </ul>
          <div class="plan-footer">
            <a class="btn {{ $plan['btn_class'] }}" href="{{ $plan['url'] }}">{{ $plan['btn_text'] }}</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="wrap">
    <div class="cta-banner">
      <div>
        <h3>Not Sure Which Service <em>You Need?</em></h3>
        <p>Get a free audit and an honest recommendation — no pressure, no pitch.</p>
      </div>
      <div class="right">
        <a class="btn btn-dark" href="{{ route('contact.us') }}">Get Free Advice</a>
        <a class="phone" href="tel:7427547394">📞 7427547394</a>
      </div>
    </div>
  </div>
</section>

@endsection

