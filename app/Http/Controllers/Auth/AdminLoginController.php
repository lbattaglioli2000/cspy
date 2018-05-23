<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout', 'getLogout']]);
    }

    public function index()
    {
        return view("auth.admin.login");
    }

    public function post(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log user in
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)){
            return redirect()->intended('admin');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }

}
