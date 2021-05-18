@extends('layout.app')

@section('content')
    <h1>Setting Page</h1>
    <button><a href="/item/create">Add Item</a></button>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }}</li>
            <ul>
                <li>Price: {{ $item->price }}</li>
                <li><button><a href="/item/{{ $item->id }}/edit">Edit item</a></button></li>
                <li>
                    <form action="/item/{{ $item->id }}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </li>
            </ul>
        @endforeach
    </ul>

@endsection