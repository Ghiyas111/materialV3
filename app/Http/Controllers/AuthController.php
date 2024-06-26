<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login_admin()
    {
        return view('admin.auth.login');
    }
    
    public function auth_login_admin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1], $remember))
        {
            return redirect()->route('Admin_Dashboard');
        }
        else
        {
            return redirect()->back()->with('error', "Please enter currect email and password");
        }
    }

    public function logout_admin()
    {
        Auth::logout();
        return redirect('admin');

    }
}
