@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('update', ['id' => $post->id]) }}">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form--label">Body</label>
                <input type="text" name="body" class="form-control" id="body" value="{{ $post->body }}">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Desc</label>
                <input type="text" name="desc" class="form-control" id="desc" value="{{ $post->desc }} ">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection()
