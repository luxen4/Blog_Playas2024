<?php
// Vamos a alternar entre 3 camisas Hawaianas diferentes //
$alt_general10 = 'Imagen de una Camisa Hawaiana';

// slider carrusel item-1
$images_zapatillas_1_1 = [
    [
        "href" => "https://amzn.to/3S9AhWL",
        "src" => "https://m.media-amazon.com/images/I/81-lvYlaSyL._AC_SX625_.jpg",
        "alt" => $alt_general10
    ],
    [
        "href" => "https://amzn.to/466sU8u",
        "src" => "https://m.media-amazon.com/images/I/71njNKZR-lL._AC_SY625_.jpg",
        "alt" => $alt_general10
    ],
    [
        "href" => "https://amzn.to/4cYxHe9",
        "src" => "https://m.media-amazon.com/images/I/61ZVCTB9t7L._AC_SY625_.jpg",
        "alt" => $alt_general10
    ],

    [
        "href" => "https://amzn.to/4bLc5Rs",
        "src" => "https://m.media-amazon.com/images/I/41Lipuk4-pL._AC_SY625_.jpg",
        "alt" => $alt_general10
    ]
]; 

/* Completar con más zapatillas
$images_zapatillas_1_2
$images_zapatillas_1_3
$images_zapatillas_1_4 */



//idem
// slider carrusel item-2
//$images_camisas

// slider carrusel item-3
//$images_shorts




?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div style="display: flex;">

                <a id="image-link10" href="<?php echo $images_zapatillas_1_1[0]['href']; ?>">
                    <img id="image10" src="<?php echo $images_zapatillas_1_1[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_zapatillas_1_1[0]['alt']; ?>">
                </a>

                <a href="https://amzn.to/466sU8u">
                    <img src="https://m.media-amazon.com/images/I/71njNKZR-lL._AC_SY625_.jpg" class="d-block w-100" alt="Anuncio 1">
                </a>

                <a href="https://amzn.to/4cYxHe9">
                    <img src="https://m.media-amazon.com/images/I/61ZVCTB9t7L._AC_SY625_.jpg" class="d-block w-100" alt="Anuncio 1">
                </a>

                <a href="https://amzn.to/4bLc5Rs">
                    <img src="https://m.media-amazon.com/images/I/41Lipuk4-pL._AC_SY625_.jpg" class="d-block w-100" alt="Anuncio 1">
                </a>

            </div>


        </div>

        <div class="carousel-item">
            <div style="display: flex;">

                <a id="image-link10" href="<?php echo $images_zapatillas_1_1[0]['href']; ?>">
                    <img id="image10" src="<?php echo $images_zapatillas_1_1[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_zapatillas_1_1[0]['alt']; ?>">
                </a>

                <a href="https://amzn.to/466sU8u">
                    <img src="https://m.media-amazon.com/images/I/71njNKZR-lL._AC_SY625_.jpg" class="d-block w-100" alt="Anuncio 1">
                </a>

                <a href="https://amzn.to/4cYxHe9">
                    <img src="https://m.media-amazon.com/images/I/61ZVCTB9t7L._AC_SY625_.jpg" class="d-block w-100" alt="Anuncio 1">
                </a>

                <a href="https://amzn.to/4bLc5Rs">
                    <img src="https://m.media-amazon.com/images/I/41Lipuk4-pL._AC_SY625_.jpg" class="d-block w-100" alt="Anuncio 1">
                </a>

            </div>
        </div>


        <div class="carousel-item">

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

<!-- Enlaza el JavaScript de Bootstrap y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    const images_zapatillas_1_1 = <?php echo json_encode($images_zapatillas_1_1); ?>;

    let currentIndex10 = 0;

    function changeImage10() {
        currentIndex10 = (currentIndex10 + 1) % images_zapatillas_1_1.length;
        document.getElementById('image-link10').href = images_zapatillas_1_1[currentIndex10].href;
        document.getElementById('image10').src = images_zapatillas_1_1[currentIndex10].src;
        document.getElementById('image10').alt = images_zapatillas_1_1[currentIndex10].alt;
    }


    function changeImages_zapatillas_1_1() {
        changeImage10();
    }

    setInterval(changeImages_zapatillas_1_1, 2000);
</script>