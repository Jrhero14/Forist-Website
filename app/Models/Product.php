<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Product extends Model
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
        'judul', 'photourl', 'deskripsi', 'harga', 'stock', 'status'
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

    public function jenis(): BelongsToMany{
        return $this->belongsToMany(JenisBunga::class);
    }

    public function model(): BelongsToMany{
        return $this->belongsToMany(ModelBunga::class);
    }

    public function moment(): BelongsToMany{
        return $this->belongsToMany(MomentBunga::class);
    }
}
