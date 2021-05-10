<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {   
        // Auth::logout();
        // session()->flush();
        if ($request->getMethod() == 'GET') {
            return view('admin.pages.login.index');
        }
        $account = [
            'email' => $request->email,
            'password'=> $request->password
        ];
       
        if (Auth::guard('admin')->attempt($account)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('msg', 'The message');
        }
    }
}
