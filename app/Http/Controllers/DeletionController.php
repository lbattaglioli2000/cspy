<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Lesson;
use App\Unit;

class DeletionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function unit(Unit $unit)
    {
      if (!is_null($unit) && $unit->exists())
      {
        foreach ($unit->lessons as $lesson) {
          if(!is_null($lesson) && $lesson->exists())
          {

            if(!is_null($lesson->lecture) && $lesson->lecture->exists())
            {
              $lesson->lecture->delete();
            }
            if(!is_null($lesson->recap) && $lesson->recap->exists())
            {
              $lesson->recap->delete();
            }
            if(!is_null($lesson->challenge) && $lesson->challenge->exists())
            {
              $lesson->challenge->delete();
            }

            $lesson->delete();

          }
        }
        
        $unit->delete();

        Session::flash('success-message', "The unit was deleted.");
        return redirect('/admin/course/manage');
      }

      Session::flash('danger-message', "The unit doesn't exist!");
      return redirect('/admin/course/manage');

    }

    public function lesson(Lesson $lesson)
    {

      if(!is_null($lesson) && $lesson->exists())
      {
        if(!is_null($lesson->lecture) && $lesson->lecture->exists())
        {
          $lesson->lecture->delete();
        }
        if(!is_null($lesson->recap) && $lesson->recap->exists())
        {
          $lesson->recap->delete();
        }
        if(!is_null($lesson->challenge) && $lesson->challenge->exists())
        {
          $lesson->challenge->delete();
        }

        $lesson->delete();

        Session::flash('success-message', "The lesson was deleted.");
        return redirect('/admin/course/manage');
      }

      Session::flash('danger-message', "The lesson doesn't exist!");
      return redirect('/admin/course/manage');

    }

    public function lecture(Lesson $lesson)
    {
      if(!is_null($lesson->lecture) && $lesson->lecture->exists())
      {
        $lesson->lecture->delete();

        Session::flash('success-message', "The lecture was deleted.");
        return redirect('/admin/course/manage');
      }

      Session::flash('danger-message', "The lecture doesn't exist!");
      return redirect('/admin/course/manage');
    }

    public function recap(Lesson $lesson)
    {
      if(!is_null($lesson->recap) && $lesson->recap->exists())
      {
        $lesson->recap->delete();

        Session::flash('success-message', "The recap was deleted.");
        return redirect('/admin/course/manage');
      }

      Session::flash('danger-message', "The recap doesn't exist!");
      return redirect('/admin/course/manage');

    }

    public function challenge(Lesson $lesson)
    {
      if(!is_null($lesson->challenge) && $lesson->challenge->exists())
      {
        $lesson->challenge->delete();

        Session::flash('success-message', "The challenge was deleted.");
        return redirect('/admin/course/manage');
      }

      Session::flash('danger-message', "The challenge doesn't exist!");
      return redirect('/admin/course/manage');

    }
}
