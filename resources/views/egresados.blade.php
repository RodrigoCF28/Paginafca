@extends('layouts.layoutSecundario')

@section('contenido')

{{-- ================= HERO PRINCIPAL ================= --}}
<section class="egresados-hero">

    <div class="egresados-overlay"></div>

    <div class="egresados-hero-content">

        <span class="egresados-badge">
            Comunidad FCA · Generación que trasciende
        </span>

        <h1>
            Celebrando a nuestros
            <span>Egresados FCA 2026</span>
        </h1>

        <p>
            Historias, logros y trayectorias de quienes han dejado huella
            dentro y fuera de la Universidad Autónoma de Yucatán.
        </p>

        <div class="egresados-actions">
            <a href="#graduados-destacados" class="btn-egresados-primary">
                Explorar perfiles
            </a>

            <a href="#networking" class="btn-egresados-secondary">
                Comunidad FCA
            </a>
        </div>

    </div>

</section>
<section class="egresados-cards-section" id="bolsa-de-trabajo">
    <div class="egresados-cards-container">
        <div class="egresados-card">
            <div class="egresados-card-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <h3>Bolsa de Trabajo</h3>
            <p>Encuentra oportunidades laborales exclusivas para egresados FCA.</p>
            <a href="#">Ver vacantes</a>
        </div>

        <div class="egresados-card">
            <div class="egresados-card-icon">
                <i class="fas fa-users"></i>
            </div>
            <h3>Networking</h3>
            <p>Conecta con otros egresados, docentes y aliados estratégicos.</p>
            <a href="#">Unirme</a>
        </div>

        <div class="egresados-card">
            <div class="egresados-card-icon">
                <i class="fas fa-award"></i>
            </div>
            <h3>Historias de Éxito</h3>
            <p>Conoce trayectorias inspiradoras de quienes ya destacan profesionalmente.</p>
            <a href="#">Explorar historias</a>
        </div>
    </div>
</section>
{{-- ================= COLLAGE HARVARD STYLE ================= --}}
<section class="egresados-collage-section">
    <div class="egresados-collage">
        <div class="collage-item collage-left-top" data-anim="from-left">
            <img src="{{ asset('images/graduados/1.jpg') }}" alt="Graduado 1">
        </div>

        <div class="collage-item collage-left-mid" data-anim="from-left">
            <img src="{{ asset('images/graduados/2.jpg') }}" alt="Graduado 2">
        </div>

        <div class="collage-item collage-top-center" data-anim="from-top">
            <img src="{{ asset('images/graduados/3.jpg') }}" alt="Graduado 3">
        </div>

        <div class="collage-item collage-right-top" data-anim="from-right">
            <img src="{{ asset('images/graduados/4.jpg') }}" alt="Graduado 4">
        </div>

        <div class="collage-item collage-right-mid" data-anim="from-right">
            <img src="{{ asset('images/graduados/5.jpg') }}" alt="Graduado 5">
        </div>

        <div class="collage-item collage-bottom-left" data-anim="from-bottom">
            <img src="{{ asset('images/graduados/6.jpg') }}" alt="Graduado 6">
        </div>

        <div class="collage-item collage-bottom-center" data-anim="from-bottom">
            <img src="{{ asset('images/graduados/7.jpg') }}" alt="Graduado 7">
        </div>

        <div class="collage-item collage-bottom-right" data-anim="from-bottom">
            <img src="{{ asset('images/graduados/8.jpg') }}" alt="Graduado 8">
        </div>

        <div class="collage-center">
            <h2>Comunidad de Egresados FCA</h2>
            <p>Profesionales que crecen, lideran y representan con orgullo a su facultad.</p>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     PARTE A · HISTORIAS QUE INSPIRAN
