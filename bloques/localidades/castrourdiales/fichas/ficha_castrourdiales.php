<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site-verification" content="e148bdbc89c019bd06122ab7bd08a8be" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9695238706576343" crossorigin="anonymous"></script>
</head>

<body>
    <?php // <iframe style="width: 100%;" src="carrousels/castrourdiales/castrourdiales.html" style="border:none;"></iframe> 
    ?>

    <div id="#" class="container">
        <div class="row">
            <!--<iframe src="./../../../../ads_terra/468px-60px.html"></iframe>-->
            <?php // include_once './../../../../bloques/barra_navegacion.html'; 
            ?>

            <div id="#" class="col-xl-10 text-center col-lg-10 col-md-10 col-sm-12 col-12">

                <?php /*include_once './../../../../bloques/registro_visitas_web.php'; 

        <a href="./../../../../bloques/amazon_interfaz_enlaces.php" target="_blank">
			<button>Enlaces Publicidad</button>
		</a>*/ ?>


                <h2>Castro Urdiales</h2>
                <p>Castro Urdiales, conocido en la antigüedad como Flaviobriga, fue fundado por los romanos en el siglo I d.C. <br>
                    Su puerto natural jugó un papel crucial en el comercio y la pesca, convirtiéndose en uno de los puertos más importantes del Cantábrico.
                </p>

                
            <?php
            $localidad = 'Castro Urdiales';
            $lugar = 'Rótulo en el paseo de ' . $localidad;

            $foto1 = "./../../../../img/castrourdiales/rotuloencalle.jpg";
            $altFoto1 =  $lugar . ' en ' . $localidad;

            $pieFotos = 'Imágen de un ' . $lugar;
            include './disp_imagenes/1foto.php';
            ?>
            <p>En la Edad Media, el puerto de Castro Urdiales continuó siendo un centro de actividad marítima. <br>
                Durante los siglos XIX y XX, se desarrollaron importantes infraestructuras portuarias que ayudaron a modernizar la ciudad y su puerto.
            </p>


            <hr><?php require './../../../../bloques/estructura/carrusel.php'; ?><hr>


            <h3>10 lugares que no te puedes perder en Castro Urdiales</h3>
            <hr><?php include_once './../lugares/parqueamestoy.php'; ?><hr> 
          

            <?php include_once './../lugares/asadorlaperla.php'; ?>
            <hr><?php include './../../../../bloques/carrusel_horizontal_fijo_swimsuits_woman_amazon.php'; // Carrusel fijo de camisetas UNDER ARMOUR 
                ?><hr>

           
            
            <?php include_once './paseomaritimo.php'; ?>
            <hr><?php include './../../../../bloques/carrusel_horizontal_fijo_sneakers.php'; ?> <hr> 
           

            <?php include_once './clubnautico.php'; ?>

            <?php include_once './palaciodeochagaran.php'; ?> 
            <hr><?php include './../../../../bloques/carrusel_horizontal_fijo_sports_shirts_amazon.php'; // Carrusel fijo de camisetas UNDER ARMOUR 
                ?><hr>
        

            <?php include_once './puertocastrourdiales.php'; // Carrusel fijo de bolsos de hombre // https://www.amazon.es/dp/B0D98167FL/ref=twister_B0D97Z6G2Z?_encoding=UTF8&th=1&psc=1
            ?>

            <?php include_once './plazaayuntamiento.php'; // Blusas para mujer 
            ?>
            <hr>
            <?php include_once './puertocastrourdiales.php'; // Zapateria de mujer 
            // https://www.amazon.es/XTI-Bot%C3%ADn-cierre-cremallera-blanco/dp/B0CH8SRCK8/ref=sl_ob_desktop_dp_0_3_v2?_encoding=UTF8&pd_rd_w=F17oA&content-id=amzn1.sym.07b85458-ffbf-4d91-9e83-0966844b0d1d&pf_rd_p=07b85458-ffbf-4d91-9e83-0966844b0d1d&pf_rd_r=XZCSJ6QDJV5Y77AMSCAG&pd_rd_wg=mTwaI&pd_rd_r=4aca3441-4f73-41af-b62f-5111a7b925d6
            ?>

            <?php include_once './puentemedieval.php';
            // Sandalias hombre 
            ?>
                <?php include './../../../../bloques/carrusel_horizontal_fijo_sports_shirts_amazon.php'; // Carrusel fijo de camisetas UNDER ARMOUR 
                ?>
            <hr>
            <?php include_once './castillodesantaana.php';
            // Bisuteria
            ?>

            <?php include_once './iglesiadesantamariadelaasuncion.php'; ?>
            <hr><?php include './../../../../bloques/carrusel_horizontal_fijo_shorts.php'; // Carrusel fijo de shorts Tansozer 
                ?><hr>
          
            <?php include_once './elpedregal.php'; ?>

            <?php include './../../../../bloques/carrusel_horizontal_fijo_sports_shirts_amazon.php'; // Carrusel fijo de camisetas UNDER ARMOUR 
            ?>
            <?php include_once './playadeostende.php'; ?>
            <h6>
            Para más información puede consultar en la pagina de la oficina de turismo de 
            <a href="http://turismo.castro-urdiales.net/turcastro/planifica-tu-viaje/oficina-de-turismo">Castro-Urdiales</a></h6>

        </div>


        <?php /*
        <div id="#" class="col-xl-3 text-center col-lg-3 col-md-12 col-sm-12 col-12">
            <?php require './../../../../bloques/anuncios_derecha0.php' ?>
        </div> */ ?>

            </div>
        </div>
        <footer>
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
             require './../../../../bloques/estructura/footer.php';

            ?>
        </footer>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <style>
            /*<link rel="stylesheet" href="./../../../../styles.css">*/
            h3,
            h4,
            p {
                text-align: left;
            }



            .carousel-item a img {
                max-height: 300px;
            }
        </style>