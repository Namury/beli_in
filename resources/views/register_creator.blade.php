@extends('layout.app')

@section('content')
    <h1>Register Creator</h1>
    <form method="POST" action="/register/creator">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="user_type_id">Expertise:</label>
        <select name="user_type_id" id="user_type_id" required>
            <option disabled selected> - select one - </option>
            @foreach ($user_types as $user_type)
                <option value="{{ $user_type->id }}">{{ $user_type->name }}</option>
            @endforeach
        </select><br>
        <label for="page_name">Page Name:</label>
        @if ($page_name != null)
            <input type="text" name="page_name" value="{{ $page_name }}" required><br>
        @else
            <input type="text" name="page_name" required><br>
        @endif
        <label for="description">Description:</label>
        <textarea name="description" cols="30" rows="5" required></textarea><br>
        <input type="submit">
    </form>
    
@endsection