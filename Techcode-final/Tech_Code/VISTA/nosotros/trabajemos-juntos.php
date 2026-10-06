<?php require_once __DIR__ . '/../../MODELO/navbar_sesion.php'; ?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trabajemos juntos | TechCode</title>
<link rel="stylesheet" href="../nosotros/nosotros.css"><link rel="stylesheet" href="../nosotros/nosotros-secciones.css"><link rel="stylesheet" href="../shared.css">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet"></head>
<body class="tc-inner-page">
<header class="navbar" id="navbar"><a href="../index.php" class="logo tc-brand-logo"><img src="../../MODELO/techcode-mark.png" alt="TechCode"><span>TECH</span><strong>CODE</strong></a>
<nav id="navLinks">

        <a href="../index.php">Inicio</a>

        <div class="nav-dropdown">
            <a href="../nosotros/nosotros.php" class="active nav-dropdown-trigger">Nosotros</a>
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
        <a href="../contacto/contacto.php">Contacto</a>

    </nav>
<div class="navbar-side"><?= botonSesionNavbar('../') ?><button class="menu-btn" id="menuBtn" aria-label="Abrir menú"><span></span><span></span><span></span></button></div></header>
<main><section class="about-subpage"><div class="subpage-header"><span class="eyebrow">// TRABAJEMOS JUNTOS</span><h1>Ideas que se convierten <span>en soluciones.</span></h1><p>Si tienes una idea, un proyecto o un reto tecnológico, en TechCode podemos convertirlo en una propuesta clara y funcional.</p></div><div class="cta-panel"><div><span class="info-number">// EMPECEMOS</span><h2>Construyamos algo <span>juntos.</span></h2><p>Cuéntanos qué quieres lograr y exploremos una solución que combine tecnología, creatividad e innovación.</p></div><a href="../contacto/contacto.php" class="primary-btn">Ir a contacto →</a></div></section></main>
<footer><div class="footer-logo"><a href="../index.php" class="logo"><span>TECH</span><strong>CODE</strong></a><p>Tecnología que convierte ideas en soluciones.</p></div><div class="footer-info"><span>© 2026 TechCode</span><span>Desarrollo · Innovación · Tecnología</span></div></footer>
<script src="../../CONTROLADOR/ui.js"></script></body></html>