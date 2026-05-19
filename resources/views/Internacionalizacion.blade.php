@extends('layouts.layoutSecundario')

@section('contenido')

{{-- ===== HERO ===== --}}
<section class="int-hero">
    <div class="int-hero-content reveal">
        <span class="int-hero-tag">Internacionalización</span>
        <h1>International<br>Entrepreneurship-Lab<br><em>Smart Money</em></h1>
        <p>Plataforma digital europea y latinoamericana de inteligencia colectiva-multicultural para el emprendimiento e innovación digital.</p>
        <div class="int-hero-ctas">
            <a href="https://www.ielsm.com/" target="_blank" class="int-btn int-btn-primary">
                <i class="fas fa-globe"></i> Sitio oficial IELSM
            </a>
            <a href="https://forms.gle/BCtLQ8CA1F9BgmFR7" target="_blank" class="int-btn int-btn-outline">
                <i class="fas fa-pen-to-square"></i> Registrarme
            </a>
        </div>
    </div>
    <div class="int-hero-badge reveal">
        <span>IELSM</span>
    </div>
</section>

{{-- ===== PRESENTACIÓN ===== --}}
<section class="int-section int-presentacion">
    <div class="int-container">

        <div class="int-section-header reveal">
            <span class="int-label">Sobre el programa</span>
            <h2>Un ecosistema global de negocios e innovación</h2>
        </div>

        <div class="int-pillars">
            <div class="int-pillar reveal">
                <div class="int-pillar-icon"><i class="fas fa-network-wired"></i></div>
                <h3>Alianzas Internacionales</h3>
                <p>Participación activa con universidades, empresarios, expertos e inversionistas de Europa y Latinoamérica que comparten <em>know-how</em> multicultural.</p>
            </div>
            <div class="int-pillar reveal">
                <div class="int-pillar-icon"><i class="fas fa-rocket"></i></div>
                <h3>Transformación Digital</h3>
                <p>Potencialización de capacidades académicas en enseñanza, investigación, emprendimiento e innovación con enfoque en sostenibilidad ambiental.</p>
            </div>
            <div class="int-pillar reveal">
                <div class="int-pillar-icon"><i class="fas fa-plane-departure"></i></div>
                <h3>Estancias en Alemania</h3>
                <p>Oportunidad de estancias en universidades miembro de Alemania para alumnos, investigadores y profesores de nuestra facultad.</p>
            </div>
            <div class="int-pillar reveal">
                <div class="int-pillar-icon"><i class="fas fa-leaf"></i></div>
                <h3>Impacto Sostenible</h3>
                <p>Impacto nacional e internacional en ámbitos sociales, económicos y ambientales mediante la readaptación de modelos de negocios.</p>
            </div>
        </div>

        <div class="int-desc-block reveal">
            <p>La Facultad de Contaduría y Administración ejerce su compromiso como institución aliada en la plataforma digital europea y latinoamericana de inteligencia colectiva-multicultural. Esta abre paso a la internacionalización y readaptación de modelos de negocios donde participan activamente nuestros profesores y alumnos como parte de los actores de innovación en el contexto de la transformación digital.</p>
            <p>Todo ello es posible gracias a la aplicación, adaptación, alianza y creación de ecosistemas digitales de negocios con métodos e inteligencia multicultural junto a estudiantes, académicos, universidades, empresarios, expertos e inversionistas.</p>
        </div>

    </div>
</section>

{{-- ===== MAPA INTERACTIVO ===== --}}
<section class="int-section int-map-section">
    <div class="int-container">

        <div class="int-section-header reveal">
            <span class="int-label">Red Internacional</span>
            <h2>Presencia global del ecosistema IELSM</h2>
            <p class="int-section-sub">Haz clic en los marcadores para conocer cada nodo de la red.</p>
        </div>

        <div class="int-map-wrap reveal">
            <div id="int-map"></div>
            <div class="int-map-legend">
                <span class="int-legend-item int-legend-mx"><i class="fas fa-circle"></i> México (FCA-UADY)</span>
                <span class="int-legend-item int-legend-eu"><i class="fas fa-circle"></i> Europa</span>
                <span class="int-legend-item int-legend-la"><i class="fas fa-circle"></i> Latinoamérica</span>
            </div>
        </div>

    </div>
</section>

{{-- ===== PROFESORES ===== --}}
<section class="int-section int-profesores">
    <div class="int-container">

        <div class="int-section-header reveal">
            <span class="int-label">Docentes participantes</span>
            <h2>Profesores del programa</h2>
        </div>

        <div class="int-prof-grid">

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Dra. Anel Flores Novelo</strong>
                    <span>Profesora investigadora</span>
                </div>
            </div>

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Dra. María del Carmen Rachó Barroso</strong>
                    <span>Profesora investigadora</span>
                </div>
            </div>

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Dra. Teresa Sabido Domínguez</strong>
                    <span>Profesora investigadora</span>
                </div>
            </div>

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Dr. Gustavo Alberto Barredo Baqueiro</strong>
                    <span>Profesor investigador</span>
                </div>
            </div>

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Dr. Valentín Alonso Novelo</strong>
                    <span>Profesor investigador</span>
                </div>
            </div>

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Mtra. Gina Estefanía Godínez Molina</strong>
                    <span>Profesora</span>
                </div>
            </div>

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Mtro. Gustavo López</strong>
                    <span>Profesor</span>
                </div>
            </div>

            <div class="int-prof-card reveal">
                <div class="int-prof-flag">🇲🇽</div>
                <div class="int-prof-info">
                    <strong>Lic. Marby Efraín Yerves Irigoyen</strong>
                    <span>Profesor</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===== TESTIMONIOS ALUMNOS ===== --}}
