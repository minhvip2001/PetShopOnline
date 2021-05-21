<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'product_price',
        'product_price_sale',
        'product_content',
        'product_description',
        'product_feature_image',
        'product_slug',
        'parent_id',
        'product_ordinal',
        'category_id',
        'brand_id',
        'user_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'brand_id');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
