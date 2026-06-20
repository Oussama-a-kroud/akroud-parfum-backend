<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Hna kangolo l Laravel ykhdem l'seeder dyal rway7
        $this->call(PerfumeSeeder::class);
    }
}
