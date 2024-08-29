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

    <?php
    $src = './../../mifoto.png';
    $href_lugar = './';
    $href_zona = './../../../../Blog_Playas2024/index.php';
    include_once 'bloques/estructura/barra_navegacion2.php'; ?>
    <?php include_once 'bloques/estructura/barra_navegacion2.php';?>
    <?php $page = 'home'; ?>
    <?php //$require = $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/products_amazon/sql_generica.php' ; ?>
    <?php //include_once 'bloques/estructura/anuncios/carga_productos.php'; ?>

    <?php //define('BASE_PATH_ESTRUCTURA', $_SERVER['DOCUMENT_ROOT'] . '/Blog_Playas2024/bloques/estructura/'); ?>


    <?php 

    $ruta = './bloques/estructura/';
    include $ruta . '/basico.php'; 
    
    ?>
    

    <div id="#" class="container">
        <div class="row">
            <div id="#" class="col-xl-10 text-center col-lg-6 col-md-10 col-sm-10 col-12">

            <hr><?php                         
            $articulo = 'shorts'; $grupo = '_3';
            // include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; ?><hr>


<!--
                <?php
                $servername = $_SERVER['SERVER_NAME'];
                $require = 'products_amazon/conexion.php';
                $var_base = 'images_sneakers_2_';
                $table = 'amazon_sneakers_images';
                $where = 'where marca = "GEOX" and direccion = "izquierda_0"';
                require 'products_amazon/sql_generica.php'; ?>

                <div class="row">
                    <div id="#" class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
                        <hr><?php $articulo = "sneakers";
                            $grupo = '_2';
                            //include BASE_PATH_ESTRUCTURA . 'carrusel_auxiliar.php'; 
                            ?>
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
                        </div>-->



                        <hr>
                    </div>
                </div>


                <h2 id="cantabria">Cantabria</h2>
                <?php
                $localidad_nombre = 'Castro Urdiales';
                $localidad = 'Castro Urdiales';
                $archivo_name = 'castrourdiales';
                $presentacion = 'La realidad histórica es que Castro Urdiales tiene una fundación romana documentada en el año 74 a.C.,
                        cuando fue establecida como "Flaviobriga" por el emperador Vespasiano. Esta ciudad romana se convirtió
                        en un importante puerto y centro comercial debido a su estratégica ubicación costera.';?>
                

                <?php include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Suances';
                $localidad = 'Playa de Suances';
                $archivo_name = 'playadesuances';
                $presentacion = 'Suances es una vibrante localidad costera situada en Cantabria, al norte de España. Famosa por su extensa playa de arena dorada, la Playa de Suances es un destino ideal tanto para los entusiastas del surf como para las familias que buscan disfrutar de un día de sol y mar. La playa cuenta con excelentes instalaciones, incluyendo restaurantes, bares y tiendas. Además, Suances ofrece un entorno natural impresionante con vistas al Mar Cantábrico y proximidad a la ciudad de Santander. Es el lugar perfecto para disfrutar de actividades acuáticas, relajarse en la playa y degustar la rica gastronomía local basada en mariscos frescos y platos típicos cántabros.';
                include 'bloques/localidades/index.php';
                ?>

                <?php
                $localidad_nombre = 'Playa de Somo';
                $localidad = 'Playa de Somo';
                $archivo_name = 'playadesomo';
                $presentacion = 'Somo es una popular localidad costera situada en Cantabria, al norte de España. Conocida por su extensa playa de arena dorada, la Playa de Somo es un destino destacado para los amantes del surf y las actividades acuáticas. Esta playa ofrece un ambiente vibrante y una amplia gama de servicios, incluyendo restaurantes, bares y tiendas. Además de su atractivo costero, Somo cuenta con un entorno natural impresionante, con vistas al Mar Cantábrico y a la ciudad de Santander. Es el lugar perfecto para disfrutar de la playa, el sol y una rica gastronomía basada en productos frescos del mar.';
                include 'bloques/localidades/index.php';
                ?>
               
                <?php
                $localidad_nombre = 'Playa de Noja';
                $localidad = 'Playa de Noja';
                $archivo_name = 'playadenoja';
                $presentacion = 'Noja es un encantador municipio costero situado en la región de Cantabria, al norte de España. Conocido por sus hermosas playas de arena fina, como Playa de Ris y Playa de Trengandín, Noja es un popular destino turístico, especialmente en verano. Además de su atractivo natural, la localidad cuenta con un rico patrimonio cultural, que incluye iglesias históricas y palacetes, así como una oferta gastronómica que destaca por los mariscos y pescados frescos. 
                Es un lugar ideal para disfrutar de la naturaleza, el mar, y la tranquilidad en un entorno pintoresco.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Berria';
                $localidad = 'Playa de Berria';
                $archivo_name = 'playadeberria';
                $presentacion = 'La Playa de Berria, ubicada en Santoña, Cantabria, es un hermoso tramo de arena dorada que se extiende por casi 2 kilómetros entre el Monte Buciero y el estuario de Treto. Con sus aguas cristalinas y su entorno natural protegido, es un destino perfecto para quienes buscan disfrutar del surf, paseos relajantes, o simplemente conectar con la naturaleza.<br>Esta playa, de gran valor ecológico, es un paraíso tanto para los amantes del mar como para aquellos que buscan un rincón tranquilo en la costa cantábrica.';
                include 'bloques/localidades/index.php'; ?>


                <?php
                $localidad_nombre = 'Playa del Sardinero, Santander';
                $localidad = 'Playa del Sardinero, Santander';
                $archivo_name = 'playadesantander';
                $presentacion = 'La Playa de Santander, ubicada en la ciudad del mismo nombre en Cantabria, es una de las playas urbanas más emblemáticas del norte de España. Con su extensa franja de arena dorada y aguas tranquilas, es el lugar ideal para disfrutar de un día de sol y mar. Además de su belleza natural, ofrece un vibrante paseo marítimo con una variedad de restaurantes, bares y tiendas. Perfecta para familias, bañistas y quienes buscan disfrutar del surf, la Playa de Santander combina el encanto de una playa clásica con la comodidad de la proximidad urbana.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Laredo';
                $localidad = 'Playa de Laredo';
                $archivo_name = 'playadelaredo';
                $presentacion = 'La Playa de Laredo, también conocida como La Salvé, es una de las joyas de la costa cántabra. Con sus más de 4 kilómetros de arena fina y dorada, es el destino perfecto para disfrutar del sol, el mar y actividades al aire libre. Esta amplia playa ofrece un entorno ideal tanto para familias como para amantes de los deportes acuáticos, con su mar tranquilo y un paseo marítimo lleno de vida.<br> Ven y descubre por qué la Playa de Laredo es uno de los destinos más apreciados del norte de España.';
                include 'bloques/localidades/index.php'; ?>


                <?php
                $localidad_nombre = 'Playa de Isla';
                $localidad = 'Playa de Isla';
                $archivo_name = 'playadeisla';
                $presentacion = 'La Playa de Isla, ubicada en la encantadora localidad de Isla en Cantabria, es un paraíso natural que combina belleza y tranquilidad. Con su extensa franja de arena dorada y aguas cristalinas, es el lugar ideal para relajarse y disfrutar del sol. Su entorno virgen, rodeado de dunas y vegetación, ofrece un refugio perfecto para quienes buscan escapar del bullicio. Ideal tanto para familias como para los amantes de la naturaleza, la Playa de Isla es un destino que promete unas vacaciones inolvidables.';
                include 'bloques/localidades/index.php'; ?>


                <?php
                $localidad_nombre = 'Playa de Suances';
                $localidad = 'Playa de Suances';
                $archivo_name = 'playadesuances';
                $presentacion = 'La Playa de Suances, situada en el corazón de Cantabria, es un rincón costero que combina la belleza natural con un ambiente acogedor.<br> Conocida por su arena dorada y sus aguas limpias, esta playa es un destino perfecto para disfrutar de un día en familia o practicar deportes acuáticos. Rodeada de impresionantes paisajes y con un paseo marítimo lleno de vida, Suances ofrece una experiencia costera única, donde la tranquilidad y la diversión se encuentran a partes iguales.';
                include 'bloques/localidades/index.php'; ?>


                <h2 id="vizcaya">Vizcaya</h2>

                <?php
                $localidad_nombre = 'Playa de Gorliz';
                $localidad = 'Playa de Gorliz';
                $archivo_name = 'playadegorliz';
                $presentacion = 'Situada en la costa del País Vasco, la Playa de Gorliz es un refugio ideal para quienes buscan relajarse y disfrutar del mar. Con su amplia franja de arena dorada y aguas tranquilas, esta playa es perfecta para familias y amantes de la tranquilidad. Rodeada de un hermoso paisaje natural y bien equipada con servicios, la Playa de Gorliz también ofrece un ambiente acogedor y diversas actividades para todos los gustos.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Getxo';
                $localidad = 'Playa de Getxo';
                $archivo_name = 'playadegetxo';
                $presentacion = 'La Playa de Getxo, situada en la costa de Bizkaia, es un popular destino costero del País Vasco. Con su amplia oferta de actividades acuáticas, espectaculares vistas del mar Cantábrico, y una vibrante vida cultural y gastronómica, Getxo es ideal tanto para los amantes del surf como para quienes buscan relajarse y disfrutar de su entorno natural.';
                include 'bloques/localidades/index.php'; ?>


                <?php
                $localidad_nombre = 'Playa de Laga';
                $localidad = 'Playa de Laga';
                $archivo_name = 'playadelaga';
                $presentacion = 'La Playa de Laga, ubicada en la costa de Bizkaia en el País Vasco, es un paraíso natural dentro del Parque Natural de Urdaibai, una Reserva de la Biosfera declarada por la UNESCO. <br>Con su arena dorada y su entorno rodeado de acantilados y vegetación exuberante, es un destino perfecto para quienes buscan tranquilidad y belleza natural.<br>Además, es popular entre los surfistas gracias a sus olas y es ideal para el senderismo y la observación de aves. <br>La playa de Laga ofrece una experiencia única donde la naturaleza y el mar se encuentran en su máximo esplendor.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Bakio';
                $localidad = 'Playa de Bakio';
                $archivo_name = 'playadebakio';
                $presentacion = 'La Playa de Bakio, situada en la costa de Vizcaya, es un lugar emblemático para los amantes del surf y la naturaleza. Con su extensa franja de arena dorada y un entorno natural impresionante, es el destino perfecto para disfrutar del mar Cantábrico. Rodeada de montañas y viñedos, Bakio ofrece no solo olas espectaculares, sino también una rica tradición vinícola, especialmente conocida por su txakoli.<br>Ya sea para practicar deportes acuáticos o simplemente relajarse, la Playa de Bakio es un rincón ideal para desconectar.';
                include 'bloques/localidades/index.php'; ?>




                <?php
                $localidad_nombre = 'Playa de Lekeitio';
                $localidad = 'Playa de Lekeitio';
                $archivo_name = 'playadelekeitio';
                $presentacion = 'La Playa de Lekeitio, ubicada en el pintoresco municipio de Lekeitio en la provincia de Bizkaia, es un rincón encantador del País Vasco. Con su extensa franja de arena dorada y aguas tranquilas, es un lugar perfecto para disfrutar de un día en la playa. La playa está rodeada por un hermoso paisaje costero y el pintoresco puerto pesquero, lo que la convierte en un destino popular tanto para locales como para turistas. Ideal para familias y amantes de la naturaleza, la Playa de Lekeitio ofrece un ambiente relajado y una variedad de actividades recreativas en un entorno natural impresionante.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Sopelana';
                $localidad = 'Playa de Sopelana';
                $archivo_name = 'playadesopelana';
                $presentacion = 'Ubicada en la costa de Bizkaia, la Playa de Sopelana es un paraíso para los amantes del surf y la naturaleza. Con su extensa franja de arena dorada y sus impresionantes acantilados, esta playa ofrece un entorno vibrante y acogedor tanto para los surfistas como para quienes buscan relajarse junto al mar. Además, su cercanía al pintoresco pueblo de Sopelana permite disfrutar de una oferta gastronómica y cultural rica, convirtiendo a esta playa en un destino ideal para pasar un día completo.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Muskiz';
                $localidad = 'Playa de Muskiz';
                $archivo_name = 'playademuskiz';
                $presentacion = 'La Playa de Muskiz, situada en la costa de Bizkaia, ofrece un refugio encantador con su arena dorada y aguas tranquilas. Con un entorno natural impresionante, esta playa es ideal para relajarse, disfrutar de un día soleado y explorar sus alrededores costeros. Su ambiente sereno y su belleza natural la convierten en un destino perfecto para aquellos que buscan escapar del bullicio y disfrutar de un día en la playa.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Fuenterrabia';
                $localidad = 'Playa de Fuenterrabia';
                $archivo_name = 'playadefuenterrabia';
                $presentacion = 'La playa de Fuenterrabía, situada en el encantador pueblo costero del País Vasco, es un lugar donde la historia y la naturaleza se entrelazan. Con vistas al mar Cantábrico y rodeada por montañas, esta playa ofrece un refugio tranquilo con arenas doradas y aguas cristalinas. Ideal para familias y amantes de la naturaleza, Fuenterrabía no solo es perfecta para un día de sol y mar, sino también para explorar su pintoresco casco antiguo y disfrutar de la rica gastronomía vasca en sus cercanías.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Azkorri';
                $localidad = 'Playa de Azkorri';
                $archivo_name = 'playadeazkorri';
                $presentacion = 'La Playa de Azkorri, situada en la costa del País Vasco, es una joya escondida que ofrece una experiencia costera única. Con su arena dorada y aguas cristalinas, este rincón tranquilo es perfecto para quienes buscan escapar del bullicio. Rodeada de impresionantes acantilados, la playa proporciona vistas panorámicas que son un verdadero deleite para los amantes de la naturaleza.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Plentzia';
                $localidad = 'Playa de Plentzia';
                $archivo_name = 'playadeplentzia';
                $presentacion = 'Ubicada en la pintoresca localidad de Plentzia, en la provincia de Bizkaia, la Playa de Plentzia es un destino costero que cautiva con su belleza natural. Con sus suaves arenas doradas y aguas cristalinas, esta playa es el lugar perfecto para disfrutar de un día relajado bajo el sol. La playa cuenta con una amplia variedad de servicios, como chiringuitos y áreas de recreo, que la convierten en un lugar ideal tanto para familias como para amantes de los deportes acuáticos. Además, su entorno idílico y su tranquilo ambiente la hacen perfecta para quienes buscan un escape de la rutina diaria y desean sumergirse en la belleza del País Vasco.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $localidad_nombre = 'Playa de Zumaia';
                $localidad = 'Playa de Zumaia';
                $archivo_name = 'playadezumaia';
                $presentacion = 'La Playa de Zumaia, situada en la costa del País Vasco, es un destino imprescindible para los amantes de la naturaleza y el mar. Conocida por su impresionante paisaje de acantilados y su arena dorada, esta playa ofrece un entorno espectacular donde disfrutar de la belleza natural de la región. Su entorno protegido, rodeado de formaciones geológicas únicas y un mar cristalino, la convierte en un lugar ideal para relajarse, tomar el sol o practicar deportes acuáticos. Además, la playa está perfectamente equipada con servicios para visitantes, incluyendo restaurantes y áreas de recreo, haciendo de Zumaia un lugar perfecto para pasar un día inolvidable en la costa vasca.';
                include 'bloques/localidades/index.php'; ?>

                <h2 id="guipuzkoa">Guipuzkoa</h2>
                <?php $region='guipuzkoa'; ?>
                <?php
                $localidad_nombre = 'Playa de Getaria';
                $localidad = 'Playa de Getaria';
                $archivo_name = 'playadegetaria';
                $presentacion = 'La playa de Getaria, situada en la costa guipuzcoana, es un auténtico paraíso natural donde se fusionan la serenidad del mar Cantábrico y la belleza de un entorno protegido. Con su amplia extensión de arena dorada y fina, es ideal para disfrutar de un día de sol, practicar surf o simplemente relajarse mientras se contempla el paisaje. Además, su proximidad al Geoparque de la Costa Vasca la convierte en un destino perfecto para los amantes de la naturaleza y la geología, ofreciendo una experiencia única en un entorno incomparable.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $carpeta = 'playadedeba';
                $localidad_nombre = 'Playa de Deba';
                $localidad = 'Playa de Deba';
                $archivo_name = 'playa-de-deba';
                $presentacion = 'La playa de Deba, situada en la costa guipuzcoana, es un auténtico paraíso natural donde se fusionan la serenidad del mar Cantábrico y la belleza de un entorno protegido. Con su amplia extensión de arena dorada y fina, es ideal para disfrutar de un día de sol, practicar surf o simplemente relajarse mientras se contempla el paisaje. Además, su proximidad al Geoparque de la Costa Vasca la convierte en un destino perfecto para los amantes de la naturaleza y la geología, ofreciendo una experiencia única en un entorno incomparable.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $carpeta = 'playadeorio';
                $localidad_nombre = 'Playa de Orio';
                $localidad = 'Playa de Orio';
                $archivo_name = 'playa-de-orio';
                $presentacion = 'La playa de Orio, ubicada en la costa del País Vasco, es un destino encantador que combina la belleza natural con el ambiente acogedor de un pueblo pesquero tradicional. Con su arena dorada y aguas tranquilas, es ideal para disfrutar de un día en familia o practicar deportes acuáticos como el surf. Además, su proximidad al casco histórico de Orio permite explorar la rica cultura y gastronomía local, haciendo de esta playa un lugar perfecto para relajarse y descubrir.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                                
                $carpeta = 'playadezarautz';
                $localidad_nombre = 'Playa de Zarautz';
                $localidad = 'Playa de Zarautz';
                $archivo_name = 'playa-de-zarautz';
                $presentacion = 'La Playa de Zarautz, conocida como "La Reina de las Playas", es una de las joyas del País Vasco. Con más de 2.5 kilómetros de arena dorada, es la playa más extensa de la región y un destino privilegiado para los amantes del surf.<br> Rodeada de un pintoresco paseo marítimo, Zarautz combina la belleza natural de su entorno con una vibrante oferta gastronómica y cultural, haciendo de esta playa un lugar ideal para disfrutar del mar, el deporte y la vida al aire libre en cualquier época del año.';              
                include 'bloques/localidades/index.php'; ?>




                                            
                <h2 id="francia">Francia</h2>
                <?php $region='francia';
                $carpeta = 'playadehendaya';
                $localidad_nombre = 'Playa de Hendaya';
                $localidad = 'Playa de Hendaya';
                $archivo_name = 'playa-de-hendaya';
                $presentacion = 'La Playa de Hendaya, situada en el sur de Francia, en la región de los Pirineos Atlánticos, es una joya costera que ofrece un entorno espectacular y vibrante. Con su extensa franja de arena dorada y aguas tranquilas, es el destino ideal para disfrutar de actividades al aire libre, desde relajantes días de sol hasta emocionantes deportes acuáticos. La playa cuenta con excelentes instalaciones, incluyendo restaurantes, bares y áreas para familias, lo que la convierte en un lugar popular tanto para locales como para turistas. Además, su cercanía a la frontera con España añade un encanto único, haciendo de Hendaya un lugar perfecto para explorar la rica cultura y belleza natural de la región vasca.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $carpeta = 'playadesanjuandeluz';
                $localidad_nombre = 'Playa de San Juan de Luz';
                $localidad = 'Playa de San Juan de Luz';
                
                $archivo_name = 'playa-de-san-juan-de-luz';
                $presentacion = 'La Playa de San Juan de Luz, situada en la encantadora localidad costera del País Vasco francés, es un auténtico tesoro para quienes buscan disfrutar del mar en un entorno pintoresco. Con su arena dorada y aguas tranquilas, esta playa es ideal tanto para relajarse como para practicar deportes acuáticos. Además, su proximidad al casco histórico de la ciudad permite a los visitantes explorar las callejuelas llenas de historia, degustar la gastronomía local y disfrutar de la hospitalidad vasca en un entorno único y acogedor.';
                include 'bloques/localidades/index.php'; ?>

                <?php
                $carpeta = 'playadebiarritz';
                $localidad_nombre = 'Playa de Biarritz';
                $localidad = 'Playa de Biarritz';
                $archivo_name = 'playa-de-biarritz';
                $presentacion = 'La playa de Biarritz, situada en la glamorosa costa atlántica de Francia, es un paraíso para los amantes del sol y el surf. Con sus olas de renombre mundial, este destino es ideal tanto para surfistas como para aquellos que buscan relajarse en su extensa franja de arena dorada. Rodeada de elegantes edificios, cafés y tiendas de lujo, la playa de Biarritz ofrece un ambiente sofisticado y vibrante, donde la belleza natural se fusiona con el encanto cultural de esta icónica ciudad balnearia.';
                include 'bloques/localidades/index.php'; ?>

            </div>


            <div id="#" class="col-xl-2 text-center col-lg-3 col-md-12 col-sm-12 col-12">
                <?php //require './bloques/anuncios_derecha0.php' ?>
            </div>
        </div>
    </div>
                                        
    <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/31180/af0d219c84b03a7bba793620fffa25689a03ba0d/lib.js"></script>


    <?php //<iframe src="scripts.html"></iframe> 
    ?>

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


