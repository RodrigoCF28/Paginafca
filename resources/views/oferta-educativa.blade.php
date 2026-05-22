@extends('layouts.layoutSecundario')

@section('contenido')

{{-- ============================================================
     HERO
     ============================================================ --}}
<section class="oe-hero">
    <div class="oe-hero-orb oe-hero-orb-1"></div>
    <div class="oe-hero-orb oe-hero-orb-2"></div>

    <p class="oe-hero-eyebrow oe-reveal">Facultad de Contaduría y Administración · UADY</p>

    <h1 class="oe-reveal" style="transition-delay:.08s">
        Oferta Educativa
    </h1>

    <p class="oe-hero-sub oe-reveal" style="transition-delay:.16s">
        Cuatro licenciaturas acreditadas, orientadas a formar profesionales
        competitivos, éticos e innovadores para el mundo globalizado.
    </p>

    <nav class="oe-hero-nav oe-reveal" style="transition-delay:.24s">
        <a href="#licenciaturas">
            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
            Licenciaturas
        </a>
        <a href="#planes">
            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414A1 1 0 0119 9.414V19a2 2 0 01-2 2z"/>
            </svg>
            Planes de Estudio
        </a>
        <a href="#coordinadores">
            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Coordinadores
        </a>
    </nav>
</section>

{{-- ============================================================
     SECCIÓN 1 · PROGRAMAS DE LICENCIATURA
     ============================================================ --}}
<section class="oe-section" id="licenciaturas">

    <p class="oe-section-label oe-reveal">Programas académicos</p>
    <h2 class="oe-section-title oe-reveal">Programas de Licenciatura</h2>
    <p class="oe-section-sub oe-reveal">
        Todos alineados al Modelo Educativo para la Formación Integral (MEFI 2019)
        y acreditados ante CACECA.
    </p>

    <div class="lic-grid">

        <div class="lic-card oe-reveal" style="transition-delay:.05s">
            <div class="lic-icon">🏦</div>
            <span class="lic-badge">
                <svg width="9" height="9" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Nivel 1 Plus · CENEVAL
            </span>
            <h3>Contador Público</h3>
            <p>Forma profesionistas para registrar operaciones, auditar información financiera y gestionar el cumplimiento legal de las organizaciones.</p>
            <div class="lic-tags">
                <span class="lic-tag">Mérida</span>
                <span class="lic-tag">Tizimín</span>
                <span class="lic-tag gold">CACECA</span>
            </div>
        </div>

        <div class="lic-card oe-reveal" style="transition-delay:.10s">
            <div class="lic-icon">🌐</div>
            <span class="lic-badge">
                <svg width="9" height="9" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Nivel 1 · CENEVAL
            </span>
            <h3>Mercadotecnia y Negocios Internacionales</h3>
            <p>Prepara para detectar oportunidades de mercado y crear estrategias competitivas en entornos globales y digitalizados.</p>
            <div class="lic-tags">
                <span class="lic-tag">Mérida</span>
                <span class="lic-tag">Global</span>
                <span class="lic-tag gold">CACECA</span>
            </div>
        </div>

        <div class="lic-card oe-reveal" style="transition-delay:.15s">
            <div class="lic-icon">💻</div>
            <span class="lic-badge">
                <svg width="9" height="9" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Nivel 1 · CENEVAL
            </span>
            <h3>Licenciatura en Administración de Tecnologías de Información</h3>
            <p>Forma expertos en soluciones TI integrales: infraestructura, seguridad, auditoría de procesos y continuidad de servicios.</p>
            <div class="lic-tags">
                <span class="lic-tag">Mérida</span>
                <span class="lic-tag">TI</span>
                <span class="lic-tag gold">CACECA</span>
            </div>
        </div>

        <div class="lic-card oe-reveal" style="transition-delay:.20s">
            <div class="lic-icon">📊</div>
            <span class="lic-badge">
                <svg width="9" height="9" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Nivel 1 Plus · CENEVAL
            </span>
            <h3>Administración</h3>
            <p>Desarrolla líderes capaces de dirigir equipos, gestionar recursos estratégicamente y elevar la competitividad con responsabilidad social.</p>
            <div class="lic-tags">
                <span class="lic-tag">Mérida</span>
                <span class="lic-tag">Gestión</span>
                <span class="lic-tag gold">CACECA</span>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     SECCIÓN 2 · PLANES DE ESTUDIO
     ============================================================ --}}
