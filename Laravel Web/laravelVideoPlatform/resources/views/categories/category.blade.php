@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="color:green;">Video Category Page</div>
                  @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                  @endif
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-info" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/addCategory') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right" style="color:green;">{{ __('Enter Category') }}</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Add Category') }}
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
