@extends('layout.app')

@section('content')

<h1>{{ $creator->name }}</h1>
@if (Auth::user() != null)
    @if (Auth::user()->id == $creator->id)
        <button disabled>Follow</button>
    @elseif (App\Models\Follow::where([['follower', Auth::user()->id], ['followed', $creator->id]])->first() != null) 
        <button disabled>Followed</button><br>
    @else
        <form method="POST" action="/follow/{{$creator->id }}">
            @csrf
            <button>Follow</button>
        </form>
    @endif
@else
    <form method="POST" action="/follow/{{$creator->id }}">
        @csrf
        <button>Follow</button>
    </form>
@endif

<button><a href="/{{ $creator->page_slug }}/order">Support</a></button><br>
Post:
<ul>
    @foreach ($posts as $post)
        <li><a href="{{ $post->user->page_slug }}/post/{{ $post->id }}"> {{ $post->title }}</a></li>
    @endforeach
</ul>
@endsection