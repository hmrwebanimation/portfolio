@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Video Post BOX</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>


                  <form method="POST" action="{{ url('/addVideo') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="post_title" class="col-md-4 col-form-label text-md-right">{{ __('Full Title') }}</label>

                          <div class="col-md-6">
                              <input id="post_title" type="text" class="form-control @error('post_title') is-invalid @enderror" name="post_title" value="{{ old('post_title') }}" required autocomplete="post_title" autofocus>

                              @error('post_title')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="post_video" class="col-md-4 col-form-label text-md-right">{{ __('Videos') }}</label>

                          <div class="col-md-6">
                              <input id="post_video" type="file" class="form-control @error('post_video') is-invalid @enderror" name="post_video" required autocomplete="post_video">

                              @error('post_video')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="post_body" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                          <div class="col-md-6">
                              <textarea   class="form-control @error('post_body') is-invalid @enderror" rows="3" name="post_body" >
                                </textarea>
                              @error('post_body')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>

                          <div class="col-md-6">
                              <select id="category_id" type="category_id" class="form-control @error('category_id') is-invalid @enderror"  name="category_id" required autocomplete="new-category_id">
                                <option value="">Select</option>
                              @if (count($categories)>0)
                                @foreach ($categories->all() as $category)

                                  <option value="{{ $category->id }}">{{$category->category}}</option>
                                @endforeach
                              @endif
                              </select>

                              @error('category_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-success btn-block">
                                  {{ __('Upload Video') }}
                              </button>
                          </div>
                      </div>
                  </form>




            </div>
        </div>
    </div>
</div>
@endsection
