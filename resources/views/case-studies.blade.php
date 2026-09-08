@extends('layouts.cloudtech')

@section('title', 'Case Studies | Cloud Technologies')
@section('meta_title', 'Case Studies | Cloud Technologies')
@section('meta_description', 'Real clients. Real rankings. Verifiable SEO and Google Business Profile results across cities and industries.')

@php
    $caseStudies = [
        [
            'slug' => 'london-legal-practice',
            'industry' => 'Legal Services',
            'location' => 'London',
            'title' => 'London Legal Practice',
            'description' => 'A London legal firm partnered with us to optimise their Google Business Profile and SEO strategy — driving visibility, quality enquiries and growth.',
            'image' => 'assets/images/case-studies/legal.webp',
            'stats' => [
                ['count' => '18', 'label' => 'Calls'],
                ['count' => '156', 'label' => 'Directions'],
                ['count' => '20', 'label' => 'Website Clicks'],
            ],
        ],
        [
            'slug' => 'london-removals-co',
            'industry' => 'House Removals',
            'location' => 'London',
            'title' => 'London Removals Co.',
            'description' => 'Google Business Profile & SEO results achieved for a London house removal client — more calls, more enquiries, more leads.',
            'image' => 'assets/images/case-studies/removals.webp',
            'stats' => [
                ['count' => '10', 'label' => 'Calls'],
                ['count' => '16', 'label' => 'Website Enquiries'],
                ['count' => '26', 'label' => 'Total Enquiries'],
            ],
        ],
        [
            'slug' => 'criccounty',
            'industry' => 'Cricket Equipment Retail',
            'location' => 'Ilford',
            'title' => 'CricCounty',
            'description' => '3 months of SEO success for CricCounty, a cricket bat store in Ilford — we don\'t just promise results, we deliver them.',
            'image' => 'assets/images/case-studies/cricketstore.webp',
            'stats' => [
                ['count' => '146', 'label' => 'Calls'],
                ['count' => '622', 'label' => 'Directions'],
                ['count' => '1,156', 'label' => 'Website Clicks'],
            ],
        ],
        [
            'slug' => 'top-maths-tutors',
            'industry' => 'Education & Tutoring',
            'location' => 'Greater London',
            'title' => 'Top Maths Tutors',
            'description' => 'A brand-new maths tutoring site went from zero to multiple Page 1 rankings and 4 AEO positions in just 15 days.',
            'image' => 'assets/images/case-studies/mathstutors.webp',
            'stats' => [
                ['static' => '15 Days', 'label' => 'Page 1 Rankings'],
                ['count' => '4', 'label' => 'AEO Positions'],
                ['static' => '3 / 7', 'label' => 'Pages Indexed'],
            ],
        ],
        [
            'slug' => 'minty-heating-plumbing',
            'industry' => 'Plumbing & Heating',
            'location' => 'Greater London & South East',
            'title' => 'Minty Heating & Plumbing',
            'description' => 'A brand-new plumbing business went from zero online presence to 60+ leads a month and top-3 rankings across 4 towns.',
            'image' => 'assets/images/case-studies/mintyplumbing.webp',
            'stats' => [
                ['static' => '+300%', 'label' => 'Monthly Leads'],
                ['static' => '+150%', 'label' => 'Click-Through Rate'],
                ['static' => '+167%', 'label' => 'Conversion Rate'],
            ],
        ],
        [
            'slug' => 'schengen-visa-express',
            'industry' => 'Visa Consultancy',
            'location' => 'UK-Wide',
            'title' => 'Schengen Visa Express',
            'description' => 'A 10-day Meta Ads campaign delivered 42 qualified visa-consultancy leads through hyper-specific audience targeting and A/B testing.',
            'image' => 'assets/images/case-studies/schengenvisa.webp',
            'stats' => [
                ['count' => '42', 'label' => 'Leads Generated'],
                ['static' => '6,884', 'label' => 'Cumulative Reach'],
                ['static' => '10,876', 'label' => 'Impressions'],
            ],
        ],
        [
            'slug' => 'goodfellas-recovery-breakdown',
            'industry' => 'Vehicle Recovery',
            'location' => 'Birmingham & Solihull',
            'title' => 'Goodfellas Recovery & Breakdown',
            'description' => 'An emergency vehicle recovery provider drove 4,300 impressions and 116 clicks with 99.3% new-user acquisition in a crowded local market.',
            'image' => 'assets/images/case-studies/goodfellas.webp',
            'stats' => [
                ['static' => '4,300', 'label' => 'Impressions'],
                ['count' => '116', 'label' => 'Clicks'],
                ['static' => '5 min', 'label' => 'Engagement Time'],
            ],
        ],
        [
            'slug' => 'the-learning-compass',
            'industry' => 'Neurodivergent Tutoring',
            'location' => 'United Kingdom',
            'title' => 'The Learning Compass',
            'description' => 'A specialist tutoring platform for neurodivergent learners reached #1 mobile / #2 desktop rankings with 11,100 search impressions.',
            'image' => 'assets/images/case-studies/learningcompass.webp',
            'stats' => [
                ['static' => '11,100', 'label' => 'Search Impressions'],
                ['static' => '7.68%', 'label' => 'Homepage CTR'],
                ['static' => '#1 / #2', 'label' => 'Keyword Ranking'],
            ],
        ],
    ];

    $industries = [
        'Legal Services',
        'House Removals',
        'Cricket Equipment Retail',
        'Education & Tutoring',
        'Plumbing & Heating',
        'Visa Consultancy',
        'Vehicle Recovery',
        'Neurodivergent Tutoring'
    ];
