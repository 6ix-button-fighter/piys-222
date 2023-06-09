<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'slug',
        'active',
        'created_at',
        'parent_category_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function parentCategory()
    {
        return $this->belongsTo(Categories::class, 'parent_category_id');
    }

    public function subcategories()
    {
        return $this->hasMany(Categories::class, 'parent_category_id');
    }

    use HasFactory;


    protected static function newFactory()
    {
        return \Database\Factories\CategoriesFactory::new();
    }
}
