<!DOCTYPE html>
<html>
<head>
    <title>Página secundaria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tarjeta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estructraycontent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/egresados.css') }}">
    <link rel="stylesheet" href="{{ asset('css/facultad.css') }}">
</head>

<body>

<div class="main">

    <x-header />

    <div class="content">
        @yield('contenido')
    </div>

    <x-footer />
    

</div> <script>
    document.addEventListener("DOMContentLoaded", function () {
        
        // --- 1. Variables Generales ---
        const navbar = document.getElementById("navbar");
        const toggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("mobile-menu");
        const overlay = document.getElementById("overlay");
        const btnBackToTop = document.getElementById("backToTop");

        // --- 2. Funciones de Ajuste (Scroll Navbar) ---
        function ajustarPaddingYScroll() {
            if (!navbar) return;

            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
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

        // Ejecutar al cargar y al hacer resize/scroll
        window.addEventListener("load", ajustarPaddingYScroll);
        window.addEventListener("resize", ajustarPaddingYScroll);
        window.addEventListener("scroll", ajustarPaddingYScroll);

        // --- 3. Menú Móvil (Toggle) ---
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

        // --- 4. Botón Back to Top (Acción) ---
        if (btnBackToTop) {
            btnBackToTop.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        }

        // --- 5. Observador para animar Footer ---
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

        // --- 6. 🔥 LÓGICA DEL CARRUSEL (Nuevo) ---
        const slides = document.querySelectorAll('.carrusel .slide');
        let currentSlide = 0;
        const slideInterval = 5000; // Tiempo en milisegundos (5 segundos)

        if (slides.length > 0) {
            // Asegurar que el primer slide esté activo al inicio
            slides[0].classList.add('active');

            function nextSlide() {
                // Quitar 'active' del slide actual
                slides[currentSlide].classList.remove('active');
                
                // Calcular el índice del siguiente slide (vuelve a 0 al final)
                currentSlide = (currentSlide + 1) % slides.length;
                
                // Añadir 'active' al nuevo slide
                slides[currentSlide].classList.add('active');
            }

            // Iniciar el movimiento automático
            setInterval(nextSlide, slideInterval);
        }
        
        // --- 7. Función Auxiliar Scroll (Unificada) ---
        // Puedes llamar a esta función desde un onclick="scrollContent()"
        window.scrollContent = function() {
            const contentSection = document.querySelector('.content');
            if (contentSection) {
                contentSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

    });
</script>

<script>

window.addEventListener('scroll', () => {

    const hero = document.querySelector('.egresados-hero');

    if(hero){

        let scroll = window.scrollY;

        hero.style.backgroundPositionY = scroll * 0.5 + 'px';
    }
});

</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const collage = document.querySelector(".egresados-collage");
    const collageItems = document.querySelectorAll(".collage-item");

    if(!collage || collageItems.length === 0) return;

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){

                collageItems.forEach((item, index) => {

                    setTimeout(() => {

                        item.classList.add("in-view");

                    }, index * 220);
                });

                observer.unobserve(collage);
            }
        });

    }, {
        threshold: 0.25
    });

    observer.observe(collage);
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const timelineItems = document.querySelectorAll(".timeline-item");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){

                entry.target.classList.add("show");
            }
        });

    }, {
        threshold: 0.2
    });

    timelineItems.forEach(item => {
        observer.observe(item);
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const directoryCards = document.querySelectorAll(".directory-card");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){

                entry.target.classList.add("show");
            }
        });

    }, {
        threshold: 0.2
    });

    directoryCards.forEach(card => {
        observer.observe(card);
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const counters = document.querySelectorAll(".counter");

    const speed = 200;

    const animateCounters = () => {

        counters.forEach(counter => {

            const target = +counter.dataset.target;

            const updateCount = () => {

                const current = +counter.innerText;

                const increment = Math.ceil(target / speed);

                if(current < target){

                    counter.innerText = current + increment;

                    setTimeout(updateCount, 12);

                }else{

                    counter.innerText = target;
                }
            };

            updateCount();
        });
    };

    const metricsSection = document.querySelector(".plan-metrics");

    if(metricsSection){

        const observer = new IntersectionObserver((entries) => {

            entries.forEach(entry => {

                if(entry.isIntersecting){

                    animateCounters();

                    observer.disconnect();
                }
            });

        }, {
            threshold: 0.4
        });

        observer.observe(metricsSection);
    }
});
</script>
</body>
</html>