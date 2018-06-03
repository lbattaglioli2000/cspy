<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Unit;
use App\User;
use App\Notification;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();
        $notifications = Notification::all();
        $users = User::all();
        $requests = DB::table('c9_account_requests')->select('*')->get();

        return view('admin.dashboard', [
          'units' => $units,
          'notifications' => $notifications,
          'users' => $users,
          'requests' => $requests
        ]);
    }

    public function users()
    {
        $users = User::all();
        $units = Unit::all();
        return view('admin.users', [
            'users' => $users,
            'units' => $units
        ]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect("/admin/users");
    }

    public function admins()
    {
        $admins = Admin::all();
        $units = Unit::all();
        return view('admin.admins', [
            'admins' => $admins,
            'units' => $units
        ]);
    }


    public function deleteAdmin($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin/admins');
    }

    public function newAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $admin = new Admin();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);

        $admin->save();

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();


        return redirect("/admin/admins");
    }

    public function deleteRequest($id)
    {
      DB::table('account_requests')->where('id', '=', $id)->delete();
      return redirect(route('admin'));
    }
}
