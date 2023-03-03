<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
        // Menampilkan halaman pendaftaran
        public function index () {
            return view('auth.register');
        }
    
        // Memproses pendaftaran
        public function registration(Request $request)
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            return redirect()->route('login');
        }
}
