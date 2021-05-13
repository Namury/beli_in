@extends('layout.app')
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@section('content')
    <h1>Edit Post</h1>
    <form method="POST" enctype="multipart/form-data" action="/post/{{ $post->id }}/edit">
        @csrf
        @method('PATCH')

        <label for="title">Name:</label>
        <input type="text" name="title" required value="{{ $post->title }}"><br>
        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option disabled> - select one - </option>
            @foreach ($categories as $category)
                @if ($post->category->id == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select><br>
        <label for="content">Content:</label>
        <textarea name="content" id="editor" rows="10" cols="80" required>
            {!! $post->content !!}
        </textarea><br>
        <input type="submit">
    </form>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection