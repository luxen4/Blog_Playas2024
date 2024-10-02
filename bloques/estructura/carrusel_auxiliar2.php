<style>
    .custom-carousel-image-container {
        margin: 15px;
        padding: 1em;
        /*border: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        display: flex; /* Usar Flexbox para alinear imagen y texto */
        align-items: center; /* Centrar verticalmente */
    }

    .custom-carousel-image {
        /*max-width: 100px; /* Tamaño de la imagen */
        /*margin-right: 15px; /* Espacio entre imagen y texto */
    }

    .arrow-button {
        background-color: white; /* Color de fondo del botón */
        color: red; /* Color del texto */
        /*border: 1px solid red; /* Sin borde */
        border-radius: 50%; /* Bordes redondeados */
        width: 40px; /* Ancho del botón */
        height: 40px; /* Alto del botón */
        display: flex; /* Usar Flexbox para centrar el icono */
        justify-content: center; /* Centrar horizontalmente */
        align-items: center; /* Centrar verticalmente */
        cursor: pointer; /* Cambiar el cursor al pasar el ratón */
        /*margin-left: 10px; /* Espacio a la izquierda del botón */
    }


    .carrusel_auxiliar2 h5{
        text-align: left;
    }
    .carrusel_auxiliar2 h5{
        text-align: left;
    }

    .carrusel_auxiliar2 .precio{
        font-size: 1.5em;
        font-weight: bold;
    }


</style>

<div style="" class="container carrusel_auxiliar2">
    <?php
    for ($i = 1; $i <= 4; $i++) { ?>
        <div class="row">
            <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                <?php
                // Generate variable names dynamically
                $articulo_var = $articulo . $grupo . '_' . $i;
                $images_articulo_var = 'images_' . $articulo_var;

                // Render the HTML
                echo '
                <div class=" mb-4"> 
                    <div class="custom-carousel-image-container">
                        <a id="image-link_' . $articulo_var . '" href="' . ${$images_articulo_var}[0]['href'] . '">
                            <img id="image_' . $articulo_var . '" src="' . ${$images_articulo_var}[0]['src'] . '" class="d-block custom-carousel-image" alt="' . ${$images_articulo_var}[0]['alt'] . '">
                        </a>
                    </div>
                </div>';
                ?>
            </div>

            <div class="col-xl-9 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                
                <div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
                    <?php
                    // Render the text or any other content here
                    echo '
                    <div style="display: flex; align-items: center;">
                        <div class="col-8 mb-2"> <hr>
                            <h5 style="margin: 0;">' . ${$images_articulo_var}[0]['alt'] . '</h5>
                            <p class="precio" style="margin: 0;">' . ${$images_articulo_var}[0]['precio'] . '€</p>
                        </div>
                    
                        <div class="col-4 mb-2 text-right">
                            <button class="arrow-button">
                                &rarr; <!-- Flecha hacia la derecha -->
                            </button>
                        </div><hr>
                    </div>
                    ';
                    ?>
                </div>
                
            </div>
        </div><?php
    }; ?>
</div>