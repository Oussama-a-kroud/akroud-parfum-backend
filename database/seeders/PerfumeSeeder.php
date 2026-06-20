<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perfume;

class PerfumeSeeder extends Seeder
{
    public function run(): void
    {
        // Ri7a lowla
        $perfume1 = Perfume::create([
            'name' => 'Akroud Sauvage',
            'inspiration' => 'Dior Sauvage',
            'description' => 'Notes de Tête: Bergamote. Notes de Cœur: Poivre de Sichuan. Notes de Fond: Ambroxan.',
            'is_active' => true,
        ]);

        // L'3barat dyal ri7a lowla
        $perfume1->variants()->createMany([
            ['size' => '5ml', 'type' => 'Oil', 'price' => 20.00, 'stock_quantity' => 50],
            ['size' => '20ml', 'type' => 'Spray', 'price' => 200.00, 'stock_quantity' => 50],
        ]);

        // Ri7a tanya
        $perfume2 = Perfume::create([
            'name' => 'Akroud Le Male',
            'inspiration' => 'Jean Paul Gaultier Le Male',
            'description' => 'Notes de Tête: Menthe. Notes de Cœur: Lavande. Notes de Fond: Vanille.',
            'is_active' => true,
        ]);

        // L'3barat dyal ri7a tanya
        $perfume2->variants()->createMany([
            ['size' => '20ml', 'type' => 'Oil', 'price' => 20.00, 'stock_quantity' => 40],
        ]);
    }
}
