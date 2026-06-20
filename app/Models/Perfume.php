<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;
protected $fillable = [
    'name', 
    'inspiration', 
    'description', 
    'image', 
    'category', // HADI KHASHA TKOUN
    'is_active'
];    public function variants()
    {
        return $this->hasMany(PerfumeVariant::class);
    }
}