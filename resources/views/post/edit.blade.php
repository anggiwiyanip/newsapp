@extends('layouts.app')

@section('title', 'Edit Blog')

@section('content')

    <h1 class="my-4">Edit Blog </h1>

    <form method="POST" action="{{ route('update',$post->slug) }}" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea type="text" class="form-control" name="content" id="editor" value="{{$post->content}}">{{$post->content}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" id="content" name="image">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>

    <form method="POST" action="{{ url("posts/$post->slug") }}">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger mb-4">Delete</button>

    </form>

@endsection
