<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'categories';
    protected $fillable = [
        'category_name',
        'category_description',
        'category_slug',
        'parent_id',
        'category_ordinal',
        'user_id'
    ];
    public function categoryChildrent(){
        return $this->hasMany(Category::class, 'parent_id', 'category_id');
    }

}
