@extends('layouts.cloudtech')

@php
    $pageTitle = $caseStudy->meta_title ?: ($caseStudy->title ? "Case Study - {$caseStudy->title}" : 'Case Study');

    $metaTitle = $caseStudy->meta_title ?: $pageTitle;

    $metaDescription =
        $caseStudy->meta_description ?:
        ($caseStudy->excerpt ?:
        'Explore our case study and see how we delivered measurable results.');

    // Use a dedicated common detail CSS (recommended)
    $detailCss = 'assets/case-studies/detail/css/style.css';
    $detailJs = 'assets/case-studies/detail/js/script.js';

    // Images are stored as public-relative paths
    $heroImg = filled($caseStudy->hero_image) ? asset($caseStudy->hero_image) : null;

    $hasStats = $caseStudy->stats?->count() > 0;
    $hasFeatures = $caseStudy->features?->count() > 0;
    $hasImpacts = $caseStudy->impacts?->count() > 0;
    $hasTech = $caseStudy->techStacks?->count() > 0;

    $hasChallenge = filled($caseStudy->challenge_body) || $challengePoints?->count() > 0;
    $hasSolution = filled($caseStudy->solution_body) || $solutionPoints?->count() > 0;

    $featuredTestimonial = $caseStudy->testimonials
        ?->where('is_published', true)
        ?->sortByDesc('is_featured')
        ?->sortBy('sort_order')
        ?->first();

    $hasTestimonial = $featuredTestimonial && filled($featuredTestimonial->quote);

    // Backward compat: if no new testimonial rows, fallback to old fields
    $hasLegacyTestimonial =
        filled($caseStudy->testimonial_badge) ||
        filled($caseStudy->testimonial_quote) ||
        filled($caseStudy->testimonial_author_name) ||
        filled($caseStudy->testimonial_author_title);

    if (!$hasTestimonial && $hasLegacyTestimonial) {
        $hasTestimonial = true;
    }

    $showClient = filled($caseStudy->client_name);
    $showIndustry = filled($caseStudy->industry);
    $showYear = filled($caseStudy->year);
@endphp

@section('title', $pageTitle)
@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)

@push('styles')
    <link rel="stylesheet" href="{{ asset($detailCss) }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@push('scripts')
    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest" defer></script>
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.lucide && typeof window.lucide.createIcons === 'function') {
                window.lucide.createIcons();
            }
        });
    </script>
@endpush

