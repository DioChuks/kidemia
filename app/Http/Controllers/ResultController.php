<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function showTestResult()
    {
        return view("result.show-result");
    }

    public function showTestCorrection()
    {
        return view("correction.index");
    }
}
