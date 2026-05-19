<!DOCTYPE html>
<html>
<head>
    <title>Página secundaria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css">
    <link rel="stylesheet" href="{{ asset('css/internacionalizacion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tarjeta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estructraycontent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/egresados.css') }}">
    <link rel="stylesheet" href="{{ asset('css/facultad.css') }}">
    <link rel="stylesheet" href="{{ asset('css/docentes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/oferta-educativa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vinculacion.css') }}">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>


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
    const counters = document.querySelectorAll(".metric-num[data-target]");
    if (!counters.length) return;

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const target = +el.dataset.target;
            let current = 0;
            const step = Math.ceil(target / 60);
            const timer = setInterval(() => {
                current = Math.min(current + step, target);
                el.textContent = current.toLocaleString('es-MX');
                if (current >= target) clearInterval(timer);
            }, 20);
            observer.unobserve(el);
        });
    }, { threshold: 0.5 });

    counters.forEach(c => observer.observe(c));
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const timeline = document.getElementById("facultadTimeline");
    const btnPrev  = document.getElementById("timelinePrev");
    const btnNext  = document.getElementById("timelineNext");
    const progress = document.getElementById("timelineProgress");

    if (!timeline) return;

    const items       = Array.from(timeline.querySelectorAll(".timeline-item"));
    const dots        = Array.from(timeline.querySelectorAll(".timeline-dot"));
    let currentIndex  = 0;
    let progressDots  = [];
    let isScrolling   = false;

    // Crear dots de progreso
    if (progress) {
        progress.innerHTML = '';
        items.forEach((_, i) => {
            const dot = document.createElement("div");
            dot.classList.add("timeline-progress-dot");
            if (i === 0) dot.classList.add("active");
            dot.addEventListener("click", () => scrollToIndex(i));
            progress.appendChild(dot);
            progressDots.push(dot);
        });
    }

    function updateActive(index) {
        dots.forEach((d, i)         => d.classList.toggle("active", i === index));
        progressDots.forEach((d, i) => d.classList.toggle("active", i === index));
        items.forEach((item, i)     => item.classList.toggle("active-card", i === index));
    }

    function scrollToIndex(index) {
        index = Math.max(0, Math.min(index, items.length - 1));
        currentIndex = index;
        updateActive(index);

        isScrolling = true;

        const item          = items[index];
        const containerLeft = timeline.getBoundingClientRect().left;
        const itemLeft      = item.getBoundingClientRect().left;
        const targetScroll  = timeline.scrollLeft + (itemLeft - containerLeft);

        timeline.scrollTo({ left: targetScroll, behavior: "smooth" });

        clearTimeout(timeline._scrollTimer);
        timeline._scrollTimer = setTimeout(() => {
            isScrolling = false;
        }, 500);
    }

    function getClosestIndex() {
        const center = timeline.getBoundingClientRect().left + timeline.offsetWidth / 2;
        let closest = 0, minDist = Infinity;
        items.forEach((item, i) => {
            const itemCenter = item.getBoundingClientRect().left + item.offsetWidth / 2;
            const dist       = Math.abs(center - itemCenter);
            if (dist < minDist) { minDist = dist; closest = i; }
        });
        return closest;
    }

    let scrollDebounce;
    timeline.addEventListener("scroll", () => {
        if (isScrolling) return;
        clearTimeout(scrollDebounce);
        scrollDebounce = setTimeout(() => {
            currentIndex = getClosestIndex();
            updateActive(currentIndex);
        }, 80);
    });

    if (btnNext) btnNext.addEventListener("click", () => scrollToIndex(currentIndex + 1));
    if (btnPrev) btnPrev.addEventListener("click", () => scrollToIndex(currentIndex - 1));

    updateActive(0);

    // Drag to scroll
    let isDown = false, startX, scrollLeft;

    timeline.addEventListener("mousedown", e => {
        isDown = true;
        timeline.style.cursor = "grabbing";
        startX     = e.pageX - timeline.offsetLeft;
        scrollLeft = timeline.scrollLeft;
    });
    timeline.addEventListener("mouseleave", () => { isDown = false; timeline.style.cursor = "grab"; });
    timeline.addEventListener("mouseup",    () => { isDown = false; timeline.style.cursor = "grab"; });
    timeline.addEventListener("mousemove",  e => {
        if (!isDown) return;
        e.preventDefault();
        timeline.scrollLeft = scrollLeft - (e.pageX - timeline.offsetLeft - startX) * 1.5;
    });
});
</script>
<script>

