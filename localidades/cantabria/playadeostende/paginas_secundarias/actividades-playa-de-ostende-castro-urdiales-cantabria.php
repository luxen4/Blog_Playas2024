<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Actividades en la Playa de Ostende – Castro-Urdiales</title>

    <?php $region_minuscula = 'cantabria'; $carpeta = 'playadeostende'; $tema='actividades-recomendadas';?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS. "/head-generico-paginas-secundarias.php";?> 
    
  </head>

  <body>
      <?php require PATH_RAIZ_LOCALIDADES_CARPETA_PAGINAS_SECUNDARIAS_HEADER . "/barra-navegacion-paginas-secundarias.php"; ?>

      <main id="main-content" role="main" class="py-5">
        <div class="container">
            <?php require PATH_RAIZ_LOCALIDADES_CARPETA_SECTIONS_VARIABLES.'/actividades-recomendadas.php'; ?> 
        </div>
      </main>

      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA."/footer.php";  ?>
      
      <?php require  PATH_RAIZ. "/anuncios/pop-up-publicitario2.php"; ?>
      <?php require  PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>

   </body>

</html>

<?php //require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_vaqueros_hombre.php'; ?>