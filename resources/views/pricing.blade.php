@extends('layouts.cloudtech')

@section('title', 'SEO & Digital Marketing Pricing UK | Cloud Technologies')
@section('meta_title', 'SEO & Digital Marketing Pricing UK | Cloud Technologies')
@section('meta_description', 'Explore pricing for SEO, digital marketing and web development services. Choose solutions designed around your business goals, visibility and growth.')
@section('meta_keywords', 'pricing, SEO pricing, web development pricing, digital marketing pricing, UK, affordable plans, business growth')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/pricing/css/style.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/pricing/js/script.js') }}" defer></script>    
@endpush

@section('content')

{{-- <section class="hero" id="hero">
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
         <a class="btn btn-outline" href="tel:07835761525">📞 07835761525</a>
        </div>
        <div class="fine">🔒 Free consultation · No obligation · Reply within 4 hours</div>
      </aside>
    </div>
  </div>
</section> --}}

<section class="block seo-packages-section">
  <div class="wrap">
    <div class="eyebrow">SEO Pricing</div>
    <h2>Choose the Right <span class="gold effect-glow">SEO Package.</span></h2>
    <p class="pricing-intro">Clear, practical SEO packages designed for local businesses, growing companies and ambitious national or international brands.</p>

    <div class="plans seo-pricing-grid">
      {{-- SEO Essentials --}}
      <article class="plan seo-plan">
        <div class="plan-topline">SEO Essentials</div>
        <h3>SEO Essentials</h3>
        <div class="ideal"><strong>Best for Small Businesses &amp; Local Companies</strong></div>

        <div class="price">
          <span class="price-label">From</span>
          <span class="sym">£</span>
          <span class="num">109</span>
          <span class="per">/mo</span>
        </div>

        <p class="desc">A practical SEO foundation designed to improve your visibility, rankings and local search presence.</p>

        <div class="feature-group">
          <h4>Perfect for:</h4>
          <ul>
            <li>Local service businesses</li>
            <li>Startups and new businesses</li>
            <li>Businesses building their online presence</li>
            <li>Foundational SEO and local visibility</li>
            <li>Businesses with smaller SEO budgets</li>
          </ul>
        </div>

        <div class="feature-group">
          <h4>Includes:</h4>
          <ul>
            <li>Technical SEO checks</li>
            <li>Keyword research</li>
            <li>On-page SEO optimization</li>
            <li>Local SEO optimization</li>
            <li>Google Business Profile support</li>
            <li>Monthly SEO reporting</li>
          </ul>
        </div>

        <div class="plan-footer">
          <a class="btn plan-btn btn-outline" href="{{ route('contact.us') }}#enquiry">Get Started <span aria-hidden="true">→</span></a>
        </div>
      </article>

      {{-- SEO Growth --}}
      <article class="plan seo-plan popular">
        <span class="badge">Most Popular</span>
        <div class="plan-topline">SEO Growth</div>
        <h3>SEO Growth</h3>
        <div class="ideal"><strong>Best for Growing Companies &amp; Competitive Niches</strong></div>

        <div class="price">
          <span class="price-label">From</span>
          <span class="sym">£</span>
          <span class="num">199</span>
          <span class="per">/mo</span>
        </div>

        <p class="desc">A growth-focused SEO package for businesses looking to increase organic traffic, enquiries and search rankings.</p>

        <div class="feature-group">
          <h4>Perfect for:</h4>
          <ul>
            <li>Businesses targeting more traffic and leads</li>
            <li>Competitive local markets</li>
            <li>Multi-service businesses</li>
            <li>Businesses expanding their online presence</li>
            <li>Companies ready for consistent SEO growth</li>
          </ul>
        </div>

        <div class="feature-group">
          <h4>Includes:</h4>
          <ul>
            <li>Everything in SEO Essentials</li>
            <li>Advanced keyword targeting</li>
            <li>Content creation</li>
            <li>Competitor SEO analysis</li>
            <li>Local citation building</li>
            <li>Link building</li>
            <li>Technical SEO improvements</li>
            <li>Monthly strategy review</li>
          </ul>
        </div>

        <div class="plan-footer">
          <a class="btn plan-btn btn-accent" href="{{ route('contact.us') }}#enquiry">Get Started <span aria-hidden="true">→</span></a>
        </div>
      </article>

      {{-- SEO Scale --}}
      <article class="plan seo-plan">
        <div class="plan-topline">SEO Scale</div>
        <h3>SEO Scale</h3>
        <div class="ideal"><strong>Best for National, International &amp; High-Growth Brands</strong></div>

        <div class="price price-custom">
          <span class="price-label">Custom Pricing</span>
          <span class="sym">£</span>
          <span class="num">249 – 749+</span>
          <span class="per">/mo</span>
        </div>

        <p class="desc">Advanced SEO for national, international and multi-location businesses.</p>

        <div class="feature-group">
          <h4>Perfect for:</h4>
          <ul>
            <li>SaaS companies</li>
            <li>E-commerce brands</li>
            <li>National service providers</li>
            <li>Multi-location businesses</li>
            <li>High-ticket industries</li>
            <li>Businesses targeting international markets</li>
          </ul>
        </div>

        <div class="feature-group">
          <h4>Includes:</h4>
          <ul>
            <li>Advanced technical SEO</li>
            <li>National &amp; international SEO</li>
            <li>Multi-location SEO</li>
            <li>High-volume content strategy</li>
            <li>Advanced competitor research</li>
            <li>Authority and backlink development</li>
            <li>Conversion-focused SEO</li>
            <li>Ongoing SEO strategy and support</li>
          </ul>
        </div>

        <div class="plan-footer">
          <a class="btn plan-btn btn-outline" href="{{ route('contact.us') }}#enquiry">Talk to Us <span aria-hidden="true">→</span></a>
        </div>
      </article>
    </div>
  </div>
</section>

{{-- @if(isset($webServices) && $webServices->isNotEmpty())
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
@endif --}}

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
        <a class="phone" href="tel:07835761525">📞 07835 761525</a>
      </div>
    </div>
  </div>
</section>

@endsection
