<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'product_id';
    protected $table = 'products';
  
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
        return $this->hasMany(ProductImage::class, 'product_id', 'product_id');
    }
    public function orders(){
        return $this->belongsToMany(Product::class, 'order_details', 'product_id', 'order_id');
    }
}
