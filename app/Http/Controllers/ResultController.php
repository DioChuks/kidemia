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

    /**
     * Terminates ongoing test or exam status
     */
    public function toggleTestOrEXamStatus(Request $request)
    {
        // validate the request
        try {
            $request->validate([
                'id' => 'required|string',
            ]);
            // find ongoing assessment for the user based on the request->id
            return response()->json(['status' => 'ok', 'msg' => 'terminated'], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['status' => 'bad', 'msg' => $th->getMessage()], 500); 
        }
    }
}
