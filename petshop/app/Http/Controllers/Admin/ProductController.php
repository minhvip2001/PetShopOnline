<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product; 
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::latest()->where('product_status', 'true')->paginate(5); 
        return view('admin.pages.product.index', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.pages.category.add'); 
        }

        Product::create([
            'product_name' => $request->category_name,
            'category_slug' => STR::slug($request->category_name),
            'category_ordinal' => 1,
            'user_id' => Auth::guard('admin')->user()->id,
        ]);
        $message = $request->category_name;
        session()->put('success', $message);
        return response()->json(['category_slug' => STR::slug($request->category_name)]);

       
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $slug)
    {
        if ($request->getMethod() == 'GET') {
            // $categories = Category::where('category_slug', $slug)->take(1)->get();
            return view('admin.pages.product.edit'); 
        }
        $categories = Category::where('category_slug', $slug)->take(1)->update(
            [
                'category_name' => $request->category_name,
                'category_slug' => Str::slug($request->category_name),
                'category_status' => $request->active,
            ]
        );
        $message = $request->category_name;
        session()->put('editsuccess', $message);
        return response()->json(['category_slug' => STR::slug($request->category_name)]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
