<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Post;

class SearchController extends Controller
{
    public function search(Request $request){
      $user_id = Auth::user()->id;
      $profile = Profile::find($user_id);
      $keyword = $request->input('search');
      $posts = Post::where('post_title','LIKE','%'.$keyword.'%')->get();
      return view('/posts.searchposts',['profile'=>$profile,'posts'=>$posts]);
    }
}
