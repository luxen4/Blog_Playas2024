
<!-- Enlaza el JavaScript de Bootstrap y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    
    const images_shirts_1_1 = <?php echo json_encode($images_shirts_1_1); ?>;
    const images_shirts_1_2 = <?php echo json_encode($images_shirts_1_2); ?>;
    const images_shirts_1_3 = <?php echo json_encode($images_shirts_1_3); ?>;
    const images_shirts_1_4 = <?php echo json_encode($images_shirts_1_4); ?>;


    const images_shirts_modelo_derecha_1_1 = <?php echo json_encode($images_shirts_modelo_derecha_1_1); ?>;
    const images_shirts_modelo_derecha_1_2 = <?php echo json_encode($images_shirts_modelo_derecha_1_2); ?>;
    const images_shirts_modelo_derecha_1_3 = <?php echo json_encode($images_shirts_modelo_derecha_1_3); ?>;
    const images_shirts_modelo_derecha_1_4 = <?php echo json_encode($images_shirts_modelo_derecha_1_4); ?>;

                                                             
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

        shirts_modelo_derecha_1_1: 0,
        shirts_modelo_derecha_1_2: 0,
        shirts_modelo_derecha_1_3: 0,
        shirts_modelo_derecha_1_4: 0,

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


        prueba('image-link_shirts_modelo_derecha_1_1', 'image_shirts_modelo_derecha_1_1', images_shirts_modelo_derecha_1_1, 'shirts_modelo_derecha_1_1');
        prueba('image-link_shirts_modelo_derecha_1_2', 'image_shirts_modelo_derecha_1_2', images_shirts_modelo_derecha_1_2, 'shirts_modelo_derecha_1_2');
        prueba('image-link_shirts_modelo_derecha_1_3', 'image_shirts_modelo_derecha_1_3', images_shirts_modelo_derecha_1_3, 'shirts_modelo_derecha_1_3');
        prueba('image-link_shirts_modelo_derecha_1_4', 'image_shirts_modelo_derecha_1_4', images_shirts_modelo_derecha_1_4, 'shirts_modelo_derecha_1_4');



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
