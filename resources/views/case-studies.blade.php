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
    @foreach($industries as $industry)
        <button class="filter" data-filter="{{ $industry }}">{{ $industry }}</button>
    @endforeach
</div>

 
<div class="grid cs-grid">
    @foreach($caseStudies as $cs)
        <article class="card cs-card" data-category="{{ $cs->industry ?? 'Other' }}">
            @if($cs->card_image)
  <div class="cs-img" style="background-image:url('{{ asset($cs->card_image) }}')"></div>
            @else
                <div class="cs-img"></div>
            @endif

            @if($cs->industry)
                <span class="cs-tag {{ $cs->industry_tag_color ?? 'blue' }}">{{ $cs->industry }}</span>
            @endif

            <h3>{{ $cs->title }}</h3>
            @if($cs->excerpt)
                <p>{{ $cs->excerpt }}</p>
            @endif

            <a href="{{ route('case.studies.detail', $cs->slug) }}" class="cs-link">
                View Case Study →
            </a>
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
            <a href="#" class="btn btn-primary">Start Your Project</a>
            <a href="#" class="btn btn-light">Schedule Consultation</a>
        </div>
    </div>
</section>
@endsection