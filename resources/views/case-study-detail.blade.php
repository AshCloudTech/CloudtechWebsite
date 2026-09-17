@extends('layouts.cloudtech')

@php
    $pageTitle = $caseStudy->meta_title ?: ($caseStudy->title . ' - Case Study');
    $metaTitle = $pageTitle;
    $metaDescription = $caseStudy->meta_description ?: ($caseStudy->hero_lead ?: ($caseStudy->excerpt ?: 'Explore our case study and see how we delivered measurable results.'));

    $heroImg = $caseStudy->hero_image ? asset($caseStudy->hero_image) : ($caseStudy->card_image ? asset($caseStudy->card_image) : null);
    $executedTasks = $caseStudy->tasks->isNotEmpty()
        ? $caseStudy->tasks->pluck('task')
        : ($caseStudy->points->isNotEmpty() ? $caseStudy->points->pluck('text') : collect());
@endphp

@section('title', $pageTitle)
@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/case-studies/case-studies-details/css/style.css') }}">
    <!-- Google Fonts Preconnect & Import for Fraunces & Kumbh Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..900;1,9..144,300..900&family=Kumbh+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
@endpush

@push('scripts')
    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest" defer></script>
    <script src="{{ asset('assets/case-studies/case-studies-details/js/script.js') }}" defer></script>    
@endpush

