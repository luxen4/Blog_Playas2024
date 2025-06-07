<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Castro-Urdiales</title>
  <meta name="description" content="Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.">
  <meta name="keywords" content="Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-button {
      background-color: #2980b9;
      color: white;
      padding: 10px 20px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      border-radius: 8px;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 220px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 8px;
      padding: 10px 0;
    }
    .dropdown-content a {
      color: #333;
      padding: 8px 20px;
      text-decoration: none;
      display: block;
      transition: background-color 0.3s;
    }
    .dropdown-content a:hover {
      background-color: #e0e0e0;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>

<?php
// Variables para las etiquetas meta y SEO
    $site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be'; // Asegúrate de que este código es correcto para Ostende si se utiliza para verificación
    $description_content = 'Descubre la Playa de Ostende, un hermoso arenal en Cantabria, perfecto para relajarse, practicar deportes acuáticos y disfrutar de la naturaleza.';
    $keywords_content = 'Playa de Ostende, surf, naturaleza, Costa Cantábrica, turismo en Cantabria, Ostende'; ?>


  <?php // Variables para la página de la Playa de Ostende ?>
<?php $region_minuscula = 'cantabria'; $carpeta = 'castro-urdiales'; $tema='Información Castro-Urdiales';?>


   <?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2024/bloques/estructura/variables_comunes/defines.php"; ?>   
   <?php require PATH_RAIZ_LOCALIDADES_CARPETA . '/localizacion-localidad.php'; ?>

<?php require PATH_RAIZ_LOCALIDADES_CARPETA_WEB_PLAYA. "/grupo1/index.php"; ?>

<?php require PATH_RAIZ_BLOQUES_ESTRUCTURA. "/head-generico-playa.php"; ?>


<body>
  <div class="container py-5">




    <div class="row">
      <!-- Columna izquierda -->
      <div class="col-2">
        <!-- Puedes dejarla vacía o añadir navegación -->
      </div>

      <!-- Columna principal -->
      <div class="col-7">
      <?php require PATH_RAIZ_ESTRUCTURA_PAGINAS_PRINCIPALES_BODY_MAIN . '/breadcrums-playa.php'; ?>

      <h1 class="text-primary mb-4">Castro-Urdiales</h1>
        <?php require './fichas/sections/info.php' ?>

        <?= $li_encabezado ?>
        <hr>
        <?= $li_descripcion_detallada ?>
        <?= $li_descripcion_detallada2 ?>
        <?= $li_descripcion_detallada3 ?>
        <p style="margin-bottom: 10px;">
          Si visitas Castro Urdiales, no te pierdas algunos de sus rincones más emblemáticos. Desde monumentos históricos hasta espacios naturales y gastronómicos, aquí tienes una selección de lugares que merece la pena descubrir:
        </p>


        <!-- Sección Lugares de Interés -->
<section id="lugares-interes" class="my-5">
  <header class="text-center mb-4">
    <h2 class="text-secondary">📍 Lugares de Interés en Castro Urdiales</h2>
    <p>Descubre los rincones más emblemáticos de la ciudad y su entorno costero.</p>
  </header>
  <div class="row row-cols-1 row-cols-md-2 g-3">
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>asador-la-perla.php" class="d-block text-decoration-none text-primary">Asador La Perla</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>castillo-santa-ana.php" class="d-block text-decoration-none text-primary">Castillo de Santa Ana</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>club-nautico.php" class="d-block text-decoration-none text-primary">Club Náutico</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>el-pedregal.php" class="d-block text-decoration-none text-primary">El Pedregal</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>iglesia-santa-maria.php" class="d-block text-decoration-none text-primary">Iglesia de Santa María</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>palacio-ochagaran.php" class="d-block text-decoration-none text-primary">Palacio de Ochagarán</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>parque-amestoy.php" class="d-block text-decoration-none text-primary">Parque Amestoy</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>paseo-maritimo.php" class="d-block text-decoration-none text-primary">Paseo Marítimo</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>playa-ostende.php" class="d-block text-decoration-none text-primary">Playa de Ostende</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>plaza-ayuntamiento.php" class="d-block text-decoration-none text-primary">Plaza del Ayuntamiento</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>puente-medieval.php" class="d-block text-decoration-none text-primary">Puente Medieval</a>
    </div>
    <div class="col">
      <a href="<?= PATH_RAIZ_LOCALIDAD_LUGARES_INTERES ?>puerto.php" class="d-block text-decoration-none text-primary">Puerto de Castro Urdiales</a>
    </div>
  </div>
</section>


        <?= $caja_eventosYfestividades ?>
        <?= $li_mapa_ubicacion ?>
        <?= $li_mas_info ?>

        <a href="/Blog_Playas2024/index.php#<?= $region_minuscula; ?>" class="btn btn-outline-primary mt-3">← Home</a>
   
      </div>

        <!-- Columna lateral derecha -->
        <div class="col-3">
            <?= $caja_caracteristicas ?>
        </div>      
      


 
    </div>

  </div>

  <footer class="text-center bg-light py-4">
    <p>&copy; <?= date('Y') ?> Castro Urdiales Turismo</p>
  </footer>

  <!-- Bootstrap JS (opcional para funcionalidades como collapses, modals, etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
