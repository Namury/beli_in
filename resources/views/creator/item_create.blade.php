@extends('layout.app')
@section('content')
    <h1>Create Item</h1>
    <form method="POST" enctype="multipart/form-data" action="/item/create">
        @csrf
        
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="price">Price:</label>
        <input type="number" name="price" required><br>
        <input type="submit">
    </form>
@endsection