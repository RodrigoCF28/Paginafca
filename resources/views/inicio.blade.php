@extends('layouts.layout')

@section('contenido')

<div class="contenedor-inicio">
    <!-- CARRUSEL COMO BANNER PRINCIPAL -->
    <div class="carrusel">
        @forelse($carruseles as $item)
            <div class="slide">
                <img src="{{ asset($item->imagen) }}" alt="{{ $item->titulo }}">
            </div>
        @empty
            <div class="slide active">
                <img src="{{ asset('images/fondo.png') }}" alt="Banner Principal">
            </div>
        @endforelse
    </div>

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
</div>

@endsection