@extends('layouts.layoutSecundario')

@section('contenido')

{{-- ===== HERO ===== --}}
<section class="vinc-hero">
    <div class="vinc-hero-overlay"></div>
    <div class="vinc-hero-content reveal">
        <span class="vinc-hero-tag">Vinculación</span>
        <h1>Programa Padrino<br>Académico</h1>
        <p>Unimos a la sociedad con los estudiantes a través de la solidaridad,<br>
           para que ningún joven abandone sus sueños por falta de recursos.</p>
    </div>
</section>

{{-- ===== PRESENTACIÓN ===== --}}
<section class="vinc-section vinc-presentacion">
    <div class="vinc-container">

        <div class="vinc-section-header reveal">
            <span class="vinc-label">Presentación</span>
            <h2>¿Qué es el Programa<br>Padrino Académico?</h2>
        </div>

        <div class="vinc-text-grid">
            <div class="vinc-text-col reveal">
                <p>La formación integral de un estudiante comprende aspectos que van más allá de la transmisión de conocimientos. En la Facultad de Contaduría y Administración de la UADY, se relaciona con la generación de profesionales con alto perfil ético y humanista, comprometidos con la transformación de las organizaciones, el servicio a la comunidad y el desarrollo sustentable de nuestro estado, la región y el país.</p>
                <p>En este plantel abordamos nuestra misión conscientes de que nuestra razón de ser son los estudiantes, a quienes tenemos la responsabilidad de formar. Al hacerlo, no solo ponemos todo nuestro empeño en cumplir a cabalidad con nuestras funciones sustantivas, sino también cuidando de que quienes ingresan puedan transitar con éxito su andar por el estudio hasta su egreso.</p>
            </div>
            <div class="vinc-text-col reveal">
                <p>Por eso, más que preocuparnos, nos ocupa el reducir el índice de deserción que se produce en nuestra escuela. Si bien la deserción escolar tiene diversos orígenes, la falta de recursos económicos se erige como uno de los mayores.</p>
                <p>El programa Padrino Académico se vislumbró bajo la consigna de que <strong>ninguno de nuestros alumnos abandone sus estudios por falta de recursos económicos</strong>. Para alcanzar esta meta, es necesario contar con el apoyo de la iniciativa privada, de nuestros egresados y de la sociedad, a quienes recurrimos seguros de la disposición de apuntalar los esfuerzos de un futuro profesionista.</p>
                <p>Este programa se concibe como un vínculo entre sociedad y alumnado: una relación de oportunidad y de amistad, donde los protagonistas tienen nombre y apellido y se unen a través del lazo fraterno de la solidaridad.</p>
            </div>
        </div>

    </div>
</section>

{{-- ===== SEPARADOR CITA ===== --}}
<div class="vinc-quote-band reveal">
    <div class="vinc-container">
        <blockquote>
            "Que ningún estudiante se quede sin estudiar<br>por falta de dinero."
        </blockquote>
    </div>
</div>

{{-- ===== OBJETIVOS ===== --}}
<section class="vinc-section vinc-objetivos">
    <div class="vinc-container">

        <div class="vinc-section-header reveal">
            <span class="vinc-label">Objetivos</span>
            <h2>¿Qué buscamos lograr?</h2>
        </div>

        <div class="vinc-obj-grid">

            {{-- Objetivo General --}}
            <div class="vinc-obj-card vinc-obj-main reveal">
                <div class="vinc-obj-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <div class="vinc-obj-body">
                    <span class="vinc-obj-tag">Objetivo General</span>
                    <p>Reducir el índice de deserción escolar de los alumnos de licenciatura por falta de recursos económicos.</p>
                </div>
            </div>

            {{-- Específico 1 --}}
            <div class="vinc-obj-card reveal">
                <div class="vinc-obj-icon">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <div class="vinc-obj-body">
                    <span class="vinc-obj-tag">Objetivo Específico 1</span>
                    <p>Apoyar económicamente a los alumnos <em>"ahijados"</em> para la continuidad de sus estudios de licenciatura hasta su egreso.</p>
                </div>
            </div>

            {{-- Específico 2 --}}
            <div class="vinc-obj-card reveal">
                <div class="vinc-obj-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="vinc-obj-body">
                    <span class="vinc-obj-tag">Objetivo Específico 2</span>
                    <p>Obtener <em>"Padrinos Académicos"</em> cuyo apoyo económico sea responsable de una causa justa y consideren su aportación como un apoyo deducible de impuestos.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===== DOCUMENTOS ===== --}}
<section class="vinc-section vinc-docs">
    <div class="vinc-container">

        <div class="vinc-section-header reveal">
            <span class="vinc-label">Documentos</span>
            <h2>Recursos del Programa</h2>
        </div>

        <div class="vinc-docs-grid">
            <a href="#" class="vinc-doc-card reveal" target="_blank">
                <div class="vinc-doc-icon"><i class="fas fa-file-alt"></i></div>
                <div class="vinc-doc-info">
                    <span class="vinc-doc-title">Convocatoria enero-junio 2026</span>
                    <span class="vinc-doc-action">Ver documento <i class="fas fa-external-link-alt"></i></span>
                </div>
            </a>
            <a href="#" class="vinc-doc-card reveal" target="_blank">
                <div class="vinc-doc-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="vinc-doc-info">
                    <span class="vinc-doc-title">Infografía Programa Padrino Académico</span>
                    <span class="vinc-doc-action">Ver documento <i class="fas fa-external-link-alt"></i></span>
                </div>
            </a>
            <a href="#" class="vinc-doc-card reveal" target="_blank">
                <div class="vinc-doc-icon"><i class="fas fa-file-signature"></i></div>
                <div class="vinc-doc-info">
                    <span class="vinc-doc-title">Carta compromiso</span>
                    <span class="vinc-doc-action">Ver documento <i class="fas fa-external-link-alt"></i></span>
                </div>
            </a>
        </div>

    </div>
</section>

{{-- ===== RESULTADOS ===== --}}
<section class="vinc-section vinc-resultados">
    <div class="vinc-container">

        <div class="vinc-section-header reveal">
            <span class="vinc-label">Resultados</span>
            <h2>Ciclo enero-junio 2026</h2>
        </div>

        <div class="vinc-accordion reveal">
            <button class="vinc-accordion-btn" id="vinc-acc-btn">
                <span>Relación de matrículas de estudiantes beneficiados para el ciclo enero-junio 2026</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="vinc-accordion-body" id="vinc-acc-body">
                <p>La información de matrículas beneficiadas será publicada próximamente.</p>
            </div>
        </div>

    </div>
</section>

{{-- ===== COORDINACIÓN ===== --}}
<section class="vinc-section vinc-coord">
    <div class="vinc-container">

        <div class="vinc-section-header reveal">
            <span class="vinc-label">Contacto</span>
            <h2>Coordinación de Becas y<br>Programa Padrino Académico</h2>
        </div>

        <div class="vinc-coord-card reveal">
            <div class="vinc-coord-photo">
                <img src="{{ asset('images/coordinadora-becas.jpg') }}" alt="Dra. Ligia María Río Herrera">
            </div>
            <div class="vinc-coord-info">
                <h3>Dra. Ligia María Río Herrera</h3>
                <span class="vinc-coord-role">Coordinadora</span>
                <a href="mailto:ligia.rio@correo.uady.mx" class="vinc-coord-email">
                    <i class="fas fa-envelope"></i>
                    ligia.rio@correo.uady.mx
                </a>
            </div>
        </div>

    </div>
</section>

@endsection