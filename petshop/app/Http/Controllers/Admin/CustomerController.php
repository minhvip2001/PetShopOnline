<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer; 
use App\Models\Order; 
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customers = Customer::latest()->where('customer_status', 'true')->paginate(5); 
        return view('admin.pages.customer.index', compact('customers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function login(Request $request)
    { 
        if ($request->getMethod() == 'GET') {
            return view('website.pages.login.index');
        }
        $account = [
            'email' => $request->email,
            'password'=> $request->password
        ];
        if (Auth::guard('web')->attempt($account)) {
            $auth_id = Auth::guard('web')->user()->customer_id;
            $auth = Auth::guard('web')->user()->customer_name;
            if(session()->has('url')){
                if(session()->get('url') == '2'){
                    session()->put('auth_id', $auth_id);
                    session()->put('auth', $auth);
                    session()->forget('url');
                    return redirect()->route('checkout');
                }
            }
            session()->put('auth_id', $auth_id);
            session()->put('auth', $auth);
            return redirect()->route('home');
        } else {
            dd('sss');
            return redirect()->back()->with('msg', 'Tài khoản hoặc mật khẩu không đúng');
        }    
    }

    public function logout(Request $request)
    {
        if ($request->getMethod() == 'GET') {  
            if(session()->has('url')){
                if(session()->get('url') == '2'){
                    session()->forget('auth');
                    session()->forget('auth_id');
                    session()->forget('url');
                    return redirect()->route('checkout');
                }
            }
            session()->forget('auth');
            session()->forget('auth_id');
            return redirect()->route('home');
        }
        
    }
    
    public function register(Request $request)
    {
        if ($request->getMethod() == 'GET') {  
            return view('website.pages.register.index');
        }
        Customer::create([
            'customer_surname' => $request->firstName,
            'customer_name' => $request->lastName,
            'customer_phone' => $request->phone,
            'email' => $request->phone,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('login');
    }

    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.pages.customer.add'); 
        }
    }

    public function profile(Request $request)
    {
        
        if ($request->getMethod() == 'GET') {
            $customer = Customer::find(session()->get('auth_id'));  
            return view('website.pages.profile.index', compact('customer'));
        }
        
    }
    public function address(Request $request)
    {
        
        if ($request->getMethod() == 'GET') {  
            return view('website.pages.profile.address');
        }
        
    }
    public function order(Request $request, $id)
    {
        if ($request->getMethod() == 'GET') {
            $order = Order::find($id);
            return view('website.pages.order.detail', compact('order'));
        }
        
    }
    public function edit(Request $request, $id)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.pages.customer.edit'); 
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
