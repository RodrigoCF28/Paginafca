<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        Facultad de Contaduría y Administración
    </title>

    <!-- ICONOS -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tarjeta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estructraycontent.css') }}">

</head>

<body>

    <div class="main">

        <!-- HEADER -->
        <x-header />

        <!-- CONTENIDO -->
        <main class="content">

            @yield('contenido')

        </main>

        <!-- FOOTER -->
        <x-footer />

    </div>

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const navbar = document.getElementById("navbar");

            const toggle = document.getElementById("menu-toggle");

            const menu = document.getElementById("mobile-menu");

            const overlay = document.getElementById("overlay");

            const closeMenu =
            document.getElementById("close-menu");

            const btnBackToTop =
            document.getElementById("backToTop");

            /* ============================================
               AJUSTAR INTERFAZ
            ============================================ */

            function ajustarInterfaz() {

                if (navbar) {

                    if (window.scrollY > 40) {

                        navbar.classList.add("scrolled");

                    } else {

                        navbar.classList.remove("scrolled");

                    }

                }

                if (btnBackToTop) {

                    if (window.scrollY > 300) {

                        btnBackToTop.classList.add("show");

                    } else {

                        btnBackToTop.classList.remove("show");

                    }

                }

            }

            window.addEventListener(
                "scroll",
                ajustarInterfaz
            );

            window.addEventListener(
                "resize",
                ajustarInterfaz
            );

            ajustarInterfaz();

            /* ============================================
               MENU MOVIL
            ============================================ */

            function abrirMenu(){

                menu.classList.add("active");

                overlay.classList.add("active");

                document.body.style.overflow = "hidden";

            }

            function cerrarMenu(){

                menu.classList.remove("active");

                overlay.classList.remove("active");

                document.body.style.overflow = "";

            }

            if(toggle){

                toggle.addEventListener(
                    "click",
                    abrirMenu
                );

            }

            if(closeMenu){

                closeMenu.addEventListener(
                    "click",
                    cerrarMenu
                );

            }

            if(overlay){

                overlay.addEventListener(
                    "click",
                    cerrarMenu
                );

            }

            /* ============================================
               AUTO CERRAR MENU EN DESKTOP
            ============================================ */

            window.addEventListener("resize", () => {

                if(window.innerWidth > 860){

                    cerrarMenu();

                }

            });

            /* ============================================
               BACK TO TOP
            ============================================ */

            if(btnBackToTop){

                btnBackToTop.addEventListener(
                    "click",
                    () => {

                        window.scrollTo({

                            top:0,

                            behavior:"smooth"

                        });

                    }
                );

            }

            /* ============================================
               FOOTER
            ============================================ */

            const footerCols =
            document.querySelectorAll(".footer-col");

            if(footerCols.length > 0){

                const observer =
                new IntersectionObserver(entries => {

                    entries.forEach(entry => {

                        if(entry.isIntersecting){

                            entry.target.classList.add("show");

                        }

                    });

                }, { threshold:0.2 });

                footerCols.forEach(col =>
                    observer.observe(col)
                );

            }

            /* ============================================
               CARRUSEL
            ============================================ */

            const slides =
            document.querySelectorAll('.carrusel .slide');

            if(slides.length > 0){

                let currentSlide = 0;

                slides[0].classList.add('active');

                setInterval(() => {

                    slides[currentSlide]
                    .classList.remove('active');

                    currentSlide =
                    (currentSlide + 1) % slides.length;

                    slides[currentSlide]
                    .classList.add('active');

                }, 5000);

            }

            /* ============================================
               SCROLL CONTENT
            ============================================ */

            window.scrollContent = function(){

                const contentSection =
                document.querySelector('.content');

                if(contentSection){

                    contentSection.scrollIntoView({

                        behavior:'smooth'

                    });

                }

            }

        });

    </script>

</body>
</html>