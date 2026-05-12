@extends('layouts.layoutSecundario')

@section('contenido')
<div class="content">
    <header style="border-left: 5px solid var(--uady-dorado); padding-left: 15px; margin-bottom: 30px;">
        <h1 style="color: var(--uady-azul); font-size: 2.5rem;">Comunidad de Egresados</h1>
        <p style="color: var(--texto-secundario);">Orgullo y trascendencia de la Facultad de Contaduría y Administración.</p>
    </header>

    <div class="galeria">
        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <div style="background: var(--uady-azul); height: 150px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-graduate" style="font-size: 3rem; color: white;"></i>
            </div>
            <div style="padding: 20px;">
                <h3 style="color: var(--uady-azul);">Bolsa de Trabajo</h3>
                <p>Encuentra las mejores oportunidades laborales exclusivas para nuestra comunidad FCA.</p>
                <a href="#" style="color: var(--uady-dorado); font-weight: bold; text-decoration: none;">Ver vacantes →</a>
            </div>
        </div>

        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <div style="background: var(--uady-dorado); height: 150px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-certificate" style="font-size: 3rem; color: white;"></i>
            </div>
            <div style="padding: 20px;">
                <h3 style="color: var(--uady-azul);">Seguimiento</h3>
                <p>Mantente en contacto con tu alma mater y participa en nuestros eventos anuales.</p>
                <a href="#" style="color: var(--uady-dorado); font-weight: bold; text-decoration: none;">Actualizar datos →</a>
            </div>
        </div>
    </div>
</div>
@endsection