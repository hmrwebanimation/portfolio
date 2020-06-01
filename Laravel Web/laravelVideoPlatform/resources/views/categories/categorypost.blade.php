@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Video Platform</div>

                <div class="card-body">




                  <div class="col-md-4">

                    <h4>Video Categories</h4>

                    <ul class="list-group">

                      @if(count($categories)>0)
                        @foreach ($categories->all() as $category)
                          <li class="list-group-item"><a href='{{ url("category/{$category->id}") }}'>{{ $category->category }}</a></li>
                        @endforeach

                      @else
                        <p>No Category Found</p>
                      @endif
                    </ul>
                  </div>

                  <div class="col-md-8 video-present">
                    @if(count($posts)>0)
                      @foreach ($posts->all() as $post)

                        <h4 class="title">{{ $post->post_title }}</h4>
                        <video src="{{ $post->post_video }}" controls poster="{{ asset('poster/nightroad.jpg') }}">
                        </video>
                        <p>{{ $post->post_body }}</p>
                        <h6>Posted Date: {{ $post->created_at }}</h6>



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
@endsection