@section('content')
    <div class="gmb-detail-page">
        <div class="gmb-detail-container">

            @if (!$caseStudy)
                <div style="text-align: center; padding: 100px 0;">
                    <h1 style="font-family: var(--gmb-font-serif); color: var(--gmb-text-title); font-size: 36px; margin-bottom: 16px;">
                        Case Study Not Found
                    </h1>
                    <p style="color: var(--gmb-text-body); margin-bottom: 24px;">The requested case study does not exist or has been moved.</p>
                    <a href="{{ url('/case-studies') }}" style="display: inline-block; background: var(--gmb-accent); color: #1a0f00; padding: 12px 24px; border-radius: 999px; text-decoration: none; font-weight: 700;">
                        ← Back to Case Studies
                    </a>
                </div>
            @else
                <!-- Back Navigation -->
                <a class="gmb-back-nav gmb-reveal" href="{{ url('/case-studies') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    Back to Case Studies
                </a>

                <!-- 1. HERO & CASE SHOWCASE -->
                <header class="gmb-detail-hero gmb-reveal">
                    <div class="gmb-detail-hero-content">
                        <div class="gmb-detail-eyebrow">
                            📍 {{ $caseStudy->location ?: 'UK' }} &bull; {{ $caseStudy->industry }} &bull; {{ $caseStudy->duration ?: '3 Months' }}
                        </div>
                        <h1 class="gmb-detail-title">
                            {{ $caseStudy->hero_title_main ?: $caseStudy->title }}
                            @if($caseStudy->hero_title_em)
                                <span class="gmb-detail-title-em">{!! $caseStudy->hero_title_em !!}</span>
                            @endif
                        </h1>
                        @if($caseStudy->hero_lead || $caseStudy->excerpt)
                            <p class="gmb-detail-lead">{{ $caseStudy->hero_lead ?: $caseStudy->excerpt }}</p>
                        @endif

                        @if($caseStudy->hero_quote)
                            <div class="gmb-detail-quote">
                                {!! $caseStudy->hero_quote !!}
                            </div>
                        @endif
                    </div>

                    @if ($heroImg)
                        <div class="gmb-hero-visual">
                            <span class="gmb-hero-visual-badge">Verified Performance</span>
                            <img src="{{ $heroImg }}" alt="{{ $caseStudy->title }} Performance" loading="lazy">
                        </div>
                    @endif
                </header>

                <!-- 2. KPIS / KEY RESULTS -->
                @if ($caseStudy->kpis->isNotEmpty())
                    <section class="gmb-kpi-grid gmb-reveal" aria-label="Key Performance Indicators">
                        @foreach ($caseStudy->kpis as $kpi)
                            <div class="gmb-kpi-card">
                                <div class="gmb-kpi-label">{{ $kpi->label }}</div>
                                <div class="gmb-kpi-value gmb-counter" data-target="{{ $kpi->value }}" data-formatted="{{ $kpi->formatted ?: $kpi->value }}">0</div>
                                @if($kpi->sub)
                                    <div class="gmb-kpi-sub">{{ $kpi->sub }}</div>
                                @endif
                                @if($kpi->delta)
                                    <div class="gmb-kpi-delta">{{ $kpi->delta }}</div>
                                @endif
                            </div>
                        @endforeach
                    </section>
                @endif

                <!-- 3. CHARTS & ANALYTICS -->
                @if ($caseStudy->chartTrends->isNotEmpty() || $caseStudy->chartBreakdowns->isNotEmpty())
                    <section class="gmb-charts-grid gmb-reveal" aria-label="Performance Charts">
                        @if ($caseStudy->chartTrends->isNotEmpty())
                            <div class="gmb-chart-card">
                                <h3 class="gmb-chart-heading">{{ $caseStudy->chart_trend_label ?: 'Growth Trends' }}</h3>
                                <div class="gmb-trend-bars">
                                    @foreach ($caseStudy->chartTrends as $trend)
                                        <div class="gmb-trend-col">
                                            <div class="gmb-trend-num gmb-counter" data-target="{{ $trend->value }}">0</div>
                                            <div class="gmb-trend-bar-track">
                                                <div class="gmb-trend-bar-fill" data-height="{{ $trend->height }}" style="height: 0%;"></div>
                                            </div>
                                            <div class="gmb-trend-col-label">{{ $trend->label }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if ($caseStudy->chartBreakdowns->isNotEmpty())
                            <div class="gmb-chart-card">
                                <h3 class="gmb-chart-heading">{{ $caseStudy->chart_breakdown_label ?: 'Discovery Breakdown' }}</h3>
                                <div class="gmb-breakdown-list">
                                    @foreach ($caseStudy->chartBreakdowns as $row)
                                        <div class="gmb-breakdown-row">
                                            <div class="gmb-breakdown-meta">
                                                <span>{{ $row->label }}</span>
                                                <span class="gmb-breakdown-pct">{{ $row->pct }}</span>
                                            </div>
                                            <div class="gmb-breakdown-track">
                                                <div class="gmb-breakdown-fill" data-width="{{ $row->pct }}" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </section>
                @endif

                <!-- 4. WHAT WE DID STRATEGY -->
                @if ($executedTasks->isNotEmpty())
                    <section class="gmb-what-card gmb-reveal" aria-label="Optimization Strategy">
                        <h2 class="gmb-what-title">What We Executed</h2>
                        <ul class="gmb-what-grid">
                            @foreach ($executedTasks as $task)
                                <li>
                                    <span class="gmb-what-check">&#10003;</span>
                                    <span>{{ $task }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                <!-- 5. BOTTOM CALL TO ACTION BANNER -->
                <section class="gmb-detail-cta gmb-reveal">
                    <h2 class="gmb-detail-cta-title">
                        {!! $caseStudy->cta_title ?: ('Want Results <em>Like ' . e($caseStudy->title) . '?</em>') !!}
                    </h2>

                    <div class="gmb-detail-cta-actions">
                        <a href="{{ url('/contact-us') }}" class="gmb-cta-btn-dark">
                            ✆ {{ $caseStudy->cta_btn_text ?: 'Book a Free Consultation Today' }}
                        </a>

                        <a href="https://wa.me/447427547394?text=Hi%2C%20I%20saw%20the%20{{ urlencode($caseStudy->title) }}%20case%20study%20and%20want%20similar%20results." target="_blank" rel="noopener" class="gmb-cta-btn-whatsapp">
                            💬 Chat on WhatsApp
                        </a>
                    </div>
                </section>

            @endif

        </div>
    </div>
@endsection