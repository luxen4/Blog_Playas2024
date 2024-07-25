<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carousel Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<div id="carouselExampleIndicators" class="carousel slide custom" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_1" href="<?php echo $images_sneakers_2_1[0]['href']; ?>">
                            <img id="image_sneakers_2_1" src="<?php echo $images_sneakers_2_1[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_1[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_2" href="<?php echo $images_sneakers_2_2[0]['href']; ?>">
                            <img id="image_sneakers_2_2" src="<?php echo $images_sneakers_2_2[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_2[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_3" href="<?php echo $images_sneakers_2_3[0]['href']; ?>">
                            <img id="image_sneakers_2_3" src="<?php echo $images_sneakers_2_3[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_3[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sneakers_2_4" href="<?php echo $images_sneakers_2_4[0]['href']; ?>">
                            <img id="image_sneakers_2_4" src="<?php echo $images_sneakers_2_4[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sneakers_2_4[0]['alt']; ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sandals_man_1_1" href="<?php echo $images_sandals_man_1_1[0]['href']; ?>">
                            <img id="image_sandals_man_1_1" src="<?php echo $images_sandals_man_1_1[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sandals_man_1_1[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sandals_man_1_2" href="<?php echo $images_sandals_man_1_2[0]['href']; ?>">
                            <img id="image_sandals_man_1_2" src="<?php echo $images_sandals_man_1_2[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sandals_man_1_2[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sandals_man_1_3" href="<?php echo $images_sandals_man_1_3[0]['href']; ?>">
                            <img id="image_sandals_man_1_3" src="<?php echo $images_sandals_man_1_3[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sandals_man_1_3[0]['alt']; ?>">
                        </a>
                    </div>

                    <div class="col-xl-3 text-center col-lg-6 col-md-6 col-sm-6 col-6">
                        <a id="image-link_sandals_man_1_4" href="<?php echo $images_sandals_man_1_4[0]['href']; ?>">
                            <img id="image_sandals_man_1_4" src="<?php echo $images_sandals_man_1_4[0]['src']; ?>" class="d-block w-100" alt="<?php echo $images_sandals_man_1_4[0]['alt']; ?>">
                        </a>
                    </div>
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

<!-- Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
