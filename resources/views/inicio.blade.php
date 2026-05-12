@extends('layouts.layout')

@section('contenido')

<div class="contenedor-inicio">
    <!-- IMAGEN ESTÁTICA PRINCIPAL -->
    <img src="{{ asset('images/fondo.png') }}" alt="Banner Principal" class="img-inicio">

    <!-- GALERÍA DE NOTICIAS -->
    <div class="galeria">
        @foreach($noticias as $noticia)
            <x-tarjeta 
                :imagen="$noticia->imagen"
                :titulo="$noticia->titulo"
                :descripcion="$noticia->descripcion"
            />
        @endforeach
    </div>

    <!-- CARRUSEL -->
    <div class="carrusel">
        @forelse($carruseles as $item)
            <div class="slide">
                <img src="{{ asset($item->imagen) }}" alt="{{ $item->titulo }}">
            </div>
        @empty
            <div class="slide active">
                <img src="{{ asset('images/fondo.png') }}" alt="Carrusel">
            </div>
        @endforelse
    </div>
</div>

@endsection