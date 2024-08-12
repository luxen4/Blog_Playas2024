<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Orio - Información y Turismo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-5">
        <h1>Playa de Orio</h1>
        <p>Descubre la tranquilidad y belleza de una de las playas más encantadoras del País Vasco.</p>
    </header>

    <!-- Presentación -->
    <section class="container my-5">
        <h2 class="mb-4">Presentación</h2>
        <p>La playa de Orio, situada en el corazón del País Vasco, ofrece un entorno natural incomparable donde la tranquilidad del mar se combina con el encanto de un pueblo pesquero tradicional. Este arenal de fina arena dorada y aguas calmadas es perfecto para un día de relax, disfrutando del sol y el mar, o para los más aventureros, practicar deportes acuáticos como el surf. Su proximidad al casco histórico de Orio también permite a los visitantes sumergirse en la cultura y gastronomía vasca, convirtiendo esta playa en un destino ideal tanto para el descanso como para la exploración.</p>
    </section>

    <!-- Galería de Imágenes -->
    <section class="container my-5">
        <h2 class="mb-4">Galería de Imágenes</h2>
        <div id="orioCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#orioCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#orioCarousel" data-slide-to="1"></li>
                <li data-target="#orioCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Playa de Orio al atardecer">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Playa de Orio al atardecer</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Vista panorámica de la playa de Orio">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Vista panorámica de la playa de Orio</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Deportes acuáticos en Orio">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Deportes acuáticos en Orio</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#orioCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#orioCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>

    <!-- Mapa de Ubicación -->
    <section class="map container my-5">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.543675421291!2d-2.1302358842938156!3d43.28352427913648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b5f45e921d7d%3A0x69c5791fcbb61540!2sPlaya%20de%20Orio!5e0!3m2!1ses!2ses!4v1692198809355!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <!-- Servicios -->
    <section class="container my-5">
        <h2>Servicios</h2>
        <ul>
            <li>Alquiler de sombrillas y hamacas.</li>
            <li>Duchas y aseos públicos.</li>
            <li>Zonas de juegos infantiles.</li>
            <li>Chiringuitos y restaurantes cercanos.</li>
            <li>Accesos adaptados para personas con movilidad reducida.</li>
            <li>Escuela de surf.</li>
        </ul>
    </section>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>