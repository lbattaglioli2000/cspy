<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use App\Unit;
use App\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();
        $lessons = Lesson::all();

        return view('student.dashboard', [
            'units' => $units,
            'lessons' => $lessons
        ]);
    }

    public function chat()
    {
      return view('student.chat');
    }

    public function notifications()
    {
      $notifications = Notification::all();

      return view('student.notifications', [
        'notifications' => $notifications
      ]);

    }

    public function settings()
    {
      return view('student.settings');
    }

    public function cloud9()
    {
      return view('student.cloud9');
    }

    public function cloud9Post(Request $request)
    {
      $name = $request->name;
      $email = $request->email;

      
    }
}
