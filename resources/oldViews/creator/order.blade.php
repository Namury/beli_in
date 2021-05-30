@extends('layout.app')

@section('content')

<h1>Support {{ $creator->name }}</h1>

<form method="POST" action="/{{ $creator->page_slug}}/order">
    @csrf
    <ul>
        @foreach ($creator->items as $item)
           <li>{{ $item->name }} : {{ $item->price }}</li> Amount: <input type="number" name="amount{{ $item->id }}" value=0>

        @endforeach
    </ul>
    <input type="submit">
</form>
@endsection