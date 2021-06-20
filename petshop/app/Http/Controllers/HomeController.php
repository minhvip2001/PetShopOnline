<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Category; 
use App\Components\Recursive;

class HomeController extends Controller
{
    public function getCategory(){
        $data = Category::all();  
        $recursive = new Recursive($data);
        $list_cat = $recursive->categoryRecursive(); 
        return $list_cat; 
    }

    public function index()
    {   
        $categories = Category::whereNull('parent_id')->where('category_status', 'true')->limit(10)->get();
        $list_cat = $this->getCategory();
        $dog_foods = Product::Latest()->where('product_status', 'true')->limit(8)->get();
        return view('website.pages.home.index', compact('dog_foods', 'categories', 'list_cat')); 
    }
}
