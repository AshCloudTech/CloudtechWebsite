@extends('layouts.cloudtech')

@php
    $caseStudies = [
        'london-legal-practice' => [
            'type' => 'gmb',
            'title' => 'London Legal Practice',
            'website' => null,
            'location' => 'London',
            'industry' => 'Legal Services',
            'duration' => '3 Months',
            'image' => 'assets/images/case-studies/legal.webp',
            'hero' => [
                'title_main' => 'We Help Legal Firms Get Found.',
                'title_em' => 'We Drive Results.',
                'lead' => 'Cloud Technologies partnered with a legal firm to optimise their Google Business Profile and SEO strategy — driving more visibility, quality enquiries, and business growth over a 3-month period.',
                'quote' => '"Stronger visibility. More enquiries. Business growth."',
            ],
            'kpis' => [
                ['label' => 'Calls', 'value' => '18', 'formatted' => '18', 'sub' => 'from Business Profile', 'delta' => '+1,700.0% vs Apr–Jun 2025'],
                ['label' => 'Directions', 'value' => '156', 'formatted' => '156', 'sub' => 'requests from profile', 'delta' => '+9.1% vs Apr–Jun 2025'],
                ['label' => 'Website Clicks', 'value' => '20', 'formatted' => '20', 'sub' => 'from Business Profile', 'delta' => '+400.0% vs Apr–Jun 2025'],
            ],
            'charts' => [
                'trend_label' => 'Website Clicks Trend (Apr–Jun 2026)',
                'trends' => [
                    ['value' => '10', 'height' => '50%', 'label' => 'Apr 2026'],
                    ['value' => '20', 'height' => '100%', 'label' => 'May 2026'],
                    ['value' => '13', 'height' => '65%', 'label' => 'Jun 2026'],
                ],
                'breakdown_label' => 'How People Discovered The Legal Firm',
                'breakdown' => [
                    ['label' => 'Google Search — mobile', 'pct' => '68%'],
                    ['label' => 'Google Search — desktop', 'pct' => '22%'],
                    ['label' => 'Google Maps — mobile', 'pct' => '8%'],
                    ['label' => 'Google Maps — desktop', 'pct' => '2%'],
                ],
            ],
            'what_we_did' => [
                'Google Business Profile Optimisation',
                'Local SEO Strategy & Implementation',
                'Keyword Optimisation',
                'Content Optimisation',
                'On-Page SEO Improvements',
                'Local Citations & Listings',
                'Review Generation Strategy',
                'Technical SEO Enhancements',
                'Performance Tracking & Reporting',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like London Legal Practice?</em>',
                'btn_text' => 'Book a Free Consultation Today',
            ],
        ],
        'london-removals-co' => [
            'type' => 'gmb',
            'title' => 'London Removals Co.',
            'website' => null,
            'location' => 'London',
            'industry' => 'House Removals',
            'duration' => '3 Months',
            'image' => 'assets/images/case-studies/removals.webp',
            'hero' => [
                'title_main' => 'We Help Removal Businesses Get Found.',
                'title_em' => 'We Drive More Enquiries.',
                'lead' => 'Cloud Technologies partnered with a London-based house removal business to optimise their Google Business Profile and SEO strategy — helping them generate more calls, website enquiries, and overall leads over a 3-month period.',
                'quote' => '"10 GMB calls. 16 website enquiries. 26 total enquiries."',
            ],
            'kpis' => [
                ['label' => 'Calls', 'value' => '10', 'formatted' => '10', 'sub' => 'from Google Business Profile', 'delta' => '3-month total'],
                ['label' => 'Website Enquiries', 'value' => '16', 'formatted' => '16', 'sub' => 'submitted through the site', 'delta' => '3-month total'],
                ['label' => 'Total Enquiries', 'value' => '26', 'formatted' => '26', 'sub' => 'combined leads generated', 'delta' => 'over 3 months'],
            ],
            'charts' => [
                'trend_label' => 'Lead Source Breakdown',
                'trends' => [
                    ['value' => '10', 'height' => '63%', 'label' => 'GMB Calls'],
                    ['value' => '16', 'height' => '100%', 'label' => 'Website Enquiries'],
                ],
                'breakdown_label' => 'Lead Source Split',
                'breakdown' => [
                    ['label' => 'Website Enquiries', 'pct' => '62%'],
                    ['label' => 'GMB Calls', 'pct' => '38%'],
                ],
            ],
            'what_we_did' => [
                'Google Business Profile Optimisation',
                'Local SEO Strategy & Implementation',
                'Keyword Optimisation',
                'Content Optimisation',
                'On-Page SEO Improvements',
                'Local Citations & Listings',
                'Review Generation Strategy',
                'Technical SEO Enhancements',
                'Performance Tracking & Reporting',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like London Removals Co.?</em>',
                'btn_text' => 'Book a Free Consultation Today',
            ],
        ],
        'criccounty' => [
            'type' => 'gmb',
            'title' => 'CricCounty',
            'website' => null,
            'location' => 'Ilford',
            'industry' => 'Cricket Equipment Retail',
            'duration' => '3 Months',
            'image' => 'assets/images/case-studies/cricketstore.webp',
            'hero' => [
                'title_main' => 'Real Results. Real Growth.',
                'title_em' => 'Real Impact.',
                'lead' => 'We don’t just promise results — we deliver them. Here’s how we boosted online visibility, engagement and reach for CricCounty, a cricket bat store in Ilford, over 3 months.',
                'quote' => '"More visibility. More traffic. More customers."',
            ],
            'kpis' => [
                ['label' => 'Calls', 'value' => '146', 'formatted' => '146', 'sub' => 'from Business Profile', 'delta' => '+13.2% vs Apr–Jun 2025'],
                ['label' => 'Directions', 'value' => '622', 'formatted' => '622', 'sub' => 'requests from profile', 'delta' => '+3.8% vs Apr–Jun 2025'],
                ['label' => 'Website Clicks', 'value' => '1156', 'formatted' => '1,156', 'sub' => 'from Business Profile', 'delta' => '+29.6% vs Apr–Jun 2025'],
            ],
            'charts' => [
                'trend_label' => 'Website Clicks Trend (Apr–Jun 2026)',
                'trends' => [
                    ['value' => '380', 'height' => '76%', 'label' => 'Apr 2026'],
                    ['value' => '426', 'height' => '100%', 'label' => 'May 2026'],
                    ['value' => '400', 'height' => '82%', 'label' => 'Jun 2026'],
                ],
                'breakdown_label' => 'How People Discovered Us',
                'breakdown' => [
                    ['label' => 'Google Search — mobile', 'pct' => '67%'],
                    ['label' => 'Google Search — desktop', 'pct' => '21%'],
                    ['label' => 'Google Maps — mobile', 'pct' => '10%'],
                    ['label' => 'Google Maps — desktop', 'pct' => '2%'],
                ],
            ],
            'what_we_did' => [
                'Google Business Profile Optimisation',
                'Local SEO Strategy & Implementation',
                'Keyword Optimisation',
                'Content Optimisation',
                'On-Page SEO Improvements',
                'Local Citations & Listings',
                'Review Generation Strategy',
                'Technical SEO Enhancements',
                'Performance Tracking & Reporting',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like CricCounty?</em>',
                'btn_text' => 'Book a Free Consultation Today',
            ],
        ],
        'top-maths-tutors' => [
            'type' => 'gmb',
            'title' => 'Top Maths Tutors',
            'website' => null,
            'location' => 'Greater London',
            'industry' => 'Education & Tutoring',
            'duration' => '15 Days',
            'image' => 'assets/images/case-studies/mathstutors.webp',
            'hero' => [
                'title_main' => 'Real Rankings.',
                'title_em' => 'In 15 Days.',
                'lead' => 'Top Maths Tutors launched with zero organic traffic, zero rankings, and zero indexed pages. Within 15 days of a location-based SEO architecture across 7 landing pages, the brand-new domain secured multiple Page 1 rankings and 4 Answer Engine Optimisation positions — with only 3 of 7 pages indexed.',
                'quote' => '"From a zero-authority domain to Page 1 and AEO positions in just 15 days."',
            ],
            'kpis' => [
                ['label' => 'Page 1 Rankings', 'value' => '15', 'formatted' => '15 Days', 'sub' => 'from launch to live rankings', 'delta' => 'Wallington, Sutton, Wimbledon, Worcester Park'],
                ['label' => 'AEO Positions', 'value' => '4', 'formatted' => '4', 'sub' => 'featured-snippet keywords', 'delta' => 'Worcester Park & Wimbledon searches'],
                ['label' => 'Pages Indexed', 'value' => '3', 'formatted' => '3 / 7', 'sub' => 'location pages live', 'delta' => '4 more in indexing queue'],
            ],
            'charts' => [
                'trend_label' => 'Indexing & Ranking Progress',
                'trends' => [
                    ['value' => '3', 'height' => '40%', 'label' => 'Day 5'],
                    ['value' => '7', 'height' => '70%', 'label' => 'Day 10'],
                    ['value' => '15', 'height' => '100%', 'label' => 'Day 15'],
                ],
                'breakdown_label' => 'Visibility Breakdown',
                'breakdown' => [
                    ['label' => 'Page 1 Search Results', 'pct' => '75%'],
                    ['label' => 'AEO Position Wins', 'pct' => '25%'],
                ],
            ],
            'what_we_did' => [
                '7 Location-Based Landing Pages',
                'Technical SEO Audit & Schema Markup',
                'Keyword Research & AEO Targeting',
                'On-Page Meta & Heading Optimisation',
                'Mobile-Responsive Site Structure',
                'Google Search Console Indexing',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like Top Maths Tutors?</em>',
                'btn_text' => 'Book a Free Consultation Today!',
            ],
        ],
        'minty-heating-plumbing' => [
            'type' => 'gmb',
            'title' => 'Minty Heating & Plumbing',
            'website' => null,
            'location' => 'Greater London & South East',
            'industry' => 'Plumbing & Heating',
            'duration' => '6 Months',
            'image' => 'assets/images/case-studies/mintyplumbing.webp',
            'hero' => [
                'title_main' => 'We Help Plumbers Get Found.',
                'title_em' => 'We Drive Leads.',
                'lead' => 'Minty Plumbing launched with a brand-new website and zero organic presence. A structured 6-month technical, on-page and local SEO campaign took them to top-3 rankings across Ashford, Slough, Twickenham and Staines, generating 60+ leads a month.',
                'quote' => '"Ranked #1 for New Boiler Replacement in Twickenham — from zero to 60+ leads a month."',
            ],
            'kpis' => [
                ['label' => 'Monthly Leads', 'value' => '300', 'formatted' => '+300%', 'sub' => '60+ leads/month achieved', 'delta' => '6-month campaign'],
                ['label' => 'Click-Through Rate', 'value' => '150', 'formatted' => '+150%', 'sub' => 'improved search CTR', 'delta' => 'vs campaign start'],
                ['label' => 'Conversion Rate', 'value' => '167', 'formatted' => '+167%', 'sub' => 'visitor-to-customer', 'delta' => 'vs campaign start'],
            ],
            'charts' => [
                'trend_label' => 'Growth Over the 6-Month Campaign',
                'trends' => [
                    ['value' => '300', 'height' => '100%', 'label' => 'Monthly Leads'],
                    ['value' => '150', 'height' => '50%', 'label' => 'CTR'],
                    ['value' => '167', 'height' => '56%', 'label' => 'Conversion'],
                ],
                'breakdown_label' => 'Town-by-Town Dominance',
                'breakdown' => [
                    ['label' => 'Ashford Top Rankings', 'pct' => '25%'],
                    ['label' => 'Slough Top Rankings', 'pct' => '25%'],
                    ['label' => 'Twickenham Top Rankings', 'pct' => '25%'],
                    ['label' => 'Staines Top Rankings', 'pct' => '25%'],
                ],
            ],
            'what_we_did' => [
                'Site Speed & Mobile Responsiveness Fixes',
                'Local Keyword Research (Ahrefs)',
                'On-Page Meta & Heading Rewrites',
                '5-10 Blog Posts & Service Pages',
                'Local Citations & Google Business Profile',
                'Review Generation Strategy',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like Minty Heating &amp; Plumbing?</em>',
                'btn_text' => 'Book a Free Consultation Today!',
            ],
        ],
        'schengen-visa-express' => [
            'type' => 'gmb',
            'title' => 'Schengen Visa Express',
            'website' => null,
            'location' => 'UK-Wide',
            'industry' => 'Visa Consultancy',
            'duration' => '10 Days',
            'image' => 'assets/images/case-studies/schengenvisa.webp',
            'hero' => [
                'title_main' => 'Real Leads.',
                'title_em' => 'In 10 Days.',
                'lead' => 'Schengen Visa Express had no structured paid lead funnel. We built a hyper-targeted Meta Ads campaign for non-European UK residents, A/B tested two creatives, then scaled the winner — delivering 42 qualified leads in just 10 days.',
                'quote' => '"42 qualified leads in 10 days, with a scalable framework proven for future growth."',
            ],
            'kpis' => [
                ['label' => 'Leads Generated', 'value' => '42', 'formatted' => '42', 'sub' => 'qualified enquiries', 'delta' => '10-day campaign'],
                ['label' => 'Cumulative Reach', 'value' => '6884', 'formatted' => '6,884', 'sub' => 'people reached', 'delta' => 'Facebook & Instagram'],
                ['label' => 'Impressions', 'value' => '10876', 'formatted' => '10,876', 'sub' => 'cumulative impressions', 'delta' => 'across both creatives'],
            ],
            'charts' => [
                'trend_label' => 'Campaign Performance (10 Days)',
                'trends' => [
                    ['value' => '10', 'height' => '30%', 'label' => 'Days 1-3'],
                    ['value' => '25', 'height' => '65%', 'label' => 'Days 4-7'],
                    ['value' => '42', 'height' => '100%', 'label' => 'Days 8-10'],
                ],
                'breakdown_label' => 'Audience Interaction Metrics',
                'breakdown' => [
                    ['label' => 'Ad Impressions', 'pct' => '61%'],
                    ['label' => 'Cumulative Reach', 'pct' => '38%'],
                    ['label' => 'Lead Conversions', 'pct' => '1%'],
                ],
            ],
            'what_we_did' => [
                'Hyper-Specific Audience Targeting',
                'A/B Creative Testing',
                'Meta Instant Lead Forms',
                'Daily CPL & CTR Monitoring',
                'Budget Scaling on Winning Creative',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like Schengen Visa Express?</em>',
                'btn_text' => 'Book a Free Consultation Today!',
            ],
        ],
        'goodfellas-recovery-breakdown' => [
            'type' => 'gmb',
            'title' => 'Goodfellas Recovery & Breakdown',
            'website' => null,
            'location' => 'Birmingham & Solihull',
            'industry' => 'Vehicle Recovery',
            'duration' => '3 Months',
            'image' => 'assets/images/case-studies/goodfellas.webp',
            'hero' => [
                'title_main' => 'Real Recovery.',
                'title_em' => 'Real Visibility.',
                'lead' => 'Goodfellas Recovery & Breakdown competed against national recovery chains in Birmingham and Solihull. Technical SEO, local content and Google Business Profile growth lifted them to 4,300 impressions and 116 clicks, with a 5-minute average engagement time.',
                'quote' => '"5-minute engagement time and 99.3% new user acquisition in a highly competitive market."',
            ],
            'kpis' => [
                ['label' => 'Impressions', 'value' => '4300', 'formatted' => '4,300', 'sub' => 'Google Search Console', 'delta' => 'Mar–Aug 2025'],
                ['label' => 'Clicks', 'value' => '116', 'formatted' => '116', 'sub' => '2.7% average CTR', 'delta' => '65 from mobile'],
                ['label' => 'Engagement Time', 'value' => '5', 'formatted' => '5 min', 'sub' => 'average session', 'delta' => '99.3% new users'],
            ],
            'charts' => [
                'trend_label' => 'Traffic & Impression Growth',
                'trends' => [
                    ['value' => '1200', 'height' => '40%', 'label' => 'Month 1'],
                    ['value' => '2800', 'height' => '75%', 'label' => 'Month 2'],
                    ['value' => '4300', 'height' => '100%', 'label' => 'Month 3'],
                ],
                'breakdown_label' => 'User Acquisition Split',
                'breakdown' => [
                    ['label' => 'New Users Acquired', 'pct' => '99.3%'],
                    ['label' => 'Returning Users', 'pct' => '0.7%'],
                ],
            ],
            'what_we_did' => [
                'Mobile Speed & Responsiveness Fixes',
                'Dedicated Service Pages (Towing, Accident Recovery)',
                'Schema Markup for Services & FAQs',
                'Google Business Profile Optimisation',
                '50+ New Reviews Generated',
                'Backlinks from Automotive Sites',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like Goodfellas Recovery &amp; Breakdown?</em>',
                'btn_text' => 'Book a Free Consultation Today!',
            ],
        ],
        'the-learning-compass' => [
            'type' => 'gmb',
            'title' => 'The Learning Compass',
            'website' => null,
            'location' => 'United Kingdom',
            'industry' => 'Neurodivergent Tutoring',
            'duration' => '3 Months',
            'image' => 'assets/images/case-studies/learningcompass.webp',
            'hero' => [
                'title_main' => 'Real Visibility.',
                'title_em' => 'Real Connection.',
                'lead' => 'The Learning Compass needed to connect with parents and educators seeking support for ADHD, Autism, Dyslexia and more. Targeted long-tail SEO and audience-aligned content pages drove 11,100 impressions, 311 clicks, and a #1 mobile ranking for their core keyword.',
                'quote' => '"Ranked #1 on mobile and #2 on desktop for our core neurodivergent-tutoring keyword."',
            ],
            'kpis' => [
                ['label' => 'Search Impressions', 'value' => '11100', 'formatted' => '11,100', 'sub' => '2.8% overall CTR', 'delta' => '311 total clicks'],
                ['label' => 'Homepage CTR', 'value' => '7.68', 'formatted' => '7.68%', 'sub' => '3,358 impressions', 'delta' => '258 clicks'],
                ['label' => 'Keyword Ranking', 'value' => '1', 'formatted' => '#1 / #2', 'sub' => 'mobile / desktop', 'delta' => '"flexible tutor jobs for neurodivergent learners"'],
            ],
            'charts' => [
                'trend_label' => 'Search Impression Growth',
                'trends' => [
                    ['value' => '3000', 'height' => '35%', 'label' => 'Month 1'],
                    ['value' => '7200', 'height' => '70%', 'label' => 'Month 2'],
                    ['value' => '11100', 'height' => '100%', 'label' => 'Month 3'],
                ],
                'breakdown_label' => 'Device Ranking Performance',
                'breakdown' => [
                    ['label' => 'Mobile Ranking Position', 'pct' => '#1 Spot'],
                    ['label' => 'Desktop Ranking Position', 'pct' => '#2 Spot'],
                ],
            ],
            'what_we_did' => [
                'Technical SEO & Mobile Optimisation',
                'Audience-Aligned Landing Pages (ADHD, Autism, SEMH)',
                'On-Page SEO & Internal Linking',
                'Off-Page Authority & Guest Blogging',
                'Long-Tail Keyword Targeting',
            ],
            'cta' => [
                'title' => 'Want Results <em>Like The Learning Compass?</em>',
                'btn_text' => 'Book a Free Consultation Today!',
            ],
        ],
    ];

    $case = $caseStudies[$slug] ?? null;

    $pageTitle = $case ? $case['title'] . ' - Case Study' : ($caseStudy->title ? "Case Study - {$caseStudy->title}" : 'Case Study');
    $metaTitle = $case ? $pageTitle : ($caseStudy->meta_title ?: $pageTitle);
    $metaDescription = $case ? $case['hero']['lead'] : ($caseStudy->meta_description ?: ($caseStudy->excerpt ?: 'Explore our case study and see how we delivered measurable results.'));

    $heroImg = ($case && !empty($case['image'])) ? asset($case['image']) : (filled($caseStudy->hero_image) ? asset($caseStudy->hero_image) : null);
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

            @if (!$case)
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
                            📍 {{ $case['location'] }} &bull; {{ $case['industry'] }} &bull; {{ $case['duration'] }}
                        </div>
                        <h1 class="gmb-detail-title">
                            {{ $case['hero']['title_main'] }}
                            <span class="gmb-detail-title-em">{!! $case['hero']['title_em'] !!}</span>
                        </h1>
                        <p class="gmb-detail-lead">{{ $case['hero']['lead'] }}</p>

                        <div class="gmb-detail-quote">
                            {!! $case['hero']['quote'] !!}
                        </div>
                    </div>

                    @if ($heroImg)
                        <div class="gmb-hero-visual">
                            <span class="gmb-hero-visual-badge">Verified Performance</span>
                            <img src="{{ $heroImg }}" alt="{{ $case['title'] }} Performance" loading="lazy">
                        </div>
                    @endif
                </header>

                <!-- 2. KPIS / KEY RESULTS -->
                @if (!empty($case['kpis']))
                    <section class="gmb-kpi-grid gmb-reveal" aria-label="Key Performance Indicators">
                        @foreach ($case['kpis'] as $kpi)
                            <div class="gmb-kpi-card">
                                <div class="gmb-kpi-label">{{ $kpi['label'] }}</div>
                                <div class="gmb-kpi-value gmb-counter" data-target="{{ $kpi['value'] }}" data-formatted="{{ $kpi['formatted'] ?? $kpi['value'] }}">0</div>
                                <div class="gmb-kpi-sub">{{ $kpi['sub'] }}</div>
                                <div class="gmb-kpi-delta">{{ $kpi['delta'] }}</div>
                            </div>
                        @endforeach
                    </section>
                @endif

                <!-- 3. CHARTS & ANALYTICS -->
                @if (!empty($case['charts']))
                    <section class="gmb-charts-grid gmb-reveal" aria-label="Performance Charts">
                        <div class="gmb-chart-card">
                            <h3 class="gmb-chart-heading">{{ $case['charts']['trend_label'] }}</h3>
                            <div class="gmb-trend-bars">
                                @foreach ($case['charts']['trends'] as $trend)
                                    <div class="gmb-trend-col">
                                        <div class="gmb-trend-num gmb-counter" data-target="{{ $trend['value'] }}">0</div>
                                        <div class="gmb-trend-bar-track">
                                            <div class="gmb-trend-bar-fill" data-height="{{ $trend['height'] }}" style="height: 0%;"></div>
                                        </div>
                                        <div class="gmb-trend-col-label">{{ $trend['label'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="gmb-chart-card">
                            <h3 class="gmb-chart-heading">{{ $case['charts']['breakdown_label'] }}</h3>
                            <div class="gmb-breakdown-list">
                                @foreach ($case['charts']['breakdown'] as $row)
                                    <div class="gmb-breakdown-row">
                                        <div class="gmb-breakdown-meta">
                                            <span>{{ $row['label'] }}</span>
                                            <span class="gmb-breakdown-pct">{{ $row['pct'] }}</span>
                                        </div>
                                        <div class="gmb-breakdown-track">
                                            <div class="gmb-breakdown-fill" data-width="{{ $row['pct'] }}" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif

                <!-- 4. WHAT WE DID STRATEGY -->
                @if (!empty($case['what_we_did']))
                    <section class="gmb-what-card gmb-reveal" aria-label="Optimization Strategy">
                        <h2 class="gmb-what-title">What We Executed</h2>
                        <ul class="gmb-what-grid">
                            @foreach ($case['what_we_did'] as $task)
                                <li>
                                    <span class="gmb-what-check">&#10003;</span>
                                    <span>{{ $task }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                <!-- 5. BOTTOM CALL TO ACTION BANNER -->
                @if (!empty($case['cta']))
                    <section class="gmb-detail-cta gmb-reveal">
                        <h2 class="gmb-detail-cta-title">
                            {!! $case['cta']['title'] !!}
                        </h2>

                        <div class="gmb-detail-cta-actions">
                            <a href="{{ url('/contact-us') }}" class="gmb-cta-btn-dark">
                                ✆ {{ $case['cta']['btn_text'] }}
                            </a>

                            <a href="https://wa.me/7427547394?text=Hi%2C%20I%20saw%20the%20{{ urlencode($case['title']) }}%20case%20study%20and%20want%20similar%20results." target="_blank" rel="noopener" class="gmb-cta-btn-whatsapp">
                                💬 Chat on WhatsApp
                            </a>
                        </div>
                    </section>
                @endif

            @endif

        </div>
    </div>
@endsection