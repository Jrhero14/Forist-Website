<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingStage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nomorPesanan',
        'tokenMidtrans',
        'totalHarga',
        'status',
        'selesai',
    ];

    public function ProductSelleds(){
        return $this->belongsToMany(ProductSelled::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
