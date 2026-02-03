@extends('layouts.cloudtech')

@section('title', 'Portfolio')
@section('meta_title', 'Cloud Technologies Ltd – Portfolio')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/portfolio/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/portfolio/js/script.js') }}" defer></script>
@endpush

@section('content')

<section class="hero portfolio-hero" id="portfolio">
<<<<<<< HEAD
    <div class="container hero-content">
        <h1>Our Portfolio of Websites</h1>
<<<<<<< HEAD
        <h3>Why Choose Cloud Technologies Ltd?</h3>
=======
        <h3 style="color:#2563EB;">Why Choose Cloud Technologies Ltd?</h3>
>>>>>>> 6dfdfa5547cfa012682939a709de56201ecee716
        <p class="subtitle">
            At Cloud Technologies Ltd, we've built and delivered dozens of websites across platforms like
            GoDaddy, Wix, Shopify, Squarespace, and WordPress — for businesses in education, law, eCommerce,
            healthcare, recruitment, logistics, and more. Below, you'll find a showcase of some of our recent
            projects, grouped by platform.
        </p>


    </div>
=======
  <div class="container hero-content">
    <h1>Our Portfolio of Websites</h1>
    <h3 style="color:#2563EB;">Why Choose Cloud Technologies Ltd?</h3>
    <p class="subtitle">
      We’ve built websites across platforms like GoDaddy, Wix, Shopify, Squarespace, WordPress, and custom builds.
      Below is a showcase of recent projects grouped by platform.
    </p>
  </div>
>>>>>>> d91eae08d425ff315f79cae59d3f847fe44c6014
</section>

<section class="section">
  <div class="container">

    {{-- Optional stats: keep static or make a table later --}}
    <div class="stats-row">
      <div class="stat"><strong>50+</strong><span>Websites Delivered</span></div>
      <div class="stat"><strong>6+</strong><span>Platforms Mastered</span></div>
      <div class="stat"><strong>15+</strong><span>Industries Served</span></div>
      <div class="stat"><strong>100%</strong><span>Client Satisfaction</span></div>
    </div>

    {{-- Filters --}}
    <div class="filter-bar">
      <button class="filter active" data-filter="all">All</button>
      @foreach($platforms as $p)
        <button class="filter" data-filter="{{ $p->slug }}">{{ $p->name }}</button>
      @endforeach
    </div>

    <div class="portfolio-grid">
      @forelse($items as $row)
        <article class="project-card" data-category="{{ $row->platform_slug }}">
          <div class="p-img"
               style="
                 @if($row->thumbnail_image)
                   background-image:url('{{ asset($row->thumbnail_image) }}');
                 @endif
               ">
            <span class="p-tag blue">{{ $row->platform_name }}</span>

            @if(!empty($row->industry))
              <span class="p-tag white">{{ $row->industry }}</span>
            @elseif(!empty($row->tags) && is_array($row->tags) && count($row->tags))
              <span class="p-tag white">{{ $row->tags[0] }}</span>
            @endif
          </div>

          <div class="card-content">
            <h3>{{ $row->title }}</h3>

            @if(!empty($row->short_description))
              <p>{{ $row->short_description }}</p>
            @endif

            <div class="card-footer">
              @if(!empty($row->website_url))
                <a href="{{ $row->website_url }}" class="p-link" target="_blank" rel="noopener">
                  View Website →
                </a>
              @else
                <span class="p-link" style="opacity:.65;">Website link unavailable</span>
              @endif

              @if($row->is_live)
                <span class="live-site">🌐 Live Site</span>
              @endif
            </div>
          </div>
        </article>
      @empty
        <p>No portfolio items found.</p>
      @endforelse
    </div>

  </div>
</section>

<section class="why-us" id="stats">
<<<<<<< HEAD
  <div class="container">
    <h2 class="section-title">Why Choose Cloud Technologies Ltd?</h2>

    <div class="why-grid">
      <!-- Item 1 -->
      <div class="why-item">
        <span class="icon">✓</span>
        <div>
          <h4>50+ websites delivered across multiple industries</h4>
          <p>
            Extensive experience across healthcare, education, travel,
            recruitment, and more.
          </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="why-item">
        <span class="icon">✓</span>
        <div>
          <h4>
            Platform flexibility: WordPress, Shopify, Wix, Squarespace, Laravel,
            GoDaddy
          </h4>
          <p>
            We work with all major platforms to find the perfect fit for your
            business needs.
          </p>
=======
    <div class="container">
        <div class="why-card">
            <h2>Why Choose Cloud Technologies Ltd?</h2>

            <div class="why-grid">
                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>50+ websites delivered across multiple industries</strong>
                        <p>
                            Extensive experience across healthcare, education, travel,
                            recruitment, and more.
                        </p>
                    </div>
                </div>

                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>Mobile-first, SEO-optimised designs</strong>
                        <p>
                            Every website is built with mobile users in mind and optimised
                            for search engines.
                        </p>
                    </div>
                </div>

                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>Platform flexibility</strong>
                        <p>
                            WordPress, Shopify, Wix, Squarespace, Laravel, GoDaddy.
                        </p>
                    </div>
                </div>

                <div class="why-item">
                    <span class="check">✓</span>
                    <div>
                        <strong>Fast delivery with ongoing support</strong>
                        <p>
                            Quick turnaround times with post-launch support and maintenance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="center">
                <a href="#" class="btn-primary">
                    Start Your Project →
                </a>
            </div>
>>>>>>> 6dfdfa5547cfa012682939a709de56201ecee716
        </div>
      </div>

      <!-- Item 3 -->
      <div class="why-item">
        <span class="icon">✓</span>
        <div>
          <h4>Mobile-first, SEO-optimised designs</h4>
          <p>
            Every website is built with mobile users in mind and optimised for
            search engines.
          </p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="why-item">
        <span class="icon">✓</span>
        <div>
          <h4>Fast delivery with ongoing support</h4>
          <p>
            Quick turnaround times with comprehensive post-launch support and
            maintenance.
          </p>
        </div>
      </div>
    </div>

    <div class="btn-wrapper">
      <a href="#" class="btn-primary">
        Start Your Project <span>→</span>
      </a>
    </div>
  </div>
</section>


<section class="cta" id="cta">
    <div class="container cta-inner">
        <h2>Ready to Build Your Website?</h2>
        <p>Join our satisfied clients and get a professional website that drives results. Contact us today for a free
            consultation and quote.</p>
        <div class="cta-actions">
            <a href="#" class="btn btn-light">Get Free Quote</a>
            <a href="#" class="btn btn-primary">View Case Studies</a>
        </div>
    </div>
</section>

@endsection