@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Video Platform</div>

                <div class="card-body">




                    <div class="col-md-12 video-present">
                      @if(count($posts)>0)
                        @foreach ($posts->all() as $post)

                          <h4 class="title">{{ $post->post_title }}</h4>
                          <video src="{{ $post->post_video }}" controls poster="{{ asset('poster/nightroad.jpg') }}">
                          </video>
                          <p>{{ $post->post_body }}</p>
                          <h6>Posted Date: {{ $post->created_at }}</h6>
                          <h6>Category: {{ $post->category_id }}</h6>

                          <ul class="nav nav-pills">

                            <li role="presentation">
                              <a href='{{url("/like/{$post->id}")}}'>
                              <i class="fas fa-thumbs-up"></i>LIKE({{ $likeControl }})

                              </a>
                            </li>

                            <li>
                              <a href='{{url("/dislike/{$post->id}")}}'>
                                <i class="far fa-thumbs-down"></i>DISLIKE({{ $dislikeControl }})
                              </a>
                            </li>



                          </ul>
                          <hr>
                        @endforeach
                      @else
                        <p>There is no video Post</p>
                      @endif

                      <div >
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                      </div>

                      <form  method="post" action='{{ url("/commentPost/{$post->id}") }}' >
                        @csrf
                        <div class="form-group">
                          <textarea name="comment" rows="5" cols="60" class="form-control">
                          </textarea>
                        </div>

                        <div class="form-group">
                          <button class="btn btn-success" type="submit" >Post Comment</button>
                        </div>

                      </form>
                      <h3>Comments</h3>
                      <hr>
                        @if (count($comments)>0)
                          @foreach ($comments->all() as $comment)
                            <p>{{$comment->comment}}</p>
                            <p>Commented by:{{ $comment->name }}</p>
                            <hr>
                          @endforeach
                        @else
                          <p>There is no comment</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
