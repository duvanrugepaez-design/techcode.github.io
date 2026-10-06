<?php require_once __DIR__ . '/../../MODELO/navbar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados | TechCode</title>
    <link rel="stylesheet" href="resultados.css">
    <link rel="stylesheet" href="../shared.css">
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
        <a href="../resultados/resultados.php" class="active">Resultados</a>
        <a href="../contacto/contacto.php">Contacto</a>

    </nav>
    <div class="navbar-side">
        <?= botonSesionNavbar('../') ?>
        <button class="menu-btn" id="menuBtn" aria-label="Abrir menú"><span></span><span></span><span></span></button>
    </div>
</header>

<main>

    <section class="resultados-hero">
        <span>// RESULTADOS</span>
        <h1>Impacto real,<br><span>medido en números.</span></h1>
        <p>El trabajo de TechCode se traduce en productos que funcionan, equipos que entregan
        a tiempo y clientes que vuelven. Estos son algunos de los resultados que respaldan
        nuestro trabajo.</p>
    </section>

    <div class="resultados-grid">
        <div class="stat"><strong>40+</strong><span>Proyectos entregados</span></div>
        <div class="stat"><strong>98%</strong><span>Clientes satisfechos</span></div>
        <div class="stat"><strong>15</strong><span>Industrias atendidas</span></div>
        <div class="stat"><strong>24/7</strong><span>Soporte técnico</span></div>
    </div>

    <h2 class="section-title">Casos destacados</h2>
    <div class="resultados-cases">
        <div class="feature-card">
            <h3>Plataforma de gestión interna</h3>
            <p>Sistema a medida que redujo en un 35% el tiempo de procesos administrativos
            de un cliente del sector logístico.</p>
        </div>
        <div class="feature-card">
            <h3>Tienda en línea con panel propio</h3>
            <p>E-commerce con backend real y panel de administración para gestión de
            productos, pedidos y clientes.</p>
        </div>
        <div class="feature-card">
            <h3>Portal de autenticación multi-rol</h3>
            <p>Acceso separado para administradores y clientes, con sesiones seguras y
            paneles independientes por tipo de usuario.</p>
        </div>
    </div>

</main>

<footer>
    <div class="footer-logo">
        <a href="../index.php" class="logo"><span>TECH</span><strong>CODE</strong></a>
        <p>Tecnología que convierte ideas en soluciones.</p>
    </div>
    <div class="footer-info">
        <span>© 2026 TechCode</span>
        <span>Desarrollo · Innovación · Tecnología</span>
    </div>
</footer>

<script src="../../CONTROLADOR/ui.js"></script>

</body>
</html>
