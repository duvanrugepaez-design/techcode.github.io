<?php require_once __DIR__ . '/../MODELO/navbar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="TechCode - Desarrollo de software y soluciones digitales."
    >

    <title>TechCode | Desarrollo de software</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="shared.css">

    <meta name="theme-color" content="#050711">
    <meta name="color-scheme" content="dark">
    <meta property="og:title" content="TECHCODE | Tecnología que transforma ideas">
    <meta property="og:description" content="Desarrollo de software, diseño y soluciones digitales.">

</head>


<body class="tc-home-only">


<!-- =====================================================
     PRELOADER
===================================================== -->

<div class="preloader" id="preloader">

    <div class="preloader-brand">
        <img src="../MODELO/techcode-mark.png" alt="Logo de TechCode">
        <span>TECH <strong>CODE</strong></span>
    </div>

    <div class="preloader-bar">
        <span></span>
    </div>

</div>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="navbar" id="navbar">
    

    <a href="index.php" class="logo">

        <img src="../MODELO/techcode-mark.png" alt="Logo de TechCode">
        <span>TECH</span><strong>CODE</strong>

    </a>


    <nav id="navLinks">

        <a href="index.php" class="active">Inicio</a>

        <div class="nav-dropdown">
            <a href="nosotros/nosotros.php" class="nav-dropdown-trigger">Nosotros</a>
            <div class="nav-dropdown-menu">
                <a href="nosotros/nosotros.php">Inicio</a>
                <a href="nosotros/mision-vision.php">Misión y Visión</a>
                <a href="valores/valores.php">Valores</a>
                <a href="nosotros/forma-trabajo.php">Nuestra forma de trabajar</a>
                <a href="nosotros/trabajemos-juntos.php">Trabajemos juntos</a>
            </div>
        </div>

        <div class="nav-dropdown">
            <a href="servicios/servicios.php" class="nav-dropdown-trigger">Servicios</a>
            <div class="nav-dropdown-menu">
                <a href="servicios/servicios.php">Inicio</a>
                <a href="servicios/desarrollo-web.php">Desarrollo Web</a>
                <a href="servicios/software-personalizado.php">Software personalizado</a>
                <a href="servicios/aplicaciones.php">Aplicaciones</a>
                <a href="servicios/bases-de-datos.php">Bases de datos</a>
            </div>
        </div>

        <a href="proyectos/proyectos.php">Proyectos</a>
        <a href="resultados/resultados.php">Resultados</a>
        <a href="contacto/contacto.php">Contacto</a>

    </nav>


    <div class="navbar-side">

        <?= botonSesionNavbar('') ?>

        <button class="menu-btn" id="menuBtn" aria-label="Abrir menú">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

</header>



<main>


<!-- =====================================================
     INICIO TECHCODE
===================================================== -->

<section class="tc-hero" id="inicio">

    <div class="tc-hero-background" aria-hidden="true"></div>
    <div class="tc-hero-shade" aria-hidden="true"></div>

    <div class="tc-hero-content">


        <div class="tc-hero-text">

            <!-- Marca pequeña -->
            <div class="tc-hero-brand">
                <img src="../MODELO/techcode-mark.png" alt="Logo de TechCode">
                <span>TECH <b>CODE</b></span>
            </div>

            <h1>
                Tecnología que
                <span>transforma ideas.</span>
            </h1>

            <p>
                Desarrollamos soluciones digitales para empresas y negocios
                que buscan crecer, innovar y avanzar con tecnología.
            </p>

            <div class="tc-hero-actions">
                <a href="servicios/servicios.php" class="tc-btn-primary">
                    Conocer servicios
                    <span>↗</span>
                </a>

                <a href="proyectos/proyectos.php" class="tc-btn-secondary">
                    Ver proyectos
                    <span>→</span>
                </a>
            </div>

        </div>

    </div>

</section>


</main>

<script src="../CONTROLADOR/ui.js"></script>
<script src="../CONTROLADOR/script.js?v=2"></script>
<script>
// Fallback: el preloader nunca debe bloquear la página.
window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    if (!preloader) return;
    preloader.classList.add('preloader-hidden');
    setTimeout(function () { preloader.remove(); }, 700);
});
</script>
</body>
</html>
