<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facultad de Contaduría y Administración</title>
    
    <!-- Iconos y Estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tarjeta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estructraycontent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toggle.css') }}">
</head>

<body>
    <div class="main">
        <x-header />

        <div class="content">
            <!-- Si tienes un Hero específico en el home, aparecerá aquí mediante el yield o el componente -->
            @yield('contenido')
        </div>

        <x-footer />
    </div> 

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.getElementById("navbar");
            const toggle = document.getElementById("menu-toggle");
            const menu = document.getElementById("mobile-menu");
            const overlay = document.getElementById("overlay");
            const btnBackToTop = document.getElementById("backToTop");

            // Función para ajustar el diseño dinámicamente
            function ajustarInterfaz() {
                if (navbar) {
                    // Efecto de scroll para achicar el menú
                    if (window.scrollY > 50) {
                        navbar.classList.add("scrolled");
                    } else {
                        navbar.classList.remove("scrolled");
                    }
                }

                // Botón Back to Top
                if (btnBackToTop) {
                    if (window.scrollY > 300) {
                        btnBackToTop.classList.add("show");
                    } else {
                        btnBackToTop.classList.remove("show");
                    }
                }
            }

            // Listeners de ventana
            window.addEventListener("scroll", ajustarInterfaz);
            window.addEventListener("resize", ajustarInterfaz);
            ajustarInterfaz();

            // --- MENU MÓVIL ---
            if (toggle && menu && overlay) {
                toggle.addEventListener("click", () => {
                    menu.classList.toggle("active");
                    overlay.classList.toggle("active");
                });
                overlay.addEventListener("click", () => {
                    menu.classList.remove("active");
                    overlay.classList.remove("active");
                });
            }

            // --- VOLVER ARRIBA ---
            if (btnBackToTop) {
                btnBackToTop.addEventListener("click", () => {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                });
            }

            // --- ANIMACIÓN FOOTER ---
            const footerCols = document.querySelectorAll(".footer-col");
            if (footerCols.length > 0) {
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                        }
                    });
                }, { threshold: 0.2 });
                footerCols.forEach(col => observer.observe(col));
            }

            // --- LÓGICA DE CARRUSEL ---
            const slides = document.querySelectorAll('.carrusel .slide');
            if (slides.length > 0) {
                let currentSlide = 0;
                slides[0].classList.add('active');
                setInterval(() => {
                    slides[currentSlide].classList.remove('active');
                    currentSlide = (currentSlide + 1) % slides.length;
                    slides[currentSlide].classList.add('active');
                }, 5000);
            }
            
            // Función global para scroll al contenido
            window.scrollContent = function() {
                const contentSection = document.querySelector('.content');
                if (contentSection) {
                    contentSection.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    </script>
</body>
</html>