@endphp


       @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/case-studies/css/style.css') }}">
       @endpush
        @push('scripts')
        <script src="{{ asset('assets/case-studies/js/script.js') }}" defer></script>    
       @endpush
       @section('content')


@section('content')

<section class="hero" id="hero">
  <div class="wrap">
    <div class="crumbs"><a href="{{ url('/') }}">Home</a><span>›</span>Case Studies</div>

    <div class="hero-grid">
      <div>
        <h1 class="headline reveal">Real Clients.<span class="gold">Real Rankings.</span></h1>
        <p class="dek reveal">Verifiable results across cities and industries — matched to the businesses we serve.</p>
      </div>

      <aside class="stat-card reveal">
        <div class="grid4">
          <div><div class="num" data-count="200" data-suffix="+">0</div><div class="lbl">Clients Served</div></div>
          <div><div class="num" data-count="50" data-suffix="+">0</div><div class="lbl">UK Cities Ranked</div></div>
          <div><div class="num" data-count="100" data-suffix="+">0</div><div class="lbl">Websites Delivered</div></div>
          <div><div class="num" data-count="4.8" data-suffix="★">0</div><div class="lbl">Google Rating</div></div>
        </div>
        <div class="actions">
          <a class="btn btn-accent" href="{{ url('/#contact') }}">Let's Discuss</a>
          <a class="btn btn-outline" href="tel:+447835761525">📞 7427547394</a>
        </div>
        <div class="fine">🔒 Free consultation · No obligation · Reply within 4 hours</div>
      </aside>
    </div>

    <div class="industries-heading">8 CASE STUDIES ACROSS THESE INDUSTRIES</div>
    <div class="tag-grid">
      @foreach($industries as $ind)
        <span class="tag">{{ $ind }}</span>
      @endforeach
    </div>
    <div class="rating-line"><span class="stars">★★★★★</span> 4.8 average across 200+ clients</div>
  </div>
</section>

<section class="cards-section">
  <div class="wrap">
    <div class="cards-grid">
      @foreach($caseStudies as $case)
        <article class="case-card">
          <div class="photo">
            @if(!empty($case['image']))
              <img src="{{ asset($case['image']) }}" alt="{{ $case['title'] }}" loading="lazy">
            @endif
            <span class="badge">{{ $case['industry'] }}</span>
          </div>
          <div class="body">
            
            {{-- Updated Meta Header (One line, colored) --}}
            <div class="meta" title="{{ $case['location'] }} • {{ $case['industry'] }}">
              <span class="icon-pin">📍</span> 
              <span class="loc-text">{{ strtoupper($case['location']) }}</span> 
              <span class="separator">•</span> 
              <span class="ind-text">{{ strtoupper($case['industry']) }}</span>
            </div>

            <h3>{{ $case['title'] }}</h3>
            <p class="desc">{{ $case['description'] }}</p>
            <div class="stats3">
              @foreach($case['stats'] as $stat)
                <div>
                  @if(isset($stat['static']))
                    <div class="num">{{ $stat['static'] }}</div>
                  @else
                    <div class="num" data-count="{{ $stat['count'] }}" data-prefix="{{ $stat['prefix'] ?? '' }}" data-suffix="{{ $stat['suffix'] ?? '' }}">0</div>
                  @endif
                  <div class="lbl">{{ $stat['label'] }}</div>
                </div>
              @endforeach
            </div>
            
            {{-- Updated Action Link --}}
            <a class="view" href="{{ route('case.studies.detail', $case['slug']) }}">
                View case study <span>→</span>
            </a>
            
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="wrap">
    <div class="cta-banner">
      <div class="left">
        <div class="icon-circle">🔄</div>
        <h3>Ready to Achieve <em>Results Like These?</em></h3>
        <div class="points">
          <span>🌐 Proven SEO Strategies</span>
          <span>🏢 Higher Rankings</span>
          
        </div>
      </div>
      <a class="btn btn-dark" href="{{ url('/contact-us') }}">✆ Book a Free Consultation Today!</a>
    </div>
  </div>
</section>

@endsection

