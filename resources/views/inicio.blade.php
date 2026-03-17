@extends('layouts.layout')

@section('contenido')


<img src="{{ asset('images/fondo.png') }}" alt="Fondo" class="img-inicio">

<div class="galeria">

@foreach($noticias as $noticia)

<x-tarjeta 
    :imagen="$noticia->imagen"
    :titulo="$noticia->titulo"
    :descripcion="$noticia->descripcion"
/>

@endforeach


</div>
<div class="carrusel">

@foreach($carruseles as $item)
    <div class="slide">
        <img src="{{ asset($item->imagen) }}">
    </div>
@endforeach

</div>
@endsection