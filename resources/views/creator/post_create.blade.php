@extends('layout.app')
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@section('content')
    <h1>Create Post</h1>
    <form method="POST" enctype="multipart/form-data" action="/post/create">
        @csrf
        
        <label for="title">Name:</label>
        <input type="text" name="title" required><br>
        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option disabled selected> - select one - </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><button><a href="/post/create/category">Create Category</a></button><br>
        <label for="content">Content:</label>
        <textarea name="content" id="editor" rows="10" cols="80" required></textarea><br>
        <input type="submit">
    </form>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection