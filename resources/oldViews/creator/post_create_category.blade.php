@extends('layout.app')

@section('content')
    <h1>Create Post Category</h1>
    <form method="POST" action="/post/create/category">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="description">Description:</label>
        <textarea name="description" cols="30" rows="5" required></textarea><br>
        <input type="submit">
    </form>
@endsection