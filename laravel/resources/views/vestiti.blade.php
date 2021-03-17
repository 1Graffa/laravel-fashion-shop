@extends('layouts.app')

@section('titolo','vestiti')

@section('content')

{{-- @foreach($dresses as $vestito)
<div>
    <h2>{{ ($vestito->modello) }}</h2>
    <h2>{{ ($vestito->taglia) }}</h2>
    <h2>{{ ($vestito->colore) }}</h2>
</div>
<hr>
@endforeach --}}

@dump($vestiti)

@endsection