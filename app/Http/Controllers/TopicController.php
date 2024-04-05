<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($subject, $type)
    {
        // finds the topics associated with the selected subject
        $topics = [
            "Number Systems",
            "Operations with Numbers",
            "Order of Operations (PEMDAS)",
            "Exponents and Radicals",
            "Algebraic Expressions & Equations",
            "Inequalities",
            "Functions",
            "Linear Relationships & Slope",
            "Systems of Linear Equations",
            "Matrices & Determinants",
            "Polynomials",
            "Geometry Basics",
            "Perimeter, Area, and Volume",
            "Pythagorean Theorem & Trigonometry",
            "Circles and Their Properties",
            "Similarity and Congruence",
            "Probability & Statistics",
            "Logic and Set Theory",
            "Logic Puzzles and Brainteasers",
            "Real-World Applications of Mathematics",
            "History of Mathematics",
            "Famous Mathematical Problems",
            "Number Theory & Prime Numbers",
            "Combinatorics and Permutations",
            "Sequences and Series",
            "Limits and Continuity",
            "Derivatives and Applications",
            "Integrals and Applications",
            "Statistics and Probability Distributions",
            "Linear Algebra and Applications",
        ];
        return view('dashboard.pickTopic', compact('subject', 'topics', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
