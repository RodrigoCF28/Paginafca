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

                    <i class="fas fa-bars"></i>

                </button>

            </div>

        </div>

        <!-- ================= MENU DESKTOP ================= -->
        <nav class="menu">

            <div class="menu-item-wrapper dropdown">
                <a href="/facultad"
                   class="menu-link {{ request()->is('facultad') ? 'active' : '' }}"
                   data-toggle="dropdown">
                    Nuestra Facultad
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="/facultad">Nuestra Facultad</a>
                    <a href="/docentes">Docentes</a>
                    <a href="/egresados">Egresados</a>
                </div>
            </div>

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

            <div class="menu-item-wrapper dropdown-mobile">
                <a href="/facultad"
                   class="menu-item {{ request()->is('facultad') ? 'active' : '' }}"
                   data-toggle="dropdown-mobile">
                    Nuestra Facultad
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="dropdown-menu-mobile">
                    <a href="/facultad" class="menu-item">Nuestra Facultad</a>
                    <a href="/docentes" class="menu-item">Docentes</a>
                    <a href="/egresados" class="menu-item">Egresados</a>
                </div>
            </div>

            <a href="/oferta"
               class="menu-item {{ request()->is('oferta') ? 'active' : '' }}">
                Oferta Educativa
            </a>

            <a href="/vinculacion"
               class="menu-item {{ request()->is('vinculacion') ? 'active' : '' }}">
                Vinculación
            </a>

            <a href="/internacional"
               class="menu-item {{ request()->is('internacional') ? 'active' : '' }}">
                Internacionalización
            </a>

        </nav>

    </aside>

    <!-- OVERLAY -->
    <div class="menu-overlay" id="overlay"></div>

</header>