<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
       

        auth()->login($user);
        
        return redirect()->route('dashboard');
    }
}
