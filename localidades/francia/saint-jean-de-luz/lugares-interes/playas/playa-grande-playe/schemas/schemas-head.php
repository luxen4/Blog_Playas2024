<?php
// schemas-head.php
$schemaBeach = [
  "@context" => "https://schema.org",
  "@type" => "Beach",
  "name" => $nombre_playa, // Ej: "Playa El Pedregal"
  "description" => $descripcion_playa, // Ej: "Cala tranquila de cantos rodados en Castro Urdiales..."
  "image" => [
    $imagen1_url, // URL completa
    $imagen2_url
  ],
  "address" => [
    "@type" => "PostalAddress",
    "streetAddress" => $direccion_playa, // Ej: "Barrio de Brazomar"
    "addressLocality" => $localidad, // Ej: "Castro Urdiales"
    "addressRegion" => $region, // Ej: "Cantabria"
    "postalCode" => $codigo_postal, // Ej: "39700"
    "addressCountry" => "ES"
  ],
  "geo" => [
    "@type" => "GeoCoordinates",
    "latitude" => $latitud, // Ej: 43.3865
    "longitude" => $longitud // Ej: -3.2161
  ],
  "url" => $url_pagina_playa
];
?>

<script type="application/ld+json">
<?= json_encode($schemaBeach, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
