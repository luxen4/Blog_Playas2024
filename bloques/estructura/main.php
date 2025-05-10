<!-- Contenido principal -->
<div class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->

        <div id="left-empty-column" class="d-none d-lg-block col-xl-2 col-lg-3 col-md-2 col-sm-2 content-wrapper">
            <?php require 'barra_navegacion.php'; // Barra de Navegación?>
        </div>

        <div id="central-column" class="col-xl-7 col-lg-9 col-md-12 col-sm-12 col-12 content-wrapper">
            <main>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_encabezado_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_descripcion-detallada_generico.php'; ?>
                <?php  require './../../../../bloques/estructura/sections_generico/deprecated/_actividades-recomendadas_generico.php'; ?>

                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mapa-ubicacion_generico.php'; ?>

                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_servicios_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/galeria-imagenes_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_eventos_festividades_generico.php'; ?>

                <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_preguntas_frecuentes.php'; ?>


                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mas-info_generico.php'; ?>
                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_jeans_man.php'; ?>

            </main>
        </div>


        <div id="right-column" class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 content-wrapper"> 
            <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_atuendo.php'; ?>
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