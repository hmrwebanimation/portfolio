<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Profile;


class ProfileController extends Controller
{
    public function profile(){
      return view('profiles.profile');
    }

    public function addProfile(Request $request){

      $this->validate($request,[
        'name'=>'required',
        'designation'=>'required',
        'profile_photo'=>'required|max:20000'
      ]);

      $profiles = new Profile;
      $profiles->user_id = Auth::user()->id;
      $profiles->name = $request->input('name');
      $profiles->designation = $request->input('designation');
      if(Input::hasFile('profile_photo')){
        $file = Input::file('profile_photo');
        $file->move(public_path().'/profilephoto/',
        $file->getClientOriginalName());

        $url = URL::to("/").'/profilephoto/'.
               $file->getClientOriginalName();


      }

      $profiles->profile_photo = $url;
      $profiles->save();

     return redirect('/home')->with('status','Profile has been Added Successfully');
    }
}
