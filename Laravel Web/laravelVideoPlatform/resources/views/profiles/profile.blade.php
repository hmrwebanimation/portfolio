@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">

          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          @if (count($errors)>0)
            @foreach ($errors->all() as $error)
              <div>{{ $error }}</div>
            @endforeach

          @endif
            <div class="card">
                <div class="card-header">Your Profile Information</div>

                <div class="card-body">

                  <form method="POST" action="{{ url('/addProfile') }}" enctype="multipart/form-data">
                      @csrf


                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                          <div class="col-md-6">
                              <input id="designation" type="input" class="form-control @error('designation') is-invalid @enderror" name="designation" required autocomplete="current-designation">

                              @error('designation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="profile_photo" class="col-md-4 col-form-label text-md-right">{{ __('Upload Photo') }}</label>

                          <div class="col-md-6">
                              <input id="profile_photo" type="file" class="form-control @error('profile_photo') is-invalid @enderror" name="profile_photo" required autocomplete="current-profile_photo">

                              @error('profile_photo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-success">
                                  {{ __('Add Profile') }}
                              </button>


                          </div>
                      </div>
                  </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
