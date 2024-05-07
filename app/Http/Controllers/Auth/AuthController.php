<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister(): View
    {
        return view('auth.register');
    }

    public function showRegisterStep(string $type): View
    {
        $purposes = ['Common Entrance', 'Junior WAEC', 'Senior WAEC'];
        if ($type === 'school') {
            return view('auth.step.school', compact('purposes'));
        }

        return view('auth.step.student', compact('purposes'));
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

        return redirect()->route('show.user-profile');
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

    public function showRegisterGuardian()
    {
        return view('auth.guardian');
    }

    public function registerGuardian(Request $request)
    {
        // Validate user request data
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        return redirect()->route('show.user-profile');
    }
}
