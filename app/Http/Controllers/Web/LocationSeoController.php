<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class LocationSeoController extends Controller
{
    private const PAGES = [

        'digital-marketing' => [
            'ilford' => [
                'meta_title' => 'Digital Marketing Agency in Ilford | Services & Advertising',
                'meta_description' => 'Digital marketing agency in Ilford offering services and advertising solutions to grow traffic, leads, and sales for your business with proven online results.',
            ],
        ],


        'social-media-marketing' => [
            'ilford' => [
                'meta_title' => 'Social Media Marketing Agency in Ilford | Marketing & Advertising',
                'meta_description' => 'Social media marketing agency in Ilford offering management, advertising, and strategy on Facebook, Instagram, and TikTok to grow traffic, leads, and sales online.',
            ],
        ],
        'ppc-advertising' => [
            'ilford' => [
                'meta_title' => 'PPC Advertising Agency in Ilford | Pay Per Click Experts',
                'meta_description' => 'PPC agency in Ilford offering Google Ads and pay-per-click campaigns to increase traffic, leads, and sales with expert advertising strategies.',
            ],
        ],

        'google-business-profile' => [
            'ilford' => [
                'meta_title' => 'Google Business Profile Services in Ilford | Local SEO Experts',
                'meta_description' => 'Google Business Profile management in Ilford to improve local SEO, visibility, calls, and leads while helping your business attract more local customers.',
            ],
        ],

        'meta-ads' => [
            'ilford' => [
                'meta_title' => 'Meta Ads Services in Ilford | Facebook & Instagram Ads Experts',
                'meta_description' => 'Meta Ads services in Ilford offering Facebook and Instagram advertising to increase traffic, leads, and sales with targeted campaigns and expert strategies.',
            ],
        ],

        'seo' => [
            'ilford' => [
                'meta_title' => 'SEO Services in Ilford | Search Engine Optimization Agency',
                'meta_description' => 'Search engine optimization agency in Ilford offering on-page, off-page, and eCommerce SEO services to improve rankings, traffic, and leads for your website.',
            ],
        ],

        'national-seo' => [
            'ilford' => [
                'meta_title' => 'National SEO Services in Ilford | Nationwide SEO Agency',
                'meta_description' => 'National SEO services in Ilford offering nationwide SEO solutions to improve rankings, increase traffic, and generate leads across the UK market.',
            ],
        ],

        'international-seo' => [
            'ilford' => [
                'meta_title' => 'International SEO Services in Ilford | Global SEO Agency',
                'meta_description' => 'International SEO services in Ilford offering multilingual and global SEO solutions to improve rankings, traffic, and generate leads across international markets.',
            ],
        ],
        'technical-seo' => [
            'ilford' => [
                'meta_title' => 'Technical SEO Services in Ilford | Website SEO Experts',
                'meta_description' => 'Technical SEO services in Ilford delivering improvements in speed, crawlability, indexing, and performance to increase rankings, traffic, and user experience.',
            ],
        ],

        'content-seo' => [
            'ilford' => [
                'meta_title' => 'Content SEO Services in Ilford | SEO Content & Strategy Experts',
                'meta_description' => 'Content SEO services in Ilford to optimise content, improve rankings, and increase traffic with keyword strategy, on-page SEO, and high-quality content.',
            ],
        ],

        'image-seo' => [
            'ilford' => [
                'meta_title' => 'Image SEO Services in Ilford | Image Optimization Experts',
                'meta_description' => 'Image SEO services in Ilford to optimise images, improve page speed, alt tags, and search visibility to boost rankings, traffic, and user experience.',
            ],
        ],

        'local-seo' => [
            'ilford' => [
                'meta_title' => 'Local SEO Services in Ilford | Local SEO Agency & Company',
                'meta_description' => 'Local SEO services in Ilford to improve local rankings, Google Business Profile, visibility, traffic, and leads for your local business growth.',
            ],
        ],
        'ecommerce-seo' => [
            'ilford' => [
                'meta_title' => 'Ecommerce SEO Agency in Ilford | Online Store SEO Services',
                'meta_description' => 'Ecommerce SEO agency in Ilford offering Shopify, WooCommerce, and Magento SEO services to improve rankings, traffic, product visibility, and online sales.',
            ],
        ],
        'on-page-seo' => [
            'ilford' => [
                'meta_title' => 'On-Page SEO Agency in Ilford | SEO Optimization Services',
                'meta_description' => 'On-page SEO services in Ilford to optimise website content, meta tags, structure, and keywords to improve rankings, traffic, and user experience.',
            ],
        ],

        'off-page-seo' => [
            'ilford' => [
                'meta_title' => 'Off-Page SEO Agency in Ilford | Link Building Experts',
                'meta_description' => 'Off-page SEO services in Ilford to build backlinks, improve domain authority, and increase rankings, traffic, and online visibility for your business.',
            ],
        ],
        'website-development' => [
            'ilford' => [
                'meta_title' => 'Website Development Services in Ilford | Web Design Experts',
                'meta_description' => 'Website development services in Ilford to build fast, responsive, and SEO-friendly websites that improve user experience, traffic, and business growth.',
            ],
        ],
        'woocommerce' => [
            'ilford' => [
                'meta_title' => 'WooCommerce Agency in Ilford | Web Development Services',
                'meta_description' => 'WooCommerce agency in Ilford offering web development services to build responsive, secure, and SEO-friendly ecommerce websites for your business growth.',
            ],
        ],
        'shopify' => [
            'ilford' => [
                'meta_title' => 'Shopify Development Agency in Ilford | Shopify Experts Agency',
                'meta_description' => 'Shopify development agency in Ilford offering web development services to build responsive, secure, and SEO-friendly ecommerce websites for your business growth.',
            ],
        ],
        'squarespace' => [
            'ilford' => [
                'meta_title' => 'Squarespace Web Design in Ilford | Website Development Agency',
                'meta_description' => 'Squarespace web design in Ilford offering website development, pricing guidance, and custom design to build fast, modern, and SEO-friendly websites.',
            ],
        ],
        'wordpress' => [
            'ilford' => [
                'meta_title' => 'WordPress Development Agency in Ilford | Web Design Services',
                'meta_description' => 'WordPress web development in Ilford delivering website design and development services to build SEO-friendly, fast, and secure websites.',
            ],
        ],
        'wix' => [
            'ilford' => [
                'meta_title' => 'Wix Website Development Agency in Ilford | Wix Website Experts',
                'meta_description' => 'Wix website development in Ilford offering website design, pricing guidance, and custom Wix websites to build fast, modern, and SEO-friendly sites.',
            ],
        ],
        'godaddy' => [
            'ilford' => [
                'meta_title' => 'GoDaddy Website Builder in Ilford | Design, Pricing & Setup',
                'meta_description' => 'GoDaddy website builder in Ilford offering website design, pricing guidance, and setup to build fast, responsive, and SEO-friendly websites.',
            ],
        ],
        'laravel' => [
            'ilford' => [
                'meta_title' => 'Laravel Web Development in Ilford | Laravel Agency Experts',
                'meta_description' => 'Laravel web development in Ilford providing website development, package development, and scalable solutions for high-performance applications.',
            ],
        ],
        'custom-php' => [
            'ilford' => [
                'meta_title' => 'Custom PHP Development in Ilford | Web Development Company',
                'meta_description' => 'Custom PHP development in Ilford offering web and website development services to build secure, scalable, and high-performance applications.',
            ],
        ],
        'cloudhealth' => [
            'ilford' => [
                'meta_title' => 'Healthcare SEO Service in Ilford | Medical Marketing Agency',
                'meta_description' => 'Healthcare SEO in Ilford offering medical SEO, digital marketing, and website development to improve rankings, attract patients, and grow your practice.',
            ],
        ],
        'cloudcare' => [
            'ilford' => [
                'meta_title' => 'Care Home SEO Services in Ilford | Care Home Marketing Agency Services',
                'meta_description' => 'SEO for care homes in Ilford providing digital marketing, SEO, and website development to increase enquiries and occupancy rates.',
            ],
        ],
        'cloudedu' => [
            'ilford' => [
                'meta_title' => 'Education SEO Services in Ilford | Education Marketing Agency',
                'meta_description' => 'Education SEO in Ilford offering digital marketing, SEO, and website development to improve rankings, attract students, and grow your institution.',
            ],
        ],
        'cloudtravel' => [
            'ilford' => [
                'meta_title' => 'Travel SEO Services in Ilford | Tourism Marketing Agency',
                'meta_description' => 'Travel SEO in Ilford offering digital marketing, SEO, and website development to improve rankings, attract travellers, and grow your travel business.',
            ],
        ],
        'cloudrecruit' => [
            'ilford' => [
                'meta_title' => 'Recruitment SEO Services in Ilford | Recruitment Marketing Agency',
                'meta_description' => 'Recruitment SEO in Ilford offering digital marketing, SEO, and website development to improve rankings, attract candidates, and grow your agency.',
            ],
        ],
        'cloudpublic' => [
            'ilford' => [
                'meta_title' => 'Public Sector SEO Service in Ilford | Digital Service Agency',
                'meta_description' => 'Public sector SEO in Ilford providing digital marketing, SEO, and website development to improve visibility and engagement for better digital service growth.',
            ],

        ],


    ];

    public function digitalMarketing(string $locationSlug)
    {
        $page = self::PAGES['digital-marketing'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.digital-marketing-location', [
            'page' => $page
        ]);
    }

    public function socialMediaMarketing(string $locationSlug)
    {
        $page = self::PAGES['social-media-marketing'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.smm-services-location', [
            'page' => $page
        ]);
    }
    public function ppcAdvertising(string $locationSlug)
    {
        $page = self::PAGES['ppc-advertising'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.ppc-services-location', [
            'page' => $page
        ]);
    }
    public function googleBusinessProfile(string $locationSlug)
    {
        $page = self::PAGES['google-business-profile'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.google-my-business-optimisation-location', [
            'page' => $page
        ]);
    }

    public function metaAds(string $locationSlug)
    {
        $page = self::PAGES['meta-ads'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.meta-ads-services-location', [
            'page' => $page
        ]);
    }
    public function seo(string $locationSlug)
    {
        $page = self::PAGES['seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.seo-location', [
            'page' => $page
        ]);
    }
    public function nationalSeo(string $locationSlug)
    {
        $page = self::PAGES['national-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.national-seo-location', [
            'page' => $page
        ]);
    }
    public function internationalSeo(string $locationSlug)
    {
        $page = self::PAGES['international-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.international-seo-location', [
            'page' => $page
        ]);
    }

    public function technicalSeo(string $locationSlug)
    {
        $page = self::PAGES['technical-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.technical-seo-location', [
            'page' => $page
        ]);
    }
    public function contentSeo(string $locationSlug)
    {
        $page = self::PAGES['content-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.content-seo-location', [
            'page' => $page
        ]);
    }
    public function imageSeo(string $locationSlug)
    {
        $page = self::PAGES['image-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.image-seo-location', [
            'page' => $page
        ]);
    }
    public function localSeo(string $locationSlug)
    {
        $page = self::PAGES['local-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.local-seo-location', [
            'page' => $page
        ]);
    }
    public function ecommerceSeo(string $locationSlug)
    {
        $page = self::PAGES['ecommerce-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.ecommerce-seo-location', [
            'page' => $page
        ]);
    }
    public function onPageSeo(string $locationSlug)
    {
        $page = self::PAGES['on-page-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.on-page-seo-location', [
            'page' => $page
        ]);
    }

    public function offPageSeo(string $locationSlug)
    {
        $page = self::PAGES['off-page-seo'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.off-page-seo-location', [
            'page' => $page
        ]);
    }
    public function websiteDevelopment(string $locationSlug)
    {
        $page = self::PAGES['website-development'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.web-development-location', [
            'page' => $page
        ]);
    }
    public function woocommerce(string $locationSlug)
    {
        $page = self::PAGES['woocommerce'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.woocommerce-location', [
            'page' => $page
        ]);
    }
    public function shopify(string $locationSlug)
    {
        $page = self::PAGES['shopify'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.shopify-location', [
            'page' => $page
        ]);
    }
    public function squarespace(string $locationSlug)
    {
        $page = self::PAGES['squarespace'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.squarespace-location', [
            'page' => $page
        ]);
    }
    public function wordpress(string $locationSlug)
    {
        $page = self::PAGES['wordpress'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.wordpress-location', [
            'page' => $page
        ]);
    }
    public function wix(string $locationSlug)
    {
        $page = self::PAGES['wix'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.wix-location', [
            'page' => $page
        ]);
    }
    public function godaddy(string $locationSlug)
    {
        $page = self::PAGES['godaddy'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.godaddy-location', [
            'page' => $page
        ]);
    }
    public function laravel(string $locationSlug)
    {
        $page = self::PAGES['laravel'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.laravel-location', [
            'page' => $page
        ]);
    }
    public function customPhp(string $locationSlug)
    {
        $page = self::PAGES['custom-php'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.custom-php-location', [
            'page' => $page
        ]);
    }
    public function cloudhealth(string $locationSlug)
    {
        $page = self::PAGES['cloudhealth'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudhealth-location', [
            'page' => $page
        ]);
    }
    public function cloudcare(string $locationSlug)
    {
        $page = self::PAGES['cloudcare'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudcare-location', [
            'page' => $page
        ]);
    }
    public function cloudedu(string $locationSlug)
    {
        $page = self::PAGES['cloudedu'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudedu-location', [
            'page' => $page
        ]);
    }
    public function cloudtravel(string $locationSlug)
    {
        $page = self::PAGES['cloudtravel'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudtravel-location', [
            'page' => $page
        ]);
    }
    public function cloudrecruit(string $locationSlug)
    {
        $page = self::PAGES['cloudrecruit'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudrecruit-location', [
            'page' => $page
        ]);
    }
    public function cloudpublic(string $locationSlug)
    {
        $page = self::PAGES['cloudpublic'][$locationSlug] ?? null;

        abort_if(!$page, 404);

        return view('web.services.locations-seo.cloudpublic-location', [
            'page' => $page
        ]);
    }
}
