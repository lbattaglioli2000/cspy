<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class SearchController extends Controller
{
    public function lesson(Request $request)
    {
      // Gets the query string from our form submission
      $query = $request->input('query');

      $lessons = Lesson::search($query)->get();

      // returns a view and passes the view the list of lessons and the original query.
      return view('student.search-results', compact('lessons', 'query'));
    }
}
