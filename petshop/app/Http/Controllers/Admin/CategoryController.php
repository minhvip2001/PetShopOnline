<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category; 
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = Category::latest()->where('category_status', '1')->paginate(5); 
        return view('admin.pages.category.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        // Category::create([
        //     'category_name' => $request->category_name,
        //     'category_slug' => STR::slug($request->category_name),
        //     'category_ordinal' => 1,
        //     'user_id' => Auth::guard('admin')->user()->id,
        // ]);
        
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
    public function edit(Request $request, $id)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.pages.category.edit'); 
        }
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
