<?php
// Vamos a alternar entre 3 shirts Hawaianas diferentes //
$alt_general_zapatillas = 'Imagen de unas zapatillas';


$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
include './../../../../bloques/carrusel_horizontal/item_1.php';

$table='amazon_sneakers_images';
$where = 'where marca = "GEOX" and direccion = "izquierda_0º"';
include './../../../../bloques/carrusel_horizontal/item_2.php';


$table='amazon_swimsuits_woman_images';
$where = 'order by direccion';
include './../../../../bloques/carrusel_horizontal/item_4.php';


$table='amazon_sandals_man_images';
$where = 'order by direccion';
include './../../../../bloques/carrusel_horizontal/item_sandals_man.php';


$table='amazon_shorts_images';
$where = 'where direccion = "frente"';
include './../../../../bloques/carrusel_horizontal/item_3.php';


$table='amazon_sports_shirts_images';
$where = 'where marca = "Pepe Jeans" and direccion = "modelo_frente_izquierda"';
include './../../../../bloques/carruseles/1item_sports_shirts_amazon.php';


$table='amazon_shirts_images';
$where = 'where direccion = "modelo_frente"';
include './../../../../bloques/carrusel_horizontal/item_1_lateral.php';



// Meter esta 
// https://www.amazon.es/HISDERN-Camisa-Hawaiana-Hombre-Camisas/dp/B0BZ7GS91B?pd_rd_w=A2Cpx&content-id=amzn1.sym.7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_p=7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_r=CX759DB09W9YW15XZB1Z&pd_rd_wg=HZuSj&pd_rd_r=7d6ebf7e-94e1-447c-96c1-5a32f5d7ca87&pd_rd_i=B09V2FG11J&th=1&linkCode=sl1&tag=adrian8204-21&linkId=88405fad94fde5c9c46bd6a0cd31f99d&language=es_ES&ref_=as_li_ss_tl&psc=1
// https://www.amazon.es/HISDERN-Camisa-Hawaiana-Hombre-Camisas/dp/B09NQXDJJC?pd_rd_w=A2Cpx&content-id=amzn1.sym.7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_p=7d8190a3-4976-4a6e-a163-4b93400f9ccc&pf_rd_r=CX759DB09W9YW15XZB1Z&pd_rd_wg=HZuSj&pd_rd_r=7d6ebf7e-94e1-447c-96c1-5a32f5d7ca87&pd_rd_i=B09V2FG11J&th=1&linkCode=sl1&tag=adrian8204-21&linkId=88405fad94fde5c9c46bd6a0cd31f99d&language=es_ES&ref_=as_li_ss_tl
// https://m.media-amazon.com/images/I/81k0dq+DFNL._AC_SX679_.jpg
?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_shirts_1_1" href="<?php echo $images_shirts_1_1[0]['href']; ?>">
                            <img id="image_shirts_1_1" src="<?php echo $images_shirts_1_1[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_shirts_1_1[0]['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_shirts_1_2" href="<?php echo $images_shirts_1_2[0]['href']; ?>">
                            <img id="image_shirts_1_2" src="<?php echo $images_shirts_1_2[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_shirts_1_2[0]['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_shirts_1_3" href="<?php echo $images_shirts_1_3[0]['href']; ?>">
                            <img id="image_shirts_1_3" src="<?php echo $images_shirts_1_3[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_shirts_1_3[0]['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_shirts_1_4" href="<?php echo $images_shirts_1_4[0]['href']; ?>">
                            <img id="image_shirts_1_4" src="<?php echo $images_shirts_1_4[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_shirts_1_4[0]['alt']; ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional: Additional carousel items 
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_1" href="<?php echo $images_sneakers_2_1[0]['href']; ?>">
                            <img id="image_sneakers_2_1" src="<?php echo $images_sneakers_2_1[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_1[0]['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_2" href="<?php echo $images_sneakers_2_2[0]['href']; ?>">
                            <img id="image_sneakers_2_2" src="<?php echo $images_sneakers_2_2[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_2[0]['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_3" href="<?php echo $images_sneakers_2_3[0]['href']; ?>">
                            <img id="image_sneakers_2_3" src="<?php echo $images_sneakers_2_3[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_3[0]['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-xl-3 text-center col-lg-3 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_4" href="<?php echo $images_sneakers_2_4[0]['href']; ?>">
                            <img id="image_sneakers_2_4" src="<?php echo $images_sneakers_2_4[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_4[0]['alt']; ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>-->

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








