<!-- Contenido principal -->

<div style="max-width: 1240px;" class="container">

    <div class="row"> <!-- Añadido el contenedor de fila -->

        <div id="left-empty-column" class="d-none d-lg-block col-xl-2 col-lg-3 col-md-2 col-sm-2 content-wrapper">
            <?php require 'barra_navegacion.php'; // Barra de Navegación?>
        </div>

        <div id="central-column" class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 content-wrapper">

      <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN . '/breadcrums-playa.php'; ?>

            <main>

              <?php require PATH_RAIZ_LOCALIDADES_SECTIONS_VARIABLES . '/encabezado.php'; ?>

              <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_sports_shirts_hombre.php'; ?>
              <?php require PATH_RAIZ_LOCALIDADES_SECTIONS_VARIABLES . '/descripcion.php'; ?>

              <?php require PATH_BLOQUES_SECTIONS_GENERICO.'/helpers/render_bloques.php'; ?>

              <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN.'/renderizado-sections.php'; ?>
              <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_sneakers.php'; ?>

              <?php require PATH_BLOQUES_SECTIONS_GENERICO .'/galeria-imagenes_generico.php'; ?>
              <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_shorts_hombre.php'; ?>

              <?php require PATH_RAIZ_LOCALIDADES_SECTIONS_VARIABLES . '/mas-informacion.php'; ?>



            


            </main>

        </div>
 
        <div id="right-column" class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-3 content-wrapper"> 

            <?php //require './../../../../bloques/estructura/sections_generico/deprecated/_caracteristicas_generico.php'; ?>
            <?php //require './../../../../bloques/estructura/sections_generico/deprecated/_eventos_festividades_generico.php'; ?>
        </div>
    </div> 
</div>
 <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO . "/footer-generico.php"; ?>


<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>

