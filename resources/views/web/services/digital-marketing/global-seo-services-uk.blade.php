@extends('layouts.cloudtech')

@section('title', $pageData['meta']['title'])
@section('meta_title', $pageData['meta']['meta_title'])
@section('meta_description', $pageData['meta']['meta_description'])
@section('meta_keywords', $pageData['meta']['meta_keywords'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/digitalMarketing/global-seo-services-uk/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faq.css') }}">
    <!-- Dynamic Banner Delivery Injector -->
    <style>
        .hero-section .hero-bg { background-image: url("{{ asset($pageData['hero']['banner_desktop']) }}"); }
        @media (max-width: 768px) {
            .hero-section .hero-bg { background-image: url("{{ asset($pageData['hero']['banner_mobile']) }}"); }
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script>
    <script src="{{ asset('assets/services/digitalMarketing/global-seo-services-uk/js/script.js') }}" defer></script>
@endpush

@section('content')

    <!-- HERO SECTION -->
    <section class="hero-section" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-grid-layout">
            <div class="hero-content-block">
                <p class="hero-eyebrow-text">{{ $pageData['hero']['eyebrow'] }}</p>
                <h1>{!! $pageData['hero']['title'] !!}</h1>
                <p class="hero-subtitle-text">{{ $pageData['hero']['subtitle'] }}</p>

                <div class="hero-btn-group">
                    <a href="#audit" class="btn btn-lg btn-primary jsGetAudit" data-audit-type="{{ $pageData['hero']['audit_type'] }}">{{ $pageData['hero']['primary_btn_text'] }}</a>
                    <a href="#contact-form" class="btn btn-lg btn-ghost hero-ghost-light">{{ $pageData['hero']['secondary_btn_text'] }}</a>
                </div>

                @if(!empty($pageData['hero']['stats']))
                    <div class="hero-statistics-container">
                        @foreach($pageData['hero']['stats'] as $stat)
                            <div class="stat-badge-pill">
                                <span class="stat-badge-value">{{ $stat['value'] }}</span>
                                <span class="stat-badge-label">{{ $stat['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- VISUAL GALLERY SHOWCASE GRID (e.g. Target Markets) -->
    @if(!empty($pageData['showcase']['is_visible']) && $pageData['showcase']['is_visible'] === true)
        <section class="content-section" id="showcase-gallery">
            <div class="container">
                <div class="content-section-header">
                    <h2>{{ $pageData['showcase']['title'] }}</h2>
                    <p>{{ $pageData['showcase']['subtitle'] }}</p>
                </div>

                <div class="showcase-showcase-grid">
                    @foreach($pageData['showcase']['items'] as $item)
                        <article class="card showcase-display-card">
                            <img src="{{ asset($item['img']) }}" alt="{{ $item['alt'] }}" title="{{ $item['title'] }}" loading="lazy" decoding="async">
                            <h3>{{ $item['title'] }}</h3>
                            <p>{{ $item['desc'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CORE FEATURES SECTION -->
    <section class="content-section section-bg-alt" id="why">
        <div class="container">
            <div class="content-section-header">
                <h2>{{ $pageData['features']['title'] }}</h2>
                @if(!empty($pageData['features']['subtitle'])) <p>{{ $pageData['features']['subtitle'] }}</p> @endif
            </div>

            <div class="features-grid">
                @foreach($pageData['features']['items'] as $item)
                    <article class="card element-card">
                        <div class="element-card-icon" aria-hidden="true">
                            <i data-lucide="{{ $item['icon'] }}"></i>
                        </div>
                        <h3>{!! $item['title'] !!}</h3>
                        <p>{{ $item['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- STEP PROCESS SECTION -->
    <section class="content-section" id="process">
        <div class="container">
            <div class="content-section-header">
                <h2>{{ $pageData['process']['title'] }}</h2>
                @if(!empty($pageData['process']['subtitle'])) <p>{{ $pageData['process']['subtitle'] }}</p> @endif
            </div>

            <div class="process-steps-grid">
                @foreach($pageData['process']['items'] as $item)
                    <article class="card step-card">
                        <div class="step-card-badge">{{ $item['step'] }}</div>
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- INCLUDED DELIVERABLES COMPONENT -->
    <section class="content-section section-bg-dark" id="included">
        <div class="container">
            <div class="content-section-header header-light-theme">
                <h2>{{ $pageData['deliverables']['title'] }}</h2>
                <p>{{ $pageData['deliverables']['subtitle'] }}</p>
            </div>

            <div class="split-layout-grid">
                <div class="split-layout-content">
                    <ul class="deliverables-checklist text-white">
                        @foreach($pageData['deliverables']['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="split-layout-sidebar">
                    <div class="card deliverables-display-card info-dark-panel">
                        <h3>{{ $pageData['deliverables']['list_title'] }}</h3>
                        <p>{{ $pageData['deliverables']['list_desc'] }}</p>
                        @if(!empty($pageData['deliverables']['list_note']))
                            <p class="sidebar-panel-note-text">{{ $pageData['deliverables']['list_note'] }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTERLINKING CROSS-SELL SECTION -->
    <section class="content-section cross-sell-section" id="related-services">
        <div class="container">
            <div class="content-section-header">
                <h2>{{ $pageData['related_links']['title'] }}</h2>
                <p>{{ $pageData['related_links']['subtitle'] }}</p>
            </div>

            <div class="cross-sell-links-grid">
                @foreach($pageData['related_links']['items'] as $link)
                    <a class="cross-sell-navigation-card" href="{{ $link['url'] }}" aria-label="{{ $link['label'] }}">
                        <span>{{ $link['label'] }}</span>
                        <span class="cross-sell-card-arrow" aria-hidden="true">→</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- DETAILED ABOUT TEXT SECTION -->
    <section class="content-section editorial-about-section" id="about-segment">
        <div class="container">
            <div class="editorial-split-wrapper">
                <div class="editorial-main-column">
                    <h2>{{ $pageData['about']['main_title'] }}</h2>
                    @foreach($pageData['about']['paragraphs'] as $para)
                        <p>{{ $para }}</p>
                    @endforeach
                </div>

                <div class="editorial-sidebar-highlight">
                    <h3>{{ $pageData['about']['side_title'] }}</h3>
                    @if(!empty($pageData['about']['side_intro'])) <p>{{ $pageData['about']['side_intro'] }}</p> @endif

                    <ul class="sidebar-bullet-list">
                        @foreach($pageData['about']['side_bullets'] as $bullet)
                            <li>{{ $bullet }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- VALUE METRICS SECTION -->
    <section class="content-section section-bg-alt" id="growth-metrics">
        <div class="container">
            <div class="content-section-header">
                <h2>{{ $pageData['growth']['title'] }}</h2>
            </div>

            <div class="value-proposition-hero-card">
                @foreach($pageData['growth']['paragraphs'] as $para)
                    <p>{{ $para }}</p>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION (CTA) SECTION -->
    <section class="content-section focal-cta-section" id="cta">
        <div class="container">
            <div class="focal-cta-inner-box">
                <div class="focal-cta-text-wrapper">
                    <h2>{{ $pageData['cta']['title'] }}</h2>
                    <p>{{ $pageData['cta']['subtitle'] }}</p>
                </div>
                <div class="focal-cta-btn-wrapper">
                    <a href="#contact-form" class="btn btn-primary">{{ $pageData['cta']['primary_btn'] }}</a>
                    <a href="#showcase-gallery" class="btn btn-outline-light">{{ $pageData['cta']['secondary_btn'] }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSACTIONAL LEAD INTAKE FORM SECTION -->
    <section class="content-section lead-generation-section" id="contact-form">
        <div class="container">
            <div class="content-section-header">
                <h2>{{ $pageData['form']['title'] }}</h2>
                <p>{{ $pageData['form']['subtitle'] }}</p>
            </div>

            <form class="contact-form js-validate-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <input type="hidden" name="form_key" value="{{ $pageData['form']['key'] }}">
                <input type="hidden" name="source_page" value="{{ request()->path() }}">

                <div class="form-row">
                    <div class="form-field">
                        <label for="neutral_field_name">{{ $pageData['form']['fields']['name_label'] }}</label>
                        <input type="text" id="neutral_field_name" name="name" placeholder="{{ $pageData['form']['fields']['name_placeholder'] }}" required>
                    </div>

                    <div class="form-field">
                        <label for="neutral_field_email">{{ $pageData['form']['fields']['email_label'] }}</label>
                        <input type="email" id="neutral_field_email" name="email" placeholder="{{ $pageData['form']['fields']['email_placeholder'] }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <label for="neutral_field_website">{{ $pageData['form']['fields']['url_label'] }}</label>
                        <input type="url" id="neutral_field_website" name="payload[website]" placeholder="{{ $pageData['form']['fields']['url_placeholder'] }}">
                    </div>

                    <div class="form-field">
                        <label for="neutral_field_focus">{{ $pageData['form']['fields']['focus_label'] }}</label>
                        <input type="text" id="neutral_field_focus" name="payload[focus_target]" placeholder="{{ $pageData['form']['fields']['focus_placeholder'] }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-field form-field-full">
                        <label for="neutral_field_message">{{ $pageData['form']['fields']['msg_label'] }}</label>
                        <textarea id="neutral_field_message" name="message" rows="4" placeholder="{{ $pageData['form']['fields']['msg_placeholder'] }}" required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
            </form>
        </div>
    </section>

    <!-- FAQ MODULE SECTION -->
    @if(!empty($pageData['faq']['is_visible']) && $pageData['faq']['is_visible'] === true)
        <section class="content-section section-bg-alt accordion-faq-section" id="faq">
            <div class="container">
                <div class="content-section-header">
                    <h2>{{ $pageData['faq']['title'] }}</h2>
                </div>

                <div class="faq-central-wrap">
                    <div class="faq-clean-list">
                        @foreach($pageData['faq']['items'] as $index => $faq)
                            <details class="faq-interactive-item" {{ $index === 0 ? 'open' : '' }}>
                                <summary><strong>{{ $faq['q'] }}</strong></summary>
                                <div class="faq-collapse-content">
                                    <p>{{ $faq['a'] }}</p>
                                </div>
                            </details>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection