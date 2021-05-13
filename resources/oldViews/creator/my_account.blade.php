@extends('layout.app')

@section('content')

<h1>Akun Saya</h1>
<button><a href="/post/create">Follow</a></button>

<form method="POST" action="/register/creator">
    @csrf
    @method('PATCH')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $user->name }}" required><br>
    <label for="user_type_id">Expertise:</label>
    <select name="user_type_id" id="user_type_id" required>
        @foreach ($user_types as $user_type)
            @if ($user->user_type_id == $user_type->id )
                <option value="{{ $user_type->id }}" selected>{{ $user_type->name }}</option>
                
            @else
                <option value="{{ $user_type->id }}">{{ $user_type->name }}</option>
            @endif
        @endforeach
    </select><br>
    <label for="description">Description:</label>
    <textarea name="description" cols="30" rows="5" required>{{ $user->description }}</textarea><br>
    <input type="submit">
</form>

<h2>Follower</h2>
<ul>
    @foreach ($follower as $item)
        <li>{{ $item->followed->name }}</li>  
    @endforeach
</ul>

<h2>Following</h2>
<ul>
    @foreach ($following as $item)
        <li>{{ $item->follower->name }}</li>
    @endforeach
</ul>

@endsection