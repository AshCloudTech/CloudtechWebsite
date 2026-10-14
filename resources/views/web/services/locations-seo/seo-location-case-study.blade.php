@extends('layouts.cloudtech')

@section('title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_title')
    {!! html_entity_decode($page['meta_title']) !!}
@endsection
@section('meta_description', $page['meta_description'])
@section('meta_keywords', 'local SEO, Google Business Profile, SEO agency, search engine optimisation, map pack rankings')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/seo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/services/seo/css/seo-location-case-study.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/services/seo/js/script.js') }}" defer></script>
    <script src="{{ asset('assets/services/seo/js/seo-location-case-study.js') }}" defer></script>
@endpush

@section('content')

@php
    $hero = $content['hero'] ?? [];
    $caseStudies = $content['case_studies'] ?? [];
    $services = $content['services'] ?? [];
    $process = $content['process'] ?? [];
    $comparison = $content['comparison'] ?? [];
    $focus = $content['focus'] ?? [];
    $channels = $content['channels'] ?? [];
    $pricing = $content['pricing'] ?? [];
    $reviews = $content['reviews'] ?? [];
    $faq = $content['faq'] ?? [];
    $finalCta = $content['final_cta'] ?? [];
@endphp

{{-- ============ HERO ============ --}}
<section class="hero seo-hero seo-cs-hero" id="hero">
    <div class="container hero-inner">
        @if(!empty($hero['eyebrow']))
            <p class="hero-trust">{{ $hero['eyebrow'] }}</p>
        @endif
        <h1>{{ $hero['title'] ?? 'Local SEO to attract more customers' }}</h1>
        <p class="hero-subtitle">{{ $hero['subtitle'] ?? '' }}</p>
        <div class="hero-actions">
            <a href="#pricing" class="btn btn-primary jsGetAudit" data-audit-type="seo-hero">{{ $hero['cta_primary'] ?? 'Get my free SEO audit' }}</a>
            <a href="#pricing" class="btn btn-ghost">{{ $hero['cta_secondary'] ?? 'View pricing' }}</a>
        
                    <a href="tel:07835761525" class="btn btn-primary btn-cta-added">Call Us</a>
                </div>
    </div>
</section>

{{-- ============ CASE STUDIES ============ --}}
@if(!empty($caseStudies['items']))
<section class="section seo-cs-case-studies" id="case-studies">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $caseStudies['title'] ?? 'Case studies' }}</h2>
            @if(!empty($caseStudies['subtitle']))
                <p>{{ $caseStudies['subtitle'] }}</p>
            @endif
        </div>

        <div class="grid grid-3 cs-case-grid">
            @foreach($caseStudies['items'] as $i => $case)
                <article class="card cs-case-card fx-reveal fx-delay-{{ ($i % 3) + 1 }}">
                    @if(!empty($case['image']))
                        <div class="cs-case-media">
                            <img src="{{ asset($case['image']) }}" alt="{{ $case['label'] }}" loading="lazy" width="400" height="220">
                            <span class="cs-case-period cs-case-period-overlay">{{ $case['period'] }}</span>
                        </div>
                    @endif
                    <div class="cs-case-body">
                        <p class="cs-case-label">{{ $case['label'] }}</p>
                        @if(empty($case['image']))
                            <p class="cs-case-period">{{ $case['period'] }}</p>
                        @endif

                        <p class="cs-case-headline">
                            <span
                                class="js-counter"
                                data-target="{{ preg_replace('/[^0-9]/', '', $case['headline_value']) }}"
                                data-prefix="{{ str_starts_with($case['headline_value'], '+') ? '+' : '' }}"
                                data-suffix="{{ str_ends_with($case['headline_value'], '%') ? '%' : '' }}"
                            >0</span>
                        </p>
                        <p class="cs-case-headline-label">{{ $case['headline_label'] }}</p>

                        @if(!empty($case['stats']))
                            <ul class="cs-case-stats">
                                @foreach($case['stats'] as $stat)
                                    <li>{{ $stat }}</li>
                                @endforeach
                            </ul>
                        @endif

                        @if(!empty($case['footnote']))
                            <p class="cs-case-footnote">{{ $case['footnote'] }}</p>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ============ WHAT WE DO ============ --}}
