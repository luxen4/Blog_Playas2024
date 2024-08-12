<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Laredo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Encabezado de la Playa de Laredo -->
    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-1">
        <h1>Playa de Laredo</h1>
        <p>La Playa de Laredo, también conocida como La Salvé, es una de las playas más extensas y bellas de la costa cántabra. Un lugar perfecto para disfrutar del sol, el mar y los deportes acuáticos.</p>
    </header>

    <!-- Contenido principal -->
    <main class="container my-4">
        <!-- Mapa de ubicación -->
        <section class="map mb-4">
            <h2>Ubicación</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.3784514868024!2d-3.4172185!3d43.4132068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493f799dffea9b%3A0x9acb5cc227731d85!2sPlaya%20de%20Laredo!5e0!3m2!1ses!2ses!4v1689360171345!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
        </section>

        <!-- Características de la Playa -->
        <section class="container my-5">
            <h2>Características</h2>
            <ul>
                <li>Arena fina y dorada</li>
                <li>Longitud: 4 km</li>
                <li>Mar tranquilo, ideal para familias</li>
                <li>Paseo marítimo amplio</li>
                <li>Servicios: duchas, aseos, socorristas</li>
                <li>Accesible para personas con movilidad reducida</li>
            </ul>
        </section>

        <!-- Galería de Imágenes -->
        <section class="container my-5">
            <h2>Galería</h2>
            <div id="laredoGallery" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/800x400?text=Playa+de+Laredo+1" class="d-block w-100" alt="Vista de la Playa de Laredo">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Playa+de+Laredo+2" class="d-block w-100" alt="Vista aérea de Laredo">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Playa+de+Laredo+3" class="d-block w-100" alt="Paseo marítimo de Laredo">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#laredoGallery" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#laredoGallery" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- Sección de Servicios -->
        <section class="container my-5">
            <h2>Servicios en la Playa</h2>
            <p>La Playa de Laredo ofrece una amplia variedad de servicios para asegurar una estancia cómoda y agradable para todos los visitantes:</p>
            <ul>
                <li>Chiringuitos y restaurantes a lo largo del paseo marítimo</li>
                <li>Alquiler de sombrillas y hamacas</li>
                <li>Escuelas de surf y alquiler de material deportivo</li>
                <li>Áreas de juegos infantiles</li>
                <li>Zonas de parking cercano</li>
            </ul>
        </section>
        
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Tu Sitio Web. Todos los derechos reservados.</p>
    </footer>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>