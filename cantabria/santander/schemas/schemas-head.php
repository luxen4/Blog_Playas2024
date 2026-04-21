<?php

$schemaTitle       = "Santander, Cantabria – Turismo urbano, playas y bahía del norte de España";
$schemaDescription = "Descubre Santander, en Cantabria: la capital costera con playas como El Sardinero, el Palacio de la Magdalena, su bahía y un entorno cultural y natural único junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/santander/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/santander/img/santander-cantabria.jpg";

$latitude  = 43.4623;
$longitude = -3.8099;

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
    "addressLocality": "Santander",
    "addressRegion": "Cantabria",
    "postalCode": "39001",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa del Sardinero"
    },
    {
      "@type": "Beach",
      "name": "Playa de la Magdalena"
    },
    {
      "@type": "TouristAttraction",
      "name": "Palacio de la Magdalena"
    },
    {
      "@type": "TouristAttraction",
      "name": "Centro Botín"
    },
    {
      "@type": "Place",
      "name": "Bahía de Santander"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Santander",
    "https://turismodecantabria.com"
  ]
}
</script>