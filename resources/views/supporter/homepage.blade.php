@extends('layout.app')

@section('content')
    <h1>{{ Auth::user()->name }} Homepage Placeholder</h1>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ $post->user->page_slug}}/support">{{ $post->user->name }}</a> : <a href="{{ $post->user->page_slug }}/post/{{ $post->id }}"> {{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection