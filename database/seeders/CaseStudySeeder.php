<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $caseStudies = [
            [
                'slug' => 'london-legal-practice',
                'type' => 'gmb',
                'title' => 'London Legal Practice',
                'website' => null,
                'location' => 'London',
                'industry' => 'Legal Services',
                'duration' => '3 Months',
                'excerpt' => 'A London legal firm partnered with us to optimise their Google Business Profile and SEO strategy — driving visibility, quality enquiries and growth.',
                'card_image' => 'assets/images/case-studies/legal.webp',
                'hero_image' => 'assets/images/case-studies/legal.webp',
                'hero_title_main' => 'We Help Legal Firms Get Found.',
                'hero_title_em' => 'We Drive Results.',
                'hero_lead' => 'Cloud Technologies partnered with a legal firm to optimise their Google Business Profile and SEO strategy — driving more visibility, quality enquiries, and business growth over a 3-month period.',
                'hero_quote' => '"Stronger visibility. More enquiries. Business growth."',
                'chart_trend_label' => 'Website Clicks Trend (Apr–Jun 2026)',
                'chart_breakdown_label' => 'How People Discovered The Legal Firm',
                'cta_title' => 'Want Results <em>Like London Legal Practice?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today',
                'meta_title' => 'London Legal Practice - Case Study',
                'meta_description' => 'Cloud Technologies partnered with a legal firm to optimise their Google Business Profile and SEO strategy — driving more visibility, quality enquiries, and business growth over a 3-month period.',
                'is_published' => true,
                'sort_order' => 1,
                'stats' => [
                    ['value' => '18', 'label' => 'Calls', 'sort_order' => 1],
                    ['value' => '156', 'label' => 'Directions', 'sort_order' => 2],
                    ['value' => '20', 'label' => 'Website Clicks', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Calls', 'value' => '18', 'formatted' => '18', 'sub' => 'from Business Profile', 'delta' => '+1,700.0% vs Apr–Jun 2025', 'sort_order' => 1],
                    ['label' => 'Directions', 'value' => '156', 'formatted' => '156', 'sub' => 'requests from profile', 'delta' => '+9.1% vs Apr–Jun 2025', 'sort_order' => 2],
                    ['label' => 'Website Clicks', 'value' => '20', 'formatted' => '20', 'sub' => 'from Business Profile', 'delta' => '+400.0% vs Apr–Jun 2025', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '10', 'height' => '50%', 'label' => 'Apr 2026', 'sort_order' => 1],
                    ['value' => '20', 'height' => '100%', 'label' => 'May 2026', 'sort_order' => 2],
                    ['value' => '13', 'height' => '65%', 'label' => 'Jun 2026', 'sort_order' => 3],
                ],
                'breakdowns' => [
                    ['label' => 'Google Search — mobile', 'pct' => '68%', 'sort_order' => 1],
                    ['label' => 'Google Search — desktop', 'pct' => '22%', 'sort_order' => 2],
                    ['label' => 'Google Maps — mobile', 'pct' => '8%', 'sort_order' => 3],
                    ['label' => 'Google Maps — desktop', 'pct' => '2%', 'sort_order' => 4],
                ],
                'tasks' => [
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
            ],
            [
                'slug' => 'london-removals-co',
                'type' => 'gmb',
                'title' => 'London Removals Co.',
                'website' => null,
                'location' => 'London',
                'industry' => 'House Removals',
                'duration' => '3 Months',
                'excerpt' => 'Google Business Profile & SEO results achieved for a London house removal client — more calls, more enquiries, more leads.',
                'card_image' => 'assets/images/case-studies/removals.webp',
                'hero_image' => 'assets/images/case-studies/removals.webp',
                'hero_title_main' => 'We Help Removal Businesses Get Found.',
                'hero_title_em' => 'We Drive More Enquiries.',
                'hero_lead' => 'Cloud Technologies partnered with a London-based house removal business to optimise their Google Business Profile and SEO strategy — helping them generate more calls, website enquiries, and overall leads over a 3-month period.',
                'hero_quote' => '"10 GMB calls. 16 website enquiries. 26 total enquiries."',
                'chart_trend_label' => 'Lead Source Breakdown',
                'chart_breakdown_label' => 'Lead Source Split',
                'cta_title' => 'Want Results <em>Like London Removals Co.?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today',
                'meta_title' => 'London Removals Co. - Case Study',
                'meta_description' => 'Cloud Technologies partnered with a London-based house removal business to optimise their Google Business Profile and SEO strategy — helping them generate more calls, website enquiries, and overall leads over a 3-month period.',
                'is_published' => true,
                'sort_order' => 2,
                'stats' => [
                    ['value' => '10', 'label' => 'Calls', 'sort_order' => 1],
                    ['value' => '16', 'label' => 'Website Enquiries', 'sort_order' => 2],
                    ['value' => '26', 'label' => 'Total Enquiries', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Calls', 'value' => '10', 'formatted' => '10', 'sub' => 'from Google Business Profile', 'delta' => '3-month total', 'sort_order' => 1],
                    ['label' => 'Website Enquiries', 'value' => '16', 'formatted' => '16', 'sub' => 'submitted through the site', 'delta' => '3-month total', 'sort_order' => 2],
                    ['label' => 'Total Enquiries', 'value' => '26', 'formatted' => '26', 'sub' => 'combined leads generated', 'delta' => 'over 3 months', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '10', 'height' => '63%', 'label' => 'GMB Calls', 'sort_order' => 1],
                    ['value' => '16', 'height' => '100%', 'label' => 'Website Enquiries', 'sort_order' => 2],
                ],
                'breakdowns' => [
                    ['label' => 'Website Enquiries', 'pct' => '62%', 'sort_order' => 1],
                    ['label' => 'GMB Calls', 'pct' => '38%', 'sort_order' => 2],
                ],
                'tasks' => [
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
            ],
            [
                'slug' => 'criccounty',
                'type' => 'gmb',
                'title' => 'CricCounty',
                'website' => null,
                'location' => 'Ilford',
                'industry' => 'Cricket Equipment Retail',
                'duration' => '3 Months',
                'excerpt' => '3 months of SEO success for CricCounty, a cricket bat store in Ilford — we don\'t just promise results, we deliver them.',
                'card_image' => 'assets/images/case-studies/cricketstore.webp',
                'hero_image' => 'assets/images/case-studies/cricketstore.webp',
                'hero_title_main' => 'Real Results. Real Growth.',
                'hero_title_em' => 'Real Impact.',
                'hero_lead' => 'We don’t just promise results — we deliver them. Here’s how we boosted online visibility, engagement and reach for CricCounty, a cricket bat store in Ilford, over 3 months.',
                'hero_quote' => '"More visibility. More traffic. More customers."',
                'chart_trend_label' => 'Website Clicks Trend (Apr–Jun 2026)',
                'chart_breakdown_label' => 'How People Discovered Us',
                'cta_title' => 'Want Results <em>Like CricCounty?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today',
                'meta_title' => 'CricCounty - Case Study',
                'meta_description' => 'We don’t just promise results — we deliver them. Here’s how we boosted online visibility, engagement and reach for CricCounty, a cricket bat store in Ilford, over 3 months.',
                'is_published' => true,
                'sort_order' => 3,
                'stats' => [
                    ['value' => '146', 'label' => 'Calls', 'sort_order' => 1],
                    ['value' => '622', 'label' => 'Directions', 'sort_order' => 2],
                    ['value' => '1,156', 'label' => 'Website Clicks', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Calls', 'value' => '146', 'formatted' => '146', 'sub' => 'from Business Profile', 'delta' => '+13.2% vs Apr–Jun 2025', 'sort_order' => 1],
                    ['label' => 'Directions', 'value' => '622', 'formatted' => '622', 'sub' => 'requests from profile', 'delta' => '+3.8% vs Apr–Jun 2025', 'sort_order' => 2],
                    ['label' => 'Website Clicks', 'value' => '1156', 'formatted' => '1,156', 'sub' => 'from Business Profile', 'delta' => '+29.6% vs Apr–Jun 2025', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '380', 'height' => '76%', 'label' => 'Apr 2026', 'sort_order' => 1],
                    ['value' => '426', 'height' => '100%', 'label' => 'May 2026', 'sort_order' => 2],
                    ['value' => '400', 'height' => '82%', 'label' => 'Jun 2026', 'sort_order' => 3],
                ],
                'breakdowns' => [
                    ['label' => 'Google Search — mobile', 'pct' => '67%', 'sort_order' => 1],
                    ['label' => 'Google Search — desktop', 'pct' => '21%', 'sort_order' => 2],
                    ['label' => 'Google Maps — mobile', 'pct' => '10%', 'sort_order' => 3],
                    ['label' => 'Google Maps — desktop', 'pct' => '2%', 'sort_order' => 4],
                ],
                'tasks' => [
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
            ],
            [
                'slug' => 'top-maths-tutors',
                'type' => 'gmb',
                'title' => 'Top Maths Tutors',
                'website' => null,
                'location' => 'Greater London',
                'industry' => 'Education & Tutoring',
                'duration' => '15 Days',
                'excerpt' => 'A brand-new maths tutoring site went from zero to multiple Page 1 rankings and 4 AEO positions in just 15 days.',
                'card_image' => 'assets/images/case-studies/mathstutors.webp',
                'hero_image' => 'assets/images/case-studies/mathstutors.webp',
                'hero_title_main' => 'Real Rankings.',
                'hero_title_em' => 'In 15 Days.',
                'hero_lead' => 'Top Maths Tutors launched with zero organic traffic, zero rankings, and zero indexed pages. Within 15 days of a location-based SEO architecture across 7 landing pages, the brand-new domain secured multiple Page 1 rankings and 4 Answer Engine Optimisation positions — with only 3 of 7 pages indexed.',
                'hero_quote' => '"From a zero-authority domain to Page 1 and AEO positions in just 15 days."',
                'chart_trend_label' => 'Indexing & Ranking Progress',
                'chart_breakdown_label' => 'Visibility Breakdown',
                'cta_title' => 'Want Results <em>Like Top Maths Tutors?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today!',
                'meta_title' => 'Top Maths Tutors - Case Study',
                'meta_description' => 'Top Maths Tutors launched with zero organic traffic, zero rankings, and zero indexed pages.',
                'is_published' => true,
                'sort_order' => 4,
                'stats' => [
                    ['value' => '15 Days', 'label' => 'Page 1 Rankings', 'sort_order' => 1],
                    ['value' => '4', 'label' => 'AEO Positions', 'sort_order' => 2],
                    ['value' => '3 / 7', 'label' => 'Pages Indexed', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Page 1 Rankings', 'value' => '15', 'formatted' => '15 Days', 'sub' => 'from launch to live rankings', 'delta' => 'Wallington, Sutton, Wimbledon, Worcester Park', 'sort_order' => 1],
                    ['label' => 'AEO Positions', 'value' => '4', 'formatted' => '4', 'sub' => 'featured-snippet keywords', 'delta' => 'Worcester Park & Wimbledon searches', 'sort_order' => 2],
                    ['label' => 'Pages Indexed', 'value' => '3', 'formatted' => '3 / 7', 'sub' => 'location pages live', 'delta' => '4 more in indexing queue', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '3', 'height' => '40%', 'label' => 'Day 5', 'sort_order' => 1],
                    ['value' => '7', 'height' => '70%', 'label' => 'Day 10', 'sort_order' => 2],
                    ['value' => '15', 'height' => '100%', 'label' => 'Day 15', 'sort_order' => 3],
                ],
                'breakdowns' => [
                    ['label' => 'Page 1 Search Results', 'pct' => '75%', 'sort_order' => 1],
                    ['label' => 'AEO Position Wins', 'pct' => '25%', 'sort_order' => 2],
                ],
                'tasks' => [
                    '7 Location-Based Landing Pages',
                    'Technical SEO Audit & Schema Markup',
                    'Keyword Research & AEO Targeting',
                    'On-Page Meta & Heading Optimisation',
                    'Mobile-Responsive Site Structure',
                    'Google Search Console Indexing',
                ],
            ],
            [
                'slug' => 'minty-heating-plumbing',
                'type' => 'gmb',
                'title' => 'Minty Heating & Plumbing',
                'website' => null,
                'location' => 'Greater London & South East',
                'industry' => 'Plumbing & Heating',
                'duration' => '6 Months',
                'excerpt' => 'A brand-new plumbing business went from zero online presence to 60+ leads a month and top-3 rankings across 4 towns.',
                'card_image' => 'assets/images/case-studies/mintyplumbing.webp',
                'hero_image' => 'assets/images/case-studies/mintyplumbing.webp',
                'hero_title_main' => 'We Help Plumbers Get Found.',
                'hero_title_em' => 'We Drive Leads.',
                'hero_lead' => 'Minty Plumbing launched with a brand-new website and zero organic presence. A structured 6-month technical, on-page and local SEO campaign took them to top-3 rankings across Ashford, Slough, Twickenham and Staines, generating 60+ leads a month.',
                'hero_quote' => '"Ranked #1 for New Boiler Replacement in Twickenham — from zero to 60+ leads a month."',
                'chart_trend_label' => 'Growth Over the 6-Month Campaign',
                'chart_breakdown_label' => 'Town-by-Town Dominance',
                'cta_title' => 'Want Results <em>Like Minty Heating & Plumbing?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today!',
                'meta_title' => 'Minty Heating & Plumbing - Case Study',
                'meta_description' => 'Minty Plumbing launched with a brand-new website and zero organic presence. A structured 6-month technical, on-page and local SEO campaign took them to top-3 rankings across Ashford, Slough, Twickenham and Staines, generating 60+ leads a month.',
                'is_published' => true,
                'sort_order' => 5,
                'stats' => [
                    ['value' => '+300%', 'label' => 'Monthly Leads', 'sort_order' => 1],
                    ['value' => '+150%', 'label' => 'Click-Through Rate', 'sort_order' => 2],
                    ['value' => '+167%', 'label' => 'Conversion Rate', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Monthly Leads', 'value' => '300', 'formatted' => '+300%', 'sub' => '60+ leads/month achieved', 'delta' => '6-month campaign', 'sort_order' => 1],
                    ['label' => 'Click-Through Rate', 'value' => '150', 'formatted' => '+150%', 'sub' => 'improved search CTR', 'delta' => 'vs campaign start', 'sort_order' => 2],
                    ['label' => 'Conversion Rate', 'value' => '167', 'formatted' => '+167%', 'sub' => 'visitor-to-customer', 'delta' => 'vs campaign start', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '300', 'height' => '100%', 'label' => 'Monthly Leads', 'sort_order' => 1],
                    ['value' => '150', 'height' => '50%', 'label' => 'CTR', 'sort_order' => 2],
                    ['value' => '167', 'height' => '56%', 'label' => 'Conversion', 'sort_order' => 3],
                ],
                'breakdowns' => [
                    ['label' => 'Ashford Top Rankings', 'pct' => '25%', 'sort_order' => 1],
                    ['label' => 'Slough Top Rankings', 'pct' => '25%', 'sort_order' => 2],
                    ['label' => 'Twickenham Top Rankings', 'pct' => '25%', 'sort_order' => 3],
                    ['label' => 'Staines Top Rankings', 'pct' => '25%', 'sort_order' => 4],
                ],
                'tasks' => [
                    'Site Speed & Mobile Responsiveness Fixes',
                    'Local Keyword Research (Ahrefs)',
                    'On-Page Meta & Heading Rewrites',
                    '5-10 Blog Posts & Service Pages',
                    'Local Citations & Google Business Profile',
                    'Review Generation Strategy',
                ],
            ],
            [
                'slug' => 'schengen-visa-express',
                'type' => 'gmb',
                'title' => 'Schengen Visa Express',
                'website' => null,
                'location' => 'UK-Wide',
                'industry' => 'Visa Consultancy',
                'duration' => '10 Days',
                'excerpt' => 'A 10-day Meta Ads campaign delivered 42 qualified visa-consultancy leads through hyper-specific audience targeting and A/B testing.',
                'card_image' => 'assets/images/case-studies/schengenvisa.webp',
                'hero_image' => 'assets/images/case-studies/schengenvisa.webp',
                'hero_title_main' => 'Real Leads.',
                'hero_title_em' => 'In 10 Days.',
                'hero_lead' => 'Schengen Visa Express had no structured paid lead funnel. We built a hyper-targeted Meta Ads campaign for non-European UK residents, A/B tested two creatives, then scaled the winner — delivering 42 qualified leads in just 10 days.',
                'hero_quote' => '"42 qualified leads in 10 days, with a scalable framework proven for future growth."',
                'chart_trend_label' => 'Campaign Performance (10 Days)',
                'chart_breakdown_label' => 'Audience Interaction Metrics',
                'cta_title' => 'Want Results <em>Like Schengen Visa Express?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today!',
                'meta_title' => 'Schengen Visa Express - Case Study',
                'meta_description' => 'Schengen Visa Express had no structured paid lead funnel. We built a hyper-targeted Meta Ads campaign for non-European UK residents, A/B tested two creatives, then scaled the winner — delivering 42 qualified leads in just 10 days.',
                'is_published' => true,
                'sort_order' => 6,
                'stats' => [
                    ['value' => '42', 'label' => 'Leads Generated', 'sort_order' => 1],
                    ['value' => '6,884', 'label' => 'Cumulative Reach', 'sort_order' => 2],
                    ['value' => '10,876', 'label' => 'Impressions', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Leads Generated', 'value' => '42', 'formatted' => '42', 'sub' => 'qualified enquiries', 'delta' => '10-day campaign', 'sort_order' => 1],
                    ['label' => 'Cumulative Reach', 'value' => '6884', 'formatted' => '6,884', 'sub' => 'people reached', 'delta' => 'Facebook & Instagram', 'sort_order' => 2],
                    ['label' => 'Impressions', 'value' => '10876', 'formatted' => '10,876', 'sub' => 'cumulative impressions', 'delta' => 'across both creatives', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '10', 'height' => '30%', 'label' => 'Days 1-3', 'sort_order' => 1],
                    ['value' => '25', 'height' => '65%', 'label' => 'Days 4-7', 'sort_order' => 2],
                    ['value' => '42', 'height' => '100%', 'label' => 'Days 8-10', 'sort_order' => 3],
                ],
                'breakdowns' => [
                    ['label' => 'Ad Impressions', 'pct' => '61%', 'sort_order' => 1],
                    ['label' => 'Cumulative Reach', 'pct' => '38%', 'sort_order' => 2],
                    ['label' => 'Lead Conversions', 'pct' => '1%', 'sort_order' => 3],
                ],
                'tasks' => [
                    'Hyper-Specific Audience Targeting',
                    'A/B Creative Testing',
                    'Meta Instant Lead Forms',
                    'Daily CPL & CTR Monitoring',
                    'Budget Scaling on Winning Creative',
                ],
            ],
            [
                'slug' => 'goodfellas-recovery-breakdown',
                'type' => 'gmb',
                'title' => 'Goodfellas Recovery & Breakdown',
                'website' => null,
                'location' => 'Birmingham & Solihull',
                'industry' => 'Vehicle Recovery',
                'duration' => '3 Months',
                'excerpt' => 'An emergency vehicle recovery provider drove 4,300 impressions and 116 clicks with 99.3% new-user acquisition in a crowded local market.',
                'card_image' => 'assets/images/case-studies/goodfellas.webp',
                'hero_image' => 'assets/images/case-studies/goodfellas.webp',
                'hero_title_main' => 'Real Recovery.',
                'hero_title_em' => 'Real Visibility.',
                'hero_lead' => 'Goodfellas Recovery & Breakdown competed against national recovery chains in Birmingham and Solihull. Technical SEO, local content and Google Business Profile growth lifted them to 4,300 impressions and 116 clicks, with a 5-minute average engagement time.',
                'hero_quote' => '"5-minute engagement time and 99.3% new user acquisition in a highly competitive market."',
                'chart_trend_label' => 'Traffic & Impression Growth',
                'chart_breakdown_label' => 'User Acquisition Split',
                'cta_title' => 'Want Results <em>Like Goodfellas Recovery & Breakdown?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today!',
                'meta_title' => 'Goodfellas Recovery & Breakdown - Case Study',
                'meta_description' => 'Goodfellas Recovery & Breakdown competed against national recovery chains in Birmingham and Solihull. Technical SEO, local content and Google Business Profile growth lifted them to 4,300 impressions and 116 clicks, with a 5-minute average engagement time.',
                'is_published' => true,
                'sort_order' => 7,
                'stats' => [
                    ['value' => '4,300', 'label' => 'Impressions', 'sort_order' => 1],
                    ['value' => '116', 'label' => 'Clicks', 'sort_order' => 2],
                    ['value' => '5 min', 'label' => 'Engagement Time', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Impressions', 'value' => '4300', 'formatted' => '4,300', 'sub' => 'Google Search Console', 'delta' => 'Mar–Aug 2025', 'sort_order' => 1],
                    ['label' => 'Clicks', 'value' => '116', 'formatted' => '116', 'sub' => '2.7% average CTR', 'delta' => '65 from mobile', 'sort_order' => 2],
                    ['label' => 'Engagement Time', 'value' => '5', 'formatted' => '5 min', 'sub' => 'average session', 'delta' => '99.3% new users', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '1200', 'height' => '40%', 'label' => 'Month 1', 'sort_order' => 1],
                    ['value' => '2800', 'height' => '75%', 'label' => 'Month 2', 'sort_order' => 2],
                    ['value' => '4300', 'height' => '100%', 'label' => 'Month 3', 'sort_order' => 3],
                ],
                'breakdowns' => [
                    ['label' => 'New Users Acquired', 'pct' => '99.3%', 'sort_order' => 1],
                    ['label' => 'Returning Users', 'pct' => '0.7%', 'sort_order' => 2],
                ],
                'tasks' => [
                    'Mobile Speed & Responsiveness Fixes',
                    'Dedicated Service Pages (Towing, Accident Recovery)',
                    'Schema Markup for Services & FAQs',
                    'Google Business Profile Optimisation',
                    '50+ New Reviews Generated',
                    'Backlinks from Automotive Sites',
                ],
            ],
            [
                'slug' => 'the-learning-compass',
                'type' => 'gmb',
                'title' => 'The Learning Compass',
                'website' => null,
                'location' => 'United Kingdom',
                'industry' => 'Neurodivergent Tutoring',
                'duration' => '3 Months',
                'excerpt' => 'A specialist tutoring platform for neurodivergent learners reached #1 mobile / #2 desktop rankings with 11,100 search impressions.',
                'card_image' => 'assets/images/case-studies/learningcompass.webp',
                'hero_image' => 'assets/images/case-studies/learningcompass.webp',
                'hero_title_main' => 'Real Visibility.',
                'hero_title_em' => 'Real Connection.',
                'hero_lead' => 'The Learning Compass needed to connect with parents and educators seeking support for ADHD, Autism, Dyslexia and more. Targeted long-tail SEO and audience-aligned content pages drove 11,100 impressions, 311 clicks, and a #1 mobile ranking for their core keyword.',
                'hero_quote' => '"Ranked #1 on mobile and #2 on desktop for our core neurodivergent-tutoring keyword."',
                'chart_trend_label' => 'Search Impression Growth',
                'chart_breakdown_label' => 'Device Ranking Performance',
                'cta_title' => 'Want Results <em>Like The Learning Compass?</em>',
                'cta_btn_text' => 'Book a Free Consultation Today!',
                'meta_title' => 'The Learning Compass - Case Study',
                'meta_description' => 'The Learning Compass needed to connect with parents and educators seeking support for ADHD, Autism, Dyslexia and more. ',
                'is_published' => true,
                'sort_order' => 8,
                'stats' => [
                    ['value' => '11,100', 'label' => 'Search Impressions', 'sort_order' => 1],
                    ['value' => '7.68%', 'label' => 'Homepage CTR', 'sort_order' => 2],
                    ['value' => '#1 / #2', 'label' => 'Keyword Ranking', 'sort_order' => 3],
                ],
                'kpis' => [
                    ['label' => 'Search Impressions', 'value' => '11100', 'formatted' => '11,100', 'sub' => '2.8% overall CTR', 'delta' => '311 total clicks', 'sort_order' => 1],
                    ['label' => 'Homepage CTR', 'value' => '7.68', 'formatted' => '7.68%', 'sub' => '3,358 impressions', 'delta' => '258 clicks', 'sort_order' => 2],
                    ['label' => 'Keyword Ranking', 'value' => '1', 'formatted' => '#1 / #2', 'sub' => 'mobile / desktop', 'delta' => '"flexible tutor jobs for neurodivergent learners"', 'sort_order' => 3],
                ],
                'trends' => [
                    ['value' => '3000', 'height' => '35%', 'label' => 'Month 1', 'sort_order' => 1],
                    ['value' => '7200', 'height' => '70%', 'label' => 'Month 2', 'sort_order' => 2],
                    ['value' => '11100', 'height' => '100%', 'label' => 'Month 3', 'sort_order' => 3],
                ],
                'breakdowns' => [
                    ['label' => 'Mobile Ranking Position', 'pct' => '#1 Spot', 'sort_order' => 1],
                    ['label' => 'Desktop Ranking Position', 'pct' => '#2 Spot', 'sort_order' => 2],
                ],
                'tasks' => [
                    'Technical SEO & Mobile Optimisation',
                    'Audience-Aligned Landing Pages (ADHD, Autism, SEMH)',
                    'On-Page SEO & Internal Linking',
                    'Off-Page Authority & Guest Blogging',
                    'Long-Tail Keyword Targeting',
                ],
            ],
        ];

        foreach ($caseStudies as $data) {
            $stats = $data['stats'] ?? [];
            $kpis = $data['kpis'] ?? [];
            $trends = $data['trends'] ?? [];
            $breakdowns = $data['breakdowns'] ?? [];
            $tasks = $data['tasks'] ?? [];

            unset($data['stats'], $data['kpis'], $data['trends'], $data['breakdowns'], $data['tasks']);

            $caseStudy = CaseStudy::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );

            // Seed stats
            $caseStudy->stats()->delete();
            foreach ($stats as $st) {
                $caseStudy->stats()->create($st);
            }

            // Seed KPIs
            $caseStudy->kpis()->delete();
            foreach ($kpis as $kp) {
                $caseStudy->kpis()->create($kp);
            }

            // Seed Trends
            $caseStudy->chartTrends()->delete();
            foreach ($trends as $tr) {
                $caseStudy->chartTrends()->create($tr);
            }

            // Seed Breakdowns
            $caseStudy->chartBreakdowns()->delete();
            foreach ($breakdowns as $bd) {
                $caseStudy->chartBreakdowns()->create($bd);
            }

            // Seed Tasks
            $caseStudy->tasks()->delete();
            foreach ($tasks as $i => $tsk) {
                $caseStudy->tasks()->create([
                    'task' => $tsk,
                    'sort_order' => $i + 1,
                ]);
            }
        }
    }
}
