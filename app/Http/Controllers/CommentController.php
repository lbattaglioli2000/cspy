<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function post(Request $request){
        $this->validate($request, [
            'comment' => 'required',

        ]);

        if(Comment::create([
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'post_id' => $request->post
        ])){
            return back()->with('success', 'Your comment has been posted!');
        }else{
            return back()->with('error', 'Your comment has <b>not</b> been posted!');
        }
    }
}
