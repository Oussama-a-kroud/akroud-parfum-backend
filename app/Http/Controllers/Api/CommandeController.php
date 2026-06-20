<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation (خاصها تكون مطابقة لـ commandeData اللي فـ React)
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'ville' => 'required|string|max:255',
            'payment_method' => 'required|string',
            'perfumes' => 'required|array', // هادي كتستقبل قائمة الـ IDs
        ]);

        // 2. تسجيل الكوموند
        // تنبيه: تأكد بلي الـ model Commande فيه $fillable مزيان
        $commande = Commande::create([
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'ville' => $request->ville,
            'payment_method' => $request->payment_method,
            // إلا كان حقل perfume_ids فـ الداتاباز نوعه JSON، استعمل json_encode
            'perfume_ids' => json_encode($request->perfumes) 
        ]);

        // 3. جواب للـ React
        return response()->json([
            'message' => 'Commande t9ydat bnaja7!',
            'commande' => $commande
        ], 201);
    }
}