<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /**
     * show the login page
     * 
     */
    public function index()
    {
        return view('auth.login');
    }

        /**
     * authentication login 
     * 
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Authentication passed...
            if(auth()->user()->role_id == '1'){
                return redirect()->route('admin.beranda');
            }else{
                return redirect()->route('contributor.beranda');
            }
        }
        return redirect()->back()->with('message', 'Email atau Password anda salah!');
    }

    /**
     * Logout 
     * 
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->intended('login');
    }
}