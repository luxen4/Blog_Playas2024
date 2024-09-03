<header class="bg-primary text-white text-center d-flex flex-column flex-lg-row align-items-center justify-content-between p-3">
    <div class="d-flex flex-column flex-md-row align-items-center">
        <img src="./../../../../../img/yo.png" alt="Auto de viaje" class="img-fluid" style="max-height: 180px; margin-right: 20px;">
        <div class="text-center text-md-left mt-md-0">
            <h1 class="mb-0">Playa de <?= $localidad; ?></h1>
            <p class="lead mb-0">Tu destino perfecto en la costa vasca de <?= $region; ?></p>
            <p class="small mb-0 text-uppercase" style="opacity: 0.7;">Los viajes de Adrián</p>
        </div>
    </div>
    <nav class="mt-3 mt-lg-0">
        <ul class="nav justify-content-center flex-wrap">
            <li class="nav-item">
                <a class="nav-link text-white" href="#presentacion">Presentación</a>
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
        </ul>
    </nav>
</header>

<style>
    /* Estilo para la imagen de presentación del auto */
    header img {
        max-height: 100px; /* Ajusta la altura máxima */
        margin: 20px; /* Espacio entre la imagen y el texto */
        border-radius: 10px; /* Bordes redondeados */
        border: 2px solid #ffffff; /* Borde blanco */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra suave */
        opacity: 0.9; /* Ligera transparencia */
        transition: transform 0.3s ease, opacity 0.3s ease; /* Transición para animaciones */
    }

    /* Efecto al pasar el ratón por encima de la imagen */
    header img:hover {
        transform: scale(1.05); /* Aumenta ligeramente el tamaño al pasar el ratón */
        opacity: 1; /* Hace la imagen completamente opaca */
    }

    /* Inscripción debajo de la imagen */
    header .small {
        opacity: 0.7; /* Opacidad para hacer el texto más sutil */
        font-style: italic; /* Fuente cursiva */
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
            max-height: 80px; /* Reduce el tamaño de la imagen en pantallas pequeñas */
            margin: 10px;
        }
        nav ul.nav {
            flex-direction: column; /* Coloca los enlaces en una columna en pantallas pequeñas */
        }
        nav ul.nav li.nav-item {
            margin-bottom: 10px;
        }
    }
</style>