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
        return view('student.dashboard');
    }

    public function unit(Unit $unit){
        return view('student.unit', compact('unit'));
    }

    public function settings()
    {
      return view('student.settings');
    }

    public function notifications(){
        return view('student.notifications');
    }

    public function cloud9()
    {
      return view('student.cloud9');
    }

    public function cloud9Request(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|unique:c9_account_requests'
      ]);

      $name = $request->name;
      $email = $request->email;

      DB::table('c9_account_requests')->insert(['name' => $name, 'email' => $email]);

      $request->session()->flash('alert-success', "Your request was submitted! We'll get back to you!");
      return redirect(route('student.cloud9'));
    }
}
