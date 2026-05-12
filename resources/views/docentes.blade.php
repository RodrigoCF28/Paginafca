@extends('layouts.layoutSecundario')

@section('contenido')

<div class="docentes-header">
    <div>
        <h1>Cuerpo Académico</h1>
        <p>Expertos comprometidos con la formación integral de la comunidad FCA</p>
    </div>

    <div class="docentes-search">
        <input id="searchDocente" type="search" placeholder="Buscar nombre, categoría o línea académica...">
    </div>

    <div class="uady-divider"></div>
</div>

<div class="contenedor-docentes">
    @foreach($grupos as $categoria => $docentesGrupo)
        @if($docentesGrupo->count())
            <section class="docente-group">
                <h2 class="group-title">{{ $categoria }}</h2>
                <div class="galeria-docentes">
                    @foreach($docentesGrupo as $docente)
                        <article class="tarjeta-docente docente-card" data-search="{{ strtolower($docente->nombre . ' ' . $docente->linea_academica . ' ' . $categoria) }}">
                            <div class="foto-container">
                                <img src="{{ $docente->foto }}" alt="{{ $docente->nombre }}">
                            </div>

                            <div class="info-docente">
                                <h3>{{ $docente->nombre }}</h3>

                                <div class="contacto-item">
                                    <i class="fas fa-book"></i>
                                    <span><strong>Línea académica:</strong> {{ $docente->linea_academica }}</span>
                                </div>

                                <div class="contacto-item">
                                    <i class="fas fa-envelope"></i>
                                    <span>{{ $docente->correo }}</span>
                                </div>
                            </div>

                            <div class="tarjeta-footer">
                                <a href="#" class="btn-perfil">
                                    Ver Perfil Académico
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
    @endforeach
</div>

<div id="noResultsDocentes" class="no-results" style="display: none;">
    No se han encontrado docentes con esos criterios.
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('searchDocente');
        const cards = document.querySelectorAll('.docente-card');

        if (!input) return;

        input.addEventListener('input', function () {
            const search = input.value.trim().toLowerCase();
            const groups = document.querySelectorAll('.docente-group');
            let anyVisible = false;

            cards.forEach(card => {
                const text = card.dataset.search || '';
                const visible = search === '' || text.includes(search);
                card.style.display = visible ? 'flex' : 'none';
                if (visible) anyVisible = true;
            });

            groups.forEach(group => {
                const visibleCard = group.querySelector('.docente-card[style*="display: flex"]');
                group.style.display = visibleCard ? 'block' : 'none';
            });

            const noResults = document.getElementById('noResultsDocentes');
            if (noResults) {
                noResults.style.display = anyVisible ? 'none' : 'block';
            }
        });
    });
</script>

@endsection