<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_SECUNDARIAS_HEADER . "/barra-navegacion-paginas-secundarias.php"; ?>


<main id="main-content" role="main" class="main-contenido-limitado">
  <div class="container">
    <?php //require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_ACTIVIDADES_RECOMENDADAS."/{$tema}.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_SUBCARPETA."/section.php"; ?>
   
  <!-- Enlace que solo cierra la pestaña -->
  <div class="text-center mb-3">
      <a class="nav-link text-success fw-bold"
        href="#"
        onclick="window.close(); return false;">
        Playa de <?= $nombre_playa; ?>
      </a>
  </div>

  </div>
</main>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA."/paginas-generico/footer.php";  ?>

<?php require  PATH_RAIZ. "/anuncios/pop-up-publicitario2.php"; ?>


<style>
.main-contenido-limitado {
  max-width: 900px;
  margin: 0 auto;
  padding-left: 15px;
  padding-right: 15px;
}</style>







<?php /*
<!-- Enlace a la ficha de la playa -->
<div class="text-center mb-3">
    <a class="nav-link text-success fw-bold" 
       href="/Blog_Playas2024/localidades/<?= $region_minuscula ?>/<?= $carpeta; ?>/index.php" 
       target="_blank"
       onclick="window.open(this.href, '_blank'); window.close(); return false;">
        Playa de <?= $nombre_playa; ?>
    </a>
</div> */?>