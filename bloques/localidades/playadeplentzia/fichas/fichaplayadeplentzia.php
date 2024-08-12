<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Plentzia</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
        .section-title {
            margin-bottom: 1.5em;
            font-size: 2em;
            font-weight: bold;
        }
        .map iframe {
            border: none;
        }
        .presentation img {
            max-width: 100%;
            height: auto;
        }
        .highlight {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .highlight h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .highlight p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-3">
        <h1>Playa de Plentzia</h1>
        <p>Descubre una de las playas más encantadoras del País Vasco, Un paraíso costero en el corazón del País Vasco</p>
    </header>

    <!-- Presentación -->
    <section class="container my-5">
        <h2 class="section-title">Bienvenida a la Playa de Plentzia</h2>
        <p>
            La Playa de Plentzia, ubicada en la encantadora localidad costera del País Vasco, ofrece una experiencia única para los amantes del sol y el mar. Esta playa de arena dorada y aguas cristalinas es ideal para disfrutar de un día en familia o para relajarse bajo el sol. Su ambiente acogedor y sus vistas panorámicas al mar Cantábrico crean un entorno perfecto para practicar deportes acuáticos, como el surf y el paddleboarding, o simplemente para relajarse y disfrutar de la tranquilidad del entorno. Con una amplia gama de servicios y una vibrante vida local, Plentzia es el destino perfecto para una escapada costera inolvidable.
        </p>

                        <p>
                    La Playa de Plentzia, ubicada en la pintoresca localidad del País Vasco, es un destino ideal para quienes buscan combinar relajación con actividades al aire libre. Con su extensa franja de arena dorada y sus aguas tranquilas, es perfecta para familias y visitantes de todas las edades. La playa cuenta con excelentes instalaciones, incluyendo duchas, aseos y zonas de juegos infantiles. Además, su entorno natural ofrece oportunidades para practicar deportes acuáticos como el surf y el paddleboarding, o simplemente disfrutar de una caminata a lo largo del paseo marítimo.
                </p>
                <div class="highlight">
                    <h3>Características Destacadas</h3>
                    <p>• Arena fina y dorada ideal para tomar el sol.</p>
                    <p>• Aguas cristalinas y calmadas perfectas para nadar.</p>
                    <p>• Amplia variedad de servicios y actividades recreativas.</p>
                    <p>• Entorno natural impresionante con vistas al mar Cantábrico.</p>
                </div>
                <p>
                    En Plentzia no solo disfrutarás de un día en la playa, sino que también podrás explorar el encantador pueblo cercano, con sus tiendas, restaurantes y bares que ofrecen una muestra de la rica cultura vasca. ¡No te pierdas la oportunidad de visitar la Playa de Plentzia para una experiencia costera inolvidable!
                </p>
    </section>



    <!-- Galería de Imágenes -->
    <section class="container my-5">
        <h2 class="section-title">Galería de Imágenes</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/800x400?text=Playa+de+Plentzia+1" alt="Playa de Plentzia 1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400?text=Playa+de+Plentzia+2" alt="Playa de Plentzia 2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400?text=Playa+de+Plentzia+3" alt="Playa de Plentzia 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    

    <!-- Mapa de Ubicación -->
    <section class="map container my-5">
        <h2 class="section-title">Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2900.758929572006!2d-2.985097484606638!3d43.41780067909733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b1a3d6e7e737%3A0xf62e83304d22c5c3!2sPlaya%20de%20Plentzia!5e0!3m2!1ses!2ses!4v1594865304784!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>