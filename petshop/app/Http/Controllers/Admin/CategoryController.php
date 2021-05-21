<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Components\Recursive;
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
        $categories = Category::where('category_status', 'true')->paginate(5); 
        return view('admin.pages.category.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getCategory(){
        $data = Category::all(); 
        $recursive = new Recursive($data);
        $list_cat = $recursive->categoryRecursive(); 
        return $list_cat; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $list_cat = $this->getCategory();
            return view('admin.pages.category.add', compact('list_cat')); 
        }
        Category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'parent_id' => $request->parent_id,
            'category_slug' => STR::slug($request->category_name),
            'category_status' => $request->active,
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
    public function show()
    {   
        return view('website.pages.category.index'); 
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
            $categories = Category::where('category_slug', $slug)->take(1)->get();
            $list_cat = $this->getCategory();
            return view('admin.pages.category.edit', compact('categories', 'list_cat')); 
        }
        $categories = Category::where('category_slug', $slug)->take(1)->update(
            [
                'category_name' => $request->category_name,
                'category_description' => $request->Description,
                'parent_id' => $request->parent_id,
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
