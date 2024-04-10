<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $noOfStudents = 1200;
        $noOfSubjects = 500;
        $noOfTopics = 1300;
        $noOfTests = 1000;

        $data = [
            'studentsAmount' => $noOfStudents,
            'subjectsAmount' => $noOfSubjects,
            'topicsAmount' => $noOfTopics,
            'testsAmount' => $noOfTests
        ];
        return view('admin.index', compact('data'));
    }
}
