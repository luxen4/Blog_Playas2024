<?php

$schemaTitle       = "Laredo, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Laredo, en Cantabria: una de las playas más extensas del norte de España, su casco histórico, puerto y entorno natural junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/laredo/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/laredo/img/laredo-cantabria.jpg";

$latitude  = 43.4135;
$longitude = -3.4285;

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
    "addressLocality": "Laredo",
    "addressRegion": "Cantabria",
    "postalCode": "39770",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de La Salvé"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco Histórico de Laredo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Laredo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Monte Buciero (entorno)"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Laredo_(Cantabria)",
    "https://turismodecantabria.com"
  ]
}
</script>