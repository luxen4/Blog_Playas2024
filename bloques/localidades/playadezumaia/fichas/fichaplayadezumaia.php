<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Zumaia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-carousel-image {
            height: 100%;
            object-fit: cover;
        }
        .map iframe {
            border: 0;
        }
        .gallery img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Presentación de la Playa de Zumaia -->
<section class="container my-5">
    <h1>Playa de Zumaia</h1>
    <p>Ubicada en la hermosa localidad de Zumaia, en el País Vasco, la Playa de Zumaia es un destino costero que combina impresionante belleza natural con una rica oferta de actividades recreativas. Esta playa destaca por su extenso arenal dorado y sus aguas limpias, que la convierten en un lugar ideal para disfrutar de un día de sol y mar.</p>
    <p>Famosa por sus formaciones geológicas únicas conocidas como los "Flysch", la Playa de Zumaia ofrece vistas espectaculares de acantilados y rocas que se han formado a lo largo de millones de años. Estas formaciones geológicas no solo aportan un impresionante paisaje, sino que también son un atractivo para los amantes de la geología y los fotógrafos.</p>
    <p>Además de su belleza natural, la playa cuenta con amplias zonas de acceso para familias, un paseo marítimo encantador con restaurantes y tiendas, y diversas instalaciones para el disfrute de los visitantes, incluyendo servicios de alquiler de sombrillas y tumbonas, y zonas de juegos para niños.</p>
    <p>La Playa de Zumaia es también conocida por sus olas suaves, ideales para principiantes en el surf y para aquellos que desean relajarse en el agua. Con su combinación de belleza natural, oportunidades recreativas y comodidades modernas, es un destino perfecto para todos aquellos que buscan disfrutar de la costa vasca en su máximo esplendor.</p>
</section>

<!-- Galería de Imágenes -->
<section class="container my-5">
    <h2>Galería de Imágenes</h2>
    <div class="row gallery">
        <div class="col-md-4">
            <img src="https://via.placeholder.com/600x400" alt="Vista de la Playa de Zumaia">
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/600x400" alt="Acantilados de Zumaia">
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/600x400" alt="Formaciones Flysch en Zumaia">
        </div>
    </div>
</section>

<!-- Mapa de Ubicación -->
<section class="map container my-5">
    <h2>Ubicación</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2910.641436566583!2d-2.2113678842956725!3d43.30946657916814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b3d9f1e1a5f1%3A0x2c340a50d7ff18c6!2sPlaya%20de%20Zumaia!5e0!3m2!1ses!2ses!4v1595442170546!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
</section>


<footer>
        <?php require './../../../../bloques/estructura/footer.php'; ?>
    </footer>


<!-- Enlace a los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>