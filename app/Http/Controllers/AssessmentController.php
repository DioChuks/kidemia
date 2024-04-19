<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function submitAssessment(Request $request)
    {
        $minutesLeft = $request->input('minutes_left');
        $secondsLeft = $request->input('seconds_left');

        $selectedAnswers = [];

        try {

            foreach ($request->except(['minutes_left', 'seconds_left', '_token']) as $key => $value) {
                if (str_starts_with($key, 'question_')) {
                    $questionIndex = substr($key, strlen('question_'));
                    $selectedAnswers[$questionIndex] = $value;
                }
            }

            // Process the submitted data as needed
            // cross reference the submitted answer to the correct answer of the question id of a subject(topic)
            // generate a unique identifier for the submitted assessment request
            $a_id = Str::uuid();
            // save the unique identifier for the request in the db
            // redirect response to result containing the unique identifier show the performance of the assessment
            return response()->json([
                'a_id' => $a_id,
                'marked' => 'success'
            ], 301, ['url' => "/test/result/$a_id"]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
