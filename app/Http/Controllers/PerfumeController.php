<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    // L'fonction li katjib rway7 m3a l'3barat dyalhom
    public function index()
    {
        $perfumes = Perfume::with('variants')->where('is_active', true)->get();
        
        return response()->json([
            'success' => true,
            'data' => $perfumes
        ], 200);
    }

    // L'fonction li katzid ri7a jdidda b 3 d'les variants (d9a we7da)
    public function store(Request $request)
    {
        // 1. Validate l-data (daba kankhliw l'prix optional ila bghiti t-zid ghir chi we7da)
        $request->validate([
            'name' => 'required|string',
            'inspiration' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|string',
            // 3 d'les prix dyal l'variants
            'price30' => 'nullable|numeric',
            'price50' => 'nullable|numeric',
            'price100' => 'nullable|numeric',
        ]);

        // 2. Cree l'produit
        $perfume = Perfume::create([
            'name' => $request->name,
            'inspiration' => $request->inspiration,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'is_active' => true,
        ]);

        // 3. Hna kansaybo 3 d'les variants f loop
        $variants = [
            ['size' => '30ml', 'price' => $request->price30, 'type' => 'Parfum', 'stock_quantity' => 100],
            ['size' => '50ml', 'price' => $request->price50, 'type' => 'Parfum Extrait', 'stock_quantity' => 100],
            ['size' => '100ml', 'price' => $request->price100, 'type' => 'Parfum', 'stock_quantity' => 100],
        ];

        foreach ($variants as $v) {
            // Zid ghir l-variant li 3ndha taman (price) m3emmer
            if ($v['price'] != null && $v['price'] > 0) {
                $perfume->variants()->create($v);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Ri7a b 3 d-l-3barat t-zadet bnaja7!',
            'data' => $perfume->load('variants')
        ], 201);
    }
}