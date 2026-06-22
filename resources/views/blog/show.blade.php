@extends('layouts.cloudtech')

@section('title', ($post->meta_title ?? $post->title) . ' | CloudTech Blog')
@section('meta_title', ($post->meta_title ?? $post->title) . ' | CloudTech Blog')
@section('meta_description', $post->meta_description ?? Str::limit(strip_tags($post->excerpt ?? $post->content), 160))
@section('meta_keywords', $post->category ?? 'blog, SEO, web development, CloudTech')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/case-studies/detail/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/case-studies/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/blog/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@section('content')

    @php
        $heroImg = $post->featuredImageUrl() ?? asset('assets/images/seo/seo-cloudtech.webp');
    @endphp

    <main class="csd blog-detail">

        <section class="csd-hero" id="top">
            <div class="container csd-container-narrow">
                <nav class="csd-sub" style="margin-bottom:16px; font-size:13px;">
                    <a href="{{ route('home') }}" style="color:inherit;">Home</a>
                    <span aria-hidden="true"> › </span>
                    <a href="{{ route('blog.index') }}" style="color:inherit;">Blog</a>
                </nav>

                <div class="csd-hero-head">
                    <span class="csd-badge">{{ $post->category ?? 'Blog' }}</span>
                    <h1 class="csd-title">{{ $post->title }}</h1>
                    @if($post->excerpt)
                        <p class="csd-subtitle">{{ $post->excerpt }}</p>
                    @endif
                </div>

                <figure class="csd-hero-media">
                    <img src="{{ $heroImg }}" alt="{{ $post->title }}" width="1200" height="630" loading="eager" decoding="async">
                </figure>

                <div class="csd-meta">
                    <div class="csd-meta-card">
                        <span class="csd-meta-label">Author</span>
                        <span class="csd-meta-value">{{ $post->user->name ?? 'Cloud Technologies Ltd' }}</span>
                    </div>
                    <div class="csd-meta-card">
                        <span class="csd-meta-label">Published</span>
                        <span class="csd-meta-value">{{ $post->published_at?->format('d M Y') ?? '—' }}</span>
                    </div>
                    <div class="csd-meta-card">
                        <span class="csd-meta-label">Category</span>
                        <span class="csd-meta-value">{{ $post->category ?? 'Insights' }}</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-article">
            <div class="container csd-container-narrow">
                <div class="blog-body">
                    {!! $post->content !!}
                </div>

                <a href="{{ route('blog.index') }}" class="blog-back">← Back to Blog</a>
            </div>
        </section>

        @if($relatedPosts->count())
            <section class="blog-related">
                <div class="container">
                    <h2 class="blog-related__title">Related Articles</h2>
                    <div class="grid blog-grid-ui">
                        @foreach($relatedPosts as $related)
                            @php
                                $relatedImg = $related->featuredImageUrl() ?? asset('assets/images/seo/seo-cloudtech.webp');
                            @endphp
                            <article class="caseCardUI">
                                <a class="caseCardUI__img" href="{{ route('blog.show', $related->slug) }}">
                                    <img src="{{ $relatedImg }}" alt="{{ $related->title }}" loading="lazy" decoding="async">
                                </a>
                                <div class="caseCardUI__body">
                                    @if($related->category)
                                        <span class="tag-pill tag-pill--orange">{{ $related->category }}</span>
                                    @endif
                                    <h3 class="caseCardUI__title">{{ $related->title }}</h3>
                                    <a href="{{ route('blog.show', $related->slug) }}" class="caseCardUI__link">
                                        Read Article <span aria-hidden="true">→</span>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <section class="cta">
            <div class="container cta-inner">
                <h2>Talk to Our SEO &amp; Web Development Team</h2>
                <p>Get a human-led strategy backed by AI-assisted efficiency — built for UK businesses in 2026</p>
                <div class="cta-actions">
                    <a href="{{ route('contact.us') }}" class="btn btn-primary">Contact Us</a>
                    <a href="#audit" class="btn btn-light jsGetAudit" data-audit-type="seo">Request Free SEO Audit</a>
                </div>
            </div>
        </section>

    </main>

@endsection
