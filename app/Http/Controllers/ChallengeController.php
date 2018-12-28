<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Lesson;
use App\Challenge;

class ChallengeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

    public function index(Request $request)
    {
        $units = Unit::all();

        $lessonUnit = $request->unit;
        $lessons = Lesson::where('unit_id', $lessonUnit)->get();

        return view("admin.new.challenge", [
            'lessons' => $lessons,
            'lessonUnit' => $lessonUnit,
            'units' => $units
        ]);
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'lesson' => 'numeric|min:1',
            'unit' => 'numeric|min:1',
            'challenge' => 'distinct|string'
        ]);

        $challenge = new Challenge();

        $challenge->lesson_id = $request->lesson;
        $challenge->unit_id = $request->unit;
        $challenge->challenge = $request->challenge;

        $challenge->pre_exercise_code = $request->pre_code;
        $challenge->sample_code = $request->sample_code;
        $challenge->solution = $request->solution_code;
        $challenge->sct = $request->sct_code;
        $challenge->hint = $request->hint_code;

        if($challenge->save()){
          return redirect(route("admin"));
        }else{
          die();
        }

    }
}
