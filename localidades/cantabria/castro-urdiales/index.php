<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Playa de Ostende</title>
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

<body>
  <div class="container my-5">
    <div class="row">
      <!-- Columna izquierda -->
      <div class="col-2">
        <!-- Puedes dejarla vacía o añadir navegación -->
      </div>

      <!-- Columna principal -->
      <div class="col-7">
        <?php require './fichas/sections/info.php' ?>

        <?= $li_encabezado ?>
        <hr>
        <?= $li_descripcion_detallada ?>
        <?= $li_descripcion_detallada2 ?>
        <?= $li_descripcion_detallada3 ?>
        <p style="margin-bottom: 10px;">
          Si visitas Castro Urdiales, no te pierdas algunos de sus rincones más emblemáticos. Desde monumentos históricos hasta espacios naturales y gastronómicos, aquí tienes una selección de lugares que merece la pena descubrir:
        </p>


<?php define('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES', "/Blog_Playas2024/localidades/cantabria/castro-urdiales/lugares-interes/"); ?>



        <div class="dropdown">
          <button class="dropdown-button">📍 Lugares de interés</button>
          <div class="dropdown-content">
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>asador-la-perla.php">Asador La Perla</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>castillo-santa-ana.php">Castillo de Santa Ana</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>club-nautico.php">Club Náutico</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>el-pedregal.php">El Pedregal</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>iglesia-santa-maria.php">Iglesia de Santa María</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>palacio-ochagaran.php">Palacio de Ochagarán</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>parque-amestoy.php">Parque Amestoy</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>paseo-maritimo.php">Paseo Marítimo</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>playa-ostende.php">Playa de Ostende</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>plaza-ayuntamiento.php">Plaza del Ayuntamiento</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>puente-medieval.php">Puente Medieval</a>
            <a href="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES ?>puerto.php">Puerto de Castro Urdiales</a>
          </div>
        </div>

        <?= $caja_eventosYfestividades ?>
        <?= $li_mapa_ubicacion ?>
        <?= $li_mas_info ?>
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
