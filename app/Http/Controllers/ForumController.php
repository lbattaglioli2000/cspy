<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index(){
        return view('student.forum');
    }

    public function post(Request $request){

        $this->validate($request, [
            "title" => "required",
            "unit" => "integer|required",
            "post" => "required"
        ]);

        if(Post::create([
            'user_id' => Auth::id(),
            'unit_id' => $request->unit,
            'title' => $request->title,
            'post' => $request->post
        ])){
            return back()->with("success", "Your post was posted!");
        }else{
            return back()->with("error", "Your post was <b>not</b> posted!");
        }

    }
}
