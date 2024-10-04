<style>
    .custom-carousel-image-container {
        margin: 15px;
        padding: 6em;
        display: flex; /* Usar Flexbox para alinear imagen y texto */
        align-items: center; /* Centrar verticalmente */
        justify-content: center; /* Centrar horizontalmente */
        overflow: hidden; /* Para evitar que la imagen se desborde */
        position: relative; /* Necesario para el posicionamiento absoluto de la imagen */
    }

        /* Media query para pantallas grandes */
        @media (min-width: 768px) {
        .custom-carousel-image-container {
            padding: 8em; /* Padding para pantallas grandes */
        }
    }
    .custom-carousel-image {
        width: 100%; /* Hacer que la imagen ocupe todo el ancho del contenedor */
        height: 100%; /* Hacer que la imagen ocupe todo el alto del contenedor */
        object-fit: cover; /* Mantener la proporción y recortar si es necesario */
        position: absolute; /* Posicionar la imagen dentro del contenedor */
        top: 0; /* Alinear al top */
        left: 0; /* Alinear al left */
    }

    .arrow-button {
        background-color: white; /* Color de fondo del botón */
        color: red; /* Color del texto */
        border-radius: 50%; /* Bordes redondeados */
        width: 40px; /* Ancho del botón */
        height: 40px; /* Alto del botón */
        display: flex; /* Usar Flexbox para centrar el icono */
        justify-content: center; /* Centrar horizontalmente */
        align-items: center; /* Centrar verticalmente */
        cursor: pointer; /* Cambiar el cursor al pasar el ratón */
    }

    .carrusel_auxiliar2 h5 {
        text-align: center; /* Centrar texto en móviles */
    }

    .carrusel_auxiliar2 .precio {
        font-size: 1.5em;
        font-weight: bold;
        text-align: center; /* Centrar precio */
    }

    @media (min-width: 768px) {
        .custom-carousel-image-container {
            flex-direction: row; /* Cambiar a fila en pantallas más grandes */
        }
    }
</style>

<div class="container carrusel_auxiliar2">
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
                <div class="mb-4"> 
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
                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div class="col-9 mb-2 text-left">
                            <h5 style="margin: 0;">' . ${$images_articulo_var}[0]['marca'] . '</h5>
                            <p class="precio" style="margin: 0;">' . ${$images_articulo_var}[0]['precio'] . '€</p>
                        </div>
                    
                        <div class="col-3 mb-2 text-right">
                            <button class="arrow-button">
                                &rarr; <!-- Flecha hacia la derecha -->
                            </button>
                        </div>
                    </div>
                    ';
                    ?>
                </div>
            </div>
        </div><?php
    }; ?>
</div>