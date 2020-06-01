<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Profile;
use App\Post;

class EditController extends Controller
{
    public function edit($post_id){
      $categories = Category::all();
      $posts = Post::find($post_id);
      $category = Category::find($posts->category_id);
      return view('posts.edit',['categories'=>$categories,'posts'=>$posts,'category'=>$category]);
    }

    public function editPost(Request $request,$post_id){
      $this->validate($request,[
        'post_title'=>'required',
        'post_video'=>'required',
        'category_id'=>'required',
        'post_body'=>'required'
      ]);

      $posts = new Post;
      $posts->user_id = Auth::user()->id;
      $posts->post_title = $request->input('post_title');
      if(Input::hasFile('post_video')){
        $videofile = Input::file('post_video');
        $videofile->move(public_path().'/videos/',$videofile->getClientOriginalName());
        $videourl = URL::to("/").'/videos/'.$videofile->getClientOriginalName();
      }

      $posts->post_video = $videourl;

      $posts->category_id = $request->input('category_id');
      $posts->post_body = $request->input('post_body');

      $newdata= array(
        'user_id'=>$posts->user_id,
        'post_title'=>$posts->post_title,
        'post_video'=>$posts->post_video,
        'category_id'=>$posts->category_id,
        'post_body'=>$posts->post_body
      );

      Post::where('id',$post_id)->update($newdata);

      $posts->update();

      return redirect('/home')->with('status','Video Post has been Updated Successfully');
    }
}
