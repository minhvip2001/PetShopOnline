<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Order; 

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
      $cartModel = view('website.pages.home.component.cartModel')->render();
      $cartMini = view('website.pages.home.component.cartMini')->render();
      return response()->json([
        'data'=>$cartModel,
        'data1'=>$cartMini
      ]); 
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
            $cartModel = view('website.pages.home.component.cartModel')->render();
            $cartMini = view('website.pages.home.component.cartMini')->render();
            return response()->json([
                'data'=> $cartComponent,
                'data1'=> $cartModel,
                'data2'=> $cartMini
            ]);
          }
    }

    public function destroy(Request $request)
    {
      if($request->id){
        $carts=session()->get('cart');
        unset($carts[$request->id]);
        session()->put('cart', $carts);
        $cartComponent = view('website.pages.cart.component.cart')->render();
        $cartModel = view('website.pages.home.component.cartModel')->render();
        $cartMini = view('website.pages.home.component.cartMini')->render();
        return response()->json([
            'data'=> $cartComponent,
            'data1'=> $cartModel,
            'data2'=> $cartMini
        ]);
      }   
    }
}
