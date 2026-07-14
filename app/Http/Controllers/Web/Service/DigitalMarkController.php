<?php

namespace App\Http\Controllers\Web\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitalMarkController extends Controller
{
    public function nationalseo()
    {
        return view('web.services.digital-marketing.national-seo');
    }

    public function internationalseo()
    {
        return view('web.services.digital-marketing.international-seo');
    }

    public function tecnicalseo()
    {
        return view('web.services.digital-marketing.technical-seo');
    }

    public function contentseo()
    {
        return view('web.services.digital-marketing.content-seo');
    }

    public function googleMyBusinessOptimisation()
    {
        return view('web.services.digital-marketing.google-my-business-optimisation');
    }

    public function imageSeo()
    {
        return view('web.services.digital-marketing.image-seo');
    }

    public function localSeo()
    {
        return view('web.services.digital-marketing.local-seo');
    }

    public function ecommerceSeo()
    {
        return view('web.services.digital-marketing.ecommerce-seo');
    }

    public function onPageSeo()
    {
        return view('web.services.digital-marketing.on-page-seo');
    }

    public function offPageSeo()
    {
        return view('web.services.digital-marketing.off-page-seo');
    }

    public function metaAdsServices()
    {
        return view('web.services.digital-marketing.meta-ads-services');
    }

    public function ppcServices()
    {
        return view('web.services.digital-marketing.ppc-services');
    }

