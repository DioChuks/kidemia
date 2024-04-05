<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index($type)
    {
        return view('dashboard.pickSubject', ['type' => $type]);
    }
}
