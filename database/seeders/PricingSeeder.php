<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use App\Models\PricingService;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    public function run(): void
    {
        // 1. SEO Services
        $seoServices = [
            [
                'category' => 'seo',
                'service' => 'Local SEO',
                'price' => '199',
                'prefix' => '£',
                'per' => '/mo',
                'model' => '£199 main area + £50/town',
                'page_route' => 'services.seo.local-seo',
                'noindex' => false,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'category' => 'seo',
                'service' => 'National SEO',
                'price' => '799',
                'prefix' => '£',
                'per' => '/mo',
                'model' => 'Retainer · 3 tiers',
                'page_route' => 'services.seo.national-seo',
                'noindex' => false,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'category' => 'seo',
                'service' => 'Google Maps Optimisation',
                'price' => '199',
                'prefix' => '£',
                'per' => '/mo',
                'model' => '£199 primary + £50/location',
                'page_route' => 'services.digi-marketing.google-my-business-optimisation',
                'noindex' => false,
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($seoServices as $item) {
            PricingService::updateOrCreate(
                ['category' => $item['category'], 'service' => $item['service']],
                $item
            );
        }

        // 2. Web Development Services
        $webServices = [
            [
                'category' => 'web',
                'service' => 'Website Design & Development',
                'price' => '250',
                'prefix' => '£',
                'per' => null,
                'model' => 'Project-based',
                'page_route' => 'services.web.development',
                'noindex' => false,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'WordPress Website Design',
                'price' => '250',
                'prefix' => '£',
                'per' => null,
                'model' => 'One-off · 4 tiers',
                'page_route' => 'services.website-development.wordpress',
                'noindex' => false,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'Shopify Website Design',
                'price' => '750',
                'prefix' => '£',
                'per' => null,
                'model' => 'Build + optional retainer',
                'page_route' => 'services.website-development.shopify',
                'noindex' => false,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'WooCommerce Development',
                'price' => '1000',
                'prefix' => '£',
                'per' => null,
                'model' => 'One-off · 3 tiers',
                'page_route' => 'services.website-development.woocommerce',
                'noindex' => false,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'Wix Website Design',
                'price' => '250',
                'prefix' => '£',
                'per' => null,
                'model' => 'One-off · 3 tiers',
                'page_route' => 'services.website-development.wix',
                'noindex' => false,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'Squarespace Website Design',
                'price' => '300',
                'prefix' => '£',
                'per' => null,
                'model' => 'One-off · 3 tiers',
                'page_route' => 'services.website-development.squarespace',
                'noindex' => false,
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'GoDaddy Website Design',
                'price' => '250',
                'prefix' => '£',
                'per' => null,
                'model' => 'Build / Redesign / Migration',
                'page_route' => 'services.website-development.godaddy',
                'noindex' => false,
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'Software Development',
                'price' => '2000',
                'prefix' => '£',
                'per' => null,
                'model' => 'Project-based',
                'page_route' => 'services.website-development.custom-php',
                'noindex' => false,
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'category' => 'web',
                'service' => 'Ecommerce Website Design',
                'price' => '750',
                'prefix' => '£',
                'per' => null,
                'model' => 'Project-based',
                'page_route' => 'services.web.development',
                'noindex' => false,
                'sort_order' => 9,
                'is_active' => true,
            ],
        ];

        foreach ($webServices as $item) {
            PricingService::updateOrCreate(
                ['category' => $item['category'], 'service' => $item['service']],
                $item
            );
        }

        // 3. USA Market Plans
        $usaPlans = [
            [
                'key' => 'usa-starter',
                'category' => 'usa',
                'title' => 'Starter',
                'ideal' => 'Ideal for: Local US businesses',
                'currency_symbol' => '$',
                'price_amount' => '499',
                'price_period' => '/mo',
                'description' => 'For local US businesses beginning their SEO journey.',
                'is_featured' => false,
                'badge_text' => null,
                'sort_order' => 1,
                'is_active' => true,
                'btn_class' => 'plan-btn btn-outline',
                'cta_text' => 'Start Your Project',
                'cta_url' => '/contact-us#enquiry',
                'features' => [
                    'Google Business Profile setup',
                    'Local SEO — 5 keywords',
                    'On-page audit & fixes',
                    'Citation building',
                    'Monthly report',
                ],
            ],
            [
                'key' => 'usa-growth',
                'category' => 'usa',
                'title' => 'Growth',
                'ideal' => 'Ideal for: Scaling US businesses',
                'currency_symbol' => '$',
                'price_amount' => '999',
                'price_period' => '/mo',
                'description' => 'For US businesses ready to dominate local and regional search.',
                'is_featured' => true,
                'badge_text' => 'Most Popular',
                'sort_order' => 2,
                'is_active' => true,
                'btn_class' => 'plan-btn btn-accent',
                'cta_text' => 'Start Your Project',
                'cta_url' => '/contact-us#enquiry',
                'features' => [
                    'Everything in Starter',
                    'Local + national SEO — 20 keywords',
                    'Maps Pack optimisation',
                    '2 content pages/month',
                    'Link building & review strategy',
                ],
            ],
            [
                'key' => 'usa-authority',
                'category' => 'usa',
                'title' => 'Authority',
                'ideal' => 'Ideal for: Ambitious US brands',
                'currency_symbol' => '$',
                'price_amount' => '1999',
                'price_period' => '/mo',
                'description' => 'For ambitious US brands targeting national visibility.',
                'is_featured' => false,
                'badge_text' => null,
                'sort_order' => 3,
                'is_active' => true,
                'btn_class' => 'plan-btn btn-outline',
                'cta_text' => "Let's Discuss",
                'cta_url' => '/contact-us#enquiry',
                'features' => [
                    'Everything in Growth',
                    'Unlimited keywords',
                    'Website design included',
                    '6 content pages/month',
                    'Dedicated account manager',
                ],
            ],
        ];

        foreach ($usaPlans as $planData) {
            $features = $planData['features'] ?? [];
            unset($planData['features']);

            $plan = PricingPlan::updateOrCreate(
                ['key' => $planData['key']],
                $planData
            );

            $plan->features()->delete();
            foreach ($features as $i => $feat) {
                $plan->features()->create([
                    'text' => $feat,
                    'sort_order' => $i + 1,
                    'is_active' => true,
                ]);
            }
        }
    }
}
