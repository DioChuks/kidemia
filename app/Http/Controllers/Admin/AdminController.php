<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function showReport(): View
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
        return view('admin.report', compact('data'));
    }

    public function showSubjects(): View
    {
        // get the list of available subjects
        // $subjects = Subject::all();
        // get the number of questions and topics attached to each subject

        $subjects = [
            [
                "subject" => "Mathematics",
                "uuid" => "x9dwd-3dnod3-fnd39d-fwj",
                "questions" => [
                    "What is x + 1 = 7? Find x",
                    "Solve 299 - (-299)",
                    "Solve 390 * (-390)",
                    "Solve 105 / 15"
                ],
                "topics" => [
                    "Algebra",
                    "Calculus",
                    "Geometry",
                    "Number Theory",
                ],
            ],
            [
                "subject" => "English Language",
                "uuid" => "9fr0j-fe9jd-fwejw-hfid",
                "questions" => [
                    "What is a verb?",
                    "What is a clause?",
                    "What is a sentence?",
                    "What is a word?"
                ],
                "topics" => [
                    "Vocabulary",
                    "Literature",
                    "Writing",
                    "Linguistics",
                    "Grammar"
                ],
            ],
            [
                "subject" => "Verbal Reasoning",
                "uuid" => "oefo-30dj-pwi3d-39hd9",
                "questions" => [
                    "Identify the word that is the opposite of 'diligent'",
                    "Choose the word that best completes the sentence: 'The politician's speech was _____ and failed to address the concerns of the public.'",
                    "Which word is the odd one out in the following group?",
                    "Identify the analogy that makes the most sense:",
                    "Choose the word that best fits the given definition:"
                ],
                "topics" => [
                    "Analogies",
                    "Sentence Completion",
                    "Reading Comprehension",
                    "Logical Reasoning",
                    "Vocabulary"
                ],
            ],
            [
                "subject" => "History",
                "uuid" => "wfhq-3nidw-fwiqd-msl3d",
                "questions" => [
                    "Which ancient civilization is credited with developing one of the earliest writing systems, cuneiform?",
                    "What was the primary cause of the American Revolution?",
                    "Who was the last monarch of the Russian Empire before the Bolshevik Revolution?",
                    "Which battle is considered a turning point in World War II in favor of the Allied forces?",
                    "What was the primary goal of the Renaissance humanist movement?",
                ],
                "topics" => [
                    "Ancient Civilizations",
                    "World Wars",
                    "Renaissance and Reformation",
                    "Revolutions",
                    "Colonial and Post-Colonial Eras"
                ],
            ],
        ];
        return view('admin.subjects', compact('subjects'));
    }

    public function addQuestion()
    {
        $subjects = [
            [
                "name" => "Mathematics",
                "uuid" => "x9dwd-3dnod3-fnd39d-fwj"
            ],
            [
                "name" => "English Language",
                "uuid" => "9fr0j-fe9jd-fwejw-hfid"
            ],
            [
                "name" => "Verbal Reasoning",
                "uuid" => "oefo-30dj-pwi3d-39hd9"
            ],
            [
                "name" => "History",
                "uuid" => "wfhq-3nidw-fwiqd-msl3d"
            ],
        ];

        return view('admin.question.index', compact('subjects'));
    }

    public function newQuestion($subject)
    {
        // $uuid = $subject->uuid;
        return view('admin.question.create', compact('subject'));
    }

    /*
    * Create a new question from the request
    * for a subject with given topic
    **/
    public function createQuestion(Request $request)
    {
        return 'question created';
    }
}
