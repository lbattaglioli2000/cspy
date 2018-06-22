<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;
use App\Unit;
use App\Lesson;

class LectureController extends Controller
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

        return view("admin.new.lecture", [
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
            'url' => 'distinct|string'
        ]);

        $lecture = new Lecture();

        $lecture->lesson_id = $request->lesson;
        $lecture->unit_id = $request->unit;
        $lecture->url = $request->url;

        $lecture->save();

        return redirect(route("admin"));

    }

    public function delete(Lesson $lesson)
    {
      $lesson->lecture->delete();
      return back();
    }

    public function edit(Lesson $lesson){
      return view('admin.edit.lecture', compact('lesson'));
    }

    public function editPOST()
    {
      // TODO: implement
    }
}