@if(!empty($services['items']))
<section class="section section-alt" id="services">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $services['title'] ?? 'What we do' }}</h2>
            @if(!empty($services['subtitle']))
                <p>{{ $services['subtitle'] }}</p>
            @endif
        </div>

        <div class="grid grid-3 cs-services-grid">
            @foreach($services['items'] as $i => $item)
                <article class="card cs-service-card fx-reveal fx-delay-{{ ($i % 3) + 1 }}">
                    @if(!empty($item['image']))
                        <div class="cs-service-media">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" width="400" height="180">
                            <span class="cs-service-number">{{ $item['number'] }}</span>
                        </div>
                    @else
                        <p class="cs-service-number">{{ $item['number'] }}</p>
                    @endif
                    <div class="cs-service-body">
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ============ HOW IT WORKS ============ --}}
@if(!empty($process['steps']))
<section class="section" id="process">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $process['title'] ?? 'How it works' }}</h2>
            @if(!empty($process['subtitle']))
                <p>{{ $process['subtitle'] }}</p>
            @endif
        </div>

        <div class="cs-timeline">
            @foreach($process['steps'] as $i => $step)
                <div class="cs-timeline-step fx-reveal fx-delay-{{ ($i % 4) + 1 }}">
                    <span class="cs-timeline-tag">{{ $step['tag'] }}</span>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{{ $step['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ============ THE DIFFERENCE (COMPARISON TABLE) ============ --}}
@if(!empty($comparison['rows']))
<section class="section section-alt" id="difference">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $comparison['title'] ?? 'The difference' }}</h2>
            @if(!empty($comparison['subtitle']))
                <p>{{ $comparison['subtitle'] }}</p>
            @endif
        </div>

        <div class="cs-compare-wrap fx-reveal">
            <table class="cs-compare-table">
                <thead>
                    <tr>
                        <th></th>
                        <th class="cs-compare-us">{{ $comparison['column_us'] ?? 'Cloud Technologies' }}</th>
                        <th class="cs-compare-them">{{ $comparison['column_them'] ?? 'Typical Agency' }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comparison['rows'] as $row)
                        <tr>
                            <td class="cs-compare-label">{{ $row['label'] }}</td>
                            <td class="cs-compare-us">{{ $row['us'] }}</td>
                            <td class="cs-compare-them">{{ $row['them'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endif

{{-- ============ WHAT WE FOCUS ON ============ --}}
@if(!empty($focus['items']))
<section class="section" id="focus">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $focus['title'] ?? 'What we focus on' }}</h2>
            @if(!empty($focus['subtitle']))
                <p class="cs-focus-subtitle">{{ $focus['subtitle'] }}</p>
            @endif
            @if(!empty($focus['description']))
                <p>{{ $focus['description'] }}</p>
            @endif
        </div>

        <div class="grid grid-4 cs-focus-grid">
            @foreach($focus['items'] as $i => $item)
                <article class="cs-focus-card fx-reveal fx-delay-{{ ($i % 4) + 1 }}">
                    <p class="cs-focus-number">{{ $item['number'] }}</p>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ============ CHANNELS ============ --}}
