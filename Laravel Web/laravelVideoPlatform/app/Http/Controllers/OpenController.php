<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Like;
use App\Dislike;

class OpenController extends Controller
{
    public function open($post_id){


      $posts = Post::where('id','=',$post_id)->get();
      $likePost = Post::find($post_id);
      $likeControl = Like::where(['post_id'=>$likePost->id])->count();
      $dislikeControl = Dislike::where(['post_id'=>$likePost->id])->count();

      $comments = DB::table('users')
                ->join('comments','users.id','=','comments.user_id')
                ->join('posts','comments.post_id','=','posts.id')
                ->select('users.name','comments.*')
                ->where(['posts.id'=>$post_id])
                ->get();



      return view('posts.open',['posts'=>$posts,'likeControl'=>$likeControl,'dislikeControl'=>$dislikeControl,'comments'=>$comments]);
    }


}
