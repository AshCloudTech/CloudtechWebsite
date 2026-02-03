@extends('layouts.cloudtech')

@php
    /**
     * Dynamic Case Study Detail Blade
     * Assumes controller passes:
     *  - $caseStudy (with relations: stats, features, impacts, techStacks, points)
     *  - $challengePoints (collection)
     *  - $solutionPoints (collection)
     */

    $pageTitle = $caseStudy->meta_title
        ?: ($caseStudy->title ? "Case Study - {$caseStudy->title}" : 'Case Study');

    $metaTitle = $caseStudy->meta_title ?: $pageTitle;

    $metaDescription = $caseStudy->meta_description
        ?: ($caseStudy->excerpt ?: 'Explore our case study and see how we delivered measurable results.');

    // Optional: allow per-case-study CSS/JS folders like:
    // public/assets/case-studies/{slug}/css/style.css
    // public/assets/case-studies/{slug}/js/script.js
    $assetBase = 'assets/case-studies/' . ($caseStudy->slug ?? '');
    $cssPath = $assetBase . '/css/style.css';
    $jsPath  = $assetBase . '/js/script.js';

    $hasCaseCss = !empty($caseStudy->slug) && file_exists(public_path($cssPath));
    $hasCaseJs  = !empty($caseStudy->slug) && file_exists(public_path($jsPath));

    // Images are stored as public-relative paths, e.g. assets/case-studies/xxx.webp
    $heroImg = filled($caseStudy->hero_image) ? asset($caseStudy->hero_image) : null;

    // For sections
    $hasStats    = $caseStudy->stats?->count() > 0;
    $hasFeatures = $caseStudy->features?->count() > 0;
    $hasImpacts  = $caseStudy->impacts?->count() > 0;
    $hasTech     = $caseStudy->techStacks?->count() > 0;

    $hasChallenge = filled($caseStudy->challenge_body) || ($challengePoints?->count() > 0);
    $hasSolution  = filled($caseStudy->solution_body)  || ($solutionPoints?->count() > 0);

    $hasTestimonial =
        filled($caseStudy->testimonial_badge) ||
        filled($caseStudy->testimonial_quote) ||
        filled($caseStudy->testimonial_author_name) ||
        filled($caseStudy->testimonial_author_title);
@endphp

@section('title', $pageTitle)
@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)

@push('styles')
    {{-- Prefer per-case-study stylesheet if exists; else keep your existing learning-compass as fallback --}}
    @if($hasCaseCss)
        <link rel="stylesheet" href="{{ asset($cssPath) }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/case-studies/learning-compass/css/style.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@push('scripts')
    {{-- Prefer per-case-study script if exists; else fallback --}}
    @if($hasCaseJs)
        <script src="{{ asset($jsPath) }}" defer></script>
    @else
        <script src="{{ asset('assets/case-studies/learning-compass/js/script.js') }}" defer></script>
    @endif

    {{-- Lucide Icons CDN --}}
    <script src="https://unpkg.com/lucide@latest" defer></script>

    {{-- Ensure icons render (in case your script.js doesn’t call it) --}}
    <script defer>
      document.addEventListener('DOMContentLoaded', function () {
        if (window.lucide && typeof window.lucide.createIcons === 'function') {
          window.lucide.createIcons();
        }
      });
    </script>
@endpush

@section('content')

<!-- HERO -->
<section class="cs-hero" id="top">
  <div class="container cs-hero-grid">
    <div class="cs-hero-text fx-reveal">
      <p class="cs-kicker">Case Study</p>

      <h1>{{ $caseStudy->title }}</h1>

      @if($caseStudy->subtitle)
        <p class="cs-subtitle">{{ $caseStudy->subtitle }}</p>
      @endif

      {{-- META (auto-hides missing cards) --}}
      @php
        $showClient   = filled($caseStudy->client_name);
        $showIndustry = filled($caseStudy->industry);
        $showYear     = filled($caseStudy->year);
      @endphp

      @if($showClient || $showIndustry || $showYear)
        <div class="cs-meta fx-reveal" data-fx-stagger>
          @if($showClient)
            <div class="cs-meta-card">
              <span class="cs-meta-label">Client</span>
              <span class="cs-meta-value">{{ $caseStudy->client_name }}</span>
            </div>
          @endif

          @if($showIndustry)
            <div class="cs-meta-card">
              <span class="cs-meta-label">Industry</span>
              <span class="cs-meta-value">{{ $caseStudy->industry }}</span>
            </div>
          @endif

          @if($showYear)
            <div class="cs-meta-card">
              <span class="cs-meta-label">Year</span>
              <span class="cs-meta-value">{{ $caseStudy->year }}</span>
            </div>
          @endif
        </div>
      @endif
    </div>

    <div class="cs-hero-media fx-reveal fx-right">
      @if($heroImg)
        <img
          src="{{ $heroImg }}"
          alt="{{ $caseStudy->title }} preview"
          width="1100" height="760"
          loading="eager"
          decoding="async"
        >
      @endif
    </div>
  </div>
</section>

