<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password'); // Change 'email' to 'username'

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['username' => 'Invalid credentials']); // Change 'email' to 'username'
    }
}
