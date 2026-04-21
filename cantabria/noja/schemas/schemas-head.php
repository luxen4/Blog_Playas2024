<?php

$schemaTitle       = "Noja, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Noja, en Cantabria: playas de arena dorada como Trengandín y Ris, marismas protegidas y naturaleza en estado puro en la costa del mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/noja/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/noja/img/noja-cantabria.jpg";

$latitude  = 43.4790;
$longitude = -3.5170;

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
    "addressLocality": "Noja",
    "addressRegion": "Cantabria",
    "postalCode": "39180",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Trengandín"
    },
    {
      "@type": "Beach",
      "name": "Playa de Ris"
    },
    {
      "@type": "TouristAttraction",
      "name": "Marismas de Noja"
    },
    {
      "@type": "TouristAttraction",
      "name": "Paseo Marítimo de Noja"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Noja",
    "https://turismodecantabria.com"
  ]
}
</script>