<section class="oe-section dark" id="planes">

    <p class="oe-section-label oe-reveal">Estructura académica</p>
    <h2 class="oe-section-title oe-reveal">Planes de Estudio</h2>
    <p class="oe-section-sub oe-reveal">
        Consulta la malla curricular y el plan de estudios de cada programa, diseñados
        bajo el MEFI 2019 para una formación integral y flexible.
    </p>

    <div class="planes-tabs-bar oe-reveal" id="planesTabs">
        <button class="planes-tab active" data-panel="planes-cp">Contador Público</button>
        <button class="planes-tab"        data-panel="planes-mni">Mercadotecnia y N.I.</button>
        <button class="planes-tab"        data-panel="planes-ati">Adm. de TI</button>
        <button class="planes-tab"        data-panel="planes-adm">Administración</button>
    </div>

    <div class="planes-panel active" id="planes-cp">
        <div class="plan-card">
            <div class="plan-num">01</div>
            <h3>Contador Público</h3>
            <p>Contabilidad, auditoría, fiscal, finanzas y sistemas de información empresarial.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>8 semestres</span><span>Mérida · Tizimín</span></div>
            <a href="#" class="plan-link">Ver plan de estudios <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="plan-card">
            <div class="plan-num">01</div>
            <h3>Malla Curricular · Contador Público</h3>
            <p>Visualización de materias distribuidas por semestre y área de formación.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>Mérida · Tizimín</span></div>
            <a href="#" class="plan-link">Ver malla curricular <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
    </div>

    <div class="planes-panel" id="planes-mni">
        <div class="plan-card">
            <div class="plan-num">02</div>
            <h3>Mercadotecnia y Negocios Internacionales</h3>
            <p>Marketing digital, comercio exterior, estrategia de marca y mercados globales.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>8 semestres</span><span>Mérida</span></div>
            <a href="#" class="plan-link">Ver plan de estudios <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="plan-card">
            <div class="plan-num">02</div>
            <h3>Malla Curricular · Mercadotecnia y N.I.</h3>
            <p>Visualización de materias distribuidas por semestre y área de formación.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>Mérida</span></div>
            <a href="#" class="plan-link">Ver malla curricular <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
    </div>

    <div class="planes-panel" id="planes-ati">
        <div class="plan-card">
            <div class="plan-num">03</div>
            <h3>Administración de Tecnologías de Información</h3>
            <p>Gestión de TI, seguridad informática, desarrollo de sistemas y auditoría tecnológica.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>8 semestres</span><span>Mérida</span></div>
            <a href="#" class="plan-link">Ver plan de estudios <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="plan-card">
            <div class="plan-num">03</div>
            <h3>Malla Curricular · Adm. de TI</h3>
            <p>Visualización de materias distribuidas por semestre y área de formación.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>Mérida</span></div>
            <a href="#" class="plan-link">Ver malla curricular <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
    </div>

    <div class="planes-panel" id="planes-adm">
        <div class="plan-card">
            <div class="plan-num">04</div>
            <h3>Administración</h3>
            <p>Dirección organizacional, recursos humanos, finanzas, mercadotecnia y emprendimiento.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>8 semestres</span><span>Mérida</span></div>
            <a href="#" class="plan-link">Ver plan de estudios <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
        <div class="plan-card">
            <div class="plan-num">04</div>
            <h3>Malla Curricular · Administración</h3>
            <p>Visualización de materias distribuidas por semestre y área de formación.</p>
            <div class="plan-meta"><span>MEFI 2019</span><span>Mérida</span></div>
            <a href="#" class="plan-link">Ver malla curricular <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
    </div>

</section>

{{-- ============================================================
     SECCIÓN 3 · COORDINADORES
     ============================================================ --}}
