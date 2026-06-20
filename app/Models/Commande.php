<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'telephone', 'ville', 'perfume_ids'];

    // Hadi kat3awn Laravel ytrjm JSON l Array (w l'3kss)
    protected $casts = [
        'perfume_ids' => 'array',
    ];
}