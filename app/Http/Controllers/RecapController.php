<?php

namespace App\Http\Controllers;

use App\Recap;
use Illuminate\Http\Request;
use App\Unit;
use App\Lesson;

class RecapController extends Controller
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

        return view("admin.new.recap", [
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
            'recap' => 'distinct|string'
        ]);

        $recap = new Recap();

        $recap->lesson_id = $request->lesson;
        $recap->unit_id = $request->unit;
        $recap->recap = $request->recap;

        if($recap->save()){
          return redirect(route("admin"));
        }else{
          die();
        }

    }
}
