<?php require "./../../../../bloques/estructura/header.php"; ?>

<a class="nav-link text-red" href='/Blog_Playas2024/localidades/<?= $region_minuscula ?>/<?= $carpeta; ?>/fichas/playa-de-<?= $nombre_playa_minuscula ."-"  .$localidad_minuscula. "-" .$region_minuscula  ?>.php' target="_blank">Playa de <?= $nombre_playa; ?></a>

<?php require './../../../../localidades/'. $region_minuscula .'/'. $carpeta. '/fichas/sections/variables/actividades-recomendadas.php'; ?> 
<?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
<?php require "./../../../../bloques/estructura/footer.php"; ?>