<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use App\Unit;
use App\Notification;
use DB;
use Hash;
use Auth;

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

    public function cloud9Request(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|unique:account_requests'
      ]);

      $name = $request->name;
      $email = $request->email;

      DB::table('c9_account_requests')->insert(['name' => $name, 'email' => $email]);

      $request->session()->flash('alert-success', "Your request was submitted! We'll get back to you!");
      return redirect(route('student.cloud9'));
    }
}
