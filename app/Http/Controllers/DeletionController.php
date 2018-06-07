<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lesson;
use App\Unit;

class DeletionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function lesson(Lesson $lesson)
    {
      $lesson->delete();
    }

    public function unit(Unit $unit)
    {
      $unit->delete();
    }
}
