<?php //h3 style="text-align: left;"><?= $localidad; </h3>?>

<p class="text-left text-justify text-gray-700 leading-relaxed mb-4">
    <?= $presentacion; ?>
</p>

 
<a 
<?php if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
        href="<?= PATH_HREF_RAIZ ?>/<?= $carpeta; ?>"<?php
    } else { ?>
        href="<?= $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS ?>/index.php"   <?php 
    }?>
   target="_blank" 
   class="inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-200">Más infoo...</a>



<!--<a href="<?= PATH_HREF_RAIZ ?>/ruta-costera-ostende"-->