<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewNotification;
use Illuminate\Http\Request;
use App\Notification;
use App\Unit;
use App\Lesson;
use App\User;

class NotificationController extends Controller
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

    return view("admin.new.notification", [
        'lessons' => $lessons,
        'lessonUnit' => $lessonUnit,
        'units' => $units
    ]);
  }

  public function post(Request $request)
  {
    $this->validate($request, [
      'title' => 'distinct|string|min:1|required',
      'body' => 'string|min:10|required'
    ]);

    $notification = new Notification();
    $notification->title = $request->title;
    $notification->body = $request->body;
    $notification->save();

    // $users = User::all();
    // $mailable = new NewNotification($notification);
    // $mailable->bcc($users);

    return back();

  }

  public function delete($id)
  {
    $notification = Notification::find($id);
    $notification->delete();
    return redirect(route('admin'));
  }
}
