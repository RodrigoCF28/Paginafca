@extends('layouts.layoutSecundario')

@section('contenido')

{{-- ═══ HERO ═══ --}}
<div class="doc-hero">
    <div class="doc-hero-inner">
        <div class="doc-hero-badge">Facultad de Contaduría y Administración</div>
        <h1>Cuerpo <span>Académico</span> FCA</h1>
        <p>Expertos comprometidos con la formación integral de cada estudiante de la comunidad FCA.</p>
        <div class="doc-search-bar">
            <i class="fas fa-search"></i>
            <input type="text" id="doc-search" placeholder="Buscar por nombre, línea o grado...">
        </div>
    </div>
</div>

{{-- ═══ TABS ═══ --}}
<div class="doc-tabs-wrap">
    <div class="doc-tabs" id="doc-tabs">

        <button class="doc-tab active" data-cat="all">
            Todos
            <span class="doc-count">{{ $grupos->flatten()->count() }}</span>
        </button>

        @foreach($grupos as $categoria => $docentes)
            @if($docentes->count())
            <button class="doc-tab" data-cat="{{ $categoria }}">
                {{ Str::limit($categoria, 28) }}
                <span class="doc-count">{{ $docentes->count() }}</span>
            </button>
            @endif
        @endforeach

    </div>
</div>

{{-- ═══ CONTENIDO ═══ --}}
<div class="doc-content">

    <div class="doc-meta">
        <span class="doc-meta-label">
            Mostrando <strong id="doc-shown">8</strong> de
            <strong id="doc-total">{{ $grupos->flatten()->count() }}</strong> docentes
        </span>
    </div>

    <div class="doc-grid" id="doc-grid">
        @foreach($grupos as $categoria => $docentesGrupo)
            @foreach($docentesGrupo as $docente)
            <article
                class="doc-card"
                data-cat="{{ $categoria }}"
                data-search="{{ strtolower($docente->nombre . ' ' . $docente->linea_academica . ' ' . $docente->grado_academico) }}"
            >
                <div class="doc-card-photo">
                    <img
                        src="{{ $docente->foto }}"
                        alt="{{ $docente->nombre }}"
                        loading="lazy"
                        onerror="this.style.display='none'"
                    >
                    <span class="doc-card-grado">{{ $docente->grado_academico }}</span>
                </div>
                <div class="doc-card-body">
                    <div class="doc-card-name">{{ $docente->nombre }}</div>
                    <div class="doc-card-linea">{{ $docente->linea_academica }}</div>
                    <div class="doc-card-email">{{ $docente->correo }}</div>
                    <a href="#" class="doc-card-btn">Ver perfil académico</a>
                </div>
            </article>
            @endforeach
        @endforeach
    </div>

    <div class="doc-load-wrap" id="doc-load-wrap">
        <button class="doc-load-btn" id="doc-load-btn">
            <i class="fas fa-chevron-down"></i>
            Cargar más docentes
        </button>
    </div>

    <div class="doc-no-results" id="doc-no-results" style="display:none;">
        <i class="fas fa-user-slash"></i>
        No se encontraron docentes con esos criterios.
    </div>

</div>

@endsection