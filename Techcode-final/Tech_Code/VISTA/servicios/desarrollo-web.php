<?php require_once __DIR__ . '/../../MODELO/navbar_sesion.php'; ?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Desarrollo Web | TechCode</title><link rel="stylesheet" href="servicios.css"><link rel="stylesheet" href="servicio-detalle.css"><link rel="stylesheet" href="../shared.css"></head><body class="tc-inner-page"><div class="background-decoration"><div class="glow glow-one"></div><div class="glow glow-two"></div><div class="grid-background"></div><div class="scan-line"></div></div><header class="navbar" id="navbar"><a href="../index.php" class="logo tc-brand-logo"><img src="../../MODELO/techcode-mark.png" alt="TechCode"><span>TECH</span><strong>CODE</strong></a><nav id="navLinks">

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
            <a href="../servicios/servicios.php" class="active nav-dropdown-trigger">Servicios</a>
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

    </nav><div class="navbar-side"><?= botonSesionNavbar('../') ?><button class="menu-btn" id="menuBtn" aria-label="Abrir menú"><span></span><span></span><span></span></button></div></header><main><section class="service-detail"><div class="eyebrow">// SERVICIO TECHCODE</div><h1>Desarrollo <span>Web</span></h1><p>Creamos sitios web modernos, rápidos y adaptables, pensados para comunicar una idea y ofrecer una experiencia clara al usuario.</p><div class="service-detail-grid"><article class="service-detail-card"><h2>01</h2><p>Diseño responsive</p></article><article class="service-detail-card"><h2>02</h2><p>Interfaces modernas</p></article><article class="service-detail-card"><h2>03</h2><p>Optimización y rendimiento</p></article></div><div class="service-detail-actions"><a href="servicios.php">← Ver servicios</a><a class="primary" href="../contacto/contacto.php">Solicitar servicio ↗</a></div></section></main><script src="../../CONTROLADOR/ui.js"></script></body></html>