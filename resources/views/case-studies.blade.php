@extends('layouts.cloudtech')

@section('title', 'Case Studies | Cloud Technologies')
@section('meta_title', 'Case Studies | Cloud Technologies')
@section('meta_description', 'Real clients. Real rankings. Verifiable SEO and Google Business Profile results across cities and industries.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/case-studies/css/style.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/case-studies/js/script.js') }}" defer></script>    
@endpush

@section('content')

<section class="hero" id="hero">
  <div class="wrap">
    <div class="crumbs"><a href="{{ url('/') }}">Home</a><span>›</span>Case Studies</div>

    <div class="hero-grid">
      <div>
        <h1 class="headline reveal">Real Clients.<span class="gold">Real Rankings.</span></h1>
        <p class="dek reveal">Verifiable results across cities and industries — matched to the businesses we serve.</p>
      </div>

      <aside class="stat-card reveal">
        <div class="grid4">
          <div><div class="num" data-count="200" data-suffix="+">0</div><div class="lbl">Clients Served</div></div>
          <div><div class="num" data-count="50" data-suffix="+">0</div><div class="lbl">UK Cities Ranked</div></div>
          <div><div class="num" data-count="100" data-suffix="+">0</div><div class="lbl">Websites Delivered</div></div>
          <div><div class="num" data-count="4.8" data-suffix="★">0</div><div class="lbl">Google Rating</div></div>
        </div>
        <div class="actions">
          <a class="btn btn-accent" href="{{ url('/#contact') }}">Let's Discuss</a>
        <div class="contact-section">
          <a class="btn btn-outline" href="tel:+447427547394">📞 07427 547394</a>
      </div>
        </div>
        <div class="fine">🔒 Free consultation · No obligation · Reply within 4 hours</div>
      </aside>
    </div>

    @if(!empty($industries) && count($industries) > 0)
      <div class="industries-heading">{{ count($caseStudies) }} CASE STUDIES ACROSS THESE INDUSTRIES</div>
      <div class="tag-grid">
        @foreach($industries as $ind)
          <span class="tag">{{ $ind }}</span>
        @endforeach
      </div>
    @endif
    <div class="rating-line"><span class="stars">★★★★★</span> 4.8 average across 200+ clients</div>
  </div>
</section>

<section class="cards-section">
  <div class="wrap">
    <div class="cards-grid">
      @foreach($caseStudies as $case)
        @php
            $cardImg = $case->card_image ?: $case->hero_image;
            $cardStats = $case->stats->isNotEmpty() ? $case->stats : $case->kpis;
        @endphp
        <article class="case-card">
          <div class="photo">
            @if(!empty($cardImg))
              <img src="{{ asset($cardImg) }}" alt="{{ $case->title }}" loading="lazy">
            @endif
            @if(!empty($case->industry))
              <span class="badge">{{ $case->industry }}</span>
            @endif
          </div>
          <div class="body">
            
            {{-- Meta Header (One line, colored) --}}
            <div class="meta" title="{{ $case->location }} • {{ $case->industry }}">
              <span class="icon-pin">📍</span> 
              <span class="loc-text">{{ strtoupper($case->location ?: 'UK') }}</span> 
              @if(!empty($case->industry))
                <span class="separator">•</span> 
                <span class="ind-text">{{ strtoupper($case->industry) }}</span>
              @endif
            </div>

            <h3>{{ $case->title }}</h3>
            <p class="desc">{{ $case->excerpt ?: $case->subtitle }}</p>
            <div class="stats3">
              @foreach($cardStats->take(3) as $stat)
                @php
                    $val = (string)($stat->formatted ?? $stat->value);
                    $numericClean = preg_replace('/[^0-9]/', '', (string)$stat->value);
                    $isPureNumber = $numericClean !== '' && preg_match('/^[0-9,]+$/', trim((string)$stat->value));
                @endphp
                <div>
                  @if($isPureNumber)
                    <div class="num" data-count="{{ str_replace(',', '', (string)$stat->value) }}">0</div>
                  @else
                    <div class="num">{{ $val }}</div>
                  @endif
                  <div class="lbl">{{ $stat->label }}</div>
                </div>
              @endforeach
            </div>
            
            {{-- Action Link --}}
            <a class="view" href="{{ route('case.studies.detail', $case->slug) }}">
                View case study <span>→</span>
            </a>
            
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="wrap">
    <div class="cta-banner">
      <div class="left">
        <div class="icon-circle">🔄</div>
        <h3>Ready to Achieve <em>Results Like These?</em></h3>
        <div class="points">
          <span>🌐 Proven SEO Strategies</span>
          <span>🏢 Higher Rankings</span>
        </div>
      </div>
      <a class="btn btn-dark" href="{{ url('/contact-us') }}">✆ Book a Free Consultation Today!</a>
    </div>
  </div>
</section>

@endsection
