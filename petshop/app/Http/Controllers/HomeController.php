<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class HomeController extends Controller
{
    public function index()
    {   
        $dog_foods = Product::Latest()->where('product_status', 'true')->limit(8)->get();
        return view('website.pages.home.index', compact('dog_foods')); 
    }
}
