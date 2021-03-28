@extends('layout.app')

@section('content')
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        Email: <input type="email" id="email" name="email"><br>
        Password: <input type="password" id="password" name="password"><br>
        <input type="submit">
    </form>
@endsection