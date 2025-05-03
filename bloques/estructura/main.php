<!-- Contenido principal -->


<style>
#left-empty-column a.nav-link {
  color: #333; /* Color inicial del texto */
  padding: 0.5rem 1rem;
  display: block;
  text-decoration: none;
  transition: background-color 0.3s ease, color 0.3s ease;
  border-radius: 4px;
}

#left-empty-column a.nav-link:hover {
  background-color: #ffe9b3; /* Color tipo sol suave / arena clara */
  color: #000; /* Color más oscuro para contraste */
}

.main-content {
  margin-left: 220px; /* ajusta según el ancho del sidebar */
}



@media (max-width: 991.98px) {
  #left-empty-column {
    display: none;
  }
}

@media (max-width: 1399.98px) {
  #left-empty-column .nav-link {
    font-size: 0.75rem; /* Aproximadamente 14px */
  }
}


</style>




<div style="padding: 0px;" class="container">
    <div class="row"> <!-- Añadido el contenedor de fila -->

    <nav id="left-empty-column" class="d-none d-lg-block col-xl-2 col-lg-3 col-md-2 col-sm-2" aria-label="Navegación lateral de secciones de la playa">
    <h2 class="text-uppercase fw-bold mb-3">
        <i class="fas fa-map-signs me-2" style="color: #3498db;"></i> Navegación
    </h2>
    <ul class="navbar-nav mx-auto">
        <li>
            <a class="nav-link text-black" href="./../../../../index.php">
                <i class="fas fa-globe-europe me-1"></i> Todas Playas por Zonas
            </a>
        </li>
        <li>
            <a class="nav-link text-black" href="#informacion_general">
                <i class="fas fa-info-circle me-1"></i> Información General
            </a>
        </li>
        <li>
            <a class="nav-link text-black" href="#ubicacion">
                <i class="fas fa-map-marker-alt me-1"></i> Ubicación
            </a>
        </li>
        <li>
            <a class="nav-link text-black" href="#actividades">
                <i class="fas fa-swimmer me-1"></i> Actividades
            </a>
        </li>
        <li>
            <a class="nav-link text-black" href="#servicios">
                <i class="fas fa-concierge-bell me-1"></i> Servicios
            </a>
        </li>
        <li>
            <a class="nav-link text-black" href="#galeria">
                <i class="fas fa-images me-1"></i> Galería
            </a>
        </li>
        <li>
            <a class="nav-link text-black" href="#masinfo">
                <i class="fas fa-address-book me-1"></i> Más Información
            </a>
        </li>
        <li>
            <a class="nav-link text-black" href="./../../../../bloques/amazon_interfaz_enlaces.php">
                <i class="fas fa-link me-1"></i> Interfaz
            </a>
        </li>
    </ul>
</nav>

        <div id="central-column" class="col-xl-7 col-lg-6 col-md-7 col-sm-7 col-7 content-wrapper">
            <main>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_encabezado_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_descripcion-detallada_generico.php'; ?>
                <?php  require './../../../../bloques/estructura/sections_generico/deprecated/_actividades-recomendadas_generico.php'; ?>

                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mapa-ubicacion_generico.php'; ?>

                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_servicios_generico.php'; ?>
                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/galeria-imagenes_generico.php'; ?>
                <?php require './../../../../bloques/estructura/sections_generico/deprecated/_mas-info_generico.php'; ?>
                    <?php require './../../../../bloques/estructura/sections_generico/Carruseles_CSV/prueba_jeans_man.php'; ?>

            </main>
        </div>




        <div id="right-column" class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 content-wrapper"> 
            <?php require './../../../../bloques/estructura/sections_generico/deprecated/_caracteristicas_generico.php'; ?>
            <?php require './../../../../bloques/estructura/sections_generico/deprecated/_eventos_festividades_generico.php'; ?>




        </div>

    </div> <!-- Fin del contenedor de fila -->
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
                
<?php 
// $archivoCSV = 'amazon_shorts_images.csv';
// require './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba.php'; 
// include './../../../../bloques/estructura/sections_generico/csv_publicidad_amazon/prueba2.php'; ?>









<?php //require './../../../../bloques/estructura/sections_generico/generico.php'; ?>

<?php //require './../../../../bloques/estructura/anuncios/lista_productos.php'; ?>

<?php /* $anuncios = 'no'; $articulosMostrados = []; */?>

<?php /*
    $li_variable = $li_actividades_recomendadas;

    if (!empty($li_actividades_recomendadas2)) {
        $li_variable2 = $li_actividades_recomendadas2;
        
    }

    if (!empty($li_actividades_recomendadas3)) {
        $li_variable3 = $li_actividades_recomendadas3;
    } ?>


    <?php 
    $li_variable2 = ''; $li_variable3 = '';
    require './../../../../bloques/estructura/sections_generico/generico.php'; ?>

    
    <?php 
    $li_variable = $li_services;
    if (!empty($li_services2)) {
        $li_variable2 = $li_services2;
    }
    if (!empty($li_services3)) {
        $li_variable3 = $li_services3;
    } */ 
?>



<?php /*
    $li_variable = $li_mas_info;
    if (!empty($li_mas_info2)) {
        $li_variable2 = $li_mas_info2;
    }
    if (!empty($li_mas_info3)) {
        $li_variable3 = $li_mas_info3;
    }*/
?>