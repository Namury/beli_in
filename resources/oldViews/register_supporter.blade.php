@extends('layout.app')

@section('content')
    <h1>Register Supporter</h1>
    <form method="POST" action="/register/supporter">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit">
    </form>
    
@endsection