<section class="int-section int-testimonios">
    <div class="int-container">

        <div class="int-section-header reveal">
            <span class="int-label">Voces del programa</span>
            <h2>Alumnos destacados en el IELSM</h2>
        </div>

        <div class="int-test-grid">

            <div class="int-test-card reveal">
                <div class="int-test-quote"><i class="fas fa-quote-left"></i></div>
                <p>Es una experiencia única y completa. Cada sesión brinda una oportunidad para trabajar en equipo, potencializar ideas, obtener nuevos aprendizajes, ser empáticos, responsables y desarrollar capacidades organizativas.</p>
                <div class="int-test-author">
                    <strong>Monserrat Vargas Jiménez</strong>
                    <span>Mercadotecnia y Negocios Internacionales</span>
                </div>
            </div>

            <div class="int-test-card reveal">
                <div class="int-test-quote"><i class="fas fa-quote-left"></i></div>
                <p>El IELSM es una gran experiencia, el programa permite tener contacto directo con empresas nacionales e internacionales y aprender de profesionales y especialistas en el área.</p>
                <div class="int-test-author">
                    <strong>Viviana Amairany Poor Trejo</strong>
                    <span>Mercadotecnia y Negocios Internacionales</span>
                </div>
            </div>

            <div class="int-test-card reveal">
                <div class="int-test-quote"><i class="fas fa-quote-left"></i></div>
                <p>El IELSM me brindó la oportunidad de desarrollar un proyecto de marco social junto a alumnos, empresarios y expertos de América y Europa. Esta experiencia fue una gran influencia para mi carrera profesional, te hace adquirir una perspectiva más global.</p>
                <div class="int-test-author">
                    <strong>Javier Arturo Vallejo Olán</strong>
                    <span>Mercadotecnia y Negocios Internacionales</span>
                </div>
            </div>

            <div class="int-test-card reveal">
                <div class="int-test-quote"><i class="fas fa-quote-left"></i></div>
                <p>Permite conectar con estudiantes de negocios internacionales alemán, practicar el idioma inglés y realizar tareas donde pude conocer instrumentos de trabajo para desarrollar planes e impulsar a empresas a expandir sus fronteras.</p>
                <div class="int-test-author">
                    <strong>Jessica Guadalupe Alpuche Pacheco</strong>
                    <span>Comercio Internacional</span>
                </div>
            </div>

            <div class="int-test-card reveal">
                <div class="int-test-quote"><i class="fas fa-quote-left"></i></div>
                <p>Participar en la plataforma me hizo sumar experiencia en el análisis y evaluación de modelos de negocios de diferentes empresas según su tamaño, además de aprender a colaborar en equipos de trabajo.</p>
                <div class="int-test-author">
                    <strong>Jonathan Efraín Vázquez Galeana</strong>
                    <span>Comercio Internacional</span>
                </div>
            </div>

            <div class="int-test-card reveal">
                <div class="int-test-quote"><i class="fas fa-quote-left"></i></div>
                <p>Mi experiencia en el IELSM ha sido gratificante ya que aprendo varias cosas, por ejemplo, de los catalizadores, expertos, empresarios y me nutro de los canvas utilizados.</p>
                <div class="int-test-author">
                    <strong>Ana Vanesa May Tec</strong>
                    <span>Administración</span>
                </div>
            </div>

            <div class="int-test-card reveal">
                <div class="int-test-quote"><i class="fas fa-quote-left"></i></div>
                <p>Buena experiencia en el IELSM, los catalizadores responden dudas y escuchan nuestras opiniones en las sesiones. Además, brindan consejos para exponer nuestros proyectos y presentarlos a empresarios y expertos.</p>
                <div class="int-test-author">
                    <strong>Mariana Carolina Gómez Porter</strong>
                    <span>Administración</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===== CTA FINAL ===== --}}
<section class="int-cta-band reveal">
    <div class="int-container">
        <h2>¿Listo para ser parte del ecosistema global?</h2>
        <p>Únete al programa y conecta con universidades, empresarios y expertos de Europa y Latinoamérica.</p>
        <div class="int-cta-btns">
            <a href="https://forms.gle/BCtLQ8CA1F9BgmFR7" target="_blank" class="int-btn int-btn-primary">
                <i class="fas fa-pen-to-square"></i> Registrarme ahora
            </a>
            <a href="https://www.ielsm.com/" target="_blank" class="int-btn int-btn-outline-light">
                <i class="fas fa-arrow-up-right-from-square"></i> Conocer más
            </a>
        </div>
    </div>
</section>

@endsection