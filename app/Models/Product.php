<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_at',
        'price',
        'image',
        'stock_quantity'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    use HasFactory;


    protected static function newFactory()
    {
        return \Database\Factories\ProductFactory::new();
    }
}
