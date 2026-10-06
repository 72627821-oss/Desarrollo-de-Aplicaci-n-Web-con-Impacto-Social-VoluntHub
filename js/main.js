/* =========================================================
   VOLUNTHUB
   JavaScript principal
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {

    /* =====================================================
       1. MENÚ RESPONSIVE
       ===================================================== */

    const menuButton = document.getElementById("menuButton");
    const mobileNav = document.getElementById("mobileNav");

    if (menuButton && mobileNav) {

        menuButton.addEventListener("click", () => {

            const isOpen = mobileNav.classList.toggle("open");

            menuButton.setAttribute(
                "aria-expanded",
                isOpen
            );

            menuButton.setAttribute(
                "aria-label",
                isOpen ? "Cerrar menú" : "Abrir menú"
            );

            menuButton.textContent =
                isOpen ? "✕" : "☰";

        });


        /* Cerrar menú al seleccionar una opción */

        const mobileLinks =
            mobileNav.querySelectorAll("a");

        mobileLinks.forEach((link) => {

            link.addEventListener("click", () => {

                mobileNav.classList.remove("open");

                menuButton.setAttribute(
                    "aria-expanded",
                    "false"
                );

                menuButton.setAttribute(
                    "aria-label",
                    "Abrir menú"
                );

                menuButton.textContent = "☰";

            });

        });

    }


    /* =====================================================
       2. FAVORITOS
       ===================================================== */

    const favoriteButtons =
        document.querySelectorAll(".favorite");

    favoriteButtons.forEach((button) => {

        button.addEventListener("click", () => {

            const isFavorite =
                button.classList.toggle("active");

            if (isFavorite) {

                button.textContent = "♥";

                button.setAttribute(
                    "aria-label",
                    "Quitar oportunidad de favoritos"
                );

            } else {

                button.textContent = "♡";

                button.setAttribute(
                    "aria-label",
                    "Guardar oportunidad"
                );

            }

        });

    });


    /* =====================================================
       3. DESPLAZAMIENTO HACIA "CÓMO FUNCIONA"
       ===================================================== */

    const internalLinks =
        document.querySelectorAll('a[href^="#"]');

    internalLinks.forEach((link) => {

        link.addEventListener("click", (event) => {

            const targetId =
                link.getAttribute("href");

            if (!targetId || targetId === "#") {
                return;
            }

            const target =
                document.querySelector(targetId);

            if (target) {

                event.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });

            }

        });

    });


    /* =====================================================
       4. CAMBIO VISUAL DEL HEADER AL HACER SCROLL
       ===================================================== */

    const header =
        document.querySelector(".header");

    if (header) {

        window.addEventListener("scroll", () => {

            if (window.scrollY > 30) {

                header.style.boxShadow =
                    "0 5px 20px rgba(0, 0, 0, 0.06)";

            } else {

                header.style.boxShadow = "none";

            }

        });

    }


    /* =====================================================
       5. MENSAJE DE DESARROLLO
       ===================================================== */

    console.log(
        "VoluntHub: interfaz principal cargada correctamente."
    );

});