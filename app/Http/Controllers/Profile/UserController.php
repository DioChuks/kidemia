<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserProfile()
    {
        return view('dashboard.user-profile.user-profile');
    }
}
