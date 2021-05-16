@extends('layout.app')

@section('content')
    <ul>
        <li>Supporter: {{ count($supporters) }}</li>
        <li>Total: {{ $total }}</li>
    </ul>
    Supporter:
    <ul>
        @foreach ($supporters as $supporter)
            <li>{{ $supporter->supporterDetail->name }} = {{ $supporter->amount }} * {{ $supporter->item->name}} = {{ $supporter->total_price}}</li>
        @endforeach
    </ul>
@endsection