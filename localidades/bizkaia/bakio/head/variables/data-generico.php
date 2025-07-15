<?php
    // Datos principales para la Playa de Bakio
    $descripcion = 'Descubre la Playa de Bakio en Bizkaia: una extensa playa abierta al mar Cantábrico, ideal para el surf, paseos y disfrutar del entorno natural, muy cerca de San Juan de Gaztelugatxe.';
    $url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$carpeta}/index.php";

    // Schema.org mainEntity (TouristDestination) para Playa de Bakio
    $mainEntity_description     = 'La Playa de Bakio es una de las más largas de la costa vizcaína, popular entre surfistas y turistas por su amplitud, servicios y cercanía con lugares emblemáticos como San Juan de Gaztelugatxe.';
    $mainEntity_addressLocality = 'Bakio';
    $mainEntity_addressRegion   = 'Bizkaia';
    $mainEntity_addressCountry  = 'España';

    // Coordenadas aproximadas de la Playa de Bakio
    $mainEntity_geo_latitude    = 43.4308;
    $mainEntity_geo_longitude   = -2.8078;

    // Imagen representativa y URL canónica para Playa de Bakio
    $mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$carpeta}/img/playa-de-bakio-1.jpg";
    $mainEntity_url   = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$carpeta}/index.php";
?>
<main class="container mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold text-gray-900 mb-6"><?php echo $lugar_header; ?></h1>

  <p class="mb-4 text-sm text-gray-700">
    <?php echo $descripcion; ?>
  </p>

  <section aria-labelledby="servicios-bakio" class="mb-8">
    <h2 id="servicios-bakio" class="text-xl font-semibold text-blue-700 mb-3">
      Servicios en la Playa de Bakio
    </h2>
    <p class="mb-4 text-sm text-gray-700">
      La Playa de Bakio ofrece una amplia gama de servicios para disfrutar de tu visita:
    </p>

    <ul class="list-none pl-0 space-y-2 text-gray-700 text-sm">
      <li class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12l5 5L20 7"/>
        </svg>
        Acceso peatonal y zonas de aparcamiento
      </li>
      <li class="flex items
