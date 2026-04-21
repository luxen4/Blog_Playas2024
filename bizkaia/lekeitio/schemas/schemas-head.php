<?php

$schemaTitle       = "Lekeitio, País Vasco – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Lekeitio, en Bizkaia: un encantador pueblo pesquero con playas, la isla de San Nicolás, su puerto tradicional y un casco histórico junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/pais-vasco/lekeitio/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/pais-vasco/lekeitio/img/lekeitio-cantabria.jpg";

$latitude  = 43.3656;
$longitude = -2.5050;

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
    "addressLocality": "Lekeitio",
    "addressRegion": "Bizkaia",
    "postalCode": "48280",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "TouristAttraction",
      "name": "Isla de San Nicolás"
    },
    {
      "@type": "Beach",
      "name": "Playa de Isuntza"
    },
    {
      "@type": "Beach",
      "name": "Playa de Karraspio"
    },
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Lekeitio"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Lekeitio",
    "https://turismo.euskadi.eus"
  ]
}
</script>