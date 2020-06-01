@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
          @if (count($errors)>0)
            @foreach ($errors->all() as $error)
              <div>{{ $error }}</div>
            @endforeach

          @endif
            <div class="container">
                <div class="row">


                <div class="card-header col-md-4">
                  Welcome to Video Platform
                </div>

                <div class="col-md-4 search-position">
                  <form method="post" action='{{ url("/search") }}' class="form-group">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="search" value="" class="form-control" placeholder="search">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>

                  </form>
                </div>

                </div>

                <div class="row justify-content-right">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-4">

                      @if (!empty($profile))
                          <img src="{{ $profile->profile_photo }}">
                        @else
                          <p>There is no image</p>
                      @endif

                      @if (!empty($profile))
                          <h4>{{ $profile->name }}</h4>
                        @else
                          <p>There is no name</p>
                      @endif

                      @if (!empty($profile))
                          <h4>{{ $profile->designation }}</h4>
                        @else
                          <p>There is no designation</p>
                      @endif

                    </div>





                </div>

                <div class="container">
                  <div class="row">
                    <div class="col-md-12 video-present">

                      @if(count($posts)>0)
                        @foreach ($posts->all() as $post)

                          <h4 class="title">{{ $post->post_title }}</h4>
                          <video src="{{ $post->post_video }}" controls poster="{{ asset('poster/nightroad.jpg') }}">
                          </video>
                          <p>{{ substr($post->post_body,0,200) }}</p>
                          <h6>Posted Date: {{ $post->created_at }}</h6>
                          

                          <ul class="nav nav-pills">

                            <li role="presentation">
                              <a href='{{url("/open/{$post->id}")}}'>
                                <i class="fas fa-eye"></i>OPEN

                              </a>
                            </li>

                            <li>
                              <a href='{{url("/edit/{$post->id}")}}'>
                                <i class="fas fa-edit"></i>EDIT
                              </a>
                            </li>

                            <li>
                              <a href='{{url("/delete/{$post->id}")}}'>
                                <i class="fas fa-trash"></i>DELETE
                              </a>
                            </li>

                          </ul>
                          <hr>
                        @endforeach
                      @else
                        <p>There is no video Post</p>
                      @endif



                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
