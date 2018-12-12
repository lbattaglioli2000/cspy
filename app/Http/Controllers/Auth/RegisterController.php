<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\NewAccount;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use Chatkit\Chatkit;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/student';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $user = new User();

      $user->name = $data['name'];
      $user->email = $data['email'];
      $user->password = Hash::make($data['password']);
      $user->profile_image_url = Storage::url('avatars/default.png');
      $user->current_unit = 1;
      $user->current_lesson = 1;

      $user->save();

      Mail::to($user)->send(new NewAccount($user));

      $chatkit = new Chatkit([
          'instance_locator' => 'v1:us1:5904d1c7-f33d-48b1-a5c5-d80a3f2ede36',
          'key' => 'a9b02b03-0b8e-4dc8-92fd-0ccc6ab63746:pIjjR0WRzXpoMjKPed3PX2hiuMelXoz27fdxJlw1o0U='
      ]);

      $chatkituser = $chatkit->createUser([
          'id' => $user->email,
          'name' => $user->name,
          'avatar' => $user->profile_image_url
      ]);

      return $user;

    }
}
