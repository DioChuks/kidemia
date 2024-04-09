<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        $purposes = ['Common Entrance', 'Junior WAEC', 'Senior WAEC'];
        return view('auth.register', compact('purposes'));
    }
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showForgot()
    {
        return view('auth.forgot-password');
    }

    public function showChangePassword()
    {
        return view('auth.change-password');
    }

    public function register(Request $request)
    {
        // Validate user request data
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required|string',
            'purpose' => 'required|string',
            'gender' => 'required|string',
            'guardian_email' => 'required|email',
        ]);
    }

    public function login(Request $request)
    {
        // validate incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if(auth()->attempt($request->only('email', 'password'))) {
            return redirect()->intended('/');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