<?php //include_once 'bloques/localidades/playadelaga/js/logica_anuncios.php'; 
?>



<script>
    
    <?php
    function generateImageConstants($total_images, $categories) {
        foreach ($categories as $category => $group) {
            for ($i = 1; $i <= $total_images; $i++) {
                $variable_name = "{$category}_{$group}_{$i}";
                if (isset($GLOBALS["images_" . $variable_name])) {
                    echo "const images_{$variable_name} = " . json_encode($GLOBALS["images_" . $variable_name]) . ";\n";
                } else {
                    echo "const images_{$variable_name} = [];\n";
                }
            }
        }
    }
    
    // Define categories and their respective groups
    $categories = [
        "shorts" => 3
    ];
    
    // Call the function with the total number of images and categories
    generateImageConstants(4, $categories);
    ?>

  

    const images_shirts_lateral_1_1 = <?php echo json_encode($images_shirts_lateral_1_1); ?>

    
    let currentIndex = {};

// Función para agregar propiedades al objeto con un patrón definido
function addProperties(baseName, groupRange, count) {
    for (let i = 1; i <= count; i++) {
        currentIndex[`${baseName}_${groupRange}_${i}`] = 0;
    }
}

// Definir las bases y rangos de grupos
const definitions = [
    { baseName: 'shorts', groupRange: 3, count: 4 }
];

