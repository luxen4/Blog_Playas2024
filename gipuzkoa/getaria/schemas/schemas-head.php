<?php

$schemaTitle       = "Getaria, Gipuzkoa – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Getaria, en Gipuzkoa: un encantador pueblo costero con puerto pesquero, casco histórico, viñedos de txakoli y playas junto al Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/getaria/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/getaria/img/getaria.jpg";

$latitude  = 43.3030;
$longitude = -2.2040;

?>

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Getaria",
    "addressRegion": "Gipuzkoa",
    "postalCode": "20808",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Getaria"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Getaria"
    },
    {
      "@type": "Beach",
      "name": "Playa de Gaztetape"
    },
    {
      "@type": "TouristAttraction",
      "name": "Monumento a Juan Sebastián Elcano"
    },
    {
      "@type": "TouristAttraction",
      "name": "Viñedos de txakoli"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Getaria",
    "https://turismo.euskadi.eus"
  ]
}
</script>