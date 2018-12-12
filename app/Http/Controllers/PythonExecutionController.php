<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonExecutionController extends Controller
{
    public function post(Request $request)
    {
        return response()->json(array('status'=> 'ok'), 200);
    }
}
