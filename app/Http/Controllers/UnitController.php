<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Unit;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $units = Unit::all()->sortBy("name");
        return view('admin.new.unit', compact('units'));
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "body" => "required"
        ]);

        $unit = new Unit();

        $unit->title = htmlentities($request->title);
        $unit->description = htmlentities($request->body);

        $unit->save();

        return redirect(route('admin.new.unit'));
      }

      public function edit(Request $request)
      {
        $unit = Unit::find($request->unit_id);

        $unit->title = $request->name;
        $unit->description= $request->description;

        $unit->save();

        return back();
      }
}