const visual = document.querySelector('.facultad-about-visual');
const caption = document.querySelector('.facultad-about-caption');

window.addEventListener('scroll', () => {

    const rect = visual.getBoundingClientRect();

    if(rect.bottom < 250){

        caption.style.opacity = '0';
        caption.style.transform = 'translateY(20px)';
    }

    else{

        caption.style.opacity = '.9';
        caption.style.transform = 'translateY(0)';
    }
});

</script>
<script>

const reveals = document.querySelectorAll('.reveal');

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.classList.add('active');
        }
    });

}, {
    threshold: .15
});

reveals.forEach(reveal => {
    observer.observe(reveal);
});

</script>
<script>

const reveals = document.querySelectorAll('.reveal');

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.classList.add('active');
        }
    });

}, {
    threshold: .15
});

reveals.forEach(reveal => {
    observer.observe(reveal);
});

</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const PER_PAGE = 6;
    let shown      = PER_PAGE;
    let activeFilter = "all";

    const grid      = document.getElementById("graduates-grid");
    const loadBtn   = document.getElementById("grad-load-more");
    const shownEl   = document.getElementById("grad-shown");
    const totalEl   = document.getElementById("grad-total");
    const dotsWrap  = document.getElementById("grad-dots");

    if (!grid) return;

    const allCards = Array.from(grid.querySelectorAll(".graduate-profile"));

    function getVisible() {
        if (activeFilter === "all") return allCards;
        return allCards.filter(c =>
            c.dataset.area === activeFilter ||
            c.dataset.gen  === activeFilter
        );
    }

    function renderCards() {
        const visible = getVisible();

        // Primero ocultar todo
        allCards.forEach(c => {
            c.classList.add("grad-hidden");
            c.classList.remove("grad-filtered-out");
        });

        // Marcar los que no pasan el filtro
        allCards.forEach(c => {
            const passes =
                activeFilter === "all" ||
                c.dataset.area === activeFilter ||
                c.dataset.gen  === activeFilter;

            if (!passes) c.classList.add("grad-filtered-out");
        });

        // Mostrar solo los primeros `shown` del filtro activo
        visible.slice(0, shown).forEach((c, i) => {
            c.classList.remove("grad-hidden");
            c.style.animationDelay = (i * 0.07) + "s";
            c.style.animation = "none";
            requestAnimationFrame(() => {
                c.style.animation = "";
            });
        });

        // No results
        let noResults = grid.querySelector(".grad-no-results");
        if (visible.length === 0) {
            if (!noResults) {
                noResults = document.createElement("div");
                noResults.className = "grad-no-results";
                noResults.innerHTML = '<i class="fas fa-user-slash"></i>No hay egresados en esta categoría aún.';
                grid.appendChild(noResults);
            }
        } else {
            if (noResults) noResults.remove();
        }

        // Counters
        if (shownEl) shownEl.textContent = Math.min(shown, visible.length);
        if (totalEl) totalEl.textContent = visible.length;

        // Load more
        if (loadBtn) {
            loadBtn.classList.toggle("hidden", shown >= visible.length);
        }

        // Pagination dots
        renderDots(visible.length);
    }

    function renderDots(total) {
        if (!dotsWrap) return;
        const pages     = Math.ceil(total / PER_PAGE);
        const activePag = Math.ceil(shown  / PER_PAGE);
        dotsWrap.innerHTML = "";

        for (let i = 1; i <= Math.min(pages, 6); i++) {
            const dot = document.createElement("button");
            dot.className = "grad-dot" + (i === activePag ? " active" : "");
            dot.setAttribute("aria-label", `Página ${i}`);
            dot.addEventListener("click", () => {
                shown = i * PER_PAGE;
                renderCards();
            });
            dotsWrap.appendChild(dot);
        }
    }

    // Filtros
    document.querySelectorAll(".grad-filter").forEach(btn => {
        btn.addEventListener("click", () => {
            document.querySelectorAll(".grad-filter")
                .forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            activeFilter = btn.dataset.filter;
            shown = PER_PAGE;
            renderCards();
        });
    });

    // Load more
    if (loadBtn) {
        loadBtn.addEventListener("click", () => {
            shown += PER_PAGE;
            renderCards();
        });
    }

    renderCards();
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const PER_PAGE   = 8;
    let shown        = PER_PAGE;
    let activeTab    = "all";
    let searchTerm   = "";

    const grid       = document.getElementById("doc-grid");
    const loadBtn    = document.getElementById("doc-load-btn");
    const loadWrap   = document.getElementById("doc-load-wrap");
    const shownEl    = document.getElementById("doc-shown");
    const totalEl    = document.getElementById("doc-total");
    const noResults  = document.getElementById("doc-no-results");
    const searchInput= document.getElementById("doc-search");

    if (!grid) return;

    const allCards = Array.from(grid.querySelectorAll(".doc-card"));

    function getFiltered() {
        return allCards.filter(card => {
            const matchTab    = activeTab === "all" || card.dataset.cat === activeTab;
            const matchSearch = searchTerm === "" || card.dataset.search.includes(searchTerm);
            return matchTab && matchSearch;
        });
    }

    function render() {
        const filtered = getFiltered();
        const page     = filtered.slice(0, shown);

        allCards.forEach(c => c.classList.add("doc-hidden"));
        page.forEach((c, i) => {
            c.classList.remove("doc-hidden");
            c.style.animationDelay = (i * 0.05) + "s";
        });

        if (shownEl) shownEl.textContent = Math.min(shown, filtered.length);
        if (totalEl) totalEl.textContent = filtered.length;

        if (loadWrap) loadWrap.classList.toggle("hidden", shown >= filtered.length);
        if (noResults) noResults.style.display = filtered.length === 0 ? "block" : "none";
    }

    // Tabs
    document.querySelectorAll(".doc-tab").forEach(tab => {
        tab.addEventListener("click", () => {
            document.querySelectorAll(".doc-tab").forEach(t => t.classList.remove("active"));
            tab.classList.add("active");
            activeTab = tab.dataset.cat;
            shown = PER_PAGE;
            render();
        });
    });

    // Search
    if (searchInput) {
        searchInput.addEventListener("input", () => {
            searchTerm = searchInput.value.trim().toLowerCase();
            shown = PER_PAGE;
            render();
        });
    }

    // Load more
    if (loadBtn) {
        loadBtn.addEventListener("click", () => {
            shown += PER_PAGE;
            render();
        });
    }

    render();
});
</script>
<script>

