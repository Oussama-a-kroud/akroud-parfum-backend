<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfumeVariant extends Model
{
    use HasFactory;
    protected $fillable = ['perfume_id', 'size', 'type', 'price', 'stock_quantity'];
    public function perfume()
    {
        return $this->belongsTo(Perfume::class);
    }
}