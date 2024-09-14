<!-- Servicios Generico-->
<section id="servicios" class="content-section">
    <h2 class="section-header">Servicios en la Playa de <?= $localidad; ?></h2>
    <div class="info-box">
        <ul class="list-unstyled">
            <?= $li_services; ?>
            <?php
            $articulo = $productos[array_rand($productos)];
            include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
            ?>

            <?php
            if (isset($li_services2)) {
                $es_segundo_carrusel = '';
                echo ($li_services2);
                $articulo = $productos[array_rand($productos)];
                include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
            }
            ?>

            <?php
            if (isset($li_services3)) {
                echo ($li_services3);
                $articulo = $productos[array_rand($productos)];
                include "./../../../../../bloques/estructura/carrusel_auxiliar.php";
            }
            ?>
        </ul>
    </div>
</section>