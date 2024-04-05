<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $type = 'exam';
        return view('take-exam', compact('type'));
    }
}
