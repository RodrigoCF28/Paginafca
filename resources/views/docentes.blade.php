@extends('layouts.layoutSecundario')

@section('contenido')

<h1>Docentes</h1>

<div class="galeria">
@foreach($docentes as $docente)

<div class="tarjeta">
    <img src="{{ $docente->foto }}">
    <h3>{{ $docente->nombre }}</h3>
    <p>{{ $docente->correo }}</p>
    <p>{{ $docente->telefono }}</p>
</div>

@endforeach
</div>

@endsection