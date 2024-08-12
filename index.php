<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="e148bdbc89c019bd06122ab7bd08a8be" />
    <title>Los Viajes de Adrián</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
</head>

<body>

    <?php include_once 'bloques/estructura/barra_navegacion2.php'; ?>


    <div id="#" class="container">
        <div class="row">
            <div id="#" class="col-xl-10 text-center col-lg-6 col-md-10 col-sm-10 col-12">

                <h2>Cantabria</h2>

                <?php 
                $localidad_nombre = 'Castro Urdiales';
                $localidad = 'Castro Urdiales';
                $ruta_localidad = 'castrourdiales';
                $presentacion = 'La realidad histórica es que Castro Urdiales tiene una fundación romana documentada en el año 74 a.C.,
                        cuando fue establecida como "Flaviobriga" por el emperador Vespasiano. Esta ciudad romana se convirtió
                        en un importante puerto y centro comercial debido a su estratégica ubicación costera.';
                include 'bloques/localidades/index.php';?>

                <h2>Vizcaya</h2>
                <?php 
                $localidad_nombre = 'Playa de Laga';
                $localidad = 'Playa de Laga';
                $ruta_localidad = 'playadelaga';
                $presentacion = 'La Playa de Laga, ubicada en la costa de Bizkaia en el País Vasco, es un paraíso natural dentro del Parque Natural de Urdaibai, una Reserva de la Biosfera declarada por la UNESCO. <br>Con su arena dorada y su entorno rodeado de acantilados y vegetación exuberante, es un destino perfecto para quienes buscan tranquilidad y belleza natural.<br>Además, es popular entre los surfistas gracias a sus olas y es ideal para el senderismo y la observación de aves. <br>La playa de Laga ofrece una experiencia única donde la naturaleza y el mar se encuentran en su máximo esplendor..';
                include 'bloques/localidades/index.php'; ?>


                <?php define('BASE_PATH_ESTRUCTURA', __DIR__ . '/bloques/estructura/'); ?>
                <?php 
                $servername = $_SERVER['SERVER_NAME'];
                $require = 'products_amazon/conexion.php';
                $var_base = 'images_sneakers_2_';
                $table = 'amazon_sneakers_images';
                $where = 'where marca = "GEOX" and direccion = "izquierda_0"';
                require 'products_amazon/shirtsauxiliar.php'; ?>

                <div class="row">
                    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
                        <hr><?php $articulo = "sneakers";
                            $grupo = '_2';
                            //include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?>
                            <?php
$images = 'images_';

$articulo_2_1 = $articulo . $grupo . "_1";
$articulo_2_2 = $articulo . $grupo . "_2";
$articulo_2_3 = $articulo . $grupo . "_3";
$articulo_2_4 = $articulo . $grupo . "_4";

?>

<div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        // Generar nombres de variables dinámicamente
                        $articulo_var = $articulo . $grupo . '_' . $i;

                        $images_articulo_var = 'images_' . $articulo_var;
                        //echo($images_articulo_var);
                        // Renderizar el HTML
                        echo '
                            <div  class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                                <a style="marging: 1em;" id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                                    <img style="padding: 0em;"; id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block w-100 custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                                </a>
                            </div>';
                    }
                    ?>
                </div>
            </div>
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


<style>
    /* Clase personalizada para las imágenes del carrusel */
    .custom-carousel-image {
        height: 100%;
        width: 100%;
        object-fit: contain;
        /* Ajusta la imagen dentro del contenedor manteniendo la proporción */
        object-position: top;
        /* Alinea la imagen desde la parte superior */
    }


    @media (max-width: 576px) {
        .custom {
            width: 65%;
            margin: 0 auto;
        }
    }

    a img {
        margin: 1em;
        /*border: 1px solid #ccc;*/ /* Light gray color */
    }