════════════════════════════════════════════ --}}
<section class="stories-section" id="graduados-destacados">

    <div class="stories-head">
        <span class="sec-label">Trayectorias que inspiran</span>
        <h2>Historias de nuestros egresados</h2>
        <p>Personas reales, caminos distintos, un mismo origen: la FCA.</p>
    </div>

    {{-- Historia principal: la primera destacada --}}
    @php $principal = $historias->first(); $secundarias = $historias->skip(1); @endphp

    @if($principal)
    <div class="story-featured">
        <div class="story-img"
             style="background-image: url('{{ asset('images/graduados/' . $principal->foto) }}')">
            <div class="story-img-overlay"></div>
            <div class="story-img-inner">
                <h3 class="story-name-over">{{ $principal->nombre }}</h3>
                <p class="story-title-over">{{ $principal->cargo }} · {{ $principal->empresa }}</p>
            </div>
        </div>
        <div class="story-body">
            <blockquote class="story-quote">{{ $principal->cita }}</blockquote>
            <p class="story-desc">{{ $principal->descripcion }}</p>
            <div class="story-tags">
                <span class="story-tag tag-empresa">{{ $principal->empresa }}</span>
                <span class="story-tag tag-sector">{{ $principal->area }}</span>
            </div>
            <a href="{{ $principal->linkedin }}" target="_blank" class="story-link">
                Ver perfil LinkedIn
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    @endif

    {{-- Historias secundarias --}}
    <div class="stories-grid">
        @foreach($secundarias as $historia)
        <div class="story-mini">
            <div class="story-mini-accent"></div>
            <div class="story-mini-body">
                <div class="story-mini-avatar">
                    {{ strtoupper(substr($historia->nombre, 0, 1)) }}{{ strtoupper(substr(explode(' ', $historia->nombre)[1] ?? 'X', 0, 1)) }}
                </div>
                <div class="story-mini-name">{{ $historia->nombre }}</div>
                <div class="story-mini-job">{{ $historia->cargo }} · {{ $historia->empresa }}</div>
                <div class="story-mini-quote">"{{ $historia->cita }}"</div>
            </div>
        </div>
        @endforeach
    </div>

</section>

{{-- ═══════════════════════════════════════════
     SEPARADOR
════════════════════════════════════════════ --}}
<div class="stories-divider">
    <div class="stories-divider-inner">
        <span>Y ellos también son FCA</span>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     PARTE C · COMUNIDAD · PRUEBA SOCIAL
════════════════════════════════════════════ --}}
<section class="community-section" id="comunidad-egresados">

    <div class="community-head">
        <div>
            <span class="sec-label">Nuestra comunidad</span>
            <h2>Más de 8,000 egresados activos</h2>
            <p>En empresas, despachos, gobierno e iniciativa propia.</p>
        </div>
    </div>

    {{-- Métricas --}}
    <div class="community-metrics">
        <div class="community-metric">
            <span class="metric-num" data-target="8400">0</span>
            <span class="metric-plus">+</span>
            <span class="metric-label">Egresados en activo</span>
        </div>
        <div class="community-metric">
            <span class="metric-num" data-target="12">0</span>
            <span class="metric-label">Países con presencia FCA</span>
        </div>
        <div class="community-metric">
            <span class="metric-num" data-target="94">0</span>
            <span class="metric-pct">%</span>
            <span class="metric-label">Empleados al primer año</span>
        </div>
        <div class="community-metric">
            <span class="metric-num" data-target="340">0</span>
            <span class="metric-plus">+</span>
            <span class="metric-label">Empresas fundadas</span>
        </div>
    </div>

    {{-- Grid compacta --}}
    <div class="community-grid" id="community-grid">
        @foreach($comunidad as $egresado)
        <div class="community-card">
            <div class="community-avatar">
                {{ strtoupper(substr($egresado->nombre, 0, 1)) }}{{ strtoupper(substr(explode(' ', $egresado->nombre)[1] ?? 'X', 0, 1)) }}
            </div>
            <div class="community-name">{{ $egresado->nombre }}</div>
            <div class="community-job">{{ $egresado->cargo }}</div>
            <div class="community-company">{{ $egresado->empresa }}</div>
        </div>
        @endforeach
    </div>

    {{-- Paginación --}}
    @if($comunidad->hasPages())
    <div class="community-pagination">
        {{ $comunidad->links('vendor.pagination.tailwind') }}
    </div>
    @endif

</section>

{{-- ================= CTA FINAL ================= --}}
<section class="graduates-cta" id="networking">

    <div class="graduates-cta-content">

        <span>FACULTAD DE CONTADURÍA Y ADMINISTRACIÓN</span>

        <h2>
            Mantente conectado con tu Alma Mater
        </h2>

        <p>
            Actualiza tus datos, participa en eventos y fortalece
            la red de egresados FCA.
        </p>

        <div class="graduates-cta-buttons">

            <a href="#" class="btn-egresados-primary">
                Actualizar información
            </a>

            <a href="#" class="btn-egresados-secondary">
                Ver eventos
            </a>

        </div>

    </div>

</section>

@endsection