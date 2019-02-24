<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use Redirect;

class UserController extends Controller
{
    public function updatePassword(Request $request){

      $this->validate($request, [
        'current_password' => 'required',
        'password' => 'required|confirmed|min:8'
      ]);

      $user = Auth::user();

      if (Hash::check($request->current_password, $user->password)){

            $user->password = Hash::make($request->password);
            Session::flash('success', 'Your password has been updated!');

      } else {
        Session::flash('error', 'Your current password isn\'t correct! Please enter a new password!');
      }

      $user->save();

      return Redirect::to('/student/settings');

    }
}
