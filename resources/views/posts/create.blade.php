@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="caption" class="col-form-label">Post Caption </label>
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" 
                        name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <label for="image" class="col-form-label"> Post Image </label>
                    <input type="file", class="form-control-file" id="image" name="image">
                @error('image')
                        <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>

        <div>
            <div class="row pt-3">
                <div class="col-8 offset-2">
                    <button class="btn btn-primary"> Add New Post </button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection


