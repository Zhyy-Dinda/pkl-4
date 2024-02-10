<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // =========Login==============
    public function login()
    {
        return view("auth.login");
    }


     // =========register==============
    
    // =========register==============
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    } 


    public function authenticate(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect("/dashboard");
        }

        return back()->withErrors([
            'loginError' => 'Email atau Password salah'
        ]);
    }
}
