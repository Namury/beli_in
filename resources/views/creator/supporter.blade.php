@extends('layout.app')

@section('content')
    <ul>
        <li>Supporter: {{ count($supporters) }}</li>
    </ul>
    Supporter:
    <ul>
        @foreach ($supporters as $supporter)
            <li>{{ $supporter->supporterDetail->name }}</li>
        @endforeach
    </ul>
@endsection