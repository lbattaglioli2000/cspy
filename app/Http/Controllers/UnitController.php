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
}
