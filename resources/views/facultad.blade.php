@extends('layouts.layoutSecundario')

@section('contenido')

<section class="facultad-hero">

    <div class="facultad-hero-overlay"></div>

    <div class="facultad-hero-content">

        <span class="facultad-badge">
            Facultad de Contaduría y Administración
        </span>

        <h1>
            Formando líderes con
            <span>visión global</span>
        </h1>

        <p>
            Una comunidad académica comprometida con la excelencia,
            la innovación y el desarrollo profesional en Yucatán
            y México.
        </p>

        <div class="facultad-hero-buttons">

            <a href="#acerca" class="btn-facultad-primary">
                Conocer más
            </a>

            <a href="#historia" class="btn-facultad-secondary">
                Nuestra historia
            </a>

        </div>

    </div>

    {{-- STATS FLOATING --}}

    <div class="facultad-stats">

        <div class="facultad-stat-card">
            <h3>60+</h3>
            <p>Años de historia</p>
        </div>

        <div class="facultad-stat-card">
            <h3>8,000+</h3>
            <p>Egresados</p>
        </div>

        <div class="facultad-stat-card">
            <h3>5</h3>
            <p>Programas académicos</p>
        </div>

    </div>

    <div class="facultad-scroll-indicator">

        <span></span>

    </div>

</section>

{{-- =========================================================
   ACERCA DE NOSOTROS
========================================================= --}}

<section class="facultad-about" id="acerca">

    <div class="facultad-about-grid">

        {{-- LEFT CONTENT --}}

        <div class="facultad-about-content">

            <span class="facultad-section-tag reveal">
                Acerca de Nosotros
            </span>

            <h2 class="reveal">
                Más de seis décadas impulsando
                el conocimiento y liderazgo empresarial
            </h2>

            <p class="facultad-about-intro reveal">
                La Facultad de Contaduría y Administración forma
                profesionales capaces de transformar organizaciones
                mediante la innovación, la ética y la excelencia académica.
            </p>

            {{-- BLOCKS --}}

            <div class="facultad-about-block reveal delay-1">

                <div class="facultad-about-icon">
                    <i class="fas fa-bullseye"></i>
                </div>

                <div>

                    <h3>Misión</h3>

                    <p>
                        Formar profesionales e investigadores en las áreas
                        contable y administrativa con responsabilidad social,
                        liderazgo y compromiso ético.
                    </p>

                </div>

            </div>

            <div class="facultad-about-block reveal delay-2">

                <div class="facultad-about-icon">
                    <i class="fas fa-eye"></i>
                </div>

                <div>

                    <h3>Visión</h3>

                    <p>
                        Ser referente nacional e internacional en educación
                        superior, investigación e innovación en ciencias
                        económico-administrativas.
                    </p>

                </div>

            </div>

            <div class="facultad-about-block reveal delay-3">

                <div class="facultad-about-icon">
                    <i class="fas fa-gem"></i>
                </div>

                <div>

                    <h3>Valores</h3>

                    <p>
                        Ética, excelencia, inclusión, innovación,
                        compromiso social y trabajo colaborativo.
                    </p>

                </div>

            </div>

        </div>

        {{-- RIGHT VISUAL --}}

        <div class="facultad-about-visual reveal">

            <div class="facultad-about-image">

                <img
                    src="{{ asset('images/facultad/about.jpg') }}"
                    alt="Facultad FCA"
                >

            </div>

            {{-- IMAGE CAPTION --}}

            <div class="facultad-about-caption">

                <span class="facultad-caption-line"></span>

                <div>

                    <h3>Luz, Ciencia y Verdad</h3>

                    <p>
                        Principios que inspiran la formación
                        universitaria de la UADY.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="facultad-history" id="historia">

    <div class="facultad-history-heading">
        <span class="facultad-section-tag">Nuestra Historia</span>
        <h2>Una trayectoria construida<br>con excelencia y visión</h2>
        <p>Décadas de crecimiento académico, innovación y compromiso con la sociedad yucateca.</p>
    </div>

    <div class="facultad-timeline-wrapper">
        <div class="facultad-timeline-track">
            <div class="facultad-timeline" id="facultadTimeline">

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">1964</span>
                        <h3>Fundación de la Facultad</h3>
                        <p>Inician las actividades académicas enfocadas en la formación de profesionales en contaduría y administración.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">1972</span>
                        <h3>Primera Generación de Egresados</h3>
                        <p>La facultad consolida sus primeros programas y celebra la graduación de sus primeras generaciones.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">1982</span>
                        <h3>Expansión Académica</h3>
                        <p>Se fortalecen los programas educativos y la infraestructura institucional de la FCA.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">1995</span>
                        <h3>Nuevos Programas de Posgrado</h3>
                        <p>Incorporación de maestrías y especialidades para fortalecer la formación de alto nivel.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">2005</span>
                        <h3>Acreditaciones Nacionales</h3>
                        <p>Los programas obtienen reconocimientos de calidad académica a nivel nacional por organismos acreditadores.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">2012</span>
                        <h3>Internacionalización</h3>
                        <p>Se firman los primeros convenios internacionales y se inicia el programa de movilidad estudiantil.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">2020</span>
                        <h3>Transformación Digital</h3>
                        <p>La FCA fortalece sus procesos tecnológicos y adopta modelos de educación digital e híbrida.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-particles">
                            <span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="timeline-year">2024</span>
                        <h3>60 Años de Excelencia</h3>
                        <p>La Facultad celebra seis décadas formando líderes y profesionales comprometidos con Yucatán y México.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="timeline-controls">
            <button class="timeline-btn" id="timelinePrev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="timeline-progress" id="timelineProgress"></div>
            <button class="timeline-btn" id="timelineNext">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

