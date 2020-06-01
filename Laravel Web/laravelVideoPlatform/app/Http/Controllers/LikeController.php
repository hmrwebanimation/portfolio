<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;

class LikeController extends Controller
{
  public function like($id){
    $login_user = Auth::user()->id;
    $like_user = Like::where(['user_id'=>$login_user,'post_id'=>$id])->first();
    if(empty($like_user->user_id)){
      $user_id = Auth::user()->id;
      $name = Auth::user()->name;
      $post_id = $id;

      $like = new Like;
      $like->user_id = $user_id;
      $like->name = $name;
      $like->post_id = $post_id;
      $like->save();

      return redirect('/open/{id}');
    }else{
      return redirect('/open/{id}');
    }
  }
}