<section class="oe-section" id="coordinadores">

    <p class="oe-section-label oe-reveal">Nuestro equipo</p>
    <h2 class="oe-section-title oe-reveal">Coordinaciones de Licenciatura</h2>
    <p class="oe-section-sub oe-reveal">
        Conoce a los coordinadores y su equipo de apoyo en cada programa académico.
    </p>

    <div class="coord-tabs-bar oe-reveal" id="coordTabs">
        <button class="coord-tab active" data-panel="coord-cp">Contador Público</button>
        <button class="coord-tab"        data-panel="coord-mni">Mercadotecnia y N.I.</button>
        <button class="coord-tab"        data-panel="coord-ati">Adm. de TI</button>
        <button class="coord-tab"        data-panel="coord-adm">Administración</button>
    </div>

    {{-- CP --}}
    <div class="coord-panel active" id="coord-cp">
        <div class="coord-card oe-reveal">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/tere-sabido.jpg') }}" alt="Dra. Teresita de Jesús Sabido Domínguez" onerror="this.src='https://ui-avatars.com/api/?name=Teresita+Sabido&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot"></span>
            </div>
            <p class="coord-rol">Coordinadora</p>
            <h4>Dra. Teresita de Jesús Sabido Domínguez</h4>
            <p class="coord-programa">Contador Público · Mérida</p>
            <a class="coord-email-btn" href="mailto:tere.sabido@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
        <div class="coord-card oe-reveal" style="transition-delay:.07s">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/alejandro-pareja.jpg') }}" alt="CP Guillermo Alejandro Pareja Ciau" onerror="this.src='https://ui-avatars.com/api/?name=Alejandro+Pareja&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot apoyo"></span>
            </div>
            <p class="coord-rol">Apoyo a la Coordinación</p>
            <h4>CP Guillermo Alejandro Pareja Ciau, MF</h4>
            <p class="coord-programa">Contador Público · Mérida</p>
            <a class="coord-email-btn" href="mailto:alejandro.pareja@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
        <div class="coord-card oe-reveal" style="transition-delay:.14s">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/ligia-bestard.jpg') }}" alt="CP Ligia María Bestard Alcántar" onerror="this.src='https://ui-avatars.com/api/?name=Ligia+Bestard&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot"></span>
            </div>
            <p class="coord-rol">Coordinadora · Tizimín</p>
            <h4>CP Ligia María Bestard Alcántar, ME</h4>
            <p class="coord-programa">Contador Público · Unidad Multidisciplinaria Tizimín</p>
            <a class="coord-email-btn" href="mailto:ligia.bestard@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
    </div>

    {{-- MNI --}}
    <div class="coord-panel" id="coord-mni">
        <div class="coord-card oe-reveal">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/coord-mni.jpg') }}" alt="Coordinador MNI" onerror="this.src='https://ui-avatars.com/api/?name=MNI+Coordinador&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot"></span>
            </div>
            <p class="coord-rol">Coordinador(a)</p>
            <h4>LMNI Mireya Noemí Hernández Islas, MAN</h4>
            <p class="coord-programa">Mercadotecnia y Negocios Internacionales · Mérida</p>
            <a class="coord-email-btn" href="mailto:coordinacion.mni@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
    </div>

    {{-- ATI --}}
    <div class="coord-panel" id="coord-ati">
        <div class="coord-card oe-reveal">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/ileana-vazquez.jpg') }}" alt="ISC Ileana del Socorro Vázquez Carrillo" onerror="this.src='https://ui-avatars.com/api/?name=Ileana+Vazquez&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot"></span>
            </div>
            <p class="coord-rol">Coordinadora</p>
            <h4>ISC Ileana del Socorro Vázquez Carrillo, MINE</h4>
            <p class="coord-programa">Adm. de Tecnologías de Información · Mérida</p>
            <a class="coord-email-btn" href="mailto:ileana.vazquez@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
        <div class="coord-card oe-reveal" style="transition-delay:.07s">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/deysi-santamaria.jpg') }}" alt="LATI Deysi Patricia Santamaría Martín" onerror="this.src='https://ui-avatars.com/api/?name=Deysi+Santamaria&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot apoyo"></span>
            </div>
            <p class="coord-rol">Apoyo a la Coordinación</p>
            <h4>LATI Deysi Patricia Santamaría Martín, MTE</h4>
            <p class="coord-programa">Adm. de Tecnologías de Información · Mérida</p>
            <a class="coord-email-btn" href="mailto:deysi.santamaria@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
    </div>

    {{-- Administración --}}
    <div class="coord-panel" id="coord-adm">
        <div class="coord-card oe-reveal">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/martha-medina.jpg') }}" alt="LA Martha Georgina Medina Medina" onerror="this.src='https://ui-avatars.com/api/?name=Martha+Medina&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot"></span>
            </div>
            <p class="coord-rol">Coordinadora</p>
            <h4>LA Martha Georgina Medina Medina, MPDER</h4>
            <p class="coord-programa">Licenciatura en Administración · Mérida</p>
            <a class="coord-email-btn" href="mailto:martha.medina@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
        <div class="coord-card oe-reveal" style="transition-delay:.07s">
            <div class="coord-avatar-wrap">
                <img class="coord-avatar" src="{{ asset('images/coordinadores/hugo-vazquez.jpg') }}" alt="LM Hugo César Vázquez Lizarraga" onerror="this.src='https://ui-avatars.com/api/?name=Hugo+Vazquez&background=0B3C5D&color=fff&size=128'">
                <span class="coord-dot apoyo"></span>
            </div>
            <p class="coord-rol">Apoyo a la Coordinación</p>
            <h4>LM Hugo César Vázquez Lizarraga, MA</h4>
            <p class="coord-programa">Licenciatura en Administración · Mérida</p>
            <a class="coord-email-btn" href="mailto:hugo.vazquez@correo.uady.mx">
                <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Enviar correo
            </a>
        </div>
    </div>

</section>

{{-- ============================================================
     CTA FINAL
     ============================================================ --}}
<section class="oe-cta">
    <h2 class="oe-reveal">¿Listo para dar el siguiente paso?</h2>
    <p class="oe-reveal">Consulta los requisitos de admisión y únete a la comunidad FCA · UADY.</p>
    <a href="#" class="oe-btn oe-reveal">
        Más información
        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
    </a>
</section>

@endsection