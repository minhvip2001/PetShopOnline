<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Brand; 
use Illuminate\Support\Facades\Auth;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $brands = Brand::latest()->where('brand_status', 'true')->paginate(5); 
        return view('admin.pages.brand.index', compact('brands'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.pages.brand.add'); 
        }

        // Brand::create([
        //     'brand_name' => $request->brand_name,
        //     'brand_description' => $request->brand_description,
        //     'brand_slug' => STR::slug($request->brand_name),
        //     'brand_ordinal' => 1,
        //     'user_id' => Auth::guard('admin')->user()->id,
        // ]);
        $message = $request->brand_name;
        session()->put('success', $message);
        return response()->json(['brand_slug' => STR::slug($request->brand_name)]);

       
 
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
            $brands = Brand::where('brand_slug', $slug)->take(1)->get();
            return view('admin.pages.brand.edit', compact('brands')); 
        }
        $brands = Brand::where('brand_slug', $slug)->take(1)->update(
            [
                'brand_name' => $request->brand_name,
                'brand_description' => $request->Decription,
                'brand_slug' => Str::slug($request->brand_name),
                'brand_status' => $request->active,
            ]
        );
        $message = $request->brand_name;
        session()->put('editsuccess', $message);
        return response()->json(['brand_slug' => STR::slug($request->brand_name)]);

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
