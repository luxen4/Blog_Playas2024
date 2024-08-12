<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Deba</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://example.com/path-to-your-image.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }
        .gallery img {
            width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <header class="hero">
        <h1>Playa de Deba</h1>
    </header>

    <!-- Introduction -->
    <section class="container my-5">
        <h2>Descubre la Playa de Deba</h2>
        <p>
            La Playa de Deba, ubicada en la costa de Guipúzcoa, es un rincón idílico del País Vasco que combina la belleza natural con la tranquilidad costera. Con su extensa franja de arena dorada y fina, esta playa ofrece un entorno perfecto para disfrutar de un día soleado. Ideal para familias, surfistas y amantes de la naturaleza, Deba es conocida por sus aguas limpias y su entorno impresionante.
        </p>
        <p>
            La playa está rodeada por acantilados que forman parte del Geoparque de la Costa Vasca, brindando vistas panorámicas únicas. Es un lugar popular para la práctica de surf, caminatas a lo largo del litoral y actividades al aire libre. Además, la cercanía al pintoresco pueblo de Deba añade un toque cultural y gastronómico a tu visita.
        </p>
    </section>

    <!-- Image Gallery -->
    <section class="gallery container my-5">
        <h2>Galería de Imágenes</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="https://example.com/path-to-your-image-1.jpg" alt="Vista panorámica de la Playa de Deba">
            </div>
            <div class="col-md-6">
                <img src="https://example.com/path-to-your-image-2.jpg" alt="Surfistas en la Playa de Deba">
            </div>
            <div class="col-md-6">
                <img src="https://example.com/path-to-your-image-3.jpg" alt="Atardecer en la Playa de Deba">
            </div>
            <div class="col-md-6">
                <img src="https://example.com/path-to-your-image-4.jpg" alt="Camino costero cerca de la Playa de Deba">
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map container my-5">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2935.473357095274!2d-2.424613684458877!3d43.28366297914659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4f8375c8f51e4d%3A0xaef95e1a4e21c7e8!2sPlaya%20de%20Deba!5e0!3m2!1ses!2ses!4v1689366205221!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>