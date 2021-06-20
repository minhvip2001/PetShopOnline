<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer; 
use App\Models\Order; 
use App\Models\OrderDetail; 
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    
    
    public function index()
    {
        $orders = Order::all();
        return view('admin.pages.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id="")
    {
    }

    public function checkout(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $customer = null;
            if(session()->has('auth')){
                $customer = Customer::find(session()->get('auth_id'));
            }
            return view('website.pages.order.index', compact('customer'));
        }
        $customer = '';
        if (!session()->has('auth')){
           $customer = Customer::create([
            'customer_surname' => $request->surname,
            'customer_name' => $request->name,
            'customer_phone' => $request->phone,
            'customer_note' => $request->note,
            'customer_address' => $request->address,
            'customer_city' => $request->city,
            'customer_district' => $request->district,
            'customer_ward' => $request->ward,
            ]);
            session()->put('customer', $customer->customer_id); 
        }
        else{
            $customer = Customer::find(session()->get('auth_id'))->update([
                'customer_surname' => $request->surname,
                'customer_name' => $request->name,
                'customer_phone' => $request->phone,
                'customer_address' => $request->address,
                'customer_city' => $request->city,
                'customer_district' => $request->district,
                'customer_ward' => $request->ward,
                ]);
        }
        $order = Order::create([
            'customer_id'=>session()->has('auth') ? session()->get('auth_id') : $customer->customer_id 
        ]);
        foreach (session()->get('cart') as $item){
            OrderDetail::create([
                'order_id' => $order->order_id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'paymentMethod' => $request->payment,
                'shippingMethod' => $request->shipping,
            ]);
        }
        session()->forget('cart');
        session()->forget('quantity_cart');
        // return redirect()->route('success');
        return response()->json(['msg' => 'Order successful']);
    }
    
    public function success(Request $request)
    {   
        if (session()->has('customer')){
            $customer = session()->get('customer');
        }else{
            $customer = session()->get('auth_id');
        }
        $order = Order::latest()->where('customer_id' , $customer)->get();
        return view('website.pages.order.bill', compact('order'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id="")
    {
        return view('admin.pages.order.edit');  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
