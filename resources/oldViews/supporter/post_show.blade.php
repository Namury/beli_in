@extends('layout.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <article>{!!$post->content!!}</article>
@endsection