<!-- STATS -->
@if($hasStats)
<section class="cs-stats">
  <div class="container">
    <div class="cs-stats-grid">
      @foreach($caseStudy->stats as $stat)
        @php
          $hasIcon  = filled($stat->icon);
          $hasValue = filled($stat->value);
          $hasLabel = filled($stat->label);
        @endphp

        @if($hasValue || $hasLabel)
          <div class="cs-stat fx-reveal" data-fx-stagger>
            @if($hasIcon)
              <div class="cs-stat-icon" data-lucide="{{ $stat->icon }}"></div>
            @endif
            @if($hasValue)<span class="cs-stat-value">{{ $stat->value }}</span>@endif
            @if($hasLabel)<span class="cs-stat-label">{{ $stat->label }}</span>@endif
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- CHALLENGE / SOLUTION -->
@if($hasChallenge || $hasSolution)
<section class="cs-two-col">
  <div class="container cs-two-col-grid">

    @if($hasChallenge)
      <div class="cs-panel fx-reveal">
        <h2>{{ $caseStudy->challenge_title ?: 'The Challenge' }}</h2>

        @if($caseStudy->challenge_body)
          <p>{{ $caseStudy->challenge_body }}</p>
        @endif

        @if($challengePoints?->count())
          <ul class="cs-list cs-list-negative">
            @foreach($challengePoints as $p)
              @if(filled($p->text))
                <li><span class="cs-x">✕</span> {{ $p->text }}</li>
              @endif
            @endforeach
          </ul>
        @endif
      </div>
    @endif

    @if($hasSolution)
      <div class="cs-panel cs-panel-solution fx-reveal fx-right">
        <h2>{{ $caseStudy->solution_title ?: 'Our Solution' }}</h2>

        @if($caseStudy->solution_body)
          <p>{{ $caseStudy->solution_body }}</p>
        @endif

        @if($solutionPoints?->count())
          <ul class="cs-list cs-list-positive">
            @foreach($solutionPoints as $p)
              @if(filled($p->text))
                <li>
                  @if(filled($p->icon))
                    <span class="cs-check" data-lucide="{{ $p->icon }}"></span>
                  @else
                    <span class="cs-check">✓</span>
                  @endif
                  {{ $p->text }}
                </li>
              @endif
            @endforeach
          </ul>
        @endif
      </div>
    @endif

  </div>
</section>
@endif

<!-- FEATURES -->
@if($hasFeatures)
<section class="cs-features">
  <div class="container">
    <div class="cs-section-head fx-reveal">
      <h2>{{ $caseStudy->features_heading ?: 'Key Features' }}</h2>
      @if($caseStudy->features_subheading)
        <p>{{ $caseStudy->features_subheading }}</p>
      @endif
    </div>

    <div class="cs-feature-grid">
      @foreach($caseStudy->features as $feature)
        @php
          $hasIcon = filled($feature->icon);
          $hasTitle = filled($feature->title);
          $hasDesc = filled($feature->description);
        @endphp

        @if($hasTitle || $hasDesc)
          <article class="cs-feature-card fx-reveal" data-fx-stagger>
            @if($hasIcon)
              <div class="cs-feature-icon" data-lucide="{{ $feature->icon }}"></div>
            @endif

            @if($hasTitle)
              <h3>{{ $feature->title }}</h3>
            @endif

            @if($hasDesc)
              <p>{{ $feature->description }}</p>
            @endif
          </article>
        @endif
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- IMPACT -->
@if($hasImpacts)
<section class="cs-impact">
  <div class="container">
    <div class="cs-section-head fx-reveal">
      <h2>{{ $caseStudy->impact_heading ?: 'Results & Impact' }}</h2>
      @if($caseStudy->impact_subheading)
        <p>{{ $caseStudy->impact_subheading }}</p>
      @endif
    </div>

    <div class="cs-impact-grid">
      @foreach($caseStudy->impacts as $impact)
        @php
          $hasMetric = filled($impact->metric);
          $hasTitle  = filled($impact->title);
          $hasDesc   = filled($impact->description);
        @endphp

        @if($hasMetric || $hasTitle || $hasDesc)
          <article class="cs-impact-card fx-reveal" data-fx-stagger>
            @if($hasMetric)
              <span class="cs-impact-metric">{{ $impact->metric }}</span>
            @endif
            @if($hasTitle)
              <h3>{{ $impact->title }}</h3>
            @endif
            @if($hasDesc)
              <p>{{ $impact->description }}</p>
            @endif
          </article>
        @endif
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- QUOTE / TESTIMONIAL -->
@if($hasTestimonial)
<section class="cs-quote">
  <div class="container">
    <div class="cs-quote-card fx-reveal">

      @if(filled($caseStudy->testimonial_badge))
        <div class="cs-quote-badge">{{ $caseStudy->testimonial_badge }}</div>
      @endif

      @if(filled($caseStudy->testimonial_quote))
        <p class="cs-quote-text">
          “{{ $caseStudy->testimonial_quote }}”
        </p>
      @endif

      @if(filled($caseStudy->testimonial_author_name) || filled($caseStudy->testimonial_author_title))
        <div class="cs-quote-author">
          @if(filled($caseStudy->testimonial_author_name))
            <span class="cs-quote-name">{{ $caseStudy->testimonial_author_name }}</span>
          @endif
          @if(filled($caseStudy->testimonial_author_title))
            <span class="cs-quote-title">{{ $caseStudy->testimonial_author_title }}</span>
          @endif
        </div>
      @endif

    </div>
  </div>
</section>
@endif

<!-- TECH STACK -->
@if($hasTech)
<section class="cs-stack">
  <div class="container">
    <div class="cs-section-head fx-reveal">
      <h2>Technology Stack</h2>
    </div>

    <div class="cs-chips fx-reveal" data-fx-stagger>
      @foreach($caseStudy->techStacks as $t)
        @if(filled($t->name))
          <span class="cs-chip">{{ $t->name }}</span>
        @endif
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- CTA (static) -->
<section class="cs-cta">
  <div class="container">
    <div class="cs-cta-inner fx-reveal">
      <h2>Want Similar Results for Your Project?</h2>
      <p>Let’s discuss how we can help transform your digital product</p>

      <div class="cs-cta-actions">
        <a class="btn btn-primary" href="/contact">Get in Touch</a>
        <a class="btn btn-secondary" href="/work">View More Work</a>
      </div>
    </div>
  </div>
</section>

@endsection
