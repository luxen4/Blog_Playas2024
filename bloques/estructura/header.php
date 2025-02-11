
<?php /*
<div>
    <h1 class="small mb-0 text-uppercase" style="opacity: 0.7;">Los viajes de Adrián</h1>
</div> */ ?>                 
<header class="bg-primary text-white text-center d-flex flex-column flex-lg-row align-items-center justify-content-between p-3">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-primary w-100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="./../../../../index.php">Todas Playas por Zonas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#informacion_general">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#ubicacion">Ubicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#actividades">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#galeria">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#masinfo">Más Info</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="./../../../../bloques/amazon_interfaz_enlaces.php">Interfaz</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<style>
    /* Estilo para la imagen de presentación del auto */
    header img {
        max-height: 100px;
        /* Ajusta la altura máxima */
        margin: 20px;
        /* Espacio entre la imagen y el texto */
        border-radius: 10px;
        /* Bordes redondeados */
        border: 2px solid #ffffff;
        /* Borde blanco */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Sombra suave */
        opacity: 0.9;
        /* Ligera transparencia */
        transition: transform 0.3s ease, opacity 0.3s ease;
        /* Transición para animaciones */
    }

    /* Efecto al pasar el ratón por encima de la imagen */
    header img:hover {
        transform: scale(1.05);
        /* Aumenta ligeramente el tamaño al pasar el ratón */
        opacity: 1;
        /* Hace la imagen completamente opaca */
    }

    /* Inscripción debajo de la imagen */
    header .small {
        opacity: 0.7;
        /* Opacidad para hacer el texto más sutil */
        font-style: italic;
        /* Fuente cursiva */
    }

    /* Ajustes de tamaño de fuente y márgenes en pantallas pequeñas */
    @media (max-width: 576px) {
        header h1 {
            font-size: 1.5rem;
        }

        header p.lead {
            font-size: 1rem;
        }

        header img {
            max-height: 80px;
            /* Reduce el tamaño de la imagen en pantallas pequeñas */
            margin: 10px;
        }

        nav ul.nav {
            flex-direction: column;
            /* Coloca los enlaces en una columna en pantallas pequeñas */
        }

        nav ul.nav li.nav-item {
            margin-bottom: 10px;
        }
    }

    /* Ajustes adicionales para centrar el menú en pantallas grandes */
    nav ul.nav {
        display: flex;
        justify-content: center;
        /* Centra los elementos en el contenedor */
        align-items: center;
    }

    nav ul.nav li.nav-item {
        margin: 0 15px;
        /* Añade espacio horizontal entre los enlaces */
    }

    .d-flex.flex-column.flex-md-row.align-items-center.flex-grow-1 {
    flex-grow: 2; /* Hace que esta sección ocupe más espacio */
}
</style>