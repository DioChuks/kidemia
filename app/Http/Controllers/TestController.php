<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function saveStudentTestTopics(Request $request)
    {
        return 'post topic was successful';
    }

    public function test()
    {
        return view('ongoing-test');
    }
}
