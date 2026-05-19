@extends('layouts.layout')

@section('contenido')

  <section class="hero-inicio">
    {{-- Fondo principal --}}
    <img
        src="{{ asset('images/fondo.png') }}"
        alt="Fondo"
        class="hero-bg"
    >

    {{-- Overlay cinematográfico --}}
    <div class="hero-overlay"></div>

    {{-- Facultad PNG --}}
    <img
        src="{{ asset('images/facultad.png') }}"
        alt="Facultad"
        class="hero-facultad"
    >

    {{-- Contenido --}}
    <div class="hero-content">

        <span class="hero-tag">
            Facultad de Contaduría y Administración
        </span>

        <h1>
            Liderazgo académico
            con visión global
        </h1>

    </div>

</section>

<div class="contenedor-inicio">
    <!-- GALERÍA DE NOTICIAS -->
    <section class="seccion-noticias">
        <h2 class="noticias-titulo">Noticias</h2>
        <div class="galeria">
            @foreach($noticias as $noticia)
            <x-tarjeta 
                :imagen="$noticia->imagen"
                :titulo="$noticia->titulo"
                :descripcion="$noticia->descripcion"
            />
        @endforeach
        </div>
    </section>

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