    public function smmServices()
    {
        return view('web.services.digital-marketing.smm-services');
    }
    public function internationalSeoCompany()
    { 
        $pageData = [
            'meta' => [
                'title' => 'International SEO Company UK | Global SEO Experts',
                'meta_title' => 'International SEO Company UK | Global SEO Experts.',
                'meta_description' => 'Expand globally with International SEO services in the UK. Improve multilingual rankings, boost global visibility, increase traffic, and generate quality leads.',
                'meta_keywords' => 'international SEO services UK, global SEO agency UK, multilingual SEO UK, geo-targeted SEO UK'
            ],
            'hero' => [
                'eyebrow' => 'International SEO Company',
                'title' => 'International SEO Company That <br>Helps Your Business Grow Worldwide',
                'subtitle' => 'Expand your business into international markets with a trusted International SEO Company that delivers data-driven SEO strategies to improve global search visibility, attract qualified international traffic, and generate sustainable business growth. Whether you\'re targeting one country or multiple regions, our international SEO experts help your business reach the right audience worldwide.',
                'audit_type' => 'international-seo-audit',
                'primary_btn_text' => 'Get Global Strategy',
                'secondary_btn_text' => 'Book Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/international-seo-services.webp',
                'banner_mobile' => 'assets/images/banners/mobile/international-seo-services.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Target International Markets',
                'subtitle' => 'Expand your global reach with a leading International SEO Company helping businesses grow across key international markets.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Strengthen your online presence across the UK with expert international SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach U.S. customers with targeted international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Increase visibility in Germany with multilingual SEO solutions.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French audiences through localised SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Expand your presence in Spain with effective international SEO.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers with country-specific SEO campaigns.']
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO Company?',
                'subtitle' => 'Partner with an experienced International SEO Company committed to helping your business achieve long-term international success through proven SEO strategies.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'Global SEO Expertise', 'desc' => 'Improve your visibility across international search engines and global markets.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites to reach customers in different languages.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific Targeting', 'desc' => 'Target the right audience using country and region-specific SEO strategies.'],
                    ['icon' => 'trending-up', 'title' => 'Sustainable Business Growth', 'desc' => 'Generate more international traffic, enquiries, and revenue through ongoing optimisation.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Company Process',
                'subtitle' => 'Our proven international SEO process helps businesses improve rankings, increase visibility, and grow across multiple countries.',
                'items' => [
                    ['step' => '1', 'title' => 'International Market Research', 'desc' => 'Research target countries, competitors, and international keyword opportunities.'],
                    ['step' => '2', 'title' => 'SEO Strategy Development', 'desc' => 'Develop a tailored international SEO strategy based on your business goals.'],
                    ['step' => '3', 'title' => 'SEO Implementation', 'desc' => 'Implement technical SEO, multilingual optimisation, localisation, and hreflang tags.'],
                    ['step' => '4', 'title' => 'Performance Optimisation', 'desc' => 'Monitor rankings, analyse performance, and continuously optimise for better results.']
                ]
            ],
            'deliverables' => [
                'title' => 'Complete International SEO Company Services',
                'subtitle' => 'Our comprehensive International SEO Company services help businesses expand confidently into global markets.',
                'list_title' => 'International SEO Strategy Snapshot',
                'list_desc' => 'Gain valuable insights into your website\'s international performance with a detailed SEO strategy review.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, multilingual recommendations, technical SEO improvements, competitor analysis, roadmap for increasing worldwide visibility, traffic, and conversions',
                'items' => [
                    'International keyword research and competitor analysis',
                    'Multilingual SEO and website localisation',
                    'Technical SEO, including hreflang implementation',
                    'Country-specific and geo-targeted SEO strategies',
                    'International link-building and authority development',
                    'Ongoing reporting, tracking, and SEO optimisation'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/seo-service-uk', 'label' => 'SEO Services UK'],
                    ['url' => '/national-seo-service-uk', 'label' => 'National SEO Services UK'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services UK'],
                    ['url' => '/content-seo-service-uk', 'label' => 'Content SEO Services UK'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services UK']
                ]
            ],
            'about' => [
                'main_title' => 'What Is an International SEO Company?',
                'paragraphs' => [
                    'An International SEO Company specialises in helping businesses improve their online visibility across multiple countries, languages, and international search engines. Unlike traditional SEO, international SEO focuses on ensuring your website appears in the right country, language, and search results for users across different global markets.',
                    'An experienced International SEO Company develops customised SEO strategies that include international keyword research, multilingual optimisation, hreflang implementation, technical SEO, localisation, country targeting, and content optimisation. These strategies help search engines understand your target audience while delivering the best possible user experience across every region.',
                    'Whether you\'re expanding into Europe, North America, Asia, or worldwide markets, partnering with an International SEO Company helps your business increase global rankings, attract qualified international customers, and achieve long-term online growth.'
                ],
                'side_title' => 'Who Needs an International SEO Company?',
                'side_intro' => 'If your customers are located in different countries or speak different languages, an International SEO Company provides the expertise needed to grow your business internationally.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies serving global customers',
                    'Businesses expanding into new countries',
                    'Companies operating multilingual websites',
                    'B2B organisations targeting overseas markets',
                    'Brands competing across multiple international regions'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why an International SEO Company Is Essential for Global Growth',
                'paragraphs' => [
                    'Expanding into international markets requires more than translating your website. Search engines need clear signals about which countries and languages your website targets to display the correct pages to the right users.',
                    'A professional International SEO Company implements advanced SEO strategies such as hreflang tags, multilingual optimisation, country-specific keyword research, technical SEO, and localised content to maximise your global search performance. These improvements increase international visibility, improve user experience, generate qualified traffic, and help your business compete successfully in global markets.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Globally?',
                'subtitle' => 'Partner with a trusted International SEO Company and unlock new opportunities in international markets with customised global SEO strategies.',
                'primary_btn' => 'Contact Us Now',
                'secondary_btn' => 'Explore Global Markets'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Experts',
                'subtitle' => 'Share your business goals and target countries with our team, and we\'ll develop a tailored international SEO strategy designed to improve your global visibility, increase international traffic, and drive sustainable business growth.',
                'key' => 'seo_international_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Countries',
                    'focus_placeholder' => 'US, DE, FR, ES, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO Company FAQs',
                'items' => [
                    ['q' => '1. What does an International SEO Company do?', 'a' => 'An International SEO Company helps businesses improve their visibility across multiple countries and languages through international keyword research, multilingual SEO, technical optimisation, hreflang implementation, geo-targeting, and localisation strategies.'],
                    ['q' => '2. Why should I hire an International SEO Company?', 'a' => 'Hiring an International SEO Company ensures your website is optimised for global audiences, helping you improve international rankings, increase organic traffic, attract qualified leads, and grow your business in overseas markets.'],
                    ['q' => '3. How is an International SEO Company different from a standard SEO agency?', 'a' => 'A standard SEO agency focuses on one country, while an International SEO Company specialises in multilingual SEO, international keyword research, country targeting, localisation, hreflang implementation, and global search optimisation.'],
                    ['q' => '4. How long does it take to see results from an International SEO Company?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on competition, target markets, website authority, and the overall SEO strategy. International SEO delivers sustainable long-term growth through continuous optimisation.'],
                    ['q' => '5. Can an International SEO Company optimise multilingual websites?', 'a' => 'Yes. An International SEO Company can optimise multilingual websites using hreflang tags, language-specific keyword research, localised content, and technical SEO to ensure users see the correct version of your website.'],
                    ['q' => '6. Which businesses benefit from an International SEO Company?', 'a' => 'International SEO is ideal for eCommerce businesses, SaaS companies, exporters, manufacturers, B2B organisations, franchises, travel companies, and any business looking to expand into international markets and increase global online visibility.']
                ]
            ]
        ];
        return view('web.services.digital-marketing.international-seo-company',compact('pageData'));
    }
        public function globalseo()
    { 
        $pageData = [
            'meta' => [
                'title' => 'Global SEO Services UK | International SEO Agency',
                'meta_title' => 'Global SEO Services UK | International SEO Agency.',
                'meta_description' => 'Expand your reach worldwide with expert Global SEO services in the UK. Improve international rankings, multilingual SEO, organic traffic, and generate quality leads.',
                'meta_keywords' => 'global SEO services UK, international SEO agency UK, multilingual SEO, global keyword research, hreflang setup'
            ],
            'hero' => [
                'eyebrow' => 'Global SEO Services',
                'title' => 'Global SEO Services That <br>Help Your Business Reach Customers Worldwide',
                'subtitle' => 'Expand your business beyond borders with professional Global SEO Services designed to improve your visibility across international search engines, attract qualified organic traffic, and generate long-term business growth. Whether you\'re targeting a single overseas market or multiple countries, our tailored global SEO strategies help your business connect with the right audience worldwide.',
                'audit_type' => 'global-seo-audit',
                'primary_btn_text' => 'Get a Free SEO Consultation',
                'secondary_btn_text' => 'Request a Custom Strategy',
                'banner_desktop' => 'assets/images/banners/desktop/image-seo-services.webp',
                'banner_mobile' => 'assets/images/banners/mobile/image-seo-services.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Global Markets We Help You Reach',
                'subtitle' => 'Grow your online presence across leading international markets with customised global SEO strategies.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'Global SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your visibility and generate qualified leads across the UK.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'Global SEO United States', 'title' => 'United States', 'desc' => 'Reach high-intent customers throughout the United States with targeted SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'Global SEO Canada', 'title' => 'Canada', 'desc' => 'Build your online presence and attract customers across Canadian markets.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'Global SEO Australia', 'title' => 'Australia', 'desc' => 'Expand your business with SEO strategies tailored to Australian search behaviour.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'Global SEO Germany', 'title' => 'Germany', 'desc' => 'Improve rankings through multilingual SEO and localised content.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'Global SEO France', 'title' => 'France', 'desc' => 'Connect with French-speaking audiences using country-specific optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'Global SEO Spain', 'title' => 'Spain', 'desc' => 'Increase organic visibility with Spanish-language SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'Global SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers through targeted keyword optimisation and localisation.']
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our Global SEO Services?',
                'subtitle' => 'Our experienced SEO specialists develop customised strategies that help businesses grow across international markets while delivering measurable, long-term results.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'International SEO Expertise', 'desc' => 'Improve your rankings across multiple countries and global search engines.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language Optimisation', 'desc' => 'Optimise multilingual websites to reach customers in their preferred language.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific SEO', 'desc' => 'Target individual countries and regions with tailored keyword strategies.'],
                    ['icon' => 'trending-up', 'title' => 'Sustainable Organic Growth', 'desc' => 'Increase international traffic, enquiries, and conversions through continuous optimisation.']
                ]
            ],
            'process' => [
                'title' => 'Our Global SEO Process',
                'subtitle' => 'Our proven process helps businesses improve search visibility and achieve sustainable growth across international markets.',
                'items' => [
                    ['step' => '1', 'title' => 'Market & Competitor Research', 'desc' => 'Identify your target countries, competitors, customer behaviour, and global keyword opportunities.'],
                    ['step' => '2', 'title' => 'SEO Strategy Development', 'desc' => 'Create a customised SEO roadmap aligned with your business objectives and international expansion plans.'],
                    ['step' => '3', 'title' => 'Technical SEO Implementation', 'desc' => 'Optimise website structure, hreflang tags, Core Web Vitals, indexing, and multilingual architecture.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Develop and optimise content for regional audiences using local search intent and language preferences.'],
                    ['step' => '5', 'title' => 'Authority Building', 'desc' => 'Strengthen your website\'s credibility through high-quality international backlinks and digital PR.'],
                    ['step' => '6', 'title' => 'Reporting & Continuous Optimisation', 'desc' => 'Track rankings, monitor performance, and continually refine your SEO strategy for long-term success.']
                ]
            ],
            'deliverables' => [
                'title' => 'Our Global SEO Services Include',
                'subtitle' => 'Our comprehensive services are designed to help businesses compete successfully in international markets.',
                'list_title' => 'Global SEO Strategy Snapshot',
                'list_desc' => 'Receive a comprehensive review of your international SEO performance.',
                'list_note' => 'Includes: Global SEO audit, international keyword opportunities, technical SEO recommendations, competitor benchmarking, website localisation review, multilingual SEO insights, growth roadmap for worldwide expansion',
                'items' => [
                    'Global SEO audits',
                    'International keyword research',
                    'Competitor analysis',
                    'Technical SEO optimisation',
                    'Hreflang implementation',
                    'Website localisation',
                    'Multilingual SEO',
                    'International content optimisation',
                    'Country-specific SEO campaigns',
                    'Global link-building strategies',
                    'Performance monitoring',
                    'Monthly SEO reporting'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of Global SEO Services',
                'subtitle' => 'A successful global SEO strategy helps your business expand into new markets while increasing online visibility and revenue.',
                'items' => [
                    'Improve international search rankings',
                    'Increase qualified organic traffic',
                    'Reach customers in multiple countries',
                    'Enhance multilingual user experience',
                    'Build global brand awareness',
                    'Generate more enquiries and sales',
                    'Reduce dependence on paid advertising',
                    'Achieve sustainable long-term growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/seo-service-uk', 'label' => 'SEO Services UK'],
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/national-seo-service-uk', 'label' => 'National SEO Services'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services'],
                    ['url' => '/content-seo-service-uk', 'label' => 'Content SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Are Global SEO Services?',
                'paragraphs' => [
                    'Global SEO Services focus on improving your website\'s visibility across multiple countries, languages, and international search engines. Unlike traditional SEO, global SEO requires advanced strategies that help search engines understand which content should be shown to users based on their language, country, and search intent.',
                    'A successful global SEO campaign combines technical optimisation, multilingual SEO, localisation, international keyword research, content optimisation, and authority building. These strategies ensure your business reaches the right audience in every target market while delivering an excellent user experience.',
                    'Whether you\'re expanding into Europe, North America, Asia, or other international regions, global SEO helps increase rankings, attract qualified traffic, and support sustainable business growth.'
                ],
                'side_title' => 'Who Can Benefit from Global SEO Services?',
                'side_intro' => 'Growing internationally requires more than simply translating your website. Search engines must understand which version of your content should appear for users in different countries and languages.',
                'side_bullets' => [
                    'eCommerce businesses',
                    'SaaS companies',
                    'Manufacturers',
                    'Export businesses',
                    'B2B organisations',
                    'Technology companies',
                    'Professional service providers',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'International franchises'
                ],
                'side_note' => 'Our Global SEO Services include technical optimisation, localisation, multilingual content, country-specific keyword research, and ongoing performance monitoring to help your website compete successfully in international search results while driving qualified traffic and conversions.'
            ],
            'growth' => [
                'title' => 'Why Global SEO Matters',
                'paragraphs' => [
                    'Growing internationally requires more than simply translating your website. Search engines must understand which version of your content should appear for users in different countries and languages.',
                    'Our Global SEO Services include technical optimisation, localisation, multilingual content, country-specific keyword research, and ongoing performance monitoring to help your website compete successfully in international search results while driving qualified traffic and conversions.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Worldwide?',
                'subtitle' => 'Partner with our global SEO specialists and unlock new opportunities in international markets with customised SEO strategies designed for sustainable growth.',
                'primary_btn' => 'Book Your Free Consultation',
                'secondary_btn' => 'Request a Custom SEO Proposal'
            ],
            'form' => [
                'title' => 'Talk to Our Global SEO Experts',
                'subtitle' => 'Tell us about your business goals and target markets, and we\'ll create a tailored global SEO strategy that improves your search visibility, attracts international traffic, and delivers measurable business growth.',
                'key' => 'seo_global_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Markets',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global rankings, organic lead generation, localization fixes, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'Global SEO Services FAQs',
                'items' => [
                    ['q' => '1. What are Global SEO Services?', 'a' => 'Global SEO Services help businesses improve their search visibility across multiple countries and languages through technical SEO, multilingual optimisation, localisation, and international keyword research.'],
                    ['q' => '2. How do Global SEO Services work?', 'a' => 'They combine technical optimisation, content localisation, international keyword targeting, hreflang implementation, and ongoing SEO improvements to increase worldwide visibility.'],
                    ['q' => '3. Who needs Global SEO Services?', 'a' => 'Businesses targeting customers in multiple countries, including eCommerce stores, SaaS companies, exporters, manufacturers, and multinational organisations.'],
                    ['q' => '4. How long does Global SEO take?', 'a' => 'Most businesses begin seeing measurable improvements within three to six months, depending on competition, website authority, and target markets.'],
                    ['q' => '5. Do you optimise multilingual websites?', 'a' => 'Yes. We optimise multilingual websites using language-specific keyword research, localisation, hreflang implementation, and technical SEO best practices.'],
                    ['q' => '6. Can Global SEO increase international sales?', 'a' => 'Yes. By improving your visibility in international search results, Global SEO helps attract qualified traffic, increase enquiries, and generate more sales from overseas markets.']
                ]
            ]
        ];
        return view('web.services.digital-marketing.global-seo-services-uk',compact('pageData'));
    }

    public function internationalseowebsites()
    {
        $pageData = [
            'meta' => [
                'title' => 'International SEO Websites UK | Global Website SEO Experts',
                'meta_title' => 'International SEO Websites UK | Global Website SEO Experts.',
                'meta_description' => 'Build and optimise international SEO websites in the UK. Improve multilingual rankings, global search visibility, organic traffic, and generate qualified international traffic.',
                'meta_keywords' => 'international SEO websites UK, global website SEO experts, multilingual website optimization, hreflang structure website'
            ],
            'hero' => [
                'eyebrow' => 'International SEO Websites',
                'title' => 'International SEO Websites That <br>Help Businesses Grow Across Global Markets',
                'subtitle' => 'Build a strong international online presence with professionally optimised International SEO Websites designed to attract customers from multiple countries and languages. Whether you\'re launching a new global website or optimising an existing one, our international SEO solutions help improve search visibility, increase qualified organic traffic, and generate sustainable business growth across worldwide markets.',
                'audit_type' => 'international-seo-websites-audit',
                'primary_btn_text' => 'Get a Free International SEO Website Audit',
                'secondary_btn_text' => 'Book a Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/seo.webp',
                'banner_mobile' => 'assets/images/banners/mobile/seo.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => 'Multi-Language', 'label' => 'SEO'],
                    ['value' => 'Global Search', 'label' => 'Optimisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'International Markets We Optimise For',
                'subtitle' => 'Expand your website\'s reach and connect with customers across leading international markets.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Optimise your website to improve visibility across UK search results.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach customers throughout the U.S. with country-specific SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Increase your website\'s visibility and attract qualified Canadian visitors.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Grow your online presence with SEO tailored to Australian search behaviour.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Improve rankings with multilingual SEO and German-language website optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French-speaking audiences using localised website content.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Increase visibility across Spain with Spanish-language SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers through targeted website optimisation and localisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Expand into the UAE with region-specific SEO and multilingual website optimisation.'],
                    
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO Website Services?',
                'subtitle' => 'Our team creates SEO-friendly international websites that are built to perform across multiple countries, languages, and search engines.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'Global Website Optimisation', 'desc' => 'Improve your website\'s visibility across international search engines and markets.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites to deliver the best experience for users worldwide.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific Targeting', 'desc' => 'Target individual countries using localised content, keywords, and technical SEO.'],
                    ['icon' => 'settings', 'title' => 'Technical SEO Excellence', 'desc' => 'Implement hreflang tags, structured website architecture, and advanced technical optimisation.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Website Process',
                'subtitle' => 'Our proven process ensures your website is fully optimised for global search performance.',
                'items' => [
                    ['step' => '1', 'title' => 'Website Audit', 'desc' => 'Analyse your existing website, technical SEO, content, and international performance.'],
                    ['step' => '2', 'title' => 'International Keyword Research', 'desc' => 'Identify high-value keywords across your target countries and languages.'],
                    ['step' => '3', 'title' => 'Website Optimisation', 'desc' => 'Implement technical SEO, multilingual optimisation, localisation, and hreflang tags.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Optimise website content for local languages, search intent, and regional audiences.'],
                    ['step' => '5', 'title' => 'International Authority Building', 'desc' => 'Strengthen your website with high-quality international backlinks and digital authority.'],
                    ['step' => '6', 'title' => 'Reporting & Continuous Optimisation', 'desc' => 'Monitor rankings, analyse traffic, and continuously improve your website\'s global performance.']
                ]
            ],
            'deliverables' => [
                'title' => 'Complete International SEO Website Services',
                'subtitle' => 'Our comprehensive services help businesses maximise their international online visibility.',
                'list_title' => 'International SEO Website Audit',
                'list_desc' => 'Understand your website\'s international SEO performance with a detailed website review.',
                'list_note' => 'Includes: International SEO audit, website technical analysis, global keyword opportunities, competitor analysis, hreflang recommendations, content localisation review, technical SEO improvements, growth roadmap for international success',
                'items' => [
                    'International SEO website audits',
                    'Technical SEO optimisation',
                    'International keyword research',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific landing pages',
                    'International content optimisation',
                    'Core Web Vitals optimisation',
                    'Global link-building strategies',
                    'International eCommerce SEO',
                    'SEO performance reporting',
                    'Competitor analysis',
                    'Ongoing SEO management'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of International SEO Websites',
                'subtitle' => 'A professionally optimised international website helps your business compete successfully in global markets.',
                'items' => [
                    'Improve international search rankings',
                    'Increase worldwide organic traffic',
                    'Reach customers in multiple countries',
                    'Enhance multilingual user experience',
                    'Build global brand awareness',
                    'Generate more qualified leads',
                    'Increase international conversions',
                    'Improve website performance',
                    'Strengthen domain authority',
                    'Achieve sustainable long-term growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/seo-service-uk', 'label' => 'SEO Services UK'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/content-seo-service-uk', 'label' => 'Content SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Are International SEO Websites?',
                'paragraphs' => [
                    'International SEO websites are websites specifically optimised to perform across multiple countries, languages, and international search engines. They use advanced SEO strategies such as multilingual optimisation, localisation, technical SEO, hreflang implementation, and country-specific keyword targeting to ensure users see the most relevant version of your website based on their location and language.',
                    'Unlike a standard website, an international SEO website is structured to improve global visibility while delivering a seamless user experience across different markets. This helps search engines correctly index your website and display the right content to users around the world.',
                    'Whether your business targets Europe, North America, Asia, Australia, or the Middle East, an international SEO website provides the foundation for long-term international growth.'
                ],
                'side_title' => 'Who Needs an International SEO Website?',
                'side_intro' => 'If your business serves customers in different countries or languages, an international SEO website helps increase your online visibility and generate qualified international traffic.',
                'side_bullets' => [
                    'eCommerce businesses selling globally',
                    'SaaS companies',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'International franchises',
                    'Technology companies',
                    'Professional service providers',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why International SEO Websites Are Important',
                'paragraphs' => [
                    'Expanding internationally requires more than translating your website. Search engines need clear signals to understand your target countries, languages, and website structure.',
                    'A professionally optimised international SEO website includes multilingual content, hreflang tags, technical SEO, localised keyword strategies, and country-specific optimisation. These improvements increase international rankings, improve user experience, attract qualified visitors, and support long-term business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Build an International SEO Website?',
                'subtitle' => 'Partner with our international SEO specialists to create a website that performs across global markets and delivers measurable business growth.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free Website Audit'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Experts',
                'subtitle' => 'Tell us about your business goals and target countries, and we\'ll develop an international SEO website strategy tailored to your growth objectives, helping you attract more international customers and increase global online visibility.',
                'key' => 'seo_international_websites_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Countries',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'International rankings, multi-language structure setups, audit fixes, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO Websites FAQs',
                'items' => [
                    ['q' => '1. What is an International SEO Website?', 'a' => 'An International SEO website is optimised to rank across multiple countries and languages using multilingual SEO, localisation, technical SEO, and country-specific targeting.'],
                    ['q' => '2. Why does my business need an International SEO Website?', 'a' => 'An international SEO website helps your business reach global audiences, improve international rankings, and attract qualified organic traffic from multiple markets.'],
                    ['q' => '3. What features should an International SEO Website include?', 'a' => 'It should include multilingual content, hreflang tags, country-specific landing pages, technical SEO, fast loading speeds, mobile optimisation, and international keyword targeting.'],
                    ['q' => '4. How long does it take to see results?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on competition, website authority, and target markets.'],
                    ['q' => '5. Can you optimise an existing website for international SEO?', 'a' => 'Yes. We can audit, optimise, and restructure your existing website to improve its performance across international search engines and target countries.'],
                    ['q' => '6. Which businesses benefit from an International SEO Website?', 'a' => 'International SEO websites are ideal for eCommerce businesses, SaaS companies, exporters, manufacturers, B2B organisations, franchises, and any business expanding into international markets.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.international-seo-websites-uk', compact('pageData'));
    }

    public function internationalseoagency()
    {
        $pageData = [
            'meta' => [
                'title' => 'International SEO Agency UK | Global SEO Experts',
                'meta_title' => 'International SEO Agency UK | Global SEO Experts.',
                'meta_description' => 'Expand your business worldwide with expert International SEO services in the UK. Improve multilingual rankings, boost global visibility, increase traffic, and generate qualified traffic.',
                'meta_keywords' => 'international SEO agency UK, global SEO experts, multilingual SEO services, website localisation agency'
            ],
            'hero' => [
                'eyebrow' => 'International SEO Agency',
                'title' => 'International SEO Agency That <br>Helps Your Business Expand Across Global Markets',
                'subtitle' => 'Grow your business beyond borders with a trusted International SEO Agency that delivers data-driven SEO strategies to improve global search visibility, attract qualified international traffic, and generate sustainable business growth. Whether you\'re targeting a single country or multiple international markets, our SEO specialists develop customised campaigns that help your business reach the right audience worldwide.',
                'audit_type' => 'international-seo-agency-audit',
                'primary_btn_text' => 'Get a Free International SEO Strategy',
                'secondary_btn_text' => 'Book a Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/shopify-development-services.webp',
                'banner_mobile' => 'assets/images/banners/mobile/shopify-development-services.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Target International Markets',
                'subtitle' => 'Expand your global reach with an experienced International SEO Agency helping businesses succeed across major international markets.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your online visibility across the UK with tailored international SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach high-intent customers throughout the United States with country-specific SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Build your presence in Canada with localised SEO and targeted keyword optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Expand your business across Australia using customised international SEO solutions.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Improve rankings with multilingual SEO and German-language website optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French-speaking audiences through localised SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Increase your visibility in Spain with targeted international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers with country-specific SEO and content localisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Expand into the UAE with regional SEO strategies designed for local search behaviour.'],
                   
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO Agency?',
                'subtitle' => 'Partner with an experienced International SEO Agency committed to delivering measurable results through proven global SEO strategies.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'International SEO Expertise', 'desc' => 'Improve your rankings across international search engines and global markets.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites to reach customers in different languages.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific SEO Strategies', 'desc' => 'Target customers in specific countries using tailored keyword research and localised optimisation.'],
                    ['icon' => 'settings', 'title' => 'Advanced Technical SEO', 'desc' => 'Enhance website performance through hreflang implementation, Core Web Vitals optimisation, and technical SEO best practices.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Process',
                'subtitle' => 'Our proven SEO process helps businesses increase international visibility and grow successfully across global markets.',
                'items' => [
                    ['step' => '1', 'title' => 'International Market Research', 'desc' => 'Research target countries, competitors, customer behaviour, and global keyword opportunities.'],
                    ['step' => '2', 'title' => 'SEO Strategy Development', 'desc' => 'Develop a customised international SEO strategy based on your business goals and expansion plans.'],
                    ['step' => '3', 'title' => 'Technical SEO Implementation', 'desc' => 'Implement advanced technical SEO, multilingual optimisation, hreflang tags, indexing improvements, and website structure enhancements.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Create and optimise content tailored to regional languages, cultures, and search intent.'],
                    ['step' => '5', 'title' => 'International Authority Building', 'desc' => 'Strengthen your website with high-quality international backlinks and digital authority.'],
                    ['step' => '6', 'title' => 'Reporting & Continuous Optimisation', 'desc' => 'Monitor rankings, analyse performance, and optimise your SEO campaign for long-term growth.']
                ]
            ],
            'deliverables' => [
                'title' => 'Complete International SEO Agency Services',
                'subtitle' => 'Our comprehensive International SEO services help businesses expand confidently into international markets.',
                'list_title' => 'International SEO Strategy Snapshot',
                'list_desc' => 'Gain valuable insights into your international SEO performance with a comprehensive strategy review.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, technical SEO recommendations, competitor analysis, website localisation review, multilingual SEO insights, link-building opportunities, international growth roadmap',
                'items' => [
                    'International SEO audits',
                    'Global keyword research',
                    'Competitor analysis',
                    'Technical SEO optimisation',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific SEO campaigns',
                    'International content optimisation',
                    'Global link-building strategies',
                    'eCommerce international SEO',
                    'Enterprise SEO solutions',
                    'SEO reporting and analytics',
                    'Conversion rate optimisation',
                    'Ongoing SEO management'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/seo-service-uk', 'label' => 'SEO Services UK'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/content-seo-service-uk', 'label' => 'Content SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Is an International SEO Agency?',
                'paragraphs' => [
                    'An International SEO Agency specialises in helping businesses improve their online visibility across multiple countries, languages, and international search engines. Unlike standard SEO campaigns that focus on a single location, international SEO ensures your website is optimised for different countries, languages, and regional search behaviour.',
                    'Our team develops customised SEO strategies that combine international keyword research, multilingual optimisation, technical SEO, hreflang implementation, website localisation, and country-specific content. These strategies help search engines display the correct version of your website to users in different regions while providing an excellent user experience.',
                    'Whether you\'re expanding into Europe, North America, Asia, the Middle East, or Australia, partnering with an International SEO Agency helps improve rankings, increase qualified traffic, and generate long-term business growth.'
                ],
                'side_title' => 'Who Needs an International SEO Agency?',
                'side_intro' => 'If your customers are located in multiple countries or speak different languages, an International SEO Agency provides the expertise needed to grow your business globally.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'Technology companies',
                    'International franchises',
                    'Professional service providers',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why an International SEO Agency Is Essential for Global Growth',
                'paragraphs' => [
                    'Expanding internationally requires more than translating your website. Search engines must understand which country and language each page is intended for to deliver the most relevant search results.',
                    'Our International SEO Agency implements advanced SEO strategies including multilingual optimisation, hreflang tags, website localisation, technical SEO, country-specific keyword research, and international content optimisation. These improvements help increase worldwide search visibility, generate qualified traffic, improve user experience, and drive sustainable business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Worldwide?',
                'subtitle' => 'Partner with our experienced International SEO specialists and unlock new opportunities in global markets with customised SEO strategies that deliver measurable results.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free International SEO Consultation'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Experts',
                'subtitle' => 'Tell us about your business goals and target countries, and we\'ll develop a customised international SEO strategy designed to improve your online visibility, attract international customers, and achieve long-term success.',
                'key' => 'seo_international_agency_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Countries',
                    'focus_placeholder' => 'US, CA, DE, FR, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO Agency FAQs',
                'items' => [
                    ['q' => '1. What does an International SEO Agency do?', 'a' => 'An International SEO Agency helps businesses improve their search visibility across multiple countries and languages through technical SEO, multilingual optimisation, localisation, international keyword research, and country-specific SEO strategies.'],
                    ['q' => '2. Why should I hire an International SEO Agency?', 'a' => 'Hiring an International SEO Agency helps your business improve international rankings, attract qualified organic traffic, generate overseas leads, and expand into global markets with confidence.'],
                    ['q' => '3. How is an International SEO Agency different from a traditional SEO agency?', 'a' => 'A traditional SEO agency typically focuses on one country, while an International SEO Agency specialises in multilingual SEO, website localisation, hreflang implementation, and optimising websites for multiple international markets.'],
                    ['q' => '4. How long does international SEO take to deliver results?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on competition, website authority, target markets, and the overall SEO strategy.'],
                    ['q' => '5. Can you optimise multilingual websites?', 'a' => 'Yes. We optimise multilingual websites using language-specific keyword research, hreflang implementation, localised content, and technical SEO best practices to maximise international search visibility.'],
                    ['q' => '6. Which businesses benefit from an International SEO Agency?', 'a' => 'International SEO is ideal for eCommerce businesses, SaaS companies, manufacturers, exporters, B2B organisations, franchises, technology companies, and any business looking to expand internationally and increase global online visibility.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.international-seo-agency-uk', compact('pageData'));
    }

    public function internationalseoservices()
    {
        $pageData = [
            'meta' => [
                'title' => 'International SEO Services UK | Global SEO Agency',
                'meta_title' => 'International SEO Services UK | Global SEO Agency.',
                'meta_description' => 'Expand your reach worldwide with expert International SEO services in the UK. Improve multilingual rankings, increase global traffic, and generate qualified traffic.',
                'meta_keywords' => 'international SEO services UK, global SEO agency UK, multilingual SEO, geo-targeted SEO UK'
            ],
            'hero' => [
                'eyebrow' => 'International SEO Services',
                'title' => 'International SEO Services That <br>Help Your Business Grow Across Global Markets',
                'subtitle' => 'Expand your business beyond borders with professional International SEO Services designed to improve your global search visibility, attract qualified international traffic, and generate sustainable business growth. Whether you\'re targeting one country or multiple international markets, our tailored SEO strategies help your business reach the right audience and achieve long-term success worldwide.',
                'audit_type' => 'international-seo-services-audit',
                'primary_btn_text' => 'Get a Free International SEO Strategy',
                'secondary_btn_text' => 'Book a Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/international-seo-services.webp',
                'banner_mobile' => 'assets/images/banners/mobile/international-seo-services.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Target International Markets',
                'subtitle' => 'Grow your online presence across leading global markets with our results-driven International SEO Services.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your visibility across UK search results with country-specific SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach high-intent customers throughout the United States with customised international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Expand your online presence and generate qualified leads across Canada.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Grow your business in Australia with localised SEO and targeted keyword optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Improve your rankings with multilingual SEO and German-language website optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French audiences using localised content and international SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Increase your search visibility across Spain with country-focused SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers with multilingual optimisation and local SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Expand into the UAE using region-specific SEO solutions.'],
                   
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO Services?',
                'subtitle' => 'Partner with an experienced team that delivers customised SEO strategies designed to help businesses succeed across international markets.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'Global SEO Expertise', 'desc' => 'Improve your visibility across international search engines and multiple countries.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites to provide the best user experience across different languages.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific SEO Strategies', 'desc' => 'Target the right audience with localised keyword research and country-focused optimisation.'],
                    ['icon' => 'settings', 'title' => 'Advanced Technical SEO', 'desc' => 'Implement hreflang tags, website architecture improvements, Core Web Vitals optimisation, and technical SEO best practices.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Process',
                'subtitle' => 'Our proven process helps businesses improve international rankings and achieve long-term global growth.',
                'items' => [
                    ['step' => '1', 'title' => 'International Market Research', 'desc' => 'Research your target countries, competitors, customer behaviour, and international keyword opportunities.'],
                    ['step' => '2', 'title' => 'SEO Strategy Development', 'desc' => 'Develop a customised international SEO strategy aligned with your business goals and expansion plans.'],
                    ['step' => '3', 'title' => 'Technical SEO Implementation', 'desc' => 'Implement technical SEO improvements, multilingual optimisation, hreflang tags, and website structure enhancements.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Optimise website content to match regional languages, cultures, and search intent.'],
                    ['step' => '5', 'title' => 'International Link Building', 'desc' => 'Build high-quality backlinks that strengthen your website\'s authority across international markets.'],
                    ['step' => '6', 'title' => 'Performance Monitoring', 'desc' => 'Track rankings, analyse traffic, and continuously optimise your campaign for sustainable growth.']
                ]
            ],
            'deliverables' => [
                'title' => 'Complete International SEO Services',
                'subtitle' => 'Our comprehensive International SEO Services help businesses compete successfully in worldwide markets.',
                'list_title' => 'International SEO Strategy Snapshot',
                'list_desc' => 'Gain valuable insights into your website\'s international performance with a comprehensive SEO review.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, competitor analysis, technical SEO recommendations, website localisation review, multilingual SEO insights, link-building opportunities, international growth roadmap',
                'items' => [
                    'International SEO audits',
                    'Global keyword research',
                    'Competitor analysis',
                    'Technical SEO optimisation',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific SEO campaigns',
                    'International content optimisation',
                    'Global link-building strategies',
                    'International eCommerce SEO',
                    'Enterprise SEO solutions',
                    'SEO reporting and analytics',
                    'Conversion rate optimisation',
                    'Ongoing SEO management'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of International SEO Services',
                'subtitle' => 'Our International SEO Services help businesses build a stronger international presence and generate long-term growth.',
                'items' => [
                    'Increase international search rankings',
                    'Improve worldwide organic visibility',
                    'Reach customers in multiple countries',
                    'Enhance multilingual user experience',
                    'Generate more qualified leads',
                    'Increase international sales',
                    'Build global brand awareness',
                    'Strengthen website authority',
                    'Reduce paid advertising costs',
                    'Achieve sustainable business growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/international-seo-agency-uk', 'label' => 'International SEO Agency'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/seo-service-uk', 'label' => 'SEO Services UK'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Are International SEO Services?',
                'paragraphs' => [
                    'International SEO Services help businesses improve their online visibility across multiple countries, languages, and international search engines. Unlike traditional SEO, international SEO focuses on optimising websites for global audiences by combining technical SEO, multilingual optimisation, localisation, country-specific keyword research, and advanced search engine optimisation strategies.',
                    'A successful international SEO campaign ensures search engines display the correct version of your website to users based on their country and language. This improves rankings, increases qualified organic traffic, enhances user experience, and drives sustainable business growth across global markets.',
                    'Whether you\'re expanding into Europe, North America, Asia, Australia, or the Middle East, our International SEO Services help your business reach new customers and compete effectively in international search results.'
                ],
                'side_title' => 'Who Needs International SEO Services?',
                'side_intro' => 'If your customers are located in different countries or speak multiple languages, International SEO Services provide the expertise needed to grow your business internationally.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies serving global customers',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'Professional service providers',
                    'International franchises',
                    'Technology companies',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why International SEO Services Are Essential',
                'paragraphs' => [
                    'Expanding into international markets requires more than translating your website. Search engines need clear signals about your target countries, languages, and website structure to display the most relevant content to users.',
                    'Our International SEO Services include multilingual optimisation, website localisation, hreflang implementation, technical SEO, international keyword research, and continuous performance monitoring. These strategies increase global search visibility, improve user experience, generate qualified traffic, and help your business achieve long-term international success.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Worldwide?',
                'subtitle' => 'Partner with our experienced international SEO specialists and unlock new growth opportunities across global markets with customised SEO strategies that deliver measurable results.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free International SEO Consultation'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Experts',
                'subtitle' => 'Tell us about your business goals, target countries, and expansion plans. We\'ll create a tailored international SEO strategy that improves your online visibility, attracts international customers, and drives sustainable business growth.',
                'key' => 'seo_international_services_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Countries',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO Services FAQs',
                'items' => [
                    ['q' => '1. What are International SEO Services?', 'a' => 'International SEO Services help businesses improve their visibility across multiple countries and languages through international keyword research, multilingual SEO, technical optimisation, localisation, and country-specific SEO strategies.'],
                    ['q' => '2. Why are International SEO Services important?', 'a' => 'They help businesses reach international customers, improve global search rankings, generate qualified organic traffic, and expand successfully into overseas markets.'],
                    ['q' => '3. How do International SEO Services differ from traditional SEO?', 'a' => 'Traditional SEO focuses on one country, while International SEO Services optimise websites for multiple countries, languages, and international search engines using advanced localisation and technical SEO techniques.'],
                    ['q' => '4. How long does it take to see results from International SEO Services?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on competition, website authority, target countries, and the overall SEO strategy.'],
                    ['q' => '5. Can you optimise multilingual websites?', 'a' => 'Yes. We optimise multilingual websites using language-specific keyword research, hreflang implementation, localised content, and technical SEO best practices.'],
                    ['q' => '6. Which businesses benefit from International SEO Services?', 'a' => 'International SEO Services are ideal for eCommerce businesses, SaaS companies, manufacturers, exporters, B2B organisations, franchises, technology companies, and any business looking to expand internationally and increase global online visibility.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.international-seo-services-uk', compact('pageData'));
    }

    public function internationalseouk()
    {
        $pageData = [
            'meta' => [
                'title' => 'International SEO Services UK | Global Search Experts',
                'meta_title' => 'International SEO Services UK | Global Search Experts.',
                'meta_description' => 'Expand your business worldwide with expert International SEO services in the UK. Improve multilingual rankings, increase global visibility, traffic, and quality.',
                'meta_keywords' => 'international seo uk, global search experts, multilingual seo architecture, regional geo targeting uk'
            ],
            'hero' => [
                'eyebrow' => 'International SEO',
                'title' => 'International SEO That <br>Helps Your Business Reach Customers Worldwide',
                'subtitle' => 'Expand your business into global markets with expert International SEO strategies designed to improve your visibility across multiple countries, languages, and search engines. Whether you\'re targeting a single international market or expanding worldwide, our customised SEO solutions help attract qualified organic traffic, increase international rankings, and drive sustainable business growth.',
                'audit_type' => 'international-seo-uk-audit',
                'primary_btn_text' => 'Get a Free International SEO Strategy',
                'secondary_btn_text' => 'Book a Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/squarespace-development-services.webp',
                'banner_mobile' => 'assets/images/banners/mobile/squarespace-development-services.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Target International Markets',
                'subtitle' => 'Grow your online presence across leading international markets with our results-driven International SEO solutions.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your visibility across UK search results with country-specific SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach high-intent customers throughout the United States with customised International SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Expand your online presence and generate qualified leads across Canada.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Grow your business in Australia with localised SEO and targeted keyword optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Improve your rankings with multilingual SEO and German-language website optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French audiences through localised content and International SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Increase your search visibility across Spain with country-focused SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers with multilingual optimisation and local SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Expand into the UAE with region-specific SEO strategies.'],
                  
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO?',
                'subtitle' => 'Partner with experienced International SEO specialists committed to helping your business succeed across global markets.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'Global SEO Expertise', 'desc' => 'Improve your visibility across international search engines and worldwide markets.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites to provide the best experience for users in different languages.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific Targeting', 'desc' => 'Reach the right audience through localised keyword research and country-focused SEO strategies.'],
                    ['icon' => 'settings', 'title' => 'Advanced Technical SEO', 'desc' => 'Implement hreflang tags, optimise website architecture, improve Core Web Vitals, and enhance technical performance.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Process',
                'subtitle' => 'Our proven International SEO process helps businesses improve rankings and achieve long-term growth across multiple countries.',
                'items' => [
                    ['step' => '1', 'title' => 'International Market Research', 'desc' => 'Research your target countries, competitors, customer behaviour, and global keyword opportunities.'],
                    ['step' => '2', 'title' => 'SEO Strategy Development', 'desc' => 'Develop a customised International SEO strategy based on your business goals and international expansion plans.'],
                    ['step' => '3', 'title' => 'Technical SEO Implementation', 'desc' => 'Implement technical SEO improvements, multilingual optimisation, hreflang tags, and website structure enhancements.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Optimise your website content to match regional languages, cultures, and search intent.'],
                    ['step' => '5', 'title' => 'International Link Building', 'desc' => 'Build high-quality backlinks that strengthen your website\'s authority across international markets.'],
                    ['step' => '6', 'title' => 'Performance Monitoring', 'desc' => 'Track rankings, analyse traffic, and continuously optimise your campaign for sustainable growth.']
                ]
            ],
            'deliverables' => [
                'title' => 'Complete International SEO Solutions',
                'subtitle' => 'Our comprehensive International SEO solutions help businesses expand successfully into global markets.',
                'list_title' => 'International SEO Strategy Snapshot',
                'list_desc' => 'Understand your international SEO performance with a detailed strategy review.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, competitor analysis, technical SEO recommendations, website localisation review, multilingual SEO insights, link-building opportunities, international growth roadmap',
                'items' => [
                    'International SEO audits',
                    'Global keyword research',
                    'Competitor analysis',
                    'Technical SEO optimisation',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific SEO campaigns',
                    'International content optimisation',
                    'Global link-building strategies',
                    'International eCommerce SEO',
                    'Enterprise SEO',
                    'SEO reporting and analytics',
                    'Conversion rate optimisation',
                    'Ongoing SEO management'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of International SEO',
                'subtitle' => 'International SEO helps your business establish a strong online presence while reaching customers across multiple countries.',
                'items' => [
                    'Improve international search rankings',
                    'Increase worldwide organic traffic',
                    'Reach customers in multiple countries',
                    'Enhance multilingual user experience',
                    'Generate more qualified leads',
                    'Increase international sales',
                    'Build global brand awareness',
                    'Strengthen website authority',
                    'Reduce dependence on paid advertising',
                    'Achieve sustainable long-term business growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/international-seo-agency-uk', 'label' => 'International SEO Agency'],
                    ['url' => '/international-seo-services-uk', 'label' => 'International SEO Services'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Is International SEO?',
                'paragraphs' => [
                    'International SEO is the process of optimising a website to improve its visibility across multiple countries and languages. It helps search engines understand which version of your website should appear for users in different regions, ensuring they receive relevant content based on their location and language.',
                    'An effective International SEO strategy combines technical SEO, multilingual optimisation, localisation, international keyword research, content optimisation, and country-specific targeting. These techniques improve search rankings, increase qualified international traffic, and deliver a better user experience across global markets.',
                    'Whether your business is expanding into Europe, North America, Asia, Australia, or the Middle East, International SEO helps you connect with international customers and achieve long-term online growth.'
                ],
                'side_title' => 'Who Needs International SEO?',
                'side_intro' => 'If your business targets customers in multiple countries or languages, International SEO is essential for improving global search visibility and attracting qualified international traffic.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies serving global markets',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'Professional service providers',
                    'International franchises',
                    'Technology companies',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why International SEO Is Important',
                'paragraphs' => [
                    'Expanding into global markets requires more than translating your website. Search engines need clear signals about your target countries, languages, and website structure to display the right content to the right audience.',
                    'International SEO includes multilingual optimisation, hreflang implementation, website localisation, technical SEO, international keyword research, and ongoing optimisation. These strategies improve international rankings, enhance user experience, increase organic traffic, and support long-term business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Globally?',
                'subtitle' => 'Partner with our experienced International SEO specialists and unlock new opportunities in worldwide markets through customised SEO strategies that deliver measurable results.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free International SEO Consultation'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Experts',
                'subtitle' => 'Share your business goals and target markets with our team. We\'ll create a customised International SEO strategy that increases your global visibility, attracts international customers, and drives sustainable business growth.',
                'key' => 'seo_international_uk_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Markets',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global rankings, organic lead generation, localization fixes, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO FAQs',
                'items' => [
                    ['q' => '1. What is International SEO?', 'a' => 'International SEO is the process of optimising a website for multiple countries and languages to improve international search visibility and attract global customers.'],
                    ['q' => '2. Why is International SEO important?', 'a' => 'International SEO helps businesses reach overseas audiences, improve global search rankings, increase qualified traffic, and expand into new markets.'],
                    ['q' => '3. How is International SEO different from traditional SEO?', 'a' => 'Traditional SEO targets one country or region, while International SEO focuses on multiple countries, languages, localisation, and international search engine optimisation.'],
                    ['q' => '4. How long does International SEO take to show results?', 'a' => 'Most businesses see measurable improvements within 3–6 months, depending on competition, website authority, target markets, and the SEO strategy.'],
                    ['q' => '5. Can International SEO optimise multilingual websites?', 'a' => 'Yes. International SEO includes multilingual optimisation, hreflang implementation, language-specific keyword research, and localised content to improve search performance.'],
                    ['q' => '6. Which businesses benefit from International SEO?', 'a' => 'International SEO is ideal for eCommerce businesses, SaaS companies, exporters, manufacturers, B2B organisations, franchises, and any business looking to expand into international markets.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.international-seo-uk', compact('pageData'));
    }

public function internationalseoconsultant()
    {
        $pageData = [
            'meta' => [
                'title' => 'International SEO Consultant UK | Global SEO Expert',
                'meta_title' => 'International SEO Consultant UK | Global SEO Expert.',
                'meta_description' => 'Work with an expert International SEO consultant in the UK. Improve multilingual rankings, boost global visibility, increase organic traffic, and generate qualified traffic.',
                'meta_keywords' => 'international seo consultant uk, global seo expert, international website structure consultant, technical seo consulting guidance'
            ],
            'hero' => [
                'eyebrow' => 'International SEO Consultant',
                'title' => 'International SEO Consultant Helping <br>Businesses Grow Across Global Markets',
                'subtitle' => 'Expand your business internationally with an experienced International SEO Consultant who develops data-driven SEO strategies to improve your global search visibility, attract qualified international traffic, and generate sustainable business growth. Whether you\'re entering a new country or expanding into multiple international markets, our consultancy services help you achieve long-term success through tailored SEO solutions.',
                'audit_type' => 'international-seo-consultant-audit',
                'primary_btn_text' => 'Get a Free SEO Consultation',
                'secondary_btn_text' => 'Request a Global SEO Strategy',
                'banner_desktop' => 'assets/images/banners/desktop/website-development.webp',
                'banner_mobile' => 'assets/images/banners/mobile/website-development.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'International Markets We Serve',
                'subtitle' => 'Reach customers across major international markets with customised SEO consulting services.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your online visibility across the UK with country-specific SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Expand your business across the U.S. with targeted international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Improve your search rankings and attract qualified customers throughout Canada.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Grow your business in Australia with localised SEO and keyword optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Reach German audiences through multilingual SEO and localised website optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Improve visibility across France using tailored international SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Connect with Spanish customers through country-specific SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Increase your online presence in Italy with multilingual SEO solutions.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Expand into the UAE with regional SEO strategies designed for local search behaviour.']
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO Consultant?',
                'subtitle' => 'Work with an experienced International SEO Consultant who understands the complexities of expanding into global markets.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'International SEO Expertise', 'desc' => 'Develop effective SEO strategies for businesses targeting multiple countries and languages.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites to improve search visibility and user experience.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific SEO Strategy', 'desc' => 'Target the right audience with localised keyword research and market-specific optimisation.'],
                    ['icon' => 'settings', 'title' => 'Technical SEO Consultancy', 'desc' => 'Receive expert guidance on hreflang implementation, website structure, indexing, and Core Web Vitals.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Consulting Process',
                'subtitle' => 'Our structured consulting process helps businesses improve international search performance and achieve measurable growth.',
                'items' => [
                    ['step' => '1', 'title' => 'International Website Audit', 'desc' => 'Review your current website, technical SEO, content, and international performance.'],
                    ['step' => '2', 'title' => 'Market & Competitor Research', 'desc' => 'Identify target markets, competitors, search behaviour, and international keyword opportunities.'],
                    ['step' => '3', 'title' => 'SEO Strategy Development', 'desc' => 'Create a customised International SEO roadmap based on your business goals and expansion plans.'],
                    ['step' => '4', 'title' => 'Technical SEO Recommendations', 'desc' => 'Provide guidance on website architecture, hreflang tags, multilingual setup, and technical optimisation.'],
                    ['step' => '5', 'title' => 'Content & Localisation Strategy', 'desc' => 'Recommend content improvements and localisation strategies for each target market.'],
                    ['step' => '6', 'title' => 'Performance Monitoring & Ongoing Consultancy', 'desc' => 'Track SEO performance, provide regular recommendations, and optimise your international strategy for continuous growth.']
                ]
            ],
            'deliverables' => [
                'title' => 'International SEO Consultant Services',
                'subtitle' => 'Our consultancy services help businesses successfully expand into international markets.',
                'list_title' => 'International SEO Strategy Review',
                'list_desc' => 'Gain valuable insights into your international SEO performance with a comprehensive strategy review.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, competitor analysis, technical SEO recommendations, website localisation review, multilingual SEO insights, growth opportunities, international SEO roadmap',
                'items' => [
                    'International SEO audits',
                    'Global keyword research',
                    'Competitor analysis',
                    'Technical SEO consulting',
                    'Website localisation strategy',
                    'Multilingual SEO consulting',
                    'Hreflang implementation guidance',
                    'Country-specific SEO planning',
                    'International content strategy',
                    'Global link-building recommendations',
                    'SEO reporting and performance analysis',
                    'Ongoing SEO consultancy'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of Hiring an International SEO Consultant',
                'subtitle' => 'An experienced consultant provides strategic guidance to help your business succeed globally.',
                'items' => [
                    'Improve international search rankings',
                    'Reach customers in multiple countries',
                    'Increase qualified organic traffic',
                    'Optimise multilingual websites',
                    'Build global brand awareness',
                    'Improve technical SEO performance',
                    'Increase international enquiries and sales',
                    'Support long-term business growth',
                    'Maximise return on SEO investment',
                    'Stay ahead of international competitors'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/international-seo-agency-uk', 'label' => 'International SEO Agency'],
                    ['url' => '/international-seo-services-uk', 'label' => 'International SEO Services'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Does an International SEO Consultant Do?',
                'paragraphs' => [
                    'An International SEO Consultant helps businesses optimise their websites to perform effectively across multiple countries, languages, and international search engines. By combining technical SEO, multilingual optimisation, localisation, international keyword research, and country-specific strategies, a consultant ensures your website reaches the right audience in every target market.',
                    'Unlike general SEO, international SEO requires a deeper understanding of global search behaviour, website architecture, hreflang implementation, and localisation. A consultant works closely with your business to create a tailored SEO strategy that improves international rankings, attracts qualified traffic, and supports long-term global growth.'
                ],
                'side_title' => 'Who Needs an International SEO Consultant?',
                'side_intro' => 'If your business serves customers across different countries or languages, an International SEO Consultant can help you maximise your global online visibility.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'International franchises',
                    'Technology companies',
                    'Professional service providers',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why Hire an International SEO Consultant?',
                'paragraphs' => [
                    'International expansion requires more than translating your website. Search engines need clear signals about your target countries, languages, and website structure to deliver the correct content to users.',
                    'An International SEO Consultant provides expert guidance on technical SEO, multilingual optimisation, localisation, country-specific keyword research, and ongoing performance improvements. These strategies help improve international rankings, increase qualified traffic, and support sustainable business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Expand Your Business Internationally?',
                'subtitle' => 'Work with an experienced International SEO Consultant to develop a customised strategy that helps your business achieve long-term success across global markets.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Book Your Free SEO Consultation'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Consultant',
                'subtitle' => 'Share your business goals, target countries, and growth plans with our consultant. We\'ll create a tailored International SEO strategy that improves your global visibility, attracts international customers, and delivers measurable business results.',
                'key' => 'seo_international_consultant_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Markets',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO Consultant FAQs',
                'items' => [
                    ['q' => '1. What does an International SEO Consultant do?', 'a' => 'An International SEO Consultant helps businesses improve their visibility across multiple countries through technical SEO, multilingual optimisation, localisation, international keyword research, and country-specific SEO strategies.'],
                    ['q' => '2. Why should I hire an International SEO Consultant?', 'a' => 'Hiring a consultant provides expert guidance for expanding into international markets, improving global rankings, and increasing qualified organic traffic.'],
                    ['q' => '3. How is an International SEO Consultant different from a general SEO consultant?', 'a' => 'An International SEO Consultant specialises in multilingual SEO, hreflang implementation, localisation, international website structure, and country-specific optimisation.'],
                    ['q' => '4. How long does international SEO take to deliver results?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on website authority, competition, target markets, and SEO implementation.'],
                    ['q' => '5. Can an International SEO Consultant optimise multilingual websites?', 'a' => 'Yes. Multilingual SEO, localisation, hreflang implementation, and language-specific keyword research are key parts of international SEO consulting.'],
                    ['q' => '6. Which businesses benefit from an International SEO Consultant?', 'a' => 'International SEO consulting is ideal for eCommerce businesses, SaaS companies, exporters, manufacturers, B2B organisations, franchises, and businesses expanding into international markets.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.international-seo-consultant-uk', compact('pageData'));
    }

    public function internationalseoexpert()
    {
        $pageData = [
            'meta' => [
                'title' => 'International SEO Expert UK | Global SEO Specialist',
                'meta_title' => 'International SEO Expert UK | Global SEO Specialist.',
                'meta_description' => 'Work with an expert International SEO specialist in the UK. Improve multilingual rankings, increase global visibility, boost organic traffic, and generate quality international leads.',
                'meta_keywords' => 'international seo expert uk, global seo specialist, international website indexing expert, technical seo architecture expert'
            ],
            'hero' => [
                'eyebrow' => 'International SEO Expert',
                'title' => 'International SEO Expert Helping <br>Businesses Grow Across Global Markets',
                'subtitle' => 'Expand your business worldwide with an experienced International SEO Expert who delivers data-driven SEO strategies to improve global search visibility, attract qualified international traffic, and generate sustainable business growth. Whether you\'re entering a new country or targeting multiple international markets, our tailored SEO solutions help your business reach the right audience and achieve long-term success.',
                'audit_type' => 'international-seo-expert-audit',
                'primary_btn_text' => 'Get a Free SEO Consultation',
                'secondary_btn_text' => 'Request a Custom International SEO Strategy',
                'banner_desktop' => 'assets/images/banners/desktop/woocommerce-development.webp',
                'banner_mobile' => 'assets/images/banners/mobile/woocommerce-development.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Target International Markets',
                'subtitle' => 'Grow your online presence across leading international markets with expert International SEO solutions.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your visibility across UK search results with country-specific SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach high-intent customers throughout the United States with customised international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Expand your business and generate qualified leads across Canada.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Improve your online visibility with SEO tailored to Australian search behaviour.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Boost rankings with multilingual SEO and German-language optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French audiences using localised SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Increase your search visibility across Spain with targeted international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers through multilingual optimisation and country-specific SEO.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Expand your presence in the UAE with region-focused SEO strategies.'],
                  
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO Expert?',
                'subtitle' => 'Work with an experienced International SEO Expert dedicated to helping your business succeed across global markets.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'International SEO Expertise', 'desc' => 'Improve your rankings across international search engines and worldwide markets.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites to reach customers in different languages.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific SEO Strategies', 'desc' => 'Target the right audience using localised keyword research and regional optimisation.'],
                    ['icon' => 'settings', 'title' => 'Advanced Technical SEO', 'desc' => 'Implement hreflang tags, optimise website architecture, improve Core Web Vitals, and enhance international indexing.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Process',
                'subtitle' => 'Our proven International SEO process helps businesses improve rankings and expand successfully into international markets.',
                'items' => [
                    ['step' => '1', 'title' => 'International Market Research', 'desc' => 'Research target countries, competitors, customer behaviour, and global keyword opportunities.'],
                    ['step' => '2', 'title' => 'SEO Strategy Development', 'desc' => 'Develop a customised International SEO strategy aligned with your business objectives and global expansion plans.'],
                    ['step' => '3', 'title' => 'Technical SEO Implementation', 'desc' => 'Implement technical SEO improvements, multilingual optimisation, hreflang tags, and website structure enhancements.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Optimise website content to match local languages, cultures, and search intent.'],
                    ['step' => '5', 'title' => 'International Link Building', 'desc' => 'Build high-quality international backlinks to strengthen your website\'s authority.'],
                    ['step' => '6', 'title' => 'Performance Optimisation', 'desc' => 'Track rankings, analyse performance, and continuously optimise your SEO campaign for long-term growth.']
                ]
            ],
            'deliverables' => [
                'title' => 'Complete International SEO Expert Services',
                'subtitle' => 'Our comprehensive International SEO solutions help businesses compete successfully in global search results.',
                'list_title' => 'International SEO Strategy Snapshot',
                'list_desc' => 'Gain valuable insights into your international SEO performance with a detailed strategy review.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, competitor analysis, technical SEO recommendations, website localisation review, multilingual SEO insights, international growth roadmap, performance improvement recommendations',
                'items' => [
                    'International SEO audits',
                    'Global keyword research',
                    'Competitor analysis',
                    'Technical SEO optimisation',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific SEO campaigns',
                    'International content optimisation',
                    'Global link-building strategies',
                    'International eCommerce SEO',
                    'Enterprise SEO solutions',
                    'SEO reporting and analytics',
                    'Conversion rate optimisation',
                    'Ongoing SEO management'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of Hiring an International SEO Expert',
                'subtitle' => 'Partnering with an experienced International SEO Expert helps your business achieve sustainable international growth.',
                'items' => [
                    'Improve international search rankings',
                    'Increase worldwide organic traffic',
                    'Reach customers in multiple countries',
                    'Enhance multilingual user experience',
                    'Generate more qualified leads',
                    'Increase international sales',
                    'Build global brand awareness',
                    'Strengthen website authority',
                    'Improve return on investment',
                    'Achieve long-term business growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/international-seo-agency-uk', 'label' => 'International SEO Agency'],
                    ['url' => '/international-seo-services-uk', 'label' => 'International SEO Services'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Does an International SEO Expert Do?',
                'paragraphs' => [
                    'An International SEO Expert helps businesses improve their online visibility across multiple countries, languages, and international search engines. By combining technical SEO, multilingual optimisation, localisation, international keyword research, and country-specific strategies, an SEO expert ensures your website reaches the right audience in every target market.',
                    'International SEO requires specialist knowledge of hreflang implementation, website architecture, international indexing, multilingual content, and local search behaviour. A tailored strategy helps improve global rankings, attract qualified international visitors, and generate sustainable business growth.',
                    'Whether your business is expanding into Europe, North America, Asia, Australia, or the Middle East, an International SEO Expert provides the knowledge and expertise needed to compete successfully in international search results.'
                ],
                'side_title' => 'Who Needs an International SEO Expert?',
                'side_intro' => 'If your business targets customers across multiple countries or languages, an International SEO Expert can help maximise your international search visibility and drive qualified traffic.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies serving global customers',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'Technology companies',
                    'Professional service providers',
                    'International franchises',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why Hire an International SEO Expert?',
                'paragraphs' => [
                    'Expanding internationally requires more than translating your website. Search engines need clear signals about your target countries, languages, and website structure to display the right content to the right audience.',
                    'An International SEO Expert develops a customised strategy that includes technical SEO, multilingual optimisation, localisation, hreflang implementation, country-specific keyword research, and continuous performance monitoring. These improvements increase global visibility, improve user experience, and support long-term international business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Worldwide?',
                'subtitle' => 'Partner with an experienced International SEO Expert and unlock new opportunities across international markets with customised SEO strategies that deliver measurable results.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free International SEO Consultation'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Expert',
                'subtitle' => 'Share your business goals, target countries, and international expansion plans with our expert. We\'ll create a customised SEO strategy that improves your global visibility, attracts international customers, and drives sustainable business growth.',
                'key' => 'seo_international_expert_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Countries',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO Expert FAQs',
                'items' => [
                    ['q' => '1. What does an International SEO Expert do?', 'a' => 'An International SEO Expert helps businesses improve search visibility across multiple countries using multilingual SEO, technical optimisation, localisation, international keyword research, and country-specific SEO strategies.'],
                    ['q' => '2. Why should I hire an International SEO Expert?', 'a' => 'Hiring an expert helps improve international rankings, increase qualified organic traffic, attract overseas customers, and support successful global expansion.'],
                    ['q' => '3. How is an International SEO Expert different from a standard SEO specialist?', 'a' => 'An International SEO Expert specialises in multilingual SEO, hreflang implementation, international website structure, localisation, and global search optimisation.'],
                    ['q' => '4. How long does International SEO take to show results?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on competition, website authority, target countries, and the overall SEO strategy.'],
                    ['q' => '5. Can an International SEO Expert optimise multilingual websites?', 'a' => 'Yes. An International SEO Expert optimises multilingual websites using language-specific keyword research, hreflang implementation, localisation, and advanced technical SEO.'],
                    ['q' => '6. Which businesses benefit from hiring an International SEO Expert?', 'a' => 'International SEO is ideal for eCommerce businesses, SaaS companies, manufacturers, exporters, B2B organisations, franchises, technology companies, and any business looking to expand into international markets.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.international-seo-expert-uk', compact('pageData'));
    }

    public function globalseostrategy()
    {
        $pageData = [
            'meta' => [
                'title' => 'Global SEO Strategy UK | International SEO Experts',
                'meta_title' => 'Global SEO Strategy UK | International SEO Experts.',
                'meta_description' => 'Grow your business worldwide with expert global SEO strategy services in the UK. Improve multilingual rankings, increase international visibility, boost traffic, and generate quality leads.',
                'meta_keywords' => 'global seo strategy uk, international seo experts, global seo planning, multilingual targeting strategy'
            ],
            'hero' => [
                'eyebrow' => 'Global SEO Strategy',
                'title' => 'Global SEO Strategy That <br>Helps Your Business Grow Across International Markets',
                'subtitle' => 'Expand your business worldwide with a results-driven Global SEO Strategy designed to improve your visibility across multiple countries, languages, and search engines. Our tailored SEO strategies help businesses attract qualified international traffic, increase organic rankings, and achieve sustainable growth in competitive global markets. Whether you\'re entering one new market or scaling across multiple regions, we create a customised strategy that delivers measurable results.',
                'audit_type' => 'global-seo-strategy-audit',
                'primary_btn_text' => 'Get Your Free Global SEO Strategy',
                'secondary_btn_text' => 'Book a Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/international-seo-services.webp',
                'banner_mobile' => 'assets/images/banners/mobile/international-seo-services.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Global Markets We Target',
                'subtitle' => 'Expand your online presence with a customised Global SEO Strategy designed for international success.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'Global SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your visibility across UK search results with country-specific SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'Global SEO United States', 'title' => 'United States', 'desc' => 'Reach high-value customers across the United States with targeted SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'Global SEO Canada', 'title' => 'Canada', 'desc' => 'Improve your rankings and generate qualified traffic throughout Canada.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'Global SEO Australia', 'title' => 'Australia', 'desc' => 'Grow your business with SEO strategies tailored to Australian search behaviour.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'Global SEO Germany', 'title' => 'Germany', 'desc' => 'Increase visibility with multilingual SEO and German-language optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'Global SEO France', 'title' => 'France', 'desc' => 'Connect with French-speaking audiences through localised SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'Global SEO Spain', 'title' => 'Spain', 'desc' => 'Expand your online presence in Spain using country-focused SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'Global SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers with multilingual optimisation and local search strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'Global SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Grow your visibility in the UAE with region-specific SEO solutions.'],
                  
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our Global SEO Strategy?',
                'subtitle' => 'Our data-driven approach helps businesses compete effectively in international markets while delivering sustainable organic growth.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'International Market Expertise', 'desc' => 'Develop SEO strategies tailored to multiple countries and global audiences.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites for improved rankings and user experience.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific Targeting', 'desc' => 'Reach the right audience with localised keyword research and regional SEO.'],
                    ['icon' => 'settings', 'title' => 'Advanced Technical SEO', 'desc' => 'Implement hreflang tags, improve website architecture, optimise Core Web Vitals, and enhance crawlability.']
                ]
            ],
            'process' => [
                'title' => 'Our Global SEO Strategy Process',
                'subtitle' => 'Our proven framework helps businesses improve global rankings and achieve long-term international success.',
                'items' => [
                    ['step' => '1', 'title' => 'International Market Research', 'desc' => 'Analyse target countries, competitors, customer behaviour, and global keyword opportunities.'],
                    ['step' => '2', 'title' => 'Strategy Planning', 'desc' => 'Develop a customised Global SEO Strategy aligned with your business goals and expansion plans.'],
                    ['step' => '3', 'title' => 'Technical SEO Optimisation', 'desc' => 'Improve website architecture, indexing, hreflang implementation, mobile performance, and Core Web Vitals.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Optimise website content for local languages, cultures, and regional search intent.'],
                    ['step' => '5', 'title' => 'International Authority Building', 'desc' => 'Strengthen your website through high-quality international backlinks and digital authority.'],
                    ['step' => '6', 'title' => 'Performance Monitoring', 'desc' => 'Track rankings, analyse user behaviour, and continuously optimise your SEO strategy for long-term growth.']
                ]
            ],
            'deliverables' => [
                'title' => 'What\'s Included in Our Global SEO Strategy',
                'subtitle' => 'Our comprehensive Global SEO Strategy includes everything needed for successful international expansion.',
                'list_title' => 'Global SEO Strategy Review',
                'list_desc' => 'Gain valuable insights into your website\'s international performance with a comprehensive strategy assessment.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, technical SEO recommendations, competitor benchmarking, website localisation review, multilingual SEO insights, international growth roadmap',
                'items' => [
                    'International SEO audit',
                    'Global keyword research',
                    'Competitor analysis',
                    'Technical SEO optimisation',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific SEO campaigns',
                    'International content optimisation',
                    'Global link-building strategy',
                    'SEO reporting and analytics',
                    'Conversion optimisation',
                    'Ongoing SEO management'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of a Global SEO Strategy',
                'subtitle' => 'A well-planned Global SEO Strategy helps your business achieve long-term success in international markets.',
                'items' => [
                    'Improve international search rankings',
                    'Increase qualified organic traffic',
                    'Reach customers across multiple countries',
                    'Enhance multilingual user experience',
                    'Build global brand awareness',
                    'Generate more international enquiries',
                    'Increase online sales and conversions',
                    'Strengthen website authority',
                    'Reduce reliance on paid advertising',
                    'Achieve sustainable business growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/international-seo-agency-uk', 'label' => 'International SEO Agency'],
                    ['url' => '/international-seo-services-uk', 'label' => 'International SEO Services'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Is a Global SEO Strategy?',
                'paragraphs' => [
                    'A Global SEO Strategy is a comprehensive plan designed to improve your website\'s visibility across multiple countries, languages, and international search engines. It combines technical SEO, multilingual optimisation, localisation, international keyword research, and country-specific targeting to ensure your website reaches the right audience in every market.',
                    'A successful strategy helps search engines understand your target regions while providing users with relevant, localised content. This improves search rankings, increases qualified international traffic, and supports long-term global business growth.',
                    'Whether you\'re expanding into Europe, North America, Asia, Australia, or the Middle East, a Global SEO Strategy provides the foundation for successful international digital marketing.'
                ],
                'side_title' => 'Who Needs a Global SEO Strategy?',
                'side_intro' => 'If your business serves customers in multiple countries or languages, a Global SEO Strategy is essential for improving worldwide search visibility and driving international growth.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'International franchises',
                    'Technology companies',
                    'Professional service providers',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why a Global SEO Strategy Is Essential',
                'paragraphs' => [
                    'Expanding internationally requires more than translating your website. Search engines need clear signals about your target countries, languages, and website structure to deliver the correct content to users in each region.',
                    'Our Global SEO Strategy includes multilingual optimisation, technical SEO, hreflang implementation, website localisation, international keyword research, and continuous performance monitoring. These strategies help improve rankings, increase qualified traffic, enhance user experience, and support sustainable international business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Worldwide?',
                'subtitle' => 'Partner with our international SEO specialists and implement a Global SEO Strategy that helps your business achieve long-term success across global markets.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free Global SEO Strategy Consultation'
            ],
            'form' => [
                'title' => 'Talk to Our Global SEO Experts',
                'subtitle' => 'Tell us about your business goals and target markets, and we\'ll create a customised Global SEO Strategy designed to improve your online visibility, attract international customers, and deliver measurable business growth.',
                'key' => 'seo_global_strategy_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Markets',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'Global SEO Strategy FAQs',
                'items' => [
                    ['q' => '1. What is a Global SEO Strategy?', 'a' => 'A Global SEO Strategy is a long-term plan that optimises your website for multiple countries and languages to improve international search visibility and organic traffic.'],
                    ['q' => '2. Why is a Global SEO Strategy important?', 'a' => 'It helps businesses expand into new markets, improve global search rankings, attract qualified international customers, and increase long-term organic growth.'],
                    ['q' => '3. What does a Global SEO Strategy include?', 'a' => 'It includes international keyword research, technical SEO, multilingual optimisation, website localisation, hreflang implementation, content optimisation, and ongoing performance analysis.'],
                    ['q' => '4. How long does it take to see results?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on website authority, competition, and target markets.'],
                    ['q' => '5. Can a Global SEO Strategy support multilingual websites?', 'a' => 'Yes. It includes language-specific keyword research, localisation, hreflang implementation, and technical optimisation to improve multilingual search performance.'],
                    ['q' => '6. Which businesses benefit from a Global SEO Strategy?', 'a' => 'A Global SEO Strategy is ideal for eCommerce businesses, SaaS companies, exporters, manufacturers, B2B organisations, franchises, and any business expanding into international markets.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.global-seo-strategy-uk', compact('pageData'));
    }

    public function internationalseostrategy()
    {
        $pageData = [
            'meta' => [
                'title' => 'International SEO Strategy UK | Global SEO Experts',
                'meta_title' => 'International SEO Strategy UK | Global SEO Experts.',
                'meta_description' => 'Grow worldwide with expert international SEO strategy services in the UK. Improve multilingual rankings, boost global visibility, increase traffic, and generate traffic.',
                'meta_keywords' => 'international seo strategy uk, global seo experts, multilingual planning framework, technical geo-targeting strategy'
            ],
            'hero' => [
                'eyebrow' => 'International SEO Strategy',
                'title' => 'International SEO Strategy That <br>Helps Your Business Grow Worldwide',
                'subtitle' => 'Expand your business into international markets with a results-driven International SEO Strategy designed to improve global search visibility, attract qualified international traffic, and generate sustainable business growth. Whether you\'re targeting one country or multiple regions, our tailored SEO strategies help your website reach the right audience, improve international rankings, and achieve long-term success across global markets.',
                'audit_type' => 'international-seo-strategy-audit',
                'primary_btn_text' => 'Get Your Free International SEO Strategy',
                'secondary_btn_text' => 'Book a Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/seo.webp',
                'banner_mobile' => 'assets/images/banners/mobile/seo.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'Target International Markets',
                'subtitle' => 'Expand your online presence across leading global markets with a customised International SEO Strategy.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Increase your visibility across UK search results with country-specific SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach high-intent customers throughout the United States with targeted international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Expand your online presence and generate qualified leads across Canada.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Improve rankings with SEO strategies tailored to Australian search behaviour.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Increase visibility through multilingual SEO and German-language optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French-speaking audiences using localised SEO strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Expand your presence across Spain with targeted international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers through multilingual optimisation and local search strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Improve your online visibility across the UAE with region-specific SEO.'],
                    
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our International SEO Strategy?',
                'subtitle' => 'Our data-driven approach helps businesses compete successfully in international markets while delivering measurable long-term results.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'Global Market Expertise', 'desc' => 'Develop SEO strategies tailored to different countries, languages, and search behaviours.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language SEO', 'desc' => 'Optimise multilingual websites for improved rankings and user experience.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific Targeting', 'desc' => 'Reach the right audience with localised keyword research and regional optimisation.'],
                    ['icon' => 'settings', 'title' => 'Advanced Technical SEO', 'desc' => 'Implement hreflang tags, optimise website architecture, improve Core Web Vitals, and enhance international indexing.']
                ]
            ],
            'process' => [
                'title' => 'Our International SEO Strategy Process',
                'subtitle' => 'Our proven framework helps businesses improve global rankings and achieve sustainable international growth.',
                'items' => [
                    ['step' => '1', 'title' => 'International Market Research', 'desc' => 'Analyse target countries, competitors, customer behaviour, and global keyword opportunities.'],
                    ['step' => '2', 'title' => 'SEO Strategy Planning', 'desc' => 'Develop a customised International SEO Strategy aligned with your business goals and expansion plans.'],
                    ['step' => '3', 'title' => 'Technical SEO Optimisation', 'desc' => 'Improve website architecture, indexing, hreflang implementation, mobile performance, and Core Web Vitals.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Optimise website content for local languages, cultures, and regional search intent.'],
                    ['step' => '5', 'title' => 'International Authority Building', 'desc' => 'Strengthen your website through high-quality international backlinks and digital authority.'],
                    ['step' => '6', 'title' => 'Performance Monitoring', 'desc' => 'Track rankings, analyse user behaviour, and continuously optimise your strategy for long-term growth.']
                ]
            ],
            'deliverables' => [
                'title' => 'What\'s Included in Our International SEO Strategy',
                'subtitle' => 'Our comprehensive strategy provides everything needed to succeed in international search results.',
                'list_title' => 'International SEO Strategy Review',
                'list_desc' => 'Gain valuable insights into your website\'s international performance with a comprehensive strategy review.',
                'list_note' => 'Includes: International SEO audit, global keyword opportunities, competitor analysis, technical SEO recommendations, website localisation review, multilingual SEO insights, international growth roadmap',
                'items' => [
                    'International SEO audit',
                    'Global keyword research',
                    'Competitor analysis',
                    'Technical SEO optimisation',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific SEO campaigns',
                    'International content optimisation',
                    'Global link-building strategy',
                    'SEO reporting and analytics',
                    'Conversion rate optimisation',
                    'Ongoing SEO management'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of an International SEO Strategy',
                'subtitle' => 'A well-planned International SEO Strategy helps your business expand confidently into global markets.',
                'items' => [
                    'Improve international search rankings',
                    'Increase worldwide organic traffic',
                    'Reach customers across multiple countries',
                    'Enhance multilingual user experience',
                    'Generate more qualified leads',
                    'Increase international enquiries and sales',
                    'Build global brand awareness',
                    'Strengthen website authority',
                    'Reduce reliance on paid advertising',
                    'Achieve sustainable long-term business growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/international-seo-agency-uk', 'label' => 'International SEO Agency'],
                    ['url' => '/international-seo-services-uk', 'label' => 'International SEO Services'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Is an International SEO Strategy?',
                'paragraphs' => [
                    'An International SEO Strategy is a comprehensive plan designed to improve your website\'s visibility across multiple countries, languages, and international search engines. It combines technical SEO, multilingual optimisation, localisation, international keyword research, and country-specific targeting to ensure your website reaches the right audience in every market.',
                    'A successful strategy helps search engines understand which version of your website should be displayed to users based on their country and language. This improves international rankings, attracts qualified organic traffic, enhances user experience, and supports sustainable global business growth.',
                    'Whether you\'re expanding into Europe, North America, Asia, Australia, or the Middle East, an International SEO Strategy provides the foundation for successful international digital marketing.'
                ],
                'side_title' => 'Who Needs an International SEO Strategy?',
                'side_intro' => 'If your business targets customers in multiple countries or languages, an International SEO Strategy is essential for improving worldwide search visibility and driving international growth.',
                'side_bullets' => [
                    'eCommerce businesses selling internationally',
                    'SaaS companies serving global customers',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'International franchises',
                    'Technology companies',
                    'Professional service providers',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why an International SEO Strategy Is Essential',
                'paragraphs' => [
                    'Growing internationally requires more than translating your website. Search engines need clear signals about your target countries, languages, and website structure to deliver the correct content to users in each region.',
                    'Our International SEO Strategy includes multilingual optimisation, technical SEO, hreflang implementation, website localisation, international keyword research, and continuous performance monitoring. These strategies improve rankings, increase qualified traffic, enhance user experience, and support sustainable international business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Grow Your Business Worldwide?',
                'subtitle' => 'Partner with our international SEO specialists and implement an International SEO Strategy that helps your business achieve long-term success across global markets.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free International SEO Strategy Consultation'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Experts',
                'subtitle' => 'Tell us about your business goals and target markets, and we\'ll create a customised International SEO Strategy designed to improve your online visibility, attract international customers, and deliver measurable business growth.',
                'key' => 'seo_international_strategy_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Markets',
                    'focus_placeholder' => 'US, CA, AU, DE, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'International SEO Strategy FAQs',
                'items' => [
                    ['q' => '1. What is an International SEO Strategy?', 'a' => 'An International SEO Strategy is a long-term plan that optimises your website for multiple countries and languages to improve international search visibility and attract global customers.'],
                    ['q' => '2. Why is an International SEO Strategy important?', 'a' => 'It helps businesses expand into new markets, improve global rankings, generate qualified international traffic, and achieve sustainable long-term growth.'],
                    ['q' => '3. What does an International SEO Strategy include?', 'a' => 'It includes international keyword research, technical SEO, multilingual optimisation, website localisation, hreflang implementation, content optimisation, and ongoing performance analysis.'],
                    ['q' => '4. How long does it take to see results?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on competition, website authority, target markets, and SEO implementation.'],
                    ['q' => '5. Can an International SEO Strategy support multilingual websites?', 'a' => 'Yes. It includes language-specific keyword research, localisation, hreflang implementation, and technical optimisation to improve multilingual search performance.'],
                    ['q' => '6. Which businesses benefit from an International SEO Strategy?', 'a' => 'An International SEO Strategy is ideal for eCommerce businesses, SaaS companies, exporters, manufacturers, B2B organisations, franchises, and any business looking to expand into international markets.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.international-seo-strategy-uk', compact('pageData'));
    }

    public function seointernationalsites()
    {
        $pageData = [
            'meta' => [
                'title' => 'SEO for International Sites UK | Global Website SEO',
                'meta_title' => 'SEO for International Sites UK | Global Website SEO.',
                'meta_description' => 'Optimize SEO for international sites in the UK. Improve multilingual rankings, boost global visibility, increase organic traffic, and generate quality international.',
                'meta_keywords' => 'seo for international sites uk, global website seo, multi-language site architecture, technical hreflang optimization'
            ],
            'hero' => [
                'eyebrow' => 'SEO International Sites',
                'title' => 'SEO International Sites That <br>Help Your Business Reach Global Customers',
                'subtitle' => 'Build a powerful online presence with professionally optimised SEO International Sites designed to improve visibility across multiple countries, languages, and search engines. Whether you\'re launching a new international website or expanding an existing one, our SEO solutions help attract qualified global traffic, improve international rankings, and generate sustainable business growth.',
                'audit_type' => 'seo-international-sites-audit',
                'primary_btn_text' => 'Get a Free International SEO Website Audit',
                'secondary_btn_text' => 'Book a Consultation',
                'banner_desktop' => 'assets/images/banners/desktop/website-development.webp',
                'banner_mobile' => 'assets/images/banners/mobile/website-development.webp',
                'stats' => [
                    ['value' => '25+', 'label' => 'Countries Targeted'],
                    ['value' => '40%', 'label' => 'Average Organic Growth'],
                    ['value' => 'Multi-Language', 'label' => 'SEO & Website Localisation']
                ]
            ],
            'showcase' => [
                'is_visible' => true,
                'title' => 'International Markets We Optimise For',
                'subtitle' => 'Expand your website\'s reach across leading global markets with tailored international SEO strategies.',
                'items' => [
                    ['img' => 'assets/images/seo/international/international_seo_services_1.webp', 'alt' => 'International SEO United Kingdom', 'title' => 'United Kingdom', 'desc' => 'Improve your website\'s visibility across UK search results with country-specific optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_2.webp', 'alt' => 'International SEO United States', 'title' => 'United States', 'desc' => 'Reach customers throughout the United States with targeted international SEO campaigns.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_3.webp', 'alt' => 'International SEO Canada', 'title' => 'Canada', 'desc' => 'Increase organic visibility and attract qualified Canadian customers.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_4.webp', 'alt' => 'International SEO Australia', 'title' => 'Australia', 'desc' => 'Grow your online presence with SEO strategies tailored to Australian search behaviour.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_5.webp', 'alt' => 'International SEO Germany', 'title' => 'Germany', 'desc' => 'Improve rankings through multilingual SEO and German-language optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_6.webp', 'alt' => 'International SEO France', 'title' => 'France', 'desc' => 'Connect with French audiences using localised website content and SEO.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_7.webp', 'alt' => 'International SEO Spain', 'title' => 'Spain', 'desc' => 'Expand your visibility across Spain with country-focused optimisation.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_8.webp', 'alt' => 'International SEO Italy', 'title' => 'Italy', 'desc' => 'Reach Italian customers with multilingual SEO and localised strategies.'],
                    ['img' => 'assets/images/seo/international/international_seo_services_9.webp', 'alt' => 'International SEO United Arab Emirates', 'title' => 'United Arab Emirates', 'desc' => 'Increase your presence in the UAE with regional SEO campaigns.'],
                   
                ]
            ],
            'features' => [
                'title' => 'Why Choose Our SEO International Sites Services?',
                'subtitle' => 'Our experienced SEO specialists build and optimise international websites that perform across multiple countries and languages.',
                'items' => [
                    ['icon' => 'globe', 'title' => 'International SEO Expertise', 'desc' => 'Improve your rankings across global search engines and international markets.'],
                    ['icon' => 'languages', 'title' => 'Multi-Language Website Optimisation', 'desc' => 'Deliver the best user experience with multilingual SEO and localisation.'],
                    ['icon' => 'map-pin', 'title' => 'Country-Specific SEO', 'desc' => 'Target customers in different regions using localised keywords and content.'],
                    ['icon' => 'settings', 'title' => 'Advanced Technical SEO', 'desc' => 'Implement hreflang tags, optimise website architecture, improve Core Web Vitals, and enhance crawlability.']
                ]
            ],
            'process' => [
                'title' => 'Our SEO International Sites Process',
                'subtitle' => 'Our proven dynamic configuration controls and frames international expansion sequentially.',
                'items' => [
                    ['step' => '1', 'title' => 'Website Audit', 'desc' => 'Analyse your website\'s technical performance, content, and international SEO opportunities.'],
                    ['step' => '2', 'title' => 'Global Keyword Research', 'desc' => 'Identify high-value keywords for each country, language, and target market.'],
                    ['step' => '3', 'title' => 'Technical SEO Optimisation', 'desc' => 'Optimise indexing, hreflang tags, URL structure, website speed, and mobile performance.'],
                    ['step' => '4', 'title' => 'Content Localisation', 'desc' => 'Create and optimise content that matches local languages, cultures, and search intent.'],
                    ['step' => '5', 'title' => 'International Authority Building', 'desc' => 'Develop high-quality backlinks and strengthen your website\'s global authority.'],
                    ['step' => '6', 'title' => 'Reporting & Continuous Optimisation', 'desc' => 'Track rankings, analyse performance, and continuously improve your international SEO strategy.']
                ]
            ],
            'deliverables' => [
                'title' => 'Complete SEO International Sites Services',
                'subtitle' => 'Comprehensive modules deployed systematically to drive indexing footprints globally.',
                'list_title' => 'SEO International Site Audit',
                'list_desc' => 'Understand your website\'s international SEO performance with a comprehensive review.',
                'list_note' => 'Includes: International SEO audit, technical website analysis, global keyword opportunities, competitor analysis, hreflang recommendations, website localisation review, performance improvements, international SEO growth roadmap',
                'items' => [
                    'International SEO website audits',
                    'Technical SEO optimisation',
                    'Global keyword research',
                    'Competitor analysis',
                    'Website localisation',
                    'Multilingual SEO',
                    'Hreflang implementation',
                    'Country-specific landing pages',
                    'International content optimisation',
                    'Global link-building strategies',
                    'International eCommerce SEO',
                    'Enterprise SEO solutions',
                    'Monthly SEO reporting',
                    'Conversion rate optimisation',
                    'Ongoing SEO management'
                ]
            ],
            'additional_benefits' => [
                'title' => 'Benefits of SEO International Sites',
                'subtitle' => 'Deployed strategies ensure strong validation across international regional layouts.',
                'items' => [
                    'Improve international search rankings',
                    'Increase worldwide organic traffic',
                    'Reach customers across multiple countries',
                    'Enhance multilingual user experience',
                    'Generate more qualified leads',
                    'Increase international sales',
                    'Build global brand awareness',
                    'Improve website performance',
                    'Strengthen domain authority',
                    'Achieve sustainable long-term growth'
                ]
            ],
            'related_links' => [
                'title' => 'Explore Related SEO Services',
                'subtitle' => 'Support your international growth strategy with these connected SEO services.',
                'items' => [
                    ['url' => '/international-seo-company-uk', 'label' => 'International SEO Company'],
                    ['url' => '/international-seo-agency-uk', 'label' => 'International SEO Agency'],
                    ['url' => '/international-seo-services-uk', 'label' => 'International SEO Services'],
                    ['url' => '/global-seo-services-uk', 'label' => 'Global SEO Services'],
                    ['url' => '/technical-seo-service-uk', 'label' => 'Technical SEO Services'],
                    ['url' => '/ecommerce-seo-service-uk', 'label' => 'eCommerce SEO Services']
                ]
            ],
            'about' => [
                'main_title' => 'What Are SEO International Sites?',
                'paragraphs' => [
                    'SEO International Sites are websites optimised to rank effectively across multiple countries, languages, and international search engines. They use advanced SEO techniques such as multilingual optimisation, website localisation, hreflang implementation, technical SEO, and country-specific keyword targeting to ensure the correct version of your website appears for users in different regions.',
                    'Unlike a standard website, an SEO international site is designed to support global expansion by improving search visibility, enhancing user experience, and increasing qualified organic traffic from international markets.',
                    'Whether you\'re targeting Europe, North America, Asia, Australia, or the Middle East, a professionally optimised international website helps your business compete successfully on a global scale.'
                ],
                'side_title' => 'Who Needs SEO International Sites?',
                'side_intro' => 'If your customers are located in different countries or speak multiple languages, SEO International Sites provide the foundation for successful international growth.',
                'side_bullets' => [
                    'eCommerce businesses',
                    'SaaS companies',
                    'Manufacturers and exporters',
                    'B2B organisations',
                    'International franchises',
                    'Technology companies',
                    'Professional service providers',
                    'Travel and hospitality businesses',
                    'Educational institutions',
                    'Businesses operating multilingual websites'
                ],
                'side_note' => ''
            ],
            'growth' => [
                'title' => 'Why SEO International Sites Matter',
                'paragraphs' => [
                    'Growing internationally requires more than translating your website. Search engines need clear signals about your target countries, languages, and website structure to display the right content to the right audience.',
                    'SEO International Sites include multilingual optimisation, technical SEO, website localisation, hreflang implementation, international keyword research, and continuous optimisation. These strategies improve international rankings, increase qualified traffic, enhance user experience, and support sustainable business growth.'
                ]
            ],
            'cta' => [
                'title' => 'Ready to Build an SEO International Site?',
                'subtitle' => 'Partner with our international SEO specialists and create a website that delivers measurable results across global markets.',
                'primary_btn' => 'Contact Us Today',
                'secondary_btn' => 'Request Your Free Website Audit'
            ],
            'form' => [
                'title' => 'Talk to Our International SEO Experts',
                'subtitle' => 'Share your business goals and target countries with our team. We\'ll develop a customised international SEO strategy that improves your website\'s global visibility, attracts qualified customers, and supports long-term business growth.',
                'key' => 'seo_international_sites_enquiry',
                'fields' => [
                    'name_label' => 'Full Name',
                    'name_placeholder' => 'Enter your name',
                    'email_label' => 'Email Address',
                    'email_placeholder' => 'name@company.com',
                    'url_label' => 'Website URL',
                    'url_placeholder' => 'https://',
                    'focus_label' => 'Target Countries',
                    'focus_placeholder' => 'US, CA, DE, FR, etc.',
                    'msg_label' => 'What would you like to achieve globally?',
                    'msg_placeholder' => 'Global visibility, more leads, multi-language site, etc.'
                ]
            ],
            'faq' => [
                'is_visible' => true,
                'title' => 'SEO International Sites FAQs',
                'items' => [
                    ['q' => '1. What are SEO International Sites?', 'a' => 'SEO International Sites are websites optimised for multiple countries and languages using multilingual SEO, localisation, technical SEO, and country-specific targeting.'],
                    ['q' => '2. Why does my business need an SEO International Site?', 'a' => 'It helps improve international search visibility, attract global customers, and increase qualified organic traffic.'],
                    ['q' => '3. What features should an SEO International Site include?', 'a' => 'It should include multilingual content, hreflang tags, country-specific landing pages, technical SEO, mobile optimisation, and fast page speeds.'],
                    ['q' => '4. How long does international website SEO take?', 'a' => 'Most businesses begin seeing measurable improvements within 3–6 months, depending on competition, website authority, and target markets.'],
                    ['q' => '5. Can you optimise an existing website for international SEO?', 'a' => 'Yes. We can audit, optimise, and restructure your existing website to improve its performance across international search engines.'],
                    ['q' => '6. Which businesses benefit from SEO International Sites?', 'a' => 'SEO International Sites are ideal for eCommerce businesses, SaaS companies, exporters, manufacturers, B2B organisations, franchises, and any business expanding into international markets.']
                ]
            ]
        ];

        return view('web.services.digital-marketing.seo-international-sites-uk', compact('pageData'));
    }
}
