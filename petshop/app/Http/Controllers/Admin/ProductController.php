<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\Recursive;
use Illuminate\Support\Str;
use App\Models\Product; 
use App\Models\Category; 
use App\Models\Brand; 
use App\Models\ProductImage; 
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
        return view('admin.pages.product.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            $brands = Brand::all();
            return view('admin.pages.product.add', compact('list_cat', 'brands')); 
        }

        $dataProductCreate = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_price_sale' => '1',
            'product_content' => $request->product_content,
            'product_description' => $request->product_description,
            'product_slug' => STR::slug($request->product_name),
            'product_ordinal' => 1,
            'product_status' => $request->product_active,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'user_id' => Auth::guard('admin')->user()->id,
        ];
       
        if($request->hasFile('product_image')){
            $file = $request->file('product_image') ;
            $fileName = $file->getClientOriginalName();
            $pathName =  STR::random(5).'-'.date('his').'-'.STR::random(3).'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/products/', $pathName);  
         
            $dataProductCreate['product_feature_image'] = $pathName;
            // Create image feature product
            $product = Product::create($dataProductCreate);
            if($request->hasFile('product_images')){
                foreach($request->file('product_images') as $fileItem){
                    $fileNameItem = $fileItem->getClientOriginalName();
                    $pathNameItem =  STR::random(5).'-'.date('his').'-'.STR::random(3).'.'.$fileItem->getClientOriginalExtension();
                    $pathImg = $fileItem->move(public_path().'/uploads/products/', $pathNameItem);  
                    // C2:
                    // $product->images()->create([
                    //     'image_path' => $pathNameItem
                    // ]);
                    C1: ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $pathNameItem
                    ]);
                }
            }
        }
        else{
            $product = Product::create($dataProductCreate);
        }
            
        $message = $request->product_name;
        session()->put('success', $message);
      
        return response()->json(['product_slug' => STR::slug($request->product_name)]);

       
 
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
            $id = 0;
            $list_cat = $this->getCategory();
            $brands = Brand::all();
            $categories = Category::all();
            $products = Product::where('product_slug', $slug)->take(1)->get();
            foreach ($products as $product) {
                $id = $product->product_id;
            }
            $prev = Product::Where('product_id', '>', $id)->orderBy('product_id', 'DESC')->limit(1)->get();
            $next = Product::Where('product_id', '<', $id)->orderBy('product_id', 'DESC')->limit(1)->get();

            return view('admin.pages.product.edit', compact('list_cat', 'brands', 'categories','products', 'next', 'prev')); 
        }

        $check = true;
        $dataProductUpdate = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_price_sale' => '1',
            'product_content' => $request->product_content,
            'product_description' => $request->product_description,
            'product_slug' => STR::slug($request->product_name),
            'product_ordinal' => 1,
            'product_status' => $request->product_active,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'user_id' => Auth::guard('admin')->user()->id,
        ];
      
        if($request->hasFile('product_image')){
            $check = false;
            $product_id = 0;
            $file = $request->file('product_image') ;
            $fileName = $file->getClientOriginalName();
            $pathName =  STR::random(5).'-'.date('his').'-'.STR::random(3).'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/products/', $pathName);  
         
            $dataProductUpdate['product_feature_image'] = $pathName;
            // Create image feature product
            $products = Product::where('product_slug', $slug)->take(1)->get();
            foreach ($products as $product) {
                $product_id = $product->product_id;
            }
            if($product->product_feature_image !=''){
                $destinationPath = 'uploads/products/'.$product->product_feature_image;
                if(file_exists($destinationPath)){
                    unlink($destinationPath);
                }
            }
            if ($check == false){
                if($request->hasFile('product_images')){
                    // get product_id in ProductImages
                    $images = ProductImage::where('product_id', '=', $product_id)->get();
                    foreach($images as $image):
                        $destinationUrl = 'uploads/products/'.$image->image_path;
                        if(file_exists($destinationUrl)){
                            unlink($destinationUrl);
                        }
                    endforeach;    
                    ProductImage::where('product_id', $product_id)->delete();
                    foreach($request->file('product_images') as $fileItem){
                        $fileNameItem = $fileItem->getClientOriginalName();
                        $pathNameItem =  STR::random(5).'-'.date('his').'-'.STR::random(3).'.'.$fileItem->getClientOriginalExtension();
                        $pathImg = $fileItem->move(public_path().'/uploads/products/', $pathNameItem);  
                        // C2:
                        // $products->images()->create([
                        //     'image_path' => $pathNameItem
                        // ]);
                        // C1: 
                        ProductImage::create([
                            'product_id' => $product_id,
                            'image_path' => $pathNameItem
                        ]);
                    }
                }
            }
        }
        if($check == true){
        if($request->hasFile('product_images')){
            $product_create_id = 0;
            $productCreats = Product::where('product_slug', $slug)->take(1)->get();
            foreach ($productCreats as $productCreat) {
                $product_create_id = $productCreat->product_id;
            }
            // get product_id in ProductImages
            
            foreach($request->file('product_images') as $fileItem){
                $fileNameItem = $fileItem->getClientOriginalName();
                $pathNameItem =  STR::random(5).'-'.date('his').'-'.STR::random(3).'.'.$fileItem->getClientOriginalExtension();
                $pathImg = $fileItem->move(public_path().'/uploads/products/', $pathNameItem);  
                // C2:
                // $products->images()->create([
                //     'image_path' => $pathNameItem
                // ]);
                // C1: 
                ProductImage::create([
                    'product_id' => $product_create_id,
                    'image_path' => $pathNameItem
                ]);
            }
        }
        }
        Product::where('product_slug', $slug)->take(1)->update($dataProductUpdate);
        $message = $request->product_name;
        session()->put('editsuccess', $message);
        return response()->json(['product_slug' => STR::slug($request->product_name)]);

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
