<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PortfolioPlatform;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{


     public function portfolio()
    {
        $platforms = PortfolioPlatform::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->with(['items' => function ($q) {
                $q->where('is_published', true)
                  ->orderBy('sort_order')
                  ->orderByDesc('id');
            }])
            ->get();

        // Flatten items for "All" view & filtering
        $items = $platforms->flatMap(fn($p) => $p->items->map(function ($item) use ($p) {
            $item->platform_slug = $p->slug;
            $item->platform_name = $p->name;
            $item->platform_badge_color = $p->badge_color;
            return $item;
        }));
// dd($items);
        return view('portfolio', compact('platforms', 'items'));
    }
}
