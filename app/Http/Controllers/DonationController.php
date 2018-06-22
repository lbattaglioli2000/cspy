<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Session;

class DonationController extends Controller
{
    public function index()
    {
      return view('student.donate');
    }

    public function confirm($ammount)
    {
      return view('student.donate-confirm', ['ammount'=>$ammount]);
    }

    public function charge(Request $request)
    {
          Stripe::setApiKey(env('STRIPE_SECRET'));

          try {
              \Stripe\Charge::create(array(
                      "amount" => $request->ammount,
                      "currency" => "usd",
                      "source" => $request->stripeToken, // obtained with Stripe.js
                      "description" => "Donation"
              ));
              Session::flash('success-message', 'Payment done successfully!');
              return back();
          } catch (Exception $e ) {
              Session::flash('fail-message', "Error! Please Try again.");
              return back();
          }
    }
}
