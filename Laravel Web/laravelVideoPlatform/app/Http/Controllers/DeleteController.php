<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DeleteController extends Controller
{
    public function delete($post_id){
      Post::where('id',$post_id)->delete();
      return redirect('/home')->with('status','Video Post has been deleted successfully');
    }
}