</section>


{{-- =========================================================
   DIRECTORIO
========================================================= --}}

<section class="facultad-directory" id="directorio">

    <div class="facultad-directory-heading">

        <span class="facultad-section-tag reveal">
            Directorio
        </span>

      <h2 class="reveal delay-1">
            <div class="directory-heading-line reveal delay-2"></div>
            Liderazgo académico
            e institucional
        </h2>

        <p class="reveal delay-3">
            Profesionales comprometidos con la excelencia
            educativa y el desarrollo de la comunidad universitaria.
        </p>

    </div>

    <div class="directory-grid">

        {{-- CARD 1 --}}

        <article class="directory-card reveal delay-1">

            <div class="directory-image">

                <img
                    src="{{ asset('images/directorio/director.jpg') }}"
                    alt="Director FCA"
                >



                <div class="directory-overlay"></div>

            </div>

            <div class="directory-content">

                <h3>
                    Dr. Nombre Apellido
                </h3>

                <span class="directory-role">
                    Director
                </span>

                <p>
                    Liderando la transformación académica y
                    estratégica de la Facultad.
                </p>

            </div>

        </article>

        {{-- CARD 2 --}}

       <article class="directory-card reveal delay-2">

            <div class="directory-image">

                <img
                    src="{{ asset('images/directorio/secretaria.jpg') }}"
                    alt="Secretaría Académica"
                >

                <div class="directory-overlay"></div>

            </div>

            <div class="directory-content">

                <h3>
                    Mtra. Nombre Apellido
                </h3>

                <span class="directory-role">
                    Secretaría Académica
                </span>

                <p>
                    Coordinación y fortalecimiento de los
                    programas educativos institucionales.
                </p>

            </div>

        </article>

        {{-- CARD 3 --}}

        <article class="directory-card reveal delay-3">

            <div class="directory-image">

                <img
                    src="{{ asset('images/directorio/admin.jpg') }}"
                    alt="Administración"
                >

                <span class="directory-role">
                    Administración
                </span>

                <div class="directory-overlay"></div>

            </div>

            <div class="directory-content">

                <h3>
                    Lic. Nombre Apellido
                </h3>

                 <span class="directory-role">
                    Administración
                </span>

                <p>
                    Gestión administrativa y desarrollo
                    institucional de la FCA.
                </p>

            </div>

        </article>

    </div>

</section>
{{-- =========================================================
   PLAN DE DESARROLLO
========================================================= --}}

