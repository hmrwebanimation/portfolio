<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function comment(Request $request, $post_id){
      $this->validate($request,[

        'comment'=>'required',
      ]);
      $comment = new Comment;
      $comment->name = Auth::user()->name;
      $comment->user_id = Auth::user()->id;
      $comment->post_id = $post_id;
      $comment->comment = $request->input('comment');
      $comment->save();

      return redirect("/open/{$post_id}")->with('status','Comment has been Published');
    }
}
