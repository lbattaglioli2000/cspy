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
    public function lecture($unit, $lesson)
    {
        $lessons = Unit::find($unit)->lessons()->get();
        if(count($lessons) > 0){
            foreach($lessons as $l)
            {
                if($l->id == $lesson){
                    return view('student.lecture', ['lesson' => $l]);
                }
            }
        }
        return view('student.error');
    }

    public function recap($unit, $lesson)
    {
        $lessons = Unit::find($unit)->lessons()->get();

        if(count($lessons) > 0){
            foreach($lessons as $l)
            {
                if($l->id == $lesson){
                    return view('student.recap', ['lesson' => $l]);
                }
            }
        }
        return view('student.error');
    }

    public function challenge($unit, $lesson)
    {
        $lessons = Unit::find($unit)->lessons()->get();

        if(count($lessons) > 0){
            foreach($lessons as $l)
            {
                if($l->id == $lesson){
                    return view('student.challenge', ['lesson' => $l]);
                }
            }
        }
        return view('student.error');
    }
}
