@extends('layout.app')
@section('content')
    <h1>Create Item</h1>
    <form method="POST" enctype="multipart/form-data" action="/item/{{ $item->id }}/edit">
        @csrf
        @method('PATCH')
        
        <label for="name">Name:</label>
        <input type="text" name="name" required value="{{ $item->name }}"><br>
        <label for="price">Price:</label>
        <input type="number" name="price" required value="{{ $item->price }}"><br>
        <input type="submit">
    </form>
@endsection