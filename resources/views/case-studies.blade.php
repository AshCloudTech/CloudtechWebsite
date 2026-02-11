@extends('layouts.cloudtech')

@section('title', 'Case Studies')
@section('meta_title', 'Cloud Technologies Ltd – Case Studies')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/case-studies/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/case-studies/js/script.js') }}" defer></script>
@endpush

@section('content')

    <section class="hero cs-hero" id="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>Success Stories That Inspire</h1>
            <p class="subtitle">Discover how we've helped businesses across industries achieve remarkable digital
                transformation and growth</p>
            <div class="cs-stats">
                <span>150+ Projects Delivered</span>
                <span>95% Client Satisfaction</span>
                <span>300% Average Growth</span>
            </div>
        </div>
    </section>

    <section class="section" id="list">
        <div class="container">
            <h2 class="center">Browse Our Case Studies</h2>
            <p class="center muted">Filter by industry to see relevant success stories</p>

            <div class="filter-bar">
                <button class="filter active" data-filter="all">All</button>
                @foreach ($industries as $industry)
                    <button class="filter" data-filter="{{ $industry }}">{{ $industry }}</button>
                @endforeach
            </div>


            <div class="grid grid-2 case-grid case-grid-ui">
                @foreach ($caseStudies as $case)
                    @php
                        $tagClass = match ($case->industry_tag_color) {
                            'purple' => 'tag-pill--purple',
                            'green' => 'tag-pill--green',
                            'orange' => 'tag-pill--orange',
                            default => 'tag-pill--orange', // screenshot uses orange
                        };

                        // Image (prefer card_image, fallback hero_image)
                        $imgPath = $case->card_image ?: $case->hero_image;
                        $imgUrl = $imgPath
                            ? (\Illuminate\Support\Str::startsWith($imgPath, ['http://', 'https://'])
                                ? $imgPath
                                : asset($imgPath))
                            : null;

                        // Right small text in screenshot (client/project)
                        $metaRight = $case->client_name ?: ($case->subtitle ?: '');
                    @endphp

                    <article class="caseCardUI fx-reveal">
                        <a class="caseCardUI__img" href="{{ route('case.studies.detail', $case->slug) }}"
                            aria-label="View {{ $case->title }}">
                            @if ($imgUrl)
                                <img src="{{ $imgUrl }}" alt="{{ $case->title }} case study" loading="lazy"
                                    decoding="async">
                            @else
                                <div class="caseCardUI__imgPlaceholder" aria-hidden="true"></div>
                            @endif
                        </a>

                        <div class="caseCardUI__body">
                            <div class="caseCardUI__meta">
                                @if ($case->industry)
                                    <span class="tag-pill {{ $tagClass }}">{{ $case->industry }}</span>
                                @endif

                                @if (!empty($metaRight))
                                    <span class="caseCardUI__metaRight">{{ $metaRight }}</span>
                                @endif
                            </div>

                            <h3 class="caseCardUI__title">{{ $case->title }}</h3>

                            @if ($case->excerpt)
                                <p class="caseCardUI__desc">{{ $case->excerpt }}</p>
                            @endif

                            <a href="{{ route('case.studies.detail', $case->slug) }}" class="caseCardUI__link">
                                View Case Study <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta" id="cta">
        <div class="container cta-inner">
            <h2>Ready to Create Your Success Story?</h2>
            <p>Let's discuss how we can help transform your business with our proven digital solutions</p>
            <div class="cta-actions">
                <a href="{{ url('services/web-development/#contact-form') }}" class="btn btn-primary">Start Your
                    Project</a>
                <a href="{{ url('/#contact') }}" class="btn btn-light">Schedule Consultation</a>
            </div>
        </div>
    </section>
@endsection
