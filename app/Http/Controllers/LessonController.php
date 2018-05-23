<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Unit;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $units = Unit::all();
        return view('admin.new.lesson', compact("units"));
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "unit" => "required",
            "body" => "required"
        ]);

        $lesson = new Lesson();

        $lesson->title = htmlentities($request->title);
        $lesson->unit_id = htmlentities($request->unit);
        $lesson->description = htmlentities($request->body);

        $lesson->save();

        return redirect(route('admin.new.lesson'));

    }
}