<!-- Enlaza el JavaScript de Bootstrap y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    
    const images_shirts_1_1 = <?php echo json_encode($images_shirts_1_1); ?>;
    const images_shirts_1_2 = <?php echo json_encode($images_shirts_1_2); ?>;
    const images_shirts_1_3 = <?php echo json_encode($images_shirts_1_3); ?>;
    const images_shirts_1_4 = <?php echo json_encode($images_shirts_1_4); ?>;

                                                             
    const images_sports_shirts_1_1 = <?php echo json_encode($images_sports_shirts_1_1); ?>;
    const images_sports_shirts_1_2 = <?php echo json_encode($images_sports_shirts_1_2); ?>;
    const images_sports_shirts_1_3 = <?php echo json_encode($images_sports_shirts_1_3); ?>;
    const images_sports_shirts_1_4 = <?php echo json_encode($images_sports_shirts_1_4); ?>;
    const images_sports_shirts_1_5 = <?php echo json_encode($images_sports_shirts_1_5); ?>;


    const images_shorts_3_1 = <?php echo json_encode($images_shorts_3_1); ?>;
    const images_shorts_3_2 = <?php echo json_encode($images_shorts_3_2); ?>;
    const images_shorts_3_3 = <?php echo json_encode($images_shorts_3_3); ?>;
    const images_shorts_3_4 = <?php echo json_encode($images_shorts_3_4); ?>;


    const images_sneakers_2_1 = <?php echo json_encode($images_sneakers_2_1); ?>;
    const images_sneakers_2_2 = <?php echo json_encode($images_sneakers_2_2); ?>;
    const images_sneakers_2_3 = <?php echo json_encode($images_sneakers_2_3); ?>;
    const images_sneakers_2_4 = <?php echo json_encode($images_sneakers_2_4); ?>;



    const images_swimsuits_woman_1_1 = <?php echo json_encode($images_swimsuits_woman_1_1); ?>;
    const images_swimsuits_woman_1_2 = <?php echo json_encode($images_swimsuits_woman_1_2); ?>;
    const images_swimsuits_woman_1_3 = <?php echo json_encode($images_swimsuits_woman_1_3); ?>;
    const images_swimsuits_woman_1_4 = <?php echo json_encode($images_swimsuits_woman_1_4); ?>;


    const images_sandals_man_1_1 = <?php echo json_encode($images_sandals_man_1_1); ?>;
    const images_sandals_man_1_2 = <?php echo json_encode($images_sandals_man_1_2); ?>;
    const images_sandals_man_1_3 = <?php echo json_encode($images_sandals_man_1_3); ?>;
    const images_sandals_man_1_4 = <?php echo json_encode($images_sandals_man_1_4); ?>;



    const images_shirts_lateral_1_1 = <?php echo json_encode($images_shirts_lateral_1_1); ?>

    
    let currentIndex = {
     
        shirts_1_1: 0,
        shirts_1_2: 0,
        shirts_1_3: 0,
        shirts_1_4: 0,

        sports_shirts_1_1: 0,
        sports_shirts_1_2: 0,
        sports_shirts_1_3: 0,
        sports_shirts_1_4: 0,
        sports_shirts_1_5: 0,

        shorts_3_1: 0,
        shorts_3_2: 0,
        shorts_3_3: 0,
        shorts_3_4: 0,

        sneakers_2_1: 0,
        sneakers_2_2: 0,
        sneakers_2_3: 0,
        sneakers_2_4: 0,


        swimsuits_woman_1_1: 0,
        swimsuits_woman_1_2: 0,
        swimsuits_woman_1_3: 0,
        swimsuits_woman_1_4: 0,

        sandals_man_1_1: 0,
        sandals_man_1_2: 0,
        sandals_man_1_3: 0,
        sandals_man_1_4: 0,




        shirts_lateral_1_1: 0
    };

    
    function prueba(image_link, image, cte, indexKey) {
        currentIndex[indexKey] = (currentIndex[indexKey] + 1) % cte.length;
        document.getElementById(image_link).href = cte[currentIndex[indexKey]].href;
        document.getElementById(image).src = cte[currentIndex[indexKey]].src;
        document.getElementById(image).alt = cte[currentIndex[indexKey]].alt;
    }


    function changeImages() {

        prueba('image-link_shirts_1_1', 'image_shirts_1_1', images_shirts_1_1, 'shirts_1_1');
        prueba('image-link_shirts_1_2', 'image_shirts_1_2', images_shirts_1_2, 'shirts_1_2');
        prueba('image-link_shirts_1_3', 'image_shirts_1_3', images_shirts_1_3, 'shirts_1_3');
        prueba('image-link_shirts_1_4', 'image_shirts_1_4', images_shirts_1_4, 'shirts_1_4');

        prueba('image-link_shorts_3_1', 'image_shorts_3_1', images_shorts_3_1, 'shorts_3_1');
        prueba('image-link_shorts_3_2', 'image_shorts_3_2', images_shorts_3_2, 'shorts_3_2');
        prueba('image-link_shorts_3_3', 'image_shorts_3_3', images_shorts_3_3, 'shorts_3_3');
        prueba('image-link_shorts_3_4', 'image_shorts_3_4', images_shorts_3_4, 'shorts_3_4');

        prueba('image-link_sneakers_2_1', 'image_sneakers_2_1', images_sneakers_2_1, 'sneakers_2_1');
        prueba('image-link_sneakers_2_2', 'image_sneakers_2_2', images_sneakers_2_2, 'sneakers_2_2');
        prueba('image-link_sneakers_2_3', 'image_sneakers_2_3', images_sneakers_2_3, 'sneakers_2_3');
        prueba('image-link_sneakers_2_4', 'image_sneakers_2_4', images_sneakers_2_4, 'sneakers_2_4');
        ///
        


        prueba('image-link_sports_shirts_1_1', 'image_sports_shirts_1_1', images_sports_shirts_1_1, 'sports_shirts_1_1');
        prueba('image-link_sports_shirts_1_2', 'image_sports_shirts_1_2', images_sports_shirts_1_2, 'sports_shirts_1_2');
        prueba('image-link_sports_shirts_1_3', 'image_sports_shirts_1_3', images_sports_shirts_1_3, 'sports_shirts_1_3');
        prueba('image-link_sports_shirts_1_4', 'image_sports_shirts_1_4', images_sports_shirts_1_4, 'sports_shirts_1_4');
        //prueba('image-link_sports_shirts_1_5', 'image_sports_shirts_1_5', images_sports_shirts_1_5, 'sports_shirts_1_5');

        prueba('image-link_swimsuits_woman_1_1', 'image_swimsuits_woman_1_1', images_swimsuits_woman_1_1, 'swimsuits_woman_1_1');
        prueba('image-link_swimsuits_woman_1_2', 'image_swimsuits_woman_1_2', images_swimsuits_woman_1_2, 'swimsuits_woman_1_2');
        prueba('image-link_swimsuits_woman_1_3', 'image_swimsuits_woman_1_3', images_swimsuits_woman_1_3, 'swimsuits_woman_1_3');
        prueba('image-link_swimsuits_woman_1_4', 'image_swimsuits_woman_1_4', images_swimsuits_woman_1_4, 'swimsuits_woman_1_4');


        prueba('image-link_sandals_man_1_1', 'image_sandals_man_1_1', images_sandals_man_1_1, 'sandals_man_1_1');
        prueba('image-link_sandals_man_1_2', 'image_sandals_man_1_2', images_sandals_man_1_2, 'sandals_man_1_2');
        prueba('image-link_sandals_man_1_3', 'image_sandals_man_1_3', images_sandals_man_1_3, 'sandals_man_1_3');
        prueba('image-link_sandals_man_1_4', 'image_sandals_man_1_4', images_sandals_man_1_4, 'sandals_man_1_4');



        ///



        // Todo debe ir aquí
        prueba('image-link_shirts_lateral_1_1', 'image_shirts_lateral_1_1', images_shirts_lateral_1_1, 'shirts_lateral_1_1');

    }

    setInterval(changeImages, 4000);
</script>