<section class="facultad-plan" id="plan-desarrollo">

    <div class="facultad-plan-heading">

       <span class="facultad-section-tag reveal">
            Plan de Desarrollo
        </span>

        <h2 class="reveal delay-1">
            <div class="plan-heading-line reveal delay-2"></div>
            Innovación, crecimiento
            y visión estratégica
        </h2>

        <p class="reveal delay-2">
            Impulsando una facultad moderna, sostenible
            y centrada en la excelencia académica.
        </p>

    </div>

    {{-- MÉTRICAS --}}

    <div class="plan-metrics">

       <div class="metric-card reveal delay-1">

<div class="metric-number">

    <h3 class="counter" data-target="95">0</h3>

    <span>%</span>

</div>

            <p>
                Satisfacción estudiantil
            </p>

        </div>

        <div class="metric-card reveal delay-2">

            <h3 class="counter" data-target="42">0</h3>

            <span>+</span>

            <p>
                Convenios institucionales
            </p>

        </div>

        <div class="metric-card reveal delay-3">

            <h3 class="counter" data-target="18">0</h3>

            <span></span>

            <p>
                Programas de innovación
            </p>

        </div>

        <div class="metric-card reveal delay-4">

            <h3 class="counter" data-target="2030">0</h3>

            <span></span>

            <p>
                Visión estratégica
            </p>

        </div>

    </div>

    {{-- ROADMAP --}}

    <div class="plan-roadmap">

        <div class="roadmap-line"></div>

        <div class="roadmap-item reveal delay-1">

            <div class="roadmap-dot"></div>

            <div class="roadmap-content">

                <span>Transformación Digital</span>

                <h3>
                    Ecosistema tecnológico universitario
                </h3>

                <p>
                    Modernización de plataformas académicas,
                    infraestructura digital y servicios inteligentes.
                </p>

            </div>

        </div>

        <div class="roadmap-item">

            <div class="roadmap-dot"></div>

            <div class="roadmap-content">

                <span>Investigación</span>

                <h3>
                    Impulso científico y académico
                </h3>

                <p>
                    Fortalecimiento de cuerpos académicos,
                    investigación aplicada y producción científica.
                </p>

            </div>

        </div>

        <div class="roadmap-item">

            <div class="roadmap-dot"></div>

            <div class="roadmap-content">

                <span>Internacionalización</span>

                <h3>
                    Vinculación global
                </h3>

                <p>
                    Expansión de alianzas internacionales,
                    movilidad estudiantil y cooperación académica.
                </p>

            </div>

        </div>

    </div>

</section>
{{-- =========================================================
   ORGANIZACIÓN
========================================================= --}}

<section class="facultad-organization" id="organizacion">

    <div class="organization-heading">

        <span class="facultad-section-tag reveal">
            Organización
        </span>

        <h2 class="reveal delay-1">
            Estructura institucional
        </h2>

        <p class="reveal delay-3">
            Una organización académica diseñada para impulsar
            la excelencia, la innovación y la formación integral.
        </p>

    </div>

    <div class="organization-chart">

        {{-- NIVEL 1 --}}

        <div class="org-level level-main">

            <div class="org-card org-main">

                <span>Dirección</span>

                <h3>
                    Dirección General FCA
                </h3>

            </div>

        </div>

        {{-- LÍNEA CENTRAL --}}

        <div class="org-line vertical-line"></div>

        {{-- NIVEL 2 --}}

        <div class="org-level level-secondary">

            <div class="org-card">

                <span>Área Académica</span>

                <h3>
                    Secretaría Académica
                </h3>

            </div>

            <div class="org-card">

                <span>Administración</span>

                <h3>
                    Coordinación Administrativa
                </h3>

            </div>

            <div class="org-card">

                <span>Planeación</span>

                <h3>
                    Desarrollo Institucional
                </h3>

            </div>

        </div>

        {{-- LÍNEAS --}}

        <div class="org-connector"></div>
        
       

        {{-- NIVEL 3 --}}

        
        <div class="org-level level-third">

            <div class="org-card small">

                <h4>
                    Tutorías
                </h4>

            </div>

            <div class="org-card small">

                <h4>
                    Investigación
                </h4>

            </div>

            <div class="org-card small">

                <h4>
                    Vinculación
                </h4>

            </div>

            <div class="org-card small">

                <h4>
                    Servicios Escolares
                </h4>

            </div>

        </div>

    </div>

</section>

@endsection