document.addEventListener('DOMContentLoaded', () => {

    /* ── 1. Scroll Reveal ───────────────────────────────── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -32px 0px' });

    document.querySelectorAll('.oe-reveal').forEach(el => revealObserver.observe(el));

    /* Dispara el hero inmediatamente (ya está en viewport) */
    document.querySelectorAll('.oe-hero .oe-reveal').forEach((el, i) => {
        setTimeout(() => el.classList.add('visible'), i * 90);
    });

    /* ── 2. Tabs genéricos (planes y coordinadores) ─────── */
    function initTabs(barId, panelPrefix) {
        const bar = document.getElementById(barId);
        if (!bar) return;

        bar.querySelectorAll('[data-panel]').forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.dataset.panel;

                /* Actualizar botones */
                bar.querySelectorAll('[data-panel]').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                /* Ocultar todos los panels del grupo */
                document.querySelectorAll('[id^="' + panelPrefix + '"]').forEach(panel => {
                    panel.classList.remove('active');
                    /* Reset reveals para re-animar al entrar */
                    panel.querySelectorAll('.oe-reveal').forEach(el => el.classList.remove('visible'));
                });

                /* Mostrar el panel seleccionado */
                const target = document.getElementById(targetId);
                if (!target) return;
                target.classList.add('active');

                /* Re-animar las cards del panel activo */
                setTimeout(() => {
                    target.querySelectorAll('.oe-reveal').forEach((el, i) => {
                        setTimeout(() => el.classList.add('visible'), i * 80);
                    });
                }, 20);
            });
        });
    }

    initTabs('planesTabs', 'planes-');
    initTabs('coordTabs',  'coord-');

    /* ── 3. Smooth scroll para pills del hero ───────────── */
    document.querySelectorAll('.oe-hero-nav a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const target = document.querySelector(a.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const btn  = document.getElementById("vinc-acc-btn");
    const body = document.getElementById("vinc-acc-body");
    if (!btn || !body) return;

    btn.addEventListener("click", () => {
        btn.classList.toggle("open");
        body.classList.toggle("open");
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>

<script>
(function initMapWhenReady() {
    if (typeof L === 'undefined') {
        return setTimeout(initMapWhenReady, 80);
    }

    const mapEl = document.getElementById("int-map");
    if (!mapEl) return;

    const map = L.map("int-map", {
        center: [20, -30],
        zoom: 2,
        scrollWheelZoom: false,
        zoomControl: true
    });

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        maxZoom: 18
    }).addTo(map);

    function makeIcon(color) {
        return L.divIcon({
            className: '',
            html: `<div style="width:16px;height:16px;border-radius:50%;background:${color};border:3px solid #fff;box-shadow:0 2px 8px rgba(0,0,0,.35);"></div>`,
            iconSize: [16, 16],
            iconAnchor: [8, 8],
            popupAnchor: [0, -12]
        });
    }

    const iconMx = makeIcon('#C89B3C');
    const iconEu = makeIcon('#0B3C5D');
    const iconLa = makeIcon('#2a9d8f');

    const nodes = [
        { lat: 20.97,  lng: -89.62, icon: iconMx, title: '🇲🇽 FCA-UADY',              desc: 'Facultad de Contaduría y Administración — sede principal del programa IELSM en México.' },
        { lat: 19.43,  lng: -99.13, icon: iconMx, title: '🇲🇽 Ciudad de México',       desc: 'Nodo de colaboración empresarial e investigación.' },
        { lat: 52.52,  lng:  13.40, icon: iconEu, title: '🇩🇪 Berlín, Alemania',        desc: 'Universidad miembro con oferta de estancias para alumnos, investigadores y profesores de la FCA.' },
        { lat: 48.14,  lng:  11.58, icon: iconEu, title: '🇩🇪 Múnich, Alemania',        desc: 'Partner universitario en el ecosistema europeo de innovación digital.' },
        { lat: 52.37,  lng:   4.90, icon: iconEu, title: '🇳🇱 Ámsterdam, Países Bajos', desc: 'Nodo europeo de emprendimiento e inversión en la plataforma IELSM.' },
        { lat: 41.39,  lng:   2.15, icon: iconEu, title: '🇪🇸 Barcelona, España',       desc: 'Alianza de innovación digital y sostenibilidad ambiental.' },
        { lat: -23.55, lng: -46.63, icon: iconLa, title: '🇧🇷 São Paulo, Brasil',        desc: 'Nodo latinoamericano de ecosistemas de negocios y emprendimiento.' },
        { lat: -34.60, lng: -58.38, icon: iconLa, title: '🇦🇷 Buenos Aires, Argentina', desc: 'Partner en modelos de negocios e inteligencia multicultural.' },
        { lat:   4.71, lng: -74.07, icon: iconLa, title: '🇨🇴 Bogotá, Colombia',        desc: 'Colaboración académica y de innovación en Latinoamérica.' },
        { lat: -12.05, lng: -77.04, icon: iconLa, title: '🇵🇪 Lima, Perú',              desc: 'Nodo de transformación digital y sostenibilidad.' },
    ];

    nodes.forEach(n => {
        L.marker([n.lat, n.lng], { icon: n.icon })
            .addTo(map)
            .bindPopup(
                `<strong style="color:#0B3C5D">${n.title}</strong><br>
                 <span style="font-size:.85rem;color:#555">${n.desc}</span>`,
                { maxWidth: 240 }
            );
    });

    setTimeout(() => map.invalidateSize(), 200);
})();
</script>
</body>
</html>