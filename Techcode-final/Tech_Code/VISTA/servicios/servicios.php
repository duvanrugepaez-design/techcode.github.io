
<?php require_once __DIR__ . '/../../MODELO/navbar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Servicios de desarrollo de software y soluciones digitales de TechCode."
    >

    <title>Servicios | TechCode</title>

    <link rel="stylesheet" href="servicios.css">

    <link rel="stylesheet" href="../shared.css">


</head>


<body class="tc-inner-page">

===================================================== -->

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

    </nav>

    <div class="navbar-side">

        <?= botonSesionNavbar('../') ?>

        <button class="menu-btn" id="menuBtn" aria-label="Abrir menú">
            <span></span><span></span><span></span>
        </button>

    </div>

</header>



<main>

<section class="hero">

    <div class="hero-content">

        <div class="hero-label">

            <span class="status-dot"></span>

            SERVICIOS TECHCODE

        </div>


        <h1>

            Creamos

            <span>soluciones.</span>

        </h1>


        <p>

            Transformamos ideas en experiencias digitales,
            sistemas y herramientas pensadas para funcionar,
            crecer y generar resultados.

        </p>


        <div class="hero-buttons">

            <a
                href="../contacto/contacto.php"
                class="primary-btn"
            >

                <span>Hablar con nosotros</span>

                <b>↗</b>

            </a>


            <a
                href="desarrollo-web.php"
                class="secondary-btn"
            >

                Ver servicios

                <span>↓</span>

            </a>

        </div>


        <div class="hero-meta">

            <div>

                <strong>04</strong>

                <span>
                    áreas de servicio
                </span>

            </div>


            <div>

                <strong>01</strong>

                <span>
                    equipo digital
                </span>

            </div>


            <div>

                <strong>∞</strong>

                <span>
                    posibilidades
                </span>

            </div>

        </div>

    </div>



    <!-- DECORACIÓN HERO -->

    <div class="hero-visual">

        <div class="visual-ring ring-one"></div>

        <div class="visual-ring ring-two"></div>

        <div class="visual-grid"></div>

        <div class="visual-center">

            <span>TC</span>

            <small>
                DIGITAL<br>
                STUDIO
            </small>

        </div>

        <div class="visual-cross cross-one">+</div>

        <div class="visual-cross cross-two">+</div>

    </div>


</section>

</main>

</body>
</html>
