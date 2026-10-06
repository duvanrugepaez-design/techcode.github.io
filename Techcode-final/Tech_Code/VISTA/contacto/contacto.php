<?php require_once __DIR__ . '/../../MODELO/navbar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contacto | TechCode</title>

<link rel="stylesheet" href="contacto.css">

<link rel="stylesheet" href="../shared.css">


<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Press+Start+2P&display=swap" rel="stylesheet">

</head>

<body class="tc-inner-page">

<header class="navbar" id="navbar">

<a href="../index.php" class="logo tc-brand-logo">
        <img src="../../MODELO/techcode-mark.png" alt="TechCode">
        <span>TECH</span><strong>CODE</strong>
    </a>

<nav id="navLinks">

        <a href="../index.php">Inicio</a>

        <div class="nav-dropdown">
            <a href="../nosotros/nosotros.php" class="nav-dropdown-trigger">Nosotros</a>
            <div class="nav-dropdown-menu">
                <a href="../nosotros/nosotros.php">Inicio</a>
                <a href="../nosotros/mision-vision.php">Misión y Visión</a>
                <a href="../valores/valores.php">Valores</a>
                <a href="../nosotros/forma-trabajo.php">Nuestra forma de trabajar</a>
                <a href="../nosotros/trabajemos-juntos.php">Trabajemos juntos</a>
            </div>
        </div>

        <div class="nav-dropdown">
            <a href="../servicios/servicios.php" class="nav-dropdown-trigger">Servicios</a>
            <div class="nav-dropdown-menu">
                <a href="../servicios/servicios.php">Inicio</a>
                <a href="../servicios/desarrollo-web.php">Desarrollo Web</a>
                <a href="../servicios/software-personalizado.php">Software personalizado</a>
                <a href="../servicios/aplicaciones.php">Aplicaciones</a>
                <a href="../servicios/bases-de-datos.php">Bases de datos</a>
            </div>
        </div>

        <a href="../proyectos/proyectos.php">Proyectos</a>
        <a href="../resultados/resultados.php">Resultados</a>
        <a href="../contacto/contacto.php" class="active">Contacto</a>

    </nav>

<div class="navbar-side">
<?= botonSesionNavbar('../') ?>
<button class="menu-btn" id="menuBtn" aria-label="Abrir menú"><span></span><span></span><span></span></button>
</div>

</header>


<main>

<section class="contact">

<div class="contact-text">

<span>// CONTACTO</span>

<h1>
Hablemos de tu
	<strong class="neon-word">proyecto.</strong>
</h1>

<p>
¿Tienes una idea, un proyecto o necesitas una solución
tecnológica? Estamos listos para escucharte.
</p>

<div class="contact-data">

<div>
<strong>Email</strong>
<p>techcodeh@gmail.com</p>
</div>

<div>
<strong>WhatsApp</strong>
<p>+57 3170427298</p>
</div>

</div>

</div>


<div class="contact-box">


<h2>¿Listo para comenzar?</h2>

<p>
Cuéntanos brevemente qué necesitas y nos pondremos
en contacto contigo.
</p>

<a href="sergio:techcodeh@gmail.com" class="button">
Enviar correo →
</a>

</div>

</section>

</main>

<!-- TECHCODE ANIMATIONS -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Elementos que aparecen suavemente al entrar en pantalla
    const selectors = [
        "main > section",
        ".hero > *",
        ".contact > *",
        ".projects > .project",
        ".project-info > *",
        ".contact-data > div",
        ".contact-box > *",
        ".services > *",
        ".service-card",
        ".about-card",
        ".feature-card",
        ".stat",
        "form",
        ".login-box",
        ".game-container > *"
    ];

    const elements = [];
    selectors.forEach(selector => {
        document.querySelectorAll(selector).forEach(el => {
            if (!elements.includes(el)) elements.push(el);
        });
    });

    elements.forEach((el, i) => {
        if (el.classList.contains("tc-reveal")) return;
        el.classList.add("tc-reveal");
        el.classList.add("tc-delay-" + ((i % 5) + 1));
    });

    if (reduceMotion) {
        elements.forEach(el => el.classList.add("tc-visible"));
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("tc-visible");
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: "0px 0px -50px 0px" });

    elements.forEach(el => observer.observe(el));

    // Botones: pequeño efecto de presión
    document.querySelectorAll("button, .login-btn, .back-btn").forEach(btn => {
        btn.addEventListener("mousedown", () => btn.style.transform = "translateY(1px) scale(.98)");
        btn.addEventListener("mouseup", () => btn.style.transform = "");
        btn.addEventListener("mouseleave", () => btn.style.transform = "");
    });
});
</script>

<script src="../../CONTROLADOR/ui.js"></script>

</body>
</html>