<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Dislike;

class DislikeController extends Controller
{
  public function dislike($id){
    $login_user = Auth::user()->id;
    $dislike_user = Dislike::where(['user_id'=>$login_user,'post_id'=>$id])->first();
    if(empty($dislike_user->user_id)){
      $user_id = Auth::user()->id;
      $name = Auth::user()->name;
      $post_id = $id;

      $dislike = new Dislike;
      $dislike->user_id = $user_id;
      $dislike->name = $name;
      $dislike->post_id = $post_id;
      $dislike->save();

      return redirect('/open/{id}');
    }else{
      return redirect('/open/{id}');
    }
  }
}
