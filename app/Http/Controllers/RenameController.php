<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class RenameController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function unit(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'unit_id' => 'required'
    ]);

    $unit = Unit::find($request->unit_id);
    $unit->title = $request->name;
    
    $unit->save();

    return back();
  }
}
