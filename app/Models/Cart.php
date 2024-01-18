<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'metodePengiriman',
        'tanggalPengiriman',
        'tanggalPickup',
        'namaPenerima',
        'namaPemesan',
        'nomorPenerima',
        'alamat',
        'kodePos'
    ];

    public function Product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
