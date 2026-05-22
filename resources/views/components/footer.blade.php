<footer class="footer-fca">

    <div class="ft-wave"></div>
    <div class="ft-glow"></div>

    <div class="ft-top">

        {{-- BRAND --}}
        <div class="ft-brand">
            <div class="ft-brand-logo">
                <div class="ft-brand-name">
                    Facultad de Contaduría<br>y Administración
                    <span>Universidad Autónoma de Yucatán</span>
                </div>
            </div>
            <p class="ft-brand-desc">
                Campus de Ciencias Sociales, Económico-Administrativas
                y Humanidades. Mérida, Yucatán, México.
            </p>
            <div class="ft-contact-row">
                <div class="ft-contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <span class="ft-contact-text">(999) 930 2120</span>
            </div>
            <div class="ft-contact-row">
                <div class="ft-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <span class="ft-contact-text">Calle 60 No. 749-A × 97 y 99, Centro</span>
            </div>
        </div>

        {{-- NOSOTROS --}}
        <div class="ft-col">
                <div class="ft-col-title">Nosotros</div>
                
                <a class="ft-link" href="{{ route('facultad') }}#historia">
                <i class="fas fa-chevron-right"></i>Historia
                </a>
            <a class="ft-link" href="{{ route('facultad') }}#acerca"><i class="fas fa-chevron-right"></i>Misión y visión</a>
            <a class="ft-link" href="{{ route('facultad') }}#organizacion"><i class="fas fa-chevron-right"></i>Directorio</a>
            <a class="ft-link" href="{{ route('docentes') }}"><i class="fas fa-chevron-right"></i>Docentes</a>
            <a class="ft-link" href="{{ route('egresados') }}"><i class="fas fa-chevron-right"></i>Egresados</a>
        </div>

        {{-- SERVICIOS --}}
        <div class="ft-col">
            <div class="ft-col-title">Servicios</div>
            <a class="ft-link" href="{{ route('internacionalizacion') }}"><i class="fas fa-chevron-right"></i>Movilidad</a>
            <a class="ft-link" href="{{ route('vinculacion') }}"><i class="fas fa-chevron-right"></i>Becas</a>
            <a class="ft-link" href="{{ route('egresados') }}#bolsa-de-trabajo"><i class="fas fa-chevron-right"></i>Bolsa de trabajo</a>
            <a class="ft-link" href="{{ route('oferta-educativa') }}"><i class="fas fa-chevron-right"></i>Convocatorias</a>
        </div>

        {{-- REDES --}}
        <div class="ft-col">
            <div class="ft-col-title">Síguenos</div>
            <div class="ft-social-grid">
                <a class="ft-social-btn" href="#" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="ft-social-btn" href="#" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="ft-social-btn" href="#" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a class="ft-social-btn" href="#" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="ft-social-btn" href="#" aria-label="X / Twitter">
                    <i class="fab fa-x-twitter"></i>
                </a>
                <a class="ft-social-btn" href="#" aria-label="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="ft-divider"></div>

    <div class="ft-bottom">
        <span class="ft-bottom-copy">
            © 2026 Universidad Autónoma de Yucatán — Todos los derechos reservados
        </span>
            
            <div class="ft-bottom-badges">

                 <button class="ft-badge modal-open" data-modal="privacyModal">
                    Aviso de privacidad
                </button>
                 <button class="ft-badge modal-open" data-modal="transparencyModal">
                    Transparencia
                 </button>

            </div>
    </div>

    <button id="backToTop" aria-label="Volver arriba">
        <i class="fas fa-arrow-up"></i>
    </button>

</footer>

{{-- =========================================================
   MODAL AVISO DE PRIVACIDAD
========================================================= --}}

<div class="ft-modal-overlay" id="privacyModal">

    <div class="ft-modal">

        <button class="ft-modal-close">
            <i class="fas fa-times"></i>
        </button>

        <h2>
            Aviso de Privacidad
        </h2>

        <p>
            La Facultad de Contaduría y Administración de la Universidad
            Autónoma de Yucatán (UADY), con domicilio en Mérida, Yucatán,
            es responsable del tratamiento y protección de los datos
            personales proporcionados por estudiantes, docentes,
            egresados y visitantes.
        </p>

        <p>
            La información recabada será utilizada exclusivamente
            para fines académicos, administrativos, estadísticos
            e institucionales, conforme a la normatividad vigente
            en materia de protección de datos personales.
        </p>

        <p>
            La FCA-UADY implementa medidas de seguridad para
            garantizar la confidencialidad e integridad de la
            información proporcionada por la comunidad universitaria.
        </p>

    </div>

</div>

<div class="ft-modal-overlay" id="transparencyModal">

    <div class="ft-modal">

        <button class="ft-modal-close">
            <i class="fas fa-times"></i>
        </button>

        <h2>
            Transparencia Institucional
        </h2>

        <p>
            La Facultad de Contaduría y Administración mantiene
            el compromiso con la transparencia, la rendición de
            cuentas y el acceso a la información pública,
            en cumplimiento de las disposiciones aplicables
            de la Universidad Autónoma de Yucatán.
        </p>

        <p>
            La comunidad universitaria y la sociedad pueden
            consultar información relacionada con programas
            académicos, actividades institucionales, servicios,
            convocatorias y acciones de mejora continua.
        </p>

        <p>
            La FCA-UADY promueve una gestión institucional ética,
            responsable y orientada al fortalecimiento de la
            confianza pública y la excelencia educativa.
        </p>

    </div>

</div>