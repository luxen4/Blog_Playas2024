<h3 id="<?= $localidad_minuscula ?>" 
    class="text-2xl md:text-2xl font-bold text-left text-<?= $color_page; ?>-800 mb-6 underline">
    <a 
        <?php
        if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
            href="<?= PATH_HREF_RAIZ.'/'.$localidad_minuscula.'-'.$region_minuscula ?>"<?php
        } else { ?>
            href= <?= PATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD ."/index.php"; }?>
            class="hover:text-<?= $color_page; ?>-600 transition-colors duration-200">
        <?= $localidad; ?>
    </a>
</h3>