@if(!empty($channels['items']))
<section class="section section-alt" id="channels">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $channels['title'] ?? '' }}</h2>
            @if(!empty($channels['subtitle']))
                <p class="cs-channels-subtitle">{{ $channels['subtitle'] }}</p>
            @endif
            @if(!empty($channels['description']))
                <p>{{ $channels['description'] }}</p>
            @endif
        </div>

        <div class="grid grid-3 cs-channels-grid">
            @foreach($channels['items'] as $i => $item)
                <article class="card cs-channel-card fx-reveal fx-delay-{{ ($i % 3) + 1 }}">
                    <h3>{{ $item['title'] }}</h3>
                    <p class="cs-channel-tag">{{ $item['tag'] }}</p>
                    <p>{{ $item['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ============ PRICING ============ --}}
@if(!empty($pricing['plans']))
<section class="section" id="pricing">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $pricing['title'] ?? 'Pricing' }}</h2>
            @if(!empty($pricing['subtitle']))
                <p>{{ $pricing['subtitle'] }}</p>
            @endif
        </div>

        <div class="grid grid-5 pricing-grid cs-pricing-grid">
            @foreach($pricing['plans'] as $i => $plan)
                <article class="card pricing-card cs-pricing-card fx-reveal fx-delay-{{ ($i % 5) + 1 }} @if(!empty($plan['featured'])) is-featured @endif">
                    @if(!empty($plan['badge']))
                        <span class="cs-pricing-badge">{{ $plan['badge'] }}</span>
                    @endif
                    <p class="plan-name">{{ $plan['name'] }}</p>
                    <p class="plan-price">{{ $plan['price'] }}<span class="plan-period">{{ $plan['period'] ?? '' }}</span></p>
                    <p class="plan-tagline">{{ $plan['tagline'] }}</p>
                    <ul class="plan-list">
                        @foreach($plan['features'] as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                    <a href="#" class="btn @if(!empty($plan['featured'])) btn-primary @else btn-outline-dark @endif jsGetAudit" data-audit-type="pricing-{{ \Illuminate\Support\Str::slug($plan['name']) }}">
                        {{ $plan['cta'] ?? 'Start here' }}
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ============ REVIEWS ============ --}}
@if(!empty($reviews['items']))
<section class="section section-alt" id="reviews">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $reviews['title'] ?? 'Reviews' }}</h2>
            @if(!empty($reviews['subtitle']))
                <p>{{ $reviews['subtitle'] }}</p>
            @endif
        </div>

        @if(!empty($reviews['platforms']))
            <div class="grid grid-3 cs-platform-grid">
                @foreach($reviews['platforms'] as $i => $platform)
                    <article class="card cs-platform-card fx-reveal fx-delay-{{ ($i % 3) + 1 }}">
                        <h3>{{ $platform['name'] }}</h3>
                        <p class="cs-platform-rating">{{ $platform['rating'] }} <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                        @if(!empty($platform['count']))
                            <p class="cs-platform-count">{{ $platform['count'] }}</p>
                        @endif
                        <p class="cs-platform-note">{{ $platform['note'] }}</p>
                        @if(!empty($platform['address']))
                            <p class="cs-platform-address">{{ $platform['address'] }}</p>
                        @endif
                        @if(!empty($platform['link']))
                            <a href="{{ $platform['link'] }}" class="cs-platform-link" target="_blank" rel="noopener">{{ $platform['link_label'] ?? 'View reviews' }}</a>
                        @endif
                    </article>
                @endforeach
            </div>
        @endif

        {{-- Auto-sliding review carousel: 3 cards/view on desktop, 2 on tablet, 1 on mobile.
             Navigate with the arrow buttons, the arrow keys (when focused), or swipe on touch. --}}
        <div class="cs-review-carousel fx-reveal" data-carousel data-autoplay="4500">
            <div class="cs-review-viewport" tabindex="0" role="region" aria-roledescription="carousel" aria-label="Customer reviews">
                <div class="cs-review-track">
                    @foreach($reviews['items'] as $review)
                        <div class="cs-review-slide">
                            <article class="card cs-review-card">
                                <div class="cs-review-head">
                                    <span class="cs-review-avatar">{{ $review['initials'] }}</span>
                                    <div>
                                        <p class="cs-review-name">{{ $review['name'] }}</p>
                                        <p class="cs-review-meta">{{ $review['source'] }} &middot; {{ $review['date'] }}</p>
                                    </div>
                                </div>
                                <p class="cs-review-stars" aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                                <p class="cs-review-text">{{ $review['text'] }}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="button" class="cs-carousel-arrow cs-carousel-prev" aria-label="Previous reviews">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button type="button" class="cs-carousel-arrow cs-carousel-next" aria-label="Next reviews">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>

            <div class="cs-carousel-dots" role="tablist" aria-label="Review slide navigation"></div>
        </div>
    </div>
</section>
@endif

{{-- ============ FAQ ============ --}}
@if(!empty($faq['items']))
<section class="section section-alt section-faq" id="faq">
    <div class="container">
        <div class="section-header fx-reveal">
            <h2>{{ $faq['title'] ?? 'Questions' }}</h2>
            @if(!empty($faq['subtitle']))
                <p>{{ $faq['subtitle'] }}</p>
            @endif
        </div>

        <div class="faq-wrap">
            <div class="faq-list">
                @foreach($faq['items'] as $i => $item)
                    <details class="faq-item fx-reveal fx-delay-{{ ($i % 3) + 1 }}">
                        <summary>{{ $item['q'] }}</summary>
                        <div class="faq-content">
                            <p>{{ $item['a'] }}</p>
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

{{-- ============ FINAL CTA ============ --}}
<section class="section cs-final-cta" id="cta">
    <div class="container cs-final-cta-inner fx-reveal">
        <h2>{{ $finalCta['title'] ?? 'Want results like these for your business?' }}</h2>
        <p>{{ $finalCta['description'] ?? '' }}</p>
        <div class="hero-actions">
            <a href="#" class="btn btn-primary jsGetAudit" data-audit-type="final-cta">{{ $finalCta['cta_primary'] ?? 'Get my free SEO audit' }}</a>
            @if(!empty($finalCta['phone']))
                <a href="tel:{{ preg_replace('/\s+/', '', $finalCta['phone']) }}" class="btn btn-ghost">Call {{ $finalCta['phone'] }}</a>
            @endif
        </div>
    </div>
</section>

@endsection