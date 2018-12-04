<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Lesson;

use Illuminate\Http\Request;

class CourseController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function lecture(Lesson $lesson)
    {
        if($lesson->lecture()->exists()) {
            return view('student.lecture', compact('lesson'));
        }else{
            return view('student.notfound');
        }
    }

    public function recap(Lesson $lesson)
    {
        if($lesson->recap()->exists()) {
            return view('student.recap', compact('lesson'));
        }else{
            return view('student.notfound');
        }
    }

    public function challenge(Lesson $lesson)
    {
        if($lesson->challenge()->exists()) {
            return view('student.challenge', compact('lesson'));
        }else{
            return view('student.notfound');
        }
    }
}