// Agregar las propiedades usando la función definida
definitions.forEach(def => addProperties(def.baseName, def.groupRange, def.count));



    
function prueba(image_link, image, cte, indexKey) {
    currentIndex[indexKey] = (currentIndex[indexKey] + 1) % cte.length;
    console.log(`Changing image for ${indexKey} to index ${currentIndex[indexKey]}`);
    document.getElementById(image_link).href = cte[currentIndex[indexKey]].href;
    document.getElementById(image).src = cte[currentIndex[indexKey]].src;
    document.getElementById(image).alt = cte[currentIndex[indexKey]].alt;
}

function changeImages() {
    <?php 
    $articulo = "shorts";
    $images = [ "images_{$articulo}_3_1","images_{$articulo}_3_2","images_{$articulo}_3_3","images_{$articulo}_3_4"];
    for ($i = 1; $i <= 4; $i++) {echo "prueba('image-link_{$articulo}_3_$i', 'image_{$articulo}_3_$i', {$images[$i - 1]}, '{$articulo}_3_$i');\n";} ?>
}

setInterval(changeImages, 4000);

</script>


<style>
    h2,
    h3,
    h4, p {
        text-align: left;
    }


    img {
        width: 100%;
        object-fit: cover;
    }

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
        /*border: 1px solid #ccc;*/
        /* Light gray color */
    }
</style>
