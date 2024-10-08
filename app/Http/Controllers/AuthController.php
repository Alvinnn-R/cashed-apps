<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('/login');
    }

    public function login(Request $request) {
        // return $request;

        $request->validate([
            // 'email' => 'required|email|exists:users,email',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();

            return redirect('/');
        };

        return back()->withErrors([
            'email' => 'Email atau Password tidak sesuai'
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
