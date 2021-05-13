@extends('layout.app')

@section('content')

<h1>{{ Auth::user()->name }} My Post Placeholder</h1>
<button><a href="/post/create">New Post</a></button>
My Post:

<table class="table">
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Title</th>
        <th>Content</th>
        <th>Action</th>
    </tr>

    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->title }}</td>
            <td>{!! $post->content !!}</td>
            <td>
                <button><a href="/{{ $creator->page_slug }}/post/{{ $post->id }}">View</a></button>
                
                <form action="/post/{{ $post->id }}/edit" method="POST">
                    @csrf
                    <input type="hidden" name='post_id' value="{{ $post->id }}">
                    <button>Edit</button>
                </form>
                <form action="/post/{{ $post->id }}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name='post_id' value="{{ $post->id }}">
                    <button>Delete</button>
                </form>
            </td>
        </tr>

    @endforeach

</table>

@endsection