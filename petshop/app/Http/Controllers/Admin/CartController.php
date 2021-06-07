<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; 
use App\Helper\Cart;

use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // session()->forget('cart');
        return view('website.pages.cart.index');   
    }

    public function create(Request $request,$id)
    {
      $product = Product::find($id);
      $cart = session()->has('cart') ? session()->get('cart') : null; 

      if(isset($cart[$id])){
        $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->product_qty;
      } else {
        $cart[$id] = [
            'id' => $product->product_id,
            'name' => $product->product_name,
            'image' => $product->product_feature_image,
            'price' => $product->product_price,
            'slug' => $product->product_slug,
            'quantity' => $request->product_qty
        ];
      }
      session()->put('cart', $cart);
      return response()->json($cart); 
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
          if($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $cartComponent = view('website.pages.cart.component.cart')->render();
            return response()->json([
                'data'=> $cartComponent
            ]);
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
