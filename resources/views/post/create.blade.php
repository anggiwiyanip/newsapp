@extends('layouts.app')

@section('title','Create Blog')

@section('content')

<h1 class="my-4">Create Blog </h1>

<form method="POST" action="{{ route('index')}}" enctype="multipart/form-data">
@csrf

<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
</div>

<div class="mb-3">
    <label class="form-label">Content</label>
    <textarea type="text" class="form-control" name="content" id="editor"></textarea>
</div>

<div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" id="content" name="image" required>
</div>

<div class="mb-3">
    <button type="submit" class="btn btn-primary">Create Blog Now!</button>
</div>

</form>

@endsection