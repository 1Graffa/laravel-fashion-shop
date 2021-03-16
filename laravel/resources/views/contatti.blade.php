@extends('layouts.app')

@section('titolo','Contatti')

@section('content')
<h1>Contatti</h1>
<p>E-mail: {{ $email }}</p>
<p>Telefono: {{ $tel }}</p>

@endsection