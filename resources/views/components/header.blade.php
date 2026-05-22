@php
    $imagenes = ['jaguar.png'];
    $fondoAleatorio = asset('images/' . $imagenes[array_rand($imagenes)]);
@endphp

<header class="sidenav" id="navbar">

    <!-- Fondo -->
    <div class="nav-background-container">
        <div class="nav-bg-image" style="background-image: url('{{ $fondoAleatorio }}');"></div>
        <div class="nav-bg-overlay"></div>
    </div>

    <div class="navbar-container">

        <!-- ================= TOPBAR ================= -->
        <div class="topbar">

            <!-- IZQUIERDA -->
            <div class="top-left">

                <a href="/" class="logo-link">
                    <img src="{{ asset('images/logo.png') }}"
                         class="img-logo"
                         alt="Logo UADY">
                </a>

                <div class="branding-block">
                    <a href="/" class="facultad-top">
                        Facultad de Contaduría y Administración
                    </a>

                    <div class="brand-divider"></div>

                    <div class="brand-subtitle">
                        LUZ, CIENCIA Y VERDAD
                    </div>
                </div>

            </div>

            <!-- DERECHA -->
            <div class="top-right">

                <!-- BUSCADOR -->
                <div class="search-box">
                    <input type="text" placeholder="Buscar...">
                    <i class="fas fa-search"></i>
                </div>

                <!-- ICONOS -->
                <div class="aux-items">

                    <a href="#" class="top-item">
                        <i class="fas fa-laptop"></i>
                        <span>Servicios</span>
                    </a>

                    <a href="#" class="top-item">
                        <i class="fas fa-envelope"></i>
                        <span>Correo</span>
                    </a>

                    <a href="#" class="top-item">
                        <i class="fas fa-calendar"></i>
                        <span>Calendario</span>
                    </a>

                    <a href="#" class="top-item">
                        <i class="fas fa-user"></i>
                        <span>Personal</span>
                    </a>

                </div>

                <!-- TOGGLE -->
                <button class="menu-toggle"
                id="menu-toggle"
            aria-label="Abrir menú">

            <span></span>
            <span></span>
            <span></span>

        </button>

            </div>

        </div>

        <!-- ================= MENU DESKTOP ================= -->
        <nav class="menu">

<a href="/facultad"
   class="{{ request()->is('facultad') ? 'active' : '' }}">
    Nuestra Facultad
</a>

<a href="/docentes"
   class="{{ request()->is('docentes') ? 'active' : '' }}">
    Docentes
</a>

<a href="/egresados"
   class="{{ request()->is('egresados') ? 'active' : '' }}">
    Egresados
</a>

            <a href="{{ route('oferta-educativa') }}"
            class="{{ request()->is('oferta-educativa') ? 'active' : '' }}">
                Oferta Educativa
            </a>

            <a href="{{ route('vinculacion') }}"
               class="{{ request()->is('vinculacion') ? 'active' : '' }}">
                Vinculación
            </a>

            <a href="{{ route('internacionalizacion') }}"
               class="{{ request()->is('internacionalizacion') ? 'active' : '' }}">
                Internacionalización
            </a>

        </nav>

    </div>

    <!-- ================= MENU MOVIL ================= -->
    <aside class="menu-section" id="mobile-menu">

        <div class="mobile-header">

            <span>Menú</span>

            <button id="close-menu">
                <i class="fas fa-times"></i>
            </button>

        </div>

<nav class="mobile-links">

    <!-- NUESTRA FACULTAD -->
    <a href="{{ route('facultad') }}" class="menu-item">
        Nuestra Facultad
    </a>

    <a href="{{ route('docentes') }}" class="menu-item">
        Docentes
    </a>

    <a href="{{ route('egresados') }}" class="menu-item">
        Egresados
    </a>

    <!-- OFERTA -->
    <a href="{{ route('oferta-educativa') }}" class="menu-item">
        Oferta Educativa
    </a>

    <!-- VINCULACION -->
    <a href="{{ route('vinculacion') }}" class="menu-item">
        Vinculación
    </a>

    <!-- INTERNACIONAL -->
    <a href="{{ route('internacionalizacion') }}" class="menu-item">
        Internacionalización
    </a>

    <!-- DIVIDER -->
    <div class="mobile-divider"></div>

    <!-- SERVICIOS -->
    <a href="#" class="menu-item mobile-extra">
        <i class="fas fa-laptop"></i>
        Servicios
    </a>

    <a href="#" class="menu-item mobile-extra">
        <i class="fas fa-envelope"></i>
        Correo
    </a>

    <a href="#" class="menu-item mobile-extra">
        <i class="fas fa-calendar"></i>
        Calendario
    </a>

    <a href="#" class="menu-item mobile-extra">
        <i class="fas fa-user"></i>
        Personal
    </a>

</nav>

    </aside>
    <!-- OVERLAY -->
<div class="menu-overlay" id="overlay"></div>
</header>