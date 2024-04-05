<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }
    public function showLogin()
    {
        return 'login here';
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
