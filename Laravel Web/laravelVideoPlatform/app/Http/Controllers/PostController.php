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

class PostController extends Controller
{
    public function post(){
      $categories = Category::all();
      return view('posts.post',['categories'=>$categories]);
    }

    public function video(Request $request){
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
        $mime = $videofile->getMimeType();
        if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "video/webm" || $mime == "video/x-msvideo"||$mime == "application/x-mpegURL"
        || $mime == "video/3gpp" || $mime == "video/quicktime"|| $mime == "video/x-ms-wmv"){

          $videofile->move(public_path().'/videos/',$videofile->getClientOriginalName());
          $videourl = URL::to("/").'/videos/'.$videofile->getClientOriginalName();
        }else{
          return 'There is problem in Video format.';
        }

      }

      $posts->post_video = $videourl;

      $posts->category_id = $request->input('category_id');
      $posts->post_body = $request->input('post_body');


      $posts->save();

      return redirect('/home')->with('status','Video has been Uploaded Successfully');
    }
}
