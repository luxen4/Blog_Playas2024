<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Hendaya</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-carousel-image {
            max-height: 300px;
            object-fit: cover;
        }
        .map iframe {
            border: 0;
        }
    </style>
</head>
<body>

<!-- Encabezado -->
<header class="text-center my-5">
    <h1>Playa de Hendaya</h1>
    <p class="lead">Descubre la encantadora Playa de Hendaya, un paraíso costero en el País Vasco francés.</p>
</header>

<!-- Descripción de la Playa -->
<section class="container my-5">
    <h2>Descripción</h2>
    <p>
        La Playa de Hendaya es una extensa franja de arena dorada que se extiende a lo largo de la costa del País Vasco francés, ofreciendo vistas impresionantes del océano Atlántico y de la costa española en el horizonte. Con una longitud de más de 3 kilómetros, esta playa es conocida por sus aguas tranquilas y limpias, ideales para nadar y practicar deportes acuáticos como el surf y el paddle surf.
    </p>
    <p>
        Rodeada de un hermoso paseo marítimo y un vibrante centro turístico, Hendaya ofrece una amplia gama de servicios y actividades para toda la familia. Desde chiringuitos y restaurantes hasta zonas de juegos y deportes, la playa es un destino perfecto para disfrutar de un día completo al aire libre. Además, el entorno natural que rodea la playa es ideal para quienes desean explorar la belleza de la costa vasca.
    </p>
</section>

<!-- Galería de Imágenes -->
<section class="container my-5">
    <h2>Galería de Imágenes</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://example.com/hendaya1.jpg" class="d-block w-100 custom-carousel-image" alt="Playa de Hendaya 1">
            </div>
            <div class="carousel-item">
                <img src="https://example.com/hendaya2.jpg" class="d-block w-100 custom-carousel-image" alt="Playa de Hendaya 2">
            </div>
            <div class="carousel-item">
                <img src="https://example.com/hendaya3.jpg" class="d-block w-100 custom-carousel-image" alt="Playa de Hendaya 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</section>

<!-- Mapa de Ubicación -->
<section class="map container my-5">
    <h2>Ubicación</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.826156279471!2d-1.7787072845505665!3d43.33662127913719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4f678e2f6835b1%3A0x8f77db1a89c5da4!2sPlaya%20de%20Hendaya!5e0!3m2!1ses!2ses!4v1689350134823!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
</section>

<!-- Enlace a los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>