@php
    $imagenes = ['jaguar.png'];
    $fondoAleatorio = asset('images/' . $imagenes[array_rand($imagenes)]);
@endphp

<div class="sidenav" id="navbar">
    <div class="nav-background-container">
        <div class="nav-bg-image" style="background-image: url('{{ $fondoAleatorio }}');"></div>
        <div class="nav-bg-overlay"></div>
    </div>

    <div class="navbar-container">
        <div class="topbar">
            <div class="top-left">
                <a href="/" class="logo-link">
                    <img src="{{ asset('images/logo.png') }}" class="img-logo" alt="Logo UADY">
                </a>
                <div class="branding-block">
                    <a href="/" class="facultad-top">Facultad de Contaduría y Administración</a>
                    <div class="brand-divider"></div>
                    <div class="brand-subtitle">LUZ, CIENCIA Y VERDAD</div>
                </div>
            </div>

            <div class="top-right">
                <div class="search-box">
                    <input type="text" placeholder="Buscar...">
                    <i class="fas fa-search"></i>
                </div>
                <div class="aux-items">
                    <a href="#" class="top-item"><i class="fas fa-laptop"></i><span>Servicios</span></a>
                    <a href="#" class="top-item"><i class="fas fa-envelope"></i><span>Correo</span></a>
                    <a href="#" class="top-item"><i class="fas fa-calendar"></i><span>Calendario</span></a>
                    <a href="#" class="top-item"><i class="fas fa-user"></i><span>Personal</span></a>
                </div>
                <div class="menu-toggle" id="menu-toggle"><i class="fas fa-bars"></i></div>
            </div>
        </div>

        <div class="menu">
            <a href="/docentes" class="{{ request()->is('docentes') ? 'active' : '' }}">Docentes</a>
            <a href="/egresados" class="{{ request()->is('egresados') ? 'active' : '' }}">Egresados</a>
            <a href="/facultad" class="{{ request()->is('facultad') ? 'active' : '' }}">Nuestra Facultad</a>
            <a href="/oferta" class="{{ request()->is('oferta') ? 'active' : '' }}">Oferta Educativa</a>
            <a href="/investigacion" class="{{ request()->is('investigacion') ? 'active' : '' }}">Investigación</a>
            <a href="/vinculacion" class="{{ request()->is('vinculacion') ? 'active' : '' }}">Vinculación</a>
            <a href="/internacional" class="{{ request()->is('internacional') ? 'active' : '' }}">Internacionalización</a>
        </div>

        <div class="menu-section" id="mobile-menu">
            <a href="/docentes" class="menu-item {{ request()->is('docentes') ? 'active' : '' }}">Docentes</a>
            <a href="/egresados" class="menu-item {{ request()->is('egresados') ? 'active' : '' }}">Egresados</a>
            <a href="/facultad" class="menu-item {{ request()->is('facultad') ? 'active' : '' }}">Nuestra Facultad</a>
            <a href="/oferta" class="menu-item {{ request()->is('oferta') ? 'active' : '' }}">Oferta Educativa</a>
            <a href="/investigacion" class="menu-item {{ request()->is('investigacion') ? 'active' : '' }}">Investigación</a>
            <a href="/vinculacion" class="menu-item {{ request()->is('vinculacion') ? 'active' : '' }}">Vinculación</a>
            <a href="/internacional" class="menu-item {{ request()->is('internacional') ? 'active' : '' }}">Internacionalización</a>
        </div>

        <div class="menu-overlay" id="overlay"></div>
    </div>
</div>