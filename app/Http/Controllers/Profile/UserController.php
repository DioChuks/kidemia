<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUserDashboard()
    {
        // gets performance of each subjects 
        // gets overall performance of all subjects that have assessment data

        // gets user information
        // $user = Auth::user();
        $user = [];

        return view('dashboard.user-dashboard', compact('user'));
    }
    
    public function showUserProfile()
    {
        return view('dashboard.user-profile.user-profile');
    }
}
