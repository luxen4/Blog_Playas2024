<!-- Contenido principal -->

<div style="max-width: 1240px;" class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->

        <div id="left-empty-column" class="d-none d-lg-block col-xl-2 col-lg-3 col-md-2 col-sm-2 content-wrapper">
            <?php require 'barra_navegacion.php'; // Barra de Navegación?>
        </div>

        <div id="central-column" class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>

              <?php require PATH_BLOQUES_SECTIONS_GENERICO . '/deprecated/_encabezado_generico.php'; ?>
              <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_sports_shirts_hombre.php'; ?>
              <?php require PATH_BLOQUES_SECTIONS_GENERICO . '/deprecated/_descripcion-detallada_generico.php'; ?>

              <?php require PATH_BLOQUES_SECTIONS_GENERICO.'/helpers/render_bloques.php'; ?>

              <?php require PATH_RAIZ_LOCALIDADES_MAIN.'/bloque_con_boton_actividades.php'; ?>
              <?php require PATH_RAIZ_LOCALIDADES_MAIN.'/bloque_con_boton_como_llegar.php'; ?>
              <?php require PATH_RAIZ_LOCALIDADES_MAIN.'/bloque_con_boton_servicios.php'; ?>
              <?php require PATH_RAIZ_LOCALIDADES_MAIN.'/bloque_con_boton_eventos_festividades.php'; ?>

              <?php require PATH_RAIZ_LOCALIDADES_MAIN.'/bloque_con_boton_faqs_consejos.php'; ?>
              <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_sneakers.php'; ?>

              <?php require PATH_BLOQUES_SECTIONS_GENERICO .'/galeria-imagenes_generico.php'; ?>
              <?php require PATH_BLOQUES_SECTIONS_CARRUSELES_CSV.'/prueba_shorts_hombre.php'; ?>

              <?php require PATH_BLOQUES_SECTIONS_GENERICO .'/deprecated/_mas-info_generico.php'; ?>

            </main>
        </div>

        <div id="right-column" class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-3 content-wrapper"> 

            <?php //require './../../../../bloques/estructura/sections_generico/deprecated/_caracteristicas_generico.php'; ?>
            <?php //require './../../../../bloques/estructura/sections_generico/deprecated/_eventos_festividades_generico.php'; ?>
        </div>
    </div> 
</div>


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

