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
<section class="egresados-cards-section">
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

{{-- ================= BLOQUES DESTACADOS ================= --}}


{{-- ================= PERFILES ================= --}}
<section class="graduates-showcase" id="graduados-destacados">

    <div class="section-heading">

        <span>COMUNIDAD FCA</span>

        <h2>Egresados Destacados</h2>

        <p>
            Profesionales formados en la FCA que hoy generan impacto.
        </p>

    </div>

    <div class="graduates-grid">

        @foreach($graduates as $graduate)

<article class="graduate-profile">

    <div class="graduate-image">

        <img
            src="{{ asset('images/graduados/' . $graduate->foto) }}"
            alt="{{ $graduate->nombre }}"
        >

    </div>

    <div class="graduate-body">

        <span class="graduate-generation">

            Generación {{ $graduate->generacion }}

        </span>

        <h3>
            {{ $graduate->nombre }}
        </h3>

        <h4 class="graduate-job">

            {{ $graduate->cargo }}

        </h4>

        <p>

            {{ $graduate->descripcion }}

        </p>

        <div class="graduate-company">

            {{ $graduate->empresa }}

        </div>

        <a
            href="{{ $graduate->linkedin }}"
            target="_blank"
        >
            Ver LinkedIn
        </a>

    </div>

</article>

@endforeach

    </div>

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