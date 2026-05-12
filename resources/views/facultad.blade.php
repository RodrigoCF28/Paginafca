@extends('layouts.layoutSecundario')

@section('contenido')
<div class="content">
    <div style="max-width: 900px; margin: 0 auto;">
        <h1 style="color: var(--uady-azul); text-align: center; margin-bottom: 40px;">Nuestra Facultad</h1>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 50px;">
            <div style="background: #f9f9f9; padding: 30px; border-radius: 12px; border-top: 4px solid var(--uady-azul);">
                <h2 style="color: var(--uady-azul);"><i class="fas fa-bullseye"></i> Misión</h2>
                <p>Formar profesionales e investigadores en las áreas contable y administrativa, con un alto sentido ético y responsabilidad social.</p>
            </div>

            <div style="background: #f9f9f9; padding: 30px; border-radius: 12px; border-top: 4px solid var(--uady-dorado);">
                <h2 style="color: var(--uady-azul);"><i class="fas fa-eye"></i> Visión</h2>
                <p>Ser una institución de excelencia académica, líder en la formación de cuadros directivos a nivel nacional e internacional.</p>
            </div>
        </div>

        <div style="text-align: center; background: var(--uady-azul); color: white; padding: 40px; border-radius: 12px;">
            <h2 style="color: var(--uady-dorado);">Luz, Ciencia y Verdad</h2>
            <p style="font-style: italic; font-size: 1.2rem;">Lema oficial de la Universidad Autónoma de Yucatán</p>
        </div>
    </div>
</div>
@endsection