@section('content')

    <main class="csd">

        <!-- HERO (Centered like screenshot) -->
        <section class="csd-hero" id="top">
            <div class="container csd-container-narrow">

                <div class="csd-hero-head fx-reveal">
                    <span class="csd-badge">Case Study</span>

                    <h1 class="csd-title">{{ $caseStudy->title }}</h1>

                    @if ($caseStudy->subtitle)
                        <p class="csd-subtitle">{{ $caseStudy->subtitle }}</p>
                    @elseif($caseStudy->excerpt)
                        <p class="csd-subtitle">{{ $caseStudy->excerpt }}</p>
                    @endif
                </div>

                @if ($heroImg)
                    <figure class="csd-hero-media fx-reveal">
                        <img src="{{ $heroImg }}" alt="{{ $caseStudy->title }} preview" width="1200" height="720"
                            loading="eager" decoding="async">
                    </figure>
                @endif

                {{-- Meta cards under image --}}
                @if ($showClient || $showIndustry || $showYear)
                    <div class="csd-meta fx-reveal">
                        @if ($showClient)
                            <div class="csd-meta-card">
                                <span class="csd-meta-label">Client</span>
                                <span class="csd-meta-value">{{ $caseStudy->client_name }}</span>
                            </div>
                        @endif

                        @if ($showIndustry)
                            <div class="csd-meta-card">
                                <span class="csd-meta-label">Industry</span>
                                <span class="csd-meta-value">{{ $caseStudy->industry }}</span>
                            </div>
                        @endif

                        @if ($showYear)
                            <div class="csd-meta-card">
                                <span class="csd-meta-label">Year</span>
                                <span class="csd-meta-value">{{ $caseStudy->year }}</span>
                            </div>
                        @endif
                    </div>
                @endif

            </div>
        </section>

        <!-- STATS STRIP -->
        @if ($hasStats)
            <section class="csd-stats">
                <div class="container csd-container-narrow">
                    <div class="csd-stats-grid">
                        @foreach ($caseStudy->stats as $stat)
                            @php
                                $hasIcon = filled($stat->icon);
                                $hasValue = filled($stat->value);
                                $hasLabel = filled($stat->label);
                            @endphp

                            @if ($hasValue || $hasLabel)
                                <div class="csd-stat fx-reveal" data-fx-stagger>
                                    <div class="csd-stat-icon">
                                        @if ($hasIcon)
                                            <i data-lucide="{{ $stat->icon }}"></i>
                                        @else
                                            <i data-lucide="sparkles"></i>
                                        @endif
                                    </div>

                                    @if ($hasValue)
                                        <div class="csd-stat-value">{{ $stat->value }}</div>
                                    @endif

                                    @if ($hasLabel)
                                        <div class="csd-stat-label">{{ $stat->label }}</div>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- CHALLENGE / SOLUTION -->
        @if ($hasChallenge || $hasSolution)
            <section class="csd-two">
                <div class="container csd-container-narrow">
                    <div class="csd-two-grid">

                        @if ($hasChallenge)
                            <article class="csd-panel fx-reveal">
                                <h2 class="csd-h2">{{ $caseStudy->challenge_title ?: 'The Challenge' }}</h2>

                                @if ($caseStudy->challenge_body)
                                    <p class="csd-p">{{ $caseStudy->challenge_body }}</p>
                                @endif

                                @if ($challengePoints?->count())
                                    <ul class="csd-list csd-list-neg">
                                        @foreach ($challengePoints as $p)
                                            @if (filled($p->text))
                                                <li><span class="csd-bullet csd-bullet-neg">✕</span>{{ $p->text }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </article>
                        @endif

                        @if ($hasSolution)
                            <article class="csd-panel fx-reveal">
                                <h2 class="csd-h2">{{ $caseStudy->solution_title ?: 'Our Solution' }}</h2>

                                @if ($caseStudy->solution_body)
                                    <p class="csd-p">{{ $caseStudy->solution_body }}</p>
                                @endif

                                @if ($solutionPoints?->count())
                                    <ul class="csd-list csd-list-pos">
                                        @foreach ($solutionPoints as $p)
                                            @if (filled($p->text))
                                                <li>
                                                    <span class="csd-bullet csd-bullet-pos">
                                                        @if (filled($p->icon))
                                                            <i data-lucide="{{ $p->icon }}"></i>
                                                        @else
                                                            ✓
                                                        @endif
                                                    </span>
                                                    {{ $p->text }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </article>
                        @endif

                    </div>
                </div>
            </section>
        @endif

        <!-- FEATURES -->
        @if ($hasFeatures)
            <section class="csd-features">
                <div class="container csd-container-narrow">
                    <header class="csd-center fx-reveal">
                        <h2 class="csd-h2">{{ $caseStudy->features_heading ?: 'Key Features' }}</h2>
                        @if ($caseStudy->features_subheading)
                            <p class="csd-sub">{{ $caseStudy->features_subheading }}</p>
                        @endif
                    </header>

                    <div class="csd-feature-grid">
                        @foreach ($caseStudy->features as $feature)
                            @php
                                $hasIcon = filled($feature->icon);
                                $hasTitle = filled($feature->title);
                                $hasDesc = filled($feature->description);
                            @endphp

                            @if ($hasTitle || $hasDesc)
                                <article class="csd-card fx-reveal" data-fx-stagger>
                                    <div class="csd-card-icon">
                                        @if ($hasIcon)
                                            <i data-lucide="{{ $feature->icon }}"></i>
                                        @else
                                            <i data-lucide="sparkles"></i>
                                        @endif
                                    </div>
                                    @if ($hasTitle)
                                        <h3 class="csd-h3">{{ $feature->title }}</h3>
                                    @endif
                                    @if ($hasDesc)
                                        <p class="csd-card-p">{{ $feature->description }}</p>
                                    @endif
                                </article>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- RESULTS & IMPACT -->
        @if ($hasImpacts)
            <section class="csd-impact">
                <div class="container csd-container-narrow">
                    <header class="csd-center fx-reveal">
                        <h2 class="csd-h2">{{ $caseStudy->impact_heading ?: 'Results & Impact' }}</h2>
                        @if ($caseStudy->impact_subheading)
                            <p class="csd-sub">{{ $caseStudy->impact_subheading }}</p>
                        @endif
                    </header>

                    <div class="csd-impact-grid">
                        @foreach ($caseStudy->impacts as $impact)
                            @php
                                $hasMetric = filled($impact->metric);
                                $hasTitle = filled($impact->title);
                                $hasDesc = filled($impact->description);
                            @endphp

                            @if ($hasMetric || $hasTitle || $hasDesc)
                                <article class="csd-impact-card fx-reveal" data-fx-stagger>
                                    @if ($hasMetric)
                                        <div class="csd-impact-metric">{{ $impact->metric }}</div>
                                    @endif
                                    @if ($hasTitle)
                                        <h3 class="csd-impact-title">{{ $impact->title }}</h3>
                                    @endif
                                    @if ($hasDesc)
                                        <p class="csd-impact-p">{{ $impact->description }}</p>
                                    @endif
                                </article>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- TESTIMONIAL -->
        @if ($hasTestimonial)
            <section class="csd-quote">
                <div class="container csd-container-narrow">
                    <div class="csd-quote-card fx-reveal">

                        {{-- NEW SYSTEM (relation) --}}
                        @if (isset($featuredTestimonial) && $featuredTestimonial && filled($featuredTestimonial->quote))
                            @if (filled($featuredTestimonial->badge))
                                <div class="csd-quote-badge">{{ $featuredTestimonial->badge }}</div>
                            @endif

                            <p class="csd-quote-text">“{{ $featuredTestimonial->quote }}”</p>

                            <div class="csd-quote-author">
                                @php
                                    $authorLine = collect([
                                        $featuredTestimonial->author_title,
                                        $featuredTestimonial->author_company,
                                    ])
                                        ->filter()
                                        ->implode(', ');
                                @endphp

                                @if (filled($featuredTestimonial->author_name))
                                    <div class="csd-quote-name">{{ $featuredTestimonial->author_name }}</div>
                                @endif

                                @if (filled($authorLine))
                                    <div class="csd-quote-title">{{ $authorLine }}</div>
                                @endif

                                {{-- Optional: rating --}}
                                @if (!is_null($featuredTestimonial->rating))
                                    <div class="csd-quote-rating"
                                        aria-label="Rating {{ $featuredTestimonial->rating }} out of 5">
                                        {{ str_repeat('★', (int) $featuredTestimonial->rating) }}{{ str_repeat('☆', 5 - (int) $featuredTestimonial->rating) }}
                                    </div>
                                @endif

                                {{-- Optional: source --}}
                                @if (filled($featuredTestimonial->source_url) && filled($featuredTestimonial->source))
                                    <div class="csd-quote-source">
                                        Source:
                                        <a href="{{ $featuredTestimonial->source_url }}" target="_blank"
                                            rel="noopener noreferrer">
                                            {{ $featuredTestimonial->source }}
                                        </a>
                                    </div>
                                @elseif(filled($featuredTestimonial->source))
                                    <div class="csd-quote-source">Source: {{ $featuredTestimonial->source }}</div>
                                @endif
                            </div>

                            {{-- FALLBACK (legacy single columns) --}}
                        @else
                            @if (filled($caseStudy->testimonial_badge))
                                <div class="csd-quote-badge">{{ $caseStudy->testimonial_badge }}</div>
                            @endif

                            @if (filled($caseStudy->testimonial_quote))
                                <p class="csd-quote-text">“{{ $caseStudy->testimonial_quote }}”</p>
                            @endif

                            @if (filled($caseStudy->testimonial_author_name) || filled($caseStudy->testimonial_author_title))
                                <div class="csd-quote-author">
                                    @if (filled($caseStudy->testimonial_author_name))
                                        <div class="csd-quote-name">{{ $caseStudy->testimonial_author_name }}</div>
                                    @endif
                                    @if (filled($caseStudy->testimonial_author_title))
                                        <div class="csd-quote-title">{{ $caseStudy->testimonial_author_title }}</div>
                                    @endif
                                </div>
                            @endif
                        @endif

                    </div>
                </div>
            </section>
        @endif

        <!-- TECH STACK -->
        @if ($hasTech)
            <section class="csd-stack">
                <div class="container csd-container-narrow">
                    <header class="csd-center fx-reveal">
                        <h2 class="csd-h2">Technology Stack</h2>
                    </header>

                    <div class="csd-chips fx-reveal" data-fx-stagger>
                        @foreach ($caseStudy->techStacks as $t)
                            @if (filled($t->name))
                                <span class="csd-chip">{{ $t->name }}</span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- CTA -->
        <section class="csd-cta">
            <div class="container csd-container-narrow">
                <div class="csd-center fx-reveal">
                    <h2 class="csd-h2">Want Similar Results for Your Project?</h2>
                    <p class="csd-sub">Let’s discuss how we can help transform your digital product</p>

                    <div class="csd-actions">
                        <a class="csd-btn csd-btn-primary" href="{{ url('/contact-us') }}">Get in Touch</a>
                        <a class="csd-btn csd-btn-ghost" href="{{ url('/case-studies') }}">View More Work</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
