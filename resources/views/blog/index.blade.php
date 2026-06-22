@extends('layouts.cloudtech')

@section('title', 'Blog | Digital Marketing, SEO & Web Development Insights UK')
@section('meta_title', 'Blog | Digital Marketing, SEO & Web Development Insights UK')
@section('meta_description', 'Read expert articles on digital marketing, SEO, web development, and AI in search from the Cloud Technologies Ltd team.')
@section('meta_keywords', 'blog, digital marketing blog, SEO tips, web development articles, AI and SEO, CloudTech blog')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/case-studies/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/blog/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@section('content')

    <section class="hero cs-hero" id="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>Insights &amp; Expertise</h1>
            <p class="subtitle">Expert articles on digital marketing, SEO, web development, and strategies to grow your business online</p>
            <div class="cs-stats">
                <span>SEO &amp; Digital Strategy</span>
                <span>UK Business Growth</span>
                <span>Expert-Led Content</span>
            </div>
        </div>
    </section>

    <section class="section" id="list">
        <div class="container">
            <h2 class="center">Latest from Our Blog</h2>
            <p class="center muted">Filter by topic to find relevant insights</p>

            @if($categories->count())
                <div class="filter-bar">
                    <a href="{{ route('blog.index') }}"
                       class="filter {{ !request('category') ? 'active' : '' }}">
                        All
                    </a>
                    @foreach($categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category]) }}"
                           class="filter {{ request('category') === $category ? 'active' : '' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            @endif

            @if($posts->count())
                <div class="grid blog-grid-ui">
                    @foreach($posts as $post)
                        @php
                            $imgUrl = $post->featuredImageUrl() ?? asset('assets/images/seo/seo-cloudtech.webp');
                        @endphp

                        <article class="caseCardUI fx-reveal">
                            <a class="caseCardUI__img" href="{{ route('blog.show', $post->slug) }}"
                               aria-label="Read {{ $post->title }}">
                                <img src="{{ $imgUrl }}" alt="{{ $post->title }}" loading="lazy" decoding="async">
                            </a>

                            <div class="caseCardUI__body">
                                <div class="caseCardUI__meta">
                                    @if($post->category)
                                        <span class="tag-pill tag-pill--orange">{{ $post->category }}</span>
                                    @endif
                                    <span class="caseCardUI__metaRight">{{ $post->published_at?->format('d M Y') }}</span>
                                </div>

                                <h3 class="caseCardUI__title">{{ $post->title }}</h3>

                                <p class="caseCardUI__desc">
                                    {{ Str::limit($post->excerpt ?? strip_tags($post->content), 140) }}
                                </p>

                                <a href="{{ route('blog.show', $post->slug) }}" class="caseCardUI__link">
                                    Read Article <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                @if($posts->hasPages())
                    <div class="blog-pagination">
                        {{ $posts->links() }}
                    </div>
                @endif
            @else
                <div class="blog-empty">
                    <div class="blog-empty__title">No posts yet</div>
                    <p>Check back soon for fresh insights and articles.</p>
                </div>
            @endif
        </div>
    </section>

    <section class="cta" id="cta">
        <div class="container cta-inner">
            <h2>Ready to Grow Your Organic Traffic?</h2>
            <p>Speak with our SEO and web development team about a strategy built for your business in 2026</p>
            <div class="cta-actions">
                <a href="{{ route('services.seo') }}" class="btn btn-primary">Explore SEO Services</a>
                <a href="#audit" class="btn btn-light jsGetAudit" data-audit-type="seo">Request Free SEO Audit</a>
            </div>
        </div>
    </section>

@endsection