</style>
                        <hr>
                    </div>
                </div>



                <h2>Cantabria</h2>
                <?php 
                $localidad_nombre = 'Playa de Noja';
                $localidad = 'Playa de Noja';
                $ruta_localidad = 'playadenoja';
                $presentacion = 'Noja es un encantador municipio costero situado en la región de Cantabria, al norte de España. Conocido por sus hermosas playas de arena fina, como Playa de Ris y Playa de Trengandín, Noja es un popular destino turístico, especialmente en verano. Además de su atractivo natural, la localidad cuenta con un rico patrimonio cultural, que incluye iglesias históricas y palacetes, así como una oferta gastronómica que destaca por los mariscos y pescados frescos. 
                Es un lugar ideal para disfrutar de la naturaleza, el mar, y la tranquilidad en un entorno pintoresco.';
                include 'bloques/localidades/index.php'; ?>

                <?php 
                $localidad_nombre = 'Playa de Berria';
                $localidad = 'Playa de Berria';
                $ruta_localidad = 'playadeberria';
                $presentacion = 'La Playa de Berria, ubicada en Santoña, Cantabria, es un hermoso tramo de arena dorada que se extiende por casi 2 kilómetros entre el Monte Buciero y el estuario de Treto. Con sus aguas cristalinas y su entorno natural protegido, es un destino perfecto para quienes buscan disfrutar del surf, paseos relajantes, o simplemente conectar con la naturaleza.<br>Esta playa, de gran valor ecológico, es un paraíso tanto para los amantes del mar como para aquellos que buscan un rincón tranquilo en la costa cantábrica.';
                include 'bloques/localidades/index.php'; ?>
                


                <?php 
                $localidad_nombre = 'Playa de Bakio';
                $localidad = 'Playa de Bakio';
                $ruta_localidad = 'playadebakio';
                $presentacion = 'La Playa de Bakio, situada en la costa de Vizcaya, es un lugar emblemático para los amantes del surf y la naturaleza. Con su extensa franja de arena dorada y un entorno natural impresionante, es el destino perfecto para disfrutar del mar Cantábrico. Rodeada de montañas y viñedos, Bakio ofrece no solo olas espectaculares, sino también una rica tradición vinícola, especialmente conocida por su txakoli.<br>Ya sea para practicar deportes acuáticos o simplemente relajarse, la Playa de Bakio es un rincón ideal para desconectar.';
                include 'bloques/localidades/index.php'; ?>



                <?php 
                $localidad_nombre = 'Playa de Laredo';
                $localidad = 'Playa de Laredo';
                $ruta_localidad = 'playadelaredo';
                $presentacion = 'La Playa de Laredo, también conocida como La Salvé, es una de las joyas de la costa cántabra. Con sus más de 4 kilómetros de arena fina y dorada, es el destino perfecto para disfrutar del sol, el mar y actividades al aire libre. Esta amplia playa ofrece un entorno ideal tanto para familias como para amantes de los deportes acuáticos, con su mar tranquilo y un paseo marítimo lleno de vida.<br> Ven y descubre por qué la Playa de Laredo es uno de los destinos más apreciados del norte de España.';
                include 'bloques/localidades/index.php'; ?>


                <?php 
                $localidad_nombre = 'Playa de Isla';
                $localidad = 'Playa de Isla';
                $ruta_localidad = 'playadeisla';
                $presentacion = 'La Playa de Isla, ubicada en la encantadora localidad de Isla en Cantabria, es un paraíso natural que combina belleza y tranquilidad. Con su extensa franja de arena dorada y aguas cristalinas, es el lugar ideal para relajarse y disfrutar del sol. Su entorno virgen, rodeado de dunas y vegetación, ofrece un refugio perfecto para quienes buscan escapar del bullicio. Ideal tanto para familias como para los amantes de la naturaleza, la Playa de Isla es un destino que promete unas vacaciones inolvidables.';
                include 'bloques/localidades/index.php'; ?>


                <?php 
                $localidad_nombre = 'Playa de Suances';
                $localidad = 'Playa de Suances';
                $ruta_localidad = 'playadesuances';
                $presentacion = '.';
                include 'bloques/localidades/index.php'; ?>


                <h2>Guipuzkoa</h2>
                <?php 
                $localidad_nombre = 'Playa de Zumaia';
                $localidad = 'Playa de Zumaia';
                $ruta_localidad = 'playadezumaia';
                $presentacion = 'La Playa de Zumaia, situada en la costa del País Vasco, es un destino imprescindible para los amantes de la naturaleza y el mar. Conocida por su impresionante paisaje de acantilados y su arena dorada, esta playa ofrece un entorno espectacular donde disfrutar de la belleza natural de la región. Su entorno protegido, rodeado de formaciones geológicas únicas y un mar cristalino, la convierte en un lugar ideal para relajarse, tomar el sol o practicar deportes acuáticos. Además, la playa está perfectamente equipada con servicios para visitantes, incluyendo restaurantes y áreas de recreo, haciendo de Zumaia un lugar perfecto para pasar un día inolvidable en la costa vasca.';
                include 'bloques/localidades/index.php'; ?>


                <h2>Guipuzkoa</h2>
                <?php 
                $localidad_nombre = 'Playa de Plentzia';
                $localidad = 'Playa de Plentzia';
                $ruta_localidad = 'playadeplentzia';
                $presentacion = 'Ubicada en la pintoresca localidad de Plentzia, en la provincia de Bizkaia, la Playa de Plentzia es un destino costero que cautiva con su belleza natural. Con sus suaves arenas doradas y aguas cristalinas, esta playa es el lugar perfecto para disfrutar de un día relajado bajo el sol. La playa cuenta con una amplia variedad de servicios, como chiringuitos y áreas de recreo, que la convierten en un lugar ideal tanto para familias como para amantes de los deportes acuáticos. Además, su entorno idílico y su tranquilo ambiente la hacen perfecta para quienes buscan un escape de la rutina diaria y desean sumergirse en la belleza del País Vasco.';
                include 'bloques/localidades/index.php'; ?>


            
              <h2>Francia</h2>
              <?php 
                $localidad_nombre = 'Playa de Hendaya';
                $localidad = 'Playa de Hendaya';
                $ruta_localidad = 'playadehendaya';
                $presentacion = 'La Playa de Hendaya, situada en el sur de Francia, en la región de los Pirineos Atlánticos, es una joya costera que ofrece un entorno espectacular y vibrante. Con su extensa franja de arena dorada y aguas tranquilas, es el destino ideal para disfrutar de actividades al aire libre, desde relajantes días de sol hasta emocionantes deportes acuáticos. La playa cuenta con excelentes instalaciones, incluyendo restaurantes, bares y áreas para familias, lo que la convierte en un lugar popular tanto para locales como para turistas. Además, su cercanía a la frontera con España añade un encanto único, haciendo de Hendaya un lugar perfecto para explorar la rica cultura y belleza natural de la región vasca.';
                include 'bloques/localidades/index.php'; ?>
<!--
  
                

                





-->

            </div>


            <div id="#" class="col-xl-2 text-center col-lg-3 col-md-12 col-sm-12 col-12">
                <?php require './bloques/anuncios_derecha0.php' ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/31180/af0d219c84b03a7bba793620fffa25689a03ba0d/lib.js"></script>


    <?php //<iframe src="scripts.html"></iframe> ?>

    <!-- adcash -->
    <script type="text/javascript">
        aclib.runAutoTag({
            zoneId: 'ctwlmuaot0',
        });
    </script>
    <footer>
        <?php require 'bloques/estructura/footer.php'; ?>
    </footer>
</body>


</html>

<!-- Enlaza el JavaScript de Bootstrap y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<?php //include_once 'bloques/localidades/playadelaga/js/logica_anuncios.php'; ?>

<style>
    
    h2, h3, h4 {
        text-align: left;
    }


    img {
        width: 100%;
        object-fit: cover;
    }
</style>
