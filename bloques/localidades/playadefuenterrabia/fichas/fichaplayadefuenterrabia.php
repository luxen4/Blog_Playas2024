<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playa de Fuenterrabía</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-5">
        <h1>Playa de Fuenterrabía</h1>
        <p>Un paraíso costero en el corazón del País Vasco</p>
    </header>

    <!-- Presentación -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Sobre la Playa</h2>
                <p>
                    La playa de Fuenterrabía, situada en el pintoresco pueblo costero de Hondarribia, es un destino ideal
                    para quienes buscan combinar la tranquilidad del mar con el encanto de la historia vasca. Sus arenas
                    doradas y aguas cristalinas invitan al descanso, mientras que su ubicación cercana al casco antiguo
                    permite explorar el rico patrimonio cultural y gastronómico de la región.
                </p>
                <p>
                    Esta playa, protegida por montañas y con vistas al mar Cantábrico, es perfecta para familias y
                    amantes de la naturaleza, ofreciendo un entorno seguro y agradable para disfrutar del sol, el mar,
                    y las actividades al aire libre.
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://www.euskoguide.com/images/upload/playa-hondarribia-920-mari-marijau-ibarrondo.jpg" class="img-fluid rounded" alt="Playa de Fuenterrabía">
            </div>
        </div>
    </section>

    <!-- Galería de Imágenes -->
    <section class="container my-5">
        <h2>Galería de Imágenes</h2>
        <div id="carouselFuenterrabia" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.euskoguide.com/images/upload/hondarribia-beach.jpg" class="d-block w-100" alt="Vista panorámica de la playa de Fuenterrabía">
                </div>
                <div class="carousel-item">
                    <img src="https://www.euskoguide.com/images/upload/hondarribia-marina.jpg" class="d-block w-100" alt="Puerto de Fuenterrabía">
                </div>
                <div class="carousel-item">
                    <img src="https://www.euskoguide.com/images/upload/hondarribia-town.jpg" class="d-block w-100" alt="Casco antiguo de Hondarribia">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselFuenterrabia" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselFuenterrabia" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>

    <!-- Mapa de Ubicación -->
    <section class="container my-5">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2896.1118097288057!2d-1.7892036842814784!3d43.364166479132455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd515bd59137b9c5%3A0x600405e004cc3a17!2sPlaya%20de%20Hondarribia%2C%20Gipuzkoa!5e0!3m2!1ses!2ses!4v1689359985642!5m2!1ses!2ses" width="100%" height="450" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <!-- Información adicional -->
    <section class="container my-5">
        <h2>Información Útil</h2>
        <ul>
            <li><strong>Longitud:</strong> 800 metros</li>
            <li><strong>Tipo de Arena:</strong> Arena dorada y fina</li>
            <li><strong>Servicios:</strong> Duchas, alquiler de hamacas, restaurantes cercanos, aparcamiento</li>
            <li><strong>Actividades:</strong> Natación, surf, kayak, paseos en barco</li>
            <li><strong>Acceso:</strong> Fácil acceso para personas con movilidad reducida</li>
        </ul>
    </section>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>