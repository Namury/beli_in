@extends('layout.app')

@section('content')
    <h1>{{ Auth::user()->name }} Explore Placeholder</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->user->name }}: <a href="{{ $post->user->page_slug }}/post/{{ $post->id }}"> {{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection