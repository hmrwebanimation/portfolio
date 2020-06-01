<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\user;
use App\Profile;
use App\Post;
use App\Category;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $profile = DB::table('users')->join('profiles','users.id','=','profiles.user_id')
                                     ->select('users.*','profiles.*')
                                     ->where(['profiles.user_id'=>$user_id])
                                     ->first();




        $posts = Post::paginate(3);
        $categories = Category::all();



        return view('home',['profile'=>$profile,'posts'=>$posts,'categories'=>$categories]);
    }


    public function category($catid){
      $categories = Category::all();
      $posts = DB::table('posts')
             ->join('categories','posts.category_id','=','categories.id')
             ->select('posts.*','categories.*')
             ->where(['categories.id'=>$catid])
             ->get();
      return view('categories.categorypost',['categories'=>$categories,'posts'=>$posts]);
    }




}
