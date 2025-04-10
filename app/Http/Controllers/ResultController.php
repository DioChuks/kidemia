<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function showTestResult($id)
    {
        // find the result of the request $id
        return view("result.show-test-result", ['id' => $id]);
    }

    public function showTestCorrection()
    {
        return view("correction.test.index");
    }

    public function showExamResult($id)
    {
        // find the result of the request $id
        return view("result.show-exam-result", ['id' => $id]);
    }

    public function showExamCorrection()
    {
        return view("correction.exam.ecindex");
    }

    /**
     * Terminates ongoing test or exam status
     */
    public function toggleTestOrExamStatus(Request $request)
    {
        // validate the request
        try {
            $request->validate([
                'assessment_id' => 'required|string',
            ]);
            // find ongoing assessment for the user based on the request->id
            return response()->json(['status' => 'ok', 'msg' => 'terminated'], 301);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['status' => 'bad', 'msg' => $th->getMessage()], 500); 
        }
    }
}
