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

    <?php include_once 'bloques/estructura/barra_navegacion.php'; ?>


    <div id="#" class="container">
        <div class="row">
            <div id="#" class="col-xl-10 text-center col-lg-6 col-md-10 col-sm-10 col-12">

                <h2>Cantabria</h2>

                <?php $localidad_nombre = 'Castro Urdiales';
                $localidad = 'Castro Urdiales';
                $ruta_localidad = 'castrourdiales';
                $presentacion = 'La realidad histórica es que Castro Urdiales tiene una fundación romana documentada en el año 74 a.C.,
                        cuando fue establecida como "Flaviobriga" por el emperador Vespasiano. Esta ciudad romana se convirtió
                        en un importante puerto y centro comercial debido a su estratégica ubicación costera.';
                include 'bloques/localidades/index.php';?>

                <h2>Vizcaya</h2>
                <?php 
                $localidad = 'Playa de Laga';
                $ruta_localidad = 'playadelaga';
                $presentacion = 'La Playa de Laga, ubicada en la costa de Bizkaia en el País Vasco, es un paraíso natural dentro del Parque Natural de Urdaibai, una Reserva de la Biosfera declarada por la UNESCO. <br>Con su arena dorada y su entorno rodeado de acantilados y vegetación exuberante, es un destino perfecto para quienes buscan tranquilidad y belleza natural.<br>Además, es popular entre los surfistas gracias a sus olas y es ideal para el senderismo y la observación de aves. <br>La playa de Laga ofrece una experiencia única donde la naturaleza y el mar se encuentran en su máximo esplendor..';
                include 'bloques/localidades/index.php'; ?>


                <?php //include_once 'bloques/estructura/anuncios/carga_productos.php'; ?>
                <hr><?php 
                $table='amazon_sneakers_images';
                $where = 'where marca = "GEOX" and direccion = "izquierda_0"';
                $require = 'products_amazon/conexion.php';
                include 'products_amazon/sneakers.php';
                $articulo = "sneakers";         $grupo = '_2';
               
                include 'bloques/estructura/carrusel_auxiliar.php'; ?><hr>


                <h2>Cantabria</h2>
                <?php 
                $localidad = 'Noja';
                $ruta_localidad = 'noja';
                $presentacion = 'Noja es un encantador municipio costero situado en la región de Cantabria, al norte de España. Conocido por sus hermosas playas de arena fina, como Playa de Ris y Playa de Trengandín, Noja es un popular destino turístico, especialmente en verano. Además de su atractivo natural, la localidad cuenta con un rico patrimonio cultural, que incluye iglesias históricas y palacetes, así como una oferta gastronómica que destaca por los mariscos y pescados frescos. 
                Es un lugar ideal para disfrutar de la naturaleza, el mar, y la tranquilidad en un entorno pintoresco.';
                include 'bloques/localidades/index.php'; ?>

                <?php 
                $localidad = 'Playa de Berria';
                $ruta_localidad = 'playadeberria';
                $presentacion = 'bla bla bla.';
                include 'bloques/localidades/index.php'; ?>
                

<!--
                <?php $localidad = 'Laredo';
                //$presentacion = 'bla, bla, bla.';
                //include 'bloques/localidades/index.php'; ?>
                

                <h2>Francia</h2>
                <?php $localidad = 'Hendaya';
                $presentacion = 'bla, bla, bla.';
                include 'bloques/localidades/index.php'; ?>
                

                <?php $localidad = 'Bakio';
                $presentacion = 'bla, bla, bla.';
                include 'bloques/localidades/index.php'; ?>
                



                <h2>Guipuzkoa</h2>
                <?php $localidad = 'Zumaia';
                $presentacion = 'bla, bla, bla.';
                include 'bloques/localidades/index.php'; ?>

                <h2>Guipuzkoa</h2>

                <?php $localidad = 'Plentzia';
                $presentacion = 'bla, bla, bla.';
                include 'bloques/localidades/index.php'; ?>-->

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