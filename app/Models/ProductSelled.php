<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductSelled extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $fillable = [
        'judul',
        'photourl',
        'deskripsi',
        'harga',
        'stock',
        'resi',
        'statusPembayaran',
        'metodePengiriman',
        'tanggalPengiriman',
        'tanggalPickup',
        'namaPenerima',
        'namaPemesan',
        'nomorPenerima',
        'alamat',
        'kodePos'
    ];

    public function setUUID(){
        return Str::uuid();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
            $model->{$model->getKeyName()} = $model->setUUID();
        });
    }
}
